@extends('frontend.layouts.master')

@section('title')
    {{ $settings->site_name }} || Payment
@endsection
@push('style')
    <style>
        .payment-option {
            display: block;
            cursor: pointer;
        }

        .payment-box {
            border: 2px solid #eee;
            border-radius: 8px;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: .3s;
            background: #fff;
        }

        .payment-option.active .payment-box,
        .payment-option input:checked+.payment-box {
            border-color: #ff0066;
            box-shadow: 0 5px 15px rgba(255, 0, 102, .2);
        }

        .payment-box h6 {
            margin: 0;
            font-weight: 600;
        }

        .payment-box .icon {
            width: 45px;
            height: 45px;
            border-radius: 6px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 22px;
            color: #fff;
        }

        .payment-box .icon.cod {
            background: #ff9800;
        }

        .payment-box .icon.image {
            background: #000;
        }

        .upload-card {
            cursor: pointer;
        }

        /* .icon.bkash {
        background: #e2136e;
        color: #fff;
        font-weight: 700;
        font-size: 22px;
        } */
        .icon.bkash {
            background: #fff;
            padding: 4px;
        }

        .icon.bkash img {
            width: 100px;
            height: auto;
            display: block;
        }
    </style>
@endpush

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
                            <li><a href="{{ route('home') }}">home</a></li>
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
    <section id="wsus__cart_view">
        <div class="container">
            <div class="wsus__pay_info_area">
                <div class="row">
                    {{-- <div class="col-xl-3 col-lg-3">
                        <div class="wsus__payment_menu" id="sticky_sidebar">
                            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                                aria-orientation="vertical">
                                <button class="nav-link common_btn active" id="v-pills-home-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home"
                                    aria-selected="true">card payment</button>

                                <button class="nav-link common_btn active" id="v-pills-home-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-paypal" type="button" role="tab" aria-controls="v-pills-paypal"
                                aria-selected="true">Paypal</button>

                                <button class="nav-link common_btn" id="v-pills-profile-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-stripe" type="button" role="tab"
                                    aria-controls="v-pills-stripe" aria-selected="false">Stripe</button>

                                <button class="nav-link common_btn" id="v-pills-profile-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-razorpay" type="button" role="tab"
                                aria-controls="v-pills-stripe" aria-selected="false">RazorPay</button>

                                <button class="nav-link common_btn" id="v-pills-profile-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-cod" type="button" role="tab"
                                    aria-controls="v-pills-stripe" aria-selected="false">Cash On Delivery</button>


                            </div>
                        </div>
                    </div> --}}
                    <div class="col-xl-8 col-lg-8">
                        <div class="tab-content" id="v-pills-tabContent" id="sticky_sidebar">


                            {{-- <div class="tab-pane fade show active" id="v-pills-paypal" role="tabpanel"
                            aria-labelledby="v-pills-home-tab">
                                <div class="row">
                                    <div class="col-xl-12 m-auto">
                                        <div class="wsus__payment_area">
                                            <a class="nav-link common_btn text-center" href="{{route('user.paypal.payment')}}">Pay with Paypal</a>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}

                            @include('frontend.pages.payment-gateway.stripe')

                            @include('frontend.pages.payment-gateway.razorpay')

                            @include('frontend.pages.payment-gateway.cod')


                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <div class="wsus__pay_booking_summary" id="sticky_sidebar2">
                            <h5>Order Summary</h5>
                            <p>subtotal : <span>{{ $settings->currency_icon }}{{ getCartTotal() }}</span></p>
                            <p>shipping fee(+) : <span>{{ $settings->currency_icon }}{{ getShppingFee() }}</span></p>
                            <p>coupon(-) : <span>{{ $settings->currency_icon }}{{ getCartDiscount() }}</span></p>
                            <h6>total <span>{{ $settings->currency_icon }}{{ getFinalPayableAmount() }}</span></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============================
                PAYMENT PAGE END
            ==============================-->
    @push('scripts')
        <script>
            // ONLY payment options
            const paymentRadios = document.querySelectorAll(
                '.payment-option input[type=radio]'
            );

            paymentRadios.forEach(radio => {
                radio.addEventListener('change', function() {

                    document.querySelectorAll('.payment-option')
                        .forEach(p => p.classList.remove('active'));

                    this.closest('.payment-option')
                        .classList.add('active');
                });
            });

            // Image upload (independent)
            const uploadTrigger = document.getElementById('uploadTrigger');
            const imageInput = document.getElementById('payment_image');
            const previewBox = document.getElementById('image_preview');
            const previewImg = previewBox.querySelector('img');

            uploadTrigger.addEventListener('click', () => imageInput.click());

            imageInput.addEventListener('change', function() {
                if (this.files[0]) {
                    previewImg.src = URL.createObjectURL(this.files[0]);
                    previewBox.classList.remove('d-none');
                }
            });
        </script>
    @endpush
@endsection
