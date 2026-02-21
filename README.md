# Data Mahasiswa Management System

## Deskripsi
Data Mahasiswa Management System adalah aplikasi berbasis web sederhana yang dikembangkan menggunakan PHP Native dan MySQL. Aplikasi ini digunakan untuk mengelola data mahasiswa seperti NIM, nama, alamat, tanggal lahir, gender, dan usia. Sistem ini memiliki dua halaman utama, yaitu: Halaman Home (menampilkan data dan statistik) dan Halaman Admin (mengelola data mahasiswa).  


## 🚀 Fitur Utama

### 🏠 Halaman Home
- Menampilkan seluruh data mahasiswa
- Statistik jumlah mahasiswa:
  - Total Mahasiswa
  - Total Mahasiswa Perempuan
  - Total Mahasiswa Laki-laki
- Fitur pencarian berdasarkan nama
- Sorting data berdasarkan NIM (Ascending & Descending)

### 🔧 Halaman Admin
- Tambah data mahasiswa
- Edit data mahasiswa
- Hapus data mahasiswa
- Fitur pencarian berdasarkan nama
- Sorting data berdasarkan NIM (Ascending & Descending)
- Export data ke Excel (.xls)

---

## Teknologi & Versi
- PHP: 8.3.25
- Database: MySQL (MariaDB 10.4.25)
- Bootstrap 5
- HTML5
- XAMPP

---

## Instalasi & Setup

1. Clone / Download Project <br>
   Letakkan folder project ke dalam:
   ```bash
   htdocs (XAMPP)
   ````

2. Export Database <br>
   Masuk ke phpMyAdmin lalu buat database:
    ```bash
    mahasiswa_db
    ```
    Kemudian, export database yang telah tersedia dalam folder database.

3. Konfigurasi Koneksi Database <br>
   Pastikan nama database yang terdapat pada PhpMyAdmin = database pada file koneksi.

4. Jalankan Aplikasi <br>
   Buka browser:
   ```bash
   http://localhost/mahasiswa_serkom/
   ```

---

## 📊 Alur Penggunaan Aplikasi
1. User membuka halaman Home
2. Data mahasiswa ditampilkan
3. User dapat melakukan pencarian atau sorting
4. Admin masuk ke halaman Admin
5. Admin dapat:
   - Menambah data
   - Mengedit data
   - Menghapus data
   - Mengexport data ke Excel

---

## Struktur Folder
```text
mahasiswa_serkom/
│
├── admin/
│   ├── index.php            # Halaman admin
│   ├── tambah.php           # Tambah data
│   ├── edit.php             # Edit data
│   ├── delete.php           # Hapus data
│   └── export.php           # Export Excel
│
├── config/
│   └── koneksi.php          # Koneksi database
│
├── database/
│   └── mahasiswa.sql        # Database
│
├── flowchart/               # Gambar Flowchart Sistem
│   ├── flow_data_mhs_serkom-admin.drawio.png
│   └── flow_data_mhs_serkom-home.drawio.png
│
├── layout/
│   └── header.php           # Template navbar header
│
├── mockup /                 # Gambar Mockup Program
│   ├── admin.png
│   ├── edit_form.png
│   ├── home.png
│   └── tambah_form.png
│
├── index.php                # Halaman utama (Home)
└── README.md

```

