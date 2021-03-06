@extends('layouts.app')

@section('content')
<form method="POST" action="{{ route('login') }}">
    {{ csrf_field() }}

    <label for="email">E-mail</label>
    <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>
    @if ($errors->has('email'))
        <span class="error">
          {{ $errors->first('email') }}
        </span>
    @endif

    <label for="password" >Password</label>
    <input id="password" type="password" name="password" required>
    @if ($errors->has('password'))
        <span class="error">
            {{ $errors->first('password') }}
        </span>
    @endif

    <br>
    <button style="border-color: #571f70; background-color: #571f70; color: white" type="submit"
        class="btn btn-primary btn-lg" type="submit">
        Login
    </button>

    <a style="float:right; position:relative; right:25px; font-size:10px; border-color: #571f70; background-color: #571f70; color: white;" type="submit"
        class="btn btn-primary btn-lg" href="{{ route('register') }}">Register</a>
</form>
@endsection
