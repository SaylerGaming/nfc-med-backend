@extends('layouts.profile.main')
@section('content')

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <img src="{{$user->avatar}}">
    <form action="/profile/update" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        <input type="file" name="avatar" >
        <input type="text" name="text">
        <button type="submit">submit</button>
    </form>

@endsection