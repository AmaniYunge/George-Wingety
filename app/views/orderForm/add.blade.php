<!-- End Navigation -->
<style>
.table thead>tr>th, .table tbody>tr>th, .table tfoot>tr>th, .table thead>tr>td, .table tbody>tr>td, .table tfoot>tr>td {
padding: 8px;
line-height: 1.428571429;
vertical-align: top;
border-top: 1px solid #ffffff;
</style>
<div class="container-fluid main-content">
    <div class="row">
        <div class="col-lg-6">
            {{--<form action="xeditable.html" class="form-horizontal" id="frm" method="get">--}}
                <div class="form-group" style="margin-bottom:5px">
                    <label class="control-label pull-left" style="text-align:left; margin-right:15px;">
                    Mode
                    </label>
                    <select class="form-control pull-left" id="addMode" name="c" style="width:150px; margin-right:8px;">
                    <option value="single">Single</option>
                    <option value="multiple">Multiple</option>
                    </select>
                    <a class="btn btn-primary" id="backButton">
                    <i class="fa  fa-arrow-circle-left"></i>
                    &nbsp;&nbsp;back
                    </a>
                </div>
            {{--</form>--}}
        </div>
        <div class="col-lg-6">
            <div style="float: right;">
                <button class="btn btn-default" id="enable" style="margin:0;">Disable</button>
            </div>
        </div>
    </div>
    <hr>
    <div class="row" style="margin-top: 0">
        <div class="col-lg-12">
            <div class="widget-container fluid-height clearfix">
                <div class="widget-content padded">
                <table class="table table-responsive">
                <form class="form-inline" id="orderForm" method="POST" action="clients">
                <tr>
                  <td>
                  <div class="form-group">
                     <label for="formNumber">Form Number</label>
                     <input type="text" class="form-control" id="formNumber" name="formNumber" placeholder="Form Number">
                  </div>
                  </td>
                  <td>
                  <div class="form-group">
                     <label for="client_id">Client</label>
                     <input type="text" class="form-control" id="client_id" name="client_id" placeholder="Client">
                  </div>
                  </td>
                  <td>
                  <div class="form-group">
                     <label for="bill_to">Bill To</label>
                     <input type="text" class="form-control" id="bill_to" name="bill_to" placeholder="Bill To">
                  </div>
                  </td>
                  <td>
                  <div class="form-group">
                     <label for="ship_to">Ship To</label>
                     <input type="text" class="form-control" id="ship_to" name="ship_to" placeholder="Ship To">
                  </div>
                  </td>

                </tr>
                 <tr>
                  <td colspan="4">

                    <div class="row"><p class="pull-left" style="bolder;text-decoration: underline;">Add Particulars</p></div>
                    <div class="row well" id="particular_conttainer">
                            <i class="fa fa-spin fa-spinner fa-3x"></i>
                    </div>
                  </td>

                </tr>
                <tr><td colspan="4"><button class="btn btn-success" id="add-client-button" type="button">Add</button></td></tr>
                </form>
                </table>
                <div id="status"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
$(document).ready(function(){
var modeId = "addMode";
var backId = "backButton";
var disableId = "enable";
var addButtonId = "add-client-button";
var statusId= "status";
var formId = "orderForm";
var particularContainer = "particular_container";

var apiUrl = '<?php echo url("orderForm/add");?>';
var listUrl = '<?php url("orderForm/list"); ?>';
var particularUrl = '<?php echo url("particulars"); ?>';
var isDisabled = false;
var isMultMode = false;

$("#"+modeId).bind("change",function(){
    if($("#"+modeId).val()=="single"){
    isMultMode = false;
    }else{
    isMultMode = true;
    }
});
$("#"+backId).bind("click",function(){

    window.location.href = listUrl;
});
$("#"+disableId).bind("click",function(){
    if(!isDisabled){
    $(this).removeClass("btn-default").addClass("btn-success").text("Enable");

        $('input[type=text]').prop('disabled', true);
        $('a#'+addButtonId).attr('disabled','disabled');
   isDisabled = true;
    }else{
    $(this).removeClass("btn-success").addClass("btn-default").text("Disable");
    $('input[type=text]').prop('disabled', false);
    $('a#'+addButtonId).removeAttr('disabled');
    isDisabled = false;
    }
});
$('button#'+addButtonId).bind("click",function(){
        var formData = $( ":input" ).serialize();
        if(!isDisabled){

        $.post( apiUrl, formData , function(data, status){

               if(!isMultMode){
                  $("#"+statusId).html(data);
                  $( "form#clientForm" ).empty();
               }else{

               }

        });

        }
});


/// load particulars


$.get( particularUrl, function( data ) {
console.log(data);
});

});


</script>