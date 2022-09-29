<?php

namespace App\Http\Controllers;
use App\Models\ProduitModel;
use Illuminate\Http\Request;
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
    function GetApi(){
        $data = ProduitModel::all();
        return $data;

    }
    function FindId($id){
        $data = ProduitModel::where("id","=",$id)->get();
        return $data;

    }

    function saveData(Request $request){
        
    $produit = new produitModel;
    // $produit->id=$request->id;
    $produit->Nom=$request->Nom;
    $produit->Email=$request->Email;
    $produit->Phone=$request->Phone;
       $result=$produit->save();
        if ($result) {
            return ['good'];
        }
        else {
            return ["not good"];
        }
    }
    public function update(Request $request,$id)
    {
        //
        $product=ProduitModel::find($id);
        $product->update($request->all());
        return $product;

    }
    public function Delete($id)
    {
        //
        $product=ProduitModel::find($id);
        $product->Delete();
       

    }

    


}
