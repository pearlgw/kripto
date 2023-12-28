# Kripto E-vote

Ketika sudah mendownload file ini, jangan lupa setting env nya dulu seperti di bawah ini:
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=(isi sesuai yang kamu mau)
DB_USERNAME=root
DB_PASSWORD=
Di dalam DB_DATABASE boleh di isi terserah karena itu nantinya nama database. 
kemudian ketikan perintah di terminal "php artisan migrate", setelah itu ketikan "php artisan db:seed". kemudian selesai dan di coba secara keseluruhan.

Kemudian masih di dalam env tapi di bagian email harus di setting sama persis di bawah ini, supaya bisa mengirimkan email:
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=senterkecil936@gmail.com
MAIL_PASSWORD=pliszbibpeffkzde
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS="senterkecil936@gmail.com"
MAIL_FROM_NAME="${APP_NAME}"


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

