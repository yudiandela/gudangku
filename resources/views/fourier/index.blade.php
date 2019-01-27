<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Halaman Index Fourier</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <a href="{{ route('fourier.create') }}" class="btn btn-primary my-3">+ Add Anggota</a>
        <div class="row">
            <div class="col-md-12">
                <table class="table">
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
                        <tr>
                            <td>1</td>
                            <td>Yudi Andela</td>
                            <td>Sersan Satu</td>
                            <td>21090260350589</td>
                            <td>098956</td>
                            <td>
                                <a href="{{ route('fourier.edit', 1) }}" class="btn btn-success btn-sm px-3"> Edit </a>
                                <a href="{{ route('fourier.destroy', 1) }}" class="btn btn-danger btn-sm px-2"> Delete </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>