/Applications/XAMPP/bin/mysql -u root -p (untuk membuka + mengaktifkan XAMPP)

SHOW DATABASES; (untuk melihat database)

DROP DATABASE rumah_it; (buat hapus database)

CREATE DATABASE rumah_it; (untuk membuat database)

SHOW TABLES; (untuk melihat tables)

USE .... (untuk masuk ke database) 

CREATE TABLE guru(id INT PRIMARY KEY AUTO_INCREMENT, nama VARCHAR(50) NOT NULL); (untuk membuat table baru)

INSERT INTO guru(nama) VALUES('Arya');

SELECT * FROM guru; (untuk memilih table mana yg ingin di ubah atau di update)

SELECT * FROM murid;

CREATE TABLE murid(id INT PRIMARY KEY AUTO_INCREMENT, nama VARCHAR(50) NOT NULL); (ini sama seperti baris 13)

INSERT INTO murid(nama) VALUES('Contoh');

TRUNCATE guru; ()

SELECT * FROM murid ORDER BY id ASC;

UPDATE murid SET nama = 'yusuf' WHERE id = 5; (untuk nambahin isi table

(id INT PRIMARY KEY AUTO_INCREMENT)
id = nama id nya
INT = integer (tipe data)
PRIMARY KEY = membuat kunci utama table
