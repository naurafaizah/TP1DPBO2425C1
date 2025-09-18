// Naura Nur Faizah
// NIM 2408352
// Ilmu Komputer C1

/*Saya Naura Nur Faizah dengan NIM 2408352 mengerjakan TP 1 dalam mata kuliah
Desain Pemrograman Berbasis Objek untuk keberkahan-Nya maka saya tidak akan melakukan kecurangan seperti yang 
telah di spesifikasikan*/

# struktur program
ada 1 class utama Product.php → berisi atribut produk (id, name, price, stock, image) serta getter & setter.

ada beberapa file php untuk fitur utama:
- index.php → halaman utama (list produk).
- add_product.php → tambah produk.
- edit_product.php → ubah produk.
- delete_product.php → hapus produk.

# data produk disimpan di session php, bukan database, jadi setelah browser ditutup, data akan hilang.
untuk tampilan desain dari bahasa php nya seperti ini
<img width="1920" height="1080" alt="php" src="https://github.com/user-attachments/assets/012042d1-d97b-4344-92d2-6116fcf298e7" />

# penyimpanan data
- setiap produk yang ditambahkan akan masuk ke dalam array $_SESSION['products'].
- setiap produk disimpan dalam bentuk object dari class Product.
- ada counter $_SESSION['product_counter'] untuk memberi id unik otomatis mulai dari 1.

# penjelasan desain & flow kode per bahasa (python, java, cpp)
1. python (oop + list)
desain: class Product berisi atribut private + getter/setter. semua produk disimpan di list global products = []. menu jalan lewat console input.

flow kode:
- user pilih menu (tambah, tampil, update, hapus, cari, keluar).
- kalau tambah → buat object Product → append ke list.
- kalau update → cari produk di list → update data.
- kalau hapus → cari index produk → delete dari list.
- kalau cari → loop list → tampilkan kalau ketemu.
- kalau tampil → loop semua produk → panggil show().

2. java (oop + arraylist)
desain: class Product berisi atribut + getter/setter. data produk disimpan di ArrayList<Product>. input & menu interaktif lewat console.

flow kode:
- user pilih menu (tambah, tampil, update, hapus, cari, keluar).
- kalau tambah → buat object Product → tambah ke ArrayList.
- kalau update → cari produk berdasarkan id → set data baru.
- kalau hapus → cari produk di ArrayList → remove.
- kalau cari → loop arraylist → tampilkan kalau ketemu.
- kalau tampil → panggil show() untuk semua produk.

3. cpp (oop + vector)
desain: pakai class Product (atribut: id, name, price, stock, image). data disimpan dalam vector<Product> products.

flow kode:
- program jalan → munculin menu (tambah, tampil, update, hapus, cari, keluar).
- kalau user pilih tambah → buat object Product baru → push ke vector.
- kalau update → cari produk di vector → ubah data.
- kalau hapus → cari produk di vector → erase dari vector.
- kalau cari → loop vector, cek id.
- kalau tampil → loop semua produk dan panggil show().


# CONTOH OUTPUT SETIAP BAHASA
1. PHP
   <img width="481" height="296" alt="Screenshot 2025-09-18 211211" src="https://github.com/user-attachments/assets/2f4cb99b-5a8e-40fe-a32d-ccbaef0c20f6" />
   ketika di update hasilnya seperti ini, yang sebelumnya bisa dilihat di dokumentasi atas itu stok pada id ke 5 sebanyak 40, namun setelah di update stok menjadi sebanyak 25.
<img width="891" height="138" alt="Screenshot 2025-09-18 211225" src="https://github.com/user-attachments/assets/346717ac-ff64-4e1b-9cab-3eec922b1387" />

2. PYTHON
   - add product pada bahasa python dan menampilkan hasilnya sehingga yang tadinya hanya ada 4 product menjadi 5
     <img width="772" height="410" alt="python add" src="https://github.com/user-attachments/assets/b61d82f0-9c08-4b7c-b44d-13672091aa62" />
   - delete product pada id ke 1 dan menampilkannya dengan memilih menu '2'
     <img width="711" height="319" alt="python delete" src="https://github.com/user-attachments/assets/58ed0084-092b-4c22-9dee-fa19980b3d6b" />
   - update product pada id ke 2 yaitu ipHone 14 Pro Max, yang tadinya stok berjumlah 15 menjadi 25
     <img width="695" height="350" alt="python update" src="https://github.com/user-attachments/assets/0ce3bab8-d6bc-4c99-b10f-ed085bd90b6f" />

3. JAVA
   - add product pada bahasa java dan menampilkannya sehingga yang tadinya hanya ada 3 product menjadi 4
     <img width="934" height="430" alt="java add" src="https://github.com/user-attachments/assets/9abc17ad-27a3-484e-89ca-64c18ca2868d" />
   - delete product pada id ke 3
     <img width="934" height="350" alt="java delete" src="https://github.com/user-attachments/assets/01a7fd99-bb6d-459e-9fae-bf37dbabb42c" />
   - update product pada id ke 4, yang tadinya seharga Rp 3400000 dan jumlah stok sebanyak 17, setelah di update menjadi Rp 5500000 dan jumlah stok menjadi 15
     <img width="693" height="545" alt="java update" src="https://github.com/user-attachments/assets/94f254af-90d6-434b-b4d2-4e336e2caa92" />

4. CPP
   - add product pada bahasa cpp dan menampilkannya sehingga yang tadinya hanya ada 4 menjadi 5, dan menampilkannya
     <img width="934" height="456" alt="cpp add" src="https://github.com/user-attachments/assets/5bb9554b-8005-415e-ab2c-6d70e1405f27" />
   - delete product pada id ke 5
     <img width="927" height="346" alt="cpp delete" src="https://github.com/user-attachments/assets/e4ff767f-2fe8-4222-ada5-34149793a3d8" />
   - update product pada id ke 3 yaitu Samsung Smart Tv yang awalnya seharga Rp 5500000 dan jumlah stok ada 5, setelah di update menjadi seharga Rp 7500000 dan stok nya ada 7
     <img width="833" height="392" alt="cpp update" src="https://github.com/user-attachments/assets/3d1f75d6-5656-4f09-9f0b-8d2d046e9593" />






   

