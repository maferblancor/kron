@extends('layouts.app')

@section('content')
		@if(Auth::guard('admin')->check())

			@include('post.create')

		@endif	
		
		@foreach ($posts as $post)
		<div class="py-4">
		    <div class="container">
		      <div class="row">
		        <div class="col-md-12">
		          <div class="card">
		          <a  href="posts/{{ $post->id }}"> 
		          	@if ($post->images != NULL)
		          		<img class="card-img-top" src="{{ asset($post->images) }}" alt="Card image cap">
		          	@else
		   	   			@if ($post->video != NULL)
		   	   			<div class='video-container'>
		   	   				{{-- <video width="100%" height="100%" controls class="embed-responsive-item">
							    <source src="{{ $post->video }}" type="video/mp4">
							</video> --}}
							<video width="100%" height="100%" poster="{{ asset('assets/images/layer.jpg') }}" controls>
							   <source src="{{ $post->video }}" type="video/mp4">
							</video>
							
					    	
						</div>
					   	@endif

		          	@endif
		          	</a>
		            <div class="card-body" >
		              <h2 class="card-title">{{ $post->title }}</h2>
		              <p class="card-text">{{ substr($post->content, 0, 500) }}... <a  href="posts/{{ $post->id }}">More</a> </p> 
		              <p class="card-text">{{ $post->created_at->diffForHumans()  }}</p>
		            </div>
		          </div>
		        </div>
		      </div>

				      	
			    {{-- Edit buttons --}}
			    @if(Auth::guard('admin')->check())
				{{-- Admin view --}}
				<br>
				<div class="row" align="center">
					<div class="col-md-12">
						<a href="posts/{{ $post->id }}/edit" class="btn m-2 btn-outline-light" '>Edit</a>

					
					
          			<a class="btn btn-primary m-2" href="">Delete</a>
					</div>		
				</div>
						
				@endif
			</div>


		</div>
	

		@endforeach

		

	

@endsection