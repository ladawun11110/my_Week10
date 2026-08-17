<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
  function blog()
    {
        $blogs = DB::table("blogs")->get();
        return view("blog", compact('blogs'));
    }

    function blog2()
    {
        $blogs = DB::table("blogs")->get();
        return view("blog2", compact('blogs'));
    }
function delete($id)
{
    DB::table("blogs")->where('id', $id)->delete();
    return redirect('/blog');
}
public function create()
    {
        return view('insert'); 
    }

public function insert(Request $request)
    {
        $data = [
            'title' => $request->title,
            'content' => $request->content,
            'status' => $request->status,
        ];

        DB::table("blogs")->insert($data);

        return redirect('/blog');
    }

}