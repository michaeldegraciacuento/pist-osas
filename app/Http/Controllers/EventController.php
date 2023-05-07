<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
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
        $event = Event::latest();
        if($request->title)
        {
            $event = $event->where('title', 'LIKE' ,'%'.$request->title .'%');
        }
        if($request->subject)
        {
            $event = $event->where('subject', 'LIKE' ,'%'.$request->subject .'%');
        }
        $event = $event->paginate(50);
        $event = $event->appends($request->except('page'));
        return view('event.index',compact('event'));
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
        $event=new Event();
        $event->title=$request->title;
        $event->subject=$request->subject;
        $event->location=$request->location;
        $event->date=$request->date;
        $event->content=$request->content;

        if( $request->file('image') != null){
            $picture = $request->file('image');
            $fileName = time() . '.' . $picture->getClientOriginalExtension();
            $img = Image::make($picture->getRealPath());
            $img->stream();
            $url = Storage::disk('public')->put('uploads/event', $picture);
            $event->image = $url; 
        }

        $event->save();
        return redirect()->back()->with('success','Successfully Stored Data!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        return view('event._update',compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        $event->title = $request->title;
        $event->content = $request->content;
        $event->subject = $request->subject;
        $event->location = $request->location;
        $event->date = $request->date;
        if( $request->file('image') != null){
            $picture = $request->file('image');
            $fileName = time() . '.' . $picture->getClientOriginalExtension();
            $img = Image::make($picture->getRealPath());
            $img->stream();
            $url = Storage::disk('public')->put('uploads/event', $picture);
            $event->image = $url;  
        }
        $event->update();
        return redirect()->back()->with('success','Successfully Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        if($event->isDeleted == 0){
            $event->delete();
            return redirect()->back()->with('success','Successfully Deleted!');    
        }else{
            $event->delete();
        return redirect()->back()->with('success','Request Successfully Deleted!');    
        }
    }
    public function requestEvents($id)
    {
        $events = Event::where('id',$id)->first();

        return view('event._request',compact('events'));  
    }
    public function requestStatusEvents(Request $request, $id)
    {
        $events = Event::where('id',$id)->first();
        $events->isDeleted = $request->isDeleted;
        $events->update();

        return redirect()->back()->with('success','Request Successfully Submitted!');
    }
}
