<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Package;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index(Request $request)
    {
        $packages = Package::all();
        $selectedPackage = null;
        if ($request->package_id){
            $selectedPackage = Package::findOrFail($request->package_id);
        }

        return view('index', compact('packages','selectedPackage'));
    }

   public function show($id)
   {

    $package = Package::findorfail($id);

     return view('package_details',compact('package'));
   }


    public function bookedDates()
    {
        return response()->json(
            Booking::pluck('booking_date')
        );
    }
     public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'booking_date' => 'required|date',
            'package_id' => 'required'
        ]);

        $exists = Booking::whereDate(
            'booking_date',
            $request->booking_date
        )->exists();

        if ($exists) {

            return back()->with(
                'error',
                'هذا التاريخ محجوز بالفعل'
            );
        }
        Booking::create($request->all());

        return redirect()->route('booking.success');
    }
}