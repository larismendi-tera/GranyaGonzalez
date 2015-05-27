<?php
defined('_JEXEC') or die('Restricted access');
### Copyright (c) 2006-2012 Joobi Limited. All rights reserved.
### license GNU GPLv3 , link http://www.joobi.co

/**
* <p>Danish language file.</p>
* @copyright (c) 2006-2012 Joobi Limited. All rights reserved.
* @author Joergen Floes<support@joobi.co>
* @version $Id: danish.php 491 2007-02-01 22:56:07Z chris $
* @link http://www.joobi.co
*/

### General ###
 //jnews Description
define('_JNEWS_DESC_CORE', 'jNews er forsendelseslister, nyhedsbreve, auto-svar funktion, og opfølgningsværktøj til effektiv kommunikation med dine brugere og kunder.  ' .
		'jNews, Din kommunikationspartner!');
define('_JNEWS_DESC_GPL', 'jNews er forsendelseslister, nyhedsbreve, auto-svar funktion, og opfølgningsværktøj til effektiv kommunikation med dine brugere og kunder.  ' .
		'jNews, Din kommunikationspartner!');
define('_JNEWS_FEATURES', 'jNews, din kommunikationspartner!');

// Type of lists
define('_JNEWS_NEWSLETTER', 'Nyhedsbrev');
define('_JNEWS_AUTORESP', 'Auto-svar');
define('_JNEWS_AUTORSS', 'Auto-RSS');
define('_JNEWS_ECARD', 'eKort');
define('_JNEWS_POSTCARD', 'Postkort');
define('_JNEWS_PERF', 'Performance');
define('_JNEWS_COUPON', 'Kupon');
define('_JNEWS_CRON', 'Cron opgave');
define('_JNEWS_MAILING', 'Forsendelse');
define('_JNEWS_LIST', 'Liste');

//jnews Menu
define('_JNEWS_MENU_LIST', 'Administration af lister');
define('_JNEWS_MENU_SUBSCRIBERS', 'Abonnenter');
define('_JNEWS_MENU_NEWSLETTERS', 'Nyhedsbreve');
define('_JNEWS_MENU_AUTOS', 'Auto-svar');
define('_JNEWS_MENU_COUPONS', 'Kuponer');
define('_JNEWS_MENU_CRONS', 'Cron opgaver');
define('_JNEWS_MENU_AUTORSS', 'Auto-RSS');
define('_JNEWS_MENU_ECARD', 'eKort');
define('_JNEWS_MENU_POSTCARDS', 'Postkort');
define('_JNEWS_MENU_PERFS', 'Performances');
define('_JNEWS_MENU_TAB_LIST', 'Lister');
define('_JNEWS_MENU_MAILING_TITLE', 'Forsendelser');
define('_JNEWS_MENU_MAILING', 'Forsendelse af ');
define('_JNEWS_MENU_STATS', 'Statistik');
define('_JNEWS_MENU_STATS_FOR', 'Statistik for ');
define('_JNEWS_MENU_CONF', 'Konfiguration');
define('_JNEWS_MENU_UPDATE', 'Import');
define('_JNEWS_MENU_ABOUT', 'Om');
define('_JNEWS_MENU_LEARN', 'Uddannelsescenter');
define('_JNEWS_MENU_MEDIA', 'Media administration');
define('_JNEWS_MENU_HELP', 'Hjælp');
define('_JNEWS_MENU_CPANEL', 'CPanel');
define('_JNEWS_MENU_IMPORT', 'Import');
define('_JNEWS_MENU_EXPORT', 'Export');
define('_JNEWS_MENU_SUB_ALL', 'Abonner på alle');
define('_JNEWS_MENU_UNSUB_ALL', 'Afmeld alle');
define('_JNEWS_MENU_VIEW_ARCHIVE', 'Arkiv');
define('_JNEWS_MENU_PREVIEW', 'Preview');
define('_JNEWS_MENU_SEND', 'Send');
define('_JNEWS_MENU_SEND_TEST', 'Send Test Email');
define('_JNEWS_MENU_SEND_QUEUE', 'Process kø');
define('_JNEWS_MENU_VIEW', 'Se');
define('_JNEWS_MENU_COPY', 'Kopier');
define('_JNEWS_MENU_VIEW_STATS', 'Se statistik');
define('_JNEWS_MENU_CRTL_PANEL', ' CPanel');
define('_JNEWS_MENU_LIST_NEW', ' Opret en liste');
define('_JNEWS_MENU_LIST_EDIT', ' Ret en liste');
define('_JNEWS_MENU_BACK', 'Tilbage');
define('_JNEWS_MENU_INSTALL', 'Installation');
define('_JNEWS_MENU_TAB_SUM', 'Opsummering');
define('_JNEWS_STATUS', 'Status');

// messages
define('_JNEWS_ERROR', ' Der opstod en fejl! ');
define('_JNEWS_SUB_ACCESS', 'Adgangsrettigheder');
define('_JNEWS_DESC_CREDITS', 'Credits');
define('_JNEWS_DESC_INFO', 'Information');
define('_JNEWS_DESC_HOME', 'Hjemmeside');
define('_JNEWS_DESC_MAILING', 'Forsendelsesliste');
define('_JNEWS_DESC_SUBSCRIBERS', 'Modtagere');
define('_JNEWS_PUBLISHED', 'Udgivet');
define('_JNEWS_UNPUBLISHED', 'U-udgivet');
define('_JNEWS_DELETE', 'Slet');
define('_JNEWS_FILTER', 'Filtrer');
define('_JNEWS_UPDATE', 'Opdater');
define('_JNEWS_SAVE', 'Gem');
define('_JNEWS_CANCEL', 'Slet');
define('_JNEWS_NAME', 'Navn');
define('_JNEWS_EMAIL', 'E-mail');
define('_JNEWS_SELECT', 'Vælg');
define('_JNEWS_ALL', 'alle');
define('_JNEWS_SEND_A', 'Send en ');
define('_JNEWS_SUCCESS_DELETED', ' succesfuldt slettet');
define('_JNEWS_LIST_ADDED', 'Liste succesfuldt oprettet');
define('_JNEWS_LIST_COPY', 'Liste succesfuldt kopieret');
define('_JNEWS_LIST_UPDATED', 'List succesfuldt opdateret');
define('_JNEWS_MAILING_SAVED', 'Forsendelse succesfuldt gemt.');
define('_JNEWS_UPDATED_SUCCESSFULLY', 'succesfuldt opdateret.');

### Subscribers information ###
//subscribe and unsubscribe info
define('_JNEWS_SUB_INFO', 'Abonnentens information');
define('_JNEWS_VERIFY_INFO', 'Verificer det link du angav, der mangler noget information.');
define('_JNEWS_INPUT_NAME', 'Navn');
define('_JNEWS_INPUT_EMAIL', 'Email');
define('_JNEWS_RECEIVE_HTML', 'Modtag HTML?');
define('_JNEWS_TIME_ZONE', 'Tidszone');
define('_JNEWS_BLACK_LIST', 'Spær bruger');
define('_JNEWS_REGISTRATION_DATE', 'Bruger registreringsdato');
define('_JNEWS_USER_ID', 'Bruger id');
define('_JNEWS_DESCRIPTION', 'Beskrivelse');
define('_JNEWS_ACCOUNT_CONFIRMED', 'Din konto er blevet aktiveret.');
define('_JNEWS_SUB_SUBSCRIBER', 'Abonnent');
define('_JNEWS_SUB_PUBLISHER', 'Udgiver');
define('_JNEWS_SUB_ADMIN', 'Administrator');
define('_JNEWS_REGISTERED', 'Registreret');
define('_JNEWS_SUBSCRIPTIONS', 'Dit abonnement');
define('_JNEWS_SEND_UNSUBCRIBE', 'Send afmeldingsmeddelelse');
define('_JNEWS_SEND_UNSUBCRIBE_TIPS', 'Klik Ja for at sende en afmeld email meddelelse.');
define('_JNEWS_SUBSCRIBE_SUBJECT_MESS', 'Venligst bekræft dit abonnement');
define('_JNEWS_UNSUBSCRIBE_SUBJECT_MESS', 'Afmeldingsbekræftelse');
define('_JNEWS_DEFAULT_SUBSCRIBE_MESS', 'Hej {tag:name},<br />' .
		'Bare et trin mere og du vil blive abonnent af listen.  Venligst klik på det følgende link for at bekræftige dine abonnementer.' .
		'<br /><br />{tag:confirm}<br /><br />Hvis der er spørgsmål så kontakt webmasteren.');
define('_JNEWS_DEFAULT_UNSUBSCRIBE_MESS', 'Denne email bekræftiger at du er blevet afmeldt fra vores liste.  Vi beklager at du besluttede at afmelde men skulle du beslutte at gentilmelde kan du altid gøre det på vore webside.  Skulle du have nogen spørgsmål da kontakt venligst vores webmaster.');

// jNews subscribers
define('_JNEWS_SIGNUP_DATE', 'Tilmeldingsdato');
define('_JNEWS_CONFIRMED', 'Bekræfted');
define('_JNEWS_SUBSCRIB', 'Abonner');
define('_JNEWS_HTML', 'HTML udsendelser');
define('_JNEWS_RESULTS', 'Resultater');
define('_JNEWS_SEL_LIST', 'Vælg en liste');
define('_JNEWS_SEL_LIST_TYPE', '- Vælg typen af listen -');
define('_JNEWS_SUSCRIB_LIST', 'Liste over alle abonnenter');
define('_JNEWS_SUSCRIB_LIST_UNIQUE', 'abonnenter af : ');
define('_JNEWS_NO_SUSCRIBERS', 'Ingen abonnenter fundet til denne liste.');
define('_JNEWS_COMFIRM_SUBSCRIPTION', 'En bekræftelses email er blevet sendt til dig.  Venligst check din email og klik på det angivne link.<br />' .
		'Du skal bekræfte din email for at dit abonnement træder i kraft.');
define('_JNEWS_SUCCESS_ADD_LIST', 'Du er succesfuldt blevet tilføjet til listen.');


 // Subcription info
define('_JNEWS_CONFIRM_LINK', 'Klik her for at bekræfte dit abonnement');
define('_JNEWS_UNSUBSCRIBE_LINK', 'Klik her for at afmelde dig selv fra listen');
define('_JNEWS_UNSUBSCRIBE_MESS', 'Din email adresse er blevet afmeldt fra listen');

define('_JNEWS_QUEUE_SENT_SUCCESS', 'Alle planlagte forsendelser er blevet succesfuldt udsendt.');
define('_JNEWS_MALING_VIEW', 'Se alle forsendelser');
define('_JNEWS_UNSUBSCRIBE_MESSAGE', 'Er du sikker på at du vil afmeldes fra denne liste?');
define('_JNEWS_MOD_SUBSCRIBE', 'Abonner');
define('_JNEWS_SUBSCRIBE', 'Abonner');
define('_JNEWS_UNSUBSCRIBE', 'Afmeld');
define('_JNEWS_VIEW_ARCHIVE', 'Se arkivet');
define('_JNEWS_SUBSCRIPTION_OR', ' eller klik her for at opdatere dine informationer');
define('_JNEWS_EMAIL_ALREADY_REGISTERED', 'Denne email adresse er allerede blevet registreret.');
define('_JNEWS_SUBSCRIBER_DELETED', 'Abonnent succesfuldt slettet.');


### UserPanel ###
 //User Menu
define('_JNEWS_UCP_USER_PANEL', 'Bruger kontrolpanel');
define('_JNEWS_UCP_USER_MENU', 'Bruger menu');
define('_JNEWS_UCP_USER_CONTACT', 'Mine abonnementer');
 //jNews Cron Menu
define('_JNEWS_UCP_CRON_MENU', 'Cron opgave administration');
define('_JNEWS_UCP_CRON_NEW_MENU', 'Ny Cron');
define('_JNEWS_UCP_CRON_LIST_MENU', 'List mine Cron');
 //jNews Coupon Menu
define('_JNEWS_UCP_COUPON_MENU', 'Kupon administration');
define('_JNEWS_UCP_COUPON_LIST_MENU', 'Liste over kuponner');
define('_JNEWS_UCP_COUPON_ADD_MENU', 'Tilføj en kupon');

### lists ###
// Tabs
define('_JNEWS_LIST_T_GENERAL', 'Beskrivelse');
define('_JNEWS_LIST_T_LAYOUT', 'Layout');
define('_JNEWS_LIST_T_SUBSCRIPTION', 'Abonnement');
define('_JNEWS_LIST_T_SENDER', 'Afsender information');

define('_JNEWS_LIST_TYPE', 'Liste type');
define('_JNEWS_LIST_NAME', 'Liste navn');
define('_JNEWS_LIST_ISSUE', 'Hændelse #');
define('_JNEWS_LIST_DATE', 'Sendt dato');
define('_JNEWS_LIST_SUB', 'Forsendelsens emne');
define('_JNEWS_ATTACHED_FILES', 'Vedhæftede filer');
define('_JNEWS_SELECT_LIST', 'Vælg en liste der skal rettes!');

// Auto Responder box
define('_JNEWS_AUTORESP_ON', 'Typen af listen');
define('_JNEWS_AUTO_RESP_OPTION', 'Auto-svar muligheder');
define('_JNEWS_AUTO_RESP_FREQ', 'Abonnenterne kan vælge frekvensen');
define('_JNEWS_AUTO_DELAY', 'Forsinkelse (i dage)');
define('_JNEWS_AUTO_DAY_MIN', 'Minimum frekvens');
define('_JNEWS_AUTO_DAY_MAX', 'Maximum frekvens');
define('_JNEWS_FOLLOW_UP', 'Angiv opfølgende auto-svar');
define('_JNEWS_AUTO_RESP_TIME', 'Abonnenter kan bestemme tidspunkt');
define('_JNEWS_LIST_SENDER', 'Liste afsendere');

define('_JNEWS_LIST_DESC', 'Liste beskrivelser');
define('_JNEWS_LAYOUT', 'Layout');
define('_JNEWS_SENDER_NAME', 'Afsender navn');
define('_JNEWS_SENDER_EMAIL', 'Afsender email');
define('_JNEWS_SENDER_BOUNCE', 'Afsenderens svar adresse');
define('_JNEWS_LIST_DELAY', 'Forsinkelse');
define('_JNEWS_HTML_MAILING', 'HTML forsendelse?');
define('_JNEWS_HTML_MAILING_DESC', '(hvis du ændrer dette, skal du gemme og komme tilbage til dette skærmbillede for at se ændringerne.)');
define('_JNEWS_HIDE_FROM_FRONTEND', 'Skjul fra front-end?');
define('_JNEWS_SELECT_IMPORT_FILE', 'Vælg en fil der skal importeres');;
define('_JNEWS_IMPORT_FINISHED', 'Import afsluttet');
define('_JNEWS_DELETION_OFFILE', 'Sletning af fil');
define('_JNEWS_MANUALLY_DELETE', 'fejlede, du skal slette filen manuelt');
define('_JNEWS_CANNOT_WRITE_DIR', 'Kan ikke skrive i biblioteket');
define('_JNEWS_NOT_PUBLISHED', 'Kunne ikke sende forsendelsen, listen er ikke udgivet.');

//  List info box
define('_JNEWS_INFO_LIST_PUB', 'Klik Ja for at udgive listen');
define('_JNEWS_INFO_LIST_NAME', 'Skriv navnet på din liste her. Du kan identificere listen med dette navn.');
define('_JNEWS_INFO_LIST_DESC', 'Indtast en kort beskrivelse af din liste her. Denne beskrivelse vil være synlig for gæster på din webside.');
define('_JNEWS_INFO_LIST_SENDER_NAME', 'Indtast navnet på afsenderen af brevet. Dette navn vil være synligt når abonnenterne modtager meddelelser fra denne liste.');
define('_JNEWS_INFO_LIST_SENDER_EMAIL', 'Skriv den email adresse som meddelelsen skal sendes fra.');
define('_JNEWS_INFO_LIST_SENDER_BOUNCED', 'Skriv den email adresse hvor bruger kan svare til. Det anbefales at det er den samme som afsenderen af emailen, da spam filtere vil give din meddelelse en højere spam ranking hvis de er forskellige.');
define('_JNEWS_INFO_LIST_AUTORESP', 'Vælg typen af forsendelser på denne liste. <br />' .
		'Nyhedsbrev: normalt nyhedsbrev<br />' .
		'Auto-svar: en auto-svar er en liste som sendes automatisk gennnem websiden på en fast interval.');
define('_JNEWS_INFO_LIST_FREQUENCY', 'Tillad brugerne at vælge hvor ofte de vil modtage fra listen.  Det giver mere fleksibilitet for brugeren.');
define('_JNEWS_INFO_LIST_TIME', 'Lad brugeren vælge deres foretrukne tid på dagen for at modtage denne liste.');
define('_JNEWS_INFO_LIST_MIN_DAY', 'Definer hvad der er den mindste frekvens en bruger kan vælge at modtage fra listen');
define('_JNEWS_INFO_LIST_DELAY', 'Angiv en forsinkelse mellem denne auto-svar og den forrige.');
define('_JNEWS_INFO_LIST_DATE', 'Angiv datoen hvor nyhedslisten skal udgives, hvis du vil forsinke udgivelsen. <br /> FORMAT : YYYY-MM-DD HH:MM:SS');
define('_JNEWS_INFO_LIST_MAX_DAY', 'Definer hvad der er den maksimale frekvens en bruger kan vælge at modtage fra listen');
define('_JNEWS_INFO_LIST_LAYOUT', 'Angiv layout for din forsendelseliste her. Du kan angive et hvilket som helst layout for din forsendelse her.');
define('_JNEWS_INFO_LIST_SUB_MESS', 'Denne meddelelse vil blive sendt til abonnenten når han eller hun registreres første gang. Du kan skrive lige den tekst du vil have her.');
define('_JNEWS_INFO_LIST_UNSUB_MESS', 'Denne meddelelse vil blive sendt til abonnenten når han eller hun afmelder. En hvilken som helst tekst kan indtastes her.');
define('_JNEWS_INFO_LIST_HTML', 'Vælg afkrydsningsboxen hvis du ønsker at sende en HTML udsendelse. Abonnenter vil have mulighed for at angive hvis de ønsker at modtage HTML meddelelsen HTML, eller kun tekst meddelelsen når de abonnerer på en HTML liste.');
define('_JNEWS_INFO_LIST_HIDDEN', 'Klik Ja for at skjule listen fra front-end, brugerne vil ikke have mulighed for at abonnere men du vil stadig have mulighed for at sende udsendelsen.');
define('_JNEWS_INFO_LIST_JNEWS_AUTO_SUB', 'Vil du have at brugerne automatisk tilmeldes til denne liste?<br /><B>Nye brugere:</B> vil registrere alle nye brugere der registrer sig på websiden.<br /><B>Alle brugere:</B> vil registre alle brugere der er registreret i databasen.<br />(alle disse funktioner understøtter Community Builder)');
define('_JNEWS_INFO_LIST_ACC_LEVEL', 'Vælg front-end adgangsniveauet. Dette vil vise elle skjule udsendelsen for brugergrupper der ikke har adgang til den, så de ikke har mulighed for at abonnere på den.');
define('_JNEWS_INFO_LIST_ACC_USER_ID', 'Vælg adgangsniveauet for den brugergruppe du ønsker skal kunne rette. Denne brugegruppe og overliggende vil kunne rette forsendelserne og sende dem ud, enten fra front-end eller back-end.');
define('_JNEWS_INFO_LIST_FOLLOW_UP', 'Hvis du ønsker at auto-svaret skal flytte til en anden når den når til den sidste meddelelse kan du angive den efterfølgnede auto-svar her.');
define('_JNEWS_INFO_LIST_JNEWS_OWNER', 'Dette er ID\'et for den person som oprettede listen.');
define('_JNEWS_INFO_LIST_WARNING', '   Denne sidste mulighed er kun tilgængelig en gang når listen oprettes.');
define('_JNEWS_INFO_LIST_SUBJET', ' Emnet for brevet.  Dette er emnet på den email som abonnenten vil modtage.');
define('_JNEWS_INFO_MAILING_CONTENT', 'Det er hoveddelen af den email du ønsker at sende.');
define('_JNEWS_INFO_MAILING_NOHTML', 'Indtast hoveddelen af den email du ønsker at sende til abonnenter der vælger kun at modtage ikke-HTML forsendelser. <BR/> NOTE: hvis du lader den være blank vil jNews automatisk konvertere HTML teksten til ren tekst.');
define('_JNEWS_INFO_MAILING_VISIBLE', 'Klik Ja for at vise forsendelsen i front-end.');
define('_JNEWS_INSERT_CONTENT', 'Indsæt eksisterende indhold');

// Coupons
define('_JNEWS_SEND_COUPON_SUCCESS', 'Kupon sendt succesfuldt!');
define('_JNEWS_CHOOSE_COUPON', 'Vælg en kupon');
define('_JNEWS_TO_USER', ' til denne bruger');

### Cron options
//drop down frequency(CRON)
define('_JNEWS_FREQ_CH1', 'Hver time');
define('_JNEWS_FREQ_CH2', 'Hver 6 time');
define('_JNEWS_FREQ_CH3', 'Hver 12 time');
define('_JNEWS_FREQ_CH4', 'Dagligt');
define('_JNEWS_FREQ_CH5', 'Ugentligt');
define('_JNEWS_FREQ_CH6', 'Månedslig');
define('_JNEWS_FREQ_NONE', 'Ingen');
define('_JNEWS_FREQ_NEW', 'Nye brugere');
define('_JNEWS_FREQ_ALL', 'Alle brugere');

//Label CRON form
define('_JNEWS_LABEL_FREQ', 'jNews Cron?');
define('_JNEWS_LABEL_FREQ_TIPS', 'Klik Ja hvis du ønsker at bruge denne til en Acajomm Cron, Nej for en anden cron opgave.<br />' .
		'Hvis du klikker Ja behøver du ikke angive Cron adressen, den vil automatisk blive tilføjet.');
define('_JNEWS_SITE_URL', 'Din websides URL');
define('_JNEWS_CRON_FREQUENCY', 'Cron Frekvens');
define('_JNEWS_STARTDATE_FREQ', 'Start dato');
define('_JNEWS_LABELDATE_FREQ', 'Angiv dato');
define('_JNEWS_LABELTIME_FREQ', 'Angiv tid');
define('_JNEWS_CRON_URL', 'Cron URL');
define('_JNEWS_CRON_FREQ', 'Frekvens');
define('_JNEWS_TITLE_CRONLIST', 'Cron List');
define('_JNEWS_NEW_LIST', 'Opret en ny liste');

//title CRON form
define('_JNEWS_TITLE_FREQ', 'Ret Cron');
define('_JNEWS_CRON_SITE_URL', 'Indtast en gyldig webside URL, startende med http://');

### Mailings ###
define('_JNEWS_MAILING_ALL', 'Alle forsendelser');
define('_JNEWS_EDIT_A', 'Ret en ');
define('_JNEWS_SELCT_MAILING', 'Vælg en liste i rullemenuen for at kunne tilføje en ny forsendelse.');
define('_JNEWS_VISIBLE_FRONT', 'Synlig i front-end');

// mailer
define('_JNEWS_SUBJECT', 'Emne');
define('_JNEWS_CONTENT', 'Indhold');
define('_JNEWS_NAMEREP', '{tag:name} = Dette vil blive erstattet med det navn abonnenten har indtastet, du vil sende personaliserede email når du bruger denne.<br />');
define('_JNEWS_FIRST_NAME_REP', '{tag:firstname} = Dette vil blive erstattet med det FØRSTE navn som abonnenten har indtastet.<br />');
define('_JNEWS_NONHTML', 'Ikke-HTML version');
define('_JNEWS_ATTACHMENTS', 'Vedhæftninger');
define('_JNEWS_SELECT_MULTIPLE', 'Hold control (eller ctrl) for at vælge flere vedhæftninger.<br />' .
		'De viste filer i denne vedhæftningsliste er placeret i vedhæftningsfolderen, du kan ændre denne placering i kofigurationspanelet.');
define('_JNEWS_CONTENT_ITEM', 'Indholdsdokument');
define('_JNEWS_SENDING_EMAIL', 'Afsender email');
define('_JNEWS_MESSAGE_NOT', 'Meddelelsen kunne ikke sendes');
define('_JNEWS_MAILER_ERROR', 'Udsendelses fejl');
define('_JNEWS_MESSAGE_SENT_SUCCESSFULLY', 'Meddelelse sendt succesfuldt');
define('_JNEWS_SENDING_TOOK', 'Afsendelsen af denne forsendelse tog');
define('_JNEWS_SECONDS', 'sekunder');
define('_JNEWS_NO_ADDRESS_ENTERED', 'Ingen email adressse eller modtager angivet');
define('_JNEWS_CHANGE_SUBSCRIPTIONS', 'Ændre');
define('_JNEWS_CHANGE_EMAIL_SUBSCRIPTION', 'Ændre dit abonnement');
define('_JNEWS_WHICH_EMAIL_TEST', 'Angiv den email adresse der sendes en test til eller vælg forevisning');
define('_JNEWS_SEND_IN_HTML', 'Send i HTML (for HTML udsendelser)?');
define('_JNEWS_VISIBLE', 'Synlig');
define('_JNEWS_INTRO_ONLY', 'Kun introduktionen');

// stats
define('_JNEWS_GLOBALSTATS', 'Global statistik');
define('_JNEWS_DETAILED_STATS', 'Detaljeret statistik');
define('_JNEWS_MAILING_LIST_DETAILS', 'Liste detaljer');
define('_JNEWS_SEND_IN_HTML_FORMAT', 'Sendt i HTML format');
define('_JNEWS_VIEWS_FROM_HTML', 'Visninger (fra HTML forsendelse)');
define('_JNEWS_SEND_IN_TEXT_FORMAT', 'Send i tekstformat');
define('_JNEWS_HTML_READ', 'HTML læst');
define('_JNEWS_HTML_UNREAD', 'HTML ulæst');
define('_JNEWS_TEXT_ONLY_SENT', 'Kun tekst');

// Configuration panel
// main tabs
define('_JNEWS_MAIL_CONFIG', 'Mail');
define('_JNEWS_LOGGING_CONFIG', 'Logs & Statistikker');
define('_JNEWS_SUBSCRIBER_CONFIG', 'Abonnenter');
define('_JNEWS_AUTO_CONFIG', 'Cron');
define('_JNEWS_MISC_CONFIG', 'Diverse');
define('_JNEWS_MAIL_SETTINGS', 'Brev opsætning');
define('_JNEWS_MAILINGS_SETTINGS', 'Forsendelses opsætning');
define('_JNEWS_SUBCRIBERS_SETTINGS', 'Abonnements opsætning');
define('_JNEWS_CRON_SETTINGS', 'Cron Settings');
define('_JNEWS_SENDING_SETTINGS', 'Afsendelses opsætning');
define('_JNEWS_STATS_SETTINGS', 'Statistik opsætning');
define('_JNEWS_LOGS_SETTINGS', 'Logs Settings');
define('_JNEWS_MISC_SETTINGS', 'Diverse opsætninger');
// mail settings
define('_JNEWS_SEND_MAIL_FROM', 'Afsender Email');
define('_JNEWS_SEND_MAIL_NAME', 'Afsender navn');
define('_JNEWS_MAILSENDMETHOD', 'Afsendelses metode');
define('_JNEWS_SENDMAILPATH', 'Sendmail sti');
define('_JNEWS_SMTPHOST', 'SMTP host');
define('_JNEWS_SMTPAUTHREQUIRED', 'SMTP identifikation kræves');
define('_JNEWS_SMTPAUTHREQUIRED_TIPS', 'Vælg Ja hvis din SMTP server kræver identifikation');
define('_JNEWS_SMTPUSERNAME', 'SMTP brugernavn');
define('_JNEWS_SMTPUSERNAME_TIPS', 'Indtast SMTP brugernavnet når din SMTP server kræver identifikation');
define('_JNEWS_SMTPPASSWORD', 'SMTP kodeord');
define('_JNEWS_SMTPPASSWORD_TIPS', 'Indtast SMTP kodeordet når din SMTP server kræver identifikation');
define('_JNEWS_USE_EMBEDDED', 'Brug indlejrede billeder');
define('_JNEWS_USE_EMBEDDED_TIPS', 'Vælg Ja hvis billederne i det vedhæftede indholdsdokument skal være indlejret i emailen ved HTML meddelelser, eller Nej for at bruge standard billed afmærkninger som linker til billederne på websiden.');
define('_JNEWS_UPLOAD_PATH', 'Upload/vedhæftnings sti');
define('_JNEWS_UPLOAD_PATH_TIPS', 'Du kan angive et upload bibliotek.<br />' .
		'Kontroller at biblioteket du angiver eksisterer, ellers opret det.');

// subscribers settings
define('_JNEWS_ALLOW_UNREG', 'Tillad uregistrerede');
define('_JNEWS_ALLOW_UNREG_TIPS', 'Vælg Ja hvis du vil tillade brugere at abonnere på lister uden at være registrerede brugere på websiden.');
define('_JNEWS_REQ_CONFIRM', 'Kræv bekræftelse');
define('_JNEWS_REQ_CONFIRM_TIPS', 'Vælg Ja hvis du kræver at uregistrerede abonnenter bekræfter deres email adresse.');
define('_JNEWS_SUB_SETTINGS', 'Abonnerings opsætning');
define('_JNEWS_SUBMESSAGE', 'Abonnerings email');
define('_JNEWS_SUBSCRIBE_LIST', 'Abonner på en liste');

define('_JNEWS_USABLE_TAGS', 'Brugbare markeringer');
define('_JNEWS_NAME_AND_CONFIRM', '<b>{tag:confirm}</b> = Denne opretter et link hvor abonnenten kan bekræfte sine abonnementer. Denne er <strong>krævet</strong> for at få jNews til at fungere korrekt.<br />'
.'<br />{tag:name} = Denne vil blive erstattet med navnet på abonnenten, du vil derved sende personaliserede emails ved brug af denne.<br />'
.'<br />{tag:firstname} = Dette vil blive erstattet af FORNAVNET på abonnenten, fornavnet er defineret som det første navn indtastet af abonnenten.<br />');
define('_JNEWS_CONFIRMFROMNAME', 'Bekræft AFSENDER navnet');
define('_JNEWS_CONFIRMFROMNAME_TIPS', 'Indtast det afsender navn der vises på bekræftelses listen.');
define('_JNEWS_CONFIRMFROMEMAIL', 'Bekræft AFSENDER email');
define('_JNEWS_CONFIRMFROMEMAIL_TIPS', 'Indtast den afsender email adresse der vises på bekræftelses listen.');
//define('_JNEWS_CONFIRMBOUNCE', 'Retur adressen');
//define('_JNEWS_CONFIRMBOUNCE_TIPS', 'Indtast retur adressen som vises på bekræftelseslisten.');
define('_JNEWS_HTML_CONFIRM', 'HTML bekræftelse');
define('_JNEWS_HTML_CONFIRM_TIPS', 'Vælg Ja hvis bekræftelses listen skal være HTML hvis brugeren tillader HTML.');
define('_JNEWS_TIME_ZONE_ASK', 'Spørg om tidszone');
define('_JNEWS_TIME_ZONE_TIPS', 'Vælg Ja hvis du ønsker at spørge om brugerens tidzone. De ventende forsendelser vil blive sendt på baggrund af tidszone hvis muligt');

 // Cron Set up
define('_JNEWS_TIME_OFFSET_URL', 'klik her for at sætte offset i det globale konfigurations panel -> Lokal tab');
define('_JNEWS_TIME_OFFSET_TIPS', 'Sæt din servers tids offset så de registrede datoer og tider er eksakte');
define('_JNEWS_TIME_OFFSET', 'Tids offset');
define('_JNEWS_CRON_TITLE', 'Opsætning af cron funktion');
define('_JNEWS_CRON_DESC', '<br />Ved brug af cron funktionen kan du oprette en automatisk opgave på din Joomla webside!<br />' .
		'For at oprette den skal du tilføje følgende kommando i dit crontab kontrolpanel:<br />' .
		'<b>' . JNEWS_JPATH_LIVE . '/index.php?option=com_jnews&act=cron</b> ' .
		'<br /><br />Hvis du har brug for hjælp til at sætte op eller har problemer så konsulter vores forum <a href="http://www.joobi.co" target="_blank">http://www.joobi.co</a>');
// sending settings
define('_JNEWS_PAUSEX', 'Pause x sekunder for hvert konfigureret antal emails');
define('_JNEWS_PAUSEX_TIPS', 'Indtast antallet af sekunder som jNews vil give SMTP serveren til at sende meddelelserne før der fortsættes med det næste konfigurered antal meddelelser.');
define('_JNEWS_EMAIL_BET_PAUSE', 'Emails mellem pauser');
define('_JNEWS_EMAIL_BET_PAUSE_TIPS', 'Antallet af emails der sendes før der holdes pause.');
define('_JNEWS_WAIT_USER_PAUSE', 'Vent for bruger input under pausen');
define('_JNEWS_WAIT_USER_PAUSE_TIPS', 'Hvad enten scriptet skal vente på bruger input når der er pause mellem et sæt forsendelser.');
define('_JNEWS_SCRIPT_TIMEOUT', 'Script timeout');
define('_JNEWS_SCRIPT_TIMEOUT_TIPS', 'Antallet af minutter scriptet skal kunne køre (0 for uendeligt).');
// Stats settings
define('_JNEWS_ENABLE_READ_STATS', 'Aktiver læse statistik');
define('_JNEWS_ENABLE_READ_STATS_TIPS', 'Vælg Ja hvis du ønsker at logge antallet af visninger. Denne teknik kan kun bruges ved HTML forsendelser');
define('_JNEWS_LOG_VIEWSPERSUB', 'Log visninger per abonnent');
define('_JNEWS_LOG_VIEWSPERSUB_TIPS', 'Vælg Ja hvis du vil logge antallet af visninger per abonnent. Denne teknik kan kun bruges ved HTML forsendelser');
// Logs settings
define('_JNEWS_DETAILED', 'Detaljerede logs');
define('_JNEWS_SIMPLE', 'Simple logs');
define('_JNEWS_DIAPLAY_LOG', 'Vis logs');
define('_JNEWS_DISPLAY_LOG_TIPS', 'Vælg Ja hvis du vil vise logs mens forsendelser sendes.');
define('_JNEWS_SEND_PERF_DATA', 'Afsendelses ydelsen');
define('_JNEWS_SEND_PERF_DATA_TIPS', 'Vælg Ja hvis du ønsker at tillade jNews at sende ANONYME rapporter om din konfiguration, antallet af abonnementer på en liste og tiden det tog at sende forsendelsen. Dette vil give os en ide om jNews ydelsen og vil HJÆLPE OS	med at forbedre jNews i den fremtidige udvikling.');
define('_JNEWS_SEND_AUTO_LOG', 'Send log over auto-svar');
define('_JNEWS_SEND_AUTO_LOG_TIPS', 'Vælg Ja hvis du ønsker at sende en email log hvoer gang en kø er behandlet.  ADVARSEL: dette kan resultere i en stor mængde emails.');
define('_JNEWS_SEND_LOG', 'Send loggen');
define('_JNEWS_SEND_LOG_TIPS', 'Hvad enten en log over forsendelsen skal blive sendt til email adressen på brugeren der sendte forsendelsen.');
define('_JNEWS_SEND_LOGDETAIL', 'Send log detailer');
define('_JNEWS_SEND_LOGDETAIL_TIPS', 'Detailjeret indeholder succes eller fejl information for hver enkelt abonnent og et overblik over informationen. Simpel sender kun overblikket.');
define('_JNEWS_SEND_LOGCLOSED', 'Send log hvis forbindelsen er lukket');
define('_JNEWS_SEND_LOGCLOSED_TIPS', ' Med dette valg hos brugeren, der sender forsendelsen, vil der stadig blive modtaget en rapport via email.');
define('_JNEWS_SAVE_LOG', 'Gem loggen');
define('_JNEWS_SAVE_LOG_TIPS', 'Om en log over en forsendels bliver tilføjet til logfilen eller ej.');
define('_JNEWS_SAVE_LOGDETAIL', 'Gem detaljeret log');
define('_JNEWS_SAVE_LOGDETAIL_TIPS', 'Detailjeret indeholder succes eller fejl information for hver enkelt abonnent og et overblik over informationen. Simpel gemmer kun overblikket.');
define('_JNEWS_SAVE_LOGFILE', 'Gem logfilen');
define('_JNEWS_SAVE_LOGFILE_TIPS', 'Filen til hvilken log informationen tilføjes. Denne fil kan blive ganske stor.');
define('_JNEWS_CLEAR_LOG', 'Slet loggen');
define('_JNEWS_CLEAR_LOG_TIPS', 'Sletter logfilen.');

### control panel
define('_JNEWS_CP_LAST_QUEUE', 'Sidst udførte kø');
define('_JNEWS_CP_TOTAL', 'Totalt');
define('_JNEWS_MAILING_COPY', 'Forsendelsen kopieret succesfuldt!');

// Miscellaneous settings
define('_JNEWS_SHOW_GUIDE', 'Vis guide');
define('_JNEWS_SHOW_GUIDE_TIPS', 'Viser guidelines i begyndelsen til at hjælpe nye brugere med at oprette et nyhedsbrev, en auto-responder og sætte jNews korrekt op.');
define('_JNEWS_AUTOS_ON', 'Brug Auto-svar');
define('_JNEWS_AUTOS_ON_TIPS', 'Vælg Nej hvis du ikke vil bruge Auto-svar, så vil alle auto-svar valgmulighederne blive deaktiveret.');
define('_JNEWS_NEWS_ON', 'Brug nyhedsbreve');
define('_JNEWS_NEWS_ON_TIPS', 'Vælg Nej hvis du ikke ønsker at bruge nyhedsbreve, så vil alle valgmulighederne for nyhedsbreve blive deaktiveret.');
define('_JNEWS_SHOW_TIPS', 'Vis tips');
define('_JNEWS_SHOW_TIPS_TIPS', 'Vis tips for at hjælpe brugerene til at bruge jNews mere effektivt.');
define('_JNEWS_SHOW_FOOTER', 'Vis sidebunden');
define('_JNEWS_SHOW_FOOTER_TIPS', 'Om sidebunden med copyright beskeden vil blive vist eller ej.');
define('_JNEWS_SHOW_LISTS', 'Vis lister i front-end');
define('_JNEWS_SHOW_LISTS_TIPS', 'Når en bruger ikke er registreret vises en liste over lister som de kan abonnere på med arkiv knap for nyhedsbreve eller en login formular så de kan registrere sig.');
define('_JNEWS_CONFIG_UPDATED', 'Konfigurationsdetaljerne er blevet opdateret!');
define('_JNEWS_UPDATE_URL', 'Opdater URL');
define('_JNEWS_UPDATE_URL_WARNING', 'ADVARSEL! Ændrer ikke denne URL medmindre du er blevet bedt om at gøre det af det tekniske team fra jNews.<br />');
define('_JNEWS_UPDATE_URL_TIPS', 'For eksempel: http://www.joobi.co/update/ (inkluder den afsluttende skråstreg)');

// module
define('_JNEWS_EMAIL_INVALID', 'Den indtastede email er ukorrekt.');
define('_JNEWS_REGISTER_REQUIRED', 'Venligst registrer til websiden før du kan vælge en liste.');

// Access level box
define('_JNEWS_OWNER', 'Ejeren af listen:');
define('_JNEWS_ACCESS_LEVEL', 'Sæt adgangsniveau for listen');
define('_JNEWS_ACCESS_LEVEL_OPTION', 'Adgangsniveau mulighederne');
define('_JNEWS_USER_LEVEL_EDIT', 'Vælg hvilket brugerniveau der kræves for at rette en forsendelse (enten fra front-end eller back-end) ');

//  drop down options
define('_JNEWS_AUTO_DAY_CH1', 'Dagligt');
define('_JNEWS_AUTO_DAY_CH2', 'Dagligt  ikke weekend');
define('_JNEWS_AUTO_DAY_CH3', 'Hver anden dag');
define('_JNEWS_AUTO_DAY_CH4', 'Hver anden dag ikke weekend');
define('_JNEWS_AUTO_DAY_CH5', 'Ugentligt');
define('_JNEWS_AUTO_DAY_CH6', 'Hver anden uge');
define('_JNEWS_AUTO_DAY_CH7', 'Månedslig');
define('_JNEWS_AUTO_DAY_CH9', 'Årligt');
define('_JNEWS_AUTO_OPTION_NONE', 'Ingen');
define('_JNEWS_AUTO_OPTION_NEW', 'Nye brugere');
define('_JNEWS_AUTO_OPTION_ALL', 'Alle brugere');

//
define('_JNEWS_UNSUB_MESSAGE', 'Afmeld email');
define('_JNEWS_UNSUB_SETTINGS', 'Afmeldings opsætning');
define('_JNEWS_AUTO_ADD_NEW_USERS', 'Automatisk abonner brugere?');

// Update and upgrade messages
define('_JNEWS_NO_UPDATES', 'Der er iøjeblikket ikke nogen opdatering tilgængelig.');
define('_JNEWS_VERSION', 'jNews Version');
define('_JNEWS_NEED_UPDATED', 'Filer der skal opdateres:');
define('_JNEWS_NEED_ADDED', 'Filer der skal tilføjes:');
define('_JNEWS_NEED_REMOVED', 'Filer der skal slettes:');
define('_JNEWS_FILENAME', 'Filenavn:');
define('_JNEWS_CURRENT_VERSION', 'Nuværende version:');
define('_JNEWS_NEWEST_VERSION', 'Nyeste version:');
define('_JNEWS_UPDATING', 'Opdaterer');
define('_JNEWS_UPDATE_UPDATED_SUCCESSFULLY', 'Filerne er blevet succesfuldt opdateret.');
define('_JNEWS_UPDATE_FAILED', 'Opdatering fejlede!');
define('_JNEWS_ADDING', 'Tilføjer');
define('_JNEWS_ADDED_SUCCESSFULLY', 'Tilføjet succesfuldt.');
define('_JNEWS_ADDING_FAILED', 'Tilføjelse fejlede!');
define('_JNEWS_REMOVING', 'Fjerner');
define('_JNEWS_REMOVED_SUCCESSFULLY', 'Fjernet succesfuldt.');
define('_JNEWS_REMOVING_FAILED', 'Sletning fejlet!');
define('_JNEWS_INSTALL_DIFFERENT_VERSION', 'Installer en anden version');
define('_JNEWS_CONTENT_ADD', 'Tilføj sideindhold');
define('_JNEWS_UPGRADE_FROM', 'Importer data (nyhedsbreve og abonnenters information) fra ');
define('_JNEWS_UPGRADE_MESS', 'Der er ingen risiko for dine eksisterende data. <br /> Denne process vil simpelthen importere dataene i jNews databasen.');
define('_JNEWS_CONTINUE_SENDING', 'Fortsæt afsendelse');

// jNews message
define('_JNEWS_UPGRADE1', 'Du kan let importere dine brugere og nyhedsbreve fra ');
define('_JNEWS_UPGRADE2', ' til jNews i opdaterings panelet.');
define('_JNEWS_UPDATE_MESSAGE', 'En ny version af jNews er tilgængelig! ');
define('_JNEWS_UPDATE_MESSAGE_LINK', 'Klik her for at opdatere!');
define('_JNEWS_CRON_SETUP', 'For at auto-svarene kan sendes skal du oprette en cron opgave.');
define('_JNEWS_THANKYOU', 'Tak fordi du valgte jNews, Din kommunikations partner!');
define('_JNEWS_NO_SERVER', 'Opdaterings server er ikke tilgængelig, venligst check igen senere.');
define('_JNEWS_MOD_PUB', 'jNews module er ikke udgivet.');
define('_JNEWS_MOD_PUB_LINK', 'Klik her for at udgive det!');
define('_JNEWS_IMPORT_SUCCESS', 'succesfuldt importeret');
define('_JNEWS_IMPORT_EXIST', 'abonnent allerede i database');


// jNews Install
define('_JNEWS_INSTALL_CONFIG', 'jNews konfiguration');
define('_JNEWS_INSTALL_SUCCESS', 'Succesfuldt Installeret');
define('_JNEWS_INSTALL_ERROR', 'Installations fejl');
define('_JNEWS_INSTALL_BOT', 'jNews Plugin (Bot)');
define('_JNEWS_INSTALL_MODULE', 'jNews modul');
//Others
define('_JNEWS_JAVASCRIPT', '!Advarsel! Javascript skal være aktiveret for korrekt funktion.');
define('_JNEWS_EXPORT_TEXT', 'De abonnenter der er eksporteret er baseret på den liste du valgte. <br />Export abonnenter for liste');
define('_JNEWS_IMPORT_TIPS', 'Import subscribers. The information in the file need to be to the following format: <br />' .
		'Name,email,receiveHTML(0/1),<span style="color: rgb(255, 0, 0);">confirmed(0/1)</span>');
define('_JNEWS_SUBCRIBER_EXIT', 'er allerede en abonnent');
define('_JNEWS_GET_STARTED', 'Klik her for at komme igang!');

//News since 1.0.1
define('_JNEWS_WARNING_1011', 'Advarsel: 1011: Opdatering vil ikke fungere på grund af din servers begrænsninger.');
define('_JNEWS_SEND_MAIL_FROM_TIPS', 'Vælg den email adresse der vil blive vist som afsender.');
define('_JNEWS_SEND_MAIL_NAME_TIPS', 'Vælg det navn der vil blive vist som afsender.');
define('_JNEWS_MAILSENDMETHOD_TIPS', 'Vælg den afsendelsesfunktion du ønsker at bruge: PHP mail, <span>Sendmail</span> eller SMTP server.');
define('_JNEWS_SENDMAILPATH_TIPS', 'Dette er biblioteket på mail serveren');
define('_JNEWS_LIST_T_TEMPLATE', 'Skabelon');
define('_JNEWS_NO_MAILING_ENTERED', 'Ingen forsendelser udvalgt');
define('_JNEWS_NO_LIST_ENTERED', 'Ingen liste udvalgt');
define('_JNEWS_SENT_MAILING', 'Afsendte forsendelser');
define('_JNEWS_SELECT_FILE', 'Vælg venligst en fil til ');
define('_JNEWS_LIST_IMPORT', 'Marker de lister du ønsker abonnenterne tilknyttet til.');
define('_JNEWS_PB_QUEUE', 'Abonnent oprettet men problem med at forbinde ham/hende med listerne. Vælg dem venligst manuelt.');
define('_JNEWS_UPDATE_MESS', '');
define('_JNEWS_UPDATE_MESS1', 'Opdatering kraftigt anbefalet!');
define('_JNEWS_UPDATE_MESS2', 'Rettelse og små fixes.');
define('_JNEWS_UPDATE_MESS3', 'Ny udgave.');
define('_JNEWS_UPDATE_MESS5', 'Joomla 1.5 er krævet for at opdatere.');
define('_JNEWS_UPDATE_IS_AVAIL', ' er tilgængelig!');
define('_JNEWS_NO_MAILING_SENT', 'Ingen forsendelser afsendt!');
define('_JNEWS_SHOW_LOGIN', 'Vis login formular');
define('_JNEWS_SHOW_LOGIN_TIPS', 'Vælg Ja for at vise en login formular i jNews front-end kontrolpanelet så brugeren kan registrere sig til websiden.');
define('_JNEWS_LISTS_EDITOR', 'List Description Editor');
define('_JNEWS_LISTS_EDITOR_TIPS', 'Vælg Ja for at bruge en HTML editor til at rette i listens beskrivelses felt.');
define('_JNEWS_SUBCRIBERS_VIEW', 'Vis abonnenter');

//News since 1.0.2
define('_JNEWS_FRONTEND_SETTINGS', 'Front-end opsætning');
define('_JNEWS_SHOW_LOGOUT', 'Vis logout knap');
define('_JNEWS_SHOW_LOGOUT_TIPS', 'Vælg Ja for at vise logout knappen i jNews front-end kontrolpanelet.');

//News since 1.0.3 CB integration
define('_JNEWS_CONFIG_INTEGRATION', 'Integration');
define('_JNEWS_CB_INTEGRATION', 'Community Builder Integration');
define('_JNEWS_INSTALL_PLUGIN', 'Community Builder Plugin (jNews Integration) ');
define('_JNEWS_CB_PLUGIN_NOT_INSTALLED', 'jNews Plugin for Community Builder er ikke installeret endnu!');
define('_JNEWS_CB_PLUGIN', 'Lister ved registringen');
define('_JNEWS_CB_PLUGIN_TIPS', 'Vælg Ja for at vise forsendelseslisten i Community Builder registreringsformularen');
define('_JNEWS_CB_LISTS', 'List ID');
define('_JNEWS_CB_LISTS_TIPS', 'DETTE ER ET PÅKRÆVET FELT. Indtast ID nummeret på den liste du ønsker at tillade brugerne at abonnere på adskildt med komma ,  (0 = vis alle listerne)');
define('_JNEWS_CB_INTRO', 'Introduktions tekst');
define('_JNEWS_CB_INTRO_TIPS', 'En tekst der vil fremkomme før oversikten. LAD DEN VÆRE BLANK FOR IKKE AT VISE NOGET.  Du kan bruge HTML tags til at tilrette udseendet.');
define('_JNEWS_CB_SHOW_NAME', 'Vis liste navn');
define('_JNEWS_CB_SHOW_NAME_TIPS', 'Vælg om navnet på listen vises eller ej efter introduktionen.');
define('_JNEWS_CB_LIST_DEFAULT', 'Marker listen som standard');
define('_JNEWS_CB_LIST_DEFAULT_TIPS', 'Vælg om afkrydsningsboxen for hver enkelt liste er markeret som standard eller ej.');
define('_JNEWS_CB_HTML_SHOW', 'Vis modtag HTML');
define('_JNEWS_CB_HTML_SHOW_TIPS', 'Sæt til Ja for at tillade brugere at vælge om de vil have HTML emails eller ej. Sæt til Nej for at bruge standard Modtag HTML.');
define('_JNEWS_CB_HTML_DEFAULT', 'Standard Modtag HTML');
define('_JNEWS_CB_HTML_DEFAULT_TIPS', 'Sæt denne valgmulighed for vise standard HTML forsendelses konfigurationen. Hvis Vis modtag HTML er sat til Nej så vil denne valgmulighed være standard.');

// Since 1.0.4
define('_JNEWS_BACKUP_FAILED', 'Kunne ikke sikkerhedskopiere filen! Filen blev ikke erstattet.');
define('_JNEWS_BACKUP_YOUR_FILES', 'Den gamle versio af filerne er blevet sikkerhedskopiere ind i følgende bibliotek:');
define('_JNEWS_SERVER_LOCAL_TIME', 'Server lokal tid');
define('_JNEWS_SHOW_ARCHIVE', 'Vis arkiv knap');
define('_JNEWS_SHOW_ARCHIVE_TIPS', 'Vælg Ja for at vise en arkiv knap i front-end på Nyhedsbrev listen');
define('_JNEWS_LIST_OPT_TAG', 'Tags');
define('_JNEWS_LIST_OPT_IMG', 'Billeder');
define('_JNEWS_LIST_OPT_CTT', 'Indhold');
define('_JNEWS_INPUT_NAME_TIPS', 'Indtast hele dit navn (fornavn først)');
define('_JNEWS_IP_TIPS', 'IP of the subscriber' );
define('_JNEWS_INPUT_EMAIL_TIPS', 'Indtast din email adresse (Vær sikker på at dette er en gyldig email adresse hvis du vil modtage vores forsendelser.)');
define('_JNEWS_RECEIVE_HTML_TIPS', 'Vælg Ja hvis du ønsker at modtage HTML forsendelser - Ikke at modtage kun tekst forsendelser');
define('_JNEWS_TIME_ZONE_ASK_TIPS', 'Angiv din tidszone.');

// Since 1.0.5
define('_JNEWS_FILES', 'Filer');
define('_JNEWS_FILES_UPLOAD', 'Upload');
define('_JNEWS_MENU_UPLOAD_IMG', 'Upload billeder');
define('_JNEWS_TOO_LARGE', 'Fil størrelsen er for stor. Den maksimalt tilladte størrelse er');
define('_JNEWS_MISSING_DIR', 'Destinations biblioteket findes ikke');
define('_JNEWS_IS_NOT_DIR', 'Destinations bibliotektet findes ikke eller er ikke en regulær fil.');
define('_JNEWS_NO_WRITE_PERMS', 'Der er ikke skrive rettigheder i destinations biblioteket.');
define('_JNEWS_NO_USER_FILE', 'Du har ikke valgt nogen fil at uploade.');
define('_JNEWS_E_FAIL_MOVE', 'Umuligt at flytte filen.');
define('_JNEWS_FILE_EXISTS', 'Destinations filen findes allerede.');
define('_JNEWS_CANNOT_OVERWRITE', 'Destinations filen findes allerede og kunne ikke overskrives.');
define('_JNEWS_NOT_ALLOWED_EXTENSION', 'Fil extention er ikke tilladt.');
define('_JNEWS_PARTIAL', 'Filen blev kun delvist uploaded.');
define('_JNEWS_UPLOAD_ERROR', 'Upload fejl:');
define('_JNEWS_DEV_NO_DEF_FILE', 'Filen blev kun delvist uploaded.');

// already exist but modified  added a <br/ on first line and added [SUBSCRIPTIONS] line>
define('_JNEWS_CONTENTREP', '{tag:subscriptions} = Dette vil blive erstattet med abonnement links.' .
		' Dette er <strong>krævet</strong> for at jNews kan fungere korrekt.<br />' .
		'Hvis du andet indhold i denne box vildet blive vist i alle forsendelser som hører til denne liste.' .
		' <br />Tilføj din abonnements besked i slutningen.  jNews vil automatisk tilføje en link til abonnenten så de kan ændre deres information og en link til afmelding fra listen.');

// since 1.0.6
define('_JNEWS_NOTIFICATION', 'Notification');
// shortcut for Email notification
define('_JNEWS_NOTIFICATIONS', 'Notificationer');
define('_JNEWS_USE_SEF', 'SEF i forsendelser');
define('_JNEWS_USE_SEF_TIPS', 'Det anbefales at du vælger Nej.  Hvis du ønsker URLen inkluderet i din forsendelse for at bruge SEF da vælg Ja.' .
		' <br /><b>Linkene vil fungere på samme måde uanset hviken du vælger.  Nej vil sikre at links i forsendelser altid vil fungere selv hvis du ændrer din SEF.</b> ');
define('_JNEWS_ERR_NB', 'Fejl #: ERR');
define('_JNEWS_ERR_SETTINGS', 'Fejlhåndterings opsætning');
define('_JNEWS_ERR_SEND', 'Send fejlrapport');
define('_JNEWS_ERR_SEND_TIPS', 'Hvis du vil have jNews til at blive et bedre produkt så vælg venligst Ja.  Det vil sende os en fejlrapport.  Så du behøver ikke engang at rapportere fejl mere ;-) <br /> <b>INGEN PRIVATE INFORMATIONER BLIVER SENDT</b>.  Vi vil end ikke vide fra hvilken webside fejlen er sendt fra. Vi sender kun informationer om jNews, PHP opsætningen og SQL forespørgsler. ');
define('_JNEWS_ERR_SHOW_TIPS', 'Vælg Ja for at vise antallet af fejl på skærmen.  Primært anvendt for at kunne debuging løsningen. ');
define('_JNEWS_ERR_SHOW', 'Vis fejl');
define('_JNEWS_LIST_SHOW_UNSUBCRIBE', 'Vis afmeldings links');
define('_JNEWS_LIST_SHOW_UNSUBCRIBE_TIPS', 'Vælg Ja for at vise afmeldings links i bunde af forsendelsen så brugerne kan ændre deres abonnementer. <br /> Nej vil slå sidefoden og links fra.');
define('_JNEWS_UPDATE_INSTALL', '<span style="color: rgb(255, 0, 0);">VIGTIG BEMÆRKNING!</span> <br />Hvis du opgraderer fra en tidligere jNews installation skal du opgradere din database struktur ved at klikke på følgende knap (Dine data vil forblive uændret)');
define('_JNEWS_UPDATE_INSTALL_BTN', 'Opgrader tabeller og konfiguration');
define('_JNEWS_MAILING_MAX_TIME', 'Maks. kø tid');
define('_JNEWS_MAILING_MAX_TIME_TIPS', 'Definer den maksimale tid for hver sæt af emails der sendes af køen. Anbefales mellem 30 sek og 2 min.');

// virtuemart integration beta
define('_JNEWS_VM_INTEGRATION', 'VirtueMart Integration');
define('_JNEWS_VM_COUPON_NOTIF', 'Kupon notifications ID');
define('_JNEWS_VM_COUPON_NOTIF_TIPS', 'Angiv ID nummeret på den forsendelse du ønsker at bruge til at sende kuponner til dine handlende.');
define('_JNEWS_VM_NEW_PRODUCT', 'Ny produkt notification ID');
define('_JNEWS_VM_NEW_PRODUCT_TIPS', 'Angiv ID nummeret på den forsendelse du ønsker at sende som ny produkt notification.');

// since 1.0.8
// create forms for subscriptions
define('_JNEWS_FORM_BUTTON', 'Opret formular');
define('_JNEWS_FORM_COPY', 'HTML kode');
define('_JNEWS_FORM_COPY_TIPS', 'Kopier den genererede HTML kode ind i din HTML side.');
define('_JNEWS_FORM_LIST_TIPS', 'Vælg den liste du vil inkludere i formularen');
// update messages
define('_JNEWS_UPDATE_MESS4', 'Den kan ikke opdateres automatisk.');
define('_JNEWS_WARNG_REMOTE_FILE', 'Der er ingen måde at hente den remote fil.');
define('_JNEWS_ERROR_FETCH', 'Fejl under henting af fil.');

define('_JNEWS_CHECK', 'Check');
define('_JNEWS_MORE_INFO', 'Mere information');
define('_JNEWS_UPDATE_NEW', 'Opgrader til nyere version');
define('_JNEWS_UPGRADE', 'Opgrader til højere produkt');
define('_JNEWS_DOWNDATE', 'Rul tilbage til den tidligere version');
define('_JNEWS_DOWNGRADE', 'Tilbage til det grundlæggende produkt');
define('_JNEWS_REQUIRE_JOOM', 'Kræv Joomla');
define('_JNEWS_TRY_IT', 'Prøv det!');
define('_JNEWS_NEWER', 'Nyere');
define('_JNEWS_OLDER', 'Ældre');
define('_JNEWS_CURRENT', 'Gældende');

// since 1.0.9
define('_JNEWS_CHECK_COMP', 'Prøv en af de andre komponenter');
define('_JNEWS_MENU_VIDEO', 'Video uddannelse');
define('_JNEWS_AUTO_SCHEDULE', 'Plan');
define('_JNEWS_SCHEDULE_TITLE', 'Automatisk planlægningsfunktions opsætning');
define('_JNEWS_ISSUE_NB_TIPS', 'Problem nummer genereret automatisk af systemet');
define('_JNEWS_SEL_ALL', 'Alle forsendelser');
define('_JNEWS_SEL_ALL_SUB', 'Alle lister');
define('_JNEWS_INTRO_ONLY_TIPS', 'Hvis du vælger denne box er det kun intoduktionen til artiklen der vil bliv indsat i forsendelsen med en "læs mere" link til den komplette artikel på din webside.');
define('_JNEWS_TAGS_TITLE', 'Placeringsmærker');
define('_JNEWS_TAGS_TITLE_TIPS', 'Klip og klister denne markering in i forsendelse der hvor du vil have indholdet placeret.');
define('_JNEWS_PREVIEW_EMAIL_TEST', 'Angiv den email adresse som testen skal sendes til');
define('_JNEWS_PREVIEW_TITLE', 'Preview');
define('_JNEWS_AUTO_UPDATE', 'Ny opdaterings besked');
define('_JNEWS_AUTO_UPDATE_TIPS', 'Vælg Ja hvis du vil have besked om nye opdateringer til din komponent. <br />VIGTIGT!! Vis tips skal være slået til for at denne funktion vil virke.');

// since 1.1.0
define('_JNEWS_LICENSE', 'Licens information');

// since 1.1.1
define('_JNEWS_NEW', 'Ny');
define('_JNEWS_SCHEDULE_SETUP', 'For at auto-svaret kan blive send skal du opsætte din scheduler i konfigurationen.');
define('_JNEWS_SCHEDULER', 'Scheduler');
define('_JNEWS_jnews_CRON_DESC', 'Hvis du ikke har adgang til en cron opgave adminstrator på din webside, kan du registrere dig til en fri jNews Cron konto på:');
define('_JNEWS_CRON_DOCUMENTATION', 'Du kan finde yderligere information om opsætningen af jNews scheduleren på følgende url:');
define('_JNEWS_CRON_DOC_URL', '<a href="http://www.joobi.co/index.php?option=com_content&view=article&id=4249&catid=29&Itemid=72"
 target="_blank">http://www.joobi.co/index.php?option=com_content&Itemid=72&view=category&layout=blog&id=29&limit=60</a>');
define( '_JNEWS_QUEUE_PROCESSED', 'Køen behandlet succesfuldt...');
define( '_JNEWS_ERROR_MOVING_UPLOAD', 'Fejl ved flytning af importeret fil');

//since 1.1.4
define( '_JNEWS_SCHEDULE_FREQUENCY', 'Scheduler frekvens');
define( '_JNEWS_CRON_MAX_FREQ', 'Scheduler max frekvens');
define( '_JNEWS_CRON_MAX_FREQ_TIPS', 'Specificer den maximale frekvens som scheduleren kan køre med ( i minuter ).  Dette vil begrænse scheduleren selv om cron opgaverne er opsat til oftere.');
define( '_JNEWS_CRON_MAX_EMAIL', 'Maximum emails per opgave');
define( '_JNEWS_CRON_MAX_EMAIL_TIPS', 'Angiv det maximale antal emails der sendes per opgave. If this is set to O the maximim emails per task will be 1');
define( '_JNEWS_CRON_MINUTES', ' minuter');
define( '_JNEWS_SHOW_SIGNATURE', 'Vis email sidefoden');
define( '_JNEWS_SHOW_SIGNATURE_TIPS', 'Hvad enten du vil eller ikke vil fremhæve jNews i bunden af emailene.');
define( '_JNEWS_QUEUE_AUTO_PROCESSED', 'Auto-svarene er behandlet succesfuldt...');
define( '_JNEWS_QUEUE_NEWS_PROCESSED', 'Planlagte nyhedsbreve er behandlet succesfuldt...');
define( '_JNEWS_MENU_SYNC_USERS', 'Synkroniser brugere');
define( '_JNEWS_SYNC_USERS_SUCCESS', 'Brugere synkroniseret succesfuldt!');

// compatibility with Joomla 15
if (!defined('_BUTTON_LOGOUT')) define( '_BUTTON_LOGOUT', 'Logout');
if (!defined('_CMN_YES')) define( '_CMN_YES', 'Ja');
if (!defined('_CMN_NO')) define( '_CMN_NO', 'Nej');
if (!defined('_HI')) define( '_HI', 'Hej');
if (!defined('_CMN_TOP')) define( '_CMN_TOP', 'Top');
if (!defined('_CMN_BOTTOM')) define( '_CMN_BOTTOM', 'Bund');
//if (!defined('_BUTTON_LOGOUT')) define( '_BUTTON_LOGOUT', 'Logout');

// For include title only or full article in content item tab in newsletter edit - p0stman911
define('_JNEWS_TITLE_ONLY_TIPS', 'Hvis du markerer denne så vil kun titlen af artiklen blive indsat i forsendelsen som en link til den komplette artikel på din webside.');
define('_JNEWS_TITLE_ONLY', 'Kun titel');
define('_JNEWS_FULL_ARTICLE_TIPS', 'Hvis du markerer denne vil den komplette artikel blive indsat i forsendelsen');
define('_JNEWS_FULL_ARTICLE', 'Fuld artikel');
define('_JNEWS_CONTENT_ITEM_SELECT_T', 'Vælg det indhold der skal vedlægges til meddelelsen. <br />Klip og klistre <b>content tag</b> ind i forsendelsen.  Du kan vælge at have hele teksten, kun introduktionen, eller kun titlen med (0, 1, eller 2 respektivt). ');
define('_JNEWS_SUBSCRIBE_LIST2', 'Forsendelseslister');

// For sorting in content tab by date, section or category
define('_JNEWS_CONTENT_ITEM_SORT', 'Sort by: ');
define('_JNEWS_SORT_DATE' , 'Date');
define('_JNEWS_SORT_DATE_TIPS' , 'If you select this, the contents will be sorted according to date created');
define('_JNEWS_SORT_SECTION' , 'Section');
define('_JNEWS_SORT_SECTION_TIPS' , 'If you select this, the contents will be sorted according to its section');
define('_JNEWS_SORT_CATEGORY' , 'Category');
define('_JNEWS_SORT_CATEGORY_TIPS' , 'If you select this, the contents will be sorted according to its category');
define('_JNEWS_SORT_BUTTON' , 'Sort');


// smart-newsletter function
define('_JNEWS_AUTONEWS', 'Smart-Nyhedsbrev');
define('_JNEWS_MENU_AUTONEWS', 'Smart-Nyhedsbreve');
define('_JNEWS_AUTO_NEWS_OPTION', 'Smart-Nyhedsbrev valg');
define('_JNEWS_AUTONEWS_FREQ', 'Nyhedsbrevs frekvens');
define('_JNEWS_AUTONEWS_FREQ_TIPS', 'Angiv frekvensen for hvor ofte du vil sende Smart-nyhedsbrevet.');
define('_JNEWS_AUTONEWS_SECTION', 'Artikel sektion');
define('_JNEWS_AUTONEWS_SECTION_TIPS', 'Angiv den sektion du vil vælge artikler fra.');
define('_JNEWS_AUTONEWS_CAT', 'Artikel kategori');
define('_JNEWS_AUTONEWS_CAT_TIPS', 'Angiv den kategori du vil vælge artikler fra (Alle for alle artikler i den sektion).');
define('_JNEWS_SELECT_SECTION', 'Vælg en sektion');
define('_JNEWS_SELECT_CAT', 'Alle kategorier');
define('_JNEWS_AUTO_DAY_CH8', 'Kvartalsvis');
define('_JNEWS_AUTONEWS_STARTDATE', 'Start dato');
define('_JNEWS_AUTONEWS_STARTDATE_TIPS', 'Angiv den dato du vil starte med at sende dit Smart-Nyhedsbrev.');
define('_JNEWS_AUTONEWS_TYPE', 'Indholdet behandles');
// how we see the content which is included in the newsletter
define('_JNEWS_AUTONEWS_TYPE_TIPS', 'Fuld artikel: Vil inkludere hele artiklen i nyhedsbrevet.<br />' .
		'Kun intro: Vil kun inkludere introduktionen til artiklen i nyhedsbrevet.<br/>' .
		'Kun titel: Vil kun inkludere titlen til artiklen i nyhedsbrevet.');
define('_JNEWS_TAGS_AUTONEWS', '[SMARTNEWSLETTER] = Dette vil blive udskiftet med Smart-Nyhedsbrevet.');

//since 1.1.3
define('_JNEWS_MALING_EDIT_VIEW', 'Opret / Se forsendelser');
define('_JNEWS_LICENSE_CONFIG', 'Licens');
define('_JNEWS_ENTER_LICENSE', 'Indtast licens');
define('_JNEWS_ENTER_LICENSE_TIPS', 'Indtast dit licens nummer og gem det.');
define('_JNEWS_LICENSE_SETTING', 'Licens opsætning');
define('_JNEWS_GOOD_LIC', 'Din licens er gyldig.');
define('_JNEWS_NOTSO_GOOD_LIC', 'Din licens er ugyldig: ');
define('_JNEWS_PLEASE_LIC', 'Venligst kontakt jNews support for at opgradere din licens ( license@joobi.co ).');

define('_JNEWS_DESC_PLUS', 'jNews Plus er den første sekvensielle auto-svar til Joomla CMS.  ' . _JNEWS_FEATURES );
define('_JNEWS_DESC_PRO', 'jNews PRO det ultimative mailing system til Joomla CMS.  ' . _JNEWS_FEATURES );

//since 1.1.4
define('_JNEWS_ENTER_TOKEN', 'Indtast token');
define('_JNEWS_ENTER_TOKEN_TIPS', 'Venligst indtast det token nummer du modtog på email da du købte jNews.');
define('_JNEWS_jnews_SITE', 'jNews website:');
define('_JNEWS_MY_SITE', 'Mit website:');
define( '_JNEWS_LICENSE_FORM', ' ' .
 		'Klik her for at gå til licens formularen.</a>');
define('_JNEWS_PLEASE_CLEAR_LICENSE', 'Venligst slet licens feltet så det er tomt og prøv igen.<br />  Hvis problemet fortsætter, ');
define( '_JNEWS_LICENSE_SUPPORT', 'Hvis du stadig har spørgsmål, ' . _JNEWS_PLEASE_LIC );
define( '_JNEWS_LICENSE_TWO', 'du kan få din licens manuelt ved at indtaste token nummeret og website URL (som er fremhævet i grønt øverst på denne side) i licens formularen. '
			. _JNEWS_LICENSE_FORM . '<br /><br/>' . _JNEWS_LICENSE_SUPPORT );
define('_JNEWS_ENTER_TOKEN_PATIENCE', 'Efter at have gemt din token vil en licens blive genereret automatisk. ' .
		' Normalt bliver token valideret i 2 minutter.  Uanset, in nogle tilfælde kan det tage op til 15 minuter.<br />' .
		'<br />Kontroller dette kontrolpanel om få minutter.  <br /><br />' .
						'Hvis du ikke modtog en valid licenskode inden for 15 minuter, '. _JNEWS_LICENSE_TWO );
define( '_JNEWS_ENTER_NOT_YET', 'Din token er endnu ikke blivet valideret.');
define( '_JNEWS_UPDATE_CLICK_HERE', 'Venligst besøg <a href="http://www.joobi.co" target="_blank">www.joobi.co</a> for at downloade den nyeste version.');
//define( '_JNEWS_NOTIF_UPDATE', 'For at blive notificeret om nye opdatering skal du indtaste din email adresse og klikke abonner ');


//since 1.2.2
define( '_JNEWS_LIST_ACCESS', 'List Access');
define( '_JNEWS_INFO_LIST_ACCESS', 'Specify what group of users can view and subscribe to this list');
define( 'JNEWS_NO_LIST_PERM', 'You don\'t have enough permission to subscribe to this list');

//Archive Configuration
 define('_JNEWS_MENU_TAB_ARCHIVE', 'Archive');
 define('_JNEWS_MENU_ARCHIVE_ALL', 'Archive All');

//Archive Lists
 define('_JNEWS_FREQ_OPT_0', 'None');
 define('_JNEWS_FREQ_OPT_1', 'Every Week');
 define('_JNEWS_FREQ_OPT_2', 'Every 2 Weeks');
 define('_JNEWS_FREQ_OPT_3', 'Every Month');
 define('_JNEWS_FREQ_OPT_4', 'Every Quarter');
 define('_JNEWS_FREQ_OPT_5', 'Every Year');
 define('_JNEWS_FREQ_OPT_6', 'Other');

define('_JNEWS_DATE_OPT_1', 'Created date');
define('_JNEWS_DATE_OPT_2', 'Modified date');

define('_JNEWS_ARCHIVE_TITLE', 'Setting up auto-archive frequency');
define('_JNEWS_FREQ_TITLE', 'Archive frequency');
define('_JNEWS_FREQ_TOOL', 'Define how often you want the Archive Manager to arhive your website content.');
define('_JNEWS_NB_DAYS', 'Number of days');
define('_JNEWS_NB_DAYS_TOOL', 'This is only for the Other option! Please specify the number of days between each Archive.');
define('_JNEWS_DATE_TITLE', 'Date type');
define('_JNEWS_DATE_TOOL', 'Define if the archived should be done on the created date or modified date.');

define('_JNEWS_MAINTENANCE_TAB', 'Maintenance settings');
define('_JNEWS_MAINTENANCE_FREQ', 'Maintenance frequency');
define( '_JNEWS_MAINTENANCE_FREQ_TIPS', 'Specify the frequency at which you want the maintenance routine to run.');
define( '_JNEWS_CRON_DAYS', 'hour(s)');

define( '_JNEWS_LIST_NOT_AVAIL', 'There is no list available.');
define( '_JNEWS_LIST_ADD_TAB', 'Add/Edit');

define( '_JNEWS_LIST_ACCESS_EDIT', 'Mailing Add/Edit Access');
define( '_JNEWS_INFO_LIST_ACCESS_EDIT', 'Specify what group of users can add or edit a new mailing for this list');
define( '_JNEWS_MAILING_NEW_FRONT', 'Createa New Mailing');

define('_JNEWS_AUTO_ARCHIVE', 'Auto-Archive');
define('_JNEWS_MENU_ARCHIVE', 'Auto-Archive');

//Extra tags:
define('_JNEWS_TAGS_ISSUE_NB', '[ISSUENB] = This will be replaced by the issue number of  the newsletter.');
define('_JNEWS_TAGS_DATE', '{tag:date} = This will be replaced by the sent date.');
define('_JNEWS_TAGS_CB', '[CBTAG:{field_name}] = This will be replaced by the value taken from the Community Builder field: eg. [CBTAG:firstname] ');
define( '_JNEWS_MAINTENANCE', 'Joobi Care');


define('_JNEWS_THINK_PRO', 'When you have professional needs, you use professional components!');
define('_JNEWS_THINK_PRO_1', 'Smart-Newsletters');
define('_JNEWS_THINK_PRO_2', 'Define access level for your list');
define('_JNEWS_THINK_PRO_3', 'Define who can edit/add mailings');
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

define( '_JNEWS_MAIL_FORMAT', 'Encoding format');
define( '_JNEWS_MAIL_FORMAT_TIPS', 'What format do you want to use for encoding your mailings, Text only or MIME');
define( '_JNEWS_jnews_CRON_DESC_ALT', 'If you do not have access to a cron task manager on your website, you can use the Free jCron component to create a cron task from your website.');

//since 1.3.1
define('_JNEWS_SHOW_AUTHOR', 'Show Author\'s Name');
define('_JNEWS_SHOW_AUTHOR_TIPS', 'Select Yes if you want to add the name of the author when you add an article in the Mailing');

//since 1.3.5
define('_JNEWS_REGWARN_NAME', 'Angiv dit navn.');
define('_JNEWS_REGWARN_MAIL', 'Angiv en gyldig e-mailadresse.');


//since 1.5.6
define('_JNEWS_ADDEMAILREDLINK_TIPS', 'If you select Yes, the e-mail of the user will be added as a parameter at the end of your redirect URL (the redirect link for your module or for an external jNews form).<br/>That can be useful if you want to execute a special script in your redirect page.');
define('_JNEWS_ADDEMAILREDLINK', 'Add e-mail to the redirect link');

//since 1.6.3
define('_JNEWS_ITEMID', 'ItemId');
define('_JNEWS_ITEMID_TIPS', 'This ItemId will be added to your jNews links.');

//since 1.6.5
define('_JNEWS_SHOW_JCALPRO', 'jCalPRO');
define('_JNEWS_SHOW_JCALPRO_TIPS', 'Show the integration tab for jCalPRO <br/>(only if jCalPRO is installed on your website!)');
define('_JNEWS_JCALTAGS_TITLE', 'jCalPRO Tag:');
define('_JNEWS_JCALTAGS_TITLE_TIPS', 'Copy and paste this tag into the mailing where you want to have the event to be placed.');
define('_JNEWS_JCALTAGS_DESC', 'Description:');
define('_JNEWS_JCALTAGS_DESC_TIPS', 'Select Yes if you want to insert the description of the event');
define('_JNEWS_JCALTAGS_START', 'Start date:');
define('_JNEWS_JCALTAGS_START_TIPS', 'Select Yes if you want to insert the start date of the event');
define('_JNEWS_JCALTAGS_READMORE', 'Read more:');
define('_JNEWS_JCALTAGS_READMORE_TIPS', 'Select Yes if you want to insert a <b>read more link</b> for this event');
define('_JNEWS_REDIRECTCONFIRMATION', 'Redirect URL');
define('_JNEWS_REDIRECTCONFIRMATION_TIPS', 'If you require a confirmation e-mail, the user will be confirmed and redirected to this URL if he clicks on the confirmation link.');

//since 2.0.0 compatibility with Joomla 1.5
if(!defined('_CMN_SAVE') and defined('CMN_SAVE')) define('_CMN_SAVE',CMN_SAVE);
if(!defined('_CMN_SAVE')) define('_CMN_SAVE', 'Save');
if(!defined('_NO_ACCOUNT')) define('_NO_ACCOUNT', 'No account yet?');
if(!defined('_CREATE_ACCOUNT')) define('_CREATE_ACCOUNT', 'Register');
if(!defined('_NOT_AUTH')) define('_NOT_AUTH','You are not authorised to view this resource.');

//since 3.0.0
define('_JNEWS_DISABLETOOLTIP', 'Disable Tooltip');
define('_JNEWS_DISABLETOOLTIP_TIPS', 'Disable the tooltip on the frontend');
define('_JNEWS_MINISENDMAIL', 'Use Mini SendMail');
define('_JNEWS_MINISENDMAIL_TIPS', 'If your server use Mini SendMail, select this option to don\'t add the name of the user in the header of the e-mail');

//Since 3.1.5
define('_JNEWS_READMORE','Read more...');
define('_JNEWS_VIEWARCHIVE','Click here');

//since 4.0.0
define('_JNEWS_SHOW_JLINKS','Link Tracking');
define('_JNEWS_SHOW_JLINKS_TIPS','Enables the integration with jLinks to be able to do link tracking for each links in the newsletter.');

//since 4.1.0
define( '_JNEWS_MAIL_ENCODING', 'Mail encoding' );
define( '_JNEWS_MAIL_ENCODING_TIPS', 'What encoding format do you want to use UTF-8 (highly recommended) or ISO-8859-2' );
define( '_JNEWS_COPY_SUBJECT', 'Copy Subject' );

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
define('_JNEWS_SUBSCRIPTION_NOTIFY_MSG1','A subscription notification email has been sent to the administrator.');
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


