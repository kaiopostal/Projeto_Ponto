
<table>
    <thead>
        <tr>
            <th><h1>Data</h1> </th>
            <th>Entrada</th>
            <th>Saida</th>
            <th>Entrada</th>
            <th>Saida</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($pontos as $ponto)
            <tr>
                <td>{{$ponto->datas}}</td>
                <td>{{$ponto->ponto1}}</td>
                <td>{{$ponto->ponto2}}</td>
                <td>{{$ponto->ponto3}}</td>
                <td>{{$ponto->ponto4}}</td>
            </tr>
        @endforeach
    </tbody>
</table>