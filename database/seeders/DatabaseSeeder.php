<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Str;
Use Hash;
use Carbon\Carbon;
// DEFAULT AUTHENTIKASI
use App\Models\User;
use App\Models\Dosen;
use App\Models\Mahasiswa;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Administrator',
            'code' => Str::random(6),
            'user' => 'admin',
            'gend' => 'L',
            'email' => 'siakad@gmail.com',
            'phone' => '080012345660',
            'password' => Hash::make('Admin123'),
            'status' => 1,
        ]);
        User::create([
            'name' => 'Staff Finance',
            'code' => Str::random(6),
            'user' => 'finance',
            'gend' => 'L',
            'type' => 1,
            'email' => 'finance@example.com',
            'phone' => '080012345661',
            'password' => Hash::make('Admin123'),
            'status' => 1,
        ]);
        User::create([
            'name' => 'Staff Officer',
            'code' => Str::random(6),
            'user' => 'officer',
            'gend' => 'L',
            'type' => 2,
            'email' => 'officer@example.com',
            'phone' => '080012345662',
            'password' => Hash::make('Admin123'),
            'status' => 1,
        ]);
        User::create([
            'name' => 'Staff Akademik',
            'code' => Str::random(6),
            'user' => 'academic',
            'gend' => 'L',
            'type' => 3,
            'email' => 'academic@example.com',
            'phone' => '080012345663',
            'password' => Hash::make('Admin123'),
            'status' => 1,
        ]);
        User::create([
            'name' => 'Staff Support',
            'code' => Str::random(6),
            'user' => 'support',
            'gend' => 'L',
            'type' => 5,
            'email' => 'support@example.com',
            'phone' => '080012345665',
            'password' => Hash::make('Admin123'),
            'status' => 1,
        ]);
        Dosen::create([
            'dsn_nidn' => str_pad(rand(0, 9999999999), 10, '0', STR_PAD_LEFT),
            'dsn_stat' => '1',
            'dsn_name' => 'Dosen A',
            'dsn_code' => Str::random(6),
            'dsn_user' => 'dosen.a',
            'dsn_gend' => 'L',
            'dsn_mail' => 'dosen.a@example.com',
            'dsn_phone' => '080012345671',
            'password' => Hash::make('Dosen123'),
        ]);
        Dosen::create([
            'dsn_nidn' => str_pad(rand(0, 9999999999), 10, '0', STR_PAD_LEFT),
            'dsn_stat' => '1',
            'dsn_name' => 'Dosen B',
            'dsn_code' => Str::random(6),
            'dsn_user' => 'dosen.b',
            'dsn_gend' => 'P',
            'dsn_mail' => 'dosen.b@example.com',
            'dsn_phone' => '080012345672',
            'password' => Hash::make('Dosen123'),
        ]);
        Dosen::create([
            'dsn_nidn' => str_pad(rand(0, 9999999999), 10, '0', STR_PAD_LEFT),
            'dsn_stat' => '1',
            'dsn_name' => 'Dosen C',
            'dsn_code' => Str::random(6),
            'dsn_user' => 'dosen.c',
            'dsn_gend' => 'P',
            'dsn_mail' => 'dosen.c@example.com',
            'dsn_phone' => '080012345673',
            'password' => Hash::make('Dosen123'),
        ]);
        Dosen::create([
            'dsn_nidn' => str_pad(rand(0, 9999999999), 10, '0', STR_PAD_LEFT),
            'dsn_stat' => '1',
            'dsn_name' => 'Dosen D',
            'dsn_code' => Str::random(6),
            'dsn_user' => 'dosen.d',
            'dsn_gend' => 'P',
            'dsn_mail' => 'dosen.d@example.com',
            'dsn_phone' => '080012345674',
            'password' => Hash::make('Dosen123'),
        ]);
        Mahasiswa::create([
            'taka_id' => '1',
            'class_id' => '1',
            'mhs_nim' => str_pad(rand(0, 9999999999), 10, '0', STR_PAD_LEFT),
            'mhs_name' => 'Mahasiswa A',
            'mhs_stat' => '1',
            'mhs_gend' => 'L',
            'mhs_code' => Str::random(6),
            'mhs_user' => 'mahasiswa.a',
            'mhs_mail' => 'mahasiswa.a@example.com',
            'mhs_phone' => '080012345670',
            'password' => Hash::make('Mahasiswa123'),
        ]);
        Mahasiswa::create([
            'taka_id' => '1',
            'class_id' => '1',
            'mhs_nim' => str_pad(rand(0, 9999999999), 10, '0', STR_PAD_LEFT),
            'mhs_name' => 'Mahasiswa B',
            'mhs_stat' => '1',
            'mhs_gend' => 'L',
            'mhs_code' => Str::random(6),
            'mhs_user' => 'mahasiswa.b',
            'mhs_mail' => 'mahasiswa.b@example.com',
            'mhs_phone' => '080012345671',
            'password' => Hash::make('Mahasiswa123'),
        ]);
        Mahasiswa::create([
            'taka_id' => '2',
            'class_id' => '2',
            'mhs_nim' => str_pad(rand(0, 9999999999), 10, '0', STR_PAD_LEFT),
            'mhs_name' => 'Mahasiswa C',
            'mhs_stat' => '1',
            'mhs_gend' => 'P',
            'mhs_code' => Str::random(6),
            'mhs_user' => 'mahasiswa.c',
            'mhs_mail' => 'mahasiswa.c@example.com',
            'mhs_phone' => '080012345672',
            'password' => Hash::make('Mahasiswa123'),
        ]);
        Mahasiswa::create([
            'taka_id' => '2',
            'class_id' => '2',
            'mhs_nim' => str_pad(rand(0, 9999999999), 10, '0', STR_PAD_LEFT),
            'mhs_name' => 'Mahasiswa D',
            'mhs_stat' => '1',
            'mhs_gend' => 'L',
            'mhs_code' => Str::random(6),
            'mhs_user' => 'mahasiswa.d',
            'mhs_mail' => 'mahasiswa.d@example.com',
            'mhs_phone' => '080012345673',
            'password' => Hash::make('Mahasiswa123'),
        ]);


        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // SEEDER KHUSUS DATA MASTER AKADEMIK
        \App\Models\Fakultas::create([
            'name'       => 'Fakultas Ilmu Komputer',
            'code'       => 'FIK',
            'head_id'    => '1',
        ]);
        \App\Models\ProgramStudi::create([
            'name'       => 'Teknik Informatika',
            'code'       => 'TI',
            'cnim'       => '4210',
            'title'      => ', S.Kom',
            'level'      => 'S-1',
            'slug'       => Str::slug('Teknik Informatika'),
            'head_id'    => '1',
            'faku_id'    => '1',
        ]);
        \App\Models\ProgramStudi::create([
            'name'       => 'Sistem Informasi',
            'code'       => 'SI',
            'cnim'       => '4211',
            'title'      => ', S.Kom',
            'level'      => 'S-1',
            'slug'       => Str::slug('Sistem Informasi'),
            'head_id'    => '1',
            'faku_id'    => '1',
        ]);
        \App\Models\TahunAkademik::create([
            'name'       => 'TA. 2023/2024',
            'code'       => '012023',
            'semester'   => '1',
            'year_start' => '2023',
        ]);
        \App\Models\TahunAkademik::create([
            'name'       => 'TA. 2023/2024',
            'code'       => '022023',
            'semester'   => '2',
            'year_start' => '2023',
        ]);
        \App\Models\ProgramKuliah::create([
            'name'       => 'Regular Pagi',
            'code'       => 'G1RP-2023',
            'wave'       => 'Gelombang I',
            'taka_id'    => '1',
            'pstudi_id'  => '1',
        ]);
        \App\Models\Kurikulum::create([
            'name'       => 'Kurikulum 2020',
            'code'       => 'K20',
            'desc'       => 'Kurikulum 2020 adalah kurikulum dirancang 25 Tahun',
            'year_start' => '2019',
            'year_ended' => '2024',
        ]);
        \App\Models\MataKuliah::create([
            'name'       => 'Jaringan Komputer Dasar',
            'code'       => 'JKD',
            'desc'       => 'Matakuliah yang membahas mengenai jaringan komputer dasar',
            'bsks'       => '20',
            'kuri_id'    => '1',
            'taka_id'    => '1',
            'dosen_1'    => '1',
            'dosen_2'    => '2',
            'pstudi_id'  => '1',
        ]);
        \App\Models\MataKuliah::create([
            'name'       => 'Jaringan Komputer Expert',
            'code'       => 'JKE',
            'desc'       => 'Matakuliah yang membahas mengenai jaringan komputer dasar',
            'bsks'       => '20',
            'kuri_id'    => '1',
            'taka_id'    => '2',
            'dosen_1'    => '2',
            'pstudi_id'  => '1',
        ]);
        \App\Models\Kelas::create([
            'name'       => 'TI-2023-RP-1A',
            'code'       => 'TI-2023-RP-1A',
            'capacity'   => '32',
            'dosen_id'   => '1',
            'proku_id'   => '1',
            'taka_id'    => '1',
            'pstudi_id'  => '1',
        ]);
        \App\Models\Kelas::create([
            'name'       => 'TI-2023-RP-1B',
            'code'       => 'TI-2023-RP-1B',
            'capacity'   => '32',
            'dosen_id'   => '2',
            'proku_id'   => '1',
            'taka_id'    => '1',
            'pstudi_id'  => '1',
        ]);
        \App\Models\JadwalKuliah::create([
            'makul_id'  => '1',
            'kelas_id'  => '1',
            'dosen_id'  => '1',
            'ruang_id'  => '1',
            'pert_id'  => '1',
            'meth_id'  => '1',
            'days_id'  => '1',
            'bsks'  => '3',
            'code'  => Str::random(8),
            'date'  => now()->format('Y-m-d'),
            'start'  => '01:00:00',
            'ended'  => '23:00:00',

        ]);
        \App\Models\JadwalKuliah::create([
            'makul_id'  => '1',
            'kelas_id'  => '2',
            'dosen_id'  => '1',
            'ruang_id'  => '1',
            'pert_id'  => '1',
            'meth_id'  => '1',
            'days_id'  => '1',
            'bsks'  => '3',
            'code'  => Str::random(8),
            'date'  => now()->format('Y-m-d'),
            'start'  => '01:00:00',
            'ended'  => '23:00:00',

        ]);
        \App\Models\JadwalKuliah::create([
            'makul_id'  => '1',
            'kelas_id'  => '2',
            'dosen_id'  => '1',
            'ruang_id'  => '1',
            'pert_id'  => '2',
            'meth_id'  => '1',
            'days_id'  => '1',
            'bsks'  => '3',
            'code'  => Str::random(8),
            'date'  => now()->format('Y-m-d'),
            'start'  => '01:00:00',
            'ended'  => '23:00:00',

        ]);
        \App\Models\JadwalKuliah::create([
            'makul_id'  => '1',
            'kelas_id'  => '1',
            'dosen_id'  => '1',
            'ruang_id'  => '1',
            'pert_id'  => '2',
            'meth_id'  => '1',
            'days_id'  => '1',
            'bsks'  => '3',
            'code'  => Str::random(8),
            'date'  => now()->format('Y-m-d'),
            'start'  => '01:00:00',
            'ended'  => '23:00:00',

        ]);

        // SEEDER KHUSUS DATA MASTER INVENTARIS
        \App\Models\Gedung::create([
            'name'       => 'Area Luar Kampus',
            'code'       => 'ALK',
        ]);
        \App\Models\Gedung::create([
            'name'       => 'Area Sekitar Gedung',
            'code'       => 'ASG',
        ]);
        \App\Models\Gedung::create([
            'name'       => 'Gedung A',
            'code'       => 'GDA',
        ]);
        \App\Models\Ruang::create([
            'gedu_id'    => '3',
            'floor'      => '1',
            'type'       => '1',
            'name'       => 'Kelas 101',
            'code'       => 'C-101',
        ]);
        \App\Models\Ruang::create([
            'gedu_id'    => '3',
            'floor'      => '1',
            'type'       => '1',
            'name'       => 'Kelas 102',
            'code'       => 'C-102',
        ]);
        \App\Models\Ruang::create([
            'gedu_id'    => '3',
            'floor'      => '1',
            'type'       => '1',
            'name'       => 'Kelas 103',
            'code'       => 'C-103',
        ]);

        // TAGIHAN KULIAH
        \App\Models\TagihanKuliah::create([
            'users_id'    => '1',
            'name'    => 'UKT Semester 1',
            'code'    => 'UKT-'.Str::random(8),
            'price'    => '2400000',
        ]);
        // TAGIHAN KULIAH
        \App\Models\TagihanKuliah::create([
            'proku_id'    => '1',
            'name'    => 'UKT Semester 2',
            'code'    => 'UKT-'.Str::random(8),
            'price'    => '2200000',
        ]);
        // DEFAULT TUGAS SEEDER
        \App\Models\studentTask::create([
            'dosen_id'    => '1',
            'jadkul_id'    => '1',
            'code'    => Str::random(8),
            'title'    => 'First Task',
            'detail_task'    => 'First Task Deskription',
            'exp_date'  => Carbon::now()->addDays(7),
            'exp_time'  => Carbon::now()->addHours(12),
        ]);
        \App\Models\studentTask::create([
            'dosen_id'    => '1',
            'jadkul_id'    => '2',
            'code'    => Str::random(8),
            'title'    => 'First Task',
            'detail_task'    => 'First Task Deskription',
            'exp_date'  => Carbon::now()->addDays(7),
            'exp_time'  => Carbon::now()->addHours(12),
        ]);
        \App\Models\studentTask::create([
            'dosen_id'    => '1',
            'jadkul_id'    => '3',
            'code'    => Str::random(8),
            'title'    => 'Second Task',
            'detail_task'    => 'Second Task Deskription',
            'exp_date'  => Carbon::now()->addDays(7),
            'exp_time'  => Carbon::now()->addHours(12),
        ]);
        \App\Models\studentTask::create([
            'dosen_id'    => '1',
            'jadkul_id'    => '4',
            'code'    => Str::random(8),
            'title'    => 'Second Task',
            'detail_task'    => 'Second Task Deskription',
            'exp_date'  => Carbon::now()->addDays(7),
            'exp_time'  => Carbon::now()->addHours(12),
        ]);

        // Kategori Berita
        $categories = [
            ['name' => 'Teknologi', 'desc' => 'Berita seputar teknologi'],
            ['name' => 'Bisnis', 'desc' => 'Berita seputar dunia bisnis'],
            ['name' => 'Kesehatan', 'desc' => 'Berita seputar kesehatan'],
            ['name' => 'Sains', 'desc' => 'Berita seputar ilmu pengetahuan'],
            ['name' => 'Hiburan', 'desc' => 'Berita seputar dunia hiburan'],
            ['name' => 'Olahraga', 'desc' => 'Berita seputar olahraga'],
            ['name' => 'Politik', 'desc' => 'Berita seputar politik'],
            ['name' => 'Mode', 'desc' => 'Berita seputar dunia mode'],
            ['name' => 'Travel', 'desc' => 'Berita seputar perjalanan'],
            ['name' => 'Makanan', 'desc' => 'Berita seputar makanan'],
            ['name' => 'Pendidikan', 'desc' => 'Berita seputar dunia pendidikan'],
            ['name' => 'Lingkungan', 'desc' => 'Berita seputar lingkungan'],
            ['name' => 'Gaya Hidup', 'desc' => 'Berita seputar gaya hidup'],
            ['name' => 'Opini', 'desc' => 'Opini dan pandangan'],
            ['name' => 'Cuaca', 'desc' => 'Berita seputar cuaca'],
            ['name' => 'Seni', 'desc' => 'Berita seputar seni'],
            ['name' => 'Film', 'desc' => 'Berita seputar dunia film'],
            ['name' => 'Musik', 'desc' => 'Berita seputar musik'],
            ['name' => 'Buku', 'desc' => 'Berita seputar dunia literatur'],
            ['name' => 'Ekonomi', 'desc' => 'Berita seputar ekonomi'],
        ];

        foreach ($categories as $category) {
            \App\Models\newsCategory::create([
                'name' => $category['name'],
                'code' => Str::random(6),
                'slug' => Str::slug($category['name']),
                'desc' => $category['desc'],
            ]);
        }

        \App\Models\newsPost::create([
            'category_id'    => '1',
            'author_id'    => '1',
            'name'    => 'Sample Post First',
            'code'    => Str::random(6),
            'slug'    => 'sample-post-first',
            'image'    => 'default/default-profile.jpg',
            'metadesc'    => 'Meta Descriptsion Sample',
            'keywords'    => 'Keywords 1, Keywords 2, Keywords 3',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, omnis quibusdam aliquam at nemo repellat nam ad adipisci itaque alias eveniet consequuntur molestiae cupiditate dolores, id magni autem vero quam, suscipit nulla facere molestias ipsum? Adipisci, animi natus. Modi, veniam doloribus assumenda in dolorem exercitationem quaerat tempora non temporibus magni earum voluptatibus autem quibusdam tempore voluptas aperiam, consequuntur alias fuga laudantium sed harum distinctio repudiandae facere omnis. Sint sunt dignissimos fugit velit voluptatibus adipisci esse minima explicabo. Nisi est architecto quasi suscipit amet quaerat nulla dolore illo quis inventore, error iusto nostrum eaque nemo, atque odio quas esse aut aperiam!',
        ]);

        \App\Models\newsPost::create([
            'category_id'    => '2',
            'author_id'    => '1',
            'name'    => 'Sample Post Second',
            'code'    => Str::random(6),
            'slug'    => 'sample-post-second',
            'image'    => 'default/default-profile.jpg',
            'metadesc'    => 'Meta Descriptsion Sample',
            'keywords'    => 'Keywords 1, Keywords 2, Keywords 3',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, omnis quibusdam aliquam at nemo repellat nam ad adipisci itaque alias eveniet consequuntur molestiae cupiditate dolores, id magni autem vero quam, suscipit nulla facere molestias ipsum? Adipisci, animi natus. Modi, veniam doloribus assumenda in dolorem exercitationem quaerat tempora non temporibus magni earum voluptatibus autem quibusdam tempore voluptas aperiam, consequuntur alias fuga laudantium sed harum distinctio repudiandae facere omnis. Sint sunt dignissimos fugit velit voluptatibus adipisci esse minima explicabo. Nisi est architecto quasi suscipit amet quaerat nulla dolore illo quis inventore, error iusto nostrum eaque nemo, atque odio quas esse aut aperiam!',
        ]);

        \App\Models\Settings\webSettings::create([
            'school_apps' => 'ESEC Apps v1.0 ',
            'school_name' => 'PKBM Mutiara Ilmu',
            'school_head' => 'Dr. Mulawarman Frietz, M.Kom',
            'school_desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error soluta amet architecto doloribus necessitatibus fugit veritatis placeat debitis ratione. Modi rerum ut dolorem eos voluptates, illum doloremque incidunt facilis placeat corporis voluptatum, at repellat. Nemo dignissimos fugit, quidem optio repellendus porro id ab illo alias est voluptate. Culpa officiis velit, iure, facilis temporibus animi ducimus vitae, quo laudantium quidem nemo quia et rerum atque nulla? Cupiditate ea nesciunt autem molestias debitis placeat, obcaecati maiores ad, quae, alias aperiam dicta odio. Fugiat sapiente voluptatem quaerat, reprehenderit alias deserunt sunt magnam, et, sed temporibus mollitia? Impedit natus iste atque officia in quisquam amet commodi quod fugit quibusdam, sapiente inventore recusandae, esse velit. Obcaecati quidem deserunt tenetur. Voluptates non aliquid, blanditiis adipisci debitis dolores at, maxime rem ex ipsum veniam molestias culpa facilis aspernatur error hic. Nostrum sed rem animi a distinctio laborum tempora delectus earum cum molestiae vitae, unde vel reiciendis voluptatem.',
            'school_link' => 'https://instagram.com/siakad',
            'school_email' => 'jaya.kusuma@amdev-academy.id',
            'school_phone' => '+6287848799145',
            'social_ig' => 'https://instagram.com/siakad',
            'social_fb' => 'https://facebook.com/kyouma052',
            'social_in' => 'https://id.linkedin.com/in/siakad',
            'social_tw' => 'https://x.com/siakad',
        ]);

    }
}
