<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Response;
use App\Docusign;
use App\Certification;
use App\Education;
use App\ExpEmployment;
use PDF;
use Storage;


class HiringController extends Controller
{
    public function index()
    { 
        return view('public.hiring.hire-candidate');
    }
    
    public function hire()
    {
        return view('public.hiring.hiring-hire');
    }

    public function help()
    {
        return view('public.hiring.hiring-help');
    }

    public function driving_test()
    {
        return view('public.hiring.driving-test');
    }

    public function docusign()
    {
        return view('public.hiring.docusign');
    }

    public function send_hire(Request $req)
    {
        try
        {
            // save certifications
            $doc_certification = new Certification;
            $doc_certification->certi_info1 = $req->certi_info1;
            $doc_certification->certi_info2 = $req->certi_info2;
            $doc_certification->certi_info3 = $req->certi_info3;
            $doc_certification->save();

            // save educations
            $doc_education = new Education;
            $doc_education->high_name = $req->high_name;
            $doc_education->high_CSC = $req->high_CSC;
            $doc_education->high_year = $req->high_year;
            $doc_education->high_degree = $req->high_degree;
            $doc_education->high_study = $req->high_study;
            $doc_education->high_spec = $req->high_spec;
            $doc_education->col_name = $req->col_name;
            $doc_education->col_CSC = $req->col_CSC;
            $doc_education->col_year = $req->col_year;
            $doc_education->col_degree = $req->col_degree;
            $doc_education->col_study = $req->col_study;
            $doc_education->col_spec = $req->col_spec;
            $doc_education->grad_name = $req->grad_name;
            $doc_education->grad_CSC = $req->grad_CSC;
            $doc_education->grad_year = $req->grad_year;
            $doc_education->grad_degree = $req->grad_degree;
            $doc_education->grad_study = $req->grad_study;
            $doc_education->grad_spec = $req->grad_spec;
            $doc_education->edu_add_info = $req->edu_add_info;
            $doc_education->save();

            // save driver images
            $fileNameArray = [];

            if($req->hasFile('images'))
            {
                $allowedfileExtension=['jpg','png'];
                $files = $req->file('images');
                
                foreach($files as $file){
                    $filename = $file->getClientOriginalName();
                    $extension = $file->getClientOriginalExtension();
                    $check = in_array($extension,$allowedfileExtension);
                    if($check)
                    {
                        $filePath = $file->storeAs( 'License/'.\Auth::user()->name, $filename, 'public');
                        array_push($fileNameArray, $filename);
                    }
                    
                }
            }
            $file_name = [];
            foreach($fileNameArray as $file) {
                array_push($file_name, $file);
            }
            $fileName = join('||',$file_name);

            // save docusigns
            $doc_docusign = new Docusign;
            $doc_docusign->user_id = Auth::user()->id;
            $doc_docusign->location = $req->location;
            $doc_docusign->doc_date = $req->doc_date;
            $doc_docusign->doc_name = $req->doc_name;
            $doc_docusign->doc_first_name = $req->doc_first_name;
            $doc_docusign->doc_last_name = $req->doc_last_name;
            $doc_docusign->doc_address = $req->doc_address;
            $doc_docusign->doc_zip = $req->doc_zip;
            $doc_docusign->doc_other_name = $req->doc_other_name;
            $doc_docusign->consumer_copy_free = $req->consumer_copy_free;
            $doc_docusign->SSN = $req->SSN;
            $doc_docusign->doc_birth = $req->doc_birth;
            $doc_docusign->DLN = $req->DLN;
            $doc_docusign->doc_state = $req->doc_state;
            $doc_docusign->doc_city = $req->doc_city;
            $doc_docusign->doc_tele = $req->doc_tele;
            $doc_docusign->doc_cell = $req->doc_cell;
            $doc_docusign->doc_email = $req->doc_email;
            $doc_docusign->applied_pos = $req->applied_pos;
            $doc_docusign->hear_info = $req->hear_info;
            $doc_docusign->legal_auth_state = $req->legal_auth_state;
            $doc_docusign->require_sponsorship = $req->require_sponsorship;
            $doc_docusign->avail_date = $req->avail_date;
            $doc_docusign->type_work = $req->type_work;
            $doc_docusign->married_sep = $req->married_sep;
            $doc_docusign->married_join = $req->married_join;
            $doc_docusign->married_head = $req->married_head;
            $doc_docusign->driver_image = $fileName;
            $doc_docusign->certi_id = $doc_certification->id;
            $doc_docusign->edu_id = $doc_education->id;
            $doc_docusign->save();
            $sel_doc_id = $doc_docusign->id;

            return response()->json(['sel_doc_id' => $sel_doc_id], 200);
            
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }

    public function delete(Request $req) {
        try
        {
            $del_doc =Docusign::find($req->id);

            // $files_to_delete = explode('||', $del_doc->driver_image);
            // foreach($files_to_delete as $file) {
            //     Storage::disk('public/'.\Auth::user()->name)->delete($file);
            // }

            $del_edu =Education::find($del_doc->edu_id);
            $del_certi =Certification::find($del_doc->certi_id);
            $del_certi->delete();
            $del_edu->delete();
            $del_doc->delete();

            return response()->json(['success' => 'data is successfully deleted'], 200);
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    } 

    public function download_driver_image($file){

        $tpath = storage_path().'/app/public/License/'.\Auth::user()->name.'/'.$file;

        return response()->download($tpath, $file);
    }

    public function show_driver_image($file){

        $tpath = storage_path().'/app/public/License/'.\Auth::user()->name.'/'.$file;

        return response()->file($tpath);
    }

    public function doc_send_print()
    {
        $doc_docusign = Docusign::latest()->first();
        $doc_certification = Certification::latest()->first();
        $doc_education = Education::latest()->first();
        return view('public.hiring.pdf', compact('doc_docusign', 'doc_certification', 'doc_education'));
    }

    public function upload_pdf($id)
    {    
        $doc_id = $id;
        return view('public.hiring.upload-pdf', compact('doc_id'));
    }

    public function upload_com_pdf(Request $req)
    {
        try
        {
            $fileNameArray = [];

            if($req->hasFile('pdf'))
            {
                $allowedfileExtension=['pdf'];
                $file = $req->file('pdf');
                
                $filename = $file->getClientOriginalName();
                $extension = $file->getClientOriginalExtension();
                $check = in_array($extension,$allowedfileExtension);
                if($check)
                {
                    $filePath = $file->storeAs( 'pdf/'.\Auth::user()->name, $filename, 'public');
                }
            }
            $pdf_doc = Docusign::find($req->id);
            $pdf_doc -> doc_pdf = $filename;
            $pdf_doc -> save();

            return response()->json(['success' => 'data is successfully uploaded'], 200);
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }

    public function download_pdf($file){

        $tpath = storage_path().'/app/public/pdf/'.\Auth::user()->name.'/'.$file;

        return response()->download($tpath, $file);
    }

    public function show_pdf($file){

        $tpath = storage_path().'/app/public/pdf/'.\Auth::user()->name.'/'.$file;

        return response()->file($tpath);
    }

}
