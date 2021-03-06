<?php

use Illuminate\Database\Seeder;

class SorteosTestImparTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		App\Sorteo::create(['numero'=>799,'fecha'=>'2006-1-8','n1'=>1,'n2'=>2,'n3'=>4,'n4'=>5,'n5'=>7,'n6'=>8,'n7'=>14,'n8'=>15,'n9'=>16,'n10'=>17,'n11'=>18,'n12'=>19,'n13'=>20,'n14'=>21]);
		App\Sorteo::create(['numero'=>800,'fecha'=>'2006-1-15','n1'=>1,'n2'=>4,'n3'=>7,'n4'=>8,'n5'=>10,'n6'=>12,'n7'=>13,'n8'=>15,'n9'=>18,'n10'=>19,'n11'=>20,'n12'=>21,'n13'=>23,'n14'=>24]);
		App\Sorteo::create(['numero'=>801,'fecha'=>'2006-1-22','n1'=>1,'n2'=>4,'n3'=>6,'n4'=>9,'n5'=>10,'n6'=>11,'n7'=>13,'n8'=>14,'n9'=>15,'n10'=>16,'n11'=>18,'n12'=>19,'n13'=>21,'n14'=>23]);
		App\Sorteo::create(['numero'=>802,'fecha'=>'2006-1-29','n1'=>1,'n2'=>3,'n3'=>5,'n4'=>8,'n5'=>9,'n6'=>10,'n7'=>12,'n8'=>13,'n9'=>15,'n10'=>16,'n11'=>18,'n12'=>20,'n13'=>23,'n14'=>24]);
		App\Sorteo::create(['numero'=>803,'fecha'=>'2006-2-5','n1'=>3,'n2'=>4,'n3'=>5,'n4'=>7,'n5'=>8,'n6'=>9,'n7'=>10,'n8'=>11,'n9'=>12,'n10'=>13,'n11'=>15,'n12'=>18,'n13'=>19,'n14'=>25]);
		App\Sorteo::create(['numero'=>804,'fecha'=>'2006-2-12','n1'=>1,'n2'=>2,'n3'=>3,'n4'=>6,'n5'=>9,'n6'=>11,'n7'=>12,'n8'=>13,'n9'=>14,'n10'=>17,'n11'=>18,'n12'=>19,'n13'=>24,'n14'=>25]);
		App\Sorteo::create(['numero'=>805,'fecha'=>'2006-2-19','n1'=>1,'n2'=>4,'n3'=>5,'n4'=>6,'n5'=>7,'n6'=>8,'n7'=>11,'n8'=>14,'n9'=>15,'n10'=>17,'n11'=>18,'n12'=>19,'n13'=>20,'n14'=>24]);
		App\Sorteo::create(['numero'=>806,'fecha'=>'2006-2-26','n1'=>1,'n2'=>3,'n3'=>6,'n4'=>9,'n5'=>10,'n6'=>13,'n7'=>15,'n8'=>18,'n9'=>19,'n10'=>21,'n11'=>22,'n12'=>23,'n13'=>24,'n14'=>25]);
		App\Sorteo::create(['numero'=>807,'fecha'=>'2006-3-5','n1'=>1,'n2'=>2,'n3'=>5,'n4'=>6,'n5'=>8,'n6'=>10,'n7'=>15,'n8'=>18,'n9'=>19,'n10'=>20,'n11'=>21,'n12'=>22,'n13'=>24,'n14'=>25]);
    }
}
