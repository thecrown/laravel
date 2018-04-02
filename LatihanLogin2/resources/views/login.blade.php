<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>login form</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form action="{{URL::to('/store')}}" method="post" accept-charset="utf-8">
		<input type="hidden" name="_token" value="{{(csrf_token())}}">
		<input type="text" name="username" placeholder="username">
		<input type="password" name="password" placeholder="password">
		<button type="submit"> Sign In !</button>
	</form>
</body>
</html>