<?php
# @Author: maerielbenedicto
# @Date:   2019-11-17T18:52:02+00:00
# @Last modified by:   maerielbenedicto
# @Last modified time: 2019-11-17T18:54:59+00:00




use Illuminate\Database\Seeder;
use App\Publisher;

class PublishersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $publisher = new Publisher();
        $publisher->name = "O'Reilly Media";
        $publisher->address = "Birmingham, UK";
        $publisher->save();

        $publisher = new Publisher();
        $publisher->name = "O'Connel Media";
        $publisher->address = "Lethearhead, UK";
        $publisher->save();

        $publisher = new Publisher();
        $publisher->name = "Pink Media";
        $publisher->address = "Edinburgh, Scotland";
        $publisher->save();

        $publisher = new Publisher();
        $publisher->name = "King Media";
        $publisher->address = "Osaka, Japan";
        $publisher->save();
    }
}
