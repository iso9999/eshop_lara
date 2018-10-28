@extends('layouts.user')


@section('title', 'Product')

@section('content')
<!-- banner -->
<div class="banner_top innerpage" id="home">
  <div class="wrapper_top_w3layouts">
    <div class="header_agileits">
      <div class="logo inner_page_log">
        <h1><a class="navbar-brand" href="index.html"><span>Downy</span> <i>Shoes</i></a></h1>
      </div>
      <div class="overlay overlay-contentpush">
        <button type="button" class="overlay-close"><i class="fa fa-times" aria-hidden="true"></i></button>

        <nav>
          <ul>
            <li><a href="index.html" class="active">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="404.html">Team</a></li>
            <li><a href="shop.html">Shop Now</a></li>
            <li><a href="contact.html">Contact</a></li>
          </ul>
        </nav>
      </div>
      <div class="mobile-nav-button">
        <button id="trigger-overlay" type="button"><i class="fa fa-bars" aria-hidden="true"></i></button>
      </div>
      <!-- cart details -->
      <div class="top_nav_right">
        <div class="shoecart shoecart2 cart cart box_1">
          <form action="#" method="post" class="last">
            <input type="hidden" name="cmd" value="_cart">
            <input type="hidden" name="display" value="1">
            <button class="top_shoe_cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- //cart details -->
  <!-- search -->
  <div class="search_w3ls_agileinfo">
    <div class="cd-main-header">
      <ul class="cd-header-buttons">
        <li><a class="cd-search-trigger" href="#cd-search"> <span></span></a></li>
      </ul>
    </div>
    <div id="cd-search" class="cd-search">
      <form action="#" method="post">
        <input name="Search" type="search" placeholder="Click enter after typing...">
      </form>
    </div>
  </div>
  <!-- //search -->
  <div class="clearfix"></div>
  <!-- /banner_inner -->
  <div class="services-breadcrumb_w3ls_agileinfo">
    <div class="inner_breadcrumb_agileits_w3">

      <ul class="short">
        <li><a href="index.html">Home</a><i>|</i></li>
        <li><a href="#">{{$category->label}}</a><i>|</i></li>
        <li>{{$product->label}}</li>
      </ul>
    </div>
  </div>
  <!-- //banner_inner -->
</div>

<!-- //banner -->
<!-- top Products -->
<div class="ads-grid_shop">
  <div class="shop_inner_inf">
    <div class="col-md-4 single-right-left ">
      <div class="grid images_3_of_2">
        <div class="flexslider">

          <ul class="slides">
            <li data-thumb="{{ asset('images/'.$product->images_url1)}}">
              <div class="thumb-image"> <img src="{{ asset('images/'.$product->images_url1)}}" data-imagezoom="true" class="img-responsive"> </div>
            </li>
            <li data-thumb="{{ asset('images/'.$product->images_url2)}}">
              <div class="thumb-image"> <img src="{{ asset('images/'.$product->images_url2)}}" data-imagezoom="true" class="img-responsive"> </div>
            </li>
            <li data-thumb="{{ asset('images/'.$product->images_url3)}}">
              <div class="thumb-image"> <img src="{{ asset('images/'.$product->images_url3)}}" data-imagezoom="true" class="img-responsive"> </div>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
    <div class="col-md-8 single-right-left simpleCart_shelfItem">
      <h3>{{$product->label}}</h3>
      <p><span class="item_price">${{$product->price}}</span>
        <!-- <del>$1,199</del> -->
      </p>
      <div class="rating1">
        <ul class="stars">
          <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
          <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
          <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
          <li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
          <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
        </ul>
      </div>
      <div class="description">
        <h5>{{$product->description}}</h5>
      </div>

      <div class="occasional">
        <h5>Category : </h5>
        <h4><a href="#">{{$category->label}}</a></h4>
      </div>
      <!-- Add to card -->
      <div class="occasion-cart">
        <div class="shoe single-item single_page_b">
          <form action="#" method="post">
            <input type="hidden" name="cmd" value="_cart">
            <input type="hidden" name="add" value="1">
            <input type="hidden" name="shoe_item" value="{{$product->label}}">
            <input type="hidden" name="amount" value="{{$product->price}}">
            <input type="submit" name="submit" value="Add to cart" class="button add">

            <a href="#" data-toggle="modal" data-target="#myModal1"></a>
          </form>

        </div>

      </div>


    </div>
    <div class="clearfix"> </div>
    <!--/tabs-->
    <div class="responsive_tabs">
      <div id="horizontalTab">
        <ul class="resp-tabs-list">
          <li>Description</li>
          <li>Reviews</li>
        </ul>
        <div class="resp-tabs-container">
          <!--/tab_one-->
          <div class="tab1">

            <div class="single_page">
              <h6>{{$product->label}}</h6>
              <p>{{$product->description}}</p>
            </div>
          </div>
          <!--//tab_one-->
          <div class="tab2">

            <div class="single_page">
              <div class="bootstrap-tab-text-grids">
                <div class="bootstrap-tab-text-grid">
                  <div class="bootstrap-tab-text-grid-left">
                    <img src="{{ asset('images/t1.jpg')}}" alt=" " class="img-responsive">
                  </div>
                  <div class="bootstrap-tab-text-grid-right">
                    <ul>
                      <li><a href="#">Admin</a></li>
                      <li><a href="#"><i class="fa fa-reply-all" aria-hidden="true"></i> Reply</a></li>
                    </ul>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget.Ut enim ad minima veniam,
                      quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis
                      autem vel eum iure reprehenderit.</p>
                  </div>
                  <div class="clearfix"> </div>
                </div>
                <div class="add-review">
                  <h4>add a review</h4>
                  <form action="#" method="post">
                    <input type="text" name="Name" required="Name">
                    <input type="email" name="Email" required="Email">
                    <textarea name="Message" required=""></textarea>
                    <input type="submit" value="SEND">
                  </form>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
    <!--//tabs-->
    <!-- /new_arrivals -->
    <div class="new_arrivals">
      <h3>Featured Products</h3>
      <!-- /womens -->
      <div class="col-md-3 product-men women_two">
        <div class="product-shoe-info shoe">
          <div class="men-pro-item">
            <div class="men-thumb-item">
              <img src="{{ asset('images/s4.jpg')}}" alt="">
              <div class="men-cart-pro">
                <div class="inner-men-cart-pro">
                  <a href="single.html" class="link-product-add-cart">Quick View</a>
                </div>
              </div>
              <span class="product-new-top">New</span>
            </div>
            <div class="item-info-product">
              <h4>
                <a href="single.html">Shuberry Heels </a>
              </h4>
              <div class="info-product-price">
                <div class="grid_meta">
                  <div class="product_price">
                    <div class="grid-price ">
                      <span class="money ">$575.00</span>
                    </div>
                  </div>
                  <ul class="stars">
                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
                  </ul>
                </div>
                <div class="shoe single-item hvr-outline-out">
                  <form action="#" method="post">
                    <input type="hidden" name="cmd" value="_cart">
                    <input type="hidden" name="add" value="1">
                    <input type="hidden" name="shoe_item" value="Shuberry Heels">
                    <input type="hidden" name="amount" value="575.00">
                    <button type="submit" class="shoe-cart pshoe-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i></button>

                    <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                  </form>

                </div>
              </div>
              <div class="clearfix"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3 product-men women_two">
        <div class="product-shoe-info shoe">
          <div class="men-pro-item">
            <div class="men-thumb-item">
              <img src="{{ asset('images/s5.jpg')}}" alt="">
              <div class="men-cart-pro">
                <div class="inner-men-cart-pro">
                  <a href="single.html" class="link-product-add-cart">Quick View</a>
                </div>
              </div>
              <span class="product-new-top">New</span>
            </div>
            <div class="item-info-product">
              <h4>
                <a href="single.html">Red Bellies </a>
              </h4>
              <div class="info-product-price">
                <div class="grid_meta">
                  <div class="product_price">
                    <div class="grid-price ">
                      <span class="money ">$325.00</span>
                    </div>
                  </div>
                  <ul class="stars">
                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                  </ul>
                </div>
                <div class="shoe single-item hvr-outline-out">
                  <form action="#" method="post">
                    <input type="hidden" name="cmd" value="_cart">
                    <input type="hidden" name="add" value="1">
                    <input type="hidden" name="shoe_item" value="Red Bellies">
                    <input type="hidden" name="amount" value="325.00">
                    <button type="submit" class="shoe-cart pshoe-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i></button>

                    <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                  </form>

                </div>
              </div>
              <div class="clearfix"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3 product-men women_two">
        <div class="product-shoe-info shoe">
          <div class="men-pro-item">
            <div class="men-thumb-item">
              <img src="{{ asset('images/s7.jpg')}}" alt="">
              <div class="men-cart-pro">
                <div class="inner-men-cart-pro">
                  <a href="single.html" class="link-product-add-cart">Quick View</a>
                </div>
              </div>
              <span class="product-new-top">New</span>
            </div>
            <div class="item-info-product">
              <h4>
                <a href="single.html">Running Shoes</a>
              </h4>
              <div class="info-product-price">
                <div class="grid_meta">
                  <div class="product_price">
                    <div class="grid-price ">
                      <span class="money ">$875.00</span>
                    </div>
                  </div>
                  <ul class="stars">
                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
                  </ul>
                </div>
                <div class="shoe single-item hvr-outline-out">
                  <form action="#" method="post">
                    <input type="hidden" name="cmd" value="_cart">
                    <input type="hidden" name="add" value="1">
                    <input type="hidden" name="shoe_item" value="Running Shoes">
                    <input type="hidden" name="amount" value="875.00">
                    <button type="submit" class="shoe-cart pshoe-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i></button>

                    <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                  </form>

                </div>
              </div>
              <div class="clearfix"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3 product-men women_two">
        <div class="product-shoe-info shoe">
          <div class="men-pro-item">
            <div class="men-thumb-item">
              <img src="{{ asset('images/s8.jpg')}}" alt="">
              <div class="men-cart-pro">
                <div class="inner-men-cart-pro">
                  <a href="single.html" class="link-product-add-cart">Quick View</a>
                </div>
              </div>
              <span class="product-new-top">New</span>
            </div>
            <div class="item-info-product">
              <h4>
                <a href="single.html">Sukun Casuals</a>
              </h4>
              <div class="info-product-price">
                <div class="grid_meta">
                  <div class="product_price">
                    <div class="grid-price ">
                      <span class="money ">$505.00</span>
                    </div>
                  </div>
                  <ul class="stars">
                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
                  </ul>
                </div>
                <div class="shoe single-item hvr-outline-out">
                  <form action="#" method="post">
                    <input type="hidden" name="cmd" value="_cart">
                    <input type="hidden" name="add" value="1">
                    <input type="hidden" name="shoe_item" value="Sukun Casuals">
                    <input type="hidden" name="amount" value="505.00">
                    <button type="submit" class="shoe-cart pshoe-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i></button>

                    <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                  </form>

                </div>
              </div>
              <div class="clearfix"></div>
            </div>
          </div>
        </div>
      </div>

      <!-- //womens -->
      <div class="clearfix"></div>
    </div>
    <!--//new_arrivals-->


  </div>
</div>
<!-- //top products -->
<div class="mid_slider_w3lsagile">
  <div class="col-md-3 mid_slider_text">
    <h5>Some More Shoes</h5>
  </div>
  <div class="col-md-9 mid_slider_info">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class=""></li>
        <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="2" class=""></li>
        <li data-target="#myCarousel" data-slide-to="3" class=""></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item">
          <div class="row">
            <div class="col-md-3 col-sm-3 col-xs-3 slidering">
              <div class="thumbnail"><img src="{{ asset('images/g1.jpg')}}" alt="Image" style="max-width:100%;"></div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-3 slidering">
              <div class="thumbnail"><img src="{{ asset('images/g2.jpg')}}" alt="Image" style="max-width:100%;"></div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-3 slidering">
              <div class="thumbnail"><img src="{{ asset('images/g3.jpg')}}" alt="Image" style="max-width:100%;"></div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-3 slidering">
              <div class="thumbnail"><img src="{{ asset('images/g4.jpg')}}" alt="Image" style="max-width:100%;"></div>
            </div>
          </div>
        </div>
        <div class="item active">
          <div class="row">
            <div class="col-md-3 col-sm-3 col-xs-3 slidering">
              <div class="thumbnail"><img src="{{ asset('images/g5.jpg')}}" alt="Image" style="max-width:100%;"></div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-3 slidering">
              <div class="thumbnail"><img src="{{ asset('images/g6.jpg')}}" alt="Image" style="max-width:100%;"></div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-3 slidering">
              <div class="thumbnail"><img src="{{ asset('images/g2.jpg')}}" alt="Image" style="max-width:100%;"></div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-3 slidering">
              <div class="thumbnail"><img src="{{ asset('images/g1.jpg')}}" alt="Image" style="max-width:100%;"></div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="row">
            <div class="col-md-3 col-sm-3 col-xs-3 slidering">
              <div class="thumbnail"><img src="{{ asset('images/g1.jpg')}}" alt="Image" style="max-width:100%;"></div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-3 slidering">
              <div class="thumbnail"><img src="{{ asset('images/g2.jpg')}}" alt="Image" style="max-width:100%;"></div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-3 slidering">
              <div class="thumbnail"><img src="{{ asset('images/g3.jpg')}}" alt="Image" style="max-width:100%;"></div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-3 slidering">
              <div class="thumbnail"><img src="{{ asset('images/g4.jpg')}}" alt="Image" style="max-width:100%;"></div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="row">
            <div class="col-md-3 col-sm-3 col-xs-3 slidering">
              <div class="thumbnail"><img src="{{ asset('images/g1.jpg')}}" alt="Image" style="max-width:100%;"></div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-3 slidering">
              <div class="thumbnail"><img src="{{ asset('images/g2.jpg')}}" alt="Image" style="max-width:100%;"></div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-3 slidering">
              <div class="thumbnail"><img src="{{ asset('images/g3.jpg')}}" alt="Image" style="max-width:100%;"></div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-3 slidering">
              <div class="thumbnail"><img src="{{ asset('images/g4.jpg')}}" alt="Image" style="max-width:100%;"></div>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="fa fa-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="fa fa-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
      <!-- The Modal -->

    </div>
  </div>

  <div class="clearfix"> </div>
</div>
@endsection
