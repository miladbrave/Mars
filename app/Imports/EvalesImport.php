<?php

namespace App\Imports;

use App\evale;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class EvalesImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        return new evale([
            'name'     => $row['name'],
            'birthday'     => $row['birthday'],
            'email'    => $row['email'],
            'phone'    => $row['phone'],
            'cellphone'    => $row['cellphone'],
            'subject'    => $row['subject'],
            'ielt'    => $row['ielt'],
            'tofel'    => $row['tofel'],
            'gmat'    => $row['gmat'],
            'gre'    => $row['gre'],
            'grade'    => $row['grade'],
            'essay'    => $row['essay'],
            'check'    => $row['check'],
            'visa'    => $row['visa'],
            'country'    => $row['country'],
            'dnum'    => $row['dnum'],
            'ddate'    => $row['ddate'],
            'dbran'    => $row['dbran'],
            'dsub'    => $row['dsub'],
            'bnum'    => $row['bnum'],
            'bdate'    => $row['bdate'],
            'bbran'    => $row['bbran'],
            'bsub'    => $row['bsub'],
            'mnum'    => $row['mnum'],
            'mdate'    => $row['mdate'],
            'mbran'    => $row['mbran'],
            'msub'    => $row['msub'],
            'donum'    => $row['donum'],
            'dodate'    => $row['dodate'],
            'dobran'    => $row['dobran'],
            'dosub'    => $row['dosub'],
            'unum'    => $row['unum'],
            'udate'    => $row['udate'],
            'ubran'    => $row['ubran'],
            'usub'    => $row['usub'],
            'des'    => $row['des'],
        ]);
    }
}
