<?php

use Illuminate\Database\Seeder;
use App\Pack;

class PacksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arrayPack = config('pack');

        
        foreach ($arrayPack as $item) {
            // creo oggetto, istanza della classe Pack
            $pack = new Pack();
            // valorizzo proprietà dell'oggetto
            // $pack->destination = "new york";
            // se fosse da prendere un dato "src-p" con trattino bisogna fare: 
            // $pack->{ src-p } = $item["src-p"]; perchè sennò il -p darà problemi.
            $pack->destination = $item["destination"];
            $pack->description = $item["description"];
            $pack->is_available = $item["is_available"];
            $pack->price = $item["price"];

            // salvo nel DB
            $pack->save();
        }

    }
}
