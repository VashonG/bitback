<?php

use Illuminate\Database\Seeder;

class SitemapsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('sitemaps')->delete();
        
        \DB::table('sitemaps')->insert(array (
            0 => 
            array (
                'enabled' => 1,
                'frequency' => 'daily',
                'id' => 1,
                'last_updated' => '2020-08-16 19:57:20',
                'module' => 'pages',
                'priority' => '5.0',
                'slug' => 'pages',
            ),
            1 => 
            array (
                'enabled' => 1,
                'frequency' => 'daily',
                'id' => 2,
                'last_updated' => '2020-08-16 19:57:20',
                'module' => 'stores',
                'priority' => '4.0',
                'slug' => 'stores',
            ),
            2 => 
            array (
                'enabled' => 1,
                'frequency' => 'daily',
                'id' => 3,
                'last_updated' => '2020-08-16 20:22:33',
                'module' => 'store_category',
                'priority' => '3.0',
                'slug' => 'store-category',
            ),
            3 => 
            array (
                'enabled' => 1,
                'frequency' => 'daily',
                'id' => 4,
                'last_updated' => '2020-08-16 20:22:33',
                'module' => 'coupon_category',
                'priority' => '2.0',
                'slug' => 'coupon-category',
            ),
            4 => 
            array (
                'enabled' => 1,
                'frequency' => 'daily',
                'id' => 6,
                'last_updated' => '2020-08-16 19:57:20',
                'module' => 'deals',
                'priority' => '1.0',
                'slug' => 'deals',
            ),
        ));
        
        
    }
}