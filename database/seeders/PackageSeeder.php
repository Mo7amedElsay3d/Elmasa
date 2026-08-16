<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Package;

class PackageSeeder extends Seeder
{
    public function run(): void
    {
        Package::updateOrCreate(
            ['name' => 'Silver'],
            [
                'price' => 17000,
            'details' => 'تجهيز القاعة الأساسي
كوشة وديكور أساسي
نظام صوت وإضاءة أساسي
DJ
تصوير فوتوغرافي أساسي
بوفيه أساسي
خدمات الضيافة
150 كرسي'
        ]);

        Package::updateOrCreate(
            ['name' => 'Gold'],
           [
            'price' => 20000,
            'details' => 'تجهيز ديكور مميز
نظام إضاءة متطور
تصوير فوتوغرافي مميز
بوفيه مميز
Fire Show
فرقة مزمار
فرقة درامز
200 كرسي'
        ]);

        Package::updateOrCreate(
            ['name' => 'VIP'],
            [
            'price' => 22000,
            'details' => 'ديكور VIP
إضاءة ومؤثرات VIP
تصوير شامل
تصوير Drone
بوفيه VIP
فرقة دبكة
فرقة مزمار
فرقة درامز
Fire Show
300 كرسي'
        ]);
    }
}
