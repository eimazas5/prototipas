<?php

Route::group(['prefix' => 'v1', 'as' => 'api.', 'namespace' => 'Api\V1\Admin', 'middleware' => ['auth:api']], function () {
    // Permissions
    Route::apiResource('permissions', 'PermissionsApiController');

    // Roles
    Route::apiResource('roles', 'RolesApiController');

    // Users
    Route::apiResource('users', 'UsersApiController');

    // Cities
    Route::apiResource('cities', 'CitiesApiController');

    // System Settings
    Route::apiResource('system-settings', 'SystemSettingsApiController');

    // Workers
    Route::apiResource('workers', 'WorkersApiController');

    // Suppliers
    Route::apiResource('suppliers', 'SupplierApiController');

    // Inv Statuses
    Route::apiResource('inv-statuses', 'InvStatusesApiController');

    // Offer Statuses
    Route::apiResource('offer-statuses', 'OfferStatusesApiController');

    // New Products
    Route::apiResource('new-products', 'NewProductApiController');

    // Add Stocks
    Route::apiResource('add-stocks', 'AddStockApiController');

    // Sales
    Route::apiResource('sales', 'SaleApiController');
});
