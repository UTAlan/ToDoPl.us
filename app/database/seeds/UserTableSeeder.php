<?php

class UserTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        $user = new User;

        $user->fill(array(
            'username'    => 'UTAlan',
            'email'     => 'alan@alanbeam.net'
        ));

        $user->password = Hash::make('J3FGsltw16');
        //$user->password_confirmation = Hash::make('J3FGsltw16');

        $user->save();
    }

}