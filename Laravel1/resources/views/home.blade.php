<!DOCTYPE html>
<html>
<head>
	<title>form</title>
</head>
<body>
<form  method='POST' action='/'>
	<input type="hidden" name="_method" value="delete">
   	@csrf
 <input type='submit'>
 </form>
</body>
</html>