<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToModel;
use App\Models\Lead;
use Maatwebsite\Excel\Concerns\Importable;

class LeadImport implements ToModel
{
    /**
    * @param Collection $collection
    */
    use Importable;
    public function model(array $row)
    {
        return new Lead([
           'name'     => $row[0],
           'phone'    => $row[1],
           'email'    => $row[2],
           'subject' =>  $row[3],
           'user_id' => \Auth::user()->id,
        ]);
    }
}
