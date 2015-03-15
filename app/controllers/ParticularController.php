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
            $particulars = Particulars::all();
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

        Return View::make('client.add');
    }


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
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
            $particular = Particulars::find($id);
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
