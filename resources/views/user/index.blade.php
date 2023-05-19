<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Data Pengguna</title>
    <style>
        body {
            /* padding: 50px; */
        }

        #btn_tambah {
            margin-top: 20px;
        }

        .navbar-nav {
            float: right;
        }
    </style>
</head>

<body>
    <nav class="navbar nav justify-content-end navbar-dark bg-dark navbar-expand-md pr-5">
        <a class="navbar-brand" href="#">
            {{-- User Name From Session --}}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-list-4"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="float-right">
            <div class="collapse navbar-collapse" id="navbar-list-4">
                <ul class="navbar-nav mr-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{-- User Avatar From Session --}}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="/detail/$_SESSION['id_user'];">Dashboard</a>
                            <a class="dropdown-item" href="#">Edit Profile</a>
                            <a class="dropdown-item" href="/logout">Log Out</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <h1 class="my-4">Data Pengguna</h1>
    <div class="container-lg">
        <table class="table table-light table-stripped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Aksi</th>
                    {{-- <th scope="col">Avatar</th> --}}
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">Address</th>
                    <th scope="col">Role</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($user as $row)
                    <tr>
                        <th scope='row'>{{ $row->index }}</th>
                        <td><button type='button' class='btn btn-primary'>
                                <a class='text-light' href='{{ route('user.show', $row->id) }}'>Detail</a>
                            </button>
                            <button type='button' class='btn btn-warning'>
                                <a class='text-light' href='{{ route('user.edit', $row->id) }}'>Edit</a>
                            </button>
                            <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                action="{{ route('user.destroy', $row->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <button type='submit' class='btn btn-danger'>
                                    Delete
                                </button>
                            </form>
                        </td>
                        <td> <img src="/storage/avatar/{{ $row->avatar }}" width=80px></td>
                        <td>{{ $row->name }}</td>
                        <td>{{ $row->email }}</td>
                        <td>{{ $row->phone }}</td>
                        <td>{{ $row->address }}</td>
                        <td>{{ $row->role }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <a id="btn_tambah" class="btn btn-dark" href="{{ route('user.create') }}">Tambah Data</a>



    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
</body>

</html>
