<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class PictureGalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pictures = DB::table('picture_gallery')->get();
        return view('admin.history.picture_gallery.index')->with('pictures', $pictures);
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
        if ($request->hasFile('image')) {
            $images = $request->file('image');

            $imagesPath = [];

            foreach ($images as $image) {

                //you also need to keep file extension as well
                $name = $image->getClientOriginalName();

                //using the array instead of object
                $image->move(public_path() . '/uploads/list_images/', $name);

                DB::table('picture_gallery')->insert([
                    'images' => asset('public/uploads/list_images/' . $name),
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ]);
            }
        }

        return back()
            ->with('success', 'Data Added Successfully');
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
        $pic = DB::table('picture_gallery')->where('id', $id)->first();

        return view('admin.history.picture_gallery.edit')
            ->with('pic', $pic);
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
        if ($request->hasFile('image')) {

            $images = $request->file('image');

            $imagesPath = [];

            foreach ($images as $image) {
                $imageName = time() . '.' . $image->extension();

                $image->move(public_path('uploads/banners'), $imageName);

                $imagesPath[] = 'public/uploads/banners/' . $imageName;
            }
            $newImage = implode('|', $imagesPath);
        } else {
            $newImage = $request->old_images;
        }

        DB::table('picture_gallery')->where('id', $id)->update([
            'title' => $request->title,
            'gallery_desc' => $request->desc,
            'images' => $newImage,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        return \Redirect::route('pic.index')->with('success', 'Updated Succssfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('picture_gallery')->delete($id);

        return back()
            ->with('success', 'Deleted Successfully.');
    }
}
