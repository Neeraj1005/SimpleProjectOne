@extends('layout')

@section('content')
<h1>create Page</h1>
<form action="createsubmit" method="POST">
	@csrf

	<div class="form-group">
		<label for="text">Name</label>
		<input type="text" class="form-control" name="name" id="name" placeholder="Enter Name">    
	</div>
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