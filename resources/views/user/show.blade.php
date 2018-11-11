@extends('layouts.app')


@section('content')

<br>
<div class="py-5" style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, .75), rgba(0, 0, 0, .75)), url(https://static.pingendo.com/cover-bubble-dark.svg); background-position: center center, center center;  background-size: 100%, 100%;  background-repeat: repeat, repeat;" >
    <div class="container">
      <div class="row">
        <div class="text-center mx-auto col-md-12">
          <h1 class="text-light">Pricing</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 p-3">
          <div class="card text-center text-dark">
            <div class="card-body p-4">
              <h3>One</h3>
              <p class="my-3">Among the tall grass by the trickling stream; and, as I lie close to the earth.</p>
              <h2> <b>99$</b> </h2> <a class="btn btn-primary mt-3" href="#">Buy</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 p-3">
          <div class="card text-center text-dark">
            <div class="card-body p-4">
              <h3>More</h3>
              <p class="my-3">I am alone, and feel the charm of existence in this spot.</p>
              <h2> <b>899$</b> </h2> <a class="btn btn-primary mt-3" href="#">Buy</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 p-3">
          <div class="card text-center text-dark">
            <div class="card-body p-4">
              <h3>Tons</h3>
              <p class="my-3">The breath of that universal love which bears and sustains us.</p>
              <h2> <b>2499$</b> </h2> <a class="btn btn-primary mt-3" href="#">Buy</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection