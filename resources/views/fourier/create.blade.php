@extends('layouts.main')

@section('title', 'Fourier Create new Member')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-4 mt-5">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('fourier.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <h6>Data Anggota</h6>
                        </div>

                        <div class="form-group">
                            <input name="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" value="{{ old('name') }}" placeholder="Nama Lengkap">
                            @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <input name="pangkat" type="text" class="form-control{{ $errors->has('pangkat') ? ' is-invalid' : '' }}" value="{{ old('pangkat') }}" placeholder="Pangkat">
                            @if ($errors->has('pangkat'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('pangkat') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <input name="nrp" type="text" class="form-control{{ $errors->has('nrp') ? ' is-invalid' : '' }}" value="{{ old('nrp') }}" placeholder="N R P">
                            @if ($errors->has('nrp'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('nrp') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <h6>Data Weapon</h6>
                        </div>

                        <div class="form-group">
                            <input name="type" type="text" class="form-control{{ $errors->has('type') ? ' is-invalid' : '' }}" value="{{ old('type') }}" placeholder="Type - ext: SS1-V1 / M16">
                            @if ($errors->has('type'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('type') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <input name="nosenjata" type="text" class="form-control{{ $errors->has('nosenjata') ? ' is-invalid' : '' }}" value="{{ old('nosenjata') }}" placeholder="Nomor Senjata">
                            @if ($errors->has('nosenjata'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('nosenjata') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-block btn-primary">Enter Data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection