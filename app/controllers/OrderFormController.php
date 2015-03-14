<?php

class OrderFormController extends \BaseController {

    public $restful = true;
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index($id = null)
    {
        if($id==null){
            $orderForm = OrderForm::all();
            return $orderForm->toJson();

        }

    }


    /**
     * Show the form for creating a new resource.
     * @param  int  $id
     * @return Response
     */
    public function create()
    {
        Return View::make('orderForm.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store($id)
    {
        $order                     = OrderForm::create(array(
            "particular_id"        => Input::get("particular_id"),
            "client_id"            => Input::get("client_id"),
            "bill_to"              => Input::get("bill_to"),
            "ship_to"              => Input::get("ship_to"),
        ));

        return "<h3 class='text-success'> Order Form Registered Successful </h3>";

    }

    /**
     * Display the specified resource.
     *
     *
     * @return Response
     */
    public function lists()
    {

        return View::make('orderForm.list');
    }


    /**
     * Display the specified resource.
     *
     *
     * @return Response
     */
    public function show()
    {

        return View::make("orderForm.list");
    }
    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function showinfo($id)
    {
        $order = OrderForm::find($id);

        return View::make("orderForm.info",compact("orderForm"));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $order = OrderForm::find($id);

        return View::make('orderForm.edit', compact('orderForm'));
    }

    /**
     * Update the specified resource in storage.
     *
    id
    particular_id
    client_id
    bill_to
    ship_to

     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        $order = OrderForm::find($id);
        $order->particular_id       = Input::get("particular_id");
        $order->client_id           = Input::get("client_id");
        $order->bill_to             = Input::get("bill_to");
        $order->ship_to             = Input::get("ship_to");
        $order->save();

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $order = OrderForm::find($id);
        $order->delete();


    }

}