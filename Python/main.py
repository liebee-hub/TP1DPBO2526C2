from film import Film

data=[]

while True:
    print('1.Tambah 2.Tampil 3.Cari 4.Update 5.Hapus 6.Keluar')
    p=input('Pilih: ')

    if p=='1':
        id=int(input('ID: '))
        judul=input('Judul: ')
        genre=input('Genre: ')
        durasi=int(input('Durasi: '))
        gambar=input('Gambar: ')
        data.append(Film(id,judul,genre,durasi,gambar))
    elif p=='2':
        for f in data:
            print(f.id,f.judul,f.genre,f.durasi,f.gambar)
    elif p=='3':
        id=int(input('ID: '))
        ketemu=False
        for f in data:
            if f.id==id:
                print(f.judul)
                ketemu=True
        if not ketemu:
            print('Film dengan ID',id,'tidak ditemukan.')
    elif p=='4':
        id=int(input('ID: '))
        ketemu=False
        for f in data:
            if f.id==id:
                f.judul=input('Judul baru: ')
                ketemu=True
        if not ketemu:
            print('Film dengan ID',id,'tidak ditemukan.')
    elif p=='5':
        id=int(input('ID: '))
        ketemu=False
        for i,f in enumerate(data):
            if f.id==id:
                data.pop(i)
                ketemu=True
                break
        if ketemu:
            print('Film dengan ID',id,'dihapus.')
        else:
            print('Film dengan ID',id,'tidak ditemukan.')
    elif p=='6':
        break
    else:
        print('Pilihan tidak valid.')