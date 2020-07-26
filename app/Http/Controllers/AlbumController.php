<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use Session;

use App\User;

use App\Photo;

use App\Album;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $getData = Album::where('status','Public')->paginate(20);
        

        
        
         return view('Feeds_Album',['listImg'=>$getData]);
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
    public function store(Request $request, $id)
    {
          $album = new Album();
        
        $album->status = $request->input('status');
        $album->title = $request->input('title');
        $album->discript = $request->input('discript');
        $album->user_id = $id;
        if($request->hasfile('file'))
        {

            $files = $request->file('file');
            foreach ($files as $index=>$file) {
                $extension = $file->getClientOriginalExtension();
                $filename = rand().'.'.$extension;
                $file->move('image',$filename);

                $photo = new Photo();
        
                $photo->status = $request->input('status');
                $photo->title = $request->input('title');
                $photo->discript = $request->input('discript');
                $photo->link = $filename;

                $album->link = $filename;
                if($index <= 0)
                {
                     $album->save();
                }

                $photo->save();
                $a = Album::find($album->id);
                $a->photos()->attach($photo->id);
                

            }
        }else{
            return dd('dsfds');
        }

        $album->save();
       

        return view('AddAlbum');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $getData = User::find($id)->albums()->paginate(20);

        
        
       return view('MyAlbum',['listAlbumForUsers'=>$getData]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $album = Album::find($id);
        return view('UpdateAlbum',['data'=>$album]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, $link)
    {
         $album = Album::find($id);
        
        $album->status = $request->input('status');
        $album->title = $request->input('title');
        $album->discript = $request->input('discript');
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('image',$filename);
            $album->link = $filename;
        }else{
           $album->link = $link;
        }

        $album->save();
        

         return view('AddAlbum');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $album = Album::find($id);
        $album->delete();
        return view('AddAlbum');
    }
}
