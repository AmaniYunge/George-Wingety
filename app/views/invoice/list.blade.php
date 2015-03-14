 <div class="container-fluid main-content">

 <!-- DataTables Example -->
 <div class="row">
 <div class="col-lg-12">
   <div class="widget-container fluid-height clearfix">
      <div class="heading">
          <a class="btn btn-sm btn-primary-outline pull-right"  id="add-row" title="add new invoice(s)"><i class="fa fa-plus"></i>Add row</a>
      </div>
   <div class="widget-content padded clearfix">
   <table class="table table-bordered table-striped" id="datatable-editable">
   <thead>

        <th class="hidden-xs">
           Particulars
        </th>
        <th class="hidden-xs">
           Profoma Invoice
        </th>
        <th class="hidden-xs">
          Client
        </th>
        <th class="hidden-xs">
           Invoice Number
        </th>
        <th class="hidden-xs">
           Provider Name
        </th>

        <th ></th>
        <th ></th>
      </thead>
      <tbody>
        @foreach( Invoice::all() as $invoice)
             <tr>

             <td id="{{ $invoice->id }}">{{ $invoice->particular_id}}</td>
             <td>{{$invoice->proformaInvoice_id	}}</td>
             <td>{{$invoice->cient_id}}</td>
             <td>{{$invoice->$invoice_id}}</td>
             <td>{{$invoice->provider_name}}</td>
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
        var urlList          = '<?php echo url("invoice")?>';
        var urlCreate        = '<?php echo url("invoice/create")?>';
        $("#add-row").bind("click",function(){
          $("#listHere").load(urlCreate)

        });
       });
   </script>