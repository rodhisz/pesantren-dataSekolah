<?php

namespace App\Imports;

use App\Models\DataSekolah;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class DataImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new DataSekolah([
            'nama' => $row['nama'],
            'nipd' => $row['nipd'],
            'jenis_kelamin' => $row['jenis_kelamin'],
            'nisn' => $row['nisn'],
            'status' => $row['status'],
            'tempat_lahir' => $row['tempat_lahir'],
            'tanggal_lahir' => $row['tanggal_lahir'],
            'nik' => $row['nik'],
            'agama' => $row['agama'],
            'alamat' => $row['alamat'],
            'kode_pos' => $row['kode_pos'],
            'anak_keberapa' => $row['anak_keberapa'],
            'jumlah_saudara' => $row['jumlah_saudara'],
            'sekolah_asal' => $row['sekolah_asal'],
            'nama_ayah_kandung' => $row['nama_ayah_kandung'],
            'nik_ayah' => $row['nik_ayah'],
            'tanggal_lahir_ayah' => $row['tanggal_lahir_ayah'],
            'pendidikan_ayah' => $row['pendidikan_ayah'],
            'pekerjaan_ayah' => $row['pekerjaan_ayah'],
            'nomor_hp_ayah' => $row['nomor_hp_ayah'],
            'nama_ibu_kandung' => $row['nama_ibu_kandung'],
            'nik_ibu' => $row['nik_ibu'],
            'tanggal_lahir_ibu' => $row['tanggal_lahir_ibu'],
            'pendidikan_ibu' => $row['pendidikan_ibu'],
            'pekerjaan_ibu' => $row['pekerjaan_ibu'],
            'nomor_hp_ibu' => $row['nomor_hp_ibu'],
            'nama_wali' => $row['nama_wali'],
            'nik_wali' => $row['nik_wali'],
            'tanggal_lahir_wali' => $row['tanggal_lahir_wali'],
            'pendidikan_wali' => $row['pendidikan_wali'],
            'pekerjaan_wali' => $row['pekerjaan_wali'],
            'nomor_hp_wali' => $row['nomor_hp_wali'],
        ]);
    }
}
