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
    return view('principal');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['auth'])->group(function(){
    //Rutas para los roles
    // Ruta para listar todos los roles
    Route::get('roles', 'RoleController@index')->name('roles.index')
            ->middleware('permission:roles.index');
    
    //Ruta para ver los detalles de un rol
    Route::get('roles/{role}', 'RoleController@show')->name('roles.show')
            ->middleware('permission:roles.show');        
    //Ruta para almacenar los datos luego de ser introducidos en el formulario
    Route::post('roles/create', 'RoleController@store')->name('roles.store')
            ->middleware('permission:roles.create'); 
    //Ruta para mostrar el formulario de creacion de registro de roles
    Route::get('roles/create', 'RoleController@create')->name('roles.create')
            ->middleware('permission:roles.create');
    //Ruta para actualizar un rol por su id
    Route::put('roles/{role}', 'RoleController@update')->name('roles.update')
            ->middleware('permission:roles.edit');        
    //Ruta para editar un rol
    Route::get('roles/{role}/edit', 'RoleController@edit')->name('roles.edit')
            ->middleware('permission:roles.edit');
    Route::delete('roles/{role}', 'RoleController@destroy')->name('roles.destroy')
            ->middleware('permission:roles.destroy');      
            
    //Ruta para los Productos      
    // Ruta para listar todos los productos
    Route::get('products', 'ProductController@index')->name('products.index')
    ->middleware('permission:products.index');
    //Ruta para ver los detalles de un producto
    Route::get('products/{role}', 'ProductController@show')->name('products.show')
    ->middleware('permission:products.show');        
    //Ruta para almacenar los datos luego de ser introducidos en el formulario
    Route::post('products/create', 'ProductController@store')->name('products.store')
    ->middleware('permission:products.create'); 
    //Ruta para mostrar el formulario de creacion de registro de productos
    Route::get('products/create', 'ProductController@create')->name('products.create')
    ->middleware('permission:products.create');
    //Ruta para actualizar un producto por su id
    Route::put('products/{role}', 'ProductController@update')->name('products.update')
    ->middleware('permission:products.edit');        
    //Ruta para editar un producto
    Route::get('products/{role}/edit', 'ProductController@edit')->name('products.edit')
    ->middleware('permission:products.edit');
    Route::delete('products/{role}', 'ProductController@destroy')->name('products.destroy')
    ->middleware('permission:products.destroy');
    
     //Ruta para los Usuarios      
    // Ruta para listar todos los usuarios
    Route::get('users', 'UsetController@index')->name('users.index')
    ->middleware('permission:users.index');
    //Ruta para ver los detalles de un usuario
    Route::get('users/{role}', 'UserController@show')->name('users.show')
    ->middleware('permission:users.show');        
    //Ruta para actualizar un usuario por su id
    Route::put('users/{role}', 'UserController@update')->name('users.update')
    ->middleware('permission:users.edit');        
    //Ruta para editar un usuario
    Route::get('users/{role}/edit', 'UserController@edit')->name('users.edit')
    ->middleware('permission:users.edit');
    Route::delete('users/{role}', 'UserController@destroy')->name('users.destroy')
    ->middleware('permission:users.destroy'); 

});