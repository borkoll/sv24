@extends('layouts.main')
<!-- Authentication Links -->
@if (Auth::guest())
@section('menu')
    <li><a href="{{ url('/login') }}">Login</a></li>
    <li><a href="{{ url('/register') }}">Register</a></li>
@endsection
@else
@section('menu')
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
            {{ Auth::user()->name }} <span class="caret"></span>
        </a>

        <ul class="dropdown-menu" role="menu">
            <li>
                <a href="{{ url('/logout') }}"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    Logout
                </a>

                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </li>
        </ul>
    </li>
@endsection
@endif
@section('content')
    <div id="services-section" class="text-center">


    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Кабинет администратора</div>
                <!-- Текущие задачи -->
                @if (count($tasks) > 0)
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Все заявки
                        </div>

                        <div class="panel-body">
                            <table class="table table-striped task-table">

                                <!-- Заголовок таблицы -->
                                <thead>
                                <th>Имя</th>
                                <th class="text-center">e-mail</th>
                                <th class="text-center">Телефон</th>
                                <th class="text-center">Описание</th>
                                <th class="text-center">Время добавления</th>
                                <th class="text-center">Фото</th>
                                </thead>

                                <!-- Тело таблицы -->
                                <tbody>
                                @foreach ($tasks as $task)
                                    <tr>
                                        <!-- Имя задачи -->
                                        <td class="table-text text-left">
                                            <div>{{ $task->name}}</div>
                                        </td>
                                        <td class="table-text">
                                            <div>{{ $task->email}}</div>
                                        </td>
                                        <td class="table-text">
                                            <div>{{ $task->phone}}</div>
                                        </td>
                                        <td class="table-text">
                                            <div>{{ $task->description}}</div>
                                        </td>
                                        <td class="table-text">
                                            <div>{{ $task->created_at}}</div>
                                        </td>
                                        <td class="table-text">
                                            <div><a class="mp" href="img/ upload/{{$task->path}}"><img class="img-thumbnail" src="img/upload/{{$task->path}}" width="50" height="50"></a></div>
                                        </td>
                                        <td>
                                            <!-- TODO: Кнопка Удалить -->
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                @endif

                <div class="panel-body">
                </div>
            </div>
        </div>
</div>
    </div>
@endsection
