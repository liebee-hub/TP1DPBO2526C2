import java.util.*;

public class Main {
    public static void main(String[] args){
        Scanner sc=new Scanner(System.in);
        ArrayList<Film> list=new ArrayList<>();
        int p;
        do{
            System.out.println("1.Tambah 2.Tampil 3.Cari 4.Update 5.Hapus 6.Keluar");
            System.out.print("Pilihan: ");
            if(sc.hasNextInt()) p=sc.nextInt(); else { System.out.println("Input harus angka."); sc.nextLine(); p=0; continue; }

            if(p==1){
                System.out.print("ID: ");
                int id=sc.nextInt(); sc.nextLine();
                System.out.print("Judul: ");
                String judul=sc.nextLine();
                System.out.print("Genre: ");
                String genre=sc.nextLine();
                System.out.print("Durasi: ");
                int durasi=sc.nextInt(); sc.nextLine();
                System.out.print("Gambar: ");
                String gambar=sc.nextLine();
                list.add(new Film(id,judul,genre,durasi,gambar));
            }else if(p==2){
                for(Film f:list) System.out.println(f);
            }else if(p==3){
                System.out.print("ID: ");
                int id=sc.nextInt(); sc.nextLine();
                boolean ketemu=false;
                for(Film f:list) if(f.getId()==id){ System.out.println(f.getJudul()); ketemu=true; }
                if(!ketemu) System.out.println("Film dengan ID "+id+" tidak ditemukan.");
            }else if(p==4){
                System.out.print("ID: ");
                int id=sc.nextInt(); sc.nextLine();
                boolean ketemu=false;
                for(Film f:list) if(f.getId()==id){
                    System.out.print("Judul baru: ");
                    String judul=sc.nextLine();
                    f.setJudul(judul); ketemu=true;
                }
                if(!ketemu) System.out.println("Film dengan ID "+id+" tidak ditemukan.");
            }else if(p==5){
                System.out.print("ID: ");
                int id=sc.nextInt(); sc.nextLine();
                boolean ketemu=false;
                for(int i=0;i<list.size();i++) if(list.get(i).getId()==id){ list.remove(i); ketemu=true; break; }
                if(ketemu) System.out.println("Film dengan ID "+id+" dihapus.");
                else System.out.println("Film dengan ID "+id+" tidak ditemukan.");
            }else if(p!=6){
                System.out.println("Pilihan tidak valid.");
            }
        }while(p!=6);
        sc.close();
    }
}