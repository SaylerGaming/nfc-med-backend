@extends('layouts.admin.main')
@section('content')

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
                <a href="/admin/{{ $doctor->id }}" type="button" class="btn btn-link btn-sm btn-rounded">
                    Подробнее
                </a>
            </td>
            </tr>
            @empty

            @endforelse
        </tbody>
    </table>
@endsection