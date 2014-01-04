@extends('layouts.default')
@section('content')
	<h1> Home Page Welcome </h1>
	<ul></ul>
		@foreach($authors as $author)
		<li>	{{ HTML::linkRoute('author_route_name',$author-> name, array($author->id ))}}</li>
		@endforeach
	</ul>


	<p>{{HTML::linkRoute('author_new_route_name','Register new author')}}<p>
	<p>{{HTML::linkRoute('user_new_route_name','Register yourself with our website')}}<p>
@endsection
