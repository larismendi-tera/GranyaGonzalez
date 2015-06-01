<?php
defined('_JEXEC') or die('Restricted access');
### Copyright (c) 2006-2012 Joobi Limited. All rights reserved.
### http://www.gnu.org/copyleft/gpl.html GNU/GPL

/**
 * <p>Dutch language file.</p>
 * @author Tromp Wezelman <info@uitgaanopurk.nl>
 * @version $Id: dutch.php 491 2007-02-01 22:56:07Z chris $
 * @link http://www.joobi.co
 * voor fouten die gemaakt zijn in dit taalbestand kan er ge-mailt worden naar info@uitgaanopurk.nl
 * Vertaling gecorrigeerd en aangevuld door DutchJoomla!
 * @link http://www.dutchjoomla.org
 */

### Algemeen ###
 //jnews Beschrijving
define('_JNEWS_DESC_CORE', 'jNews is een mailinglijst, nieuwsbrieven, auto-reageerder, en een opvolg tool om doeltreffend te communiceren met uw gebruikers en klanten.  ' .
		'jNews, Uw Communicatie Partner!');
define('_JNEWS_DESC_GPL', 'jNews is een mailinglijst, nieuwsbrieven, auto-reageerder, en een opvolg tool om doeltreffend te communiceren met uw gebruikers en klanten.  ' .
		'jNews, Uw Communicatie Partner!');
define('_JNEWS_FEATURES', 'jNews, Uw Communicatie Partner!');

// Lijst typen
define('_JNEWS_NEWSLETTER', 'Nieuwsbrief');
define('_JNEWS_AUTORESP', 'Auto-reageerder');
define('_JNEWS_AUTORSS', 'Auto-RSS');
define('_JNEWS_ECARD', 'eCard');
define('_JNEWS_POSTCARD', 'Briefkaart');
define('_JNEWS_PERF', 'Prestatie');
define('_JNEWS_COUPON', 'Kortingsbon');
define('_JNEWS_CRON', 'Cron taak');
define('_JNEWS_MAILING', 'Mailing');
define('_JNEWS_LIST', 'Lijst');

 //jnews Menu
define('_JNEWS_MENU_LIST', 'Lijsten');
define('_JNEWS_MENU_SUBSCRIBERS', 'Abonnees');
define('_JNEWS_MENU_NEWSLETTERS', 'Nieuwsbrieven');
define('_JNEWS_MENU_AUTOS', 'Auto-responders');
define('_JNEWS_MENU_COUPONS', 'Kortingsbonnen');
define('_JNEWS_MENU_CRONS', 'Crontaken');
define('_JNEWS_MENU_AUTORSS', 'Auto-RSS');
define('_JNEWS_MENU_ECARD', 'eCards');
define('_JNEWS_MENU_POSTCARDS', 'Briefkaarten');
define('_JNEWS_MENU_PERFS', 'Prestatie');
define('_JNEWS_MENU_TAB_LIST', 'Lijst');
define('_JNEWS_MENU_MAILING_TITLE', 'Mailings');
define('_JNEWS_MENU_MAILING', 'Mailings voor ');
define('_JNEWS_MENU_STATS', 'Statistieken');
define('_JNEWS_MENU_STATS_FOR', 'Statistieken voor ');
define('_JNEWS_MENU_CONF', 'Configuratie');
define('_JNEWS_MENU_UPDATE', 'Import');
define('_JNEWS_MENU_ABOUT', 'Info');
define('_JNEWS_MENU_LEARN', 'Leercentrum');
define('_JNEWS_MENU_MEDIA', 'Mediabeheer');
define('_JNEWS_MENU_HELP', 'Help');
define('_JNEWS_MENU_CPANEL', 'CPanel');
define('_JNEWS_MENU_IMPORT', 'Importeren');
define('_JNEWS_MENU_EXPORT', 'Exporteren');
define('_JNEWS_MENU_SUB_ALL', 'Iedereen abonneren');
define('_JNEWS_MENU_UNSUB_ALL', 'Niemand abonneren');
define('_JNEWS_MENU_VIEW_ARCHIVE', 'Archief');
define('_JNEWS_MENU_PREVIEW', 'Voorbeeld');
define('_JNEWS_MENU_SEND', 'Versturen');
define('_JNEWS_MENU_SEND_TEST', 'Verstuur test e-mail');
define('_JNEWS_MENU_SEND_QUEUE', 'Wachtrij');
define('_JNEWS_MENU_VIEW', 'Bekijken');
define('_JNEWS_MENU_COPY', 'Kopiëren');
define('_JNEWS_MENU_CRTL_PANEL', ' Configuratiescherm');
define('_JNEWS_MENU_LIST_NEW', ' Creëer een lijst');
define('_JNEWS_MENU_LIST_EDIT', ' Bewerk een lijst');
define('_JNEWS_MENU_BACK', 'Terug');
define('_JNEWS_MENU_INSTALL', 'Installatie');
define('_JNEWS_MENU_TAB_SUM', 'Samenvatting');
define('_JNEWS_STATUS', 'Status');
define('_JNEWS_MENU_DEL_QUEUE' , 'Verwijder');

// berichten
define('_JNEWS_ERROR', ' Een fout opgetreden! ');
define('_JNEWS_SUB_ACCESS', 'Toegangsrechten');
define('_JNEWS_DESC_CREDITS', 'Credits');
define('_JNEWS_DESC_INFO', 'Informatie');
define('_JNEWS_DESC_HOME', 'Hoofdpagina');
define('_JNEWS_DESC_MAILING', 'Mailinglijst');
define('_JNEWS_DESC_SUBSCRIBERS', 'Abonnees');
define('_JNEWS_PUBLISHED', 'Gepubliceerd');
define('_JNEWS_UNPUBLISHED', 'Niet gepubliceerd');
define('_JNEWS_DELETE', 'Verwijderen');
define('_JNEWS_FILTER', 'Filter');
define('_JNEWS_UPDATE', 'Update');
define('_JNEWS_SAVE', 'Opslaan');
define('_JNEWS_CANCEL', 'Annuleren');
define('_JNEWS_NAME', 'Naam');
define('_JNEWS_EMAIL', 'E-mail');
define('_JNEWS_SELECT', 'Selecteren');
define('_JNEWS_ALL', 'Alle');
define('_JNEWS_SEND_A', 'Verstuur een ');
define('_JNEWS_SUCCESS_DELETED', ' Succesvol verwijderd');
define('_JNEWS_LIST_ADDED', 'Lijst succesvol gecreëerd');
define('_JNEWS_LIST_COPY', 'Lijst succesvol gekopieerd');
define('_JNEWS_LIST_UPDATED', 'Lijst succesvol bijgewerkt');
define('_JNEWS_MAILING_SAVED', 'Mailing succesvol opgeslagen.');
define('_JNEWS_UPDATED_SUCCESSFULLY', 'Succesvol geupdate.');

### Abonnee informatie ###
//inschrijf en uitschrijf informatie
define('_JNEWS_SUB_INFO', 'Abonnee-informatie');
define('_JNEWS_VERIFY_INFO', 'Controleer aub de link die u toegevoegd heeft, er mist nog enige informatie.');
define('_JNEWS_INPUT_NAME', 'Naam');
define('_JNEWS_INPUT_EMAIL', 'E-mail');
define('_JNEWS_RECEIVE_HTML', 'Ontvang HTML?');
define('_JNEWS_TIME_ZONE', 'Tijdzone');
define('_JNEWS_BLACK_LIST', 'Zwarte lijst');
define('_JNEWS_REGISTRATION_DATE', 'Datum gebruikersregistratie');
define('_JNEWS_USER_ID', 'Gebruikers-id');
define('_JNEWS_DESCRIPTION', 'Beschrijving');
define('_JNEWS_ACCOUNT_CONFIRMED', 'Uw account is geactiveerd.');
define('_JNEWS_SUB_SUBSCRIBER', 'Abonnee');
define('_JNEWS_SUB_PUBLISHER', 'Uitgever');
define('_JNEWS_SUB_ADMIN', 'Administrator');
define('_JNEWS_REGISTERED', 'Geregistreerd');
define('_JNEWS_SUBSCRIPTIONS', 'Inschrijvingen');
define('_JNEWS_SEND_UNSUBCRIBE', 'Verstuur een bericht');
define('_JNEWS_SEND_UNSUBCRIBE_TIPS', 'Klik op Ja om een bevestigingsbericht uitschrijving te versturen.');
define('_JNEWS_SUBSCRIBE_SUBJECT_MESS', 'Bevestig uw inschrijving aub');
define('_JNEWS_UNSUBSCRIBE_SUBJECT_MESS', 'Bevestiging uitschrijving');
define('_JNEWS_DEFAULT_SUBSCRIBE_MESS', 'Hallo{tag:name},<br />' .
		'Nog een stap en u bent toegevoegd aan de lijst. Klik aub op de volgende link om uw inschrijving te bevestigen.' .
		'<br /><br />{tag:confirm}<br /><br />Voor vragen neemt u aub contact op met de webmaster.');
define('_JNEWS_DEFAULT_UNSUBSCRIBE_MESS', 'Dit is een bevestingse-mail dat u bent uitgeschreven van onze lijst. We vinden het jammer dat u besloten  heeft om u uit te schrijven. Wanneer u zich weer wilt inschrijven, kunt u dat altijd doen op onze website. Heeft u nog vragen, neemt u aub contact op met de webmaster.');

// jNews abonnees
define('_JNEWS_SIGNUP_DATE', 'Inschrijfdatum');
define('_JNEWS_CONFIRMED', 'Bevestigd');
define('_JNEWS_SUBSCRIB', 'Inschrijven');
define('_JNEWS_HTML', 'HTML mailings');
define('_JNEWS_RESULTS', 'Resultaten');
define('_JNEWS_SEL_LIST', 'Selecteer een lijst');
define('_JNEWS_SEL_LIST_TYPE', '- Selecteer type lijst -');
define('_JNEWS_SUSCRIB_LIST', 'Lijst van alle abonnees');
define('_JNEWS_SUSCRIB_LIST_UNIQUE', 'abonnees voor : ');
define('_JNEWS_NO_SUSCRIBERS', 'Geen abonnees gevonden voor deze lijst.');
define('_JNEWS_COMFIRM_SUBSCRIPTION', 'Een bevestigingse-mail is naar u toegestuurd. Controleer aub uw e-mail en klik op de toegevoegde link.<br />' .
		'U moet uw e-mail bevestigen voordat uw inschrijving actief is.');
define('_JNEWS_SUCCESS_ADD_LIST', 'U bent met succes toegevoegd aan de lijst.');


 // Inschrijf informatie
define('_JNEWS_CONFIRM_LINK', 'Klik hier om uw inschrijving te bevestigen');
define('_JNEWS_UNSUBSCRIBE_LINK', 'Klik hier om u zelf uit te schrijven van onze lijst');
define('_JNEWS_UNSUBSCRIBE_MESS', 'Uw e-mailadres is verwijderd uit onze lijst');
define('_JNEWS_QUEUE_SENT_SUCCESS', 'Alle geplande mailings zijn met succes verstuurd.');
define('_JNEWS_MALING_VIEW', 'Bekijk alle mailings');
define('_JNEWS_UNSUBSCRIBE_MESSAGE', 'Weet u zeker dat u zich wilt uitschrijven van onze lijst?');
define('_JNEWS_MOD_SUBSCRIBE', 'Inschrijven');
define('_JNEWS_SUBSCRIBE', 'Inschrijven');
define('_JNEWS_UNSUBSCRIBE', 'Uitschrijven');
define('_JNEWS_VIEW_ARCHIVE', 'Bekijk archief');
define('_JNEWS_SUBSCRIPTION_OR', ' of klik hier om uw informatie bij te werken');
define('_JNEWS_EMAIL_ALREADY_REGISTERED', 'Dit e-mailadres is al geregistreerd.');
define('_JNEWS_SUBSCRIBER_DELETED', 'Abonnee met succes verwijderd.');


### Gebruikers scherm ###
 //Gebruikers Menu
define('_JNEWS_UCP_USER_PANEL', 'Gebruikers configuratiescherm');
define('_JNEWS_UCP_USER_MENU', 'Gebruikersmenu');
define('_JNEWS_UCP_USER_CONTACT', 'Mijn inschrijvingen');
 //jNews Cron Menu
define('_JNEWS_UCP_CRON_MENU', 'Cron taakbeheer');
define('_JNEWS_UCP_CRON_NEW_MENU', 'Nieuwe cron');
define('_JNEWS_UCP_CRON_LIST_MENU', 'Mijn cronlijst');
 //jNews Bon Menu
define('_JNEWS_UCP_COUPON_MENU', 'Kortingsbonbeheer');
define('_JNEWS_UCP_COUPON_LIST_MENU', 'Kortingsbonnenlijst');
define('_JNEWS_UCP_COUPON_ADD_MENU', 'Kortingsbon toevoegen');

### lijsts ###
// Tabs
define('_JNEWS_LIST_T_GENERAL', 'Beschrijving');
define('_JNEWS_LIST_T_LAYOUT', 'Layout');
define('_JNEWS_LIST_T_SUBSCRIPTION', 'Inschrijving');
define('_JNEWS_LIST_T_SENDER', 'Zender');
define('_JNEWS_LIST_TYPE', 'Lijsttype');
define('_JNEWS_LIST_NAME', 'Namenlijst');
define('_JNEWS_LIST_ISSUE', 'Uitgave #');
define('_JNEWS_LIST_DATE', 'Verzenddatum');
define('_JNEWS_LIST_SUB', 'Mailingonderwerp');
define('_JNEWS_ATTACHED_FILES', 'Bijlagen');
define('_JNEWS_SELECT_LIST', 'Selecteer a.u.b. een lijst om te bewerken!');

// Auto Responder box
define('_JNEWS_AUTORESP_ON', 'Lijsttype');
define('_JNEWS_AUTO_RESP_OPTION', 'Auto-reageerder opties');
define('_JNEWS_AUTO_RESP_FREQ', 'Abonnees kunnen frequentie kiezen');
define('_JNEWS_AUTO_DELAY', 'Vertraging (in dagen)');
define('_JNEWS_AUTO_DAY_MIN', 'Minimale frequentie');
define('_JNEWS_AUTO_DAY_MAX', 'Maximale frequentie');
define('_JNEWS_FOLLOW_UP', 'Specificeren van een auto-reageerder');
define('_JNEWS_AUTO_RESP_TIME', 'Abonnees kunnen tijd kiezen');
define('_JNEWS_LIST_SENDER', 'Verzendlijst');
define('_JNEWS_LIST_DESC', 'Lijst omschrijving');
define('_JNEWS_LAYOUT', 'Layout');
define('_JNEWS_SENDER_NAME', 'Naam verzender');
define('_JNEWS_SENDER_EMAIL', 'E-mail verzender');
define('_JNEWS_SENDER_BOUNCE', 'Verzender bounce-adres');
define('_JNEWS_LIST_DELAY', 'Vertraging');
define('_JNEWS_HTML_MAILING', 'HTML mailing?');
define('_JNEWS_HTML_MAILING_DESC', '(Als u dit wijzigt, moet u het opslaan en terugkeren naar dit scherm om de opgeslagen wijzigingen te zien.)');
define('_JNEWS_HIDE_FROM_FRONTEND', 'Verberg voor de voorpagina?');
define('_JNEWS_SELECT_IMPORT_FILE', 'Selecteer een bestand om te importeren');;
define('_JNEWS_IMPORT_FINISHED', 'Importeren voltooid');
define('_JNEWS_DELETION_OFFILE', 'Bestand verwijderen');
define('_JNEWS_MANUALLY_DELETE', 'Mislukt, u zult handmatig het bestand moeten verwijderen');
define('_JNEWS_CANNOT_WRITE_DIR', 'Map niet beschrijfbaar');
define('_JNEWS_NOT_PUBLISHED', 'Kan de mailing niet verzenden, de lijst is niet gepubliceerd.');

//  Lijst informatie box
define('_JNEWS_INFO_LIST_PUB', 'Klik op Ja om de lijst te publiceren');
define('_JNEWS_INFO_LIST_NAME', 'Vul de naam van uw lijst hier in. U kunt de lijst herkennen aan deze naam.');
define('_JNEWS_INFO_LIST_DESC', 'Vul een korte omschrijving van uw lijst in. Deze omschrijving is zichtbaar voor de bezoekers van uw site.');
define('_JNEWS_INFO_LIST_SENDER_NAME', 'Vul de naam van de verzender van de mailing in. Deze naam is zichtbaar wanneer de abonnees het bericht ontvangen van deze lijst.');
define('_JNEWS_INFO_LIST_SENDER_EMAIL', 'Vul het e-mailadres in waar vandaan het bericht word verstuurd.');
define('_JNEWS_INFO_LIST_SENDER_BOUNCED', 'Vul het e-mailadres in waar gebruikers antwoord naar toe kunnen sturen. We raden u aan het zelfde e-mailadres te gebruiken als het verzendadres, daar spamfilters uw bericht een hoger spamniveau geven als de e-mailadressen verschillend zijn.');
define('_JNEWS_INFO_LIST_AUTORESP', 'Kies het type mailing voor deze lijst. <br />' .
		'Nieuwsbrief: normale nieuwsbrief<br />' .
		'Auto-responder: een auto-responder is een lijst die automatisch word verstuurd door de website op verschillende tijden.');
define('_JNEWS_INFO_LIST_FREQUENCY', 'Inschakelen dat gebruikers kunnen kiezen hoe vaak ze een lijst ontvangen. Het geeft meer flexibiliteit aan de gebruiker.');
define('_JNEWS_INFO_LIST_TIME', 'Laat de gebruiker een bepaalde tijd van een dag kiezen wanneer zij de lijst willen ontvangen.');
define('_JNEWS_INFO_LIST_MIN_DAY', 'Bepaal wat de minimale frequentie is dat een gebruiker kan kiezen om een lijst te ontvangen.');
define('_JNEWS_INFO_LIST_DELAY', 'Specificeer de vertraging tussen deze auto-responder en de vorige.');
define('_JNEWS_INFO_LIST_DATE', 'Specificeer de datum om de nieuwslijst te publiceren als u de publicering wilt uitstellen. <br /> FORMAAT : YYYY-MM-DD HH:MM:SS');
define('_JNEWS_INFO_LIST_MAX_DAY', 'Bepaal wat de maximale frequentie is dat een gebruiker kan kiezen om de lijst te ontvangen');
define('_JNEWS_INFO_LIST_LAYOUT', 'Voer de layout van uw mailinglijst hier in. U kunt elke layout hier invoegen voor uw mailing.');
define('_JNEWS_INFO_LIST_SUB_MESS', 'Dit bericht zal worden verstuurd naar de abonnee wanneer hij of zij zich voor het eerst registreert. U kunt hier elke tekst invullen die nodig is.');
define('_JNEWS_INFO_LIST_UNSUB_MESS', 'Dit bericht wordt verstuurd naar de abonnee wanneer hij of zij zich uitschrijft. Elk willekeurig bericht kan hier worden ingevuld.');
define('_JNEWS_INFO_LIST_HTML', 'Selecteer de keuzebox als u een HTML-mailing wil versturen. Abonnees kunnen instellen of ze een HTML-bericht willen ontvangen, of een platte tekstbericht wanneer er wordt ingeschreven voor een HTML-lijst.');
define('_JNEWS_INFO_LIST_HIDDEN', 'Klik Ja om de lijst te verbergen voor de voorpagina, gebruikers kunnen zich niet inschrijven, maar je kunt de mailings nog wel versturen.');
define('_JNEWS_INFO_LIST_JNEWS_AUTO_SUB', 'Wilt u automatisch gebruikers toevoegen aan deze lijst?<br /><B>Nieuwe gebruiker:</B> voegt elke gebruiker toe die zich registreert op de website.<br /><B>Alle gebruikers:</B> Voegt alle geregistreerde gebruikers van de database toe.<br />(Al deze opties ondersteunen Community Builder)');
define('_JNEWS_INFO_LIST_ACC_LEVEL', 'Selecteer het voorpagina toegangsniveau. Dit zal de mailing weergeven of verbergen voor gebruikersgroepen die er geen toegang tot hebben, zodat ze niet de mogelijkheid hebben om zich in te schrijven.');
define('_JNEWS_INFO_LIST_ACC_USER_ID', 'Selecteer het toegangsniveau van de gebruikersgroep die mogen bewerken. Die gebruikersgroep en alles daarboven heeft de rechten om de mailing te bewerken en te versturen, zelfs van de frontend of backend.');
define('_JNEWS_INFO_LIST_FOLLOW_UP', 'Als u wilt dat de auto-responder begint met een volgende wanneer het laatste bericht is  bereikt, kunt u hier de volgende auto-responder instellen.');
define('_JNEWS_INFO_LIST_JNEWS_OWNER', 'Dit is de ID van de persoon die deze lijst heeft gecreëerd.');
define('_JNEWS_INFO_LIST_WARNING', 'Deze laatste optie is alleen beschikbaar tijdens het creëeren van de lijst.');
define('_JNEWS_INFO_LIST_SUBJET', 'Onderwerp van de mailing.  Dit is het onderwerp van de e-mail die de abonnee zal ontvangen.');
define('_JNEWS_INFO_MAILING_CONTENT', 'Dit is de inhoud van de e-mail die u wilt versturen.');
define('_JNEWS_INFO_MAILING_NOHTML', 'Voer hier de inhoud in van de e-mail die u wilt versturen naar abonnees die gekozen hebben om alleen niet HTML mailings te ontvangen. <BR/> NOTITIE: als u het leeg laat, zal jNews automatisch de HTML tekst converteren naar alleen tekst.');
define('_JNEWS_INFO_MAILING_VISIBLE', 'Klik op Ja om de mailings weer te geven in de frontend.');
define('_JNEWS_INSERT_CONTENT', 'Voeg bestaande content toe');

// Bonnen
define('_JNEWS_SEND_COUPON_SUCCESS', 'Bon met succes verzonden!');
define('_JNEWS_CHOOSE_COUPON', 'Kies een bon');
define('_JNEWS_TO_USER', ' naar deze gebruiker');

### Cron opties
//drop down frequentie(CRON)
define('_JNEWS_FREQ_CH1', 'Elk uur');
define('_JNEWS_FREQ_CH2', 'Elke 6 uur');
define('_JNEWS_FREQ_CH3', 'Elke 12 uur');
define('_JNEWS_FREQ_CH4', 'Dagelijks');
define('_JNEWS_FREQ_CH5', 'Wekelijks');
define('_JNEWS_FREQ_CH6', 'Maandelijks');
define('_JNEWS_FREQ_NONE', 'Nee');
define('_JNEWS_FREQ_NEW', 'Nieuwe gebruikers');
define('_JNEWS_FREQ_ALL', 'Alle gebruikers');

//Label CRON formulier
define('_JNEWS_LABEL_FREQ', 'jNews Cron?');
define('_JNEWS_LABEL_FREQ_TIPS', 'Klik op Ja als u dit wilt gebruiken voor een jNews Cron en klik Nee voor elke andere Crontaak.<br />' .
		'Als u op Ja klikt, dan hoeft u geen specifiek Cron-adres op te geven, het wordt automatisch toegevoegd.');
define('_JNEWS_SITE_URL', 'Uw website URL');
define('_JNEWS_CRON_FREQUENCY', 'Cron frequentie');
define('_JNEWS_STARTDATE_FREQ', 'Startdatum');
define('_JNEWS_LABELDATE_FREQ', 'Specificeer datum');
define('_JNEWS_LABELTIME_FREQ', 'Specificeer tijd');
define('_JNEWS_CRON_URL', 'Cron URL');
define('_JNEWS_CRON_FREQ', 'Frequentie');
define('_JNEWS_TITLE_CRONLIST', 'Cronlijst');
define('_JNEWS_NEW_LIST', 'Creëer een nieuwe lijst');

//titel CRON formulier
define('_JNEWS_TITLE_FREQ', 'Bewerk Cron');
define('_JNEWS_CRON_SITE_URL', 'Voer aub een geldige website url in die begint met http://');

### Mailings ###
define('_JNEWS_MAILING_ALL', 'Alle mailings');
define('_JNEWS_EDIT_A', 'Bewerk een ');
define('_JNEWS_SELCT_MAILING', 'Selecteer aub een lijst in het dropdownmenu om een nieuwe mailing toe te voegen.');
define('_JNEWS_VISIBLE_FRONT', 'Zichtbaar op de voorpagina');

// e-mail
define('_JNEWS_SUBJECT', 'Onderwerp');
define('_JNEWS_CONTENT', 'Inhoud');
define('_JNEWS_NAMEREP', '{tag:name} = Dit zal vervangen worden door de naam die de abonnee heeft ingevoerd, er wordt een gepersonaliseerde e-mail verstuurd wanneer dit wordt gebruikt.<br />');
define('_JNEWS_FIRST_NAME_REP', '{tag:firstname} = Dit zal vervangen worden door de voornaam die de abonnee heeft ingevuld.<br />');
define('_JNEWS_LOADMODINFO', '{module=id} = Dit zal vervangen worden door de Joomla module waarbij de id gelijk is aan de id van de joomla module. Bijvoorbeeld {module=1}.<br /> De modules kunnen alleen geladen worden via de cron taak. <br />');
define('_JNEWS_NONHTML', 'Niet-html versie');
define('_JNEWS_ATTACHMENTS', 'Bijlagen');
define('_JNEWS_SELECT_MULTIPLE', 'Houdt control (of command) toets vast om meerdere bijlagen te selecteren.<br />' .
		'De bestanden die weergegeven worden in deze bijlagenlijst zijn opgeslagen in de bijlagenmap, u kunt deze locatie wijzigen in het configuratiescherm.');
define('_JNEWS_CONTENT_ITEM', 'Inhoud item');
define('_JNEWS_SENDING_EMAIL', 'Bezig met versturen van e-mail');
define('_JNEWS_MESSAGE_NOT', 'Bericht kon niet worden verstuurd');
define('_JNEWS_MAILER_ERROR', 'Verzender fout');
define('_JNEWS_MESSAGE_SENT_SUCCESSFULLY', 'Bericht met succes verstuurd.');
define('_JNEWS_SENDING_TOOK', 'Versturen van deze mailing duurt');
define('_JNEWS_SECONDS', 'seconden');
define('_JNEWS_NO_ADDRESS_ENTERED', 'Geen e-mail adres van abonnee ingevoerd');
define('_JNEWS_CHANGE_SUBSCRIPTIONS', 'Wijzig');
define('_JNEWS_CHANGE_EMAIL_SUBSCRIPTION', 'Wijzig uw inschrijving');
define('_JNEWS_WHICH_EMAIL_TEST', 'Geef het e-mailadres op om een testmail toe te sturen of selecteer voorbeeld');
define('_JNEWS_SEND_IN_HTML', 'Verstuur in HTML (voor html mailings)?');
define('_JNEWS_VISIBLE', 'Zichtbaar');
define('_JNEWS_INTRO_ONLY', 'Alleen intro');
define('_JNEWS_TEST' , 'zzzjhentest');

// statistieken
define('_JNEWS_GLOBALSTATS', 'Globale statistieken');
define('_JNEWS_DETAILED_STATS', 'Gedetailleerde statistieken');
define('_JNEWS_MAILING_LIST_DETAILS', 'Lijstdetails');
define('_JNEWS_SEND_IN_HTML_FORMAT', 'Verstuurd in HTML-formaat');
define('_JNEWS_VIEWS_FROM_HTML', 'Bekeken (van html-mails)');
define('_JNEWS_SEND_IN_TEXT_FORMAT', 'Verstuur in tekstformaat');
define('_JNEWS_HTML_READ', 'HTML gelezen');
define('_JNEWS_HTML_UNREAD', 'HTML ongelezen');
define('_JNEWS_TEXT_ONLY_SENT', 'Alleen tekst');

// Configuratie scherm
// Hoofd tabs
define('_JNEWS_MAIL_CONFIG', 'Mail');
define('_JNEWS_LOGGING_CONFIG', 'Logs & Statistieken');
define('_JNEWS_SUBSCRIBER_CONFIG', 'Abonnees');
define('_JNEWS_AUTO_CONFIG', 'Cron');
define('_JNEWS_MISC_CONFIG', 'Overige');
define('_JNEWS_MAIL_SETTINGS', 'Mailinstellingen');
define('_JNEWS_MAILINGS_SETTINGS', 'Instellingen mailings');
define('_JNEWS_SUBCRIBERS_SETTINGS', 'Abonnee-instellingen');
define('_JNEWS_CRON_SETTINGS', 'Croninstellingen');
define('_JNEWS_SENDING_SETTINGS', 'Versturen-instellingen');
define('_JNEWS_STATS_SETTINGS', 'Statistieken-instellingen');
define('_JNEWS_LOGS_SETTINGS', 'Logsinstellingen');
define('_JNEWS_MISC_SETTINGS', 'Overige instellingen');
// mail instellingen
define('_JNEWS_SEND_MAIL_FROM', 'Bounce Back-adres<br/>(gebruikt als terugkaatsadres voor al uw berichten)');
define('_JNEWS_SEND_MAIL_NAME', 'Van Naam');
define('_JNEWS_MAILSENDMETHOD', 'Mailmethode');
define('_JNEWS_SENDMAILPATH', 'Uitgaand mail-pad');
define('_JNEWS_SMTPHOST', 'SMTP-host');
define('_JNEWS_SMTPAUTHREQUIRED', 'SMTP-wachtwoordverificatie vereist');
define('_JNEWS_SMTPAUTHREQUIRED_TIPS', 'Selecteer ja als uw SMTP-server wachtwoordverificatie vereist');
define('_JNEWS_SMTPUSERNAME', 'SMTP-gebruikersnaam');
define('_JNEWS_SMTPUSERNAME_TIPS', 'Voer de SMTP-gebruikersnaam in wanneer uw SMTP-server wachtwoordverificatie vereist');
define('_JNEWS_SMTPPASSWORD', 'SMTP-wachtwoord');
define('_JNEWS_SMTPPASSWORD_TIPS', 'Voer het SMTP-wachtwoord in wanneer uw SMTP-server wachtwoordverificatie vereist');
define('_JNEWS_USE_EMBEDDED', 'Gebruik ingesloten plaatjes');
define('_JNEWS_USE_EMBEDDED_TIPS', 'Selecteer ja als de plaatjes in de toegevoegde contentitems ingesloten dienen te worden in html-berichten, of nee om de link te gebruiken van de standaardplaatjes van deze site.');
define('_JNEWS_UPLOAD_PATH', 'Uploadpad / bijlagenpad');
define('_JNEWS_UPLOAD_PATH_TIPS', 'U kunt een uploadmap specificeren.<br />' .
		'U moet zeker weten dat deze map bestaat, anders creëer deze.');

// Abonnee instellingen
define('_JNEWS_ALLOW_UNREG', 'Sta niet geregistreerde gebruikers toe');
define('_JNEWS_ALLOW_UNREG_TIPS', 'Selecteer Ja als u wilt toestaan dat gebruikers zich kunnen inschrijven zonder lid te worden van de website.');
define('_JNEWS_REQ_CONFIRM', 'Bevestiging vereist');
define('_JNEWS_REQ_CONFIRM_TIPS', 'Selecteer ja als u niet-geregistreerde gebruikers hun e-mailadres wilt laten bevestigen.');
define('_JNEWS_SUB_SETTINGS', 'Abonnee-instellingen');
define('_JNEWS_SUBMESSAGE', 'E-mail abonnee');
define('_JNEWS_SUBSCRIBE_LIST', 'Inschrijven bij een lijst');

define('_JNEWS_USABLE_TAGS', 'Te gebruiken tags');
define('_JNEWS_NAME_AND_CONFIRM', '<b>{tag:confirm}</b> = Dit creëert een klikbare link waar de abonnee zijn inschrijving kan bevestigen. Dit is <strong>vereist</strong> om jNews goed te laten werken.<br />'
.'<br />{tag:name} = Dit zal vervangen worden door de naam die de abonnee heeft ingevoerd. Er wordt een persoonlijke e-mail verzonden als dit wordt gebruikt.<br />'
.'<br />{tag:firstname} = Dit zal vervangen worden door de voornaam van de abonnee. Voornaam is gedefinieerd als de eerste naam die de abonnee heeft ingevoerd.<br />');
define('_JNEWS_CONFIRMFROMNAME', 'Naam bevestigen');
define('_JNEWS_CONFIRMFROMNAME_TIPS', 'Voer de \'van\' naam in om weer te geven in bevestigingslijsten.');
define('_JNEWS_CONFIRMFROMEMAIL', 'E-mail bevestigen');
define('_JNEWS_CONFIRMFROMEMAIL_TIPS', 'Voer het e-mailadres in om weer te geven op bevestingslijsten.');
//define('_JNEWS_CONFIRMBOUNCE', 'Bevestig bounce-adres');
//define('_JNEWS_CONFIRMBOUNCE_TIPS', 'Voer het bounce-adres in om weer te geven op bevestigingslijsten.');
define('_JNEWS_HTML_CONFIRM', 'HTML bevestigen');
define('_JNEWS_HTML_CONFIRM_TIPS', 'Selecteer ja als bevestingslijsten in html moet zijn als de gebruiker html heeft toegestaan.');
define('_JNEWS_TIME_ZONE_ASK', 'Vraag tijdzone');
define('_JNEWS_TIME_ZONE_TIPS', 'Selecteer ja als u de tijdzone van de gebruikers wilt vragen. De mailings die in de wachtrij staan zullen verzonden worden volgens de tijdzone');

 // Cron configureren
define('_JNEWS_TIME_OFFSET_URL', 'Klik hier om de offset te wijzigen in het configuratiescherm -> Locale tab');
define('_JNEWS_TIME_OFFSET_TIPS', 'Stel uw server offset tijd in zodat opgeslagen datum en tijd gelijk zijn');
define('_JNEWS_TIME_OFFSET', 'Tijd offset');
define('_JNEWS_CRON_TITLE', 'Opzetten cronfunctie');
define('_JNEWS_CRON_DESC', '<br />Door de cronfunctie te gebruiken kunt u een automatische taak instellen voor uw Joomla website!<br />' .
		'Om dit in te stellen moet u in uw Controlepaneel -> crontab het volgende commando invoeren:<br />' .
		'<b>' . JNEWS_JPATH_LIVE . '/index.php?option=com_jnews&act=cron</b> ' .
		'<br /><br />Als u hulp nodig heeft voor het instellen of heeft u problemen, raadpleeg dan aub ons forum <a href="http://www.joobi.co" target="_blank">http://www.joobi.co</a>');

// Instellingen verzenden
define('_JNEWS_PAUSEX', 'Pauze x seconden na elke geconfigureerde hoeveelheid e-mails');
define('_JNEWS_PAUSEX_TIPS', 'Voer het aantal seconden in. jNews zal de SMTP-server de tijd geven om de berichten te versturen voordat de volgende geconfigureerde hoeveelheid berichten wordt verzonden.');
define('_JNEWS_EMAIL_BET_PAUSE', 'Pauzes tussen de e-mails');
define('_JNEWS_EMAIL_BET_PAUSE_TIPS', 'Het aantal verzonden e-mails voordat er wordt gepauzeerd.');
define('_JNEWS_WAIT_USER_PAUSE', 'Wachten voor gebruikersinvoer tijdens pauze');
define('_JNEWS_WAIT_USER_PAUSE_TIPS', 'of het script moet wachten voor gebruikersinvoer tijdens pauze tussen een reeks van mailings.');
define('_JNEWS_SCRIPT_TIMEOUT', 'Script timeout');
define('_JNEWS_SCRIPT_TIMEOUT_TIPS', 'Aantal minuten dat het script zou moeten werken.');
// Instellingen statistieken
define('_JNEWS_ENABLE_READ_STATS', 'Inschakelen leesstatistieken');
define('_JNEWS_ENABLE_READ_STATS_TIPS', 'Selecteer ja als u het aantal views wilt loggen. Deze techniek kan alleen worden gebruikt voor HTML-mailings');
define('_JNEWS_LOG_VIEWSPERSUB', 'Log views per abonnee');
define('_JNEWS_LOG_VIEWSPERSUB_TIPS', 'Selecteer ja als u het aantal views per abonnee wilt loggen. Deze techniek kan alleen worden gebruikt voor HTML-mailings');

// Logs instellingen
define('_JNEWS_DETAILED', 'Gedetailleerde logs');
define('_JNEWS_SIMPLE', 'Eenvoudige logs');
define('_JNEWS_DIAPLAY_LOG', 'Logs weergeven');
define('_JNEWS_DISPLAY_LOG_TIPS', 'Selecteer ja als u de logs wilt weergeven tijdens het verzenden van de mailings.');
define('_JNEWS_SEND_PERF_DATA', 'Verzend performance');
define('_JNEWS_SEND_PERF_DATA_TIPS', 'Selecteer ja als u jNews wilt toestaan om anonieme rapporten te versturen over uw configuratie. Het aantal abonnees van een lijst en de tijd die nodig is om een mailing te versturen. Dit geeft ons een idee over de jNews performance en zal ons helpen om jNews te verbeteren in toekomstige ontwikkelingen.');
define('_JNEWS_SEND_AUTO_LOG', 'Verzend log voor auto-responder');
define('_JNEWS_SEND_AUTO_LOG_TIPS', 'Selecteer ja als u elke keer een e-maillog wilt versturen als de wachtrij voltooid is.  WAARSCHUWMING: dit kan leiden tot een grote hoeveelheid e-mails.');
define('_JNEWS_SEND_LOG', 'Verzend log');
define('_JNEWS_SEND_LOG_TIPS', 'Of een log van de mailing gemaild moet worden naar het e-mail adres van de gebruiker die de mailing heeft verzonden.');
define('_JNEWS_SEND_LOGDETAIL', 'Verzend logdetail');
define('_JNEWS_SEND_LOGDETAIL_TIPS', 'Details verzorgt het succes van foutinformatie voor iedere abonnee en een overzicht van de informatie. Details verzendt eenvoudig het overzicht.');
define('_JNEWS_SEND_LOGCLOSED', 'Verzendt log als verbinding is afgesloten');
define('_JNEWS_SEND_LOGCLOSED_TIPS', 'Met deze instelling van de gebruiker die de mailing verstuurt, krijgt de gebruiker toch nog een rapport via de e-mail.');
define('_JNEWS_SAVE_LOG', 'Log opslaan');
define('_JNEWS_SAVE_LOG_TIPS', 'Of de log van de mailing toegevoegd moet worden aan het logbestand.');
define('_JNEWS_SAVE_LOGDETAIL', 'Logdetail opslaan');
define('_JNEWS_SAVE_LOGDETAIL_TIPS', 'Details verzorgt het succes van foutinformatie voor iedere abonnee en een overzicht van de informatie. Het verzendt eenvoudig het overzicht.');
define('_JNEWS_SAVE_LOGFILE', 'Logbestand opslaan');
define('_JNEWS_SAVE_LOGFILE_TIPS', 'Bestand waar loginformatie aan wordt toegevoegd. Het bestand kan heel groot worden.');
define('_JNEWS_CLEAR_LOG', 'Logbestand leegmaken');
define('_JNEWS_CLEAR_LOG_TIPS', 'Maakt het logbestand leeg.');

### Configuratiescherm
define('_JNEWS_CP_LAST_QUEUE', 'Leest uitgevoerde wachtrij');
define('_JNEWS_CP_TOTAL', 'Totaal');
define('_JNEWS_MAILING_COPY', 'Mailing met succes gekopieerd!');

// Overige instellingen
define('_JNEWS_SHOW_GUIDE', 'Handleiding weergeven');
define('_JNEWS_SHOW_GUIDE_TIPS', 'Geef tijdens het starten de handleiding weer om nieuwe gebruikers te helpen om een nieuwsbrief, een auto-responder te creëeren en jNews goed in te stellen.');
define('_JNEWS_AUTOS_ON', 'Gebruik Auto-responders');
define('_JNEWS_AUTOS_ON_TIPS', 'Selecteer Nee als u geen Auto-responders wilt gebruiken, alle auto-responderinstellingen worden gedeactiveerd.');
define('_JNEWS_NEWS_ON', 'Gebruik Nieuwsbrieven');
define('_JNEWS_NEWS_ON_TIPS', 'Selecteer Nee als u geen gebruik wilt maken van Nieuwsbrieven, Alle nieuwsbrief-opties zullen worden gedeactiveerd.');
define('_JNEWS_SHOW_TIPS', 'Tips weergeven');
define('_JNEWS_SHOW_TIPS_TIPS', 'Geeft tips weer om gebruikers te helpen om jNews efficiënter te gebruiken.');
define('_JNEWS_SHOW_FOOTER', 'Geeft voetnoot weer');
define('_JNEWS_SHOW_FOOTER_TIPS', 'Of de voetnoot copyright notitie moet worden weergegeven.');
define('_JNEWS_SHOW_LISTS', 'Geeft lijst weer op de frontend');
define('_JNEWS_SHOW_LISTS_TIPS', 'Wanneer een gebruiker niet geregistreerd is, geeft een overzicht weer van de lijsten waar zij zich op kunnen inschrijven met een archiefknop voor nieuwsbrieven of een eenvoudig inlogformulier zodat zij zich kunnen registreren.');
define('_JNEWS_CONFIG_UPDATED', 'De configuratiedetails zijn bijgewerkt!');
define('_JNEWS_UPDATE_URL', 'Update URL');
define('_JNEWS_UPDATE_URL_WARNING', 'WAARSCHUWING! Wijzig deze URL niet tenzij dit gevraagd is door het jNews technisch team.<br />');
define('_JNEWS_UPDATE_URL_TIPS', 'Voorbeeld: http://www.joobi.co/update/ (schuine streep is belangrijk)');

// module
define('_JNEWS_EMAIL_INVALID', 'De ingevoerde e-mail is ongeldig.');
define('_JNEWS_REGISTER_REQUIRED', 'Registreert u zich aub eerst op de site voordat u zich kunt inschrijven voor de lijst.');

// Toegangsniveau box
define('_JNEWS_OWNER', 'Maker van de lijst:');
define('_JNEWS_ACCESS_LEVEL', 'Stel toegangsniveau in voor de lijst');
define('_JNEWS_ACCESS_LEVEL_OPTION', 'Toegangsniveau instellingen');
define('_JNEWS_USER_LEVEL_EDIT', 'Selecteer welk gebruikersniveau is toegestaan om een mailing te bewerken. (in de frontend of backend) ');

//  drop down opties
define('_JNEWS_AUTO_DAY_CH1', 'Dagelijks');
define('_JNEWS_AUTO_DAY_CH2', 'Dagelijks, geen weekend');
define('_JNEWS_AUTO_DAY_CH3', 'Om de dag');
define('_JNEWS_AUTO_DAY_CH4', 'Om de dag, geen weekend');
define('_JNEWS_AUTO_DAY_CH5', 'Wekelijks');
define('_JNEWS_AUTO_DAY_CH6', 'Om de week');
define('_JNEWS_AUTO_DAY_CH7', 'Maandelijks');
define('_JNEWS_AUTO_DAY_CH9', 'Jaarlijks');
define('_JNEWS_AUTO_OPTION_NONE', 'Nee');
define('_JNEWS_AUTO_OPTION_NEW', 'Nieuwe gebruikers');
define('_JNEWS_AUTO_OPTION_ALL', 'Alle gebruikers');

//
define('_JNEWS_UNSUB_MESSAGE', 'Uitschrijvings e-mail');
define('_JNEWS_UNSUB_SETTINGS', 'Uitschrijvingsinstellingen');
define('_JNEWS_AUTO_ADD_NEW_USERS', 'Automatisch inschrijven gebruiker?');

// Update and upgrade berichten
define('_JNEWS_NO_UPDATES', 'Er zijn momenteel geen updates beschikbaar.');
define('_JNEWS_VERSION', 'jNews versie');
define('_JNEWS_NEED_UPDATED', 'Bestanden die bijgewerkt moeten worden:');
define('_JNEWS_NEED_ADDED', 'Bestanden die toegevoegd moeten worden:');
define('_JNEWS_NEED_REMOVED', 'Bestanden die verwijderd moeten worden:');
define('_JNEWS_FILENAME', 'Bestandsnaam:');
define('_JNEWS_CURRENT_VERSION', 'Huidige versie:');
define('_JNEWS_NEWEST_VERSION', 'Nieuwste versie:');
define('_JNEWS_UPDATING', 'Bezig met bijwerken');
define('_JNEWS_UPDATE_UPDATED_SUCCESSFULLY', 'De bestanden zijn met succes bijgewerkt.');
define('_JNEWS_UPDATE_FAILED', 'Update mislukt!');
define('_JNEWS_ADDING', 'Toevoegen');
define('_JNEWS_ADDED_SUCCESSFULLY', 'Met succes toegevoegd.');
define('_JNEWS_ADDING_FAILED', 'Toevoegen mislukt!');
define('_JNEWS_REMOVING', 'Verwijderen');
define('_JNEWS_REMOVED_SUCCESSFULLY', 'Met succes verwijderd.');
define('_JNEWS_REMOVING_FAILED', 'Verwijderen mislukt!');
define('_JNEWS_INSTALL_DIFFERENT_VERSION', 'Installeer een andere versie');
define('_JNEWS_CONTENT_ADD', 'Content toevoegen');
define('_JNEWS_UPGRADE_FROM', 'Importeer data (nieuwsbrieven en abonnees informatie) van ');
define('_JNEWS_UPGRADE_MESS', 'Uw bestaande data loopt geen risico. <br /> Dit proces zal de data in de jNews database importeren.');
define('_JNEWS_CONTINUE_SENDING', 'Doorgaan met verzenden');

// jNews bericht
define('_JNEWS_UPGRADE1', 'U kunt eenvoudig uw gebruikers en nieuwsbrieven importeren van ');
define('_JNEWS_UPGRADE2', ' naar jNews in het updatescherm.');
define('_JNEWS_UPDATE_MESSAGE', 'Een nieuwe versie van jNews is beschikbaar. ');
define('_JNEWS_UPDATE_MESSAGE_LINK', 'Klik hier om de update te starten!');
define('_JNEWS_THANKYOU', 'Bedankt voor het kiezen van jNews, uw communicatiepartner!');
define('_JNEWS_NO_SERVER', 'Updateserver niet beschikbaar, controleer later nog een keer aub.');
define('_JNEWS_MOD_PUB', 'jNews module is niet gepubliceerd.');
define('_JNEWS_MOD_PUB_LINK', 'Klik hier om deze te publiceren!');
define('_JNEWS_IMPORT_SUCCESS', 'Succesvol geïmporteerd');
define('_JNEWS_IMPORT_EXIST', 'Abonnee bestaat al in de database');


// jNews Installatie
define('_JNEWS_INSTALL_CONFIG', 'jNews Configuratie');
define('_JNEWS_INSTALL_SUCCESS', 'Succesvol geïnstalleerd');
define('_JNEWS_INSTALL_ERROR', 'Installatiefout');
define('_JNEWS_INSTALL_BOT', 'jNews Plugin (Bot)');
define('_JNEWS_INSTALL_MODULE', 'jNews Module');
//Overig
define('_JNEWS_JAVASCRIPT', '!Waarschuwing! Javascript moet ingeschakeld worden voor een goede werking.');
define('_JNEWS_EXPORT_TEXT', 'Het exporteren van abonnees is gebaseerd op de lijst die u heeft gekozen. <br />Exporteer abonnees voor de lijst');
define('_JNEWS_IMPORT_TIPS', 'Importeer abonnees. De informatie in het bestand moet in het volgende formaat staan: <br />' .
		'Name,email,receiveHTML(1/0),<span style="color: rgb(255, 0, 0);">confirmed(1/0)</span>');
define('_JNEWS_SUBCRIBER_EXIT', 'is al abonnee');
define('_JNEWS_GET_STARTED', 'Klik hier om te starten!');

//Nieuw sinds 1.0.1
define('_JNEWS_WARNING_1011', 'Waarschuwing: 1011: Update zal niet werken door uw serverrestricties.');
define('_JNEWS_SEND_MAIL_FROM_TIPS', 'gebruikt als bounce-adres voor al uw berichten');
define('_JNEWS_SEND_MAIL_NAME_TIPS', 'Kies welke naam moet worden weergegeven als verzender.');
define('_JNEWS_MAILSENDMETHOD_TIPS', 'Kies welke mailmethode u wilt gebruiken: PHP mail functie, <span>Sendmail</span> of SMTP Server.');
define('_JNEWS_SENDMAILPATH_TIPS', 'Dit is de directory van de mail-server');
define('_JNEWS_LIST_T_TEMPLATE', 'Template');
define('_JNEWS_NO_MAILING_ENTERED', 'Geen mailing beschikbaar');
define('_JNEWS_NO_LIST_ENTERED', 'Geen lijst beschikbaar');
define('_JNEWS_SENT_MAILING', 'Verzend mailings');
define('_JNEWS_SELECT_FILE', 'Selecteer aub ook een bestand ');
define('_JNEWS_LIST_IMPORT', 'Selecteer de lijst(en) waar u abonnees mee geassocieerd wilt hebben.');
define('_JNEWS_PB_QUEUE', 'Abonnee toegevoegd, maar er is een probleem om hem/haar aan de lijst(en) te verbinden. Kijk aub in de handleiding.');
define('_JNEWS_UPDATE_MESS', '');
define('_JNEWS_UPDATE_MESS1', 'Update dringend geadviseerd!');
define('_JNEWS_UPDATE_MESS2', 'Patch en kleine foutoplossingen');
define('_JNEWS_UPDATE_MESS3', 'Nieuwe release.');
define('_JNEWS_UPDATE_MESS5', 'Joomla 1.5 is vereist om te updaten.');
define('_JNEWS_UPDATE_IS_AVAIL', ' is beschikbaar!');
define('_JNEWS_NO_MAILING_SENT', 'Geen mailing verstuurd!');
define('_JNEWS_SHOW_LOGIN', 'Geef loginformulier weer');
define('_JNEWS_SHOW_LOGIN_TIPS', 'Selecteer Ja om een loginformulier weer te geven op het front-end jNews configuratiescherm zodat een gebruiker zich kan registreren op de website.');
define('_JNEWS_LISTS_EDITOR', 'Editor lijst beschijving');
define('_JNEWS_LISTS_EDITOR_TIPS', 'Selecteer Ja om een HTML-editor te gebruiken om het lijstomschrijvingsveld te bewerken.');
define('_JNEWS_SUBCRIBERS_VIEW', 'Bekijk abonnees');

//News since 1.0.2
define('_JNEWS_FRONTEND_SETTINGS', 'Frontendinstellingen');
define('_JNEWS_SHOW_LOGOUT', 'Laat uitlog zien');
define('_JNEWS_SHOW_LOGOUT_TIPS', 'Selecteer Ja om een uitlog op het jNews panel te laten zien.');

//News since 1.0.3 CB integration
define('_JNEWS_CONFIG_INTEGRATION', 'Integratie');
define('_JNEWS_CB_INTEGRATION', 'Community Builder integratie');
define('_JNEWS_INSTALL_PLUGIN', 'Community Builder plugin (jNews integratie) ');
define('_JNEWS_CB_PLUGIN_NOT_INSTALLED', 'jNews plugin voor Community Builder is nog niet geïnstalleerd!');
define('_JNEWS_CB_PLUGIN', 'Registratielijsten');
define('_JNEWS_CB_PLUGIN_TIPS', 'Kies Ja om de maillijst in het Community Builder registratieformulier te laten zien');
define('_JNEWS_CB_LISTS', 'Lijst IDs');
define('_JNEWS_CB_LISTS_TIPS', 'DIT IS EEN VERPLICHT VELD. Vul het id-nummer in van de lijst waarop gebruikers zich kunnen inschrijven, gescheiden door een komma,  (0 toont alle lijsten)');
define('_JNEWS_CB_INTRO', 'Introductietekst');
define('_JNEWS_CB_INTRO_TIPS', 'Een tekst die ingevuld wordt zal voor de lijst getoond worden. LAAT LEEG OM NIETS TE TONEN.  Gebruik  cb_pretekst voor CSS layout.');
define('_JNEWS_CB_SHOW_NAME', 'Toon de lijstnaam');
define('_JNEWS_CB_SHOW_NAME_TIPS', 'Kies om de naam van de lijst al dan niet te tonen na de introductie. ');
define('_JNEWS_CB_LIST_DEFAULT', 'Standaard aanvinken');
define('_JNEWS_CB_LIST_DEFAULT_TIPS', 'Kies of het keuzevakje standaard ingevuld moet worden voor elke lijst. ');
define('_JNEWS_CB_HTML_SHOW', 'Toon Ontvang HTML');
define('_JNEWS_CB_HTML_SHOW_TIPS', 'Kies Ja om gebruikers een keuze te laten maken of ze HTML-mails willen ontvangen of niet. Kies Nee om standaard HTML te ontvangen. ');
define('_JNEWS_CB_HTML_DEFAULT', 'Standaard ontvangst HTML');
define('_JNEWS_CB_HTML_DEFAULT_TIPS', 'Kies voor deze optie om de standaard HTML mailconfiguratie te tonen. Als het Standaard ontvangst HTML op Nee staat is deze optie standaard. ');

// Since 1.0.4
define('_JNEWS_BACKUP_FAILED', 'Kan geen backup van het bestand maken! Bestand niet vervangen.');
define('_JNEWS_BACKUP_YOUR_FILES', 'De backup van de oude versie van de bestanden zijn in de volgende directory geplaatst:');
define('_JNEWS_SERVER_LOCAL_TIME', 'Lokale servertijd');
define('_JNEWS_SHOW_ARCHIVE', 'Geef archiefknop weer');
define('_JNEWS_SHOW_ARCHIVE_TIPS', 'Selecteer JA om de archiefknop in de nieuwsbrievenlijst op de front-end weer te geven');
define('_JNEWS_LIST_OPT_TAG', 'Tags');
define('_JNEWS_LIST_OPT_IMG', 'Plaatjes');
define('_JNEWS_LIST_OPT_CTT', 'Inhoud');
define('_JNEWS_INPUT_NAME_TIPS', 'Voer uw volledige naam in (voornaam eerst)');
define('_JNEWS_IP_TIPS', 'IP of the subscriber' );
define('_JNEWS_INPUT_EMAIL_TIPS', 'Voer uw e-mail adres in (Dit moet een geldig e-mail adres zijn als u onze mailings wilt ontvangen.)');
define('_JNEWS_RECEIVE_HTML_TIPS', 'Kies Ja als u HTML-mailings wilt ontvangen - Nee om alleen tekstmailings te ontvangen');
define('_JNEWS_TIME_ZONE_ASK_TIPS', 'Bepaal uw tijdzone.');

// Since 1.0.5
define('_JNEWS_FILES', 'Bestanden');
define('_JNEWS_FILES_UPLOAD', 'Upload');
define('_JNEWS_MENU_UPLOAD_IMG', 'Upload plaatjes');
define('_JNEWS_TOO_LARGE', 'Bestandgrootte is te groot. De maximale toegestane grootte is');
define('_JNEWS_MISSING_DIR', 'Doelmap bestaat niet');
define('_JNEWS_IS_NOT_DIR', 'Doelmap bestaat niet of het is een normaal bestand.');
define('_JNEWS_NO_WRITE_PERMS', 'De doelmap heeft geen schrijfrechten.');
define('_JNEWS_NO_USER_FILE', 'U heeft geen bestand geselecteerd voor uploaden.');
define('_JNEWS_E_FAIL_MOVE', 'Onmogelijk om het bestand te verplaatsen.');
define('_JNEWS_FILE_EXISTS', 'Het doelbestand bestaat reeds.');
define('_JNEWS_CANNOT_OVERWRITE', 'Het doelbestand bestaat reeds of kan niet overschreven worden.');
define('_JNEWS_NOT_ALLOWED_EXTENSION', 'Bestandsextensie niet toegestaan.');
define('_JNEWS_PARTIAL', 'Het bestand was alleen ten dele geupload.');
define('_JNEWS_UPLOAD_ERROR', 'Uploadfout:');
define('_JNEWS_DEV_NO_DEF_FILE', 'Het bestand was alleen ten dele geupload.');
define('_JNEWS_CONTENTREP', '{tag:subscriptions} = Dit zal worden vervangen door de inschrijvingslinks.' .
		' Dit is <strong>vereist</strong> om jNews goed te laten werken.<br />' .
		'Als u andere content in deze box plaatst, wordt het weergegeven in alle mailings die betrekking hebben op deze lijst.' .
		' <br />Voeg uw inschrijvingsbericht toe op het eind. jNews zal automatisch een link toevoegen voor de abonnee om hun gegevens aan te passen en een link om zich uit te schrijven van de lijst.');

// since 1.0.6
define('_JNEWS_NOTIFICATION', 'Notificatie');  // shortcut for E-mail notification
define('_JNEWS_NOTIFICATIONS', 'Notificatie');
define('_JNEWS_USE_SEF', 'SEF in mailings');
define('_JNEWS_USE_SEF_TIPS', 'Het wordt aanbevolen om Nee te kiezen. Als u toch de URL in de mailings als SEF wilt gebruiken, kies dan Ja.' .
		' <br /><b>De link werkt hetzelfde voor de beide opties.  We kunnen niet verzekeren dat de links in de mailings altijd werken, zelfs als u uw SEF wijzigt.</b> ');
define('_JNEWS_ERR_NB', 'Fout #: ERR');
define('_JNEWS_ERR_SETTINGS', 'Foutafhandelingsinstellingen');
define('_JNEWS_ERR_SEND', 'Verzend foutrapport');
define('_JNEWS_ERR_SEND_TIPS', 'Als u jNews wilt helpen verbeteren, selecteer aub JA.  Deze keuze zal ons een foutrapport sturen.  Zo hoeft u geen bugs meer te rapporteren. ;-) <br /> <b>ER WORD GEEN PERSOONLIJKE INFORMATIE VERSTUURD</b>.  We weten niet eens van welke website de fout vandaan komt. We versturen alleen de informatie over jNews, de PHP instellingen en de SQL queries. ');
define('_JNEWS_ERR_SHOW_TIPS', 'Kies Ja om het foutnummer weer te geven.  Hoofdzakelijk gebruikt voor debugging. ');
define('_JNEWS_ERR_SHOW', 'Geef fouten weer');
define('_JNEWS_LIST_SHOW_UNSUBCRIBE', 'Geef uitschrijvingslinks weer');
define('_JNEWS_LIST_SHOW_UNSUBCRIBE_TIPS', 'Selecteer Ja om uitschrijvingslinks op het eind van de mailing weer te geven om gebruikers hun inschrijvingen te kunnen laten wijzigen. <br /> Niet de voetnoot en de links uitschakelen.');
define('_JNEWS_UPDATE_INSTALL', '<span style="color: rgb(255, 0, 0);">BELANGRIJKE INFORMATIE!</span> <br />Als u een vorige jNews installatie bijwerkt, moet u de databasestructuur bijwerken door op de volgende knop te klikken (Uw gegevens zullen bewaard blijven)');
define('_JNEWS_UPDATE_INSTALL_BTN', 'Tabellen en configuratie bijwerken');
define('_JNEWS_MAILING_MAX_TIME', 'Max queue tijd');
define('_JNEWS_MAILING_MAX_TIME_TIPS', 'Definieer de maximale tijd voor elke set e-mails verstuurd door de queue. Aanbevolen tussen 30 seconden en 2 minuten.');

// virtuemart integration beta
define('_JNEWS_VM_INTEGRATION', 'VirtueMart integratie');
define('_JNEWS_VM_COUPON_NOTIF', 'Kortingsbon notificatie ID.');
define('_JNEWS_VM_COUPON_NOTIF_TIPS', 'Specificeer het ID-nummer van de mailing die u wilt gebruiken om kortingsbonnen te verzenden naar uw klanten.');
define('_JNEWS_VM_NEW_PRODUCT', 'Nieuwe producten notificatie ID');
define('_JNEWS_VM_NEW_PRODUCT_TIPS', 'Specificeer het ID-nummer van de mailing die u wilt gebruiken om nieuwe product notificatie te verzenden.');

// since 1.0.8
// create forms for subscriptions
define('_JNEWS_FORM_BUTTON', 'Creëer formulier');
define('_JNEWS_FORM_COPY', 'HTML code');
define('_JNEWS_FORM_COPY_TIPS', 'Kopiëer de gegenereerde HTML code in uw HTML pagina.');
define('_JNEWS_FORM_LIST_TIPS', 'Selecteer de lijst die u wilt invoegen in het formulier');
// update messages
define('_JNEWS_UPDATE_MESS4', 'Het kan niet automatisch worden bijgewerkt.');
define('_JNEWS_WARNG_REMOTE_FILE', 'Het bestand kan niet verwijderd worden.');
define('_JNEWS_ERROR_FETCH', 'Fout tijdens openen bestand.');

define('_JNEWS_CHECK', 'Controleer');
define('_JNEWS_MORE_INFO', 'Meer info');
define('_JNEWS_UPDATE_NEW', 'Bijwerken naar een nieuwere versie');
define('_JNEWS_UPGRADE', 'Bijwerken naar een beter produkt');
define('_JNEWS_DOWNDATE', 'Bijwerken naar een vorige versie');
define('_JNEWS_DOWNGRADE', 'Terug naar het basisprodukt');
define('_JNEWS_REQUIRE_JOOM', 'Joomla vereist');
define('_JNEWS_TRY_IT', 'Probeer het!');
define('_JNEWS_NEWER', 'Nieuwer');
define('_JNEWS_OLDER', 'Ouder');
define('_JNEWS_CURRENT', 'Huidige');

// since 1.0.9
define('_JNEWS_CHECK_COMP', 'Probeer een van de andere componenten');
define('_JNEWS_MENU_VIDEO', 'Video tutorials');
define('_JNEWS_SCHEDULE_TITLE', 'Automatische instelling roosterfunctie ');
define('_JNEWS_ISSUE_NB_TIPS', 'Mailnummer wordt automatisch gegenereerd door het systeem');
define('_JNEWS_SEL_ALL', 'Alle mailings');
define('_JNEWS_SEL_ALL_SUB', 'Alle lijsten');
define('_JNEWS_INTRO_ONLY_TIPS', 'Als je dit hokje aanvinkt zal alleen het introductiedeel van het artikel in de nieuwsbrief geplaatst worden met een "lees meer" link naar het volledige artikel op je site.');
define('_JNEWS_TAGS_TITLE', 'Inhoudslabel');
define('_JNEWS_TAGS_TITLE_TIPS', 'Kopieer en plak het label in de nieuwsbrief waar de inhoud geplaatst moet worden.');
define('_JNEWS_PREVIEW_EMAIL_TEST', 'Vermeld het e-mailadres waar de testmail naar toe gestuurd wordt');
define('_JNEWS_PREVIEW_TITLE', 'Preview');
define('_JNEWS_AUTO_UPDATE', 'Nieuwe updatemelding');
define('_JNEWS_AUTO_UPDATE_TIPS', 'Kies Ja als u geïnformeerd wilt worden over nieuwe updates voor uw component. <br />BELANGRIJK!! Tips weergeven! moet op Ja staan om deze functie te laten werken.');

// since 1.1.0
define('_JNEWS_LICENSE', 'Lincentiegegevens');

// since 1.1.1
define('_JNEWS_NEW', 'Nieuw');
define('_JNEWS_SCHEDULE_SETUP', 'In welke volgorde de Auto-responder moet worden verstuurd, hiervoor moet u een planning instellen in de configuratie.');
define('_JNEWS_SCHEDULER', 'Planning');
define('_JNEWS_jnews_CRON_DESC', 'Als u geen toegang heeft tot een crontaak manager op uw website, kunt u zich registreren voor een gratis jNews Cron Account op:');
define('_JNEWS_CRON_DOCUMENTATION', 'U kunt meer informatie vinden over het instellen van een jNews Planning op de volgende url:');
define('_JNEWS_CRON_DOC_URL', '<a href="http://www.joobi.co/index.php?option=com_content&view=article&id=4249&catid=29&Itemid=72"
 target="_blank">http://www.joobi.co/index.php?option=com_content&Itemid=72&view=category&layout=blog&id=29&limit=60</a>');
define( '_JNEWS_QUEUE_PROCESSED', 'Wachtrij succesvol verwerkt...');
define( '_JNEWS_ERROR_MOVING_UPLOAD', 'Fout met verplaatsen geïmporteerd bestand');

//since 1.1.4
define( '_JNEWS_SCHEDULE_FREQUENCY', 'Planning frequentie');
define( '_JNEWS_CRON_MAX_FREQ', 'Planning max frequentie');
define( '_JNEWS_CRON_MAX_FREQ_TIPS', 'Geef de maximale frequentie op dat de planning kan opereren ( in minuten ).  Dit zal de planning beperken, zelfs wanneer de crontaak is ingesteld met meer frequentie.');
define( '_JNEWS_CRON_MAX_EMAIL', 'Maximale e-mails per taak');
define( '_JNEWS_CRON_MAX_EMAIL_TIPS', 'Geef het aantal e-mails op dat verstuurd word per taak. Als dit is ingesteld op 0 zal het maximum aantal e-mails per taak 1 zijn');
define( '_JNEWS_CRON_MINUTES', ' minuten');
define( '_JNEWS_SHOW_SIGNATURE', 'Geef e-mailvoetnoot weer');
define( '_JNEWS_SHOW_SIGNATURE_TIPS', 'Of u jNews in de voetnoot van de e-mails wel of niet wil promoten.');
define( '_JNEWS_QUEUE_AUTO_PROCESSED', 'Auto-responders succesvol verwerkt...');
define( '_JNEWS_QUEUE_NEWS_PROCESSED', 'Geplande nieuwsbrieven succesvol verwerkt...');
define( '_JNEWS_MENU_SYNC_USERS', 'Synchronisatie gebruikers');
define( '_JNEWS_SYNC_USERS_SUCCESS', 'Gebruikerssynchronisatie succesvol!');

// compatibility with Joomla 15
if (!defined('_BUTTON_LOGOUT')) define( '_BUTTON_LOGOUT', 'Uitloggen');
if (!defined('_CMN_YES')) define( '_CMN_YES', 'Ja');
if (!defined('_CMN_NO')) define( '_CMN_NO', 'Nee');
if (!defined('_HI')) define( '_HI', 'Hallo');
if (!defined('_CMN_TOP')) define( '_CMN_TOP', 'Bovenkant');
if (!defined('_CMN_BOTTOM')) define( '_CMN_BOTTOM', 'Onderkant');
//if (!defined('_BUTTON_LOGOUT')) define( '_BUTTON_LOGOUT', 'Logout');

// For include title only or full article in content item tab in newsletter edit - p0stman911
define('_JNEWS_TITLE_ONLY_TIPS', 'Indien u alleen dit selecteert, zal in de mailing alleen de titel van het artikel worden toegevoegd als een link naar het complete artikel op uw website.');
define('_JNEWS_TITLE_ONLY', 'Alleen titel');
define('_JNEWS_FULL_ARTICLE_TIPS', 'Als u dit selecteert word het complete artikel toegevoegd in de mailing');
define('_JNEWS_FULL_ARTICLE', 'Volledig artikel');
define('_JNEWS_CONTENT_ITEM_SELECT_T', 'Selecteer een content item om bij het bericht toe te voegen. <br />Kopiëer en plak <b>content tag</b> in de mailing.  U kunt kiezen voor volledige tekst, alleen de introductie of alleen de titel met (0, 1, of 2 respectievelijk). ');
define('_JNEWS_SUBSCRIBE_LIST2', 'Mailinglijst(en)');
// For sorting in content tab by date, section or category
define('_JNEWS_CONTENT_ITEM_SORT', 'Sorteer op: ');
define('_JNEWS_SORT_DATE' , 'Datum');
define('_JNEWS_SORT_DATE_TIPS' , 'Als u deze selecteerd, zal de artikelen gesorteerd worden op aanmaak datum');
define('_JNEWS_SORT_SECTION' , 'Sectie');
define('_JNEWS_SORT_SECTION_TIPS' , 'Als u deze selecteerd, zal de artikelen gesorteerd worden op sectie');
define('_JNEWS_SORT_CATEGORY' , 'Categorie');
define('_JNEWS_SORT_CATEGORY_TIPS' , 'Als u deze selecteerd, zal de artikelen gesorteerd worden op categorie');
define('_JNEWS_SORT_BUTTON' , 'Sorteer');

// smart-newsletter function
define('_JNEWS_AUTONEWS', 'Slimme-Nieuwsbrieven');
define('_JNEWS_MENU_AUTONEWS', 'Slimme-Nieuwsbrieven');
define('_JNEWS_AUTO_NEWS_OPTION', 'Slimme-Nieuwsbriefinstellingen');
define('_JNEWS_AUTONEWS_FREQ', 'Nieuwsbrief frequentie');
define('_JNEWS_AUTONEWS_FREQ_TIPS', 'Geef de frequentie op waarmee u de slimme-nieuwsbrief sturen wil.');
define('_JNEWS_AUTONEWS_SECTION', 'Artikel sectie');
define('_JNEWS_AUTONEWS_SECTION_TIPS', 'Geef het onderdeel op waarvan u de artikelen wilt kiezen.');
define('_JNEWS_AUTONEWS_CAT', 'Artikelcategorie');
define('_JNEWS_AUTONEWS_CAT_TIPS', 'Geef de categorie op waarvan u de artikelen wilt kiezen (Alles voor alle artikelen in dat onderdeel).');
define('_JNEWS_SELECT_SECTION', 'Selecteer een onderdeel');
define('_JNEWS_SELECT_CAT', 'Alle categorieëen');
define('_JNEWS_AUTO_DAY_CH8', 'Per kwartaal');
define('_JNEWS_AUTONEWS_STARTDATE', 'Start datum');
define('_JNEWS_AUTONEWS_STARTDATE_TIPS', 'Geef de datum op waarmee u wilt beginnen met de Slimme Nieuwsbrief te sturen.');
define('_JNEWS_AUTONEWS_TYPE', 'Inhoud interpretatie');// how we see the content which is included in the newsletter
define('_JNEWS_AUTONEWS_TYPE_TIPS', 'Volledig artikel: zal het volledige artikel in de nieuwsbrief toevoegen.<br />' .
		'Alleeen introductie: Zal enkel de introductie van het artikel in de nieuwsbrief toevoegen.<br/>' .
		'Alleen titel: Zal enkel de titel van het artikel in de nieuwsbrief toevoegen.');
define('_JNEWS_TAGS_AUTONEWS', '[SMARTNEWSLETTER] = Dit zal door de Slimme-Nieuwsbrief vervangen worden.');

//since 1.1.3
define('_JNEWS_MALING_EDIT_VIEW', 'Creëer / Bekijk de mailings');
define('_JNEWS_LICENSE_CONFIG', 'licentie');
define('_JNEWS_ENTER_LICENSE', 'Voer licentie in');
define('_JNEWS_ENTER_LICENSE_TIPS', 'Voer uw licentie nummer in en klik op opslaan.');
define('_JNEWS_LICENSE_SETTING', 'licentie-instellingen');
define('_JNEWS_GOOD_LIC', 'U heeft een geldige licentie.');
define('_JNEWS_NOTSO_GOOD_LIC', 'U heeft een ongeldige licentie: ');
define('_JNEWS_PLEASE_LIC', 'Contacteer aub jNews support om uw licentie bij te werken ( license@joobi.co ).');

define('_JNEWS_DESC_PLUS', 'jNews Plus is de eerste logische auto-responder voor Joomla CMS.  ' . _JNEWS_FEATURES );
define('_JNEWS_DESC_PRO', 'jNews PRO het ultieme e-mail systeem voor Joomla CMS.  ' . _JNEWS_FEATURES );

//since 1.1.4
define('_JNEWS_ENTER_TOKEN', 'Voer bewijs in');
define('_JNEWS_ENTER_TOKEN_TIPS', 'Voer aub uw bewijsnummer in dat u via de e-mail heeft ontvangen toen u jNews heeft aangeschaft. ');
define('_JNEWS_jnews_SITE', 'jNews site:');
define('_JNEWS_MY_SITE', 'Mijn site:');
define( '_JNEWS_LICENSE_FORM', ' ' .
 		'Klik hier om naar het licentieformulier te gaan.</a>');
define('_JNEWS_PLEASE_CLEAR_LICENSE', 'Maak aub licentieveld leeg en probeer opnieuw.<br />  Als het probleem blijft bestaan, ');
define( '_JNEWS_LICENSE_SUPPORT', 'Heeft u nog steeds vragen, ' . _JNEWS_PLEASE_LIC );
define( '_JNEWS_LICENSE_TWO', 'u kunt uw licentie handmatig verkrijgen door uw bewijsnummer en site URL (wat in groen aan de bovenkant van deze pagina staat) in te voeren in het licentieformulier. '
					     . _JNEWS_LICENSE_FORM . '<br /><br/>' . _JNEWS_LICENSE_SUPPORT );
define('_JNEWS_ENTER_TOKEN_PATIENCE', 'Na opslaan van uw bewijsnummer zal een licentie automatisch worden gegenereerd. ' .
		' Normaal gesproken is uw bewijsnummer in 2 minuten goedgekeurd. Echter, is sommige gevallen kan het tot 15 minuten duren.<br />' .
		'<br />Controleer over een paar minuten uw configuratiescherm opnieuw.  <br /><br />' .
						     'Als u geen geldig licentienummer binnen 15 minuten heeft ontvangen, '. _JNEWS_LICENSE_TWO );
define( '_JNEWS_ENTER_NOT_YET', 'Uw bewijsnummer is nog niet geldig verklaard.');
define( '_JNEWS_UPDATE_CLICK_HERE', 'Bezoek aub <a href="http://www.joobi.co" target="_blank">www.joobi.co</a> om de nieuwste versie te downloaden.');
//define( '_JNEWS_NOTIF_UPDATE', 'Om over nieuwe updates op de hoogte te worden gesteld, vul uw e-mail adres in en klik op inschrijven ');

define('_JNEWS_THINK_PLUS', 'Als u meer uit uw mailingsysteem wilt halen, denk dan aan jNews Plus!');
define('_JNEWS_THINK_PLUS_1', 'Opeenvolgende auto-responders');
define('_JNEWS_THINK_PLUS_2', 'Plan de aflevering van uw nieuwsbrief voor een bepaalde datum');
define('_JNEWS_THINK_PLUS_3', 'Geen limieten/beperkingen meer');
define('_JNEWS_THINK_PLUS_4', 'en veel meer...');


//since 1.2.2
define( '_JNEWS_LIST_ACCESS', 'Lijsttoegang');
define( '_JNEWS_INFO_LIST_ACCESS', 'Specificeer welke groep gebruikers deze lijst kan zien en abonnee kan worden');
define( 'JNEWS_NO_LIST_PERM', 'U heeft niet voldoende rechten om abonnee te worden van deze lijst');

//Archive Configuration
 define('_JNEWS_MENU_TAB_ARCHIVE', 'Archief');
 define('_JNEWS_MENU_ARCHIVE_ALL', 'Archiveer alles');

//Archive Lists
 define('_JNEWS_FREQ_OPT_0', 'Geen');
 define('_JNEWS_FREQ_OPT_1', 'Elke week');
 define('_JNEWS_FREQ_OPT_2', 'Elke 2 weken');
 define('_JNEWS_FREQ_OPT_3', 'Elke maand');
 define('_JNEWS_FREQ_OPT_4', 'Elk kwartaal');
 define('_JNEWS_FREQ_OPT_5', 'Elk jaar');
 define('_JNEWS_FREQ_OPT_6', 'Anders');

define('_JNEWS_DATE_OPT_1', 'Datum gecreëerd');
define('_JNEWS_DATE_OPT_2', 'Datum gewijzigd');

define('_JNEWS_ARCHIVE_TITLE', 'Stel auto-archief frequentie in');
define('_JNEWS_FREQ_TITLE', 'Archieffrequentie');
define('_JNEWS_FREQ_TOOL', 'Bepaal hoe vaak dat u wilt dat de Archiefbeheerder uw websitecontent in het archief zet.');
define('_JNEWS_NB_DAYS', 'Aantal dagen');
define('_JNEWS_NB_DAYS_TOOL', 'Dit is alleen voor de Anders-optie! Geef het aantal dagen op tussen elke archivering.');
define('_JNEWS_DATE_TITLE', 'Datumtype');
define('_JNEWS_DATE_TOOL', 'Bepaal of het in het archief zetten gedaan moet worden op datum gecreëerd of op datum gewijzigd.');

define('_JNEWS_MAINTENANCE_TAB', 'Onderhoud instellingen');
define('_JNEWS_MAINTENANCE_FREQ', 'Onderhoudfrequentie');
define( '_JNEWS_MAINTENANCE_FREQ_TIPS', 'Specificeer de frequentie hoe vaak u het onderhoud wilt laten uitvoeren.');
define( '_JNEWS_CRON_DAYS', 'uur(en)');

define( '_JNEWS_LIST_NOT_AVAIL', 'Er is geen lijst beschikbaar.');
define( '_JNEWS_LIST_ADD_TAB', 'Toevoegen/Bewerken');

define( '_JNEWS_LIST_ACCESS_EDIT', 'Rechten mailing toevoegen/bewerken');
define( '_JNEWS_INFO_LIST_ACCESS_EDIT', 'Specificeer wat voor groep gebruikers nieuwe mailing kan toevoegen of bewerken voor deze lijst');
define( '_JNEWS_MAILING_NEW_FRONT', 'Creëer een nieuwe mailing');

define('_JNEWS_AUTO_ARCHIVE', 'Auto-archiveer');
define('_JNEWS_MENU_ARCHIVE', 'Auto-archiveer');

//Extra tags:
define('_JNEWS_TAGS_ISSUE_NB', '{tag:issuenb} = Dit zal vervangen worden door het onderwerpnummer van de nieuwsbrief.');
define('_JNEWS_TAGS_DATE', '{tag:date} = Dit zal vervangen worden door de verzenddatum.');
define('_JNEWS_TAGS_CB', '[CBTAG:{field_name}] = Dit zal vervangen worden met de waarde gehaald uit het Community Builder veld: vb. [CBTAG:firstname] ');
define( '_JNEWS_MAINTENANCE', 'Joobi onderhoud');


define('_JNEWS_THINK_PRO', 'Wanneer u professioneel wilt werken, gebruikt u professionele componenten!');
define('_JNEWS_THINK_PRO_1', 'Slimme-Nieuwsbrieven');
define('_JNEWS_THINK_PRO_2', 'Bepaal rechtenniveau voor uw lijst');
define('_JNEWS_THINK_PRO_3', 'Bepaal wie mailings kan bewerken/toevoegen');
define('_JNEWS_THINK_PRO_4', 'Meer tags: Voeg uw CB-velden toe');
define('_JNEWS_THINK_PRO_5', 'Joomla content Auto-archief');
define('_JNEWS_THINK_PRO_6', 'Database-optimalisatie');

define('_JNEWS_LIC_NOT_YET', 'Uw licentie is nog niet geldig. Controleer aub uw licentietab in het configuratiescherm.');
define('_JNEWS_PLEASE_LIC_GREEN', 'Weet zeker dat u de groene informatie verschaft aan de bovenkant van de tab aan ons supportteam.');

define('_JNEWS_FOLLOW_LINK', 'Verkrijg uw licentie');
define( '_JNEWS_FOLLOW_LINK_TWO', 'U kunt uw licentie verkrijgen door uw bewijsnummer en uw website url in te voeren (dat in groen te zien is aan de bovenkant van deze pagina ) in het licentieformulier. ');
define( '_JNEWS_ENTER_TOKEN_TIPS2', ' Klik daarna op toepassen in het bovenste rechtermenu.');
define( '_JNEWS_ENTER_LIC_NB', 'Voer uw licentie in');
define( '_JNEWS_UPGRADE_LICENSE', 'Upgrade uw licentie');
define( '_JNEWS_UPGRADE_LICENSE_TIPS', 'Als u een bewijsnummer heeft ontvangen om uw licentie bij te werken voer het hier in, klik op toepassen en ga verder met nummer <b>2</b> om u nieuwe licentienummer te verkrijgen.');

define( '_JNEWS_MAIL_FORMAT', 'Encodering formaat');
define( '_JNEWS_MAIL_FORMAT_TIPS', 'Wat voor formaat wilt u gebruiken voor encoderen van uw mailings, Alleen Tekst of MIME');
define( '_JNEWS_jnews_CRON_DESC_ALT', 'Als u geen toegang heeft tot de crontaakbeheerder op uw website, kunt u de gratis JCron component gebruiken om een crontaak van uw website te creëren.');

//sinds 1.3.1
define('_JNEWS_SHOW_AUTHOR', 'Toon auteurnaam');
define('_JNEWS_SHOW_AUTHOR_TIPS', 'Selecteer Ja als u de naam van de auteur wilt toevoegen als u een artikel toevoegt in de mailing');

//sinds 1.3.5
define('_JNEWS_REGWARN_NAME', 'Voer uw naam in.');
define('_JNEWS_REGWARN_MAIL', 'Voer een geldig e-mailadres in.');

//sinds 1.5.6
define('_JNEWS_ADDEMAILREDLINK_TIPS', 'Als u Ja selecteert, zal de e-mail van de gebruiker toegevoegd worden als parameter aan het einde van uw doorvoerlink (uw doorvoerlink voor uw module of voor een extern jNews-formulier). Dat kan handig zijn als u een speciaal script wilt uitvoeren op uw doorvoerpagina.');
define('_JNEWS_ADDEMAILREDLINK', 'Voeg e-mail toe aan de doorvoerlink');

//sinds 1.6.3
define('_JNEWS_ITEMID', 'ItemId');
define('_JNEWS_ITEMID_TIPS', 'Dit ItemId wordt toegevoegd aan uw jNews-links.');

//since 1.6.5
define('_JNEWS_SHOW_JCALPRO', 'jCalPRO');
define('_JNEWS_SHOW_JCALPRO_TIPS', 'Laat de integratietab zien voor jCalPRO <br/>(alleen als jCalPRO op uw website geïnstalleerd is!)');
define('_JNEWS_JCALTAGS_TITLE', 'jCalPRO tag:');
define('_JNEWS_JCALTAGS_TITLE_TIPS', 'Kopieer en plak deze tag in de mailing waar u hem wilt plaatsen.');
define('_JNEWS_JCALTAGS_DESC', 'Beschrijving:');
define('_JNEWS_JCALTAGS_DESC_TIPS', 'Kies Ja als u de beschrijving van de gebeurtenis wilt toevoegen');
define('_JNEWS_JCALTAGS_START', 'Startdatum:');
define('_JNEWS_JCALTAGS_START_TIPS', 'Kies Ja als u de startdatum van de gebeurtenis wilt toevoegen');
define('_JNEWS_JCALTAGS_READMORE', 'Lees meer:');
define('_JNEWS_JCALTAGS_READMORE_TIPS', 'Kies Ja als u een <b>lees meer</b> knop van de gebeurtenis wilt toevoegen');
define('_JNEWS_REDIRECTCONFIRMATION', 'Redirect URL');
define('_JNEWS_REDIRECTCONFIRMATION_TIPS', 'Als u een bevestigingsmail wilt ontvangen, zal de gebruiker naar deze URL doorgestuurd worden als hij op de bevestigingslink klikt.');

//since 2.0.0 compatibility with Joomla 1.5
if(!defined('_CMN_SAVE') and defined('CMN_SAVE')) define('_CMN_SAVE',CMN_SAVE);
if(!defined('_CMN_SAVE')) define('_CMN_SAVE','Bewaar');
if(!defined('_NO_ACCOUNT')) define('_NO_ACCOUNT','Nog geen account?');
if(!defined('_CREATE_ACCOUNT')) define('_CREATE_ACCOUNT','Registreer');
if(!defined('_NOT_AUTH')) define('_NOT_AUTH','U bent niet geautoriseerd om dit te bekijken.');

//since 3.0.0
define('_JNEWS_DISABLETOOLTIP', 'Schakel tooltip uit');
define('_JNEWS_DISABLETOOLTIP_TIPS', 'Schakel de tooltip op de homepage uit');
define('_JNEWS_MINISENDMAIL', 'Gebruik Mini SendMail');
define('_JNEWS_MINISENDMAIL_TIPS', 'Als uw server Mini SendMail kan gebruiken, kies deze optie om dit te gebruiken. Voeg de gebrukersnam niet in op de header van de e-mail');
define('_JNEWS_CONTENT_ORDERING' , 'Artikel sortering');
define('_JNEWS_CONTENT_ORDERING_TIPS' , 'Dit zal de artikelen sorteren in uw artikel plugin');


//Since 3.1.5
define('_JNEWS_READMORE','Lees meer...');
define('_JNEWS_VIEWARCHIVE','Klik hier');

//since 4.0.0
define('_JNEWS_SHOW_JLINKS','Linkvolgen');
define('_JNEWS_SHOW_JLINKS_TIPS','Activeert integratie met jLinks om linkvolgen te kunnen uitvoeren voor elke link in de nieuwsbrief.');

//since 4.1.0
define( '_JNEWS_MAIL_ENCODING', 'Mailcodering' );
define( '_JNEWS_MAIL_ENCODING_TIPS', 'Welk coderingsformaat wilt u gebruiken UTF-8 (zeer aanbevolen) of ISO-8859-2' );
define( '_JNEWS_COPY_SUBJECT', 'Kopieer onderwerp' );

//since 5.0.0
//fieldset for column configuration
define('_JNEWS_COLUMN','Gebruiker-gedefinieerde kolommen');
define('_JNEWS_COL1_NAME', 'Naam kolom 1');
define('_JNEWS_COL2_NAME', 'Naam kolom 2');
define('_JNEWS_COL3_NAME', 'Naam kolom 3');
define('_JNEWS_COL4_NAME', 'Naam kolom 4');
define('_JNEWS_COL5_NAME', 'Naam kolom 5');
define('_JNEWS_COLUMN1_REP', '{tag:profile nb=1} = Dit wordt vervangen door de gebruiker-gedefinieerde kolom 1');
define('_JNEWS_COLUMN2_REP', '{tag:profile nb=2} = Dit wordt vervangen door de gebruiker-gedefinieerde kolom 2');
define('_JNEWS_COLUMN3_REP', '{tag:profile nb=3} = Dit wordt vervangen door de gebruiker-gedefinieerde kolom 3');
define('_JNEWS_COLUMN4_REP', '{tag:profile nb=4} = Dit wordt vervangen door de gebruiker-gedefinieerde kolom 4');
define('_JNEWS_COLUMN5_REP', '{tag:profile nb=5} = Dit wordt vervangen door de gebruiker-gedefinieerde kolom 5');
//url
define('_JNEWS_URL_PASS','Wachtwoord');
define('_JNEWS_URL_PASS_TIPS','Voer het wachtwoord in om een abonnee te kunnen toevoegen door middel van een. Voeg de wachtwoordvariabele toe aan de URL.<br>(Voor Plus en PRO wordt deze code gebruikt voor captcha.)');
define('_JNEWS_URL_MES','Abonneer via de Abonneemodule of abonner via de frontend.');
define('_JNEWS_URL_PASS_WARN','(In de PRO-versie: als u dit wachtwoord verandert, werk dan ook het verborgen wachtwoord bij in u externe formulier.)');
define('_JNEWS_ENABLE_CAPTCHA', 'Activeer Captcha');
define('_JNEWS_ENABLE_CAPTCHA_TIPS','Activeer captcha-functionaliteit in de abonneemodule en in het abonneer via extern formulier in de Pro-versie.');
//url
// subscription notification
define('_JNEWS_SUBSCRIPTION_NOTIFY','Verzend abonneer-notificatie');
define('_JNEWS_SUBSCRIPTION_NOTIFY_TIPS','Specificeer of u een abonneernotificatie wilt versturen aan de lijsteigenaar.');
define('_JNEWS_SUBSCRIPTION_NOTIFY_MSG1','Een abonneernotificatie is verzonden naar de beheerder.');
define('_JNEWS_SUBSCRIPTION_NOTIFY_MSG2','Geen abonneernotificatie verzonden.');
define('_JNEWS_SUBSCRIPTION_NOTIFY_ERR','Kan geen abonneernotificatie versturen naar de beheerder.');
//subscription notification messages
//for captcha
define('_JNEWS_CAPTCHA_CAPTION','Code: ');
define('JNEWS_WRONG_CAPTCHA_ENTERED','<p style=\'text-align: justify;\'><b>CAPTCHA beveiligingscode is incorrect of de informatie die u heeft ingegeven is ongeldig.</b><br>(De beveiligingscode is nodig om automatische registratie door bots te voorkomen en te verzekeren dat registraties door mensen worden gedaan.)<br><br><b><font color=#ff0000>Uw abonnement is niet verwerkt.</font></b><br><br>Vul uw gegevens en de beveiligingscode zorgvuldiger in en klik op de <b>Abonneer</b> knop.<br><br>Bedankt voor uw begrip.</p><br>');
define('_JNEWS_REGWARN_CAPTCHA','Voer de captchacode in.');
define('_JNEWS_SUB_ERR','<br>Fout bij abonneren.');

//since 6.0.0
define('_JNEWS_MOOTOOLS_BTNTEXT' , 'Abonneer hier');
define('_JNEWS_QUEUE_SUBJECT','Onderwerp');
define('_JNEWS_QUEUE_EMAIL','E-mail');
define('_JNEWS_QUEUE_PRIOR','Prioriteit');
define('_JNEWS_QUEUE_ATT','Pogingen');
define('_JNEWS_QUEUE_DEL', 'Verwijderen');
define('_JNEWS_PROCESS_Q','Verwerken wachtrij');
define('_JNEWS_CLEAN_Q','Opschonen wachtrij');
define('_JNEWS_SENDDATE','Verzenddatum');
define('_JNEWS_MAILING_Q','Alle mailings in wachtrij');
define('_JNEWS_MENU_QUEUE', 'Wachtrij');
define('_JNEWS_MENU_TEMPLATES','Templates');
define('_JNEWS_MENU_TAB_QUEUE' , 'Wachtrij');
define('_JNEWS_Q_PROCESS' , 'Instellingen wachtrij');
define('_JNEWS_MAX_Q','Maximum aantal e-mails per batch');
define('_JNEWS_SUBS_LIST_LABEL' , 'Deze nieuwsbrief wordt verzonden naar de abonnees van de volgende geselecteeerde lijsten:');
define('_JNEWS_SUBS_LIST_CAMPAIGN' , 'Deze auto-responder wordt verzonden naar abonnees van de volgende geselecteerde  auto-responder:');
define('_JNEWS_SUBS_LIST_RECEIVE', 'Ontvangen' );
define('_JNEWS_SUBS_LIST_TOALL', 'Selecteer alle' );
define('_JNEWS_SUBS_LIST_TONONE', 'Geen' );
define('_JNEWS_LIST_COLOR','Kleur');
define('_JNEWS_LIST_COLOR_TIP','Selecteer de kleur voor uw lijst. Kan handig zijn voor statistieken.');
define('_JNEWS_MENU_NEW', 'Nieuw');
define('_JNEWS_MENU_EDIT', 'Wijzigen');
define('_JNEWS_MENU_APPLY', 'Toepassen');
define('_JNEWS_MENU_CANCEL', 'Annuleren');
define('_JNEWS_MENU_TEMPLATE', 'Template');
define('_JNEWS_HTML_VERSION', 'HTML versie');
define('_JNEWS_NONHTML_VERSION', 'Niet-HTML versie');
define('_JNEWS_TAG_NAME_DESC' , 'Dit wordt vervangen door de naam die de abonnee heeft ingevoerd, u verstuurt hiermee gepersonaliseerde e-mails als u dit gebruikt.');
define('_JNEWS_TAG_FNAME_DESC' , 'Dit wordt vervangen door de VOORNAAM die de abonnee heeft ingevoerd.');
define('_JNEWS_TAG_ISSUENB_DESC' , 'Dit wordt vervangen door het uitgavenummer van de nieuwsbrief.');
define('_JNEWS_TAG_DATE_DESC' , 'Dit wordt vervangen door de verzenddatum.');
define('_JNEWS_TAG_CBNAME' , '[CBTAG:{field_name}]');
define('_JNEWS_TAG_CBNAME_DESC' , 'Dit wordt vervangen door de waarde van het Community Builder veld: bijv. [CBTAG:firstname] ');
define('_JNEWS_TAG_LOADMODINFO_DESC' , 'Dit wordt vervangen door de Joomla module waarbij id gelijk is aan het id van de joomla module. Bijvoorbeeld {module=1}.<br /> De modules kunnen alleen worden geladen door de cron-taak. <br /> ');
define('_JNEWS_DATETIME' , 'Datum en tijd');
define('_JNEWS_TEMPLATE_COPY' , '_copy');
define('_JNEWS_TEMPLATE_DEFAULT_NODEL' , 'U kunt het standaardtemplate niet verwijderen!');
define('_JNEWS_TEMPLATE_DEFAULT_SUCCS' , 'Succesvol ingesteld als standaard!');
define('_JNEWS_TEMPLATE' , 'Template');
define('_JNEWS_TEMPLATES' , 'Templates');
define('_JNEWS_AR' , 'Auto-reageerder');
define('_JNEWS_SELCT_MAILINGLIST', 'Selecteer een lijst op het Lijst-tabblad om een mailing toe te voegen.');
define('_JNEWS_SELCT_MAILINGCAMPAIGN', 'Selecteer een campagne op het Lijst-tabblad om een mailing toe te voegen.');
define('_JNEWS_TEMPLATE_AVAIL', 'Alle beschikbare templates');
define('_JNEWS_TEMPLATE_NAME', 'Naam');
define('_JNEWS_TEMPLATE_NAME_T', 'Voer de naam van het template in.');
define('_JNEWS_TEMPLATE_NAMEKEY', 'Naamsleutel');
define('_JNEWS_TEMPLATE_NAMEKEY_T', 'Voer de naamsleutel van het template in.');
define('_JNEWS_TEMPLATE_DESC', 'Beschrijving');
define('_JNEWS_TEMPLATE_DEFAULT', 'Standaard');
define('_JNEWS_TEMPLATE_DEFAULT_T', 'Selecteer "Ja" om het template als standaard in te stellen.');
define('_JNEWS_TEMPLATE_PUBLISH', 'Publiceren');
define('_JNEWS_TEMPLATE_PUBLISH_T', 'Selecteer "Ja" om het template te publiceren.');
define('_JNEWS_TEMPLATE_BG', 'Achtergrondkleur');
define('_JNEWS_TEMPLATE_BG_T', 'Selecteer de achtergrondkleur voor het template.');
define('_JNEWS_TEMPLATE_UPLOAD', 'Upload thumbnail');
define('_JNEWS_TEMPLATE_UPLOAD_T', 'Upload een thumbnail van het template.');
define('_JNEWS_TEMPLATE_DESC_T', 'Voer de beschrijving van het template in.');
define('_JNEWS_TEMPLATE_STYLE_TH1', 'Titel h1');
define('_JNEWS_TEMPLATE_STYLE_TH2', 'Titel h2');
define('_JNEWS_TEMPLATE_STYLE_TH3', 'Titel h3');
define('_JNEWS_TEMPLATE_STYLE_TH4', 'Titel h4');
define('_JNEWS_TEMPLATE_STYLE_UNSUB', 'Stijl van de Uitschrijf-link');
define('_JNEWS_TEMPLATE_STYLE_SUB', 'Stijl voor de "Wijzig uw abonnement" link');
define('_JNEWS_TEMPLATE_STYLE_CONTENT', 'Stijl voor het inhoudsvak');
define('_JNEWS_TEMPLATE_STYLE_CHEAD', 'Stijl voor de contenttitel');
define('_JNEWS_TEMPLATE_STYLE_CREADMORE', 'Stijl voor de lees meer-link');
define('_JNEWS_TEMPLATE_STYLE_VONLINE', 'Stijl voor de "Bekijk online" link');
define('_JNEWS_TEMPLATE_STYLE_NEW', 'Nieuwe stijl toevoegen');
define('_JNEWS_TEMPLATE_STYLE_NEWC', 'Naam CSS-klasse');
define('_JNEWS_TEMPLATE_STYLE_NEWAPPLIED', 'CSS-stijlen die worden toegepast op de klasse.');

//statistics & reports
define('_JNEWS_REPORTS_SUBS', 'Abonnee-rapporten');
define('_JNEWS_REPORTS_MAIL', 'Mailing-rapporten');
define('_JNEWS_REPORTS_LIST', 'Lijst-rapporten');
define('_JNEWS_LIST_SUBCRIBERS', 'Aantal abonnees');
define('_JNEWS_LIST_UNSUBSCRIBERS', 'Aantal uitgeschreven');
define('_JNEWS_LIST_CONFIRMED', 'Aantal bevestigde e-mails');
define('_JNEWS_LIST_UNCONFIRMED', 'Aantal niet-bevestigde e-mails');
define('_JNEWS_LIST_SUB_DATE', 'Inschrijfdatum');
define('_JNEWS_MAILING_SEND_DATE','Verzenddatum');
define('_JNEWS_MAILING_SUBJECT', 'Onderwerp');
define('_JNEWS_MAILING_SENT_HTML','Verzonden in HTML');
define('_JNEWS_MAILING_SENT_TEXT','Verzonden als tekst');
define('_JNEWS_MAILING_FAILED', 'Verzenden mislukt');
define('_JNEWS_MAILING_PENDING', 'Nog te versturen mail');
define('_JNEWS_MAILING_BOUNCES','Bounces');
define('_JNEWS_MAILING_SENT', 'Totaal verzonden');
//Mailing Reports
define('_JNEWS_MAIL_GRAPH', 'Grafiek');
define('_JNEWS_MAIL_DETAILS', 'Details');
define('_JNEWS_MAIL_DETAILS_READ', 'HTML gelezen');
define('_JNEWS_MAIL_DETAILS_UNREAD', 'HTML ongelezen');
define('_JNEWS_MAIL_DETAILS_TEXT', 'Alleen tekst');

//stats filters
define('_JNEWS_GROUP_PREDEFINED_DATE','Vooringestelde datum');		//legend
define('_JNEWS_GROUP_SPECIFIED_DATE','Ingegeven datum');
define('_JNEWS_LABEL_SET_INTERVAL', 'Instellen interval');		//labels
define('_JNEWS_LABEL_DATE_RANGE','Datumbereik');
define('_JNEWS_LABEL_CURRENT_SERVER_TIME', 'Huidige servertjd');
define('_JNEWS_LABEL_REPORT_TYPE','Rapporttype');
define('_JNEWS_INTERVAL_DAILY','Dagelijks');					//intervals
define('_JNEWS_INTERVAL_WEEKLY','Wekelijks');
define('_JNEWS_INTERVAL_MONTHLY', 'Maandelijks');
define('_JNEWS_INTERVAL_YEARLY','Jaarlijks');
define('_JNEWS_DEFINED_RANGE_YESTERDAY','Gisteren');		//predefined range
define('_JNEWS_DEFINED_RANGE_TODAY', 'Vandaag');
define('_JNEWS_DEFINED_RANGE_THIS_WEEK','Deze week');
define('_JNEWS_DEFINED_RANGE_LAST_WEEK','Vorige week');
define('_JNEWS_DEFINED_RANGE_LAST_TWO_WEEK','Laatste 2 weken');
define('_JNEWS_DEFINED_RANGE_THIS_MONTH','Deze maand');
define('_JNEWS_DEFINED_RANGE_LAST_MONTH','Vorige maand');
define('_JNEWS_DEFINED_RANGE_THIS_YEAR','Dit jaar');
define('_JNEWS_DEFINED_RANGE_LAST_YEAR','Vorig jaar');
define('_JNEWS_DEFINED_RANGE_TWO_YEARS_AGO','2 jaar geleden');
define('_JNEWS_DEFINED_RANGE_3_YEARS_AGO','3 jaar geleden');
define('_JNEWS_BUTTON_REFRESH','Verversen');				//buttons
define('_JNEWS_BUTTON_GENERATE','Genereren');
define('_JNEWS_BUTTON_RESET', 'Herstellen');
define('_JNEWS_SPECIFIED_DATE_START','Start');			//specified date
define('_JNEWS_SPECIFIED_DATE_END','Eind');
define('_JNEWS_REPORT_LISTING','Lijst');
define('_JNEWS_REPORT_GRAPH','Grafiek');
define('_JNEWS_REPORT_EXPORT','Export');
define('_JNEWS_SUBSCRIBERS_ALL_USERS', 'Alle gebruikers');		//subscribers
define('_JNEWS_SUBSCRIBERS_REGISTERED', 'Geregistreerd');
define('_JNEWS_SUBSCRIBERS_GUESTS','Gasten');
define('_JNEWS_REPORT_WARN_MESSAGE', 'Onvolledige datumselectie in aangegeven veldset!');

//stats export
define('_JNEWS_STATS_EXPORT', 'Export');
define('_JNEWS_EXPORT_WARN_MESSAGE', 'Geen te exporteren gegevens');
define('_JNEWS_GRAPH_WARN_MESSAGE', 'Geen weer te geven gegevens');
define('_JNEWS_REPORT_HEADER', 'Rapport');
define('_JNEWS_REPORT_HEADER_TO', 'voor');
define('_JNEWS_PIE_PROCESS_WARN_MESSAGE', 'Geen gegevens voor mailingproces');
define('_JNEWS_PIE_FORMAT_WARN_MESSAGE', 'Geen gegevens voor HTML/tekstopmaak');

//stats graph labels
define('_JNEWS_GRAPH_LBL_HTML', 'HTML');
define('_JNEWS_GRAPH_LBL_TEXT', 'Tekst');
define('_JNEWS_GRAPH_TITLE_FORMAT', 'HTML/tekstopmaak');
define('_JNEWS_GRAPH_PIE_TITLE_MAIL', 'Mailingproces');
define('_JNEWS_PIE_SUBS', 'Abonnees');
define('_JNEWS_PIE_UNSUBS', 'Uitgeschreven');
define('_JNEWS_PIE_UNCONFIRMED', 'Niet bevestigd');
define('_JNEWS_PIE_CONFIRMED', 'Bevestigd');
define('_JNEWS_MAILING_SUBJECT_HEADER', 'Onderwerp');


//Wizards
define('_JNEWS_WIZARD', 'Wizard');
define('_JNEWS_CHECKLISTFOUND', 'Maak eerst uw lijst en zorg dat deze is gepubliceerd.');

define('_JNEWS_CHECKCAMPAIGNFOUND', 'Maak eerst uw campagne(lijst) en zorg dat deze is gepubliceerd.');
define('_JNEWS_TEMPLATE_ALERT_NAMEKEY', 'Template moet een naamsleutel hebben!');
define('_JNEWS_LIST_GUIDE', '<strong>Lijstbeheer:</strong> <br/>'.
       '<ul><li>Het eerste wat u moet doen om te beginnen met jNews is uw lijst aanmaken.</li>'.
       '<li>U kunt gebruikers abonneren op deze lijst en een of meer nieuwsbrieven versturen.</li>'.
       '<li>Hier kunt u de basisgegevens voor de lijst invoeren, inclusief uw <i><u>Afzendergegevens</u></i>.</li>'.
       '<li>En gebruikers of gebruikergroepen aangeven die zich voor de lijst kunnen inschrijven.</li>'.
       '<li>Voor de <i>Plus</i> en <i>Pro</i> versie kunt u aangeven welke gebruikergroep of gebruiker mailings voor de ljst kan toevoegen of bewerken.</li>'.
       '<li>In de <i>Pro</i> versie heeft u de optie <i><u>Uitschrijvings-</u></i> en <i><u>Inschrijvingsnotificaties</u></i> te versturen naar de eigenaar van de lijst of de beheerder van de website.</li></ul>');
define('_JNEWS_SUBSCRIBERS_GUIDE', '<strong>Abonneebeheer:</strong> </br>' .
	    '<ul><li><strong>Tijdens aanmaken: </strong></li><br>'.
        '<ul><li>Hier kunt abonnees toevoegen.</li>'.
        '<li>Specificeer uw <i><u>abonneegegevens</i></u></li>'.
        '<li>En selecteer voor welke <i><u>lijst</u></i> u de abonnee wilt inschrijven, vooropgesteld dat u een lijst heeft aangemaakt.</li>'.
        '<li>U kunt bevestigen dat uw abonnees uw nieuwsbrieven ontvangen.</li>'.
        '<li>U kunt ook toestaan dat uw abonnees de nieuwsbrief in HTML-opmaak ontvangen.</li>'.
        '<li><i><u>IP</u></i>-veld wordt toegevoegd om automatisch op de frontend van uw website het IP-adres te herkennen van uw abonnees. </li></ul></ul>'.
        '<ul><li><strong>Export-knop</strong></li>' .
        '<ul><li>Hiermee kunt u abonnees van al uw lijsten of geselecteerde lijsten <i><u>exporteren</u></i>.</li></ul></ul>' .
        '<ul><li><strong>Import-knop</strong></li>' .
        '<ul><li>Hiermee kunt u abonnees naar al uw lijsten of geselecteerde lijsten <i><u>importeren</u></i>.</li></ul></ul>');
define('_JNEWS_NEWSLETTER_GUIDE', '<strong>Nieuwsbriefbeheer:</strong> <br/>'.
        '<ul><li>Indien u (een) lijst(en) heeft gemaakt kunt u nu verder gaan met het aanmaken van uw <i><u>nieuwsbrieven</u></i>.</li>'.
        '<li>In de <i><u>Plus</u></i> versie kunt u <i><u>geplande nieuwsbrieven</u></i> en ook <i><u>autoresponder</u></i> of <i><u>auto-responder</u></i> type mailings aanmaken.</li>'.
        '<li>In de <i><u>PRO</u></i>-versie heeft u de <i><u>Slimme-Nieuwsbrief</u></i>functionaliteit, die de <i>laatst gemaakte</i>, <i>gewijzigde</i> en <i>gepubliceerde artikelen</i> van uw website gebruikt.</li></ul>'.
        '<ul><li><strong>Tijdens aanmaken:</strong></li>'.
		'<ul><li><i><u>Nieuwsbrief inhoudsvak</u></i> -> waar u de inhoud van uw nieuwsbrief plaatst.</li>'.
		'<li><i><u>Lijst-tabblad</u></i> -> het onderdeel waar u de nieuwsbrief naar een of meer lijsten kunt versturen.</li>'.
		'<li><i><u>Afzender-tabblad</u></i> -> het onderdeel met de instellingen van de afzendergegevens van uw nieuwsbrief.</li>'.
		'<li><i><u>Inhoud-tabblad</u></i> -> het onderdeel waar u de inhoud van uw website kunt opzoeken en specificeren welk artikel in uw nieuwsbrief wordt ingevoegd.</li>'.
        '<li><i><u>Bijlagen</u></i> -> Bijlage-gegevens voor de nieuwsbrief.</li></ul></ul>' .
        '<ul><li><strong>Depubliceer-knop</strong></li>' .
        '<ul><li>Hiermee kunt u uw nieuwsbrief depubliceren.</li></ul></ul>' .
        '<ul><li><strong>Voorbeeld-knop</strong></li>' .
        '<ul><li>Voorbeeld van de inhoud en opmaak van uw nieuwsbrief.</li></ul></ul>' .
        '<ul><li><strong>Verstuur-knop</strong></li>' .
        '<ul><li>Hiermee kunt u de nieuwsbrief handmatig versturen naar de lijst van abonnees.</li></ul></ul>' .
        '<ul><li><i>NB: U kunt alleen een gedepubliceerde nieuwsbrief wijzigen.</i></li></ul>');
define('_JNEWS_AUTORESPONDER_GUIDE', '<strong>Autoresponder-beheer:</strong><br/>'.
		  '<ul><li>Indien u een <i><u>Auto-responder</u></i> lijsttype heeft gemaakt kunt u verder gaan met het aanmaken van uw <i><u>Autoresponder</u></i>.</li>'.
		  '<li>Tijdens het aanmaken kunt u het <i><u>aantal vertragingen</u></i> voor uw autoresponder instellen, nadat de vorige is verwerkt.</li>' .
		  '<li> Het proces is min of meer hetzelfde als bij het aanmaken van uw nieuwsbrief.</li></ul>');
define('_JNEWS_SMARTNEWSLETTER_GUIDE', '<strong>Slimme-Nieuwsbriefbeheer:</strong> <br/>' .
		 '<ul><li>Indien u <i>(een) lijst(en)</i> heeft aangemaakt en <i>laatst gemaakte</i>, <i>gewijzigde</i> en <i>gepubliceerde artikelen</i> op uw website heeft kunt u verder gaan met het aanmaken van een <i><u>Slimme Nieuwsbrief</u></i>.</li>'.
         '<li> Het aanmaakproces is min of meer hetzelfde als het aanmaken van een nieuwsbrief.</li>' .
         '<li>Via het <i><u>Slimme-Nieuwsbrieftabblad</u></i> kunt u tijdens het aanmaken de instellingen voor het verwerken van uw Slimme-Nieuwsbrieven aangeven.</li>');
define('_JNEWS_TEMPLATES_GUIDE', '<strong>Templatebeheer:</strong><br><ul><li>Templates kunnen handig zijn bij het aanmaken van nieuwsbrieven.</li>' .
		'<li>Met dit scherm kunt u templates voor uw nieuwsbrieven aanmaken</li>' .
		'<li><i><u>Standaardtemplate</u></i> wordt toegepast op elke nieuw aangemaakte nieuwsbrief.</li>' .
		'<li><i><u>Inline CSS</u></i> van het template wordt toegepast/overerfd op de aangemaakte nieuwsbrief.</li>' .
		'<li>U kunt ook een <i><u>achtergrondkleur</u></i> kiezen voor de nieuwsbrief.</li>' .
		'<li>NB: Alleen nieuw aangemaakte nieuwsbrieven krijgen de HTML van het standaardtemplate</li></ul>' .
		'<ul><strong>Standaard-knop</strong>'.
		'<ul><li>Teneinde uw template het standaardtemplate voor uw nieuwsbrief te maken hoeft u alleen maar op deze knop te klikken.</li></ul></ul>');
define('_JNEWS_QUEUE_GUIDE','<strong>Wachtrijbeheer:</strong><br/> ' .
		'<ul><li>Met dit scherm kunt u de <i><u>mailings in de waxchtrij</u></i> bekijken.' .
		'<li>Dit zijn uw <i><u>geplande nieuwsbrieven</i></u>, <i><u>autoresponders</i></u> en <i><u>Slimme-Nieuwsbrieven</i></u></li>'.
        '<li>Met de <i><u>Verwerk wachtrij-knop</i></u> kunt u de mailings in de wachtrij handmatig verwerken.</li>' .
        '<li>Met de <i><u>Herstel S.N. teller-knop</i></u> kunt u de <i>volgende verzenddatum</i> of <i>gegenereerde datum</i> van uw Slimme nieuwsbrief herstellen.</li>' .
        '<li>Met de <i><u>Wachtrij legen-knop</i></u> kunt u de hele wachtrij legen.</li></ul>');
define('_JNEWS_ABOUT_GUIDE','jnews');
define('_JNEWS_IMPORT_GUIDE','<strong>Importbeheer:</strong><br/>'.
         '<ul><li>Hier kunt u abonnees naar al uw lijsten of geselecteerde lijsten importeren.</li>'.
         '<li>Door de onderstaande link te volgen gaat u verder met het importeren van uw abonnees.</li>'.
         '<li><i>NB: U moet eerst uw lijsten aanmaken voor het importeren van uw abonnees.</i></li></ul>');
define('_JNEWS_CONFIGURATION_GUIDE','<strong>Configuratie:</strong><br/>'.
        '<ul>Alle jnews instellingen kunnen in dit onderdeel worden gemaakt..<br/><br/>'.
	    '<strong>Mail-tabblad:</strong>'.
	    '<ul><li>In dit onderdeel kunt u de mailinstellingen en verzendinstellingen voor jNews aan uw server aanpassen.</li></ul>'.
	    '<br/><strong>Abonnees-tabblad:</strong>'.
	    '<ul><li>In dit onderdeel kunnen de abonnee-instellingen voor zowel frontend als backend van de website worden aangepast.</li></ul>'.
	    '<br/><strong>Plannings-tabblad:</strong>'.
	    '<ul><li>In dit onderdeel kunnen de planningsfrequentie en de onderhoudsinstellingen voor het verzenden van uw mailings worden aangegeven.</li>
         <li>De hier ingegeven gegevens worden ook bepaald door uw serververeisten/-beperkingen.</li></ul>'.
	    '<br/><strong>Logs & Stats-tabblad:</strong>'.
	    '<ul><li>Het onderdeel waar de statistiekinstellingen en loginstellingen worden aangegeven.</li></ul>'.
	    '<br/><strong>Archief-tabblad:</strong>'.
	    '<ul><li>Wordt hoofdzakelijk gebruikt voor de auto-archiveerfrequentie.</li></ul>'.
	    '<br/><strong>Overig-tabblad:</strong>'.
	    '<ul><li>Alle overige instellingen en voorkeuren.</li></ul>'.
	    '<br/><strong>Wachtrij-tabblad:</strong>'.
	    '<ul><li>Hoofdzakelijk gebruikt voor wachtrijbeheer (beschikbaar in Plus en Pro versie).</li></ul>'.
	    '<br/><strong>Licentie-tabblad:</strong>'.
	    '<ul><li>Het onderdeek waar de licentie gevalideerd kan worden door het volgen van de getoonde stappen.</li></ul></ul>');
define('_JNEWS_EMPTY_Q','Legen wachtrij');
define('_JNEWS_RESET_SN','Herstellen S.N. teller');
define('_JNEWS_Q_M1','Er zijn geen e-mails in de wachtrij.');
define('_JNEWS_INSTALL_CLICKSTART', 'Klik hier om te beginnen!');
define('_JNEWS_INSTALL_DESC', 'Bedankt voor het kiezen voor jNews.<br><br>
jNews is een mailinglijst-, nieuwsbrief-, auto-responder- en opvolgingshulpmiddel voor effectief communicweren met uw gebruikers en klanten.');
define('_JNEWS_INSTALL_ERRORN' , 'Als u fouten ondervindt tijdens het installatieproces, lees dan de ');
define('_JNEWS_INSTALL_DOC' , 'documentatie hier.');
define('_JNEWS_INSTALL_SUCC' , 'Succesvol geïnstalleerd.');
define('_JNEWS_INSTALL_STATUS_CONFIG' , 'jNews configuratie:');
define('_JNEWS_INSTALL_STATUS_PLUGIN' , 'jNews plugin(bot):');
define('_JNEWS_INSTALL_STATUS_MOD' , 'jNews module:');
define('_JNEWS_INSTALL_UPDATES' , 'jNews updates');
define('_JNEWS_STATS_GUIDE', '<strong>Mailingrapporten: </strong><br/>'.
		'<ul> <li>Dit genereert een overzicht van verzonden mailings binnen het ingegeven datumbereik. </li> ' .
		'<li>Het telt het volgende: <ul><li> het aantal mails verzonden in HTML & tekstopmaak,</li>' .
			'<li> Aantal abonnees die de mails in HTML-opmaak hebben bekeken, </li>' .
			'<li>hoeveel verzonden mails zijn mislukt, </li><li>nog verwerkt moeten worden, ' .
			'</li><li>e-mail gebounced,</li> <li>en het totaal verzonden is het aantal verzonden e-mails bij elke mailing.</li> </ul></li></ul>'.
		'<strong>Lijst rapporten:</strong> <br/>'.
		'<ul> <li>Dit genereert een overzicht van lijstnamen gebaseerd op de abonneerdatum binnen het ingegeven datumbereik. </li>' .
			'<li>Het toont het volgende:  <ul><li>aantal abonnees dat zich heeft ingeschreven </li> ' .
			'<li>aantal abonnees dat zich heeft uitgeschreven, </li>' .
			'<li>aantal bevestigde en niet-bevestigde abonnees voor elk lijstttype. </li>  </ul></li></ul>'.
		'<strong>Abonnee-rapport:</strong> <br/>'.
		'<ul> <li>Dit genereert een rapport van het totaal aantal abonnees binnen het ingegeven datumbereik.</li> </ul>'.
		'<strong>Exporteren van het rapport naar een CSV-bestand:</strong>'.
		'<ul> <li>Bij elk rapport (Mailing, Lijst en Abonnees), is een export-icoon te vinden rechtsboven elk tabblad.</li>'.
		'<li>Klik op het export-icoon om het bestand te exporteren.</li></ul>'
		);
define('_JNEWS_TEMPLATE_ALIAS' , 'Alias');
define('_JNEWS_SEARCH' , 'Zoeken');
define('_JNEWS_SEARCH_GO' , 'Start');
define('_JNEWS_SEARCH_RESET' , 'Reset');
define('_JNEWS_SENDER_LIST_INFO', 'Klik om zender te selecteren uit lijst' );
define('_JNEWS_FILTER_MAILING' , 'Selecteer een mailing ');
define('_JNEWS_MESSAGE_QUEUE' , 'Alle mailings in de wachtrij');
define('_JNEWS_FILTER_LIST' , 'Selecteer type');
define('_JNEWS_MAILING_TAG' , 'Tag');
define('_JNEWS_MAILING_TAGINSERT' , 'Invoegen');
define('_JNEWS_MAILING_TAG_INSTRUCT' , '<p>Selecteer de gewenste tag om toe te voegen en klik op invoegen.<br> NB: <i>Zorg dat u de cursor in de tekstverwerker plaatst waar u wilt invoegen.</i></p>');
define('_JNEWS_TAG_SUBSCRIPTION', '{tag:subscriptions}');
define('_JNEWS_TAG_UNSUBSCRIBE', '{tag:unsubscribe}');
define('_JNEWS_TAG_SUBSCRIPTION_DESC', 'Dit wordt vervangen door de gedefinieerde constante  "_JNEWS_CHANGE_EMAIL_SUBSCRIPTION" in de vertaling.');
define('_JNEWS_TAG_UNSUBSCRIBE_DESC', 'Dit wordt vervangen door de gedefinieerde constante "_JNEWS_UNSUBSCRIBE" in de vertaling.');
define('_JNEWS_TAG_VIEWONLINETXT', '{viewonline:text here}');
define('_JNEWS_TAG_VIEWONLINE', 'bekijken in uw browser');
define('_JNEWS_TAG_VIEWONLINE_DESC', 'Dit wordt vervangen door hetzij de standaardtekst of wat u plaatst in de "text here" met een link.');

//since 1.1.0
define('_JNEWS_SHOW_CRON','Activeren joobi cron');

define('_JNEWS_SHOW_CRON_TIPS','Activeert de cron set up tijdens installatie van jNews.<br>Deze cron is ingesteld op http://www.joobi.co en wordt elke 15 minuten getriggerd');
define('_JNEWS_CRON_FSETTINGS' , 'Cron instellingen');

define('_JNEWS_INSTALL_ACAUPDATEMSG' , 'Wilt u uw Acajoom-database naar jNews importeren?');
define('_JNEWS_INSTALL_ACAUPDATEBTN' , 'Import Acajoom-gegevens');
define('_JNEWS_INSTALL_ACAUPDATENOTE' , 'NB: Dit zet gegevens over van Acajoom-tabellen naar jNews-tabellen.');

define('_JNEWS_MAILING_UPDATED' , 'Mailings succesvol geïmporteeerd.');
define('_JNEWS_DETAIL_UPDATED' , 'Details statisteieken succesvol geïmporteeerd');
define('_JNEWS_GLOBAL_UPDATED' , 'Algemene statistieken succesvol geïmporteeerd');
define('_JNEWS_SUBSCRIBER_UPDATED' , 'Abonnees succesvol geïmporteeerd');
define('_JNEWS_QUEUE_UPDATED' , 'Wachtrijen succesvol geïmporteeerd');
define('_JNEWS_LISTSUBSCRIBER_UPDATED' , 'Lijst abonnees succesvol geïmporteeerd');

define('_JNEWS_LIST_UPDATED_FAILED' , 'Geen lijsten succesvol geïmporteeerd');
define('_JNEWS_MAILING_UPDATED_FAILED' , 'Geen mailings succesvol geïmporteeerd');
define('_JNEWS_DETAIL_UPDATED_FAILED' , 'Geen gedetaileerde statistieken succesvol geïmporteeerd');
define('_JNEWS_GLOBAL_UPDATED_FAILED' , 'Geen algemene statistieken succesvol geïmporteeerd');
define('_JNEWS_SUBSCRIBER_UPDATED_FAILED' , 'Geen abonnees succesvol geïmporteeerd');
define('_JNEWS_QUEUE_UPDATED_FAILED' , 'Geen records succesvol geïmporteeerd in wachtrij');
define('_JNEWS_LISTSUBSCRIBER_UPDATED_FAILED' , 'Geen records succesvol geïmporteeerd in lijst abonnees');

define('_JNEWS_LEGEND' , 'Legenda');
define('_JNEWS_NOTVISIBLE', 'Niet zichtbaar');
define('_JNEWS_SCHEDULED', 'Gepland');
define('_JNEWS_SUBSCRIBERS_UNREGISTERED', 'Niet-geregistreerd');
define('_JNEWS_TEMPLATE_UPLOAD_SUCCESS', 'Template succesvol geupload' );
define('_JNEWS_TEMPLATE_UPLOAD_FAIL', 'Upload template mislukt. Controleer of het zip-bestand een index.html-bestand bevat.' );
define('_JNEWS_UPLOAD_ZIP_INVALID', 'Kan alleen templates uploaden in zip-bestanden' );
define('_JNEWS_CUSTOMCSS', 'Voer uw aangepaste CSS hier in');
define('_JNEWS_TEMPLATE_ALERT', 'Templatenaam en alias zijn vereist!');

//since 2.2.0
define('_JNEWS_UNSUB_NOTIFYMSG','Verstuur uitschrijfnotificatie');
define('_JNEWS_SEND_UNSUBNOTIFY_TIPS','Geeef aan of u een uitschrijfnotificatie wilt verzenden naar de lijsteigenaar.');
define('_JNEWS_UNSUB_ADMINMESSAGE', 'Bericht uitschrijfnotificatie');
define('_JNEWS_INFO_AMIN_UNSUB_NOTIFY', 'Dit bericht wordt verzonden naar de lijsteigenaar of aanmaker van de lijst als iemand zich van de lijst uitschrijft. Elk bericht kan hier worden ingevoerd.');

//templates
define('_JNEWS_CSS_TOGGLESTYLE','Schakelen stijlen');
define('_JNEWS_EXTERNALCSS_LINK','Toevoegen externe CSS-link');
define('_JNEWS_EXTERNALCSS_PROCESS','Verwerken');
define('_JNEWS_TEMP_COMBINECLASS','Gecombineerde klasse-selectie');
define('_JNEWS_COMBINECLASS_SUPPORT','wordt niet ondersteund');
define('_JNEWS_TEMP_COMBINECLASS_IN','in');
define('_JNEWS_TEMP_HTMLTAG','html tag gevonden');
define('_JNEWS_TEMP_CONTDEV','Neem contact op met de ontwikkelaars voor het toevoegen');
define('_JNEWS_TEMP_COMBCLASSPSEUDO','Gecombineerde pseudo-klasse selectie');
define('_JNEWS_TEMP_COMBCLASSEID','of element id');

//Menus
define('_JNEWS_MENU_LIVE_SUPPORT','Live ondersteuning');

//Tags
define ('_JNEWS_SMART_TAG', 'Dit wordt vervangen door het laatst aangemaakte, gewijzigde en gepubliceerde artikel als u een mailing aanmaakt van het type Slimme nieuwsbrief.');

//Toobar Menus
define('_JNEWS_DONEW_SUBSCRIBERB', 'Naam en e-mail zijn verplicht!');

//since 3.1.0
define('_JNEWS_IP', 'IP');
define('_JNEWS_MENU_STATS_REPORTS', 'Statistieken');
define('_JNEWS_LIST_T_ADMIN_NOTIFICATION' , 'Notificatie');
define('_JNEWS_MENU_REFRESH_STATS' , 'Verversen');
define('_JNEWS_MENU_GENERATE_STATS' , 'Genereren');

//since 3.2.0
define('_JNEWS_LIST_T_LIST' , 'Lijst');
define('_JNEWS_UNSUBSCRIBE_ADMIN_NOTIFICATION', '<p>Beste [LISTOWNERNAME],<br /> <br /></p> <p style="padding-left: 30px;">Dit is een automatisch aangemaakt bericht van [SITE]. Een gebruiker heeft zich uitgeschreven van uw nieuwsbrieflijst.</p> <p style="padding-left: 60px;"><strong>Details</strong></p> <p style="padding-left: 60px;">Datum en tijd uitschrijven: <strong>{tag:date}</strong><br />Naam abonnee: <strong>[SUBSCRIBERNAME]</strong><br />E-mail abonnee: <strong>[SUBSCRIBEREMAIL]</strong></p> <p style="padding-left: 60px;">Uitgeschreven van lijst: <strong>[LISTID] - [LISTNAME]</strong></p> <p style="padding-left: 30px;">Beantwoord dit bericht niet daar het automatisch is gegenereerd en alleen dient ter informatie.</p> <p> </p> <p>Dank u wel!</p>');

//Tagging
define('_JNEWS_TAG_MODNAME' , 'Modulenaam');
define('_JNEWS_TAG_MODTYPE' , 'Type');
define('_JNEWS_TAG_MODPOSITION' , 'Positie');
define('_JNEWS_TAG_ACL' , 'Toegangsniveau');
define('_JNEWS_TAG_SPECIAL' , 'Speciaal');
define('_JNEWS_TAG_PUBLIC' , 'Publiek');
define('_JNEWS_TAG_ARTICLESECTION' , 'Sectie');
define('_JNEWS_TAG_ARTICLECATEGORY' , 'Categorie');
define('_JNEWS_TAGMENU_MODULE' , 'Joomla module');
define('_JNEWS_TAGMENU_AUTOCONTENT' , 'Auto inhoud');
define('_JNEWS_TAGMENU_SUBSCRIPTION' , 'Abonnement');
define('_JNEWS_TAGMENU_USERS' , 'Gebruikers');
define('_JNEWS_TAGMENU_DATETIME' , 'Datum/Tijd');
define('_JNEWS_TAGMENU_WEBSITE' , 'Websitelinks');
define('_JNEWS_TAGMENU_CONTENT' , 'Inhoud');
define('_JNEWS_TAGPICKLIST_ORDERING' , 'Volgorde');
define('_JNEWS_TAGPICKLIST_ORDERINGTIP' , 'Selecteer de wijze waarop uw artikelen worden gesorteerd.');
define('_JNEWS_TAGPICKLIST_CREATED' , 'Datum gemaaakt (Nieuwste eerst)');
define('_JNEWS_TAGPICKLIST_TITLE' , 'Titel');
define('_JNEWS_TAGPICKLIST_Order' , 'Volgorde');

define('_JNEWS_SELECT_MAILING', 'Selecteer te wijzigen mail!');
define('_JNEWS_DELETE_MAILING', 'Selecteer te verwijderen mail!');
define('_JNEWS_COPY_MAILING', 'Selecteer te kopiëren mail!');
define('_JNEWS_TAG_CONFIRM_DESC', 'Dit wordt vervangen door de gedefinieerde constante "_JNEWS_CONFIRM_SUBSCRIPTION" in de vertaling met de bevestigingslink.');
define('_JNEWS_TEMPLATE_SAVED', 'Template succesvol opgeslagen.');
define('_JNEWS_SUBSCRIPTION_NOT_AVAIL_LIST', 'U probeert zich in te schrijven voor een listid dat niet bestaat.');

//since 4.0.0
define('_JNEWS_MENU_TAG' , 'Tags');
define('_JNEWS_TAG_EMAIL_DESC', 'Dit wordt vervangen door het e-mailadres van de abonnee.');
define('_JNEWS_TAG_FWDTOFRIEND', 'Doorsturen naar een vriend.');
define('_JNEWS_TAGTITLE_SITE', 'Websitelinks');
define('_JNEWS_TAGTITLE_CONTENT', 'Joomla inhoud');
define('_JNEWS_TAGTITLE_AUTOCONTENT', 'Automatische Joomla inhoud');
define('_JNEWS_TAGTITLE_MOD', 'Joomla modules');
define('_JNEWS_TAGCAPTION_ALL', 'ALLE');
define('_JNEWS_SUCCESS_COPIED' , ' succesvol gekopieerd.');
define('_JNEWS_TAGCAPTION_ALLSECCAT' , 'ALLE SECTIES EN CATEGORIEEN');
define('_JNEWS_FWD_MYDETAILS' , 'Mijn gegevens');
define('_JNEWS_FWD_WANTTO' , 'Ik wil deze e-mail doorsturen naar');
define('_JNEWS_FWD_MESSAGE' , 'Voer een bericht in');
define('_JNEWS_FWD_MESSAGEHID' , 'Deze e-mail is naar u doorgestuurd door ');
define('_JNEWS_FWD_SENDEMAIL' , 'Verstuur e-mail');
define('_JNEWS_FWD_ADDFIELD' , 'Toevoegen vriend.');

define('_JNEWS_NEWSLETTER_ARCHIVE', 'Nieuwsbriefarchief');
define('_JNEWS_FWDTOFRIEND_ALRT_UNAME', 'Voer uw naam in.');
define('_JNEWS_FWDTOFRIEND_ALRT_UEMAIL', 'Voer een geldig e-mailadres in.');
define('_JNEWS_FWDTOFRIEND_ALRT_FNAME', 'Voer de naam van uw vriend in.');
define('_JNEWS_FWDTOFRIEND_ALRT_FEMAIL', 'Voer een geldig e-mailadres van uw vriend in.');
define('_JNEWS_FWDTOFRIEND_SUCCESS', 'Mailing succesvol doorgestuurd naar ');
define('_JNEWS_FWDTOFRIEND_FAILED', 'Mailing niet succesvol doorgestuurd naar ');
define('_JNEWS_TAGSITE_TAGTIP', 'Klik op Invoegen om de tag in de nieuwsbrief te plaatsen.');
define('_JNEWS_TAGSITE_CAPTION', 'Tag bijschrift');
define('_JNEWS_TAGSITE_CAPTIONTIP', 'Wijzig het bijschrift van de tag of tekst hier.');
define('_JNEWS_TAGSMART_ALERT_SELECT', 'Selecteer de automatische inhoud die wordt toegevoegd in uw nieuwsbrief!');
define('_JNEWS_ARLIST', 'Auto-responders');
define('_JNEWS_NEW_SUBSCRIBER', 'Abonnee succesvol opgeslagen.');
define('_JNEWS_EDIT_AR', 'Wijzigen Auto-responder');
define('_JNEWS_ARINFO_LIST_DELAY', 'Specificeer de vertraging (in dagen) van deze autoresponder ten opzixhte van de abonneerdatum.');
define('_JNEWS_SUBS_LIST', 'Deze Auto-responder wordt gekoppeld aan de volgende geselecteerde lijsten:');
define('_JNEWS_SUBS_LIST2', 'Koppelen lijsten');
define('_JNEWS_SUBS_LIST_TIPS', 'Koppel deze auto-responder aan de volgende lijsten. Als een gebruiker zich abonneert op deze lijsten wordt hij ook ingeschreven op de autoresponder. ');
define('_JNEWS_PRIORD_LISTTYPE','Prioriteit lijsttype');
define('_JNEWS_PRIORD_LISTTYPE_TIPS', 'Prioriteer het lijsttype of auto-respondertype in het abonnement van de lijsten.');
define('_JNEWS_PRIORD_SUBS','Prioriteit abonnement');
define('_JNEWS_PRIORD_SUBS_TIPS', 'Prioriteer de inschrijving op of uitschrijving van een lijst of verander niets aan de bestaande abonnementen.<br/><b>Negeer wijzigingen</b>: We doen niets aan de abonnementswijzigingen van de auto-responder ongeacht het uitschrijven of inschrijven als een abonnementswijziging ook wordt gedaan voor de lijst waaraan de auto-responder is gekoppeld.<br/><b>Inschrijving</b>: We forceren het inschrijven van gebruikers op de auto-responders die zijn gekoppeld aan de ingeschreven lijst.<br/><b>Uitschrijving</b>: We schrijven de gebruiker uit van de gekoppelde auto-responder, zelfs als de gebruiker is ingeschreven van de lijst waaraan de autoresponder is gekoppeld.');
define('_JNEWS_REMAIN_SUBS','Negeer wijzigingen');
define('_JNEWS_UNSUBS','Uitschrijving');
define('_JNEWS_SUBSCRIPTION_AR','Inschrijven voor de Auto-responder');
define('_JNEWS_SUBSCRIPTION_LIST','Inschrijving voor lijst');
define('_JNEWS_YOUR_CRON', 'Uw cron-url: ');
define('_JNEWS_LAUNCH_CRON', 'Start cron');

define('_JNEWS_SAFEUNSUBSCRIBE', 'Veilig uitschrijven');
define('_JNEWS_INVIUNPUB', 'De lijsten waarop u inschrijft zijn ofwel in onzichtbare status of gedepubliceerd.<br> Alleen de beheerder van de website kan u vanaf nu van deze lijsten uitschrijven.');
define('_JNEWS_UNSUBSTOLISTS_MESSAGE','Weet u zeker dat u zich wilt uitschrijven van deze lijsten?');
define('_JNEWS_SELECT_ALLLISTS','Klik om alle lijsten te selecteren');
define('_JNEWS_SELECT_ALLLAUTOR','Klik om alle Auto-responders te selecteren');
define('_JNEWS_UNSUBSLINK_TIP','Selecteer Ja als u een uitschrijvingslink in de mailings wilt tonen');
define('_JNEWS_CHANGESUBSLINK_TIP','Selecteer Ja als u een inschrijvingslink in de mailings wilt tonen waarmee de abonnee de inschrijving kan wijzigen');
define('JNEWS_AUTOMATIC_CRON', 'Een automatische cron is aangemaakt tijdens de installatie van jNews.<br/>Deze cron is automatisch ingesteld op www.joobi.co. Deze cron heeft een frequentie van 15 minuten.');
define('_JNEWS_IMPORTSUB_TIPS','Importeer abonnees. De informatie in het bestand moet de volgende opmaak hebben: <b>Naam, e-mail, receiveHTML(1/0), <span style="color: rgb(255, 0, 0);">confirmed(1/0)</span></b>');
define('_JNEWS_NOSMARTTAG', 'De slimme nieuwsbrief bevat nog geen [SMARTNEWSLETTER]. Voeg de tag in de inhoud in.');
define('_JNEWS_DELETEBTN','Verwijder wachtrij');
define('_JNEWS_MENU_STOPQ','Stop wachtrij');
define('_JNEWS_MENU_STARTQ','Start wachtrij');
define('_JNEWS_MAILING_QUEUE_DELETED', 'Wachtrijgegevens succesvol verwijderd uit de mailing.');
define('_JNEWS_QUEUE_SETTING','Wachtrij-instelling');
define('_JNEWS_QUEUESTATS_ON','Aan');
define('_JNEWS_QUEUESTATS_OF','Uit');
define('_JNEWS_QUEUESTATS_TIPS','Zet Aan als u de wachtrijverwerking wilt starten of Uit als u deze wilt stoppen.');
define('_JNEWS_MENU_STARTQ_MSG','Verwerken wachtrij is gestart.');
define('_JNEWS_MENU_STOPQ_MSG','Verwerken wachtrij is gestopt.');
define('_JNEWS_QUEUESTATS_NOTIFY','Wachtrij is gestopt, als u de verwerking wilt hervatten moet u ');
define('_JNEWS_NEW_SUB','jNews Subscriptie');
//since
define('_JNEWS_NEW_URL_PASS_TIPS','Voer het wachtwoord in voor het toevoegen van een abonnee via url. Voeg de wachtwoordvariabele toe aan de URL.');
define('_JNEWS_CRON_PASSWORD', 'Cron wachtwoord');
define('_JNEWS_USE_CRON_PASS', 'Gebruik wachtwoord voor cron');

//since 4.2.0
define('_JNEWS_QUEUE_STATUS','Status wachtrij');
define('_JNEWS_SMTPPORT','SMTP poort');
define('_JNEWS_SMARTQUEUE','Slimme wachtrij');
define('_JNEWS_SMARTQ_ON','Aan');
define('_JNEWS_SMARTQ_OF','Uit');
define('_JNEWS_SMARTQ_TIPS','Zet Aan voor het inschakelen van slimme wachtrijverwerking (voorkomt serverbeperkingen).');
define('_JNEWS_SUB_INFO_FIELDS', 'Toon meer abonnee-informatie');
define('_JNEWS_SUB_INFO_FIELDS_TIPS', 'Toon IP ,registratiedatum, gebruiker-id en zwarte lijstvelden in het abonneerformulier op de frontend');
define('_JNEWS_JSUB', 'Frontendbeheeer');
define('_JNEWS_JSUB_TIPS', 'Selecteer of alleen de eigenaar van een lijst of de super admin nieuwsbrieven in de frontend kan wijzigen en aanmaken/bekijken. Een gebruiker kan eigenaar van een lijst zijn als hij is ingeschreven via jSubscription');
define('_JNEWS_BYOWNER', 'Door eigenaar');
define('_JNEWS_LIST_ACESS', 'Door lijsttoegang');
define('_JNEWS_CAPTCHA_WARN',   'Kan Captcha-afbeelding niet aanmaken. U heeft geen php GD Library geïnstalleerd of de php GD Library is  niet geladen met TFF ondersteuning <br>Controleer uw phpinfo() of u kunt de Activeer captcha-optie uitschakelen via');
define('_JNEWS_CAPTCHA_LINK','jNews configuratie onder de Abonnee-tab');
define('_JNEWS_MORE_TEMPLATES','Meer templates');

//Since 5.0.0
define('_JNEWS_TAGMENU_K2CONTENT', 'K2 inhoud');
define('_JNEWS_TAGMENU_VMPRODUCTS', 'Virtuemart artikelen');
define('_JNEWS_TEMPLATE_AVLB','Beschikbaarheid');
define('_JNEWS_TEMPLATE_INS','Geïnstalleerd');
define('_JNEWS_TEMPLATE_DWN','Download');
define('_JNEWS_TEMPLATE_FDWN','Gratis download');
define('_JNEWS_TEMPLATE_IMG','Afbeelding');
define('_JNEWS_SUBS_INFO','U heeft geen abonnement op een mailinglijst dus kunt u hier niet uitschrijven.');
define ('_JNEWS_UNSUBS_STATUS','U bent al uitgeschreven van de lijst.');
define('_JNEWS_CAPTCHAW', 'Captcha breedte');
define('_JNEWS_CAPTCHAW_TIPS', 'Definieer de breedte van de captcha in de abonneemodule');
define('_JNEWS_CAPTCHAH', 'Captcha hoogte');
define('_JNEWS_CAPTCHAH_TIPS', 'Definieer de hoogte van de captcha in de abonneemodule');
define('_JNEWS_CAPTCHA_MSG', 'Voer de juiste captchacode in.');
define('_JNEWS_MCRYPT_MESSAGE', 'Captcha is ingeschakeld zonder dat de mcrypt library is geactiveerd.<br>Activeer de mcrypt extensie in uw php.ini.<br>U kunt ook de captcha deactiveren in ');

//Since 5.1.0
define('_JNEWS_FORCED_HTML', 'Verstuur alleen HTML mailing?');
define('_JNEWS_FORCED_HTML_TIP','Ja, als u wilt forceren dat alleen html mailings worden verzonden naar uw abonnees.');

//Since social edition
define('_JNEWS_LISTS_CONFIG','Lijsten');
define('_JNEWS_LISTS_SETTINGS','Lijstinstellingen');
define('_JNEWS_USE_MASTERLISTS','Gebruiker master-lijsten?');
define('_JNEWS_USE_MASTERLISTS_TIPS','Ja, als u master-lijsten wilt gebruiken [Alle potentiële websiteleden, Alle geregistreeerde abonnees, Alle frontend lijstabonnees] van uw abonnees. Anders Nee');
define('_JNEWS_LIST_CREATORFE','Aanmaken frontendlijst');
define('_JNEWS_LIST_CREATORFE_TIPS','Definieer toegangsniveau dat lijsten mag maken via de frontend');
define('_JNEWS_LIST_CREATORFE_WARN','(U moet hier het groepsniveau van de gebruikers aangeven dat lijsten op de frontend kan aanmaken.)');

define('_JNEWS_BLOG_RENDERING', 'Blog genereren');
define('_JNEWS_BLOG_TIPS', 'Volledig blog: Dit laadt de volledige blog in de nieuwsbrief<br>Alleen intro: Dit laadt x aantal tekens van de blog met een Lees meer-link naar de volledige blog op uw website');
define('_JNEWS_TAGMENU_BLOGS', 'Lyften Bloggie');
define('_JNEWS_TAGMENU_DEALS', 'Deal');
define('_JNEWS_DEALS_INTRO', 'Intro-vak');
define('_JNEWS_DEALS_FULL', 'Volledige beschrijving');
define('_JNEWS_DEAL_NAME', 'Deal-naam/<br> Korte beschrijving');
define('_JNEWS_DEAL_INDUSTRY', 'Industrie/<br> land');
define('_JNEWS_DEAL_TARGET', 'Doelbedrag/<br> Inv bereik');
define('_JNEWS_DEAL_TYPE_TIPS', 'Volledige beschrijving: neemt de volledige deal op in de nieuwsbrief.<br />' .
		'Intro-vak: neemt alleen de introductie van de deal op in de nieuwsbrief.<br/>');
define('_JNEWS_CONTENT_TIP', 'ID van het artikel dat moet worden opgenomen in de nieuwsbrief');
define('_JNEWS_CONTENT_ID', 'Artikel-ID');
define('_JNEWS_BLOG_TIP', 'ID van de blog die moet worden opgenomen in de nieuwsbrief');
define('_JNEWS_BLOG_ID', 'Blog-ID');
define('_JNEWS_TAGMENU_JOMSOCIAL','JomSocial');
define('_JNEWS_TAGCAPTION_ALLCAT','Alle categorieën'); //_JNEWS_TAG_ARTICLECATEGORY
define('_JNEWS_PLUG_INSTALLED','Plugin %s succesvol geïnstalleerd');
define('_JNEWS_MODULE_INSTALLED','Module %s succesvol geïnstalleerd');
define('_JNEWS_EMAIL_LISTS', 'Lijsten');
define('_JNEWS_LEADS_REP', 'Rapporten');
define('_JNEWS_SUBSCRIBERS', 'Abonnees');
define('_JNEWS_ALLOW_SN', 'Toestaan Slimme-nieuwsbrief');
define('_JNEWS_ALLOW_SN_TIP', 'Toestaan aanmaken slimme nieuwsbrief via de frontend.');
define('_JNEWS_UNSUBSCRIBE_SUBJECT_NOT', 'Notificatie uitschrijving');
define('_JNEWS_RED_SUBSCRIPTION', 'Omleiden na inschrijving');
define('_JNEWS_RED_SUBS_TIP', 'Omleiden pagina na inschrijving via module.');
define('_JNEWS_PLEASE_WAIT', 'Even geduld ...');
define('_JNEWS_MOD_MESSAGE', 'Pop-up inschrijvingsbericht');
define('_JNEWS_MOD_MESSAGE_TIP', 'Selecteer Ja voor popup inschrijvingsbericht. Selecteer Nee om het bericht in de module te plaatsen');

//since 6.1.0
define('_JNEWS_CREATE_NEWSUBS_TIPS', 'Specificeer het standaard aantal rijen voor abonneegegevens bij aanmaken/toevoegen in de frontend.');
define('_JNEWS_CREATE_NEWSUBS','Toevoegen nieuwe abonnees in ');
define('_JNEWS_ROWS', 'rijen');
define('_JNEWS_USE_BACKENDVIEW', 'Toevoegen abonnees met standaardweergave');
define('_JNEWS_USE_BACKENDVIEW_TIPS', 'Specificeer of u abonnees in de frontend wilt toevoegen met de standaardweergave  van de backend');

define('_JNEWS_TERMS_CONDITIONS', 'Algemene voorwaarden');
define('_JNEWS_TERMS_WARN', 'Selecteer de optie Algemene voorwaarden. Klik voor het lezen van de Algemene voorwaarden op de link Algemene voorwaaarden');
define('_JNEWS_TERMS_LINK','Link Algemene voorwaarden');
define('_JNEWS_TERMS_LINK_TIPS','Voer de volledige link in naar de algemene voorwaarden.<br><strong>(bijv. http://www.uwwebsite.nl/index.php?option=com_content&view=article&id=[article_id]&Itemid=[Item_id]</strong>');
define('_JNEWS_SHOW_TERMS','Toon Algemene voorwaarden');
define('_JNEWS_SHOW_TERMS_TIPS','Toevoegen Algemene voorwaarden aan de abonneemodule');
define('_JNEWS_CHECK_TERMS','Selecteer Algemene voorwaarden');
define('_JNEWS_CHECK_TERMS_TIPS','Standaard aan- of uitzetten van de algemene voorwaarden.');

//since 7.0.0
define('_JNEWS_CRON_SYSTEM', 'Cron systeem');
define('_JNEWS_CRON_SYSTEM_TIPS', 'Definieert de gebruikte cron voor het automatisch plannen van jNews.<br><br> [0] <strong> Geen cron </strong> - als u automatisch verzenden mailings niet wilt gebruiken.' .
		'<br><br>[1] <strong>jNews Cron systeemplugin</strong> - als u de jNews cron wilt initiëren binnen uw website zelf.<br><br>[2] <strong>Joobi cron</strong> - als u de gratis crontaak van <a href="http://www.joobi.co">Joobi</a> wilt gebruiken. ' .
		'<br><br>[3] <strong>Externe cron</strong> - als u liever uw eigen crontaak op uw eigen server gebruikt.');
define('_JNEWS_NO_CRON', 'Geen cron');
define('_JNEWS_CRON_PLUGIN', 'jNews cron systeemplugin');
define('_JNEWS_CRON_JOOBI','Joobi cron');
define('_JNEWS_CRON_EXTERNAL','Externe cron');
define('JNEWS_CAPTCHA_FTWARN','Kan captcha-afbeelding niet weergeven omdat de FreeType ondersteuning van GD Library is uitgeschakeld. ' .
		'<br/>Ga naar de backend van uw website -> Help -> Systeeminformatie -> tab PHP informatie -> gd sectie en controleer of FreeType ondersteuning is ingeschakeld. ' .
		'<br/> Indien uitgwschakeld kunt u dit activeren in het php.ini-bestand op uw server.');

//since 7.1.0
define('_JNEWS_SUBSCRIPTION_SETTINGS', 'Inschrijfinstellingen');
define('_JNEWS_SUBNOTIFY_MSG', 'Bericht inschrijfmelding');
define('_JNEWS_SUBNOTIFY_MSG_TIPS','Dit bericht wordt verstuurd naar de lijsteigenaar of aanmaker van de lijst als een abonnee zich inschrijft voor de lijst. Elk bericht kan hier worden ingevoerd.');
define('_JNEWS_SUBSDEFAULT_NOTIFYMSG', '<p>Beste [LISTOWNERNAME],<br /> <br /></p>
<p style="padding-left: 30px;">Dit is een automatisch gegenereerd bericht van [SITE] dat een gebruiker zich heeft ingeschreven voor uw nieuwsbrieflijst.</p>
<p style="padding-left: 60px;"><strong>Details</strong></p>
<p style="padding-left: 60px;">Datum en tijd inschrijving: <strong>{tag:date}</strong><br />Naam abonnee: <strong>[SUBSCRIBERNAME]</strong><br />E-mail abonnee: <strong>[SUBSCRIBEREMAIL]</strong></p>
<p style="padding-left: 60px;">Lijst abonnees: <strong>[LISTID] - [LISTNAME]</strong></p>
<p style="padding-left: 30px;">Beantwoord dit bericht niet daar het automatisch is gegenereerd en alleen ter informatie dient.</p>
<p> </p>
<p>Dank u wel!</p>');
define('_JNEWS_SUBS_NOTIFYSUBJECT','jNews notificatie inschrijving');
define('_JNEWS_UNSUBS_NOTIFYSUBJECT','jNews notificatie uitschrijving');
define('_JNEWS_SENDTEST_CONFIGSUCC','Als u deze e-mail ontvangt, betekent dit dat u elke mail kunt verzenden vanaf de  website.');
define('_JNEWS_SENDTEST_CONFIGERROR','Controleer de mailinstellingen. Er zijn mogelijk enkele instellingen niet correct.');
define('_JNEWS_LIST_UNPUBMSG','Uw lijst is gedepubliceerd, om de lijst die u heeft aangemaakt te kunnen gebruiken moet u xeze eerst publiceren.');
define('_JNEWS_LIST_INVIMSG','Uw lijst is niet zichtbaar aan de frontend. Om deze te laten bekijken door abonnees moet u de lijst eerst zichtbaar maken.');
define('_JNEWS_TEMPLATE_STYLE_TH5','Titel h5');
define('_JNEWS_TEMPLATE_STYLE_TH6','Titel h6');
define('_JNEWS_SENDTEST_TEMP','Verzend testtemplate');
define('_JNEWS_NOCRON_USED','Geen crontaak aangemaakt of gebruikt voor jNews.');

//since 7.2.0
define('_JNEWS_LISTS_UNSUBMSG','U bent al uitgeschreven voor mailinglijsten.');
define('_JNEWS_SEND_NEWSLETTER','Verstuur nieuwsbrief');
define('_JNEWS_MSG_SENT_SUCCESS', 'succesvol verzonden naar');
define('_JNEWS_MSG_SENT_FAIL', 'niet succesvol verzonden naar');
define('_JNEWS_QUEUE_STATUSSEND', 'Status wachtrij');
define('_JNEWS_MENU_CONTINUE','Doorgaan');
define('_JNEWS_QUEUE_EMPTYINFO','De wachtrij is leeg en er zijn geen geplande mailings te verwerken.');
define('_JNEWS_QUEUE_READYTOSEND','Mailings, klaar voor verzending');
define('_JNEWS_QUEUE_SCHEDULED','Geplande mailings');
define('_JNEWS_QUEUE_STILLONQUEUE','Mailings nog in wachtrij op ');
define('_JNEWS_SENDBTN','Verstuur');
define('_JNEWS_TAGMENU_FLEXICONTENT','Flexicontent');

//since 7.3.0
define('_JNEWS_SMTPSECURE', 'Beveiligde SMTP');
define('_JNEWS_SMTPSECURE_TIPS', 'Als u een SMTP-server gebruikt, kunt u een beveiligd proces toevoegen alvorens verbinding te maken met de SMTP-server.');

//since 7.4.0
define('_JNEWS_NO_LISTS_AVAILABLE', 'Geen lijsten van dit type beschikbaar.');
define('_JNEWS__LIST_HTML_EDITOR', 'Lijst HTML editor is uitgeschakeld. <br /> Als u een beschrijving voor de lijst wilt toevoegen, zet dan de Lijstbeschrijving editor aan in de tab Configuratie>>Overige.');
define('_JNEWS_TAGMODULE_REPLACE_MESSAGE', 'Als uw moduletag niet is vervangen of vervangen door een lege string, controleer dan of allow_url_fopen is ingesteld in uw php.ini of controleer of of uw server cURL ondersteunt.<br />Het is vereist dat allow_url_fopen aanstaat of curl de moduletag kan vervangen in het voorbeeld en bij versturen via de backend. Als u geen van beide heeft wordt de moduletag alleen vervangen als het is verzonden via de cron');
define('_JNEWS_QUEUE_PROCESS_ERROR', 'Er is een fout opgetreden tijdens ophalen te verwerken wachtrijgegevens; er zijn teveel op te halen gegevens voor de wachtrij.<br /> Beperk het maximum aantal e-mails per taak in het tabblad Planning in de jNews configuratie.');
define('_JNEWS_TOO_MUCH_CRON_MAX_EMAILS', 'U heeft teveel max cron e-mails te verwerken per taak.<br /> Beperk het aantal te verwerken e-mails per taak om problemen bij het laden van te verwerken wachtrijgegevens te voorkomen. <br />Verlaag het maximum aantal e-mails per taak maar verhoog de max cron frequentie (frequentie toegestaan door uw provider) om toch snel nieuwsbrieven te verzenden.');
define('_JNEWS_VIEW_BROWSER', 'Bekijk via browser');
define('_JNEWS_THE_MAILING', 'De mailing ');
define('_JNEWS_SENT_ALL', ' is succesvol verzonden naar de abonnees.');
define('_JNEWS_NO_MAILINGS_YET', 'Er zijn op dit moment geen te versturen mailings.');
define('_JNEWS_CRON_TRIGGERRED', 'Laatste maal dat cron is gestart');
define('_JNEWS_CRON_TRIGGERRED_TIPS', 'Laatste maal dat cron is gestart');
define('_JNEWS_CRON_TRIGGERRED_ADD_INFO', 'NB: Zelfs als de cron is gestart kan het zijn dat de wachtrij en geplandde nieuwsbrieven niet worden verwerkt.');
define('_JNEWS_UNSUBSCRIBE_ALL', 'Uitschrijven voor alle lijsten');
define('_JNEWS_UNSUBSCRIBE_ALL_OR', 'of klik hier voor uitschrijven voor alle lijstinschrijvingen');
define('_JNEWS_UNSUBSCRIBE_ALL_MESS', 'U bent uitgeschreven voor alle lijsten');
define('_JNEWS_UNSUBSCRIBE_ALL_CAPTION', 'Toon Uitschrijven voor alle lijsten');
define('_JNEWS_UNSUBSCRIBE_ALL_CAPTION_TIPS', 'Selecteer Ja voor tonen van de knop Uitschrijven voor alle lijsten in de frontend.');
define('_JNEWS_ATTEMPTED', 'Poging te verzenden');
define('_JNEWS_RESCHEDULED', 'Deze nieuwsbrief is opnieuw ingepland voor opnieuw verzenden.');
define('_JNEWS_REACHED_MAX_ATTEMPT', 'NB: Als het aantal pogingen tot verzenden het maximum aantal pogingen heeft overschreden wordt de opdracht verwijderd uit de wachtrij.');
define('_JNEWS_REGWARN_COLUMN','A.u.b. invoeren');
define('_JNEWS_COLUMN_SHOW','Toon kolom ');
define('_JNEWS_SHOW_COLUMN_TIPS','Toon/verberg deze kolom in uw abonneelijst-BE');
define('_JNEWS_INPUT_COLUMN','Kolom ');
define('_JNEWS_INPUT_COLUMN_TIPS','Voer uw kolom in ');
define('_JNEWS_COLUMN_DESC', 'Dit wordt vervangen door de gebruiker-gedefinieerde kolom ');
define('_JNEWS_HELP', 'Help');
define('_JNEWS_SEND_LOG_TO_TIPS', 'Verzend mailingrapporten via e-mail. Als geen is aangegeven wordt het mailingrappport verzonden naar de eerste beheerder van de website');
define('_JNEWS_SEND_LOG_TO', 'Verzend mailingrapporten naar');
define('_JNEWS_ASSIGN_LIS_TEMPLATE', 'Lijsttemplate');
define('_JNEWS_ASSIGN_LIS_TEMPLATE_TIPS', 'Selecteer standaard te gebruiken template voor deze lijst');
define('_JNEWS_AUTO_OPTION_NO_SYNC', 'Gebruikers niet synchroniseren');
define('_JNEWS_QUEUE_BLOCK', 'Blokkeren');
define('_JNEWS_QUEUE_UNBLOCK', 'Deblokkeren');
define('_JNEWS_TAGMENU_MEDIA_SHARE', 'Social Share');
define('_JNEWS_JOOBI_CRON', 'Joobi cron-systeem');
define('_JNEWS_JOOBI_CRON_TIPS', 'Selecteer Ja om Joobi cron te publiceren en dit cronsysteem te kunnen gebruiken. Selecteer Nee als u deze cron niet wilt gebruiken. Deze cron wordt elke 15 minuten gestart.');
define('_JNEWS_JNEWS_CRON', 'jNews cron systeemplugin');
define('_JNEWS_JNEWS_CRON_TIPS', 'Selecteer Ja om de jNews cron systeemplugin te publiceren en dit cronsysteem te kunnen gebruiken. Selecteer Nee als u deze cron niet wilt gebruiken. Deze cron wordt elke 15 minuten gestart.');
define('_JNEWS_JOOBICRON_YES', 'Ja');
define('_JNEWS_JOOBICRON_NO', 'Nee');
define('_JNEWS_TITLE', 'Dit wordt vervangen door de titel van de nieuwsbrief.');

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


