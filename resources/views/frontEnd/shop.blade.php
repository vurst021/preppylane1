<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Preppy Lane | Keep it simple and trendy !</title>

    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="css/core-style.css">
    <link rel="stylesheet" href="style.css">

</head>

<body>
    @include('frontEnd.partials.header')

    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb_area bg-img" style="background-image: url(img/bg-img/breadcumb.jpg);">
        <div class="container h-100 align-items-center">
            <div class="row h-50 align-items-center">
                <div class="col-12">
                    <div class="page-title text-center">
                        <h2>Products</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Shop Grid Area Start ##### -->
    <section class="shop_grid_area section-padding-55">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4 col-lg-3">
                    <div class="shop_sidebar_area">

                        <!-- ##### Single Widget ##### -->
                        <div class="widget catagory mb-50">
                            <!-- Widget Title -->
                            <h6 class="widget-title mb-30">Catagories</h6>

                            <!--  Catagories  -->
                            <div class="catagories-menu">
                                <ul id="menu-content2" class="menu-content collapse show">
                                    <!-- Single Item -->
                                    <li data-toggle="collapse" data-target="#clothing">
                                        
                                        <ul class="sub-menu collapse show" id="clothing">
                                            <li><a href="{{ route('frontEnd.shop')}}">All</a></li>
                                            @foreach ($categories as $category)
                                            <li><a href="{{ route('frontEnd.shop', [ 'category' => $category->slug ]) }}">{{ $category->name }}</a></li>
                                            @endforeach
                                        </ul>
                                    </li>
                                   
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-8 col-lg-9">
                    <div class="shop_grid_product_area">
                        <div class="row">
                            <div class="col-12">
                                <div class="product-topbar d-flex align-items-center justify-content-between">
                                    <!-- Total Products -->
                                    <div class="total-products">
                                        
                                        <p><span>{{ $productCount }}</span> {{ $categoryName }} found</p>
                                       
                                    </div>
                                    <!-- Sorting -->
                                    <div class="product-sorting d-flex">
                                        <p>Sort by:</p>
                                        <form action="#" method="get">
                                            <select name="select" id="sortByselect">
                                                <option value="value">Highest Rated</option>
                                                <option value="value">Newest</option>
                                                <option value="value">Price: $$ - $</option>
                                                <option value="value">Price: $ - $$</option>
                                            </select>
                                            <input type="submit" class="d-none" value="">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                            <div class="row">
                                <div class="col-12">
                                    <div class="popular-products-slides owl-carousel">
                                        
                                        @foreach ($products as $product)
                                        <!-- Single Product -->
                                        <div class="single-product-wrapper">
                                            <!-- Product Image -->
                                            <div class="product-img">
                                                <img src="{{ asset('img/products/'. $product->slug. '.jpg') }}" alt="">
                                                <!-- Hover Thumb -->
                                                <img class="hover-img" src="{{ asset('img/products/'. $product->slug. '.jpg') }}" alt="">
                                                <!-- Favourite -->
                                                <div class="product-favourite">
                                                    <a href="#" class="favme fa fa-heart"></a>
                                                </div>
                                            </div>
                                            <!-- Product Description -->
                                            <div class="product-description">
                                                <span>topshop</span>
                                                <a href="{{ route('frontEnd.shop.show', $product->slug ) }}">
                                                    <h6>{{ $product->name }}</h6>
                                                </a>
                                                <p class="product-price">{{ $product->presentPrice() }}</p>

                                                <!-- Hover Content -->
                                                <div class="hover-content text-center">
                                                    <!-- Add to Cart -->
                                                    <div class="add-to-cart-btn">
                                                        <a href="{{ route('frontEnd.shop.show', $product->slug ) }}" class="btn essence-btn text-center">View Product</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- ##### Shop Grid Area End ##### -->

    @include('frontEnd.partials.footer')

   

</body>

</html>