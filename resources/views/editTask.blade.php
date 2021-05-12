@extends('layouts.app')

@section('content')
    <h3 style="display: inline-block">Edit Task</h3>
    <a href="{{ route('tasks.index')}}" style="float: right; margin-right : 10px">List Task</a>

    <!-- Bootstrap Boilerplate... -->

    <div class="panel-body">
        <!-- Display Validation Errors -->
        @include('common.errors')

        <!-- New Task Form -->
        <form  method="POST" class="form-horizontal" action="{{ route('tasks.update', $tasks->id) }}">
            @csrf
            @method('PATCH')

            <!-- Task Name -->
            <div class="form-group">
                <label for="task" class="col-sm-3 control-label">Name Task</label>

                <div class="col-sm-6">
                    <input type="text" name="task_name" id="task_name" class="form-control" value="{{$tasks->name}}">
                </div>
            </div>

            <!-- Add Task Button -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default" style="border : 1px solid black; background: white">
                        <i class="fa fa-plus"></i> Edit Task
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection