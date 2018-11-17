@extends('layouts.header')
@section('content')
<link rel="stylesheet" type="text/css" href="{{asset('/css/css/stylestable.css')}}" media="all" />
<ol class="breadcrumb">
<style> @import url(https://fonts.googleapis.com/css?family=Quicksand:400,300);
body{
    font-family: 'Quicksand', sans-serif;
}

.team{
    padding:75px 0;
}
h3.description{
    font-weight: bold;
    letter-spacing: 2px;
    color: #999;
    border-bottom: 1px solid rgba(0, 0, 0,0.1);
    padding-bottom: 5px;
}
.profile{
    margin-top: 25px;
}
.profile h1{
    font-weight: normal;
    font-size: 20px;
    margin:10px 0 0 0;
}
.profile h2{
    font-size: 14px;
    font-weight: lighter;
    margin-top: 5px;
}
.profile .img-box{
    opacity: 1;
    display: block;
    position: relative;
}
.profile .img-box:after{
    content:"";
    opacity: 0;
    background-color: rgba(0, 0, 0, 0.75);
    position: absolute;
    right: 0;
    left: 0;
    top: 0;
    bottom: 0;
}
.img-box ul{
    position: absolute;
    z-index: 2;
    bottom: 50px;
    text-align: center;
    width: 100%;
    padding-left: 0px;
    height: 0px;
    margin:0px;
    opacity: 0;
}
.profile .img-box:after, .img-box ul, .img-box ul li{
    -webkit-transition: all 0.5s ease-in-out 0s;
    -moz-transition: all 0.5s ease-in-out 0s;
    transition: all 0.5s ease-in-out 0s;
}
.img-box ul i{
    font-size: 20px;
    letter-spacing: 10px;
}
.img-box ul li{
    width: 30px;
    height: 30px;
    text-align: center;
    border: 1px solid #88C425;
    margin: 2px;
    padding: 5px;
    display: inline-block;
}
.img-box a{
    color:#fff;
}
.img-box:hover:after{
    opacity: 1;
}
.img-box:hover ul{
    opacity: 1;
}
.img-box ul a{
    -webkit-transition: all 0.3s ease-in-out 0s;
    -moz-transition: all 0.3s ease-in-out 0s;
    transition: all 0.3s ease-in-out 0s;
}
.img-box a:hover li{
    border-color: #fff;
    color: #88C425;
}
a{
    color:#88C425;
}
a:hover{
    text-decoration:none;
    color:#519548;
}
i.red{
    color:#BC0213;
}
.products-section {
  display: grid;
  grid-template-columns: 1fr 3fr;
  margin: 80px auto 80px;
}

.products-section .sidebar li.active {
  font-weight: 500;
}

.products-section .products {
  display: grid;
  grid-template-columns: 1fr 1fr 1fr;
  grid-gap: 60px 30px;
}

.products-section .products .product-price {
  color: #919191;
}

.products-header {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
}.pagination {
  display: inline-block;
  padding-left: 0;
  margin: 20px 0;
  border-radius: 4px;
}

.pagination > li {
  display: inline;
}

.pagination > .active > a,
.pagination > .active > span,
.pagination > .active > a:hover,
.pagination > .active > span:hover,
.pagination > .active > a:focus,
.pagination > .active > span:focus {
  background-color: #f4f4f4;
  border-color: #DDDDDD;
  color: inherit;
  cursor: default;
  z-index: 2;
}

.pagination > li:first-child > a,
.pagination > li:first-child > span {
  margin-left: 0;
  border-top-left-radius: 4px;
  border-bottom-left-radius: 4px;
}

.pagination > li > a,
.pagination > li > span {
  background-color: #FFFFFF;
  border: 1px solid #DDDDDD;
  color: inherit;
  float: left;
  line-height: 1.42857;
  margin-left: -1px;
  padding: 16px 22px;
  position: relative;
  text-decoration: none;
}

.pagination > li > a:focus,
.pagination > li > a:hover,
.pagination > li > span:focus,
.pagination > li > span:hover {
  z-index: 2;
  color: #23527c;
  background-color: #eee;
  border-color: #ddd;
}

</style>
        <li class="breadcrumb-item">
            <a href="index.html">Inicio</a>
        </li>
        <li class="breadcrumb-item active">Shop</li>
    </ol>
<div class="col-md-10 col-md-offset-1">
        <div class="products-section container">
        <div class="sidebar">
           <strong>By Category</strong>
            <ul>
                                    <li class="" style="list-style-type: none;color: #999999;"><a href="https://laravelecommerceexample.ca/shop?category=laptops">Laptops</a></li>
                                    <li class="active" style="list-style-type: none;color: grey;"><a href="https://laravelecommerceexample.ca/shop?category=desktops">Desktops</a></li>
                                    <li class="" style="list-style-type: none;color: #999;"><a href="https://laravelecommerceexample.ca/shop?category=mobile-phones">Mobile Phones</a></li>
                                    <li class="" style="list-style-type: none;color: #999;"><a href="https://laravelecommerceexample.ca/shop?category=tablets">Tablets</a></li>
                                    <li class="" style="list-style-type: none;color: #999;"><a href="https://laravelecommerceexample.ca/shop?category=tvs">TVs</a></li>
                                    <li class="" style="list-style-type: none;color: #999;"><a href="https://laravelecommerceexample.ca/shop?category=digital-cameras">Digital Cameras</a></li>
                                    <li class="" style="list-style-type: none;color: #999;"><a href="https://laravelecommerceexample.ca/shop?category=appliances">Appliances</a></li>
                            </ul>
        </div> <!-- end sidebar -->
        <div>
            <div class="products-header">
                <h3 class="description">Featured</h3>
                <div style="margin-right:-170px">
                    <strong>Price: </strong>
                    <a href="https://laravelecommerceexample.ca/shop?category=desktops&amp;sort=low_high">Low to High</a> |
                    <a href="https://laravelecommerceexample.ca/shop?category=desktops&amp;sort=high_low">High to Low</a>

                </div>
            </div>
         
          <div class="row pt-md" style="margin-right:-170px">
            @foreach($products as $product)
             <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 profile">
              <div class="img-box">
                <img src="{{asset('uploads/'.$product->slug.'.jpg')}}" class="img-responsive">
                <ul class="text-center" style="margin-top:-100px;">
                 <a href="{{route('shop.show',$product->slug)}}"><img src="{{asset('uploads/more.svg')}}" style="height:25px;width:25px;margin-top:-200px;"></a>
                
                  <form action="{{route('cart.store')}}" method="post">
   <input type="hidden" name="id" value="{{$product->id}}">
   <input type="hidden" name="name" value="{{$product->name}}">
   <input type="hidden" name="price" value="{{$product->price}}">
          {{csrf_field()}}
    <button  style="border:transparent;background-color:transparent;color:transparent;" ><img src="{{asset('uploads/shopping-cart.svg')}}" style="height:25px;width:25px;margin-bottom:40px;margin-top:-150px;" ></button></form> 

                </ul>
              </div>
              <h1 style="text-align:center;">{{$product->name}}</h1>
              
              <p style="text-align:center;">{{$product->presetPrice()}}</p>
            </div>@endforeach</div></div></div></div>
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
@endsection

