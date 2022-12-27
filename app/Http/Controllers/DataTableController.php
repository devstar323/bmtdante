<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Week;

class DataTableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('public.Scheduling.datatable');
    }

    public function edit(Week $schedule)
    {
        try
        {
            return response()->json(['success' => 'successfull retrieve data', 'data' => $schedule->toJson()], 200);

        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }

    public function schedule_add(Request $req)
    {
        try
        {
            $schedule = Week::create($req->all());
            $schedule->save();
            return response()->json(['success' => 'data is successfully added'], 200);
            
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }

    public function schedule_update(Request $req)
    {
        try
        {
            $schedule = Week::findOrFail($req->id);
            $schedule->name = $req->data['name'];
            $schedule->monday = $req->data['monday'];
            $schedule->tuesday = $req->data['tuesday'];
            $schedule->wednesday = $req->data['wednesday'];
            $schedule->thursday = $req->data['thursday'];
            $schedule->friday = $req->data['friday'];
            $schedule->saturday = $req->data['saturday'];
            $schedule->sunday = $req->data['sunday'];
            $schedule->update();

            return response()->json(['success' => 'data is successfully updated'], 200);
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }
    
    public function schedule_delete(Request $req)
    {
        try
        {
            Week::destroy($req->id);

            return response()->json(['success' => 'data is successfully deleted'], 200);
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }


}
