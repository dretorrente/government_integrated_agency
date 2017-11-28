<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$users = [
			['name'          => 'Paolo Ching',
			'email'          => 'chingjohnpaolo@gmail.com',
			'role'           => 'guest',
			'password'       => '$2y$10$faPex6AGc41u3MdVfFq7tOdA56dp4DiB9NnSBHcPwyFU2.w.iPO9S',
			'remember_token' => 'hmIXpbijAh3KE6BIKHhOCfnaWj6zqV1aMM1DxPgVvcttHmwQUsB72rxUXvNe',
			'created_at'     => '2017-10-30 00:18:27',
			'updated_at'     => '2017-10-30 00:18:27'
        	],
			['name'          => 'John Adres',
			'email'          => 'johnadres@gmail.com',
			'role'           => 'guest',
			'password'       => '$2y$10$glMAvHwZMctj/JJg9m2ys.MwgbaTLN5Wxb9ozO6k/WJUFkompHqG6',
			'remember_token' => 'LceA5fqQgyArkAnceirIpn7rgdLUCoZECTv86nGwvJ3ZUW8TTPTDc7qE5zP4',
			'created_at'     => '2017-11-01 19:28:20',
			'updated_at'     => '2017-11-01 19:28:20'
        	],
			['name'          => 'Mira Cepe',
			'email'          => 'miracepe@gmail.com',
			'role'           => 'guest',
			'password'       => '$2y$10$fqgdb.QXNo3p4l2SacBEaO/krhAuNs0K/ZYynmn9CjWNteR6TUEEi',
			'remember_token' => 'hz8nPEdUXB3hwJ10xxnaapq9lwfFemFPhokyFMGBrbZ3OCRacouPLoe1K7dO',
			'created_at'     => '2017-10-30 00:18:27',
			'updated_at'     => '2017-10-30 00:18:27'
        	],
			['name'          => 'admin',
			'email'          => 'admin@gmail.com',
			'role'           => 'admin',
			'password'       => bcrypt('adminadmin'),
			'remember_token' => 'Ll3LD3vS6FWE1KEiRRXOudkP6PwwZ6HY0xo9e4enjdmesjRsllfjDMIhMzZB',
			'created_at'     => '2017-11-28 02:01:29',
			'updated_at'     => '2017-11-28 02:01:29'
        	],
    	];

        DB::table('users')->insert($users);
    }
}
