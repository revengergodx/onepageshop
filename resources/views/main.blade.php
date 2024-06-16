<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Tools Shop</title>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
{{--    <script type="text/javascript" src="js/boxOver.js"></script>--}}
{{--    <script src="{{asset('js/jquery.min.js')}}"></script>--}}
    <script src="{{asset('js/boxOver.js')}}"></script>

</head>
<body>
<div id="main_container">
    <div id="header">
        <div id="logo"> <a href="#"><img src="{{asset('images/logo.png')}}" alt=""/></a> </div>
    </div>
    <div id="main_content">
        <div id="menu_tab">
            <ul class="menu">
                <li><a href="{{ route('dashboard.index') }}" class="nav"> Dashboard </a></li>
            </ul>
        </div>
        <!-- end of menu tab -->
        <div class="left_content">
            <div class="title_box">Categories</div>
            <ul class="left_menu">
{{--                <li class="odd"><a href="#">Power Tools</a></li>--}}
{{--                <li class="even"><a href="#">Air Tools</a></li>--}}
{{--                <li class="odd"><a href="#">Hand Tools</a></li>--}}
{{--                <li class="even"><a href="#">Accessories</a></li>--}}
{{--                <li class="odd"><a href="#">Workwear</a></li>--}}
            </ul>
        </div>
        <!-- end of left content -->
        <div class="center_content">
            <div class="center_title_bar">Our Products</div>
            @foreach($products as $product)
            <div class="prod_box">
                <div class="center_prod_box">
                    <div class="product_title"><a href="#">{{$product->title}}</a></div>
                    <div class="product_img"><img style="width: 120px; height: 120px" src="{{url('storage/images/' . $product->image)}}" alt="{{ $product->title . ' image' }}" border="0" /></div>
                    <div class="prod_price"><span class="price">{{$product->price}}$</span></div>
                </div>
                <div class="prod_details_tab">
                    <a class="prod_details" href="#popup_flight_travlDil{{$product->id}}">Details</a></div>
            </div>
                <div id="popup_flight_travlDil{{$product->id}}" class="overlay_flight_traveldil">
                    <div class="popup_flight_travlDil">
                        <h2>{{$product->title}}</h2>
                        <a class="close_flight_travelDl" href="#popup_flight_travlDil">&times;</a>
                        <div class="content_flightht_travel_dil">
                            {{$product->description}}
                        </div>
                    </div>
                </div>
            @endforeach
                </div>
            </div>
        <!-- end of center content -->
        <div class="right_content">
            <div class="title_box">Search</div>
{{--            <div class="border_box">--}}
{{--                <input type="text" name="newsletter" class="newsletter_input" value="keyword"/>--}}
{{--                <a href="#" class="join">search</a> </div>--}}
{{--            <div class="shopping_cart">--}}
{{--                <div class="title_box">Shopping cart</div>--}}
{{--                <div class="cart_details"> 3 items <br />--}}
{{--                    <span class="border_cart"></span> Total: <span class="price">350$</span> </div>--}}
{{--                <div class="cart_icon"><a href="#"><img src="{{asset('images/shoppingcart.png')}}" alt="" width="35" height="35" border="0" /></a></div>--}}
{{--            </div>--}}
        </div>
        <!-- end of right content -->

    <!-- end of main content -->
    <div class="footer">
        <div class="left_footer"> <img src="{{asset('images/footer_logo.png')}}" alt="" width="89" height="42"/> </div>
        <div class="center_footer">
            <p>made by: </p><a href="https://github.com/revengergodx">Anton Indiukov</a>
        </div>
    </div>
</div>
<!-- end of main_container -->
</body>
</html>
