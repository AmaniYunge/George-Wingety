<?php

class ProformaInvoiceController extends \BaseController {
    public $restful = true;
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index($id = null)
    {
        if($id==null) {
            $proformaInvoices = ProformaInvoice::all();
            return $proformaInvoices->toJson();

        }
    }
    /**
     * Show the form for creating a new resource.
     * @param  int  $id
     * @return Response
     */
    public function create()
    {
        Return View::make('proformaInvoice.add');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {

        $proformaInvoice = ProformaInvoice::create(array(
            "proforma_number"       => Input::get("proforma_number"),
            "client_id"             => Input::get("client_id"),
            "orderform_id"          => Input::get("order_form"),
            "provider_name"         => Input::get("provider_name"),
        ));

        foreach(json_decode(Input::get("particulars"), true) as $particular){

            $profParticular = ProformaInvoiceParticular::create(array(
                "proforma_invoice_id"      => $proformaInvoice->id,
                "particular_id"            => $particular['id'],
                "quantity"                 => $particular['quantity'],
                "unitPrice"                => $particular['unitPrice'],
                "vat"                      => $particular['vat'],
                "total"                    => $particular['total'],
                "dis"                      => $particular['disc']
            ));


        }
        return "<h3 class='text-success'> Proforma Invoice Registered Successful </h3>";

    }

    /**
     * Display the specified resource.
     *
     *
     * @return Response
     */
    public function show()
    {

        return View::make("proformaInvoice.list");
    }
    /**
     * Display the specified resource.
     *
     *
     * @return Response
     */
    public function preview($id)
    {

        $proforma = ProformaInvoice::find($id);
        return View::make("proformaInvoice.preview",compact("proforma"));
    }
    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function showinfo($id)
    {
        $proformaInvoice = ProformaInvoice::find($id);

        return View::make("proformaInvoice.info",compact("proformaInvoice"));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $proformaInvoice = ProformaInvoice::find($id);

        return View::make('proformaInvoice.edit', compact('proformaInvoice'));
    }

    /**
     * Update the specified resource in storage.
     *
    id
    particular_id
    client_id
    invoice_no
    provider_name

     * @param  int  $id
     * @return Response
     */

    public function update($id)
    {
        $proformaInvoice = ProformaInvoice::find($id);
        $proformaInvoice->particular_id      = Input::get("particular_id");
        $proformaInvoice->invoice_no         = Input::get("invoice_no");
        $proformaInvoice->client_id          = Input::get("client_id");
        $proformaInvoice->provider_name      = Input::get("provider_name");
        $proformaInvoice->save();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $proformaInvoice = ProformaInvoice::find($id);
        $proformaInvoice->delete();


    }

}