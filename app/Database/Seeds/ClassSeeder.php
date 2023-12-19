<?php

namespace App\Database\Seeds;
use App\Models\ClassModel;

use CodeIgniter\Database\Seeder;

class ClassSeeder extends Seeder
{
    public function run()
    {
        $classModel = new ClassModel();

        $classModel->save([
            'name_class'    => 'A'
        ]);

        $classModel->save([
            'name_class'    => 'B'
        ]);

        $classModel->save([
            'name_class'    => 'C'
        ]);

        $classModel->save([
            'name_class'    => 'D'
        ]);
    }
}
