@extends('layouts.app')

@section('content')
    <h1 class="text-center my-3"> New Todos</h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
           <div class="card card-default">
                <div class="card-header">
                   <h4> Edit todo</h4>
                </div>
                <div class="card-body">
                    @if( $errors->any())
                    <div class="alert alert-danger">
                        <ul class="list-group ">
                            @foreach( $errors->all() as $error)
                            <li class="list-group-item alert alert-danger">
                                {{$error}}
                            </li>
                            @endforeach
                        </ul>
                    </div>

                    @endif
                <form action="/todos/{{$todos->id}}/update-todo" method="POST">
                @csrf
                <input type="hidden" name="todo_id" value="{{$todos->name}}">
                    <div class="from-group">
                        <input type="text" class="form-control my-1" placeholder=" Put Name" name="name" value="{{$todos->name}}">
                    </div>
                    <div class="form-group">
                     <textarea name="description" class="form-control my-2" placehoder="Description"  cols="10" rows="5" class="form-control" value="">{{$todos->description}}</textarea>
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-success  my-1">Submit Todo</button>
                    </div>
                    
                </form>
                </div>
           </div>
        </div>
    </div>
   
@endsection