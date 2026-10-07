## Laporan Praktikum Pertemuan 2: Analisis Kebutuhan data
**Mata Kuliah :**Basis data
**Tema Proyek:** Toko Daring (Fhasion Style)

## 1. Tujuan Praktikum
- Tujuan dari praktikum kali ini diharapkan agar mahasiswa dapat memahami konsep bagaimana cara menganalisis kebutuhan data dan juga mampu untuk memberikan informasi kepada klien tentang produk, detail produk, stok, dan juga harga dari produk tersebut
-Mampu menyusun struktur database secara spesifik dengan menggunakan konsep CREATE, READ, UPDATE, DELETE, SEARCH (CRUDS) dalam Toko Daring Flay Store 
-Di dalam proyek ini mahasiswa juga diarahkan untuk menyusun kebutuhan data dalam format Markdown dan mengelolanya melalui Git dan Github

## 2. Landasan Teori 
-Analisis kebutuhan data dalam proyek ini merupakan tahapan awal dari proses pengembangan sistem oprasi basis data untuk menerjemahkan kebutuhan fungsional maupun yang non fungsional dari suatu ekosistem Toko daring ini kedalam bentuk model data konseptual awal seperti entitas, atribut dan rabel

## 3. Hasil Langkah Analisis dan Pembahasan
## Bab 3: Hasil Analisis dan Pembahasan

### 3.1 Hasil Analisis Kebutuhan Data (Toko Flyora)

Pada modul ini, dilakukan analisis kebutuhan data untuk perancangan sistem informasi Toko Daring (Toko Flyora). Berikut adalah rincian hasil analisis yang telah dilakukan.

#### 1. Tabel Analisis Proses Bisnis (Hasil Ai Membantu mempercepat Perapihan kolom)

# BAB 3: HASIL ANALISIS DAN PEMBAHASAN

## 3.1 Hasil Analisis Kebutuhan Data (Toko Flyora)

Pada modul ini, dilakukan analisis kebutuhan data untuk perancangan sistem informasi katalog produk *Toko Flyura*. Berikut adalah rincian hasil analisis alur dan kebutuhan datanya.

### 1. Tabel Analisis Proses Bisnis (Katalog & Informasi)

| No. | Proses Bisnis                  | Aktor yang Terlibat       |               Deskripi Singkat             | 
|-----|--------------------------------|---------------------------|----------------------------------------------------------------------------------------------------------------|
| 1   | Melihat Katalog Produk         | Pengunjung / Pelanggan    | Pengunjung membuka website untuk melihat informasi daftar produk dan detail  
        barang yang dijual.            |
| 2   | Pencarian & Filter Produk      | Pengunjung / Pelanggan    | Pengunjung mencari produk tertentu berdasarkan kategori atau nama   
        barang.                        |
| 3   | Penghubung Pemesanan (Kontak)  | Pelanggan, Admin          | Pelanggan yang berminat pada produk menghubungi admin melalui kontak/
        WhatsApp yang tertera untuk    | 
        pemesanan.                     |

### 2. Tabel Aturan Bisnis (Business Rules)

| No. | Kode Aturan | Keterangan Aturan Bisnis                                                                                  |
|-----|-------------|------------------------------------------------------------------------------------------------------------|
| 1   | BR01        | Setiap produk yang ditampilkan wajib memiliki informasi nama, harga, deskripsi, dan stok yang jelas.       |
| 2   | BR02        | Pengunjung dapat melihat katalog produk kapan saja tanpa harus melakukan registrasi akun terlebih dahulu.  |
| 3   | BR03        | Proses transaksi dilakukan di luar sistem utama melalui narahubung/admin.                                  |

### 3. Tabel Kamus Data / Entitas Sederhana

| No. | Nama Entitas |                    Atribut / Kolom Utama                   |                    Keterangan                |        
|-----|--------------|------------------------------------------------------------|------------------------------------------------------------------|
| 1   | Produk         | id_produk, nama_produk, kategori, harga, deskripsi, stok  | Menyimpan informasi detail barang yang dipajang di 
| 2   | Kategori       | id_kategori, nama_kategori                                | Menyimpan kelompok atau jenis produk yang tersedia di    
| 3   | Admin / Kontak | id_admin, nama, nomor_kontak                              | Menyimpan informasi narahubung bagi pelanggan yang berminat