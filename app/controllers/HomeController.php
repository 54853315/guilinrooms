<?php
/**
 * Created by PhpStorm.
 * User: konakona
 * $Id$
 * Date: 14-8-4
 * Time: 上午2:19$
 */

class HomeController extends BaseController {

	public function showWelcome()
	{
		// echo $url = URL::to('foo');
        $this->layout->content = View::make('hello');
	}
}
