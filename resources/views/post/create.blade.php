
<div class="py-5 text-center">
    <div class="container">
      <div class="row" >

        <div class="mx-auto col-lg-10 col-5">

          <h1>Create a Post</h1>
          <p class="mb-3">Give a title and a body to your post, if you want you may add an image or a video too.</p>
          <form class="text-left" method= "POST" action="{{  route('posts.store') }}" enctype="multipart/form-data">
             @csrf
            <div class="form-group"> 
            	<label for="title">Title</label> 
            	<input type="text" class="form-control" id="title" placeholder="Select a title" name="title"> 
            </div>

            <div class="form-group">
            	 <label for="body">Body</label> 
            	 <textarea rows="10" cols="100" id="content" class="form-control" id="content" placeholder="Your post body goes here..." name="content"></textarea> 
            </div>            
            
            <div class="form-row">
              <div class="form-group col-md-12"> 
              	<label for="images">Upload an image</label> 
              	<input type="file" class="form-control btn" id="images" name="images" placeholder=""> 
              </div>

          	</div>
          	<br>
          	<div class="form-row" ">
              <div class="form-group col-md-12"> 
            
              	<label for="video">Upload a video</label> 
              	<input type="file" class="form-control btn" id="video" name="video" placeholder="Select video"> 
              </div>
              
            </div>
          
            <br>
            <br>
            
            <div class="row" align="center">
        
            <div class="form-group col-md-12"  >
            
            <button type="submit" class="btn btn-primary">Publish</button>
            </div>
            </div> 
          </form>
    </div>
      </div>
    </div>
  </div>

@include('layouts.errors')
