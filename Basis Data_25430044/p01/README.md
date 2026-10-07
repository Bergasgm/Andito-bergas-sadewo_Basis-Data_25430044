## Basis Data - Semester 3
Nama: Andito Bergas Sadewo
NiM: 25430044
Kelas: B
## Identitas Project
- Tema Project: Toko Daring
- Nama Toko: Flayora_Store


 ## Tujuan Praktikum:
*Tujuan dari project ini adalah untuk dapat memahami bagaimana cara instalasi dan juga memahami konfigurasi server basis data MariaDB melalui XAMPP control panel, mengatur hak akses dan membuat database baru, menghapus database, mengedit/update database pengguna/user juga menginisialisasi repositori Git lokal dan menghubungkannya ke akun GitHub

## Landasan Teori
 Pengertian Tentang Database
 - Database itu merupakan serangkaian data atau kumpulan data yang di kelola sedemikian rupa hingga menghasilkan data satu dan yang lainnya saling berhubungan yang bertujuan agar mempermudah pengguna untuk mendapatkan informasi dari sistem Data tersebut yang bisa di sebut juga dengan DBMS (Database Management System) seperti contohnya MariaDB atau MySQL
  **Data Definition Lengauge
- DDL merupakan termasuk dari sekelompok perintah SQL yang difungsikan untuk mendefinisikan struktur dari suatu database, juga yang mengatur data agar dapat update/edit, hapus, create/membuat data seperti pada index, tabel, user, dan database contohnya seperti kode program ini
*CREATE DATABASE: untuk membuat database baru
*CREATE TABEL   : untuk membuat tabel baru
*DROP           : untuk menghapus objek
semua printah ini bisa di jalankan diSQL

## Manajemen Pengguna
Didalam sistem basis data yang terpenting yang harus di perhatikan adalah bagimana user bisa mengamankan Data didalamnya jadi pengguna dapat mengatur untuk kepada siapa saja data ini bisa di akses, jadi di sini saya ingin menjelaskan secara singkat apa saja yang harus di lakukan user
untuk mengamankan data tersebut.
- Pastikan user sudah membuat kolom user di dalam database yang mana di dalamnya terdiri dari username dan juga password
- Agar password itu tidak bisa di baca oleh orang lain selain user maka disini saya akan melakukan bcrypt atau bisa disebut mengenkrip password contohnya jika saya memasukan password "Kode Rahasia" dan saya enkrip didalam bcrypt maka password tersebut akan sangat sulit terbaca oleh pengguna lain.

## Langkah-Langkah Pengaktifan XAMPP

Langkah pertama: Menyalakan modul apache dan mysql di XAMPP control panel, lalu masuk kedalam menu admin mysql.
Langkah pKedua:  Akses Terminal MariaDB lalu masuk ke command promt line (CMD) dengan perintah 'mysql-u root -p'.
Langkah ketiga:  Membuat data base baru dengan perintah 'Create Database' di dalam menu sql 
Langkah Keempat: Pembuatan User & hak akses   
Langkah Kelima: instal Git & GitHub lalu jalankan perintah 'git init' di folder project vs code. 
Langkah Keenam: Menghubungkan ke repositori jarak jauh via 'git add', 'git commit', dan 'git push.

## Hasil file Screenshot

![Bukti Screenshot Praktikum](./Picture/SS.1png)
![Bukti Screenshot Praktikum](./Picture/SS.2.png)
![Bukti Screenshot Praktikum](./Picture/SS.3.png)
![Bukti Screenshot Praktikum](./Picture/SS.4.png)

