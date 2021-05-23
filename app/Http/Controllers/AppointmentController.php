<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AppointmentController extends Controller
{
    //
    public function index(){
        return Appointment::all();
    }

    public function findById(string $id){
        return Appointment::where('id',$id)->first();
    }

    public function findByLocation(string $id){
        return Appointment::where('location_id', $id)->get();
    }

    public function save(Request $request) : JsonResponse  {
        DB::beginTransaction();
        try {
            $appointment = Appointment::create($request->all());

            DB::commit();
            // return a valid http response
            return response()->json($appointment, 201);
        }
        catch (\Exception $e) {
            // rollback all queries
            DB::rollBack();
            return response()->json("Saving appointment has failed: " . $e->getMessage(), 420);
        }
    }

    public function update(Request $request, string $id){
        DB::beginTransaction();
        try{
            $appointment = $this->findById($id);
            if ($appointment != null) {
                $appointment->update($request->all());
                $appointment->save();
            }
            DB::commit();
            $appointment1 = Appointment::where('id', $id)->first();
            // return a vaild http response
            return response()->json($appointment1, 201);
        }
        catch (\Exception $e) {
            // rollback all queries
            DB::rollBack();
            return response()->json("The appointment updating attempt has failed: " . $e->getMessage(), 420);
        }
    }

    public function delete(string $id) : JsonResponse
    {
        $appointment = $this->findById($id);
        if ($appointment != null) {
            $appointment->delete();
        }
        else
            throw new \Exception("The appointment couldn't be deleted - it does not exist");
        return response()->json('The appointment (' . $appointment . ') was successfully deleted', 200);
    }
}
