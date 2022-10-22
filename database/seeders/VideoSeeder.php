<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table("video")->insert(
          ['title'=>'Interstellar Main Theme - Extra Extended - Soundtrack by Hans Zimmer',
              'Author'=>'Cinémavore',
              'Link'=>"https://www.youtube.com/watch?v=UDVtMYqUAyw&ab_channel=Cin%C3%A9mavore",
              'Likes'=>1000100,
              'description'=>' Interstellar Main Theme - Extra Extented - Soundtrack by Hans Zimmer'
           ]
        );

        DB::table("video")->insert(
            ['title'=>'Sergio Ramos Header vs Atletico Madrid 92:48. English Commentary',
                'Author'=>'Footy7',
                'Link'=>"https://www.youtube.com/watch?v=D05EmdlsM0A&ab_channel=Footy7",
                'Likes'=>7800,
                'description'=>'Incredible header by Sergio Ramos against Atletico Madrid in Champions League Final. 6 Years ago Real Madrid claimed their 10th CL title due to this unbelievable last minute goal by Ramos.'
            ]
        );
        DB::table("video")->insert(
            ['title'=>'HIGHLIGHTS | Real Madrid 3-1 Man City (6-5 Aggregate)',
                'Author'=>'Man City',
                'Link'=>"https://www.youtube.com/watch?v=IMwwV5tizoQ&ab_channel=ManCity",
                'Likes'=>23000,
                'description'=>'  City suffered Champions League semi-final heartbreak as Real Madrid staged a stunning late fightback to clinch a 3-1 second leg win after extra time at the Bernabeu to clinch a 6-5 win on aggregate'

            ]
        );


        DB::table("video")->insert(
            ['title'=>'Real Madrid vs FC Barcelona (3-1)',
                'Author'=>'LaLiga',
                'Link'=>"https://www.youtube.com/watch?v=swLI6zuXtp4&ab_channel=LaLigaSantander",
                'Likes'=>117000,
                'description'=>'Real Madrid defeat FC Barcelona in El Clasico thanks to goals from Benzema, Fede Valverde and Rodrygo #RealMadridBarça #ElClásico Matchday 9 LaLiga Santander 2022/2023'
            ]
        );
        DB::table("video")->insert(
            ['title'=>'GeForce RTX 4090 Official Trailer',
                'Author'=>'GameSpot Trailers',

                'Link'=>"https://www.youtube.com/watch?v=J5q3AlBfg2w&ab_channel=GameSpotTrailers",
                'Likes'=>400,
                'description'=>'  Introducing the NVIDIA GeForce RTX 4090.

The GeForce RTX 4090 is the ultimate GeForce GPU delivering an enormous leap in performance, efficiency, and AI-powered graphics.

Experience ultra-high performance gaming, incredibly detailed virtual worlds with ray tracing, unprecedented productivity, and new ways to create. It’s powered by the NVIDIA Ada Lovelace architecture and comes with 24 GB of G6X memory to deliver the ultimate experience for gamers and creators.'
            ]
        );















    }
}
