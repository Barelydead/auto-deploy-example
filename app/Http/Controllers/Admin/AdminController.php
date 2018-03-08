<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use App\User;
use App\Paginator as Paginator;
use App\Form\UploadImage as UploadImage;



class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getIndex()
    {
        return view("admin/index");
    }


    public function getUsers() {
        if (!Auth::user()->admin) {
            return redirect()->intended('/admin');
        }

        $users = DB::table('users')->get();

        return view('admin/user/edit-users', ["users" => $users]);
    }

    public function editUser($id) {
        if (!Auth::user()->admin) {
            return redirect()->intended('/admin');
        }

        $user = DB::table('users')->Where('id', $id)->first();

        return view('admin/user/edit-user-form', ["user" => $user]);
    }

    public function editUserProcess(Request $request) {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
        ]);

        $post['name'] = $request->post('name');
        $post['email'] = $request->post('email');
        $post['admin'] = $request->post('admin');
        $post['id'] = $request->post('id');

        DB::table('users')
            ->Where('id', $post['id'])
            ->update([
                'name' => $post['name'],
                'email' => $post['email'],
                'admin' => $post['admin']
            ]);

        return back()->with('status', 'Profile updated!');
    }


    public function editUserPassword(Request $request) {
        $request->validate([
            'password' => 'required|string|min:6',
            're-password' => 'same:password',
        ]);

        $post['password'] = $request->post('password');
        $post['re-password'] = $request->post('re-password');
        $post['id'] = $request->post('id');

        DB::table('users')
            ->Where('id', $post['id'])
            ->update([
                'password' => bcrypt($post['password'])
            ]);


        return back()->with('status', 'Password updated.');
    }

    public function getPasswordForm() {
        $id = Auth::user()->id;

        return view('admin/user/change-password', ['id' => $id]);
    }

    public function changePasswordProccess(Request $request) {
        $request->validate([
            'password' => 'required|string|min:6',
            're-password' => 'required|same:password',
            'old-password' => 'required|string',
        ]);

        $post['password'] = $request->post('password');
        $post['re-password'] = $request->post('re-password');
        $post['old-password'] = $request->post('old-password');
        $post['id'] = $request->post('id');

        // Get old password and check match
        $user = DB::table('users')->Where('id', $post['id'])->first();
        if (Hash::check($post['old-password'], $user->password)) {
            // insert new hashed pass to DB
            $newHash = bcrypt($post['password']);

            DB::table('users')
                ->Where('id', $post['id'])
                ->Update([
                    'password' => $newHash
                ]);

            return back()->with('status', 'Password updated.');
        } else {
            return back()->withErrors('The old password does not match');
        }
    }


    public function addUserProcess(Request $request) {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|unique:users|email',
            'password' => 'required|string|min:6',
            'password_confirmation' => 'same:password',
            'admin' => 'required'
        ]);

        $post['name'] = $request->post('name');
        $post['password'] = $request->post('password');
        $post['password_confirmation'] = $request->post('password_confirmation');
        $post['email'] = $request->post('email');
        $post['admin'] = $request->post('admin');

        DB::table('users')
            ->insert([
                'name' => $post['name'],
                'password' => bcrypt($post['password']),
                'email' => $post['email'],
                'admin' => $post['admin'],
                'created_at' => \Carbon\Carbon::now()
            ]);


        return back()->with('status', 'New user was created');
    }

    // public function getContent($category)

    // public function getContent($category)
    // {
    //     $content = DB::select('select * from content WHERE category LIKE ?', [$category]);
    //     return view("admin/content/viewcontent", ["content" => $content, "category" => $category]);
    // }

    public function getContent(Request $request, $category)
    {
        $paginator = new Paginator();

        /*---------------------------------------------*/

        // Link for all content convertet to wildcard search
        $tablecategory = $category;
        if ($category == 'all') {
            $tablecategory = '%%';
        }

        /*---------------------------------------------*/

        $tblprop = [
            "pages"         => ($request->get('pages') != null) ? htmlentities($request->get('pages')) : 5,
            "searchcolumn"  => ($request->get('searchcolumn') != null) ? htmlentities($request->get('searchcolumn')) : 'category',
            "search"        => ($request->get('search') != null) ? htmlentities($request->get('search')) : $tablecategory,
            "orderby"       => ($request->get('orderby') != null) ? htmlentities($request->get('orderby')) : 'id',
            "orderas"       => ($request->get('orderas') != null) ? htmlentities($request->get('orderas')) : 'ASC',
        ];
        $pagenum            = ($request->get('pn')) ? preg_replace('#[^0-9]#', '', $request->get('pn')) : 1;

        /*---------------------------------------------*/

        // If resetbutton clicked -> reset $tblprop
        if (isset($_POST['allbtn'])) {
            $tblprop = [
                "pages"         =>  5,
                "searchcolumn"  =>  'category',
                "search"        =>  $tablecategory,
                "orderby"       =>  'id',
                "orderas"       =>  'ASC',
            ];
        }

        /*---------------------------------------------*/

        $tableHTML = $paginator->paginator('content', $tblprop, $pagenum);

        /*---------------------------------------------*/

        $data = [
            "tableHTML"     => $tableHTML,
            "category"      => $category
        ];

        return view("admin/content/viewcontent", $data);
    }

    public function editContent($id)
    {
        $content = DB::select('select * from content WHERE id LIKE ?', [$id]);
        return view("admin/content/edit", ["content" => $content]);
    }

    public function editContentProcess(Request $request)
    {

        $image = $request->file('image');

        $data['id'] = $request->post('id');
        $data['category'] = $request->post('category');
        $data['title'] = $request->post('title');
        $data['imgurl'] = $request->post('imgurl');
        $data['content'] = $request->post('content');


        $data['id']         = $request->post('id');
        $data['category']   = $request->post('category');
        $data['title']      = $request->post('title');
        $data['imgurl']     = $request->post('imgurl');
        $data['content']    = $request->post('content');
        $data['imgurl']     = $request->post('currentImage');

        /*--------------------------------------------*/

        $image = $request->file('image');
        if ($image != null && $image->getClientOriginalName() != '') {
            $uImage = new UploadImage($image, $data['category']);
            $uImage->uploadImage();
            $data['imgurl']     = $request->post('category') . "/" . $image->getClientOriginalName();
        }
        if ($request->has('imageremove')) {
            $data['imgurl'] = null;
        }
        /*--------------------------------------------*/

        if(isset($_POST['editbtn'])) {
            DB::table('content')
                ->where('id', $data['id'])
                ->update([
                    'title'     => $data['title'],
                    'imgurl'    => $data['imgurl'],
                    'content'   => $data['content']
                ]);
        }

        $returnurl = "admin/content/".$data['category'];
        return redirect($returnurl);
    }

    public function addContent(Request $request)
    {
        $selected = [
            'home'          => ($request->get('category') == 'home') ? "selected" : "",
            'about'         => ($request->get('category') == 'about') ? "selected" : "",
            'applications'  => ($request->get('category') == 'applications') ? "selected" : "",
            'future'        => ($request->get('category') == 'future') ? "selected" : "",
            'research'      => ($request->get('category') == 'research') ? "selected" : "",
            'products'      => ($request->get('category') == 'products') ? "selected" : ""
        ];
        return view("admin/content/add", ['selected' => $selected]);
    }

    public function addContentProcess(Request $request)
    {
        $data['type']           = $request->post('type');
        $data['category']       = $request->post('category');
        $data['subcategory']    = $request->post('subcategory');
        $data['title']          = $request->post('title');
        $data['content']        = $request->post('content');
        $data['author']         = $request->post('author');
        $data['path']           = $request->post('path');
        $data['imgurl']         = $request->post('image');

        /*--------------------------------------------*/

        $image = $request->file('image');
        if ($request->hasFile('image')) {
            $uImage = new UploadImage($image, $data['category']);
            $uImage->uploadImage();
            $data['imgurl'] = $request->post('category') . "/" . $image->getClientOriginalName();
        }
        /*--------------------------------------------*/

        DB::table('content')->insert(
            [
                'type' => $data['type'],
                'category' => $data['category'],
                'subcategory' => $data['subcategory'],
                'title' => $data['title'],
                'content' => $data['content'],
                'author' => $data['author'],
                'path' => $data['path'],
                'imgurl' => $data['imgurl']
            ]
        );

            $returnurl = "admin/content/".$data['category'];
            return redirect($returnurl);
    }
}
