@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }} Of The Awesome Bank</div>

                
    <h1 style="padding: 10px;">Here a the four things you have to pay<br>Remember that the bills will be between <br>10 $ and 100 $</h1>
        <hr>
        <form action="bills.php" method="POST">
            <h2 style="padding: 10px;">Car</h2>
            <input style="margin: 10px;" type="text" required name="car" placeholder="Carr bill">
            <h2 style="padding: 10px;">Food</h2>
            <input style="margin: 10px;" type="text" required name="food" placeholder="Food bill">
            <h2 style="padding: 10px;">Education</h2>
            <input style="margin: 10px;" type="text" required name="edu" placeholder="Education bill">
            <h2 style="padding: 10px;">House</h2>
            <input style="margin: 10px;" type="text" required name="house" placeholder="House bill">
            <input type="submit" name="" >
        </form>
       
    <?php
        $bill_car = rand(10,100);
        $bill_food = rand(10,100);
        $bill_edu = rand(10,100);
        $bill_house = rand(10,100);
        
        if ( isset($_POST['car']) && isset($_POST['food']) && isset($_POST['edu']) && isset($_POST['house'])) {
            if ($bill_car - $_POST['car'] == 0){
                echo "<p style=\"color:green\">You paid the exact amount for your car bill</p>";
            }else if ($bill_car - $_POST['car'] > 0){
                $paid = $bill_car - $_POST['car'];
                echo "<p style=\"color:red\">You need to pay  to your car bill the next month: ".$paid." $</p>";
            }else {
                echo "<p style=\"color:blue\">You deposit to your car bill the next month: ".$paid."$ </p>";
            }
            if ($bill_food - $_POST['food'] == 0){
                echo "<p style=\"color:green\">You paid the exact amount for your food bill</p>";
            }else if ($bill_food - $_POST['food'] > 0){
                $paid = $bill_food - $_POST['food'];
                echo "<p style=\"color:red\">You need to pay  to your car food the next month: ".$paid." $</p>";
            }else {
                echo "<p style=\"color:blue\">You deposit to your food bill the next month: ".$paid."$ </p>";
            }
            if ($bill_edu - $_POST['edu'] == 0){
                echo "<p style=\"color:green\">You paid the exact amount for your edu bill</p>";
            }else if ($bill_edu - $_POST['edu'] > 0){
                $paid = $bill_edu - $_POST['edu'];
                echo "<p style=\"color:red\">You need to pay  to your education bill the next month: ".$paid." $</p>";
            }else {
                echo "<p style=\"color:blue\">You deposit to your car education bill the next month: ".$paid."$ </p>";
            }
            if ($bill_house - $_POST['house'] == 0){
                echo "<p style=\"color:green\">You paid the exact amount for your house bill</p>";
            }else if ($bill_house - $_POST['house'] > 0){
                $paid = $bill_house - $_POST['house'];
                echo "<p style=\"color:red\">You need to pay to your house bill the next month: ".$paid." $</p>";
            }else {
                echo "<p style=\"color:blue\">You deposit  to your house bill the next month: ".$paid."$ </p>";
            }
            $amount = $_POST['car'] + $_POST['food'] + $_POST['edu'] + $_POST['house'];
            echo "<p style=\"color:orange\">Your total amount of money that you spend is:".$amount."$ </p>";
        }
        
    ?>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are now seeing the pay schema!') }} Hello {{ Auth::user()->name }} !
                </div>
            </div>
        </div>
    </div>
</div>
@endsection