public class Film {
    private int id,durasi;
    private String judul,genre,gambar;

    public Film(int id,String judul,String genre,int durasi,String gambar){
        this.id=id; this.judul=judul; this.genre=genre;
        this.durasi=durasi; this.gambar=gambar;
    }
    public int getId(){ return id; }
    public String getJudul(){ return judul; }
    public void setJudul(String judul){ this.judul=judul; }
    public String toString(){
        return id+" | "+judul+" | "+genre+" | "+durasi+" | "+gambar;
    }
}
