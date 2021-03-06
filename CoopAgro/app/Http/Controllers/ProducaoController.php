<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\producao;
use App\associado;
use App\Http\Requests;
use App\Http\Requests\ProducaoRequest;
use App\Http\Controllers\Controller;

class ProducaoController extends Controller
{
    public function __construct()
    {
    }

    public function index () {
    	$producao = producao::all();
    	return view('producao.cruds.index', ['producao' => $producao]);
    }
    public function create(){
        $associado = associado::all();
    	return view('producao.cruds.create', ['associado' => $associado]);
    }
    public function store(ProducaoRequest $request) {
        $input = $request->all();
        Producao::create($input);
        return redirect()->route('producao.cruds');
    }
    public function destroy($id) {
        $producao = Producao::find($id);
        $producao->delete();
        return redirect()->route('producao.cruds');
    }
    
    public function edit($id) {
        $producao = Producao::find($id);
        return view('producao.cruds.edit', compact('producao'));
    }
    
    public function update(ProducaoRequest $request, $id) {
        $producao = Producao::find($id)->update($request->all());
        return redirect()->route('producao.cruds');
    }
     /*
    Funções relacionadas aos relatórios de produção
    */

    public function relatorio() {
        return view('producao.relatorio.index');
    }
    public function tipo() {
        $producao = producao::select ('tipo')->groupBy ('tipo')->get ();
        return view('producao.relatorio.tipo', ['producao' => $producao]);
    }

    public function associado() {
        return view('producao.relatorio.associado');
    }

    public function geral() {

        $producao = DB::table('producaos')->select('*')->get();

        $tipos = producao::select ('tipo')->groupBy ('tipo')->get();

        $qtdmax = -1;

        for ($i=0; $i < count($tipos); $i++) { 
            $qtd = producao::select ('tipo')
                ->where('tipo', 'like', $tipos[$i]->tipo)
                ->count();
            $tiposgraf[$i] =  $tipos[$i]->tipo;
            $qtdgraf[$i] = $qtd;

        }
        
        for ($i=0; $i < count($tipos); $i++) { 
            $qtd = producao::select ('tipo')
                ->where('tipo', 'like', $tipos[$i]->tipo)
                ->count();
            if ($qtdmax <= $qtd) {
                $qtdmax = $qtd;
                $tipo = $tipos[$i]->tipo;
            }
        }
        $associado = producao::select ('cpfprod')->groupBy ('cpfprod')->get ();
        $datahoje = date("Y/n/j");       
        $prevista = DB::table('producaos')
                ->where('previsao', '>=', $datahoje)
                ->count();
        $japroduziu = DB::table('producaos')
                ->where('previsao', '<', $datahoje)
                ->count();
        $datahoje = date("j/n/Y");
        $dados['prevista'] = $prevista;
        $dados['japroduziu'] = $japroduziu;
        $dados['maxproduzido'] = $qtdmax;
        $dados['tipo'] = $tipo;
        $dados['associado'] = count($associado);
        $dados['qtdtipo'] = count($tipos);
        $dados['hj'] = $datahoje;

        $dados['qtdtotal'] = $prevista+$japroduziu;
        $dados['tiposgraf'] = $tiposgraf;
        $dados['qtdgraf'] = $qtdgraf;

        return view('producao.relatorio.geral', ['dados' => $dados], ['producao' => $producao]);
    }

    public function relatorioqual(Request $request) {
        $input = $request->all();
        if ($input['tiposDisponiveis'] == "Geral") {
            return redirect()->route('producao.relatorio.geral');
        }elseif ($input['tiposDisponiveis'] == "Associado") {
            return redirect()->route('producao.relatorio.associado');
        }elseif ($input['tiposDisponiveis'] == "Tipo") {
            return redirect()->route('producao.relatorio.tipo');
        }
    }
}

