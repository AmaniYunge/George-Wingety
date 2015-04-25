
<?php
$client = Client::find($proforma->client_id);
$ProInPart = DB::select( DB::raw("SELECT * FROM particular_proforma_invoice WHERE proforma_invoice_id='$proforma->id'"));

?>
    <div class="row">
                  <div class="col-lg-12">
                  <a class="btn btn-primary pull-right" onclick=""><i class="fa fa-print"></i>Pdf</a>

                    <a class="btn btn-info pull-right"href="{{ url('proformaInvoice') }}"><i class="fa fa-arrow-left"></i> Back</a>
                    </div>

    </div>
      <div class="container-fluid main-content" style="border: 2px solid #CCCCCC;padding: 5px;">
        <div class="page-title">
          <h1>
            Invoice
          </h1>
        </div>
        <div class="invoice">
          <div class="row">
            <div class="col-lg-12">
              <div class="row invoice-header">
                <div class="col-md-6">
                  {{--<img width="183" src="images/sn-logo@2x.png" />--}}
                </div>
                <div class="col-md-6 text-right">
                  <h2>
                    #{{ $proforma->proforma_number }}
                  </h2>
                  <p>
                    {{ $proforma->created_at }}
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="well">
                <strong>TO</strong>

                <h3>
                  {{ $client->attention_name }}
                </h3>
                <p>
                  {{ $client->address }}<br>{{ $client->phone_no }}<br>{{ $client->email }}
                </p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="well">
                <strong>FROM</strong>
                <h3>
                  George Wingety LTD
                </h3>
                <p>
                  Sinza C <br>Sam Nujoma Road,Darajani<br>Some P.O.BOX<br>301.555.5555<br>somemail@gmail.com
                </p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <div class="widget-container fluid-height">
                <div class="widget-content padded clearfix">
                  <table class="table table-striped invoice-table table-condensed table-responsive table-hovered">
                    <thead>
                      <th width="40">#</th>
                      <th style="text-align: left;">
                        Product
                      </th>
                       <th style="text-align: left;">
                        Code
                      </th>
                      <th width="70">
                        Qty
                      </th>
                      <th width="100">
                        Unit Price
                      </th>
                      <th width="100">
                       V.A.T(%)
                      </th>
                       <th width="100">
                        Disc(%)
                      </th>
                      <th width="100">
                        Total
                      </th>
                    </thead>
                    <tbody>
                    <?php $index=0;?>
                      @foreach($ProInPart as $prof)
                      <tr>
                        <td>
                          {{ ++$index }}
                        </td>
                        <td style="text-align: left;">
                          {{ Particular::find($prof->particular_id)->description }}

                        </td>
                        <td style="text-align: left;">
                          {{ Particular::find($prof->particular_id)->particular_code }}
                        </td>
                        <td>
                          {{ $prof->quantity }}
                        </td>
                        <td>
                         {{ $prof->unitPrice }}
                        </td>
                        <td>
                        {{ $prof->vat }}
                        </td>
                        <td>
                        {{ $prof->dis }}
                        </td>
                        <td>
                          {{ $prof->total }}
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                    <tfoot>
                      <tr>
                        <td class="text-right" colspan="6">
                          <strong>Subtotal</strong>
                        </td>
                        <td>
                          $1,000
                        </td>
                      </tr>
                      <tr>
                        <td class="text-right" colspan="6">
                          <strong>Tax</strong>
                        </td>
                        <td>
                          $70
                        </td>
                      </tr>
                      <tr>
                        <td class="text-right" colspan="6">
                          <strong>Shipping</strong>
                        </td>
                        <td>
                          $30
                        </td>
                      </tr>
                      <tr>
                        <td class="text-right" colspan="4">
                          <h4 class="text-primary">
                            Total
                          </h4>
                        </td>
                        <td>
                          <h4 class="text-primary">
                            $1,100
                          </h4>
                        </td>
                      </tr>
                    </tfoot>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <div class="well">
                <strong>NOTES</strong>
                <p>
                  Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis.
                </p>
              </div>
            </div>
          </div>

        </div>
      </div>
      </br>
      <div class="row">
                  <div class="col-lg-12">
                  <a class="btn btn-primary pull-right" onclick=""><i class="fa fa-print"></i>Pdf</a>

                    <a class="btn btn-info pull-right" href="{{ url('proformaInvoice') }}"><i class="fa fa-arrow-left"></i> Back</a>
                    </div>
                </div>
