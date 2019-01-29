<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Halaman Index Fourier</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class="row text-right">
            <div class="col">
                <a href="{{ route('fourier.create') }}" class="btn btn-primary my-3"><i class="fa fa-plus"></i> Add Data</a>
                <a href="#" class="btn btn-success my-3"><i class="fas fa-file-export"></i> Export Data</a>
            </div>
        </div>

        <div class="row">
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
    </div>
</body>
</html>