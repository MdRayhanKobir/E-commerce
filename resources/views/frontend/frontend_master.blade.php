<!DOCTYPE html>
<html lang="en">
<head>
<title>@yield('title')</title>
@include('frontend.includes.meta')

@include('frontend.includes.css')

</head>

<body>

<div class="super_container">
<!-- Header -->
<header class="header">
    <!-- Top Bar -->
    <div class="top_bar" style="background-color: rgba(130, 204, 221,.2)">
        <div class="container">
            <div class="row">
                <div class="col d-flex flex-row">
                    <div class="top_bar_contact_item"><div class="top_bar_icon"><img src="{{ asset('frontend/images/phone-call.png') }}" alt=""></div><a href="tel:01727038318">01727038318</a></div>
                    <div class="top_bar_contact_item"><div class="top_bar_icon"><img src="{{ asset('frontend/images/email.png') }}" alt=""></div><a href="mailto:fastsales@gmail.com">easyfind@gmail.com</a></div>
                    <div class="top_bar_content ml-auto">
                        <div class="top_bar_menu">
                            <ul class="standard_dropdown top_bar_dropdown">
                                @php
                                    $language=Session()->get('lang');
                                @endphp
                                <li>
                                    @if (Session()->get('lang')=='bangla')
                                    <a href="{{ route('lang.english') }}" title="english"><img src="{{ asset('frontend/images/united-kingdom.png') }}" alt=""></a>
                                    @else
                                    <a href="{{ route('lang.bangla') }}" title="bangla"><img src="{{ asset('frontend/images/bangladesh.png') }}" alt=""></a>
                                    @endif


                                </li>
                            </ul>
                        </div>
                        <div class="top_bar_user">

                            @auth()
                            <ul class="standard_dropdown top_bar_dropdown">
                                <li>
                                    <a href="{{ route('dashboard') }}">
                                        <div class="user_icon"><img src="{{ asset('frontend/images/user.png')}}" alt="" style="width:24px ">
                                        </div> Profile<i class="fas fa-chevron-down"></i>
                                    </a>

                                    <ul>
                                        <li><a href="{{ route('user.wishlist') }}">Wishlist</a></li>
                                        <li><a href="{{ route('user.checkout') }}">Checkout</a></li>
                                        <li><a href="#">Other's</a></li>
                                    </ul>
                                </li>
                            </ul>
                            @else
                            <div class="user_icon"><img src="{{ asset('frontend/images/user.png') }}" alt=""></div>
                            <div><a href="{{ route('register')}}">Register</a></div>
                            <div><a href="{{ route('login') }}">Sign in</a></div>
                            @endauth
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Header Main -->

    <div class="header_main" style="background-color: rgba(60, 99, 130,0.3)">
        <div class="container">
            <div class="row">

                <!-- Logo -->
                <div class="col-lg-2 col-sm-3 col-3 order-1">
                    <div class="logo_container">
                        <div class="logo"><a href="{{ url('/') }}"><img src="{{ asset('backend/logo/logo.png') }}" alt="" style="width:150px;" ></a></div>
                    </div>
                </div>

                <!-- Search -->
                <div class="col-lg-6 col-12 order-lg-2 order-3 text-lg-left text-right">
                    <div class="header_search">
                        <div class="header_search_content">
                            <div class="header_search_form_container">
                                <form action="#" class="header_search_form clearfix">
                                    <input type="search" required="required" class="header_search_input" placeholder="Search for products...">
                                    <div class="custom_dropdown">
                                        <div class="custom_dropdown_list">
                                            <span class="custom_dropdown_placeholder clc">All Categories</span>
                                            <i class="fas fa-chevron-down"></i>
                                            <ul class="custom_list clc">
                                                @php
                                                $cat=DB::table('categories')->get();
                                               @endphp
                                                @foreach ($cat as $cat )
                                                <li><a class="clc" href="#">{{ $cat->category_name }}</a></li>
                                                @endforeach
                                            </ul>
                                        </div>

                                    </div>
                                    <button type="submit" class="header_search_button trans_300" value="Submit"><img src="{{ asset('frontend/images/search.png') }}" alt=""></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Wishlist -->
                <div class="col-lg-4 col-9 order-lg-3 order-2 text-lg-left text-right">
                    <div class="wishlist_cart d-flex flex-row align-items-center justify-content-end">
                        <div class="wishlist d-flex flex-row align-items-center justify-content-end">
                           @auth
                           @php
                               $wishlist=DB::table('wishlists')->where('user_id',Auth::id())->get();
                           @endphp

                           <div class="wishlist_icon"><img src="{{ asset('frontend/images/cart.png') }}" alt="" style="width:40px"></div>
                           <div class="wishlist_content">
                            <div class="wishlist_text"><a href="{{ route('user.wishlist') }}">Wishlist</a></div>
                            <div class="wishlist_count"><span class="badge badge-primary">{{ count( $wishlist) }}</span></div>
                        </div>
                        @else
                           @endauth

                        </div>

                        <!-- Cart -->
                        <div class="cart">
                            <div class="cart_container d-flex flex-row align-items-center justify-content-end">
                                <div class="cart_icon">
                                    <img src="{{ asset('frontend/images/shopping-bag.png') }}" alt="" style="width:40px ">
                                    <div class="cart_count"><span>{{Cart::count()}}</span></div>
                                </div>
                                <div class="cart_content">
                                    <div class="cart_text"><a href="{{ route('cart.show') }}">Cart</a></div>
                                    <div class="cart_price"><span class="badge badge-primary">৳{{ Cart::subtotal() }}</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@yield('content')

	<!-- Footer -->
@include('frontend.includes.footer')

</div>

@include('frontend.includes.js')

</body>

</html>
