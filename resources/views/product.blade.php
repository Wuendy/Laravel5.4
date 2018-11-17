@extends('layouts.header')
@section('content')
<link rel="stylesheet" type="text/css" href="{{asset('/css/css/stylestable.css')}}" media="all" />
<ol class="breadcrumb">
<li class="breadcrumb-item">
            <a href="{{route('home')}}">Inicio</a>
        </li><li class="breadcrumb-item">
            <a href="{{route('shop.index')}}">Shop</a>
        </li>
        <li class="breadcrumb-item active">{{$product->name}}</li>
    </ol>
@if(session()->has('success_message'))
<div class="alert alert-success">{{session()->get('success_message')}}</div>@endif
   <section>
  <nav id="ll">
    <img src="{{asset('uploads/'.$product->slug.'1.jpg')}}" 
    style="width:76%;height:76%;border:1px solid grey;margin:40px;padding:20px;margin-bottom:8px;">
    <img src="{{asset('uploads/'.$product->slug.'.jpg')}}" style="width:16%;height:16%;border:1px solid grey;margin-left:40px;padding:5px;margin-top:15px;margin-bottom:25px;">
    <img src="{{asset('uploads/'.$product->slug.'.jpg')}}" style="width:16%;height:16%;border:1px solid grey;margin-left:24px;padding:5px;margin-top:15px;margin-bottom:25px;">
    <img src="{{asset('uploads/'.$product->slug.'.jpg')}}" style="width:16%;height:16%;border:1px solid grey;margin-left:24px;padding:5px;margin-top:15px;margin-bottom:25px;">
  </nav>
  
  <article>
    <h1 style="margin-top:30px;font-size:35px;"><strong>{{$product->name}}</strong></h1>
    <h1 style="font-size:25px;color:grey;margin-top:2px;"><strong>{{$product->details}}</strong></h1>
    <p style="font-size:18px;color:white;background-color:powderblue;border-radius:10px;border:1px solid;padding:-2px;padding-left:10px;margin-right:485px;margin-top:5px;"><strong>In Stock</strong></p>
     <h1 style="font-size:35px;margin-top:2px;"><strong>{{$product->presetPrice()}}</strong></h1>
    <p style="margin-top:5px;text-align:justify;margin-right:25px;">{{$product->description}}</p>


<form action="{{route('cart.store')}}" method="post">
   <input type="hidden" name="id" value="{{$product->id}}">
   <input type="hidden" name="name" value="{{$product->name}}">
   <input type="hidden" name="price" value="{{$product->price}}">
          {{csrf_field()}}
    <button  style="border:1px solid #B7A0C6;background-color:#B7A0C6;color:white;margin-top:25px;font-family:Arial;font-size:20px;padding:10px;margin-left:180px;border-radius:10px;" >Add to Cart</button></form>
  </article>
</section>
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
                            <img src="{{url('css/images/banner1.jpg')}}" class="img-fluid" alt="">
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
                            <img src="{{url('css/images/banner2.jpg')}}" class="img-fluid" alt="">
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
                            <img src="{{url('css/images/banner3.jpg')}}" class="img-fluid" alt="">
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