@extends('layouts.app')

@section('content')

{{-- $inventory --}}

    <div class="container">
        <h2 class="my-4 text-center">Katherine Payment</h2>
        <form action="/customer/billing/charge" method="post" id="payment-form">
            {{ csrf_field() }}
            <div class="form-row">
                <input type="text" name="name" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="Name">
                <input type="text" name="email" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="Email">
                <input type="text" name="price" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="Amount">
    
                <label for="card-element">
                    Credit or debit card
                </label>
                <div id="card-element" class="form-control">
                    <!-- A Stripe Element will be inserted here. -->
                </div>
    
                <!-- Used to display form errors. -->
                <div id="card-errors" role="alert"></div>
            </div>
            <button>Submit Payment</button>
        </form>
    </div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://js.stripe.com/v3/"></script>
    <script src="{{asset('stripe/js/charge.js')}}"></script>

@endsection