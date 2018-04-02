<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>pagination</title>
	<link rel="stylesheet" href="">
</head>
<body>
	

	<div class="container">
    @foreach($datas as $data)
		{{$data->name}}
	@endforeach
	</div>

	{{ $datas->links() }}
</body>
</html>