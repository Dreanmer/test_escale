<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User as User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		$this->call(UserTableSeeder::class);

		Model::reguard();
	}

}

class UserTableSeeder extends Seeder
{

	public function run()
	{
		User::truncate();
		User::create([
			'email' => 'admin@test.com',
			'password' => Hash::make('password'),
			'name' => 'Admin',
		]);
	}
}
