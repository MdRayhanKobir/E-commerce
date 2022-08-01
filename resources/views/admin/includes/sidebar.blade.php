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

      @if (Auth::user()->category==1)
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
      @else
      @endif



   @if (Auth::user()->cupon==1)
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
   @else
   @endif




    @if (Auth::user()->other==1)
    <a href="#" class="sl-menu-link">
        <div class="sl-menu-item">
          <i class="menu-item-icon icon ion-ios-filing-outline tx-24"></i>
          <span class="menu-item-label">Other's</span>
          <i class="menu-item-arrow fa fa-angle-down"></i>
        </div><!-- menu-item -->
        <ul class="sl-menu-sub nav flex-column">
            <li class="nav-item"><a href="{{ route('newsletter.view') }}" class="nav-link">Newsletter</a></li>
            <li class="nav-item"><a href="{{ route('seo.view') }}" class="nav-link">SEO Setting</a></li>
          </ul>
      </a><!-- sl-menu-link -->
    @else
    @endif


     @if (Auth::user()->product==1)
     <a href="#" class="sl-menu-link">
        <div class="sl-menu-item">
          <i class="menu-item-icon icon ion-ios-bookmarks-outline tx-20"></i>
          <span class="menu-item-label">Products</span>
          <i class="menu-item-arrow fa fa-angle-down"></i>
        </div><!-- menu-item -->
        <ul class="sl-menu-sub nav flex-column">
            <li class="nav-item"><a href="{{ route('product.add') }}" class="nav-link">Add Product</a></li>
            <li class="nav-item"><a href="{{ route('product.view') }}" class="nav-link">All View Products</a></li>
          </ul>
      </a><!-- sl-menu-link -->
     @else
     @endif

    @if (Auth::user()->blog==1)
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
    @else
    @endif

      @if (Auth::user()->order==1)
      <a href="#" class="sl-menu-link">
        <div class="sl-menu-item">
          <i class="menu-item-icon icon ion-ios-bookmarks-outline tx-20"></i>
          <span class="menu-item-label">Orders</span>
          <i class="menu-item-arrow fa fa-angle-down"></i>
        </div><!-- menu-item -->
        <ul class="sl-menu-sub nav flex-column">
            <li class="nav-item"><a href="{{ route('admin.order') }}" class="nav-link">New Orders</a></li>
            <li class="nav-item"><a href="{{ route('accept.payment') }}" class="nav-link">Accept Payment</a></li>
            <li class="nav-item"><a href="{{ route('cancel.payment') }}" class="nav-link">Cancel Order</a></li>
            <li class="nav-item"><a href="{{ route('process.payment') }}" class="nav-link">Process Delivary</a></li>
            <li class="nav-item"><a href="{{ route('delivared.payment') }}" class="nav-link">Delivary Success</a></li>
          </ul>
      </a><!-- sl-menu-link -->
      @else
      @endif

     @if (Auth::user()->report==1)
     <a href="#" class="sl-menu-link">
        <div class="sl-menu-item">
          <i class="menu-item-icon icon ion-ios-bookmarks-outline tx-20"></i>
          <span class="menu-item-label">Report</span>
          <i class="menu-item-arrow fa fa-angle-down"></i>
        </div><!-- menu-item -->
        <ul class="sl-menu-sub nav flex-column">
            <li class="nav-item"><a href="{{ route('today.order') }}" class="nav-link">Today Orders</a></li>
            <li class="nav-item"><a href="{{ route('today.delivary') }}" class="nav-link">Today Delivary</a></li>
            <li class="nav-item"><a href="{{ route('this.month') }}" class="nav-link">This Month</a></li>
            <li class="nav-item"><a href="{{ route('search.report') }}" class="nav-link">Search Report</a></li>

          </ul>
      </a><!-- sl-menu-link -->
     @else
     @endif

   @if (Auth::user()->role==1)
   <a href="#" class="sl-menu-link">
    <div class="sl-menu-item">
      <i class="menu-item-icon icon ion-ios-bookmarks-outline tx-20"></i>
      <span class="menu-item-label">User Role</span>
      <i class="menu-item-arrow fa fa-angle-down"></i>
    </div><!-- menu-item -->
    <ul class="sl-menu-sub nav flex-column">
        {{-- <li class="nav-item"><a href="" class="nav-link">Create Users</a></li> --}}
        <li class="nav-item"><a href="{{ route('user.all') }}" class="nav-link">Manage Users</a></li>
      </ul>
  </a><!-- sl-menu-link -->
   @else
   @endif

   @if (Auth::user()->return==1)
   <a href="#" class="sl-menu-link">
    <div class="sl-menu-item">
      <i class="menu-item-icon icon ion-ios-bookmarks-outline tx-20"></i>
      <span class="menu-item-label">Return Orders</span>
      <i class="menu-item-arrow fa fa-angle-down"></i>
    </div><!-- menu-item -->
    <ul class="sl-menu-sub nav flex-column">
        <li class="nav-item"><a href="{{ route('admin.return.rquest') }}" class="nav-link">Return Request</a></li>
        <li class="nav-item"><a href="{{ route('admin.return.allrequest') }}" class="nav-link">All Request</a></li>
      </ul>
  </a><!-- sl-menu-link -->
   @else
   @endif

     @if (Auth::user()->contact==1)
     <a href="#" class="sl-menu-link">
        <div class="sl-menu-item">
          <i class="menu-item-icon icon ion-ios-bookmarks-outline tx-20"></i>
          <span class="menu-item-label">Contact Message</span>
          <i class="menu-item-arrow fa fa-angle-down"></i>
        </div><!-- menu-item -->
        <ul class="sl-menu-sub nav flex-column">
            <li class="nav-item"><a href="{{ route('all.message') }}" class="nav-link">All Message</a></li>
          </ul>
      </a><!-- sl-menu-link -->
     @else
     @endif

    @if (Auth::user()->comment==1)
    <a href="#" class="sl-menu-link">
        <div class="sl-menu-item">
          <i class="menu-item-icon icon ion-ios-bookmarks-outline tx-20"></i>
          <span class="menu-item-label">Product Comments</span>
          <i class="menu-item-arrow fa fa-angle-down"></i>
        </div><!-- menu-item -->
        <ul class="sl-menu-sub nav flex-column">
            <li class="nav-item"><a href="" class="nav-link">New Comment</a></li>
            <li class="nav-item"><a href="" class="nav-link">All Comment</a></li>
          </ul>
      </a><!-- sl-menu-link -->
    @else
    @endif
    @if (Auth::user()->stock==1)
    <a href="#" class="sl-menu-link">
        <div class="sl-menu-item">
          <i class="menu-item-icon icon ion-ios-bookmarks-outline tx-20"></i>
          <span class="menu-item-label">Product Stock</span>
          <i class="menu-item-arrow fa fa-angle-down"></i>
        </div><!-- menu-item -->
        <ul class="sl-menu-sub nav flex-column">
            <li class="nav-item"><a href="{{ route('product.stock') }}" class="nav-link">Stock</a></li>

          </ul>
      </a><!-- sl-menu-link -->
    @else
    @endif

    @if (Auth::user()->setiing==1)
    <a href="#" class="sl-menu-link">
        <div class="sl-menu-item">
          <i class="menu-item-icon icon ion-ios-bookmarks-outline tx-20"></i>
          <span class="menu-item-label">Side Setting</span>
          <i class="menu-item-arrow fa fa-angle-down"></i>
        </div><!-- menu-item -->
        <ul class="sl-menu-sub nav flex-column">
            <li class="nav-item"><a href="" class="nav-link">Setings</a></li>
          </ul>
      </a><!-- sl-menu-link -->
    @else

    @endif







    </div><!-- sl-sideleft-menu -->

    <br>
  </div><!-- sl-sideleft -->
