<div class="card shadow mb-4">
    <div class="card-body">
        <h3 class="m-0 font-weight-bold text-primary">Tata Cara E-Vote</h3>
        <hr>
        <ol id="toggleMessage">
            <li>
                <h5>Mempelajari Visi Misi tiap Kandidat</h5>
                <p>Bacalah dengan seksama dan pilih kandidat dengan bijak, tekan tombol "detail" untuk mengetahui
                    visi
                    misi dari tiap kandidat sebelum anda tekan tombol "pilih"</p>
            </li>
            <li>
                <h5>Pilih Kandidat Pasangan Calon pada di bawah ini "👇" dengan Hati-hati</h5>
                <p>Anda dapat memilih salah satu kandidat pasangan calon. Mohon perhatikan
                    dengan cermat dan pastikan Anda yakin dengan pilihan Anda. Jika yakin, tekan tombol "Submit"
                    untuk
                    mengirim suara Anda. (...)</p>
            </li>
        </ol>
        <ol id="content2" style="max-height: 0; overflow: hidden; transition: max-height 0.5s ease;">
            <li>
                <h5>Mempelajari Visi Misi tiap Kandidat</h5>
                <p>Bacalah dengan seksama dan pilih kandidat dengan bijak, tekan tombol "detail" untuk mengetahui
                    visi
                    misi dari tiap kandidat sebelum anda tekan tombol "pilih"</p>
            </li>
            <li>
                <h5>Pilih Kandidat Pasangan Calon pada di bawah ini "👇" dengan Hati-hati</h5>
                <p>Anda dapat memilih salah satu kandidat pasangan calon. Mohon perhatikan
                    dengan cermat dan pastikan Anda yakin dengan pilihan Anda. Jika yakin, tekan tombol "Submit"
                    untuk
                    mengirim suara Anda.</p>
            </li>
            <li>
                <h5>Dapatkan Token Melalui Email</h5>
                <p>Usai melakukan vote, sistem akan mengirimkan token ke alamat email yang terdaftar. Pastikan untuk
                    memeriksa email Anda.</p>
            </li>
            <li>
                <h5>Masukkan Token di Menu Cek Integrasi</h5>
                <p>Selanjutnya, gunakan token yang diterima melalui email untuk verifikasi di menu cek integrasi
                    pada
                    platform E-Vote.</p>
            </li>
            <li>
                <h5>Unduh Sertifikat Jika Berhasil</h5>
                <p>Jika verifikasi sukses, Anda dapat mengunduh sertifikat sebagai tanda legalitas partisipasi dalam
                    proses voting untuk kemajuan Pemimpin Organisasi Udinus.</p>
            </li>
            <li>
                <h5>Periksa Informasi di Dashboard</h5>
                <p>Akses dashboard untuk memastikan informasi bahwa Anda telah memilih salah satu kandidat pasangan
                    calon. Pastikan informasi tersebut sesuai dengan pilihan Anda.</p>
            </li>
            <li>
                <h5>Pantau dan Waspada terhadap Perbedaan di Dashboard</h5>
                <p>Jika Anda menemui perbedaan antara kandidat yang Anda pilih dan informasi di dashboard, segera
                    laporkan ke <a href="https://wa.me/6285870254510?" class="btn btn-primary"
                        target="_blank">Pengaduan</a> karena hal tersebut bisa menandakan adanya potensi pembajakan
                    akun.</p>
            </li>
            <p>
                Dengan mengikuti langkah-langkah ini, diharapkan proses E-Vote dapat berjalan dengan transparan,
                aman, dan
                memberikan kepastian bagi setiap pemilih.
            </p>
        </ol>
        <button onclick="toggleContent('content2')" class="btn btn-primary" id="toggleButton">Show</button>
    </div>

    <script>
        function toggleContent(contentId) {
            var content = document.getElementById(contentId);
            var button = document.getElementById('toggleButton');
            var toggleMessage = document.getElementById('toggleMessage');

            if (content.style.maxHeight === '0px') {
                content.style.maxHeight = content.scrollHeight + 'px';
                button.innerHTML = 'Hide';
                toggleMessage.style.display = 'none'; // Menyembunyikan tag p
            } else {
                content.style.maxHeight = '0px';
                button.innerHTML = 'Show';
                toggleMessage.style.display = 'block'; // Menampilkan tag p
            }
        }
    </script>


</div>
