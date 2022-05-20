@extends('admin.layout.app')
@section('content')
    <section class="content-header">
        <h1>
            Survey
        </h1>
        
        <a href='{{ route("survey.create") }}' class="btn btn-sm btn-primary">
        <i class="fa fa-plus-square"></i>&nbsp;&nbsp;Create New Survey</a>
    </section>

    <div class="content">
        <div class="box box-primary">
            <div class="box-body">

                <table class="table table-striped table-hover tbl_repeat" id="sortable">
                    <thead>
                        <th>No.</th>
                        <th>Name</th>
                        <th>Phone Number</th>
                        <th>Company Name</th>
                        <th>Designation</th>
                       <th>Code</th>
                        <th colspan="3">Action</th>
                    </thead>
                    <tbody>
                    <?php $index = 1; ?>
                    @foreach($surveies as $survey)
                        <tr>
                            <td>{{ $index++ }}</td>
                            <td>{!! $survey->name !!}</td>
                            <td>{!! $survey->phone !!}</td>
                            <td>{!! $survey->company !!}</td>
                            <td>{!! $survey->designation !!}</td>
                            <td>{!! $survey->code !!}</td>
                            <td>
                            <a href="{!! route('survey.edit', [$survey->id]) !!}"
                               class='btn btn-xs btn-primary'><i class="fa fa-check-square-o"></i>&nbsp;Edit</a>
                            <a href="#" type="button" data-id="{{ $survey->id }}"
                               class="btn btn-xs btn-danger" data-toggle="modal"
                               data-url="{{ url('admin/survey/'.$survey->id) }}"
                               data-target="#deleteFormModal"><i
                                    class="fa fa-trash-o"></i>&nbsp;Delete</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="pull-right">
                    {{ $surveies->appends($_GET)->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection


