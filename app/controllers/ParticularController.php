<?php

class ParticularController extends \BaseController {

    public $restful = true;
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index($id = null)
    {
        if($id==null){
            $particulars = Particular::all();
            return $particulars;

        }

    }



    /**
     * Show the form for creating a new resource.
     * @param  int  $id
     * @return Response
     */
    public function create()
    {

        Return View::make('particular.add');
    }


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
        $bincard = Particular::create(array(
            "particular_code"   => Input::get("particular_code"),
            "description"       => Input::get("description"),
            "description"       => Input::get("description"),
            "gross_weight"      => Input::get("gross_weight"),
            "net_weight"        => Input::get("net_weight"),
            "vat"               => Input::get("vat"),
            "unit_price"        => Input::get("unit_price"),
            "quantity"          => Input::get("quantity"),
            "bincard_id"        => Input::get("bincard_id"),
        ));

        return "<h3 class='text-success'> Particular Registered Successful </h3>";
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        if($id!=null){
            $particular = Particular::find($id);
            return $particular;

        }
	}

    /**
     * Display the specified resource.
     *
     *
     * @return Response
     */
    public function lists()
    {

        return View::make('client.list');
    }


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
