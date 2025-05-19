<?php

namespace Database\Seeders;

use App\Models\PageConfig;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PageConfigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        PageConfig::create([
            'title' => "Faiz Izaz Fathoni",
            'detail' =>  "The Best I Ever Had",
            'image' => ""
        ]);
    }
}
