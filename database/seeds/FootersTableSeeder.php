<?php

use Illuminate\Database\Seeder;

class FootersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('footers')->delete();
        
        \DB::table('footers')->insert(array (
            0 => 
            array (
                'footer_type' => 'html',
                'footer_value' => '{"en":"<p><img src=\\"\\/img\\/logo.png\\" height=\\"60\\" width=\\"220\\"><\\/p><p>We help you save money through our comprehensive listing of coupons, offers, deals and discounts from                    top online brands and websites.                <\\/p><p><\\/p>","fr":null}',
                'id' => 2,
                'sort_order' => 100,
                'title' => '{"en":"About Us","fr":"About Us"}',
            ),
            1 => 
            array (
                'footer_type' => 'menu',
                'footer_value' => '13',
                'id' => 4,
                'sort_order' => 200,
                'title' => '{"en":"Our Company","fr":"Our Company FR"}',
            ),
            2 => 
            array (
                'footer_type' => 'menu',
                'footer_value' => '14',
                'id' => 5,
                'sort_order' => 300,
                'title' => '{"en":"Important Links","fr":"Important Links Fe"}',
            ),
            3 => 
            array (
                'footer_type' => 'menu',
                'footer_value' => '15',
                'id' => 6,
                'sort_order' => 400,
                'title' => '{"en":"Explore","fr":"Fr Cats"}',
            ),
            4 => 
            array (
                'footer_type' => 'social',
                'footer_value' => NULL,
                'id' => 7,
                'sort_order' => 500,
                'title' => '{"en":"Follow Us","fr":"Follow Fr"}',
            ),
            5 => 
            array (
                'footer_type' => 'menu',
                'footer_value' => '36',
                'id' => 8,
                'sort_order' => 1000,
                'title' => '{"en":"abcd","fr":"abcd","hi":"abcd"}',
            ),
        ));
        
        
    }
}