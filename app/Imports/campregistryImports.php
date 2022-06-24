<?php

namespace App\Imports;

use App\Models\campregistry;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class campregistryImports implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new campregistry([

            'fname'=>$row['fname'],
            'lname'=>$row['lname'],
            'idno'=>$row['idno'],
            'constituency'=>$row['constituency'],
            'ward'=>$row['ward'],
            'location'=>$row['location'],
            'village'=>$row['village'],
            'occupation'=>$row['occupation'],
            'phonenumber'=>$row['phonenumber']
        ]);
    }
}
