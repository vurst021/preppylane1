<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Large modal</button>


<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content ">
        <div class="modal-header">
            <h5 class="modal-title">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
         <div class="cart-content d-flex">

            <!-- Cart List Area -->
            <div class="cart-list">
                @foreach(Cart::content() as $item)
                <!-- Single Cart Item -->
                <div class="single-cart-item">
                    <a href="{{ route('frontEnd.shop.show', $item->model->slug ) }}" class="product-image">
                        <img src="{{ asset('img/products/'. $item->model->slug. '.jpg') }}" class="cart-thumb" alt="">
                        <!-- Cart Item Desc -->
                        <div class="cart-item-desc">
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
              

            <!-- Cart Summary -->
            <div class="cart-amount-summary">

                <h2>Summary</h2>
                <ul class="summary-table">
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