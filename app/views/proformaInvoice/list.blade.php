

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
                                     Proforma No:
                                  </th>
                                  <th>
                                     Client
                                  </th>
                                  <th class="hidden-xs">
                                     Provider Name
                                  </th>

                                  <th class="hidden-xs">
                                     Preview
                                  </th>

                                  <th width="60"></th>
                                  <th width="75"></th>
                                  </thead>
                                     <tbody>
                                        @foreach( ProformaInvoice::all() as $proforma)
                                           <tr id="{{ $proforma->id }}">

                                           <td >{{$proforma->proforma_number}}</td>
                                           <td>{{ Client::find($proforma->client_id)['attention_name'] }}</td>
                                           <td>{{$proforma->provider_name}}</td>
                                           <td><a class="particular" href='#'  title="Preview"><i class="fa fa-list"></i></a></td>
                                           <td><a class='action_proforma' id="edit_{{ $proforma->id }}" href='#'>Edit</a></br></td>
                                           <td><a class='action_proforma' id="delete_{{ $proforma->id }}" href='#'>Delete</a></br></td>
                                           </tr>
                                        @endforeach
                                     </tbody>
                                     </table>
                                     </div>
                                     </div>
                                     </div>
                                     </div>
                                       <!-- end DataTables Example -->
                                     </div>

   <script>
   $(document).ready(function(){
           var ListContainer    = "listingTable";
           var urlList          = '<?php echo url("proformas")?>';
           var urlCreate        = '<?php echo url("proforma/create")?>';
           $("#add-row").bind("click",function(){
               $("#listHere").load(urlCreate)

           });

           $(".particular").bind("click",function(){
           var partId = $(this).parent("td").parent("tr").attr("id");
           var particularUrl = '<?php echo  url("proforma/preview")?>/'+partId;
             $("#listHere").load(particularUrl);
             //            $.get( particularUrl, function( data ) {
//              var modalContent =' <div class="col-lg-12">';
//                            modalContent +='<div class="widget-container fluid-height">';
//                            modalContent +='<div class="heading">';
//                            modalContent +='<i class="fa fa-toggle-down"></i>Particulars For Order Form Number '+$("td#"+partId).html();
//                            modalContent +='</div>';
//                            modalContent +='<div class="widget-content">';
//                            modalContent +='<div class="panel-group" id="accordion">';
//
//            $.each(data,function(indexData,valueData){
//                          console.log(data);
//                            modalContent +='<div class="panel">';
//                            modalContent +='<div class="panel-heading">';
//                            modalContent +='<div class="panel-title">';
//                            modalContent +='<a class="accordion-toggle collapsed" data-parent="#accordion" data-toggle="collapse" href="components.html#collapseThree">';
//                            modalContent +='<div class="caret pull-right"></div>';
//                            modalContent +='3. Summary and Quiz</a>';
//                            modalContent +='</div>';
//                            modalContent +='</div>';
//                            modalContent +='<div class="panel-collapse collapse" id="collapseThree">';
//                            modalContent +='<div class="panel-body">';
//                            modalContent +='<h2>';
//                            modalContent +='Summary and Quiz';
//                            modalContent +='</h2>';
//                            modalContent +='Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven\'t heard of them accusamus labore sustain able.';
//                            modalContent +='</div>';
//                            modalContent +='</div>';
//                            modalContent +='</div>';
//            });
//
//                            modalContent +='</div>';
//                            modalContent +='</div>';
//                            modalContent +='</div>';
//                            modalContent +='</div>';
//
//                    $(".modal-body").html(modalContent)
//
//            });
           });



           $(".action_proforma").bind("click",function(){
                   var actedId = $(this).attr("id");
                   var actionArray = $(this).attr("id").split("_");
                   if(actionArray[0] == "edit"){
                   }
                   if(actionArray[0] == "delete"){
                    $("#"+actedId).parent("td").append("<a id='comfirm_delete' class='btn btn-xs btn-danger' title='comfirm delete action'>comfirm?</a><a id='deny_delete' class='btn btn-xs btn-success' title='deny delete action'>No</a>");
                    $("#"+actedId).hide();
                    $("#comfirm_delete").bind("click",function(){
                            console.log(actionArray[1]);
                            var deleteUrl = '<?php echo  url("proforma/delete/")?>/'+actionArray[1];
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