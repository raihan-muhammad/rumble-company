function CtrlSlider() {
    this.init = init;
    let namaSlider;
    let gambarSlider;
    let btnTambahSlider;
    let formSlider;
    let modalSlider;
    let btnEdit;
    let idSlider;
    let namaEditSlider;
    let gambarEditSlider;
}

function init() {
    initComponent();
    initEventListener();
}

function initComponent() {
    namaSlider = $ge('namaSlider');
    gambarSlider = $ge('gambarSlider');
    btnTambahSlider = $ge('btnTambahSlider');
    formSlider = $ge('formSlider');
    modalSlider = $ge('tambahSlider');
    btnEdit = $ge('btnEdit');
    idSlider = $ge('idSlider');
    namaEditSlider = $ge('namaEditSlider');
    gambarEditSlider = $ge('gambarEditSlider');
}

function initEventListener() {
    formSlider.addEventListener('submit', function (e) {
        e.preventDefault();
        var form_data = new FormData(this);
        form_data.append('nama', namaSlider.value);
        form_data.append('gambar', gambarSlider.value);
        tambahSlider(form_data);
    });
    document.addEventListener('click', event => {
        if (event.target.dataset.target === '#updateSlider') {
            const id = event.target.dataset.id;
            kirimId(id);
        }
    });
}

function tambahSlider(form_data) {
    $.ajax({
        url: `${base_url}slider/tambah`,
        type: 'POST',
        data: form_data,
        contentType: false,
        cache: false,
        processData: false,
        beforeSend: function () {
            btnTambahSlider.setAttribute('disabled', 'disabled');
            btnTambahSlider.innerHTML = 'loading...';
        },
        success: function (res) {
            let data = JSON.parse(res);
            if (data.result == 1) {
                toastr.success(data.pesan, 'Selamat!');
                setTimeout(function () {
                    btnTambahSlider.removeAttribute('disabled');
                    btnTambahSlider.innerHTML = 'Tambah';
                    location.reload();
                }, 1800);

            } else {
                toastr.error(data.pesan, 'Tambah Gagal!');
                setTimeout(function () {
                    btnTambahSlider.removeAttribute('disabled');
                    btnTambahSlider.innerHTML = 'Tambah';
                }, 1800);
            }
        }
    });
}

// const kirimId = (id) => {
//     $.ajax({
//         url: `${base_url}slider/kirim`,
//         type: 'POST',
//         data: {
//             id: id
//         },
//         success: function (res) {
//             let data = JSON.parse(res);
//             namaEditSlider.value(data.nama);
//             gambarEditSlider.value = data.gambar;
//         }
//     });
// }