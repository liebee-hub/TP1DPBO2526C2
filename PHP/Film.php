<?php
class Film {
    private $id;
    private $judul;
    private $genre;
    private $durasi;
    private $gambar;

    public function __construct($id, $judul, $genre, $durasi, $gambar){
        $this->id=$id;
        $this->judul=$judul;
        $this->genre=$genre;
        $this->durasi=$durasi;
        $this->gambar=$gambar;
    }
    public function getId(){ return $this->id; }
    public function getJudul(){ return $this->judul; }
    public function getGenre(){ return $this->genre; }
    public function getDurasi(){ return $this->durasi; }
    public function getGambar(){ return $this->gambar; }
    public function setJudul($x){ $this->judul=$x; }
    public function setGenre($x){ $this->genre=$x; }
    public function setDurasi($x){ $this->durasi=$x; }
    public function setGambar($x){ $this->gambar=$x; }
}