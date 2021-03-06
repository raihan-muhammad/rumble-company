function CtrlAuth() {
    this.init = init;

    let formLogin;
    let btnLogin;
    let inputUser;
    let inputPass;
    let usernameAdmin;
    let passwordAdmin;
    let btnTambahAdmin;
}

function init() {
    initComponent();
    initEventListener();
}

function initComponent() {
    formLogin = $ge('loginForm');
    btnLogin = $ge('btnLogin');
    inputUser = $ge('user');
    inputPass = $ge('pass');
    usernameAdmin = $ge('usernameAdmin');
    passwordAdmin = $ge('passwordAdmin');
    btnTambahAdmin = $ge('tambahAdmin');
}

function initEventListener() {
    btnLogin.addEventListener('click', function () {
        doLogin();
    });
    btnTambahAdmin.addEventListener('click', function () {
        doAddAdmin();
        alert('ok');
    });
}


function doLogin() {
    $.ajax({
        url: `${base_url}auth/cekLogin`,
        type: 'POST',
        data: {
            username: inputUser.value,
            password: inputPass.value
        },
        beforeSend: function () {
            btnLogin.setAttribute('disabled', 'disabled');
            btnLogin.innerHTML = 'Loading...';
        },
        success: function (response) {
            let data = JSON.parse(response);
            if (data.result == 1) {
                toastr.success('Tunggu anda akan di alihkan ke halaman admin', 'Login Berhasil!')
                setTimeout(function () {
                    window.location.href = base_url + data.redirectTo;
                }, 2000);
            } else {
                toastr.error('Username atau password salah!', 'Login Gagal!');
                btnLogin.removeAttribute('disabled');
                btnLogin.innerHTML = 'Login';
            }
        }
    })
}