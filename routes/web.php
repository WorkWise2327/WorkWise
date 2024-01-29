<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Client\ClientController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('user')->name('user.')->group(function () {

    Route::middleware(['guest:web','PreventBackHistory'])->group(function(){
        Route::view('/login','dashboard.user.login')->name('login');
        Route::view('/register','dashboard.user.register')->name('register');
        Route::post('/create',[UserController::class,'create'])->name('create');
        Route::post('/check',[UserController::class,'check'])->name('check');

    });

    Route::middleware(['auth:web','PreventBackHistory'])->group(function(){
        Route::get('/userhome',[UserController::class,'userhome'])->name('userhome');
        Route::post('/logout',[UserController::class,'logout'])->name('logout');
    });
});

Route::get("/userhome",[UserController::class,"userhome"]);

Route::get("/surf",[UserController::class,"surf"]);

Route::get("/myjobsview",[UserController::class,"myjobsview"]);

Route::get("/savedjobview",[UserController::class,"savedjobview"]);

Route::get('/reveiw',[ClientController::class,"reveiw"]);

Route::prefix('admin')->name('admin.')->group(function(){

    Route::middleware(['guest:admin','PreventBackHistory'])->group(function(){
          Route::view('/login','dashboard.admin.login')->name('login');
          Route::post('/check',[AdminController::class,'check'])->name('check');
    });

    Route::middleware(['auth:admin','PreventBackHistory'])->group(function(){
        Route::view('/home','dashboard.admin.home')->name('home');
        Route::post('/logout',[AdminController::class,'logout'])->name('logout');
    });

});

Route::get("/manageclient",[AdminController::class,"manageclient"]);
Route::get("/managefreelancer",[AdminController::class,"managefreelancer"]);
Route::get("/addcv",[AdminController::class,"addcv"]);
Route::get("/addfv",[AdminController::class,"addfv"]);
Route::get("/managejobsview",[AdminController::class,"managejobsview"]);
Route::get('/admindeleteclient/{id}',[AdminController::class,'deleteclient']);
Route::get('/admindeletefreelancer/{id}',[AdminController::class,'deletefreelancer']);
Route::get('/admindeletejob/{id}',[AdminController::class,'deletejob']);
Route::post('/addclient',[AdminController::class,'addclient']);
Route::post('/addfreelancer',[AdminController::class,'addfreelancer']);
Route::get('/adminupdatejobview/{id}',[AdminController::class,'adminupdatejobview']);
Route::get('/adminupdatejobimageview/{id}',[AdminController::class,'adminupdatejobimageview']);
Route::get('/updateclientview/{id}',[AdminController::class,'updateclientview']);
Route::get('/updatefreelancerview/{id}',[AdminController::class,'updatefreelancerview']);
Route::post('/adminupdateclient/{id}',[AdminController::class,'adminupdateclient']);
Route::post('/adminupdatefreelancer/{id}',[AdminController::class,'adminupdatefreelancer']);
Route::post('/adminupdatejob/{id}',[AdminController::class,'adminupdatejob']);
Route::post('/adminupdateimagejob/{id}',[AdminController::class,'adminupdateimagejob']);



Route::get('/applyforjobview/{id}',[UserController::class,'applyforjobview']);






Route::prefix('client')->name('client.')->group(function(){

    Route::middleware(['guest:client','PreventBackHistory'])->group(function(){
         Route::view('/login','dashboard.client.login')->name('login');
         Route::view('/register','dashboard.client.register')->name('register');
         Route::post('/create',[ClientController::class,'create'])->name('create');
         Route::post('/check',[ClientController::class,'check'])->name('check');
    });

    Route::middleware(['auth:client','PreventBackHistory'])->group(function(){
         Route::view('/home','dashboard.client.home')->name('home');
         Route::view('/home/reveiw','dashboard.client.reveiwjobs')->name('reveiwjobs');
         Route::post('logout',[ClientController::class,'logout'])->name('logout');

    });



});

Route::get("/add",[ClientController::class,"add"]);
Route::post("/savejobs/{id}",[UserController::class,"savejobs"]);

Route::post("/deletesavejobs/{id}",[UserController::class,"deletesavejobs"]);

Route::get('/approvejob/{id}',[ClientController::class,'approvejob']);

Route::get('/denyjob/{id}',[ClientController::class,'denyjob']);

Route::get("/appliedjobsview",[ClientController::class,"appliedjobsview"]);



Route::post('/upload',[ClientController::class,'upload']);
Route::post('/updatejob/{id}',[ClientController::class,'updatejob']);
Route::get('/moveto/{id}',[UserController::class,'moveto']);
Route::get('/movetosaved/{id}',[UserController::class,'movetosaved']);
Route::get('/delete/{id}',[ClientController::class,'delete']);
Route::get('/updateview/{id}',[ClientController::class,'updateview']);


Route::post('/applyjob',[UserController::class,'applyjob']);

