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
                <form class="form-inline" id="clientForm" method="POST" action="clients">
                <tr>
                  <td>
                  <div class="form-group">
                     <label for="proforma_number">Proforma No.</label>
                     <input type="btn" class="form-control" style="font-weight: bolder" value="abcd" disabled>
                     <input type="hidden"  id="proforma_number" name="proforma_number" value="abcd" >
                  </div>
                  </td>
                  <td>
                  <div class="form-group">
                     <label for="campany_name">Client Name.</label>
                     <input type="text" class="form-control" id="campany_name" name="campany_name" placeholder="Company Name">
                  </div>
                  </td>
                  <td>
                  <div class="form-group">
                     <label for="address">Provider </label>
                     <input type="text" class="form-control" id="address" name="address" placeholder="Address">
                  </div>
                  </td>
                </tr>
                 <tr>
                  <td colspan="3">
                  <div class="form-group">
                     <label for="order_form">Select Order Form</label>
                     <select  class="form-control" id="order_form" name="order_form" >
                      <option value=" " selected disabled>-- Select order form --</option>
                     @foreach(OrderForm::all() as $orderForms)
                      <option value="{{ $orderForms->id }}">{{ $orderForms->formNumber }}</option>
                     @endforeach
                     </select>
                  </div>
                  </td>

                </tr>
                <tr><td colspan="4"><div class="well" id="particular"></div></td></tr>
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
var particularContainer = "particular";
var statusId= "status";
var formId = "clientForm";
var apiUrl = '<?php echo url("proforma/add");?>';
var listUrl = '<?php url("proforma/list"); ?>';
var isDisabled = false;
var isMultMode = false;
window['message'] = "Remove from proforma invoice";
$("#"+modeId).bind("change",function(){
    if($("#"+modeId).val()=="single"){
    isMultMode = false;
    }else{
    isMultMode = true;
    }
});
$("#"+backId).bind("click",function(){
//    $("#listHere").load("client/list");
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


$("select#order_form").bind("change",function(){
window['total'] = 0;
var orderFormUrl = '<?php echo url("orderForm/showinfo")?>/'+$(this).val();
console.log(orderFormUrl);
$.get( orderFormUrl, function( data ) {

if(data.length >= 1){

    var table = "<table class='table table-responsive' >";
    table+="<tbody>";
        var tdCounter = 0;
        table += "<tr >";
        table += "<th>Status</th>";
        table += "<th>Particular</th>";
        table += "<th>Quantity</th>";
        table += "<th>Unit Price</th>";
        table += "<th>Total Price</th>";
        table += "</tr>";
        $.each(data,function(dataIndex,dataValue){

        table += "<tr style='text-align: left;' id='"+dataValue.id+"' >";
        table += "<td><label class='checkbox ' title='"+window['message']+"'><input type='checkbox'  class='"+dataValue.id+"' checked='yes' name='particular_id'><span><a ><i class='fa fa-check btn-success' title='add'></i></a>&nbsp;&nbsp;</span>  </label></td><td>"+dataValue.description+"</td><td>"+dataValue.quantity_ordered+"</td><td>"+dataValue.unit_price+"</td><td>"+parseInt(dataValue.quantity_ordered)*parseInt(dataValue.unit_price)+"</td>";

        table += "</tr>";
        window['total'] += parseInt(dataValue.quantity_ordered)*parseInt(dataValue.unit_price);
        });
    table += "<tr style='border-bottom: 1px solid #000000!important;'>";
    table += "<td colspan='4' style='text-align: left;font-weight: bolder'>Total Price</td>";
    table += "<td>:&nbsp;<span id='comulative_price'>"+window['total']+"</span></td>";
    table += "</tr>";
    table+="</tbody>";
    table+="</table>";
        $("#"+particularContainer).html(table);

        $("input[type=checkbox]").bind("click",function(){

                var checkClass = $(this).attr("class");
                if($("input[type=checkbox][class="+checkClass+"]").prop('checked')){
                    $(this).prop('disabled',false);
                }else{

                    $(this).parent("label").attr('title','Add to proforma invoice');
                    window['total']-=parseInt($("tr#"+checkClass+" td:last").text());
                    $("#comulative_price").text(window['total']);
                    console.log($("input."+checkClass+""));
                    $("input."+checkClass+"").css({"display":"none"});
                    $("tr#"+checkClass).css({"background-color":"#cfcfcf"});

                }
        });

}else{
    $("#"+particularContainer).html('<div>No Particulars</div>');
}

});
});

$('button#'+addButtonId).bind("click",function(){
        var formData = $( ":input" ).serialize();
        if(!isDisabled){

//        $.post( apiUrl, formData , function(data, status){
//
//               if(!isMultMode){
//                  $("#"+statusId).html(data);
//                  $( "form#clientForm" ).empty();
//               }else{
//
//               }
//
//        });

        }
});
});
</script>