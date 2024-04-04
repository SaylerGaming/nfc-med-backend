@extends('layouts.admin.main')
@section('content')

    <button type="button" class="btn btn-outline-success mt-4 mb-4" data-mdb-ripple-init data-mdb-modal-init data-mdb-target="#exampleModal">
        Добавить врача
    </button>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Добавить врача</h5>
            <button type="button" class="btn-close" data-mdb-ripple-init data-mdb-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="/admin/doctors/add" method="post">
            @csrf
            <div class="modal-body">
                <div class="form-outline mb-4" data-mdb-input-init>
                    <input type="text" name="name" id="formName" class="form-control" />
                    <label class="form-label" for="formName">Имя</label>
                </div>
                <div class="form-outline" data-mdb-input-init>
                    <input type="text" name="surname" id="formSurname" class="form-control" />
                    <label class="form-label" for="formSurname">Фамилия</label>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-mdb-ripple-init data-mdb-dismiss="modal">Закрыть</button>
                <button type="accept" class="btn btn-success" data-mdb-ripple-init>Добавить</button>
            </div>
        </form>
        </div>
    </div>
    </div>

    <table class="table align-middle mb-0 bg-white">
        <thead class="bg-light">
            <tr>
            <th>Имя</th>
            <th>Контакты</th>
            <th>Действия</th>
            </tr>
        </thead>
        <tbody>
            @forelse($doctors as $doctor)
            <tr> 
            <td>
                <div class="d-flex align-items-center">
                <img
                    src="{{ $doctor->avatar }}"
                    alt=""
                    style="width: 45px; height: 45px"
                    class="rounded-circle"
                    />
                <div class="ms-3">
                    <p class="fw-bold mb-1">{{$doctor->name}} {{$doctor->surname}}</p>
                    @if($doctor->role == 2)
                        <span class="badge badge-primary rounded-pill d-inline">Главврач</span>
                    @elseif($doctor->role == 1)
                        <span class="badge badge-success rounded-pill d-inline">Доктор</span>
                    @endif
                </div>
                </div>
            </td>
            <td>
                <a class="fw-normal mb-1" href = "mailto: {{$doctor->email}}">{{$doctor->email}}</a>
                <br>
                <a class="text-muted mb-0" href="tel:{{$doctor->phone}}">{{$doctor->phone}}</a>
            </td>
            <td>
                <a href="/admin/doctor/{{ $doctor->id }}" type="button" class="btn btn-link btn-sm btn-rounded">
                    Подробнее
                </a>
            </td>
            </tr>
            @empty

            @endforelse
        </tbody>
    </table>
@endsection