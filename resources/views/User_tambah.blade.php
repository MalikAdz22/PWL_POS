<body>
    <h1>Form Tambah Data User</h1>
    <form method="post" action="/user/tambah_simpan">
        {{ csrf_field() }}

        <label for="username">Username</label>
        <input type="text" name="username" placeholder="Masukkan Username">
        <br>
        <label for="nama">Nama</label>
        <input type="text" name="nama" placeholder="Masukkan Nama">
        <br>
        <label for="password">Password</label>
        <input type="password" name="password" placeholder="Masukkan Password">
        <br>
        <label for="level_id">Level ID</label>
        <input type="number" name="level_id" placeholder="Masukkan ID Level">
        <br>
        <input type="submit" class="btn btn-primary" value="Simpan">
    </form>
</body>
