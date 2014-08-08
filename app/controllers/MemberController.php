<?php
/**
 * Created by PhpStorm.
 * User: konakona
 * $Id$
 * Date: 14-8-4
 * Time: 上午2:19$
 */

class MemberController extends BaseController{

	public function showProfile($id)
	{
        $user = Members::find($id);

        return View::make('user.profile')->with(compact($user));
	}
}