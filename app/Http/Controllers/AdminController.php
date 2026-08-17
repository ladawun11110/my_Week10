<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
  function blog()
    {
        $blogs = DB::table("blogs")->get();
        return view("blog", compact('blogs'));
    }

   public function blog2()
    {
        $blogs = DB::table("blogs")->get();
        
        return view('blog2', compact('blogs'));
    }

function delete($id)
{
    DB::table("blogs")->where('id', $id)->delete();
    return redirect('/blog2');
}
public function create()
    {
        return view('insert'); 
    }

public function insert(Request $request)
{
    $data = [
        'title'      => $request->title,
        'content'    => $request->content,
        'status'     => $request->status,
        'created_at' => now(),
        'updated_at' => now(), 
    ];

    DB::table("blogs")->insert($data);

    return redirect('/blog2'); 
}

function change($id)
{
    $blogs = DB::table("blogs")->where("id", $id)->first();

    // dd($blogs);
    $data = [
        'title'   => $blogs->title,
        'content' => $blogs->content,
        'status'  => $blogs->status,
    ];
    if ($blogs->status == 1) {
        $data['status'] = 0;
    } else {
        $data['status'] = 1;
    }
    DB::table("blogs")->where('id', $id)->update($data);
    return redirect('/blog2'); 
}

function edit($id){
    $blogs = DB::table("blogs")->where("id", $id)->first();
    return view('edit', compact('blogs')); 
}

function update(Request $request, $id){
    $data = [
        'title'   => $request->title,
        'content' => $request->content,
        'status'  => $request->status,
    ];
    DB::table("blogs")->where('id', $id)->update($data);
    return redirect('/blog2'); 
}
}