@extends('layouts.app')

@section('content')
<div class="py-5 text-center">
<div class="container">
  <div class="row" >

        <div class="mx-auto col-lg-12 col-12">

          <h1>Edit a Post</h1>
          
          <form class="text-left" method= "POST" action="{{ url('/posts') }}/{{$post->id }}" enctype="multipart/form-data">
             @csrf
             {{ method_field('PATCH') }}

            <div class="form-group col-lg-6 col-6"> 
            	<label for="title">Title</label> 
            	<input type="text" class="form-control" id="title" value = '{{ $post ->title }}' name="title"> 
            </div>

            <div class="form-group">
            	 <label for="body">Body</label> 
            	 <textarea rows="10" cols="100" id="content" class="form-control" id="content" value = '' name="content">{{ $post ->content }}</textarea> 
            </div>            
            
            <div class="form-row">
              <div class="form-group col-lg-6 col-6"> 
              	<label for="images">Upload an image</label> 
              	<input type="file" class="form-control btn" id="images" name="images" placeholder=""> 
              </div>
              @if ($post->images)
              <div class="form-group col-lg-6 col-6"> 
              	<p align="center">Actual Image</p>
              	<img class="card-img-top" src="{{ $post->images }}" alt="Card image cap">
              </div>
              @endif

          	</div>
          	<br>
          	<div class="form-row" ">
              <div class="form-group col-lg-6 col-6"> 
              	<label for="video">Upload a video</label> 
              	<input type="file" class="form-control btn" id="video" name="video" placeholder="Select video"> 
              </div>
              @if ($post->video)
           	  	<div class="form-group col-lg-6 col-6"> 
	              	<p align="center">Actual Video</p>
	              	<video width="100%" height="100%" poster="{{ asset('assets/images/layer.jpg') }}" controls>
							   <source src="{{ $post->video }}" type="video/mp4">
							</video>
              </div>
           	  @endif   
            </div>
          
            <br>
            <br>
            <br>
            {{-- <div class="row" align="center">
        
            <div class="form-group col-md-12"  >
             
            <button type="submit" class="btn btn-primary">Publish</button>
            </div>
            </div> --}}
            <div class="row" align="center">
        
            <div class="form-group col-md-12"  >
             
            <a href="/admin/posts" class="btn btn-primary">Back</a>
            <p>NOT WORKING YET</p>
            </div>
            </div>
          </form>
    </div>
      </div>
    </div>
  </div>

@include('layouts.errors')


@endsection