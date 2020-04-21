tinymce.init({
    selector: "textarea",
    theme: "modern",
    skin: "light",
    language : "fr_FR",
    width: 600,
    height: 300,
    menubar: false,
    statusbar: false,
    relative_urls : false,
    convert_urls : false,
    forced_root_block : false,
    force_br_newlines : true,
    force_p_newlines : false,
    allow_conditional_comments : false,
    valid_elements : "a[href|target=_blank|rel],strong/b,br,p,-ol[type|compact],-ul[type|compact],-li,em/i,u",
    extended_valid_elements : "script[type|src],iframe[src|style|width|height|scrolling|marginwidth|marginheight|frameborder],img[class|src|border=0|alt|title|hspace|vspace|width|height|align|onmouseover|onmouseout|name],$elements\",blockquote[dir|style|cite|class|dir<ltr?rtl|id|lang|onclick|ondblclick'|onkeydown|onkeypress|onkeyup|onmousedown|onmousemove|onmouseout|onmouseover|onmouseup|style|title]",
    invalid_elements : 'div,font',
    element_format : 'html',
    invalid_styles: 'color font-size',
    keep_styles: false,
    plugins: [
        "link image lists charmap hr anchor pagebreak spellchecker",
        "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
        "save table directionality template paste textcolor"
    ],
    toolbar: "undo redo | bold italic | bullist numlist | link",
    rel_list: [
        {title: 'NoFollow', value: 'nofollow'}
    ],
    browser_spellcheck : true,
    init_instance_callback: function(ed) {
        ed.on('paste', function(e) {
            e.preventDefault();
            var ranges = [
                '\ud83c[\udf00-\udfff]', // U+1F300 to U+1F3FF
                '\ud83d[\udc00-\ude4f]', // U+1F400 to U+1F64F
                '\ud83d[\ude80-\udeff]'  // U+1F680 to U+1F6FF
            ];
            var content = ((e.originalEvent || e).clipboardData || window.clipboardData).getData('Text');
            content = content.replace(new RegExp(ranges.join('|'), 'g'), '');
            if (content.includes('<blockquote')) {
                tinymce.EditorManager.execCommand('mceInsertContent', false, content);
            }
        });
    },
    setup : function(ed) {
        ed.on("keyup", function(){
            document.getElementById("preview-texte-petition").innerHTML = (tinyMCE.get('texte-petition').getContent());
        });
    }
});

function popupPrint(){
    $('#popupPrint').fadeIn("fast", function(){
        document.getElementById("popupPrint").style.display = 'block';
    });
    setTimeout(function(){
        $('#popupPrint').fadeOut("fast", function(){
            document.getElementById("popupPrint").style.display = 'none';
        });
    }, 10000);
}






function preview(div, id){
    document.getElementById(div).innerHTML=document.getElementById(id).value;
}
function FormAccountCreatefct(){
    document.getElementById("FormAccountType").value = "2";
    document.getElementById("FormAccountTitle").textContent = "Connexion";
    document.getElementById("account-submit").value = "Connexion";
    document.getElementById("FormAccountConnectSpan").style.display = 'none';
    document.getElementById("FormAccountCreateSpan").style.display = 'block';
    document.getElementById("FormAccountForgotMDP").style.display = 'block';
    document.getElementById("FormAccountName").style.display = 'none';
    document.getElementById("FormAccountFName").style.display = 'none';
}

function FormAccountConnexionfct(){
    document.getElementById("FormAccountType").value = "1";
    document.getElementById("FormAccountTitle").textContent = "Inscription";
    document.getElementById("account-submit").value = "Inscription";
    document.getElementById("FormAccountConnectSpan").style.display = 'block';
    document.getElementById("FormAccountCreateSpan").style.display = 'none';
    document.getElementById("FormAccountForgotMDP").style.display = 'none';
    document.getElementById("FormAccountName").style.display = 'block';
    document.getElementById("FormAccountFName").style.display = 'block';
}

function FormAccountConnexionForgotfct(){
    document.getElementById("FormAccountType").value = "3";
    document.getElementById("FormAccountTitle").style.display = "none";
    document.getElementById("account-submit").value = "Réinitialiser le mot de passe";
    document.getElementById("FormAccountBackSpan").style.display = 'block';
    document.getElementById("FormAccountConnectSpan").style.display = 'none';
    document.getElementById("FormAccountCreateSpan").style.display = 'none';
    document.getElementById("FormAccountForgotMDP").style.display = 'none';
    document.getElementById("FormAccountBottom").style.display = 'none';
    document.getElementById("FormAccountForgotPText").style.display = 'block';
    document.getElementById("FormAccountName").style.display = 'none';
    document.getElementById("FormAccountFName").style.display = 'none';
    document.getElementById("FormAccountPass").style.display = 'none';
}

function FormAccountForgotfct(){
    document.getElementById("FormAccountType").value = "2";
    document.getElementById("FormAccountTitle").textContent = "Connexion";
    document.getElementById("FormAccountTitle").style.display = "block";
    document.getElementById("account-submit").value = "Connexion";
    document.getElementById("FormAccountBackSpan").style.display = 'none';
    document.getElementById("FormAccountConnectSpan").style.display = 'none';
    document.getElementById("FormAccountCreateSpan").style.display = 'block';
    document.getElementById("FormAccountForgotMDP").style.display = 'block';
    document.getElementById("FormAccountBottom").style.display = 'block';
    document.getElementById("FormAccountForgotPText").style.display = 'none';
    document.getElementById("FormAccountName").style.display = 'none';
    document.getElementById("FormAccountFName").style.display = 'none';
    document.getElementById("FormAccountPass").style.display = 'block';
}

// Aperçu image
var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
};

// Aperçu scroll
$(document).ready(function() {

    $('#btn-ok-modal').click(function() {
        $('#modal-dialog').hide();
    });
    var stickyNavTop = $('.nav').offset().top;

    var stickyNav = function(){
        var scrollTop = $(window).scrollTop();

        if (scrollTop > stickyNavTop) {
            $('.nav').addClass('stickyPet');
        } else {
            $('.nav').removeClass('stickyPet');
        }
    };

    stickyNav();

    $(window).scroll(function() {
        stickyNav();
    });

    //Gestion erreurs
    var showErrorAccountCreate = "";
    if(showErrorAccountCreate){
        document.getElementById("FormAccountType").value = "1";
        document.getElementById("FormAccountTitle").textContent = "Inscription";
        document.getElementById("account-submit").value = "Inscription";
        document.getElementById("FormAccountConnectSpan").style.display = 'block';
        document.getElementById("FormAccountCreateSpan").style.display = 'none';
        document.getElementById("FormAccountForgotMDP").style.display = 'none';
        document.getElementById("FormAccountName").style.display = 'block';
        document.getElementById("FormAccountFName").style.display = 'block';
    }

    var showErrorAccountLogin = "";
    if(showErrorAccountLogin){
        document.getElementById("FormAccountType").value = "1";
        document.getElementById("FormAccountTitle").textContent = "Inscription";
        document.getElementById("account-submit").value = "Inscription";
        document.getElementById("FormAccountConnectSpan").style.display = 'block';
        document.getElementById("FormAccountCreateSpan").style.display = 'none';
        document.getElementById("FormAccountForgotMDP").style.display = 'none';
        document.getElementById("FormAccountName").style.display = 'block';
        document.getElementById("FormAccountFName").style.display = 'block';
    }

    var showErrorConnexion = "";
    if(showErrorConnexion){
        document.getElementById("FormAccountType").value = "2";
        document.getElementById("FormAccountTitle").textContent = "Connexion";
        document.getElementById("account-submit").value = "Connexion";
        document.getElementById("FormAccountConnectSpan").style.display = 'none';
        document.getElementById("FormAccountCreateSpan").style.display = 'block';
        document.getElementById("FormAccountForgotMDP").style.display = 'block';
        document.getElementById("FormAccountName").style.display = 'none';
        document.getElementById("FormAccountFName").style.display = 'none';
    }

    var ErrorAccountForgot = "";
    if(ErrorAccountForgot){
        document.getElementById("FormAccountType").value = "3";
        document.getElementById("FormAccountTitle").style.display = "none";
        document.getElementById("account-submit").value = "Réinitialiser le mot de passe";
        document.getElementById("FormAccountBackSpan").style.display = 'block';
        document.getElementById("FormAccountConnectSpan").style.display = 'none';
        document.getElementById("FormAccountCreateSpan").style.display = 'none';
        document.getElementById("FormAccountForgotMDP").style.display = 'none';
        document.getElementById("FormAccountBottom").style.display = 'none';
        document.getElementById("FormAccountForgotPText").style.display = 'block';
        document.getElementById("FormAccountName").style.display = 'none';
        document.getElementById("FormAccountFName").style.display = 'none';
        document.getElementById("FormAccountPass").style.display = 'none';
    }

    var successForgot = "";
    if(successForgot){
        document.getElementById("FormAccountType").value = "2";
        document.getElementById("FormAccountTitle").textContent = "Connexion";
        document.getElementById("FormAccountTitle").style.display = "block";
        document.getElementById("account-submit").value = "Connexion";
        document.getElementById("FormAccountBackSpan").style.display = 'none';
        document.getElementById("FormAccountConnectSpan").style.display = 'none';
        document.getElementById("FormAccountCreateSpan").style.display = 'block';
        document.getElementById("FormAccountForgotMDP").style.display = 'block';
        document.getElementById("FormAccountBottom").style.display = 'block';
        document.getElementById("FormAccountForgotPText").style.display = 'none';
        document.getElementById("FormAccountName").style.display = 'none';
        document.getElementById("FormAccountFName").style.display = 'none';
        document.getElementById("FormAccountPass").style.display = 'block';
    }
});






