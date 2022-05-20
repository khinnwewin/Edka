@extends('admin.layout.app')

@section('content')
    <section class="content-header">
        <h1>
           Survey Edit
        </h1>
        <span><a href='{{ route("survey.index") }}' class="btn btn-sm btn-primary"><i
                    class="fa fa-arrow-circle-left"></i>&nbsp;&nbsp;Go To survey</a></span>
    </section>
    <div class="content">
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                {!! Form::model($survey, ['route' => ['survey.update', $survey->id], 'method' => 'patch']) !!}

                     <div class="form-group col-sm-12 mmtext">
                        {!! Form::label('name', 'Name:') !!} <span class="text-danger">*</span>
                        <input type="text" name="name" value="{{ $survey->name}}" class="form-control">
                        @if ($errors->has('name'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group col-sm-12 mmtext">
                        {!! Form::label('phone', 'Phone Number:') !!} <span class="text-danger">*</span>
                        <input type="text" name="phone" value="{{ $survey->phone}}" class="form-control">
                        @if ($errors->has('phone'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('phone') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group col-sm-12 mmtext">
                        {!! Form::label('company', 'Company Name:') !!} <span class="text-danger">*</span>
                        <input type="text" name="company" value="{{ $survey->company}}" class="form-control">
                        @if ($errors->has('company'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('company') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group col-sm-12 mmtext">
                        {!! Form::label('designation', 'Designation: ') !!} <span class="text-danger">*</span>
                        <input type="text" name="designation" value="{{ $survey->designation}}" class="form-control">
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