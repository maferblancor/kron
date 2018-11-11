@extends('layouts.app')

@section('content')

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
		   	   			
					    	<video width="100%" height="100%" poster="{{ asset('assets/images/layer.jpg') }}" controls>
							   <source src="{{ $post->video }}" type="video/mp4">
							</video>
						
					   	@endif

		          	@endif
		     			<div class="card-body" >       
		              <p class="card-text">{{ $post->content}} </p> 
		              </div>
		              @if ($post->video != NULL and $post->images)

					    	<video width="100%" height="100%" poster="{{ asset('assets/images/layer.jpg') }}" controls>
							   <source src="{{ $post->video }}" type="video/mp4">
							</video>
						@endif
		            </div>
		          </div>
		        </div>


		        
		   	   			

			
		      </div>

				 		      	
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
	

		

@endsection