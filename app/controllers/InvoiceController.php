<?php

class InvoiceController extends \BaseController {

    public $restful = true;
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index($id = null)
    {
        if($id==null){
            $invoice = Invoice::all();
            return $invoice->toJson();

        }

    }



    /**
     * Show the form for creating a new resource.
     * @param  int  $id
     * @return Response
     */
    public function create()
    {
        Return View::make('invoice.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $invoice = Invoice::create(array(
            "proformaInvoice_id"  => Input::get("proformaInvoice_id"),
            "client_id"           => Input::get("client_id"),
            "invoice_no"          => Input::get("invoice_no"),
            "provider_name"       => Input::get("provider_name"),
        ));

        return "<h3 class='text-success'> Invoice Registered Successful </h3>";

    }


    /**
     * Display the specified resource.
     *
     *
     * @return Response
     */
    public function lists()
    {

        return View::make('invoice.list');
    }


    /**
     * Display the specified resource.
     *
     *
     * @return Response
     */
    public function show()
    {

        return View::make("invoice.list");
    }
    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function showinfo($id)
    {
        $invoice = Invoice::find($id);

        return View::make("invoice.info",compact("invoice"));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $invoice = Invoice::find($id);

        return View::make('invoice.edit', compact('invoice'));
    }

    /**
     * Update the specified resource in storage.
     *
    id
    particular_id
    proformaInvoice_id
    client_id
    invoice_no
    provider_name

     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        $invoice = Invoice::find($id);
        $invoice->particular_id      = Input::get("particular_id");
        $invoice->proformaInvoice_id = Input::get("proformaInvoice_id");
        $invoice->client_id          = Input::get("client_id");
        $invoice->invoice_no         = Input::get("invoice_no");
        $invoice->provider_name      = Input::get("provider_name");
        $invoice->save();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $invoice = Invoice::find($id);
        $invoice->delete();


    }

}