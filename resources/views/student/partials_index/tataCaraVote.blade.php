<div class="card shadow mb-4">
    <div class="card-body">
        <h4 class="m-0 font-weight-bold text-primary">Tata Cara Menggunakan E-Voku</h4>
        <hr>
        <ol id="toggleMessage">
            <li>
                <h5>Kenali visi misi setiap kandidat</h5>
                <p>
                    Sebelum memilih, bacalah visi misi setiap kandidat dengan baik.
                    Anda dapat menekan tombol <b>"Detail"</b> untuk melihat visi misi setiap kandidat.
                    Pilihlah kandidat dengan menekan tombol <b>"Pilih"</b> yang sesuai dengan harapan Anda.
                </p>
            </li>
            <li>
                <h5>Pilih kandidat pasangan calon di bawah "👇" dengan hati-hati</h5>
                <p>
                    Anda hanya dapat memilih satu kandidat saja. 
                    Pastikan Anda yakin dengan pilihan Anda. 
                    Tekan tombol <b>"Submit"</b> untuk mengirim suara Anda. (...)</p>
            </li>
        </ol>
        <ol id="content2" style="max-height: 0; overflow: hidden; transition: max-height 0.5s ease;">
            <li>
                <h5>Kenali visi misi setiap kandidat</h5>
                <p>
                    Sebelum memilih, bacalah visi misi setiap kandidat dengan baik.
                    Anda dapat menekan tombol <b>"Detail"</b> untuk melihat visi misi setiap kandidat.
                    Pilihlah kandidat dengan menekan tombol <b>"Pilih"</b> yang sesuai dengan harapan Anda.
                </p>
            </li>
            <li>
                <h5>Pilih kandidat pasangan calon di bawah "👇" dengan hati-hati</h5>
                <p>
                    Anda hanya dapat memilih satu kandidat saja. 
                    Pastikan Anda yakin dengan pilihan Anda.
                    Tekan tombol <b>"Submit"</b> untuk mengirim suara Anda.</p>
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
                    Selanjutnya, masukkan token yang Anda terima melalui email di menu <b>"Cek Integrasi"</b> untuk verifikasi
                    pada platform E-Voku.
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
                    Buka <b>dashboard</b> untuk melihat informasi tentang kandidat yang Anda pilih.
                    Pastikan informasi tersebut sesuai dengan pilihan Anda.
                </p>
            </li>
            <li>
                <h5>Pantau dan waspadai terhadap perbedaan di dashboard</h5>
                <p>
                    Jika Anda melihat perbedaan antara kandidat yang Anda pilih dan informasi di dashboard, 
                    segera laporkan ke 
                    <a href="https://wa.me/6285870254510?" class="btn btn-primary" target="_blank">Pengaduan</a>. 
                    Hal ini dapat menandakan adanya potensi pembajakan akun.
                </p>
            </li>
            <p>
                Ikuti langkah-langkah ini agar proses pemilihan dapat berjalan dengan lancar, aman, dan jujur.
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