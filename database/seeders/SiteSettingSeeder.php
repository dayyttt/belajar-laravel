<?php

namespace Database\Seeders;

use App\Models\SiteSetting;
use Illuminate\Database\Seeder;

class SiteSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SiteSetting::updateOrCreate(
            ['id' => 1],
            [
                'site_name' => 'TokiToki',
                'primary_color' => '#10b981',
                'secondary_color' => '#6b7280',
                'phone' => null,
                'whatsapp' => null,
                'email' => null,
                'address' => null,
                'facebook' => null,
                'twitter' => null,
                'instagram' => null,
                'youtube' => null,
                'logo' => null,
                'favicon' => null
            ]
        );
    }
}