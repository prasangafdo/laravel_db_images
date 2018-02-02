<?php

namespace App\Http\Controllers;

use App\Photo;
use Illuminate\Http\Request;
use DB; //Insert this to use the database
use Illuminate\Support\Facades\Storage;//To save the data
use Illuminate\Support\Facades\Input;

class PhotosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('upload');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function show(Photo $photo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function edit(Photo $photo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Photo $photo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Photo $photo)
    {
        //
    }

    public function upload(Request $request)
    {
        //
        /*Only update the database
        $image = $request->file('image');
        $filename = $image->getClientOriginalName();//Getting the original name of the uploaded file

        $Photo = new Photo;//Calling the model
        $name = $Photo ->name = $request->name;//Getting the values of the fillables
        $description = $Photo ->description = $request->description;

        //Inserting part
        $data = array('name'=>$name, 'description'=>$description, 'filename'=>$filename);//Inserting data to an array

        DB::table('photos')->insert($data);//Mention the table here

        echo "Success";
        */

    if(Input::hasFile('image')){

            echo 'Uploaded';
            $file = Input::file('image');
            $file->move('uploads', $file->getClientOriginalName());
            echo '';
        }
        
    }
}
