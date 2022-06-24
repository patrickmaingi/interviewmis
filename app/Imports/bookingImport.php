<?php

namespace App\Imports;

use App\Models\booking;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class bookingImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new booking([
            //'bookingID'=> $row['bookingID'],
            'parkingzone'=> $row['parkingzone'],
            'mvtype'=> $row['mvtype'],
            'plateno'=> $row['plateno'],
            'amount'=> $row['amount']
        ]);
    }
}
