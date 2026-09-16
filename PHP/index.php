<?php
require 'Film.php';
session_start();
if(!isset($_SESSION['film'])) $_SESSION['film']=[];

$editId=null;

if(isset($_POST['tambah'])){
    $_SESSION['film'][]=new Film(
        $_POST['id'], $_POST['judul'], $_POST['genre'], $_POST['durasi'], $_POST['gambar']
    );
}

if(isset($_POST['hapus'])){
    foreach($_SESSION['film'] as $i=>$f){
        if($f->getId()==$_POST['hapus']){ array_splice($_SESSION['film'],$i,1); break; }
    }
}

if(isset($_POST['edit'])){
    $editId=$_POST['edit'];
}

if(isset($_POST['update'])){
    foreach($_SESSION['film'] as $f){
        if($f->getId()==$_POST['update']){
            $f->setJudul($_POST['judul']);
            $f->setGenre($_POST['genre']);
            $f->setDurasi($_POST['durasi']);
            $f->setGambar($_POST['gambar']);
            break;
        }
    }
}

$cari=null;
if(isset($_POST['cari'])){
    foreach($_SESSION['film'] as $f){
        if($f->getId()==$_POST['cari']){
            $cari=$f; break;
        }
    }
}

$tampil = $cari!==null ? [$cari] : $_SESSION['film'];
?>
<html>
<head><title>Bioskop - Daftar Film</title></head>
<body>
<h2>Manajemen Data Bioskop</h2>

<h3>Tambah Film</h3>
<form method="post">
ID <input name="id" required><br>
Judul <input name="judul" required><br>
Genre <input name="genre" required><br>
Durasi <input name="durasi" required><br>
Gambar (path file lokal) <input name="gambar" required><br>
<button name="tambah">Tambah</button>
</form>

<h3>Cari Film</h3>
<form method="post">
ID <input name="cari" required>
<button>Cari</button>
</form>
<?php if($cari!==null){ ?><p>Hasil: <?= $cari->getJudul(); ?></p><?php } ?>

<h3>Daftar Film</h3>
<table border="1">
<tr><th>ID</th><th>Judul</th><th>Genre</th><th>Durasi</th><th>Gambar</th><th>Aksi</th></tr>
<?php foreach($tampil as $f){ ?>
<tr>
<td><?= $f->getId() ?></td>
<td><?= $f->getJudul() ?></td>
<td><?= $f->getGenre() ?></td>
<td><?= $f->getDurasi() ?></td>
<td><?= $f->getGambar() ?></td>
<td>
<form method="post" style="display:inline">
<button name="edit" value="<?= $f->getId() ?>">Update</button>
</form>
<form method="post" style="display:inline">
<button name="hapus" value="<?= $f->getId() ?>">Hapus</button>
</form>
</td>
</tr>
<?php } ?>
</table>

<?php if($editId!==null){
    foreach($_SESSION['film'] as $f){
        if($f->getId()==$editId){ ?>
<h3>Update Film ID <?= $f->getId() ?></h3>
<form method="post">
Judul <input name="judul" value="<?= $f->getJudul() ?>"><br>
Genre <input name="genre" value="<?= $f->getGenre() ?>"><br>
Durasi <input name="durasi" value="<?= $f->getDurasi() ?>"><br>
Gambar <input name="gambar" value="<?= $f->getGambar() ?>"><br>
<button name="update" value="<?= $f->getId() ?>">Simpan</button>
</form>
<?php break; } } } ?>
</body>
</html>