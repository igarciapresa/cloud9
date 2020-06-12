<?php

namespace App\Http\Controllers;

use App\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class PhotosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $photos = Photo::all();
        return view('index', ['photos' => $photos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('new_photo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        {
            $validator = Validator::make($request->all(), [
                'title' => 'required',
                'src_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
                'description' => 'required',
            ]);

            if ($validator->fails()) {
                return redirect('/new_photo')
                    ->withErrors($validator)
                    ->withInput();
            }

            $imageName = str_random(10)."_".time().'.'.$request->src_image->extension();

            $request->src_image->move(public_path('images_upload'), $imageName);

            $photo = new Photo;
            $photo->title = $request->title;
            $photo->src_image = $imageName;
            $photo->id_user = Auth::user()->id;
            $photo->description = $request->description;
            $photo->save();

            return redirect('/');

        }
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Photo $photo
     * @return \Illuminate\Http\Response
     */
    public function show(Photo $photo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Photo $photo
     * @return \Illuminate\Http\Response
     */
    public function edit(Photo $photo)
    {
        return view('change_description', [
            'photo' => $photo
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Photo $photo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        DB::table('photos')->where('id', $request->id_image)->update(['description' => $request->description]);
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Photo $photo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $photo = Photo::findOrFail($id);
        $photo->delete();

        return redirect('/');
    }
}
