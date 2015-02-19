<?php

class PurchasingFormController extends \BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {

        return View::make('purchasingForm.index');
    }



    /**
     * Show the form for creating a new resource.
     * @param  int  $id
     * @return Response
     */
    public function create($id)
    {
        $purchasing1 =  PurchasingForm::find($id);
        Return View::make('purchasingForm.add',compact("purchasing1"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store($id)
    {
        $purchasing             = PurchasingForm::create(array(
         "particular_id"        => Input::get("particular_id"),
         "client_id"            => Input::get("client_id"),
         "your_ref_no"          => Input::get("your_ref_no"),
         "our_ref_no"           => Input::get("our_ref_no"),
         "purchasing_from"      => Input::get("purchasing_from"),
         "delivered_to"         => Input::get("delivered_to"),
        ));
        return "<h3 class='text-success'> Purchasing Form Registered Successful </h3>";

    }

    /**
     * Display the specified resource.
     *
     *
     * @return Response
     */
    public function show()
    {

        return View::make("purchasingForm.list");
    }
    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function showinfo($id)
    {
        $purchasing = PurchasingForm::find($id);

        return View::make("purchasingForm.info",compact("purchasingForm"));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $purchasing = PurchasingForm::find($id);

        return View::make('purchasingForm.edit', compact('purchasingForm'));
    }

    /**
     * Update the specified resource in storage.
     *
    id
    particular_id
    client_id
    your_ref_no
    our_ref_no
    purchasing_from
    delivered_to

     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        $purchasing = PurchasingForm::find($id);
        $purchasing->particular_id       = Input::get("particular_id");
        $purchasing->client_id       = Input::get("client_id");
        $purchasing->your_ref_no       = Input::get("your_ref_no");
        $purchasing->our_ref_no       = Input::get("our_ref_no");
        $purchasing->purchasing_from       = Input::get("purchasing_from");
        $purchasing->delivered_to       = Input::get("delivered_to");
        $purchasing->save();

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $purchasing = PurchasingForm::find($id);
        $purchasing->delete();


    }

}