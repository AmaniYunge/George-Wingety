@extends('master')
@section('contents')


<div class="container-fluid main-content">
<div class="row">
    <!-- Area Charts:Morris -->
    <div class="col-md-12">
        <div class="widget-container fluid-height">
            <div class="heading">
                <i class="fa fa-users"></i>USERS
            </div>
            <div class="widget-content padded text-center">
               <div class="widget-content padded clearfix">
               @include("user.list")
               </div>
            </div>
        </div>
    </div>
</div>

</div>
@stop