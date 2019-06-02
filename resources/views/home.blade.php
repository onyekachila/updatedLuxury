@extends('user/app')

@section('head')

@endsection

@section('main-content')
<!-- Post Content -->
<!-- banner -->
<div class="banner">


<div class="banner-right">
                <ul id="flexiselDemo2">
                    <li><div class="banner-grid">
                    <h2>Featured Products</h2>
                    <div class="wome">
                            <a href="single.html" ><img class="img-responsive" src="{{ asset('user/images/bi1.jpg') }}" alt="" />
                            </a>
                            <div class="women simpleCart_shelfItem">
                                <a href="#"><img src="{{ asset('user/images/ll.png') }}" alt=""></a>
                                <h6 ><a href="single.html">Product Name</a></h6>
                                <p class="ba-price"><del>N10000.00</del><em class="item_price">N7500.00</em></p>
                                <a href="#" data-text="Add To Cart" class="but-hover1 item_add">Add To Cart</a>
                            </div>
                            </div>
                        </div></li>
                    <li><div class="banner-grid">
                    <h2>Featured Products</h2>
                    <div class="wome">
                            <a href="single.html" ><img class="img-responsive" src="{{ asset('user/images/bi.jpg') }}" alt="" />
                            </a>
                            <div class="women simpleCart_shelfItem">
                                <a href="#"><img src="{{ asset('user/images/ll.png') }}" alt=""></a>
                                <h6 ><a href="single.html">Product Name</a></h6>
                                <p class="ba-price"><del>N10000.00</del><em class="item_price">N7500.00</em></p>
                                <a href="#" data-text="Add To Cart" class="but-hover1 item_add">Add To Cart</a>
                            </div>
                            </div>
                        </div></li>
                    <li><div class="banner-grid">
                    <h2>Featured Products</h2>
                    <div class="wome">
                            <a href="single.html" ><img class="img-responsive" src="{{ asset('user/images/bi2.jpg') }}" alt="" />
                            </a>
                            <div class="women simpleCart_shelfItem">
                                <a href="#"><img src="{{ asset('user/images/ll.png') }}" alt=""></a>
                                <h6 ><a href="single.html">Product Name</a></h6>
                                <p class="ba-price"><del>N10000.00</del><em class="item_price">N7500.00</em></p>
                                <a href="#" data-text="Add To Cart" class="but-hover1 item_add">Add To Cart</a>
                            </div>
                            </div>
                        </div></li>


                </ul>
                <script type="text/javascript">
    $(window).load(function() {
        $("#flexiselDemo2").flexisel({
            visibleItems: 1,
            animationSpeed: 1000,
            autoPlay: true,
            autoPlaySpeed: 5000,
            pauseOnHover: true,
            enableResponsiveBreakpoints: true,
            responsiveBreakpoints: {
                portrait: {
                    changePoint:480,
                    visibleItems: 1
                },
                landscape: {
                    changePoint:640,
                    visibleItems: 1
                },
                tablet: {
                    changePoint:768,
                    visibleItems: 1
                }
            }
        });

    });
</script>
    <script type="text/javascript" src="{{ asset('user/js/jquery.flexisel.js') }}"></script>

                </div>


            </div>

</div>
<!-- //banner -->
<!---728x90--->

<!--content-->
    <div class="content">
    <div class="content-head">

                <div class="col-md-6 col-m1 animated wow fadeInLeft" data-wow-delay=".1s">
                    <div class="col-1">
                    <div class="col-md-6 col-2">
                        <a href="single.html"><img src="{{ asset('user/images/pi3.jpg') }}" class="img-responsive" alt="">
                        </a></div>
                        <div class="col-md-6 col-p">
                            <h5>For All Collections</h5>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                            praesentium voluptatum deleniti atque</p>
                            <a href="single.html" class="shop" data-hover="Shop Now">Shop Now</a>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="col-1">
                    <div class="col-md-6 col-p">
                            <h5>For All Collections</h5>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                            praesentium voluptatum deleniti atque</p>
                            <a href="single.html" class="shop" data-hover="Shop Now">Shop Now</a>
                        </div>
                    <div class="col-md-6 col-2">
                        <a href="single.html"><img src="{{ asset('user/images/pi.jpg') }}" class="img-responsive" alt="">
                        </a></div>
                        <div class="clearfix"> </div>
                    </div>
                    </div>

                <div class="col-md-6 col-m2 animated wow fadeInRight" data-wow-delay=".1s">

                    <!---->
                     <!-- requried-jsfiles-for owl -->
                        <link href="{{ asset('user/css/owl.carousel.css') }}" rel="stylesheet">
                            <script src="{{ asset('user/js/owl.carousel.js') }}"></script>
                                <script>
                                    $(document).ready(function() {
                                      $("#owl-demo").owlCarousel({
                                        items : 2,
                                        lazyLoad : false,
                                        autoPlay : true,
                                        navigation : true,
                                        navigationText :  true,
                                        pagination : false,
                                      });
                                    });
                                  </script>
                         <!-- //requried-jsfiles-for owl -->
                         <!-- start content_slider -->
                           <div id="owl-demo" class="owl-carousel">
                                <div class="item">

                                        <a href="single.html"><img class="img-responsive" src="{{ asset('user/images/bb.png') }}" alt="" /></a>
                                        <a href="single.html" class="shop-2" >Shop Now</a>

                                </div>
                                <div class="item">

                                        <a href="single.html"><img class="img-responsive" src="{{ asset('user/images/bb1.png') }}" alt="" /></a>
                                        <a href="single.html" class="shop-2">Shop Now</a>

                                </div>

                                <div class="item">

                                        <a href="single.html"><img class="img-responsive" src="{{ asset('user/images/bb.png') }}" alt="" /> </a>
                                        <a href="single.html" class="shop-2">Shop Now</a>

                                </div>
                                <div class="item">

                                        <a href="single.html"><img class="img-responsive" src="{{ asset('user/images/bb1.png') }}" alt="" /></a>
                                        <a href="single.html" class="shop-2">Shop Now</a>

                                </div>
                        </div>
                   </div>
                   <div class="clearfix"></div>
        </div>
                </div>

        <!---->

            <div class="content-top">
                <div class="col-md-5 col-md1 animated wow fadeInLeft" data-wow-delay=".1s">
                    <div class="col-3">
                        <a href="single.html"><img src="{{ asset('user/images/pi1.jpg') }}" class="img-responsive " alt="">
                        <div class="col-pic">
                            <h5> Women's Wear</h5>
                            <p>At vero eos et accusamus et</p>
                        </div></a>
                    </div>

                </div>
                <div class="col-md-7 col-md2 animated wow fadeInRight" data-wow-delay=".1s">
                    <div class="col-sm-4 item-grid simpleCart_shelfItem">
                        <div class="grid-pro">
                            <div  class=" grid-product " >
                                <figure>
                                    <a href="single.html">
                                        <div class="grid-img">
                                            <img  src="{{ asset('user/images/pr1.jpg') }}" class="img-responsive" alt="">
                                        </div>
                                        <div class="grid-img">
                                            <img  src="{{ asset('user/images/pr.jpg') }}" class="img-responsive"  alt="">
                                        </div>
                                    </a>
                                </figure>
                            </div>
                            <div class="women">
                                <a href="#"><img src="{{ asset('user/images/ll.png') }}" alt=""></a>
                                <h6><a href="single.html">Product Name</a></h6>
                                <p ><del>N10000.00</del><em class="item_price">N7500.00</em></p>
                                <a href="#" data-text="Add To Cart" class="but-hover1 item_add">Add To Cart</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 item-grid simpleCart_shelfItem">
                        <div class="grid-pro">
                            <div  class=" grid-product " >
                                <figure>
                                    <a href="single.html">
                                        <div class="grid-img">
                                            <img  src="{{ asset('user/images/pr3.jpg') }}" class="img-responsive" alt="">
                                        </div>
                                        <div class="grid-img">
                                            <img  src="{{ asset('user/images/pr2.jpg') }}" class="img-responsive"  alt="">
                                        </div>
                                    </a>
                                </figure>
                            </div>
                            <div class="women">
                                <a href="#"><img src="{{ asset('user/images/ll.png') }}" alt=""></a>
                                <h6><a href="single.html">Product Name</a></h6>
                                <p ><del>N10000.00</del><em class="item_price">N7500.00</em></p>
                                <a href="#" data-text="Add To Cart" class="but-hover1 item_add">Add To Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 item-grid simpleCart_shelfItem">
                    <div class="grid-pro">
                            <div  class=" grid-product " >
                                <figure>
                                    <a href="single.html">
                                        <div class="grid-img">
                                            <img  src="{{ asset('user/images/pr5.jpg') }}" class="img-responsive" alt="">
                                        </div>
                                        <div class="grid-img">
                                            <img  src="{{ asset('user/images/pr4.jpg') }}" class="img-responsive"  alt="">
                                        </div>
                                    </a>
                                </figure>
                            </div>
                            <div class="women">
                                <a href="#"><img src="{{ asset('user/images/ll.png') }}" alt=""></a>
                                <h6><a href="single.html">Product Name</a></h6>
                                <p ><del>N10000.00</del><em class="item_price">N7500.00</em></p>
                                <a href="#" data-text="Add To Cart" class="but-hover1 item_add">Add To Cart</a>
                            </div>
                        </div>
                    </div>
                <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
            </div>
            <!----->
            <!---728x90--->

            <!---->
            <div class="content-top">

                <div class="col-md-7 col-md2 animated wow fadeInLeft" data-wow-delay=".1s">
                    <div class="col-sm-4 item-grid simpleCart_shelfItem">
                        <div class="grid-pro">
                            <div  class=" grid-product " >
                                <figure>
                                    <a href="single.html">
                                        <div class="grid-img">
                                            <img  src="{{ asset('user/images/pr6.jpg') }}" class="img-responsive" alt="">
                                        </div>
                                        <div class="grid-img">
                                            <img  src="{{ asset('user/images/pr7.jpg') }}" class="img-responsive"  alt="">
                                        </div>
                                    </a>
                                </figure>
                            </div>
                            <div class="women">
                                <a href="#"><img src="{{ asset('user/images/ll.png') }}" alt=""></a>
                                <h6><a href="single.html">Product Name</a></h6>
                                <p ><del>N10000.00</del><em class="item_price">N7500.00</em></p>
                                <a href="#" data-text="Add To Cart" class="but-hover1 item_add">Add To Cart</a>
                            </div>
                        </div>

                    </div>

                    <div class="col-sm-4 item-grid simpleCart_shelfItem">
                        <div class="grid-pro">
                            <div  class=" grid-product " >
                                <figure>
                                    <a href="single.html">
                                        <div class="grid-img">
                                            <img  src="{{ asset('user/images/pr9.jpg') }}" class="img-responsive" alt="">
                                        </div>
                                        <div class="grid-img">
                                            <img  src="{{ asset('user/images/pr8.jpg') }}" class="img-responsive"  alt="">
                                        </div>
                                    </a>
                                </figure>
                            </div>
                            <div class="women">
                                <a href="#"><img src="{{ asset('user/images/ll.png') }}" alt=""></a>
                                <h6><a href="single.html">Product Name</a></h6>
                                <p ><del>N10000.00</del><em class="item_price">N7500.00</em></p>
                                <a href="#" data-text="Add To Cart" class="but-hover1 item_add">Add To Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 item-grid simpleCart_shelfItem">
                    <div class="grid-pro">
                            <div  class=" grid-product " >
                                <figure>
                                    <a href="single.html">
                                        <div class="grid-img">
                                            <img  src="{{ asset('user/images/pr10.jpg') }}" class="img-responsive" alt="">
                                        </div>
                                        <div class="grid-img">
                                            <img  src="{{ asset('user/images/pr11.jpg') }}" class="img-responsive"  alt="">
                                        </div>
                                    </a>
                                </figure>
                            </div>
                            <div class="women">
                                <a href="#"><img src="{{ asset('user/images/ll.png') }}" alt=""></a>
                                <h6><a href="single.html">Product Name</a></h6>
                                <p ><del>N10000.00</del><em class="item_price">N7500.00</em></p>
                                <a href="#" data-text="Add To Cart" class="but-hover1 item_add">Add To Cart</a>
                            </div>
                        </div>
                    </div>
                <div class="clearfix"></div>
                </div>
                <div class="col-md-5 col-md1 animated wow fadeInRight" data-wow-delay=".1s">
                    <div class="col-3">
                        <a href="single.html"><img src="{{ asset('user/images/pi2.jpg') }}" class="img-responsive " alt="">
                        <div class="col-pic">
                            <h5> Men's Wear</h5>
                            <p>At vero eos et accusamus et</p>
                        </div></a>
                    </div>

                </div>
                <div class="clearfix"></div>
            </div>

        <!---728x90--->

            <!--products-->
<div class="social animated wow fadeInDown" data-wow-delay=".1s">
<div class="container">
    <div class="col-sm-3 social-ic">
        <a href="#">FACEBOOK</a>
    </div>
    <div class="col-sm-3 social-ic">
        <a href="#">TWITTER</a>
    </div>
    <div class="col-sm-3 social-ic">
        <a href="#">GOOGLE+</a>
    </div>
    <div class="col-sm-3 social-ic">
        <a href="#">PINTEREST</a>
    </div>
<div class="clearfix"></div>
</div>
</div>
<hr>
@endsection

@section('footer')
@endsection

