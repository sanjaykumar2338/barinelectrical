<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function aboutus()
    {
        return view('pages.aboutus');
    }

    public function commercial_electricians_riverside(){
        return view('pages.allservices.commercial_electricians_riverside');
    }

    public function electrical_services(){
        return view('pages.allservices.electrical_services');
    }    

    public function commercial_electricians(){
        return view('pages.allservices.commercial_electricians');
    }
    
    public function electrical_code_compliance(){
        return view('pages.allservices.electrical_code_compliance');
    }

    public function electrical_subcontractors(){
        return view('pages.allservices.electrical_subcontractors');
    }

    public function residential_electricians(){
        return view('pages.allservices.residential_electricians');
    }

    public function agoura_hills(){
        return view('pages.allservices.agoura_hills');
    }

    
    public function service_areas(){
        return view('pages.allservices.service_areas');
    }

    
    public function calabasas_electricians(){
        return view('pages.allservices.calabasas-electricians');
    }

    public function encino(){
        return view('pages.allservices.encino');
    }    

    public function los_angeles_electricians(){
        return view('pages.allservices.los-angeles-electricians');
    }

    public function sherman_oaks_electricians(){
        return view('pages.allservices.sherman-oaks-electricians');
    }

    public function studio_city(){
        return view('pages.allservices.studio-city');
    }

    public function west_hills_electricians(){
        return view('pages.allservices.west-hills-electricians');
    }

    public function west_hollywood_electricians(){
        return view('pages.allservices.west-hollywood-electricians');
    }   

    public function woodland_hills(){
        return view('pages.allservices.woodland-hills');
    }
    
    public function universal_city(){
        return view('pages.allservices.universal-city');
    }

    
}
