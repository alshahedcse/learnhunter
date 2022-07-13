<?php

namespace App\Http\Controllers;

use App\Models\PhoneBook;
use App\Http\Requests\StorePhoneBookRequest;
use App\Http\Requests\UpdatePhoneBookRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class PhoneBookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $phoneBook = PhoneBook::orderBy('id', 'DESC')->get(); // Query Bilder
        $phoneBook = PhoneBook::all();
        // return $phoneBook;
        // return view('index',['phoneBook'=>$phoneBook]);
        return view('index',compact('phoneBook'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePhoneBookRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePhoneBookRequest $request)
    {
        PhoneBook::create($request->only([ // store only requested data form model
            'name','email','phone','address','city'
        ]));

        // PhoneBook::create($request->all()); // store all requested data form model

        // $phoneBook = new PhoneBook; // variable equal to model
        // $phoneBook -> name = $request -> name; // requested name equal to variable of model
        // $phoneBook -> email = $request -> email;
        // $phoneBook -> phone = $request -> phone;
        // $phoneBook -> address = $request -> address;
        // $phoneBook -> city = $request -> city;
        // $phoneBook -> save(); // save all variable data into save() methode
        return Redirect::to('/');
        // return $request; //To only view from data
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PhoneBook  $phoneBook
     * @return \Illuminate\Http\Response
     */
    public function show(PhoneBook $phoneBook)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PhoneBook  $phoneBook
     * @return \Illuminate\Http\Response
     */
    public function edit(PhoneBook $phoneBook)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePhoneBookRequest  $request
     * @param  \App\Models\PhoneBook  $phoneBook
     * @return \Illuminate\Http\Response
     */
    public function update($phoneB_id)
    {
        $phoneBook = PhoneBook::find($phoneB_id);
        return view('edit',compact('phoneBook'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PhoneBook  $phoneBook
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $phoneBook = PhoneBook::find($request->phoneB_id);
        $phoneBook->delete();
        return Redirect::to('/');
    }



    public function editStore(StorePhoneBookRequest $request)
    {
        $phoneBook = PhoneBook::find($request->phoneB_id);
        $phoneBook->name = $request->name;
        $phoneBook->email = $request->email;
        $phoneBook->phone = $request->phone;
        $phoneBook->address = $request->address;
        $phoneBook->city = $request->city;
        $phoneBook->save();
        return Redirect::to('/');
    }

}
