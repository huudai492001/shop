<div id="header">
    <div class="container">
        <div id="welcomeLine" class="row">
            <div class="span6">Welcome!<strong> </strong></div>
            <div class="span6">
                <div class="pull-right">
                    <a href="{{route('cart')}}"><span class="">Fr</span></a>
                    <a href="{{route('cart')}}"><span class="">Es</span></a>
                    <span class="btn btn-mini">En</span>
                    <a href="{{route('cart')}}"><span>&pound;</span></a>
                    <span class="btn btn-mini">$155.00</span>
                    <a href="{{route('cart')}}"><span class="">$</span></a>
                    <a href="{{route('cart')}}"><span class="btn btn-mini btn-primary"><i class="icon-shopping-cart icon-white"></i> [ 3 ] Itemes in your cart </span> </a>
                </div>
            </div>
        </div>
        <!-- Navbar ================================================== -->
        <div id="logoArea" class="navbar">
            <a id="smallScreen" data-target="#topMenu" data-toggle="collapse" class="btn btn-navbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <div class="navbar-inner">
                <a class="brand" href="{{route('home')}}"><img src="{{asset('themes/images/logo.png')}}" alt="Bootsshop"/></a>
                <form class="form-inline navbar-search" method="post" action="products.html" >
                    <input id="srchFld" class="srchTxt" type="text" />
                    <select class="srchTxt">
                        <option>All</option>
                        <option>CLOTHES </option>
                        <option>FOOD AND BEVERAGES </option>
                        <option>HEALTH & BEAUTY </option>
                        <option>SPORTS & LEISURE </option>
                        <option>BOOKS & ENTERTAINMENTS </option>
                    </select>
                    <button type="submit" id="submitButton" class="btn btn-primary">Go</button>
                </form>
                <ul id="topMenu" class="nav pull-right">
                    <li class=""><a href="{{route('specials.offer')}}">Specials Offer</a></li>
                    <li class=""><a href="{{route('delivery')}}">Delivery</a></li>
                    <li class=""><a href="{{route('contact')}}">Contact</a></li>


{{--               =================================LOGIN BLOCK==================--}}
                    <li class="">
                        @if(\Illuminate\Support\Facades\Auth::user())
                            <a href="{{route('user_logout')}}"><span class="btn btn-large btn-success">Log Out</span></a>
                        @else
                            <a href="{{route('user_login')}}"><span class="btn btn-large btn-success">Login</span></a>
                        @endif

{{--                        <div id="login" class="modal hide fade in" tabindex="-1" role="dialog" aria-labelledby="login" aria-hidden="false" >--}}
{{--                            <div class="modal-header">--}}
{{--                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>--}}
{{--                                <h3>Login Block</h3>--}}
{{--                            </div>--}}
{{--                            <div class="modal-body">--}}
{{--                                <form class="form-horizontal loginFrm">--}}
{{--                                    <div class="control-group">--}}
{{--                                        <input type="text" id="inputEmail" placeholder="Email">--}}
{{--                                    </div>--}}
{{--                                    <div class="control-group">--}}
{{--                                        <input type="password" id="inputPassword" placeholder="Password">--}}
{{--                                    </div>--}}
{{--                                    <div class="control-group">--}}
{{--                                        <label class="checkbox">--}}
{{--                                            <input type="checkbox"> Remember me--}}
{{--                                        </label>--}}
{{--                                    </div>--}}
{{--                                </form>--}}
{{--                                <button type="submit" class="btn btn-success">Sign in</button>--}}
{{--                                <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Header End====================================================================== -->
