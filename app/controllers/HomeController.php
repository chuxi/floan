<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('homes.home');
	}

    public function showContactus()
    {
        return View::make('homes.contactus');
    }

    public function showLicai()
    {

        return View::make('homes.licai');
    }

    public function showRongzi()
    {
        return View::make('homes.rongzi');
    }

    public function showBaozhang()
    {
        return View::make('homes.baozhang');
    }

    public function showAboutus()
    {
        return View::make('homes.aboutus');
    }

    public function showTuandui()
    {
        return View::make('homes.tuandui');
    }

    public function showDanbao()
    {
        return View::make('homes.danbao');
    }

    public function showGonggao()
    {
        return View::make('homes.gonggao');
    }

    public function showJieshao()
    {
        return View::make('homes.jieshao');
    }

}
