<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Service;
use Illuminate\Validation\Validator;

class servicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $req)
    {
        $validator = $req->validate([
            'name' => 'required',
            'price' => 'required',
        ]);

        $service = Service::create([
            'name' => $validator['name'],
            'price' => $validator['price'],
            'title' => $req->name,
            'value' => $req->value ?? null,
        ]);
        
        $service->categories()->attach([$req->category]);

        return redirect()->back()->with('status', '200');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $id)
    {
        $validator = $req->validate([
            'name' => 'required',
            'price' => 'required',
        ]);

        $service = Service::findOrFail($id);

        $service->update([
            'name' => $validator['name'],
            'price' => $validator['price'],
            'title' => $req->name,
            'value' => $req->value ?? null,
        ]);

        $service->categories()->sync([$req->category]);

        return redirect()->back()->with('status', '200');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Service::find($id)->delete();

        return redirect()->back();
    }
}
