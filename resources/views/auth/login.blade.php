@extends('user/app')

@section('head')

@endsection
@section('title','Login Here')

@section('main-content')
<!-- Banner -->

<!--banner-->
<div class="banner-top">
	<div class="container">
		<h2 class="animated wow fadeInLeft" data-wow-delay=".5s">Login</h2>
		<h3 class="animated wow fadeInRight" data-wow-delay=".5s"><a href="index-2.html">Home</a><label>/</label>Login</h3>
		<div class="clearfix"> </div>
	</div>
</div>
<hr>
<article>
    <div class="container">
        <div class="row">
           <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
               {{ csrf_field() }}




               <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                   <label for="email" class="col-md-4 control-label"></label>

                   <div class="col-md-6">
                       <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email" required autofocus>

                       @if ($errors->has('email'))
                           <span class="help-block">
                               <strong>{{ $errors->first('email') }}</strong>
                           </span>
                       @endif
                   </div>
               </div>

               <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                   <label for="password" class="col-md-4 control-label"></label>

                   <div class="col-md-6">
                       <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>

                       @if ($errors->has('password'))
                           <span class="help-block">
                               <strong>{{ $errors->first('password') }}</strong>
                           </span>
                       @endif
                   </div>
               </div>

               <div class="form-group">
                   <div class="col-md-6 col-md-offset-4">
                       <div class="checkbox">
                           <label>
                               <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                           </label>
                       </div>
                   </div>
               </div>

               <div class="form-group">
                   <div class="col-md-8 col-md-offset-4">
                       <button type="submit" class="btn btn-primary">
                           Login
                       </button>


                       <a href='{{ route('register') }}' class="btn btn-primary">
                           Register
                       </a>

                       <a class="btn btn-link" href="{{ route('password.request') }}">
                           Forgot Your Password?
                       </a>
                   </div>
               </div>
           </form>
        </div>
    </div>
</article>

<hr>

@endsection
@section('footer')
@endsection
