<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/login.css') }}">
</head>

<div class="login-page">
    <div class="form">
        <form  method="POST" action="{{ route('login') }}" class="login-form">
            @csrf
            <input name="login" type="text" placeholder="login"/>
            <input name="password" type="password" placeholder="password"/>
            @if(session()->has('alert'))
                <b><p style="color: red">{{session()->get('alert') }}</p></b>
            @endif
            <button>login</button>
        </form>
    </div>
</div>
