<?php

namespace App\Exports;

use App\evale;
use Maatwebsite\Excel\Concerns\FromCollection;

class EvalesExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return evale::all();
    }
}
