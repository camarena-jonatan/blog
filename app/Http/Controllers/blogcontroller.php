<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;


use App\Blog;

class blogcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function upload(Request $request){

        $baseLocation = '/Images';
        $file = $request->file('file');

        $filename = uniqid().'.'.$file->extension();
        $filepath = $baseLocation.$filename;
        //$user->ine_file = $filepath;
        $file->move(public_path($baseLocation), $filename);

        //$file = $request->file('file')->move(base_path() . '/public/images', $imageName);  
          
        
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
        $blog = new Blog();

        $blog->title = $request->get("input1");
        $blog->longs = $request->get("input2");
        $blog->short = $request->get("input3");
        $blog->image = $request->get("input4");

        $blog->save() ;
        return response()->json(["status" => "success"]);
        

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


    public function shows(){
        $blog = Blog::first();
        if($blog){
            return view('vistas.home',compact('blog'));
        }else{
            return view('vistas.empty');
        }

    }

    public function shows2(){
        $blogs = Blog::all();
        return view('vistas.blog',compact('blogs'));
    }

    public function shows3($id){
        


        $blog = Blog::where('id',$id)->first();
        return view('vistas.solo',compact('blog'));
        
    }

    public function shows4(Request $request){
        
        $cad= $request->get('one');

        $blogs = Blog::where('longs', 'LIKE', '%'.$cad.'%')->get();    


        return view('vistas.search',compact('blogs'));
        
    }

    public function ObtenerBlosDelUsuarioLogueado(){
        $id = 1;
        $blogs = User::find($id)->blogs()->get();
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
