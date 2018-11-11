@extends('layouts.app')



@section('content')
<br>
<br>
  
        <div   class="col-md-12" align="center">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12" >
                <h1 class="mb-4">Control Panel</h1>
              </div>
           </div>
            <div class="row mx-auto">
              <div class="col-6 col-lg-3 bg-light animate-in-down">
                <a href=" {{ route('posts.index') }}">
                  <img src="assets/conference/posts.svg" class="center-block img-fluid my-3 rounded-circle" width="300">
                  <div align="center">
                    <h3 class="mb-0"><b class="text-dark">Post Controller</b></h3>
                    <p class="text-muted">Create - Edit - Publish</p>
                    
                  </div>  
                </a>
              </div>
              <div class="col-6 col-lg-3 bg-info animate-in-down">
                <a href="#">
                  <img src="assets/conference/shop.svg" class="center-block img-fluid my-3 rounded-circle" width="300">
                  <h3 class="mb-0"><b>Shop Controller</b></h3>
                  <p class="text-dark">Publish Acticle</p>
                </a>
              </div>
           
            
              
              <div class="col-6 col-lg-3 animate-in-down">
                <a href="#">
                  <img src="assets/conference/users.png" class="center-block img-fluid my-3 rounded-circle" width="300">
                  <div align="center">
                    <h3 class="mb-0"><b>Users</b></h3>
                    <p class="text-white">List Users - Change Users Status</p>
                    
                  </div> 
                </a>
              </div>
          
              <div class="col-6 col-lg-3 bg-primary animate-in-down">
                <a href="#">
                  <img src="assets/conference/news.png" class="center-block img-fluid my-3 rounded-circle" width="300">
                  <h3 class="mb-0"><b>News Controller</b></h3>
                  <p class="">Publish news</p>
                </a>
              </div>
              </div>
          </div>
        </div>
      

       
  
@endsection
 