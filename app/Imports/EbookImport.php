<?php

namespace App\Imports;

use App\Models\Ebook;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\WithCustomCsvSettings;

class EbookImport implements ToModel, WithStartRow, WithCustomCsvSettings
{
    public function startRow(): int
    {
        return 2;
    }

    public function getCsvSettings(): array
    {
        return [
            'delimiter' => ';'
        ];
    }
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Ebook([
            'kd_ebook'     => $row[0],
            'kd_mediakonten'     => $row[1],
            'judul'     => $row[2],
            'kategori'     => $row[3],
            'pengarang'     => $row[4],
            'penerbit'     => $row[5],
            'bahasa'     => $row[6],
        ]);
    }
}
