<?php

class ClientController extends \BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {

        return View::make('client.index');
    }



    /**
     * Show the form for creating a new resource.
     * @param  int  $id
     * @return Response
     */
    public function create($id)
    {
        $client1 = Client::find($id);
        Return View::make('client.add',compact("client1"));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store($id)
    {
        $client = Client::create(array(
            "attention_name"=> Input::get("attention_name"),
            "campany_name"  => Input::get("campany_name"),
            "address"       => Input::get("address"),
            "email"         => Input::get("email"),
            "phone_no"      => Input::get("phone_no"),
            "tin_no"        => Input::get("tin_no"),
            "vat_no"        => Input::get("vat_no"),
            "status"        => Input::get("status"),
            "country"       => Input::get("country"),

        ));

        return "<h3 class='text-success'> Client Registered Successful </h3>";

    }

    /**
     * Display the specified resource.
     *
     *
     * @return Response
     */
    public function show()
    {

        return View::make("client.list");
    }
    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function showinfo($id)
    {
        $client = Client::find($id);

        return View::make("client.info",compact("client"));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $client = Client::find($id);

        return View::make('client.edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     *
    id
    attention_name
    campany_name
    email
    address
    phone_no
    tin_no
    vat_no
    status
    country

     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        $client = Client::find($id);
        $client->attention_name = Input::get("attention_name");
        $client->campany_name = Input::get("campany_name");
        $client->address = Input::get("address");
        $client->email = Input::get("email");
        $client->phone_no = Input::get("phone_no");
        $client->tin_no = Input::get("tin_no");
        $client->vat_no = Input::get("vat_no");
        $client->status = Input::get("status");
        $client->country = Input::get("country");
        $client->save();

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $client = Client::find($id);
        $client->delete();


    }

}