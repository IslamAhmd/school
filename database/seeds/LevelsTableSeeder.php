<?php

use Illuminate\Database\Seeder;
use App\Level;
use App\Order;


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

        	'مرحله ابتدائيه',
        	'مرحله متوسطه',
        	'تعليم الكبيرات',
        	'النظام الفصلى',
        	'المقررات',
        	'رياض الاطفال',
        	'التربيه الفكريه',
        	'اسطوانات شامله'

        ];


    }
}
