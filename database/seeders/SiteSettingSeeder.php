<?php

namespace Database\Seeders;

use App\Models\SiteSetting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiteSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (getSiteSettingKeys() as $key => $data) {
            $displayName = ucwords(str_replace('_', ' ', $key));
            SiteSetting::updateOrCreate(
                ['name' => $key],
                [
                    'type' => $data['type'] ?? '',
                    'display_name' => $displayName,
                    'value' => $data['value'] ?? '',
                ]
            );
        }
    }
}
