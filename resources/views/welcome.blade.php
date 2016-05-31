@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">


            <div class="panel panel-default">
                <div class="panel-heading">Advertisements</div>

                <div class="panel-body">
                    @if(count($data)>0)
                       @foreach($data as $row)

                               <div class="panel panel-default">
                                   <!-- Default panel contents -->
                                   <div class="panel-heading"> <i style="padding-right: 10px" class="glyphicon glyphicon-time"></i>{{$row['created_at']}}<span style="padding-left: 10px"> <strong>{{$row['title']}} </strong></span><strong class="pull-right" style="text-align: right">{{$row['username']['name']}}</strong></div>
                                   <div class="panel-body">
                                       <p>{{$row['desc']}}</p>
                                   </div>

                               </div>
                       @endforeach

                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
