<div class="sl-logo"><a href="{{ URL('/admin/dashboard') }}"><img src="{{ asset('backend/logo/logo.png') }}" alt="" style="width:100px;" ></a></div>
<div class="sl-sideleft">
    {{-- <div class="input-group input-group-search mb-2">
      <input type="search" name="search" class="form-control" placeholder="Search">
      <span class="input-group-btn">
        <button class="btn"><i class="fa fa-search"></i></button>
      </span><!-- input-group-btn -->
    </div><!-- input-group --> --}}

    {{-- <label class="sidebar-label">Navigation</label> --}}
    <div class="sl-sideleft-menu">
      <a href="{{ URL('/admin/dashboard') }}" class="sl-menu-link active">
        <div class="sl-menu-item">
          <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
          <span class="menu-item-label">Dashboard</span>
        </div><!-- menu-item -->
      </a><!-- sl-menu-link -->

      <a href="#" class="sl-menu-link">
        <div class="sl-menu-item">
          <i class="menu-item-icon ion-ios-pie-outline tx-20"></i>
          <span class="menu-item-label">Category</span>
          <i class="menu-item-arrow fa fa-angle-down"></i>
        </div><!-- menu-item -->
        <ul class="sl-menu-sub nav flex-column">
            <li class="nav-item"><a href="{{ route('category.view') }}" class="nav-link">Category</a></li>
            <li class="nav-item"><a href="{{ route('subcategory.view') }}" class="nav-link">Sub-Category</a></li>
            <li class="nav-item"><a href="{{ route('brand.view') }}" class="nav-link">Brand</a></li>
          </ul>
      </a><!-- sl-menu-link -->



      <a href="#" class="sl-menu-link">
        <div class="sl-menu-item">
          <i class="menu-item-icon icon ion-ios-gear-outline tx-24"></i>
          <span class="menu-item-label">Cupons</span>
          <i class="menu-item-arrow fa fa-angle-down"></i>
        </div><!-- menu-item -->
        <ul class="sl-menu-sub nav flex-column">
            <li class="nav-item"><a href="{{ route('cupon.view') }}" class="nav-link">Cupon</a></li>
          </ul>
      </a><!-- sl-menu-link -->




      <a href="#" class="sl-menu-link">
        <div class="sl-menu-item">
          <i class="menu-item-icon icon ion-ios-filing-outline tx-24"></i>
          <span class="menu-item-label">Other's</span>
          <i class="menu-item-arrow fa fa-angle-down"></i>
        </div><!-- menu-item -->
        <ul class="sl-menu-sub nav flex-column">
            <li class="nav-item"><a href="{{ route('newsletter.view') }}" class="nav-link">Newsletter</a></li>
          </ul>
      </a><!-- sl-menu-link -->


      <a href="#" class="sl-menu-link">
        <div class="sl-menu-item">
          <i class="menu-item-icon icon ion-ios-bookmarks-outline tx-20"></i>
          <span class="menu-item-label">Product</span>
          <i class="menu-item-arrow fa fa-angle-down"></i>
        </div><!-- menu-item -->
        <ul class="sl-menu-sub nav flex-column">
            <li class="nav-item"><a href="{{ route('product.add') }}" class="nav-link">Add Product</a></li>
            <li class="nav-item"><a href="{{ route('product.view') }}" class="nav-link">All View Products</a></li>
          </ul>
      </a><!-- sl-menu-link -->

      <a href="#" class="sl-menu-link">
        <div class="sl-menu-item">
          <i class="menu-item-icon icon ion-ios-bookmarks-outline tx-20"></i>
          <span class="menu-item-label">Blog</span>
          <i class="menu-item-arrow fa fa-angle-down"></i>
        </div><!-- menu-item -->
        <ul class="sl-menu-sub nav flex-column">
            <li class="nav-item"><a href="{{ route('postcategory.view') }}" class="nav-link">Blog Category</a></li>
            <li class="nav-item"><a href="{{ route('blog.add') }}" class="nav-link">Add Post</a></li>
            <li class="nav-item"><a href="{{ route('blog.view') }}" class="nav-link">View Post</a></li>
          </ul>
      </a><!-- sl-menu-link -->

      <a href="#" class="sl-menu-link">
        <div class="sl-menu-item">
          <i class="menu-item-icon icon ion-ios-navigate-outline tx-24"></i>
          <span class="menu-item-label">Maps</span>
          <i class="menu-item-arrow fa fa-angle-down"></i>
        </div><!-- menu-item -->
      </a><!-- sl-menu-link -->
      <ul class="sl-menu-sub nav flex-column">
        <li class="nav-item"><a href="map-google.html" class="nav-link">Google Maps</a></li>
        <li class="nav-item"><a href="map-vector.html" class="nav-link">Vector Maps</a></li>
      </ul>
      <a href="mailbox.html" class="sl-menu-link">
        <div class="sl-menu-item">
          <i class="menu-item-icon icon ion-ios-email-outline tx-24"></i>
          <span class="menu-item-label">Mailbox</span>
        </div><!-- menu-item -->
      </a><!-- sl-menu-link -->
      <a href="#" class="sl-menu-link">
        <div class="sl-menu-item">
          <i class="menu-item-icon icon ion-ios-paper-outline tx-22"></i>
          <span class="menu-item-label">Pages</span>
          <i class="menu-item-arrow fa fa-angle-down"></i>
        </div><!-- menu-item -->
      </a><!-- sl-menu-link -->
      <ul class="sl-menu-sub nav flex-column">
        <li class="nav-item"><a href="blank.html" class="nav-link">Blank Page</a></li>
        <li class="nav-item"><a href="page-signin.html" class="nav-link">Signin Page</a></li>
        <li class="nav-item"><a href="page-signup.html" class="nav-link">Signup Page</a></li>
        <li class="nav-item"><a href="page-notfound.html" class="nav-link">404 Page Not Found</a></li>
      </ul>
    </div><!-- sl-sideleft-menu -->

    <br>
  </div><!-- sl-sideleft -->
