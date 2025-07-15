<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Buku</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f9f9f9;
            padding: 30px;
        }
        .container {
            max-width: 600px;
            margin: auto;
            background: white;
            padding: 25px 30px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-top: 12px;
        }
        input[type="text"], input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-top: 6px;
            border: 1px solid #ccc;
            border-radius: 6px;
        }
        button {
            margin-top: 20px;
            padding: 10px 18px;
            background-color: #3490dc;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
        }
        button:hover {
            background-color: #2779bd;
        }
        a {
            display: inline-block;
            margin-top: 15px;
            color: #555;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>➕ Tambah Buku</h2>

        <form action="{{ route('books.store') }}" method="POST">
            @csrf
            <label for="title">Judul Buku</label>
            <input type="text" name="title" id="title" required>

            <label for="author">Penulis</label>
            <input type="text" name="author" id="author" required>

            <label for="year">Tahun Terbit</label>
            <input type="number" name="year" id="year" required>

            <button type="submit">Simpan</button>
        </form>

        <a href="{{ route('books.index') }}">⬅️ Kembali ke daftar</a>
    </div>
</body>
</html>
