
<style>
    table, td, th, tfoot {border:solid 1px #000; padding:5px;}
    th {background-color:#999;}
    caption {font-size:x-large;}
    colgroup {background:#F60;}
</style>

    <h1>Dados das produções e ações</h1>
   
    <table>
            <tr>
                <th>Tipo de produção</th>
                <th>Associado</th>
                <th>Insumos necessários</th>
                <th>Previsão</th>
            </tr>

        @foreach($producao as $producao)
        <tr>
            <td>{{ $producao->tipo }}</td>
            <td>{{ $producao->cpfprod}}</td>
            <td>{{ $producao->insumos }}</td>
            <td>{{ $producao->previsao }}</td>
        </tr>
        @endforeach
        <tfoot>
            <tr><td colspan="4">Total Produzido: {{ $dados['japroduziu'] }}</td></tr>

            <tr><td colspan="4">Produções futuras: {{ $dados['prevista'] }}</td></tr>

            <tr><td colspan="4">Total de tipos: {{ $dados['tipo'] }}</td></tr>

            <tr><td colspan="4">Total de produtores: {{ $dados['tese'] }}</td></tr>

        </tfoot>
    </table>



<table>
<thead>
<tr><th colspan="4">Tabela de preços</th></tr>
</thead>

<tbody>
<tr>
<td rowspan="2"> Seminovos</td>
<td>Trompete</td>
<td>Trombone</td>
<td>Trompa</td>
</tr>
<tr>
<td>$500</td>
<td>$640</td>
<td>$650</td>
</tr>
</tbody>
</table>
