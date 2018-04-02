<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>form session</title>
	<link rel="stylesheet" href="">
</head>
<body>
		<form action="{{URL::to('/about')}}" method="post" accept-charset="utf-8">
				<input type="text" name="name">
				<input type="hidden" name="_token" value="{{csrf_token()}}">
				<button type="submit" name="button">Click here</button>
		</form>
</body>
</html>