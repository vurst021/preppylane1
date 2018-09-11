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
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">


</head>

<body>

    @include('frontEnd.partials.header')

    <div class="container">
        <div class="card shopping-cart">
            <div class="card-header bg-dark text-light">
                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                Cart
                <a href="{{route('frontEnd.shop')}}" class="btn btn-outline-info btn-sm pull-right">Continue shopping</a>
                <div class="clearfix"></div>
            </div>
            @if(session()->has('success_message'))
                <div class="alert alert-success">
                    {{ session()->get('success_message')}}
                </div>
            @endif

            @if(count($errors)>0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if(Cart::count() > 0 )

            <div class="card-body">
                <h2>{{ Cart::count() }} item(s) in Shopping Cart</h2>
                    @foreach(Cart::content() as $item)
                    <!-- PRODUCT -->
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-2 text-center">
                             <a href="{{ route('frontEnd.shop.show', $item->model->slug) }}"><img class="img-responsive" src="{{ asset('/img/products/'. $item->model->slug. '.jpg')}}" alt="prewiew" width="120" height="80"></a>
                        </div>
                        <div class="col-12 text-sm-center col-sm-12 text-md-left col-md-6">
                            <h4 class="product-name"><a href="{{ route('frontEnd.shop.show', $item->model->slug) }}"><strong>{{ $item->name}}</strong></a></h4>
                            <h4>
                                <small>{{ $item->details}}</small>
                            </h4>
                            <h5>
                                <small>Size : {{ $item->options->size}}</small>
                            </h5>
                            <h5>
                                <small>Size : {{ $item->options->color}}</small>
                            </h5>
                        </div>
                        <div class="col-12 col-sm-12 text-sm-center col-md-4 text-md-right row">
                            <div class="col-3 col-sm-3 col-md-6 text-md-right" style="padding-top: 5px">
                                <h6><strong>{{ $item->model->presentprice()}}<span class="text-muted">x</span></strong></h6>
                            </div>
                            <div class="col-4 col-sm-4 col-md-4">
                                    <input type="number" step="1" max="99" min="1" value="{{ $item->qty }}" title="Qty" class="qty form-control" size="4">
                            </div>
                            <div class="col-2 col-sm-2 col-md-2 text-right">
                                <form method="POST" action="{{route('frontEnd.cart.destroy', $item->rowId) }}">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}

                                    <button type="submit" class="btn btn-outline-danger btn-xs">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <!-- END PRODUCT -->
                    @endforeach
                @else
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 text-center">

                            <h1>No Products.</h1>

                        </div>
                    </div>


                @endif
                <div class="pull-right">
                    <a href="" class="btn btn-outline-secondary pull-right">
                        Update shopping cart
                    </a>
                </div>
            </div>
            <div class="card-footer">
                <div class="coupon col-md-5 col-sm-5 no-padding-left pull-left">
                    <div class="row">
                        <div class="col-6">
                            <input type="text" class="form-control" placeholder="cupone code">
                        </div>
                        <div class="col-6">
                            <input type="submit" class="btn btn-default" value="Use cupone">
                        </div>
                    </div>
                </div>
                <div class="pull-right text-right">
                    <div class="pull-right" style="margin: 5px">
                        SubTotal:<br>
                        Tax:<br>
                        Total:
                    </div>
                    <div class="pull-right" style="margin: 5px">
                        {{ presentPrice(Cart::subtotal())}}<br>
                        {{ presentPrice(Cart::tax())}}<br>
                        {{ presentPrice(Cart::total())}}
                    </div>
                     <br>
                    <a href="" class="btn btn-success pull-right">Checkout</a>
                </div>
            </div>
        </div>
    </div>


    @include('frontEnd.partials.footer')

    
</body>

</html>