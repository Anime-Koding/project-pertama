<?php

namespace App\Http\Controllers\User;

use App\DataTables\AppointmentDataTable;
use App\Models\appointment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(AppointmentDataTable $datatables)
    {
        return $datatables->render("user.appointment.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function destroy(appointment $appointment)
    {
        $this->authorize("delete",$appointment);
        $remove = $appointment->delete();
        if($remove) return redirect()->route("appointment.index")->with("success","berhasil hapus data appointment user");
    }
}
