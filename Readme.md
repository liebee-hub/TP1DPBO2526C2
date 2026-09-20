-Janji

Saya Refan Maher Aysel dengan NIM 2509129 mengerjakan TP1 dalam
mata kuliah Desain Pemrograman Berorientasi Objek untuk keberkahanNya maka saya tidak
melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin.

-Desain dan Flow Kode

Class `Film`

Satu class yang digunakan (relevan dengan tema Bioskop), memiliki minimal
5 atribut:

| Atribut | Tipe | Keterangan |
|---------|------|------------|
| `id`    | int  | Identitas unik film |
| `judul` | string | Judul film |
| `genre` | string | Genre film (Action, Drama, dll) |
| `durasi`| int  | Durasi film dalam menit |
| `gambar`| string | Path file gambar lokal (bukan URL) |

Class `Film` dibuat di 4 bahasa (file `Film.java`, `Film.php`,
`film.py`, `Film.h`). Objek `Film` disimpan dalam kumpulan
(list/array) yang dikelola oleh program utama (`Main.java`,
`index.php`, `main.py`, `main.cpp`).

Fitur

1. **Tambah Data** — membuat objek `Film` baru lalu memasukkannya ke list.
2. **Tampilkan Data** — menampilkan semua objek `Film`.
3. **Cari Data** — mencari objek berdasarkan `id`.
4. **Update Data** — mengubah isi objek berdasarkan `id`.
5. **Hapus Data** — menghapus objek berdasarkan `id`.
6. **Keluar** — mengakhiri program (versi CLI).

-Flow Kode (CLI: C++, Java, Python)

Tampilkan menu (1 Tambah, 2 Tampil, 3 Cari, 4 Update, 5 Hapus, 6 Keluar)
        |
        v
Baca pilihan user
        |
        +--> 1: input id, judul, genre, durasi, gambar -> tambah Film ke list
        +--> 2: loop semua Film di list -> cetak atributnya
        +--> 3: input id -> loop, jika id cocok cetak Film-nya (paling tidak judul)
        +--> 4: input id -> loop, jika cocok ubah atribut lalu set ke objek
        +--> 5: input id -> loop, jika cocok hapus elemen dari list
        +--> 6: keluar dari perulangan
        +--> lain: tampilkan "Pilihan tidak valid"

-Flow Kode (Web: PHP)

index.php
  |- require Film.php (definisi class Film)
  |- session_start() -> $_SESSION['film'] berisi array/list objek Film
  |- Proses aksi dari form (POST): tambah / update / hapus / cari
  |- HtmlForm (input: id, judul, genre, durasi, gambar)
  |- Tabel daftar film dengan tombol Update & Hapus per baris
  |- Form pencarian berdasarkan id


Penyimpanan data **tanpa database**, memakai `$_SESSION`.

-Dokumentasi Program Berjalan

Di folder Dokumentasi