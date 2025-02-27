@extends('layouts.app')

@section('content')
<div class ="container">
<h1 class="display-5 fw-bold text-body-emphasis">Feedback Form</h1>
<form method="POST">
	@csrf
	<div class="form-group">
		<label for= "name"> Full Name:</label>
		<input type="text" id="name" class="form-control" name="full_name" />
	</div>
	<div class="form-group">
		<label for= "mail"> Email:</label>
		<input type="email" class="form-control" id="mail" />
	</div>
	<div class="form-group">
		<label for= "comment"> Comments:</label>
		<textarea id="comment" class="form-control" ></textarea>
	</div>
	<p>Let us know what you think of our website</p>
	<button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection