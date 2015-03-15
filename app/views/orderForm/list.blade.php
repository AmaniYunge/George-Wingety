
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
                 <td><a class='edit-row' href='client'>Edit</a></td>
                 <td><a class='delete-row' href='client'>Delete</a></td>

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
           var urlList          = '<?php echo url("orderForm")?>';
           var urlCreate        = '<?php echo url("orderForm/create")?>';
           $("#add-row").bind("click",function(){
               $("#listHere").load(urlCreate)

           });

           $(".particular").bind("click",function(){
           var partId = $(this).attr("id").split("_")[0];
            var particularUrl = '<?php echo  url("order/particular")?>/'+partId;



            $.get( particularUrl, function( data ) {
              var modalContent =' <div class="col-lg-12">';
                            modalContent +='<div class="widget-container fluid-height">';
                            modalContent +='<div class="heading">';
                            modalContent +='<i class="fa fa-toggle-down"></i>Particulars For Order Form Number '+$("td#"+partId).html();
                            modalContent +='</div>';
                            modalContent +='<div class="widget-content">';
                            modalContent +='<div class="panel-group" id="accordion">';

            $.each(data,function(indexData,valueData){
                          console.log(data);
                            modalContent +='<div class="panel">';
                            modalContent +='<div class="panel-heading">';
                            modalContent +='<div class="panel-title">';
                            modalContent +='<a class="accordion-toggle collapsed" data-parent="#accordion" data-toggle="collapse" href="components.html#collapseThree">';
                            modalContent +='<div class="caret pull-right"></div>';
                            modalContent +='3. Summary and Quiz</a>';
                            modalContent +='</div>';
                            modalContent +='</div>';
                            modalContent +='<div class="panel-collapse collapse" id="collapseThree">';
                            modalContent +='<div class="panel-body">';
                            modalContent +='<h2>';
                            modalContent +='Summary and Quiz';
                            modalContent +='</h2>';
                            modalContent +='Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven\'t heard of them accusamus labore sustain able.';
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
   });
      </script>
                           