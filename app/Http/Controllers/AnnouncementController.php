<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;


class AnnouncementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request){
            $request->all();
            }
        $announcements = Announcement::latest();
        if($request->title)
        {
            $announcements = $announcements->where('title', 'LIKE' ,'%'.$request->title .'%');
        }
        if($request->subject)
        {
            $announcements = $announcements->where('subject', 'LIKE' ,'%'.$request->subject .'%');
        }
        $announcements = $announcements->paginate(50);
        $announcements = $announcements->appends($request->except('page'));
        return view('announcements.index',compact('announcements'));
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
        $announcements=new Announcement();
        $announcements->title=$request->title;
        $announcements->subject=$request->subject;
        $announcements->location=$request->location;
        $announcements->date=$request->date;
        $announcements->content=$request->content;

        if( $request->file('image') != null){
            $picture = $request->file('image');
            $fileName = time() . '.' . $picture->getClientOriginalExtension();
            $img = Image::make($picture->getRealPath());
            $img->stream();
            $url = Storage::disk('public')->put('uploads/announcements', $picture);
            $announcements->image = $url; 
        }

        $announcements->save();
        return redirect()->back()->with('success','Successfully Stored Data!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Announcement  $announcement
     * @return \Illuminate\Http\Response
     */
    public function show(Announcement $announcement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Announcement  $announcement
     * @return \Illuminate\Http\Response
     */
    public function edit(Announcement $announcement)
    {
        return view('announcements._update',compact('announcement'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Announcement  $announcement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Announcement $announcement)
    {
        
        $announcement->title = $request->title;
        $announcement->content = $request->content;
        $announcement->subject = $request->subject;
        $announcement->location = $request->location;
        $announcement->date = $request->date;
        if( $request->file('image') != null){
            $picture = $request->file('image');
            $fileName = time() . '.' . $picture->getClientOriginalExtension();
            $img = Image::make($picture->getRealPath());
            $img->stream();
            $url = Storage::disk('public')->put('uploads/announcement', $picture);
            $announcement->image = $url;  
        }
        $announcement->update();
        return redirect()->back()->with('success','Successfully Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Announcement  $announcement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Announcement $announcement)
    {
        $announcement->delete();
        return redirect()->back()->with('success','Successfully Deleted!');   
    }
}
