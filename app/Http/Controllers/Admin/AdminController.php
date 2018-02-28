<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

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

    public function getProduct()
    {
        $content = DB::select('select * from content WHERE category LIKE ?', ['products']);
        return view("Admin/content/product", ["content" => $content]);
    }

    public function postProduct()
    {
        $data['id'] = $request->get('id');
        $data['field'] = $request->get('field');
        $data['newvalue'] = $request->get('newvalue');
        DB::table('content')
            ->where('id', $data['id'])
            ->update([$data['field'] => $data['newvalue']]);
        return view("Admin/content/product", ["content" => $data]);
    }
}
