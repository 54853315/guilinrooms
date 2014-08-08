<?php
/**
 * Created by PhpStorm.
 * User: konakona
 * $Id$
 * Date: 14-8-4
 * Time: 下午11:38$
 */

class AppHelper extends Controller
{
    /**
     * 封装一枚简单的json输出，格式与ThinkPHP一致
     * @param $message
     * @param array $data
     * @param int $status
     */
    public static function ajaxReturn($message, $data = [], $status = 0)
    {
        if (Request::ajax()) {
            $json_arr['message'] = $message;
            $json_arr['data'] = $data;
            $json_arr['status'] = intval($status);
            echo json_encode($json_arr,JSON_FORCE_OBJECT);
            exit;
        }
    }

    /**
     * 显示提示语
     * @param string $message
     * @param string $url
     */
    public static function showMessage($message = '操作成功', $url = '')
    {
        $this->layout = View::make('layouts.success');
        $code = ($code == 200 || $code == 300) ? $code : 200;
        $this->layout->content = $message;
    }

}