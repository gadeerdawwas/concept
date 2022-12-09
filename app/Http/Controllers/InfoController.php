<?php

namespace App\Http\Controllers;

use App\Models\Information;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class InfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $information = Information::first();
        // return $information;
        return view('dashboard.info', compact('information'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $information = Information::first();





        if ($information == NULL) {
            $image_name = '';
            if ($request->has('file')) {
                $FileEx = $request->file('file')->getClientOriginalExtension();
                $image_name = 'profile.pdf';
                $path = 'upload/profile/profile.pdf';
                $request->file('file')->move(public_path('upload/profile'), $image_name);
            }

            Information::create([
                'email' => $request->email,
                'facebook' => $request->facebook,
                'twitter' => $request->twitter,
                'instagram' => $request->instagram,
                'linkedin' => $request->linkedin,
                'link' => $request->link,
                'profile' => $path
            ]);
        } else {

            $image_name = $information->image;

            if ($request->has('file')) {
                $FileEx = $request->file('file')->getClientOriginalExtension();
                $image_name = 'profile.pdf';
                $path = 'upload/profile/profile.pdf';
                $request->file('file')->move(public_path('upload/profile'), $image_name);
            } else {
                $image_name = $information->image;
            }


            Information::find($information->id)->update([
                'email' => $request->email,
                'facebook' => $request->facebook,
                'twitter' => $request->twitter,
                'instagram' => $request->instagram,
                'linkedin' => $request->linkedin,
                'link' => $request->link,
                'profile' => $path
            ]);
        }
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
