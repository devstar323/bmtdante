<?php

namespace App\Http\Controllers;

use App\Week;
use Yajra\DataTables\Facades\DataTables;

class DataTableGetController extends Controller
{
    public function index()
    {
        try
        {
            $schedules = Week::select(['id', 'name', 'monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday', 'sunday']);

            $ids = \Auth::user()->role_id;

            if($ids == 1){
                return DataTables::of($schedules)
                ->addColumn('action', function ($schedules) {
                    return '<a schedule_id="' . $schedules->id . '" class="btn btn-xs btn-primary edit"><i class="glyphicon glyphicon-edit"></i> Edit</a> <a schedule_id="' . $schedules->id . '" class="btn btn-xs btn-danger delete"><i class="glyphicon glyphicon-trash"></i> Delete</a>';
                })
                ->make(true);
            }else{
                return DataTables::of($schedules)
                ->addColumn('action', function ($schedules) {
                    return '';
                })
                ->make(true);
            }
        } catch (\Exception $e) {
            dd($e->getMessage());
        }

    }
}
