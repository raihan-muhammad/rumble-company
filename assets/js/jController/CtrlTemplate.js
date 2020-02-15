function CtrlTemplate() {
    this.init = init;
    let btnEditPass;
    let editProfile;
    let editPass;
    let btnUbahProfile;
    let userAdmin;
    let gantiJudul;
    let btnBatalUbah;
    let doUbahProfile;
    let batalPass;
    let idAdmin;
    let passLama;
    let passBaru;
    let passUlang;
    let doUbahPass;
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
    userAdmin = $ge('userAdmin');
    gantiJudul = $ge('gantiJudul');
    btnBatalUbah = $ge('batalUbah');
    doUbahProfile = $ge('doUbahProfile');
    btnBatalPass = $ge('batalPass');
    idAdmin = $ge('id');
    passLama = $ge('passLama');
    passBaru = $ge('passBaru');
    passUlang = $ge('passUlang');
    doUbahPass = $ge('doUbahPass');
}

function initEventListener() {

    btnEditPass.addEventListener('click', function () {
        editProfile.style.display = 'none';
        editPass.style.display = 'block';
        gantiJudul.innerHTML = 'Ubah Password';
        btnUbahProfile.setAttribute('disabled', 'disabled');
        btnBatalUbah.style.display = 'none';
        btnBatalPass.style.display = 'block';
        btnEditPass.style.display = 'none';
        doUbahPass.style.display = 'block';
    });
    btnUbahProfile.addEventListener('click', function () {
        userAdmin.removeAttribute('disabled', 'disabled');
        editProfile.style.display = 'block';
        editPass.style.display = 'none';
        gantiJudul.innerHTML = 'Ubah Username';
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
    userAdmin.addEventListener('keyup', function () {
        doUbahProfile.classList.remove('btn-primary');
        doUbahProfile.classList.add('btn-success');
        doUbahProfile.innerHTML = 'Simpan';
    });
    passLama.addEventListener('keyup', function () {
        doUbahPass.classList.remove('btn-info');
        doUbahPass.classList.add('btn-info');
        doUbahPass.innerHTML = 'Simpan';
    });
    doUbahPass.addEventListener('click', function () {
        doUbahPassword();
    });

}

function doUbahProfil() {
    $.ajax({
        url: `${base_url}ubahProfile`,
        type: 'POST',
        data: {
            id: idAdmin.value,
            username: userAdmin.value,
        },
        beforeSend: function () {
            doUbahProfile.setAttribute('disabled', 'disabled');
            doUbahProfile.innerHTML = 'Loading...';
        },
        success: function (response) {
            let data = JSON.parse(response);
            if (data.result == 1) {
                toastr.success('Anda akan di alihkan ke halaman login', 'Update Username Berhasil!');
                setTimeout(function () {
                    window.location.href = `${base_url}logout`;
                }, 2000);
            } else {
                toastr.error(data.pesan, 'Update Username Gagal!');
                setTimeout(function () {
                    doUbahProfile.removeAttribute('disabled');
                    doUbahProfile.innerHTML = 'Ubah Password';
                }, 1800);
            }
        }
    });
}

function doUbahPassword() {
    $.ajax({
        url: `${base_url}ubahPassword`,
        type: 'POST',
        data: {
            id: idAdmin.value,
            passLama: passLama.value,
            passBaru: passBaru.value,
            passUlang: passUlang.value
        },
        beforeSend: function () {
            doUbahPass.setAttribute('disabled', 'disabled');
            doUbahPass.innerHTML = 'Loading...';
        },
        success: function (res) {
            let data = JSON.parse(res);
            if (data.result == 1) {
                toastr.success('Anda akan di alihkan ke halaman login', 'Update Password Berhasil');
                setTimeout(function () {
                    window.location.href = `${base_url}logout`;
                }, 2000);
            } else {
                toastr.error(data.pesan, 'Update Password Gagal!');
                setTimeout(function () {
                    doUbahPass.removeAttribute('disabled');
                    doUbahPass.innerHTML = 'Ubah Password';
                }, 1800);
            }
        }
    });
}