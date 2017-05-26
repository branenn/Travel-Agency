<?php

use Illuminate\Database\Seeder;

class podaci_za_tabelu_mesto2 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // $two=array('naziv'=>'Sava Centar', 'adresa'=>'Novi Beograd');
        $three=array('naziv'=>'Kolarac', 'adresa'=>'Knez Mihajlova 86');
        $four=array('naziv'=>'Jugoslovenska kinoteka', 'adresa'=>'Uzun Mirkova 1');
        $five=array('naziv'=>'Dom omladine', 'adresa'=>'Makedonska 22/IV');
        $six=array('naziv'=>'Atelje 212', 'adresa'=>'Svetogorska 21');
        DB::table('mestos')->insert([

        [$three],
        [$four],
        [$five],
        [$six]
        ]);
    }
}
