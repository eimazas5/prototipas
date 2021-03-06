<?php

return [
    'userManagement'        => [
        'title'          => 'Vartotojų valdymas',
        'title_singular' => 'Vartotojų valdymas',
    ],
    'permission'            => [
        'title'          => 'Leidimai',
        'title_singular' => 'Leidimas',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'title'             => 'Title',
            'title_helper'      => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],
    'role'                  => [
        'title'          => 'Rolės',
        'title_singular' => 'Rolė',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => '',
            'title'              => 'Title',
            'title_helper'       => '',
            'permissions'        => 'Permissions',
            'permissions_helper' => '',
            'created_at'         => 'Created at',
            'created_at_helper'  => '',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => '',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => '',
        ],
    ],
    'user'                  => [
        'title'          => 'Vartotojai',
        'title_singular' => 'Vartotojas',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => '',
            'name'                     => 'Name',
            'name_helper'              => '',
            'email'                    => 'Email',
            'email_helper'             => '',
            'email_verified_at'        => 'Email verified at',
            'email_verified_at_helper' => '',
            'password'                 => 'Password',
            'password_helper'          => '',
            'roles'                    => 'Roles',
            'roles_helper'             => '',
            'remember_token'           => 'Remember Token',
            'remember_token_helper'    => '',
            'created_at'               => 'Created at',
            'created_at_helper'        => '',
            'updated_at'               => 'Updated at',
            'updated_at_helper'        => '',
            'deleted_at'               => 'Deleted at',
            'deleted_at_helper'        => '',
            'last_name'                => 'Last Name',
            'last_name_helper'         => '',
        ],
    ],
    'config'                => [
        'title'          => 'Nustatymai',
        'title_singular' => 'Nustatymai',
    ],
    'city'                  => [
        'title'          => 'Miestai',
        'title_singular' => 'Miestai',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Pavadinimas',
            'name_helper'       => 'Įveskite pavadinimą',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],
    'systemSetting'         => [
        'title'          => 'Sistemos nustatymai',
        'title_singular' => 'Sistemos nustatymai',
        'fields'         => [
            'id'                  => 'ID',
            'id_helper'           => '',
            'company_name'        => 'Įmonės pavadinimas',
            'company_name_helper' => 'Įmonės pavadinimas',
            'vat_code'            => 'Įmonės PVM kodas',
            'vat_code_helper'     => 'Įmonės PVM kodas',
            'company_code'        => 'Įmonės kodas',
            'company_code_helper' => 'Įmonės kodas',
            'logo'                => 'Logo',
            'logo_helper'         => 'Logo',
            'created_at'          => 'Created at',
            'created_at_helper'   => '',
            'updated_at'          => 'Updated at',
            'updated_at_helper'   => '',
            'deleted_at'          => 'Deleted at',
            'deleted_at_helper'   => '',
        ],
    ],
    'worker'                => [
        'title'          => 'Darbuotojai',
        'title_singular' => 'Darbuotojai',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'first_name'        => 'Vardas',
            'first_name_helper' => 'Vardas',
            'last_name'         => 'Pavardė',
            'last_name_helper'  => 'Pavardė',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],
    'workersManagement'     => [
        'title'          => 'Darbuotojų valdymas',
        'title_singular' => 'Darbuotojų valdyma',
    ],
    'clientsManagement'     => [
        'title'          => 'Tiekėjų valdymas',
        'title_singular' => 'Tiekėjų valdyma',
    ],
    'supplier'              => [
        'title'          => 'Tiėkėjai',
        'title_singular' => 'Tiėkėjai',
        'fields'         => [
            'id'                  => 'ID',
            'id_helper'           => '',
            'name'                => 'Įmonės pavadinimas',
            'name_helper'         => 'Įmonės pavadinimas',
            'vat'                 => 'PVM kodas',
            'vat_helper'          => 'PVM kodas',
            'company_code'        => 'Įmonės kodas',
            'company_code_helper' => 'Įmonės kodas',
            'created_at'          => 'Created at',
            'created_at_helper'   => '',
            'updated_at'          => 'Updated at',
            'updated_at_helper'   => '',
            'deleted_at'          => 'Deleted at',
            'deleted_at_helper'   => '',
        ],
    ],
    'sandelioValdyma'       => [
        'title'          => 'Sandėlio Valdymas',
        'title_singular' => 'Sandėlio Valdyma',
    ],
    'saskaitosFakturo'      => [
        'title'          => 'Sąskaitos Faktūros',
        'title_singular' => 'Sąskaitos Faktūro',
    ],
    'komerciniaiPasiulymai' => [
        'title'          => 'Komerciniai Pasiūlymai',
        'title_singular' => 'Komerciniai Pasiūlymai',
    ],
    'invStatus'             => [
        'title'          => 'Sąskaitų faktūrų būsenos',
        'title_singular' => 'Sąskaitų faktūrų būseno',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Pavadinimas',
            'name_helper'       => 'Pavadinimas',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],
    'offerStatus'           => [
        'title'          => 'Komercinių pasiūlymų statusai',
        'title_singular' => 'Komercinių pasiūlymų statusai',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Pavadinimas',
            'name_helper'       => 'Pavadinimas',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],
    'ataskaito'             => [
        'title'          => 'Ataskaitos',
        'title_singular' => 'Ataskaito',
    ],
    'newProduct'            => [
        'title'          => 'Naujos prekės įvedimas',
        'title_singular' => 'Naujos prekės įvedima',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Prekės pavadinimas',
            'name_helper'       => 'Prekės pavadinimas',
            'stock'             => 'Vienetų skaičius sandėlyje',
            'stock_helper'      => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],
    'addStock'              => [
        'title'          => 'Papildyti prekę',
        'title_singular' => 'Papildyti prekę',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => '',
            'name'               => 'Prekė',
            'name_helper'        => '',
            'amounttoadd'        => 'Pridedamas kiekis',
            'amounttoadd_helper' => '',
            'created_at'         => 'Created at',
            'created_at_helper'  => '',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => '',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => '',
        ],
    ],
    'pardavimai'            => [
        'title'          => 'Pardavimai',
        'title_singular' => 'Pardavimai',
    ],
    'sale'                  => [
        'title'          => 'Pardavimų fiksavimas',
        'title_singular' => 'Pardavimų fiksavima',
        'fields'         => [
            'id'                  => 'ID',
            'id_helper'           => '',
            'name'                => 'Darbuotojas',
            'name_helper'         => '',
            'sales_amount'        => 'Pardavimų suma',
            'sales_amount_helper' => '',
            'created_at'          => 'Created at',
            'created_at_helper'   => '',
            'updated_at'          => 'Updated at',
            'updated_at_helper'   => '',
            'deleted_at'          => 'Deleted at',
            'deleted_at_helper'   => '',
        ],
    ],
];
