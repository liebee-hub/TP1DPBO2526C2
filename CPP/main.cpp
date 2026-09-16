#include <iostream>
#include <vector>
#include "Film.h"
using namespace std;

int main(){
    vector<Film> film;
    int pilih;
    do{
        cout<<"1.Tambah\n2.Tampil\n3.Cari\n4.Update\n5.Hapus\n6.Keluar\nPilihan: ";
        cin>>pilih;

        if(pilih==1){
            int id,durasi; string judul,genre,gambar;
            cout<<"ID: "; cin>>id;
            cin.ignore();
            cout<<"Judul: "; getline(cin,judul);
            cout<<"Genre: "; getline(cin,genre);
            cout<<"Durasi: "; cin>>durasi;
            cin.ignore();
            cout<<"Gambar: "; getline(cin,gambar);
            film.push_back(Film(id,judul,genre,durasi,gambar));
        }else if(pilih==2){
            for(auto &f:film){
                cout<<f.getId()<<" | "<<f.getJudul()<<" | "<<f.getGenre()<<" | "<<f.getDurasi()<<" | "<<f.getGambar()<<endl;
            }
        }else if(pilih==3){
            cout<<"ID: "; int id; cin>>id;
            bool ketemu=false;
            for(auto &f:film) if(f.getId()==id){ cout<<f.getJudul()<<endl; ketemu=true; }
            if(!ketemu) cout<<"Film dengan ID "<<id<<" tidak ditemukan."<<endl;
        }else if(pilih==4){
            cout<<"ID: "; int id; cin>>id;
            bool ketemu=false;
            for(auto &f:film) if(f.getId()==id){
                cout<<"Judul baru: "; string j; cin.ignore(); getline(cin,j);
                f.setJudul(j); ketemu=true;
            }
            if(!ketemu) cout<<"Film dengan ID "<<id<<" tidak ditemukan."<<endl;
        }else if(pilih==5){
            cout<<"ID: "; int id; cin>>id;
            bool ketemu=false;
            for(size_t i=0;i<film.size();i++) if(film[i].getId()==id){ film.erase(film.begin()+i); ketemu=true; break; }
            if(ketemu) cout<<"Film dengan ID "<<id<<" dihapus."<<endl;
            else cout<<"Film dengan ID "<<id<<" tidak ditemukan."<<endl;
        }else if(pilih!=6){
            cout<<"Pilihan tidak valid."<<endl;
        }
    }while(pilih!=6);
}
