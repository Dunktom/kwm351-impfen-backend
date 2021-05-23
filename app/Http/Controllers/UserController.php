<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //
    public function index(){
        return User::all();
    }

    public function findById(string $id){
        return User::where('id',$id)->first();
    }

    public function findByEmail(string $email){
        return User::where('email',$email)->first();
    }

    public function findByAppointmentId(string $id){
        return User::where('appointment_id', $id)->get();
    }

    public function save(Request $request) : JsonResponse  {
        DB::beginTransaction();
        try {
            $user = User::create($request->all());

            DB::commit();
            // return a valid http response
            return response()->json($user, 201);
        }
        catch (\Exception $e) {
            // rollback all queries
            DB::rollBack();
            return response()->json("Saving user has failed: " . $e->getMessage(), 420);
        }
    }

    public function update(Request $request, string $id){
        DB::beginTransaction();
        try{
            $user = $this->findById($id);
            if ($user != null) {
                $user->update($request->all());
                $user->save();
            }
            DB::commit();
            $user1 = User::where('id', $id)->first();
            // return a vaild http response
            return response()->json($user1, 201);
        }
        catch (\Exception $e) {
            // rollback all queries
            DB::rollBack();
            return response()->json("The attempt to update the user has failed: " . $e->getMessage(), 420);
        }
    }

    public function updateVaccination(Request $request, string $id){
        $user = $this->findById($id);
        $user->vaccinated = !$user->vaccinated;
        $user->save();
    }

    public function updateAppointment(Request $request, string $id, string $appId){
        $user = $this->findById($id);
        $user->appointment_id = $appId;
        $user->save();
    }

    public function delete(string $id) : JsonResponse
    {
        $user = $this->findById($id);
        if ($user != null) {
            $user->delete();
        }
        else
            throw new \Exception("User couldn't be deleted - it does not exist");
        return response()->json('User (' . $user . ') was successfully deleted', 200);
    }
}
