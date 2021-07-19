<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use PhpParser\Builder\Function_;

class PostController extends Controller
{

public Function index(){
    $posts = post::all();
    return view('product.index',compact('posts'));
}

    public function create()
    {
        $posts = Post::all();
        // dd($brands);
        return view('product.create',compact('posts'));

    }

    public function store(Request $request){
        $request->validate([
            'title' => 'required',
            'description' => 'required',

        ]);
        $posts= Post::create([
            'title'=>$request->title,
            'description'=>$request->description,
        ]);
        return redirect()->route('product');


}
public function edit($id)
{
    $posts = Post::findOrFail($id);
    return view('product.edit', compact('posts'));
}


public function delete ($id){
 $posts = Post::find($id);
$posts->delete();
return redirect()->route('product');
}


}
