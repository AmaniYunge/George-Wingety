 <div class="container-fluid main-content">

 <!-- DataTables Example -->
 <div class="row">
 <div class="col-lg-12">
   <div class="widget-container fluid-height clearfix">
      <div class="heading">
          <a class="btn btn-sm btn-primary-outline pull-right"  id="add-row" title="add new client(s)"><i class="fa fa-plus"></i>Add row</a>
      </div>
      <div class="widget-content padded clearfix">
         <table class="table table-bordered table-striped" id="datatable-editable">
         <thead>
         <th class="hidden-xs">Code</th>
         <th class="hidden-xs">Description/Name</th>
         <th class="hidden-xs">Gross Weight</th>
         <th class="hidden-xs">Net Weight</th>
         <th class="hidden-xs">Unit Price</th>
         <th class="hidden-xs">VAT</th>
         <th class="hidden-xs">Bin Card</th>
         <th class="hidden-xs">Quantity</th>
         <th class="hidden-xs"></th>
         <th class="hidden-xs"></th>
         <tbody id="listingTableBody">
            @foreach( Particular::all() as $particular)
             <tr>

             <td id="{{ $particular->id }}">{{$particular->particular_code}}</td>
             <td>{{$particular->description}}</td>
             <td>{{$particular->gross_weight}}</td>
             <td>{{$particular->net_weight}}</td>
             <td>{{$particular->unit_price}}</td>
             <td>{{$particular->vat}}</td>
             <td>{{$particular->bincard_id}}</td>
             <td>{{$particular->quantity}}</td>
             <td><a class='action_client' id="edit_{{ $particular->id }}" href='#'>Edit</a></br></td>
             <td><a class='action_client' id="delete_{{ $particular->id }}" href='#'>Delete</a></br></td>


             </tr>
            @endforeach
         </tbody>
         </table>
        </div>
        </div>
        </div>
       </div>
       </div>
   <script>

       $(document).ready(function(){
        var ListContainer    = "listingTable";
        var urlList          = '<?php echo url("particulars")?>';
        var urlCreate        = '<?php echo url("particular/create")?>';
        $("#add-row").bind("click",function(){
            $("#listHere").load(urlCreate)

        });


           $(".action_client").bind("click",function(){
                   var actedId = $(this).attr("id");
                   var actionArray = $(this).attr("id").split("_");
                   if(actionArray[0] == "edit"){
                   }
                   if(actionArray[0] == "delete"){
                    $("#"+actedId).parent("td").append("<a id='comfirm_delete' class='btn btn-xs btn-danger' title='comfirm delete action'>comfirm?</a><a id='deny_delete' class='btn btn-xs btn-success' title='deny delete action'>No</a>");
                    $("#"+actedId).hide();
                    $("#comfirm_delete").bind("click",function(){
                            console.log(actionArray[1]);
                            var deleteUrl = '<?php echo  url("particular/delete/")?>/'+actionArray[1];
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
   </script>