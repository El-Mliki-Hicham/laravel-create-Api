<?php

namespace App\Http\Controllers;
use App\Models\ProduitModel;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;



    // function apiTest($id=null){
    //     $data = $id?ProduitModel::find($id):ProduitModel::all();
    //     return $data;

    // }
    function apiTest(){
        $data = ProduitModel::all();
        return $data;

    }
    function apiTestId($id){
        $data = ProduitModel::where("id_produit","=",$id)->get();
        return $data;

    }



}
