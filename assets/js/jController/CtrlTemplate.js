function CtrlTemplate() {
    this.init = init;
    let btnEditPass;
    let editProfile;
    let editPass;
    let btnUbahProfile;
    let namaAdmin;
    let userAdmin;
    let gantiJudul;
    let btnBatalUbah;
    let doUbahProfile;
    let batalPass;
}

function init() {
    initComponent();
    initEventListener();
}

function initComponent() {
    btnEditPass = $ge('ubahPass');
    editProfile = $ge('editProfile');
    editPass = $ge('editPass');
    btnUbahProfile = $ge('btnUbahProfile');
    namaAdmin = $ge('namaAdmin');
    userAdmin = $ge('userAdmin');
    gantiJudul = $ge('gantiJudul');
    btnBatalUbah = $ge('batalUbah');
    doUbahProfile = $ge('doUbahProfile');
    btnBatalPass = $ge('batalPass');
}

function initEventListener() {

    btnEditPass.addEventListener('click', function () {
        editProfile.style.display = 'none';
        editPass.style.display = 'block';
        gantiJudul.innerHTML = 'Ubah Password';
        btnUbahProfile.setAttribute('disabled', 'disabled');
        btnBatalUbah.style.display = 'none';
        btnBatalPass.style.display = 'block';
    });
    btnUbahProfile.addEventListener('click', function () {
        namaAdmin.removeAttribute('disabled');
        userAdmin.removeAttribute('disabled');
        editProfile.style.display = 'block';
        editPass.style.display = 'none';
        gantiJudul.innerHTML = 'Ubah Profile';
        btnUbahProfile.style.display = 'none';
        btnBatalUbah.style.display = 'block';
        btnEditPass.setAttribute('disabled', 'disabled');
        btnUbahProfile.style.display = 'none';
        doUbahProfile.style.display = 'block';
        btnBatalPass.style.display = 'none';
    });
    doUbahProfile.addEventListener('click', function () {
        doUbahProfil();
    });
    btnBatalUbah.addEventListener('click', function () {
        btnUbahProfile.style.display = 'block';
        btnBatalUbah.style.display = 'none';
        doUbahProfile.style.display = 'none';
        namaAdmin.setAttribute('disabled', 'disabled');
        userAdmin.setAttribute('disabled', 'disabled');
        btnEditPass.removeAttribute('disabled');
    });
    btnBatalPass.addEventListener('click', function () {
        editPass.style.display = 'none';
        editProfile.style.display = 'block';
        btnBatalPass.style.display = 'none';
        namaAdmin.setAttribute('disabled', 'disabled');
        userAdmin.setAttribute('disabled', 'disabled');
        btnUbahProfile.removeAttribute('disabled');
        gantiJudul.innerHTML = 'Ubah Profile';
    });
    namaAdmin.addEventListener('keyup', function () {
        doUbahProfile.classList.remove('btn-primary');
        doUbahProfile.classList.add('btn-success');
        doUbahProfile.innerHTML = 'Simpan';
    });
    userAdmin.addEventListener('keyup', function () {
        doUbahProfile.classList.remove('btn-primary');
        doUbahProfile.classList.add('btn-success');
        doUbahProfile.innerHTML = 'Simpan';
    });
}

function doUbahProfil() {
    $.ajax({
        url: `${base_url}ubahProfile`,
        type: 'POST',
        data: {
            nama: namaAdmin.value,
            username: userAdmin.value,
        },
        beforeSend: function () {
            // setTimeout(function () {
            //     console.log('ok');
            // }, 2000);
            doUbahProfile.setAttribute('disabled', 'disabled');
            doUbahProfile.innerHTML = 'Loading...';
        },
        success: function (response) {
            let data = JSON.parse(response);
            if (data.result == 1) {
                toastr.success('Profile berhasil di update', 'Update Berhasil!');
                setTimeout(function () {
                    alert('ok');
                }, 2000)
            } else {
                setTimeout(function () {
                    alert('gagal');
                }, 2000);
            }
        }
    });
}