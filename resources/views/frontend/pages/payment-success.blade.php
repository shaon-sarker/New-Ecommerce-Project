@extends('frontend.layouts.master')

@section('title')
{{$settings->site_name}} || Payment
@endsection

@section('content')
    <!--============================
        BREADCRUMB START
    ==============================-->
    <section id="wsus__breadcrumb">
        <div class="wsus_breadcrumb_overlay">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h4>payment</h4>
                        <ul>
                            <li><a href="{{route('home')}}">home</a></li>
                            <li><a href="javascript:;">payment</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============================
        BREADCRUMB END
    ==============================-->


    <!--============================
        PAYMENT PAGE START
    ==============================-->
    {{-- <section id="wsus__cart_view">
        <div class="container">
            <div class="wsus__pay_info_area">
                <div class="row">
                    <h1>Paymet success!</h1>
                </div>
            </div>
        </div>
    </section> --}}
    <section id="wsus__cart_view" style="min-height: 100vh; display: flex; align-items: center; justify-content: center; background-color: #f8f9fa;">
    <div class="container" style="max-width: 600px;">
        <div class="payment-success-card" style="background: #fff; padding: 40px; border-radius: 15px; box-shadow: 0 10px 25px rgba(0,0,0,0.1); text-align: center;">
            <!-- Success Icon -->
            <div style="font-size: 60px; color: #28a745; margin-bottom: 20px;">
                &#10004;
            </div>

            <!-- Heading -->
            <h1 style="font-size: 28px; font-weight: 700; margin-bottom: 15px; color: #333;">Payment Successful!</h1>

            <!-- Description -->
            <p style="font-size: 16px; color: #5c5b5b; margin-bottom: 30px;">
                Thank you for your purchase! Your payment has been received and your order is being processed.
            </p>

            <!-- Order Summary Button -->
            <a href="/orders" style="display: inline-block; background-color: #5d925d; color: #fff; padding: 12px 30px; border-radius: 50px; font-weight: 600; text-decoration: none; transition: 0.3s;">
                View Your Orders
            </a>

            <!-- Optional Back to Shop -->
            <p style="margin-top: 20px;">
                <a href="/shop" style="color: #5d925d; text-decoration: underline;">Continue Shopping</a>
            </p>
        </div>
    </div>
</section>

    <!--============================
        PAYMENT PAGE END
    ==============================-->
@endsection
