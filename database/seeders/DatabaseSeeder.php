<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        // Seed tb_alternatif
        DB::table('tb_alternatif')->insert([
            ['id_alternatif' => 'A01', 'nama_alternatif' => 'Polyproplene'],
            ['id_alternatif' => 'A02', 'nama_alternatif' => 'Plush'],
            ['id_alternatif' => 'A03', 'nama_alternatif' => 'Patterned'],
            ['id_alternatif' => 'A04', 'nama_alternatif' => 'Frieze'],
            ['id_alternatif' => 'A05', 'nama_alternatif' => 'Nilon'],
            ['id_alternatif' => 'A06', 'nama_alternatif' => 'Wol'],
        ]);

        // Seed tb_kriteria
        DB::table('tb_kriteria')->insert([
            ['id_kriteria' => 'C01', 'nama_kriteria' => 'Harga', 'atribut' => 'cost', 'bobot' => '0.20'],
            ['id_kriteria' => 'C02', 'nama_kriteria' => 'Tahan_Noda', 'atribut' => 'benefit', 'bobot' => '0.10'],
            ['id_kriteria' => 'C03', 'nama_kriteria' => 'Tebal', 'atribut' => 'benefit', 'bobot' => '0.10'],
            ['id_kriteria' => 'C04', 'nama_kriteria' => 'Kualitas', 'atribut' => 'benefit', 'bobot' => '0.30'],
            ['id_kriteria' => 'C05', 'nama_kriteria' => 'Kelenturan', 'atribut' => 'benefit', 'bobot' => '0.15'],
            ['id_kriteria' => 'C06', 'nama_kriteria' => 'Luas', 'atribut' => 'benefit', 'bobot' => '0.15'],
        ]);

        // Seed tb_nilai
        $alternatifs = DB::table('tb_alternatif')->pluck('id_alternatif');
        $kriterias = DB::table('tb_kriteria')->pluck('id_kriteria');

        foreach ($alternatifs as $alternatif) {
            foreach ($kriterias as $kriteria) {
                DB::table('tb_nilai')->insert([
                    'id_alternatif' => $alternatif,
                    'id_kriteria' => $kriteria,
                    'nilai' => round(rand() * 5), // Menghasilkan nilai acak antara 0-10
                ]);
            }
        }

        // Gunakan transaction jika Anda memiliki operasi lebih dari satu
        DB::transaction(function () {
            // Tidak ada operasi yang spesifik di sini
        });
            
         
    }
}
