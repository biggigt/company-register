<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        User::create([
            'name' => 'Admin',
            'email' => 'admin@test.com',
            'password' => Hash::make('admin'),
            'role' => 2
        ]);
        User::create([
            'name' => 'User',
            'email' => 'user@test.com',
            'password' => Hash::make('secret'),
            'role' => 1
        ]);
        \App\business_type::create([
            'code'=>'АО',
            'business_type_name'=>'Акционерное общество'
        ]);
        \App\business_type::create([
            'code'=>'ГП',
            'business_type_name'=>'Государственное предприятие'
        ]);
        \App\business_type::create([
            'code'=>'ЗАО',
            'business_type_name'=>'Закрытое акционерное общество'
        ]);
        \App\business_type::create([
            'code'=>'ИП',
            'business_type_name'=>'Индивидуальный предприниматель'
        ]);
        \App\business_type::create([
            'code'=>'ИП ОсОО',
            'business_type_name'=>'Иностранное предприятие Общество с ограниченной общественностью'
        ]);
        \App\business_type::create([
            'code'=>'КХ',
            'business_type_name'=>'Крестьянское хозяйство'
        ]);
        \App\business_type::create([
            'code'=>'ОсОО',
            'business_type_name'=>'Общество с ограниченной ответственностью'
        ]);
        \App\business_type::create([
            'code'=>'ООО',
            'business_type_name'=>'Общество с ограниченной отетственностью'
        ]);
        \App\business_type::create([
            'code'=>'ОЮЛ',
            'business_type_name'=>'Объединение юридических лиц'
        ]);
        \App\business_type::create([
            'code'=>'ОАО',
            'business_type_name'=>'Открытое акционерное общество'
        ]);
        \App\business_type::create([
            'code'=>'СХК',
            'business_type_name'=>'Сельскохозяйственный кооператив'
        ]);
        \App\business_type::create([
            'code'=>'ТОО',
            'business_type_name'=>'Товарищество с ограниченной ответственностью'
        ]);
        \App\business_type::create([
            'code'=>'ЧЛ',
            'business_type_name'=>'Частное лицо'
        ]);
        \App\business_type::create([
            'code'=>'ЧП',
            'business_type_name'=>'Частный предприниматель'
        ]);
        \App\business_type::create([
            'code'=>'LLC',
            'business_type_name'=>'Limited liability company'
        ]);
        \App\business_type::create([
            'code'=>'PP',
            'business_type_name'=>'Private person'
        ]);
    }
}
