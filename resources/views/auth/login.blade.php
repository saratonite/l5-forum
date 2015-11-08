<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	

<form method="POST" action="{{ url('login') }}">
    {!! csrf_field() !!}

    <div>
        Email
        <input type="email" name="email" value="{{ old('email') }}">
        @if($errors->has('email'))
        <span>{{ $errors->first('email') }}</span>
        @endif
    </div>

    <div>
        Password
        <input type="password" name="password" id="password">
        @if($errors->has('password'))
        <span>{{ $errors->first('password') }}</span>
        @endif
    </div>

    <div>
        <input type="checkbox" name="remember"> Remember Me
    </div>

    <div>
        <button type="submit">Login</button>
    </div>
</form>
	
</body>
</html>