<!-- End Navigation -->
<style>
.doubleClick {
    cursor: pointer;
}

.doubleClick :hover {
    color: #007DA0;
}
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
                     <label for="proforma_number">Proforma No.</label>
                     <input type="btn" class="form-control" style="font-weight: bolder" value="abcd" disabled>
                     <input type="hidden"  id="proforma_number" name="proforma_number" value="abcd" >
                  </div>
                  </td>
                  <td>
                  <div class="form-group">
                     <label for="campany_name">Client Name.</label>
                     <input type="text" class="form-control" id="campany_name" name="campany_name" placeholder="Company Name">
                  </div>
                  </td>
                  <td>
                  <div class="form-group">
                     <label for="address">Provider </label>
                     <input type="text" class="form-control" id="address" name="address" placeholder="Address">
                  </div>
                  </td>
                </tr>
                 <tr>
                  <td colspan="3">
                  <div class="form-group">
                     <label for="order_form">Select Order Form</label>
                     <select  class="form-control" id="order_form" name="order_form" >
                      <option value=" " selected disabled>-- Select order form --</option>
                     @foreach(OrderForm::all() as $orderForms)
                      <option value="{{ $orderForms->id }}">{{ $orderForms->formNumber }}</option>
                     @endforeach
                     </select>
                  </div>
                  </td>

                </tr>
                <tr><td colspan="4"><div class="well" id="particular"></div></td></tr>
                <tr><td colspan="4"><button class="btn btn-success" id="add-client-button" type="button">Add</button></td></tr>
                </form>
                </table>
                <div id="status"></div>
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
            var particularContainer = "particular";
            var statusId= "status";
            var formId = "clientForm";
            var apiUrl = '<?php echo url("proforma/add");?>';
            var listUrl = '<?php url("proforma/list"); ?>';
            var isDisabled = false;
            var isMultMode = false;
            window['message'] = "Remove from proforma invoice";
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


            $("select#order_form").bind("change",function(){
            window['total'] = 0;
            var orderFormUrl = '<?php echo url("orderForm/showinfo")?>/'+$(this).val();
            $.get( orderFormUrl, function( data ) {

            if(data.length >= 1){

                var table = "<table class='table table-responsive table-bordered' >";
                table+="<tbody>";
                    var tdCounter = 0;
                    table += "<tr >";
                    table += "<th>Status</th>";
                    table += "<th>Particular</th>";
                    table += "<th>Quantity</th>";
                    table += "<th>Unit Price</th>";
                    table += "<th>V.A.T</th>";
                    table += "<th>Disc (%)</th>";
                    table += "<th>Total Price</th>";
                    table += "<th>Grand Total</th>";
                    table += "</tr>";
                    $.each(data,function(dataIndex,dataValue){

                    table += "<tr style='text-align: center;' id='"+dataValue.id+"' >";
                    table += "<td><label class='checkbox ' title='"+window['message']+"'><input type='checkbox'  class='"+dataValue.id+"' checked='yes' name='particular_id'><span></span>  </label></td><td style='text-align: left!important;'>"+dataValue.description+"</td><td style='text-align: center;' class='doubleClick' title='Double click to alter quantity'>"+dataValue.quantity_ordered+"</td><td class='doubleClick' title='Double click to alter unit price'>"+dataValue.unit_price+"</td><td><label class='checkbox ' title='"+window['message']+"'><input type='checkbox' style='width:50px;text-align: center;' class=''  name='vat_id'><span></span>  </label></td><td><input  style='width:50px;text-align: center;' type='text' class='discount' id='' /></td><td>"+parseFloat(dataValue.quantity_ordered)*parseFloat(dataValue.unit_price)+"</td>";

                    table += "</tr>";
                    window['total'] += parseFloat(dataValue.quantity_ordered)*parseFloat(dataValue.unit_price);
                    });
                table += "<tr style='border-bottom: 1px solid #000000!important;border-top:1px solid #cfcfcf!important;'>";
                table += "<td colspan='5' style='text-align: left;font-weight: bolder'>Total Price</td>";
                table += "<td><input style='width:50px;text-align: center;' type='text' class='discount_' id='' /></td>";
                table += "<td>&nbsp;<span id='' class='comulative_price'>"+window['total']+"</span></td>";
                table += "<td>Tsh:&nbsp;<span id='comulative_price' class='comulative_price'>"+window['total']+"</span></td>";
                table += "</tr>";
                table+="</tbody>";
                table+="</table>";
                    $("#"+particularContainer).html(table);

                    $("input[type=checkbox]").bind("click",function(){

                            var checkClass = $(this).attr("class");
                            if($("input[type=checkbox][class="+checkClass+"]").prop('checked')){
                                 $(this).prop('disabled',false);
                                 $(this).parent("label").attr('title','Add to proforma invoice');
                                   window['total']+=parseFloat($("tr#"+checkClass+" td:last").text());
                                   $(".comulative_price").text(window['total']);
                                   console.log($("input."+checkClass+""));
                                   $("input."+checkClass+"").css({"display":"none"});
                                   $("tr#"+checkClass).css({"background-color":"#ffffff"});
                                   $("#particular table tr:last-child td:nth-child(2) input").trigger('focusout');
                            }else{

                                $(this).parent("label").attr('title','Add to proforma invoice');
                                    if(window['total']>0){
                                        window['total']-=parseFloat($("tr#"+checkClass+" td:last").text());
                                    }else{
                                    window['total']=0;
                                    }
                                $(".comulative_price").text(window['total']);
                                $("input."+checkClass+"").css({"display":"none"});
                                $("tr#"+checkClass).css({"background-color":"#cfcfcf"});
//                                $("#particular table tr:last-child td:nth-child(2) input").trigger('focusout');
                            }


                    });
                if(!isDisabled){
                    $("#particular table tr").each(function(){

                      $(this).find("td:nth-child(3)").bind('dblclick',function(event) {

                      var self = $(this);
                      var selfTotal = self.parent("tr").find("td:nth-child(7)");
                      var existingValue = self.text();
                      var newValue = 0;
                      var inputBox = "<input id='quantityInput' style='width:50px;text-align: center;' name='quantity' />";
                      self.html(inputBox);
                      $('html').on('click',function() {
                      //Hide the menus if visible
                      if(!isNaN(self.find("input#quantityInput").val())&&self.find("input#quantityInput").val()!==""){

                      newValue = self.find("input#quantityInput").val();
                      console.log("New Value valid :"+newValue);
                        self.text(newValue);
                         window['total'] += parseFloat(newValue)*parseFloat(self.next("td").text())-parseFloat(selfTotal.text());
                        selfTotal.text(parseFloat(newValue)*parseFloat(self.next("td").text()));
                        $(".comulative_price").text(window['total']);

                      }

                      });
                      self.click(function(event){
                            event.stopPropagation();
                        });

                      });

                    });


                    ///// pass through all table rows except the lasst row
                    $("#particular table tr:not(:last-child,:first-child)").each(function(){

                        /// handle discount validation rules
                      $(this).find("td:nth-child(6) input.discount").bind('focusin',function(event){

                        $("#particular table tr:last-child td:nth-child(2) input").attr("disabled",true);
                      });


                      $(this).find("td:nth-child(6) input.discount").bind('focusout',function(event){
                           var checker = 0;
                           var disc = 0;
                           var comulativeTotal = parseFloat($("#particular table tr:last td:nth-child(3) .comulative_price").text());
                           var oldEffective = $(this).parent("td").prev("td").prev("td").prev("td").text()*$(this).parent("td").prev("td").prev("td").text();

                         $("#particular table tr:not(:last-child,:first-child)").each(function(){
                             if($(this).find("td:nth-child(6) input").val()!==""){
                             checker++;
                             }
                         });



                         if($(this).val()===""&&checker<=0){
                            $("#particular table tr:last-child td:nth-child(2) input").attr("disabled",false);
//                            comulativeTotal += parseFloat($(this).parent("td").prev("td").prev("td").text());
//                            var totalGrand = comulativeTotal;

                            disc = 0;
                            var effectiveValue = oldEffective;
                            effectiveValue = oldEffective-((disc/100)*oldEffective);
                            if(effectiveValue>=0){}else{effectiveValue = 0;}
                            if(comulativeTotal<=0){comulativeTotal += parseFloat($(this).parent("td").prev("td").prev("td").text());}else{}
                             var totalGrand = (comulativeTotal-oldEffective)+effectiveValue;

                            }else{

                            disc = $(this).val();
                            var effectiveValue = oldEffective;
                            effectiveValue = oldEffective-((disc/100)*oldEffective);
                            if(effectiveValue>=0){}else{effectiveValue = 0;}
                            if(comulativeTotal<=0){comulativeTotal += parseFloat($(this).parent("td").prev("td").prev("td").text());}else{}
                             var totalGrand = (comulativeTotal-oldEffective)+effectiveValue;


                        }

                            $(this).parent("td").next("td").text(effectiveValue);
                            $(".comulative_price").text(totalGrand);
                            console.log(totalGrand);
                      });


                    });

                    $("#particular table tr:last-child td:nth-child(2) input").bind('focusin',function(){
                         $("#particular table tr:not(:last-child,:first-child)").each(function(){
                         $(this).find("td:nth-child(6) input.discount").attr("disabled",true);
                         });
                    });

                    // handle last text field focus in and out
                    $("#particular table tr:last-child td:nth-child(2) input").bind('focusout',function(){
                        var refreshTotal = 0;
                        if($(this).val()===""){
                             $("#particular table tr:not(:last-child,:first-child)").each(function(){
                             $(this).find("td:nth-child(6) input.discount").attr("disabled",false);
                             refreshTotal +=parseFloat($(this).find("td:nth-child(7)").text());
                             });

                            $(".comulative_price").text(refreshTotal);

                        }else{

                            $("#particular table tr:not(:last-child,:first-child)").each(function(){
                             $(this).find("td:nth-child(6) input.discount").attr("disabled",true);
                             refreshTotal +=parseFloat($(this).find("td:nth-child(7)").text());
                             });
                               var effectiveSum = refreshTotal - refreshTotal*parseFloat($(this).val())/100;
                            $(".comulative_price").text(effectiveSum);


                        }
                    });

                   }
//                    });
            }else{
                $("#"+particularContainer).html('<div>No Particulars</div>');
            }

            });
            });

        $('button#'+addButtonId).bind("click",function(){
                var formData = $( ":input" ).serialize();
                if(!isDisabled){

        //        $.post( apiUrl, formData , function(data, status){
        //
        //               if(!isMultMode){
        //                  $("#"+statusId).html(data);
        //                  $( "form#clientForm" ).empty();
        //               }else{
        //
        //               }
        //
        //        });

                }
        });
});
</script>