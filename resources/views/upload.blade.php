<!-- resources/views/upload.blade.php -->
<form action="{{ route('file.upload') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" name="file">
    <button type="submit">Upload</button>
</form>

<!-- Pesan Sukses dan Error -->
@if (session('success'))
    <div>{{ session('success') }}</div>
    <div>File path: {{ session('path') }}</div>
@endif

@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
