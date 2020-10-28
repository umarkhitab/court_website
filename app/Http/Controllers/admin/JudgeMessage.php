<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Str;

class JudgeMessage extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $messages = DB::table('sessions_judge_message')->get();
        return view('admin.judge_messages.judge_message')->with('messages', $messages);
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
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time() . '.' . $request->image->extension();

        $request->image->move(public_path('uploads/judge_images'), $imageName);

        DB::table('sessions_judge_message')->insert([

            'image' => 'uploads/judge_images/' . $imageName,
            'message_title' => $request->msg_title,
            'message' => $request->message,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        return back()
            ->with('success', 'You have successfully Added a Message.');
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
        $messages = DB::table('sessions_judge_message')->where('id', $id)->first();
        return view('admin.judge_messages.edit')->with('msg', $messages);
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

            $imageName = time() . '.' . $request->image->extension();

            $request->image->move(public_path('uploads/judge_images'), $imageName);

            $newImage = 'uploads/judge_images/' . $imageName;
        } else {
            $newImage = $request->old_img;
         }

        DB::table('sessions_judge_message')->where('id',$id)->update([
            'image' => $newImage,
            'message_title' => $request->msg_title,
            'message' => $request->message,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        return \Redirect::route('judge_message.index')->with('message', 'Message Updated Succssfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('sessions_judge_message')->delete($id);

        return back()
            ->with('success', 'Message Deleted Successfully.');
    }
}
