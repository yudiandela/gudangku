@extends('layouts.main')

@section('title', 'Fourier Homepage')

@section('content')

    @if (session('success'))
        <div class="row mt-3 justify-content-center">
            <div class="col-md-8 text-center">
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            </div>
        </div>
    @endif

    <div class="row text-right">
        <div class="col">
            <a href="{{ route('fourier.create') }}" class="btn btn-primary my-3"><i class="fa fa-plus"></i> Add Data</a>
            <a href="#" class="btn btn-success my-3"><i class="fas fa-file-export"></i> Export Data</a>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-12">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama</th>
                        <th>Pangkat</th>
                        <th>NRP</th>
                        <th>No Senjata</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($anggotas as $anggota)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $anggota->name }}</td>
                        <td>{{ $anggota->pangkat }}</td>
                        <td>{{ $anggota->nrp }}</td>
                        <td>{{ $anggota->senjata->nosenjata }}</td>
                        <td class="text-center">
                            <a href="{{ route('fourier.edit', $anggota->id) }}" class="btn btn-success btn-sm px-3"> Edit </a>
                            <a href="{{ route('fourier.destroy', $anggota->id) }}" class="btn btn-danger btn-sm px-2"> Delete </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection