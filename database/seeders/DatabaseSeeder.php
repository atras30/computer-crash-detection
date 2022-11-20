<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Disease;
use App\Models\DiseaseRelation;
use App\Models\Symptom;
use Illuminate\Database\Seeder;
use App\Models\User;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(100)->create();

        User::create([
            'name' => 'Atras Shalhan',
            'email' => 'atrasshalhan@gmail.com',
            'password' => bcrypt('testing12345'),
        ]);

        Symptom::create([
            'body' => 'Tidak ada gambar tampil pada monitor',
        ]);

        Symptom::create([
            'body' => 'Terdapat garis horizontal/vertikal ditengah monitor',
        ]);

        Symptom::create([
            'body' => 'Tidak ada tampilan awal bios',
        ]);

        Symptom::create([
            'body' => 'Muncul pesan error pada bios',
        ]);

        Symptom::create([
            'body' => 'Alarm BIOS berbunyi',
        ]);

        Symptom::create([
            'body' => 'Terdengar suara aneh pada HDD',
        ]);

        Symptom::create([
            'body' => 'Sering terjadi hang/crash saat menjalankan aplikasi',
        ]);

        Symptom::create([
            'body' => 'Selalu scandisk ketika booting',
        ]);

        Symptom::create([
            'body' =>
                'Muncul pesan error saat menjalankan game atau aplikasi grafis ',
        ]);

        Symptom::create([
            'body' =>
                'Device driver informasi tidak terdeteksi dalam device manager, meski driver telah diinstal',
        ]);

        Symptom::create([
            'body' => 'Tiba-tiba bios melakukan restart otomatis',
        ]);

        Symptom::create([
            'body' => 'Keluarnya blue screen pada OS windows ',
        ]);

        Symptom::create([
            'body' =>
                'Suara tetap tidak keluar meskipun driverdan setting device telah Dilakukan sesuai petunjuk',
        ]);

        Symptom::create([
            'body' => 'Muncul pesan error saat menjalankan aplikasi audio ',
        ]);

        Symptom::create([
            'body' => 'Muncul pesan error saat pertama OS di load dari HDD',
        ]);

        Symptom::create([
            'body' =>
                'Tidak ada tanda-tanda sebagian atau seluruh perangakat bekerja (Semua kipas pendingin tidak berputar) ',
        ]);

        Symptom::create([
            'body' => 'Sering tiba-tiba mati tanpa sebab ',
        ]);

        Symptom::create([
            'body' =>
                'Muncul pesan pada windows, bahwa windows kekurangan virtual memory',
        ]);

        Symptom::create([
            'body' =>
                'Aplikasi berjalan dengan lambat, respon yang lambat terhadap inputan',
        ]);

        Symptom::create([
            'body' =>
                'Kinerja grafis terasa sangat berat (Biasanya pada game dan Manipulasi gambar',
        ]);

        Symptom::create([
            'body' => 'Device tidak terdeteksi dalam bios',
        ]);

        Symptom::create([
            'body' => 'Informasi terdeteksi yang salah dalam bios',
        ]);

        Symptom::create([
            'body' => 'Hanya sebagian perangkat yang bekerja',
        ]);

        Symptom::create([
            'body' => 'Sebagian atau seluruh inputan mati',
        ]);

        // === DISEASE ===
        Disease::create([
            'body' => 'Monitor Rusak',
            'path' => 'monitor_rusak.jpeg'
        ]);

        Disease::create([
            'body' => 'Memori Rusak',
            'path' => 'memori_rusak.jpg'
        ]);

        Disease::create([
            'body' => 'HDD Rusak',
            'path' => 'hdd_rusak.jpeg'
        ]);

        Disease::create([
            'body' => 'VGA Rusak',
            'path' => 'vga_rusak.jpg'
        ]);

        Disease::create([
            'body' => 'Sound Card Rusak',
            'path' => 'sound_card_rusak.jpeg'
        ]);

        Disease::create([
            'body' => 'OS Bermasalah',
            'path' => 'os_bermasalah.png'
        ]);

        Disease::create([
            'body' => 'Aplikasi Crash/Rusak',
            'path' => 'aplikasi_crash.png'
        ]);

        Disease::create([
            'body' => 'Power Suply Rusak',
            'path' => 'power_suply_rusak.jpg'
        ]);

        Disease::create([
            'body' => 'Prosesor Rusak',
            'path' => 'processor_rusak.jpg'
        ]);

        Disease::create([
            'body' => 'Memory Kurang',
            'path' => 'memori_penuh.jpeg'
        ]);

        Disease::create([
            'body' => 'Memory VGA Kurang',
            'path' => 'memori_vga_kurang.jpeg'
        ]);

        Disease::create([
            'body' => 'Clock Prosesor Kurang Tinggi',
            'path' => 'clock_processor_kurang_tinggi.jpeg'
        ]);

        Disease::create([
            'body' => 'Kabel IDE/SATA/ATA Rusak',
            'path' => 'kabel_sata_rusak.jpeg'
        ]);

        Disease::create([
            'body' => 'Kurang Daya Pada PSU',
            'path' => 'kurang_daya_pada_psu.jpg'
        ]);

        Disease::create([
            'body' => 'Perangakat USB rusak',
            'path' => 'perangkat_usb_rusak.jpg'
        ]);

        Disease::create([
            'body' => 'Keyboard Rusak',
            'path' => 'keyboard_rusak.jpeg'
        ]);

        Disease::create([
            'body' => 'Mouse Rusak',
            'path' => 'mouse_rusak.jpeg'
        ]);

        DiseaseRelation::create([
            'disease_id' => 1,
            'symptom_id' => 1
        ]);

        DiseaseRelation::create([
            'disease_id' => 1,
            'symptom_id' => 2
        ]);


        DiseaseRelation::create([
            'disease_id' => 2,
            'symptom_id' => 3
        ]);
        DiseaseRelation::create([
            'disease_id' => 2,
            'symptom_id' => 4
        ]);
        DiseaseRelation::create([
            'disease_id' => 2,
            'symptom_id' => 5
        ]);
        DiseaseRelation::create([
            'disease_id' => 2,
            'symptom_id' => 11
        ]);

        DiseaseRelation::create([
            'disease_id' => 2,
            'symptom_id' => 12
        ]);

        DiseaseRelation::create([
            'disease_id' => 3,
            'symptom_id' => 6
        ]);
        DiseaseRelation::create([
            'disease_id' => 3,
            'symptom_id' => 7
        ]);
        DiseaseRelation::create([
            'disease_id' => 3,
            'symptom_id' => 8
        ]);
        DiseaseRelation::create([
            'disease_id' => 3,
            'symptom_id' => 10
        ]);
        DiseaseRelation::create([
            'disease_id' => 3,
            'symptom_id' => 21
        ]);
        DiseaseRelation::create([
            'disease_id' => 3,
            'symptom_id' => 22
        ]);


        DiseaseRelation::create([
            'disease_id' => 4,
            'symptom_id' => 1
        ]);

        DiseaseRelation::create([
            'disease_id' => 4,
            'symptom_id' => 3
        ]);

        DiseaseRelation::create([
            'disease_id' => 4,
            'symptom_id' => 5
        ]);

        DiseaseRelation::create([
            'disease_id' => 4,
            'symptom_id' => 9
        ]);

        DiseaseRelation::create([
            'disease_id' => 4,
            'symptom_id' => 10
        ]);

        DiseaseRelation::create([
            'disease_id' => 4,
            'symptom_id' => 12
        ]);

        DiseaseRelation::create([
            'disease_id' => 4,
            'symptom_id' => 13
        ]);

        DiseaseRelation::create([
            'disease_id' => 5,
            'symptom_id' => 10
        ]);

        DiseaseRelation::create([
            'disease_id' => 5,
            'symptom_id' => 13
        ]);

        DiseaseRelation::create([
            'disease_id' => 5,
            'symptom_id' => 14
        ]);

        DiseaseRelation::create([
            'disease_id' => 6,
            'symptom_id' => 11
        ]);

        DiseaseRelation::create([
            'disease_id' => 6,
            'symptom_id' => 12
        ]);

        DiseaseRelation::create([
            'disease_id' => 6,
            'symptom_id' => 15
        ]);

        DiseaseRelation::create([
            'disease_id' => 7,
            'symptom_id' => 7
        ]);

        DiseaseRelation::create([
            'disease_id' => 7,
            'symptom_id' => 12
        ]);

        DiseaseRelation::create([
            'disease_id' => 8,
            'symptom_id' => 16
        ]);

        DiseaseRelation::create([
            'disease_id' => 8,
            'symptom_id' => 17
        ]);

        DiseaseRelation::create([
            'disease_id' => 9,
            'symptom_id' => 1
        ]);

        DiseaseRelation::create([
            'disease_id' => 9,
            'symptom_id' => 3
        ]);

        DiseaseRelation::create([
            'disease_id' => 9,
            'symptom_id' => 4
        ]);

        DiseaseRelation::create([
            'disease_id' => 9,
            'symptom_id' => 5
        ]);

        DiseaseRelation::create([
            'disease_id' => 10,
            'symptom_id' => 18
        ]);

        DiseaseRelation::create([
            'disease_id' => 10,
            'symptom_id' => 19
        ]);

        DiseaseRelation::create([
            'disease_id' => 11,
            'symptom_id' => 20
        ]);

        DiseaseRelation::create([
            'disease_id' => 12,
            'symptom_id' => 9
        ]);

        DiseaseRelation::create([
            'disease_id' => 12,
            'symptom_id' => 19
        ]);

        DiseaseRelation::create([
            'disease_id' => 13,
            'symptom_id' => 21
        ]);

        DiseaseRelation::create([
            'disease_id' => 14,
            'symptom_id' => 5
        ]);

        DiseaseRelation::create([
            'disease_id' => 14,
            'symptom_id' => 23
        ]);

        DiseaseRelation::create([
            'disease_id' => 15,
            'symptom_id' => 10
        ]);

        DiseaseRelation::create([
            'disease_id' => 16,
            'symptom_id' => 10
        ]);

        DiseaseRelation::create([
            'disease_id' => 16,
            'symptom_id' => 24
        ]);

        DiseaseRelation::create([
            'disease_id' => 17,
            'symptom_id' => 10
        ]);
    }
}
