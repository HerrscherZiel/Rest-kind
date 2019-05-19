<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kampus;

class KampusController extends Controller
{
    //
    public function index() {
        return Kampus::all();
    }

    public function create(request $request){
        $kampus = new Kampus;
        $kampus->Fakultas = $request->Fakultas;
        $kampus->Prodi = $request->Prodi;
        $kampus->Bidang_Studi = $request->Bidang_Studi;
        $kampus->save();

        return "Data Masuk";
    }

    public function update(request $request, $id){

        $Fakultas = $request->Fakultas;
        $Prodi = $request->Prodi;
        $Bidang_Studi = $request->Bidang_Studi;

        $kampus = Kampus::find($id);
        $kampus->Fakultas = $Fakultas;
        $kampus->Prodi = $Prodi;
        $kampus->Bidang_Studi = $Bidang_Studi;
        $kampus->save();

        return "Update berhasil";

    }

    public function delete($id){
        $kampus = Kampus::find($id);
        $kampus->delete;

        return "delete berhasil";
    }

}
