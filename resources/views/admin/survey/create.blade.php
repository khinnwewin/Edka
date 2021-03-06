@extends('admin.layout.app')

@section('content')
    <section class="content-header">
        <h1>
            Create Survey
        </h1>
        <span ><a href='{{ route("survey.index") }}' class="btn btn-sm btn-primary"><i class="fa fa-arrow-circle-left"></i>&nbsp;&nbsp;Go To Survey</a></span>
    </section>
    <div class="content">
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                {!! Form::open(['route' => 'survey.store', 'files' => 'true']) !!}

                    <div class="form-group col-sm-12">
                        {!! Form::label('name', 'Name') !!} <span class="text-danger">*</span>
                        {!! Form::text('name', null, ['class' => 'form-control']) !!}
                        @if ($errors->has('name'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                       @endif
                    </div>
                    <div class="form-group col-sm-12">
                        {!! Form::label('phone', 'Phone Number') !!} <span class="text-danger">*</span>
                        {!! Form::text('phone', null, ['class' => 'form-control']) !!}
                        @if ($errors->has('phone'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('phone') }}</strong>
                            </span>
                       @endif
                    </div>
                    <div class="form-group col-sm-12">
                        {!! Form::label('company', 'Company Name') !!} <span class="text-danger">*</span>
                        {!! Form::text('company', null, ['class' => 'form-control']) !!}
                        @if ($errors->has('company'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('company') }}</strong>
                            </span>
                       @endif
                    </div>
                    <div class="form-group col-sm-12">
                        {!! Form::label('designation', 'Designation') !!} <span class="text-danger">*</span>
                        {!! Form::text('designation', null, ['class' => 'form-control']) !!}
                        @if ($errors->has('designation'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('designation') }}</strong>
                            </span>
                       @endif
                    </div>
                     
                   
                   

                    <div class="form-group col-sm-12">
                       {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                       <a href="{!! route('survey.index') !!}" class="btn btn-default">Cancel</a>
                    </div>

               {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection