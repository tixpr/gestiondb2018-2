<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    private function obtenerNombre()
	{
		$apellidos = ['Valencia','Lopez','Suarez','Torres','Soto','Pacheco','Rodrigez','Sanchez','Garcia','Rojas','Diaz','Paredes','Galarza','Inga','Perez'];
		$nombres = ['Juan','Carlos','Ruth','Eliana','Diego','Valentina','Maria','Luisa','Yanina','Romina','Liliana','Lili','Elizabeth','Ruben','Efrain'];
		$n = rand(1,2);
		$name = "";
		switch($n){
			case 1:{
				$name = $nombres[rand(0,14)];
			};break;
			case 2:{
				$name = $nombres[rand(0,14)]." ".$nombres[rand(0,14)];
			};break;
		}
		$fullname = $apellidos[rand(0,14)].' '.$apellidos[rand(0,14)].' '.$name;
		return $fullname;
	}
    public function run()
    {
        
        for($i=1;$i<=1000;$i++){
            DB::table('users')->insert([
                'email' => 'usuario' .$i.'@gmail.com',
                'password' => bcrypt('12345'),
                'created_at'=>now(),
                'updated_at'=>now(),
                'username'=>$this->obtenerNombre(),
                'is_valid'=>true
            ]);

        }
    }
}
