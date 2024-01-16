# Kripto E-vote
## Langkah Langkah

Ketika sudah mendownload file ini, jangan lupa setting env nya dulu seperti di bawah ini:<br>
DB_CONNECTION=mysql <br>
DB_HOST=127.0.0.1 <br>
DB_PORT=3306 <br>
DB_DATABASE=(isi sesuai nama database yang sesuai) <br>
DB_USERNAME=root <br>
DB_PASSWORD= (sesuaikan password server)<br>
Di dalam DB_DATABASE boleh di isi terserah karena itu nantinya nama database, dan Selain DB_DATABASE gausah di apa-apain. <br>
kemudian ketikan perintah di terminal <b>"php artisan migrate"</b>, setelah itu ketikan <b>"php artisan db:seed"</b>. kemudian selesai dan di coba secara keseluruhan.<br>

Kemudian masih di dalam env tapi di bagian email harus di setting sama persis di bawah ini, supaya bisa mengirimkan email:<br>
MAIL_MAILER=smtp <br>
MAIL_HOST=smtp.gmail.com <br>
MAIL_PORT=587 <br>
MAIL_USERNAME=(isi sesuai email yang ingin di jadikan base) contoh:"haha@gmail.com"<br>
MAIL_PASSWORD=(isi password yang telah di otentikasi)<br>
MAIL_ENCRYPTION=tls <br>
MAIL_FROM_ADDRESS=(isi sesuai email yang ingin di jadikan base) contoh:"haha@gmail.com"<br>
<hr>

Tampilan Form Login Utama

Tampilan Dashboard Admin

Tampilan Dashboard Admin (student)

Tampilan Dashboard Admin (student)

Tampilan Dashboard Admin (student)

Tampilan Dashboard Admin (student)

Tampilan Dashboard Admin (candidate)

Tampilan Dashboard Admin (candidate)

Tampilan Dashboard Admin (candidate)

Tampilan Dashboard Student

Tampilan Dashboard Student

Tampilan Dashboard Student

Tampilan Setelah Melakukan Vote (Tampilan Dashboard Student)

Tampilan Dashboard Student

Setelah Melakukan Pengecekan Integrasi Yang Di Kirim Dari Email( Tampilan Dashboard Student)

