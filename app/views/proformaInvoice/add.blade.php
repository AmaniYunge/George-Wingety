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
                     <input type="btn" class="form-control proforma_number"  style="font-weight: bolder" value="" disabled>
                     <input type="hidden"  id="proforma_number" class="proforma_number" name="proforma_number" value="" >
                  </div>
                  </td>
                  <td>
                  <div class="form-group">
                     <label for="client_id">Client Name.</label>
                     <select class="form-control" id="client_id" name="client_id">
                     <option value="client"  selected disabled>-- select client --</option>
                     @foreach(Client::all() as $client)
                     <option value="{{ $client->id }}">{{ $client->attention_name }}</option>
                     @endforeach
                     </select>
                  </div>
                  </td>
                  <td>
                  <div class="form-group">
                     <label for="provider_name">Provider</label>
                     <input type="text" class="form-control"  disabled value="George CASMIR" placeholder="Provider">
                     {{--{{ Auth::user()->full_name }}--}}
                     <input type="hidden" class="form-control" id="provider_name" name="provider_name"  value="George CASMIR" placeholder="Provider">
                     {{--{{ Auth::user()->id }}--}}
                  </div>
                  </td>
                </tr>
                 <tr>
                  <td colspan="3">
                  <div class="form-group">
                     <label for="order_form">Select Order Form</label>
                     <select  class="form-control" id="order_form" name="order_form" >
                      <option value="order" selected disabled>-- Select order form --</option>

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
            var vatArray = new Array();
            window.currentVat = 0;
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
            $("select#client_id").bind("change",function(){
            var singleOrderFormUrl  = '<?php echo url("orderForm/for_client")?>/'+$(this).val();
            loadOrderForms(singleOrderFormUrl,"order_form");
            })
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
                    var withVat = getValueWithVat(getProduct(dataValue.quantity_ordered,dataValue.unit_price),dataValue.vat);
                     table += "<tr style='text-align: center;' id='"+dataValue.id+"' >";
                    table += "<td><label class='checkbox ' title='"+window['message']+"'><input type='checkbox' roleplayed='state' class='"+dataValue.id+"' checked='yes' name='particular_id'><span></span>  </label></td><td style='text-align: left!important;'>"+dataValue.description+"</td><td style='text-align: center;' class='doubleClick' title='Double click to alter quantity'>"+dataValue.quantity_ordered+"</td><td class='doubleClick' title='Double click to alter unit price'>"+dataValue.unit_price+"</td><td><label class='checkbox ' title='"+window['message']+"'><input type='checkbox' roleplayed='vat' checked='yes' style='width:50px;text-align: center;' class='' value='"+dataValue.id+"' name='vat_id'><span></span>  </label></td><td><input  style='width:50px;text-align: center;' type='text' class='discount' id='' /></td><td>"+withVat+"</td>";

                    table += "</tr>";

                    window['total'] += withVat;
                    vatArray.push({id :dataValue.id,vat:dataValue.vat});
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

                    $("input[type=checkbox][roleplayed=state]").bind("click",function(){

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
                            }


                    });

                    // handle vat check box
                    $("input[type=checkbox][roleplayed=vat]").bind("click",function(){
                            var self = $(this);
                            var checkVat = self.attr("value");
                            $.each(vatArray,function(index,value){
                            if(value.id===checkVat){
                                if(self.prop('checked')){
                                  var OgVal = getValueWithVat($("tr#"+checkVat).find("td:nth-child(7)").text(),value.vat);
                                  $("tr#"+checkVat).find("td:nth-child(7)").text(OgVal);
                                  $("#particular table tr:last-child td:nth-child(2) input").trigger('focusout');
                                }

                                if(!self.prop('checked')){
                                  var OgVal = getOrigValue($("tr#"+checkVat).find("td:nth-child(7)").text(),value.vat);
                                  $("tr#"+checkVat).find("td:nth-child(7)").text(OgVal);
                                  $("#particular table tr:last-child td:nth-child(2) input").trigger('focusout');

                                }
                            }
                            });




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
                        self.text(newValue);
                         window['total'] += getProduct(newValue,self.next("td").text())-parseFloat(selfTotal.text());
                        selfTotal.text(getProduct(newValue,self.next("td").text()));
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
                            effectiveValue = getValueAfterDiscount(oldEffective,disc);//oldEffective-((disc/100)*oldEffective);
                            if(effectiveValue>=0){}else{effectiveValue = 0;}
                            if(comulativeTotal<=0){comulativeTotal += parseFloat($(this).parent("td").prev("td").prev("td").text());}else{}
                             var totalGrand = (comulativeTotal-oldEffective)+effectiveValue;

                            }else{

                            disc = $(this).val();
                            var effectiveValue = oldEffective;
//                            effectiveValue = oldEffective-((disc/100)*oldEffective);
                              effectiveValue = getValueAfterDiscount(oldEffective,disc);
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
                var disc     = 0;
                var vat      = null;
                if(!isDisabled){
                  var particulars = new Array();
                   $("#particular table tr:not(:last-child,:first-child)").each(function(){
                   if($(this).find("td:first input").prop("checked")){
                   var id          =  $(this).find("td:first input").attr("class");
                   var quantity    =  $(this).find("td:nth-child(3)").text();
                   var unitPrice   =  $(this).find("td:nth-child(4)").text();
                   var total       =  $(this).find("td:nth-child(7)").text();

                   if($(this).find("td:nth-child(5) input").prop("checked")){vat = $(this).find("td:nth-child(5) input").val();}else{}
                   if($(this).find("td:nth-child(6) input").val()==""){}else{disc = $(this).find("td:nth-child(6) input").val();}

                   particulars.push({id:id,quantity:quantity,unitPrice:unitPrice,vat:vat,total:total,disc:disc});

                   }


                   });
                   formData = formData+"&particulars="+JSON.stringify(particulars);
                $.post( apiUrl, formData , function(data, status){


                       if(!isMultMode){
                          $("#"+backId).trigger("click");
                       }else{
                       $("select#order_form").val("order");
                       $("select#client_id").val("client");
                       $("input.proforma_number").val(createProformaNumber());
                       $("#"+particularContainer).html("");
                          $("#"+statusId).html(data);
                          $( "form#clientForm" ).empty();
                       }

                });

                }
        });


        function getOrigValue(valueWithVat,vatInPercent){
        var numerator = getProduct(100,valueWithVat);
        var denominator = 100+parseFloat(vatInPercent);
        return  numerator/denominator;
        }

        function getValueWithVat(origValue,vatInPercent){
        return parseFloat(origValue)+(getProduct(origValue,vatInPercent)/100);
        }

        function getProduct(a,b){
        return parseFloat(a)*parseFloat(b);
        }

        function getValueAfterDiscount(orginal,discInpercent){
//        effectiveValue = oldEffective-((disc/100)*oldEffective);
        return orginal - getProduct(getProduct(discInpercent,0.01),orginal);
        }
        function createProformaNumber(){
        var proformaNumber = "PF-GW-";
        var now = new Date();
        var stamp=(now.getTime()+"").substr( (now.getTime()+"").length-5, (now.getTime()+"").length );
        proformaNumber = proformaNumber+stamp+"-"+now.getHours()+now.getDay()+now. getUTCMonth()+"-"+now.getYear();
        return proformaNumber;
        }
        function loadOrderForms(singleOrderFormUrl,divId){
        $.get( singleOrderFormUrl, function( data ) {
        var option = "<option value='order' selected disabled>-- Select order form --</option>";
         $.each(data,function(index,value){
         option+="<option value='"+value.id+"'>"+value.formNumber+"</option>";
         });
            $("#"+divId).html(option);
        })
        }
        $("input.proforma_number").val(createProformaNumber());
});
</script>