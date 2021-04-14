@extends('layouts.app')

@section('title')
 Single Todo:{{$todos->name}}
@endsection

@section('content')

<div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class=" text-center my-3">
                    <h2> {{$todos->name}} </h2>
                </div> 

                <div class="card card-default">
                    <div class="card-header">
                    <p>Details</p>
                    </div>

                    <div class="card-body">

                    {{ $todos->description}}

                    </div>
                   

                </div>
               

            </div>
            <a href="/todos/{{$todos->id}}/edit" class="btn btn-info btn-sm my-2">Edit</a>
            <a href="/todos/{{$todos->id}}/delet" class="btn btn-danger btn-sm my-2">Delet</a>
            
        </div>
    </div>
         

@endsection