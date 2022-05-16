<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Faq</title>
</head>
<body>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link href="{{asset('css/frontend_css/bootstrap-accordions-faqs.css')}}" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

<section class="accordion-section clearfix mt-3" aria-label="Question Accordions">
  <div class="container">
  
	  @extends('header')
	  <br><br>
	  <br>
	  <br>
	  <br>
	  <br>
	  <br>
	  <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
		<div class="panel panel-default">
		  <div class="panel-heading p-3 mb-3" role="tab" id="heading0">
			<h3 class="panel-title">
			  <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse0" aria-expanded="true" aria-controls="collapse0">
				Qui sommes nous 

			  </a>
			</h3>
		  </div>
		  <div id="collapse0" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading0">
			<div class="panel-body px-3 mb-4">
			  <p>Doctori  a été créé par Ayoub El Bouad, permet de :
			</p>
			  <ul>
				<li>Prenez, annulez, déplacez vos rendez vous 24/24h.</li>
				<li>Rappel automatique des RDV par email et SMS.</li>
				<li>Espace personnel dédié, gérez les rendez vous de toute votre famille.</li>
				<li>100% gratuit pour les particuliers,
					sans publicité.</li>
			  </ul>
			</div>
		  </div>
		</div>
		
		<div class="panel panel-default">
		  <div class="panel-heading p-3 mb-3" role="tab" id="heading1">
			<h3 class="panel-title">
			  <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="true" aria-controls="collapse1">
				Pourquoi choisir Doctori ?

			  </a>
			</h3>
		  </div>
		  <div id="collapse1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading1">
			<div class="panel-body px-3 mb-4">
			  <p>La simplicité du système vous permet en tant que patient ou client de prendre vos rendez-vous en quelques clics il faut juste avoir besoin de créer un compte.

				Votre rendez-vous est confirmé immédiatement, vous recevez une confirmation par E-mail dans les minutes qui suivent, pas besoin d'attendre pour savoir si votre rendez-vous est validé ou non par le professionnel.
				
				Quelques jours ou quelques heures avant le rendez-vous vous recevrez par SMS et/ou par E-mail un message pour vous rappeler votre rendez-vous. En cas d'empêchement vous pourrez alors faire les démarches nécessaires pour prévenir le professionnel concerné. Prendre-mon-rdv.com garantit ainsi aux professionnels une qualité optimale des rendez-vous enregistrés et une baisse significative de l'absentéisme.
				
				Il est important de préciser également que le service Prendre-mon-rdv.com est 100% gratuit pour les particuliers qui utilisent la prise de rendez-vous en ligne. La sécurité et la confidentialité de vos données sont assurées, vos informations ne sont transmises qu'aux professionnels chez qui vous prenez rendez-vous.
				
				Grâce à tous ces avantages, la communauté des professionnels inscrits sur Doctori grandit chaque jour !</p>
			</div>
		  </div>
		</div>
		
		<div class="panel panel-default">
		  <div class="panel-heading p-3 mb-3" role="tab" id="heading2">
			<h3 class="panel-title">
			  <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="true" aria-controls="collapse2">
				Mentions légales et CGU
			  </a>
			</h3>
		  </div>
		  <div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2">
			<div class="panel-body px-3 mb-4">
			  <p>OBJET
				Les présentes ont pour objet de définir les conditions dans lesquelles les utilisateurs peuvent accéder aux services et les utiliser.
				
				Tout utilisateur qui accède aux services de prendreunrendezvous.fr s'engage à respecter, sans réserve, les présentes CGU. Si l'utilisateur n'est pas en accord avec tout ou partie des CGU, il lui est recommandé de ne pas utiliser le service.
				
				prendreunrendezvous.fr est libre de modifier à tout moment les présentes CGU, afin notamment de prendre en compte toute évolution légale, réglementaire ou technique. La version qui prévaut est celle qui est accessible en ligne lors de la création du compte par l'utilisateur. celui-ci les accepte sans restriction.
				
				DONNEES A CARACTERE PERSONNELLES ET COOKIES
				Nous invitons les utilisateurs à consulter notre politique relative à la protection des données personnelles, cette politique fait partie intégrante de nos CGU.
				
				AUDIENCE
				Ce site est destiné aux particuliers et aux professionnels. Nos abonnés sont principalement des professionnels de santé, mais pas exclusivement. 
				
				FINANCEMENT
				Ce service est développé par la SAS BJM31. Il est financé par les abonnés qui souhaitent disposer d'un agenda partagé en ligne et proposer la prise de rendez-vous par Internet à leurs clients. 
				
				POLITIQUE PUBLICITAIRE
				Nous ne recevons pas de fonds publicitaires, nous n'affichons aucune publicité. 
				
				INFORMATIONS RELATIVES AUX SERVICES
				Pour les particuliers
				Les services sont fournis à l'utilisateur à titre gratuit. A ce titre, il peut utiliser le service de prise de rendez vous en ligne et recevoir des informations et documents de la part de ses professionnels.
				
				Les couts téléphoniques, d'accès à Internet, d'acquisition et de maintenance de son propre matériel informatique ou logiciels restent à sa charge. Il appartient à l'utilisateur de s'informer du prix d'utilisation desdits équipements ou services auprès des opérateurs concernés. L'utilisateur reconnaît et accepte que la prestation effectuée par le professionnel à la suite d'un rendez vous pris sur le site soit payante.
				
				L'utilisateur peut prendre un rendez-vous en ligne avec un professionnel abonné à notre service, chaque rendez-vous est transmis en temps réel au professionnel, l'utilisateur peut également gérer ses rendez-vous (consultation, annulation, déplacement).
				
				Prendreunrendezvous.fr ne peut être tenu pour responsable en cas d'annulation ou d'indisponibilité du professionnel suite à un rendez-vous pris via le service de prise de rendez vous en ligne.
				
				L'utilisateur autorise le professionnel et prendreunrendezvous.fr, à lui envoyer des SMS et des mails dont l'objet est de lui communiquer des informations au sujet des rendez-vous qu'il a pris sur le site. Le professionnel et prendreunrendezvous.fr déclinent toute responsabilité en ce qui concerne l'acheminement et la bonne réception de ces SMS ou mails.
				
				L'utilisateur est informé du fait que toute non présentation à un rendez-vous programmé doit faire l'objet d'une annulation préalable ou de report auprès du professionnel concerné par tout moyen à sa convenance. Dans le cas contraire, le professionnel sera en mesure de lui interdire la prise de rendez vous en ligne, l'utilisateur devra donc prendre contact avec le professionnel concerné pour déblocage de son compte. Le bloquage ou le déblocage d'un compte utilisateur est effectué à l'initiative et sous la responsabilité exclusive du professionnel concerné.
				
				L'utilisateur est seul responsable de l'utilisation qui est faite de ses identifiants, même en cas d'enregistrement de ceux-ci sur son ordinateur, son téléphone mobile ou sur n'importe quel autre type d'équipement, tout accès effectués à partir du compte utilisateur sera réputé avoir été effectué par ce dernier.
				
				L'utilisateur peut à tout moment, depuis son compte, modifier ses identifiants ou résilier sa souscription.
				
				Pour les professionnels
				Les services disponibles sur le site sont : la mise à disposition d'un agenda en ligne, la prise de rendez vous par Internet, la possibilité d'envoyer et de recevoir des documents, mails et SMS.
				
				Le service est payant, les tarifs et conditions d'abonnement sont indiqués sur notre site et également dans le contrat d'abonnement accepté par l'abonné lors de sa souscription au service.
				
				Les abonnés exercent leur activité en toute indépendance, selon leurs obligations légales, déontologiques et/ou réglementaires, sous leur responsabilité exclusive. Les informations indiquées par les professionnels abonnés sur nos sites le sont à l'initiative de l'abonné et à titre purement indicatif, prendreunrendezvous.fr décline toute responsabilité quant à l'exactitude et au contenu de telles informations.
				
				PROPRIETE INTELLECTUELLE
				Les documents figurant dans ce site sont généralement protégés au titre du droit de la propriété intellectuelle. Pour toute utilisation, hors du cadre privé, d'un élément de ce site vous êtes invité à contacter le directeur de la publication, dont les coordonnées figurent ci-dessus. 
				
				A ce titre, il est notamment interdit, sauf autorisation préalable écrite, de mettre sur le marché à titre gratuit ou onéreux ou de commercialiser, tout ou partie des services fournis par e-agenda ou d'un quelconque élément qui les compose, quel qu'en soient le moyen et le support.
				
				Aucune stipulation des CGU ne peut être interprétée comme une cession de droits de propriété intellectuelle sous quelle forme que ce soit.
				
				GARANTIES ET RESPONSABILITES RELATIVES AUX MOYENS D'ACCÈS AUX SERVICES
				Prendreunrendezvous.fr met en place les moyens nécessaires à la bonne marche des services et prend les mesures nécessaires au maintien de la continuité et de la qualité de ses prestations.
				
				L'utilisateur reconnaît que son utilisation des services se fait à ses risques et périls, sans aucune garantie de disponibilité et de régularité. Prendreunrendezvous.fr s'efforcera à mettre en oeuvre tous les moyens possibles pour rendre les services accessibles 24 heures sur 24, 7 jours sur 7, sauf en cas de force majeure .
				
				Prendreunrendezvous.fr ne pourra être tenue pour responsable des perturbations du réseau Internet, ni de l'installation et du fonctionnement des terminaux utilisés par l'utilisateur pour accéder aux services et plus généralement en raison d'une interruption des services quel que soit la cause.
				
				Prendreunrendezvous.fr ne saurait en aucun cas être tenue de réparer d'éventuels dommages indirects subis par l'utilisateur à l'occasion de l'utilisation des services. Les dommages indirects sont ceux qui ne résultent pas exclusivement et directement de la défaillance de ses services.
				
				La responsabilité de prendreunrendezvous.fr ne pourra pas être recherchée pour des actes réalisés par l'utilisateur ou un tiers utilisant les services.
				
				FORCE MAJEURE
				Il y a force majeure lorsqu'un événement échappant au contrôle de prendreunrendezvous.fr, qui ne pouvait être raisonnablement prévu lors de l'acceptation des CGU et dont les effets ne peuvent être évités par des mesures appropriées, empêche l'exécution de son obligation. Le cas de force majeure suspend les obligations de la partie concernée pendant le temps où jouera la force majeure, si l'empêchement est définitif, les parties seront libérées de leurs obligations dans les conditions prévues aux articles 1351 et 1351-1 du Code civil.
				
				RENONCIATION
				Le fait pour l'une ou l'autre des parties de ne pas se prévaloir d'une ou plusieurs stipulations des CGU ne pourra en aucun cas impliquer la renonciation par cette partie à s'en prévaloir ultérieurement.
				
				NULLITÉ PARTIELLE
				Dans le cas où certaines stipulations des CGU seraient inapplicables pour quelque raison que ce soit, y compris en raison d'une loi ou d'une réglementation applicable, les parties resteront liées par les autres stipulations des CGU et s'efforceront de remédier aux clauses inapplicables.
				
				DROIT APPLICABLE ET ATTRIBUTION DE COMPETENCE
				Les CGU sont soumises à la loi française. Toutes difficultés relatives à leurs validité, application ou interprétation seront soumises, à défaut d'accord amiable, au tribunal de grande instance de TOULOUSE, auquel les parties attribuent compétence territoriale, quel que soit le lieu d'exécution ou le domicile du défendeur. Cette attribution de compétence s'applique également en cas de procédure en référé, de pluralité de défendeurs ou d'appel en garantie.</p>
			</div>
		  </div>
		</div>
		
		
	  </div>
  
  </div>
</section>

</body>
</html>