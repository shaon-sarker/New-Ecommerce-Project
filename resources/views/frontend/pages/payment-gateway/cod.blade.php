{{-- <div class="tab-pane fade show active" id="v-pills-cod" role="tabpanel"
aria-labelledby="v-pills-home-tab">
    <div class="row">
        <div class="col-xl-12 m-auto">
            <div class="wsus__payment_area">
                <a class="nav-link common_btn text-center" href="{{route('user.cod.payment')}}">Complete Order</a>
            </div>
        </div>
    </div>
</div> --}}


<div class="tab-pane fade show active" id="v-pills-cod">

    <form action="{{ route('user.cod.payment') }}" method="GET" enctype="multipart/form-data">
        @csrf

        <h5 class="mb-3 fw-bold">Select a payment option</h5>

        <div class="row g-3">

            {{-- Cash on Delivery --}}
            <div class="col-md-4">
                <label class="payment-option active">
                    <input type="radio" name="payment_type" value="cod" checked hidden>
                    <div class="payment-box">
                        <h6>Cash on Delivery</h6>
                        <div class="icon cod">
                            <i class="fas fa-shipping-fast"></i>
                        </div>
                    </div>
                </label>
            </div>
            {{-- bKash --}}
            <div class="col-md-4">
                <label class="payment-option">
                    <input type="radio" name="payment_type" value="bkash" hidden>
                    <div class="payment-box">
                        <h6>bKash Payment</h6>
                        {{-- <div class="icon bkash">৳</div> --}}
                        <div class="icon bkash">
                            <img src="{{ asset('uploads/bikash.svg') }}" alt="">
                        </div>
                    </div>
                </label>
            </div>

            {{-- Image Upload (NOT payment option) --}}
            <div class="col-md-4">
                <div class="payment-option upload-card" id="uploadTrigger">

                    {{-- hidden file input --}}
                    <input type="file" name="payment_image" id="payment_image" hidden accept="image/*">

                    <div class="payment-box">
                        <h6>Sofa/Chair Photo Upload</h6>
                        <div class="icon image">
                            <i class="far fa-image"></i>
                        </div>
                    </div>

                </div>
            </div>

        </div>

        {{-- Image Preview --}}
        <div class="mt-3 d-none" id="image_preview">
            <img src="" class="img-thumbnail" width="120">
        </div>


        <div class="mt-4 text-end">
            <button class="common_btn">Complete Order</button>
        </div>
    </form>
</div>
