
 <!-- Modal -->
 <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog" style="width:1000px!important;">
     <div class="modal-content" >
       <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
         <h4 class="modal-title" id="myModalLabel"></h4>
       </div>
       <div class="modal-body">
        <i class="fa fa-spin fa-spinner fa-3x"></i>



       </div>
       <div class="modal-footer">
         <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
       </div>
     </div>
   </div>
 </div>



 <div class="container-fluid main-content">
 <!-- DataTables Example -->
    <div class="row">
    <div class="col-lg-12">
    <div class="widget-container fluid-height clearfix">
    <div class="heading">
    <a class="btn btn-sm btn-primary-outline pull-right"  id="add-row"><i class="fa fa-plus"></i>Add row</a>
    </div>
    <div class="widget-content padded clearfix">
    <table class="table table-bordered table-striped" id="datatable-editable">
            <thead>

            <th>
               Form Number
            </th>
            <th>
               Client Name
            </th>
            <th class="hidden-xs">
               Bill To
            </th>
            <th class="hidden-xs">
             Ship To
            </th>
            <th class="hidden-xs">
             Particular
            </th>
            <th width="60"></th>
            <th width="75"></th>
            </thead>
    <tbody>
    @foreach( OrderForm::all() as $orderForm)
                 <tr>

                 <td id="{{ $orderForm->id }}">{{$orderForm->formNumber}}</td>
                 <td>{{ Client::find($orderForm->client_id)['attention_name'] }}</td>
                 <td>{{$orderForm->bill_to}}</td>
                 <td>{{$orderForm->ship_to}}</td>
                 <td><a class="particular" href='#' data-toggle="modal" data-target="#myModal" id="{{ $orderForm->id }}_particular" title="View Particulars"><i class="fa fa-list"></i></a></td>
                 <td><a class='action_order_form' id="edit_{{ $orderForm->id }}" href='#'>Edit</a></br></td>
                 <td><a class='action_order_form' id="delete_{{ $orderForm->id }}" href='#'>Delete</a></br></td>

                 </tr>
    @endforeach


    </tbody>
   </table>

   </div>
   </div>
   </div>
   </div>
                                       <!-- end DataTables Example -->
                                       <div id="messageBody" class="row"></div>
   </div>

   <script>
   $(document).ready(function(){
           var ListContainer    = "listingTable";
           var urlList          = '<?php echo url("orderForm")?>';
           var urlCreate        = '<?php echo url("orderForm/create")?>';
           $("#add-row").bind("click",function(){
               $("#listHere").load(urlCreate);

           });

           $(".particular").bind("click",function(){
           var partId = $(this).attr("id").split("_")[0];
            var particularUrl = '<?php echo  url("orderForm/showinfo")?>/'+partId;



            $.get( particularUrl, function( data ) {
              var modalContent =' <div class="col-lg-12">';
                            modalContent +='<div class="widget-container fluid-height">';
                            modalContent +='<div class="heading">';
                            modalContent +='<i class="fa fa-toggle-down"></i>Order Form Particulars   <b> No: '+$("td#"+partId).html()+'</b>';
                            modalContent +='</div>';
                            modalContent +='<div class="widget-content">';
                            modalContent +='<div class="panel-group" id="accordion">';
            var counter = 0;
            $.each(data,function(indexData,valueData){
                          console.log(valueData);
                          counter++;
                            modalContent +='<div class="panel">';
                            modalContent +='<div class="panel-heading">';
                            modalContent +='<div class="panel-title">';
                            modalContent +='<a style="text-align:left;" class="accordion-toggle collapsed" data-parent="#accordion" data-toggle="collapse" href="components.html#'+valueData.id+'">';
                            modalContent +='<div class="caret pull-right"></div>';
                            modalContent +=counter+'.&nbsp;'+valueData.description+' ('+valueData.particular_code+') </a>';
                            modalContent +='</div>';
                            modalContent +='</div>';
                            modalContent +='<div class="panel-collapse collapse" id="'+valueData.id+'">';
                            modalContent +='<div class="panel-body">';
                            modalContent +='<h2>';
                            modalContent +='Order Details';
                            modalContent +='</h2>';
                            modalContent +='<table class="table table-responsive table-stripped table-condensed">';
                            modalContent +='<tbody>';
                            modalContent +='<tr>';
                            modalContent +='<th>Stock </th><td>'+valueData.quantity+'</td>';
                            modalContent +='</tr>';
                            modalContent +='<tr>';
                            modalContent +='<th>Quantity Ordered </th><td>'+valueData.quantity_ordered+'</td>';
                            modalContent +='</tr>';
                            modalContent +='<tr>';
                            modalContent +='<th>Unit Price </th><td>'+valueData.unit_price+' /=</td>';
                            modalContent +='</tr>';
                            modalContent +='<tr>';
                            modalContent +='<th>V.A.T </th><td>'+valueData.vat+'%</td>';
                            modalContent +='</tr>';
                            modalContent +='<tr>';
                            modalContent +='<th>Total Price </th><td><a style="border-bottom: 3px double;color:#0c0c0c;">'+totalPrice(valueData.unit_price,valueData.quantity_ordered,valueData.vat)+' /=</a></td>';
                            modalContent +='</tr>';
                            modalContent +='</tbody>';
                            modalContent +='</table>';
                            modalContent +='</div>';
                            modalContent +='</div>';
                            modalContent +='</div>';
            });

                            modalContent +='</div>';
                            modalContent +='</div>';
                            modalContent +='</div>';
                            modalContent +='</div>';

                    $(".modal-body").html(modalContent)

            });



           });
           $(".action_order_form").bind("click",function(){
           var actedId = $(this).attr("id");
           var actionArray = $(this).attr("id").split("_");
           if(actionArray[0] == "edit"){
           }
           if(actionArray[0] == "delete"){
            $("#"+actedId).parent("td").append("<a id='comfirm_delete' class='btn btn-xs btn-danger' title='comfirm delete action'>comfirm?</a><a id='deny_delete' class='btn btn-xs btn-success' title='deny delete action'>No</a>");
            $("#"+actedId).hide();
            $("#comfirm_delete").bind("click",function(){
                    console.log(actionArray[1]);
                    var deleteUrl = '<?php echo  url("orderForm/delete/")?>/'+actionArray[1];
                    console.log(deleteUrl);
                    $.get( deleteUrl, function( data ){
                    $("#messageBody").html('<div class="alert alert-success alert-dismissable" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="false">&times;</span></button><strong>Congratulations!</strong> Deleted Successfully.</div>');

                    $("#"+actedId).parent("td").parent("tr").remove();

                    });
            });
            $("#deny_delete").bind("click",function(){
               $("#comfirm_delete").remove();
               $("#deny_delete").remove();
               $("#"+actedId).show();
            });
           }
           });



   });


   var totalPrice = function (unit_price,quantity_ordered,vat){
   return ((parseFloat(vat)/100)*parseFloat(unit_price)+parseFloat(unit_price))*parseFloat(quantity_ordered);
   }
   </script>
                           