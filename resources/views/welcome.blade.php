@extends('layouts.app')

@section('content')
<div class="text-center">
    




<div class="iframe-container">    
    <iframe width="560" height="315" src="https://www.youtube.com/embed/Wrg5POj_Nuc?rel=0&amp;controls=0&amp;showinfo=0&amp;autoplay=1&amp;mute=1&amp;loop=1&amp;playlist=Wrg5POj_Nuc&amp;modestbranding=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="ytplayer preview video-frame"></iframe>
   
   @if(!Auth::check())
    <div class="centrar">
        <div class='row'>
      <img src="assets/kron/banner__.png" draggable="true" >
        </div>
         <div class='row'>
        
        <a class="btn_ text-white btn-outline-light_" href="register" >ENTER NOW</a>
        
        </div>
    </div>
    @endif
        

</div>

</div>

<div class="py-5" >
    <div class="container my-5">
      <div class="row mx-auto">
        <div class="col-md-12">
          <h3 class="mb-3" align="center">About the community</h3>
          <p class="" align="center">{{ strtoupper("Some convincent and cool information about the club and why it's so nice to be there. Some convincent and cool information about the club and why it's so nice to be there. Some convincent and cool information about the club and why it's so nice to be there. Some convincent and cool information about the club and why it's so nice to be there.") }}  </p>
          
        </div>
      </div>
    </div>
  </div>


@endsection
