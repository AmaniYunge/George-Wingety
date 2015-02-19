<?php

class DeliveryNoteController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        return View::make('deliveryNote.index');
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        $dnote = DeliveryNote::find($id);
        Return View::make('deliveryNote.add',compact("dnote"));
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
        $deliveryNote = DeliveryNote::create(array(
            "particular_id"       => Input::get("particular_id"),
            "deliveryNote_no"     => Input::get("deliveryNote_no"),
            "order_no"            => Input::get("order_no"),
            "attention_name"      => Input::get("attention_name"),
            "bill_to"             => Input::get("bill_to"),
            "ship_to"             => Input::get("ship_to"),
        ));

        return "<h3 class='text-success'> Delivery Note Registered Successful </h3>";
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        return View::make("deliveryNote.list");
	}

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function showinfo($id)
    {
        $deliveryNote = DeliveryNote::find($id);

        return View::make("deliveryNote.info",compact("deliveryNote"));
    }

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        $deliveryNote = Invoice::find($id);

        return View::make('deliveryNote.edit', compact('deliveryNote'));
	}

    /**
     * Update the specified resource in storage.
     *
    id
    particular_id
    deliveryNote_no
    order_no
    attention_name
    bill_to
    ship_to

     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        $deliveryNote = DeliveryNote::find($id);
        $deliveryNote->particular_id      = Input::get("particular_id");
        $deliveryNote->deliveryNote_no    = Input::get("deliveryNote_no");
        $deliveryNote->order_no           = Input::get("order_no");
        $deliveryNote->attention_name     = Input::get("attention_name");
        $deliveryNote->bill_to            = Input::get("bill_to");
        $deliveryNote->ship_to            = Input::get("ship_to");
        $deliveryNote->save();

    }
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
        $deliveryNote = DeliveryNote::find($id);
        $deliveryNote->delete();

    }


}
