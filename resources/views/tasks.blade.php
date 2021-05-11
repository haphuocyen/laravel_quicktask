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

        </tbody>
        <?php ?>
    </table>
@endsection