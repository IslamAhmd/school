<?php

use Illuminate\Database\Seeder;
use App\Level;
use App\Order;
use App\LevelOrder;


class LevelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	$levels = [

    		'elementary stage',
    		'intermediate stage',
    		'female education',
    		'quarterly order',
    		'courses',
    		'kindergarten',
    		'intellectual education',
    		'compact cylinders'

    	];

        $levels_displayName = [

        	'مرحله ابتدائيه',
        	'مرحله متوسطه',
        	'تعليم الكبيرات',
        	'النظام الفصلى',
        	'المقررات',
        	'رياض الاطفال',
        	'التربيه الفكريه',
        	'اسطوانات شامله'

        ];

        foreach ($levels as $i => $level) {

        	Level::create([

        		'name' => $level,
        		'display_name' => $levels_displayName[$i]

        	]);

        }

        $orders = Order::get(['id', 'name']);
        $levs = Level::get(['id', 'name']);

        foreach($orders as $order){

        	if($order->name == "distribute by email"){

        		foreach($levs as $lev){

        			if($lev->name !== "compact cylinders"){

        				LevelOrder::create([

	        				'order_id' => 1,
	        				'order_name' => "distribute by email",
	        				'level_id' => $lev->id,
	        				'level_name' => $lev->name

        				]);

        			}

        		}

        	} elseif ($order->name == "purchase by email") {

        		foreach($levs as $lev){

        			LevelOrder::create([

        				'order_id' => 2,
        				'order_name' => "purchase by email",
        				'level_id' => $lev->id,
        				'level_name' => $lev->name

        			]);

        		}
        		
        	} elseif ($order->name == "purchase by delivery"){

        		foreach($levs as $lev){

        			LevelOrder::create([

        				'order_id' => 3,
        				'order_name' => "purchase by delivery",
        				'level_id' => $lev->id,
        				'level_name' => $lev->name

        			]);

        		}

        	} elseif ($order->name == "purchase by fedex"){

        		foreach($levs as $lev){

        			LevelOrder::create([

        				'order_id' => 4,
        				'order_name' => "purchase by fedex",
        				'level_id' => $lev->id,
        				'level_name' => $lev->name

        			]);

        		}

        	} elseif ($order->name = "preparing the future"){

        		foreach($levs as $lev){


        			if($lev->name == "elementary stage" || $lev->name == "intermediate stage" || $lev->name == "quarterly order" || $lev->name == "courses"){

        				LevelOrder::create([

	        				'order_id' => 5,
	        				'order_name' => "preparing the future",
	        				'level_id' => $lev->id,
	        				'level_name' => $lev->name

        				]);

        			}

        		}
        	}

        }



    }
}
