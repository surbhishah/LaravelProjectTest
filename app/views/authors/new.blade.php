@extends('layouts.default')

@section('content')
	<h1>Add new author</h1>
	{{ $errorview	}}
	{{	Form::open(array('url'=>'authors/create','as'=>'myForm'))	}}
	
	{{	Form::token()	}}
	<p>
		{{	Form::label('name','Name:')  }}<br>
		{{	Form::text('name',Input::old('name'))	}}
	</p>
	
	
	<p>
		{{	Form::label('bio','Biography:')  }}<br>
		{{	Form::textarea('bio', Input::old('bio'))	}}
	</p>
	
	<p>{{	Form::submit('Add Author') }}</p>
	{{	Form::close()	}}  
@endsection