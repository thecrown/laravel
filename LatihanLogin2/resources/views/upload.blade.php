<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>upload file</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form action="{{URL::to('/upload')}}" enctype="multipart/form-data" method="post" accept-charset="utf-8" >
		<input type="file" name="image">
		<input type="hidden"  name="_token" value="{{csrf_token()}}">
		<button type="submit">Submit !</button>
	</form>
</body>
</html>