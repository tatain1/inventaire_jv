$('#ajout').change(function(e) {
  e.preventDefault();

  var plateforme = $( "#console" ).val();
  if (plateforme === 'NES') {
    $('#boite').removeClass("hide");
    $('#boite').show();
    $('#notice').removeClass("hide");
    $('#notice').show();

    $('#jaquette').hide();
  } else if (plateforme === 'gamecube') {
    $('#jaquette').removeClass("hide");
    $('#jaquette').show();
    $('#notice').removeClass("hide");
    $('#notice').show();

    $('#boite').hide();
  } else {
    $('#boite').hide();
    $('#jaquette').hide();
  }
});

// Faire une fonction "affiche(nomDeLElement)" et une fonction "cache(nomDeLElement)" ?
