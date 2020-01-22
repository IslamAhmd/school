<?php

use Illuminate\Database\Seeder;
use App\Year;
use App\Level;
use App\YearLevel;

class YearsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $years = [

        	'primary_1',
        	'primary_2',
        	'primary_3',
        	'primary_4',
        	'primary_5',
        	'primary_6',
        	'intermediate_1',
        	'intermediate_2',
        	'intermediate_3',
        	'female_1',
        	'female_2',
        	'female_3',
        	'anti_illiteracy',
        	'sixth_level',
        	'all_subjects',
        	'all_units',
        	'secondary_1',
        	'secondary_2',
        	'secondary_3',
        	'all_unities'

        ];

        $years_displayName = [

        	'أول ابتدائي',
        	'ثاني ابتدائي',
        	'ثالث ابتدائي',
        	'رابع ابتدائي',
        	'خامس ابتدائي',
        	'سادس ابتدائي',
        	'أول متوسط',
        	'ثاني متوسط',
        	'ثالث متوسط',
        	'اولى كبيرات',
        	'ثانى كبيرات',
        	'ثالث كبيرات',
        	'مجتمع بلا أمية',
        	'المستوى السادس فصلي',
        	'جميع المواد',
        	'جميع الوحدات',
        	'الأول ثانوي',
        	'الثاني ثانوي',
        	'الثالث ثانوي',
        	'جميع وحدات'

        ];

        foreach($years as $i => $year){

        	Year::create([

        		'name' => $year,
        		'display_name' => $years_displayName[$i]

        	]);

        }

        $levels = Level::get(['id', 'name']);
        $cls = Year::get(['id', 'name']);


        foreach($levels as $level){

        	if($level->name == "elementary stage"){

        		foreach ($cls as $cl) {
        			
        			if($cl->name == "primary_1" || $cl->name == "primary_2" || $cl->name == "primary_3" || $cl->name == "primary_4" || $cl->name == "primary_5" || $cl->name == "primary_6"){

        				YearLevel::create([

        					'level_id' => 1,
        					'level_name' => 'elementary stage',
        					'year_id' => $cl->id,
        					'year_name' => $cl->name

        				]);

        			}

        		}

        	} elseif ($level->name == "intermediate stage") {
        		
        		foreach ($cls as $cl) {
        			
        			if($cl->name == "intermediate_1" || $cl->name == "intermediate_2" || $cl->name == "intermediate_3"){

        				YearLevel::create([

        					'level_id' => 2,
        					'level_name' => 'intermediate stage',
        					'year_id' => $cl->id,
        					'year_name' => $cl->name

        				]);

        			}

        		}

        	} elseif ($level->name == "female education") {
        		
        		foreach ($cls as $cl) {
        			
        			if($cl->name == "female_1" || $cl->name == "female_2" || $cl->name == "female_3" || $cl->name == "anti_illiteracy"){

        				YearLevel::create([

        					'level_id' => 3,
        					'level_name' => 'female education',
        					'year_id' => $cl->id,
        					'year_name' => $cl->name

        				]);

        			}

        		}


        	} elseif ($level->name == "quarterly order") {
        		
        		foreach ($cls as $cl) {
        			
        			if($cl->name == "sixth_level"){

        				YearLevel::create([

        					'level_id' => 4,
        					'level_name' => 'quarterly order',
        					'year_id' => $cl->id,
        					'year_name' => $cl->name

        				]);

        			}

        		}

        	} elseif ($level->name == "courses") {
        		
        		foreach ($cls as $cl) {
        			
        			if($cl->name == "all_subjects"){

        				YearLevel::create([

        					'level_id' => 5,
        					'level_name' => 'courses',
        					'year_id' => $cl->id,
        					'year_name' => $cl->name

        				]);

        			}

        		}

        	} elseif ($level->name == "kindergarten") {
        		
        		foreach ($cls as $cl) {
        			
        			if($cl->name == "all_units"){

        				YearLevel::create([

        					'level_id' => 6,
        					'level_name' => 'kindergarten',
        					'year_id' => $cl->id,
        					'year_name' => $cl->name

        				]);

        			}

        		}

        	} elseif ($level->name == "intellectual education") {
        		
        		foreach ($cls as $cl) {
        			
        			if($cl->name == "primary_1" || $cl->name == "primary_2" || $cl->name == "primary_3" || $cl->name == "primary_4" || $cl->name == "primary_5" || $cl->name == "primary_6" || $cl->name == "intermediate_1" || $cl->name == "intermediate_2" || $cl->name == "intermediate_3" || $cl->name == "secondary_1" || $cl->name == "secondary_2" || $cl->name == "secondary_3" ){

        				YearLevel::create([

        					'level_id' => 7,
        					'level_name' => 'intellectual education',
        					'year_id' => $cl->id,
        					'year_name' => $cl->name

        				]);

        			}

        		}

        	} elseif ($level->name == "compact cylinders") {
        		
        		foreach ($cls as $cl) {
        			
        			if($cl->name == "all_unities"){

        				YearLevel::create([

        					'level_id' => 8,
        					'level_name' => 'compact cylinders',
        					'year_id' => $cl->id,
        					'year_name' => $cl->name

        				]);

        			}

        		}

        	}

        }
    }
}
