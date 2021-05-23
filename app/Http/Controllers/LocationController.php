<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class LocationController extends Controller
{
    /* load all locations and relations with eager loading,
    which means "load all related objects" */
    public function index(){
        return Location::all();
    }

    public function save(Request $request) : JsonResponse  {
        /*+
        *  use a transaction for saving model including relations
        * if one query fails, complete SQL statements will be rolled back
        */
        DB::beginTransaction();
        try {
            $location = Location::create($request->all());

            DB::commit();
            // return a valid http response
            return response()->json($location, 201);
        }
        catch (\Exception $e) {
            // rollback all queries
            DB::rollBack();
            return response()->json("saving location has failed: " . $e->getMessage(), 420);
        }
    }

    public function update(Request $request, string $id){
        DB::beginTransaction();
        try{
            $location = $this->findById($id);
            if ($location != null) {
                $location->update($request->all());
                $location->save();
            }
            DB::commit();
            $location1 = Location::where('id', $id)->first();
            // return a vaild http response
            return response()->json($location1, 201);
        }
        catch (\Exception $e) {
            // rollback all queries
            DB::rollBack();
            return response()->json("The location updating attempt has failed: " . $e->getMessage(), 420);
        }
    }

    public function delete(string $id) : JsonResponse
    {
        $location = Location::where('id', $id)->first();
        if ($location != null) {
            $location->delete();
        }
        else
            throw new \Exception("Location couldn't be deleted - it does not exist");
        return response()->json('location (' . $location . ') was successfully deleted', 200);
    }

    public function findByName(string $name){
        return Location::where('name',$name)->first();
    }

    public function findById(string $id){
        return Location::where('id',$id)->first();
    }

}
