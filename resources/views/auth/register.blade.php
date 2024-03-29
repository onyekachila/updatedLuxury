@extends('user/app')

@section('head')

@endsection
@section('title','Login Here')

@section('main-content')

<div class="banner-top">
	<div class="container">
		<h2 class="animated wow fadeInLeft" data-wow-delay=".5s">Register</h2>
		<h3 class="animated wow fadeInRight" data-wow-delay=".5s"><a href="index-2.html">Home</a><label>/</label>Register</h3>
		<div class="clearfix"> </div>
	</div>
</div>
<hr>

<article>
    <div class="container">
        <div class="row">
           <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
               {{ csrf_field() }}

               <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                   <label for="name" class="col-md-4 control-label">Name</label>

                   <div class="col-md-6">
                       <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                       @if ($errors->has('name'))
                           <span class="help-block">
                               <strong>{{ $errors->first('name') }}</strong>
                           </span>
                       @endif
                   </div>
               </div>

               <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                   <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                   <div class="col-md-6">
                       <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                       @if ($errors->has('email'))
                           <span class="help-block">
                               <strong>{{ $errors->first('email') }}</strong>
                           </span>
                       @endif
                   </div>
               </div>

               <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                   <label for="password" class="col-md-4 control-label">Password</label>

                   <div class="col-md-6">
                       <input id="password" type="password" class="form-control" name="password" required>

                       @if ($errors->has('password'))
                           <span class="help-block">
                               <strong>{{ $errors->first('password') }}</strong>
                           </span>
                       @endif
                   </div>
               </div>

               <div class="form-group">
                   <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                   <div class="col-md-6">
                       <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                   </div>
               </div>

               <div class="form-group">
                   <div class="col-md-6 col-md-offset-4">
                       <button type="submit" class="btn btn-primary">
                           Register
                       </button>
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
