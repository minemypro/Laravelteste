<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Stroage;

class UserControllerPagina extends Controller
{
    public function index()
    {
        return view('welcome');
    }


    public function Uploadpag()
    {
        return view('product');
    }


    public function store(Request $request)
    {
        $data=new Product();
        $file = $request->file;
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $request->file->move('assets', $filename);
        $data->file = $filename;

        $data->name=$request->name;
        $data->email=$request->email;
        $data->curso=$request->curso;
        $data->numero_matricula=$request->numero_matricula;
        $data->contacto=$request->contacto;
        $data->description=$request->description;
        $data->save();
        return redirect()->back();
    }



    public function show()
    {
        $data = product::paginate();
        return view('showproduct', compact('data'));
    }


    public function download(Request $request, $file)
    {
        return response()->download(public_path('assets/' . $file));
    }

    public function view($id)
    {
        $data = product::find($id);
        return view('viewproduct', compact('data'));
    }
}
