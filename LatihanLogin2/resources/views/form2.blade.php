<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Halaman Form 3</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form action="{{URL::to('/about2')}}" method="post" accept-charset="utf-8">
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		<input type="text" name="text1">	
		<input type="text" name="text1_confirmation">
		<button type="submit">Click Me!</button>	
		
	</form>
	@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
</body>
</html>