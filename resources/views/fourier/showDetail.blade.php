@extends('layouts.main')

@section('title', $anggota->name . ' Detail')

@section('content')
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-4 text-center">
                <div class="card">
                    <div class="card-body p-0">
                        <img src="https://via.placeholder.com/270x400" alt="{{ $anggota->name }} images" class="img-thumbnail mb-4 mt-4">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">{{ $anggota->name }}</li>
                            <li class="list-group-item">{{ $anggota->pangkat }}</li>
                            <li class="list-group-item">{{ $anggota->nrp }}</li>
                            <li class="list-group-item">{{ $anggota->senjata->nosenjata }}</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        Disini ada kontent lainnya
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
