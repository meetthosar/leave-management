<!-- User Id Field -->
<div class="form-group">
    {!! Form::label('user_id', __('models/leaves.fields.user_id').':') !!}
    <p>{{ $leave->user_id }}</p>
</div>

<!-- From Date Field -->
<div class="form-group">
    {!! Form::label('from_date', __('models/leaves.fields.from_date').':') !!}
    <p>{{ $leave->from_date }}</p>
</div>

<!-- To Date Field -->
<div class="form-group">
    {!! Form::label('to_date', __('models/leaves.fields.to_date').':') !!}
    <p>{{ $leave->to_date }}</p>
</div>

<!-- Reason Field -->
<div class="form-group">
    {!! Form::label('reason', __('models/leaves.fields.reason').':') !!}
    <p>{{ $leave->reason }}</p>
</div>

<!-- Compoff Field -->
<div class="form-group">
    {!! Form::label('compoff', __('models/leaves.fields.compoff').':') !!}
    <p>{{ $leave->compoff }}</p>
</div>

<!-- Compoffreason Field -->
<div class="form-group">
    {!! Form::label('compoffreason', __('models/leaves.fields.compoffreason').':') !!}
    <p>{{ $leave->compoffreason }}</p>
</div>

<!-- Created By Field -->
<div class="form-group">
    {!! Form::label('created_by', __('models/leaves.fields.created_by').':') !!}
    <p>{{ $leave->created_by }}</p>
</div>

<!-- Updated By Field -->
<div class="form-group">
    {!! Form::label('updated_by', __('models/leaves.fields.updated_by').':') !!}
    <p>{{ $leave->updated_by }}</p>
</div>

<!-- Deleted By Field -->
<div class="form-group">
    {!! Form::label('deleted_by', __('models/leaves.fields.deleted_by').':') !!}
    <p>{{ $leave->deleted_by }}</p>
</div>

