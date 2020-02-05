<?php

namespace App\Imports;

use App\evale;
use Maatwebsite\Excel\Concerns\ToModel;

class EvalesImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
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
            'duniver'    => $row['duniver'],
            'ddate'    => $row['ddate'],
            'dbran'    => $row['dbran'],
            'dsub'    => $row['dsub'],
            'buniver'    => $row['buniver'],
            'bdate'    => $row['bdate'],
            'bbran'    => $row['bbran'],
            'bsub'    => $row['bsub'],
            'muniver'    => $row['muniver'],
            'mdate'    => $row['mdate'],
            'mbran'    => $row['mbran'],
            'msub'    => $row['msub'],
            'douniver'    => $row['douniver'],
            'dodate'    => $row['dodate'],
            'dobran'    => $row['dobran'],
            'dosub'    => $row['dosub'],
            'uuniver'    => $row['uuniver'],
            'udate'    => $row['udate'],
            'ubran'    => $row['ubran'],
            'usub'    => $row['usub'],
            'des'    => $row['des'],

        ]);
    }
}
