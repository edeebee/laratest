@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">

            <div class="panel panel-default">
                <div class="panel-heading">Add New Advertisement</div>

                <div class="panel-body">
                  {!! Form::open(['url'=>'store']) !!}
                    <div class="form-group">
                    {!! Form::label('title','Title:') !!}
                    {!! Form::text('title',null,['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('desc','Description:') !!}
                        {!! Form::textarea('desc',null,['class'=>'form-control']) !!}
                    </div>
                    {!! Form::submit('Add',['class'=>'btn btn-primary']) !!}
                    {!! Form::close() !!}
                    @if($errors->all())
                        <ul style="margin-top: 10px" class="alert alert-danger">
                    @foreach($errors->all() as $error)
                            <li style="list-style: none;margin-bottom: 10px"><?php print_r($error) ?></li>
                        @endforeach
                        </ul>
                    @endif

                </div>
            </div>
        </div>
    </div>

</div>
@endsection
