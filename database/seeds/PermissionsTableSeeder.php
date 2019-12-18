<?php

use App\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => '1',
                'title' => 'user_management_access',
            ],
            [
                'id'    => '2',
                'title' => 'permission_create',
            ],
            [
                'id'    => '3',
                'title' => 'permission_edit',
            ],
            [
                'id'    => '4',
                'title' => 'permission_show',
            ],
            [
                'id'    => '5',
                'title' => 'permission_delete',
            ],
            [
                'id'    => '6',
                'title' => 'permission_access',
            ],
            [
                'id'    => '7',
                'title' => 'role_create',
            ],
            [
                'id'    => '8',
                'title' => 'role_edit',
            ],
            [
                'id'    => '9',
                'title' => 'role_show',
            ],
            [
                'id'    => '10',
                'title' => 'role_delete',
            ],
            [
                'id'    => '11',
                'title' => 'role_access',
            ],
            [
                'id'    => '12',
                'title' => 'user_create',
            ],
            [
                'id'    => '13',
                'title' => 'user_edit',
            ],
            [
                'id'    => '14',
                'title' => 'user_show',
            ],
            [
                'id'    => '15',
                'title' => 'user_delete',
            ],
            [
                'id'    => '16',
                'title' => 'user_access',
            ],
            [
                'id'    => '17',
                'title' => 'config_access',
            ],
            [
                'id'    => '18',
                'title' => 'city_create',
            ],
            [
                'id'    => '19',
                'title' => 'city_edit',
            ],
            [
                'id'    => '20',
                'title' => 'city_show',
            ],
            [
                'id'    => '21',
                'title' => 'city_delete',
            ],
            [
                'id'    => '22',
                'title' => 'city_access',
            ],
            [
                'id'    => '23',
                'title' => 'system_setting_create',
            ],
            [
                'id'    => '24',
                'title' => 'system_setting_edit',
            ],
            [
                'id'    => '25',
                'title' => 'system_setting_show',
            ],
            [
                'id'    => '26',
                'title' => 'system_setting_delete',
            ],
            [
                'id'    => '27',
                'title' => 'system_setting_access',
            ],
            [
                'id'    => '28',
                'title' => 'worker_create',
            ],
            [
                'id'    => '29',
                'title' => 'worker_edit',
            ],
            [
                'id'    => '30',
                'title' => 'worker_show',
            ],
            [
                'id'    => '31',
                'title' => 'worker_delete',
            ],
            [
                'id'    => '32',
                'title' => 'worker_access',
            ],
            [
                'id'    => '33',
                'title' => 'workers_management_access',
            ],
            [
                'id'    => '34',
                'title' => 'clients_management_access',
            ],
            [
                'id'    => '35',
                'title' => 'supplier_create',
            ],
            [
                'id'    => '36',
                'title' => 'supplier_edit',
            ],
            [
                'id'    => '37',
                'title' => 'supplier_show',
            ],
            [
                'id'    => '38',
                'title' => 'supplier_delete',
            ],
            [
                'id'    => '39',
                'title' => 'supplier_access',
            ],
            [
                'id'    => '40',
                'title' => 'sandelio_valdyma_access',
            ],
            [
                'id'    => '41',
                'title' => 'saskaitos_fakturo_access',
            ],
            [
                'id'    => '42',
                'title' => 'komerciniai_pasiulymai_access',
            ],
            [
                'id'    => '43',
                'title' => 'inv_status_create',
            ],
            [
                'id'    => '44',
                'title' => 'inv_status_edit',
            ],
            [
                'id'    => '45',
                'title' => 'inv_status_show',
            ],
            [
                'id'    => '46',
                'title' => 'inv_status_delete',
            ],
            [
                'id'    => '47',
                'title' => 'inv_status_access',
            ],
            [
                'id'    => '48',
                'title' => 'offer_status_create',
            ],
            [
                'id'    => '49',
                'title' => 'offer_status_edit',
            ],
            [
                'id'    => '50',
                'title' => 'offer_status_show',
            ],
            [
                'id'    => '51',
                'title' => 'offer_status_delete',
            ],
            [
                'id'    => '52',
                'title' => 'offer_status_access',
            ],
            [
                'id'    => '53',
                'title' => 'ataskaito_access',
            ],
            [
                'id'    => '54',
                'title' => 'new_product_create',
            ],
            [
                'id'    => '55',
                'title' => 'new_product_edit',
            ],
            [
                'id'    => '56',
                'title' => 'new_product_show',
            ],
            [
                'id'    => '57',
                'title' => 'new_product_delete',
            ],
            [
                'id'    => '58',
                'title' => 'new_product_access',
            ],
            [
                'id'    => '59',
                'title' => 'add_stock_create',
            ],
            [
                'id'    => '60',
                'title' => 'add_stock_edit',
            ],
            [
                'id'    => '61',
                'title' => 'add_stock_show',
            ],
            [
                'id'    => '62',
                'title' => 'add_stock_delete',
            ],
            [
                'id'    => '63',
                'title' => 'add_stock_access',
            ],
            [
                'id'    => '64',
                'title' => 'pardavimai_access',
            ],
            [
                'id'    => '65',
                'title' => 'sale_create',
            ],
            [
                'id'    => '66',
                'title' => 'sale_edit',
            ],
            [
                'id'    => '67',
                'title' => 'sale_show',
            ],
            [
                'id'    => '68',
                'title' => 'sale_delete',
            ],
            [
                'id'    => '69',
                'title' => 'sale_access',
            ],
        ];

        Permission::insert($permissions);
    }
}
