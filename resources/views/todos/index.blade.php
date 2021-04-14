@extends('layouts.app')

@section('title')
 Todos List
@endsection


@section('content')
<h2 class="text-center my-5">The Todos Page</h2>
    <div class="row justify-content-center">

    <div class="col-md-8">
    <div class="card card-default">
                <div class="card-header">
                    Todo
                </div>

                <div class="card-body">
                    <ul class="list-group">
                        <div >
                            @foreach($todos as $db_data)
                                <li class="list-group-item">
                                {{$db_data->name}}

                              @if(!$db_data->completed) 
                              <a href="/todos/{{$db_data->id}}/complete"
                                class="btn btn-warning btn-sm text-light"  style="float:right ">completed
                               </a>
                              @endif
                              
                               <a href="/todos/{{$db_data->id}}"
                                class="btn btn-primary btn-sm mx-1" style="float:right ">View
                               </a> 
                                </li>
                            @endforeach
                        
                        </div>
                    </ul>
                </div>
            
        </div>
    </div>
        
    </div>

@endsection