@extends('layouts.main')
@section('title', 'eMaha - Home')
@section('content')
<div class="card mt-4">
    <div class="card-body">
        <h5>Selamat Datang, {{ Auth::user()->nama_user }}</h5>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet, perspiciatis possimus! Neque animi rem inventore eaque perferendis itaque mollitia, explicabo architecto, amet rerum nobis provident fugiat in quaerat, ab sit!</p>
    </div>
</div>
@endsection