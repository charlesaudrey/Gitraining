<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/addProperties', 'HomePageController@index')->name('addProperties');
/* Administrator Route  */

Route::prefix('administrator')->group(function () {

    Route::get('/dashboard', 'AdministratorController@index')->name('adminstrator-dashboard');
    Route::prefix('userManagement')->group(function () {
        Route::get('userList', 'AdministratorController@userList')->name('userList');
        Route::get('addUserList', 'AdministratorController@adduserList')->name('addUserList');
        Route::get('viewUser', 'AdministratorController@viewUser')->name('viewUser');
        Route::get('editUser', 'AdministratorController@editUser')->name('editUser');

        Route::get('userProperty', 'AdministratorController@userProperty')->name('userProperty');
    });

    Route::prefix('propertyManagement')->group(function () {
        Route::get('companyList', 'AdministratorController@companyList')->name('companyList');
        Route::get('properties', 'AdministratorController@properties')->name('properties');
        Route::get('propertyRooms', 'AdministratorController@propertyRooms')->name('propertyRooms');
    });
});

/* Frontdesk Route  */

Route::prefix('frontdesk')->group(function () {
    Route::get('dashboard', 'FrontdeskController@dashboard')->name('frontdesk-dashboard');
    Route::get('booking', 'FrontdeskController@booking')->name('booking');
    Route::get('reservation', 'FrontdeskController@reservation')->name('reservation');
});

/* Rooms Route  */

Route::prefix('rooms')->group(function () {
    Route::get('dashboard', 'RoomsController@dashboard')->name('room-dashboard');
    Route::prefix('housekeeping')->group(function () {
        Route::get('roomMakeup', 'RoomsController@roomMakeup')->name('roomMakeup');
        Route::get('roomService', 'RoomsController@roomService')->name('roomService');
    });
    Route::prefix('maintenance')->group(function () {
        Route::get('forRepair', 'RoomsController@forRepair')->name('forRepair');
        Route::get('repairItem', 'RoomsController@repairItem')->name('repairItem');
    });
    Route::prefix('laundry')->group(function () {
        Route::get('laudryIn', 'RoomsController@laudryIn')->name('laudryIn');
        Route::get('laundryout', 'RoomsController@laundryout')->name('laundryout');
    });
});

/* Inventory Route  */

Route::prefix('inventory')->group(function () {
    Route::get('dashboard', 'InventoryController@dashboard')->name('inventory-dashboard');
    Route::get('consumable', 'InventoryController@consumable')->name('consumable');
    Route::get('nonconsumable', 'InventoryController@nonconsumable')->name('nonconsumable');
    Route::get('damageItems', 'InventoryController@damageItems')->name('damageItems');
    Route::get('laundryItems', 'InventoryController@laundryItems')->name('laundryItems');
});

/* Accounting Route  */

Route::prefix('accounting')->group(function () {
    Route::get('dashboard', 'AccountingController@dashboard')->name('accounting-dashboard');
    Route::get('payment', 'AccountingController@payment')->name('payment');
    Route::get('expenses', 'AccountingController@expenses')->name('expenses');
    Route::get('income', 'AccountingController@income')->name('income');
});

/* Settings Route  */

Route::prefix('settings')->group(function () {
    Route::get('channelManager', 'SettingsController@channelManager')->name('channelManager');
});

Route::resource('register', 'RegisterController');
Route::resource('verification', 'VerificationController');


Route::prefix('admin')->namespace('Admin')->group(function () {
  Route::prefix('property-management')->group(function() {
    Route::resource('companies', 'CompaniesController');
    Route::resource('properties', 'PropertiesController');
    Route::resource('rooms', 'RoomsController');
  });

  Route::prefix('user-management')->group(function() {
    Route::resource('users', 'UsersController');
    Route::resource('users/verify', 'VerificationController');
  });
});

Route::get('verification/organization/{token}', 'VerificationController@organization')->name('verification.organization');
Route::get('verification/individual/{token}', 'VerificationController@individual')->name('verification.individual');
