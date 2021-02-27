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
        $genres = Genre::all();
        return view("dishes-create",compact("genres"));
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
        
        $data = $request->all();
        
        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension();
        Storage::disk('public')->put($file->getFilename() . '.' . $extension,  File::get($file));
        if (!$exists) {
            $dish = new Dish;
            $dish["name"] = $data["name"];
            $dish["description"] = $data["description"];
            $dish["price"] = $data["price"];
            $dish["visibility"] = $data["visibility"];
            $dish["image_url"] = $file->getFilename() . '.' . $extension;
            
            $dish->getRestaurant()->associate(Auth::User()->getRestaurant->id);
            $dish->getGenre()->associate($data["genre"]);
            $dish->save();

            $item = "Hai creato un nuovo piatto con successo!";
            return view("success",compact("item"));
        } else {
            $item = "Esiste già piatto con questo nome nel tuo ristorante";
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
        $dish = Dish::find($id);
        return view("test-dish-detail",compact("dish"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $genres = Genre::all();
        $dish = Dish::find($id);
        return view("test-dish-edit", compact("dish","genres"));
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
        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension();
        Storage::disk('public')->put($file->getFilename() . '.' . $extension,  File::get($file));
        $dish = Dish::find($id);
        $data = $request->all();
        
        $dish->update([
            "name" => $data["name"],
            "description" => $data["description"],
            "price" => $data["price"],
            "visibility" => $data["visibility"],
            "image_url" => $file->getFilename() . '.' . $extension,
            
        ]);
        Dish::find($id)->getGenre()->associate($data["genre"])->save();
        
       
        $item = "ok hai modificato con successo";

        return view("success",compact("item"));
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
