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

           <th class="hidden-xs">
           Attention Name
           </th>
           <th>
           Company Name
           </th>
           <th class="hidden-xs">
           Address
           </th>
           <th class="hidden-xs">
           Email
           </th>
           <th class="hidden-xs">
           Phone
           </th>
           <th class="hidden-xs">
           VAT no.
           </th>
           <th class="hidden-xs">
           Country
           </th>
           <th class="hidden-xs">
           Status
           </th>
           <th width="60"></th>
           <th width="75"></th>
           </thead>
           <tbody id="listingTableBody">

           </tbody>
         </table>
        </div>
        </div>
        </div>
       </div>                                       <!-- end DataTables Example -->
       </div>
   <script>

       $(document).ready(function(){
                var oTable = $("#datatable-editable").dataTable({
                "sPaginationType": "full_numbers",
                aoColumnDefs: [
                  {
                    bSortable: false,
                    aTargets: [-2, -1]
                  }
                ]
        });
        var nEditing = null;



       var tableBodyId = "listingTableBody";
       var urlList = '<?php echo url("clients")?>';


       var urlCreate = '<?php echo url("client/create")?>';
          $("#add-row").bind("click",function(){
             $("#listHere").load(urlCreate);
          });

         $.getJSON(urlList).done(function ( data ) {
             var tableRows = "";
             $.each(data,function(dataIndex,dataValue){
             var row = "<tr>";
             $.each(dataValue,function(columnIndex,columnValue){
                if(columnIndex!== "id" && columnIndex!== "created_at" && columnIndex!== "updated_at" ){
                row += "<td>"+columnValue+"</td>";
                }
             });
             row += "<td><a class='edit-row' href='client'>Edit</a></td>";
             row += "<td><a class='delete-row' href='client'>Delete</a></td>";
             row += "<tr>";
             tableRows+=row;
             });
             $("#"+tableBodyId).append(tableRows);

             $('#datatable-editable').on('click', 'a.delete-row', function (e) {
                 e.preventDefault();

                 var nRow = $(this).parents('tr')[0];
                 oTable.fnDeleteRow( nRow );
               } );



              $('#datatable-editable').on('click', 'a.edit-row', function (e) {
                e.preventDefault();

                /* Get the row as a parent of the link that was clicked on */
                var nRow = $(this).parents('tr')[0];

                if ( nEditing !== null && nEditing != nRow ) {
                  /* Currently editing - but not this row - restore the old before continuing to edit mode */
                  restoreRow( oTable, nEditing );
                  editRow( oTable, nRow );
                  nEditing = nRow;
                }
                else if ( nEditing == nRow && this.innerHTML == "Save" ) {
                  /* Editing this row and want to save it */
                  saveRow( oTable, nEditing );
                  nEditing = null;
                }
                else {
                  /* No edit in progress - let's start one */
                  editRow( oTable, nRow );
                  nEditing = nRow;
                }
              } );


         });

       });
   </script>