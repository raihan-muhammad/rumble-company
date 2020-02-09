function $ge(e) {
    return document.getElementById(e);
}

function langAdmin() {
    this.notif = notif;
    var lang = {};

    lang['w1-1'] = 'Field Cant Empty';
    lang['w1-2'] = 'Username/password not match';

    lang['w2-1'] = 'Somting error';

    function notif(e) {
        return lang(e);
    }
}