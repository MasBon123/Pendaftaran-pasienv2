<?php

namespace Database\Seeders;

use App\Models\Pendaftaran;
use Illuminate\Database\Seeder;

class PendaftaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pendaftaran1 = Pendaftaran::create(['nama_pasien' => 'Jojo', 'id_keluhan' => 1,
            'tanggal_daftar' => '19 Januari 2022', 'no_telepon' => '08964728637', 'id_dokter' => 2,
            'jk' => 'Perempuan', 'jadwal_periksa' => '11.00 WIB', 'id_ruang' => 1, 'cara_bayar' => 'BPJS']);
    }
}
