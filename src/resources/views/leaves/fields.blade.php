<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', __('models/leaves.fields.user_id').':') !!}
    {!! Form::number('user_id', null, ['class' => 'form-control']) !!}
</div>

<!-- From Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('from_date', __('models/leaves.fields.from_date').':') !!}
    {!! Form::date('from_date', null, ['class' => 'form-control','id'=>'from_date']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#from_date').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endpush

<!-- To Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('to_date', __('models/leaves.fields.to_date').':') !!}
    {!! Form::date('to_date', null, ['class' => 'form-control','id'=>'to_date']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#to_date').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endpush

<!-- Reason Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('reason', __('models/leaves.fields.reason').':') !!}
    {!! Form::textarea('reason', null, ['class' => 'form-control']) !!}
</div>

<!-- Compoff Field -->
<div class="form-group col-sm-6">
    {!! Form::label('compoff', __('models/leaves.fields.compoff').':') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('compoff', 0) !!}
        {!! Form::checkbox('compoff', '1', null) !!} 1
    </label>
</div>

<!-- Compoffreason Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('compoffreason', __('models/leaves.fields.compoffreason').':') !!}
    {!! Form::textarea('compoffreason', null, ['class' => 'form-control']) !!}
</div>

<!-- Created By Field -->
<div class="form-group col-sm-6">
    {!! Form::label('created_by', __('models/leaves.fields.created_by').':') !!}
    {!! Form::number('created_by', null, ['class' => 'form-control']) !!}
</div>

<!-- Updated By Field -->
<div class="form-group col-sm-6">
    {!! Form::label('updated_by', __('models/leaves.fields.updated_by').':') !!}
    {!! Form::number('updated_by', null, ['class' => 'form-control']) !!}
</div>

<!-- Deleted By Field -->
<div class="form-group col-sm-6">
    {!! Form::label('deleted_by', __('models/leaves.fields.deleted_by').':') !!}
    {!! Form::number('deleted_by', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('leaves.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>
