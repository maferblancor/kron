@extends('layouts.app')

@section('content')
{{-- FROM HERE --}}
                    <div class="py-5 form-container" 
                    " >
    <div class="container my-5" >
      <div class="row mx-auto">
        <div class="col-md-6" >
                              <form method= "POST" class="" style="opacity: 0.9;" action="{{ route('login') }}">
                                                        @csrf

                                <div class="form-group" > 
                                    <label>Email address</label> 
                                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} " name="email" value="{{ old('email') }}" placeholder='Email' required autofocus>

                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                            
                                            <small class="form-text text-muted">We'll never share your email with anyone else.</small> 
                                </div>
                                <div class="form-group">
                                    <label>Password</label> 
                                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }} "  name="password" required placeholder='Password'>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                </div> 
<br>
                                <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                                </div>
                                <br>
                                <div class="form-group ">
                            <div style="padding-left: 25%; padding-left: 25%">
                                    
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                                </div>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
@endsection
