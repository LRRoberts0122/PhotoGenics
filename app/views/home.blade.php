@extends('layouts.default')

@section('body')
	@include('layouts.header')
	@include('layouts.logo')
	@include('layouts.navigation')
    <!-- GIANT IMAGE AND CALL TO ACTION -->
    <div id="landingCTA">
	    <div id="CTA">
		    <h1>A marketplace for the enthusiast.</h1>
		    <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#registerModal">Create an Account - It's FREE</button>
		    <a href="/browse"><button type="button" class="btn btn-primary btn-lg">Or Browse Now</button></a>
	    </div>
    </div>
	@include('layouts.login')
	@include('layouts.register')
@stop