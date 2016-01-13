<!DOCTYPE html>
<html lang="en"><!-- Putting the language code here will help for example text to speech (and in the future, hypehenation)-->
    <head>
        <title>book/hypertext/protocol</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <meta name="description" content="For the reading experience I want to create functions that will translate analoge reading systems to digital counterparts and merge these with digital specific functions, e.g. page numbering, footnotes, feeling the thickness of the book, metadata, hyperlinking, protocols. The part I do not know how to accomplish yet is how to create certain functions in jQuery/javascript.">
        <meta property="og:title" content="book/hypertext/protocol" />
        <meta property="og:image" content="http://kabk.github.io/govt-theses-16-martijn-deheer/images/previewIMG.jpg" />
        <meta property="dc:creator" content="de Heer, Martijn"/>
        <meta property="dc:created" content="2015-12-05T00:00:00Z" />
        <meta property="dc:modified" content="2015-12-05T00:00:00Z" />
        <!-- Link stylesheets!-->
        <link rel="stylesheet" type="text/css" href="css/normalize.css" /> 
        <link rel="stylesheet" type="text/css" href="css/stylesheet.css" />
    </head>

    <body>
    	<div id="progress-bar"> </div>
    	<div id="container">
    		<div id="heading">
				<header> 
					<h1 id="fittext">book/<br>hypertext/<br>protocol/</h1> 
					<p>ip address:<strong> <? echo $ip = $_SERVER["REMOTE_ADDR"]; ?></strong>, host address:<strong> <? echo gethostbyaddr($ip); ?></strong></p>
				</header>
			</div>

			<div class="article-wrapper">
				<div class="clear-right"></div>
				
				<article>
					<section id="hfdstktwee">
						<h2>Voorwoord</h2>
						<p>
							Ik weet dat het slecht is om een zin te beginnen met 'ik' maar ondanks dat deze tekst, mijn scriptie, over veel verschillende onderwerpen zich zal uitspreken gaat het vooral over mij. Mijn kijk op ontwerpen en de wereld heeft een enorme wending gemaakt de afgelopen jaren. Die kijk, is enorm gefascineerd door technologie, wetenschap en hoe die twee zich verhouden tot de maatschappij. Desalniettemin heb ik een passie voor boeken, een technologie en medium dat zijn geboorte zag aan de andere kant van de tijdlijn vergeleken bij wat wij in het algemeen onder technologische ontwikkelingen en huidige wetenschap verstaan. 
						</p>
						<p>
							Het <a class="linkOne" href="www.google.com">boek</a> heeft mijn aandacht door verscheidende kwaliteiten van het medium. Historisch gezien is sinds het begin van het Christendom tijdperk het boek een van de meest krachtige metaforen voor het concipiëren van de kosmos, natuur, geschiedenis en het menselijk lichaam <sup>a</sup>. Een monoliet vol met kennis over de wereld, een portaal waar je door de wereld verkent. Samen met de druktechniek heeft het boek wereldwijd kennis gebracht en mensen laten lezen en onderwezen. Lange tijd is het produceren van een boek een ambacht geweest, die maar voor enkelen was weg gelegd. Codecis werden met de hand gekalligrafeerd en gedecoreerd met miniaturen en illustraties. Theorieën over bladspiegels en vlakverdelingen, uitlijningen, typografie, het boek faciliteerde ontwerpen voordat deze ontwerpen werden genoemd. Door deze geschiedenis maar nog meer door zijn autoriteit, structuur, vorm en (strikte) regels is voor mij het boek dé essentie van grafisch ontwerpen. Informatie ordenen, schikken en structureren.  
						</p>
						<p>
							Al meer dan 200 jaar  b  lang wordt de discussie gevoerd over de relevantie van het boek en zijn naderende einde. Ondanks de enthousiasten van het boek merken we dat de vraag naar boeken achteruit is gegaan. Ook ik ben zo goed als overgestapt naar digitaal lezen, zonder dat mijn passie voor boeken minder is geworden. En zonder enig gevoel van schuld ben ik zeer pro-digitaal en dus ook pro-digitaal lezen. Digitaal lezen is momenteel, vergeleken met een boek, voornamelijk pragmatisch. De capaciteit van het internet en mijn computer om miljoenen bladwijzers —vergeef mijn skeumorfisme— te onthouden, de bijna gewichteloosheid van mijn digitale boekenkast —nogmaals mijn excuus— en het overzicht van al mijn notities en markeringen. Met overal hyperlinks die me verwijzen naar het volgende. De compact-en-snelheid van de computer maakt het tot mijn nummer één keuze voor bijna mijn hele leeslijst —enkele romans lees ik nog geprint.
						</p>
						<p>
							Ondanks de verschuiving die plaats vind in hoe, wat en op welk medium we gezamenlijk lezen ontstaan er verschillende hybride modellen die beide werelden, het medium en de technologie boek en het medium en de technologie internet, probeert te verenigen. “Best of both worlds” zouden de verkopers zeggen. En dat is fantastisch. Het is fantastisch omdat die, in mijn ogen, tussenoplossingen veel zeggen over de huidige staat van onze maatschappij en hoe deze leest, of in een ruimer kader, informatie tot zich neemt. Het zijn tussenoplossingen waarvan wij misschien over 5 of 10 jaar, wanneer de verschuiving zich heeft voltooid, niets meer van zien of weten. Print-On-Demand (POD), Print-To-Web (PTW), Self-Publishing, scraping, grabbing, compiling, searching, publishing. Al deze hiervoor genoemde termen wijzen naar de daad van het omzetten van digitale, elektronische data naar tasbaar geprinte materie. 
						</p>
						<p>
							De tussenoplossingen geven signalen af naar ontwerpers. Signalen over welke koers ze kunnen varen en naar lezers en hoe zij zichzelf kunnen sturen om zo, beide en hopelijk samen, tot nieuwe en betere inzichten te komen. Net als in het boek gaat het om theorieën over vlakverdelingen, uitlijningen, typografie, informatie ordenen, schikken en structureren, ofwel de essentie van grafisch ontwerpen. Want waarom zou je, in godsnaam, het internet (terug) in een boek stoppen? 
						</p>
					</section>

					<section id="hdstkdrie">
						<h2>Inleiding</h2>
						<p>
							De snelheid, de directheid, de veranderlijkheid, de grootsheid en de “gewichtloosheid” van het internet is ongeëvenaard. Dankzij het internet werkt de wereld voor een deel sneller en in sommige gevallen effectiever. Massaal zijn we de hele dag online, bezig met het bijhouden van de wereld. Zoals het boek een metafoor is voor de geschiedenis of de wereld  a , zo is het internet een metafoor voor de cosmos en ons brein. Niet alleen is het zelf een metafoor maar hebben wij ook metaforen voor het internet om uit te drukken hoe wij het begrijpen. Een zee waar wij op surfen, eindeloze kabels waar wij ons on-line op bevinden, een netwerk van netwerken, ofwel, internet-work. De impact van het internet is groot en in Nederland overal te zien. Nog steeds zijn we bezig met het onderzoeken en ondervinden. Wat is dit medium precies? Wat houdt dit netwerk in? Wat doet het met ons? Maar belangrijker: wat willen wij er mee doen? 
						</p>
						<p>
							Sinds de commerciële lancering van het internet  c  bemoeidt het internet zich met het intelectuele, vermaak en media domein. Het is dan ook niet onlogisch dat de discussie over de relevantie van het boek  b  nog heftiger werd met de vraag ‘of het internet het boek zal laten doen verdwijnen’. Het internet maakt het boek langzaam en lomp. Zoals gezegdt wordt “Print is already outdated when it is printed”. Om nog maar te zwijgen over de deel-en-link-baarheid die het boek niet, of in zeer geringe mate, beschikt. Deze discussie zelf wil ik in deze tekst niet verder bespreken en de uitkomst laat ik ook over aan anderen. Wel wil bespreken dat het boek aanzienlijk minder word gekocht en gelezen. Zo lijken de meeste van ons, waaronder mijzelf, te gaan voor gemak en snelheid. Misschien gebeurdt het minder snel dan bij de Compact-Disc het geval was maar het is hetzelfde proces dat we zien bij het boek. Het proces waarbij uniforme media het verliest van flexibele media. Statisch versus vloeibaar, magnetisch tegenover digitaal. Minder vraag, minder geld, minder boeken. Zelfs —of misschien juist— iemand als mijzelf, een boekliefhebber, lees meer op het internet dan in boeken. Honderden bladwijzers met ooit gevonden schatten om ooit te lezen. Interessante pagina’s die elke dag nieuwe inhoud hebben, de pagina zo als je hem gevonden hebt vind je nooit meer. Opgeslagen afbeeldingen van inspirerende projecten —vaak zonder maker. En de mogelijkheid om terug te halen wat ik ooit ben tegen gekomen.
						</p>
						<p>
							Zo ben ik inmiddels een internet en digitaal-lees enthousiast geworden. Boeken zijn nog steeds wonderbaarlijke objecten maar het gemak en de snelheid van het digitaal-lezen op, of verbonden zijn met, het internet is voor mij ongeëvenaard. Vandaar mijn fascinatie over het boek ‘A Wikipedia Reader’ van David Horvitz  d . De publicatie bevat drieëntwintig hoofdstukken die zijn samengesteld van verschillende wikipedia-artikelen.
						</p>
						<p>
							Mijn hypothese over de vraag wat het belang is om het internet te gebruiken als primair gereedschap om boeken te produceren is dat het ons een gevoel van grip geeft. Het internet voelt eindeloos en onuitputtelijk, een boek is compact en “af” wanneer deze word gekocht. Het boek fungeert als een archief van archieven, een accumulatie van accumulaties. Daarnaast is een boek gecureerd, ontworpen en meer trajecten door gegaan voordat deze werd uitgeprint. Zo komt, onder andere, het boek aan haar hoge autoritaire kracht. Het internet is een hypermedia netwerk waar (bijna) iedereen het voor het zeggen heeft. Deze twee uitersten werken op elkaar in zodat alles wat van het internet in boekvorm word gepubliceerd een zekere exclusiviteit en status krijgt. Een selfie op Instagram is niet hetzelfde als dezelfde selfie in een boek. Exclusiviteit op het internet is een mythe en dus is het al kunst om internet content exclusief te maken. Alles bij elkaar lijkt te bevestigen dat wij nog steeds denken in Het Boek en dat als archief voor het internet willen gebruiken. De boeken zijn een afdruk van een specifieke tijd en tijdsgeest waarin bepaalde applicaties worden gebruikt die hoogst waarschijnlijk volgend jaar oud zijn.
						</p>
					</section>				
				</article>	
			</div>
			<div class="sideContent">
				<img class="imageOne" src="images/previewIMG.jpg" alt="boek">
			</div>
		</div>

		<div class="article-topnote"></div>
		<div class="article-footnote"></div>
		<nav id="chapterNav-wrapper">
			<div id='rowNav'>
				<div id="chapterNav" class="chapterOne">
					<div class="progressWrapper">
						<div id="scroll"></div>
					</div>
					<p class='pagetitle'>1<br><br>I<br>N<br>T<br>R<br>O<br>D<br>U<br>C<br>T<br>I<br>O<br>N</p>
				</div>
				<a href="#hdstkdrie">
				<div id="chapterNav" class="chapterTwo">
					<div class="progressWrapper">
						<div id="scrolltwo"></div>
					</div>
					<p class='pagetitle'>2<br><br>A<br><br>W<br>I<br>K<br>I<br>P<br>E<br>D<br>I<br>A<br><br>R<br>E<br>A<br>D<br>E<br>R</p>
				</div>
				</a>
				<div id="chapterNav" class="chapterThree"> <p class='pagetitle'>3<br><br>L<br>I<br>B<br>R<br>A<br>R<br>Y<br><br>O<br>F<br><br>T<br>H<br>E<br><br>P<br>R<br>I<br>N<br>T<br>E<br>D<br><br>W<br>E<br>B</p>
				</div>
				<div id="chapterNav" class="chapterFour"> <p class='pagetitle'>4<br><br>N<br>E<br>T<br>W<br>O<br>R<br>K<br><br>O<br>F<br><br>N<br>E<br>T<br>W<br>O<br>R<br>K<br>S</p>
				</div>
			</div>
		</nav>

	<script src="//code.jquery.com/jquery-2.1.4.min.js"></script>
	<script src="http://kabk.github.io/govt-theses-16-martijn-deheer/js/jquery.fittext.js"></script>
	<script type="text/javascript" src="http://kabk.github.io/govt-theses-16-martijn-deheer/js/ScrollMagic.js"></script>
	<script type="text/javascript" src="http://kabk.github.io/govt-theses-16-martijn-deheer/js/TweenMax.min.js"></script>
	<script type="text/javascript" src="http://kabk.github.io/govt-theses-16-martijn-deheer/js/animation.gsap.js"></script>
	<script type="text/javascript" src="http://kabk.github.io/govt-theses-16-martijn-deheer/js/debug.addIndicators.js"></script>
	<script>
		$(document).ready(function(){
			var text, charsLength=0, wordsCountTotal=0, wordsCount=0, newWidth=0;
			$('article').each(function() {
				text = $.trim($(this).text());
				wordsCountTotal += text.split(/\s+/).length;
			});
			$('#hfdstktwee').each(function() {
				text = $.trim($(this).text());
				// charsLength += text.length;
				wordsCount += text.split(/\s+/).length;
			});

			newWidth += (wordsCount/wordsCountTotal) * 100;
			// $("#output").append("words"+wordsCount+"<br/>chars: "+charsLength);
			$(".chapterOne").width(newWidth);

			var p = $( ".linkOne" );
			var offsetA =  p.offset();
			$( ".imageOne" ).offset({ top: offsetA.top });
		});

		var footer = $('.article-footnote'),
			upper = $('.article-topnote'),
		    extra = 125; // In case you want to trigger it a bit sooner than exactly at the bottom.

		footer.css({ opacity: '0', display: 'block' });
		upper.css({ opacity: '1', display: 'block' });

		$(window).scroll(function() {
		   var scrolledLength = ( $(window).height() + extra ) + $(window).scrollTop(),
		       documentHeight = $(document).height(),
		       scroLLTop = $(window).scrollTop();


		    
		    console.log( 'Scroll length: ' + scrolledLength + ' Document height: ' + documentHeight + ' scrollTop: ' + scroLLTop);
		       
		   if(scroLLTop >= extra && upper.hasClass('top')) {
		   	upper
		       		.removeClass('top')
		       		.stop().animate({ top: '-100', opacity:'0'},100)
		   }
		   else if ( scroLLTop <= extra ) {           
		        upper
		           .addClass('top')
		           .stop().animate({ top: '0', opacity: '1' }, 100);

		   }

		   if( scrolledLength >= documentHeight ) {
		       footer
		          .addClass('bottom')
		          .stop().animate({ bottom: '0', opacity: '1' }, 100);

		   }
		   else if ( scrolledLength <= documentHeight && footer.hasClass('bottom') ) {           
		        footer
		           .removeClass('bottom')
		           .stop().animate({ bottom: '-100', opacity: '0' }, 100);

		   } 
		});
		
		// fit header
		$("#fittext").fitText(0.7033);

		$(document).ready(function(){
        		// init controller
		var controller = new ScrollMagic.Controller();


		// build tween
		var tween1 = TweenMax.to("#scroll", 1, {className: "+=scroll-progress"});
		// build scene

		// get the current triggerHook value
		var scene1 = new ScrollMagic.Scene({triggerElement: "#hfdstktwee", duration: "175%"})
						.triggerHook(0.35)
						.setTween(tween1)
						// .addIndicators()
						.addTo(controller);

		var tween2 = TweenMax.to("#scrolltwo", 1, {className: "+=scroll-progress"});
		// build scene
		var scene2 = new ScrollMagic.Scene({triggerElement: "#hdstkdrie", duration: "175%"})
						.triggerHook(0.35)
						.setTween(tween2)
						// .addIndicators()
						.addTo(controller);
		});
	</script>
    </body>
</html>