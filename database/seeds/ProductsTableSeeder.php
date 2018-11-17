<?php
use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
        	'name'=>'Kyokai no Kanata Vol 1',
        	'slug'=>'Kyokai no Kanata Vol 1',
        	'details'=>'Japanese Edition',
        	'price'=>1499,
        	'description'=>'Kyōkai no Kanata es una novela ligera escrita por Nagomu Torii, con ilustraciones de Chise Kamoi. La serie de novelas ligeras de tres volúmenes fue galardonada con una mención honorífica en el concurso del Premio de Animación de Kyoto en 2011, y fue publicado por Kyoto Animation entre junio de 2012 y abril de 2013.​',
			 


	        ]);
	       Product::create([
            'name'=>'Kyokai no Kanata Vol 2',
            'slug'=>'Kyokai no Kanata Vol 2',
            'details'=>'Japanese Edition',
            'price'=>1499,
            'description'=>'Kyōkai no Kanata es una novela ligera escrita por Nagomu Torii, con ilustraciones de Chise Kamoi. La serie de novelas ligeras de tres volúmenes fue galardonada con una mención honorífica en el concurso del Premio de Animación de Kyoto en 2011, y fue publicado por Kyoto Animation entre junio de 2012 y abril de 2013.​',
             


            ]);

            Product::create([
            'name'=>'Kyokai no Kanata Vol 3',
            'slug'=>'Kyokai no Kanata Vol 3',
            'details'=>'Japanese Edition',
            'price'=>1499,
            'description'=>'Kyōkai no Kanata es una novela ligera escrita por Nagomu Torii, con ilustraciones de Chise Kamoi. La serie de novelas ligeras de tres volúmenes fue galardonada con una mención honorífica en el concurso del Premio de Animación de Kyoto en 2011, y fue publicado por Kyoto Animation entre junio de 2012 y abril de 2013.​',
             


            ]);
            Product::create([
            'name'=>'No Game, No Life Vol 1',
            'slug'=>'No Game, No Life Vol 1',
            'details'=>'Japanese Edition',
            'price'=>1499,
            'description'=>'No Game No Life is a light novel series by Yū Kamiya. It is published under the MF Bunko J imprint with nine novels released between April 25, 2012, and August 25, 2016. The author and his wife, Mashiro Hiiragi, adapted the novels into a manga series for Monthly Comic Alive in 2013. ',
             


            ]);
            Product::create([
            'name'=>'No Game, No Life Vol 2',
            'slug'=>'No Game, No Life Vol 2',
            'details'=>'Japanese Edition',
            'price'=>1499,
            'description'=>'No Game No Life is a light novel series by Yū Kamiya. It is published under the MF Bunko J imprint with nine novels released between April 25, 2012, and August 25, 2016. The author and his wife, Mashiro Hiiragi, adapted the novels into a manga series for Monthly Comic Alive in 2013. ',
             


            ]);
            Product::create([
            'name'=>'No Game, No Life Vol 3',
            'slug'=>'No Game, No Life Vol 3',
            'details'=>'Japanese Edition',
            'price'=>1499,
            'description'=>'No Game No Life is a light novel series by Yū Kamiya. It is published under the MF Bunko J imprint with nine novels released between April 25, 2012, and August 25, 2016. The author and his wife, Mashiro Hiiragi, adapted the novels into a manga series for Monthly Comic Alive in 2013. ',
             


            ]);
           
           
    }
}
