<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Services;
use App\Models\Supplier;
use Facade\FlareClient\View;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $services=Services::count();
        $order=Contact::where('status',0)->count();
        $suppliers=Supplier::all();
        return view('dashboard.index',compact('services','order','suppliers'));
    }
}
