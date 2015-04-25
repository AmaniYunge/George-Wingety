
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
          <a class="btn btn-sm btn-primary-outline pull-right"  id="add-row" title="add new client(s)"><i class="fa fa-plus"></i>Add row</a>
      </div>
      <div class="widget-content padded clearfix">
         <table class="table table-bordered table-striped" id="datatable-editable">
         <thead>
         <th class="hidden-xs" style="width: 100px!important;">Code</th>
         <th class="hidden-xs">Bincard Name</th>
         <th class="hidden-xs" style="width: 100px!important;">More</th>
         <th class="hidden-xs" style="width: 100px!important;"></th>
         <th class="hidden-xs" style="width: 100px!important;"></th>
         <tbody id="listingTableBody">
            @foreach( Bincard::all() as $bincard)
             <tr >
             <td id="{{ $bincard->id }}">{{$bincard->code}}</td>
             <td>{{$bincard->bincard_name}}</td>
             <td><a class="particular" href='#' data-toggle="modal" data-target="#myModal" id="{{ $bincard->id }}_particular" title="preview"><i class="fa fa-list"></i></a></td>
             <td><a class='action_client' id="edit_{{ $bincard->id }}" href='#'>Edit</a></br></td>
             <td><a class='action_client' id="delete_{{ $bincard->id }}" href='#'>Delete</a></br></td>


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
        var urlList          = '<?php echo url("bincards")?>';
        var urlCreate        = '<?php echo url("bincard/create")?>';
        $("#add-row").bind("click",function(){
            $("#listHere").load(urlCreate)

        });

    $(".particular").bind("click",function(){
           var partId = $(this).attr("id").split("_")[0];
            var particularUrl = '<?php echo  url("bincard/particluars")?>/'+14;



            $.get( particularUrl, function( data ) {
              var modalContent =' <div class="col-lg-12">';
                            modalContent +='<div class="widget-container fluid-height">';
                            modalContent +='<div class="heading">';
                            modalContent +='<i class="fa fa-toggle-down"></i>Bin Card Particulars   <b>Bin Card No: '+$("td#"+partId).html()+'</b>';
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
                            modalContent +='Particular Details';
                            modalContent +='</h2>';
                            modalContent +='<table class="table table-responsive table-stripped table-condensed">';
                            modalContent +='<tbody>';
                             modalContent +='<tr>';
                            modalContent +='<th>Stock </th><td>'+valueData.quantity+'</td>';
                            modalContent +='</tr>';
                            modalContent +='<tr>';
                            modalContent +='<th>Unit Price </th><td>'+valueData.unit_price+' /=</td>';
                            modalContent +='</tr>';
                            modalContent +='<tr>';
                            modalContent +='<th>V.A.T </th><td>'+valueData.vat+'%</td>';
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


           $(".action_client").bind("click",function(){
                   var actedId = $(this).attr("id");
                   var actionArray = $(this).attr("id").split("_");
                   if(actionArray[0] == "edit"){
                   }
                   if(actionArray[0] == "delete"){
                    $("#"+actedId).parent("td").append("<a id='comfirm_delete' class='btn btn-xs btn-danger' title='comfirm delete action'>comfirm?</a><a id='deny_delete' class='btn btn-xs btn-success' title='deny delete action'>No</a>");
                    $("#"+actedId).hide();
                    $("#comfirm_delete").bind("click",function(){
                            var deleteUrl = '<?php echo  url("bincard/delete/")?>/'+actionArray[1];
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