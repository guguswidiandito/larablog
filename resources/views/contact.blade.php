@extends('layouts.app')
@section('title', 'Contact')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h2>Contact Me</h2>
			<hr>
		<form>
			<div class="form-group">
				<label name="email">Email:</label>
				<input type="email" name="email" id="email" class="form-control">
			</div>
			<div class="form-group">
				<label name="subject">Subject:</label>
				<input type="text" name="subject" id="subject" class="form-control">
			</div>
			<div class="form-group">
				<label name="message">Message:</label>
				<textarea name="message" id="message" class="form-control"></textarea>
			</div>
			<input type="submit" name="" value="Send Message" class="btn btn-success">
		</form>
		</div>
	</div>
</div>
@endsection