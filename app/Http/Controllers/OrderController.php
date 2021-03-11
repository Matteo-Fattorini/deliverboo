<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\restaurantValidator;
use App\Restaurant;
use App\Order;
use App\Type;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
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
    public function create(Request $request)
    {
        $data = $request->all();

        $order = new Order();
        $order["total"] = $data["total"];
        $order["client_name"] = $data["client_name"];
        $order["client_surname"] = $data["client_surname"];
        $order["client_email"] = $data["client_email"];
        $order["client_phone"] = $data["client_phone"];
        $order["client_address"] = $data["client_address"];
        $order["is_payed"] = 1;
      
        $order->getRestaurant()->associate($data["restaurant_id"]);
        $order->getDishes()->sync($data["dishes"]);
        $order->save();

        $input = array(
            'total' => $order["total"],
            "order_id" => $order["id"],
            "client_name" => $order["client_name"],
            "dishes" => $order->getDishes(),
        );
        
        Mail::send('order-mail', $input, function ($message) use($order) {
            $message->to($order["client_email"], $order["client_name"])->subject('Grazie per aver usato il nostro servizio');
            $message->from('deliverboo@gmail.com', 'DeliverBoo Team-3');
        });
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
        $restaurant = Restaurant::find($id);
        return view("test-orders",compact("restaurant"));
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
