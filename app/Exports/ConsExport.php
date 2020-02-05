<?php

namespace App\Exports;

use App\cons;
use Maatwebsite\Excel\Concerns\FromCollection;

class ConsExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return cons::all();
    }
}
