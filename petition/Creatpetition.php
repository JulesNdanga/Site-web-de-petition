<?php
include('session-verif.php');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Pétition : créer une pétition</title>

    <link rel="stylesheet" type="text/css" href="css/index_2.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/creept.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/menuVertical.css" media="screen" />
    <script type="text/javascript" src="js/LAB.min.js" ></script>
    <script type="text/javascript" src="js/jscrpt.js" ></script>
    <script type="text/javascript" src="js/common.js"></script>
    <meta name="author" content="Jules Ndnaga,Mouafo Paul" />
    <link rel="shortcut icon" href="images/icon.png"/>
</head>
<body class="bg">
<header>
    <nav>
        <ul class="ul">
            <li class="menuP"><a href="accueil.php" class="a" target="_self" title="Accueil">Accueil</a></li>
            <li class="li"><a href="Creatpetition.php" class="ap" title="Lancer Une pétition">Lancer une pétition</a></li>
            <li class="li"><a href="profile.php" class="a" title="profil">Profil</a></li>
            <li class="li"><a href="contact2.php" class="a" title="Contact">Contact</a></li>
            <li class="li"><a href="decon.php" class="a" title="Deconnexion">Deconnexion</a></li>
        </ul>
    </nav>
</header>
<div id="contentsec">
    <div class="inner">
    </div>
    <div class="inner clearfix">
        <div class="columns clearfix">
            <div class="col1 right"  style="width:1000px;" >

                <div class="events clearfix"  style="-webkit-box-shadow:none;box-shadow:none;-moz-box-shadow:none;" >


                    <link rel="stylesheet" href="css/croppie.min.css" >
                    <script type="text/javascript" src="js/tinymce.min.js"></script>

                    <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>

                    <script defer="defer" type="text/javascript" src="js/custom-croppie.js"></script>
                    <script defer="defer" type="text/javascript" src="js/exif.js"></script>


                    <script type="text/javascript">

                    </script>

                    <h1 id="target" class="heading backcolr"  style="width:970px;"  > Lancer votre pétition</h1>
                    <div id="StepBox" class="clearfix">
                        <div id="StepBoxTitle" class="clearfix">
                            <p class="colr">lancer une pétition</p>

                        </div>
                        <div id="StepBoxBottom" class="clearfix">
                            <div class="StepBoxBottomContainer">
                                <img src="images/arrow_red.png" style="padding-right:20px;" />
                                <p class="StepBoxBottom1 backcolr">Suivez les conseils pour rédiger une pétition convaincante</p>
                            </div>
                        </div>
                    </div>

                    <form action="#" method="post" id="petForm" enctype="multipart/form-data">
                        <input type="hidden" name="charterValid" value="1" />
                        <input type="hidden" name="petForm" value="1" />



                        <div class="clearfix">
                            <div class="start-petition-form clearfix">
                                <div class="clearfix">
                                    <h2>1. Indiquer votre nom</h2>
                                    <input type="text" maxlength="255" required name="coord[2]" value=""   id="auteur-petition" onKeyup='preview("preview-auteur-petition", "auteur-petition")' placeholder="Qui lance la pétition ?" />
                                </div>
                                <div class="clearfix start-petition-form-border">
                                    <h2 class="start-petition-h2">2. Indiquer un destinataire</h2>
                                    <p style="margin-bottom:0px">Il s'agit de la personne ou du groupe de personnes qui ont le pouvoir de prendre une décision concernant votre pétition.</p>
                                    <input type="text"  maxlength="150" required name="attention[2]" value="" id="destinataire-petition" onKeyup='preview("preview-destinataire-petition", "destinataire-petition")' placeholder="Qui peut réaliser ce changement ?" />
                                </div>
                                <div class="clearfix start-petition-form-border">
                                    <h2 class="start-petition-h2">3. Insérer le titre de votre pétition</h2>
                                    <input type="text"  maxlength="255" required name="title[2]" value="" id="titre-petition" onKeyup='preview("preview-titre-petition", "titre-petition")' placeholder="Attirez leur attention avec un titre court qui met l'accent sur la cause soutenue." />
                                    <p>C'est la première chose que les gens verront à propos votre pétition.</p>
                                </div>
                                <div class="start-petition-form-border">
                                    <h2 class="start-petition-h2 start-petition-h2-bottom">4. Présenter le problème que vous voulez résoudre</h2>
                                    <textarea id="texte-petition" name="content[2]"  placeholder="Texte de votre pétition"></textarea>
                                    <p class="start-petition-p">Les gens sont plus susceptibles de soutenir votre pétition si vous expliquez clairement pourquoi cela compte pour vous.<br/>Détaillez le problème et sa solution et comment votre pétition peut faire changer les choses.</p>
                                </div>
                                <div class="clearfix start-petition-form-border">
                                    <h2 class="start-petition-h2">Ajouter une photo</h2>

                                    <div id="drop-zone">
                                        <div id="imgs">
                                            <img id="pic" src="images/dragndroppic.png">
                                            <img id="arrow" src="images/dragndroparrow.png">
                                        </div>
                                        <label id="label-input-image" for="images">Choisissez une photo</label>
                                        <input type="file" name="picture" id="images" accept="image/*">
                                    </div>

                                    <div class="upload-image-div">
                                        <div class="crop_preview">
                                            <div id="upload-image-i">

                                            </div>
                                        </div>
                                        <div class="">
                                            <div id="upload-image"></div>
                                        </div>
                                        <div class="upload-image-ctrl">
                                            <label id="label-input-image-sub" style="display: none;">Supprimer</label>
                                        </div>
                                    </div>

                                    <p class="start-petition-p-img clearfix" style="padding-top:5px">
                                        Si vous le souhaitez, vous pouvez illustrer votre pétition par une image.<br />
                                        Choisissez une image à la fois attractive et représentative de votre demande. Veuillez respecter les dimensions minimales requises (500 * 300) pour un meilleur affichage. <br/>
                                    </p>
                                </div>
                                <div class="clearfix start-petition-form-border">
                                    <h2 style="margin-top:20px">Choisissez une catégorie :</h2>
                                    <select name="cat" style="font-size:14px">
                                        <option value="4">Politique</option>
                                        <option value="1">Nature et environnement</option>
                                        <option value="5">Social</option>
                                        <option value="13">Justice</option>
                                        <option value="15">Santé</option>
                                        <option value="2">Droits de l'homme</option>
                                        <option value="7">Arts et culture</option>
                                        <option value="11">Médias</option>
                                        <option value="10">Sports</option>
                                        <option value="6">Autres</option>
                                    </select>
                                </div>
                                <div class="upload-image-ctrl">
                                    <input type="submit" id="boutvali" value="Valider">
                                </div>

                            </div>

                            <div id="PreviewBox" class="clearfix nav">
                                <div id="PreviewBoxContainer">
                                    <div class="clearfix" >
                                        <p class="PreviewBoxTitle">Aperçu de votre pétition</p>
                                    </div>
                                    <div class="clearfix">
                                        <div class="PreviewBoxImg" style="height: 120px;"><img width="200" height="120" id="output"/></div>
                                    </div>
                                    <div id="preview-titre-petition"></div>
                                    <div class="clearfix"><span class="PreviewBoxSpan">Auteur :&nbsp;</span><div id="preview-auteur-petition"></div></div>
                                    <div class="clearfix"><span class="PreviewBoxSpan">Pétition adressée à :&nbsp;</span> <div id="preview-destinataire-petition"></div></div>
                                    <div id="preview-texte-petition"></div>
                                </div>
                            </div>
                        </div>
                        <div id="BoxFormAccount" class="clearfix">


                    </form>

                    <div id="popup-overlay" style="display: none;">
                        <div id="popup-upload">
                            <img src="images/ajax-loader.gif">
                            <p>Traitement de l'image en cours</p>
                        </div>
                    </div>

                    <script type="text/javascript">
                        $(function() {

                            var imageUploaded = 0;
                            var imageWidth;
                            var imageHeight;
                            var maxWidth  = 1500;
                            var maxHeight = 900;
                            var quality = 0.6;

                            function createCroppie() {
                                $image_crop = $('#upload-image').croppie({
                                    enableExif: true,
                                    viewport: {
                                        width: 500,
                                        height: 300,
                                        type: 'square'
                                    },
                                    boundary: {
                                        width: 600,
                                        height: 400
                                    }
                                });
                            }

                            createCroppie();

                            $('#images').on('change', function (event) {
                                var reader = new FileReader();
                                reader.onload = function (e) {
                                    $image_crop.croppie('bind', {
                                        url: e.target.result
                                    }).then(function(){
                                        console.log('jQuery bind complete');
                                        cropImage(e);
                                    });
                                }
                                reader.readAsDataURL(this.files[0]);
                                imageLoaded = 1;

                                var img = new Image();
                                img.src = window.URL.createObjectURL(this.files[0]);
                                img.onload = function() {
                                    imageWidth  = (img.width / 3) * 2;
                                    imageHeight = (imageWidth * 3) / 5;
                                    if (imageWidth > maxWidth) {
                                        imageWidth = maxWidth;
                                    }
                                    if (imageHeight > maxHeight) {
                                        imageHeight = maxHeight;
                                    }
                                    if (img.width <= 500 || img.height <= 300) {
                                        imageWidth = 500;
                                        imageHeight = 300;
                                        quality = 1;
                                    } else {
                                        quality = 0.6;
                                    }
                                    window.URL.revokeObjectURL(img.src);
                                }

                                $('#drop-zone').hide();
                                $('#upload-image').fadeIn(300);
                                $('#label-input-image').hide();
                                $('#label-input-image-sub').show();
                            });
                            $('.cropped_image').on('click', function (ev) {
                                $image_crop.croppie('result', {
                                    type: 'canvas',
                                    size: 'viewport'
                                }).then(function (response) {
                                    sessionStorage.setItem('image', response);
                                });
                            });

                            $('#upload-image').on('mouseup mouseleave', function(event) {
                                cropImage(event);
                            });

                            function cropImage(event) {
                                $image_crop.croppie('result', {
                                    type: 'canvas'
                                }).then(function (response) {
                                    $('#output').attr('src', response);
                                    $('#output').show();
                                });
                                imageUploaded = 1;
                            }

                            $('#label-input-image-sub').click(function(event) {
                                $('#upload-image').hide();
                                $('#label-input-image').show();
                                $('#label-input-image-sub').hide();
                                $('#drop-zone').css({
                                    border: '2px dashed rgba(0,0,0,.3)',
                                    background: 'none'
                                });
                                $('#pic').css('transform', 'rotate(0deg)');
                                $('#drop-zone').fadeIn(300);
                                $('#output').removeAttr('src');
                                $('#output').hide();
                                imageUploaded = 0;

                                $('#images').val('');
                                $image_crop.croppie('bind', {
                                    url : ''
                                }).then(function () {
                                    console.log('reset complete');
                                });
                            });

                            $('.submit-btn').on('click', function(event) {
                                event.preventDefault();
                                if (imageUploaded == 1) {
                                    $('#loading-spinner').show();
                                    $image_crop.croppie('result', {
                                        type: 'canvas',
                                        format: 'jpeg',
                                        quality: quality,
                                        size: { width: imageWidth, height: imageHeight, type: 'square' }
                                    }).then(function (response) {
                                        $('#images').val('');
                                        $("#upload-image-i").append('<input type="hidden" name="petition-picture" value="'+ response +'" />');
                                        $("#petForm").submit();
                                    });
                                } else {
                                    $("#petForm").submit();
                                }
                            });

                            var dropzone = $('#drop-zone');
                            var inputFile = dropzone.find('input');

                            inputFile.on('dragover', function(event) {
                                event.preventDefault();
                                dropzone.css({
                                    border: '2px dashed rgba(0,0,0,.6)',
                                    background: 'white'
                                });
                                $('#label-input-image').hide();
                                $('#pic').css('transform', 'rotate(20deg)');
                            });
                            inputFile.on('dragleave', function(event) {
                                event.preventDefault();
                                dropzone.css({
                                    border: '2px dashed rgba(0,0,0,.3)',
                                    background: 'none'
                                });
                                $('#label-input-image').fadeIn(300);
                                $('#pic').css('transform', 'rotate(0deg)');
                            });

                        });
                    </script>
                </div>
            </div>
        </div>
    </div>



    <script>  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');  ga('create', 'UA-1781857-1', 'auto');  ga('require', 'GTM-PLFVQBS');  ga('send', 'pageview');</script>
    <script src="js/cookiechoices.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function(event) {
            cookieChoices.showCookieConsentBar(_COOKIES_TXT, _COOKIES_CLOSE, _COOKIES_MORE, '/conditions-utilisation');
        });


        // Verifie le chargement de JQuery
        try{
            if($){
                jqueryFunction();
            }
        } catch(error){
            // Si JQuery n'est pas charger
            var fileref= document.createElement('script');
            fileref.type = 'text/javascript';
            fileref.src = 'js/jquery-1.7.2.min.js';
            document.head.appendChild(fileref);

            // Execute JQuery avec un décalage de 500ms
            setTimeout(function(){
                jqueryFunction();
            }, 500);
        }

        // Fonctions JQuery pour le Header
        function jqueryFunction(){
            $(document).ready(function() {
                $('#deconnectBtn').click(function(){
                    $.post('/ws/logout', null, function(data){
                        location.href = data.response;
                    }, 'json');
                });
                // Affichage du message
                $('#notifUser').click(function(){
                    if($('#notifUserMsg').css('display') == "block"){
                        $('#notifUserMsg').css('display', 'none');
                    } else {
                        $('#notifUserMsg').css('display', 'block');
                    }
                });

                $('#notifUserMsgClose').click(function(){

                    if($('#notifUser img').attr('src') == 'images/notif.png'){
                        $('#notifUserMsg').css('display', 'none');
                    } else {
                        ajaxFunction();
                    }
                });


                $('#notifUserLink').click(function(){

                    if($('#notifUser img').attr('src') == 'images/notif.png'){
                        $('#notifUserMsg').css('display', 'none');
                    } else {
                        ajaxFunction();
                    }
                });
            });
        }


        function ajaxFunction(){
            $(document).ready(function(){
                $.ajax({
                    type: 'POST',
                    url: '/ws/notifUser',
                    data: 'vu=true&email=',
                    success: function(data){
                        if(data.statut == 'succes'){
                            $('#notifUserMsg').css('display', 'none');
                            $('#notifUser img').attr('src', 'images/notif.png');
                        }
                    }
                });
            });
        }
    </script>

    <script>
        if(document.domain == 'nj&mp'){
            (function () {
                var ZTRemail;
                var ZTRpromote = 0;
                ZTRemail = '0';


                ZTRidpetition = '0';

                ZTRidsondage = '0';

                var ZTR = document.createElement('script');
                var ZTRurl = encodeURIComponent(window.location.href);
                var ZTRreferer = encodeURIComponent((window.document.referrer != null
                    && typeof window.document.referrer !== 'undefined') ? window.document.referrer : '');
                ZTR.src = ((location.protocol === 'https:') ? 'https:' : 'http:') + 'nj&mp=' + ZTRurl + '&type=1&referrer=' + ZTRreferer + '&email=' + ZTRemail + '&id_petition=' + ZTRidpetition + '&id_sondage=' + ZTRidsondage + '&mediatisation=' + ZTRpromote;
                var ZTRtag = document.getElementsByTagName('script')[0];
                ZTRtag.parentNode.insertBefore(ZTR, ZTRtag); }())
        }

    </script>


    <script>
    </script>

    <footer class="main-footer"><span class="fo">Copyright &copyNJ&MP - Tous droits réservés : 2018-2019</span><br>
        <span class="fo">nous contacter:</span>
        <a href="facebook.com/julesndanga" ><img src="images/facebook.png" alt="lien facebook" title="notre page facebook" class="im"></a>
        <a href="twitter.com/julesndanga"><img src="images/twitter.png" alt="lien twitter" title="notre page twitter" class="im"></a>
        <a href="conditionUtilistion.php" class="conA">Conditions d'utilisation</a>
        <a href="Aide.php" class="conA">Aide</a>
    </footer>
</body>
</html>
