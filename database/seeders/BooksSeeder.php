<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                "title" => "Photography",
                "img" => "img/templatemo_image_01.jpg",
                "cost" => "55",
                "author" => "By Deke McClelland",
                "pages" => "489",
                "release" => "January 2024",
                "details" => "Photography is the art, application, and practice of creating durable images by recording light, either electronically by means of an image sensor, or chemically by means of a light-sensitive material such as photographic film. It is employed in many fields of science, manufacturing (e.g., photolithography), and business, as well as its more direct uses for art, film and video production, recreational purposes, hobby, and mass communication."
            ], [
                "title" => "Cooking",
                "img" => "img/templatemo_image_02.jpg",
                "cost" => "65",
                "author" => "By John Dalton",
                "pages" => "1000",
                "release" => "March 2024",
                "details" => "Cooking or cookery is the art, science, and craft of using heat to prepare food for consumption. Cooking techniques and ingredients vary widely across the world, from grilling food over an open fire to using electric stoves, to baking in various types of ovens, reflecting unique environmental, economic, and cultural traditions and trends. \n Types of cooking also depend on the skill levels and training of cooks. Cooking is done both by people in their own dwellings and by professional cooks and chefs in restaurants and other food establishments. Cooking can also occur through chemical reactions without the presence of heat, such as in ceviche, a traditional South American dish where fish is cooked with the acids in lemon or lime juice or orange juice."
            ], [
                "title" => "Gardening",
                "img" => "img/templatemo_image_03.jpg",
                "cost" => "30",
                "author" => "By Lucas Smith",
                "pages" => "432",
                "release" => "March 2022",
                "details" => "Gardening is the practice of growing and cultivating plants as part of horticulture. In gardens, ornamental plants are often grown for their flowers, foliage, or overall appearance; useful plants, such as root vegetables, leaf vegetables, fruits, and herbs, are grown for consumption, for use as dyes, or for medicinal or cosmetic use."
            ], [
                "title" => "Sushi Book",
                "img" => "img/templatemo_image_04.jpg",
                "cost" => "25",
                "author" => "By Nakamura Okorogi",
                "pages" => "823",
                "release" => "March 2022",
                "details" => "Sushi is a traditional Japanese dish of prepared vinegared rice, usually with some sugar and salt, accompanying a variety of ingredients, such as seafood, often raw, and vegetables. Styles of sushi and its presentation vary widely, but the one key ingredient is 'sushi rice', also referred to as shari, or sumeshi."
            ]
        ];
        foreach ($data as $key => $value) {
            DB::table('books')->insert($value);
        }
    }
}
