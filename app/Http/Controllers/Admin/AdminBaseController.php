<?php

namespace App\Http\Controllers\Admin;

use App\Aspect;
use App\User;
use App\Donation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminBaseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    public function index()
    {
        $users = User::all();
        $aspects = Aspect::all();
        $total_donation = Donation::sum('body');

        $each_donation = Donation::all();

        $jan_total = 0;
        $feb_total = 0;
        $mar_total = 0;
        $apr_total = 0;
        $may_total = 0;
        $jun_total = 0;
        $jul_total = 0;
        $aug_total = 0;
        $sep_total = 0;
        $oct_total = 0;
        $nov_total = 0;
        $dec_total = 0;
        $monthly_total_donation = array();

        for ($i = 0 ; $i < count($each_donation) ; $i ++)
        {
            if(substr($each_donation[$i]['created_at'], 0, 4) == date("Y")) {
                if(substr($each_donation[$i]['created_at'], 5, 2) == '01') {
                    // echo $each_donation[$i];   
                    $jan_total = $jan_total +  $each_donation[$i]['body'];              
                }
                elseif(substr($each_donation[$i]['created_at'], 5, 2) == '02') {  
                    $feb_total = $feb_total +  $each_donation[$i]['body'];                
                }
                elseif(substr($each_donation[$i]['created_at'], 5, 2) == '03') {  
                    $mar_total = $mar_total +  $each_donation[$i]['body'];                
                }
                elseif(substr($each_donation[$i]['created_at'], 5, 2) == '04') {  
                    $apr_total = $apr_total +  $each_donation[$i]['body'];                
                }
                elseif(substr($each_donation[$i]['created_at'], 5, 2) == '05') {  
                    $may_total = $may_total +  $each_donation[$i]['body'];                
                }
                elseif(substr($each_donation[$i]['created_at'], 5, 2) == '06') {  
                    $jun_total = $jun_total +  $each_donation[$i]['body'];               
                }
                elseif(substr($each_donation[$i]['created_at'], 5, 2) == '07') {  
                    $jul_total = $jul_total +  $each_donation[$i]['body'];               
                }
                elseif(substr($each_donation[$i]['created_at'], 5, 2) == '08') {  
                    $aug_total = $aug_total +  $each_donation[$i]['body'];                
                }
                elseif(substr($each_donation[$i]['created_at'], 5, 2) == '09') {  
                    $sep_total = $sep_total +  $each_donation[$i]['body'];                
                }
                elseif(substr($each_donation[$i]['created_at'], 5, 2) == '10') {  
                    $oct_total = $oct_total +  $each_donation[$i]['body'];                
                }
                elseif(substr($each_donation[$i]['created_at'], 5, 2) == '11') {  
                    $nov_total = $nov_total +  $each_donation[$i]['body']; 
                }
                elseif(substr($each_donation[$i]['created_at'], 5, 2) == '12') {  
                    $dec_total = $dec_total +  $each_donation[$i]['body'];               
                }

            }

        }

        return view('admin.dashboard', compact('users', 'aspects', 'total_donation', 'jan_total', 'feb_total', 'mar_total', 'apr_total', 'may_total', 'jun_total', 'jul_total', 'aug_total', 'sep_total', 'oct_total', 'nov_total', 'dec_total'));
    }

}
