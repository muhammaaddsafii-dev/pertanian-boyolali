<?php

namespace App\Listeners;

use App\Events\BanyudonoUpdated;
use Illuminate\Support\Facades\Storage;

class UpdateBanyudonoGeojson
{
    /**
     * Handle the event.
     */
    public function handle(BanyudonoUpdated $event): void
    {
        $model = $event->model;

        // Path ke file GeoJSON di S3
        $filePath = 'pertanian-boyolali/geojson-files/BANYUDONO.geojson';

        // Ambil konten GeoJSON yang ada dari S3
        $geojsonContent = Storage::disk('s3')->get($filePath);

        // Decode GeoJSON menjadi array PHP
        $geojson = json_decode($geojsonContent, true);

        // Temukan dan perbarui fitur yang sesuai dengan DNOP
        $updated = false;
        foreach ($geojson['features'] as &$feature) {
            if ($feature['properties']['DNOP'] === $model->DNOP) {
                // Perbarui hanya properties, biarkan geometry tetap sama
                $feature['properties'] = [
                    'KECAMATAN' => $model->KECAMATAN,
                    'DESA' => $model->DESA,
                    'DNOP' => $model->DNOP,
                    'PL' => $model->PL,
                    'ERDKK' => $model->ERDKK,
                    'NIK_1' => $model->NIK_1,
                    'ALMT_1' => $model->ALMT_1,
                    'PMLK' => $model->PMLK,
                    'NIK_2' => $model->NIK_2,
                    'ALMT_2' => $model->ALMT_2,
                    'PGRP' => $model->PGRP,
                    'NIK_3' => $model->NIK_3,
                    'ALMT_3' => $model->ALMT_3,
                    'PNYW' => $model->PNYW,
                    'NIK_4' => $model->NIK_4,
                    'ALMT_4' => $model->ALMT_4,
                    'KL_TN' => $model->KL_TN,
                    'BLOK' => $model->BLOK,
                    'JBTN' => $model->JBTN,
                    'JML_PTK' => $model->JML_PTK,
                    'SB_PPK' => $model->SB_PPK,
                    'ALSTN' => $model->ALSTN,
                    'SMBR_AIR' => $model->SMBR_AIR,
                    'N_DI' => $model->N_DI,
                    'KOM_MT1' => $model->KOM_MT1,
                    'KOM_MT2' => $model->KOM_MT2,
                    'KOM_MT3' => $model->KOM_MT3,
                    'WT_MT1' => $model->WT_MT1,
                    'WT_MT2' => $model->WT_MT2,
                    'WT_MT3' => $model->WT_MT3,
                    'PR_MT1' => $model->PR_MT1,
                    'PR_MT2' => $model->PR_MT2,
                    'PR_MT3' => $model->PR_MT3,
                    'LUAS' => $model->LUAS,
                ];
                $updated = true;
                break;
            }
        }

        // Jika fitur tidak ditemukan, tambahkan sebagai fitur baru
        if (!$updated) {
            $geojson['features'][] = [
                'type' => 'Feature',
                'geometry' => $model->geometry, // Menggunakan geometry yang sudah ada
                'properties' => [
                    'KECAMATAN' => $model->KECAMATAN,
                    'DESA' => $model->DESA,
                    'DNOP' => $model->DNOP,
                    'PL' => $model->PL,
                    'ERDKK' => $model->ERDKK,
                    'NIK_1' => $model->NIK_1,
                    'ALMT_1' => $model->ALMT_1,
                    'PMLK' => $model->PMLK,
                    'NIK_2' => $model->NIK_2,
                    'ALMT_2' => $model->ALMT_2,
                    'PGRP' => $model->PGRP,
                    'NIK_3' => $model->NIK_3,
                    'ALMT_3' => $model->ALMT_3,
                    'PNYW' => $model->PNYW,
                    'NIK_4' => $model->NIK_4,
                    'ALMT_4' => $model->ALMT_4,
                    'KL_TN' => $model->KL_TN,
                    'BLOK' => $model->BLOK,
                    'JBTN' => $model->JBTN,
                    'JML_PTK' => $model->JML_PTK,
                    'SB_PPK' => $model->SB_PPK,
                    'ALSTN' => $model->ALSTN,
                    'SMBR_AIR' => $model->SMBR_AIR,
                    'N_DI' => $model->N_DI,
                    'KOM_MT1' => $model->KOM_MT1,
                    'KOM_MT2' => $model->KOM_MT2,
                    'KOM_MT3' => $model->KOM_MT3,
                    'WT_MT1' => $model->WT_MT1,
                    'WT_MT2' => $model->WT_MT2,
                    'WT_MT3' => $model->WT_MT3,
                    'PR_MT1' => $model->PR_MT1,
                    'PR_MT2' => $model->PR_MT2,
                    'PR_MT3' => $model->PR_MT3,
                    'LUAS' => $model->LUAS,
                ],
            ];
        }

        // Encode kembali array menjadi GeoJSON
        $updatedGeojsonContent = json_encode($geojson);

        // Simpan kembali ke S3
        Storage::disk('s3')->put($filePath, $updatedGeojsonContent);
    }
}
