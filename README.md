# Kripto E-vote
## Langkah Langkah

Ketika sudah mendownload file ini, jangan lupa setting env nya dulu seperti di bawah ini:<br>
DB_CONNECTION=mysql <br>
DB_HOST=127.0.0.1 <br>
DB_PORT=3306 <br>
<b>DB_DATABASE=(isi sesuai nama database yang)</b> <br>
DB_USERNAME=root <br>
DB_PASSWORD= (sesuaikan password server)<br>
Di dalam DB_DATABASE boleh di isi terserah karena itu nantinya nama database, dan Selain DB_DATABASE gausah di apa-apain. <br>
kemudian ketikan perintah di terminal <b>"php artisan migrate"</b>, setelah itu ketikan <b>"php artisan db:seed"</b>. kemudian selesai dan di coba secara keseluruhan.<br>

Kemudian masih di dalam env tapi di bagian email harus di setting sama persis di bawah ini, supaya bisa mengirimkan email:<br>
MAIL_MAILER=smtp <br>
MAIL_HOST=smtp.gmail.com <br>
MAIL_PORT=587 <br>
MAIL_USERNAME=(isi sesuai email yang ingin di jadikan base) contoh:"haha@gmail.com"<br>
MAIL_PASSWORD=(hubungi admin)<br>
MAIL_ENCRYPTION=tls <br>
MAIL_FROM_ADDRESS=(isi sesuai email yang ingin di jadikan base) contoh:"haha@gmail.com"<br>
<hr>

Tampilan Form Login Utama
![tampilan pertama](laporan/0_form_login.png)

Tampilan Dashboard Admin
![tampilan pertama](laporan/1_dashboard_admin.png)

Tampilan Dashboard Admin (student)
![tampilan pertama](laporan/2_data_student_admin.png)

Tampilan Dashboard Admin (student)
![tampilan pertama](laporan/3_create_student.png)

Tampilan Dashboard Admin (student)
![tampilan pertama](laporan/4_show_student.png)

Tampilan Dashboard Admin (student)
![tampilan pertama](laporan/5_edit_student.png)

Tampilan Dashboard Admin (candidate)
![tampilan pertama](laporan/6_data_candidate_admin.png)

Tampilan Dashboard Admin (candidate)
![tampilan pertama](laporan/8_show_candidate.png)

Tampilan Dashboard Admin (candidate)
![tampilan pertama](laporan/9_edit_candidate.png)

Tampilan Dashboard Student
![tampilan pertama](laporan/10_dashboard_student.png)

Tampilan Dashboard Student
![tampilan pertama](laporan/11_dashboard_student.png)

Tampilan Dashboard Student
![tampilan pertama](laporan/12_detail_candidate_student.png)

Tampilan Setelah Melakukan Vote (Tampilan Dashboard Student)
![tampilan pertama](laporan/13_page_after_vote.png)

Tampilan Dashboard Student
![tampilan pertama](laporan/14_cek_integrasi.png)

Setelah Melakukan Pengecekan Integrasi Yang Di Kirim Dari Email( Tampilan Dashboard Student)
![tampilan pertama](laporan/15_sertifikat.png)

