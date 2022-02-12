@extends('layouts.app')

@section('title', ' - Categories')

@section('content')
	<h1>Categories</h1>
	
	<category-manager 
		:initialCategories={{$categories}}
	>
	</category-manager>
@endsection