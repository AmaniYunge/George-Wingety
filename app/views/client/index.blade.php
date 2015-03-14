@extends('master')
@section('contents')


<div class="container-fluid main-content">
<!-- Statistics -->
<div class="row">
    <div class="col-lg-12">
        <div class="widget-container stats-container">
            <div class="col-md-2">
                <div class="number">
                    <i class="fa fa-list "></i>
                    86
                </div>
                <div class="text">
                    Proforma Invoice
                </div>
            </div>
            <div class="col-md-2">
                <div class="number">
                    <i class="fa fa-list"></i>
                    613
                </div>
                <div class="text">
                    Invoice
                </div>
            </div>
            <div class="col-md-2">
                <div class="number">
                    <i class="fa fa-list"></i>
                    86
                </div>
                <div class="text">
                   Purchasing Order
                </div>
            </div>
            <div class="col-md-2">
                <div class="number">
                    <i class="fa fa-list"></i>
                    924
                </div>
                <div class="text">
                   Delivery Notes
                </div>
            </div>
            <div class="col-md-2">
                <div class="number">
                    <i class="fa fa-list"></i>
                    325
                </div>
                <div class="text">
                   Order Form
                </div>
            </div>
            <div class="col-md-2">
                <div class="number">
                  <i class="fa fa-list"></i>
                    325
                </div>
                <div class="text">
                   Requisition
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Statistics -->

<div class="row">
    <!-- Area Charts:Morris -->
    <div class="col-md-12">
        <div class="widget-container fluid-height">
            <div class="heading">
                <i class="fa fa-users"></i>CLIENTS
            </div>
            <div class="widget-content padded text-center">
               <div class="widget-content padded clearfix" id="listHere">
               @include("client.list")
               </div>
            </div>
        </div>
    </div>
</div>

</div>


@stop
