<?php

namespace App\Exports;

use App\evale;
use Maatwebsite\Excel\Concerns\FromCollection;
//use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithHeadings;


class EvalesExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return evale::all();
    }
    public function headings(): array
    {
        return [
            'ردیف'     ,
            'اسم'     ,
            'تولد'     ,
            'تلفن'   ,
            'همراه'    ,
            'رشته مد نظر' ,
            'ایمیل'   ,
            'ILETS'   ,
            'TOEFL'  ,
            'GMAT'    ,
            'GRE'    ,
            'مقطع مد نظر'  ,
            'مقالات علمی'  ,
            'check'  ,
            'ویزا'   ,
            'کشور مد نظر',
            '',
            'دیپلم معدل' ,
            'دیپلم تاریخ اخذ'   ,
            'دیپلم گرایش'   ,
            'دیپلم رشته'    ,
            '',
            'لیسانس نمره' ,
            'لیسانس تاریخ اخذ'   ,
            'لیسانس گرایش'   ,
            'لیسانس رشته'    ,
            '',
            'فوق لیسانس نمره' ,
            'فوق لیسانس تاریخ اخذ'   ,
            'فوق لیسانس گرایش'   ,
            'فوق لیسانس رشته'    ,
            '',
            'دکترا معدل' ,
            'دکترا تاریخ اخذ'   ,
            'دکترا گرایش'   ,
            'دکترا رشته'    ,
            '',
            'فوق دکترا معدل'    ,
            'فوق دکترا تاریخ اخذ'    ,
            'فوق دکترا گرایش'    ,
            'فوق دکترا رشته'   ,
            'توضیحات'    ,
        ];
    }
}
