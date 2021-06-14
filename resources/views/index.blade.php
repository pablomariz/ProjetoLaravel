@extends('principal')

@section('conteudo-principal')

    <section>

        <table class="striped">
            <thead>
                <tr>
                    <th>Carros</th>
                    <th>Ano Fabricação</th>
                    <th>Opção</th>
                </tr>
            </thead>

            <tbody>
                @forelse($carros as $carro)
                    <tr>
                        <td>{{$carro}}</td>
                        <td>{{$ano_fabricacao}}</td>
                        <td>Remover</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="2">Não existe carros cadastrados</td>
                    </tr>
                @endforelse


            </tbody>
        </table>

    </section>

@endsection
