@extends('layouts.app')
<style>


/** This will be the part for the buttons that will redirect the user to the other webpages */
    
.full-light{
    width: cover;
    padding: 20px;
    float: left;
    clear: both;
    display: block;
    background-color:  #f3f3f3;
}

.full-light .heading h2{
    font-size: 30px;
    line-height: 35px;
    margin-bottom: 20px;
    letter-spacing: 0.5px;
    text-align: left;
    color: #272727;
}

.full-light .col-md-2{
    width: 33%;
    float: left;
    padding: 50px;
    margin-left: 50px;
}

.full-light .col-md-2 .inner{
    padding: 40px;
    text-align: center;
    font-size: 14px;
    background-color: #fff;
    height: 200px;
    width: 200px;
}

.full-light .col-md-2 .inner i{
    font-size: 30px;
    color: #01d7a7;
    padding-bottom: 20px;
}
.full-light .col-md-2 .inner a{
    text-decoration: none;
}

.full-light .col-md-2 .inner h6{
    margin-top: 10px;
    margin-bottom: 20px;
    text-transform: uppercase;
    font-size: 16px;
    line-height: 21px;
    color: #333;
    transition: 0.3s all ease;
}
    
.full-light .col-md-2 .inner h6:hover{
    color: #eb7e09;
    font-size: 18px;
    
}
</style>
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }} Of The Awesome Bank</div>

                <section class="full-light">
                    <div class="main">
                        <div class="heading">
                            <h2>
                            </h2>
                        </div>

                        <div class="col-md-2">
                            <div class="inner">
                            <i class="fas fa-money-bill-wave"></i>
                                <a href="{{ url('/check') }}"><h6>Check how much money do you have</h6></a>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="inner">
                            <i class="far fa-credit-card"></i>
                                <a href="{{ url('/pay') }}"><h6>Pay your bills</h6></a>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="inner">
                            <i class="fas fa-hand-holding-usd"></i>
                                <a href="{{ url('/transfer') }}"><h6>Transfer money</h6></a>
                            </div>
                        </div>
                    </div>
                </section>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }} Hello {{ Auth::user()->name }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
