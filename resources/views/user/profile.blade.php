@extends('layouts.master')
@section('title')
	User Profile
@endsection
@section('content')
	<div><p class="alert alert-success">{{ session('thongbao') }}</p></div>

<div class="row">
	<div class="col-md-4 col-md-offset-4">
		<h1>User Profile</h1>
		
	</div>
</div>
@endsection