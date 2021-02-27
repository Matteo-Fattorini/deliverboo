<?php

namespace App\Http\Controllers;

use App\Restaurant;
use App\Dish;
use App\Order;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Restaurateur;
use App\Type;
use App\Genre;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class DishController extends Controller
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
    public function create()
    {
        
        return view("dishes-create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $exists = Dish::where("name",$request["name"])->exists();
        $item = "piatto con questo nome!";
        $data = $request->all();
        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension();
        Storage::disk('public')->put($file->getFilename() . '.' . $extension,  File::get($file));
        if (!$exists) {
            Dish::firstOrCreate([
                "name" => $data["name"],
                "description" => $data["description"],
                "price" => $data["price"],
                "visibility" => $data["visibility"],
                "image_url" => $file->getFilename() . '.' . $extension,
                "restaurant_id" => Auth::User()->getRestaurant->id,
                "genre_id" => "1"

            ]);

            
            return view("success",compact("item"));
        } else {
            return view("failed", compact("item"));
        }
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
