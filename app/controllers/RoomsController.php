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
            return Redirect::back()->withInput()->withErrors($validator)->withInput();
        } else {
            $model = new Rooms();
            $model->create_time = time();
            $model->create(Input::all());
            $model->save();
            AppHelper::showMessage('发布成功！', [], 1);
        }
    }

    protected function doBuildNewCar()
    {

        $validator = Validator::make(Input::all(), Cars::$createRules);
        if ($validator->fails()) {
            dd($validator->messages());
            return Redirect::back(302)->withErrors($validator)->withInput();
        } else {

            // @TODO  处理上传图片
            $files = Input::file();
            $destinationPath = $_SERVER['DOCUMENT_ROOT'].'uploads/';

            $imageCount = 5;    //可上传图片总数
            $imageFillCount = 0;  //有效图片数
            $imageLegalSize = 1024*1024; //1M

            //检查所有上传的文件是否有效
            for ($i = 0; $i < $imageCount; $i++) {
                if (Input::hasFile('image' . $i)) {
                    $file = Input::file('image' . $i);
                    if (!$file->isValid()) {
                        Redirect::back(302)->withErrors(['upload_error'.$i,"你上传的文件有误，请上传图片格式文件。"]);
                    }
                    if($file->getMaxFilesize() > $imageLegalSize){
                        Redirect::back(302)->withErrors(['upload_error'.$i,"你上传的图片太大了，请上传小语1M的图片哦！"]);
                    }
                    $imageFillCount++;
                }
                unset($file);
            }

            //开始保存图片
            $images = [];
            for ($i = 0; $i < $imageCount; $i++) {
                if (Input::hasFile('image' . $i)) {
                    $file = Input::file('image' . $i);
//                    if ($file->isValid()) {
                        //转移文件并保存文件名
                        $newFileName = md5(time()).'.'.$file->getClientOriginalExtension();
                        $file->move($destinationPath,$newFileName);
                        $images[] = $destinationPath.$newFileName;
//                    }
                }
                unset($file,$newFileName);
            }

            $carModel = new Cars(Input::all());
            $carModel->create_time = time();
            $rs = $carModel->save();
            if($rs){
                //保存图片

            }else{
                Redirect::back()->withInput()->withErrors($carModel->getErrors());
            }
            dd($rs);

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
        echo '还没有开发完...';
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
