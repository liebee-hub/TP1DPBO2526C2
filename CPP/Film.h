#ifndef FILM_H
#define FILM_H
#include <string>
using namespace std;

class Film {
private:
    int id;
    string judul, genre, gambar;
    int durasi;
public:
    Film() {}
    Film(int id, string judul, string genre, int durasi, string gambar) {
        this->id=id; this->judul=judul; this->genre=genre;
        this->durasi=durasi; this->gambar=gambar;
    }
    int getId(){ return id; }
    string getJudul(){ return judul; }
    string getGenre(){ return genre; }
    int getDurasi(){ return durasi; }
    string getGambar(){ return gambar; }

    void setJudul(string x){ judul=x; }
    void setGenre(string x){ genre=x; }
    void setDurasi(int x){ durasi=x; }
    void setGambar(string x){ gambar=x; }
};
#endif
