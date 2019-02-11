<?php
use Illuminate\Database\Seeder;

class SuperadminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $superadmin = new App\Superadmin;
        $superadmin->name = 'Erick Firmo';
        $superadmin->email = 'erickluques@gmail.com';
        $superadmin->password = bcrypt('12345678');
        $superadmin->remember_token = str_random(10);
        $superadmin->save();

        $superadmin = new App\Superadmin;
        $superadmin->name = 'Raphael Santanna';
        $superadmin->email = 'projetosraphael@gmail.com';
        $superadmin->password = bcrypt('12345678');
        $superadmin->remember_token = str_random(10);
        $superadmin->save();        

        $superadmin = new App\Superadmin;
        $superadmin->name = 'Leandro Stravalli';
        $superadmin->email = 'las@btcprime.com';
        $superadmin->password = bcrypt('12345678');
        $superadmin->remember_token = str_random(10);
        $superadmin->save();
    }

}