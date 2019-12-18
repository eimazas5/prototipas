<?php

Route::redirect('/', '/login');
Route::get('/home', function () {
    if (session('status')) {
        return redirect()->route('admin.home')->with('status', session('status'));
    }

    return redirect()->route('admin.home');
});

Auth::routes(['register' => false]);
// Admin

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');
    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');

    // Cities
    Route::delete('cities/destroy', 'CitiesController@massDestroy')->name('cities.massDestroy');
    Route::resource('cities', 'CitiesController');

    // System Settings
    Route::delete('system-settings/destroy', 'SystemSettingsController@massDestroy')->name('system-settings.massDestroy');
    Route::resource('system-settings', 'SystemSettingsController');

    // Workers
    Route::delete('workers/destroy', 'WorkersController@massDestroy')->name('workers.massDestroy');
    Route::resource('workers', 'WorkersController');

    // Suppliers
    Route::delete('suppliers/destroy', 'SupplierController@massDestroy')->name('suppliers.massDestroy');
    Route::resource('suppliers', 'SupplierController');

    // Inv Statuses
    Route::delete('inv-statuses/destroy', 'InvStatusesController@massDestroy')->name('inv-statuses.massDestroy');
    Route::resource('inv-statuses', 'InvStatusesController');

    // Offer Statuses
    Route::delete('offer-statuses/destroy', 'OfferStatusesController@massDestroy')->name('offer-statuses.massDestroy');
    Route::resource('offer-statuses', 'OfferStatusesController');

    // New Products
    Route::delete('new-products/destroy', 'NewProductController@massDestroy')->name('new-products.massDestroy');
    Route::resource('new-products', 'NewProductController');

    // Add Stocks
    Route::delete('add-stocks/destroy', 'AddStockController@massDestroy')->name('add-stocks.massDestroy');
    Route::resource('add-stocks', 'AddStockController');

    // Sales
    Route::delete('sales/destroy', 'SaleController@massDestroy')->name('sales.massDestroy');
    Route::resource('sales', 'SaleController');
});
