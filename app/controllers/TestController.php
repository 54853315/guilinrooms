<?php
/**
 * Created by PhpStorm.
 * User: konakona
 * $Id$
 * Date: 14-8-4
 * Time: 下午9:13$
 */

class TestController extends Controller{
    public function action_index()
    {
        return View::make('home.index');
    }

    public function action_about()
    {
        return View::make('home.about', array(
            'sidenav' => array(
                array(
                    'url' => 'home',
                    'name' => 'Home',
                    'active' => false
                ),
                array(
                    'url' => 'about',
                    'name' => 'About',
                    'active' => true
                )
            )
        ));
    }
} 