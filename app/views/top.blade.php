<div class="navbar navbar-fixed-top scroll-hide">
<div class="container-fluid top-bar">
    <div class="pull-right">
        <ul class="nav navbar-nav pull-right">

            <li class="dropdown user hidden-xs"><a data-toggle="dropdown" class="dropdown-toggle" href="{{ url('home') }}#">
                    <img width="34" height="34" src="img/avatar-male.jpg" />George CASMIR<b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="{{ url('home') }}#">
                            <i class="fa fa-user"></i>My Account</a>
                    </li>
                    <li><a href="{{ url('home') }}#">
                            <i class="fa fa-gear"></i>Account Settings</a>
                    </li>
                    <li><a href="{{ url('login') }}">
                            <i class="fa fa-sign-out"></i>Logout</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    <button class="navbar-toggle"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a class="logo" href="index.html">WINGETY</a>
    <form class="navbar-form form-inline col-lg-2 hidden-xs">
        <input class="form-control" placeholder="Search" type="text">
    </form>
</div>
<div class="container-fluid main-nav clearfix">
    <div class="nav-collapse">
        <ul class="nav">
            <li>
                <a class="current " href="{{ url('home') }}"><span aria-hidden="true" <i class="fa fa-home"></i></span>Dashboard</a>
            </li>

            <li class="dropdown"><a data-toggle="dropdown" href="{{ url('home') }}#">
                    <span aria-hidden="true" <i class="fa fa-globe"></i></span>Web Management<b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="{{ url('home') }}">Slide</a>
                    </li>
                    <li>
                        <a href="{{ url('home') }}">Portifolio</a>
                    </li>
                    <li>
                        <a href="glyphicons.html">Miscellaneous</a>
                    </li>
                </ul>
            </li>
            <li class="dropdown"><a data-toggle="dropdown" href="{{ url('home') }}#">
                    <span aria-hidden="true" <i class="fa fa-list"></i></span>Invoice Management<b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="{{ url('proformaInvoice') }}">Proforma Invoice</a>
                    </li>
                    <li>
                        <a href="{{ url('invoice') }}">Invoice</a>
                    </li>
                    <li>
                        <a href="{{ url('deliveryNote') }}">Delivery Note</a>
                    </li>
                    <li>
                        <a href="{{ url('orderForm') }}">Order Form</a>
                    </li>
                    <li>
                        <a href="{{ url('purchasingOrder') }}">Purchasing Order</a>
                    </li>
                    <li>
                        <a href="{{ url('requisition') }}">Requisition</a>
                    </li>

                </ul>
            </li>
            <li class="">
                   <a href="{{ url('user') }}" ><span aria-hidden="true" <i class="fa fa-user"></i></span>User Management</a>

            </li>

        </ul>
    </div>
</div>
</div>