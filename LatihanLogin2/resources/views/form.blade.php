<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>form submit</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form action="{{URL::to('/input')}}" method="post" accept-charset="utf-8">
		@csrf
		<input type="text" name="name">
		<button type="submit">Submit</button>
	</form>
	@isset($name)
	{{$name}}
	@endisset
</body>
</html>