<?php

use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();





		$this->call('UserTableSeeder');

        $this->call('ProjectTableSeeder');

        $this->call('ProfileTableSeeder');

        $this->call('RecordTableSeeder');
	}

}


class UserTableSeeder extends Seeder{
    public function run()
    {
        DB::table('users')->insert(
            array(
                array(
                    'username'      =>  'king',
                    'email'         =>  'chuxiking@sina.com',
                    'password'      =>  '123456',
                    'activated'     =>  1,
                    'act_code'      =>  '12345677777',
                    'banned'        =>  0,
                ),
            )
        );

    }
}

class ProjectTableSeeder extends Seeder{

    public function run(){
        DB::table('projects')->insert(
            array(
                array(
                    'cid'       => 'ZHJ14041200123456',
                    'title'     => '金翰飞是个蠢货',
                    'amount'    => 500,
                    'rate'      => 20,
                    'expiration'=> '2014-02-01',
                    'collected' => 500,
                    'duration'  => 30,
                    'returned'  => 4,
                    'stime'     => '2014-01-01',
                    'etime'     => '2015-02-01',
                ),
                array(
                    'cid'       => 'ZHJ14041200019333',
                    'title'     => '五金商贸企业流动资金贷款一',
                    'amount'    => 1200,
                    'rate'      => 13,
                    'expiration'=> '2014-06-01',
                    'collected' => 1000,
                    'duration'  => 30,
                    'returned'  => 1,
                    'stime'     => '2014-05-01',
                    'etime'     => '2015-05-01',
                ),
                array(
                    'cid'       => 'ZHJ14041200019221',
                    'title'     => '五金商贸企业流动资金贷款二',
                    'amount'    => 1000,
                    'rate'      => 15,
                    'expiration'=> '2014-08-01',
                    'collected' => 457,
                    'duration'  => 30,
                    'returned'  => 0,
                    'stime'     => '2014-07-01',
                    'etime'     => '2015-07-01',
                ),
            )
        );

    }
}

class ProfileTableSeeder extends Seeder{

    public function run(){
        DB::table('profiles')->insert(
            array(
                array(
                    'pid'   =>  1,
                    'dbjg'  =>  'alibaba',
                    'dyw'   =>  'alibaba',
                    'fxkz'  =>  'alibaba',
                    'dbjgyj'=>  'alibaba',
                    'zjyt'   =>  'alibaba',
                    'hkly'   =>  'alibaba',
                    'qybj'   =>  'alibaba',
                    'jyfw'   =>  'alibaba',
                    'jyzk'   =>  'alibaba',
                ),
                array(
                    'pid'   =>  2,
                    'dbjg'  =>  'alibaba',
                    'dyw'   =>  'alibaba',
                    'fxkz'  =>  'alibaba',
                    'dbjgyj'=>  'alibaba',
                    'zjyt'   =>  'alibaba',
                    'hkly'   =>  'alibaba',
                    'qybj'   =>  'alibaba',
                    'jyfw'   =>  'alibaba',
                    'jyzk'   =>  'alibaba',
                ),
                array(
                    'pid'   =>  3,
                    'dbjg'  =>  'alibaba',
                    'dyw'   =>  'alibaba',
                    'fxkz'  =>  'alibaba',
                    'dbjgyj'=>  'alibaba',
                    'zjyt'   =>  'alibaba',
                    'hkly'   =>  'alibaba',
                    'qybj'   =>  'alibaba',
                    'jyfw'   =>  'alibaba',
                    'jyzk'   =>  'alibaba',
                ),
            )
        );
    }
}

class RecordTableSeeder extends Seeder{
    public function run(){
        DB::table('records')->insert(
            array(
                array(
                    'pid'   =>  1,
                    'uid'   =>  1,
                    'amount'=>  20,
                    'stime' =>  date('Y-M-D'),
                ),
                array(
                    'pid'   =>  1,
                    'uid'   =>  1,
                    'amount'=>  40,
                    'stime' =>  date('Y-M-D'),
                ),
                array(
                    'pid'   =>  2,
                    'uid'   =>  1,
                    'amount'=>  20,
                    'stime' =>  date('Y-M-D'),
                ),
                array(
                    'pid'   =>  3,
                    'uid'   =>  1,
                    'amount'=>  10,
                    'stime' =>  date('Y-M-D'),
                )
            )
        );
    }
}