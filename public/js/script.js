let nama_siswa = document.querySelector('#nama_siswa');
let pesan_guru = document.querySelector('#pesan_guru');
let ttd_guru = document.querySelector('#ttd_guru');
let pesan_orang_tua = document.querySelector('#pesan_orang_tua');
let ttd_orang_tua = document.querySelector('#ttd_orang_tua');
let date = document.querySelector('#date');
let buttonSimpan = document.querySelector('#simpan');

buttonSimpan.addEventListener('click', function () {
    // Buat objek FormData untuk mengumpulkan data input
    let formData = new FormData();
    formData.append('nama_siswa', nama_siswa.value);
    formData.append('pesan_guru', pesan_guru.value);
    formData.append('ttd_guru', ttd_guru.value);
    formData.append('pesan_orang_tua', pesan_orang_tua.value);
    formData.append('ttd_orang_tua', ttd_orang_tua.value);
    formData.append('date', date.value);

    // Buat objek XMLHttpRequest
    let xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4) {
            if (xhr.status === 200) {
                // Berhasil menyimpan data, Anda bisa menangani respons di sini jika perlu
                console.log('Data berhasil disimpan');
            } else {
                // Gagal menyimpan data, Anda bisa menangani kesalahan di sini jika perlu
                console.error('Gagal menyimpan data');
            }
        }
    };

    // Atur metode dan URL untuk permintaan AJAX POST
    xhr.open("POST", "/add", true);

    // Kirim data FormData sebagai isi permintaan
    xhr.send(formData);
});
