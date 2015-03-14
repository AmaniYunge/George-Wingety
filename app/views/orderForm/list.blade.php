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
                 <td>{{$orderForm->client_id}}</td>
                 <td>{{$orderForm->bill_to}}</td>
                 <td>{{$orderForm->ship_to}}</td>
                 <td><a class="particular" href="#" id="{{ $orderForm->id }}_particular" title="View Particulars"><i class="fa fa-list"></i></a></td>
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
   });
      </script>
                           