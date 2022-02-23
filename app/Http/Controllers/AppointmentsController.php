<?php

namespace App\Http\Controllers;

use App\Models\Appointments;
use App\Models\Doctors;
use Illuminate\Http\Request;

class AppointmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $appointments = Appointments::orderBy('id', 'desc')->paginate(2);
        return view('appointment.index', compact('appointments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $doctors = Doctors::all();
        return view('appointment.create', compact('doctors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $appointment = new Appointments;
        $appointment->appointment_id = $request['appointment'];
        $appointment->appointment_date = $request['appointment_date'];
        $appointment->doctor_id = $request['doctor_id'];
        $appointment->patient_name = $request['patient_name'];
        $appointment->patient_phone = $request['patient_phone'];
        $appointment->total_fee = $request['total_fee'];
        $appointment->paid_amount = $request['paid_amount'];
        $appointment->save();


        if($appointment->save()){
            return redirect()->back()->with('success', 'Data successfully inserted.');
        }else{
            return redirect()->back()->with('error', 'Data does not inserted.');
        }
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
