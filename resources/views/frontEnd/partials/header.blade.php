    <!-- ##### Header Area Start ##### -->
<div>
    <header class="header_area">
        <div class="classy-nav-container breakpoint-off d-flex align-items-center justify-content-between">
            <!-- Classy Menu -->
            <nav class="classy-navbar" id="essenceNav">
                <!-- Logo -->
                <a class="nav-brand" href="{{ route('frontEnd.landing-page')}}">PreppyLane</a>
                <!-- Navbar Toggler -->
                <div class="classy-navbar-toggler">
                    <span class="navbarToggler"><span></span><span></span><span></span></span>
                </div>
                <!-- Menu -->
                <div class="classy-menu">
                    <!-- close btn -->
                    <div class="classycloseIcon">
                        <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                    </div>
                    <!-- Nav Start -->
                    <div class="classynav">
                        <ul>
                            <li><a href="{{ route('frontEnd.shop')}}">Shop</a>
                                <div class="megamenu">
                                    <ul class="single-mega cn-col-4">
                                        <li class="title">Women's Collection</li>
                                        <li><a href="shop.html">Dresses</a></li>
                                        <li><a href="shop.html">Tops &amp; Shirts</a></li>
                                        <li><a href="shop.html">Shorts</a></li>
                                        <li><a href="shop.html">Pants</a></li>
                                    </ul>
                                   
                                    <div class="single-mega cn-col-4">
                                        <img src="{{ asset('/img/bg-img/bg-6.jpg')}}" alt="">
                                    </div>
                                </div>
                            </li>
                            
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </div>
                    <!-- Nav End -->
                </div>
            </nav>

            <!-- Header Meta Data -->
            <div class="header-meta d-flex clearfix justify-content-end">
                <!-- Search Area -->
                <div class="search-area">
                    <form action="#" method="post">
                        <input type="search" name="search" id="headerSearch" placeholder="Type for search">
                        <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </form>
                </div>
                <!-- Favourite Area -->
                <div class="favourite-area">
                    <a href="#"><img src="{{ asset('/img/core-img/heart.svg')}}" alt=""></a>
                </div>
                <!-- User Login Info -->
                <div class="user-login-info">
                    <a href="#"><img src="{{ asset('/img/core-img/user.svg')}}" alt=""></a>
                </div>
                <!-- Cart Area -->
                <div class="cart-area">
                    <a href="" id="essenceCartBtn" data-toggle="modal" data-target=".bd-example-modal-lg"><img src="{{ asset('/img/core-img/bag.svg')}}" alt=""> <span>3</span></a>
                </div>
            </div>

        </div>
    </header>

    <!-- ##### Right Side Cart End ##### -->

    <!-- ##### Header Area End ##### -->



<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content ">
        <div class="modal-header">
            <h5 class="modal-title">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body col-sm-12">
            <div class="cart-content d-flex ">

                <!-- Cart List Area -->
                <div class="cart-list row">
                    @foreach(Cart::content() as $item)
                    <!-- Single Cart Item -->
                    <div class="card bg-dark text white col-md-4">
                        <a href="{{ route('frontEnd.shop.show', $item->model->slug ) }}" class="product-image">
                            <img src="{{ asset('img/products/'. $item->model->slug. '.jpg') }}" class="card-img" alt="">
                            <!-- Cart Item Desc -->
                            <div class="card-img-overlay">
                              <span class="product-remove"><i class="fa fa-close" aria-hidden="true"></i></span>
                                
                                <h6>{{ $item->model->name }} </h6>
                                <p class="size">Size</p>
                                <p class="color">Color</p>
                                <p class="price">{{ $item->model->presentPrice() }}</p>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>    

            <!-- Cart Summary -->
            <div class="cart-amount-summary col-sm-12">

                <h2>Summary</h2>
                <ul class="summary-table justify-content-end">
                    <li><span>subtotal:</span> <span>$274.00</span></li>
                    <li><span>delivery:</span> <span>Free</span></li>
                    <li><span>discount:</span> <span>-15%</span></li>
                    <li><span>total:</span> <span>$232.00</span></li>
                </ul>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Continue Shopping</button>
            <button type="button" class="btn btn-primary">Checkout</button>
        </div>
    </div>
  </div>
</div>