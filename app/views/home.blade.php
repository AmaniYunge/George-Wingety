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
    <div class="col-md-6">
        <div class="widget-container fluid-height">
            <div class="heading">
                <i class="fa fa-bar-chart-o"></i>Area Chart
            </div>
            <div class="widget-content padded text-center">
                <div class="graph-container">
                    <div class="caption"></div>
                    <div class="graph" id="hero-area"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Area Charts:Morris --><!-- Chat -->
    <div class="col-lg-6">
        <div class="widget-container fluid-height">
            <div class="heading">
                <i class="fa fa-bar-chart-o"></i>Donut Charts
            </div>
            <div class="widget-content clearfix">
                <div class="col-sm-6">
                    <div class="pie-chart1 pie-chart pie-number" data-percent="87">
                        87%
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="pie-chart2 pie-chart pie-number" data-percent="26">
                        26%
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Chat -->
</div>

</div>
@stop