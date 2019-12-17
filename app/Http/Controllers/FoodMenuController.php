<?php

namespace App\Http\Controllers;

use App\FoodMenu;
use Illuminate\Http\Request;

class FoodMenuController extends Controller
{
    public function showForm()
    {
        return view('back_end.dashboard.food_menu.add_food');
    }

    public function menuAdd(Request $request)
    {
        try{
            $menuImage      = $request->file('menu_image');
            $imageRename    = date('YmdHis') . '-' . time() . '-' . $menuImage->getClientOriginalName();
            $dir            = './menu/items/';
            $menuImage      ->move($dir,$imageRename);
            $imagePath      = $dir.$imageRename;

            $foodMenu = new FoodMenu();

            $foodMenu->menu_name                = $request->post('menu_name');
            $foodMenu->menu_type                = $request->post('menu_type');
            $foodMenu->menu_category            = $request->post('menu_category');
            $foodMenu->menu_code                = $request->post('menu_code');
            $foodMenu->menu_description         = $request->post('menu_description');
            $foodMenu->menu_availability        = $request->post('menu_availability');
            $foodMenu->menu_unit                = $request->post('menu_unit');
            $foodMenu->menu_delivery_time       = $request->post('menu_delivery_time');
            $foodMenu->menu_discount            = $request->post('menu_discount');
            $foodMenu->menu_delivery_fee        = $request->post('menu_delivery_fee');
            $foodMenu->menu_image               = $imagePath;

            $foodMenu->save();

            return redirect()->intended(route('menu.show-all'))->with('success','Menu added successfully');
        }
        catch (Exception $exception){
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }
    public function showMenu()
    {
        $all_menu = FoodMenu::all();

        return view('back_end.dashboard.food_menu.menu')->with([
            'all_menus' => $all_menu
        ]);
    }
}
