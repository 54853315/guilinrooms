<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// Route::get('/', function()
// {
// 	return View::make('hello');
// });

Route::pattern('id', '[0-9]+');

Route::when('admin/*', 'admin');

Route::get('/', 'HomeController@showWelcome');
Route::get('rent/*', 'RoomsController@showRent');
Route::get('sell/*', 'RoomsController@showSell');

Route::get('/r/{id}', 'RoomsController@showInfo');
Route::get('/search/*', 'RoomsController@showSearch');

Route::get('/new', 'RoomsController@showAdd');
Route::post('/saveroom', 'RoomsController@submit');

//提交注册表单
Route::post('/signup', array('before' => 'csrf,guest', function () {
    $rules = array(
        'username' => 'required|min:6|max:14|unique:members',
        'password' => 'required|min:8|max:26|confirmed',
        'email' => 'required|email|unique:members'
    );
    $validator = Validator::make(Input::all(), $rules);

    if ($validator->fails()) {
        echo '有错误';
        echo $validator->messages();
        print_r($failed = $validator->failed());
        AppHelper::ajaxReturn('注册失败！', $failed, 0);
    } else {
        $model = new Members();
        $model->username = $_POST['username'];
        $model->password = Hash::make($_POST['password']);
        $model->email = $_POST['email'];
        $model->create_time = time();
        $model->save();
        AppHelper::ajaxReturn('注册成功！请登陆', [], 1);
    }
}));


//提交登录表单
Route::post('/signin', array('before' => 'csrf,guest', function () {
    if (Auth::attempt(array('email' => Input::get('email'), 'password' => Input::get('password')), Auth::viaRemember())) {
        AppHelper::ajaxReturn('登陆成功！', [], 1);
//        return Redirect::intended('dashboard');
    } else {
        AppHelper::ajaxReturn('登陆失败！');
    }
}));

//用户访问“个人资料”
Route::get('/profile', array('before' => 'auth', function () {
    // 只有验证用户可以访问……
}));

//用户中心，展示个人信息
Route::get('/dashboard', array('before' => 'auth', function () {
    // 只有验证用户可以访问……
}));

//用户退出
Route::get('/logout', array('before' => 'auth', function () {
    Auth::logout();
    return Redirect::to("/");
}));


//Event::listen('auth.login', 'LoginHandler', 10);