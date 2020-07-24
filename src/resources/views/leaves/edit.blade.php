@extends('resources.views.layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/leaves.singular')
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($leave, ['route' => ['leaves.update', $leave->id], 'method' => 'patch']) !!}

                        @include('leaves.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
