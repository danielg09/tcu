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

Route::get('/', 'WelcomeController@index')->name('site.welcome');

Route::post('/correo', 'WelcomeController@sendEmail')->name('site.welcome.sendEmail');

Auth::routes();



Route::prefix('admin')->group(function () {

	Route::get('/panel', 'AdminController@index')->name('admin.panel');

	//rutas de usuario

	//mostrar usuarios
	Route::get('/users', 'UsersController@index')->name('admin.users.index');
	//mostrar form crear usuario
	Route::get('/users/create', 'UsersController@create')->name('admin.users.create');
	//guardar usuario
	Route::post('/users','UsersController@store')->name('admin.users.store');
	//eliminar
    Route::get('/users/destroy/{id}','UsersController@destroy')->name('admin.users.destroy');
    //mostrar el usuario a editar
    Route::get('/users/edit/{id}','UsersController@edit')->name('admin.users.edit');
    //mostrar el usuario a editar
     Route::put('/users/update/{id}','UsersController@update')->name('admin.users.update');

    //rutas de empresa

	//mostrar empresa
	Route::get('/empresa', 'EmpresaController@index')->name('admin.empresa.index');
	//mostrar form crear empresa
	Route::get('/empresa/create', 'EmpresaController@create')->name('admin.empresa.create');
	//guardar empresa
	Route::post('/empresa','EmpresaController@store')->name('admin.empresa.store');
	//eliminar
    Route::get('/empresa/destroy/{id}','EmpresaController@destroy')->name('admin.empresa.destroy');
    //mostrar el empresa a editar
    Route::get('/empresa/edit/{id}','EmpresaController@edit')->name('admin.empresa.edit');
    Route::get('/empresa/edit/logo/{id}','EmpresaController@editLogo')->name('admin.empresa.edit.logo');
    //mostrar el empresa a editar
     Route::put('/empresa/update/{id}','EmpresaController@update')->name('admin.empresa.update');
     Route::put('/empresa/update/logo/{id}','EmpresaController@updateLogo')->name('admin.empresa.update.logo');

    //rutas de contactenos

	//mostrar contactenos
	Route::get('/contactenos', 'ContactenosController@index')->name('admin.contactenos.index');
	//mostrar form crear contactenos
	Route::get('/contactenos/create', 'ContactenosController@create')->name('admin.contactenos.create');
	//guardar contactenos
	Route::post('/contactenos','ContactenosController@store')->name('admin.contactenos.store');
	//eliminar
    Route::get('/contactenos/destroy/{id}','ContactenosController@destroy')->name('admin.contactenos.destroy');
    //mostrar el contactenos a editar
    Route::get('/contactenos/edit/{id}','ContactenosController@edit')->name('admin.contactenos.edit');
    //mostrar el contactenos a editar
     Route::put('/contactenos/update/{id}','ContactenosController@update')->name('admin.contactenos.update');

    //rutas de redessociales

	//mostrar redessociales
	Route::get('/redessociales', 'RedesSocialesController@index')->name('admin.redessociales.index');
	//mostrar form crear redessociales
	Route::get('/redessociales/create', 'RedesSocialesController@create')->name('admin.redessociales.create');
	//guardar redessociales
	Route::post('/redessociales','RedesSocialesController@store')->name('admin.redessociales.store');
	//eliminar
    Route::get('/redessociales/destroy/{id}','RedesSocialesController@destroy')->name('admin.redessociales.destroy');
    //mostrar el redessociales a editar
    Route::get('/redessociales/edit/{id}','RedesSocialesController@edit')->name('admin.redessociales.edit');
    //mostrar el redessociales a editar
     Route::put('/redessociales/update/{id}','RedesSocialesController@update')->name('admin.redessociales.update');


    //rutas de servicios

	//mostrar servicios
	Route::get('/servicios', 'ServiciosController@index')->name('admin.servicios.index');
	//mostrar form crear servicios
	Route::get('/servicios/create', 'ServiciosController@create')->name('admin.servicios.create');
	//guardar servicios
	Route::post('/servicios','ServiciosController@store')->name('admin.servicios.store');
	//eliminar
    Route::get('/servicios/destroy/{id}','ServiciosController@destroy')->name('admin.servicios.destroy');
    //mostrar el servicios a editar
    Route::get('/servicios/edit/{id}','ServiciosController@edit')->name('admin.servicios.edit');
    //mostrar el servicios a editar
     Route::put('/servicios/update/{id}','ServiciosController@update')->name('admin.servicios.update');

    //rutas de categorias

	//mostrar categorias
	Route::get('/categorias', 'CategoriasController@index')->name('admin.categorias.index');
	//mostrar form crear categorias
	Route::get('/categorias/create', 'CategoriasController@create')->name('admin.categorias.create');
	//guardar categorias
	Route::post('/categorias','CategoriasController@store')->name('admin.categorias.store');
	//eliminar
    Route::get('/categorias/destroy/{id}','CategoriasController@destroy')->name('admin.categorias.destroy');
    //mostrar el categorias a editar
    Route::get('/categorias/edit/{id}','CategoriasController@edit')->name('admin.categorias.edit');
    //mostrar el categorias a editar
     Route::put('/categorias/update/{id}','CategoriasController@update')->name('admin.categorias.update');

    //rutas de productos

	//mostrar productos
	Route::get('/productos', 'ProductosController@index')->name('admin.productos.index');
	//mostrar form crear productos
	Route::get('/productos/create', 'ProductosController@create')->name('admin.productos.create');
	//guardar productos
	Route::post('/productos','ProductosController@store')->name('admin.productos.store');
	//eliminar
    Route::get('/productos/destroy/{id}','ProductosController@destroy')->name('admin.productos.destroy');
    //mostrar el productos a editar
    Route::get('/productos/edit/{id}','ProductosController@edit')->name('admin.productos.edit');
    //mostrar el productos a editar
     Route::put('/productos/update/{id}','ProductosController@update')->name('admin.productos.update');

    //rutas de promociones

	//mostrar promociones
	Route::get('/promociones', 'PromocionesController@index')->name('admin.promociones.index');
	//mostrar form crear promociones
	Route::get('/promociones/create', 'PromocionesController@create')->name('admin.promociones.create');
	//guardar promociones
	Route::post('/promociones','PromocionesController@store')->name('admin.promociones.store');
	//eliminar
    Route::get('/promociones/destroy/{id}','PromocionesController@destroy')->name('admin.promociones.destroy');
    //mostrar el promociones a editar
    Route::get('/promociones/edit/{id}','PromocionesController@edit')->name('admin.promociones.edit');
    //mostrar el promociones a editar
     Route::put('/promociones/update/{id}','PromocionesController@update')->name('admin.promociones.update');
});



