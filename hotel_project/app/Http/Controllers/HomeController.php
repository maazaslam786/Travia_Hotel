<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\Booking;
use App\Models\Contact;
use App\Models\Gallery;

class HomeController extends Controller
{
    public function room_details($id){

        $room= Room::find($id);

        return view('home.room_details',compact('room'));


    }

    public function contact(Request $request){

        $contact=new Contact;

        $contact->name=$request->name;
        $contact->email=$request->email;
        $contact->phone=$request->phone;
        $contact->message=$request->message;
        
        $contact->save();

        return redirect()->back()->with('message','Message Sent Sucessfully');



    }

    public function our_gallery(){
        $gallery=Gallery::all();

        return view('home.our_gallery',compact('gallery'));
    }

    public function about_us(){
        
        return view('home.about_us');
    }

    public function our_room(){
        $room=room::all();

        return view('home.our_room',compact('room'));
    }
    public function our_blog(){

        return view('home.our_blog');
    }

    public function contact_us(){

        return view('home.contact_us');
    }


    public function add_booking(Request $request,$id){

        $request->validate([

            'startDate'=>'required|date',
            'endDate'=>'date|after:startDate',

        ]);

        $data= new Booking;

        $data->room_id= $id;

        $data->name= $request->name;

        $data->email= $request->email;

        $data->phone= $request->phone;

        $startDate= $request->startDate;
        
        $endDate= $request->endDate;

        $isBooked = Booking::where('room_id',$id)
        ->where('start_Date','<=',$endDate)
        ->where('end_Date','>=',$startDate)->exists();
        if($isBooked){

        return redirect()->back()->with('message','Booking Unsuccessful Sorry! This Room Is Booked For these Dates Try AnyOther Date :)');


        }
        else{

        $data->start_date= $request->startDate;
        
        $data->end_date= $request->endDate;

        $data->save();

        return redirect()->back()->with('message','Room Successfully Booked');

        }  

    }
}
