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
         <th class="hidden-xs">Attention Name</th>
         <th class="hidden-xs">Company Name</th>
         <th class="hidden-xs">Address</th>
         <th class="hidden-xs">Email</th>
         <th class="hidden-xs">Phone</th>
         <th class="hidden-xs">VAT no.</th>
         <th class="hidden-xs">Country</th>
         <th class="hidden-xs">Status</th>
         <th class="hidden-xs"></th>
         <th class="hidden-xs"></th>
         <tbody id="listingTableBody">
            @foreach( Client::all() as $client)
             <tr>

             <td id="{{ $client->id }}">{{$client->attention_name}}</td>
             <td>{{$client->campany_name}}</td>
             <td>{{$client->address}}</td>
             <td>{{$client->email}}</td>
             <td>{{$client->phone_no}}</td>
             <td>{{$client->tin_no}}</td>
             <td>{{$client->vat_no}}</td>
             <td>{{$client->status}}</td>
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
       </div>
   <script>

       $(document).ready(function(){
        var ListContainer    = "listingTable";
        var urlList          = '<?php echo url("clients")?>';
        var urlCreate        = '<?php echo url("client/create")?>';
        $("#add-row").bind("click",function(){
            $("#listHere").load(urlCreate)

        });
       });
   </script>