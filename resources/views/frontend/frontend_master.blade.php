<!DOCTYPE html>
<html lang="en">
<head>
<title>@yield('title')</title>
@include('frontend.includes.meta')

@include('frontend.includes.css')

</head>

<body>

<div class="super_container">

    {{-- mian content --}}
@yield('content')

	<!-- Footer -->
@include('frontend.includes.footer')

</div>

@include('frontend.includes.js')

</body>

</html>
