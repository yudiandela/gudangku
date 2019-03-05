@extends('layouts.main')

@section('title', 'Fourier Homepage')

@section('content')

    <div class="row text-right">
        <div class="col">
            <a href="{{ route('fourier.create') }}" class="btn btn-primary my-3"><i class="fa fa-plus"></i> Add Data</a>
            <a href="#" class="btn btn-success my-3"><i class="fas fa-file-export"></i> Export Data</a>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="table-responsive">
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

    {{ $anggotas->links() }}
@endsection

@if (session('success'))
    @push('script')
        <script>
            swal("Berhasil" ,  "{{ session('success') }}" ,  "success" );
        </script>
    @endpush
@endif