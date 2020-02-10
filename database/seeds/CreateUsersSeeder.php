<?php


use Illuminate\Database\Seeder;
use App\User;
class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name'=>'User Biasa',
                'username'=>'12@as',
                'login_userid'=>'1',
                'is_admin'=>'1',
                'is_teacher'=>'0',
                'is_parent'=>'0',
                'password'=> bcrypt('123456'),
            ],
            [
                'name'=>'Parents',
                'username'=>'xx@xx',
                'login_userid'=>'2',
                'is_admin'=>'0',
                'is_teacher'=>'0',
                'is_parent'=>'1',
                'password'=> bcrypt('123456'),
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }

}
