<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
// use DB;

class PostController extends Controller
{
    public function __construct(){
        //anyone who is trying to enter into myposts cannot view unless he is logged in
        $this->middleware('auth',['except'=>['services','about','index','show']]);

    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        //  $posts=Post::orderBy('id','desc')->take(1)->get();
         $posts= Post::orderBy('id','desc')->paginate(2);


        //  $posts=Post::orderBy('id','desc')->get();

        //DB apart from using a POST in models we can also use DB to fetch data from database
        // return DB::select('select * from posts');
        //  $posts= Post::all(); //fetching using Model

         //where
        //  return Post::where('id',1)->get();

        // return Post::all();

        return view('posts.index', compact('posts'));//works
        // return view('posts.index',$posts);

}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

        return view ('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $this->validate($request,[
        'title'=>'required',
        'body'=>'required',
        'cover_image'=>'image|nullable|max:1999'
    ]);



    if($request->hasFile('cover_image')){
        //Get filename
        $image=$request->file('cover_image')->getClientOriginalName();
        //get just filename
        $filename=pathinfo($image,PATHINFO_FILENAME);
        //get just ext
        $extension=$request->file('cover_image')->getClientOriginalExtension();
        //filename to store
        $fileNameToStore=time().'.'.$extension;
        //upload image
        $path=$request->file('cover_image')->storeAs('public/cover_images',$fileNameToStore);
    }
    else
    {
        $fileImage='noimage.jpg';
    }
            #return $request->all();
        $post=new Post;
        $post->title=$request->input('title');
        $post->body=$request->input('body');
        $post->user_id=auth()->user()->id; // once can also see his data
        $post->cover_image=$fileNameToStore;
        $post->save();

        return redirect()->route('showPost', $post->id)->with('success','Post Created');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // return "hello world";

        //
        // return DB::select('select * from posts where id=?');//didnt work

       $post=Post::find($id);

        // $post=Post::orderBy('title','desc');

        return view('posts.show')->with('post',$post);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $post=Post::find($id);



        return view('posts.edit')->with('post',$post);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        //

        $this->validate($request,[
            'title'=>'required',
            'body'=>'required']);
            #return $request->all();

            $post=Post::find($id);
            $post->title=$request->input('title');
            $post->body=$request->input('body');
            $post->save();

            return redirect()->route('showPost', $post->id)->with('success','Post Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $post=Post::find($id);
        $post->delete();

        return redirect()->route('viewPosts')->with('success','Post deleted');
    }
}
