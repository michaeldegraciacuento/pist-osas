<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
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
        $news = News::latest();
        if($request->title)
        {
            $news = $news->where('title', 'LIKE' ,'%'.$request->title .'%');
        }
        if($request->subject)
        {
            $news = $news->where('subject', 'LIKE' ,'%'.$request->subject .'%');
        }
        $news = $news->paginate(50);
        $news = $news->appends($request->except('page'));
        return view('news.index',compact('news'));
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
        $news=new News();
        $news->title=$request->title;
        $news->subject=$request->subject;
        $news->location=$request->location;
        $news->date=$request->date;
        $news->content=$request->content;

        if( $request->file('image') != null){
            $picture = $request->file('image');
            $fileName = time() . '.' . $picture->getClientOriginalExtension();
            $img = Image::make($picture->getRealPath());
            $img->stream();
            $url = Storage::disk('public')->put('uploads/news', $picture);
            $news->image = $url; 
        }

        $news->save();
        return redirect()->back()->with('success','Successfully Stored Data!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        return view('news._update',compact('news'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  News $news)
    {
        $news->title = $request->title;
        $news->content = $request->content;
        $news->subject = $request->subject;
        $news->location = $request->location;
        $news->date = $request->date;
        if( $request->file('image') != null){
            $picture = $request->file('image');
            $fileName = time() . '.' . $picture->getClientOriginalExtension();
            $img = Image::make($picture->getRealPath());
            $img->stream();
            $url = Storage::disk('public')->put('uploads/news', $picture);
            $news->image = $url;  
        }
        $news->update();
        return redirect()->back()->with('success','Successfully Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        if($news->isDeleted == 0){
            $news->delete();
            return redirect()->back()->with('success','Successfully Deleted!');    
        }else{
            $news->delete();
        return redirect()->back()->with('success','Request Successfully Deleted!');    
        }
    }
    public function request($id)
    {
        $news = News::where('id',$id)->first();

        return view('news._request',compact('news'));  
    }
    public function requestStatus(Request $request, $id)
    {
        $news = News::where('id',$id)->first();
        $news->isDeleted = $request->isDeleted;
        $news->update();

        return redirect()->back()->with('success','Request Successfully Submitted!');
    }
}
