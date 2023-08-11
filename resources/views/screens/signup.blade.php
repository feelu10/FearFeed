@extends("layouts.login-signup")


@section('title', 'Fear Feed - Sign Up')


@section('card')

    @include('components.signup-card')

    <script src="{{ asset('js/signup.js') }}"></script>

@endsection
