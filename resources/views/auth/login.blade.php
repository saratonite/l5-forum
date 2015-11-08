<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<form action="post">
	{{ csrf_field()}}
		<label for="">Email</label>
		<input type="text" name="email">
		<label>Password</label>
		<input type="password">

	</form>
	
</body>
</html>