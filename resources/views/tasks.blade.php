<!-- resources/views/tasks.blade.php -->

@extends('layouts.asdf')

@section('content')

    <!-- Bootstrap Boilerplate... -->

    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="panel-body">
        <!-- Display Validation Errors -->
    @include('common.errors')

    <!-- New Task Form -->
        <form action="{{ url('task') }}" method="POST" class="form-horizontal">
        {{ csrf_field() }}

        <!-- Task Name -->
            <div class="form-group">
                <label for="task" class="col-sm-3 control-label">New Task</label>

                <div class="col-sm-6">
                    <input type="text" name="name" id="task-name" class="form-control">
                </div>
            </div>
        <!-- Categories input -->
            <div class="form-group">
                <label for="task" class="col-sm-3 control-label">Categories</label>

                <div class="col-sm-6">
                    <select type="text" name="categories" id="categories" class="form-control">
                        <option>Urgent</option>
                        <option>Relax</option>
                        <option>Hard</option>
                        <option>Other</option>
                    </select>
                </div>
            </div>

            <!-- Add Task Button -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Add Task
                    </button>
                </div>
            </div>
        </form>
    </div>

            @if (count($tasks) > 0)
        <div class="panel panel-default">
            <div class="panel-heading">
                Current Tasks
            </div>

            <div class="panel-body">
                <table class="table table-striped task-table">

                    <!-- Table Headings -->
                    <thead>
                    <th>Task</th>
                    <th>&nbsp;</th>
                    </thead>

                    <!-- Table Body -->
                    <tbody>
                    @foreach ($tasks as $task)
                        <tr>
                            <!-- Task Name -->
                            <td class="table-text" style="width: 100%">
                                <span class="btn btn-primary btn-xs">{{ $task->categories }} </span>
                                <div>{{ $task->name }}</div>
                            </td>


                            <!-- Delete Button -->
                            <td>
                                <form action="{{ url('task/'.$task->id) }}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}

                                    <button type="submit" class="btn btn-danger">
                                        <i class="fa fa-trash"></i> Delete
                                    </button>
                                </form>


                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
        </div>
    </div>
@endsection