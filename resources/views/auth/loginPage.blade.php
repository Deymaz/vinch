<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/login.css') }}">
</head>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="login-page">
    <div class="form">
        <form  method="POST" action="{{ route('login') }}" class="login-form">
            @csrf
            <input name="login" type="text" placeholder="login"/>
            <input name="password" type="password" placeholder="password"/>
            <button>login</button>
        </form>
    </div>
</div>