<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// //返回一个form表单
// Route::get('/testPost',function(){
//     $csrf_token = csrf_token();
//     $form = <<<FORM
//         <form action="/back/laravelapp/public/hello" method="POST">
//             <input type="hidden" name="_token" value="{$csrf_token}">
//             <input type="submit" value="Test"/>
//         </form>
// FORM;
//     return $form;
// });

// Route::post('/hello',function(){
//     return "Hello Laravel[POST]!";
// });

//将url声明别名并且输出
// Route::get('/hello/laravelacademu',['as'=>'academy',function(){
// 	return 'Hello Laravel Academy!';
// }]);
// Route::get('/laravelacademy/{id}/{name}',['as'=>'academy',function($id,$name){
// 	return "Hello {$name} ".$id."！";
// }]);
//路由跳转
// Route::get('/testNameRoute',function(){
// 	// return route('academy');//返回别名为academy的路径
// 	// 
// 	return redirect()->route('academy');
// });
//路由带参数
// Route::get('/testNameRoute',function(){
	
// 	return redirect()->route('academy',['id'=>'老宋','name'=>'呵呵大']);
// });



Route::group(['as'=>'admin::'],function(){

	Route::get('dashboard',['as'=>'dashboard',function(){
		//
	}]);
});
Route::get('/testNameRoute',function(){
	return route('admin::dashboard');
	// return redirect()->route('academy',['id'=>'老宋','name'=>'呵呵大']);
});

Route::group(['middleware'=>'test'],function(){

	Route::get('/write/laravelacademy',function(){
		//使用test中间件
	});
	Route::get('/update/laravelacademy',function(){

	});
});


Route::get('/age/refuse',['as'=>'refuse',function(){

	return '未成年禁止入内额！';
}]);