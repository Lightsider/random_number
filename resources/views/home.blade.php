@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mb-5">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Your data:
                    <ul>
                        <li>Login: {{ Auth::user()->login }}</li>
                        <li>Email: {{ Auth::user()->email }}</li>
                        @if(session()->has('token'))
                        <li>Token: {{session()->get('token')}} <br> <span class="text-danger">Be careful! Save this token before refreshing the page</span></li>
                        @else
                        <li>Token - the token has already been received. To get it - login to your account again</li>
                        @endif
                    </ul>

                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card pb-3">
                <div class="card-header">{{ __('Actions') }}</div>

                <div class="card-body">
                    <div class="row justify-content-center">
                        <div class="col-md-6 m-auto text-center">
                            <a href="#" id="get_number_button" class="btn btn-success"> Generate number </a>
                        </div>
                        <div class="col-md-4 m-auto text-center">
                            <input type="text" class="form-control" name="number_id" id="number_id">
                            <br>
                            <a href="#" id="get_result_button" class="btn btn-success"> Get generate result by key </a>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center text-center mb-3">
                    <div class="col-md-6 m-auto">
                        <label for="token_input"> Enter your token </label>
                        <textarea name="token_input" class="form-control"  id="token_input"><?=session()->get('token')??''?></textarea>
                    </div>
                </div>
                <div class="row justify-content-center text-center">
                    <div class="col-md-6 m-auto">
                        <h3> Result: </h3>
                        <div id="result" class="text-left">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
