@extends('layouts.main')
@section('title', 'eMaha - Form Student')
@section('content')
<div class="card mt-4">
    <div class="card-header"><strong>Form Data Student</strong></div>
    <div class="card-body">
        <form action="/student/save" method="POST">
            @csrf
            <div class="form-group">
                <label>NIM</label>
                <input type="number" name="nim" class="form-control" placeholder="Masukkan NIM">
            </div>

            <div class="form-group">
                <label>Nama</label>
                <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama">
            </div>

            <label>Gender</label>
            <div class="form-check">
                <input type="radio" name="gender" class="form-check-input" value="Pria">
                <label>Pria</label>
            </div>
            <div class="form-check">
                <input type="radio" name="gender" class="form-check-input" value="Wanita">
                <label>Wanita</label>
            </div>

            <label>Program Studi</label>
            <div class="form-group">
                <select name="prodi" class="form-control">
                    <option value="0">--Pilih Program Studi--</option>
                    <option value="Sistem Informasi">Sistem Informasi</option>
                    <option value="Informatika">Informatika</option>
                    <option value="Ilmu Komputer">Ilmu Komputer</option>
                    <option value="Sistem Komputer">Sistem Komputer</option>
                </select>
            </div>

            <label>Minat</label>
            <div class="form-check">
                <input type="checkbox" name="minat[]" class="form-check-input" value="AI">
                <label>Artificial Intelligent</label>
            </div>
            <div class="form-check">
                <input type="checkbox" name="minat[]" class="form-check-input" value="WEB">
                <label>Web Design</label>
            </div>
            <div class="form-check">
                <input type="checkbox" name="minat[]" class="form-check-input" value="DBMS">
                <label>Database Engineer</label>
            </div>

            <div class="form-group mt-4">
                <button type="submit" role="button" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection