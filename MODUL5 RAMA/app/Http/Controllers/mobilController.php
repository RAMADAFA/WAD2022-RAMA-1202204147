<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mobil;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class mobilController extends Controller
{

    public function index()
    {
        $mobils=mobil::orderBy('id','desc')->get();
        return view('after.listcar', compact('mobils'));
    }

    public function create()
    {
        return view('after.add');
    }

    public function store(Request $request)
    {   
        $imgName = $request->img_path->getClientOriginalName() . '-' . time() 
                    . '.' . $request->img_path->extension();
        $request->img_path->move(public_path('image'), $imgName);
        $user = User::find(Auth::id());
        
        mobil::create([
            'name' => $request -> name,
            'user_id' => $request -> user_id,
            'owner' => $request -> owner,
            'brand' => $request -> merk,
            'purchase_date' => $request -> tanggal,
            'description' => $request -> deskripsi,
            'image' => $imgName,
            'status' => $request -> status,
        ]);

        return redirect('/mobil');
    }

    public function edit($id)
    {
        $mobil = mobil::find($id);
        
        return view('after.edit', compact('mobil')); 
    }

    public function update(Request $request, $id)
    {
        $mobil = mobil::find($id);

        $imgName = $mobil->img_path;
        if ($request->img_path) {
            $imgName = $request->img_path->getClientOriginalName() . '-' . time() 
                        . '.' . $request->img_path->extension();
            $request->img_path->move(public_path('image'), $imgName);
        }

        mobil::find($id)->update([
            'user_id' => $request -> user_id,
            'owner' => $request -> owner,
            'brand' => $request -> merk,
            'purchase_date' => $request -> tanggal,
            'description' => $request -> deskripsi,
            'image' => $imgName,
            'status' => $request -> status,
        ]);

        return redirect('/mobil');
    }

    public function destroy($id)
    {   

        mobil::find($id)->delete();

        return redirect('/mobil');  
    }
}
