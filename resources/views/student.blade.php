@extends('layouts.main')
@section('title', 'eMaha - Student')
@section('content')
<!--<h1>STUDENT</h1>-->
<div class="card mt-4">
    <div class="card-header">
        <a href="/student/formadd" class="btn btn-primary" role="button"><i class="bi bi-plus-square-fill"></i> Student</a>

        <form action="/student/search" method="GET" class="form-inline my-2 my-lg-0 float-right">
            <input name="q"class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
    <div class="card-body">
        @if (session('flash'))
        @php
        $flashType = session('flash_type');
        $alertClass = '';

        switch ($flashType){
            case 'success':
                $alertClass = 'alert-success';
                break;
            case 'primary':
                $alertClass = 'alert-primary';
                break;
            case 'danger':
                $alertClass = 'alert-danger';
                break;
            default:
                $alertClass = 'alert-warning';
                break;
        }
        @endphp
        <div class="alert {{ $alertClass }} alert-dismissible fade show" role="alert">
            <strong>{{session ('flash')}}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">NIM</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Prodi</th>
                    <th scope="col">Minat</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mhs as $idx => $m)
                <tr>
                    <!-- <th scope="row">{{ $mhs -> firstItem() + $idx }}</th> -->
                    <td>{{ $m->id}}</td>
                    <td>{{ $m->nim}}</td>
                    <td>{{ $m->nama}}</td>
                    <td>{{ $m->gender}}</td>
                    <td>{{ $m->prodi}}</td>
                    <td>{{ $m->minat}}</td>
                    <td>
                        <a href="/student/formedit/{{ $m->id }}" class="btn btn-success"><i 
                        class="bi bi-pencil-square"></i></a>

                        <a href="/student/delete/{{ $m->id }}" class="btn btn-danger" 
                        onclick="return confirm('Apakah yakin ingin menghapus ?')">
                            <i class="bi bi-x-square"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <span class="float-right">{{ $mhs->links() }}</span>
        <span class="alert alert-success">
            Jumlah Data : {{ $mhs->count() }}
        </span>
    </div>
</div>
@endsection