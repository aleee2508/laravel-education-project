<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use App\Models\BackpackUser;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BackpackUser::create([
          'name' => 'Superadmin',
          'email' => 'superadmin@centrodeformacion.com',
          'password' => Hash::make('123qwe')
        ])->assignRole('superadmin');
    }
}
