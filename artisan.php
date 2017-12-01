//加上 --plain 參數 建立空白 Controller (沒有任何 function)
php artisan make:controller PhotoController --plain




//建立含有 CRUD function 的 Controller
php artisan make:controller PhotoController 
//路由對應
Route::resource('photos', 'PhotoController');


Actions Handled By Resource Controller

Verb	Path	Action	Route Name
GET	/photo	index	photo.index
GET	/photo/create	create	photo.create
POST	/photo	store	photo.store
GET	/photo/{photo}	show	photo.show
GET	/photo/{photo}/edit	edit	photo.edit
PUT/PATCH	/photo/{photo}	update	photo.update
DELETE	/photo/{photo}	destroy	photo.destroy
