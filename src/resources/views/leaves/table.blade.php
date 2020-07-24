<div class="table-responsive">
    <table class="table" id="leaves-table">
        <thead>
            <tr>
                <th>@lang('models/leaves.fields.user_id')</th>
        <th>@lang('models/leaves.fields.from_date')</th>
        <th>@lang('models/leaves.fields.to_date')</th>
        <th>@lang('models/leaves.fields.reason')</th>
        <th>@lang('models/leaves.fields.compoff')</th>
        <th>@lang('models/leaves.fields.compoffreason')</th>
        <th>@lang('models/leaves.fields.created_by')</th>
        <th>@lang('models/leaves.fields.updated_by')</th>
        <th>@lang('models/leaves.fields.deleted_by')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($leaves as $leave)
            <tr>
                <td>{{ $leave->user_id }}</td>
            <td>{{ $leave->from_date }}</td>
            <td>{{ $leave->to_date }}</td>
            <td>{{ $leave->reason }}</td>
            <td>{{ $leave->compoff }}</td>
            <td>{{ $leave->compoffreason }}</td>
            <td>{{ $leave->created_by }}</td>
            <td>{{ $leave->updated_by }}</td>
            <td>{{ $leave->deleted_by }}</td>
                <td>
                    {!! Form::open(['route' => ['leaves.destroy', $leave->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('leaves.show', [$leave->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('leaves.edit', [$leave->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
