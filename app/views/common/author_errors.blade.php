@if($errors->has())
	<ul >
		{{	$errors->first('name','<li><p style="color:red;">:message</p></li>')	}}
		{{	$errors->first('bio','<li><p style="color:red;">:message</p></li>')	}}
	</ul>


			
@endif
	