<!DOCTYPE html>
    @csrf
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Tambah Mahasiswa</title>
    <style>
        label {display: inline-block; width:200px; margin-bottom: 10px }
        input, texttarea { width: 300px; margin-bottom: 10px; vertical-align: top; }
        textarea { height: 80px; }
    </style>
</head>
<body>

    <form action="#" method="POST">

        <div>
            <label> Nama Lengkap :</label>
            <input type="text" name ="Fullname">
        </div>
        <div>
            <label>Nomor Induk Siswa Nasional :</label>
            <input> type="text" name="NIM">
        </div>
        <div>  
            <label>Tanggal_Lahir :</label>
            <input> type="text" name="Tanggal_Lahir">
        </div>
        <div> 
            <label>Alamat :</label>
            <input> type="text" name="Alamat"></textarea>
        </div>
        <button type="submit">Simpan Data</button>
    </form>

</body>
</html>