@extends('layout.master_dashboard')

@section('title', 'Tambah Kategori')
@section('content')
    <div class="container">
        <h1 class="mt-5">Tambah Kategori</h1>
        <form action="{{ route('categories.store') }}" method="post" enctype="multipart/form-data">
            {{-- @method('put') --}}
            @csrf
            <label for="name">Name</label>
            <input class="form-control" type="text" name="name" id="name">
            <button type="submit" name="submit" class="btn btn-primary mt-4">Submit</button>
        </form>
    </div>

@section('script')
    <script>
        function getValue(val) {
            document.getElementById('rangeValue').textContent = val;
        }
    </script>
@endsection
@endsection
