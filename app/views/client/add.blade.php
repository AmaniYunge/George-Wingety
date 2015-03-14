<!-- End Navigation -->
<style>
.table thead>tr>th, .table tbody>tr>th, .table tfoot>tr>th, .table thead>tr>td, .table tbody>tr>td, .table tfoot>tr>td {
padding: 8px;
line-height: 1.428571429;
vertical-align: top;
border-top: 1px solid #ffffff;
</style>
<div class="container-fluid main-content">
    <div class="row">
        <div class="col-lg-6">
            <form action="xeditable.html" class="form-horizontal" id="frm" method="get">
                <div class="form-group" style="margin-bottom:5px">
                    <label class="control-label pull-left" style="text-align:left; margin-right:15px;">
                    Mode
                    </label>
                    <select class="form-control pull-left" id="addMode" name="c" style="width:150px; margin-right:8px;">
                    <option value="single">Single</option>
                    <option value="multiple">Multiple</option>
                    </select>
                    <a class="btn btn-primary" id="backButton">
                    <i class="fa  fa-arrow-circle-left"></i>
                    &nbsp;&nbsp;back
                    </a>
                </div>
            </form>
        </div>
        <div class="col-lg-6">
            <div style="float: right;">
                <button class="btn btn-default" id="enable" style="margin:0;">Disable</button>
            </div>
        </div>
    </div>
    <hr>
    <div class="row" style="margin-top: 0">
        <div class="col-lg-12">
            <div class="widget-container fluid-height clearfix">
                <div class="widget-content padded">
                <table class="table table-responsive">
                <form class="form-inline">
                <tr>
                  <td>
                  <div class="form-group">
                     <label for="exampleInputName2">Name</label>
                     <input type="text" class="form-control" id="exampleInputName2" placeholder="Jane Doe">
                  </div>
                  </td>
                  <td>
                  <div class="form-group">
                     <label for="exampleInputName2">Name</label>
                     <input type="text" class="form-control" id="exampleInputName2" placeholder="Jane Doe">
                  </div>
                  </td>
                  <td>
                  <div class="form-group">
                     <label for="exampleInputName2">Name</label>
                     <input type="text" class="form-control" id="exampleInputName2" placeholder="Jane Doe">
                  </div>
                  </td>
                  <td>
                  <div class="form-group">
                     <label for="exampleInputName2">Name</label>
                     <input type="text" class="form-control" id="exampleInputName2" placeholder="Jane Doe">
                  </div>
                  </td>

                </tr> <tr>
                  <td>
                  <div class="form-group">
                     <label for="exampleInputName2">Name</label>
                     <input type="text" class="form-control" id="exampleInputName2" placeholder="Jane Doe">
                  </div>
                  </td>
                  <td>
                  <div class="form-group">
                     <label for="exampleInputName2">Name</label>
                     <input type="text" class="form-control" id="exampleInputName2" placeholder="Jane Doe">
                  </div>
                  </td>
                  <td>
                  <div class="form-group">
                     <label for="exampleInputName2">Name</label>
                     <input type="text" class="form-control" id="exampleInputName2" placeholder="Jane Doe">
                  </div>
                  </td>
                  <td>
                  <div class="form-group">
                     <label for="exampleInputName2">Name</label>
                     <input type="text" class="form-control" id="exampleInputName2" placeholder="Jane Doe">
                  </div>
                  </td>

                </tr>
                <tr><td colspan="4"><a class="btn btn-success">Add</a></td></tr>
                </form>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
$(document).ready(function(){
var modeId = "addMode";
var backId = "backButton";
var disableId = "enable";

var isDisabled = false;
var isMultMode = false;

$("#"+modeId).bind("change",function(){
    if(this.val()=="single"){
    isMultMode = false;
    }else{
    isMultMode = true;
    }
});
$("#"+backId).bind("click",function(){
    $("#listHere").load("client/list");
});
$("#"+disableId).bind("click",function(){
    if(!isDisabled){
    $(this).removeClass("btn-default").addClass("btn-success").text("Enable");
    isDisabled = true;
    }else{
    $(this).removeClass("btn-success").addClass("btn-default").text("Disable");
    isDisabled = false;
    }
});
});
</script>