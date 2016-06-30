 <script
    src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>


<style>
    table, td, th, tfoot {border:solid 1px #000; padding:5px;}
    th {background-color:#999;}
    caption {font-size:x-large;}
    colgroup {background:#F60;}
    #button {
 color: #fff;
 font-size: 0;
 width: 135px;
 height: 60px;
 border: none;
 margin: 0;
 padding: 0;
 background: #0c0; 
}
}
</style>

<div id="print" class="conteudo">

        <h1>Relatório geral de produção</h1>
        <h5>Dia de emissão :{{ $dados['hj'] }}</h5>
       
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
                <tr>
                    <th colspan="4">Dados Estatisticos</th>
                </tr>
                <tr><td colspan="4">Total já Produzido: {{ $dados['japroduziu'] }}</td></tr>

                <tr><td colspan="4">Produções futuras: {{ $dados['prevista'] }}</td></tr>

                <tr>
                    <td rowspan="1">Tipo mais produzido/qauntidade:</td>
                    <td>Tipo: {{ $dados['tipo'] }}</td>
                    <td colspan="3">Quantidade: {{ $dados['maxproduzido'] }}</td>
                </tr>

                <tr><td colspan="4">Total de tipos: {{ $dados['qtdtipo'] }}</td></tr>

                <tr><td colspan="4">Total de produtores: {{ $dados['associado'] }}</td></tr>
    <tr><td colspan="4">
        <div id="container"style="min-width: 310px; height: 600px; margin: 0 auto"></div>
    </td></tr>
            </tfoot>
        </table>


   
</div>
<input type="submit" name="submit" value="Send" id="submit" />

<input type="button" onclick="cont();" value="Imprimir relatório">


<script type="text/javascript">
$(function () {
    // Create the chart
    $('#container').highcharts({
        chart: {
            type: 'column'
        },
        xAxis: {
            type: 'tipos'
        },
        yAxis: {
            title: {
                text: 'Quantidade'
            }

        },
        legend: {
            enabled: false
        },
        plotOptions: {
            series: {
                borderWidth: 0,
                dataLabels: {
                    enabled: true,
                    format: '{point.y:.1f}'
                }
            }
        },

        tooltip: {
            headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
            pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}</b> of total<br/>'
        },

        series: [{

            <?php $teste = 0; 
                  $pai = $dados['tiposgraf'];
            ?>
            name: 'Produções',
            colorByPoint: true,
            data: [
            @foreach($dados['qtdgraf'] as $dados['qtdgraf'])
            {
                name: '{{ $pai[$teste] }}',
                y: {{ $dados['qtdgraf'] }},
                drilldown: '{{ $pai[$teste++] }}',
            },
            @endforeach
            ]
        }],
    });
});
</script>

<script>
function cont(){
   var conteudo = document.getElementById('print').innerHTML;
   tela_impressao = window.open('about:blank');
   tela_impressao.document.write(conteudo);
   tela_impressao.window.print();
   tela_impressao.window.close();
}
</script>

