<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
    	/*DB::table('atendentes')->insert([
            'name' => 'Atendente Teste',
            'email' => 'carlos_henreis@outlook.com', 
            'password' => Hash::make('qwe123'), 
            'cpf' => '11567432323', 
            'nascimento' => "1990-03-12", 
            'sexo' => 'M', 
            'salario' => 2300, 
            'telefone' => 998142507, 
            'endereco' => 'BPS 120 Itajubá',
        ]);

        DB::table('presidentes')->insert([
            'name' => 'Presidente Teste',
            'email' => 'presidentes@coopagro.com', 
            'password' => Hash::make('qwe123'), 
            'cpf' => '11200812309', 
            'nascimento' => "1980-05-23", 
            'sexo' => 'F', 
            'telefone' => 03423423433,
            'endereco' => 'Boa Vista 34 Pedralva', 
            'inicio' => "2016-01-01", 
            'fim' => "2016-06-01", 
            
            
        ]);
        DB::table('tecnicos')->insert([
            'name' => 'tecnico Teste',
            'email' => 'tecnico@gamail.com', 
            'password' => Hash::make('qwe123'), 
            'cpf' => '00011122234', 
            'nascimento' => "1995-03-12", 
            'sexo' => 'M', 
            'salario' => 23100, 
            'telefone' => 123453233, 
            'endereco' => 'Cruzeiro 231 Itajubá',
        ]);*/
        
        DB::table('associados')->insert([
            'name' => 'Associado Teste',
            'cpf' => '88877766655',
            'rg' => 'mg15444888',
            'nascimento' => '1980-05-20',
            'endereco' => 'Rua JK',
            'telefone' => '03536234567',
            'email' => 'teste-associado@coopagro.com',
            'tipo' => 'Agricultura',
        ]);
    }
}
