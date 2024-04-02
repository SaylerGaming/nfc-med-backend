@extends('layouts.admin.main')
@section('content')

    <div class="text-center mt-4 mb-4">
        <h1 class="display-4">{{$doctor->name.' '.$doctor->surname}}</h1>
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

@endsection