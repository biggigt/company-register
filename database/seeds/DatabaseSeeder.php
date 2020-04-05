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
        \App\User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('w}m>";UWkex8u>&)'),
            'role' => 2
        ]);
        \App\User::create([
            'name' => 'ГИВФБ',
            'email' => 'gvfi@gvfi.kg',
            'password' => Hash::make('MbG-6Bh=/6>n^6rE'),
            'role' => 2
        ]);
        \App\User::create([
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
        //Facility type
        \App\facility_type::create([
            'code'=>'milk',
            'facility_type_name'=>'Молокоперерабатывающие предприятия'
        ]);
        \App\facility_type::create([
            'code'=>'meat',
            'facility_type_name'=>'Мясоперерабатывающие предприятия'
        ]);
        \App\facility_type::create([
            'code'=>'fish',
            'facility_type_name'=>'Рыбные хозяйства и рыбаперерабатывающие предприятия'
        ]);
        \App\facility_type::create([
            'code'=>'poultry',
            'facility_type_name'=>'Птицеперерабатывающие предприятия'
        ]);
        \App\facility_type::create([
            'code'=>'bee',
            'facility_type_name'=>'Объекты по переработке продукции пчеловодства'
        ]);
        \App\facility_type::create([
            'code'=>'accsubprod',
            'facility_type_name'=>'Объекты по приему субпродуктов и сырья животного происхождения'
        ]);
        \App\facility_type::create([
            'code'=>'stosubprod',
            'facility_type_name'=>'Объекты по реализации и хранению продуктов и сырья животного происхождения'
        ]);
        \App\facility_type::create([
            'code'=>'meatstore',
            'facility_type_name'=>'Мясные павильоны'
        ]);
        \App\facility_type::create([
            'code'=>'refskinwool',
            'facility_type_name'=>'Объекты по переработке шкур и шерсти'
        ]);
        \App\facility_type::create([
            'code'=>'slaughter',
            'facility_type_name'=>'Убойные пункты'
        ]);
        \App\facility_type::create([
            'code'=>'milk',
            'facility_type_name'=>'Пункты приема сырого молока, сырых сливок и сырого обезжиренного молокa'
        ]);
        \App\facility_type::create([
            'code'=>'animal',
            'facility_type_name'=>'Объекты занющиимаеся разведением выращиванием и реализацией с/х животных '
        ]);
        \App\facility_type::create([
            'code'=>'feed',
            'facility_type_name'=>'Объекты производства, хранения и реализация кормов и кормовых добавок'
        ]);
        \App\facility_type::create([
            'code'=>'vetmed',
            'facility_type_name'=>'Ветеринарные аптеки'
        ]);
        //Existing registries
        \App\RegistryType::create([
            'registryType'=>'ЕАЭС',
            'registryDescription'=>'Евразийский Экономический Союз'
        ]);
        \App\RegistryType::create([
            'registryType'=>'Внутренний реестр предприятий',
            'registryDescription'=>'Внутренний реестр предприятий'
        ]);
        \App\RegistryType::create([
            'registryType'=>'КНР',
            'registryDescription'=>'Реестр предприятий экспортирующих в КНР'
        ]);
        //Statuses
        \App\status::create([
            'code'=>'positive',
            'status'=>'Без ограничений'
        ]);
        \App\status::create([
            'code'=>'warning',
            'status'=>'Предупреждение'
        ]);
        \App\status::create([
            'code'=>'warning',
            'status'=>'Специальные требования'
        ]);
        \App\status::create([
            'code'=>'warning',
            'status'=>'Усиленный лабораторный контроль'
        ]);
        \App\status::create([
            'code'=>'negative',
            'status'=>'Временные ограничения'
        ]);
        \App\status::create([
            'code'=>'negative',
            'status'=>'Ограничено до получения права доступа от компетентного ведомства страны-импортера '
        ]);
        //Activity types
        \App\activity_type::create([
            'code'=>'prep',
            'activity_type_name'=>'заготовка'
        ]);
        \App\activity_type::create([
            'code'=>'catch',
            'activity_type_name'=>'вылов'
        ]);
        \App\activity_type::create([
            'code'=>'packaging',
            'activity_type_name'=>'расфасовка'
        ]);
        \App\activity_type::create([
            'code'=>'keep',
            'activity_type_name'=>'содержание'
        ]);
        \App\activity_type::create([
            'code'=>'cut',
            'activity_type_name'=>'разделка'
        ]);
        \App\activity_type::create([
            'code'=>'slaughter',
            'activity_type_name'=>'убой'
        ]);
        \App\activity_type::create([
            'code'=>'sell',
            'activity_type_name'=>'реализация'
        ]);
        \App\activity_type::create([
            'code'=>'ref',
            'activity_type_name'=>'переработка'
        ]);
        \App\activity_type::create([
            'code'=>'grow',
            'activity_type_name'=>'выращивание'
        ]);
        \App\activity_type::create([
            'code'=>'producing',
            'activity_type_name'=>'производство'
        ]);
        \App\activity_type::create([
            'code'=>'anibreed',
            'activity_type_name'=>'разведение'
        ]);
        \App\activity_type::create([
            'code'=>'move',
            'activity_type_name'=>'перемещение'
        ]);
        \App\activity_type::create([
            'code'=>'store',
            'activity_type_name'=>'хранение'
        ]);
    }
}
