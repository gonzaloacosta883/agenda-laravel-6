<?php

use Illuminate\Database\Seeder;
use App\Persona;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder {
    
	public $arrayPersonas = array(
		array(
			'documento' => '33123456',
			'nombre' => 'Juan', 
			'apellido' => 'Gonzalez', 
			'direccion' => 'Av larralde 1512', 
			'numero' =>'0343156123321',
			'es_familiar' => false,
			),
		array(
			'documento' => '37523888',
			'nombre' => 'Maria', 
			'apellido' => 'Gonzalez', 
			'direccion' => 'Av larralde 1512', 
			'numero' =>'0343156123344',
			'es_familiar' => false, 
			),
		array(
			'documento' => '21523778',
			'nombre' => 'Victoria', 
			'apellido' => 'Martinez', 
			'direccion' => 'Av Americas 456', 
			'numero' =>'0343156123754',
			'es_familiar' => false, 
			),
		array(
			'documento' => '29554666',
			'nombre' => 'Homero', 
			'apellido' => 'Simpsons', 
			'direccion' => 'Av Siempre Vivas 1234', 
			'numero' =>'0343155258741',
			'es_familiar' => true, 
			),
		array(
			'documento' => '26951753',
			'nombre' => 'Laura', 
			'apellido' => 'Gimenez', 
			'direccion' => 'Av Rivadavia 325', 
			'numero' =>'0343154852159',
			'es_familiar' => false, 
			),
		array(
			'documento' => '35112256',
			'nombre' => 'Pedro', 
			'apellido' => 'Lescamoso', 
			'direccion' => 'Av Ramirez 25', 
			'numero' =>'0343154155661',
			'es_familiar' => true, 
		)
	);

    public function run() {
        // $this->call(UsersTableSeeder::class);
      	self::seedPersona();
 		$this->command->info('Tabla usuarios inicializada con datos!');
    }

    public function seedPersona() {
    	DB::table('mi_agenda')->delete();
	    	foreach( $this->arrayPersonas as $persona ) {
			 $p = new Persona;
			 $p->documento = $persona['documento'];
			 $p->nombre = $persona['nombre'];
			 $p->apellido = $persona['apellido'];
			 $p->direccion = $persona['direccion'];
			 $p->numero = $persona['numero'];
			 $p->es_familiar = $persona['es_familiar'];
			 $p->save();
			}
    }
}
