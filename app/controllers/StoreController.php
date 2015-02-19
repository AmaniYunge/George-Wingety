<?php

class StoreController extends \BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {

        return View::make('store.index');
    }



    /**
     * Show the form for creating a new resource.
     * @param  int  $id
     * @return Response
     */
    public function create($id)
    {
        $store1 =  Store::find($id);
        Return View::make('store.add',compact("store1"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store($id)
    {
        $store = Store::create(array(
            "bincard_id"        => Input::get("bincard_id"),
        ));
        return "<h3 class='text-success'> Store Registered Successful </h3>";

    }

    /**
     * Display the specified resource.
     *
     *
     * @return Response
     */
    public function show()
    {

        return View::make("store.list");
    }
    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function showinfo($id)
    {
        $store = Store::find($id);

        return View::make("store.info",compact("store"));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $store = Store::find($id);

        return View::make('store.edit', compact('store'));
    }

    /**
     * Update the specified resource in storage.
     *
    id
    bincard_id

     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        $store = Store::find($id);
        $store->bincard_id       = Input::get("bincard_id");
        $store->save();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $store = Store::find($id);
        $store->delete();


    }

}