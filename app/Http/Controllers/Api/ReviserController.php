<?php

namespace App\Http\Controllers\Api;
use App\Models\Reviser;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\Api\ReviserResource;

class ReviserController extends Controller
{
    /**
     * Display a listing of the resource.
  *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return ReviserResource::collection(Reviser::all());
        
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    public function store(Request $request)
    {
        return Reviser::create($request->all());
    }

    /**
     * Display the specified resource.
     * 
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return new ReviserResource( Reviser::find($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function update(Request $request, $id)
    {
        return Reviser::find($id)->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Reviser::find($id)->delete();
    }
}
