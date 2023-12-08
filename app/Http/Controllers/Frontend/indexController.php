<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Prescription;

class indexController extends Controller
{
    public function index()
    {
       return view('frontend.index');
    }
    public function book()
    {
       return view('frontend.book');
    }

    public function storeForm(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:10',
            'prescription_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $prescription = new prescription;
        $prescription->name = $request->name;
        $prescription->email = $request->email;
        $prescription->phone = $request->phone;

        if ($request->hasFile('prescription_image')) {
            $imagePath = $request->file('prescription_image')->store('prescriptions');
            $prescription->prescription_image = $imagePath;
        }

        $prescription->save();

        return redirect('/prescription-form')->with('success', 'Prescription submitted successfully!');
    }

}

