<?php

namespace App\Imports;

use App\Models\GraduantsResults;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class GraduantsResultsImport implements ToModel, WithStartRow
{

    public function startRow(): int
    {
        return 2;
    }

    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {

        return new GraduantsResults([
            'college_cumpus' => $row[0], 
            'school_faculty' => $row[1], 
            'programme' => $row[2], 
            'reg_adm_no' => $row[3], 
            'name' => $row[4],  
            'specialization' => $row[5], 
            'status' => $row[6],
            'status_msg' => $row[7]
            // 'mean_score' => $row[7], 
            // 'degree_class' => $row[8], 
            // 'level' => $row[9], 
            // 'email' => $row[10], 
            // 'phone' => $row[11], 
            // 'comments' => $row[12],
        ]);
    }
}
