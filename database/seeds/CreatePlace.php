<?php
use App\place;
use Illuminate\Database\Seeder;

class CreatePlace extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        place::create([
            'name' => 'المؤسسة العامة للمياه',
            'location' => 'ركن الدين',
            'name_en' => 'Water Corporation',
            'location_en' => 'Rukn Alden',
            'lat_lag' => '33.5400,36.2983',
            'center_type' => '0',
        ]);
        place::create([
            'name' => 'المؤسسة العامة للمياه',
            'location' => 'برزة',
            'name_en' => 'Water Corporation',
            'location_en' => 'Barza',
            'lat_lag' => '33.5573,36.3119',
            'center_type' => '0',
        ]);
        place::create([
            'name' => 'المؤسسة العامة للمياه',
            'location' => 'شارع النصر',
            'name_en' => 'Water Corporation',
            'location_en' => 'Nasr Street',
            'lat_lag' => '33.5177,36.2519',
            'center_type' => '0',
        ]);


        place::create([
            'name' => 'الشركة السورية للكهرباء',
            'location' => 'الفردوس',
            'name_en' => 'Syrian Electricity Company',
            'location_en' => 'Fordus',
            'lat_lag' => '33.5138,36.2765',
            'center_type' => '1',
        ]);
        place::create([
            'name' => 'الشركة السورية للكهرباء',
            'location' => 'شارع بغداد',
            'name_en' => 'Syrian Electricity Company',
            'location_en' => 'Bagdad Street',
            'lat_lag' => '33.51972,36.30250',
            'center_type' => '1',
        ]);
        place::create([
            'name' => 'الشركة السورية للكهرباء',
            'location' => 'المزة',
            'name_en' => 'Syrian Electricity Company',
            'location_en' => 'Mazaa',
            'lat_lag' => '33.50306,36.25833',
            'center_type' => '1',
        ]);


        place::create([
            'name' => 'الشركة السورية للإتصالات',
            'location' => 'ركن الدين',
            'name_en' => 'Syrian Telecom Company',
            'location_en' => 'Rukn Alden',
            'lat_lag' => '33.5400,36.2983',
            'center_type' => '2',
        ]);
        place::create([
            'name' => 'الشركة السورية للإتصالات',
            'location' => 'المزة',
            'name_en' => 'Syrian Telecom Company',
            'location_en' => 'Mazaa',
            'lat_lag' => '33.50306,36.25833',
            'center_type' => '2',
        ]);
        place::create([
            'name' => 'الشركة السورية للإتصالات',
            'location' => 'شارع النصر',
            'name_en' => 'Syrian Telecom Company',
            'location_en' => 'Nasr Street',
            'lat_lag' => '33.5177,36.2519',
            'center_type' => '2',
        ]);
    }
}
