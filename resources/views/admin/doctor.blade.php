@extends('layouts.admin.main')
@section('content')

    @if($doctor->id == auth()->id())
        <a href="/user/edit" type="button" class="btn btn-outline-primary mt-4" data-mdb-ripple-init data-mdb-ripple-color="dark">Редактировать</a>
    @endif
    <div class="text-center mt-4 mb-4">
        <h1 class="display-4">{{$doctor->getFullname()}}</h1>
        <img
        src="{{ $doctor->avatar }}"
        class="rounded shadow-5-strong"
        alt="Hollywood Sign on The Hill"
        />
    </div>
    <table class="table ">
    <tbody>
        @foreach($doctor->table as [$key, $value])
        <tr>
            <td>{{ $key }}</td>
            @if($value)
                <td class="text-end">{{ $value }}</td>
            @else
                <td class="text-end text-muted">пусто</td>
            @endif
        </tr>
        @endforeach
    </tbody>
    </table>

    <div class="btn-group" role="group" aria-label="Basic example">
        @if($doctor->role == 1)
            <button type="button" class="btn btn-outline-danger mb-4" data-mdb-ripple-init data-mdb-modal-init data-mdb-target="#deleteModal">
                Больше не врач
            </button>
        @endif
        @if($doctor->role != 2)
            <button type="button" class="btn btn-outline-success mb-4" data-mdb-ripple-init data-mdb-modal-init data-mdb-target="#promoteModal">
                Повысить до Главврача
            </button>
        @endif
    </div>

    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModal" aria-hidden="true">
    <form action="/admin/doctor/{{$doctor->id}}/delete" method="post">
        @csrf
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Вы уверены?</h5>
                    <button type="button" class="btn-close" data-mdb-ripple-init data-mdb-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">Данный доктор перестанет быть вашим подчиненным</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-mdb-ripple-init data-mdb-dismiss="modal">Закрыть</button>
                    <button  type="submit" class="btn btn-outline-danger" data-mdb-ripple-init>Подтвердить</button>
                </div>
            </div>
        </div>
    </form>
    </div>

    <div class="modal fade" id="promoteModal" tabindex="-1" aria-labelledby="promoteModal" aria-hidden="true">
    <form action="/admin/doctor/{{$doctor->id}}/promote" method="post">
        @csrf
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Вы уверены?</h5>
                    <button type="button" class="btn-close" data-mdb-ripple-init data-mdb-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">Данный доктор будет повышен до главврача</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-mdb-ripple-init data-mdb-dismiss="modal">Закрыть</button>
                    <button  type="submit" class="btn btn-outline-success" data-mdb-ripple-init>Подтвердить</button>
                </div>
            </div>
        </div>
    </form>
    </div>

@endsection