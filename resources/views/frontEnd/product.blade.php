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
    <link rel="icon" href="{{ asset('/img/core-img/favicon.ico')}}">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="{{ asset('/css/core-style.css') }}">
    <link rel="stylesheet" href="{{ asset('/style.css') }}">

</head>

<body>
    @include('frontEnd.partials.header')
    <!-- ##### Single Product Details Area Start ##### -->
    <section class="single_product_details_area d-flex align-items-center">

        <!-- Single Product Thumb -->
        <div class="single_product_thumb clearfix">
            <div class="product_thumbnail_slides " style="border: solid;">
                <img src="{{ asset('img/products/'. $product->slug. '.jpg') }}" alt="" />
                
            </div>
        </div>
        
        <!-- Single Product Description -->
        <div class="single_product_desc clearfix">
            <span>PreppyLane</span>
            <a href="cart.html">
                <h2>{{ $product->name }}</h2>
            </a>
            <p class="product-price">{{ $product->presentPrice() }}</p>
            <p class="product-desc">{{ $product->description}}</p>

            <!-- Form -->
            <form class="cart-form clearfix" action="{{ route('frontEnd.cart.store') }}" method="post">
                {{ csrf_field() }} 
                <!-- Select Box -->

                Quantity: <input type="number" name="quantity" id="quantity" min="0" value="1" max="99" class="form-control col-2 text-center"/>
                <div class="select-box d-flex mt-50 mb-30">
                    <select name="productSize" id="productSize" class="mr-5">
                        <option value="XL">Size: XLarge
                            <p>
                                
                            </p></option>
                        <option value="X">Size: Large</option>
                        <option value="M">Size: Medium</option>
                        <option value="S">Size: Small</option>
                    </select>
                    <select name="productColor" id="productColor">
                        <option value="Black">Color: Black</option>
                        <option value="White">Color: White</option>
                        <option value="Red">Color: Red</option>
                        <option value="Purple">Color: Purple</option>
                    </select>
                </div>
                <!-- Cart & Favourite Box -->
                <div class="cart-fav-box d-flex align-items-center">
                    <!-- Cart -->
                    
                    <input type="hidden" name="id" value="{{ $product->id }}">
                    <input type="hidden" name="name" value="{{ $product->name }}">
                    <input type="hidden" name="price" value="{{ $product->price }}">
                        
                    <button type="submit" name="addtocart" value="5" class="btn essence-btn">Add to cart</button>
                    <!-- Favourite -->
                    <div class="product-favourite ml-4">
                        <a href="#" class="favme fa fa-heart"></a>
                    </div>
                </div>
            </form>
        </div>

    </section>
    <!-- ##### Single Product Details Area End ##### -->

    @include('frontEnd.partials.footer')

</body>

</html>