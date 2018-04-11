var precedent = null;
var courant = null;
function appel(genre)
{
  //console.log(genre);
  if(null != precedent)precedent.innerHTML = "";
  courrant = genre;
  ajax = new Ajax();
  //console.log(ajax);
  ajax.executer("GET", "http://localhost/projet-web-php-2018-gui45/src/dao/serviceWeb.php", "", afficher)
  precedent = genre;
}
function afficher(ajax)
{
  //console.log(ajax.responseXML);
  var html = "";
  xmlGenre = ajax.responseXML.getElementsByTagName(courrant.id)[0];
  xmlListeJeux = xmlGenre.getElementsByTagName('jeu');
  for (var i = 0; i < xmlListeJeux.length; i++) {
    //console.log(xmlListeJeux[i]);
    nom = xmlListeJeux[i].getElementsByTagName('nom')[0].innerHTML;
    id = xmlListeJeux[i].getElementsByTagName('id')[0].innerHTML;
    html += "<a href='detail.php?id=" + id + "'>" + nom + "</a>"
  }
  courrant.innerHTML = html;
}
