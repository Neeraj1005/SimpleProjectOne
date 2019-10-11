@extends('layout')

@section('content')


<h1>Loging Page</h1>
<form action="loginsubmit" method="POST">
	@csrf
	<div class="form-group">
		<label for="email">Email address</label>
		<input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email" placeholder="Enter email">    
	</div>
	<div class="form-group">
		<label for="exampleInputPassword1">Password</label>
		<input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
	</div>
	<button type="submit" class="btn btn-primary">Submit</button>
</form>


@endsection