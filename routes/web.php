<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


use App\Members;
use App\Packages;

Auth::routes();

//route for logout
Route::get('/logout', 'Auth\LoginController@logout');

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware'=>'admin'], function(){

    // just for test admin.index page, later i will create controller for it..
    Route::get('/admin', function(){

        //get count number of all members
        $member =  Members::count();

        //get count number of all packages
        $packages =  Packages::count();


      //expired members on dashbord
        $currentDate = date('Y-m-d');
        $expiredMembers = Members::whereDate('expired_date', '=', $currentDate)->get();

        //new members today on dashbord
        $newMembers = Members::whereDate('created_at', '=', $currentDate)->get();


            $data['tasks'] = [
                [
                    'name' => 'Total members',
                    'progress' => $member,
                    'color' => 'danger'
                ],
                [
                    'name' => 'Total Packages',
                    'progress' => $packages,
                    'color' => 'info'
                ],
                [
                    'name' => 'New members in this month',
                    'progress' => '',
                    'color' => 'warning'
                ],
                [
                    'name' => 'Income invoices this month',
                    'progress' => '',
                    'color' => 'success'
                ],

            ];
            return view('admin.index', compact('data', 'expiredMembers', 'tasks', 'newMembers'))->with($data);

    });


            //route for admin/users
    Route::resource('admin/users', 'AdminUsersController',['names'=>[

        'index'=>'admin.users.index',
        'create'=>'admin.users.create',
        'store'=>'admin.users.store',
        'edit'=>'admin.users.edit',
        'show'=>'admin.users.show',


    ]]);



    Route::resource('admin/media', 'AdminMediasController',['names'=>[

        'index'=>'admin.media.index',
        'create'=>'admin.media.create',
        'store'=>'admin.media.store',
        'edit'=>'admin.media.edit'



    ]]);

    //controller for members

    Route::resource('admin/members', 'AdminMembersController',['names'=>[

        'index'=>'admin.members.index',
        'create'=>'admin.members.create',
        'store'=>'admin.members.store',
        'edit'=>'admin.members.edit',
        'show'=>'admin.members.show',


    ]]);


    Route::resource('admin/packages', 'AdminPackageController',['names'=>[

        'index'=>'admin.packages.index',
        'create'=>'admin.packages.create',
        'store'=>'admin.packages.store',
        'edit'=>'admin.packages.edit',
        'show'=>'admin.packages.show',


    ]]);

    Route::resource('admin/payments', 'AdminPaymentsController',['names'=>[

        'index'=>'admin.payments.index',
        'create'=>'admin.payments.create',
        'store'=>'admin.payments.store',
        'edit'=>'admin.payments.edit',
        'show'=>'admin.payments.show',


    ]]);



});