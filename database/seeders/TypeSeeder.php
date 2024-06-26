<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $types = [
            'Frotn-end',
            'Back-end',
            'Database',
        ];

        foreach($types as $type){
            $newType = new Type();
            $newType->title = $type;
            $newType->save();
        }
    }
}
