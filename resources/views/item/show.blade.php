@extends('layouts.app')

@section('content')
	@if(Auth::guest())
		{{ redirect('/') }}
	@else
		
		<div class="py-5">
		    <div class="container">
		      <div class="row">
		        <div class="col-md-12">
		          <div class="card">
		          <div class="card-body" >	
		          <br>
		          <h1  class="card-title" align="center">{{ $post->title }}</h1> 
		          <br>
		          	@if ($post->images != NULL)
		          		<img class="card-img-top" src="{{ $post->images }}" alt="Card image cap">
		          	@else
		   	   			@if ($post->video != NULL)
		   	   			<div class='iframe-container'>
					    	<iframe width="560" height="315" src="{{ $post->video }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="ytplayer preview video-frame"></iframe>
						</div>
					   	@endif

		          	@endif
		     			<div class="card-body" >       
		              <p class="card-text">{{ $post->content}} </p> 
		              </div>
		            </div>
		          </div>
		        </div>
		      </div>

				 @if ($post->video != NULL and $post->images )

					 <div class='iframe-container'>	  
				    	<iframe width="560" height="315" src="{{ $post->video }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="ytplayer preview video-frame"></iframe>
				    </div> 

				@endif 		      	
			    {{-- Edit buttons --}}
			    <br>
				<div class="row" align="center">
					<div class="col-md-12">
			    @if(Auth::guard('admin')->check())
				{{-- Admin view --}}
				
					<a href="#schedule" class="btn m-2 btn-outline-light" '>Edit</a>
          			<a class="btn btn-primary m-2" href="#register">Delete</a>
					<a href="{{ route('posts.index')}}" class="btn m-2 btn-secondary" >Back</a>
				@else
					<a href="{{ route('user.posts.index')}}" class="btn m-2 btn-secondary" >Back</a>		
				@endif
				
					</div>		
			</div>
				
			</div>


		</div>
	

		

	@endif

@endsection