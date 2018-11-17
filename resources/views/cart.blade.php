@extends('layouts.header')
@section('content')
<link rel="stylesheet" type="text/css" href="{{asset('/css/css/stylestable.css')}}" media="all" />
<ol class="breadcrumb">
<li class="breadcrumb-item">
            <a href="index.html">Inicio</a>
        </li>
        <li class="breadcrumb-item active">Shop</li>
    </ol>
    @if(session()->has('success_message'))
<div class="alert alert-success">{{session()->get('success_message')}}</div>@endif
<div class="cart-section container">
        <div>
            
            @if(Cart::instance('default')->count()>0)
            
            <h2>{{Cart::instance('default')->count()}} item(s) in Shopping Cart</h2>

            <div class="cart-table">
            @foreach(Cart::content() as $item)
                                <div class="cart-table-row">
                    <div class="cart-table-row-left">
                        <a href="{{route('shop.show',$item->model->slug)}}"><img src="{{asset('uploads/'.$item->model->slug.'.jpg')}}" alt="item" class="cart-table-img"></a>
                        <div class="cart-item-details">
                            <div class="cart-table-item"><a href="{{route('shop.show',$item->model->slug)}}">{{$item->model->name}}</a></div>
                            <div class="cart-table-description">{{$item->model->details}}</div>
                        </div>
                    </div>
                    <div class="cart-table-row-right">
                        <div class="cart-table-actions">
                            <form action="{{route('cart.destroy',$item->rowId)}}" method="POST">
                               {{csrf_field()}}{{method_field('DELETE')}}

                                <button type="submit" class="cart-options" style="border:none;">Remove</button>
                            </form>

                             <form action="{{route('cart.switchToSaveForLater',$item->rowId)}}" method="POST">
                               {{csrf_field()}}

                                <button type="submit" class="cart-options" style="border:none;">Save for Later</button>
                            </form>

                        </div>
                        <div>
                            <select class="quantity" data-id="88aad65a1416c8271cddc2ee48e4a30b" data-productQuantity="10">
                                                                    <option selected>1</option>
                                                                    <option >2</option>
                                                                    <option >3</option>
                                                                    <option >4</option>
                                                                    <option >5</option>
                                                            </select>
                        </div>
                        <div>{{$item->model->presetPrice()}}</div>
                    </div>
                </div> @endforeach
                                
                   
                
            </div> <!-- end cart-table -->

            
                <a href="#" class="have-code">Have a Code?</a>

                <div class="have-code-container">
                    <form action="https://laravelecommerceexample.ca/coupon" method="POST">
                        <input type="hidden" name="_token" value="ax8n3UqdsnhFvQ3mGn8AbDiR3biFLr4BDxoGR4of">
                        <input type="text" name="coupon_code" id="coupon_code">
                        <button type="submit" class="button button-plain">Apply</button>
                    </form>
                </div> <!-- end have-code-container -->
            
            <div class="cart-totals">
                <div class="cart-totals-left">
                    Shipping is free because we’re awesome like that. Also because that’s additional stuff I don’t feel like figuring out :).
                </div>

                <div class="cart-totals-right">
                    <div>
                        Subtotal <br>
                                                Tax (16%)<br>
                        <span class="cart-totals-total">Total</span>
                    </div>
                    <div class="cart-totals-subtotal">
                        {{presentPrice(Cart::subtotal())}}<br>
                                               {{presentPrice(Cart::tax())}} <br>
                        <span class="cart-totals-total">{{presentPrice(Cart::total())}}</span>
                    </div>
                </div>
            </div> <!-- end cart-totals -->

            <div class="cart-buttons">
                <a href="{{route('shop.index')}}" class="button" style="background-color:powderblue;color:white;padding-left:30px;padding-right:30px;padding-top:20px;padding-bottom:20px;">Continue Shopping</a>
                <a href="{{route('checkout.index')}}" class="button-primary" style="background-color:lightgrey;color:white;padding-left:30px;padding-right:30px;padding-top:20px;padding-bottom:20px;">Proceed to Checkout</a>
            </div>
@else
<h6>No items in cart</h6><br><br>
<a href="{{route('shop.index')}}" class="button" style="background-color:powderblue;color:white;padding-left:30px;padding-right:30px;padding-top:20px;padding-bottom:20px;">Continue Shopping</a><br><br><br>
            @endif
            
           @if(Cart::instance('saveForLater')->count()>0)
            
            <h2>{{Cart::instance('saveForLater')->count()}} item(s) in Shopping Cart</h2>


            <div class="saved-for-later cart-table">
                        @foreach(Cart::instance('saveForLater')->content() as $item)
                                <div class="cart-table-row">
                    <div class="cart-table-row-left">
                        <a href="{{route('shop.show',$item->model->slug)}}"><img src="{{asset('uploads/'.$item->model->slug.'.jpg')}}" alt="item" class="cart-table-img"></a>
                        <div class="cart-item-details">
                            <div class="cart-table-item"><a href="{{route('shop.show',$item->model->slug)}}">{{$item->model->name}}</a></div>
                            <div class="cart-table-description">{{$item->model->details}}</div>
                        </div>
                    </div>
                    <div class="cart-table-row-right">
                        <div class="cart-table-actions">
                            <form action="{{route('saveForLater.destroy',$item->rowId)}}" method="POST">
                               {{csrf_field()}}{{method_field('DELETE')}}

                                <button type="submit" class="cart-options" style="border:none;">Remove</button>
                            </form>

                             <form action="{{route('saveForLater.switchToCart',$item->rowId)}}" method="POST">
                               {{csrf_field()}}

                                <button type="submit" class="cart-options" style="border:none;">Move to Cart</button>
                            </form>

                        </div>
                        <div>
                            <select class="quantity" data-id="88aad65a1416c8271cddc2ee48e4a30b" data-productQuantity="10">
                                                                    <option selected>1</option>
                                                                    <option >2</option>
                                                                    <option >3</option>
                                                                    <option >4</option>
                                                                    <option >5</option>
                                                            </select>
                        </div>
                        <div>{{$item->model->presetPrice()}}</div>
                    </div>
                </div> @endforeach
                
            </div> <!-- end saved-for-later -->@else <h6>No items in save for later</h6>
@endif
            
        </div>

    </div> <!-- end cart-section -->

  
<style>.cart-section {
  display: grid;
  grid-template-columns: 2fr 1fr;
  grid-gap: 30px;
  margin: 60px auto;
}

.cart-section h2 {
  margin-bottom: 30px;
}

.cart-section .cart-table-row {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  border-top: 1px solid #919191;
  padding: 14px 0;
}

.cart-section .cart-table-row:last-child {
  border-bottom: 1px solid #919191;
}

.cart-section .cart-table-row .cart-table-row-left,
.cart-section .cart-table-row .cart-table-row-right {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
}

.cart-section .cart-table-row .cart-table-row-left {
  width: 50%;
}

.cart-section .cart-table-row .cart-table-row-right {
  width: 33%;
  padding-top: 10px;
}

.cart-section .cart-table-row .cart-table-img {
  max-height: 10%;
}

.cart-section .cart-table-row .cart-table-actions {
  text-align: right;
  font-size: 14px;
}

.cart-section .cart-table-row .cart-item-details {
  padding-top: 5px;
}

.cart-section .cart-table-row .cart-table-description {
  color: #919191;
}

.cart-section .cart-table-row .cart-options {
  color: #212121;
  background: transparent;
  font-size: 14px;
  font-weight: 300;
  padding: 0;
}

.cart-section .cart-table-row .cart-options:hover {
  color: #6e6d6d;
}

.cart-section .cart-totals {
  margin: 30px 0;
  padding: 20px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  background: #F5F5F5;
}

.cart-section .cart-totals .cart-totals-left {
  width: 50%;
}

.cart-section .cart-totals .cart-totals-right {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  width: 35%;
  text-align: right;
}

.cart-section .cart-totals .cart-totals-total {
  font-weight: bold;
  font-size: 22px;
  line-height: 2;
}

.cart-section .cart-buttons {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  margin-bottom: 40px;
}

.cart-section .have-code {
  display: block;
  margin: 14px 0;
  text-align: right;
}

.cart-section .have-code-container {
  border: 1px solid #919191;
  padding: 16px;
  width: 50%;
  margin-left: auto;
}

.cart-section .have-code-container form {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
}

.cart-section .have-code-container input[type="text"] {
  width: 70%;
  padding: 10px;
  font-size: 16px;
}

.cart-section .have-code-container input[type="submit"] {
  background: white;
  border: 1px solid #919191;
  padding-top: 8px;
  padding-bottom: 8px;
}

.cart-section .have-code-container input[type="submit"]:hover {
  background: #212121;
}

h1.checkout-heading {
  margin-top: 40px;
}

.checkout-section {
  display: grid;
  grid-template-columns: 1fr 1fr;
  grid-gap: 30px;
  margin: 40px auto 80px;
}

</style>





<footer id="mmm">
  <div><h1 style="margin-top:10px;font-size:25px;text-align:left;padding-left:40px;color:black;"><strong>You might also like...</strong></h1>
  @foreach($mightAlsoLike as $product)
  <a href="{{route('shop.show',$product->slug)}}"><img src= "{{asset('uploads/'.$product->slug.'.jpg')}}" style="width:16%;height:16%;margin:20px;margin-bottom:40px;"></a>@endforeach
  </div>

</footer>
<footer class="footer-main-w3layouts py-md-5 py-4">
        <div class="container-fluid px-lg-5 px-3">
            <div class="row">
                <div class="col-lg-5 footer-grid-w3ls">
                    <h3 class="mb-4">About Us</h3>
                    <p>Lorem ipsum dolor sit amet, Cras blandit nibh ut pretium elementum. Duis bibendum convallis nunc a dictum. Quisque ac ipsum porta, ultrices metus sit amet, cursus nisl. Duis aliquet varius sem sit amet tempus. Curabitur vitae dui bibendum. </p>
                    <div class="row mt-4">
                        <div class="col-md-6">
                            <h3 class="text-capitalize mb-3">Connect With Social</h3>
                            <p><span class="fab fa-twitter"></span> twitter/@my_website</p>
                            <p><span class="fab fa-instagram"></span> instagram/@my_website</p>
                            <p><span class="fab fa-youtube mb-5"></span> youtube/@my_website</p>
                            <a href="#" class="facebook-footer mr-2"><span class="fab mr-1 fa-facebook-f"></span> Facebook</a>
                            <a href="#" class="twitter-footer"><span class="fab mr-1 fa-twitter"></span> Twitter</a>
                        </div>
                        <div class="col-md-6">
                            <h3 class="mb-4">Address</h3>
                            <address class="mb-0">
                            <p class="mb-2"><i class="fas fa-map-marker-alt"></i> 8088H 5th Street Parking, King <br>Block, New York City.</p>
                            <p><i class="fas mr-1 fa-phone"></i> +12 445 8453 8088</p>
                            <p><i class="fas mr-1 fa-fax"></i> +11 997 2040 9436 </p>
                            <p><i class="far mr-1 fa-envelope-open"></i> <a href="mailto:info@example.com">info@example.com</a></p>
                        </address>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 footer-grid-w3ls">
                    <h3 class="mb-4">Instagram</h3>
                    <div class="blog-grids row mb-3">
                        <div class="col-md-4 blog-grid-left">
                            <a href="single.html">
                            <img src="css/images/banner1.jpg" class="img-fluid" alt="">
                        </a>
                        </div>
                        <div class="col-md-8 blog-grid-right">
                            <h5>
                                <a href="single.html">Lorem ipsum dolor sit amet . Maecenas male non felis convallis nunc </a>
                            </h5>
                            <div class="sub-meta">
                                <span>
                                <i class="far fa-clock"></i> 10 June, 2018</span>
                            </div>
                        </div>
                    </div>
                    <div class="blog-grids row mb-3">
                        <div class="col-md-4 blog-grid-left">
                            <a href="single.html">
                            <img src="css/images/banner2.jpg" class="img-fluid" alt="">
                        </a>
                        </div>
                        <div class="col-md-8 blog-grid-right">
                            <h5>
                                <a href="single.html">Lorem ipsum dolor sit amet . Maecenas male non felis convallis nunc </a>
                            </h5>
                            <div class="sub-meta">
                                <span>
                                <i class="far fa-clock"></i> 22 June, 2018</span>
                            </div>
                        </div>
                    </div>
                    <div class="blog-grids row mb-3">
                        <div class="col-md-4 blog-grid-left">
                            <a href="single.html">
                            <img src="css/images/banner3.jpg" class="img-fluid" alt="">
                        </a>
                        </div>
                        <div class="col-md-8 blog-grid-right">
                            <h5>
                                <a href="single.html">Lorem ipsum dolor sit amet . Maecenas male non felis convallis nunc </a>
                            </h5>
                            <div class="sub-meta">
                                <span>
                                <i class="far fa-clock"></i> 23 June, 2018</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 footer-grid-w3ls">
                    <h3 class="mb-4">We Offer</h3>
                    <ul>
                        <li><i class="fas mr-1 fa-long-arrow-alt-right"></i> Blandit nibh ut pretium elementum.</li>
                        <li><i class="fas mr-1 fa-long-arrow-alt-right"></i> Convallis nunc a dictum ipsum.</li>
                        <li><i class="fas mr-1 fa-long-arrow-alt-right"></i> Ultrices metus sit amet, cursus.</li>
                    </ul>
                    <h3 class="mt-4 mb-4">Newsletter</h3>
                    <p class="mb-3">Subscribe to Our Newsletter to get News, Amazing Offers &amp; More</p>
                    <form action="#" method="post">
                        <input type="email" name="Email" placeholder="Enter your email..." required="">
                        <button class="btn1"><i class="far fa-paper-plane"></i></button>
                        <div class="clearfix"> </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="copyright-w3layouts mt-md-5 mt-4 text-center">
            <p>© 2018 Inwardly . All Rights Reserved | Design by <a href="http://www.W3Layouts.com" target="_blank">W3Layouts</a></p>
        </div>
    </footer>
<style>
* {
    box-sizing: border-box;
}

/* Create two columns/boxes that floats next to each other */
#ll {
    float: left;
    width: 50%;

    background: white;
    padding: 20px;
}

/* Style the list inside the menu */
#lll{
    list-style-type: none;
    padding: 0;
}

article {
    float: right;
    padding: 20px;
    width: 50%;
    background-color: white;
    height: 300px; /* only for demonstration, should be removed */
}

/* Clear floats after the columns */
section:after {
    content: "";
    display: table;
    clear: both;
}

/* Style the footer */
#mmm {
    background-color: #E5ECE2;
    padding: 10px;
    text-align: center;
    color: white;
}
#mmmm {
    background-color: black;
    padding: 10px;
    text-align: center;
    color: white;
}

/* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
@media (max-width: 600px) {
    nav, article {
        width: 100%;
        height: auto;
    }
}

</style>
    @endsection