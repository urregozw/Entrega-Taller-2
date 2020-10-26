@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }} Of The Awesome Bank</div>
                <h1 style="padding: 10px;">Greetings {{ Auth::user()->name }}! This is the money that you have in your account: </h1>
                <hr>
                <h3 style="padding: 10px;">You have in your account: {{ Auth::user()->money }} $</h2>
                <hr>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are now seeing your money in the bank!') }} Hello {{ Auth::user()->name }} !
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
