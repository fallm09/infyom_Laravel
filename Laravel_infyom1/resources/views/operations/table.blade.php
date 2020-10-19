<div class="table-responsive">
    <table class="table" id="operations-table">
        <thead>
            <tr>
                <th>Numoperation</th>
        <th>Typeoperation</th>
        <th>Dateoperation</th>
        <th>Montantoperation</th>
        <th>Etats</th>
        <th>Agence</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($operations as $operations)
            <tr>
                <td>{{ $operations->numoperation }}</td>
            <td>{{ $operations->typeoperation }}</td>
            <td>{{ $operations->dateoperation }}</td>
            <td>{{ $operations->montantoperation }}</td>
            <td>{{ $operations->etats }}</td>
            <td>{{ $operations->agence }}</td>
                <td>
                    {!! Form::open(['route' => ['operations.destroy', $operations->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('operations.show', [$operations->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('operations.edit', [$operations->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
