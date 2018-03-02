<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\User;

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
        return view("Admin/index");
    }


    public function getUsers() {
        $users = DB::table('users')->get();

        return view('admin/user/edit-users', ["users" => $users]);
    }

    public function editUser($id) {
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
        $post['id'] = $request->post('id');

        DB::table('users')
            ->Where('id', $post['id'])
            ->update([
                'name' => $post['name'],
                'email' => $post['email']
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


    public function getNewUserForm()
    {
        return view("admin/user/new-user");
    }

    public function getContent($category)
    {
        $content = DB::select('select * from content WHERE category LIKE ?', [$category]);
        return view("Admin/content/viewcontent", ["content" => $content, "category" => $category]);
    }

    public function editContent($id)
    {
        $content = DB::select('select * from content WHERE id LIKE ?', [$id]);
        return view("Admin/content/edit", ["content" => $content]);
    }

    public function editContentProcess(Request $request)
    {
        $data['id'] = $request->post('id');
        $data['category'] = $request->post('category');
        $data['title'] = $request->post('title');
        $data['content'] = $request->post('content');

        /*--------------------------------------------*/

        DB::table('content')
            ->where('id', $data['id'])
            ->update([
                'title'     => $data['title'],
                'content'   => $data['content']
            ]);


        $returnurl = "admin/content/".$data['category'];
        return redirect($returnurl);
    }
}
