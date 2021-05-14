@extends('layouts.app')

@section('content')
    <h3 style="display: inline-block">List Task</h3>
    <a href="{{ route('tasks.create')}}" style="float: right; margin-right : 10px">Add Task</a>
    <table class="table">
        <thead>
            <tr>
                <td>STT</td>
                <td>Name Task</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
            <?php $order = 1;?>
            @foreach($tasks as $task)
                <tr>
                    <td>{{$order}}</td>
                    <td>{{$task->name}}</td>
                    <td>
                        <a href="{{ route('tasks.edit',$task->id)}}" class="btn btn-primary">Edit</a>
                    </td>
                    <td>
                        <form action="{{ route('tasks.destroy', $task->id)}}" method="post">
                          @csrf
                          @method('DELETE')
                          <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
                <?php $order++;?>
            @endforeach
        </tbody>
    </table>
@endsection