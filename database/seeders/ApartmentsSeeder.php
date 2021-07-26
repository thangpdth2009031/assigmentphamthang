<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ApartmentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        \Illuminate\Support\Facades\DB::table('apartments')->truncate();
        \Illuminate\Support\Facades\DB::table('apartments')->insert([
            [
                'tenChungCu' => 'Lipstick',
                'diaChi' => 'cau-giay',
                'giaBan' => 20000,
                'thongTinChung' => 'Lipstick is a cosmetic product ',
                'thongTinChiTiet' => 'Lipstick is a cosmetic product ',
                'hinhDaiDien' => 'Lipstick is a cosmetic product ',
                'trangThai' => 1,
                'created_at' => Carbon::now()->addDays(-1),
                'updated_at' => Carbon::now()->addDays(-1)
            ],
            [
                'tenChungCu' => 'Lipstick',
                'diaChi' => 'cau-giay',
                'giaBan' => 20000,
                'thongTinChung' => 'Lipstick is a cosmetic product ',
                'thongTinChiTiet' => 'Lipstick is a cosmetic product ',
                'hinhDaiDien' => 'Lipstick is a cosmetic product ',
                'trangThai' => 1,
                'created_at' => Carbon::now()->addDays(-1),
                'updated_at' => Carbon::now()->addDays(-1)
            ],
            [
                'tenChungCu' => 'Lipstick',
                'diaChi' => 'cau-giay',
                'giaBan' => 20000,
                'thongTinChung' => 'Lipstick is a cosmetic product ',
                'thongTinChiTiet' => 'Lipstick is a cosmetic product ',
                'hinhDaiDien' => 'Lipstick is a cosmetic product ',
                'trangThai' => 1,
                'created_at' => Carbon::now()->addDays(-1),
                'updated_at' => Carbon::now()->addDays(-1)
            ],
            [
                'tenChungCu' => 'Lipstick',
                'diaChi' => 'cau-giay',
                'giaBan' => 20000,
                'thongTinChung' => 'Lipstick is a cosmetic product ',
                'thongTinChiTiet' => 'Lipstick is a cosmetic product ',
                'hinhDaiDien' => 'Lipstick is a cosmetic product ',
                'trangThai' => 1,
                'created_at' => Carbon::now()->addDays(-1),
                'updated_at' => Carbon::now()->addDays(-1)
            ],
            [
                'tenChungCu' => 'Lipstick',
                'diaChi' => 'cau-giay',
                'giaBan' => 20000,
                'thongTinChung' => 'Lipstick is a cosmetic product ',
                'thongTinChiTiet' => 'Lipstick is a cosmetic product ',
                'hinhDaiDien' => 'Lipstick is a cosmetic product ',
                'trangThai' => 1,
                'created_at' => Carbon::now()->addDays(-1),
                'updated_at' => Carbon::now()->addDays(-1)
            ],
            [
                'tenChungCu' => 'Lipstick',
                'diaChi' => 'cau-giay',
                'giaBan' => 20000,
                'thongTinChung' => 'Lipstick is a cosmetic product ',
                'thongTinChiTiet' => 'Lipstick is a cosmetic product ',
                'hinhDaiDien' => 'Lipstick is a cosmetic product ',
                'trangThai' => 1,
                'created_at' => Carbon::now()->addDays(-1),
                'updated_at' => Carbon::now()->addDays(-1)
            ],
            [
                'tenChungCu' => 'Lipstick',
                'diaChi' => 'cau-giay',
                'giaBan' => 20000,
                'thongTinChung' => 'Lipstick is a cosmetic product ',
                'thongTinChiTiet' => 'Lipstick is a cosmetic product ',
                'hinhDaiDien' => 'Lipstick is a cosmetic product ',
                'trangThai' => 1,
                'created_at' => Carbon::now()->addDays(-1),
                'updated_at' => Carbon::now()->addDays(-1)
            ],
            [
                'tenChungCu' => 'Lipstick',
                'diaChi' => 'cau-giay',
                'giaBan' => 20000,
                'thongTinChung' => 'Lipstick is a cosmetic product ',
                'thongTinChiTiet' => 'Lipstick is a cosmetic product ',
                'hinhDaiDien' => 'Lipstick is a cosmetic product ',
                'trangThai' => 1,
                'created_at' => Carbon::now()->addDays(-1),
                'updated_at' => Carbon::now()->addDays(-1)
            ],
            [
                'tenChungCu' => 'Lipstick',
                'diaChi' => 'cau-giay',
                'giaBan' => 20000,
                'thongTinChung' => 'Lipstick is a cosmetic product ',
                'thongTinChiTiet' => 'Lipstick is a cosmetic product ',
                'hinhDaiDien' => 'Lipstick is a cosmetic product ',
                'trangThai' => 1,
                'created_at' => Carbon::now()->addDays(-1),
                'updated_at' => Carbon::now()->addDays(-1)
            ],
            [
                'tenChungCu' => 'Lipstick',
                'diaChi' => 'cau-giay',
                'giaBan' => 20000,
                'thongTinChung' => 'Lipstick is a cosmetic product ',
                'thongTinChiTiet' => 'Lipstick is a cosmetic product ',
                'hinhDaiDien' => 'Lipstick is a cosmetic product ',
                'trangThai' => 1,
                'created_at' => Carbon::now()->addDays(-1),
                'updated_at' => Carbon::now()->addDays(-1)
            ],
            [
                'tenChungCu' => 'Lipstick',
                'diaChi' => 'cau-giay',
                'giaBan' => 20000,
                'thongTinChung' => 'Lipstick is a cosmetic product ',
                'thongTinChiTiet' => 'Lipstick is a cosmetic product ',
                'hinhDaiDien' => 'Lipstick is a cosmetic product ',
                'trangThai' => 1,
                'created_at' => Carbon::now()->addDays(-1),
                'updated_at' => Carbon::now()->addDays(-1)
            ],
            [
                'tenChungCu' => 'Lipstick',
                'diaChi' => 'cau-giay',
                'giaBan' => 20000,
                'thongTinChung' => 'Lipstick is a cosmetic product ',
                'thongTinChiTiet' => 'Lipstick is a cosmetic product ',
                'hinhDaiDien' => 'Lipstick is a cosmetic product ',
                'trangThai' => 1,
                'created_at' => Carbon::now()->addDays(-1),
                'updated_at' => Carbon::now()->addDays(-1)
            ],
            [
                'tenChungCu' => 'Lipstick',
                'diaChi' => 'cau-giay',
                'giaBan' => 20000,
                'thongTinChung' => 'Lipstick is a cosmetic product ',
                'thongTinChiTiet' => 'Lipstick is a cosmetic product ',
                'hinhDaiDien' => 'Lipstick is a cosmetic product ',
                'trangThai' => 1,
                'created_at' => Carbon::now()->addDays(-1),
                'updated_at' => Carbon::now()->addDays(-1)
            ],
            [
                'tenChungCu' => 'Lipstick',
                'diaChi' => 'cau-giay',
                'giaBan' => 20000,
                'thongTinChung' => 'Lipstick is a cosmetic product ',
                'thongTinChiTiet' => 'Lipstick is a cosmetic product ',
                'hinhDaiDien' => 'Lipstick is a cosmetic product ',
                'trangThai' => 1,
                'created_at' => Carbon::now()->addDays(-1),
                'updated_at' => Carbon::now()->addDays(-1)
            ],
            [
                'tenChungCu' => 'Lipstick',
                'diaChi' => 'cau-giay',
                'giaBan' => 20000,
                'thongTinChung' => 'Lipstick is a cosmetic product ',
                'thongTinChiTiet' => 'Lipstick is a cosmetic product ',
                'hinhDaiDien' => 'Lipstick is a cosmetic product ',
                'trangThai' => 1,
                'created_at' => Carbon::now()->addDays(-1),
                'updated_at' => Carbon::now()->addDays(-1)
            ],
            [
                'tenChungCu' => 'Lipstick',
                'diaChi' => 'cau-giay',
                'giaBan' => 20000,
                'thongTinChung' => 'Lipstick is a cosmetic product ',
                'thongTinChiTiet' => 'Lipstick is a cosmetic product ',
                'hinhDaiDien' => 'Lipstick is a cosmetic product ',
                'trangThai' => 1,
                'created_at' => Carbon::now()->addDays(-1),
                'updated_at' => Carbon::now()->addDays(-1)
            ],
            [
                'tenChungCu' => 'Lipstick',
                'diaChi' => 'cau-giay',
                'giaBan' => 20000,
                'thongTinChung' => 'Lipstick is a cosmetic product ',
                'thongTinChiTiet' => 'Lipstick is a cosmetic product ',
                'hinhDaiDien' => 'Lipstick is a cosmetic product ',
                'trangThai' => 1,
                'created_at' => Carbon::now()->addDays(-1),
                'updated_at' => Carbon::now()->addDays(-1)
            ],
            [
                'tenChungCu' => 'Lipstick',
                'diaChi' => 'cau-giay',
                'giaBan' => 20000,
                'thongTinChung' => 'Lipstick is a cosmetic product ',
                'thongTinChiTiet' => 'Lipstick is a cosmetic product ',
                'hinhDaiDien' => 'Lipstick is a cosmetic product ',
                'trangThai' => 1,
                'created_at' => Carbon::now()->addDays(-1),
                'updated_at' => Carbon::now()->addDays(-1)
            ],
            [
                'tenChungCu' => 'Lipstick',
                'diaChi' => 'cau-giay',
                'giaBan' => 20000,
                'thongTinChung' => 'Lipstick is a cosmetic product ',
                'thongTinChiTiet' => 'Lipstick is a cosmetic product ',
                'hinhDaiDien' => 'Lipstick is a cosmetic product ',
                'trangThai' => 1,
                'created_at' => Carbon::now()->addDays(-1),
                'updated_at' => Carbon::now()->addDays(-1)
            ],
            [
                'tenChungCu' => 'Lipstick',
                'diaChi' => 'cau-giay',
                'giaBan' => 20000,
                'thongTinChung' => 'Lipstick is a cosmetic product ',
                'thongTinChiTiet' => 'Lipstick is a cosmetic product ',
                'hinhDaiDien' => 'Lipstick is a cosmetic product ',
                'trangThai' => 1,
                'created_at' => Carbon::now()->addDays(-1),
                'updated_at' => Carbon::now()->addDays(-1)
            ]

        ]);
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
