<?php
/**
 * Created by PhpStorm.
 * User: konakona
 * $Id$
 * Date: 14-8-4
 * Time: 上午2:19$
 */

class BaseController extends Controller
{

    protected $layout = 'layouts.master';

    /**
     * Setup the layout used by the controller.
     *
     * @return void
     */
    protected function setupLayout()
    {
        if (!is_null($this->layout)) {
            $this->layout = View::make($this->layout);
        }
    }

    /**
     * 空方法
     * 乃异常访问，因此返回404
     * @param array $pars
     */
    public function missingMethod($pars = [])
    {
        App::abort(404);
    }

}
