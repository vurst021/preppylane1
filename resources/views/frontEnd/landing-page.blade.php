
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
    
    @include ('frontEnd.partials.header')

    <!-- ##### New Arrivals Area Start ##### -->
    <section class="new_arrivals_area  clearfix ">
        <div class="container">
            <div class="row">
                <div class="col-12 " >
                    <div class="section-heading text-center h-100 breadcumb_area bg-img align-item-center"  style="background-image: url(img/bg-img/breadcumb.jpg);">
                        <br>
                       <a href="{{ route('frontEnd.shop')}}"> <h2>Shop Products </h2></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
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
                                <div class="hover-content">
                                    <!-- Add to Cart -->
                                    <div class="add-to-cart-btn">
                                        <a href="{{ route('frontEnd.shop.show', $product->slug ) }}" class="btn essence-btn">View Product</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>
    

   @include ('frontEnd.partials.footer')

</body>

</html>