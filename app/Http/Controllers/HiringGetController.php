<?php

namespace App\Http\Controllers;

use App\Docusign;
use Yajra\DataTables\Facades\DataTables;

class HiringGetController extends Controller
{
    public function index()
    {
        try
        {
            $doc_datas = Docusign::select(['id', 'user_id', 'location', 'doc_date', 'doc_name', 'doc_first_name', 'doc_last_name', 'doc_address', 'doc_zip', 'doc_other_name',
             'consumer_copy_free', 'SSN', 'doc_birth', 'DLN', 'doc_state', 'doc_city', 'doc_tele', 'doc_cell', 'doc_email', 'applied_pos', 'hear_info', 'legal_auth_state', 
             'require_sponsorship', 'avail_date', 'type_work', 'married_sep', 'married_join', 'married_head', 'driver_image', 'doc_pdf', 'certi_id', 'edu_id']);

            $maker = \Auth::user()->name;

            return DataTables::of($doc_datas)
            ->addColumn('maker_name', $maker)
            ->addColumn('license_show', function ($doc_datas) {
                $files = explode('||', $doc_datas->driver_image);
                $shows = "";
                foreach($files as $file) {
                    $shows .= '<a href="' . route("hiring.driver_show", $file) . '" target="_blank"> '. $file .' </a>';
                }
                return $shows;
            })
            ->addColumn('license_download', function ($doc_datas) {
                $files = explode('||', $doc_datas->driver_image);
                $downloads = "";
                foreach($files as $file) {
                    $downloads .= '<a href="' . route("hiring.driver_download", $file) . '" download> '. $file .' </a>';
                }
                return $downloads;
            })
            ->addColumn('pdf_show', function ($doc_datas) {
                $pdf_file="";
                if($doc_datas->doc_pdf == null){
                    $pdf_file == "";
                }
                else{
                    $pdf_file = $doc_datas->doc_pdf;
                }
                
                $shows = '<a href="' . route("hiring.pdf_com_show", $pdf_file) . '" target="_blank"> '. $pdf_file .' </a>';
                return $shows;
            })
            ->addColumn('pdf_download', function ($doc_datas) {
                $pdf_file="";
                if($doc_datas->doc_pdf == null){
                    $pdf_file == "";
                }
                else{
                    $pdf_file = $doc_datas->doc_pdf;
                }
                $downloads = '<a href="' . route("hiring.pdf_com_download", $pdf_file) . '" download> '. $pdf_file .' </a>';
                return $downloads;
            })
            ->addColumn('action', function ($doc_datas) {
                return '<a docu_id="' . $doc_datas->id . '" class="btn btn-xs btn-danger delete"><i class="glyphicon glyphicon-trash"></i> Delete</a>';
            })
            ->rawColumns(['maker_name', 'license_show', 'license_download', 'pdf_show', 'pdf_download', 'action'])
            ->make(true);           
        } catch (\Exception $e) {
            dd($e->getMessage());
        }

    }
}
