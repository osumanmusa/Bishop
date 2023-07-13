<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Inertia\Response;
use App\Models\Counsel;
use App\Models\Events;
use App\Models\Membership;
use App\Models\Contact;
use Illuminate\Support\Facades\Hash;
use Mail;
use DB;

class RoutesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function gettouch(Request $request)
    {
        
      
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'contact' => 'required',
            'contact_info' => 'required',
            'activity' => 'required',
            'message' => 'required',
        ]);

        $counsel = Counsel::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'contact' => $request->contact,
            'contact_info' => $request->contact_info,
            'activity' => $request->activity,
            'message' => $request->message,
        ]);

        if($counsel){
            $sub=$request;
            $data["email"]='admin@gmal.com';
            $data["sub"]=$sub;
             Mail::send('counsel', $data, function($message)use($data)  {
                $message->to($data["email"],$data["sub"])
                ->subject('The Office Of The Bishop - Call for Prayer or counseling');
                });
    
          $successmessage = 'Created Successsfully';
          return redirect()->back()->with('successmessage',$successmessage);
        }
        else{
    
            $errormessage = 'Error! try again';
            return back()->with('errormessage',$errormessage);
        }
    
        $errormessage = 'Error! try again';
        return back()->with('errormessage',$errormessage);
        
        //
    }
    /**
     * Store a newly created resource in storage.
     */
    public function storeevent(Request $request)
    {

      
        $request->validate([
            'title' => 'required',
            'firstname' => 'required',
            'lastname' => 'required',
            'city' => 'required',
            'town' => 'required',
            'region' => 'required',
            'country' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'website' => 'required',
            'age' => 'required',
            'gender' => 'required',
            'activity' => 'required',
            'mode' => 'required',
        ]);

        $event = Events::create([
            'title' => $request->title,
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'city' => $request->city,
            'town' => $request->town,
            'region' => $request->region,
            'country' => $request->country,
            'email' => $request->email,
            'phone' => $request->phone,
            'website' => $request->website,
            'age' => $request->age,
            'gender' => $request->gender,
            'activity' => $request->activity,
            'mode' => $request->mode,
        ]);
       
       if($event){
      $successmessage = 'Submitted Successsfully';
      return redirect()->back()->with('successmessage',$successmessage);
    }
    else{

        $errormessage = 'Error! try again';
        return back()->with('errormessage',$errormessage);
    }

    $errormessage = 'Error! try again';
    return back()->with('errormessage',$errormessage);
        //
    }

    
    public function memberreg(Request $request)
    {

      
        $request->validate([
            'title' => 'required',
            'firstname' => 'required',
            'lastname' => 'required',
            'city' => 'required',
            'town' => 'required',
            'region' => 'required',
            'country' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'website' => 'required',
            'age' => 'required',
            'gender' => 'required',
            'activity' => 'required',
            'mode' => 'required',
            'dob' => 'required',
            'member' => 'required',
        ]);

        $event = Membership::create([
            'title' => $request->title,
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'city' => $request->city,
            'town' => $request->town,
            'region' => $request->region,
            'country' => $request->country,
            'email' => $request->email,
            'phone' => $request->phone,
            'website' => $request->website,
            'age' => $request->age,
            'gender' => $request->gender,
            'activity' => $request->activity,
            'mode' => $request->mode,
            'dob' => $request->dob,
            'member' => $request->member,
        ]);
       
       if($event){
      $successmessage = 'Submitted Successsfully';
      return redirect()->back()->with('successmessage',$successmessage);
    }
    else{

        $errormessage = 'Error! try again';
        return back()->with('errormessage',$errormessage);
    }

    $errormessage = 'Error! try again';
    return back()->with('errormessage',$errormessage);
        //
    }

    
    public function contactreg(Request $request)
    {

      
        $request->validate([
            'title' => 'required',
            'firstname' => 'required',
            'lastname' => 'required',
            'city' => 'required',
            'town' => 'required',
            'region' => 'required',
            'country' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'website' => 'required',
            'age' => 'required',
            'gender' => 'required',
            'activity' => 'required',
            'mode' => 'required',
        ]);

        $event = Contact::create([
            'title' => $request->title,
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'city' => $request->city,
            'town' => $request->town,
            'region' => $request->region,
            'country' => $request->country,
            'email' => $request->email,
            'phone' => $request->phone,
            'website' => $request->website,
            'age' => $request->age,
            'gender' => $request->gender,
            'activity' => $request->activity,
            'mode' => $request->mode,
        ]);
       
       if($event){
      $successmessage = 'Submitted Successsfully';
      return redirect()->back()->with('successmessage',$successmessage);
    }
    else{

        $errormessage = 'Error! try again';
        return back()->with('errormessage',$errormessage);
    }

    $errormessage = 'Error! try again';
    return back()->with('errormessage',$errormessage);
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
