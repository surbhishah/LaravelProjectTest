@extends('layouts.default')
@section('content')
	<h1>{{		e($author->name) 		}}</h1>
	<p>
			{{		HTML::entities($author->bio)	}}

	</p>

	<p><small> {{	$author->updated_at		}}		</small></p>
	<span>

		{{ HTML::linkRoute('authors_route_name','All Authors')	}}
		{{ HTML::linkRoute('author_edit_name','Edit',array($author->id))	}}
		{{ Form::open(array('url'=>'author/delete','method'=>'delete'),array('style'=>'display:inline;'))	}}
		{{ Form::token()	}}
		{{ Form::hidden('id', $author->id )	}}
		{{ Form::submit('Delete')	}}
		{{ Form::close()	}}


	</span>

@endsection 