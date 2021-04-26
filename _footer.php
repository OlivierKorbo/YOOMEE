<footer id="footer" class="footer" role="contentinfo">

	<div class="conteneur">

		<section class="footer-rs">
			<div class="reseaux">
						<a class="reseau is-facebook" href="https://www.facebook.com/AnnuaireHypnotherapie/" target="_blank" title="Annuaire Hypnothérapie sur Facebook"></a>
			</div>
		</section>
        
        
		<section class="footer-categories">
			
                        <h2 class="titre"><a href="liste-pratiques.php">Liste des applications</a></h2>

                    <ul class="liste">
                    
                            <?php $sql = "SELECT * FROM plugin_annuaire_categories , cms_urls WHERE cms_urls.params=plugin_annuaire_categories.id AND module='annuaire'  AND plugin='plugin_annuaire' 
                                        AND controller='plugin_annuaire_categories' AND  footer='1'
                                        GROUp BY plugin_annuaire_categories.id oRDER BY plugin_annuaire_categories.id"; 
                                        
                                        $rs = mysql_query($sql); 
                                        while ($obj = mysql_fetch_object($rs)) { ?>
                    										<li>
                                                           				 <a href="<?php echo $obj->url; ?>" title="<?php ecrit($obj->nom); ?>"><?php ecrit($obj->nom); ?></a>	
                                                        </li>		
                                                        
                                        <?php } ?>
                        </ul>
    
    
    
						<a href="liste-pratiques.php" class="plus-categories" title="Plus de thérapies ?">
							Plus d'applications ?	</a>

		</section>
        
        
        
        
		<section class="footer-liens">
			<ul class="liste">
							<li>
					<a href="qui-sommes-nous.php"  class=" ">Qui sommes-nous ?</a>
				</li>
							<li>
					<a href="charte-qualite-client.php"  class=" ">Charte qualité</a>
				</li>
							<li>
					<a href="referencement-hypnose.php"  class=" ">Référencement hypnotiseur</a>
				</li>
							<li>
					<a href="conditions-generales-de-ventes.php"  class=" ">CGU / CGV</a>
				</li>
							<li>
					<a href="mentions-legales.php"  class=" ">Mentions légales</a>
				</li>				
							<li>
					<a href="contact.php"  class=" ">Contact</a>
				</li>				

						</ul>
						 <br/><span class="copyright"><p>&copy; 2020 Annuaire Hypnothérapie. Tous droits réservés</p></span>
		</section>
        
        
	</div>
    
	<section class="footer-avertissement">
		<span>Avertissement</span>
		<p><p>Une consultation en hypnose ne peut en aucun cas se substituer à un diagnostic et/ou un traitement médical. Seul un médecin est habilité à prescrire, modifier ou supprimer un traitement médical. Les cas psychiatriques comme la schizophrénie ne sont généralement pas adaptés à l'hypnose.</p></p>
	</section>
    
    
    
</footer>


<script type="text/javascript">
	liste_modales = [];
</script>    
	<script src="/js/scripts_origine.js" type="text/javascript"></script>


 <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true&libraries=places&language=fr&key=AIzaSyC4Z_dpMWPSRciS7iKyD9drkH4vL0O9SpI"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-81256054-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-81256054-1');
</script>

<script>


  var placeSearch, autocomplete;
        var componentForm = {
          street_number: 'short_name',
          route: 'long_name',
          locality: 'long_name',
          administrative_area_level_1: 'short_name',
		 administrative_area_level_2: 'short_name2',

          country: 'long_name',
          postal_code: 'short_name'
        };
        
        function initialize_places() {
       
          autocomplete = new google.maps.places.Autocomplete(
                (document.getElementById('adresseRef')),
           { types: ['geocode'], componentRestrictions: {country:["fr","ch","be"]} });
			  
	
              
              google.maps.event.addListener(autocomplete, 'place_changed', function() {
				  //// verif cohérence adresse /////
				  route = "ko"; locality = "ko"; 
				  var place = autocomplete.getPlace();
				  
				  console.log(  place);
				  
				  var numero = ""; 
				  var code_postal = ""; 
				  for (var i = 0; i < place.address_components.length; i++) {
						
						 var addressType = place.address_components[i].types[0];
					
						//console.log(  place.address_components[i]);
						
						
							//console.log(addressType); 
							
							
							  if (addressType =='route') route = "ok"; 
							  if (addressType =='locality') locality = "ok"; 
							  
							    if (addressType =='postal_code')  code_postal = place.address_components[i][componentForm[addressType]];
							    if (addressType =='locality')  ville = place.address_components[i][componentForm[addressType]];
							    if (addressType =='street_number')  numero = place.address_components[i][componentForm[addressType]];
							    if (addressType =='route')  nomrue = place.address_components[i][componentForm[addressType]];
								
								  if (addressType =='adm2') adm2 = place.address_components[i][componentForm[addressType]];
								
								
								//console.log(place.address_components[i][componentForm[administrative_area_level_1]]); 
					}
				  
				  if (route=="ok" && locality =="ok") { 
								//// ici on va stocker les champs séparés pour la future création e compte ////
								
                    	 	
				  }///////// fin si adresse cohérente
				  
				  else { 
				  		
				  }
			
      		  }); /// fin place changed autocomplte 1


				
			  
			  
			  
 }
		
		




initialize_places(); 
</script>

