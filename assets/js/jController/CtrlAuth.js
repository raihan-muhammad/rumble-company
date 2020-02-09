function CtrlAuth() {
    this.init = init;

    let formLogin;
    let btnLogin;
    let inputUser;
    let inputPass;
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
}

function initEventListener() {
    btnLogin.addEventListener('click', function () {
        doLogin();
    })
}


function doLogin() {

    $.ajax({
        url: base_url + "auth/cekLogin",
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
            var data = JSON.parse(response);
            if (data.result == 1) {
                setTimeout(function () {
                    toastr.info('ok');
                    window.location.href = base_url + data.redirectTo;
                }, 2000);
            } else {
                window.location.href = base_url + 'auth';
            }
        }
    })
}