<?php

namespace App\Http\Controllers;
use App\Models\Video;
use App\Models\User;
use App\Http\Requests;
use App\Http\Requests\CreateVideoRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;



class ItemsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['only' =>'create']);
    }
    
    public function index()
    {
        //return Auth::user();
        $videos = Video::latest()->get();
        return view('items.index',compact('videos'));
    }

    public function show($id)
    {
        $video = Video::findOrFail($id);
        return view('items.show', compact('video'));
    }
        /*formularz dodawania filmu */

    public function create()
    {
        return view('items.create');
    }


/*zapis filmu do bazy*/

    public function store(CreateVideoRequest $request)
    {
       

       //Video::create($request->all());
        $video = new Video($request->all());
        Auth::user()->videos()->save($video);
        session()->flash('message', 'Film dodany');
        return redirect('videos');
 

    }


    /*
    edycja filmow
    */

    public function edit($id)
    {
        $video = Video::findOrFail($id);
        return view('items.edit', compact('video'));
    }

    /*
    aktualizacja filmu 
    */
    public function update($id, CreateVideoRequest $request)
    {
        $video = Video::findOrFail($id);
        $video->update($request-> all());
        return redirect('videos'); 
    }

    

}
