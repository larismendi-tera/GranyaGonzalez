<?php
defined('_JEXEC') or die('Restricted access');
### Copyright (c) 2006-2012 Joobi Limited. All rights reserved.
### license GNU GPLv3 , link http://www.joobi.co

/**
 * <p>Swedish language file.</p>
 * @copyright (c) 2006-2012 Joobi Limited. All rights reserved.
 * @author Janne Karlsson<support@joobi.co>
 * @version $Id: swedish.php 491 2007-02-01 22:56:07Z chris $
* @link http://www.joobi.co
 */

### General ###
 //jnews Description
define('_JNEWS_DESC_CORE', ('jNews är en mailinglista, nyhetsbrev, auto-respondrar, och ett uppföljningsverktyg för att kommunicera effektivt med dina användare och kunder. ' .
		'jNews, Din Kommunikations Partner!'));
define('_JNEWS_DESC_GPL', ('jNews är en mailinglista, nyhetsbrev, auto-respondrar, och ett uppföljningsverktyg för att kommunicera effektivt med dina användare och kunder. ' .
		'jNews, Din Kommunikations Partner!'));
define('_JNEWS_FEATURES', ('jNews, din kommunikationspartner!'));

// Type of lists
define('_JNEWS_NEWSLETTER', ('Nyhetsbrev'));
define('_JNEWS_AUTORESP', ('Auto-responder'));
define('_JNEWS_AUTORSS', ('Auto-RSS'));
define('_JNEWS_ECARD', ('eKort'));
define('_JNEWS_POSTCARD', ('Postkort'));
define('_JNEWS_PERF', ('Prestanda'));
define('_JNEWS_COUPON', ('Kupong'));
define('_JNEWS_CRON', ('Cron Uppgift'));
define('_JNEWS_MAILING', ('Maila'));
define('_JNEWS_LIST', ('Lista'));

 //jnews Menu
define('_JNEWS_MENU_LIST', ('List Hanterare'));
define('_JNEWS_MENU_SUBSCRIBERS', ('Prenumeranter'));
define('_JNEWS_MENU_NEWSLETTERS', ('Nyhetsbrev'));
define('_JNEWS_MENU_AUTOS', ('Auto-respondrar'));
define('_JNEWS_MENU_COUPONS', ('Kuponger'));
define('_JNEWS_MENU_CRONS', ('Cron Uppgifter'));
define('_JNEWS_MENU_AUTORSS', ('Auto-RSS'));
define('_JNEWS_MENU_ECARD', ('eKort'));
define('_JNEWS_MENU_POSTCARDS', ('Postkort'));
define('_JNEWS_MENU_PERFS', ('Prestanda'));
define('_JNEWS_MENU_TAB_LIST', ('Listor'));
define('_JNEWS_MENU_MAILING_TITLE', ('Mail'));
define('_JNEWS_MENU_MAILING', ('Mailande för '));
define('_JNEWS_MENU_STATS', ('Statistik'));
define('_JNEWS_MENU_STATS_FOR', ('Statistik för '));
define('_JNEWS_MENU_CONF', ('Konfiguration'));
define('_JNEWS_MENU_UPDATE', ('Import'));
define('_JNEWS_MENU_ABOUT', ('Om'));
define('_JNEWS_MENU_LEARN', ('Utbildningscenter'));
define('_JNEWS_MENU_MEDIA', ('Media Hanterare'));
define('_JNEWS_MENU_HELP', ('Hjälp'));
define('_JNEWS_MENU_CPANEL', ('CPanel'));
define('_JNEWS_MENU_IMPORT', ('Importera'));
define('_JNEWS_MENU_EXPORT', ('Exportera'));
define('_JNEWS_MENU_SUB_ALL', ('Prenumerara Alla'));
define('_JNEWS_MENU_UNSUB_ALL', ('Ej Prenumerera Alla'));
define('_JNEWS_MENU_VIEW_ARCHIVE', ('Arkiv'));
define('_JNEWS_MENU_PREVIEW', ('Förhandsgranska'));
define('_JNEWS_MENU_SEND', ('Skicka'));
define('_JNEWS_MENU_SEND_TEST', ('Skicka Test E-post'));
define('_JNEWS_MENU_SEND_QUEUE', ('Process Kö'));
define('_JNEWS_MENU_VIEW', ('Visa'));
define('_JNEWS_MENU_COPY', ('Kopiera'));
define('_JNEWS_MENU_VIEW_STATS', ('Visa stats'));
define('_JNEWS_MENU_CRTL_PANEL', (' Kontrollpanel'));
define('_JNEWS_MENU_LIST_NEW', (' Skapa en Lista'));
define('_JNEWS_MENU_LIST_EDIT', (' Redigera en Lista'));
define('_JNEWS_MENU_BACK', ('Tillbaka'));
define('_JNEWS_MENU_INSTALL', ('Installation'));
define('_JNEWS_MENU_TAB_SUM', ('Summering'));
define('_JNEWS_STATUS', ('Status'));

// messages
define('_JNEWS_ERROR', (' Ett fel inträffade! '));
define('_JNEWS_SUB_ACCESS', ('Behörighets rättigheter'));
define('_JNEWS_DESC_CREDITS', ('Krediter'));
define('_JNEWS_DESC_INFO', ('Information'));
define('_JNEWS_DESC_HOME', ('Hemsida'));
define('_JNEWS_DESC_MAILING', ('Maillista'));
define('_JNEWS_DESC_SUBSCRIBERS', ('Prenumeranter'));
define('_JNEWS_PUBLISHED', ('Publicerad'));
define('_JNEWS_UNPUBLISHED', ('Opublicerad'));
define('_JNEWS_DELETE', ('Radera'));
define('_JNEWS_FILTER', ('Filter'));
define('_JNEWS_UPDATE', ('Uppdatera'));
define('_JNEWS_SAVE', ('Spara'));
define('_JNEWS_CANCEL', ('Avbryt'));
define('_JNEWS_NAME', ('Namn'));
define('_JNEWS_EMAIL', ('E-post'));
define('_JNEWS_SELECT', ('Välj'));
define('_JNEWS_ALL', ('Alla'));
define('_JNEWS_SEND_A', ('Skicka en '));
define('_JNEWS_SUCCESS_DELETED', (' raderades'));
define('_JNEWS_LIST_ADDED', ('Lista skapades'));
define('_JNEWS_LIST_COPY', ('Lista kopierades'));
define('_JNEWS_LIST_UPDATED', ('Lista uppdaterades'));
define('_JNEWS_MAILING_SAVED', ('Mailande sparades.'));
define('_JNEWS_UPDATED_SUCCESSFULLY', ('uppdaterat.'));

### Subscribers information ###
//subscribe and unsubscribe info
define('_JNEWS_SUB_INFO', ('Prenumerations information'));
define('_JNEWS_VERIFY_INFO', ('Verifiera länken du la till, viss information saknas.'));
define('_JNEWS_INPUT_NAME', ('Namn'));
define('_JNEWS_INPUT_EMAIL', ('E-post'));
define('_JNEWS_RECEIVE_HTML', ('Mottag HTML?'));
define('_JNEWS_TIME_ZONE', ('Tids Zon'));
define('_JNEWS_BLACK_LIST', ('Svarta listan'));
define('_JNEWS_REGISTRATION_DATE', ('Användares registreringsdatum'));
define('_JNEWS_USER_ID', ('Användar ID'));
define('_JNEWS_DESCRIPTION', ('Beskrivning'));
define('_JNEWS_ACCOUNT_CONFIRMED', ('Ditt konto har aktiverats.'));
define('_JNEWS_SUB_SUBSCRIBER', ('Prenumerant'));
define('_JNEWS_SUB_PUBLISHER', ('Publicist'));
define('_JNEWS_SUB_ADMIN', ('Administratör'));
define('_JNEWS_REGISTERED', ('Registrerad'));
define('_JNEWS_SUBSCRIPTIONS', ('Prenumerationer'));
define('_JNEWS_SEND_UNSUBCRIBE', ('Skicka prenumerera ej meddelande'));
define('_JNEWS_SEND_UNSUBCRIBE_TIPS', ('Klicka Ja för att skicka ett prenumerera ej e-post bekräftelse meddelande.'));
define('_JNEWS_SUBSCRIBE_SUBJECT_MESS', ('Bekräfta din prenumeration'));
define('_JNEWS_UNSUBSCRIBE_SUBJECT_MESS', ('Prenumerera Ej bekräftelse'));
define('_JNEWS_DEFAULT_SUBSCRIBE_MESS', ('Hej ! {tag:name},<br />' .
		'Bara ett steg till sedan är du inlagd i prenumerationslistan.  Klicka på följande länk för att bekräfta din prenumeration.' .
		'<br /><br />{tag:confirm}<br /><br />Vid frågor kontakta webmaster.'));
define('_JNEWS_DEFAULT_UNSUBSCRIBE_MESS', ('Detta är ett bekräftelsemail om att du har valt att inte längre prenumerera hos oss mera.  Vi är självklart ledsna att du valt detta men om du väljer att åter prenumerera hos oss igen så är du välkommen tillbaka.  Om du har några frågor så kontakta vår webmaster.'));

// jNews subscribers
define('_JNEWS_SIGNUP_DATE', ('Inskrivningsdatum'));
define('_JNEWS_CONFIRMED', ('Bekräftad'));
define('_JNEWS_SUBSCRIB', ('Prenumerera'));
define('_JNEWS_HTML', ('HTML mail'));
define('_JNEWS_RESULTS', ('Resultat'));
define('_JNEWS_SEL_LIST', ('Välj en lista'));
define('_JNEWS_SEL_LIST_TYPE', ('- Välj typ av lista -'));
define('_JNEWS_SUSCRIB_LIST', ('Lista på alla prenumeranter'));
define('_JNEWS_SUSCRIB_LIST_UNIQUE', ('prenumeranter för : '));
define('_JNEWS_NO_SUSCRIBERS', ('Inga prenumeranter hittades i denna lista.'));
define('_JNEWS_COMFIRM_SUBSCRIPTION', ('Ett bekräftelsemail har skickats till e-postadressen som du uppgav.  Kolla ditt e-post meddelande och klicka på länken som anges.<br />' .
		'Du behöver bekräfta din e-post för att din prenumeration ska börja gälla.'));
define('_JNEWS_SUCCESS_ADD_LIST', ('Du har lagts till i listan över prenumerationer.'));


 // Subcription info
define('_JNEWS_CONFIRM_LINK', ('Klicka här för att bekräfta din prenumeration'));
define('_JNEWS_UNSUBSCRIBE_LINK', ('Klicka här för att ta bort dig från listan över prenumeranter'));
define('_JNEWS_UNSUBSCRIBE_MESS', ('Din e-postadress har tagits bort från listan'));

define('_JNEWS_QUEUE_SENT_SUCCESS', ('Alla schemalagda mailningar har skickats iväg.'));
define('_JNEWS_MALING_VIEW', ('Visa alla mailningar'));
define('_JNEWS_UNSUBSCRIBE_MESSAGE', ('Är du säker på att du inte vill prenumerera hos oss längre?'));
define('_JNEWS_MOD_SUBSCRIBE', ('Prenumerera'));
define('_JNEWS_SUBSCRIBE', ('Prenumerera'));
define('_JNEWS_UNSUBSCRIBE', ('Prenumerera Ej'));
define('_JNEWS_VIEW_ARCHIVE', ('Visa arkiv'));
define('_JNEWS_SUBSCRIPTION_OR', (' eller klicka här för att uppdatera din information'));
define('_JNEWS_EMAIL_ALREADY_REGISTERED', ('E-postadressen som du angav finns redan.'));
define('_JNEWS_SUBSCRIBER_DELETED', ('Prenumerant raderades.'));


### UserPanel ###
 //User Menu
define('_JNEWS_UCP_USER_PANEL', ('Användar Kontrollpanel'));
define('_JNEWS_UCP_USER_MENU', ('Användarmeny'));
define('_JNEWS_UCP_USER_CONTACT', ('Mina Prenumerationer'));
 //jNews Cron Menu
define('_JNEWS_UCP_CRON_MENU', ('Cron Uppgifts Hanterare'));
define('_JNEWS_UCP_CRON_NEW_MENU', ('NY Cron'));
define('_JNEWS_UCP_CRON_LIST_MENU', ('Lista min Cron'));
 //jNews Coupon Menu
define('_JNEWS_UCP_COUPON_MENU', ('Kupong Hanterare'));
define('_JNEWS_UCP_COUPON_LIST_MENU', ('Lista på Kuponger'));
define('_JNEWS_UCP_COUPON_ADD_MENU', ('Skapa en Kupong'));

### lists ###
// Tabs
define('_JNEWS_LIST_T_GENERAL', ('Beskrivning'));
define('_JNEWS_LIST_T_LAYOUT', ('Layout'));
define('_JNEWS_LIST_T_SUBSCRIPTION', ('Prenumeration'));
define('_JNEWS_LIST_T_SENDER', ('Avsändarinformation'));

define('_JNEWS_LIST_TYPE', ('List Typ'));
define('_JNEWS_LIST_NAME', ('List namn'));
define('_JNEWS_LIST_ISSUE', ('Nummer #'));
define('_JNEWS_LIST_DATE', ('Sändningsdatum'));
define('_JNEWS_LIST_SUB', ('Mailämne'));
define('_JNEWS_ATTACHED_FILES', ('Bifogade filer'));
define('_JNEWS_SELECT_LIST', ('Välj en lista att redigera!'));

// Auto Responder box
define('_JNEWS_AUTORESP_ON', ('Typ av lista'));
define('_JNEWS_AUTO_RESP_OPTION', ('Auto-responder val'));
define('_JNEWS_AUTO_RESP_FREQ', ('Prenumeranter kan välja frekvens'));
define('_JNEWS_AUTO_DELAY', ('Försening (i dagar)'));
define('_JNEWS_AUTO_DAY_MIN', ('Minimum frekvens'));
define('_JNEWS_AUTO_DAY_MAX', ('Maximum frekvens'));
define('_JNEWS_FOLLOW_UP', ('Specificera auto-responder uppföljning'));
define('_JNEWS_AUTO_RESP_TIME', ('Prenumeranter kan välja tid'));
define('_JNEWS_LIST_SENDER', ('Lista avsändare'));

define('_JNEWS_LIST_DESC', ('List beskrivning'));
define('_JNEWS_LAYOUT', ('Layout'));
define('_JNEWS_SENDER_NAME', ('Avsändarnamn'));
define('_JNEWS_SENDER_EMAIL', ('Avsändarens e-post'));
define('_JNEWS_SENDER_BOUNCE', ('Avsändarens studsadress'));
define('_JNEWS_LIST_DELAY', ('Försening'));
define('_JNEWS_HTML_MAILING', ('HTML mail?'));
define('_JNEWS_HTML_MAILING_DESC', ('(om du ändrar detta, så behöver du spara och återvända till denna ruta för att se ändringarna.)'));
define('_JNEWS_HIDE_FROM_FRONTEND', ('Dölj på framsidan?'));
define('_JNEWS_SELECT_IMPORT_FILE', ('Välj en fil att importera'));;
define('_JNEWS_IMPORT_FINISHED', ('Importering avslutat'));
define('_JNEWS_DELETION_OFFILE', ('Radering av fil'));
define('_JNEWS_MANUALLY_DELETE', ('misslyckades, du måste ta bort filen manuellt'));
define('_JNEWS_CANNOT_WRITE_DIR', ('Kan inte skriva till mappen'));
define('_JNEWS_NOT_PUBLISHED', ('Kunde inte skicka mailen, listan är inte publicerad.'));

//  List info box
define('_JNEWS_INFO_LIST_PUB', ('Klicka Ja för att publicera listan'));
define('_JNEWS_INFO_LIST_NAME', ('Skriv in namnet på listan här. Du kan identifiera listan med detta namn.'));
define('_JNEWS_INFO_LIST_DESC', ('Skriv in en kort beskrivning på listan här. Denna beskrivning kommer att vara synlig för besökare på din hemsida.'));
define('_JNEWS_INFO_LIST_SENDER_NAME', ('Skriv in namnet på avsändaren på mailen. Detta namn kommer att vara synligt när prenumeranter mottar meddelanden från denna lista.'));
define('_JNEWS_INFO_LIST_SENDER_EMAIL', ('Skriv in e-postadressen från vilken meddelandet kommer att skickas ifrån.'));
define('_JNEWS_INFO_LIST_SENDER_BOUNCED', ('Skriv in e-postadressen som användare kan svar till. Det rekomenderas att det är samma som avsändar adressen, eftersom spamfilter kommer att ge ditt meddelande en högre rankning om dom är olika.'));
define('_JNEWS_INFO_LIST_AUTORESP', ('Välj typ av mail på denna lista. <br />' .
		'Nyhetsbrev: normalt nyhetsbrev<br />' .
		'Auto-responder: en auto-responder är en lista som sänds automatiskt genom hemsidan vid regelbundna intervaller.'));
define('_JNEWS_INFO_LIST_FREQUENCY', ('Aktivera användare genom att ange hur ofta dom ska motta från denna lista.  Det ger mer flexibilitet för användaren.'));
define('_JNEWS_INFO_LIST_TIME', ('Låt användaren välja sin önskade tid på dygnet för att motta från listan.'));
define('_JNEWS_INFO_LIST_MIN_DAY', ('Definera vad som är den minimala frekvensen en användare kan välja att mottaga listan'));
define('_JNEWS_INFO_LIST_DELAY', ('Specificera fördröjningen mellan denna auto-responder och den föregående gången.'));
define('_JNEWS_INFO_LIST_DATE', ('Specificera datumet för publicering av nyhetslistan om du vill fördröja publiceringen. <br /> FORMAT : ÅÅÅÅ-MM-DD TT:MM:SS'));
define('_JNEWS_INFO_LIST_MAX_DAY', ('Definera vad som är den maximala frekvensen en användare kan välja att mottaga listan'));
define('_JNEWS_INFO_LIST_LAYOUT', ('Skriv in layouten på din maillista här. Du kan fylla i vilken layout för din mail här.'));
define('_JNEWS_INFO_LIST_SUB_MESS', ('Detta meddelande kommer att skickas till prenumeranten när han eller hon registreras för första gången. Du kan fylla i den text du önskar här.'));
define('_JNEWS_INFO_LIST_UNSUB_MESS', ('Detta meddelande kommer att skickas till prenumeranten när han eller hon vill avsäga sig sin prenumeration. Ditt meddelande kan du fylla i här.'));
define('_JNEWS_INFO_LIST_HTML', ('Välj kryssrutan om du vill skicka ut ett HTML mail. Prenumeranter kommer att kunna specificera om dom vill motta HTML meddelande, eller endast Text meddelande när dom prenumererar på en HTML lista.'));
define('_JNEWS_INFO_LIST_HIDDEN', ('Klicka Ja för att dölja listan på förstasidan, användare kommer inte att kunna prenumerera men du kommer fortfarande att kunna skicka mail.'));
define('_JNEWS_INFO_LIST_JNEWS_AUTO_SUB', ('Vill du med automatik lägga till prenumeranter till denna lista?<br /><B>Nya Användare:</B> kommer att registrera varje ny användare som har registrerat sig på hemsidan.<br /><B>Alla Användare:</B> kommer att registrera varje registrerad användare till databasen.<br />(alla dessa alternativ supportar Community Builder)'));
define('_JNEWS_INFO_LIST_ACC_LEVEL', ('Välj förstasidans behörighetsnivå. Detta kommer att visa eller dölja mailen till användargrupper som inte har tillgång till den, så dom inte kan prenumerera på den.'));
define('_JNEWS_INFO_LIST_ACC_USER_ID', ('Välj behörighetsnivå på användargrupper som du vill ska kunna redigera. Dessa användargrupper och ovanför kommer att kunna redigera mailen och skicka ut dom, antingen från förstasidan eller från backend.'));
define('_JNEWS_INFO_LIST_FOLLOW_UP', ('Om du vill att auto-respondern ska flyttas till en annan så fort den skickat sitt sista meddelande så kan du specificera det här för att följa upp auto-respondern.'));
define('_JNEWS_INFO_LIST_JNEWS_OWNER', ('Detta är ID:en på personen som skapade listan.'));
define('_JNEWS_INFO_LIST_WARNING', (' Detta sista val är endast tillgängligt på slutet vid skapande av listan.'));
define('_JNEWS_INFO_LIST_SUBJET', (' Ämne på mailen.  Detta är ämnet på e-posten som prenumeranten kommer att motta.'));
define('_JNEWS_INFO_MAILING_CONTENT', ('Detta är huvudrutan på mailet som kommer att skickas.'));
define('_JNEWS_INFO_MAILING_NOHTML', ('Skriv in här huvudtexten på mailet som du vill skicka till prenumeranterna som väljer att motta endast icke HTML mail. <BR/> NOTERA: om du lämnar detta tomt så kommer jNews automatiskt att konvertera det från HTML text till endast text.'));
define('_JNEWS_INFO_MAILING_VISIBLE', ('Klicka Ja för att visa mailen på förstasidan.'));
define('_JNEWS_INSERT_CONTENT', ('Sätt in existerande innehåll'));

// Coupons
define('_JNEWS_SEND_COUPON_SUCCESS', ('Kupong skickat!'));
define('_JNEWS_CHOOSE_COUPON', ('Välj en kupong'));
define('_JNEWS_TO_USER', (' till denna användare'));

### Cron options
//drop down frequency(CRON)
define('_JNEWS_FREQ_CH1', ('Varje timma'));
define('_JNEWS_FREQ_CH2', ('Var 6:e timma'));
define('_JNEWS_FREQ_CH3', ('Var 12:e timma'));
define('_JNEWS_FREQ_CH4', ('Dagligt'));
define('_JNEWS_FREQ_CH5', ('Veckovis'));
define('_JNEWS_FREQ_CH6', ('Månadsvis'));
define('_JNEWS_FREQ_NONE', ('Nej'));
define('_JNEWS_FREQ_NEW', ('Nya Användare'));
define('_JNEWS_FREQ_ALL', ('Alla Användare'));

//Label CRON form
define('_JNEWS_LABEL_FREQ', ('jNews Cron?'));
define('_JNEWS_LABEL_FREQ_TIPS', ('Klicka Ja om du vill använda detta som ett jNews Cron, Nej för någon annan cron uppgift.<br />' .
		'Om du klicka Ja så behöver du inte ange någon Cron Adress, det kommer automatiskt att läggas till.'));
define('_JNEWS_SITE_URL', ('Din hemsidas URL'));
define('_JNEWS_CRON_FREQUENCY', ('Cron Frekvens'));
define('_JNEWS_STARTDATE_FREQ', ('Start Datum'));
define('_JNEWS_LABELDATE_FREQ', ('Specificera Datum'));
define('_JNEWS_LABELTIME_FREQ', ('Specificera Tid'));
define('_JNEWS_CRON_URL', ('Cron URL'));
define('_JNEWS_CRON_FREQ', ('Frekvens'));
define('_JNEWS_TITLE_CRONLIST', ('Cron Lista'));
define('_JNEWS_NEW_LIST', ('Skapa en ny lista'));

//title CRON form
define('_JNEWS_TITLE_FREQ', ('Redigera Cron'));
define('_JNEWS_CRON_SITE_URL', ('Fyll i en giltig hemside url, starta med http://'));

### Mailings ###
define('_JNEWS_MAILING_ALL', ('Alla mail'));
define('_JNEWS_EDIT_A', ('Redigera ett '));
define('_JNEWS_SELCT_MAILING', ('Välj en lista i drop down menyn för att lägga till en ny mail.'));
define('_JNEWS_VISIBLE_FRONT', ('Synligt på förstasidan'));

// mailer
define('_JNEWS_SUBJECT', ('Ämne'));
define('_JNEWS_CONTENT', ('Innehåll'));
define('_JNEWS_NAMEREP', ('{tag:name} = Detta kommer att ersättas med namnet som prenumeranten uppgav, du skickar personlig e-post när du använder dig av detta.<br />'));
define('_JNEWS_FIRST_NAME_REP', ('{tag:firstname} = Detta kommer att ersättas med FÖR namnet som prenumeranten uppgav.<br />'));
define('_JNEWS_NONHTML', ('Ingen-html version'));
define('_JNEWS_ATTACHMENTS', ('Bifogade filer'));
define('_JNEWS_SELECT_MULTIPLE', ('Hold kontrollen (eller kommando) för att välja flera bifogade filer.<br />' .
		'Filerna som visas i den bifogade listan finns i en bifogad fil mapp, du kan ändra denna plats i konfigurationspanelen.'));
define('_JNEWS_CONTENT_ITEM', ('Innehålls objekt'));
define('_JNEWS_SENDING_EMAIL', ('Skickar e-post'));
define('_JNEWS_MESSAGE_NOT', ('Meddelandet kunde inte skickas'));
define('_JNEWS_MAILER_ERROR', ('Mail fel'));
define('_JNEWS_MESSAGE_SENT_SUCCESSFULLY', ('Meddelande skickat'));
define('_JNEWS_SENDING_TOOK', ('Sändning av detta mail tog'));
define('_JNEWS_SECONDS', ('sekunder'));
define('_JNEWS_NO_ADDRESS_ENTERED', ('Ingen e-postadress eller prenumerant angavs'));
define('_JNEWS_CHANGE_SUBSCRIPTIONS', ('Ändra'));
define('_JNEWS_CHANGE_EMAIL_SUBSCRIPTION', ('Ändra din prenumeration'));
define('_JNEWS_WHICH_EMAIL_TEST', ('Indikera en e-postadress för att skicka ett test till eller välj förhandsgranska'));
define('_JNEWS_SEND_IN_HTML', ('Skicka i HTML (för html mail)?'));
define('_JNEWS_VISIBLE', ('Synlig'));
define('_JNEWS_INTRO_ONLY', ('Endast Intro'));

// stats
define('_JNEWS_GLOBALSTATS', ('Global status'));
define('_JNEWS_DETAILED_STATS', ('Detaljerad stats'));
define('_JNEWS_MAILING_LIST_DETAILS', ('List detaljer'));
define('_JNEWS_SEND_IN_HTML_FORMAT', ('Skicka i HTML format'));
define('_JNEWS_VIEWS_FROM_HTML', ('Visningar (fråm html mail)'));
define('_JNEWS_SEND_IN_TEXT_FORMAT', ('Skicka i text format'));
define('_JNEWS_HTML_READ', ('HTML läst'));
define('_JNEWS_HTML_UNREAD', ('HTML oläst'));
define('_JNEWS_TEXT_ONLY_SENT', ('Endast Text'));

// Configuration panel
// main tabs
define('_JNEWS_MAIL_CONFIG', ('Mail'));
define('_JNEWS_LOGGING_CONFIG', ('Loggar & Status'));
define('_JNEWS_SUBSCRIBER_CONFIG', ('Prenumeranter'));
define('_JNEWS_AUTO_CONFIG', ('Cron'));
define('_JNEWS_MISC_CONFIG', ('Övrig'));
define('_JNEWS_MAIL_SETTINGS', ('Mail Inställningar'));
define('_JNEWS_MAILINGS_SETTINGS', ('Mail Inställningar'));
define('_JNEWS_SUBCRIBERS_SETTINGS', ('Prenumerant Inställningar'));
define('_JNEWS_CRON_SETTINGS', ('Cron Inställningar'));
define('_JNEWS_SENDING_SETTINGS', ('Sändnings Inställningar'));
define('_JNEWS_STATS_SETTINGS', ('Statistik Inställningar'));
define('_JNEWS_LOGS_SETTINGS', ('Logg Inställningar'));
define('_JNEWS_MISC_SETTINGS', ('Övriga Inställningar'));
// mail settings
define('_JNEWS_SEND_MAIL_FROM', ('Från E-post'));
define('_JNEWS_SEND_MAIL_NAME', ('Från Namn'));
define('_JNEWS_MAILSENDMETHOD', ('Mail metod'));
define('_JNEWS_SENDMAILPATH', ('Skicka mail sökväg'));
define('_JNEWS_SMTPHOST', ('SMTP värd'));
define('_JNEWS_SMTPAUTHREQUIRED', ('SMTP Autentificering krävs'));
define('_JNEWS_SMTPAUTHREQUIRED_TIPS', ('Välj ja om din SMTP server kräver autentificering'));
define('_JNEWS_SMTPUSERNAME', ('SMTP användarnamn'));
define('_JNEWS_SMTPUSERNAME_TIPS', ('Skriv in SMTP användarnamnet när din SMTP server kräver autentificering'));
define('_JNEWS_SMTPPASSWORD', ('SMTP lösenord'));
define('_JNEWS_SMTPPASSWORD_TIPS', ('Skriv in SMTP lösenord när din SMTP server kräver autentificering'));
define('_JNEWS_USE_EMBEDDED', ('Använd inbäddade bilder'));
define('_JNEWS_USE_EMBEDDED_TIPS', ('Välj ja om bilderna i bifogat innehålls objekt ska bäddas in i mailet för html meddelanden, eller nej för att använda dig av standardbild tagar som länkas till bilderna på hemsidan.'));
define('_JNEWS_UPLOAD_PATH', ('Uppladdning/bifogade filer sökväg'));
define('_JNEWS_UPLOAD_PATH_TIPS', ('Du kan specificera en uppladdningsmapp.<br />' .
		'Se till att mappen som du specificerade finns, annars skapa den.'));

// subscribers settings
define('_JNEWS_ALLOW_UNREG', ('Tillåt oregistrerade'));
define('_JNEWS_ALLOW_UNREG_TIPS', ('Välj Ja om du vill tillåta användare att prenumerera på listor utan att vara registrerade på hemsidan.'));
define('_JNEWS_REQ_CONFIRM', ('Kräver bekräftelse'));
define('_JNEWS_REQ_CONFIRM_TIPS', ('Välj ja om du kräver att oregistrerade prenumeranter ska bekräfta sin e-postadress.'));
define('_JNEWS_SUB_SETTINGS', ('Prenumerations Inställningar'));
define('_JNEWS_SUBMESSAGE', ('Prenumerations E-post'));
define('_JNEWS_SUBSCRIBE_LIST', ('Prenumerera på en lista'));

define('_JNEWS_USABLE_TAGS', ('Användbara taggar'));
define('_JNEWS_NAME_AND_CONFIRM', ('<b>{tag:confirm}</b> = Detta skapar en klickbar länk som prenumeranten kan bekräfta sin prenumeration. Detta  <strong>krävs</strong> för att jNews ska fungera korrekt.<br />'
.'<br />{tag:name} = Detta kommer att ersättas med namnet som prenumeranten uppgav, du skickar personlig e-post om du använder dig av detta.<br />'
.'<br />{tag:firstname} = Detta kommer att ersättas med FÖR namnet på prenumeranten, Första namnet DEFINERAS som första namnet som fylls i av prenumeranten.<br />'));
define('_JNEWS_CONFIRMFROMNAME', ('Bekräfta från namn'));
define('_JNEWS_CONFIRMFROMNAME_TIPS', ('Skriv in från namn som visas i bekräftelse listor.'));
define('_JNEWS_CONFIRMFROMEMAIL', ('Bekräfta från e-post'));
define('_JNEWS_CONFIRMFROMEMAIL_TIPS', ('Skriv in en e-postadress som visas i bekräftelse listor.'));
//define('_JNEWS_CONFIRMBOUNCE', ('Studsadress'));
//define('_JNEWS_CONFIRMBOUNCE_TIPS', ('Skriv in en studsadress som visas i bekräftelse listor.'));
define('_JNEWS_HTML_CONFIRM', ('HTML bekräftelse'));
define('_JNEWS_HTML_CONFIRM_TIPS', ('Välj ja om bekräftelse listor ska vara html om användaren tillåter html.'));
define('_JNEWS_TIME_ZONE_ASK', ('Fråga tidszon'));
define('_JNEWS_TIME_ZONE_TIPS', ('Välj ja om du vill fråga om användarnas tidszon.  De köade mailen kommer att skickas enligt turordningen baserat på vilken tidszon man befinner sig i'));

 // Cron Set up
define('_JNEWS_TIME_OFFSET_URL', ('klicka här för att ställa in offset i den globala konfigurationspanelen -> Lokal tabb'));
define('_JNEWS_TIME_OFFSET_TIPS', ('Ställ in din servers tid offset så det inspelade datumet och tiden är exakt'));
define('_JNEWS_TIME_OFFSET', ('Tid offset'));
define('_JNEWS_CRON_TITLE', ('Ställer in cron funktion'));
define('_JNEWS_CRON_DESC', ('<br />Genom att använda cron funktionen så kan du ställa in en automatisk uppgift för din hemsida!<br />' .
		'För att ställa in den så behöver du i din crontab kontrollpanel skriva följande kommando:<br />' .
		'<b>' . JNEWS_JPATH_LIVE . '/index.php?option=com_jnews&act=cron</b> ' .
		'<br /><br />Om du behöver hjälp att ställa in den eller har problem var god och konsultera vårat forum <a href="http://www.joobi.co" target="_blank">http://www.joobi.co</a>'));
// sending settings
define('_JNEWS_PAUSEX', ('Pausa x sekunder varje konfigurerad mängd av mail'));
define('_JNEWS_PAUSEX_TIPS', ('Skriv in antalet sekunder som jNews kommer att ge SMTP servern tiden att sända ut meddelanden innan den fortsätter med nästa konfigurerade mängd av meddelanden.'));
define('_JNEWS_EMAIL_BET_PAUSE', ('Mail mellan pausar'));
define('_JNEWS_EMAIL_BET_PAUSE_TIPS', ('Antalet mail att skicka innan den ska pausa.'));
define('_JNEWS_WAIT_USER_PAUSE', ('Vänta på användarinmatningsdata vid paus'));
define('_JNEWS_WAIT_USER_PAUSE_TIPS', ('Om skriptet ska vänta på användarinmatningsdata när paus sker med mailande.'));
define('_JNEWS_SCRIPT_TIMEOUT', ('Skript timeout'));
define('_JNEWS_SCRIPT_TIMEOUT_TIPS', ('Antalet minuter som skriptet ska köras.'));
// Stats settings
define('_JNEWS_ENABLE_READ_STATS', ('Aktivera läs statistik'));
define('_JNEWS_ENABLE_READ_STATS_TIPS', ('Välj ja om du vill logga antalet visningar. Denna teknik kan endast användas med html mailande'));
define('_JNEWS_LOG_VIEWSPERSUB', ('Logga visningar per prenumerant'));
define('_JNEWS_LOG_VIEWSPERSUB_TIPS', ('Välj ja om du vill logga antalet visningar per prenumerant. Denna teknik kan endast användas med html mailande'));
// Logs settings
define('_JNEWS_DETAILED', ('Detaljerade loggar'));
define('_JNEWS_SIMPLE', ('Förenklade loggar'));
define('_JNEWS_DIAPLAY_LOG', ('Visa loggar'));
define('_JNEWS_DISPLAY_LOG_TIPS', ('Välj ja om du vill visa loggar medans du skickar mail.'));
define('_JNEWS_SEND_PERF_DATA', ('Sänd ut prestanda'));
define('_JNEWS_SEND_PERF_DATA_TIPS', ('Välj ja om du vill tillåta jNews att sända ut ANONYMA rapporter om din konfiguration, antalet prenumeranter i en lista och tiden det tog att skicka ut mailen. Detta ger oss en idé om jNews prestandan och kommer att HJÄLPA OSS att förbättra jNews i framtida utvecklingar.'));
define('_JNEWS_SEND_AUTO_LOG', ('Skicka logg för auto-responder'));
define('_JNEWS_SEND_AUTO_LOG_TIPS', ('Välj ja om du vill skicka en mail logg varje gång tek kön behandlas.  VARNING: detta kan resultera i stor mängd mail.'));
define('_JNEWS_SEND_LOG', ('Skicka logg'));
define('_JNEWS_SEND_LOG_TIPS', ('Om en logg av mailandet ska e-postas till användarens e-postadress som skickade mailet.'));
define('_JNEWS_SEND_LOGDETAIL', ('Skicka logg detaljer'));
define('_JNEWS_SEND_LOGDETAIL_TIPS', ('Detaljerad inkluderar den lyckade eller felaktiga information för varje prenumerant och en överblick utav informationen. Skickar endast en enkel översikt.'));
define('_JNEWS_SEND_LOGCLOSED', ('Skicka logg om överföringen stängs'));
define('_JNEWS_SEND_LOGCLOSED_TIPS', (' Med detta val på användaren som skickade mailet så kommer den personen fortfarande få en rapport via e-post.'));
define('_JNEWS_SAVE_LOG', ('Spara logg'));
define('_JNEWS_SAVE_LOG_TIPS', ('Om en logg på mailen ska tas upp till loggfilen.'));
define('_JNEWS_SAVE_LOGDETAIL', ('Spara loggdetaljer'));
define('_JNEWS_SAVE_LOGDETAIL_TIPS', ('Detaljerad inkluderar den lyckade eller felaktiga information för varje prenumerant och en överblick utav informationen. Sparar endast en enkel översikt.'));
define('_JNEWS_SAVE_LOGFILE', ('Spara loggfil'));
define('_JNEWS_SAVE_LOGFILE_TIPS', ('Filen som logg informationen ska tas upp till. Denna fil kan bli riktigt stor.'));
define('_JNEWS_CLEAR_LOG', ('Rensa logg'));
define('_JNEWS_CLEAR_LOG_TIPS', ('Rensar loggfilen.'));

### control panel
define('_JNEWS_CP_LAST_QUEUE', ('Senast körda kö'));
define('_JNEWS_CP_TOTAL', ('Totalt'));
define('_JNEWS_MAILING_COPY', ('Mailen kopierad!'));

// Miscellaneous settings
define('_JNEWS_SHOW_GUIDE', ('Visa guide'));
define('_JNEWS_SHOW_GUIDE_TIPS', ('Visar guiden vid start för att hjälpa nya användare skapa ett nyhetsbrev, en auto-responder och att ställa in jNews ordentligt.'));
define('_JNEWS_AUTOS_ON', ('Använd Auto-respondrar'));
define('_JNEWS_AUTOS_ON_TIPS', ('Välj Nej om du inte vill använda Auto-respondrar, alla auto-responder val kommer att inaktiveras.'));
define('_JNEWS_NEWS_ON', ('Använd Nyhetsbrev'));
define('_JNEWS_NEWS_ON_TIPS', ('Välj Nej om du inte vill använda Nyhetsbrev, alla nyhetsbrevsval kommer att inaktiveras.'));
define('_JNEWS_SHOW_TIPS', ('Visa tips'));
define('_JNEWS_SHOW_TIPS_TIPS', ('Visa tipsen, för att hjälpa användare att använda jNews mer effektivt.'));
define('_JNEWS_SHOW_FOOTER', ('Visa sidfot'));
define('_JNEWS_SHOW_FOOTER_TIPS', ('Om sidfots copyrights noteringar ska visas.'));
define('_JNEWS_SHOW_LISTS', ('Visa listor på förstasidan'));
define('_JNEWS_SHOW_LISTS_TIPS', ('När användare inte är registrerade visa en lista på listor som dom kan prenumerera på med arkivknapp för nyhetsbrev eller ett login formulär så dom kan registrera sig.'));
define('_JNEWS_CONFIG_UPDATED', ('Konfigurations detaljerna har uppdaterats!'));
define('_JNEWS_UPDATE_URL', ('Uppdatera URL'));
define('_JNEWS_UPDATE_URL_WARNING', ('VARNING! Ändra inte på denna URL om du inte har blivit tillsagd av jNews tekniska team att göra så.<br />'));
define('_JNEWS_UPDATE_URL_TIPS', ('Som exempel: http://www.joobi.co/update/ (inkludera det avslutande slashen)'));

// module
define('_JNEWS_EMAIL_INVALID', ('E-posten som angavs är felaktig.'));
define('_JNEWS_REGISTER_REQUIRED', ('Var vänlig och registrera dig på hemsidan innan du kan anmäla dig som prenumerant.'));

// Access level box
define('_JNEWS_OWNER', ('Skapare av lista:'));
define('_JNEWS_ACCESS_LEVEL', ('Ställ in behörighetsnivå för listan'));
define('_JNEWS_ACCESS_LEVEL_OPTION', ('Behörighetsnivå Val'));
define('_JNEWS_USER_LEVEL_EDIT', ('Välj vilken användarnivå som tillåter redigering av mailen (antingen från förstasidan eller backend) '));

//  drop down options
define('_JNEWS_AUTO_DAY_CH1', ('Daglig'));
define('_JNEWS_AUTO_DAY_CH2', ('Daglig ingen helg'));
define('_JNEWS_AUTO_DAY_CH3', ('Varannan dag'));
define('_JNEWS_AUTO_DAY_CH4', ('Varannan dag ingen helg'));
define('_JNEWS_AUTO_DAY_CH5', ('Veckovis'));
define('_JNEWS_AUTO_DAY_CH6', ('Varannan vecka'));
define('_JNEWS_AUTO_DAY_CH7', ('Månadsvis'));
define('_JNEWS_AUTO_DAY_CH9', ('Årligt'));
define('_JNEWS_AUTO_OPTION_NONE', ('Nej'));
define('_JNEWS_AUTO_OPTION_NEW', ('Nya Användare'));
define('_JNEWS_AUTO_OPTION_ALL', ('Alla Användare'));

//
define('_JNEWS_UNSUB_MESSAGE', ('Prenumerera Ej E-post'));
define('_JNEWS_UNSUB_SETTINGS', ('Prenumerera Ej Inställningar'));
define('_JNEWS_AUTO_ADD_NEW_USERS', ('Auto Prenumerera Användare?'));

// Update and upgrade messages
define('_JNEWS_NO_UPDATES', ('Det finns förnärvarande inga uppdateringar tillgängliga.'));
define('_JNEWS_VERSION', ('jNews Version'));
define('_JNEWS_NEED_UPDATED', ('Filer som behöver uppdateras:'));
define('_JNEWS_NEED_ADDED', ('Filer som behöver läggas till:'));
define('_JNEWS_NEED_REMOVED', ('Filer som behöver tas bort:'));
define('_JNEWS_FILENAME', ('Filnamn:'));
define('_JNEWS_CURRENT_VERSION', ('Nuvarande version:'));
define('_JNEWS_NEWEST_VERSION', ('Senaste version:'));
define('_JNEWS_UPDATING', ('Uppdaterar'));
define('_JNEWS_UPDATE_UPDATED_SUCCESSFULLY', ('Filerna har uppdaterats.'));
define('_JNEWS_UPDATE_FAILED', ('Uppdatering misslyckades!'));
define('_JNEWS_ADDING', ('Lägger till'));
define('_JNEWS_ADDED_SUCCESSFULLY', ('Tillagda.'));
define('_JNEWS_ADDING_FAILED', ('Tilläggning misslyckades!'));
define('_JNEWS_REMOVING', ('Tar bort'));
define('_JNEWS_REMOVED_SUCCESSFULLY', ('Togs bort.'));
define('_JNEWS_REMOVING_FAILED', ('Borttagning misslyckades!'));
define('_JNEWS_INSTALL_DIFFERENT_VERSION', ('Installera en annan version'));
define('_JNEWS_CONTENT_ADD', ('Skapa innehåll'));
define('_JNEWS_UPGRADE_FROM', ('Importera data (nyhetsbrev och prenumeranter\' information) från '));
define('_JNEWS_UPGRADE_MESS', ('Det finns ingen risk för din existerande data. <br /> Denna process kommer importera data till jNews databasen.'));
define('_JNEWS_CONTINUE_SENDING', ('Fortsätt skicka'));

// jNews message
define('_JNEWS_UPGRADE1', ('Du kan enkelt importera dina användare och nyhetsbrev från '));
define('_JNEWS_UPGRADE2', (' till jNews i uppdateringspanelen.'));
define('_JNEWS_UPDATE_MESSAGE', ('En ny version av jNews finns tillgänglig! '));
define('_JNEWS_UPDATE_MESSAGE_LINK', ('Klicka här för att uppdatera!'));
define('_JNEWS_CRON_SETUP', ('För att autorespondrarna ska skickas så behöver du ställa in en cron uppgift.'));
define('_JNEWS_THANKYOU', ('Tack för att du valde jNews, Din kommunikationspartner!'));
define('_JNEWS_NO_SERVER', ('Uppdatering av Server är inte tillgänglig, var god och försök senare.'));
define('_JNEWS_MOD_PUB', ('jNews modulen är inte publicerad.'));
define('_JNEWS_MOD_PUB_LINK', ('Klicka här för att publicera den!'));
define('_JNEWS_IMPORT_SUCCESS', ('Importerades'));
define('_JNEWS_IMPORT_EXIST', ('Prenumeranten finns redan i databasen'));



// jNews Install
define('_JNEWS_INSTALL_CONFIG', ('jNews Konfiguration'));
define('_JNEWS_INSTALL_SUCCESS', ('Installerades'));
define('_JNEWS_INSTALL_ERROR', ('Installations Fel'));
define('_JNEWS_INSTALL_BOT', ('jNews Plugin (Bot)'));
define('_JNEWS_INSTALL_MODULE', ('jNews Modul'));
//Others
define('_JNEWS_JAVASCRIPT', ('!Varning! Javascript måste vara aktiverat för en fungerande operation.'));
define('_JNEWS_EXPORT_TEXT', ('Prenumeranterna som exporterades baseras på listan som du angav. <br />Exportera prenumeranter för lista'));
define('_JNEWS_IMPORT_TIPS', ('Importera prenumeranter. Informationen i filen behöver vara i följande format: <br />' .
		'Namn,e-post,mottaHTML(1/0),<span style="color: rgb(255, 0, 0);">bekräftad(1/0)</span>'));
define('_JNEWS_SUBCRIBER_EXIT', ('är redan en prenumerant'));
define('_JNEWS_GET_STARTED', ('Klicka här för att köra igång!'));

//News since 1.0.1
define('_JNEWS_WARNING_1011', ('Varning: 1011: Uppdatera kommer inte att fungera på grund av dina server restrektioner.'));
define('_JNEWS_SEND_MAIL_FROM_TIPS', ('Välj vilken e-postadress som ska visas som avsändare.'));
define('_JNEWS_SEND_MAIL_NAME_TIPS', ('Välj vilket namn som ska visas som avsändare.'));
define('_JNEWS_MAILSENDMETHOD_TIPS', ('Välj vilken mail som du vill ska användas: PHP mail funktion, <span>Sendmail</span> eller SMTP Server.'));
define('_JNEWS_SENDMAILPATH_TIPS', ('Detta är mappen till Mailservern'));
define('_JNEWS_LIST_T_TEMPLATE', ('Mall'));
define('_JNEWS_NO_MAILING_ENTERED', ('Inget mailande tillhandahålls'));
define('_JNEWS_NO_LIST_ENTERED', ('Ingen lista tillhandahålls'));
define('_JNEWS_SENT_MAILING', ('Skickade mail'));
define('_JNEWS_SELECT_FILE', ('Välj en fil att '));
define('_JNEWS_LIST_IMPORT', ('Kolla lista(or) som du vill att prenumeranter ska associeras med.'));
define('_JNEWS_PB_QUEUE', ('Prenumerant inlagd men problem att ansluta han/henne till lista(or). Kolla manuellt.'));
define('_JNEWS_UPDATE_MESS', (''));
define('_JNEWS_UPDATE_MESS1', ('Uppdatering rekommenderas Mycket!'));
define('_JNEWS_UPDATE_MESS2', ('Patch och små åtgärder.'));
define('_JNEWS_UPDATE_MESS3', ('Ny utgåva.'));
define('_JNEWS_UPDATE_MESS5', ('Joomla 1.5 behövs för att kunna uppdatera.'));
define('_JNEWS_UPDATE_IS_AVAIL', (' fins tillgänglig!'));
define('_JNEWS_NO_MAILING_SENT', ('Inga mail skickade!'));
define('_JNEWS_SHOW_LOGIN', ('Visa logga in formulär'));
define('_JNEWS_SHOW_LOGIN_TIPS', ('Välj Ja för att visa ett logga in formulär i förstaside jNews kontrollpanelen så att användare kan registrera sig på hemsidan.'));
define('_JNEWS_LISTS_EDITOR', ('Listans Beskrivnings Redigerare'));
define('_JNEWS_LISTS_EDITOR_TIPS', ('Välj Ja för att använda en HTML redigerare för att redigera listans beskrivningsfält.'));
define('_JNEWS_SUBCRIBERS_VIEW', ('Visa prenumeranter'));

//News since 1.0.2
define('_JNEWS_FRONTEND_SETTINGS', ('Förstaside Inställningar'));
define('_JNEWS_SHOW_LOGOUT', ('Visa logga ut knapp'));
define('_JNEWS_SHOW_LOGOUT_TIPS', ('Välj Ja för att visa en logga ut knapp På förstasidans jNews kontrollpanel.'));

//News since 1.0.3 CB integration
define('_JNEWS_CONFIG_INTEGRATION', ('Integration'));
define('_JNEWS_CB_INTEGRATION', ('Community Builder Integrering'));
define('_JNEWS_INSTALL_PLUGIN', ('Community Builder Plugin (jNews
Integrering) '));
define('_JNEWS_CB_PLUGIN_NOT_INSTALLED', ('jNews Plugin för Community Builder är ännu inte installerad!'));
define('_JNEWS_CB_PLUGIN', ('Listor vid registrering'));
define('_JNEWS_CB_PLUGIN_TIPS', ('Välj Ja för att visa maillistor i community builders registrerings formulär'));
define('_JNEWS_CB_LISTS', ('List ID:er'));
define('_JNEWS_CB_LISTS_TIPS', ('DETTA ÄR ETT OBLIGATORISKT FÄLT. Skriv in id nummer på listor som du vill att användare ska ha tillåtelse att prenumerera på separera med kommatecken,  (0 visa alla listor)'));
define('_JNEWS_CB_INTRO', ('Introduktionstext'));
define('_JNEWS_CB_INTRO_TIPS', ('En text som visas kommer att visas före listorna. LÄMNA TOMT FÖR ATT INTE VISA NÅGONTING. Använd cb_förtext för CSS layout.'));
define('_JNEWS_CB_SHOW_NAME', ('Visa Listnamn'));
define('_JNEWS_CB_SHOW_NAME_TIPS', ('Välj om namnet på listan ska visas efter introduktionen.'));
define('_JNEWS_CB_LIST_DEFAULT', ('Kolla lista som standard'));
define('_JNEWS_CB_LIST_DEFAULT_TIPS', ('Välj om du vill att kryssrutan för varje lista ska kollas som standard.'));
define('_JNEWS_CB_HTML_SHOW', ('Visa Mottag HTML'));
define('_JNEWS_CB_HTML_SHOW_TIPS', ('Ställ in till Ja för att tillåta användare att besluta om dom ska ha HTML e-post eller inte. Ställ in till Nej för att använda mottag html som standard.'));
define('_JNEWS_CB_HTML_DEFAULT', ('Standard Mottag HTML'));
define('_JNEWS_CB_HTML_DEFAULT_TIPS', ('Ställ in detta alternativ för att visa standard html mail konfiguration. Om Visa Mottag HTML är inställt till Nej så kommer detta val att vara standard.'));

// Since 1.0.4
define('_JNEWS_BACKUP_FAILED', ('Kunde inte göra en backup på filen! Filen ersattes inte.'));
define('_JNEWS_BACKUP_YOUR_FILES', ('De äldre versionsfilerna har backats upp till följande mapp:'));
define('_JNEWS_SERVER_LOCAL_TIME', ('Server lokaltid'));
define('_JNEWS_SHOW_ARCHIVE', ('Visa arkivknapp'));
define('_JNEWS_SHOW_ARCHIVE_TIPS', ('Välj Ja för att visa arkivknappen på förstasidan i Nyhetsbrevslistan'));
define('_JNEWS_LIST_OPT_TAG', ('Taggar'));
define('_JNEWS_LIST_OPT_IMG', ('Bilder'));
define('_JNEWS_LIST_OPT_CTT', ('Innehåll'));
define('_JNEWS_INPUT_NAME_TIPS', ('Fyll i ditt fullständiga namn (förnamnet först)'));
define('_JNEWS_IP_TIPS', 'IP of the subscriber' );
define('_JNEWS_INPUT_EMAIL_TIPS', ('Fyll i din e-postadress (Var noga med att detta är en giltig e-postadress om du vill mottaga våra nyhetsbrev.)'));
define('_JNEWS_RECEIVE_HTML_TIPS', ('Välj Ja om du vill mottaga HTML mail - Nej för att mottaga endast Text mail'));
define('_JNEWS_TIME_ZONE_ASK_TIPS', ('Specificera din tidszon.'));

// Since 1.0.5
define('_JNEWS_FILES', ('Filer'));
define('_JNEWS_FILES_UPLOAD', ('Ladda Upp'));
define('_JNEWS_MENU_UPLOAD_IMG', ('Ladda Upp Bilder'));
define('_JNEWS_TOO_LARGE', ('Filstorleken är för stor. Den tillåtna maximala storleken är'));
define('_JNEWS_MISSING_DIR', ('Destinations mappen existerar inte'));
define('_JNEWS_IS_NOT_DIR', ('Destinations mappen existerar inte eller är inte en ordinär fil.'));
define('_JNEWS_NO_WRITE_PERMS', ('Destinations mappen är skrivskyddad.'));
define('_JNEWS_NO_USER_FILE', ('Du har inte valt en fil att ladda upp.'));
define('_JNEWS_E_FAIL_MOVE', ('Omöjligt att flytta filen.'));
define('_JNEWS_FILE_EXISTS', ('Destinationsfilen finns redan.'));
define('_JNEWS_CANNOT_OVERWRITE', ('Destinationsfilen finns redan och kan därför inte skrivas över.'));
define('_JNEWS_NOT_ALLOWED_EXTENSION', ('Filändelsen är inte tillåten.'));
define('_JNEWS_PARTIAL', ('Filen laddades delvis bara upp.'));
define('_JNEWS_UPLOAD_ERROR', ('Uppladdningsfel:'));
define('_JNEWS_DEV_NO_DEF_FILE', ('Filen laddades delvis bara upp.'));

define('_JNEWS_CONTENTREP', ('{tag:subscriptions} = Detta kommer att ersättas med prenumerationslänkar.' .
		'Detta är <strong>nödvändigt</strong> för att jNews ska fungera korrekt.<br />' .
		'Om du placerar annat innehåll i denna ruta så kommer det att visas i alla mail som hänvisas till denna lista.' .
		' <br />Infoga ditt prenumerations meddelande i slutet.  jNews kommer automatiskt att lägga till en länk för prenumeranten att ändra sin information och en länk för att sluta prenumera från listan.'));

// since 1.0.6
define('_JNEWS_NOTIFICATION', ('Meddelande'));  // shortcut for Email notification
define('_JNEWS_NOTIFICATIONS', ('Meddelanden'));
define('_JNEWS_USE_SEF', ('SEF i mail'));
define('_JNEWS_USE_SEF_TIPS', ('Det är rekommenderat att du väljer Nej.  Men om du vill att URL,en ska inkluderas i din mail för att använda SEF välj då Ja.' .
		' <br /><b>Länkarna fungerar på samma sett oavsett val.  Nej kommer att försäkra dig att länkarna i mailen kommer alltid att fungera även om du ändrar din SEF.</b> '));
define('_JNEWS_ERR_NB', ('Fel #: ERR'));
define('_JNEWS_ERR_SETTINGS', ('Felhanterings inställningar'));
define('_JNEWS_ERR_SEND', ('Skicka felrapport'));
define('_JNEWS_ERR_SEND_TIPS', ('Om du vill att jNews ska bli en bättre produkt välj JA.  Detta kommer att sända oss en felrapport.  Så du behöver inte själv rapportera buggar längre ;-) <br /> <b>INGEN PRIVAT INFORMATION KOMMER ATT SKICKAS</b>.  Vi vet inte ens från vilken hemsida felet kommer ifrån. Vi skickar endast information om jNews, PHP inställningarna och SQL frågor. '));
define('_JNEWS_ERR_SHOW_TIPS', ('Välj Ja för att visa felnummer på skärmen.  Används oftast för att avbuggnings syfte. '));
define('_JNEWS_ERR_SHOW', ('Visa fel'));
define('_JNEWS_LIST_SHOW_UNSUBCRIBE', ('Visa prenumerera Inte länkar'));
define('_JNEWS_LIST_SHOW_UNSUBCRIBE_TIPS', ('Välj Ja för att visa prenumerera Inte länkar i botten av mailen för användare för möjligheten att ändra sina prenumerationer. <br /> Nej avaktivera footer och länkar.'));
define('_JNEWS_UPDATE_INSTALL', ('<span style="color: rgb(255, 0, 0);">VIKTIGT MEDDELANDE!</span> <br />Om du uppgraderar från en tidigare version av jNews installation så behöver du även uppgradera din databas struktur genom att klicka på följande knapp (Din data kommer fortfarande att vara fullständig)'));
define('_JNEWS_UPDATE_INSTALL_BTN', ('Uppgradera tabeller och konfiguration'));
define('_JNEWS_MAILING_MAX_TIME', ('Max kötid'));
define('_JNEWS_MAILING_MAX_TIME_TIPS', ('Definera den maximala tiden för varje mailutskick skickad av kön. Rekommenderat mellan 30 s och 2 min.'));

// virtuemart integration beta
define('_JNEWS_VM_INTEGRATION', ('VirtueMart Integrering'));
define('_JNEWS_VM_COUPON_NOTIF', ('Kupong meddelande ID'));
define('_JNEWS_VM_COUPON_NOTIF_TIPS', ('Specificera ID numret av mail som du vill använda för att skicka kuponger till dina köpare.'));
define('_JNEWS_VM_NEW_PRODUCT', ('Ny produkt meddelande ID'));
define('_JNEWS_VM_NEW_PRODUCT_TIPS', ('Specificera ID numret av mail som du vill använda för att skicka ny produkt meddelande.'));

// since 1.0.8
// create forms for subscriptions
define('_JNEWS_FORM_BUTTON', ('Skapa formulär'));
define('_JNEWS_FORM_COPY', ('HTML kod'));
define('_JNEWS_FORM_COPY_TIPS', ('Kopiera den generade HTML koden till din HTML sida.'));
define('_JNEWS_FORM_LIST_TIPS', ('Välj listan som du vill inkludera i formläret'));
// update messages
define('_JNEWS_UPDATE_MESS4', ('Det kan inte uppdateras automatiskt.'));
define('_JNEWS_WARNG_REMOTE_FILE', ('Ingen möjlighet att komma åt den fjärranvända filen.'));
define('_JNEWS_ERROR_FETCH', ('Fel vid hämtning av fil.'));

define('_JNEWS_CHECK', ('Kolla'));
define('_JNEWS_MORE_INFO', ('Mer info'));
define('_JNEWS_UPDATE_NEW', ('Uppdatera till en nyare version'));
define('_JNEWS_UPGRADE', ('Uppgradera till en högre produkt'));
define('_JNEWS_DOWNDATE', ('Återgå till föregående version'));
define('_JNEWS_DOWNGRADE', ('Tillbaka till standard produkten'));
define('_JNEWS_REQUIRE_JOOM', ('Behöver Joomla'));
define('_JNEWS_TRY_IT', ('Prova på!'));
define('_JNEWS_NEWER', ('Nyare'));
define('_JNEWS_OLDER', ('Äldre'));
define('_JNEWS_CURRENT', ('Nuvarande'));

// since 1.0.9
define('_JNEWS_CHECK_COMP', ('Prova någon annan komponent'));
define('_JNEWS_MENU_VIDEO', ('Video undervisning'));
define('_JNEWS_AUTO_SCHEDULE', ('Schema'));
define('_JNEWS_SCHEDULE_TITLE', ('Automatiska schemafunktions inställningar'));
define('_JNEWS_ISSUE_NB_TIPS', ('Utfärdar nummer generades automatiskt av systemet'));
define('_JNEWS_SEL_ALL', ('Alla mail'));
define('_JNEWS_SEL_ALL_SUB', ('Alla listor'));
define('_JNEWS_INTRO_ONLY_TIPS', ('Om du markerar denna ruta så kommer endast introduktionen av artikeln att sättas in i mailet med en läs mer länk för att se hela artikeln på din sida.'));
define('_JNEWS_TAGS_TITLE', ('Innehållstagg'));
define('_JNEWS_TAGS_TITLE_TIPS', ('Kopiera och klistra denna tagg i ditt mail där du vill ha innehållet placerat.'));
define('_JNEWS_PREVIEW_EMAIL_TEST', ('Markera emailadressen att skicka testet till'));
define('_JNEWS_PREVIEW_TITLE', ('Förhandsgranska'));
define('_JNEWS_AUTO_UPDATE', ('Nytt uppdaterings meddelande'));
define('_JNEWS_AUTO_UPDATE_TIPS', ('Välj Ja om du vill bli meddelad vid nya uppdateringar för din komponent. <br />VIKTIGT!! Visa tips behöver vara på för att denna funktion ska fungera.'));

// since 1.1.0
define('_JNEWS_LICENSE', ('Licens Information'));


// since 1.1.1
define('_JNEWS_NEW', ('Ny'));
define('_JNEWS_SCHEDULE_SETUP', ('För att autorespondrarna ska skickas så behöver du ställa in schemat i konfigurationen.'));
define('_JNEWS_SCHEDULER', ('Schema'));
define('_JNEWS_jnews_CRON_DESC', ('om du inte har tillgång till cron hanteraren på din hemsida, så kan du registrera dig för ett fritt jNews Cron konto hos:'));
define('_JNEWS_CRON_DOCUMENTATION', ('Du kan hitta ytterliggare information om att ställa in jNews Schemat vid följande url:'));
define('_JNEWS_CRON_DOC_URL', ('<a href="http://www.joobi.co/index.php?option=com_content&view=article&id=4249&catid=29&Itemid=72"
 target="_blank">http://www.joobi.co/index.php?option=com_content&Itemid=72&view=category&layout=blog&id=29&limit=60</a>'));
define( '_JNEWS_QUEUE_PROCESSED', ('Kö behandling lyckades...'));
define( '_JNEWS_ERROR_MOVING_UPLOAD', ('Fel vid flytt av importerad fil'));

//since 1.1.4
define( '_JNEWS_SCHEDULE_FREQUENCY', ('Schema frekvens'));
define( '_JNEWS_CRON_MAX_FREQ', ('Schemats maximala frekvens'));
define( '_JNEWS_CRON_MAX_FREQ_TIPS', ('Specificera den maximala frekvensen som schemat kan köra ( i minuter ).  Detta kommer att begränsa schemat även om cron hanteraren är uppsatt mer frekvent.'));
define( '_JNEWS_CRON_MAX_EMAIL', ('Maximala antalet mail per uppgift'));
define( '_JNEWS_CRON_MAX_EMAIL_TIPS', ('Specificera det maximala antalet mail sända per uppgift. If this is set to O the maximim emails per task will be 1'));
define( '_JNEWS_CRON_MINUTES', (' minuter'));
define( '_JNEWS_SHOW_SIGNATURE', ('Visa mailfooter'));
define( '_JNEWS_SHOW_SIGNATURE_TIPS', ('Oavsett om du vill eller inte vill promota jNews i footern av dina mail.'));
define( '_JNEWS_QUEUE_AUTO_PROCESSED', ('Auto-responder behandling lyckades...'));
define( '_JNEWS_QUEUE_NEWS_PROCESSED', ('Schemalagd nyhetsbrevsbehandling lyckades...'));
define( '_JNEWS_MENU_SYNC_USERS', ('Synkronisera Användare'));
define( '_JNEWS_SYNC_USERS_SUCCESS', ('Användar Synkroniseringen Lyckades!'));

// compatibility with Joomla 15
if (!defined('_BUTTON_LOGOUT')) define( '_BUTTON_LOGOUT', ('Logga Ut'));
if (!defined('_CMN_YES')) define( '_CMN_YES', ('Ja'));
if (!defined('_CMN_NO')) define( '_CMN_NO', ('Nej'));
if (!defined('_HI')) define( '_HI', ('Hej'));
if (!defined('_CMN_TOP')) define( '_CMN_TOP', ('Topp'));
if (!defined('_CMN_BOTTOM')) define( '_CMN_BOTTOM', ('Botten'));
//if (!defined('_BUTTON_LOGOUT')) define( '_BUTTON_LOGOUT', ('Logout'));

// For include title only or full article in content item tab in newsletter edit - p0stman911
define('_JNEWS_TITLE_ONLY_TIPS', ('Om du väljer detta så kommer endast titeln i artikeln att sättas in i mailet som en länk till den kompletta artikeln på din sida.'));
define('_JNEWS_TITLE_ONLY', ('Endast Titel'));
define('_JNEWS_FULL_ARTICLE_TIPS', ('Om du väljer detta så kommer hela artiklen att sättas in i mailet'));
define('_JNEWS_FULL_ARTICLE', ('Hel Artikel'));
define('_JNEWS_CONTENT_ITEM_SELECT_T', ('Välj ett innehållsobjekt att visas i meddelandet. <br />Kopiera och klistra <b>innehålls taggen</b> i mailet.  Du kan välja att ha hela texten, endast intro, eller endast titel med (0, 1, eller 2 var för sig). '));
define('_JNEWS_SUBSCRIBE_LIST2', ('Mail lista(or)'));

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
define('_JNEWS_AUTONEWS', ('Smart-Nyhetsbrev'));
define('_JNEWS_MENU_AUTONEWS', ('Smart-Nyhetsbrev'));
define('_JNEWS_AUTO_NEWS_OPTION', ('Smart-Nyhetsbrevs val'));
define('_JNEWS_AUTONEWS_FREQ', ('Nyhetsbrevs Frekvens'));
define('_JNEWS_AUTONEWS_FREQ_TIPS', ('Specificera frekvensen som du vill skicka smart-nyhetsbrevet.'));
define('_JNEWS_AUTONEWS_SECTION', ('Artikel Sektion'));
define('_JNEWS_AUTONEWS_SECTION_TIPS', ('Specificera sektionen som du vill välja artiklar ifrån.'));
define('_JNEWS_AUTONEWS_CAT', ('Artikel Kategori'));
define('_JNEWS_AUTONEWS_CAT_TIPS', ('Specificera kategorin som du vill välja artiklar ifrån (Alla för alla artiklar i den sektionen).'));
define('_JNEWS_SELECT_SECTION', ('Välj en sektion'));
define('_JNEWS_SELECT_CAT', ('Alla Kategorier'));
define('_JNEWS_AUTO_DAY_CH8', ('Kvartalsvis'));
define('_JNEWS_AUTONEWS_STARTDATE', ('Start datum'));
define('_JNEWS_AUTONEWS_STARTDATE_TIPS', ('Specificera datumet som du vill starta sändning av Smart Nyhetsbrev.'));
define('_JNEWS_AUTONEWS_TYPE', ('Innehålls återgivning'));// how we see the content which is included in the newsletter
define('_JNEWS_AUTONEWS_TYPE_TIPS', ('Hel Artikel: kommer att inkludera hela artikeln i nyhetsbrevet.<br />' .
		'Endast Intro: kommer endast att inkludera introduktionen av artikeln i nyhetsbrevet.<br/>' .
		'Endast Titel: kommer endast att inkludera titeln på artikeln i nyhetsbrevet.'));
define('_JNEWS_TAGS_AUTONEWS', ('[SMARTNYHETSBREV] = Detta kommer att ersättas med Smart-nyhetsbrevet.'));

//since 1.1.3
define('_JNEWS_MALING_EDIT_VIEW', ('Skapa / Visa Mail'));
define('_JNEWS_LICENSE_CONFIG', ('Licens'));
define('_JNEWS_ENTER_LICENSE', ('Fyll i licens'));
define('_JNEWS_ENTER_LICENSE_TIPS', ('Fyll i ditt licensnummer och tryck på spara.'));
define('_JNEWS_LICENSE_SETTING', ('Licensinställningar'));
define('_JNEWS_GOOD_LIC', ('Din licens är giltig.'));
define('_JNEWS_NOTSO_GOOD_LIC', ('Din licens är inte giltig: '));
define('_JNEWS_PLEASE_LIC', ('Kontakta jNews support för att uppgradera din licens ( license@joobi.co ).'));

define('_JNEWS_DESC_PLUS', 'jNews Plus är den första auto-responder sekvensen för Joomla CMS.  ' . _JNEWS_FEATURES );
define('_JNEWS_DESC_PRO', 'jNews PRO är det ultimata mailsystemet för Joomla CMS.  ' . _JNEWS_FEATURES );

//since 1.1.4
define('_JNEWS_ENTER_TOKEN', ('Fyll i bevis'));
define('_JNEWS_ENTER_TOKEN_TIPS', ('Var vänlig och fyll i ditt bevisnummer som du mottog via mail när du köpte jNews. '));
define('_JNEWS_jnews_SITE', ('jNews sidan:'));
define('_JNEWS_MY_SITE', ('Min sida:'));
define( '_JNEWS_LICENSE_FORM', ' ' .
 		'Klicka här för att fortsätta till licensformuläret.</a>');
define('_JNEWS_PLEASE_CLEAR_LICENSE', 'Töm licensfältet och prova på nytt igen.<br />  Om problemet kvarstår, ');
define( '_JNEWS_LICENSE_SUPPORT', 'Om du fortfarande har frågor, ' . _JNEWS_PLEASE_LIC );
define( '_JNEWS_LICENSE_TWO', 'du kan få din licensmanual genom att fylla i bevisnumret och sidans URL (som är belyst i grönt i toppen av denna sida) i Licensformuläret. '
			. _JNEWS_LICENSE_FORM . '<br /><br/>' . _JNEWS_LICENSE_SUPPORT );
define('_JNEWS_ENTER_TOKEN_PATIENCE', 'Efter att du sparat ditt bevis så kommer en licens att automatiskt genereras. ' .
		' Vanligtvis så är blir beviset validerat inom 2 minuter.  Men, i vissa fall så kan det ta upp till 15 minuter.<br />' .
		'<br />Återkom till denna kontrollpanel om ett par minuter.  <br /><br />' .
		'Om du inte mottagit en giltig licensnyckel inom 15 minuter, '. _JNEWS_LICENSE_TWO );
define( '_JNEWS_ENTER_NOT_YET', ('Ditt bevis har ännu inte blivit validerat.'));
define( '_JNEWS_UPDATE_CLICK_HERE', ('Besök <a href="http://www.joobi.co" target="_blank">www.joobi.co</a> för att ladda ner den senaste versionen.'));
//define( '_JNEWS_NOTIF_UPDATE', ('För att bli meddelad om nya uppdateringar skriv in din emailadress och klicka på prenumerera '));

define('_JNEWS_THINK_PLUS', ('Om du vill få ut mer av mailsystemet tänk då på Plus!'));
define('_JNEWS_THINK_PLUS_1', ('Auto-responder Sekvens'));
define('_JNEWS_THINK_PLUS_2', ('Schemalägg leveransen av ditt nyhetsbrev med ett fördefinerat datum'));
define('_JNEWS_THINK_PLUS_3', ('Ingen mer serverbegränsning'));
define('_JNEWS_THINK_PLUS_4', ('och mycket mer...'));


//since 1.2.2
define( '_JNEWS_LIST_ACCESS', ('List Åtkomst'));
define( '_JNEWS_INFO_LIST_ACCESS', ('Specificera vilken grupp av användare som kan se och prenumerera på denna lista'));
define( 'JNEWS_NO_LIST_PERM', ('Du har inte tillräcklig behörighet för att prenumerera på denna lista'));

//Archive Configuration
 define('_JNEWS_MENU_TAB_ARCHIVE', ('Arkivera'));
 define('_JNEWS_MENU_ARCHIVE_ALL', ('Arkivera Alla'));

//Archive Lists
 define('_JNEWS_FREQ_OPT_0', ('Inga'));
 define('_JNEWS_FREQ_OPT_1', ('Varje Vecka'));
 define('_JNEWS_FREQ_OPT_2', ('Varannan Vecka'));
 define('_JNEWS_FREQ_OPT_3', ('Varje Månad'));
 define('_JNEWS_FREQ_OPT_4', ('Varje Kvartal'));
 define('_JNEWS_FREQ_OPT_5', ('Varje År'));
 define('_JNEWS_FREQ_OPT_6', ('Annat'));

define('_JNEWS_DATE_OPT_1', ('Skapar datum'));
define('_JNEWS_DATE_OPT_2', ('Ändrings datum'));

define('_JNEWS_ARCHIVE_TITLE', ('Ställer in auto-arkiv frekvensen'));
define('_JNEWS_FREQ_TITLE', ('Arkiv frekvens'));
define('_JNEWS_FREQ_TOOL', ('Definera hur ofta som du vill att Arkiv Hanteraren ska arkivera din hemsidas innehåll.'));
define('_JNEWS_NB_DAYS', ('Antal dagar'));
define('_JNEWS_NB_DAYS_TOOL', ('Detta är endast för Annat alternativet! Specificera antalet dagar mellan varje arkivering.'));
define('_JNEWS_DATE_TITLE', ('Datumtyp'));
define('_JNEWS_DATE_TOOL', ('Definera om arkiveringen ska ske vis skapardatumet eller vid ändringsdatumet.'));

define('_JNEWS_MAINTENANCE_TAB', ('Underhållsinställningar'));
define('_JNEWS_MAINTENANCE_FREQ', ('Underhållsfrekvens'));
define( '_JNEWS_MAINTENANCE_FREQ_TIPS', ('Specificera frekvensen som du vill att underhållsrutinen ska köras.'));
define( '_JNEWS_CRON_DAYS', ('timme(ar)'));

define( '_JNEWS_LIST_NOT_AVAIL', ('Det finns ingen lista tillgänglig.'));
define( '_JNEWS_LIST_ADD_TAB', ('Skapa/Redigera'));

define( '_JNEWS_LIST_ACCESS_EDIT', ('Mail Skapa/Redigera Åtkomst'));
define( '_JNEWS_INFO_LIST_ACCESS_EDIT', ('Specificera vilken grupp av användare som kan redigera nya mail för denna lista'));
define( '_JNEWS_MAILING_NEW_FRONT', ('Skapa en Ny Mail'));

define('_JNEWS_AUTO_ARCHIVE', ('Auto-Arkiv'));
define('_JNEWS_MENU_ARCHIVE', ('Auto-Arkiv'));

//Extra tags:
define('_JNEWS_TAGS_ISSUE_NB', ('{tag:issuenb} = Detta kommer att ersättas av utgåvonumret på nyhetsbrevet.'));
define('_JNEWS_TAGS_DATE', ('{tag:date} = Detta kommer att ersättas av sändningsdatum.'));
define('_JNEWS_TAGS_CB', ('[CBTAG:{field_name}] = Detta kommer att ersättas av värdet som kommer från Community Builder fältet: ex. [CBTAG:firstname] '));
define( '_JNEWS_MAINTENANCE', ('Joobi Care'));


define('_JNEWS_THINK_PRO', ('När du har professionella önskemål, så använder du professionella komponenter!'));
define('_JNEWS_THINK_PRO_1', ('Smart-Nyhetsbrev'));
define('_JNEWS_THINK_PRO_2', ('Definera åtkomstnivå för din lista'));
define('_JNEWS_THINK_PRO_3', ('Definera vem som kan redigera/skapa mail'));
define('_JNEWS_THINK_PRO_4', ('Mera taggar: skapa ditt CB fält'));
define('_JNEWS_THINK_PRO_5', ('Joomla innehålls Auto-arkiv'));
define('_JNEWS_THINK_PRO_6', ('Databasoptimering'));

define('_JNEWS_LIC_NOT_YET', ('Din licens är ännu inte giltig.  Var vänlig och undersök licensfliken i konfigurationspanelen.'));
define('_JNEWS_PLEASE_LIC_GREEN', ('Var noga med att ange den gröna informationen vid toppen av fliken till vårat supportteam.'));

define('_JNEWS_FOLLOW_LINK', ('Skaffa Din Licens'));
define( '_JNEWS_FOLLOW_LINK_TWO', ('Du kan få din licens genom att fylla i bevisnumret och sidans URL (som belyses med grönt i toppen på denna sida) i Licensformuläret. '));
define( '_JNEWS_ENTER_TOKEN_TIPS2', (' Klicka sedan på Lägg till knappen i den övre högra menyn.'));
define( '_JNEWS_ENTER_LIC_NB', ('Fyll i Din Licens'));
define( '_JNEWS_UPGRADE_LICENSE', ('Uppgradera Din Licens'));
define( '_JNEWS_UPGRADE_LICENSE_TIPS', ('Om du mottagit ett bevis för uppgradering av din licens var då vänlig och fyll i den här, klicka på Lägg till och fortsätt till nummer <b>2</b> för att få ditt nya licensnummer.'));

define( '_JNEWS_MAIL_FORMAT', ('Kodformat'));
define( '_JNEWS_MAIL_FORMAT_TIPS', ('Vilket format vill du använda för att koda dina mail, Endast text eller MIME'));
define( '_JNEWS_jnews_CRON_DESC_ALT', ('Om du inte har tillgång till en cronjobbs hanteraren på din hemsida, så kan du använda den Fria jCron komponenten för att skapa ett cron jobb från din hemsida.'));

//since 1.3.1
define('_JNEWS_SHOW_AUTHOR', ('Visa Författarens Namn'));
define('_JNEWS_SHOW_AUTHOR_TIPS', ('Välj Ja om du vill infoga författarens namn när du lägger till en artikel till Mailen'));

//since 1.3.5
define('_JNEWS_REGWARN_NAME', ('Ange ditt namn.'));
define('_JNEWS_REGWARN_MAIL', ('Ange en giltig e-postadress.'));

//since 1.5.6
define('_JNEWS_ADDEMAILREDLINK_TIPS', ('Om du väljer Ja, så kommer e-postmeddelandet av användaren att infogas som en parameter i slutet av din omdirigerade URL (den omdirigerade länken till din modul eller till ett externt jNews formulär).<br/>Det kan vara användbart om du vill köra ett speciellt skript i din omdirigerade sida.'));
define('_JNEWS_ADDEMAILREDLINK', ('Infoga e-post till den omdirigerade länken'));

//since 1.6.3
define('_JNEWS_ITEMID', ('ObjektId'));
define('_JNEWS_ITEMID_TIPS', ('Detta ObjektId kommer att infogas till dina jNews länkar.'));

//since 1.6.5
define('_JNEWS_SHOW_JCALPRO', ('jCalPRO'));
define('_JNEWS_SHOW_JCALPRO_TIPS', ('Visa integrerings tabb för jCalPRO <br/>(endast om jCalPRO är installerad på din hemsida!)'));
define('_JNEWS_JCALTAGS_TITLE', ('jCalPRO Tagg:'));
define('_JNEWS_JCALTAGS_TITLE_TIPS', ('Kopiera och klistra in denna tagg i mailet mailing där du vill ha händelsen placerad.'));
define('_JNEWS_JCALTAGS_DESC', ('Beskrivning:'));
define('_JNEWS_JCALTAGS_DESC_TIPS', ('Välj Ja om du vill infoga beskrivning på händelsen'));
define('_JNEWS_JCALTAGS_START', ('Start datum:'));
define('_JNEWS_JCALTAGS_START_TIPS', ('Välj Ja om du vill infoga ett startdatum på händelsen'));
define('_JNEWS_JCALTAGS_READMORE', ('Läs mer:'));
define('_JNEWS_JCALTAGS_READMORE_TIPS', ('Välj Ja om du vill infoga en <b>läs mer länk</b> för denna händelse'));
define('_JNEWS_REDIRECTCONFIRMATION', ('Omdirigera URL'));
define('_JNEWS_REDIRECTCONFIRMATION_TIPS', ('Om du kräver ett bekräftelse e-postmeddelande, så kommer användaren att bli bekräftat och omdirigerad till denna URL om han/hon klickar på bekräftelselänken.'));

//since 2.0.0 compatibility with Joomla 1.5
if(!defined('_CMN_SAVE') and defined('CMN_SAVE')) define('_CMN_SAVE',CMN_SAVE);
if(!defined('_CMN_SAVE')) define('_CMN_SAVE','para');
if(!defined('_NO_ACCOUNT')) define('_NO_ACCOUNT','Inget konto ännu?');
if(!defined('_CREATE_ACCOUNT')) define('_CREATE_ACCOUNT','Registrera');
if(!defined('_NOT_AUTH')) define('_NOT_AUTH','Du har inte tillåtelse att se på den här källan.');

//since 3.0.0
define('_JNEWS_DISABLETOOLTIP','Disable Tooltip');
define('_JNEWS_DISABLETOOLTIP_TIPS', 'Disable the tooltip on the frontend');
define('_JNEWS_MINISENDMAIL', 'Use Mini SendMail');
define('_JNEWS_MINISENDMAIL_TIPS', 'If your server uses Mini SendMail, select this option to do not add the name of the user in the header of the e-mail');

//Since 3.1.5
define('_JNEWS_READMORE',('Read more...'));
define('_JNEWS_VIEWARCHIVE',('Click here'));

//since 4.0.0
define('_JNEWS_SHOW_JLINKS',('Link Tracking'));
define('_JNEWS_SHOW_JLINKS_TIPS',('Enables the integration with jLinks to be able to do link tracking for each links in the newsletter.'));

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
define('_JNEWS_NO_LISTS_AVAILABLE', 'No lists available for this type.');

//since 7.4.0
//define('_JNEWS_NO_LISTS_AVAILABLE', 'No lists available for this type.');
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



