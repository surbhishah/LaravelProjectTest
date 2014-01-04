@extends('layouts.default')
@section('content')
	<h1> Editing {{		e($author->name) 	}}		</h1>
	{{	$errorview	}}


	{{	Form::open(array('url'=>'author/update','method'=>'put','as'=>'myForm'))	}}
	{{  Form::token()	}}
	<p>
		{{	Form::label('name','Name:')  }}<br>
		{{	Form::text('name',$author->name)	}}
	</p>
	
	
	<p>
		{{	Form::label('bio','Biography:')  }}<br>
		{{	Form::textarea('bio', $author->bio)		}}
	</p>
	{{	Form::hidden('id',$author->id)	}}

	<p>{{	Form::submit('Update Author')	}}</p>

	{{ Form::close()	}}

@endsection