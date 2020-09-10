@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Main page') }}</div>

                    <div class="card-body">
                        <p>Hello!</p>

                        <p>Here you can get a random number or see earlier numbers.</p>

                        <p>Of course, you have no other way to do this :)</p>
                        @if(Auth::check())
                            <a href="{{ route('home') }}">Go to home page and continue</a>
                        @else
                            <a href="{{ route('login') }}">Go to login page and continue</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
