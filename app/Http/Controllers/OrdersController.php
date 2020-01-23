<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use Validator;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::with('levels')->get();

        return $orders;
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->all();

        $rules = [

            'name' => 'required|string',
            'display_name' => 'required|string'

        ];

        $validator = Validator::make($request->all(), $rules);

        if($validator->fails()){

            return response()->json([
              "status" => "error",
              "errors" => $validator->errors()
            ]);

        }

        $order = Order::create($request->all());

        return [
            'status'=> 'success',
            'message' => 'Order Added successfully'
                ];

    }


    public function show($id){

        $order = Order::with('levels')->find($id);

        return $order;

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
        $order = Order::find($id);

        $rules = [

            'name' => 'required|string',
            'display_name' => 'required|string'

        ];

        $validator = Validator::make($request->all(), $rules);

        if($validator->fails()){

            return response()->json([
              "status" => "error",
              "errors" => $validator->errors()
            ]);

        }

        $order->update($request->all());

        return [
            'status'=> 'success',
            'message' => 'Order Updated successfully'
                ];

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $order = Order::find($id);

        
        $order->delete();

        return ["message" => "Order Deleted Successfully"];
    }
}
