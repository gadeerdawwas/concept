<?php

namespace App\Http\Controllers;

use App\Models\Images;
use App\Models\Services;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Services=Services::orderBy('id','desc')->paginate(10);
       return view('dashboard.services.index',compact('Services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;
        if ($request->has('image')) {
            $FileEx = $request->file('image')->getClientOriginalExtension();
            $image_name = time() . '_' . rand() . '.' . $FileEx;
            $request->file('image')->move(public_path('upload/services'), $image_name);

        }
       $services_id=Services::create([
        'title_ar'=> $request->title_ar ,
        'title_en'=> $request->title_en ,
        'content_ar'=> $request->content_ar ,
        'content_en'=> $request->content_en ,
        'image'=>  $image_name ,
        'blog'=>  str_replace(' ', '', $request->title_en) ,

       ]);
        $files = [];
        if ($request->file('files')){
            foreach($request->file('files') as $key => $file)
            {
                $fileName = time().rand(1,99).'.'.$file->extension();
                $file->move(public_path('uploads'), $fileName);

                Images::create([
                    'services_id' =>$services_id->id,
                    'name' => $fileName,
                ]);
            }
        }
        return redirect()->back()->with('success', 'تم إضافة الخدمة بنجاح');

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
        $Services=Services::find($id);
        $image_name =$Services->image;
        try {
            if ($request->has('image')) {
                $FileEx = $request->file('image')->getClientOriginalExtension();
                $image_name = time() . '_' . rand() . '.' . $FileEx;
                $request->file('image')->move(public_path('upload/Services'), $image_name);
            }else{
                $extension = explode('/',  $image_name);
                $image_name = end($extension);
       }
        if ($request->file('files')){
            foreach($request->file('files') as $key => $file)
            {
                $fileName = time().rand(1,99).'.'.$file->extension();
                $file->move(public_path('uploads'), $fileName);
                Images::create([
                    'services_id' =>$Services->id,
                    'name' => $fileName,
                ]);
            }
        }
        Services::find($id)->update([
            'title_ar'=> $request->title_ar ,
            'title_en'=> $request->title_en ,
            'content_ar'=> $request->content_ar ,
            'content_en'=> $request->content_en ,
            'image'=>  $image_name ,
            'blog'=>  str_replace(' ', '', $request->title_en) ,

           ]);
           return redirect()->back()->with('success', 'تم تعديل البيانات بنجاح');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'لم تمم عملية التعديل');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Services::find($id)->delete();
        return redirect()->back()->with('success', 'تم عملية الحذف  بنجاح');
    }

    public function project_image_delete($id)
    {
        // return $id;
        $iformation=Images::find($id)->delete();

        return redirect()->back()->with('success', 'تم حذف الصورة بنجاح');
    }
}
