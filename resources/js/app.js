import './bootstrap';

// instruktur //
document.getElementById('confirmAddInstructor').addEventListener('click', function () {
    const newInstructor = document.getElementById('instructorName').value;

    // Validasi nama instruktur
    if (!newInstructor.trim()) {
        alert("Nama instruktur tidak valid. Tidak boleh kosong atau hanya spasi.");
        return;
    }

    // Cek apakah nama sudah ada
    const existingInstructors = Array.from(instrukturSelect.options).map(option => option.value.toLowerCase());
    if (existingInstructors.includes(newInstructor.toLowerCase())) {
        alert("Nama instruktur sudah ada di dalam daftar.");
        return;
    }

    // Tambahkan nama instruktur ke dropdown
    const option = document.createElement('option');
    option.value = newInstructor;
    option.text = newInstructor;
    instrukturSelect.appendChild(option);

    // Kirim ke server menggunakan AJAX
    saveInstructorToServer(newInstructor);

    // Tutup modal
    $('#addInstructorModal').modal('hide');
});

// Fungsi untuk menyimpan instruktur ke server
function saveInstructorToServer(instructor) {
    fetch('/update-instruktur', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}' // Pastikan CSRF token diatur dengan benar
        },
        body: JSON.stringify({ instructor, action: 'add' })
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            alert(data.message);
        } else {
            alert("Terjadi kesalahan: " + data.message);
        }
    })
    .catch(error => {
        console.error('Error:', error);
        alert("Terjadi kesalahan. Tidak dapat menyimpan instruktur.");
    });
}

document.addEventListener('DOMContentLoaded', function () {
    const dateSelect = document.getElementById('tanggal');
    const addDateBtn = document.getElementById('addDateBtn');
    const removeDateBtn = document.getElementById('removeDateBtn');
    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    // Fungsi untuk mengambil tanggal yang sudah ada dari server
    function loadDatesFromServer() {
        fetch('/get-tanggal') // Ganti dengan endpoint yang sesuai
            .then(response => response.json())
            .then(data => {
                if (data.success && Array.isArray(data.dates)) {
                    data.dates.forEach(date => {
                        const option = document.createElement('option');
                        option.value = date;
                        
                        // Format tanggal untuk menampilkan bulan dengan nama
                        const dateParts = date.split('-');
                        const year = dateParts[0];
                        const month = parseInt(dateParts[1]);
                        const day = dateParts[2];

                        const monthNames = [
                            "Januari", "Februari", "Maret", "April", "Mei", "Juni",
                            "Juli", "Agustus", "September", "Oktober", "November", "Desember"
                        ];

                        option.text = `${day} ${monthNames[month - 1]} ${year}`; // Format "DD Bulan YYYY"
                        dateSelect.appendChild(option);
                    });
                }
            })
            .catch(error => {
                console.error('Error fetching dates:', error);
            });
    }

    // Panggil fungsi untuk memuat tanggal saat halaman dimuat
    loadDatesFromServer();

    // Tambah Tanggal
    addDateBtn.addEventListener('click', function () {
        const newDate = prompt("Masukkan tanggal baru (YYYY-MM-DD):");
        if (newDate) {
            fetch('/update-tanggal', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': csrfToken
                },
                body: JSON.stringify({ date: newDate, action: 'add' })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    const option = document.createElement('option');
                    option.value = newDate;
                    
                    // Format untuk menampilkan bulan dengan nama
                    const dateParts = newDate.split('-');
                    const year = dateParts[0];
                    const month = parseInt(dateParts[1]);
                    const day = dateParts[2];

                    const monthNames = [
                        "Januari", "Februari", "Maret", "April", "Mei", "Juni",
                        "Juli", "Agustus", "September", "Oktober", "November", "Desember"
                    ];

                    option.text = `${day} ${monthNames[month - 1]} ${year}`; // Format "DD Bulan YYYY"
                    dateSelect.appendChild(option);
                    alert(data.message);
                } else {
                    alert(data.message);
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert("Terjadi kesalahan. Tidak dapat menyimpan tanggal.");
            });
        }
    });

    // Hapus Tanggal
    removeDateBtn.addEventListener('click', function () {
        const selectedOption = dateSelect.options[dateSelect.selectedIndex];
        if (!selectedOption || !selectedOption.value) {
            alert("Pilih tanggal yang ingin dihapus.");
            return;
        }
    
        const selectedDate = selectedOption.value;
    
        fetch('/update-tanggal', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': csrfToken
            },
            body: JSON.stringify({ date: selectedDate, action: 'remove' })
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                selectedOption.remove();  // Hapus elemen dropdown
                alert(data.message);
            } else {
                alert(data.message);
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert("Terjadi kesalahan. Tidak dapat menghapus tanggal.");
        });
    });
});

// souvenir //
document.addEventListener('DOMContentLoaded', function () {
    const souvenirSelect = document.getElementById('souvenir');
    const addSouvenirBtn = document.getElementById('addSouvenirBtn');
    const removeSouvenirBtn = document.getElementById('removeSouvenirBtn');
    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    // Tambah Souvenir
    addSouvenirBtn.addEventListener('click', function () {
        const newSouvenir = prompt("Masukkan nama souvenir baru:");
        if (newSouvenir) {
            fetch('/update-souvenir', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': csrfToken
                },
                body: JSON.stringify({ souvenir: newSouvenir, action: 'add' })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    const option = document.createElement('option');
                    option.value = newSouvenir;
                    option.text = newSouvenir;
                    souvenirSelect.appendChild(option);
                    alert(data.message);
                } else {
                    alert(data.message);
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert("Terjadi kesalahan. Tidak dapat menyimpan souvenir.");
            });
        }
    });

    // Hapus Souvenir
    removeSouvenirBtn.addEventListener('click', function () {
        const selectedOption = souvenirSelect.options[souvenirSelect.selectedIndex];
        if (!selectedOption || !selectedOption.value) {
            alert("Pilih souvenir yang ingin dihapus.");
            return;
        }

        const selectedSouvenir = selectedOption.value;

        fetch('/update-souvenir', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': csrfToken
            },
            body: JSON.stringify({ souvenir: selectedSouvenir, action: 'remove' })
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                selectedOption.remove();  // Hapus elemen dropdown
                alert(data.message);
            } else {
                alert(data.message);
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert("Terjadi kesalahan. Tidak dapat menghapus souvenir.");
        });
    });
});

let deleteForm;

$('.btn-danger').on('click', function(e) {
    e.preventDefault();
    deleteForm = $(this).closest('form'); // Menyimpan referensi ke form yang akan dihapus
    $('#deleteModal').modal('show'); // Menampilkan modal
});

// Ketika tombol konfirmasi di modal ditekan
$('#confirmDelete').on('click', function() {
    if (deleteForm) {
        deleteForm.submit(); // Mengirimkan form untuk menghapus data
    }
});

