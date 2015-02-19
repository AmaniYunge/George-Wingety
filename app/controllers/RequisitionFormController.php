<?php

class RequisitionFormController extends \BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {

        return View::make('requisitionForm.index');
    }



    /**
     * Show the form for creating a new resource.
     * @param  int  $id
     * @return Response
     */
    public function create($id)
    {
        $requisitionForm1 = RequisitionForm::find($id);
        Return View::make('requisitionForm.add',compact("requisitionForm1"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store($id)
    {
        $requisitionForm = RequisitionForm::create(array(
            "vendor"              => Input::get("vendor"),
            "vendor_no"           => Input::get("vendor_no"),
            "address"             => Input::get("address"),
            "particular_id"       => Input::get("particular_id"),
        ));

        return "<h3 class='text-success'> RequisitionForm Registered Successful </h3>";

    }

    /**
     * Display the specified resource.
     *
     *
     * @return Response
     */
    public function show()
    {

        return View::make("requisitionForm.list");
    }
    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function showinfo($id)
    {
        $requisitionForm = RequisitionForm::find($id);

        return View::make("requisitionForm.info",compact("requisitionForm"));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $requisitionForm = RequisitionForm::find($id);

        return View::make('requisitionForm.edit', compact('requisitionForm'));
    }

    /**
     * Update the specified resource in storage.
     *
    id
    vendor
    vendor_no
    particular_id
    address


     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        $requisitionForm = RequisitionForm::find($id);
        $requisitionForm->vendor             = Input::get("vendor");
        $requisitionForm->vendor_no          = Input::get("vendor_no");
        $requisitionForm->address            = Input::get("address");
        $requisitionForm->particular_id      = Input::get("particular_id");
        $requisitionForm->save();

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $requisitionForm = RequisitionForm::find($id);
        $requisitionForm->delete();


    }

}