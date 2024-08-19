<?php

namespace App\Exports;

use App\Models\Ketaon;
use Maatwebsite\Excel\Concerns\FromCollection;

class KetaonExport implements FromCollection
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Ketaon::all();
    }

    public function headings(): array
    {
        return [
            'KECAMATAN',
            'DESA',
            'DNOP',
            'PL',
            'ERDKK',
            'NIK_1',
            'ALMT_1',
            'PMLK',
            'NIK_2',
            'ALMT_2',
            'PGRP',
            'NIK_3',
            'ALMT_3',
            'PNYW',
            'NIK_4',
            'ALMT_4',
            'KL_TN',
            'BLOK',
            'JBTN',
            'JML_PTK',
            'SB_PPK',
            'ALSTN',
            'SMBR_AIR',
            'N_DI',
            'KOM_MT1',
            'KOM_MT2',
            'KOM_MT3',
            'WT_MT1',
            'WT_MT2',
            'WT_MT3',
            'PR_MT1',
            'PR_MT2',
            'PR_MT3',
            'LUAS',
        ];
    }
}
