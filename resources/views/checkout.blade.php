@extends('layouts.header')
@section('content')
<link rel="stylesheet" type="text/css" href="{{asset('/css/css/stylestable.css')}}" media="all" />
<ol class="breadcrumb">
<li class="breadcrumb-item">
            <a href="index.html">Inicio</a>
        </li>
        <li class="breadcrumb-item active">Shop</li>
    </ol>


<style type="text/css">
  h1.checkout-heading {
  margin-top: 40px;
}

.checkout-section {
  display: grid;
  grid-template-columns: 1fr 1fr;
  grid-gap: 30px;
  margin: 40px auto 80px;
}

.checkout-section .checkout-table-container {
  margin-left: 124px;
}

.checkout-section h2 {
  margin-bottom: 28px;
}

.checkout-section .checkout-table-row {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  border-top: 1px solid #919191;
  padding: 14px 0;
}

.checkout-section .checkout-table-row:last-child {
  border-bottom: 1px solid #919191;
}

.checkout-section .checkout-table-row .checkout-table-row-left,
.checkout-section .checkout-table-row .checkout-table-row-right {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}

.checkout-section .checkout-table-row .checkout-table-row-left {
  width: 75%;
}

.checkout-section .checkout-table-row .checkout-table-img {
  max-height: 50%;
  max-width: 50%;
}

.checkout-section .checkout-table-row .checkout-table-description {
  color: #919191;
}

.checkout-section .checkout-table-row .checkout-table-price {
  padding-top: 6px;
}

.checkout-section .checkout-table-row .checkout-table-quantity {
  border: 1px solid #919191;
  padding: 4px 12px;
  margin-right: 5px;
}

.checkout-section .checkout-totals {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  border-bottom: 1px solid #919191;
  padding: 18px 0;
  line-height: 2;
}

.checkout-section .checkout-totals .checkout-totals-right {
  text-align: right;
}

.checkout-section .checkout-totals .checkout-totals-total {
  font-weight: bold;
  font-size: 22px;
  line-height: 2.2;
}
form .half-form {
  display: grid;
  grid-template-columns: 1fr 1fr;
  grid-gap: 30px;
}

form button[type="submit"] {
  border-style: none;
  cursor: pointer;
  font-size: 18px;
  line-height: 1.6;
}

.form-group {
  margin-bottom: 20px;
}

.form-group label {
  display: block;
}

.form-group input {
  width: 100%;
  padding: 12px;
  font-size: 16px;
}
.container {
  margin: auto;
  max-width: 1200px;
}
.have-code {
  display: block;
  margin: 14px 0;
  text-align: right;
}

.have-code-container {
  border: 1px solid #919191;
  padding: 16px;
  width: 50%;
  margin-left: auto;
}

.have-code-container form {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
}

.have-code-container input[type="text"] {
  width: 70%;
  padding: 10px;
  font-size: 16px;
}

.have-code-container input[type="submit"] {
  background: white;
  border: 1px solid #919191;
  padding-top: 8px;
  padding-bottom: 8px;
}

.have-code-container input[type="submit"]:hover {
  background: #212121;
}

.cart-count {
  display: inline-block;
  background: #FFD94D;
  color: #212121;
  line-height: 0;
  border-radius: 50%;
  font-size: 14px;
}

.cart-count span {
  display: inline-block;
  padding-top: 50%;
  padding-bottom: 50%;
  margin-left: 6px;
  margin-right: 6px;
}

.StripeElement {
  background-color: white;
  
  padding: 16px 16px;
  
  border-radius:5px;
  border: 1px solid #ccc;
 
}

.StripeElement--focus {
 
}

.StripeElement--invalid {
  border-color: #fa755a;
}

.StripeElement--webkit-autofill {
  background-color: #fefde5 !important;
}

.button {
  border: 1px solid #212121;
  padding: 12px 40px;
}

.button:hover {
  color: #e9e9e9;
  background: #212121;
}

.button-white {
  border: 1px solid #e9e9e9;
  color: #e9e9e9 !important;
}

.button-white:hover {
  color: #212121 !important;
  background: #e9e9e9;
}

.button-primary {
  background: #3EBFA4;
  color: white !important;
  padding: 12px 40px;
}

.button-primary:hover {
  background: #35a48d;
}

 .button-primary:disabled {
  background: #63cdb7;
  cursor: not-allowed;
}

.button-plain {
  border: 1px solid #212121 !important;
  background: transparent;
}

.button-container {
  margin: 80px 0;
}

.button {
  margin-right: 14px;
}

</style>

<div class="container">
<br><br>
        @if (session()->has('success_message'))
            <div class="spacer"></div>
            <div class="alert alert-success">
                {{ session()->get('success_message') }}
            </div>
        @endif

        @if(count($errors) > 0)
            <div class="spacer"></div>
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{!! $error !!}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="container">
             <h1 class="checkout-heading stylish-heading">Checkout</h1>
        <div class="checkout-section">
            <div>
                <form action="{{ route('checkout.store') }}" method="POST" id="payment-form">
                    {{ csrf_field() }}
                    <h2>Billing Details</h2>

                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
                    </div>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" id="address" name="address" value="{{ old('address') }}" required>
                    </div>

                    <div class="half-form">
                        <div class="form-group">
                            <label for="city">City</label>
                            <input type="text" class="form-control" id="city" name="city" value="{{ old('city') }}" required>
                        </div>
                        <div class="form-group">
                            <label for="province">Province</label>
                            <input type="text" class="form-control" id="province" name="province" value="{{ old('province') }}" required>
                        </div>
                    </div> <!-- end half-form -->

                    <div class="half-form">
                        <div class="form-group">
                            <label for="postalcode">Postal Code</label>
                            <input type="text" class="form-control" id="postalcode" name="postalcode" value="{{ old('postalcode') }}" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone') }}" required>
                        </div>
                    </div> <!-- end half-form -->

                    <div class="spacer"></div>

                    <h2>Payment Details</h2>

                    <div class="form-group">
                        <label for="name_on_card">Name on Card</label>
                        <input type="text" class="form-control" id="name_on_card" name="name_on_card" value="">
                    </div>

                    <div class="form-group">
                        <label for="card-element">
                          Credit or debit card
                        </label>
                        <div id="card-element">
                          <!-- a Stripe Element will be inserted here. -->
                        </div>

                        <!-- Used to display form errors -->
                        <div id="card-errors" role="alert"></div>
                    </div>
                    <div class="spacer"></div>

                    <button type="submit" id="complete-order" class="button-primary full-width">Complete Order</button>


                </form>
            </div>



            <div class="checkout-table-container">
                <h2>Your Order</h2>

                <div class="checkout-table">
                    @foreach (Cart::content() as $item)
                    <div class="checkout-table-row">
                        <div class="checkout-table-row-left">
                            <img src="{{ asset('uploads/'.$item->model->slug.'.jpg') }}" alt="item" class="checkout-table-img">
                            <div class="checkout-item-details">
                                <div class="checkout-table-item">{{ $item->model->name }}</div>
                                <div class="checkout-table-description">{{ $item->model->details }}</div>
                                <div class="checkout-table-price">{{ $item->model->presetPrice() }}</div>
                            </div>
                        </div> <!-- end checkout-table -->

                        <div class="checkout-table-row-right">
                            <div class="checkout-table-quantity">{{ $item->qty }}</div>
                        </div>
                    </div> <!-- end checkout-table-row -->
                    @endforeach



                </div> <!-- end checkout-table -->

                <div class="checkout-totals">
                    <div class="checkout-totals-left">
                        Subtotal <br>
                        {{-- Discount (10OFF - 10%) <br> --}}
                        Tax <br>
                        <span class="checkout-totals-total">Total</span>

                    </div>

                    <div class="checkout-totals-right">
                        {{ presentPrice(Cart::subtotal()) }} <br>
                        {{-- -$750.00 <br> --}}
                        {{ presentPrice(Cart::tax()) }} <br>
                        <span class="checkout-totals-total">{{ presentPrice(Cart::total()) }}</span>

                    </div>
                </div> <!-- end checkout-totals -->

            </div>

        </div> <!-- end checkout-section -->
    </div>
</div>
          <!-- end checkout-section -->
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
                        <input type="email" name="Email" placeholder="Enter your email..."  ="">
                        <button class="btn1"><i class="far fa-paper-plane"></i></button>
                        <div class="clearfix"> </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="copyright-w3layouts mt-md-5 mt-4 text-center">
            <p>© 2018 Inwardly . All Rights Reserved | Design by <a href="http://www.W3Layouts.com" target="_blank">W3Layouts</a></p>
        </div>
    </footer><script src="https://js.stripe.com/v3/"></script>
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

</style><script>
        (function(){
            // Create a Stripe client
            var stripe = Stripe('pk_test_ldgdWubCs5T9t1nCKKzeSMUt');
             // Create an instance of Elements
            var elements = stripe.elements();
             // Custom styling can be passed to options when creating an Element.
            // (Note that this demo uses a wider set of styles than the guide below.)
            var style = {
              base: {
                color: '#32325d',
                lineHeight: '18px',
                fontFamily: '"Roboto", Helvetica Neue", Helvetica, sans-serif',
                fontSmoothing: 'antialiased',
                fontSize: '16px',
                '::placeholder': {
                  color: '#aab7c4',
                }
              },
              invalid: {
                color: '#fa755a',
                iconColor: '#fa755a'
              }
            };
             // Create an instance of the card Element
            var card = elements.create('card', {
                style: style,
                hidePostalCode: true
            });
             // Add an instance of the card Element into the `card-element` <div>
            card.mount('#card-element');
             // Handle real-time validation errors from the card Element.
            card.addEventListener('change', function(event) {
              var displayError = document.getElementById('card-errors');
              if (event.error) {
                displayError.textContent = event.error.message;
              } else {
                displayError.textContent = '';
              }
            });
             // Handle form submission
            var form = document.getElementById('payment-form');
            form.addEventListener('submit', function(event) {
              event.preventDefault();
               // Disable the submit button to prevent repeated clicks
              document.getElementById('complete-order').disabled = true;
               var options = {
                name: document.getElementById('name_on_card').value,
                address_line1: document.getElementById('address').value,
                address_city: document.getElementById('city').value,
                address_state: document.getElementById('province').value,
                address_zip: document.getElementById('postalcode').value
              }
               stripe.createToken(card, options).then(function(result) {
                if (result.error) {
                  // Inform the user if there was an error
                  var errorElement = document.getElementById('card-errors');
                  errorElement.textContent = result.error.message;
                   // Enable the submit button
                  document.getElementById('complete-order').disabled = false;
                } else {
                  // Send the token to your server
                  stripeTokenHandler(result.token);
                }
              });
            });
             function stripeTokenHandler(token) {
              // Insert the token ID into the form so it gets submitted to the server
              var form = document.getElementById('payment-form');
              var hiddenInput = document.createElement('input');
              hiddenInput.setAttribute('type', 'hidden');
              hiddenInput.setAttribute('name', 'stripeToken');
              hiddenInput.setAttribute('value', token.id);
              form.appendChild(hiddenInput);
               // Submit the form
              form.submit();
            }
        })();
    </script>@endsection