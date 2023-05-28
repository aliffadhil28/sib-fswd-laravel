@extends('layout.master_dashboard')

@section('title', 'Tambah Slider')
@section('content')
    <div class="container">
        <h1 class="mt-5">Tambah Slider</h1>
        <form action="{{ route('slider.update', $data->id) }}" method="post" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="row g-2">
                <div class="col">
                    <label for="name">Name</label>
                    <input class="form-control" type="text" name="name" id="name" value="{{ $data->name }}">
                </div>
                <div class="col">
                    <label for="url">URL</label>
                    <input class="form-control" type="text" name="url" id="url" value="{{ $data->url }}">
                </div>
            </div>
            <label for="status">Status</label>
            <select id="status" class="form-select form-control" aria-label="Default select example" name="is_active">
                <option selected><b>--Pilih Status--</b></option>
                <option value=1>Active</option>
                <option value=0>Not Active</option>
            </select>
            <label for="text">Text</label>
            <textarea class="form-control" name="text" id="text" cols="30" rows="3">{{ $data->text }}</textarea>
            <label for="image">Slider Image</label>
            <input type="file" class="form-control" id="image" name="image"
                aria-describedby="inputGroupFileAddon04" aria-label="Upload">
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
