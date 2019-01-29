<?php

use Illuminate\Database\Seeder;
use App\Menu;
class RecurrenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Recurrence::class,30)->create()->each(
            function($r){
                $r->menus()->saveMany(factory(App\Menu::class,3)->make());
            }
        );
    }
}
