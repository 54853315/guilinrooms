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
//        print_r($_POST);
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

    /**
     * 获取区域信息
     * @param int $id
     * @param bool|int $html
     * @return array
     */
    public static function getArea($id = 0, $html = 0)
    {
//        $result = DB::table('area')->where('pid', '=', $id)->where('status', '=', 1)->remember(10)->get();
        $result = DB::table('area')->where('pid', '=', $id)->where('status', '=', 1)->get();
        if ($html == 1) {
            if (is_null($result)) {
                return 0;
            }
            $code = "";
            foreach ($result as $area) {
                $code .= "<option value='{$area->id}'>{$area->name}</option>";
            }
            return $code;
        } else {
            return $result;
        }
    }

    protected function doBuildNewRoom()
    {
        $validator = Validator::make(Input::all(), Rooms::$createRules);

        if ($validator->fails()) {
            return Redirect::back()->withInput()->withErrors($validator->messages());   //不起作用！！
        } else {
            $model = new Rooms();
            $model->create_time = time();
            var_dump($model->create(Input::all()));
//            $model->title = Input::get('title');
//            $model->description = Input::get('description');
//            $model->contact_info = Input::get('contact_info');
//            $model->size = Input::get('size');
//            $model->price = Input::get('price');
//            $model->type = Input::get('type');
//            $model->type = Input::get('type');
            $model->save();
            AppHelper::showMessage('发布成功！', [], 1);
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