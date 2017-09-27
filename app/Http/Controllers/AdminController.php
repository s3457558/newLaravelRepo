<?php
namespace App\Http\Controllers;
use App\CarBookingDetails;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        $car_booking_details= CarBookingDetails::orderBy('id','DESC')->paginate(5);
        return view('admin.index',compact('car_booking_details')) ->with('i', ($request->input('page', 1) - 1) * 5);
    }

//    booking
    public function create()
    {
        return view('admin.create');
    }


    public function show($id)
    {
        $booking= CarBookingDetails::find($id); // CarBookingDetails
        return view('admin.show',compact('booking'));
    }


    public function edit($id)
    {
        $booking= CarBookingDetails::find($id);
        return view('admin.edit',compact('booking'));
    }


    public function update(Request $request, $id)
    {
        $booking = CarBookingDetails::find($id);
        $booking->suburb = $request->suburb;
        $booking->state = $request->state;
        $booking->save();
//        return redirect()->route('its.index') ->with('success','Comment uploaded successfully');
//        return view('admin.show',compact('booking'));
        return redirect()->route('admin.index')->with('success','Booking details updated successfully');
//        return redirect()->route('admin.show') ->with('success','Booking detail updated successfully');

//        $this->validate($request, [
//            'suburb' => 'required',
//            'postcode' => 'required',
//        ]);
//        CarBookingDetails::find($id)->update($request->all());
//        return redirect()->route('admin.index') ->with('success','Booking detail updated successfully');
    }

    public function destroy($id)
    {
        CarBookingDetails::find($id)->delete();
        return redirect()->route('admin.index') ->with('success','Booking detail deleted successfully');
    }
}
