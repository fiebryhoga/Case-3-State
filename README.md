# Sistem Login Sederhana dengan Cookie

Ini adalah sistem login sederhana yang diimplementasikan menggunakan PHP, HTML, CSS, dan JavaScript. Ini memungkinkan pengguna untuk masuk dengan email dan password mereka, dan setelah berhasil masuk, mereka akan diarahkan ke halaman profil mereka. Sistem ini juga mencakup fungsionalitas untuk mengingat sesi login pengguna menggunakan cookies.

## Prasyarat

- XAMPP: Instal XAMPP untuk menjalankan server Apache lokal dan database MySQL.

## Clone Repository

1. Buka terminal Anda.
2. Arahkan ke direktori htdocs di dalam instalasi XAMPP Anda. Misalnya:
    ```bash
    cd C:/xampp/htdocs
    ```
3. Clone repository ke dalam htdocs:
    ```bash
    git clone https://github.com/fiebryhoga/Case-3-State.git cookie
    ```
   

## Penggunaan

Setelah Anda menyiapkan dan menjalankan proyek, Anda dapat menggunakannya dengan langkah-langkah berikut:
1. Mulai server Apache dan database MySQL dari Panel Kontrol XAMPP.
2. Buka browser web Anda dan arahkan ke http://localhost/cookie/index.php untuk mengakses halaman login.
3. Masukkan kredensial yang disediakan (email: pwti@gmail.com, password: @John123) untuk masuk.
4. Jelajahi fungsionalitas sistem login, termasuk manajemen sesi dan halaman profil.

## Struktur File

Direktori proyek berisi file-file berikut:

- `index.php`: Halaman login utama di mana pengguna dapat memasukkan kredensial mereka.
- `login.php`: Skrip backend untuk menangani otentikasi login.
- `logout.php`: Skrip untuk logout pengguna dan menghapus sesi.
- `profile.php`: Halaman profil pengguna yang menampilkan informasi pengguna dan data sesi.
- `README.md`: File README ini yang memberikan informasi tentang proyek.

## Berkontribusi

Kontribusi dipersilakan! Jika Anda ingin berkontribusi pada proyek ini, silakan fork repository dan kirim pull request dengan perubahan Anda.
