
-- Modul 1: Persiapan Lingkungan Basis Data
-- NIM: 25430044
-- Proyek: Toko Daring Flyora

-- 1. Memeriksa versi MariaDB dan akun yang digunakan
SELECT VERSION(), CURRENT_USER();

-- 2. Melihat daftar database
SHOW DATABASES;

-- 3. Memeriksa konfigurasi SQL
SELECT @@sql_mode;

-- 4. Memilih database proyek
USE flayora_25430044;

-- 5. Melihat tabel dalam database proyek
SHOW TABLES;
