@extends('frontend.frontend_master')

@section('title')
Checkout -Pages
@endsection

@section('content')
@include('frontend.pages.header')

<link rel="stylesheet" type="text/css" href="{{ asset('frontend/styles/cart_styles.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/styles/cart_responsive.css') }}">
{{-- cart --}}
<div class="cart_section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 ">
                <div class="cart_container">
                    <div class="cart_title">Checkout</div>
                    <div class="cart_items">
                        <ul class="cart_list">
                            @foreach ($cart as $cart )
                            <li class="cart_item clearfix">
                                <div class="cart_item_image"><img src="{{ asset($cart->options->image) }}" alt="" style="width:70px; height:70px"></div>
                                <div class="cart_item_info d-flex flex-md-row flex-column justify-content-between">
                                    <div class="cart_item_name cart_info_col">
                                        <div class="cart_item_title">Name</div>
                                        <div class="cart_item_text">{{ $cart->name }}</div>
                                    </div>

                                    @if ($cart->options->color==null)
                                    @else
                                    <div class="cart_item_color cart_info_col">
                                        <div class="cart_item_title">Color</div>
                                        <div class="cart_item_text">{{ $cart->options->color }}</div>
                                    </div>
                                    @endif

                                    @if ($cart->options->size==null)
                                    @else
                                    <div class="cart_item_color cart_info_col">
                                        <div class="cart_item_title">Size</div>
                                        <div class="cart_item_text">{{ $cart->options->size }}</div>
                                    </div>
                                    @endif


                                    <div class="cart_item_quantity cart_info_col">
                                        <div class="cart_item_title">Quantity</div>
                                        <br>
                                        <form method="post" action="{{ route('update.cartitem') }}">
                                        @csrf
                                        <input type="hidden" name="productid" value="{{ $cart->rowId }}">
                                        <input type="number" name="qty" value="{{ $cart->qty }}" style="width: 50px;">
                                        <button type="submit" class="btn btn-success btn-sm"><i class="fas fa-check-square"></i> </button>

                                    </form>
                                    </div>
                                    <div class="cart_item_price cart_info_col">
                                        <div class="cart_item_title">Price</div>
                                        <div class="cart_item_text">৳{{ $cart->price }}</div>
                                    </div>
                                    <div class="cart_item_total cart_info_col">
                                        <div class="cart_item_title">Total</div>
                                        <div class="cart_item_text">৳{{ $cart->price *  $cart->qty }}</div>
                                    </div>
                                    <div class="cart_item_total cart_info_col">
                                        <div class="cart_item_title">Action</div>
                                        <div class="cart_item_text">
                                            <a href="{{ route('cart.remove',['id'=>$cart->rowId]) }}" class="btn btn-sm btn-danger">x</a>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            @endforeach

                        </ul>
                    </div>

                    <!-- Order Total -->
                    <div class="order_total_content" style="padding:15px;">
                        <form action="">
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" class="form-control" name="" id="" required="" placeholder="Enter your cupon" >
                            </div>
                            <button class=" btn btn-danger">Aapply Cupon</button>
                        </div>
                    </form>
                    </div>
                    <ul class="list-group col-md-4" style="float:right;">
                        <li class="list-group-item">Sub Total: <span style="float:right;">121</span></li>
                        <li class="list-group-item">Cupon: <span style="float:right;">121</span></li>
                        <li class="list-group-item">Shipping Charge: <span style="float:right;">171</span></li>
                        <li class="list-group-item">Vat: <span style="float:right;">121</span></li>
                        <li class="list-group-item">Total: <span style="float:right;">121</span></li>

                    </ul>
                </div>
            </div>
        </div>


                    <div class="cart_buttons">
                        <button type="button" class="button cart_button_clear">All Cancel</button>
                        <a href="{{ route('user.checkout') }}" class="button cart_button_checkout">CheckOut</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('frontend/js/cart_custom.js') }}"></script>
@endsection
