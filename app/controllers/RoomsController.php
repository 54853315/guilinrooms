<?php
/**
 * Created by PhpStorm.
 * User: konakona
 * $Id$
 * Date: 14-8-4
 * Time: 上午2:19$
 */

class RoomsController extends BaseController
{

    public function save()
    {
        print_r($_POST);
        switch ($_POST['t']) {
            case 'car':
                $this->doBuildNewCar();
                break;
            case 'sell':
                $this->doBuildNewRoom();
                break;
            case 'rent';
                break;
        }
        exit;
    }

    protected function doBuildNewRoom()
    {

        $validator = Validator::make(Input::all(), Cars::$createRules);

        if ($validator->fails()) {
            return Redirect::back()->withInput()->withErrors($validator->messages());
        } else {
            $model = new Cars();
            $model = Input::all();
//            $model->title = Input::get('title');
//            $model->description = Input::get('description');
//            $model->contact_info = Input::get('contact_info');
//            $model->size = Input::get('size');
//            $model->price = Input::get('price');
//            $model->type = Input::get('type');
//            $model->type = Input::get('type');
            $model->create_time = time();
            $model->save();
//            AppHelper::showMessage('发布成功！', [], 1);
        }

    }

    protected function doBuildNewCar()
    {

        $validator = Validator::make(Input::all(), Cars::$createRules);

        if ($validator->fails()) {
            return Redirect::back()->withInput()->withErrors($validator->messages());
        } else {
            $model = new Cars();
            $model = Input::all();
//            $model->title = Input::get('title');
//            $model->description = Input::get('description');
//            $model->contact_info = Input::get('contact_info');
//            $model->size = Input::get('size');
//            $model->price = Input::get('price');
//            $model->type = Input::get('type');
//            $model->type = Input::get('type');
            $model->create_time = time();
            $model->save();
//            AppHelper::showMessage('发布成功！', [], 1);
        }

    }

    public function showInfo($id)
    {
        $sellCount = 0;
        $renCount = 0;
        $this->layout->content = View::make('room.info');
    }

    public function showSearch()
    {
    }

    public function showRent()
    {
    }

    public function showSell()
    {
    }

    /**
     * 显示我发布的房间，根据$type值进行分类显示
     *
     * @param $type
     * @return void
     * @author
     **/
    public function showMyRooms($type = 'sell')
    {
    }
}