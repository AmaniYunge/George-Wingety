<?php

class BincardController extends \BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index($id = null)
    {
        if($id==null) {
            $bincard = Bincard::all();
            return $bincard->toJson();

        }
    }



    /**
     * Show the form for creating a new resource.
     * @param  int  $id
     * @return Response
     */
    public function create()
    {
//        $bincard1 = Bincard::find($id);
        Return View::make('bincard.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $bincard = Bincard::create(array(
            "bincard_name"        => Input::get("bincard_name"),
            "code"       => Input::get("code"),
        ));

        return "<h3 class='text-success'> Bincard Registered Successful </h3>";

    }

    /**
     * Display the specified resource.
     *
     *
     * @return Response
     */
    public function show()
    {

        return View::make("bincard.list");
    }
    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function showinfo($id)
    {
        $bincard = Bincard::find($id);

        return View::make("bincard.info",compact("bincard"));
    }


    /**
     * Display the specified resource.
     *
     *
     * @return Response
     */
    public function particluars($id)
    {
        $particulars = DB::select( DB::raw("SELECT * FROM particulars WHERE bincard_id='$id'"));
        return $particulars;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $bincard = Bincard::find($id);

        return View::make('bincard.edit', compact('bincard'));
    }

    /**
     * Update the specified resource in storage.
     *
    id
    bincard_name
    particular_id


     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        $bincard = Bincard::find($id);
        $bincard->bincard_name       = Input::get("bincard_name");
        $bincard->particular_id      = Input::get("particular_id");
        $bincard->save();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $bincard = Bincard::find($id);
        $bincard->delete();


    }

}