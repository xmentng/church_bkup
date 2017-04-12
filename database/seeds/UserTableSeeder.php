<?php
use Illuminate\Database\Seeder;
use App\User as User;
  
class UserTableSeeder extends Seeder {
  
    public function run() {
       //delete users table records
         DB::table('users')->delete();
  
        User::create( [
            'email' => 'xmentng@yahoo.com' ,
            'password' => Hash::make( 'Cyclops@35' ) ,
            'name' => 'pablo' ,
        ] );

        User::create( [
            'email' => 'hop@headquarters.com' ,
            'password' => Hash::make( 'pastorrebecca' ) ,
            'name' => 'Pastor Rebecca' ,
        ] );

        User::create( [
            'email' => 'bibi@yahoo.com' ,
            'password' => Hash::make( 'pastorbayo' ) ,
            'name' => 'Pastor Bayo' ,
        ] );

        User::create( [
            'email' => 'val4u@gmail.com' ,
            'password' => Hash::make( 'doctorval' ) ,
            'name' => 'Dr Val' ,
        ] );

        User::create( [
            'email' => 'julipips@yahoo.com' ,
            'password' => Hash::make( 'sisterjuliet' ) ,
            'name' => 'Sister Juliet' ,
        ] );

        User::create( [
            'email' => 'funmilove@hotmail.com' ,
            'password' => Hash::make( 'funmilove' ) ,
            'name' => 'Sister Funmi' ,
        ] );

        User::create( [
            'email' => 'joebloggs@yahoo.com' ,
            'password' => Hash::make( 'joeblogger' ) ,
            'name' => 'John Doe' ,
        ] );
    }
}