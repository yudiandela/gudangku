@extends('layouts.main')

@section('title', 'Fourier Homepage')

@push('style')
    <!-- Custom styles for this page -->
    <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endpush

@section('content')

    <div class="col-xl-12 col-lg-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Data Anggota</h6>

                <div class="row text-right">
                    <div class="col">
                        <a href="{{ route('fourier.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Add Data</a>
                        <a href="#" class="btn btn-success"><i class="fas fa-file-export"></i> Export Data</a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
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
                            @if ($anggotas->count() > 0)
                                @foreach ($anggotas as $anggota)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $anggota->name }}</td>
                                    <td>{{ $anggota->pangkat }}</td>
                                    <td>{{ $anggota->nrp }}</td>
                                    <td>{{ $anggota->senjata->nosenjata }}</td>
                                    <td class="text-center">
                                        <a href="{{ route('fourier.show', $anggota->id) }}" data-toggle="tooltip" title="Show detail" class="px-1 text-primary"><i class="fa fa-eye"></i></a> |
                                        <a href="{{ route('fourier.edit', $anggota->id) }}" data-toggle="tooltip" title="Edit" class="px-1 text-dark"><i class="fa fa-edit"></i></a> |
                                        <a href="#" data-toggle="tooltip" title="Delete" class="px-1 text-danger"
                                            onclick="event.preventDefault();
                                            document.getElementById('delete-form-{{ $anggota->id }}').submit();">
                                            <i class="fa fa-trash"></i>
                                        </a>

                                        <form id="delete-form-{{ $anggota->id }}" action="{{ route('fourier.destroy', $anggota->id) }}" method="POST" style="display: none;">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            @else
                            <tr>
                                <td colspan="6" class="text-center">No data this here</td>
                            </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
@endsection

@push('script')
    <!-- Page level plugins -->
    <script src="{{ asset('vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('js/demo/datatables-demo.js') }}"></script>

    @if (session('success'))
        <script>
            swal("Berhasil" ,  "{{ session('success') }}" ,  "success" );
        </script>
    @endif
@endpush