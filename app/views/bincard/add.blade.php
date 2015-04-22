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
            {{--<form action="xeditable.html" class="form-horizontal" id="frm" method="get">--}}
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
            {{--</form>--}}
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
                <form class="form-inline" id="clientForm" method="POST" action="clients">
                <tr>
                  <td>
                  <div class="form-group">
                     <label for="attention_name">Code</label>
                     <input type="text" class="form-control" id="attention_name" name="attention_name" placeholder="Attention Name">
                  </div>
                  </td>
                  <td>
                  <div class="form-group">
                     <label for="campany_name">Bincard Name</label>
                     <input type="text" class="form-control" id="campany_name" name="campany_name" placeholder="Company Name">
                  </div>
                  </td>

                </tr>
                <tr><td colspan="4"><button class="btn btn-success pull-left" id="add-client-button" type="button">Add</button></td></tr>
                </form>
                </table>
                <div id="statusId"></div>
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
            var addButtonId = "add-client-button";
            var statusId = "statusId";
            var formId = "clientForm";
            var apiUrl = '<?php echo url("client/add");?>';
            var listUrl = '<?php url("client/list"); ?>';
            var isDisabled = false;
            var isMultMode = false;

    $("#"+modeId).bind("change",function(){
        if($("#"+modeId).val()=="single"){
        isMultMode = false;
        }else{
        isMultMode = true;
        }
    });
    $("#"+backId).bind("click",function(){
    //    $("#listHere").load("client/list");
        window.location.href = listUrl;
    });
    $("#"+disableId).bind("click",function(){
        if(!isDisabled){
        $(this).removeClass("btn-default").addClass("btn-success").text("Enable");

            $('input[type=text]').prop('disabled', true);
            $('a#'+addButtonId).attr('disabled','disabled');
       isDisabled = true;
        }else{
        $(this).removeClass("btn-success").addClass("btn-default").text("Disable");
        $('input[type=text]').prop('disabled', false);
        $('a#'+addButtonId).removeAttr('disabled');
        isDisabled = false;
        }
    });
$('button#'+addButtonId).bind("click",function(){
        var formData = $( ":input" ).serialize();
        if(!isDisabled){
        $.post( apiUrl, formData , function(data, status){



               if(!isMultMode){
                    $("#"+statusId).html(data);
                        setTimeout(function(){
                        $("#"+statusId).html("");
                        $("#"+backId).trigger("click");
                    } , 1000);
               }else{
                    $.each($("input[type=text]"),function(){
                     $(this).val("");
                  });

                   $("#"+statusId).html(data);
                        setTimeout(function(){
                        $("#"+statusId).html("");
                   } , 1000);

               }

        });

        }
});
});
</script>