
var database_length = 0;

function SearchPage(url, title, keywords, description)
{
   this.url = url;
   this.title = title;
   this.keywords = keywords;
   this.description = description;
   return this;
}

function SearchDatabase()
{
   database_length = 0;
   this[database_length++] = new SearchPage("accueil.php", "aller à la page", "petition  accueil tition profil contact deconnexion", "", "pe","petition", "pétition");
   return this;
}


var features = 'toolbar=no,menubar=no,location=no,scrollbars=yes,resizable=yes,status=no,left=,top=,width=,height=';
var searchDatabase = new SearchDatabase();
var searchResults_length = 0;
var searchResults = new Object();
function searchPage(features)
{
    var element = document.getElementById('SiteSearch1');
    if (element.value.length != 0 || element.value != " ")
    {
        var value = unescape(element.value);
        var keywords = value.split(" ");
        searchResults_length = 0;
        for (var i=0; i<database_length; i++)
        {
            var matches = 0;
            var words = searchDatabase[i].title + " " + searchDatabase[i].description + " " + searchDatabase[i].keywords;
            for (var j = 0; j < keywords.length; j++)
            {
                var pattern = new RegExp(keywords[j], "i");
                var result = words.search(pattern);
                if (result >= 0)
                {
                    matches++;
                }
                else
                {
                    matches = 0;
                }
            }
            if (matches == keywords.length)
            {
                searchResults[searchResults_length++] = searchDatabase[i];
            }
        }
        var wndResults = window.open('about:blank', '', features);
        setTimeout(function()
        {
            var results = '';
            var html = '<html><head><title>Resultat de recherche<\/title><\/head>';
            html = html + '<body style="background-color:brown;margin:0;padding:2px 2px 2px 2px;">';
            html = html + '<span style="font-family:Tahoma;font-size:13px;color:black;font-weight: bold; margin-left: 25%;text-shadow: 0px 0px 2px black; font-size: 15px">';
            for (var n=0; n<searchResults_length; n++)
            {
                var page_keywords = searchResults[n].keywords;
                results = results + '<strong><a style="color:darkorange;margin-left: 25%" target="_parent" href="'+searchResults[n].url+'">'+searchResults[n].title +'<\/a><\/strong><br><span style="margin-left: 20%">mots contenant: ' + page_keywords +'<br><br></span>\n';
            }
            if (searchResults_length == 0)
            {
                results = 'Pas de resutat';
            }
            else
            {
                html = html + searchResults_length;
                html = html + ' Resultat(s) trouver pour: ';
                html = html + value;
                html = html + '<br><br>';
            }
            html = html + results;
            html = html + '<\/span>';
            html = html + '<\/body><\/html>';
            wndResults.document.write(html);
        },100);
    }
    return false;
}
function searchParseURL()
{
    var url = decodeURIComponent(window.location.href);
    if (url.indexOf('?') > 0)
    {
        var terms = '';
        var params = url.split('?');
        var values = params[1].split('&');
        for (var i=0;i<values.length;i++)
        {
            var param = values[i].split('=');
            if (param[0] == 'q')
            {
                terms = unescape(param[1]);
                break;
            }
        }
        if (terms != '')
        {
            var element = document.getElementById('SiteSearch1');
            element.value = terms;
            searchPage('');
        }
    }
}

    $(document).ready(function()
    {
        searchParseURL();
    });
