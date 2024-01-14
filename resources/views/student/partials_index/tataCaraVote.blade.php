<div class="card shadow mb-4">
    <div class="card-body">
        <h4 class="m-0 font-weight-bold text-primary">Tata Cara Menggunakan Evoku</h4>
        <hr>
        <ol id="toggleMessage">
            <li>
                <h5>Kenali visi misi setiap kandidat</h5>
                <p>
                    Sebelum memilih, bacalah visi misi setiap kandidat dengan baik.
                    Anda dapat menekan tombol <i class="fas fa-list-alt"></i> <b> Detail</b> untuk melihat visi misi setiap kandidat.
                    Pilihlah kandidat dengan menekan tombol <i class="fas fa-user-check"> </i><b> Pilih</b> yang sesuai dengan harapan Anda.
                </p>
            </li>
            <li>
                <h5>Pilih dengan saksama kandidat pasangan calon yang tersedia</h5>
                <p>
                    Anda hanya dapat memilih satu kandidat saja. 
                    Pastikan Anda yakin dengan pilihan anda. 
                    Tekan tombol <i class="bi bi-check-square-fill"></i> <b> Submit</b> untuk mengirim suara anda.
                    ...
                </p>
            </li>
        </ol>
        <ol id="content2" style="max-height: 0; overflow: hidden; transition: max-height 0.5s ease;">
            <li>
                <h5>Kenali visi misi setiap kandidat</h5>
                <p>
                    Sebelum memilih, bacalah visi misi setiap kandidat dengan baik.
                    Anda dapat menekan tombol <i class="fas fa-list-alt"></i> <b> Detail</b> untuk melihat visi misi setiap kandidat.
                    Pilihlah kandidat dengan menekan tombol <b><i class="fas fa-user-check"></i> Pilih</b> yang sesuai dengan harapan Anda.
                </p>
            </li>
            <li>
                <h5>Pilih dengan saksama kandidat pasangan calon yang tersedia</h5>
                <p>
                    Anda hanya dapat memilih satu kandidat saja. 
                    Pastikan Anda yakin dengan pilihan Anda.
                    Tekan tombol <i class="bi bi-check-square-fill"></i> <b> Submit</b> untuk mengirim suara Anda.</p>
            </li>
            <li>
                <h5>Dapatkan token melalui email</h5>
                <p>
                    Setelah memilih, Anda akan mendapatkan <b>token</b> melalui email yang sudah terdaftar. 
                    Cek email Anda untuk melihat <b>token</b> Anda.
                </p>
            </li>
            <li>
                <h5>Masukkan token di menu cek integrasi</h5>
                <p>
                    Selanjutnya, masukkan token yang Anda terima melalui email di menu <i class="bi bi-shield-fill-check"></i> <b> Cek Integrasi</b> untuk verifikasi
                    pada platform Evoku.
                </p>
            </li>
            <li>
                <h5>Unduh sertifikat jika berhasil</h5>
                <p>
                    Jika token Anda valid, Anda dapat mengunduh sertifikat sebagai bukti bahwa Anda telah berpartisipasi dalam
                    pemilihan untuk kemajuan Pemimpin Organisasi UDINUS.
                </p>
            </li>
            <li>
                <h5>Cek informasi di dashboard</h5>
                <p>
                    Buka <i class="bi bi-house-door-fill"></i> <b> Dashboard</b> untuk melihat informasi tentang kandidat yang Anda pilih.
                    Pastikan informasi tersebut sesuai dengan pilihan Anda.
                </p>
            </li>
            <li>
                <h5>Pantau dan waspadai terhadap perbedaan di dashboard</h5>
                <p>
                    Jika Anda melihat perbedaan antara kandidat yang Anda pilih dan informasi di dashboard, 
                    segera laporkan ke 
                    <a href="https://wa.me/6285870254510?" class="rounded btn btn-outline-danger p-1 pl-2 pr-2 ml-2 mr-2" style="transition: 0.1s" target="_blank"><i class="bi bi-flag-fill mr-2"></i><b> Pengaduan.</b></a> 
                    Hal ini dapat menandakan adanya potensi pembajakan akun.
                </p>
            </li>
            <p>
                Ikuti langkah-langkah ini agar proses pemilihan dapat berjalan dengan lancar, aman, dan jujur.
            </p>
        </ol>
        <button onclick="toggleContent('content2')" class="btn btn-outline-secondary" id="toggleButton">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
            </svg>
            Lihat selengkapnya
        </button>
    </div>

    <script>
        function toggleContent(contentId) {
            var content = document.getElementById(contentId);
            var button = document.getElementById('toggleButton');
            var toggleMessage = document.getElementById('toggleMessage');

            if (content.style.maxHeight === '0px') {
                content.style.maxHeight = content.scrollHeight + 'px';
                button.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-up-fill" viewBox="0 0 16 16"><path d="m7.247 4.86-4.796 5.481c-.566.647-.106 1.659.753 1.659h9.592a1 1 0 0 0 .753-1.659l-4.796-5.48a1 1 0 0 0-1.506 0z"/></svg> Sembunyikan';
                toggleMessage.style.display = 'none'; // Menyembunyikan tag p
            } else {
                content.style.maxHeight = '0px';
                button.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16"><path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/></svg> Lihat selengkapnya';
                toggleMessage.style.display = 'block'; // Menampilkan tag p
            }
        }
    </script>
</div>