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

Route::get('/r/{id}', function ($id) {
    $room = Rooms::whereId($id)->first();
    return View::make('room.info')->with(['room' => $room]);
});
Route::get('/search/*', 'RoomsController@showSearch');

//使用rooms可以访问Rooms控制器中的所有有效方法
Route::controller('rooms', 'RoomsController');

Route::get('/new', function () {
    return View::make('room.new_select');
});

//统一处理发布界面
Route::get('/new/{t}', function ($type) {
    return View::make('room.new_' . $type)->with(['areas' => RoomsController::getArea(0)]);
});

//处理发布请求
Route::post('/new/save', 'RoomsController@save');
//Route::post('/new/save', function(){
//    return Redirect::back()->withInput();
//});


//提交注册表单
Route::any('/signup', array('before' => 'csrf,guest', function () {

    $signupRules = array(
        'username' => 'required|min:6|max:14|unique:members',
        'password' => 'required|min:8|max:26|confirmed',
        'email' => 'required|email|unique:members'
    );

    $validator = Validator::make(Input::all(), $signupRules);
    if ($validator->fails()) {
        AppHelper::ajaxReturn($validator->messages()->first(), $validator->messages(), 0);
    } else {
        $model = new Members();
        $model->username = Input::get('username');
        $model->password = Hash::make(Input::get('password'));
        $model->email = Input::get('email');
        $model->create_time = time();
        $model->save();
        $username = Input::get('username'); //不能直接将返回值给Auth用，必须先赋值
        Auth::login(Members::where("username", "=", $username)->first());
        AppHelper::ajaxReturn('注册成功！感谢您的支持。', [], 1);
    }
}));


//提交登录表单
Route::any('/signin', array('before' => 'csrf,guest', function () {
    if (!Input::get('email')) {
        AppHelper::ajaxReturn('请输入注册邮箱');
    }
    if (!Input::get('password')) {
        AppHelper::ajaxReturn('请输入登录密码');
    }
    if (Auth::attempt(array('email' => Input::get('email'), 'password' => Input::get('password')), Auth::viaRemember())) {
        AppHelper::ajaxReturn('登录成功！', [], 1);
    } else {
        AppHelper::ajaxReturn('账号或密码错误。');
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