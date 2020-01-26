<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Level;
use Validator;
use App\LevelOrder;
use App\Order;
use Illuminate\Validation\Rule;

class LevelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $levels = Level::get();

        return $levels;
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $order = new Order;
        $rules = [

            'name' => 'required|string|unique:levels',
            'display_name' => 'required|string',
            'order_id' => [

                Rule::exists($order->getTable(), $order->getKeyName())

            ]

        ];

        $validator = Validator::make($request->all(), $rules);

        if($validator->fails()){

            return response()->json([
              "status" => "error",
              "errors" => $validator->errors()
            ]);

        }

        $level = Level::create($request->except(['order_id']));
        LevelOrder::create([

            'order_id' => $request->order_id,
            'order_name' => $order->where('id', $request->order_id)->first()->name,
            'level_id' => $level->id,
            'level_name' => $level->name

        ]);



        return [
            'status'=> 'success',
            'message' => 'Level Added successfully'
                ];

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $level = Level::find($id);

        return $level;
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
        $level = Level::find($id);

        $rules = [

            'name' => "required|string|unique:levels,name,$id",
            'display_name' => 'required|string'

        ];

        $validator = Validator::make($request->all(), $rules);

        if($validator->fails()){

            return response()->json([
              "status" => "error",
              "errors" => $validator->errors()
            ]);

        }

        $level->update($request->all());

        return [
            'status'=> 'success',
            'message' => 'Level Updated successfully'
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
        $level = Level::find($id);
        
        $level->delete();

        return ["message" => "Level Deleted Successfully"];
    }


    public function detach(Request $request){

        $order = Order::find($request->orderId);

        // $level = Level::find($request->id);

        $order->levels()->detach($request->levelId);

        return [
            'status'=> 'success',
            'message' => 'Level Detached Successfully'
                ];


    }
}
