<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Dompdf\Dompdf;
use App\Models\Contact;
use App\Models\Services;
use App\Models\Supplier;
use App\Models\Information;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Response;

class SiteController extends Controller
{
    public function index()
    {
        $suppliers=Supplier::all();
        $Clients=Client::all();
        return view('site.index',compact('suppliers','Clients'));
    }
    public function about()
    {
        return view('site.about');
    }
    public function Profile()
    {
        return view('site.Profile');
    }
    public function contact_us()
    {
        return view('site.contact_us');
    }
    public function programming()
    {
        return view('site.programming');
    }
    public function Networking()
    {
        return view('site.Networking');
    }
    public function Data_Recovery()
    {
        return view('site.data_recovery');
    }
    public function Maintenance()
    {
        return view('site.Maintenance​​');
    }
    public function Original_license()
    {
        return view('site.Originallicense');
    }
    public function Website_Creation()
    {
        return view('site.Website_creation');
    }
    public function barcode()
    {
        return view('site.barcode');
    }

    public function services($name)
    {

        $services=Services::where('blog','like', '%' . $name . '%')->first();
        // return $services;
        return view('site.services',compact('services'));
    }
    public function contact(Request $request)
    {

        $details=Contact::create([
            'name'=> $request->name ,
            'email'=> $request->email ,
            'message'=> $request->message ,
            'message_title'=> $request->message_title ,

           ]);
        Mail::to('info@thecs.com.sa')->send(new \App\Mail\MyTestMail($details));

        // dd("Email is Sent.");
        return redirect()->back()->with('success', 'تم ارسال الطلب بنجاح');
    }

    public function profile_qr()
    {
        $information = Information::first();
        // return $information->profile;

        // return 'ok';
        return Response::make(file_get_contents('upload/profile/profile.pdf'), 200, [
            'content-type'=>'application/pdf',
        ]);


        // $pathToFile = "asset/site/profile.pdf";
        // return response()->download($pathToFile);
        // return view('site.Profile');
    }

    public function send_mail()
    {
        $details = [
            'title' => 'Mail from Codingspoint.com',
            'body' => 'This is for testing email using smtp'
        ];

        Mail::to('conceptsolution2022@gmail.com')->send(new \App\Mail\MyTestMail($details));

        dd("Email is Sent.");
    }
}
