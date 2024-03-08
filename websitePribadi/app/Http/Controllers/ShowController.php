<?php

namespace App\Http\Controllers;


use App\Http\Controllers\PortofolioController;
use App\Http\Controllers\SertiController;

class ShowController extends Controller
{
    public function getData(){
        $sertifikat = new SertiController();
        $portofolio = new PortofolioController();
        $showsertifikatuser = $sertifikat->indexserti1();
        
        $showportofiliouser = $portofolio->index();

        $data =[
       
            "portofolio" => $showportofiliouser,
       
            "serti"=>$showsertifikatuser,
        ];
        
        return view('home', $data);
    }

    public function getDataadmin(){
        $sertifikat = new SertiController();
        $portofolio = new PortofolioController();
       
        $showsertifikatadmin = $sertifikat->indexserti2();
      
        $showportofilioadmin = $portofolio->index1();

        $data =[
            "portofolio" => $showportofilioadmin,
           
            "serti"=>$showsertifikatadmin,
        
        ];
        
        return view('admin', $data);
    }
}