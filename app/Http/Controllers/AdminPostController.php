<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class AdminPostController extends Controller
{
    public function __construct(){
        $this->middleware('auth:admin');
          
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('created_at','desc')->get();
       return view('post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        #return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    $this->validate($request,[
        'images' => 
        'image|mimes:jpeg,jpg,png,gif|max:2048',
        'video' => 
        'file|mimes:mp4|max:20480',
        'title' => 'required',
        'content' => 'required',
        
    ]);
    
    $image = $request->file('images');
    if ($image){
    
    $new_name_image = rand() . '.'. $image->getClientOriginalExtension();
    $image->move(public_path('assets/images'), $new_name_image);
    $new_name_image =  asset('assets/images') . '/' . $new_name_image;
    }else{
        $new_name_image = '';
    }
    $video = $request->file('video');
    if ($video){
    
    $new_name_video = rand() . '.'. $video->getClientOriginalExtension();
    $video->move(public_path('assets/videos'), $new_name_video);
    $new_name_video = asset('assets/videos') . '/' . $new_name_video;
    }else{
        $new_name_video = '';
    }

    Post::create([
        'title'=>request('title'),
        'content'=>request('content'),
        'images'=>$new_name_image,
        'video' =>$new_name_video
    ]);
    
    return back()->with('Success', 'Post Created Successfully');

        #dd($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('post.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        return view('post.edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();

        // redirect
        Session::flash('message', 'Successfully deleted the post!');
        return Redirect::to('admin/posts');
    }
}
