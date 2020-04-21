function wsRequestCommon(url, method = 'GET', data = null, file = null, fn) {
    if (!file) {
        $.ajax({
            url: url,
            type: method,
            data: data,
        })
        .done(function(response) {
            if (response.code_retour == 1) {
                fn(response.resultat, null);
            } else {
                fn(response.resultat, 'error');
            }
        })
        .fail(function() {
            fn(null, 'error');
        });
    } else {
        $.ajax({
            url: url,
            type: method,
            data: data,
            contentType: false,
            processData: false,
        })
        .done(function(response) {
            if (response.code_retour == 1) {
                fn(response.resultat, null);
            } else {
                fn(response.resultat, 'error');
            }
        })
        .fail(function() {
            fn(null, 'error');
        });
    }
}

function wsRequestCommonOld(url, method = 'GET', data = null, file = null, fn) {
    if (!file) {
        $.ajax({
            url: url,
            type: method,
            data: data,
        })
        .done(function(response) {
            if (response.statut == 1) {
                fn(response, null);
            } else {
                fn(response, 'error');
            }
        })
        .fail(function() {
            fn(null, 'error');
        });
    } else {
        $.ajax({
            url: url,
            type: method,
            data: data,
            contentType: false,
            processData: false,
        })
        .done(function(response) {
            if (response.statut == 1) {
                fn(response, null);
            } else {
                fn(response, 'error');
            }
        })
        .fail(function() {
            fn(null, 'error');
        });
    }
}

function couperChaineCommon(nbrMax, maChaine){
    var positionEspace = maChaine.indexOf(" ", nbrMax);
    if (positionEspace == -1){
        return maChaine;
    }
    else
    {
        maChaine = maChaine.substr(0, positionEspace) + "...";
        return maChaine;
    }
}

class CommonJavascript {
    static getMaxLengthTitleForNotif() {
        return 65;
    }
    static getMaxLengthContenuForNotif() {
        return 150;
    }
    static getMaxLengthContenuForNotifMobile() {
        return 80;
    }
    static getMaxLengthTitleForNotifHeader() {
        return 60;
    }
    static getMaxLengthContenuForNotifHeader() {
        return 120;
    }
}
