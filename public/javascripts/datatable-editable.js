function restoreRow ( oTable, nRow )
{
  var aData = oTable.fnGetData(nRow);
  var jqTds = $('>td', nRow);
  
  for ( var i=0, iLen=jqTds.length ; i<iLen ; i++ ) {
    oTable.fnUpdate( aData[i], nRow, i, false );
  }
  
  oTable.fnDraw();
}

function editRow ( oTable, nRow )
{
  var aData = oTable.fnGetData(nRow);
  var jqTds = $('>td', nRow);
  var editableTds =   jqTds.length-2;
    for(var tdCount = 0;tdCount<editableTds;tdCount++){
        jqTds[tdCount].innerHTML = '<input type="text" value="'+aData[tdCount]+'">';
    }
  jqTds[editableTds].innerHTML = '<a class="edit-row" href="javascript:void(0)">Save</a>';

}

function saveRow ( oTable, nRow )
{

    var aData = oTable.fnGetData(nRow);console.log(aData);
  var jqInputs = $('input', nRow);
    var texFieldCount = jqInputs.length;
    for(var tdCount =0;tdCount<texFieldCount;tdCount++){
        oTable.fnUpdate( jqInputs[tdCount].value, nRow, tdCount, false );
    }

  oTable.fnUpdate( '<a class="edit-row" href="javascript:void(0)">Edit</a>', nRow, texFieldCount, false );
  oTable.fnDraw();
}

$(document).ready(function() {

    //var Client = currentInstance();
    //var Invoice = currentInstance();
    //var Profoma = currentInstance();
    //var User = currentInstance();
    //Client.ListFromDatabase("clients",function(data){
    //    console.log(data);
    //});





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

  //$('#add-row').click( function (e) {
  //  e.preventDefault();
  //    var columns = $("#datatable-editable tbody tr:first td").length-2;
  //    var inputArray = new Array();
  //    for(var tdCount = 0;tdCount<columns;tdCount++){
  //        inputArray.push('');
  //    }
  //    inputArray.push('<a class="edit-row" href="javascript:void(0)">Edit</a>');
  //    inputArray.push('<a class="delete-row" href="javascript:void(0)">Delete</a>');
  //  var aiNew = oTable.fnAddData(inputArray );
  //  var nRow = oTable.fnGetNodes( aiNew[0] );
  //  editRow( oTable, nRow );
  //  nEditing = nRow;
  //} );

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
} );
