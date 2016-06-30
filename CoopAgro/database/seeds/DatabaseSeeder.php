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
    	DB::table('atendentes')->insert([
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
        ]);

        DB::table('associados')->insert([ 
            'name' => 'Zé Mirto',
            'cpf' => '12312312312', 
            'rg' => '10000111', 
            'nascimento' => "1980-'11'-21", 
            'endereco' => 'Zona Rural Itajubá',
            'telefone' => 12345532, 
            'email' => 'mirto@outlook.com',
            'tipo' => 'Pecuaria', 
        ]);

        DB::table('associados')->insert([
            'name' => 'Jacu da Roça',
            'cpf' => '00923489242', 
            'rg' => '000232123', 
            'nascimento' => "1970-09-01", 
            'endereco' => 'Canta Galo',
            'telefone' => 56785908, 
            'email' => 'samir@outlook.com',
            'tipo' => 'Mista', 
        ]);

        DB::table('associados')->insert([    
            'name' => 'Joaquim do Brejo',
            'cpf' => '45690845683', 
            'rg' => '9009899', 
            'nascimento' => "1993-03-12", 
            'endereco' => 'BPS 12 Itajubá',
            'telefone' => 05002016007, 
            'email' => 'crianca@outlook.com',
            'tipo' => 'Agricultura', 
        ]);

        DB::table('producaos')->insert([    
            'cpfprod' => '45690845683',
            'tipo' => 'inhame', 
            'previsao' => '2016-07-12', 
            'insumos' => 15, 
            'observacoes' => 'Inhame da no brejo',
        ]);

        DB::table('producaos')->insert([    
            'cpfprod' => '45690845683',
            'tipo' => 'rabanete', 
            'previsao' => '2016-03-03', 
            'insumos' => 153, 
            'observacoes' => 'rabanete nao da no brejo',
        ]);

        DB::table('producaos')->insert([    
            'cpfprod' => '45690845683',
            'tipo' => 'soja', 
            'previsao' => '2016-07-12', 
            'insumos' => 15, 
            'observacoes' => 'caso o inhame nao produza, so para garantir',
        ]);

        DB::table('producaos')->insert([    
            'cpfprod' => '12312312312',
            'tipo' => 'inhame', 
            'previsao' => '2016-05-12', 
            'insumos' => 1, 
            'observacoes' => 'Inhame tá caro por isso é legal plantar',
        ]);

        DB::table('producaos')->insert([    
            'cpfprod' => '00923489242',
            'tipo' => 'cacau', 
            'previsao' => '2016-06-12', 
            'insumos' => 81, 
            'observacoes' => 'Cacau produz chocolata (hummmm)',
        ]);

        DB::table('producaos')->insert([    
            'cpfprod' => '00923489242',
            'tipo' => 'groselha', 
            'previsao' => '2016-12-12', 
            'insumos' => 1, 
            'observacoes' => 'Pois é groselha existe e nao e produzido em laboratorio',
        ]);

        DB::table('producaos')->insert([    
            'cpfprod' => '12312312312',
            'tipo' => 'milho', 
            'previsao' => '2016-01-20',
            'insumos' => 150, 
            'observacoes' => 'milho da milhão',
        ]);

    }
}
