<?php

namespace App\Http\Controllers;
use App\Employer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class EmployerController extends Controller
{
//    public function __construct()
//    {
//        $this->middleware('role');
//    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employer.signup');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {

        // validate the data
        $this->validate($request, array(
            'email'  => 'required',
            'password'  => 'required',
            'first_name'  => 'required',
            'last_name'  => 'required',
            'company_name'  => 'required',
            'sector'  => 'required',
            'no_employee'  => 'required',
            'c_web'  => 'required',
            'c_contact'  => 'required',
            'c_address'  => 'required',
        ));
        // store in the database

//        id	fname	lname	phone	email	email_verified_at	password	company_name	remember_token	created_at	updated_at

        $employer = new Employer;
        $data = $request->input();
        $employer->first_name = $data['first_name'];
        $employer->last_name = $data['last_name'];
        $employer->phone = $data['phone'];
        $employer->email = $data['email'];
        $employer->password = $data['password'];
        $employer->company_name = $data['company_name'];
        $employer->	sector = $data['sector'];
        $employer->no_employee = $data['no_employee'];
        $employer->c_web = $data['c_web'];
        $employer->c_contact = $data['c_contact'];
        $employer->c_address = $data['c_address'];
        $employer->save();
        return back()->with('status', 'The record was successfully saved!');



    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
