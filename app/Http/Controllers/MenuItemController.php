<?php

namespace App\Http\Controllers;

use App\MenuItem;
use Illuminate\Http\Request;

class MenuItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('back_end.dashboard.food_menu.add_food');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Request $request
     * @return void
     */
    public function create(Request $request)
    {
//        dd($request->all());
//        die();

        $this->validate($request, [
            'name'  => 'required',
            'price'  => 'required | numeric',
            'des'  => 'required | max:1200',
            'file'  => 'required',
            'agree'  => 'required',
        ]);

        try {
            $image = $request->file('file');
            $imageRename = date('YmdHis').'-'.time().'-'.$image->getClientOriginalName();
            $dir = './food/menu/';
            $image->move($dir,$imageRename);
            $ima_path = $dir . $imageRename;
//
//            $create = [
//              'name'    => $request->post('name'),
//              'price'    => $request->post('price'),
//              'des'    => $request->post('des'),
//              'agree'    => $request->post('agree'),
//              'file'    => $ima_path
//            ];



            $foodItem = new MenuItem();

            $foodItem->name = $request->name;
            $foodItem->price = $request->price;
            $foodItem->manager_id = $request->manager_id;
            $foodItem->des = $request->des;
            $foodItem->agree = $request->agree;
            $foodItem->file = $ima_path;

            $foodItem->save();

            return redirect()->back()->with('s','okay');



        }
        catch (Exception $exception){
            return redirect()->back()->with('e','fuck');
        }
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
     * @param  \App\MenuItem  $menuItem
     * @return \Illuminate\Http\Response
     */
    public function show(MenuItem $menuItem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MenuItem  $menuItem
     * @return \Illuminate\Http\Response
     */
    public function edit(MenuItem $menuItem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MenuItem  $menuItem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MenuItem $menuItem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MenuItem  $menuItem
     * @return \Illuminate\Http\Response
     */
    public function destroy(MenuItem $menuItem)
    {
        //
    }
}
