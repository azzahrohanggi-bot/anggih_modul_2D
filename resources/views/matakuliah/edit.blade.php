<!DOCTYPE html>
<html>
<head>
    <title>Edit Mata Kuliah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #eef2f3, #dfe9f3);
        }
        .card {
            border-radius: 15px;
        }
        .form-control {
            border-radius: 10px;
        }
        .btn-custom {
            border-radius: 20px;
            padding: 6px 20px;
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <div class="card shadow-lg p-4">
        <h3 class="text-center mb-4">✏ Edit Mata Kuliah</h3>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('matakuliah.update', $matakuliah->kode_mk) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">Kode MK</label>
                <input type="text" class="form-control" 
                       value="{{ $matakuliah->kode_mk }}" readonly>
            </div>

            <div class="mb-3">
                <label class="form-label">Nama MK</label>
                <input type="text" name="nama_mk" 
                       class="form-control" 
                       value="{{ $matakuliah->nama_mk }}">
            </div>

            <div class="mb-3">
                <label class="form-label">SKS</label>
                <input type="number" name="sks" 
                       class="form-control" 
                       value="{{ $matakuliah->sks }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Semester</label>
                <input type="number" name="semester" 
                       class="form-control" 
                       value="{{ $matakuliah->semester }}">
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary btn-custom">Update</button>
                <a href="{{ route('matakuliah.index') }}" class="btn btn-secondary btn-custom">Kembali</a>
            </div>
        </form>
    </div>
</div>

</body>
</html>