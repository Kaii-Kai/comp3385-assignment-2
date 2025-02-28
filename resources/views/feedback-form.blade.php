@extends('layouts.app')

@section('content')
<div class ="container">
	<h1 class="display-5 fw-bold text-body-emphasis">Feedback Form</h1>

	@if ($errors->any())
		<div class="alert alert-danger">
			<ul>
				@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif

	<form action="/feedback/send" method="POST">
		@csrf
		<div class="form-group">
			<label for= "name"> Full Name: <span style="color: red;"> (Required) </span> </label>
			<input type="text" id="name" class="form-control" name="full_name" required> <br></br>
		</div>
		<div class="form-group">
			<label for= "mail"> Email: <span style="color: red;"> (Required) </span> </label>
			<input type="email" class="form-control" id="mail" name="email" required> <br></br>
		</div>
		<div class="form-group">
			<label for= "comment"> Comments: <span style="color: red;"> (Required) </span> </label>
			<textarea id="comment" class="form-control" name="comment" required></textarea>
		</div>
		<p>Let us know what you think of our website</p>
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
</div>
@endsection