@extends('layouts.main')

@section('title', $anggota->name . ' Detail')

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Detail {{ $anggota->name }}</h6>

        <div class="row text-right">
            <div class="col">
                <a href="{{ route('fourier.index') }}" class="btn btn-primary"><i class="fas fa-undo"></i> {{ __('Return Back') }}</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-lg-4 col-xl-4 text-center">

                <img src="https://via.placeholder.com/270x400" alt="{{ $anggota->name }} images" class="img-thumbnail mb-4">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">{{ $anggota->name }}</li>
                    <li class="list-group-item">{{ $anggota->pangkat }}</li>
                    <li class="list-group-item">{{ $anggota->nrp }}</li>
                    <li class="list-group-item">{{ $anggota->senjata->nosenjata }}</li>
                </ul>

            </div>

            <div class="col">
                Disini ada kontent lainnya
            </div>
        </div>
    </div>
</div>
@endsection
