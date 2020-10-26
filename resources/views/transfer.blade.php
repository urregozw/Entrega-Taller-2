@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }} Of The Awesome Bank</div>
                <h1 style="padding: 10px;">Please enter another accounnt and how much money do you want to transfer to that account</h1>
                <hr>
                <form action="transfer.php" method="POST">
                        <h2 style="padding: 10px;">Account number:</h2>
                        <input style="margin: 10px;"type="text" required name="account" placeholder="Account number">
                        <h2 style="padding: 10px;">Money transfer:</h2>
                        <input style="margin: 10px;" type="text" required name="money" placeholder="Money transfer">
                        <input type="submit" name="" >
                </form>

                <?php
                    $secret_account = '1001367';
                    
                    if ( isset($_POST['account']) && isset($_POST['money'])) {
                        if($secret_account == $_POST['account']){
                            echo "<p style=\"color:green\">The transfer was a succes you transfer to that account ".$_POST['money'];
                        }else{
                            echo "<p style=\"color:red\">The tranfer failed!!!<br> You should try again later!";
                        }
                        echo "</p>";
                    }
                    
                ?>


                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are now seeing the transfer schema!') }} Hello {{ Auth::user()->name }} !
                </div>
            </div>
        </div>
    </div>
</div>
@endsection