@extends('layouts.app')

@section('content')
<div style="text-align: center; margin-top: 50px;">
	<div style="border: 1px solid #ddd; padding: 20px; max-width: 500px; margin auto; borer-radius: 10px;">
		<img src="{{asset ('images/green-tick.png') }}" alt="Success" style="width: 50px;"/>
		<h2 style="color: green;">Success!</h2>
		<p>Thank you for your feedback. We will review your feedback and get back to you.</p>
	</div>
</div>
@endsection