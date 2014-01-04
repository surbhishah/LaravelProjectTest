@extends('layouts.scriptlayout')
@section('head')
{{	'<script>
		function validateForm()
		{
		var email_txt=document.forms["myForm"]["email"];
		var errors = document.getElementById("errors");
		var x = email_txt.value;
		var atpos=x.indexOf("@");
		var dotpos=x.lastIndexOf(".");
		if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
		  {
		  // alert("Not a valid e-mail address");
		   //email_txt.value ="Not a valid e-mail address"
		   errors.innerHTML = "Not a valid e-mail address";
		   return false;
		  }
		return true;
		}

	</script>'
}}
@endsection


@section('content')
	<h1> Add new user </h1>
	<p id='errors' style='color:red;'></p>
	{{	Form::open(array('url'=>'users/create','name'=>'myForm','onsubmit'=>'return validateForm()'))	}}
	<p>
		{{	Form::label('name','Name:')		}}
 		{{	Form::text('name',Input::old('name'), array('placeholder'=>'Let us know who you are?'))		}}
 	
	</p>

	<p>
		{{	Form::label('email','Email:')		}}
		{{	Form::text('email',Input::old('email'), array('placeholder'=>'We will never spam you, we promise!'))		}}
	</p>

	<p>
		{{	Form::label('password','Password:')		}}
		{{	Form::password('password')		}}
	</p>
	{{	Form::submit('Register me now')	}}
	{{	Form::close()	}}
@endsection