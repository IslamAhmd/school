<?php

use Illuminate\Database\Seeder;
use App\Order;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$orders = [

    		'distribute by email',
    		'purchase by email',
    		'purchase by delivery',
    		'purchase by fedex',
    		'preparing the future'

    	];
        $orders_displayName = [

        	'توزيع المنهج المجاني مع عينة من التحاضير عن طريق الايميل',
        	'الشراء لكامل المادة عن طريق الايميل',
        	'الشراء عن طريق التوصيل للرياض والخرج طباعة وسي دي',
        	'الشراء عن طريق فيدكس لباقي مدن المملكة طباعة وسي دي ( يضاف 50 ريال للطلب )',
        	'تحاضير المستقبل'
        ];

        foreach ($orders as $i => $order) {
        	
        	Order::create([

        		'name' => $order,
        		'display_name' => $orders_displayName[$i]

        	]);
        }
    }
}
