<?php
defined('_JEXEC') or die('Restricted access');
### Copyright (c) 2006-2012 Joobi Limited. All rights reserved.
### license GNU GPLv3 , link http://www.joobi.co

/**
 * <p>French language file.</p>
 * @copyright (c) 2006-2012 Joobi Limited. All rights reserved.
 * @author Joobi Limited <support@joobi.co>
 * @author Christelle Gesset <support@joobi.co>
 * @UTF-8 Conversion: SEW Solutions <info@sewsolutions.com>
 * @version $Id: french.php 491 2007-02-01 22:56:07Z chris $
* @link http://www.joobi.co
 */

### General ###
 //jnews Description
define('_JNEWS_DESC_CORE', 'jNews est un gestionaire de listes, infolettres, bulletins, et réponses automatiques pour communiquer effectivement avec vos clients.  ' .
		'jNews, votre partenaire de communication');
define('_JNEWS_DESC_GPL', 'jNews est un gestionaire de listes, infolettres, bulletins, et réponses automatiques pour communiquer effectivement avec vos clients.  ' .
		'jNews, votre partenaire de communication');
define('_JNEWS_FEATURES', 'jNews, votre partenaire de communication!');

// Type of lists
define('_JNEWS_NEWSLETTER', 'Infolettre');
define('_JNEWS_AUTORESP', 'Réponse automatique');
define('_JNEWS_AUTORSS', 'Auto-RSS');
define('_JNEWS_ECARD', 'eCard');
define('_JNEWS_POSTCARD', 'Carte postale');
define('_JNEWS_PERF', 'Performance');
define('_JNEWS_COUPON', 'Coupon');
define('_JNEWS_CRON', 'Tâche cron');
define('_JNEWS_MAILING', 'Emailing');
define('_JNEWS_LIST', 'Liste');

 //jnews Menu
define('_JNEWS_MENU_LIST', 'Gestion de Listes');
define('_JNEWS_MENU_SUBSCRIBERS', 'Abonnés');
define('_JNEWS_MENU_NEWSLETTERS', 'Infolettres');
define('_JNEWS_MENU_AUTOS', 'Réponses automatiques');
define('_JNEWS_MENU_COUPONS', 'Coupons');
define('_JNEWS_MENU_CRONS', 'Taches cron');
define('_JNEWS_MENU_AUTORSS', 'Auto-RSS');
define('_JNEWS_MENU_ECARD', 'eCards');
define('_JNEWS_MENU_POSTCARDS', 'Carte postales');
define('_JNEWS_MENU_PERFS', 'Performances');
define('_JNEWS_MENU_TAB_LIST', 'Listes');
define('_JNEWS_MENU_MAILING_TITLE', 'Envoi de courriel');
define('_JNEWS_MENU_MAILING', 'Envoi de courriel pour ');
define('_JNEWS_MENU_STATS', 'Statistiques');
define('_JNEWS_MENU_STATS_FOR', 'Statistiques pour ');
define('_JNEWS_MENU_CONF', 'Configuration');
define('_JNEWS_MENU_UPDATE', 'Importation');
define('_JNEWS_MENU_ABOUT', 'À propos');
define('_JNEWS_MENU_LEARN', 'Centre d\'éducation');
define('_JNEWS_MENU_MEDIA', 'Gestion des médias');
define('_JNEWS_MENU_HELP', 'Aide');
define('_JNEWS_MENU_CPANEL', 'Panneau de configuration');
define('_JNEWS_MENU_IMPORT', 'Importer');
define('_JNEWS_MENU_EXPORT', 'Exporter');
define('_JNEWS_MENU_SUB_ALL', 'S\'abonner à tout');
define('_JNEWS_MENU_UNSUB_ALL', 'Se désabonner de tout');
define('_JNEWS_MENU_VIEW_ARCHIVE', 'Archive');
define('_JNEWS_MENU_PREVIEW', 'Aperçu');
define('_JNEWS_MENU_SEND', 'Envoyer');
define('_JNEWS_MENU_SEND_TEST', 'Envoyer un essai');
define('_JNEWS_MENU_SEND_QUEUE', 'File d\'attente de processus');
define('_JNEWS_MENU_VIEW', 'Aperçu');
define('_JNEWS_MENU_COPY', 'Copier');
define('_JNEWS_MENU_VIEW_STATS', 'Afficher statistiques');
define('_JNEWS_MENU_CRTL_PANEL', 'Panneau de configuration');
define('_JNEWS_MENU_LIST_NEW', 'Créer une liste');
define('_JNEWS_MENU_LIST_EDIT', ' Éditer une liste');
define('_JNEWS_MENU_BACK', 'Retour');
define('_JNEWS_MENU_INSTALL', 'Installation');
define('_JNEWS_MENU_TAB_SUM', 'Résumer');
define('_JNEWS_STATUS', 'Statut');
define('_JNEWS_SENT_MAILING', 'Message envoyé');

// messages
define('_JNEWS_ERROR', 'Une erreur s\'est produite!');
define('_JNEWS_SUB_ACCESS', 'Droits d\'utilisateur');
define('_JNEWS_DESC_CREDITS', 'Crédits');
define('_JNEWS_DESC_INFO', 'Information');
define('_JNEWS_DESC_HOME', 'Accueil');
define('_JNEWS_DESC_MAILING', 'Liste d\'envoi');
define('_JNEWS_DESC_SUBSCRIBERS', 'Abonnés');
define('_JNEWS_PUBLISHED', 'Publié');
define('_JNEWS_UNPUBLISHED', 'Non publié');
define('_JNEWS_DELETE', 'Effacer');
define('_JNEWS_FILTER', 'Filtrer');
define('_JNEWS_UPDATE', 'Mise à jour');
define('_JNEWS_SAVE', 'Enregistrer');
define('_JNEWS_CANCEL', 'Annuler');
define('_JNEWS_NAME', 'Nom');
define('_JNEWS_EMAIL', 'Courriel');
define('_JNEWS_SELECT', 'Sélectionner');
define('_JNEWS_ALL', 'Tout');
define('_JNEWS_SEND_A', 'Envoyer un');
define('_JNEWS_SUCCESS_DELETED', 'Supprimé avec succès');
define('_JNEWS_LIST_ADDED', 'Liste créée avec succès');
define('_JNEWS_LIST_COPY', 'Liste copiée avec succès');
define('_JNEWS_LIST_UPDATED', 'Liste mise à jour avec succès.');
define('_JNEWS_MAILING_SAVED', 'Envoi sauvegardé avec succès.');
define('_JNEWS_UPDATED_SUCCESSFULLY', 'Mis à jour avec succès.');


### Subscribers information ###
//subscribe and unsubscribe info
define('_JNEWS_SUB_INFO', 'Informations abonné');
define('_JNEWS_VERIFY_INFO', 'Veuillez vérifier le lien entré, des informations manquent.');
define('_JNEWS_INPUT_NAME', 'Nom');
define('_JNEWS_INPUT_EMAIL', 'Courriel');
define('_JNEWS_RECEIVE_HTML', 'Recevoir du HTML ?');
define('_JNEWS_TIME_ZONE', 'Fuseaux horaire');
define('_JNEWS_BLACK_LIST', 'Liste noire');
define('_JNEWS_REGISTRATION_DATE', 'Date d\'enregistrement de l\'utilisateur');
define('_JNEWS_USER_ID', 'Id de l\'utilisateur');
define('_JNEWS_DESCRIPTION', 'Description');
define('_JNEWS_ACCOUNT_CONFIRMED', 'Votre compte a été activé.');
define('_JNEWS_SUB_SUBSCRIBER', 'Abonné');
define('_JNEWS_SUB_PUBLISHER', 'Éditeur');
define('_JNEWS_SUB_ADMIN', 'Administrateur');
define('_JNEWS_REGISTERED', 'Enregistré');
define('_JNEWS_SUBSCRIPTIONS', 'Vos abonnements');
define('_JNEWS_SEND_UNSUBCRIBE', 'Envoyer un message de désabonnement');
define('_JNEWS_SEND_UNSUBCRIBE_TIPS', 'Cliquez sur Oui pour envoyer un courriel de confimation de désabonnement.');
define('_JNEWS_SUBSCRIBE_SUBJECT_MESS', 'Veuillez confirmer votre abonnement');
define('_JNEWS_UNSUBSCRIBE_SUBJECT_MESS', 'Confirmation de désabonnement');
define('_JNEWS_DEFAULT_SUBSCRIBE_MESS', 'Bonjour {tag:name},<br />' .
		'Plus qu\'une étape et vous serez inscrit sur la liste. Cliquez s\'il vous plaît sur le lien suivant pour confirmer votre abonnement.' .
		'<br /><br />{tag:confirm}<br /><br />Pour toutes questions veuillez contacter le webmaster.');
define('_JNEWS_DEFAULT_UNSUBSCRIBE_MESS', 'Ceci un courriel de confirmation de désabonnement à notre liste. Nous sommes désolés que vous ayez décidé de vous désabonner. Si vous décidez de vous réinscrire, vous pouvez le faire sur notre site. Pour toutes questions veuillez contacter le webmaster.');

// jNews subscribers
define('_JNEWS_CONFIRMED', 'Confirmé');
define('_JNEWS_SUBSCRIB', 'Souscrire');
define('_JNEWS_HTML', 'Envois HTML');///
define('_JNEWS_RESULTS', 'Résultats');
define('_JNEWS_SEL_LIST', 'Selectionner une liste');
define('_JNEWS_SEL_LIST_TYPE', '- Sélectionner un type de liste -');
define('_JNEWS_SUSCRIB_LIST', 'Liste de tous les abonnés');
define('_JNEWS_SUSCRIB_LIST_UNIQUE', 'Abonnés pour : ');
define('_JNEWS_NO_SUSCRIBERS', 'Aucun abonné n\'a été trouvé pour cette liste.');

define('_JNEWS_COMFIRM_SUBSCRIPTION', 'Un courriel de comfirmation vous a été envoyé. Merci de vérifier votre courriel et cliquez sur le lien fourni.<br />' .
		'Vous devez confirmer votre courriel pour que votre abonnement puisse prendre effet.');
define('_JNEWS_SUCCESS_ADD_LIST', 'Vous avez été ajouté(e) avec succès à la liste.');


 // Subcription info
define('_JNEWS_CONFIRM_LINK', 'Cliquez ici pour confirmer votre abonnement.');
define('_JNEWS_UNSUBSCRIBE_LINK', 'Cliquez ici pour vous désabonnez de la liste');
define('_JNEWS_UNSUBSCRIBE_MESS', 'Votre adresse courriel a été supprimée des listes');
define('_JNEWS_QUEUE_SENT_SUCCESS', 'Tous les courriels programmés ont été envoyés avec succès.');
define('_JNEWS_MALING_VIEW', 'Afficher tous les envois');
define('_JNEWS_UNSUBSCRIBE_MESSAGE', 'Êtes-vous sûr de vouloir vous désabonner de cette liste?');
define('_JNEWS_MOD_SUBSCRIBE', 'S\'abonner');
define('_JNEWS_SUBSCRIBE', 'S\'abonner');
define('_JNEWS_UNSUBSCRIBE', 'Se désabonner');
define('_JNEWS_VIEW_ARCHIVE', 'Voir les archives');
define('_JNEWS_SUBSCRIPTION_OR', 'Cliquez ici pour mettre vos informations à jour');
define('_JNEWS_EMAIL_ALREADY_REGISTERED', 'Cette adresse courriel a déjà été enregistrée.');
define('_JNEWS_SUBSCRIBER_DELETED', 'Abonné supprimé avec succès.');


### UserPanel ###
 //User Menu
define('_JNEWS_UCP_USER_PANEL', 'Panneau de configuration Utilisateur');
define('_JNEWS_UCP_USER_MENU', 'Menu Utilisateur');
define('_JNEWS_UCP_USER_CONTACT', 'Mes Abonnements');
 //jNews Cron Menu
define('_JNEWS_UCP_CRON_MENU', 'Gestion des tâches Cron');
define('_JNEWS_UCP_CRON_NEW_MENU', 'Nouveau Cron');
define('_JNEWS_UCP_CRON_LIST_MENU', 'Liste de mon Cron');
 //jNews Coupon Menu
define('_JNEWS_UCP_COUPON_MENU', 'Gestion de coupons');
define('_JNEWS_UCP_COUPON_LIST_MENU', 'Liste de mes coupons');
define('_JNEWS_UCP_COUPON_ADD_MENU', 'Ajouter un coupon');


### lists ###
// Tabs
define('_JNEWS_LIST_T_GENERAL', 'Description');
define('_JNEWS_LIST_T_LAYOUT', 'Disposition');
define('_JNEWS_LIST_T_SUBSCRIPTION', 'Abonnement');
define('_JNEWS_LIST_T_SENDER', 'Informations sur l\'expéditeur');

define('_JNEWS_LIST_TYPE', 'Type de liste');
define('_JNEWS_LIST_NAME', 'Nom de la liste');
define('_JNEWS_LIST_ISSUE', 'Publication N°');
define('_JNEWS_LIST_DATE', 'Date d\'envoi');
define('_JNEWS_LIST_SUB', 'Objet du message');
define('_JNEWS_HTML_CONTENT', 'Contenu HTML');
define('_JNEWS_ATTACHED_FILES', 'Pièces jointes');
define('_JNEWS_SELECT_LIST', 'Veuillez choisir une liste pour l\'édition!');

// Auto Responder box
define('_JNEWS_AUTORESP_ON', 'Type de liste');
define('_JNEWS_AUTO_RESP_OPTION', 'Options des réponses automatiques');
define('_JNEWS_AUTO_RESP_FREQ', 'Les abonnés peuvent choisir la fréquence');
define('_JNEWS_AUTO_DELAY', 'Délai (en jours)');
define('_JNEWS_AUTO_DAY_MIN', 'Fréquence minimale');
define('_JNEWS_AUTO_DAY_MAX', 'Fréquence maximale');
define('_JNEWS_FOLLOW_UP', 'Spécifiez la réponse automatique suivante');
define('_JNEWS_AUTO_RESP_TIME', 'Les abonnés peuvent choisir le temps');
define('_JNEWS_LIST_SENDER', 'Liste des expéditeurs');

define('_JNEWS_LIST_DESC', 'Description de liste');
define('_JNEWS_LAYOUT', 'Disposition');
define('_JNEWS_SENDER_NAME', 'Nom de l\'expéditeur');
define('_JNEWS_SENDER_EMAIL', 'Courriel de l\'expéditeur');
define('_JNEWS_SENDER_BOUNCE', 'Adresse de retour de l\'expéditeur');/////
define('_JNEWS_LIST_DELAY', 'Délai');
define('_JNEWS_HTML_MAILING', 'Liste d\'envoi de courriels HTML?');
define('_JNEWS_HTML_MAILING_DESC', '(Si vous changez ceci, vous devrez sauvegarder et revenir à cet écran pour voir les changements.)');
define('_JNEWS_HIDE_FROM_FRONTEND', 'Visible du coté client ?');
define('_JNEWS_SELECT_IMPORT_FILE', 'Choisissez un fichier à importer');
define('_JNEWS_IMPORT_FINISHED', 'Importation terminée');
define('_JNEWS_DELETION_OFFILE', 'Suppression du fichier');
define('_JNEWS_MANUALLY_DELETE', 'Échoué, vous devriez supprimer manuellement le fichier');
define('_JNEWS_CANNOT_WRITE_DIR', 'Écriture impossible dans le répertoire');
define('_JNEWS_NOT_PUBLISHED', 'Les courriels ne pourront pas être envoyés, la liste n\'est pas publiée.');

//  List info box
define('_JNEWS_INFO_LIST_PUB', 'Cliquez sur Oui pour publier la liste');
define('_JNEWS_INFO_LIST_NAME', 'Entrez le nom de votre liste ici. Vous pourrez ainsi l\'identifier.');
define('_JNEWS_INFO_LIST_DESC', 'Entrez une brève description de votre liste ici. Cette description sera visible pour les visiteurs de votre site.');
define('_JNEWS_INFO_LIST_SENDER_NAME', 'Entrez le nom de l\'expéditeur de l\'envoi. Ce nom sera visible lorsque les abonnés recevront des messages de cette liste.');
define('_JNEWS_INFO_LIST_SENDER_EMAIL', 'Entrez l\'adresse courriel depuis laquelle les messages seront envoyés.');
define('_JNEWS_INFO_LIST_SENDER_BOUNCED', 'Entrez l\'adresse courriel à laquelle les utilisateurs peuvent répondre. Il est fortement recommandé que ce soit le même courriel que celui de l\'expéditeur car les filtre de spams pourrons considérer votre Infolettre comme un pourriel.');
define('_JNEWS_INFO_LIST_AUTORESP', 'Choisir un type de liste d\'envoi. <br />' .
		'Infolettre:  infolettre normale<br />' .
		'Réponse automatique: Une réponse automatique est une liste qui est envoyée automatiquement par le site Web à intervalles réguliers.');
define('_JNEWS_INFO_LIST_FREQUENCY', 'Permettez aux utilisateurs de choisir combien de fois ils reçoivent la liste. Cela donne plus de souplesse à l\'utilisateur.');
define('_JNEWS_INFO_LIST_TIME', 'Laissez l\'utilisateur choisir son horaire préféré de réception de la liste.');
define('_JNEWS_INFO_LIST_MIN_DAY', 'Définissez la fréquence minimale que peut choisir un utilisateur pour recevoir la liste');
define('_JNEWS_INFO_LIST_DELAY', 'Spécifiez le délai entre cette réponse automatique et le précédent.');
define('_JNEWS_INFO_LIST_DATE', 'Spécifiez la date de publication de la liste de nouvelles si vous voulez retarder la publication. <br /> FORMAT : YYYY-MM-DD HH:MM:SS');
define('_JNEWS_INFO_LIST_MAX_DAY', 'Définissez la fréquence maximale que peut choisir un utilisateur pour recevoir la liste');
define('_JNEWS_INFO_LIST_LAYOUT', 'Entrez la disposition de votre liste d\'adresses ici. Vous pouvez entrer n\'importe quelle disposition pour votre envoi ici.');
define('_JNEWS_INFO_LIST_SUB_MESS', 'Ce message sera envoyé à l\'abonné quand il ou elle se sera inscrit(e). Vous pouvez définir ici n\'importe quel texte.');
define('_JNEWS_INFO_LIST_UNSUB_MESS', 'Ce message sera envoyé à l\'abonné quand il ou elle se désabonnera. Vous pouvez définir ici n\'importe quel message.');
define('_JNEWS_INFO_LIST_HTML', 'Cocher la case si vous voulez envoyer un message HTML. Les abonnés seront capables de définir s\'ils veulent recevoir les lettres au format HTML ou texte seul lorsqu\'ils souscrivent à une liste HTML.');
define('_JNEWS_INFO_LIST_HIDDEN', 'Cliquez sur Oui pour cacher la liste du frontend. Les utilisateurs ne pourront plus s\'abonner mais vous pourrez toujours envoyer des lettres.');
define('_JNEWS_INFO_LIST_JNEWS_AUTO_SUB', 'Voulez-vous assigner automatiquement des utilisateurs à cette liste ? < Br / > <B> Nouveaux utilisateurs : </B > seront enregistrés tous les nouveaux utilisateurs qui s\'inscrivent sur le site Web. < Br / > < B> Tous les utilisateurs : </B > enregistrera tous les utilisateurs enregistrés dans la base de données. < Br / > (toute cette option supporte le module Community Builder))');
define('_JNEWS_INFO_LIST_ACC_LEVEL', 'Choisissez le niveau d\'accès sur le frontend. Cela affichera ou cachera l\'envoi au groupe d\'utilisateurs qui n\'y a pas accès. Ils ne pourront donc pas y souscrire.');
define('_JNEWS_INFO_LIST_ACC_USER_ID', 'Choisissez le niveau d\'accès du groupe utilisateurs à qui vous voulez permettre les modifications. Ce groupe et ceux au dessus seront capables d\'éditer l\'envoi et pourront effectuer l\'envoi depuis le frontend et le backend.');
define('_JNEWS_INFO_LIST_FOLLOW_UP', 'Si vous voulez que l\'auto-répondeur se déplace sur un autre message une fois le dernier message atteint, vous pouvez spécifier ici  l\'auto-répondeur suivant.');
define('_JNEWS_INFO_LIST_JNEWS_OWNER', 'Identifiant de la personne qui a créé la liste.');
define('_JNEWS_INFO_LIST_WARNING', 'Cette dernière option est seulement disponible une fois la liste créée.');
define('_JNEWS_INFO_LIST_SUBJET', ' Sujet de l\'envoi, c\'est le sujet du courriel que l\'abonné recevra.');
define('_JNEWS_INFO_MAILING_CONTENT', 'C\'est le corps du courriel que vous voulez envoyer.');
define('_JNEWS_INFO_MAILING_NOHTML', 'Entrez ici le corps du message pour les utilisateurs qui ont choisi de pas recevoir l\'infolettre au format HTML. <BR/> NOTE: si vous laissez cet espace vide, jNews convertira automatiquement le contenu HTML en text normal.');/////
define('_JNEWS_INFO_MAILING_VISIBLE', 'Cliquez sur Oui pour que l\'envoi soit visible depuis le frontend.');
define('_JNEWS_INSERT_CONTENT', 'Insérez un contenu existant');

// Coupons
define('_JNEWS_SEND_COUPON_SUCCESS', 'Coupon envoyé avec succès!');
define('_JNEWS_CHOOSE_COUPON', 'Choisissez un coupon');
define('_JNEWS_TO_USER', ' à cet utilisateur');

### Cron options
//drop down frequency(CRON)
define('_JNEWS_FREQ_CH1', 'Toutes les heures');
define('_JNEWS_FREQ_CH2', 'Toutes les 6 heures');
define('_JNEWS_FREQ_CH3', 'Toutes les 12 heures');
define('_JNEWS_FREQ_CH4', 'Quotidiennement');
define('_JNEWS_FREQ_CH5', 'Toutes les semaines');
define('_JNEWS_FREQ_CH6', 'Toutes les mois');
define('_JNEWS_FREQ_NONE', 'Non');
define('_JNEWS_FREQ_NEW', 'Nouveaux utilisateurs');
define('_JNEWS_FREQ_ALL', 'Tous les utilisateurs');

//Label CRON form
define('_JNEWS_LABEL_FREQ', 'jNews Cron ?');
define('_JNEWS_LABEL_FREQ_TIPS', 'Cliquez sur Oui si vous voulez l\'utiliser pour un Cron jNews, Non pour une autre tâche cron.<br />' .
		'Si vous cliquez sur Oui vous ne devez pas spécifier l\'adresse de Cron, elle sera automatiquement ajouté.');
define('_JNEWS_SITE_URL', 'L\'URL de votre site');
define('_JNEWS_CRON_FREQUENCY', 'Fréquence Cron');
define('_JNEWS_STARTDATE_FREQ', 'Date de début');
define('_JNEWS_LABELDATE_FREQ', 'Date spécifique');
define('_JNEWS_LABELTIME_FREQ', 'Horaire spécifique');
define('_JNEWS_CRON_URL', 'URL Cron');
define('_JNEWS_CRON_FREQ', 'Fréquence');
define('_JNEWS_TITLE_CRONLIST', ' Liste Cron');
define('_JNEWS_NEW_LIST', 'Créer une nouvelle liste');

//title CRON form
define('_JNEWS_TITLE_FREQ', 'Édition de vos tâches Cron');
define('_JNEWS_CRON_SITE_URL', 'Veuillez entrez une URL de site valable, commençant par http://');

### Envois ###
define('_JNEWS_MAILING_ALL', 'Tous les envois');
define('_JNEWS_EDIT_A', 'Éditer un ');
define('_JNEWS_SELCT_MAILING', 'Vous devez choisir une liste dans la liste déroulante pour ajouter un nouvel envoi.');
define('_JNEWS_VISIBLE_FRONT', 'Visible depuis le frontend');

// courrieler
define('_JNEWS_SUBJECT', 'Sujet');
define('_JNEWS_CONTENT', 'Contenu');
define('_JNEWS_NAMEREP', '{tag:name} = Ceci sera remplacé par le nom de l\'abonné entré. Vous enverrez ainsi un courriel personnalisé en l\'utilisant.<br />');
define('_JNEWS_FIRST_NAME_REP', '{tag:firstname} = Ceci sera remplacé par le PRÉNOM de l\'abonné entré.<br />');
define('_JNEWS_NONHTML', 'Version texte');
define('_JNEWS_ATTACHMENTS', 'Pièce(s) jointe(s)');
define('_JNEWS_SELECT_MULTIPLE', 'Appuyez sur CTRL (ou Command) pour sélectionner des pièces jointes multiples.<br />' .
		'Les fichiers montrés dans cette liste de pièces jointes sont placés dans le dossier pièces jointes, vous pouvez changer cet emplacement dans le panneau de configuration.');
define('_JNEWS_CONTENT_ITEM', 'Elément de contenu');//
define('_JNEWS_SENDING_EMAIL', 'Envoi de courriel');
define('_JNEWS_MESSAGE_NOT', 'Le message n\'a pas pu être envoyé');
define('_JNEWS_MAILER_ERROR', 'Erreur d\'envoi');
define('_JNEWS_MESSAGE_SENT_SUCCESSFULLY', 'Message envoyé avec succès');
define('_JNEWS_SENDING_TOOK', 'Envoyer cette infolettre ');////took
define('_JNEWS_SECONDS', 'secondes');
define('_JNEWS_NO_ADDRESS_ENTERED', 'Aucune adresse courriel ou abonné n\'a été fournie');
define('_JNEWS_NO_MAILING_ENTERED', 'Aucune liste d\'envoi n\'a été fournie');
define('_JNEWS_NO_LIST_ENTERED', 'Aucune liste n\'a été fournie');
define('_JNEWS_CHANGE_SUBSCRIPTIONS', 'Modifier');
define('_JNEWS_CHANGE_EMAIL_SUBSCRIPTION', 'Modifiez votre abonnement');
define('_JNEWS_WHICH_EMAIL_TEST', 'Indiquez l\'adresse électronique à laquelle vous voulez envoyer cet essai ou sélectionnez aperçu');
define('_JNEWS_SEND_IN_HTML', 'Envoyer en HTML (pour les listes d\'envois en HTML )?');
define('_JNEWS_VISIBLE', 'Visible');
define('_JNEWS_INTRO_ONLY', 'Intro seulement');

// stats
define('_JNEWS_GLOBALSTATS', 'Statistiques globales');
define('_JNEWS_DETAILED_STATS', 'Statistiques détaillées ');
define('_JNEWS_MAILING_LIST_DETAILS', 'Listes détaillées');
define('_JNEWS_SEND_IN_HTML_FORMAT', 'Envois au format HTML');
define('_JNEWS_VIEWS_FROM_HTML', 'Vus (courriers en HTML)');
define('_JNEWS_SEND_IN_TEXT_FORMAT', 'Envois au format texte');
define('_JNEWS_HTML_READ', 'Lecture en HTML ');
define('_JNEWS_HTML_UNREAD', 'Non lus en HTML ');
define('_JNEWS_TEXT_ONLY_SENT', 'Texte uniquement');

// Configuration panel
// main tabs
define('_JNEWS_MAIL_CONFIG', 'Courriel');
define('_JNEWS_LOGGING_CONFIG', 'Logs & Stats');
define('_JNEWS_SUBSCRIBER_CONFIG', 'Abonnés');
define('_JNEWS_AUTO_CONFIG', 'Cron');
define('_JNEWS_MISC_CONFIG', 'Divers');
define('_JNEWS_MAIL_SETTINGS', 'Paramètres de courriel');/////
define('_JNEWS_MAILINGS_SETTINGS', 'Paramètres des envois');
define('_JNEWS_SUBCRIBERS_SETTINGS', 'Paramètres des abonnés');
define('_JNEWS_CRON_SETTINGS', 'Paramètres du Cron');
define('_JNEWS_SENDING_SETTINGS', 'Paramètres de l\'envoi');
define('_JNEWS_STATS_SETTINGS', ' Paramètres des statistiques');
define('_JNEWS_LOGS_SETTINGS', 'Paramètres des journaux de log');
define('_JNEWS_MISC_SETTINGS', 'Paramètres divers');
// courriel settings
define('_JNEWS_SEND_MAIL_FROM', 'Addresse de retour');
define('_JNEWS_SEND_MAIL_NAME', 'De ');
define('_JNEWS_MAILSENDMETHOD', 'Méthodes d\'envoi');//Courrieler method
define('_JNEWS_SENDMAILPATH', 'Chemin du programme sendmail');///
define('_JNEWS_SMTPHOST', 'Hôte SMTP');
define('_JNEWS_SMTPAUTHREQUIRED', 'Authentification SMTP exigée');
define('_JNEWS_SMTPAUTHREQUIRED_TIPS', 'Choisissez oui si votre serveur de SMTP exige l\'authentification');
define('_JNEWS_SMTPUSERNAME', 'Nom d\'utilisateur SMTP');
define('_JNEWS_SMTPUSERNAME_TIPS', 'Entrez votre nom d\'utilisateur SMTP  quand votre serveur SMTP exige l\'authentification');
define('_JNEWS_SMTPPASSWORD', 'Mot de passe SMTP');
define('_JNEWS_SMTPPASSWORD_TIPS', 'Entrez votre mot de passe SMTP quand votre serveur SMTP exige l\'authentification');
define('_JNEWS_USE_EMBEDDED', 'Utilisez des images incorporées');
define('_JNEWS_USE_EMBEDDED_TIPS', 'Sélectionnez OUI pour que les images soient directement incluses dans l\'email sans être liées au site web');
define('_JNEWS_UPLOAD_PATH', 'Chemin des pièces jointes à envoyer');
define('_JNEWS_UPLOAD_PATH_TIPS', 'Vous pouvez spécifier un répertoire d\'importation.<br />' .
		'Vérifiez que le répertoire spécifié existe, sinon créez-le.');

// subscribers settings
define('_JNEWS_ALLOW_UNREG', 'Non enregistrés autorisés');
define('_JNEWS_ALLOW_UNREG_TIPS', 'Sélectionner Oui si vous voulez permettre aux utilisateurs de s\'inscrire à une liste sans être enregistrés sur le site.');
define('_JNEWS_REQ_CONFIRM', 'Confirmation requise');
define('_JNEWS_REQ_CONFIRM_TIPS', 'Sélectionner Oui si vous demandez aux utilisateurs non enregistrés de confirmer leur adresse courriel.');
define('_JNEWS_SUB_SETTINGS', 'Paramètres d\'inscription');
define('_JNEWS_SUBMESSAGE', 'Courriel d\'inscription');
define('_JNEWS_SUBSCRIBE_LIST', 'S\'incrire à une liste');

define('_JNEWS_USABLE_TAGS', 'Tags utilisables');
define('_JNEWS_NAME_AND_CONFIRM', '<b>{tag:confirm}</b> = Ceci crée un lien hypertexte avec lequel les utilisateurs peuvent confirmer leur inscription. Ceci est <strong>requis</strong> pour le bon fonctionnement d\'jNews.<br />'
.'<br />{tag:name} = Ceci sera remplacé par le nom entré par l\'inscrit. Vous enverrez ainsi des courriels personnalisés en utilisant cette option.<br />'
.'<br />{tag:firstname} = Ceci sera remplacé par le prénom de l\'inscrit, le nom est défini comme le premier nom entré par l\'inscrit.<br />');
define('_JNEWS_CONFIRMFROMNAME', 'Confirmation du nom');
define('_JNEWS_CONFIRMFROMNAME_TIPS', 'Entrer le nom qui apparaitra sur la liste des confirmés.');
define('_JNEWS_CONFIRMFROMEMAIL', 'Confirmation du courriel');
define('_JNEWS_CONFIRMFROMEMAIL_TIPS', 'Entrer l\'adresse courriel qui apparaîtra sur la liste des confirmés.');
//define('_JNEWS_CONFIRMBOUNCE', 'Confirmer l\'adresse de rebond');
//define('_JNEWS_CONFIRMBOUNCE_TIPS', 'Entrer l\'adresse de rebond à afficher dans les listes de confirmation.');
define('_JNEWS_HTML_CONFIRM', 'Confirmation HTML');
define('_JNEWS_HTML_CONFIRM_TIPS', 'Sélectionner oui si la liste de confirmation doit être en HTML si les utilisateurs autorisent le HTML.');
if(!defined('_JNEWS_TIME_ZONE')) define('_JNEWS_TIME_ZONE', 'Demander le fuseau horaire');
define('_JNEWS_TIME_ZONE_TIPS', 'Sélectionner oui si vous voulez demander le fuseau horaire de l\'utilisateur. La file d\'attente des courriels sera envoyée en tenant compte du fuseau horaire de l\'utilisateur lorsque cela est applicable');

 // Cron Set up
define('_JNEWS_TIME_OFFSET_URL', 'Cliquer ici pour paramètrer le décalage dans le panneau de configuration globale -> onglet Local');
define('_JNEWS_TIME_OFFSET_TIPS', 'Paramètrer le décalage temporel de votre serveur de sorte que la date et l\'heure enregistrées soient exactes ');
define('_JNEWS_TIME_OFFSET', 'Décalage temporel');
define('_JNEWS_CRON_TITLE', 'Installation de la fonction cron');
define('_JNEWS_CRON_DESC', '<br />En utilisant la fonction CRON vous pouvez paramètrer des tâches planifiées pour votre site web Joomla !<br />' .
		'Pour l\'installer, vous devez ajouter dans le panneau de configuration crontab la commande suivante :<br />' .
		'<b>' . JNEWS_JPATH_LIVE . '/index.php?option=com_jnews&act=cron</b> ' .
		'<br /><br />Si vous avez besoin d\'aide pour l\'installation ou que vous avez des difficultés, n\hésitez pas à consulter notre forum <a href="http://www.joobi.co" target="_blank">http://www.joobi.co</a>');
// sending settings
define('_JNEWS_PAUSEX', 'Pause de x secondes après chaque quantité configurée de courriels');
define('_JNEWS_PAUSEX_TIPS', 'Entrer un nombre en secondes qu\'jNews donnera au serveur SMTP pour lui laisser le temps d\'envoyer les messages avant de procéder à la prochaine quantité de messages configurée.');
define('_JNEWS_EMAIL_BET_PAUSE', 'Courriels entre les pauses');
define('_JNEWS_EMAIL_BET_PAUSE_TIPS', 'Le nombre de courriels à envoyer avant de faire une pause.');
define('_JNEWS_WAIT_USER_PAUSE', 'Attente d\'une entrée utilisateur comme pause');
define('_JNEWS_WAIT_USER_PAUSE_TIPS', 'Si le script doit attendre une entrée utilisateur lors des pauses entre les lots de courriels.');
define('_JNEWS_SCRIPT_TIMEOUT', 'Arrêt du script');
define('_JNEWS_SCRIPT_TIMEOUT_TIPS', 'Le nombre de minutes pendant lequel le script doit être capable de fonctionner.');
// Stats settings
define('_JNEWS_ENABLE_READ_STATS', 'Permettre la lecture des statistiques');
define('_JNEWS_ENABLE_READ_STATS_TIPS', 'Sélectionner Oui si vous vouler noter le nombre de vus. Cette technique peut seulement être utilisée avec les courriels html');
define('_JNEWS_LOG_VIEWSPERSUB', 'Noter le nombre de vus par abonné');
define('_JNEWS_LOG_VIEWSPERSUB_TIPS', 'Sélectionner Oui si vous vouler noter le nombre de vus par abonné. Cette technique peut seulement être utilisée avec les courriels html');
// Logs settings
define('_JNEWS_DETAILED', 'Logs détaillés');
define('_JNEWS_SIMPLE', 'Logs simplifiés');
define('_JNEWS_DIAPLAY_LOG', 'Afficher les logs');
define('_JNEWS_DISPLAY_LOG_TIPS', 'Sélectionner Oui si vous voulez afficher les logs lors de l\'envoi des courriels.');
define('_JNEWS_SEND_PERF_DATA', 'Envoyer les données d\'éxécution');
define('_JNEWS_SEND_PERF_DATA_TIPS', 'Sélectionner oui si vous voulez permettre à jNews d\'envoyer des rapports anonymes sur votre configuration, le nombre d\'abonnés à une liste et le temps mis pour envoyer les courriels. Ceci nous donnera une idée sur les performances d\'jNews et nous AIDERA à améliorer jNews dans les développements futurs.');
define('_JNEWS_SEND_AUTO_LOG', 'Envoyer les logs pour les réponses automatiques');
define('_JNEWS_SEND_AUTO_LOG_TIPS', 'Sélectionnez oui si vous voulez envoyer an courriel de log à chaque traitement de la liste d\'envois. AVERTISSEMENT : Cela peut aboutir à un très grand nombre de courriels.');
define('_JNEWS_SEND_LOG', 'Envoyer les logs');
define('_JNEWS_SEND_LOG_TIPS', 'Si une notification de courriel doit être envoyée à l\'adresse courriel de l\'utilisateur qui a envoyé les courriels.');
define('_JNEWS_SEND_LOGDETAIL', 'Envoyer les logs détaillés');
define('_JNEWS_SEND_LOGDETAIL_TIPS', 'Détaillé inclut l\'information sur le succès ou l\'échec pour chaque abonné et un aperçu de l\'information. Simple envoie seulement l\'aperçu.');
define('_JNEWS_SEND_LOGCLOSED', 'Envoyer une notification si la connexion est interrompue');
define('_JNEWS_SEND_LOGCLOSED_TIPS', 'Avec cette option sur on, l\'utilisateur qui envoie le courriel recevra un rapport par courriel.');
define('_JNEWS_SAVE_LOG', 'Sauvegarder les logs');
define('_JNEWS_SAVE_LOG_TIPS', 'Si un log concernant l\'envoi doit être ajouté au fichier de log.');
define('_JNEWS_SAVE_LOGDETAIL', 'Sauvegarder les logs détaillés');
define('_JNEWS_SAVE_LOGDETAIL_TIPS', 'Détails inclut l\'information sur le succès ou l\'échec pour chaque abonné et un aperçu de l\'information. Simple envoie seulement l\'aperçu.');
define('_JNEWS_SAVE_LOGFILE', 'Sauvegarder les fichiers de logs');
define('_JNEWS_SAVE_LOGFILE_TIPS', 'Fichier auquel les informations sur les logs doivent être ajoutés. Ce fichier peut devenir assez volumineux.');
define('_JNEWS_CLEAR_LOG', 'Effacement logs');
define('_JNEWS_CLEAR_LOG_TIPS', 'Effacer les fichiers de logs.');

### control panel
define('_JNEWS_CP_LAST_QUEUE', 'Dernière file d\'attente exécutée');
define('_JNEWS_CP_TOTAL', 'Total');
define('_JNEWS_MAILING_COPY', 'Copie réussie des envois !');

// Miscellaneous settings
define('_JNEWS_SHOW_GUIDE', 'Afficher le guide');
define('_JNEWS_SHOW_GUIDE_TIPS', 'Afficher le guide pour aider les nouveaux utilisateurs à créer une infolettre, une réponse automatique et installer jNews correctement.');
define('_JNEWS_AUTOS_ON', 'Utiliser les réponses automatiques');
define('_JNEWS_AUTOS_ON_TIPS', 'Sélectionner Non si vous ne voulez pas utiliser les réponses automatiques. Toutes les options des réponses automatiques seront désactivées.');
define('_JNEWS_NEWS_ON', 'Utiliser les infolettres');
define('_JNEWS_NEWS_ON_TIPS', 'Sélectionner Non si vous ne voulez pas utiliser les infolettres. Toutes les options d\'infolettres seront désactivées.');
define('_JNEWS_SHOW_TIPS', 'Afficher les astuces');
define('_JNEWS_SHOW_TIPS_TIPS', 'Afficher les astuces, pour aider les utilisateurs à se servir d\'jNews plus efficacement.');
define('_JNEWS_SHOW_FOOTER', 'Montrer le titre de bas de page');
define('_JNEWS_SHOW_FOOTER_TIPS', 'Si oui ou non le copyright de bas de page doit être affiché.');
define('_JNEWS_SHOW_LISTS', 'Montrer les listes sur le fontend');
define('_JNEWS_SHOW_LISTS_TIPS', 'Lorsque les utilisateurs ne sont pas enregistrés, montrer la liste des listes auquelles ils peuvent s\'abonner avec le bouton d\'archive pour les infolettres ou simplement une formulaire de login pour qu\'ils puissent s\'enregistrer.');
define('_JNEWS_CONFIG_UPDATED', 'Les détails de configuration ont été mis à jour !');
define('_JNEWS_UPDATE_URL', 'Mettre à jour l\'URL');
define('_JNEWS_UPDATE_URL_WARNING', ' AVERTISSEMENT ! Ne changez pas cette URL à moins que vous n\'ayiez été invités à le faire par l\'équipe technique d\'jNews.<br />');
define('_JNEWS_UPDATE_URL_TIPS', 'Par exemple: http://www.joobi.co/update/ (inclut le slash de fin)');

// module
define('_JNEWS_EMAIL_INVALID', 'Le courriel entré est invalide.');
define('_JNEWS_REGISTER_REQUIRED', 'Merci de vous enregistrer sur le site avant de pouvoir vous abonner à une liste.');
define('_JNEWS_SIGNUP_DATE', 'Date d\'inscription');

// Access level box
define('_JNEWS_OWNER', 'Créateur de la liste :');
define('_JNEWS_ACCESS_LEVEL', 'Définir un niveau d\'accès pour la liste ');
define('_JNEWS_ACCESS_LEVEL_OPTION', 'Options du niveau d\'accès');
define('_JNEWS_USER_LEVEL_EDIT', 'Sélectionner quel niveau d\'utilisateur est autorisé à éditer un envoi (frontend ou backend) ');

//  drop down options
define('_JNEWS_AUTO_DAY_CH1', 'Journalier');
define('_JNEWS_AUTO_DAY_CH2', 'Journalier hors weekend');
define('_JNEWS_AUTO_DAY_CH3', 'Tous les autres jours');
define('_JNEWS_AUTO_DAY_CH4', 'Tous les autres jours hors weekend');
define('_JNEWS_AUTO_DAY_CH5', 'Hebdomadaire');
define('_JNEWS_AUTO_DAY_CH6', 'Bi-hebdomadaire');
define('_JNEWS_AUTO_DAY_CH7', 'Mensuel');
define('_JNEWS_AUTO_DAY_CH9', 'Annuel');
define('_JNEWS_AUTO_OPTION_NONE', 'Non');
define('_JNEWS_AUTO_OPTION_NEW', 'Nouveaux utilisateurs');
define('_JNEWS_AUTO_OPTION_ALL', 'Tous les utilisations');

//
define('_JNEWS_UNSUB_MESSAGE', 'Se désincrire des courriels');
define('_JNEWS_UNSUB_SETTINGS', 'Paramètres de désincription');
define('_JNEWS_AUTO_ADD_NEW_USERS', 'Inscription automatique des utilisateurs?');

// Update and upgrade messages
define('_JNEWS_VERSION', 'Version d\'jNews');
define('_JNEWS_NO_UPDATES', 'Il n\'y a pas actuellement de mises à jours disponibles.');
define('_JNEWS_NEED_UPDATED', 'Fichiers qui ont besoin d\'être mis à jour :');
define('_JNEWS_NEED_ADDED', 'Fichiers qui ont besoin d\'être ajoutés :');
define('_JNEWS_NEED_REMOVED', 'Fichiers qui ont besoin d\'être supprimés :');
define('_JNEWS_FILENAME', 'Nom de fichier :');
define('_JNEWS_CURRENT_VERSION', 'Version actuelle :');
define('_JNEWS_NEWEST_VERSION', 'Version la plus récente :');
define('_JNEWS_UPDATING', 'Mettre à jour');
define('_JNEWS_UPDATE_UPDATED_SUCCESSFULLY', 'Les fichiers ont été mis à jour avec succès.');
define('_JNEWS_UPDATE_FAILED', 'La mise à jour à échoué !');
define('_JNEWS_ADDING', 'Ajouter');
define('_JNEWS_ADDED_SUCCESSFULLY', 'Ajouter avec succès.');
define('_JNEWS_ADDING_FAILED', 'L\'ajout a échoué !');
define('_JNEWS_REMOVING', 'Supprimer');
define('_JNEWS_REMOVED_SUCCESSFULLY', 'Supprimer avec succès.');
define('_JNEWS_REMOVING_FAILED', 'La suppression a échoué!');
define('_JNEWS_INSTALL_DIFFERENT_VERSION', 'Installer une version différente');
define('_JNEWS_CONTENT_ADD', 'Ajouter un contenu');
define('_JNEWS_UPGRADE_FROM', 'Importer des données (informations sur les infolettres et les abonnés) de ');
define('_JNEWS_UPGRADE_MESS', 'Il n\'y a aucun risque pour vos données existantes. <br /> Le processus va simplement importer les données dans la base de données d\'jNews.');
define('_JNEWS_CONTINUE_SENDING', 'Continuer l\'envoi');

// jNews message
define('_JNEWS_UPGRADE1', 'Vous pouvez facilement importer vos utilisateurs et vos infolettres de ');
define('_JNEWS_UPGRADE2', ' vers jNews dans le panneau de mise à jour.');
define('_JNEWS_UPDATE_MESSAGE', 'Une nouvelle version d\'jNews est disponible. ');
define('_JNEWS_UPDATE_MESSAGE_LINK', 'Une nouvelle version d\'jNews est disponible. Cliquez ici pour faire la mise à jour !');
define('_JNEWS_CRON_SETUP', 'Pour utiliser les réponses automatiques, vous avec besoin d\'installer une tâche cron.');
define('_JNEWS_THANKYOU', 'Merci d\'avoir choisi jNews, Votre partenaire de communication !');
define('_JNEWS_NO_SERVER', 'Le serveur de mise à jour n\'est pas disponible, merci de revenir un peu plus tard.');
define('_JNEWS_MOD_PUB', 'Le module jNews n\'est pas publié.');
define('_JNEWS_MOD_PUB_LINK', 'Cliquez ici pour le publier!');
define('_JNEWS_IMPORT_SUCCESS', 'Importer avec succès');
define('_JNEWS_IMPORT_EXIST', 'Utilisateur déjà présent dans la base de données');


// jNews Install
define('_JNEWS_INSTALL_CONFIG', 'Configuration jNews');
define('_JNEWS_INSTALL_SUCCESS', 'Installation réussie');
define('_JNEWS_INSTALL_ERROR', 'Erreur d installation');
define('_JNEWS_INSTALL_BOT', 'Plugin jNews (Bot)');
define('_JNEWS_INSTALL_MODULE', 'Module jNews');
//Others
define('_JNEWS_JAVASCRIPT', '! Attention ! Pour une bonne opération, Le javascript doit être activé.');
define('_JNEWS_EXPORT_TEXT', 'L\'exportation des abonnés est basé sur la liste que vous avez choisie. <br />Exporter les abonnés de la liste');
define('_JNEWS_IMPORT_TIPS', 'Importation des abonnés. Les informations dans le fichier nécessitent d\'être au format suivant : <br />' .
		'Nom,courriel,recevoirHTML(1/0),<span style="color: rgb(255, 0, 0);">confirmé(1/0)</span>');
define('_JNEWS_SUBCRIBER_EXIT', 'est déjà abonné');
define('_JNEWS_GET_STARTED', 'Cliquez ici pour commencer !');

//News since 1.0.1
define('_JNEWS_WARNING_1011', 'Avertissement: 1011: La mise à jour ne fonctionnera pas à cause des restrictions sur votre serveur.');
define('_JNEWS_SEND_MAIL_FROM_TIPS', 'Utilisée comme addresse de rebond pour tous les e-mails');
define('_JNEWS_SEND_MAIL_NAME_TIPS', ' Choisissez le nom qui apparaitra comme expéditeur.');
define('_JNEWS_MAILSENDMETHOD_TIPS', 'Choisissez quel type de serveur vous désirez utiliser : Fonction PHP MAIL, <span>Sendmail</span> ou Serveur SMTP.');
define('_JNEWS_SENDMAILPATH_TIPS', 'Ceci est le répertoire du serveur Courriel');
define('_JNEWS_LIST_T_TEMPLATE', 'Template');
if(!defined('_JNEWS_NO_MAILING_ENTERED')) define('_JNEWS_NO_MAILING_ENTERED', 'Pas de courriel fourni');
if(!defined('_JNEWS_NO_LIST_ENTERED')) define('_JNEWS_NO_LIST_ENTERED', 'Pas de liste fournie');
if(!defined('_JNEWS_SENT_MAILING')) define('_JNEWS_SENT_MAILING', 'Courriels envoyés');
define('_JNEWS_SELECT_FILE', 'Merci de sélectionner un fichier ');
define('_JNEWS_LIST_IMPORT', ' Vérifier les listes auxquelles vous voulez que les abonnés soient associés.');
define('_JNEWS_PB_QUEUE', ' Abonné ajouté mais un problème est survenu pour le/la relier aux listes. Merci de vérifier manuellement.');
define('_JNEWS_UPDATE_MESS', '');
define('_JNEWS_UPDATE_MESS1', 'Mise à jour hautement recommandée!');
define('_JNEWS_UPDATE_MESS2', 'Correctif(patch) et petites corrections.');
define('_JNEWS_UPDATE_MESS3', 'Nouvelle version.');
define('_JNEWS_UPDATE_MESS5', 'Joomla 1.5 est requis pour mettre à jour.');
define('_JNEWS_UPDATE_IS_AVAIL', ' est disponible ! ');
define('_JNEWS_NO_MAILING_SENT', 'Aucun courriel envoyé ! ');
define('_JNEWS_SHOW_LOGIN', 'Afficher le formulaire d\'enregistrement');
define('_JNEWS_SHOW_LOGIN_TIPS', 'Sélectionner Oui pour montrer le formulaire d\'enregistrement depuis le frontend du panneau de configuration d\'jNews pour permettre aux utilisateurs de s\'enregistrer sur le site web.');
define('_JNEWS_LISTS_EDITOR', 'Éditeur de description des listes');
define('_JNEWS_LISTS_EDITOR_TIPS', 'Sélectionner Oui pour utiliser un éditeur HTML pour éditer le champ description des listes.');
define('_JNEWS_SUBCRIBERS_VIEW', 'Voir les abonnés');

//News since 1.0.2
define('_JNEWS_FRONTEND_SETTINGS', 'Paramètres du frontend');
define('_JNEWS_SHOW_LOGOUT', 'Montrer le bouton de déconnexion');
define('_JNEWS_SHOW_LOGOUT_TIPS', 'Sélectionner Oui pour afficher un bouton de déconnexion dans le panneau de configuration du Front End d\'jNews.');

//News since 1.0.3 CB integration
define('_JNEWS_CONFIG_INTEGRATION', 'Intégration');
define('_JNEWS_CB_INTEGRATION', 'Intégration de Community Builder');
define('_JNEWS_INSTALL_PLUGIN', 'Plugin de Community Builder (Intégration d\'jNews) ');
define('_JNEWS_CB_PLUGIN_NOT_INSTALLED', 'Le plugin pour Community Builder d\'jNews n\'est pas encore installé !');
define('_JNEWS_CB_PLUGIN', 'Listes à l\'enregistrement');
define('_JNEWS_CB_PLUGIN_TIPS', 'Sélectionner Oui pour afficher les listes d\'envoi dans le formulaire d\'enregistrement de Community builder');
define('_JNEWS_CB_LISTS', 'Listes des identifiants');
define('_JNEWS_CB_LISTS_TIPS', 'Ceci est un champ obligatoire. Entrez l\'identifiant numérique des listes auxquelles vous souhaitez permettre aux utilisateurs de s\'abonner, séparés par une virgule, (0 montrer toutes les listes)');
define('_JNEWS_CB_INTRO', 'Texte d\'introduction');
define('_JNEWS_CB_INTRO_TIPS', 'Le texte qui apparaîtra avant les listes. Laisser vide pour ne rien afficher. Utiliser cb_pretext pour la disposition CSS.');
define('_JNEWS_CB_SHOW_NAME', 'Afficher le nom des listes');
define('_JNEWS_CB_SHOW_NAME_TIPS', 'Sélectionner si afficher ou non le nom des listes après l\'introduction.');
define('_JNEWS_CB_LIST_DEFAULT', 'Vérifier les listes par défaut');
define('_JNEWS_CB_LIST_DEFAULT_TIPS', 'Sélectionner si oui ou non vous voulez les cases à cocher pour chaque liste choisie par défaut.');
define('_JNEWS_CB_HTML_SHOW', 'Montrer recevoir en HTML');
define('_JNEWS_CB_HTML_SHOW_TIPS', 'Indiquez Oui si vous autorisez les utilisateurs à choisir s\'ils veulent ou non recevoir les courriels en HTML. Indiquer Non pour utiliser par défaut la réception des courriels en html.');
define('_JNEWS_CB_HTML_DEFAULT', 'Recevoir en HTML par défaut');
define('_JNEWS_CB_HTML_DEFAULT_TIPS', 'Renseignez cette option pour afficher la configuration des envois en HTML par défaut. Si Recevoir en HTML par défaut est positionné sur Non, alors cette option sera par défaut.');

// Since 1.0.4
define('_JNEWS_BACKUP_FAILED', 'Les fichiers n\'ont pas pu être sauvegardés ! Fichiers non remplacés.');
define('_JNEWS_BACKUP_YOUR_FILES', 'L\'ancienne version des fichiers a été sauvegardée dans le répertoire suivant :');
define('_JNEWS_SERVER_LOCAL_TIME', 'Serveur local de temps');
define('_JNEWS_SHOW_ARCHIVE', 'Montrer le bouton Archive');
define('_JNEWS_SHOW_ARCHIVE_TIPS', 'Sélectionnez Oui pour montrer le bouton Archive dans le listing des Infolettres du front end');
define('_JNEWS_LIST_OPT_TAG', 'Tags');
define('_JNEWS_LIST_OPT_IMG', 'Images');
define('_JNEWS_LIST_OPT_CTT', 'Contenu');
define('_JNEWS_INPUT_NAME_TIPS', 'Entrez votre nom complet (Prénom en premier)');
define('_JNEWS_IP_TIPS', 'Votre adresse IP');
define('_JNEWS_INPUT_EMAIL_TIPS', 'Entrez votre addresse courriel (Vérifiez que l\'adresse courriel est valide si vous voulez recevoir nos courriels.)');
define('_JNEWS_RECEIVE_HTML_TIPS', 'Choisissez Oui si vous voulez recevoir les courriels au format HTML - Non pour recevoir seulement les courriels au format texte');
define('_JNEWS_TIME_ZONE_ASK_TIPS', 'Indiquez votre fuseau horaire.');

// Since 1.0.5
define('_JNEWS_FILES', 'Fichiers');
define('_JNEWS_FILES_UPLOAD', 'Importer');
define('_JNEWS_MENU_UPLOAD_IMG', 'Importer Images');
define('_JNEWS_TOO_LARGE', 'La taille du fichier est trop importante. Le maximum autorisé est ');
define('_JNEWS_MISSING_DIR', 'Le répertoire de destination n\'existe pas');
define('_JNEWS_IS_NOT_DIR', 'Le répertoire de destination n\'existe pas ou est un fichier.');
define('_JNEWS_NO_WRITE_PERMS', 'Le répertoire de destination n\'a pas les droits en écriture.');
define('_JNEWS_NO_USER_FILE', 'Vous n\'avez pas sélectionné de fichiers pour l\'importation.');
define('_JNEWS_E_FAIL_MOVE', 'Impossible de déplacer le fichier.');
define('_JNEWS_FILE_EXISTS', 'Le répertoire de destination existe déjà.');
define('_JNEWS_CANNOT_OVERWRITE', 'Le répertoire de destination existe déjà et il est impossible de l\'écraser.');
define('_JNEWS_NOT_ALLOWED_EXTENSION', 'L\'extention du fichier n\'est pas autorisé.');
define('_JNEWS_PARTIAL', 'Le fichier a été partiellement importé.');
define('_JNEWS_UPLOAD_ERROR', 'Erreur d\'importation :');
define('_JNEWS_DEV_NO_DEF_FILE', 'Le fichier a été partiellement importé.');
define('_JNEWS_CONTENTREP', '{tag:subscriptions} = Ceci sera remplacé par les liens de souscription.' .
		' Ceci est <strong>nécessaire</strong> pour qu\'jNews fonctionne correctement.<br />' .
		'Si vous placez n\'importe quel autre contenu dans ce cadre il sera affiché dans tous les envois correspondants à cette liste.' .
		' <br />Ajouter votre message de souscription à la fin.  jNews ajoutera automatiquement un lien pour que les utilisateurs puissent modifier leurs informations et un lien pour se désabonner de la liste.');

// since 1.0.6
define('_JNEWS_NOTIFICATION', 'Notification');  // shortcut for Courriel notification
define('_JNEWS_NOTIFICATIONS', 'Notifications');
define('_JNEWS_USE_SEF', 'SEF dans les envois');
define('_JNEWS_USE_SEF_TIPS', 'Il est recommandé de choisir non. Cependant si vous voulez que l\'url incluse dans vos envois utilise le mode SEF choisissez Oui.' .
		' <br /><b>Les liens fonctionneront de la même manière pour l\'une ou l\'autre des options. Rien n\'assurera que les liens dans les envois fonctionneront toujours si vous changez votre SEF.</b> ');
define('_JNEWS_ERR_NB', 'Erreur N° : ERR');
define('_JNEWS_ERR_SETTINGS', 'Paramètres de gestion des erreurs');
define('_JNEWS_ERR_SEND', 'Envoyer un rapport d\'erreur');
define('_JNEWS_ERR_SEND_TIPS', 'Si vous voulez qu\'jNews s\'améliore, sélectionnez Oui. Cela nous enverra un rapport d\'erreur. Ainsi, vous même n\'avez plus besoin de rapporter les bugs  ;-) <br /> <b>AUCUNE INFORMATION PRIVEE N\'EST ENVOYEE</b>. Nous ne savons même pas de quel site Web l\'erreur provient. Nous envoyons seulement des informations sur jNews, l\'installation PHP et les requêtes SQL. ');
define('_JNEWS_ERR_SHOW_TIPS', 'Choississez Oui pour afficher le nombre d\'erreurs à l\'écran. Utilisé principalement à des fins de débogage. ');
define('_JNEWS_ERR_SHOW', 'Afficher erreurs');
define('_JNEWS_LIST_SHOW_UNSUBCRIBE', 'Afficher les liens de désabonnement');
define('_JNEWS_LIST_SHOW_UNSUBCRIBE_TIPS', 'Sélectionner Oui pour afficher les liens de désabonnement en bas des courriels pour permettre aux utilisateurs de modifier leurs inscriptions. <br /> Non désactive le bas de page et les liens.');
define('_JNEWS_UPDATE_INSTALL', '<span style="color: rgb(255, 0, 0);">IMPORTANT AVERTISSEMENT!</span> <br />Si vous mettez à jour votre précendente installation d\'jNews, vous avez besoin de mettre à jour votre structure de base de données en cliquant sur le bouton suivant (Vos données resteront en intégralité)');
define('_JNEWS_UPDATE_INSTALL_BTN', 'Mettre à jour les tables et la configuration');
define('_JNEWS_MAILING_MAX_TIME', 'Délai d\'attente maximum ');
define('_JNEWS_MAILING_MAX_TIME_TIPS', 'Définissez le temps maximum pour que chaque lot de courriels soit envoyé par la file d\'attente. valeur recommandée : entre 30 s et 2 mins.');

// virtuemart integration beta
define('_JNEWS_VM_INTEGRATION', 'Integration à VirtueMart');
define('_JNEWS_VM_COUPON_NOTIF', 'Identifiant de notification du coupon');
define('_JNEWS_VM_COUPON_NOTIF_TIPS', 'Spécifiez le numéro d\'identifiant de la liste que vous voulez utiliser pour envoyer les coupons à vos clients.');
define('_JNEWS_VM_NEW_PRODUCT', 'Identifiant de notification de nouveaux produits');
define('_JNEWS_VM_NEW_PRODUCT_TIPS', 'Spécifiez le numéro d\'identifiant de la liste que vous voulez utiliser pour envoyer la notification de nouveaux produits.');


// since 1.0.8
// create forms for subscriptions
define('_JNEWS_FORM_BUTTON', 'Créer un formulaire');
define('_JNEWS_FORM_COPY', 'Code HTML');
define('_JNEWS_FORM_COPY_TIPS', 'Copiez le code HTML généré dans votre page HTML.');
define('_JNEWS_FORM_LIST_TIPS', 'Sélectionnez la liste que vous voulez inclure dans votre formulaire');
// update messages
define('_JNEWS_UPDATE_MESS4', 'Ceci ne peut pas être mis à jour automatiquement.');
define('_JNEWS_WARNG_REMOTE_FILE', 'Aucun moyen d\'obtenir le dossier à distance .');
define('_JNEWS_ERROR_FETCH', 'Erreur lors de la recherche du fichier.');

define('_JNEWS_CHECK', 'Vérifier');
define('_JNEWS_MORE_INFO', 'Plus d\'informations');
define('_JNEWS_UPDATE_NEW', 'Passer à la nouvelle version');
define('_JNEWS_UPGRADE', 'Passer à un produit avancé');
define('_JNEWS_DOWNDATE', 'Retour à la version précedente');
define('_JNEWS_DOWNGRADE', 'Retour au produit de base');
define('_JNEWS_REQUIRE_JOOM', 'Requiert Joomla');
define('_JNEWS_TRY_IT', 'Essayez le !');
define('_JNEWS_NEWER', 'Nouveau');
define('_JNEWS_OLDER', 'Ancien');
define('_JNEWS_CURRENT', 'Courant');

// since 1.0.9
define('_JNEWS_CHECK_COMP', 'Essayer un des autres composants');
define('_JNEWS_MENU_VIDEO', 'Tutoriels Vidéo');
define('_JNEWS_AUTO_SCHEDULE', 'Plannification');
define('_JNEWS_SCHEDULE_TITLE', 'Paramètres de la fonction de plannification automatique');
define('_JNEWS_ISSUE_NB_TIPS', 'Nombre de questions générées automatiquement par le système ');
define('_JNEWS_SEL_ALL', 'Tous les envoies');
define('_JNEWS_SEL_ALL_SUB', 'Toutes les listes');
define('_JNEWS_INTRO_ONLY_TIPS', 'Si vous cochez cette case, seule l\'introduction de votre article sera insérée dans vos envois avec un lien \'lire la suite\' vers l\'article entier sur votre site web.');
define('_JNEWS_TAGS_TITLE', 'Tag Contenu');
define('_JNEWS_TAGS_TITLE_TIPS', 'Copiez et collez ce tag dans vos envois à l\'endroit où vous voulez placer le contenu.');
define('_JNEWS_PREVIEW_EMAIL_TEST', 'Indiquez l\'adresse courriel pour envoyer un courriel de test');
define('_JNEWS_PREVIEW_TITLE', 'Aperçu');
define('_JNEWS_AUTO_UPDATE', 'Notification de nouvelle mise à jour');
define('_JNEWS_AUTO_UPDATE_TIPS', 'Sélectionnez Oui si vous voulez être averti des nouvelles mises à jour pour votre composant. <br />IMPORTANT!! Afficher astuces doit être activé pour que cela fonctionne.');

// since 1.1.0
define('_JNEWS_LICENSE', 'Information sur la licence');


// since 1.1.1
define('_JNEWS_NEW', 'Nouveau');
define('_JNEWS_SCHEDULE_SETUP', 'Pour envoyer des réponses automatiques, vous avez besoin d\'installer le planificateur dans la configuration.');
define('_JNEWS_SCHEDULER', 'Tâches planifiés');
define('_JNEWS_jnews_CRON_DESC', 'Si vous n\'avez pas accès au gestionnaire des tâches Cron de votre site internet, vous pouvez vous enregistrer à un compte libre d\'jNews Cron à :');
define('_JNEWS_CRON_DOCUMENTATION', 'Vous pouvez trouvez des informations supplémentaires sur l\'installation du planificateur d\'jNews à l\'adresse suivante :');
define('_JNEWS_CRON_DOC_URL', '<a href="http://www.joobi.co/index.php?option=com_content&view=article&id=4249&catid=29&Itemid=72"
 target="_blank">http://www.joobi.co/index.php?option=com_content&Itemid=72&view=category&layout=blog&id=29&limit=60</a>');
define( '_JNEWS_QUEUE_PROCESSED', 'File d\'attente traitée avec succès...');
define( '_JNEWS_ERROR_MOVING_UPLOAD', 'Erreur lors du déplacement du fichier importé');

//since 1.1.4
define( '_JNEWS_SCHEDULE_FREQUENCY', 'Fréquence du planificateur');
define( '_JNEWS_CRON_MAX_FREQ', 'Fréquence maximum du planificateur');
define( '_JNEWS_CRON_MAX_FREQ_TIPS', 'Spécifier la fréquence maximale à laquelle le planificateur peut fonctionner (en minutes). Cela va limiter le planificateur même si la tâche cron est plus fréquente.');
define( '_JNEWS_CRON_MAX_EMAIL', 'Courriels maximum par tâche');
define( '_JNEWS_CRON_MAX_EMAIL_TIPS', 'Spécifier le nombre maximum de courriels envoyés par tâche. If this is set to O the maximim emails per task will be 1');
define( '_JNEWS_CRON_MINUTES', ' minutes');
define( '_JNEWS_SHOW_SIGNATURE', 'Montrer le pied de page du courriel');
define( '_JNEWS_SHOW_SIGNATURE_TIPS', 'Si vous voulez ou non promouvoir jNews dans le pied de page de vos courriels.');
define( '_JNEWS_QUEUE_AUTO_PROCESSED', 'Réponses automatiques traitées avec succès...');
define( '_JNEWS_QUEUE_NEWS_PROCESSED', 'Infolettres programmées traitées avec succès...');
define( '_JNEWS_MENU_SYNC_USERS', 'Synchronisation des utilisateurs');
define( '_JNEWS_SYNC_USERS_SUCCESS', 'Synchronisation des utilisateurs réussie!');

// compatibility with Joomla 15
if (!defined('_BUTTON_LOGOUT')) define( '_BUTTON_LOGOUT', 'Déconnexion');
if (!defined('_CMN_YES')) define( '_CMN_YES', 'Oui');
if (!defined('_CMN_NO')) define( '_CMN_NO', 'Non');
if (!defined('_HI')) define( '_HI', 'Bonjour');
if (!defined('_CMN_TOP')) define( '_CMN_TOP', 'Haut');
if (!defined('_CMN_BOTTOM')) define( '_CMN_BOTTOM', 'Bas');
//if (!defined('_BUTTON_LOGOUT')) define( '_BUTTON_LOGOUT', 'Déconnexion');

// For include title only or full article in content item tab in infolettre edit - p0stman911
define('_JNEWS_TITLE_ONLY_TIPS', 'Si vous sélectionnez ceci, seul le titre de l\'article sera inséré dans l\'envoi comme lien vers l\'article entier situé sur votre site.');
define('_JNEWS_TITLE_ONLY', 'Titre seul');
define('_JNEWS_FULL_ARTICLE_TIPS', 'Si vous sélectionnez ceci l\'article entier sera inséré dans votre envoi');
define('_JNEWS_FULL_ARTICLE', 'Article entier');
define('_JNEWS_CONTENT_ITEM_SELECT_T', 'Sélectionnez un article à insérer dans votre message. <br />Copiez et collez le <b>tag de contenu</b> dans votre Infolettre. Vous pouvez choisir d\'avoir le texte entier, une introduction seule ou le titre seul (0, 1 ou 2 respectivement). ');
define('_JNEWS_SUBSCRIBE_LIST2', 'Listes d\'envois');

// smart-infolettre function
define('_JNEWS_AUTONEWS', 'Smart-Infolettre');
define('_JNEWS_MENU_AUTONEWS', 'Smart-Infolettres');
define('_JNEWS_AUTO_NEWS_OPTION', 'Options Smart-Infolettre');
define('_JNEWS_AUTONEWS_FREQ', 'Fréquence des Infolettres');
define('_JNEWS_AUTONEWS_FREQ_TIPS', 'Spécifiez la fréquence à laquelle vous voulez envoyer les smart-infolettre.');
define('_JNEWS_AUTONEWS_SECTION', 'Section Article');
define('_JNEWS_AUTONEWS_SECTION_TIPS', 'Spécifiez la section à partir de laquelle vous voulez choisir les articles.');
define('_JNEWS_AUTONEWS_CAT', 'Catégorie Article');
define('_JNEWS_AUTONEWS_CAT_TIPS', 'Spécifiez la catégorie à partir de laquelle vous voulez choisir les articles (Toutes pour tous les articles de la section).');
define('_JNEWS_SELECT_SECTION', 'Sélectionner une section');
define('_JNEWS_SELECT_CAT', 'Toutes les categories');
define('_JNEWS_AUTO_DAY_CH8', 'Trimestriel');
define('_JNEWS_AUTONEWS_STARTDATE', 'Date de début');
define('_JNEWS_AUTONEWS_STARTDATE_TIPS', 'Spécifiez la date à laquelle vous souhaitez débuter les envois de Smart Infolettre.');
define('_JNEWS_AUTONEWS_TYPE', 'Rendu du contenu');// how we see the content which is included in the infolettre
define('_JNEWS_AUTONEWS_TYPE_TIPS', 'Article Entier: inclura l\'article entier dans la infolettre.<br />' .
		'Intro seulement: inclura seulement l\'introduction de l\'article dans la infolettre.<br/>' .
		'Titre seulement: inclura seulement le titre de l\'article dans la infolettre.');
define('_JNEWS_TAGS_AUTONEWS', '[SMARTNEWSLETTER] = Ceci sera remplacé par la Smart-infolettre.');

//since 1.1.3
define('_JNEWS_MALING_EDIT_VIEW', 'Créer / Voir les envois');
define('_JNEWS_LICENSE_CONFIG', 'Licence');
define('_JNEWS_ENTER_LICENSE', 'Enter licence');
define('_JNEWS_ENTER_LICENSE_TIPS', 'Entrez votre numéro de licence et sauvegardez-le.');
define('_JNEWS_LICENSE_SETTING', 'Paramètres licence');
define('_JNEWS_GOOD_LIC', 'Votre licence est valide.');
define('_JNEWS_NOTSO_GOOD_LIC', 'Votre licence n\'est pas valable: ');
define('_JNEWS_PLEASE_LIC', 'Merci de contacter l\'assistance jNews pour mettre votre licence à jour (license@joobi.co ).');

define('_JNEWS_DESC_PLUS', 'jNews Plus is the first sequencial auto-responders for Joomla CMS.  ' . _JNEWS_FEATURES);
define('_JNEWS_DESC_PRO', 'jNews PRO the ultimate envoie system for Joomla CMS.  ' . _JNEWS_FEATURES);

//since 1.1.4
define('_JNEWS_ENTER_TOKEN', 'Enter token');
define('_JNEWS_ENTER_TOKEN_TIPS', 'Please enter your token number you received by courriel when you purchased jNews. ');
define('_JNEWS_jnews_SITE', 'jNews site:');
define('_JNEWS_MY_SITE', 'My site:');
define( '_JNEWS_LICENSE_FORM', ' ' .
 		'Click here to go to the license form.</a>');
define('_JNEWS_PLEASE_CLEAR_LICENSE', 'Please clear the license field so it is empty and try again.<br />  If the problem persists, ');
define( '_JNEWS_LICENSE_SUPPORT', 'If you still have questions, ' . _JNEWS_PLEASE_LIC);
define( '_JNEWS_LICENSE_TWO', 'you can get your license manual by entering the token number and site URL (which is highlighted in green at the top of this page) in the License form. '
			. _JNEWS_LICENSE_FORM . '<br /><br/>' . _JNEWS_LICENSE_SUPPORT);
define('_JNEWS_ENTER_TOKEN_PATIENCE', 'After saving your token a license will be generated automatically. ' .
		' Usually the token is validated in 2 minutes.  However, in some cases it can take up to 15 minutes.<br />' .
		'<br />Check back this control panel in few minutes.  <br /><br />' .
						     'If you didn\'t receive a valid license key in 15 minutes, '. _JNEWS_LICENSE_TWO);
define( '_JNEWS_ENTER_NOT_YET', 'Your token has not yet been validated.');
define( '_JNEWS_UPDATE_CLICK_HERE', 'Pleae visit <a href="http://www.joobi.co" target="_blank">www.joobi.co</a> to download the newest version.');
//define( '_JNEWS_NOTIF_UPDATE', 'To be notified of new updates enter your courriel address and click subscribe ');

define('_JNEWS_THINK_PLUS', 'If you want more out of your envoie system think Plus!');
define('_JNEWS_THINK_PLUS_1', 'Sequential auto-responders');
define('_JNEWS_THINK_PLUS_2', 'Schedule the delivery of your infolettre for a predefined date');
define('_JNEWS_THINK_PLUS_3', 'No more server limitation');
define('_JNEWS_THINK_PLUS_4', 'and much more...');


//since 1.2.2
define( '_JNEWS_LIST_ACCESS', 'Accès liste');
define( '_JNEWS_INFO_LIST_ACCESS', 'Indiquez quel groupe d\'utilisateurs peut voir et s\'inscrire à cette liste');
define( 'JNEWS_NO_LIST_PERM', 'Vous n\'avez pas une permission suffisante pour vous inscrire à cette liste');

//Archive Configuration
 define('_JNEWS_MENU_TAB_ARCHIVE', 'Archivage');
 define('_JNEWS_MENU_ARCHIVE_ALL', 'Archiver tout');

//Archive Lists
 define('_JNEWS_FREQ_OPT_0', 'Aucune');
 define('_JNEWS_FREQ_OPT_1', 'Hebdomadaire');
 define('_JNEWS_FREQ_OPT_2', 'Toutes les 2 semaines');
 define('_JNEWS_FREQ_OPT_3', 'Mensuel');
 define('_JNEWS_FREQ_OPT_4', 'Trimestriel');
 define('_JNEWS_FREQ_OPT_5', 'Annuel');
 define('_JNEWS_FREQ_OPT_6', 'Autre');

define('_JNEWS_DATE_OPT_1', 'Date de création');
define('_JNEWS_DATE_OPT_2', 'Date de modification');

define('_JNEWS_ARCHIVE_TITLE', 'Définition de la fréquence d\'auto-archivage');
define('_JNEWS_FREQ_TITLE', 'Fréquence');
define('_JNEWS_FREQ_TOOL', 'Définit à quelle fréquence vous souhaitez que l\'Archive Manager archive le contenu de votre site web.');
define('_JNEWS_NB_DAYS', 'Nombre de jours');
define('_JNEWS_NB_DAYS_TOOL', 'Ceci est valable uniquement pour le choix \'Autre\' ! Merci de préciser le nombre de jours entre chaque archivage.');
define('_JNEWS_DATE_TITLE', 'Type date');
define('_JNEWS_DATE_TOOL', 'Define if the archived should be done on the created date or modified date.');

define('_JNEWS_MAINTENANCE_TAB', 'Maintenance settings');
define('_JNEWS_MAINTENANCE_FREQ', 'Maintenance frequency');
define( '_JNEWS_MAINTENANCE_FREQ_TIPS', 'Specify the frequency at which you want the maintenance routine to run.');
define( '_JNEWS_CRON_DAYS', 'hour(s)');

define( '_JNEWS_LIST_NOT_AVAIL', 'There is no list available.');
define( '_JNEWS_LIST_ADD_TAB', 'Add/Edit');

define( '_JNEWS_LIST_ACCESS_EDIT', 'Ajouter/Editer un emailing');
define( '_JNEWS_INFO_LIST_ACCESS_EDIT', 'Indiquez quel groupe d\'utilisateurs peut ajouter ou modifier un nouvel envoi pour cette liste');
define( '_JNEWS_MAILING_NEW_FRONT', 'Créer un nouvel emailing');

define('_JNEWS_AUTO_ARCHIVE', 'Auto-Archive');
define('_JNEWS_MENU_ARCHIVE', 'Auto-Archive');

//Extra tags:
define('_JNEWS_TAGS_ISSUE_NB', '{tag:issuenb} = Cela sera remplacé par le numéro de l\'infolettre.');
define('_JNEWS_TAGS_DATE', '{tag:date} = Cela sera remplacé par la date d\'envoi.');
define('_JNEWS_TAGS_CB', '[CBTAG:{field_name}] = Cela sera remplacé par la valeur récupérée depuis le champ Community Builder : p.ex. [CBTAG:firstname] ');
define( '_JNEWS_MAINTENANCE', 'Joobi Care');


define('_JNEWS_THINK_PRO', 'When you have professional needs, you use professional components!');
define('_JNEWS_THINK_PRO_1', 'Smart-Infolettres');
define('_JNEWS_THINK_PRO_2', 'Define access level for your list');
define('_JNEWS_THINK_PRO_3', 'Define who can edit/add envoies');
define('_JNEWS_THINK_PRO_4', 'More tags: add your CB fields');
define('_JNEWS_THINK_PRO_5', 'Joomla contents Auto-archive');
define('_JNEWS_THINK_PRO_6', 'Database optimization');

define('_JNEWS_LIC_NOT_YET', 'Your license is not yet valid.  Please check the license Tab in the configuration panel.');
define('_JNEWS_PLEASE_LIC_GREEN', 'Make sure to provide the green information at the top of the tab to our support team.');

define('_JNEWS_FOLLOW_LINK', 'Get Your License');
define( '_JNEWS_FOLLOW_LINK_TWO', 'You can get your license by entering the token number and site URL (which is highlighted in green at the top of this page) in the License form. ');
define( '_JNEWS_ENTER_TOKEN_TIPS2', ' Then click on Apply button in the top right menu.');
define( '_JNEWS_ENTER_LIC_NB', 'Enter your License');
define( '_JNEWS_UPGRADE_LICENSE', 'Upgrade Your License');
define( '_JNEWS_UPGRADE_LICENSE_TIPS', 'If you received a token to upgrade your license please enter it here, click Apply and proceed to number <b>2</b> to get your new license number.');


define( '_JNEWS_MAIL_ENCODING', 'Format d\'encodage');
define( '_JNEWS_MAIL_ENCODING_TIPS', 'Choisir le mode d\'encodage');

define( '_JNEWS_MAIL_FORMAT', 'Format d\'encodage');
define( '_JNEWS_MAIL_FORMAT_TIPS', 'Quel format d\'encodage voulez-vous utiliser pour vos envois, Texte seul ou MIME');
define( '_JNEWS_jnews_CRON_DESC_ALT', 'Si vous n\'avez pas accès à un gestionnaire cron sur votre site, vous pouvez utiliser le composant GRATUIT jCron.');


//since 1.3.1
define('_JNEWS_SHOW_AUTHOR', 'Afficher l\'auteur de l\'article');
define('_JNEWS_SHOW_AUTHOR_TIPS', 'Cliquez sur Oui si vous voulez ajouter le nom de l\'auteur des articles insérés dans les Envois');

//since 1.3.5
define('_JNEWS_REGWARN_NAME', 'Saisissez votre nom, svp.');
define('_JNEWS_REGWARN_MAIL', 'Saisissez une adresse courriel valide, svp.');

//since 1.5.6
define('_JNEWS_ADDEMAILREDLINK_TIPS', 'If you select Yes, the courriel of the user will be added as a parameter at the end of your redirect URL (the redirect link for your module or for an external jNews form).<br/>That can be usefull if you want to execute a special script in your redirect page.');
define('_JNEWS_ADDEMAILREDLINK', 'Add courriel to the redirect link');

//since 1.6.3
define('_JNEWS_ITEMID', 'ItemId');
define('_JNEWS_ITEMID_TIPS', 'Cet Itemid va être ajouté aux liens d\'jNews');

//since 1.6.5
define('_JNEWS_SHOW_JCALPRO', 'jCalPRO');
define('_JNEWS_SHOW_JCALPRO_TIPS', 'Afficher le tab pour ajouter des évènements du composant jCalPro <br/>(uniquement si jcalPro est installé sur votre site!)');
define('_JNEWS_JCALTAGS_TITLE', 'jCalPRO Tag:');
define('_JNEWS_JCALTAGS_TITLE_TIPS', 'Copier/coller ce tag dans votre Infolettre et il sera remplacé par l\'évènement sélectionné');
define('_JNEWS_JCALTAGS_DESC', 'Description :');
define('_JNEWS_JCALTAGS_DESC_TIPS', 'Sélectionnez OUI si vous voulez que la description de l\'évènement soit ajoutée');
define('_JNEWS_JCALTAGS_START', 'Date de début:');
define('_JNEWS_JCALTAGS_START_TIPS', 'Sélectionnez OUI si vous voulez que la date de début de l\'évènement soit ajoutée');
define('_JNEWS_JCALTAGS_READMORE', 'Lire la suite:');
define('_JNEWS_JCALTAGS_READMORE_TIPS', 'Sélectionnez OUI si vous voulez qu\'un lien pour lire la suite de de l\'évènement soit ajouté');
define('_JNEWS_REDIRECTCONFIRMATION', 'URL de redirection');
define('_JNEWS_REDIRECTCONFIRMATION_TIPS', 'Si vous avez besoin de courriel de confirmation, l\'utilisateur sera confirmé et redirigé vers cette URL s\'il clique sur le lien de confirmation.');

//since 2.0.0 compatibility with Joomla 1.5
if(!defined('_CMN_SAVE') and defined('CMN_SAVE')) define('_CMN_SAVE',CMN_SAVE);
if(!defined('_CMN_SAVE')) define('_CMN_SAVE','Enregistrer');
if(!defined('_NO_ACCOUNT')) define('_NO_ACCOUNT','Pas encore de compte&nbsp;?');
if(!defined('_CREATE_ACCOUNT')) define('_CREATE_ACCOUNT','Enregistrez-vous');
if(!defined('_NOT_AUTH')) define('_NOT_AUTH','Vous n\'êtes pas autorisé à voir cette ressource.');

//since 3.0.0
define('_JNEWS_DISABLETOOLTIP', 'Désactiver les infobulles');
define('_JNEWS_DISABLETOOLTIP_TIPS', 'Désactive les infobulles sur le frontend');
define('_JNEWS_MINISENDMAIL', 'Utiliser Mini SendMail');
define('_JNEWS_MINISENDMAIL_TIPS', 'Si votre serveur utilise Mini SendMail, choisissez cette option pour ne pas ajouter le nom de l\utilisateur dans l\entête de ce courriel');

//Since 3.1.5
define('_JNEWS_READMORE','Lire la suite...');
define('_JNEWS_VIEWARCHIVE','Cliquez ici');

//since 4.0.0
define('_JNEWS_SHOW_JLINKS','Link Tracking');
define('_JNEWS_SHOW_JLINKS_TIPS','Enables the integration with jLinks to be able to do link tracking for each links in the newsletter.');

//since 5.0.0
//fieldset for column configuration
define('_JNEWS_COLUMN','User-defined Columns');
define('_JNEWS_COL1_NAME', 'Column 1 Name');
define('_JNEWS_COL2_NAME', 'Column 2 Name');
define('_JNEWS_COL3_NAME', 'Column 3 Name');
define('_JNEWS_COL4_NAME', 'Column 4 Name');
define('_JNEWS_COL5_NAME', 'Column 5 Name');
define('_JNEWS_COLUMN1_REP', '{tag:profile nb=1} = This will be replaced by your user defined column 1');
define('_JNEWS_COLUMN2_REP', '{tag:profile nb=2} = This will be replaced by your user defined column 2');
define('_JNEWS_COLUMN3_REP', '{tag:profile nb=3} = This will be replaced by your user defined column 3');
define('_JNEWS_COLUMN4_REP', '{tag:profile nb=4} = This will be replaced by your user defined column 4');
define('_JNEWS_COLUMN5_REP', '{tag:profile nb=5} = This will be replaced by your user defined column 5');
//end of columns
//url
define('_JNEWS_URL_PASS','Password');
define('_JNEWS_URL_PASS_TIPS','Enter the password to be able to add a subscriber by entering the url. Append the catcher variable password in the URL.<br>(For Plus and PRO this code will used for captcha.)');
define('_JNEWS_URL_MES','Please subscribe through the Subscriber Module or subscribe through the frontend.');
define('_JNEWS_URL_PASS_WARN','(In the PRO If you change this password, please update the hidden password in your external form as well.)');
define('_JNEWS_ENABLE_CAPTCHA', 'Enable Captcha');
define('_JNEWS_ENABLE_CAPTCHA_TIPS','Enable captcha functionality in the subscriber module and in the subscription via external form in the PRO.');
//url
// subscription notification
define('_JNEWS_SUBSCRIPTION_NOTIFY','Send Subscription Notification');
define('_JNEWS_SUBSCRIPTION_NOTIFY_TIPS','Specify here if you want to send a subscription notification to the list owner or not.');
define('_JNEWS_SUBSCRIPTION_NOTIFY_MSG1','Un message d\'information a été envoyé à l\'administrateur.');
define('_JNEWS_SUBSCRIPTION_NOTIFY_MSG2','No subscription notification email sent.');
define('_JNEWS_NEW_SUB','jNews Newsletter Subscription');
define('_JNEWS_SUBSCRIPTION_NOTIFY_ERR','Unable in sending a subscription notification to the administrator.');
//subscription notification messages
//for captcha
define('_JNEWS_CAPTCHA_CAPTION','Code: ');
define('JNEWS_WRONG_CAPTCHA_ENTERED','<p style=\'text-align: justify;\'><b>CAPTCHA security code is incorrect or the information you provided are invalid.</b><br>(The security code is necessary to prevent automatic registrations by bots and to verify that registrations are made by a person.)<br><br><b><font color=#ff0000>Your subscription was not processed.</font></b><br><br>Please fill in your information and the security code more carefully and click the <b>Subscribe</b> button.<br><br>Thanks for your understanding.</p><br>');
define('_JNEWS_REGWARN_CAPTCHA','Enter the captcha code.');
define('_JNEWS_SUB_ERR','<br>Error in subscribing.');

//since 6.0.0
define('_JNEWS_MOOTOOLS_BTNTEXT' , 'Subscribe Here');
define('_JNEWS_QUEUE_SUBJECT','Subject');
define('_JNEWS_QUEUE_EMAIL','Email');
define('_JNEWS_QUEUE_PRIOR','Priority');
define('_JNEWS_QUEUE_ATT','Attempts');
define('_JNEWS_QUEUE_DEL', 'Delete');
define('_JNEWS_PROCESS_Q','Process Queue');
define('_JNEWS_CLEAN_Q','Clean Queue');
define('_JNEWS_SENDDATE','Send date');
define('_JNEWS_MAILING_Q','All Mailings in Queue');
define('_JNEWS_MENU_QUEUE', 'Queue');
define('_JNEWS_MENU_TEMPLATES','Templates');
define('_JNEWS_MENU_TAB_QUEUE' , 'Queue');
define('_JNEWS_Q_PROCESS' , 'Queue Configuration');
define('_JNEWS_MAX_Q','Maximum number of e-mails per batch');
define('_JNEWS_SUBS_LIST_LABEL' , 'This Newsletter will be sent to the subscribers of the following selected lists:');
define('_JNEWS_SUBS_LIST_CAMPAIGN' , 'This auto-responder will be sent to the subscribers of the following selected auto-responder:');
define('_JNEWS_SUBS_LIST_RECEIVE', 'Receive' );
define('_JNEWS_SUBS_LIST_TOALL', 'Select All' );
define('_JNEWS_SUBS_LIST_TONONE', 'None' );
define('_JNEWS_LIST_COLOR','Color');
define('_JNEWS_LIST_COLOR_TIP','Select the color for your list. It can be usefull for the statistics.');
define('_JNEWS_MENU_NEW', 'New');
define('_JNEWS_MENU_EDIT', 'Edit');
define('_JNEWS_MENU_APPLY', 'Apply');
define('_JNEWS_MENU_CANCEL', 'Cancel');
define('_JNEWS_MENU_TEMPLATE', 'Template');
define('_JNEWS_HTML_VERSION', 'HTML Version');
define('_JNEWS_NONHTML_VERSION', 'Non-HTML Version');
define('_JNEWS_TAG_NAME_DESC' , 'This will be replaced by the name the subscriber entered, you will be sending personalized email when using this.');
define('_JNEWS_TAG_FNAME_DESC' , 'This will be replaced by the FIRST name of the subscriber entered.');
define('_JNEWS_TAG_ISSUENB_DESC' , 'This will be replaced by the issue number of the newsletter.');
define('_JNEWS_TAG_DATE_DESC' , 'This will be replaced by the sent date.');
define('_JNEWS_TAG_CBNAME' , '[CBTAG:{field_name}]');
define('_JNEWS_TAG_CBNAME_DESC' , 'This will be replaced by the value taken from the Community Builder field: eg. [CBTAG:firstname] ');
define('_JNEWS_TAG_LOADMODINFO_DESC' , 'This will be replaced by the Joomla module where id is equal to id of the joomla module. For example {module=1}.<br /> The modules can only be loaded through the cron task. <br /> ');
define('_JNEWS_DATETIME' , 'Date and Time');
define('_JNEWS_TEMPLATE_COPY' , '_copy');
define('_JNEWS_TEMPLATE_DEFAULT_NODEL' , 'You cannot delete a default template!');
define('_JNEWS_TEMPLATE_DEFAULT_SUCCS' , 'Successfully set to default!');
define('_JNEWS_TEMPLATE' , 'Template');
define('_JNEWS_TEMPLATES' , 'Templates');
define('_JNEWS_AR' , 'Auto-responder');
define('_JNEWS_SELCT_MAILINGLIST', 'Please select a list in the List tab in order to add a mailing.');
define('_JNEWS_SELCT_MAILINGCAMPAIGN', 'Please select a campaign in the List tab in order to add a mailing.');
define('_JNEWS_TEMPLATE_AVAIL', 'All Available Templates');
define('_JNEWS_TEMPLATE_NAME', 'Name');
define('_JNEWS_TEMPLATE_NAME_T', 'Enter the name of the template.');
define('_JNEWS_TEMPLATE_NAMEKEY', 'Namekey');
define('_JNEWS_TEMPLATE_NAMEKEY_T', 'Enter the namekey of the template.');
define('_JNEWS_TEMPLATE_DESC', 'Description');
define('_JNEWS_TEMPLATE_DEFAULT', 'Default');
define('_JNEWS_TEMPLATE_DEFAULT_T', 'Select "Yes" to set as the default template.');
define('_JNEWS_TEMPLATE_PUBLISH', 'Publish');
define('_JNEWS_TEMPLATE_PUBLISH_T', 'Select "Yes" to publish the template.');
define('_JNEWS_TEMPLATE_BG', 'Background Color');
define('_JNEWS_TEMPLATE_BG_T', 'Select the template background color.');
define('_JNEWS_TEMPLATE_UPLOAD', 'Upload Thumbnail');
define('_JNEWS_TEMPLATE_UPLOAD_T', 'Upload an image thumbnail of the template.');
define('_JNEWS_TEMPLATE_DESC_T', 'Enter the description of the template.');
define('_JNEWS_TEMPLATE_STYLE_TH1', 'Title h1');
define('_JNEWS_TEMPLATE_STYLE_TH2', 'Title h2');
define('_JNEWS_TEMPLATE_STYLE_TH3', 'Title h3');
define('_JNEWS_TEMPLATE_STYLE_TH4', 'Title h4');
define('_JNEWS_TEMPLATE_STYLE_UNSUB', 'Style for the Unsubscribe Link');
define('_JNEWS_TEMPLATE_STYLE_SUB', 'Style for the "Change Your Subscription" Link');
define('_JNEWS_TEMPLATE_STYLE_CONTENT', 'Style for the content area');
define('_JNEWS_TEMPLATE_STYLE_CHEAD', 'Style for the content title');
define('_JNEWS_TEMPLATE_STYLE_CREADMORE', 'Style for the read more link');
define('_JNEWS_TEMPLATE_STYLE_VONLINE', 'Style for the "View it online" Link');
define('_JNEWS_TEMPLATE_STYLE_NEW', 'Add a New Style');
define('_JNEWS_TEMPLATE_STYLE_NEWC', 'Name of the CSS Class');
define('_JNEWS_TEMPLATE_STYLE_NEWAPPLIED', 'CSS styles that will be applied to the class.');

//statistics & reports
define('_JNEWS_REPORTS_SUBS', 'Subscribers Reports');
define('_JNEWS_REPORTS_MAIL', 'Mailing Reports');
define('_JNEWS_REPORTS_LIST', 'List Reports');
define('_JNEWS_LIST_SUBCRIBERS', 'No. of Subscribers');
define('_JNEWS_LIST_UNSUBSCRIBERS', 'No. of Unsubscribers');
define('_JNEWS_LIST_CONFIRMED', 'No. of Confirmed Emails');
define('_JNEWS_LIST_UNCONFIRMED', 'No. of Unconfirmed Emails');
define('_JNEWS_LIST_SUB_DATE', 'Subscribed Date');
define('_JNEWS_MAILING_SEND_DATE','Send Date');
define('_JNEWS_MAILING_SUBJECT', 'Subject');
define('_JNEWS_MAILING_SENT_HTML','Sent in HTML');
define('_JNEWS_MAILING_SENT_TEXT','Sent in Text');
define('_JNEWS_MAILING_FAILED', 'Send Fails');
define('_JNEWS_MAILING_PENDING', 'Mail Pending');
define('_JNEWS_MAILING_BOUNCES','Bounces');
define('_JNEWS_MAILING_SENT', 'Total Sent');
//Mailing Reports
define('_JNEWS_MAIL_GRAPH', 'Graph');
define('_JNEWS_MAIL_DETAILS', 'Details');
define('_JNEWS_MAIL_DETAILS_READ', 'HTML Read');
define('_JNEWS_MAIL_DETAILS_UNREAD', 'HTML Unread');
define('_JNEWS_MAIL_DETAILS_TEXT', 'TEXT Only');

//stats filters
define('_JNEWS_GROUP_PREDEFINED_DATE','Predefined Date');		//legend
define('_JNEWS_GROUP_SPECIFIED_DATE','Specified Date');
define('_JNEWS_LABEL_SET_INTERVAL', 'Set Interval');		//labels
define('_JNEWS_LABEL_DATE_RANGE','Date Range');
define('_JNEWS_LABEL_CURRENT_SERVER_TIME', 'Current Server Time');
define('_JNEWS_LABEL_REPORT_TYPE','Report Type');
define('_JNEWS_INTERVAL_DAILY','Daily');					//intervals
define('_JNEWS_INTERVAL_WEEKLY','Weekly');
define('_JNEWS_INTERVAL_MONTHLY', 'Monthly');
define('_JNEWS_INTERVAL_YEARLY','Yearly');
define('_JNEWS_DEFINED_RANGE_YESTERDAY','Yesterday');		//predefined range
define('_JNEWS_DEFINED_RANGE_TODAY', 'Today');
define('_JNEWS_DEFINED_RANGE_THIS_WEEK','This Week');
define('_JNEWS_DEFINED_RANGE_LAST_WEEK','Last Week');
define('_JNEWS_DEFINED_RANGE_LAST_TWO_WEEK','Last 2 Weeks');
define('_JNEWS_DEFINED_RANGE_THIS_MONTH','This Month');
define('_JNEWS_DEFINED_RANGE_LAST_MONTH','Last Month');
define('_JNEWS_DEFINED_RANGE_THIS_YEAR','This Year');
define('_JNEWS_DEFINED_RANGE_LAST_YEAR','Last Year');
define('_JNEWS_DEFINED_RANGE_TWO_YEARS_AGO','2 Years Ago');
define('_JNEWS_DEFINED_RANGE_3_YEARS_AGO','3 Years Ago');
define('_JNEWS_BUTTON_REFRESH','Refresh');				//buttons
define('_JNEWS_BUTTON_GENERATE','Generate');
define('_JNEWS_BUTTON_RESET', 'Reset');
define('_JNEWS_SPECIFIED_DATE_START','Start');			//specified date
define('_JNEWS_SPECIFIED_DATE_END','End');
define('_JNEWS_REPORT_LISTING','Listing');
define('_JNEWS_REPORT_GRAPH','Graph');
define('_JNEWS_REPORT_EXPORT','Export');
define('_JNEWS_SUBSCRIBERS_ALL_USERS', 'All Users');		//subscribers
define('_JNEWS_SUBSCRIBERS_REGISTERED', 'Registered');
define('_JNEWS_SUBSCRIBERS_GUESTS','Guests');
define('_JNEWS_REPORT_WARN_MESSAGE', 'Incomplete Date Selection in Specified Fieldset!');

//stats export
define('_JNEWS_STATS_EXPORT', 'Export');
define('_JNEWS_EXPORT_WARN_MESSAGE', 'No Data to be Exported');
define('_JNEWS_GRAPH_WARN_MESSAGE', 'No Data to be Displayed');
define('_JNEWS_REPORT_HEADER', 'Report');
define('_JNEWS_REPORT_HEADER_TO', 'to');
define('_JNEWS_PIE_PROCESS_WARN_MESSAGE', 'No Data for Mailing Process');
define('_JNEWS_PIE_FORMAT_WARN_MESSAGE', 'No Data for HTML/Text Format');

//stats graph labels
define('_JNEWS_GRAPH_LBL_HTML', 'HTML');
define('_JNEWS_GRAPH_LBL_TEXT', 'TEXT');
define('_JNEWS_GRAPH_TITLE_FORMAT', 'HTML/TEXT Format');
define('_JNEWS_GRAPH_PIE_TITLE_MAIL', 'Mailing Process');
define('_JNEWS_PIE_SUBS', 'Subscribers');
define('_JNEWS_PIE_UNSUBS', 'Unsubscribers');
define('_JNEWS_PIE_UNCONFIRMED', 'Unconfirmed');
define('_JNEWS_PIE_CONFIRMED', 'Confirmed');
define('_JNEWS_MAILING_SUBJECT_HEADER', 'Subject');


//Wizards
define('_JNEWS_WIZARD', 'Wizard');
define('_JNEWS_CHECKLISTFOUND', 'Please create your list first and be sure that it is published.');

define('_JNEWS_CHECKCAMPAIGNFOUND', 'Please create your campaign(list) first and be sure that it is published.');
define('_JNEWS_TEMPLATE_ALERT_NAMEKEY', 'Template must have a namekey!');
define('_JNEWS_LIST_GUIDE', '<strong>List Management:</strong> <br/>'.
       '<ul><li>The first thing you have to do to start with jNews is to create your list.</li>'.
       '<li>You will be able to subscribe users to this list and send one or more Newsletters.</li>'.
       '<li>You can specify here the basic information of the list including your <i><u>Sender Information</u></i>.</li>'.
       '<li>And be able to specify users or group of users who can subscribe to that list.</li>'.
       '<li>For <i>Plus</i> and <i>Pro</i> version you can specify what group of user or user who can add or edit mailings for this list.</li>'.
       '<li>For <i>Pro</i> version you have the option to send <i><u>Unsubscription</u></i> and <i><u>Subscription Notification</u></i> to the owner of the list or the admin of the site.</li></ul>');
define('_JNEWS_SUBSCRIBERS_GUIDE', '<strong>Subscriber Management:</strong> </br>' .
	    '<ul><li><strong>During Creation: </strong></li><br>'.
        '<ul><li>You can proceed here adding your subscribers.</li>'.
        '<li>Specify your <i><u>Subscriber Information</i></u></li>'.
        '<li>And select which <i><u>List</u></i> you want your subscriber to subscribe to, provided that you have created list.</li>'.
        '<li>You can Confirm your added subscriber to receive your newsletters.</li>'.
        '<li>You can also allow your subscriber to recieve the HTML format of your newsletter.</li>'.
        '<li><i><u>IP</u></i> field is added to automatically detect the IP of your subscriber from the frontend of your site. </li></ul></ul>'.
        '<ul><li><strong>Export Button</strong></li>' .
        '<ul><li>This allows you to <i><u>Export</u></i> your subscribers from all your lists or selected lists.</li></ul></ul>' .
        '<ul><li><strong>Import Button</strong></li>' .
        '<ul><li>This allows you to <i><u>Import</u></i> your subscribers to all your lists or selected lists.</li></ul></ul>');
define('_JNEWS_NEWSLETTER_GUIDE', '<strong>Newsletter Management:</strong> <br/>'.
        '<ul><li>Provided that you have created List(s) you can now proceed creating your <i><u>Newsletters</u></i>.</li>'.
        '<li>For the <i><u>Plus</u></i> version you can create <i><u>Scheduled Newsletter</u></i> and also <i><u>Autoresponder</u></i> or <i><u>Auto-responder</u></i> type of mailing.</li>'.
        '<li>For <i><u>PRO</u></i> you have the functionality with <i><u>Smart-Newsletter</u></i>, which takes your <i>latest created</i>, <i>modified</i> and <i>published articles</i> of your site.</li></ul>'.
        '<ul><li><strong>During Creation:</strong></li>'.
		'<ul><li><i><u>Newsletter Content Area</u></i> -> where you put all the contents of your Newsletter.</li>'.
		'<li><i><u>List Tab</u></i> -> the area where you can send the newsletter to one or more Lists.</li>'.
		'<li><i><u>Sender Tab</u></i> -> the area of the Sender Information Settings of your Newsletter.</li>'.
		'<li><i><u>Content Tab</u></i> -> the area where you can look for the contents of your site and specify which article to insert into your Newsletter.</li>'.
        '<li><i><u>Attachments</u></i> -> Newsletter Attachement Information area.</li></ul></ul>' .
        '<ul><li><strong>Unpublished Button</strong></li>' .
        '<ul><li>Enables you to unpublished your newsletter.</li></ul></ul>' .
        '<ul><li><strong>Preview Button</strong></li>' .
        '<ul><li>Preview the content and format of your newsletter.</li></ul></ul>' .
        '<ul><li><strong>Send Button</strong></li>' .
        '<ul><li>Enables you to manually send the newsletter to your list of subscribers.</li></ul></ul>' .
        '<ul><li><i>Note: You can only edit an unpublished newsletter.</i></li></ul>');
define('_JNEWS_AUTORESPONDER_GUIDE', '<strong>Autoresponder Management:</strong><br/>'.
		  '<ul><li>Provided that you have created <i><u>Auto-responder</u></i> type of list you can proceed creating your <i><u>Autoresponder</u></i>.</li>'.
		  '<li>During the creation process you can specify the <i><u>Number of Delays</u></i> for your autoresponder, after the previous one has been processed.</li>' .
		  '<li> The process is more or less the same on how to create your newsletter.</li></ul>');
define('_JNEWS_SMARTNEWSLETTER_GUIDE', '<strong>Smart-Newsletter Management:</strong> <br/>' .
		 '<ul><li>Provided that you have created <i>list(s)</i> and <i>latest created</i>, <i>modified</i> and <i>published article</i> on your site you can proceed creating <i><u>SmartNewsletter</u></i>.</li>'.
         '<li>The creation process is more or less the same with Newsletter Creation.</li>' .
         '<li>From the <i><u>Smart-Newsletter Tab</u></i> during creation you can specify your settings for the processing of your Smart-Newsletters.</li>');
define('_JNEWS_TEMPLATES_GUIDE', '<strong>Template Management:</strong><br><ul><li>Templates can be very useful in creating newsletter.</li>' .
		'<li>This view will allow you to create Templates for your newsletters</li>' .
		'<li><i><u>Default Template</u></i> will be applied to the newly created newsletter.</li>' .
		'<li><i><u>Inline CSS</u></i> of the template will be applied/inherited to the created newsletter.</li>' .
		'<li>You can also choose a <i><u>Background Color</u></i> that will be a background of the newsletter.</li>' .
		'<li>Note: Only newly created newsletter will get the html of the default template</li></ul>' .
		'<ul><strong>Default Button</strong>'.
		'<ul><li>Inorder to make your Template as the default template to be used in your newsletter you just need to click on this button.</li></ul></ul>');
define('_JNEWS_QUEUE_GUIDE','<strong>Queue Management:</strong><br/> ' .
		'<ul><li>This view enables you to see your <i><u>Queued Mailings</u></i>.' .
		'<li>These are your <i><u>Scheduled Newsletters</i></u>, <i><u>Autoresponders</i></u> and <i><u>Smart-Newsletters</i></u></li>'.
        '<li>The <i><u>Process Queue Button</i></u> will allow you to proces your queued mailings manually by just clicking the said button.</li>' .
        '<li>The <i><u>Reset S.N. Counter Button</i></u> will allow you to reset the <i>next send date</i> or <i>generated date</i> of your Smart-Newsletter.</li>' .
        '<li>The <i><u>Empty Queue Button</i></u> will allow you to clean the whole queue.</li></ul>');
define('_JNEWS_ABOUT_GUIDE','jnews');
define('_JNEWS_IMPORT_GUIDE','<strong>Import Management:</strong><br/>'.
         '<ul><li>Here you can import your subscribers to all your lists or to select lists.</li>'.
         '<li>By following the link given below, you can proceed importing your subscribers.</li>'.
         '<li><i>Note: You need to create first your lists before importing your subscribers.</i></li></ul>');
define('_JNEWS_CONFIGURATION_GUIDE','<strong>Configuration:</strong><br/>'.
        '<ul>All the jnews configuration settings can be done in this area.<br/><br/>'.
	    '<strong>Mail Tab:</strong>'.
	    '<ul><li>The area where you can define the Mail Settings and Sending Settings of jNews depending on your server requirements.</li></ul>'.
	    '<br/><strong>Subscribers Tab:</strong>'.
	    '<ul><li>The area where we can define the subscription settings both from the backend and frontend of your site.</li></ul>'.
	    '<br/><strong>Scheduler Tab:</strong>'.
	    '<ul><li>The area where we can specify the Scheduler Frequency so do with Maintenance Settings on the sending of your mailings.</li>
         <li>The Information entered on this area depends also on your server requirements or server limitation.</li></ul>'.
	    '<br/><strong>Logs & Stats Tab:</strong>'.
	    '<ul><li>The area to specify the Statistics Settings and Logs Settings.</li></ul>'.
	    '<br/><strong>Archive Tab:</strong>'.
	    '<ul><li>This is mainly used for the auto archive frequency.</li></ul>'.
	    '<br/><strong>Miscellaneous Tab:</strong>'.
	    '<ul><li>All the other settings and preferences can be found here.</li></ul>'.
	    '<br/><strong>Queue Tab:</strong>'.
	    '<ul><li>Mainly used for the Queue Management View (available for Plus and Pro Version).</li></ul>'.
	    '<br/><strong>License Tab:</strong>'.
	    '<ul><li>The area where we can validate the license by just following the steps presented.</li></ul></ul>');
define('_JNEWS_EMPTY_Q','Empty Queue');
define('_JNEWS_RESET_SN','Reset S.N. Counter');
define('_JNEWS_Q_M1','There are no emails in the queue.');
define('_JNEWS_INSTALL_CLICKSTART', 'Click here to get started!');
define('_JNEWS_INSTALL_DESC', 'Thank you for choosing jNews.<br><br>
jNews is a mailing lists, newsletters, auto-responders and follow up tool for communicating effectively with your users and customers.');
define('_JNEWS_INSTALL_ERRORN' , 'If you have error during the installation process, please refer to our');
define('_JNEWS_INSTALL_DOC' , 'documentation here.');
define('_JNEWS_INSTALL_SUCC' , 'Successfuly Installed.');
define('_JNEWS_INSTALL_STATUS_CONFIG' , 'jNews Configuration:');
define('_JNEWS_INSTALL_STATUS_PLUGIN' , 'jNews Plugin(Bot):');
define('_JNEWS_INSTALL_STATUS_MOD' , 'jNews Module:');
define('_JNEWS_INSTALL_UPDATES' , 'jNews Updates');
define('_JNEWS_STATS_GUIDE', '<strong>Mailing Reports: </strong><br/>'.
		'<ul> <li>It will generate a list of mailings sent based on the given date range. </li> ' .
		'<li>It will count the following: <ul><li> the no. of mails sent in HTML & Text Format,</li>' .
			'<li> no. of how many viewed the mails in HTML format, </li>' .
			'<li>how many mail sent that are failed, </li><li>still on-process (pending), ' .
			'</li><li>email bounced,</li> <li>and the total sent is the no. of emails sent on each mailing.</li> </ul></li></ul>'.
		'<strong>List Reports:</strong> <br/>'.
		'<ul> <li>It will generate a listing of List Names based on the date of subscriptions on a given date range. </li>' .
			'<li>It will list the following:  <ul><li>total no. of subscribers who made a subscription </li> ' .
			'<li>total no. of subscribers who unsubscribed, </li>' .
			'<li>total no. of confirmed and unconfirmed subscribers on each list type. </li>  </ul></li></ul>'.
		'<strong>Subscribers Report:</strong> <br/>'.
		'<ul> <li>It will generate a report on the total no. of subscribers on a given date range.</li> </ul>'.
		'<strong>How to Export the Report into CSV File:</strong>'.
		'<ul> <li>On each Reports (Mailing, List and Subscribers), an export icon is found at the upper right of each tab.</li>'.
		'<li>Click the export icon to export the file.</li></ul>'
		);
define('_JNEWS_TEMPLATE_ALIAS' , 'Alias');
define('_JNEWS_SEARCH' , 'Search');
define('_JNEWS_SEARCH_GO' , 'Go');
define('_JNEWS_SEARCH_RESET' , 'Reset');
define('_JNEWS_SENDER_LIST_INFO', 'Click to select sender from list' );
define('_JNEWS_FILTER_MAILING' , 'Select a Mailing ');
define('_JNEWS_MESSAGE_QUEUE' , 'All Mailings in the Queue ');
define('_JNEWS_FILTER_LIST' , 'Select Type');
define('_JNEWS_MAILING_TAG' , 'Tag');
define('_JNEWS_MAILING_TAGINSERT' , 'Insert');
define('_JNEWS_MAILING_TAG_INSTRUCT' , '<p>Select the desired tag to be added and click insert.<br> Note: <i>Make sure to place the cursor in the text editor where you want to insert.</i></p>');
define('_JNEWS_TAG_SUBSCRIPTION', '{tag:subscriptions}');
define('_JNEWS_TAG_UNSUBSCRIBE', '{tag:unsubscribe}');
define('_JNEWS_TAG_SUBSCRIPTION_DESC', 'This will be replaced by the defined constant "_JNEWS_CHANGE_EMAIL_SUBSCRIPTION" in the translation.');
define('_JNEWS_TAG_UNSUBSCRIBE_DESC', 'This will be replaced by the defined constant "_JNEWS_UNSUBSCRIBE" in the translation.');
define('_JNEWS_TAG_VIEWONLINETXT', '{viewonline:text here}');
define('_JNEWS_TAG_VIEWONLINE', 'view it in your browser');
define('_JNEWS_TAG_VIEWONLINE_DESC', 'This will be replaced by either the default text or what you put in the "text here" with a link.');

//since 1.1.0
define('_JNEWS_SHOW_CRON','Enable joobi cron');

define('_JNEWS_SHOW_CRON_TIPS','Enables the cron set up upon the installation of jNews.<br>This cron was set up in http://www.joobi.co and will be triggered every 15 minutes');
define('_JNEWS_CRON_FSETTINGS' , 'Cron Settings');

define('_JNEWS_INSTALL_ACAUPDATEMSG' , 'Do you want to import your database from Acajoom to jNews?');
define('_JNEWS_INSTALL_ACAUPDATEBTN' , 'Import Acajoom Data');
define('_JNEWS_INSTALL_ACAUPDATENOTE' , 'NOTE : This will transfer data stored from Acajoom tables to jNews tables.');

define('_JNEWS_MAILING_UPDATED' , 'Mailings successfully imported.');
define('_JNEWS_DETAIL_UPDATED' , 'Stats Details successfully imported');
define('_JNEWS_GLOBAL_UPDATED' , 'Stats Globals successfully imported');
define('_JNEWS_SUBSCRIBER_UPDATED' , 'Subscribers successfully imported');
define('_JNEWS_QUEUE_UPDATED' , 'Queues successfully imported');
define('_JNEWS_LISTSUBSCRIBER_UPDATED' , 'List Subscribers successfully imported');

define('_JNEWS_LIST_UPDATED_FAILED' , 'No Lists successfully imported');
define('_JNEWS_MAILING_UPDATED_FAILED' , 'No Mailings successfully imported');
define('_JNEWS_DETAIL_UPDATED_FAILED' , 'No Detailed Statistics successfully imported');
define('_JNEWS_GLOBAL_UPDATED_FAILED' , 'No Global Statistics successfully imported');
define('_JNEWS_SUBSCRIBER_UPDATED_FAILED' , 'No Subscribers successfully imported');
define('_JNEWS_QUEUE_UPDATED_FAILED' , 'No records successfully imported to Queue');
define('_JNEWS_LISTSUBSCRIBER_UPDATED_FAILED' , 'No records successfully imported to List Subscribers');

define('_JNEWS_LEGEND' , 'Legend');
define('_JNEWS_NOTVISIBLE', 'Not Visible');
define('_JNEWS_SCHEDULED', 'Scheduled');
define('_JNEWS_SUBSCRIBERS_UNREGISTERED', 'Unregistered');
define('_JNEWS_TEMPLATE_UPLOAD_SUCCESS', 'Successfully uploaded template' );
define('_JNEWS_TEMPLATE_UPLOAD_FAIL', 'Fail to upload template. Kindly verify the zip file if it has the main index.html file.' );
define('_JNEWS_UPLOAD_ZIP_INVALID', 'Can only upload templates in zip files' );
define('_JNEWS_CUSTOMCSS', 'Input your Custom CSS here');
define('_JNEWS_TEMPLATE_ALERT', 'Template name and alias are required!');

//since 2.2.0
define('_JNEWS_UNSUB_NOTIFYMSG','Send Unsubscribe Notification');
define('_JNEWS_SEND_UNSUBNOTIFY_TIPS','Specify here if you want to send an unsubscription notification to the list owner or not.');
define('_JNEWS_UNSUB_ADMINMESSAGE', 'Unsubscribe Notification Message');
define('_JNEWS_INFO_AMIN_UNSUB_NOTIFY', 'This message will be send to List Owner or List creator when someone unsubscribes to the list. Any message can be entered here.');

//templates
define('_JNEWS_CSS_TOGGLESTYLE','Toggle Styling');
define('_JNEWS_EXTERNALCSS_LINK','Add External CSS Link');
define('_JNEWS_EXTERNALCSS_PROCESS','Process');
define('_JNEWS_TEMP_COMBINECLASS','Combined class selector');
define('_JNEWS_COMBINECLASS_SUPPORT','is not supported');
define('_JNEWS_TEMP_COMBINECLASS_IN','in');
define('_JNEWS_TEMP_HTMLTAG','Found html tag ');
define('_JNEWS_TEMP_CONTDEV','You may contact developer for it to be added');
define('_JNEWS_TEMP_COMBCLASSPSEUDO','Combined pseudo-class selector');
define('_JNEWS_TEMP_COMBCLASSEID','or element id');

//Menus
define('_JNEWS_MENU_LIVE_SUPPORT','Live Support');

//Tags
define ('_JNEWS_SMART_TAG', 'This will be replaced by the latest created, modified and published article when you create a Smart-Newsletter type of mailing.');

//Toobar Menus
define('_JNEWS_DONEW_SUBSCRIBERB', 'Name and Email are required!');

//since 3.1.0
define('_JNEWS_IP', 'IP');
define('_JNEWS_MENU_STATS_REPORTS', 'Statistics');
define('_JNEWS_LIST_T_ADMIN_NOTIFICATION' , 'Notification');
define('_JNEWS_MENU_REFRESH_STATS' , 'Refresh');
define('_JNEWS_MENU_GENERATE_STATS' , 'Generate');

//since 3.2.0
define('_JNEWS_LIST_T_LIST' , 'List');
define('_JNEWS_UNSUBSCRIBE_ADMIN_NOTIFICATION', '<p>Dear [LISTOWNERNAME],<br /> <br /></p> <p style="padding-left: 30px;">This is an automated message from [SITE]. To inform you that a user unsubscribed to your newsletter list.</p> <p style="padding-left: 60px;"><strong>Details</strong></p> <p style="padding-left: 60px;">Date and Time of Unsubscription: <strong>{tag:date}</strong><br />Subscriber Name: <strong>[SUBSCRIBERNAME]</strong><br />Subscriber Email: <strong>[SUBSCRIBEREMAIL]</strong></p> <p style="padding-left: 60px;">Unsubscribed List: <strong>[LISTID] - [LISTNAME]</strong></p> <p style="padding-left: 30px;">Please do not response to this message as it is automatically generated and is for information purposes only.</p> <p> </p> <p>Thank You!</p>');

//Tagging
define('_JNEWS_TAG_MODNAME' , 'Module Name');
define('_JNEWS_TAG_MODTYPE' , 'Type');
define('_JNEWS_TAG_MODPOSITION' , 'Position');
define('_JNEWS_TAG_ACL' , 'Access Level');
define('_JNEWS_TAG_SPECIAL' , 'Special');
define('_JNEWS_TAG_PUBLIC' , 'Public');
define('_JNEWS_TAG_ARTICLESECTION' , 'Section');
define('_JNEWS_TAG_ARTICLECATEGORY' , 'Category');
define('_JNEWS_TAGMENU_MODULE' , 'Joomla Module');
define('_JNEWS_TAGMENU_AUTOCONTENT' , 'Auto Content');
define('_JNEWS_TAGMENU_SUBSCRIPTION' , 'Subscription');
define('_JNEWS_TAGMENU_USERS' , 'Users');
define('_JNEWS_TAGMENU_DATETIME' , 'Date/Time');
define('_JNEWS_TAGMENU_WEBSITE' , 'Site Links');
define('_JNEWS_TAGMENU_CONTENT' , 'Content');
define('_JNEWS_TAGPICKLIST_ORDERING' , 'Ordering');
define('_JNEWS_TAGPICKLIST_ORDERINGTIP' , 'Select the way you want your articles to be ordered.');
define('_JNEWS_TAGPICKLIST_CREATED' , 'Created Date (Newest First)');
define('_JNEWS_TAGPICKLIST_TITLE' , 'Title');
define('_JNEWS_TAGPICKLIST_Order' , 'Order');

define('_JNEWS_SELECT_MAILING', 'Please select a mail to edit!');
define('_JNEWS_DELETE_MAILING', 'Please select a mail to delete!');
define('_JNEWS_COPY_MAILING', 'Please select a mail to copy!');
define('_JNEWS_TAG_CONFIRM_DESC', 'This will be replaced by the defined constant "_JNEWS_CONFIRM_SUBSCRIPTION" in the translation with the confirmation link.');
define('_JNEWS_TEMPLATE_SAVED', 'Template successfully saved.');
define('_JNEWS_SUBSCRIPTION_NOT_AVAIL_LIST', 'You are trying to subscribe to a listid that does not exist.');

//since 4.0.0
define('_JNEWS_MENU_TAG' , 'Tags');
define('_JNEWS_TAG_EMAIL_DESC', 'This will be replaced by the email of the subscriber.');
define('_JNEWS_TAG_FWDTOFRIEND', 'Forward to a friend.');
define('_JNEWS_TAGTITLE_SITE', 'Site Links');
define('_JNEWS_TAGTITLE_CONTENT', 'Joomla Contents');
define('_JNEWS_TAGTITLE_AUTOCONTENT', 'Automatic Joomla Contents');
define('_JNEWS_TAGTITLE_MOD', 'Joomla Modules');
define('_JNEWS_TAGCAPTION_ALL', 'ALL');
define('_JNEWS_SUCCESS_COPIED' , ' successfully copied.');
define('_JNEWS_TAGCAPTION_ALLSECCAT' , 'ALL SECTIONS AND CATEGORIES');
define('_JNEWS_FWD_MYDETAILS' , 'My Details');
define('_JNEWS_FWD_WANTTO' , 'I want to forward this email to');
define('_JNEWS_FWD_MESSAGE' , 'Enter a message');
define('_JNEWS_FWD_MESSAGEHID' , 'This email was forwarded to you by');
define('_JNEWS_FWD_SENDEMAIL' , 'Send Email');
define('_JNEWS_FWD_ADDFIELD' , 'Add another friend.');

define('_JNEWS_NEWSLETTER_ARCHIVE', 'Newsletter Archive');
define('_JNEWS_FWDTOFRIEND_ALRT_UNAME', 'Please enter your name.');
define('_JNEWS_FWDTOFRIEND_ALRT_UEMAIL', 'Please enter your valid e-mail address.');
define('_JNEWS_FWDTOFRIEND_ALRT_FNAME', 'Please enter your friend\'s name.');
define('_JNEWS_FWDTOFRIEND_ALRT_FEMAIL', 'Please enter a valid e-mail address of your friend.');
define('_JNEWS_FWDTOFRIEND_SUCCESS', 'Mailing successfully forwarded to ');
define('_JNEWS_FWDTOFRIEND_FAILED', 'Mailing not successfully forwarded to ');
define('_JNEWS_TAGSITE_TAGTIP', 'Click Insert to add the tag in the newsletter.');
define('_JNEWS_TAGSITE_CAPTION', 'Tag Caption');
define('_JNEWS_TAGSITE_CAPTIONTIP', 'Change the tag caption or text here.');
define('_JNEWS_TAGSMART_ALERT_SELECT', 'Please select your Automatic Content to be added in your newsletter!');
define('_JNEWS_ARLIST', 'Auto-responders');
define('_JNEWS_NEW_SUBSCRIBER', 'Subscriber Succesfully Saved.');
define('_JNEWS_EDIT_AR', 'Edit an Auto-responder');
define('_JNEWS_ARINFO_LIST_DELAY', 'Specify the delay(in days) of this autoresponder from the date of subscription.');
define('_JNEWS_SUBS_LIST', 'This Auto-responder will be attached to the following selected lists:');
define('_JNEWS_SUBS_LIST2', 'Attach lists');
define('_JNEWS_SUBS_LIST_TIPS', 'Attach this auto-responder to the following lists . If a user subscribes to these lists they will also be subscribed to the autoresponder. ');
define('_JNEWS_PRIORD_LISTTYPE','Prioritized list type');
define('_JNEWS_PRIORD_LISTTYPE_TIPS', 'If there is a conflict between lists in subscription of a user prioritize either the list or the auto-responder.');
define('_JNEWS_PRIORD_SUBS','Prioritized subscription');
define('_JNEWS_PRIORD_SUBS_TIPS', 'If there is a conflict between subscription or unsubscription to a list prioritize either the subscription, unsubscription or just do nothing to the existing subscriptions.<br/><b>Ignore Changes</b>: We do not change the subscription if there is a conflict.<br/><b>Subscription</b>: We force the subscription of the user to the auto-responders.<br/><b>Unsubscription</b>: We unsubscribe the user from the auto-responder.');
define('_JNEWS_REMAIN_SUBS','Ignore Changes');
define('_JNEWS_UNSUBS','Unsubscription');
define('_JNEWS_SUBSCRIPTION_AR','Subscription to Auto-responder');
define('_JNEWS_SUBSCRIPTION_LIST','Subscription to List');
define('_JNEWS_YOUR_CRON', 'Your Cron url');
define('_JNEWS_LAUNCH_CRON', 'Launch Cron');

define('_JNEWS_SAFEUNSUBSCRIBE', 'Safe Unsubscribe');
define('_JNEWS_INVIUNPUB', 'The lists you subscribed are either in invisible status or unpublished.<br> Only the admin of the site can unsubscribe you from those lists as of now.');
define('_JNEWS_UNSUBSTOLISTS_MESSAGE','Are you sure you want to unsubscribe from these lists?');
define('_JNEWS_SELECT_ALLLISTS','Click to select all List');
define('_JNEWS_SELECT_ALLLAUTOR','Click to select all Auto-responder');
define('_JNEWS_UNSUBSLINK_TIP','Select yes if you prefer to show unsubscribe link on mailings');
define('_JNEWS_CHANGESUBSLINK_TIP','Select yes if you prefer to show subscription link on mailings for subscriber to change his subscription');
define('JNEWS_AUTOMATIC_CRON', 'An automatic cron is created upon the installation of jNews.<br/>This cron was automatically set up in www.joobi.co. This cron has the frequency of 15 minutes.');
define('_JNEWS_IMPORTSUB_TIPS','Import subscribers. The information in the file need to be to the following format: <b>Name, email, receiveHTML(1/0), <span style="color: rgb(255, 0, 0);">confirmed(1/0)</span></b>');
define('_JNEWS_NOSMARTTAG', 'The smartnewsletter doesn\'t contain a [SMARTNEWSLETTER] tag yet. Please insert the tag in the content.');
define('_JNEWS_DELETEBTN','Delete Queue');
define('_JNEWS_MENU_STOPQ','Stop Queue');
define('_JNEWS_MENU_STARTQ','Start Queue');
define('_JNEWS_MAILING_QUEUE_DELETED', 'The queue entry have been successfully deleted for this mailing.');
define('_JNEWS_QUEUE_SETTING','Queue Setting');
define('_JNEWS_QUEUESTATS_ON','On');
define('_JNEWS_QUEUESTATS_OF','Off');
define('_JNEWS_QUEUESTATS_TIPS','Turn On if you want the Process Queue to start or Off if you want it to stop.');
define('_JNEWS_MENU_STARTQ_MSG','The processing of queue has been started.');
define('_JNEWS_MENU_STOPQ_MSG','The processing of queue has been stopped.');
define('_JNEWS_QUEUESTATS_NOTIFY','The queue has been stopped if you want to continue proccessing it, you need to ');

//since
define('_JNEWS_NEW_URL_PASS_TIPS','Enter the password to be able to add a subscriber via url. Append the catcher variable passwordA in the URL.');
define('_JNEWS_CRON_PASSWORD', 'Cron Password');
define('_JNEWS_USE_CRON_PASS', 'Use Password for Cron');

//since 4.2.0
define('_JNEWS_QUEUE_STATUS','Queue Status');
define('_JNEWS_SMTPPORT','SMTP Port');
define('_JNEWS_SMARTQUEUE','Smart Queue');
define('_JNEWS_SMARTQ_ON','On');
define('_JNEWS_SMARTQ_OF','Off');
define('_JNEWS_SMARTQ_TIPS','Turn On if you want to enable the Smart processing of queue which will overcome your server limitation.');
define('_JNEWS_SUB_INFO_FIELDS', 'Show More Subscriber Info');
define('_JNEWS_SUB_INFO_FIELDS_TIPS', 'Show IP ,Register Date, User id and Black List fields in the subscriber form in the frontend');
define('_JNEWS_JSUB', 'Frontend Management');
define('_JNEWS_JSUB_TIPS', 'Choose if only the owner of the list or the super admin can only edit and create/view newsletters in the frontend. A user can own a list if he is subscribed via jSubscription');
define('_JNEWS_BYOWNER', 'By Owner');
define('_JNEWS_LIST_ACESS', 'By List Access');
define('_JNEWS_CAPTCHA_WARN',   'Cannot create Captcha Image either you do not have php GD Library installed or php GD Library has not been loaded with TFF support <br>Check your phpinfo() or you can turn off the Enable Captcha option from ');
define('_JNEWS_CAPTCHA_LINK','jNews Configuration under Subscriber Tab');
define('_JNEWS_MORE_TEMPLATES','More Templates');

// For sorting in content tab by date, section or category
define('_JNEWS_CONTENT_ITEM_SORT', 'Sort by: ');
define('_JNEWS_SORT_DATE' , 'Date');
define('_JNEWS_SORT_DATE_TIPS' , 'If you select this, the contents will be sorted according to date created');
define('_JNEWS_SORT_SECTION' , 'Section');
define('_JNEWS_SORT_SECTION_TIPS' , 'If you select this, the contents will be sorted according to its section');
define('_JNEWS_SORT_CATEGORY' , 'Category');
define('_JNEWS_SORT_CATEGORY_TIPS' , 'If you select this, the contents will be sorted according to its category');
define('_JNEWS_SORT_BUTTON' , 'Sort');

//Since 5.0.0
define('_JNEWS_TAGMENU_K2CONTENT', 'K2 Contents');
define('_JNEWS_TAGMENU_VMPRODUCTS', 'Virtuemart Products');
define('_JNEWS_TEMPLATE_AVLB','Availability');
define('_JNEWS_TEMPLATE_INS','Installed');
define('_JNEWS_TEMPLATE_DWN','Download');
define('_JNEWS_TEMPLATE_FDWN','Free Download');
define('_JNEWS_TEMPLATE_IMG','Image');
define('_JNEWS_SUBS_INFO','You do not have subscription record to any mailing lists so it is not possible to unsubscribe here.');
define ('_JNEWS_UNSUBS_STATUS','You are already unsubscribe to the list.');
define('_JNEWS_CAPTCHAW', 'Captcha Width');
define('_JNEWS_CAPTCHAW_TIPS', 'Define the width of the captcha in the subscriber module');
define('_JNEWS_CAPTCHAH', 'Captcha Height');
define('_JNEWS_CAPTCHAH_TIPS', 'Define the height of the captcha in the subscriber module');
define('_JNEWS_CAPTCHA_MSG', 'Kindly enter the correct captcha code.');
define('_JNEWS_MCRYPT_MESSAGE', 'The captcha has been turned on without the mcrypt library enabled.<br>Kindly enable the mcrypt extension in your php.ini.<br>You may also want to disable captcha in ');

//Since 5.1.0
define('_JNEWS_FORCED_HTML', 'Send HTML Mailing Only?');
define('_JNEWS_FORCED_HTML_TIP','Yes if you want to force only html mailing will be sent to your subscribers.');

//Since social edition
define('_JNEWS_LISTS_CONFIG','Lists');
define('_JNEWS_LISTS_SETTINGS','Lists Settings');
define('_JNEWS_USE_MASTERLISTS','Use Master Lists?');
define('_JNEWS_USE_MASTERLISTS_TIPS','Yes if you want to use master lists [All Potential Site Members, All Registered Subscribers, All Front-end Lists Subscribers] of your subscribers, No otherwise');
define('_JNEWS_LIST_CREATORFE','Front-end List Creator');
define('_JNEWS_LIST_CREATORFE_TIPS','Define the access level who you will allow to create lists on Front-end');
define('_JNEWS_LIST_CREATORFE_WARN','(You need to specify here the group level of user who can create list on the frontend.)');

define('_JNEWS_BLOG_RENDERING', 'Blog Rendering');
define('_JNEWS_BLOG_TIPS', 'Full Blog: this will load the full blog in the newsletter<br>Intro Only: this will load the x number of characters of the blog with a read more link to the complete blog in your site');
define('_JNEWS_TAGMENU_BLOGS', 'Lyften Bloggie');
define('_JNEWS_TAGMENU_DEALS', 'Deal');
define('_JNEWS_DEALS_INTRO', 'Intro Box');
define('_JNEWS_DEALS_FULL', 'Full Description');
define('_JNEWS_DEAL_NAME', 'Deal Name/<br> Short Description');
define('_JNEWS_DEAL_INDUSTRY', 'Industry/<br> Country');
define('_JNEWS_DEAL_TARGET', 'Target Amount/<br> Inv Range');
define('_JNEWS_DEAL_TYPE_TIPS', 'Full Description: will include the entire deal in the newsletter.<br />' .
		'Intro box: will include only the introduction of the deal in the newsletter.<br/>');
define('_JNEWS_CONTENT_TIP', 'ID of the content to be inserted in the newsletter');
define('_JNEWS_CONTENT_ID', 'Content ID');
define('_JNEWS_BLOG_TIP', 'ID of the blog to be inserted in the newsletter');
define('_JNEWS_BLOG_ID', 'Blog ID');
define('_JNEWS_TAGMENU_JOMSOCIAL','JomSocial');
define('_JNEWS_TAGCAPTION_ALLCAT','All Categories'); //_JNEWS_TAG_ARTICLECATEGORY
define('_JNEWS_PLUG_INSTALLED','Plugin %s installed successfully');
define('_JNEWS_MODULE_INSTALLED','Module %s installed successfully');
define('_JNEWS_EMAIL_LISTS', 'Lists');
define('_JNEWS_LEADS_REP', 'Leads Reports');
define('_JNEWS_SUBSCRIBERS', 'Subscribers');
define('_JNEWS_ALLOW_SN', 'Allow Smart-Newsletter');
define('_JNEWS_ALLOW_SN_TIP', 'Allow creation of smart-newsletter in the frontend.');
define('_JNEWS_UNSUBSCRIBE_SUBJECT_NOT', 'Unsubscription Notification');
define('_JNEWS_RED_SUBSCRIPTION', 'Redirect After Subscription');
define('_JNEWS_RED_SUBS_TIP', 'Redirect page after subscription from the module.');
define('_JNEWS_PLEASE_WAIT', 'Please wait...');
define('_JNEWS_MOD_MESSAGE', 'Pop-up Subscription Message');
define('_JNEWS_MOD_MESSAGE_TIP', 'Select Yes to pop-up the subscription message. Select No to put the message in the module');

//since 6.1.0
define('_JNEWS_CREATE_NEWSUBS_TIPS', 'Specify here the default number of rows of subscribers information to be created or added in the front-end.');
define('_JNEWS_CREATE_NEWSUBS','Add New Subsbcribers in');
define('_JNEWS_ROWS', 'rows');
define('_JNEWS_USE_BACKENDVIEW', 'Add Subscribers Using Default View');
define('_JNEWS_USE_BACKENDVIEW_TIPS', 'Specify here if you want to add subscribers in front-end using the default view used in the back-end');

define('_JNEWS_TERMS_CONDITIONS', 'Terms and Condition');
define('_JNEWS_TERMS_WARN', 'Please check the terms and conditions option. To read the terms and conditions kindly click on the Terms and Conditions link');
define('_JNEWS_TERMS_LINK','Terms and Condtion Link');
define('_JNEWS_TERMS_LINK_TIPS','Enter the complete link for the terms and conditions here.<br><strong>(ex. http://www.yoursite.com/index.php?option=com_content&view=article&id=[article_id]&Itemid=[Item_id]</strong>');
define('_JNEWS_SHOW_TERMS','Show Terms and Condition');
define('_JNEWS_SHOW_TERMS_TIPS','Add the Terms and Condition in the subscriber module');
define('_JNEWS_CHECK_TERMS','Check Terms and Condition');
define('_JNEWS_CHECK_TERMS_TIPS','Check or uncheck the terms and condition by default.');

//since 7.0.0
define('_JNEWS_CRON_SYSTEM', 'Cron System');
define('_JNEWS_CRON_SYSTEM_TIPS', 'Defines the cron used to launched the automatic scheduling of jNews.<br><br> [0] <strong> No Cron </strong> - if you do not want to use the automatic sending of mailing.' .
		'<br><br>[1] <strong>jNews Cron System Plugin</strong> - if you want your jNews Cron will be triggered within your site itself.<br><br>[2] <strong>Joobi Cron</strong> - if you want to avail the free Cron Task provided by <a href="http://www.joobi.co">Joobi</a>. ' .
		'<br><br>[3] <strong>External Cron</strong> - if you prefer to have your own cron task on your server.');
define('_JNEWS_NO_CRON', 'No Cron');
define('_JNEWS_CRON_PLUGIN', 'jNews Cron System Plugin');
define('_JNEWS_CRON_JOOBI','Joobi Cron');
define('_JNEWS_CRON_EXTERNAL','External Cron');
define('JNEWS_CAPTCHA_FTWARN','Cannot view the captcha image because FreeType Support of your GD Library is disabled. ' .
		'<br/>You may go to the backend of your site -> Help -> System Info -> PHP Information Tab -> gd section and check if FreeType Support is enable or not. ' .
		'<br/> If disabled you can enable it in the php.ini file of your server.');

//since 7.1.0
define('_JNEWS_SUBSCRIPTION_SETTINGS', 'Subscription Settings');
define('_JNEWS_SUBNOTIFY_MSG', 'Subscribe Notify Message');
define('_JNEWS_SUBNOTIFY_MSG_TIPS','This message will be send to List Owner or List creator when a subscriber subscribes to the list. Any message can be entered here.');
define('_JNEWS_SUBSDEFAULT_NOTIFYMSG', '<p>Dear [LISTOWNERNAME],<br /> <br /></p>
<p style="padding-left: 30px;">This is an automated message from [SITE] to notify you that a user subscribed to your newsletter list.</p>
<p style="padding-left: 60px;"><strong>Details</strong></p>
<p style="padding-left: 60px;">Date and Time of Subscription: <strong>{tag:date}</strong><br />Subscriber Name: <strong>[SUBSCRIBERNAME]</strong><br />Subscriber Email: <strong>[SUBSCRIBEREMAIL]</strong></p>
<p style="padding-left: 60px;">Subscribed List: <strong>[LISTID] - [LISTNAME]</strong></p>
<p style="padding-left: 30px;">Please do not response to this message as it is automatically generated and is for information purposes only.</p>
<p> </p>
<p>Thank You!</p>');
define('_JNEWS_SUBS_NOTIFYSUBJECT','jNews Subscription Notification');
define('_JNEWS_UNSUBS_NOTIFYSUBJECT','jNews Unsubscription Notification');
define('_JNEWS_SENDTEST_CONFIGSUCC','If you receive this email, it means that you will be able to send any other e-email from the website.');
define('_JNEWS_SENDTEST_CONFIGERROR','Kindly review your mail configuration there might be some settings that were not set properly.');
define('_JNEWS_LIST_UNPUBMSG','Your list is unpublished, inorder to use the list you created you need to publish it first.');
define('_JNEWS_LIST_INVIMSG','Your list is invisible on frontend, for your subscriber to see it you need to make your list visible first.');
define('_JNEWS_TEMPLATE_STYLE_TH5','Title h5');
define('_JNEWS_TEMPLATE_STYLE_TH6','Title h6');
define('_JNEWS_SENDTEST_TEMP','Send Test Template');
define('_JNEWS_NOCRON_USED','No cron task created or used for jNews.');

//since 7.2.0
define('_JNEWS_LISTS_UNSUBMSG','You are already unsubscribe from the Mailing Lists.');
define('_JNEWS_SEND_NEWSLETTER','Send Newsletter');
define('_JNEWS_MSG_SENT_SUCCESS', 'sent successfully to');
define('_JNEWS_MSG_SENT_FAIL', 'not sent successfully to');
define('_JNEWS_QUEUE_STATUSSEND', 'Queue Status');
define('_JNEWS_MENU_CONTINUE','Continue');
define('_JNEWS_QUEUE_EMPTYINFO','The queue is empty and there are no scheduled mailings to be processed.');
define('_JNEWS_QUEUE_READYTOSEND','Mailings Ready to be Sent');
define('_JNEWS_QUEUE_SCHEDULED','Scheduled Mailings');
define('_JNEWS_QUEUE_STILLONQUEUE','Mailings still on Queue at');
define('_JNEWS_SENDBTN','Send');

//since 7.3.0
define('_JNEWS_SMTPSECURE', 'SMTP Secure');
define('_JNEWS_SMTPSECURE_TIPS', 'If you use a SMTP Server, you can add a secure process before connecting to the SMTP Server.');
//define('_JNEWS_NO_LISTS_AVAILABLE', 'No lists available for this type.');

//since 7.4.0
define('_JNEWS_NO_LISTS_AVAILABLE', 'No lists available for this type.');
define('_JNEWS__LIST_HTML_EDITOR', 'List HTML editor is turned off. <br /> If you wish to add a description for the list kindly turn on the List Description editor in the Configuration>>Miscellaneoous tab.');
define('_JNEWS_TAGMODULE_REPLACE_MESSAGE', 'If your module tag was not replaced or has been replaced with an empty string, please check if the allow_url_fopen is set to on in your php.ini or if not please check if your server supports cURL.<br />It is a requirement to turn on the allow_url_fopen or curl to be able to replace the module tag in the preview and in sending from the backend. If you don\'t have either of the two the module tag will only be replaced if it is sent via the cron');
define('_JNEWS_QUEUE_PROCESS_ERROR', 'An error occured while retrieving queue entries to be processed; there is too much entries to be retrieved from the queue.<br /> Please reduce the maximum emails per task in the Scheduler tab in the jNews Configuration.');
define('_JNEWS_TOO_MUCH_CRON_MAX_EMAILS', 'You have too much max cron emails to be processed per task.<br /> Please reduce the number of emails to be processed per task to avoid a problem when loading the entries in the queue for processing. <br />Kindly lessen the maximum emails per task but increase the max cron frequency(frequency approved by your provider) to still send newsletters fast.');
define('_JNEWS_VIEW_BROWSER', 'View on the Browser');
define('_JNEWS_THE_MAILING', 'The mailing ');
define('_JNEWS_SENT_ALL', ' successfully sent to the subscribers.');
define('_JNEWS_NO_MAILINGS_YET', 'There are no mailings to be sent on this time.');
define('_JNEWS_CRON_TRIGGERRED', 'Last time cron triggered');
define('_JNEWS_CRON_TRIGGERRED_TIPS', 'Last time cron triggered');
define('_JNEWS_CRON_TRIGGERRED_ADD_INFO', 'Note: Even though the cron is triggerred it still can be that the queue and scheduled newsletters are not being processed.');
define('_JNEWS_UNSUBSCRIBE_ALL', 'Unsubscribe to All Lists');
define('_JNEWS_UNSUBSCRIBE_ALL_OR', 'or click here to Unsubscribe from All Lists');
define('_JNEWS_UNSUBSCRIBE_ALL_MESS', 'You have been unsubscribed from all lists!');
define('_JNEWS_UNSUBSCRIBE_ALL_CAPTION', 'Show Unsubscribe to All Lists');
define('_JNEWS_UNSUBSCRIBE_ALL_CAPTION_TIPS', 'Select Yes to show the Unsubscribe To All Lists button in the frontend.');
define('_JNEWS_ATTEMPTED', 'Attempted to send');
define('_JNEWS_RESCHEDULED', 'This newsletter has been rescheduled and will attempt to send again.');
define('_JNEWS_REACHED_MAX_ATTEMPT', 'Note: If the no. of attempts in trying to send the newsletter already exceeded the maximum no. of attempts, this entry will be deleted from the queue.');
define('_JNEWS_REGWARN_COLUMN','Please enter');
define('_JNEWS_COLUMN_SHOW','Show Column ');
define('_JNEWS_SHOW_COLUMN_TIPS','Show/hide this column in your subscribers list-BE');
define('_JNEWS_INPUT_COLUMN','Column ');
define('_JNEWS_INPUT_COLUMN_TIPS','Enter your column ');
define('_JNEWS_COLUMN_DESC', 'This will be replaced by your user defined column ');
define('_JNEWS_HELP', 'Help');
define('_JNEWS_SEND_LOG_TO_TIPS', 'Send mailing reports to this email. If none is specified the mailing report will be sent to the first admin of the site');
define('_JNEWS_SEND_LOG_TO', 'Send mailing reports to');
define('_JNEWS_ASSIGN_LIS_TEMPLATE', 'List Template');
define('_JNEWS_ASSIGN_LIS_TEMPLATE_TIPS', 'Select default template to be used for this list');
define('_JNEWS_AUTO_OPTION_NO_SYNC', 'Sync No Users');
define('_JNEWS_QUEUE_BLOCK', 'Block');
define('_JNEWS_QUEUE_UNBLOCK', 'Unblock');
define('_JNEWS_TAGMENU_MEDIA_SHARE', 'Social Share');
define('_JNEWS_JOOBI_CRON', 'Joobi Cron System');
define('_JNEWS_JOOBI_CRON_TIPS', 'Select Yes to publish Joobi Cron and be able to use this cron system. Select No if you don\'t want to use this cron. This cron will be triggered every 15 minutes.');
define('_JNEWS_JNEWS_CRON', 'jNews Cron System Plugin');
define('_JNEWS_JNEWS_CRON_TIPS', 'Select Yes to publish jNews Cron System Plugin and be able to use this cron system. Select No if you don\'t want to use this cron. This cron will be triggered ever 15 minutes.');
define('_JNEWS_JOOBICRON_YES', 'Yes');
define('_JNEWS_JOOBICRON_NO', 'No');
define('_JNEWS_TITLE', 'This will be replaced with the title of the newsletter.');

//since 7.5.x
define('_JNEWS_CREATE_DATE', 'Create Date');
define('_JNEWS_MENU_SEND_TEST_TEXT', 'Send Test Email(Text)');
define('_JNEWS_CRON_NEXTTRIGGER', 'Next Cron Task');
define('_JNEWS_CRON_NEXTTRIGGER_TIPS', 'This date indicate when the cron task will be able to be triggered. If the URL get triggered before that time it will NOT trigger the queue.');
define('_JNEWS_AUTONEWS_DATE', 'Start Date');
define('_JNEWS_AUTONEWS_DATE_TIPS', 'Created: will only include the article last created.<br />Modified: will include the article last created AND modifed.');
define('_JNEWS_AUTONEWS_DATE_CREATED', 'Created');
define('_JNEWS_AUTONEWS_DATE_MODIFIED', 'Modified');
define('_JNEWS_UNSUBCRIBERS_VIEW', 'Unsubscribed');
define('_JNEWS_UNSUBSCRIBER_CONFIG', 'Unsubscribers');
define('_JNEWS_SUB_LISTTYPE_ALL', 'All Subscribers');
define('_JNEWS_SUB_LISTTYPE_ONLY_SUBCRIBED', 'Subscribed');
define('_JNEWS_SUB_LISTTYPE_ONLY_UNSUBCRIBED', 'Unsubscribed');
define('_JNEWS_SUB_LISTTYPE_ONLY_WAITINGCONF', 'Waiting Confirmation' );
define('_JNEWS_SUB_LISTTYPE_ONLY_BLOCKED', 'Blocked Users');
define('_JNEWS_MENU_SEND_TESTSPAM', 'Test for Spam');
define('_JNEWS_SPAMTEXT_MESSAGE_SENT_SUCCESSFULLY', 'Spam Test Email successfully sent, please check your mail box!');
define('_JNEWS_AUTONEWS_NEXT_GEN', 'Next generated date' );
define('_JNEWS_AUTONEWS_NEXT_GEN_TIPS', 'The next time jNews will generate a Newsletter' );
define('_JNEWS_AUTONEWS_SMARTNEWS_PROCESS', 'The system processed the SmartNewsletter ( %s ) and found %s  new published articles between %s and %s .' );
define('_JNEWS_AUTONEWS_NO_SMARTNEWS_GENERATE_IDS', 'There is no SmartNewsletter to generate yet for the ID %s .' );
define('_JNEWS_AUTONEWS_NO_SMARTNEWS_GENERATE_DATE', 'A SmartNewsletter will be generated after this date: %s .' );
define('_JNEWS_AUTONEWS_NO_SMARTNEWS_GENERATE_TIME', 'The current time is: %s .' );
define('_JNEWS_NEWSLETTER_BE_SENT', ' will be sent to ' );
define('_JNEWS_NEWSLETTER_BE_SUBCRIBERS', 'subscribers.' );
define('_JNEWS_NEWSLETTER_BE_NEXT', 'The next mailing will be sent after %s .' );
define('_JNEWS_NEWSLETTER_BE_READY_SENT', ' ready to be sent to ' );
define('_JNEWS_DESC_SUPERPACK', 'jNews SuperPack the ultimate mailing system including lots of preloaded templates. jNews! Your Communication Partner!');
define('_JNEWS_DESC_SOCIAL', 'jNews Social the ultimate mailing system for your Social community. jNews! Your Communication Partner!');

//since 7.6.x
define('_JNEWS_SNTAG_NO_REQUIRED', 'Multi-Purpose Smart-Newsletter');
define('_JNEWS_SNTAG_NO_REQUIRED_TIP', 'If YES the Smart-Newsletter will NOT require a [SMARTNEWSLETTER] tag and therefore can be used to schedule anything else, eg: latest members in JomSocial or latest calendar events.');
define('_JNEWS_SEND_MAIL_EMAIL', 'From email');
define('_JNEWS_SEND_MAIL_EMAIL_TIPS', 'Choose what email will show as the sender.');
define('_JNEWS_SUB_REDIRECT_URL', 'Subscription redirect URL');
define('_JNEWS_SUB_REDIRECT_URL_TIPS', 'Specified a redirect URL for the front-end component subscirption form.');
define('_JNEWS_SUCCESS_ALREADY_SUB', 'Your email already exists in our mailing list.');
define('_JNEWS_SUBSCRIBE_NOTIFICATION', 'List Subscription Notification');
define('_JNEWS_SUBSCRIBE_NOTIFICATION_TIPS', 'Specified a list of emails seperated by comma (,) to which you want the subscription notification to be sent to.');
define('_JNEWS_UNSUBSCRIBE_NOTIFICATION', 'List Unsubscription Notification');
define('_JNEWS_UNSUBSCRIBE_NOTIFICATION_TIPS', 'Specified a list of emails seperated by comma (,) to which you want the unsubscription notification to be sent to.');
define('_JNEWS_COMPONENT_THEME', 'Component Theme');
define('_JNEWS_COMPONENT_THEME_TIPS', 'Choose the theme you want to use for back-end and front-end.');
define('_JNEWS_TAGSITE_THEME', 'Display newsletter');
define('_JNEWS_TAGSITE_THEME_TIPS', 'Define if you want to display only the newsletter or if you want to include also Joomla template.');
define('_JNEWS_TAG_INSERT_TAG', 'Insert Tag');
define('_JNEWS_ALLOW_FE_AUTORESPONDERS', 'Allow FE Auto-Responders');
define('_JNEWS_ALLOW_FE_AUTORESPONDERS_TIPS', 'Allow the creation of auto-responders in the frontend.');

//since 7.7.x
define('_JNEWS_ARCHIVELINK_STANDARD', 'Standard');
define('_JNEWS_ARCHIVELINK_POPUP', 'Pop-Up');
define('_JNEWS_ARCHIVELINK_PAGE', 'New Page');
define('_JNEWS_ARCHIVE_LINK', 'Link to Archive');
define('_JNEWS_ARCHIVE_LINK_TIPS', 'Chose the type of link / windows for the display of the archived newsletter.');
define('_JNEWS_AUTONEWS_DATE_PUBLISHUP', 'Start Publishing');
define('_JNEWS_AUTONEWS_NO_ARTICLE', 'There is no Article to add to the Smart Newsletter at this moment.');
define('_JNEWS_CAPTCHA_TIPS', 'Enter Security Code Here');
define('_JNEWS_EXPORT_TEXT_ALL','All subscribers will be exported!');



