<?php
defined('_JEXEC') or die('Restricted access');
### Copyright (c) 2006-2012 Joobi Limited. All rights reserved.
### license GNU GPLv3 , link http://www.joobi.co

/**
* <p>Croatian language file</p>
* @author Tanja Dragisic <tanja@05vizija.net>
* @version $Id: hrvatski.php 491 2008-11-12 22:56:07Z chris $
* @link http://www.05vizija.net
*/

#######    NOTE TO TRANSLATORS  #######
# If you wish to translate the language file to your own language, please feel free to do so
# We would apprecaite if you could send you translation to the specified email
# so that other people could benefit from your contribution
# If you feel that the file is too long feel free to do as much as you want and probably
# someone else will be happy to pick up were you stopped.
#  We did our bestt to organize the subject by order of priority so start at the top
# If you update your translation please send you updates to translation@acajoom.com
# IMPORTANT: make sure respect as much as posible the punctionation and spacing because
# sometimes the word constant are conbined...
# Don't ever remove a define as it will create an error in the code.
# when using apostrophy  '   add a back-slash before like this:  \'  otherwise it will create an error.
# sometimes you will see html tag in the define, please leave it the way it is.

# DONT FORGET if you want to be credited fro your work, make sure to change the credit
# with your name and email if you want people to contact you otherwise leave the email as it is.
# We will use that information to also include you into the About section of the component
# Thank you very much for your contribution translating in your language

### General ###
 //jnews Description
define('_JNEWS_DESC_CORE', 'jNews je alat za mailing liste, newslettere, auto-respondere, i follow up koji omogućava efikasnu komunikaciju s korisnicima.  ' .
		'jNews, Vaš komunikacijski partner!');
define('_JNEWS_DESC_GPL', 'jNews je alat za mailing liste, newslettere, auto-respondere, i follow up koji omogućava efikasnu komunikaciju s korisnicima.  ' .
		'jNews, Vaš komunikacijski partner!');
define('_JNEWS_FEATURES', 'jNews, vaš komunikacijski partner!');

// Type of lists
define('_JNEWS_NEWSLETTER', 'Newsletter');
define('_JNEWS_AUTORESP', 'Auto-responder');
define('_JNEWS_AUTORSS', 'Auto-RSS');
define('_JNEWS_ECARD', 'eRazglednica');
define('_JNEWS_POSTCARD', 'Razglednica');
define('_JNEWS_PERF', 'Rezultat');
define('_JNEWS_COUPON', 'Kupon');
define('_JNEWS_CRON', 'Cron Zadatak');
define('_JNEWS_MAILING', 'Skupno Pismo');
define('_JNEWS_LIST', 'Lista');

 //jnews Menu
define('_JNEWS_MENU_LIST', 'Liste');
define('_JNEWS_MENU_SUBSCRIBERS', 'Pretplatnici');
define('_JNEWS_MENU_NEWSLETTERS', 'Newsletteri');
define('_JNEWS_MENU_AUTOS', 'Auto-responderi');
define('_JNEWS_MENU_COUPONS', 'Kuponi');
define('_JNEWS_MENU_CRONS', 'Cron Zadaci');
define('_JNEWS_MENU_AUTORSS', 'Auto-RSS');
define('_JNEWS_MENU_ECARD', 'eRazglednice');
define('_JNEWS_MENU_POSTCARDS', 'Razglednice');
define('_JNEWS_MENU_PERFS', 'Rezultati');
define('_JNEWS_MENU_TAB_LIST', 'Liste');
define('_JNEWS_MENU_MAILING_TITLE', 'Skupna Pisma');
define('_JNEWS_MENU_MAILING' , 'Skupna Pisma za ');
define('_JNEWS_MENU_STATS', 'Statistika');
define('_JNEWS_MENU_STATS_FOR', 'Statistika za ');
define('_JNEWS_MENU_CONF', 'Konfiguracija');
define('_JNEWS_MENU_UPDATE', 'Import');
define('_JNEWS_MENU_ABOUT', 'O jNews');
define('_JNEWS_MENU_LEARN', 'Obrazovni Centar');
define('_JNEWS_MENU_MEDIA', 'Media Menadžer');
define('_JNEWS_MENU_HELP', 'Pomoć');
define('_JNEWS_MENU_CPANEL', 'Kontr.Ploča');
define('_JNEWS_MENU_IMPORT', 'Import');
define('_JNEWS_MENU_EXPORT', 'Export');
define('_JNEWS_MENU_SUB_ALL', 'Pretplati sve');
define('_JNEWS_MENU_UNSUB_ALL', 'Odjava pretplata');
define('_JNEWS_MENU_VIEW_ARCHIVE', 'Arhiva');
define('_JNEWS_MENU_PREVIEW', 'Pregled');
define('_JNEWS_MENU_SEND', 'Pošalji');
define('_JNEWS_MENU_SEND_TEST', 'Pošalji Test Email');
define('_JNEWS_MENU_SEND_QUEUE', 'Obradi red čekanja');
define('_JNEWS_MENU_VIEW', 'Pregled');
define('_JNEWS_MENU_COPY', 'Kopiraj');
define('_JNEWS_MENU_VIEW_STATS' , 'Pregled statistike');
define('_JNEWS_MENU_CRTL_PANEL' , ' Kontrolna Ploča');
define('_JNEWS_MENU_LIST_NEW' , ' Kreiraj listu');
define('_JNEWS_MENU_LIST_EDIT' , ' Uredi listu');
define('_JNEWS_MENU_BACK', 'Natrag');
define('_JNEWS_MENU_INSTALL', 'Instalacija');
define('_JNEWS_MENU_TAB_SUM', 'Sažetak');
define('_JNEWS_STATUS' , 'Status');

// messages
define('_JNEWS_ERROR' , ' Došlo je do greške! ');
define('_JNEWS_SUB_ACCESS' , 'Prava pristupa');
define('_JNEWS_DESC_CREDITS', 'Zasluge');
define('_JNEWS_DESC_INFO', 'Informacije');
define('_JNEWS_DESC_HOME', 'Naslovnica');
define('_JNEWS_DESC_MAILING', 'Mailing lista');
define('_JNEWS_DESC_SUBSCRIBERS', 'Pretplatnici');
define('_JNEWS_PUBLISHED','Objavljeno');
define('_JNEWS_UNPUBLISHED','Neobjavljeno');
define('_JNEWS_DELETE','Izbriši');
define('_JNEWS_FILTER','Filter');
define('_JNEWS_UPDATE','Ažuriranje');
define('_JNEWS_SAVE','Spremi');
define('_JNEWS_CANCEL','Odustani');
define('_JNEWS_NAME','Ime');
define('_JNEWS_EMAIL','E-mail');
define('_JNEWS_SELECT','Odaberi');
define('_JNEWS_ALL','Sve');
define('_JNEWS_SEND_A', 'Pošalji ');
define('_JNEWS_SUCCESS_DELETED', ' uspješno izbrisano');
define('_JNEWS_LIST_ADDED', 'Lista uspješno kreirana');
define('_JNEWS_LIST_COPY', 'Lista uspješno kopirana');
define('_JNEWS_LIST_UPDATED', 'Lista uspješno ažurirana');
define('_JNEWS_MAILING_SAVED', 'Skupno pismo uspješno spremljeno.');
define('_JNEWS_UPDATED_SUCCESSFULLY', 'uspješno ažurirano.');

### Subscribers information ###
//subscribe and unsubscribe info
define('_JNEWS_SUB_INFO', 'Informacije o pretplatniku');
define('_JNEWS_VERIFY_INFO', 'Molimo vas da potvrdite link kojeg ste poslali, nedostaju neke informacije.');
define('_JNEWS_INPUT_NAME', 'Ime');
define('_JNEWS_INPUT_EMAIL', 'Email');
define('_JNEWS_RECEIVE_HTML', 'Primati HTML?');
define('_JNEWS_TIME_ZONE', 'Vremenska zona');
define('_JNEWS_BLACK_LIST', 'Crna lista');
define('_JNEWS_REGISTRATION_DATE', 'Datum registracije korisnika');
define('_JNEWS_USER_ID', 'ID korisnika');
define('_JNEWS_DESCRIPTION', 'Opis');
define('_JNEWS_ACCOUNT_CONFIRMED', 'Vaš korisnički račun je aktiviran.');
define('_JNEWS_SUB_SUBSCRIBER', 'Pretplatnik');
define('_JNEWS_SUB_PUBLISHER', 'Izdavač');
define('_JNEWS_SUB_ADMIN', 'Administrator');
define('_JNEWS_REGISTERED', 'Registrirani');
define('_JNEWS_SUBSCRIPTIONS', 'Vaša Pretplata');
define('_JNEWS_SEND_UNSUBCRIBE', 'Pošalji poruku za odjavu pretplate');
define('_JNEWS_SEND_UNSUBCRIBE_TIPS', 'Odaberite Da za slanje poruke kojom potvrđujete odjavu pretplate.');
define('_JNEWS_SUBSCRIBE_SUBJECT_MESS', 'Molimo vas da potvrdite vašu pretplatu');
define('_JNEWS_UNSUBSCRIBE_SUBJECT_MESS', 'Potvrda odjave pretplate');
define('_JNEWS_DEFAULT_SUBSCRIBE_MESS', 'Pozrav {tag:name},<br />' .
		'Potrebno je da učinite još jedan korak kako bi se pretplatili na našu listu.  Molimo vas da kliknete na slijedeći link kako bi potvrdili vašu pretplatu.' .
		'<br /><br />{tag:confirm}<br /><br />Za dodatna pitanja kontaktirajte webmastera.');
define('_JNEWS_DEFAULT_UNSUBSCRIBE_MESS', 'Ovim emailom potvrđujemo da ste odjavili vašu pretplatu na našu listu.  Žao nam je što ste se odlučili na ovaj korak. Ako poželite ponovno aktivirati pretplatu na našu listu, uvijek to možete učiniti na našim web stranicama.  Ako imate bilo kakvih dodatnih pitanja, slobodno kontaktirajte našeg webmastera.');

// jNews subscribers
define('_JNEWS_SIGNUP_DATE', 'Datum prijave');
define('_JNEWS_CONFIRMED', 'Potvrđeno');
define('_JNEWS_SUBSCRIB', 'Pretplata');
define('_JNEWS_HTML', 'HTML Skupna pisma');
define('_JNEWS_RESULTS', 'Rezultati');
define('_JNEWS_SEL_LIST', 'Odaberite listu');
define('_JNEWS_SEL_LIST_TYPE', '- Odaberite vrstu liste -');
define('_JNEWS_SUSCRIB_LIST', 'Lista svih pretplatnika');
define('_JNEWS_SUSCRIB_LIST_UNIQUE', 'Pretplatnici za : ');
define('_JNEWS_NO_SUSCRIBERS', 'Za ovu listu nema pretplatnika.');
define('_JNEWS_COMFIRM_SUBSCRIPTION', 'Poslan vam je emali potvrde.  Molimo vas da provjerite svoj email i kliknete na predviđeni link.<br />' .
		'Vaša pretplata bit će aktivirana nakon što potvrdite vašu email adresu.');
define('_JNEWS_SUCCESS_ADD_LIST', 'Uspješno ste upisani na naš popis.');


 // Subcription info
define('_JNEWS_CONFIRM_LINK', 'Kliknite ovdje za potvrdu vaše pretplate');
define('_JNEWS_UNSUBSCRIBE_LINK', 'Kliknite ovdje za odjavu vaše pretplate');
define('_JNEWS_UNSUBSCRIBE_MESS', 'Vaša email adresa izbrisana je s našeg popisa');

define('_JNEWS_QUEUE_SENT_SUCCESS' , 'Sva predviđena skupna pisma uspješno su poslana.');
define('_JNEWS_MALING_VIEW', 'Pregledajte sva skupna pisma');
define('_JNEWS_UNSUBSCRIBE_MESSAGE', 'Zaista želite odjaviti vašu pretplatu za ovu listu?');
define('_JNEWS_MOD_SUBSCRIBE', 'Pretplata');
define('_JNEWS_SUBSCRIBE', 'Pretplata');
define('_JNEWS_UNSUBSCRIBE', 'Odjava pretplate');
define('_JNEWS_VIEW_ARCHIVE', 'Pregledajte arhivu');
define('_JNEWS_SUBSCRIPTION_OR', ' ili kliknite ovdje za ažuriranje vaših informacija');
define('_JNEWS_EMAIL_ALREADY_REGISTERED', 'Ova email adresa već je registrirana.');
define('_JNEWS_SUBSCRIBER_DELETED', 'Pretplatnik je uspješno izbrisan.');


### UserPanel ###
 //User Menu
define('_JNEWS_UCP_USER_PANEL', 'Korisnička Kontrolna Ploča');
define('_JNEWS_UCP_USER_MENU', 'Korisnički Izbornik');
define('_JNEWS_UCP_USER_CONTACT', 'Moje Pretplate');
 //jNews Cron Menu
define('_JNEWS_UCP_CRON_MENU', 'Upravljanje Cron zadacima');
define('_JNEWS_UCP_CRON_NEW_MENU', 'Novi Cron');
define('_JNEWS_UCP_CRON_LIST_MENU', 'Lista mojih Cronova');
 //jNews Coupon Menu
define('_JNEWS_UCP_COUPON_MENU', 'Upravljanje Kuponima');
define('_JNEWS_UCP_COUPON_LIST_MENU', 'Lista Kupona');
define('_JNEWS_UCP_COUPON_ADD_MENU', 'Dodaj Kupon');

### lists ###
// Tabs
define('_JNEWS_LIST_T_GENERAL', 'Opis');
define('_JNEWS_LIST_T_LAYOUT', 'Izgled');
define('_JNEWS_LIST_T_SUBSCRIPTION', 'Pretplata');
define('_JNEWS_LIST_T_SENDER', 'Informacije o pošiljatelju');

define('_JNEWS_LIST_TYPE', 'Vrsta Liste');
define('_JNEWS_LIST_NAME', 'Naziv Liste');
define('_JNEWS_LIST_ISSUE', 'Izdanje #');
define('_JNEWS_LIST_DATE', 'Datum Slanja');
define('_JNEWS_LIST_SUB', 'Predmet Pisma');
define('_JNEWS_ATTACHED_FILES', 'Datoteke u privitku');
define('_JNEWS_SELECT_LIST', 'Odaberite listu za uređivanje!');

// Auto Responder box
define('_JNEWS_AUTORESP_ON', 'Vrsta Liste');
define('_JNEWS_AUTO_RESP_OPTION', 'Opcije Auto-respondera');
define('_JNEWS_AUTO_RESP_FREQ', 'Pretplatnici mogu odabrati učestalost');
define('_JNEWS_AUTO_DELAY', 'Odgoda (u danima)');
define('_JNEWS_AUTO_DAY_MIN', 'Minimalna učestalost');
define('_JNEWS_AUTO_DAY_MAX', 'Maximalna učestalost');
define('_JNEWS_FOLLOW_UP', 'Odredite follow up auto-responder');
define('_JNEWS_AUTO_RESP_TIME', 'Pretplatnici mogu odabrati vrijeme');
define('_JNEWS_LIST_SENDER', 'Pošiljatelj Liste');

define('_JNEWS_LIST_DESC', 'Opis Liste');
define('_JNEWS_LAYOUT', 'Izgled');
define('_JNEWS_SENDER_NAME', 'Ime pošiljatelja');
define('_JNEWS_SENDER_EMAIL', 'Email pošiljatelja');
define('_JNEWS_SENDER_BOUNCE', 'Bounce adresa pošiljatelja');
define('_JNEWS_LIST_DELAY', 'Odgoda');
define('_JNEWS_HTML_MAILING', 'HTML pisma?');
define('_JNEWS_HTML_MAILING_DESC', '(ako ovo izmjenite, morat će te spremiti izmjene i vratiti se u ovaj prozor kako bi vidjeli izmjene.)');
define('_JNEWS_HIDE_FROM_FRONTEND', 'Sakriti od Frontenda?');
define('_JNEWS_SELECT_IMPORT_FILE', 'Odaberite datoteku za import');;
define('_JNEWS_IMPORT_FINISHED', 'Import završen');
define('_JNEWS_DELETION_OFFILE', 'Brisanje datoteke');
define('_JNEWS_MANUALLY_DELETE', 'nije uspjelo, morate ju ručno izbrisati');
define('_JNEWS_CANNOT_WRITE_DIR', 'Direktorij nije otvoren za zapisivanje');
define('_JNEWS_NOT_PUBLISHED', 'Pismo nije poslano, lista nije objavljena.');

//  List info box
define('_JNEWS_INFO_LIST_PUB', 'Kliknite Da za objavljivanje liste');
define('_JNEWS_INFO_LIST_NAME', 'Ovdje upišite naziv vaše liste. Ovu listu moći će te identificirati putem ovog imena.');
define('_JNEWS_INFO_LIST_DESC', 'Ovdje upišite kratki opis vaše liste. Ovaj opis bit će vidljiv posjetiteljima vaših stranica.');
define('_JNEWS_INFO_LIST_SENDER_NAME', 'Upišite ime pošiljatelja ovog pisma. Ovo ime bit će vidljivo pretplatnicima kad prime poruke od ove liste.');
define('_JNEWS_INFO_LIST_SENDER_EMAIL', 'Upišite email adresu s koje će poruka biti poslana.');
define('_JNEWS_INFO_LIST_SENDER_BOUNCED', 'Upišite email adresu na koju korisnici mogu odgovoriti. Preporuča se da to bude email adresa identična adresi pošiljatelja, jer će spam filteri dati vašoj poruci višu spam ocjenu ako su ove adrese različite.');
define('_JNEWS_INFO_LIST_AUTORESP', 'Odaberite vrstu pisma za ovu listu. <br />' .
		'Newsletter: normalan newsletter<br />' .
		'Auto-responder: auto-responder je lista koja se automatski šalje u regularnim intervalima.');
define('_JNEWS_INFO_LIST_FREQUENCY', 'Omogućite korisnicima da odaberu kako često će primati listu.  Ova opcija daje korisnicima veću fleksibilnost.');
define('_JNEWS_INFO_LIST_TIME', 'Dozvolite korisnicima da odaberu željeno vrijeme dana u koje će primati listu.');
define('_JNEWS_INFO_LIST_MIN_DAY', 'Definirajte minimalnu učestalost koju korisnik može odabrati za primanje liste');
define('_JNEWS_INFO_LIST_DELAY', 'Odredite odgodu između ovog i prethodnog auto-respondera.');
define('_JNEWS_INFO_LIST_DATE', 'Odredite datum kad će se objaviti lista vijesti, ako želite odgoditi objavljivanje. <br /> FORMAT : YYYY-MM-DD HH:MM:SS');
define('_JNEWS_INFO_LIST_MAX_DAY', 'Definirajte maximalnu učestalost koju korisnik može odabrati za primanje liste');
define('_JNEWS_INFO_LIST_LAYOUT', 'Ovdje upišite izgled vašeg skupnog pisma ove liste. Ovdje možete upisati bilo koji izgled skupnog pisma.');
define('_JNEWS_INFO_LIST_SUB_MESS', 'Ova poruka poslat će se pretplatnicima kad se prvi put registriraju za pretplatu. Ovdje možete upisati bilo koji tekst te poruke.');
define('_JNEWS_INFO_LIST_UNSUB_MESS', 'Ova poruka poslat će se pretplatniku kad odjavi pretplatu. Ovdje možete upisati bilo koju poruku.');
define('_JNEWS_INFO_LIST_HTML', 'Označite kućicu ako želite poslati HTML skupna pisma. Pretplatnici će prilikom pretplate na HTML listu moći odlučiti žele li primiti HTML pismo, ili samo tekst poruku.');
define('_JNEWS_INFO_LIST_HIDDEN', 'Kliknite Da ako želite listu sakriti od Frontenda, korisnici se neće moći pretplatiti na nju, ali vi će te i dalje moći slati skupna pisma.');
define('_JNEWS_INFO_LIST_JNEWS_AUTO_SUB', 'Želite li automatski pretplatiti korisnike na ovu listu?<br /><B>Novi korisnici:</B> registrirat će svakog novog korisnika na vašem sajtu.<br /><B>Svi korisnici:</B> registrirat će sve registrirane korisnike u vašoj bazi podataka.<br />(obe opcije podržavaju Community Builder)');
define('_JNEWS_INFO_LIST_ACC_LEVEL', 'Odaberite stupanj pristupa u Frontendu. Skupna pisma bit će prikazana ili skrivena od korisničkih grupa koje nemaju pravo pristupa listi, te se oni stoga neće moći pretplatiti za listu.');
define('_JNEWS_INFO_LIST_ACC_USER_ID', 'Odaberite stupanj pristupa korisničke grupe kojoj želite dozvoliti uređivanje liste. Ova korisnička grupa i sve iznad nje moći će uređivati i slati skupno pismo, bilo iz Frontenda ili Backenda.');
define('_JNEWS_INFO_LIST_FOLLOW_UP', 'Ako želite da auto-responder prijeđe u novi auto-responder nakon što dosegne posljednju poruku, ovdje možete odrediti taj slijedeći auto-responder.');
define('_JNEWS_INFO_LIST_JNEWS_OWNER', 'Ovo je ID osobe koja je kreirala listu.');
define('_JNEWS_INFO_LIST_WARNING', '   Ova posljednja opcija dostupna je samo jednom, prilikom kreiranja liste.');
define('_JNEWS_INFO_LIST_SUBJET', ' Predmet Skupnog pisma.  Ovo je predmet emaila kojeg će pretplatnik primiti.');
define('_JNEWS_INFO_MAILING_CONTENT', 'Ovo je glavni dio emaila kojeg želite poslati.');
define('_JNEWS_INFO_MAILING_NOHTML', 'Ovdje upišite glavni dio emaila kojeg želite poslati pretplatnicima koji su odabrali da ne žele primati HTML mailove. <BR/> NAPOMENA: ako ostavite prazno, jNews će automatski pretvoriti HTML tekst u samo tekst.');
define('_JNEWS_INFO_MAILING_VISIBLE', 'Kliknite Da za prikazivanje Skupnog pisma u Frontendu.');
define('_JNEWS_INSERT_CONTENT', 'Umetni postojeći sadržaj');

// Coupons
define('_JNEWS_SEND_COUPON_SUCCESS', 'Kupon je uspješno poslan!');
define('_JNEWS_CHOOSE_COUPON', 'Odaberite kupon');
define('_JNEWS_TO_USER', ' ovom korisniku');

### Cron options
//drop down frequency(CRON)
define('_JNEWS_FREQ_CH1', 'Svaki sat');
define('_JNEWS_FREQ_CH2', 'Svakih 6 sati');
define('_JNEWS_FREQ_CH3', 'Svakih 12 sati');
define('_JNEWS_FREQ_CH4', 'Dnevno');
define('_JNEWS_FREQ_CH5', 'Tjedno');
define('_JNEWS_FREQ_CH6', 'Mjesečno');
define('_JNEWS_FREQ_NONE', 'Ne');
define('_JNEWS_FREQ_NEW', 'Novi korisnici');
define('_JNEWS_FREQ_ALL', 'Svi korisnici');

//Label CRON form
define('_JNEWS_LABEL_FREQ', 'jNews Cron?');
define('_JNEWS_LABEL_FREQ_TIPS', 'Kliknite Da ako želite ovo koristiti za jNews Cron, kliknite Ne ako želite koristiti drugi cron zadatak.<br />' .
		'Ako kliknete Da, ne morate odrediti Cron Adresu, ona će biti automatski dodana.');
define('_JNEWS_SITE_URL' , 'URL vašeg sajta');
define('_JNEWS_CRON_FREQUENCY' , 'Cron učestalost');
define('_JNEWS_STARTDATE_FREQ' , 'Datum početka');
define('_JNEWS_LABELDATE_FREQ' , 'Odredite datum');
define('_JNEWS_LABELTIME_FREQ' , 'Odredite vrijeme');
define('_JNEWS_CRON_URL', 'Cron URL');
define('_JNEWS_CRON_FREQ', 'Učestalost');
define('_JNEWS_TITLE_CRONLIST', 'Cron Lista');
define('_JNEWS_NEW_LIST', 'Kreiraj novu listu');

//title CRON form
define('_JNEWS_TITLE_FREQ', 'Uredi Cron');
define('_JNEWS_CRON_SITE_URL', 'Upišite valjani URL sajta, započnite s http://');

### Mailings ###
define('_JNEWS_MAILING_ALL', 'Sva Skupna Pisma');
define('_JNEWS_EDIT_A', 'Uredi ');
define('_JNEWS_SELCT_MAILING', 'Za dodavanje novog skupnog pisma odaberite listu iz padajućeg izbornika.');
define('_JNEWS_VISIBLE_FRONT', 'Vidljivo u Frontendu');

// mailer
define('_JNEWS_SUBJECT', 'Predmet');
define('_JNEWS_CONTENT', 'Sadržaj');
define('_JNEWS_NAMEREP', '{tag:name} = Ovo će biti zamijenjeno imenom pretplatnika koje je on prijavio. Ako koristite ovu opciju slat će te osobne emailove.<br />');
define('_JNEWS_FIRST_NAME_REP', '{tag:firstname} = Ovo će biti zamijenjeno osobnim imenom kojeg je pretplatnik prijavio.<br />');
define('_JNEWS_NONHTML', 'Ne-html verzija');
define('_JNEWS_ATTACHMENTS', 'Privitci');
define('_JNEWS_SELECT_MULTIPLE', 'Držite control (ili command) za odabir više privitaka.<br />' .
		'Datoteke prikazane u ovom popisu privitaka nalaze se u mapi privitaka, ovu lokaciju možete izmijeniti u postavkama Konfiguracije.');
define('_JNEWS_CONTENT_ITEM', 'Članak');
define('_JNEWS_SENDING_EMAIL', 'Slanje emaila');
define('_JNEWS_MESSAGE_NOT', 'Poruka nije poslana');
define('_JNEWS_MAILER_ERROR', 'Mailer greška');
define('_JNEWS_MESSAGE_SENT_SUCCESSFULLY', 'Poruka uspješno poslana');
define('_JNEWS_SENDING_TOOK', 'Za slanje ovog pisma trebalo je');
define('_JNEWS_SECONDS', 'sekundi');
define('_JNEWS_NO_ADDRESS_ENTERED', 'Nije upisana email adresa ili pretplatnik');
define('_JNEWS_CHANGE_SUBSCRIPTIONS', 'Promjeni');
define('_JNEWS_CHANGE_EMAIL_SUBSCRIPTION', 'Promjenite vašu pretplatu');
define('_JNEWS_WHICH_EMAIL_TEST', 'Odredite email adresu na koju će se poslati test ili odaberite Pregled');
define('_JNEWS_SEND_IN_HTML', 'Poslati u HTML (za html skupna pisma)?');
define('_JNEWS_VISIBLE', 'Vidljivo');
define('_JNEWS_INTRO_ONLY', 'Samo uvod');

// stats
define('_JNEWS_GLOBALSTATS', 'Globalna statistika');
define('_JNEWS_DETAILED_STATS', 'Detaljna statistika');
define('_JNEWS_MAILING_LIST_DETAILS', 'Detalji liste');
define('_JNEWS_SEND_IN_HTML_FORMAT', 'Pošalji u HTML formatu');
define('_JNEWS_VIEWS_FROM_HTML', 'Pregleda (iz html mailova)');
define('_JNEWS_SEND_IN_TEXT_FORMAT', 'Pošalji u tekst formatu');
define('_JNEWS_HTML_READ', 'HTML pročitan');
define('_JNEWS_HTML_UNREAD', 'HTML nepročitan');
define('_JNEWS_TEXT_ONLY_SENT', 'Samo Tekst');

// Configuration panel
// main tabs
define('_JNEWS_MAIL_CONFIG', 'Mail');
define('_JNEWS_LOGGING_CONFIG', 'Logovi & Statistika');
define('_JNEWS_SUBSCRIBER_CONFIG', 'Pretplatnici');
define('_JNEWS_MISC_CONFIG', 'Razno');
define('_JNEWS_MAIL_SETTINGS', 'Mail Postavke');
define('_JNEWS_MAILINGS_SETTINGS', 'Postavke Mailova');
define('_JNEWS_SUBCRIBERS_SETTINGS', 'Postavke Pretplatnika');
define('_JNEWS_CRON_SETTINGS', 'Cron Postavke');
define('_JNEWS_SENDING_SETTINGS', 'Postavke Slanja');
define('_JNEWS_STATS_SETTINGS', 'Postavke Statistike');
define('_JNEWS_LOGS_SETTINGS', 'Postavke Logova');
define('_JNEWS_MISC_SETTINGS', 'Razne Postavke');
// mail settings
define('_JNEWS_SEND_MAIL_FROM', 'Od Email');
define('_JNEWS_SEND_MAIL_NAME', 'Od Ime');
define('_JNEWS_MAILSENDMETHOD', 'Mailer metoda');
define('_JNEWS_SENDMAILPATH', 'Sendmail putanja');
define('_JNEWS_SMTPHOST', 'SMTP host');
define('_JNEWS_SMTPAUTHREQUIRED', 'SMTP Autorizacija obvezna');
define('_JNEWS_SMTPAUTHREQUIRED_TIPS', 'Odaberite Da ako vaš SMTP server zahtijeva autorizaciju');
define('_JNEWS_SMTPUSERNAME', 'SMTP korisničko ime');
define('_JNEWS_SMTPUSERNAME_TIPS', 'Upišite SMTP korisničko ime ako vaš SMTP server zahtijeva autorizaciju');
define('_JNEWS_SMTPPASSWORD', 'SMTP šifra');
define('_JNEWS_SMTPPASSWORD_TIPS', 'Upišite SMTP šifru ako vaš SMTP server zahtijeva autorizaciju');
define('_JNEWS_USE_EMBEDDED', 'Koristiti umetnute slike');
define('_JNEWS_USE_EMBEDDED_TIPS', 'Odaberite Da ako će slike u pridruženim sadržajima biti umetnute u email kod html poruka, ili Ne ako će se koristiti standardni tagovi za slike koji povezuju na slike na sajtu.');
define('_JNEWS_UPLOAD_PATH', 'Upload/privitci putanja');
define('_JNEWS_UPLOAD_PATH_TIPS', 'Možete odrediti upload direktorij.<br />' .
		'Pripazite da taj direktorij postoji, ili ga kreirajte.');

// subscribers settings
define('_JNEWS_ALLOW_UNREG', 'Dozvoli neregistriranima');
define('_JNEWS_ALLOW_UNREG_TIPS', 'Odaberite Da ako želite dozvoliti neregistriranim korisnicima da se pretplate na liste bez registracije na sajtu.');
define('_JNEWS_REQ_CONFIRM', 'Obvezna potvrda');
define('_JNEWS_REQ_CONFIRM_TIPS', 'Odaberite Da ako želite da neregistrirani pretplatnici moraju potvrditi svoju email adresu.');
define('_JNEWS_SUB_SETTINGS', 'Postavke Pretplate');
define('_JNEWS_SUBMESSAGE', 'Email Pretplate');
define('_JNEWS_SUBSCRIBE_LIST', 'Pretplati se za listu');

define('_JNEWS_USABLE_TAGS', 'Primjenjivi tagovi');
define('_JNEWS_NAME_AND_CONFIRM', '<b>{tag:confirm}</b> = Ovo kreira link na kojeg pretplatnik može kliknuti da potvrdi svoju pretplatu. Ovo je <strong>obvezno</strong> ako želite da jNews ispravno funkcionira.<br />'
.'<br />{tag:name} = Ovo će biti zamijenjeno imenom kojeg je pretplatnik prijavio, kad koristite ovu opciju, slat će te osobne email poruke.<br />'
.'<br />{tag:firstname} = Ovo će biti zamijenjeno imenom pretplatnika, to je prvo ime koje je pretplatnik upisao tijekom pretplate.<br />');
define('_JNEWS_CONFIRMFROMNAME', 'Potvrda Od Ime');
define('_JNEWS_CONFIRMFROMNAME_TIPS', 'Upišite ime pošiljatelja koje će se prikazati na listi potvrda.');
define('_JNEWS_CONFIRMFROMEMAIL', 'Potvrda Od Email');
define('_JNEWS_CONFIRMFROMEMAIL_TIPS', 'Upišite email adresu koja će se prikazivati na listi potvrda.');
//define('_JNEWS_CONFIRMBOUNCE', 'Bounce Adresa');
//define('_JNEWS_CONFIRMBOUNCE_TIPS', 'Upišite bounce adresu koja će se prikazivati na listi potvrda.');
define('_JNEWS_HTML_CONFIRM', 'HTML Potvrda');
define('_JNEWS_HTML_CONFIRM_TIPS', 'Odaberite Da ako će liste potvrde biti u HTML, ako korisnik dozvoljava HTML poruke.');
define('_JNEWS_TIME_ZONE_ASK', 'Vremenska Zona');
define('_JNEWS_TIME_ZONE_TIPS', 'Odaberite Da ako želite korisnika pitati o njegovoj vremenskoj zoni. Mailovi koji čekaju na slanje slat će se temeljem vremenske zone, gdje je to primjenjivo');

 // Cron Set up
 define('_JNEWS_AUTO_CONFIG', 'Cron');
define('_JNEWS_TIME_OFFSET_URL', 'kliknite ovdje da bi odredili pomak u Globalnoj Konfiguraciji -> kartica za Lokalizaciju');
define('_JNEWS_TIME_OFFSET_TIPS', 'Odredite pomak vašeg servera kako bi zabilježen datum i vrijeme bili točni');
define('_JNEWS_TIME_OFFSET', 'Vremenski Pomak');
define('_JNEWS_CRON_DESC','<br />Korištenjem cron funkcije možete postaviti automatske zadatke za vaš Joomla sajt!<br />' .
		'Da bi ste ih postavili, morate u vašoj Kontrolnoj Ploči, u cron karticu dodati slijedeću komandu:<br />' .
		'<b>' . JNEWS_JPATH_LIVE . '/index.php?option=com_jnews&act=cron</b> ' .
		'<br /><br />Ako trebate pomoć u postavljanju crona ili imate problema s njime, posjetite naš forum na <a href="http://www.acajoom.com" target="_blank">http://www.acajoom.com</a>');
// sending settings
define('_JNEWS_PAUSEX', 'Pauziraj x sekundi za svaku konfiguriranu količinu emailova');
define('_JNEWS_PAUSEX_TIPS', 'Upišite broj sekundi koje će jNews dati SMTP serveru za slanje poruka, prije nastavljanja slanja slijedeće konfigurirane količine poruka.');
define('_JNEWS_EMAIL_BET_PAUSE', 'Emailovi između pauzi');
define('_JNEWS_EMAIL_BET_PAUSE_TIPS', 'Broj emailova koji će se slati prije pauze.');
define('_JNEWS_WAIT_USER_PAUSE', 'Čekaj unos korisnika pri pauzi');
define('_JNEWS_WAIT_USER_PAUSE_TIPS', 'Da li će skripta čekati na unos korisnika kad se pauzira između dvije skupine poruka.');
define('_JNEWS_SCRIPT_TIMEOUT', 'Istek Skripte');
define('_JNEWS_SCRIPT_TIMEOUT_TIPS', 'Broj minuta za procesuiranje skripte (0 za neograničeno).');
// Stats settings
define('_JNEWS_ENABLE_READ_STATS', 'Uključi statistiku čitanja');
define('_JNEWS_ENABLE_READ_STATS_TIPS', 'Odaberite Da ako želite zabilježiti broj čitanja. Ovu tehniku možete koristiti samo za html mailove');
define('_JNEWS_LOG_VIEWSPERSUB', 'Zabilježi čitanja po pretplatniku');
define('_JNEWS_LOG_VIEWSPERSUB_TIPS', 'Odaberite Da ako želite bilježiti broj čitanja po pojedinom pretplatniku. Ovu tehniku možete koristiti samo za html mailove');
// Logs settings
define('_JNEWS_DETAILED', 'Detaljni Logovi');
define('_JNEWS_SIMPLE', 'Jednostavni Logovi');
define('_JNEWS_DIAPLAY_LOG', 'Prikazati Logove');
define('_JNEWS_DISPLAY_LOG_TIPS', 'Odaberite Da ako želite prikazati logove dok se šalju skupna pisma.');
define('_JNEWS_SEND_PERF_DATA', 'Poslati Učinkovitost');
define('_JNEWS_SEND_PERF_DATA_TIPS', 'Odaberite Da ako želite dozvoliti jNews da šalje ANONIMNA izvješća o vašoj konfiguraciji, broju pretplatnika na liste, i vrijeme koje je trebalo za slanje poruke. Ovo će na pomoći da saznamo više o jNews učinkovitosti i POMOĆI ĆE NAM da usavršimo njegov rad u budućim verzijama.');
define('_JNEWS_SEND_AUTO_LOG', 'Poslati log za auto-responder');
define('_JNEWS_SEND_AUTO_LOG_TIPS', 'Odaberite Da ako želite slati email log svaki put kad se procesuira slanje mailova.  UPOZORENJE: ovo može dovesti do velikog broja mailova.');
define('_JNEWS_SEND_LOG', 'Poslati Log');
define('_JNEWS_SEND_LOG_TIPS', 'Da li će se na email adresu korisniku koji je poslao mailove poslati log tog slanja.');
define('_JNEWS_SEND_LOGDETAIL', 'Poslati Detalje Loga');
define('_JNEWS_SEND_LOGDETAIL_TIPS', 'Detaljan log uključuje informacije o uspješnom ili nesupješnom slanju maila za svakog korisnika. Jednostavan log šalje samo pregled informacija.');
define('_JNEWS_SEND_LOGCLOSED', 'Poslati log uz zatvorenu vezu');
define('_JNEWS_SEND_LOGCLOSED_TIPS', 'S ovom opcijom korisnik koji je poslao mailove ipak će primiti izvješće putem maila.');
define('_JNEWS_SAVE_LOG', 'Spremiti Log');
define('_JNEWS_SAVE_LOG_TIPS', 'Da li će se log slanja mailova dodati log datoteci.');
define('_JNEWS_SAVE_LOGDETAIL', 'Spremiti Log Detalje');
define('_JNEWS_SAVE_LOGDETAIL_TIPS', 'Detaljan log uključuje informacije o uspješnom ili nesupješnom slanju maila za svakog korisnika. Jednostavan log šalje samo pregled informacija.');
define('_JNEWS_SAVE_LOGFILE', 'Spremiti Log Datoteku');
define('_JNEWS_SAVE_LOGFILE_TIPS', 'Datoteka kojoj će se dodati log informacije. Ova datoteka bi mogla postati vrlo velika.');
define('_JNEWS_CLEAR_LOG', 'Očistiti Log');
define('_JNEWS_CLEAR_LOG_TIPS', 'Očisti log datoteku.');

### control panel
define('_JNEWS_CP_LAST_QUEUE', 'Posljednje uspješno slanje');
define('_JNEWS_CP_TOTAL', 'Ukupno');
define('_JNEWS_MAILING_COPY', 'Skupno pismo uspješno kopirano!');

// Miscellaneous settings
define('_JNEWS_SHOW_GUIDE', 'Prikazati Upute');
define('_JNEWS_SHOW_GUIDE_TIPS', 'Prikazati upute novim korisnicima koje će im pomoći da kreiraju newsletter i auto-responder, i da ispravno postave jNews.');
define('_JNEWS_AUTOS_ON', 'Koristiti Auto-respondere');
define('_JNEWS_AUTOS_ON_TIPS', 'Odaberite Ne ako ne želite koristiti Auto-respondere, sve auto-responder opcije bit će deaktivirane.');
define('_JNEWS_NEWS_ON', 'Koristiti Newslettere');
define('_JNEWS_NEWS_ON_TIPS', 'Odaberite Ne ako ne želite koristiti Newslettere, sve newsletter opcije bit će deaktivirane.');
define('_JNEWS_SHOW_TIPS', 'Prikazati Savjete');
define('_JNEWS_SHOW_TIPS_TIPS', 'Prikazati savjete koji će korisnicima pomoći da efikasno koriste jNews.');
define('_JNEWS_SHOW_FOOTER', 'Prikazati Footer');
define('_JNEWS_SHOW_FOOTER_TIPS', 'Da li će se prikazivati footer copyright obavijest.');
define('_JNEWS_SHOW_LISTS', 'Prikazati liste u Frontendu');
define('_JNEWS_SHOW_LISTS_TIPS', 'Prikazati neregistriranim korisnicima popis svih listi na koje se mogu pretplatiti, s dugmetom za arhivu newslettera, ili samo obrazac za prijavu kako bi se mogli registrirati.');
define('_JNEWS_CONFIG_UPDATED', 'Konfiguracija je ažurirana!');
define('_JNEWS_UPDATE_URL', 'Ažuriraj URL');
define('_JNEWS_UPDATE_URL_WARNING', 'UPOZORENJE! Ne mijenjajte ovaj URL, osim ako to od vas ne zatraži jNews tehnički tim.<br />');
define('_JNEWS_UPDATE_URL_TIPS', 'Na primjer: http://www.acajoom.com/update/ (dodati krajnju nakošenu crtu)');

// module
define('_JNEWS_EMAIL_INVALID', 'Upisani email nije valjan.');
define('_JNEWS_REGISTER_REQUIRED', 'Molimo vas da se prije prijave za listu prvo registrirate na našim stranicama.');

// Access level box
define('_JNEWS_OWNER', 'Kreator liste:');
define('_JNEWS_ACCESS_LEVEL', 'Odredite stupanj pristupa ovoj listi');
define('_JNEWS_ACCESS_LEVEL_OPTION', 'Opcije stupnja pristupa');
define('_JNEWS_USER_LEVEL_EDIT', 'Odredite koja će grupa korisnika moći uređivati skupna pisma (bilo iz Frontenda ili Backenda) ');

//  drop down options
define('_JNEWS_AUTO_DAY_CH1', 'Dnevno');
define('_JNEWS_AUTO_DAY_CH2', 'Dnevno bez vikenda');
define('_JNEWS_AUTO_DAY_CH3', 'Svaki drugi dan');
define('_JNEWS_AUTO_DAY_CH4', 'Svaki drugi dan bez vikenda');
define('_JNEWS_AUTO_DAY_CH5', 'Tjedno');
define('_JNEWS_AUTO_DAY_CH6', 'Svaka 2 tjedna');
define('_JNEWS_AUTO_DAY_CH7', 'Mjesečno');
define('_JNEWS_AUTO_DAY_CH9', 'Godišnje');
define('_JNEWS_AUTO_OPTION_NONE', 'Ne');
define('_JNEWS_AUTO_OPTION_NEW', 'Novi Korisnici');
define('_JNEWS_AUTO_OPTION_ALL', 'Svi Korisnici');

//
define('_JNEWS_UNSUB_MESSAGE', 'Email za odjavu pretplate');
define('_JNEWS_UNSUB_SETTINGS', 'Postavke odjave pretplate');
define('_JNEWS_AUTO_ADD_NEW_USERS', 'Auto Pretplata Korisnika?');

// Update and upgrade messages
define('_JNEWS_NO_UPDATES', 'Trenutno nema dostupnih novih verzija.');
define('_JNEWS_VERSION', 'jNews Verzija');
define('_JNEWS_NEED_UPDATED', 'Datoteke koje treba ažurirati:');
define('_JNEWS_NEED_ADDED', 'Datoteke koje treba dodati:');
define('_JNEWS_NEED_REMOVED', 'Datoteke koje treba izbrisati:');
define('_JNEWS_FILENAME', 'Naziv datoteke:');
define('_JNEWS_CURRENT_VERSION', 'Trenutna verzija:');
define('_JNEWS_NEWEST_VERSION', 'Najnovija verzija:');
define('_JNEWS_UPDATING', 'Ažuriranje');
define('_JNEWS_UPDATE_UPDATED_SUCCESSFULLY', 'Datoteke su uspješno ažurirane.');
define('_JNEWS_UPDATE_FAILED', 'Ažuriranje neuspješno!');
define('_JNEWS_ADDING', 'Dodavanje');
define('_JNEWS_ADDED_SUCCESSFULLY', 'Uspješno dodano.');
define('_JNEWS_ADDING_FAILED', 'Dodavanje neuspješno!');
define('_JNEWS_REMOVING', 'Brisanje');
define('_JNEWS_REMOVED_SUCCESSFULLY', 'Uspješno izbrisano.');
define('_JNEWS_REMOVING_FAILED', 'Brisanje neuspješno!');
define('_JNEWS_INSTALL_DIFFERENT_VERSION', 'Instalacija drugačije verzije');
define('_JNEWS_CONTENT_ADD', 'Dodaj sadržaj');
define('_JNEWS_UPGRADE_FROM', 'Import podataka (newslettera i pretplatnika) iz ');
define('_JNEWS_UPGRADE_MESS', 'Nema rizika za vaše postojeće podatke. <br /> Ovaj postupak će jednostavno importirati podatke u jNews bazu podataka.');
define('_JNEWS_CONTINUE_SENDING', 'Nastavi slati');

// jNews message
define('_JNEWS_UPGRADE1', 'Možete vrlo jednostavno importirati vaše korisnike i newslettere iz ');
define('_JNEWS_UPGRADE2', ' u jNews, putem opcije Ažuriranje.');
define('_JNEWS_UPDATE_MESSAGE', 'Dostupna je nova jNews verzija! ');
define('_JNEWS_UPDATE_MESSAGE_LINK', 'Kliknite ovdje za ažuriranje!');
define('_JNEWS_THANKYOU', 'Hvala vam što ste odabrali jNews, vašeg komunikacijskog partnera!');
define('_JNEWS_NO_SERVER', 'Server za ažuriranje nije dostupan, pokušajte ponovno malo kasnije.');
define('_JNEWS_MOD_PUB', 'jNews modul nije objavljen.');
define('_JNEWS_MOD_PUB_LINK', 'Kliknite ovdje za njegovo objavljivanje!');
define('_JNEWS_IMPORT_SUCCESS', 'uspješno importirano');
define('_JNEWS_IMPORT_EXIST', 'pretplatnik je već u bazi podataka');

// jNews Install
define('_JNEWS_INSTALL_CONFIG', 'jNews Konfiguracija');
define('_JNEWS_INSTALL_SUCCESS', 'Instalacija uspješna');
define('_JNEWS_INSTALL_ERROR', 'Greška u instalaciji');
define('_JNEWS_INSTALL_BOT', 'jNews Plugin (Bot)');
define('_JNEWS_INSTALL_MODULE', 'jNews Modul');
//Others
define('_JNEWS_JAVASCRIPT','!Upozorenje! Javascript treba biti uključen za ispravno funkcioniranje.');
define('_JNEWS_EXPORT_TEXT','Export pretplatnika temelji se na listi koju ste odabrali. <br />Export pretplatnika za listu');
define('_JNEWS_IMPORT_TIPS','Import pretplatnika. Informacije u datoteci trebaju biti u slijedećem formatu: <br />' .
		'Name,email,receiveHTML(1/0),<span style="color: rgb(255, 0, 0);">confirmed(1/0)</span>');
define('_JNEWS_SUBCRIBER_EXIT', 'već je pretplatnik');
define('_JNEWS_GET_STARTED', 'Kliknite ovdje za početak!');

//News since 1.0.1
define('_JNEWS_WARNING_1011','Upozorenje: 1011: Ažuriranje nije moguće zbog ograničenja vašeg servera.');
define('_JNEWS_SEND_MAIL_FROM_TIPS', 'Odaberite email adresu koja će se prikazati kao pošiljatelj.');
define('_JNEWS_SEND_MAIL_NAME_TIPS', 'Odaberite ime koje će se prikazatu kao pošiljatelj.');
define('_JNEWS_MAILSENDMETHOD_TIPS', 'Odaberite koji mailer želite koristiti: PHP mail function, <span>Sendmail</span> ili SMTP Server.');
define('_JNEWS_SENDMAILPATH_TIPS', 'Ovo je direktorij Mail servera');
define('_JNEWS_LIST_T_TEMPLATE', 'Predložak');
define('_JNEWS_NO_MAILING_ENTERED', 'Nije odabrano skupno pismo');
define('_JNEWS_NO_LIST_ENTERED', 'Nije odabrana lista');
define('_JNEWS_SENT_MAILING' , 'Poslana skupna pisma');
define('_JNEWS_SELECT_FILE', 'Odaberite datoteku za ');
define('_JNEWS_LIST_IMPORT', 'Označite listu(e) s kojim će se pretplatnik povezati.');
define('_JNEWS_PB_QUEUE', 'Pretplatnik je dodan ali postoji problem u njegovom povezivanju s listom. Molimo provjerite ručno.');
define('_JNEWS_UPDATE_MESS' , '');
define('_JNEWS_UPDATE_MESS1' , 'Preporuča se ažuriranje!');
define('_JNEWS_UPDATE_MESS2' , 'Zakrpa i mali popravci.');
define('_JNEWS_UPDATE_MESS3' , 'Novo izdanje.');
define('_JNEWS_UPDATE_MESS5' , 'Potrebno Joomla 1.5 ažuriranje.');
define('_JNEWS_UPDATE_IS_AVAIL' , ' dostupno!');
define('_JNEWS_NO_MAILING_SENT', 'Skupno pismo nije poslano!');
define('_JNEWS_SHOW_LOGIN', 'Prikazati obrazac za prijavu');
define('_JNEWS_SHOW_LOGIN_TIPS', 'Odaberite Da ako želite prikazati obrazac za prijavu u Frontendu jNews Kontrolne Ploče, kako bi se korisnici mogli registrirati na sajtu.');
define('_JNEWS_LISTS_EDITOR', 'Editor opisa liste');
define('_JNEWS_LISTS_EDITOR_TIPS', 'Odaberite Da ako želite koristiti HTML editor za uređivanje polja opisa liste.');
define('_JNEWS_SUBCRIBERS_VIEW', 'Pogledaj pretplatnike');

//News since 1.0.2
define('_JNEWS_FRONTEND_SETTINGS' , 'Frontend Postavke' );
define('_JNEWS_SHOW_LOGOUT', 'Prikazati dugme za odjavu');
define('_JNEWS_SHOW_LOGOUT_TIPS', 'Odaberite Da ako u jNews kontrolnoj ploči u Frontendu želite prikazivati dugme za odjavu.');

//News since 1.0.3 CB integration
define('_JNEWS_CONFIG_INTEGRATION', 'Integracija');
define('_JNEWS_CB_INTEGRATION', 'Community Builder Integracija');
define('_JNEWS_INSTALL_PLUGIN', 'Community Builder Plugin (jNews Integracija) ');
define('_JNEWS_CB_PLUGIN_NOT_INSTALLED', 'jNews Plugin za Community Builder nije instaliran!');
define('_JNEWS_CB_PLUGIN', 'Liste prilikom registracije');
define('_JNEWS_CB_PLUGIN_TIPS', 'Odaberite Da ako želite prikazati mailing liste u Community Builder obrascu za registraciju');
define('_JNEWS_CB_LISTS', 'List ID');
define('_JNEWS_CB_LISTS_TIPS', 'OVO JE OBVEZNO POLJE. Upišite ID-eve lista na koje će se korisnici moći pretplatiti, ID odvojite zarezom ,  (0 prikazuje sve liste)');
define('_JNEWS_CB_INTRO', 'Tekst uvoda');
define('_JNEWS_CB_INTRO_TIPS', 'Tekst koji će se prikazivati prije popisa. OSTAVITE PRAZNO AKO NIŠTA NE ŽELITE PRIKAZATI.  Tekst i izgled možete urediti pomoću HTML tagova.');
define('_JNEWS_CB_SHOW_NAME', 'Prikazati naziv liste');
define('_JNEWS_CB_SHOW_NAME_TIPS', 'Odaberite da li nakon uvoda prikazati ili ne prikazati naziv liste.');
define('_JNEWS_CB_LIST_DEFAULT', 'Standarna check lista');
define('_JNEWS_CB_LIST_DEFAULT_TIPS', 'Odaberite da li želite da se kućica za odabir liste automatski prikazuje kao označena.');
define('_JNEWS_CB_HTML_SHOW', 'Prikazati Primaj HTML');
define('_JNEWS_CB_HTML_SHOW_TIPS', 'Odaberite Da ako korisnicima želite dozvoliti da odlučuju da li žele primati HTML mailove. Odaberite Ne ako želite da svi primaju html.');
define('_JNEWS_CB_HTML_DEFAULT', 'Standardni Primaj HTML');
define('_JNEWS_CB_HTML_DEFAULT_TIPS', 'Odaberite ovu opciju za prikazivanje standardne html mailing konfiguracije. Ako je Prikazati Primaj HTML postavljeno na Ne, ovo će biti standardna opcija.');

// Since 1.0.4
define('_JNEWS_BACKUP_FAILED', 'Backup datoteke nije uspio! Datoteka nije zamijenjena.');
define('_JNEWS_BACKUP_YOUR_FILES', 'Backup stare verzije datoteka napravljen je u slijedećem direktoriju:');
define('_JNEWS_SERVER_LOCAL_TIME', 'Lokalno vrijeme servera');
define('_JNEWS_SHOW_ARCHIVE', 'Prikazati dugme Arhiva');
define('_JNEWS_SHOW_ARCHIVE_TIPS', 'Odaberite Da za prikazivanje dugmeta Arhiva u Frontendu popisa newslettera');
define('_JNEWS_LIST_OPT_TAG', 'Tagovi');
define('_JNEWS_LIST_OPT_IMG', 'Slike');
define('_JNEWS_LIST_OPT_CTT', 'Sadržaj');
define('_JNEWS_INPUT_NAME_TIPS', 'Upišite ime i prezime (prvo vaše ime)');
define('_JNEWS_IP_TIPS', 'IP of the subscriber' );
define('_JNEWS_INPUT_EMAIL_TIPS', 'Upišite vašu email adresu (Adresa mora biti valjana ako želite primati naše poruke.)');
define('_JNEWS_RECEIVE_HTML_TIPS', 'Odaberite Da ako želite primati HTML poruke - Ne ako želite primati samo tekst poruke');
define('_JNEWS_TIME_ZONE_ASK_TIPS', 'Odredite vašu vremensku zonu.');

// Since 1.0.5
define('_JNEWS_FILES' , 'Datoteke');
define('_JNEWS_FILES_UPLOAD' , 'Upload');
define('_JNEWS_MENU_UPLOAD_IMG' , 'Upload Slika');
define('_JNEWS_TOO_LARGE' , 'Datoteka je prevelika. Maksimalna dozvoljena veličina je');
define('_JNEWS_MISSING_DIR' , 'Odredišni direktorij ne postoji');
define('_JNEWS_IS_NOT_DIR' , 'Odredišni direktorij ne postoji ili je samo obična datoteka.');
define('_JNEWS_NO_WRITE_PERMS' , 'Odredišni direktorij nije otvoren za zapisivanje.');
define('_JNEWS_NO_USER_FILE' , 'Niste odabrali datoteku za upload.');
define('_JNEWS_E_FAIL_MOVE' , 'Premještanje datoteke nije moguće.');
define('_JNEWS_FILE_EXISTS' , 'Odredišna datoteka već postoji.');
define('_JNEWS_CANNOT_OVERWRITE' , 'Odredišna datoteka već postoji, nije ju moguće zamijeniti.');
define('_JNEWS_NOT_ALLOWED_EXTENSION' , 'Ekstenzija datoteke nije dozvoljena.');
define('_JNEWS_PARTIAL' , 'Datoteka je samo djelomično uploadirana.');
define('_JNEWS_UPLOAD_ERROR' , 'Upload greška:');
define('_JNEWS_DEV_NO_DEF_FILE' , 'Datoteka je samo djelomično uploadirana.');

// already exist but modified  added a <br/ on first line and added [SUBSCRIPTIONS] line>
define('_JNEWS_CONTENTREP', '{tag:subscriptions} = Ovo će biti zamijenjeno s linkovima za pretplatu.' .
		' Ovo je <strong>obvezno</strong> kako bi jNews ispravno funkcionirao.<br />' .
		'Ako u ovo polje ubaciti bilo koji drugi sadržaj, on će se prikazivati u svim skupnim pismima povezanim s ovom listom.' .
		' <br />Na kraju dodajte svoju poruku pretplatnicima.  jNews će automatski dodati link za pretplatnike putem kojeg će oni moći izmjeniti svoje informacije ili odjaviti pretplatu na listu.');

// since 1.0.6
define('_JNEWS_NOTIFICATION', 'Obavijest');  // shortcut for Email notification
define('_JNEWS_NOTIFICATIONS', 'Obavijesti');
define('_JNEWS_USE_SEF', 'SEF u mailovima');
define('_JNEWS_USE_SEF_TIPS', 'Preporuča se da odaberete Ne.  Ali, ako želite da URL u vašim mailovima koristi SEF, onda odaberite Da.' .
		' <br /><b>Linkovi će funkcionirati na isti način u obe opcije.  Opcija Ne osigurat će da linkovi u mailovima uvijek rade, čak i kad izmjenite vaš SEF.</b> ');
define('_JNEWS_ERR_NB' , 'Greška #: ERR');
define('_JNEWS_ERR_SETTINGS', 'Greška u radu s postavkama');
define('_JNEWS_ERR_SEND' ,'Slanje izvješća o greški');
define('_JNEWS_ERR_SEND_TIPS' ,'Ako želite da jNews bude bolji proizvod, odaberite DA.  Ova opcija poslat će nam izvješća o greškama.  Više ne morate slati bug izvješća ;-) <br /> <b>NE ŠALJE SE NIKAKVA PRIVATNA INFORMACIJA</b>.  Mi čak ni ne znamo s kojeg se sajta šalje izvješće, šaljemo samo informacije o jNews, PHP postavkama i SQL upitima. ');
define('_JNEWS_ERR_SHOW_TIPS' ,'Odaberite Da za prikazivanje broja greške na ekranu.  Većinom se koristi za debuging svrhu. ');
define('_JNEWS_ERR_SHOW' ,'Prikazati greške');
define('_JNEWS_LIST_SHOW_UNSUBCRIBE', 'Prikazati linkove za odjavu');
define('_JNEWS_LIST_SHOW_UNSUBCRIBE_TIPS', 'Odaberite Da za prikazivanje linkova za odjavu pretplate na dnu skupnog pisma kako bi pretplatnici mogli mijenjati svoje pretplate. <br /> Opcija Ne isključuje footer i linkove.');
define('_JNEWS_UPDATE_INSTALL', '<span style="color: rgb(255, 0, 0);">VAŽNA OBAVIJEST!</span> <br />Ako vršite ažuriranje iz prethodnih jNews instalacija, morat će te ažurirati strukturu vaše baze podataka klikom na slijedeće dugme (Vaši podaci ostat će netaknuti)');
define('_JNEWS_UPDATE_INSTALL_BTN' , 'Ažuriraj tablice i konfiguraciju');
define('_JNEWS_MAILING_MAX_TIME', 'Max vrijeme čekanja' );
define('_JNEWS_MAILING_MAX_TIME_TIPS', 'Definirajte max, vrijeme za slanje svake grupe mailova koji se šalju iz reda čekanja. Preporuča se između 30 sek i 2 min.');

// virtuemart integration beta
define('_JNEWS_VM_INTEGRATION', 'VirtueMart Integracija');
define('_JNEWS_VM_COUPON_NOTIF', 'ID kupona obavijesti');
define('_JNEWS_VM_COUPON_NOTIF_TIPS', 'Odredite ID broj skupnog pisma kojeg želite koristiti za slanje kupona vašim kupcima.');
define('_JNEWS_VM_NEW_PRODUCT', 'ID obavijesti novih proizvoda');
define('_JNEWS_VM_NEW_PRODUCT_TIPS', 'Odredite ID broj skupnog pisma kojeg želite koristiti za slanje obavijesti o novim proizvodima.');

// since 1.0.8
// create forms for subscriptions
define('_JNEWS_FORM_BUTTON', 'Kreiraj obrazac');
define('_JNEWS_FORM_COPY', 'HTML kod');
define('_JNEWS_FORM_COPY_TIPS', 'Kopiraj generirani HTML kod u vašu HTML stranicu.');
define('_JNEWS_FORM_LIST_TIPS', 'Odaberite listu koju želite dodati u obrazac');
// update messages
define('_JNEWS_UPDATE_MESS4' , 'Automatsko ažuriranje nije moguće.');
define('_JNEWS_WARNG_REMOTE_FILE' , 'Udaljena datoteka nedostupna.');
define('_JNEWS_ERROR_FETCH' , 'Greška u pristupu datoteci.');

define('_JNEWS_CHECK' , 'Provjera');
define('_JNEWS_MORE_INFO' , 'Dodatni info');
define('_JNEWS_UPDATE_NEW' , 'Ažuriranje na novu verziju');
define('_JNEWS_UPGRADE' , 'Ažuriranje u jači proizvod');
define('_JNEWS_DOWNDATE' , 'Povratak na prethodnu verziju');
define('_JNEWS_DOWNGRADE' , 'Povratak na temeljni proizvod');
define('_JNEWS_REQUIRE_JOOM' , 'Zahtijeva Joomla');
define('_JNEWS_TRY_IT' , 'Isprobajte!');
define('_JNEWS_NEWER', 'Nikad');
define('_JNEWS_OLDER', 'Starija');
define('_JNEWS_CURRENT', 'Sadašnja');

// since 1.0.9
define('_JNEWS_CHECK_COMP', 'Isprobajte neku od drugih komponenti');
define('_JNEWS_MENU_VIDEO' , 'Video tutorijali');
define('_JNEWS_SCHEDULE_TITLE', 'Postavke automatskog rasporeda');
define('_JNEWS_ISSUE_NB_TIPS' , 'Sistem automatski generira broj izdanja' );
define('_JNEWS_SEL_ALL' , 'Sva skupna pisma');
define('_JNEWS_SEL_ALL_SUB' , 'Sve liste');
define('_JNEWS_INTRO_ONLY_TIPS' , 'Ako označite ovu kućici, u skupno pismo umetnut će se samo uvod članka s linkom Opširnije za nastavak članka na vašem sajtu.' );
define('_JNEWS_TAGS_TITLE' , 'Tag Sadržaja');
define('_JNEWS_TAGS_TITLE_TIPS' , 'Kopirajte i zalijepite ovaj tag u skupno pismo na mjesto na koje želite umetnuti ovaj sadržaj.');
define('_JNEWS_PREVIEW_EMAIL_TEST', 'Odredite email adresu na koju će se poslati test');
define('_JNEWS_PREVIEW_TITLE' , 'Pregled');
define('_JNEWS_AUTO_UPDATE' , 'Obavijest o ažuriranju');
define('_JNEWS_AUTO_UPDATE_TIPS' , 'Odaberite Da ako želite primati obavijesti o novim verzijama i nadopunama komponente. <br />VAŽNO!! Za ovu funkciju potrebno je uključiti opciju Prikazati Savjete.');

// since 1.1.0
define('_JNEWS_LICENSE' , 'Info o Licenci');

// since 1.1.1
define('_JNEWS_NEW' , 'Novo');
define('_JNEWS_SCHEDULE_SETUP', 'Ako želite slati autorespondere, morate u konfiguraciji utvrditi postavke planera.');
define('_JNEWS_SCHEDULER', 'Planer');
define('_JNEWS_jnews_CRON_DESC' , 'ako na sajtu nemate pristup upravljanju cron zadacima, možete se registrirati za besplatni jNews Cron račun na:' );
define('_JNEWS_CRON_DOCUMENTATION' , 'Dodatne informacije o uređivanju jNews Planera možete pronaći na url:');
define('_JNEWS_CRON_DOC_URL' , '<a href="http://www.acajoom.com/index.php?option=com_content&task=blogcategory&id=29"
 target="_blank">http://www.acajoom.com/index.php?option=com_content&task=blogcategory&id=29</a>' );
define( '_JNEWS_QUEUE_PROCESSED' , 'Red čekanja uspješno procesuiran...' );
define( '_JNEWS_ERROR_MOVING_UPLOAD' , 'Greška u premještanju importirane datoteke' );

//since 1.1.4
define( '_JNEWS_SCHEDULE_FREQUENCY' , 'Učestalost Planera' );
define( '_JNEWS_CRON_MAX_FREQ' , 'Max. Učestalost Planera' );
define( '_JNEWS_CRON_MAX_FREQ_TIPS' , 'Odredite max. učestalost rada Planera ( u minutama ).  Ovo će ograničiti Planer čak i ako je definiran češći cron zadatak.' );
define( '_JNEWS_CRON_MAX_EMAIL' , 'Max. mailova po zadatku' );
define( '_JNEWS_CRON_MAX_EMAIL_TIPS' , 'Odredite max. broj mailova koji će se slati po pojedinom zadatku. If this is set to O the maximim emails per task will be 1' );
define( '_JNEWS_CRON_MINUTES' , ' minuta' );
define( '_JNEWS_SHOW_SIGNATURE' , 'Prikazati email footer' );
define( '_JNEWS_SHOW_SIGNATURE_TIPS' , 'Želite li ili ne promovirati jNews u footeru mailova.' );
define( '_JNEWS_QUEUE_AUTO_PROCESSED' , 'Auto-responderi uspješno procesuirani...' );
define( '_JNEWS_QUEUE_NEWS_PROCESSED' , 'Planirani newsletteri uspješno procesuirani...' );
define( '_JNEWS_MENU_SYNC_USERS' , 'Sinkronizacija Korisnika' );
define( '_JNEWS_SYNC_USERS_SUCCESS' , 'Korisnici uspješno sinkronizirani!' );

// compatibility with Joomla 15
if (!defined('_BUTTON_LOGOUT')) define( '_BUTTON_LOGOUT', 'Odjava' );
if (!defined('_CMN_YES')) define( '_CMN_YES', 'Da' );
if (!defined('_CMN_NO')) define( '_CMN_NO', 'Ne' );
if (!defined('_HI')) define( '_HI', 'Pozdrav' );
if (!defined('_CMN_TOP')) define( '_CMN_TOP', 'Vrh' );
if (!defined('_CMN_BOTTOM')) define( '_CMN_BOTTOM', 'Dno' );
//if (!defined('_BUTTON_LOGOUT')) define( '_BUTTON_LOGOUT', 'Odjava' );

// For include title only or full article in content item tab in newsletter edit - p0stman911
define('_JNEWS_TITLE_ONLY_TIPS' , 'Ako odaberete ovu opciju, u mailove će biti umetnut samo naslov članka kao link za cijeli članak na vašem sajtu.');
define('_JNEWS_TITLE_ONLY' , 'Samo Naslov');
define('_JNEWS_FULL_ARTICLE_TIPS' , 'Ako odaberete ovu opciju, u mail će se umetnut cijeli članak');
define('_JNEWS_FULL_ARTICLE' , 'Cijeli Članak');
define('_JNEWS_CONTENT_ITEM_SELECT_T', 'Odaberite članak koji će se dodati poruci. <br />Kopirajte i zalijepite <b>tag članka</b> u skupno pismo.  Možete odabrati umetanje cijelog teksta, samo uvoda ili samo naslova (odnosno, opcija 0, 1, ili 2). ');
define('_JNEWS_SUBSCRIBE_LIST2', 'Mailing lista(e)');

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
define('_JNEWS_AUTONEWS', 'Smart-Newsletter');
define('_JNEWS_MENU_AUTONEWS', 'Smart-Newsletteri');
define('_JNEWS_AUTO_NEWS_OPTION', 'Smart-Newsletter opcije');
define('_JNEWS_AUTONEWS_FREQ', 'Newsletter Učestalost');
define('_JNEWS_AUTONEWS_FREQ_TIPS', 'Odredite kako često će se slati smart-newsletter.');
define('_JNEWS_AUTONEWS_SECTION', 'Sekcija Članka');
define('_JNEWS_AUTONEWS_SECTION_TIPS', 'Odredite sekciju iz koje će te odabrati članke.');
define('_JNEWS_AUTONEWS_CAT', 'Kategorija Članka');
define('_JNEWS_AUTONEWS_CAT_TIPS', 'Odredite kategoriju iz koje će te odabrati članke (Sve za sve članke u toj sekciji).');
define('_JNEWS_SELECT_SECTION', 'Odabir sekcije');
define('_JNEWS_SELECT_CAT', 'Sve kategorije');
define('_JNEWS_AUTO_DAY_CH8', 'Kvartalno');
define('_JNEWS_AUTONEWS_STARTDATE', 'Datum početka');
define('_JNEWS_AUTONEWS_STARTDATE_TIPS', 'Odredite datum na kojeg će te početi slati Smart Newsletter.');
define('_JNEWS_AUTONEWS_TYPE', 'Prikazivanje sadržaja');// how we see the content which is included in the newsletter
define('_JNEWS_AUTONEWS_TYPE_TIPS', 'Cijeli Članak: u newsletteru prikazuje cijeli članak.<br />' .
		'Samo Uvod: u newsletteru prikazuje samo uvod članka.<br/>' .
		'Samo Naslov: u newsletteru prikazuje samo naslov članka.');
define('_JNEWS_TAGS_AUTONEWS', '[SMARTNEWSLETTER] = Ovo će biti zamijenjeno Smart-newsletterom.' );

//since 1.1.3
define('_JNEWS_MALING_EDIT_VIEW', 'Kreiraj / Pregledaj Mailove');
define('_JNEWS_LICENSE_CONFIG' , 'Licenca' );
define('_JNEWS_ENTER_LICENSE' , 'Upiši licencu');
define('_JNEWS_ENTER_LICENSE_TIPS' , 'Upišite broj licence i spremite ga.');
define('_JNEWS_LICENSE_SETTING' , 'Postavke Licence' );
define('_JNEWS_GOOD_LIC' , 'Vaša licenca je valjana.' );
define('_JNEWS_NOTSO_GOOD_LIC' , 'Vaša licenca nije valjana: ' );
define('_JNEWS_PLEASE_LIC' , 'Molimo vas da kontaktirate jNews podršku za nadogradnju vaše licence ( license@acajoom.com ).' );
define('_JNEWS_DESC_PLUS', 'jNews Plus su prvi sekvencionalni auto-responderi za Joomla CMS.  ' . _JNEWS_FEATURES );
define('_JNEWS_DESC_PRO', 'jNews PRO je sveobuhvatan mailing sistem za Joomla CMS.  ' . _JNEWS_FEATURES );

//since 1.1.4
define('_JNEWS_ENTER_TOKEN' , 'Upišite token');

define('_JNEWS_ENTER_TOKEN_TIPS' , 'Molimo vas da upišete broj tokena kojeg ste primili mailom kad ste kupili jNews. ');

define('_JNEWS_jnews_SITE', 'jNews sajt:');
define('_JNEWS_MY_SITE', 'Moj sajt:');

define( '_JNEWS_LICENSE_FORM' , ' ' .
 		'Kliknite ovdje za odlazak u obrazac za licencu.</a>' );
define('_JNEWS_PLEASE_CLEAR_LICENSE' , 'Molimo vas da očistite polje za licencu i pokušate ponovno.<br />  Ako je problem i dalje prisutan, ' );

define( '_JNEWS_LICENSE_SUPPORT' , 'Ako imate dodatnih pitanja, ' . _JNEWS_PLEASE_LIC );

define( '_JNEWS_LICENSE_TWO' , 'možete dobiti svoj priručnik za licencu tako što će te u obrazac za licencu upisati vaš broj tokena i URL sajta (koji je označen zelenom bojom na vrhu ove stranice). '
			. _JNEWS_LICENSE_FORM . '<br /><br/>' . _JNEWS_LICENSE_SUPPORT );

define('_JNEWS_ENTER_TOKEN_PATIENCE', 'Licenca će se automatski generirati nakon spremanja tokena. ' .
		' Token se obično potvrdi u 2 minute.  Međutim, u nekim slučajevima to može potrajati i 15 minuta.<br />' .
		'<br />Provjerite ovu kontrolnu ploču za par minuta.  <br /><br />' .
		'Ako niste primili valjani ključ licence za 15 minuta, '. _JNEWS_LICENSE_TWO);


define( '_JNEWS_ENTER_NOT_YET' , 'Vaš token još nije potvrđen.');
define( '_JNEWS_UPDATE_CLICK_HERE' , 'Molimo vas da posjetite <a href="http://www.acajoom.com" target="_blank">www.acajoom.com</a> za download najnovije verzije.');
//define( '_JNEWS_NOTIF_UPDATE' , 'Za primanje obavijesti o novim verzijama upišite svoju email adresu i kliknite subscribe ');

define('_JNEWS_THINK_PLUS', 'Ako želite više od vašeg mailing sistema, mislite Plus!');
define('_JNEWS_THINK_PLUS_1', 'Sekvencionalni auto-responderi');
define('_JNEWS_THINK_PLUS_2', 'Napravite raspored slanja newslettera na određeni datum');
define('_JNEWS_THINK_PLUS_3', 'Nema više ograničenja servera');
define('_JNEWS_THINK_PLUS_4', 'i mnogo više...');

//since 1.2.2
define( '_JNEWS_LIST_ACCESS', 'Pristup Listi' );
define( '_JNEWS_INFO_LIST_ACCESS', 'Odredite koja grupa korisnika može čitati i pretplatiti se na ovu listu' );
define( 'JNEWS_NO_LIST_PERM', 'Nemate dozvolu za pretplatu na ovu listu' );

//Archive Configuration
 define('_JNEWS_MENU_TAB_ARCHIVE', 'Arhiva');
 define('_JNEWS_MENU_ARCHIVE_ALL', 'Sva Arhiva');

//Archive Lists
 define('_JNEWS_FREQ_OPT_0', 'Nijedna');
 define('_JNEWS_FREQ_OPT_1', 'Svaki tjedan');
 define('_JNEWS_FREQ_OPT_2', 'Svaka 2 tjedna');
 define('_JNEWS_FREQ_OPT_3', 'Svaki mjesec');
 define('_JNEWS_FREQ_OPT_4', 'Svaki kvartal');
 define('_JNEWS_FREQ_OPT_5', 'Svake godine');
 define('_JNEWS_FREQ_OPT_6', 'Drugo');

define('_JNEWS_DATE_OPT_1', 'Datum stvaranja');
define('_JNEWS_DATE_OPT_2', 'Datum izmjena');

define('_JNEWS_ARCHIVE_TITLE', 'Određivanje učestalosti auto-arhive');
define('_JNEWS_FREQ_TITLE', 'Učestalost Arhive');
define('_JNEWS_FREQ_TOOL', 'Odredite kako često želite da vaš Menadžer Arhive arhivira sadržaje vašeg sajta.');
define('_JNEWS_NB_DAYS', 'Broj Dana');
define('_JNEWS_NB_DAYS_TOOL', 'Ovo je samo za opciju Drugo! Odredite broj dana između svake arhive.');
define('_JNEWS_DATE_TITLE', 'Tip Datuma');
define('_JNEWS_DATE_TOOL', 'Odredite da li će se arhiviranje izvršiti na datum kreiranja ili datum izmjena.');

define('_JNEWS_MAINTENANCE_TAB', 'Postavke održavanja');
define('_JNEWS_MAINTENANCE_FREQ', 'Učestalost održavanja');
define( '_JNEWS_MAINTENANCE_FREQ_TIPS', 'Odredite učestalost postupka održavanja.' );
define( '_JNEWS_CRON_DAYS' , 'sat(i)' );

define( '_JNEWS_LIST_NOT_AVAIL', 'Nema dostupnih lista.');
define( '_JNEWS_LIST_ADD_TAB', 'Dodaj/Uredi' );

define( '_JNEWS_LIST_ACCESS_EDIT', 'Pristup Dodaj/Uredi Mail' );
define( '_JNEWS_INFO_LIST_ACCESS_EDIT', 'Odredite grupu korisnika koja može dodati ili urediti skupno pismo za ovu listu' );
define( '_JNEWS_MAILING_NEW_FRONT', 'Kreiraj novo Skupno Pismo' );

define('_JNEWS_AUTO_ARCHIVE', 'Auto-Arhiva');
define('_JNEWS_MENU_ARCHIVE', 'Auto-Arhiva');

//Extra tags:
define('_JNEWS_TAGS_ISSUE_NB', '{tag:issuenb} = Ovo će biti zamijenjeno brojem izdanja newslettera.');
define('_JNEWS_TAGS_DATE', '{tag:date} = Ovo će biti zamijenjeno datumom slanja.');
define('_JNEWS_TAGS_CB', '[CBTAG:{field_name}] = Ovo će biti zamijenjeno vrijednošću preuzetom iz Community Builder polja: npr. [CBTAG:firstname] ');
define( '_JNEWS_MAINTENANCE', 'Održavanje' );

define('_JNEWS_THINK_PRO', 'Kad imate profesionalne potrebe, koristite profesionalne komponente!');
define('_JNEWS_THINK_PRO_1', 'Smart-Newsletteri');
define('_JNEWS_THINK_PRO_2', 'Definirajte stupanj pristupa vašoj listi');
define('_JNEWS_THINK_PRO_3', 'Definirajte tko može dodati/urediti mailove');
define('_JNEWS_THINK_PRO_4', 'Više tagova: dodajte vaša CB polja');
define('_JNEWS_THINK_PRO_5', 'Auto-arhiviranje Joomla članaka');
define('_JNEWS_THINK_PRO_6', 'Optimizacija baze podataka');

define('_JNEWS_LIC_NOT_YET', 'Vaša licenca još nije potvrđena.  Molimo vas da provjerite karticu Licenca u Konfiguraciji sajta.');
define('_JNEWS_PLEASE_LIC_GREEN' , 'Provjerite da li ste našem timu za podršku poslali informaciju istaknutu zelenim slovima na vrhu kartice.' );

define('_JNEWS_FOLLOW_LINK' , 'Uzmi svoju Licencu');
define( '_JNEWS_FOLLOW_LINK_TWO' , 'Vašu licencu možete dobiti upisom broja tokena i URL sajta (istaknut zelenom bojom na vrhu ove stranice) u obrazac za licencu. ');
define( '_JNEWS_ENTER_TOKEN_TIPS2', ' Zatim kliknite na Primjeni dugme u gornjem desnom izborniku.' );
define( '_JNEWS_ENTER_LIC_NB', 'Upišite vašu Licencu' );
define( '_JNEWS_UPGRADE_LICENSE', 'Nadogradite vašu Licencu');
define( '_JNEWS_UPGRADE_LICENSE_TIPS' , 'Ako ste primili token za ažuriranje vaše licence, upišite ga ovdje pa zatim kliknite na Primjeni i nastavite na broj <b>2</b> da bi dobili svoj novi broj licence.' );

define( '_JNEWS_MAIL_FORMAT', 'Format Kodiranja' );
define( '_JNEWS_MAIL_FORMAT_TIPS', 'Koji format kodiranja želite koristiti za vaša skupna pisma, samo za Tekst ili MIME' );
define( '_JNEWS_jnews_CRON_DESC_ALT', 'Ako nemate pristup upravljanju cron zadacima na vašem sajtu, možete koristiti besplatnu jCron komponentu za kreiranje cron zadataka.' );

//since 1.3.1
define('_JNEWS_SHOW_AUTHOR', 'Prikazati Ime Autora');
define('_JNEWS_SHOW_AUTHOR_TIPS', 'Odaberite Da ako želite članku kojeg dodajete u skupno pismo dodati i ime autora članka');

//since 1.3.5
define('_JNEWS_REGWARN_NAME','Upišite svoje ime.');
define('_JNEWS_REGWARN_MAIL','Upišite valjanu email adresu.');

//since 1.5.6
define('_JNEWS_ADDEMAILREDLINK_TIPS','Ako odaberete Da, email korisnika dodat će se kao parametar na kraju vašeg URL-a preusmjeravanja (link preusmjeravanja za vaš modul ili za vanjski jNews obrazac).<br/>Ovo može biti korisno kad želite izvršiti neku posebnu skriptu na vašoj stranici preusmjeravanja.');
define('_JNEWS_ADDEMAILREDLINK','Dodaj e-mail u link preusmjeravanja');

//since 1.6.3
define('_JNEWS_ITEMID','ItemId');
define('_JNEWS_ITEMID_TIPS','Ovaj ItemId dodat će se vašim jNews linkovima.');

//since 1.6.5
define('_JNEWS_SHOW_JCALPRO','jCalPRO');
define('_JNEWS_SHOW_JCALPRO_TIPS','Prikazati integriranu karticu za jCalPRO <br/>(samo ako je jCalPRO instaliran na vašem sajtu!)');
define('_JNEWS_JCALTAGS_TITLE','jCalPRO Tag:');
define('_JNEWS_JCALTAGS_TITLE_TIPS','Kopiraj i zalijepi ovaj tag u skupno pismo, na mjesto na koje želite umetnuti događaj.');
define('_JNEWS_JCALTAGS_DESC','Opis:');
define('_JNEWS_JCALTAGS_DESC_TIPS','Odaberite Da ako želite umetnuti opis događaja');
define('_JNEWS_JCALTAGS_START','Datum početka:');
define('_JNEWS_JCALTAGS_START_TIPS','Odaberite Da ako želite umetnuti datum početka događaja');
define('_JNEWS_JCALTAGS_READMORE','Opširnije:');
define('_JNEWS_JCALTAGS_READMORE_TIPS','Odaberite Da ako želite umetnuti <b>link Opširnije</b> za ovaj događaj');
define('_JNEWS_REDIRECTCONFIRMATION','URL preusmjeravanja');
define('_JNEWS_REDIRECTCONFIRMATION_TIPS','Ako trebate e-mail potvrde, korisnik će nakon klika na link potvrde biti potvrđen i preusmjeren na ovaj URL.');

//since 2.0.0 compatibility with Joomla 1.5
if(!defined('_CMN_SAVE') and defined('CMN_SAVE')) define('_CMN_SAVE',CMN_SAVE);
if(!defined('_CMN_SAVE')) define('_CMN_SAVE','Spremi');
if(!defined('_NO_ACCOUNT')) define('_NO_ACCOUNT','Nemate korisnički račun?');
if(!defined('_CREATE_ACCOUNT')) define('_CREATE_ACCOUNT','Registracija');
if(!defined('_NOT_AUTH')) define('_NOT_AUTH','Niste ovlašteni za pregled ovih podataka.');

//since 3.0.0
define('_JNEWS_DISABLETOOLTIP','Isključiti Objašnjenje');
define('_JNEWS_DISABLETOOLTIP_TIPS', 'Isključiti objašnjenja u Frontendu');
define('_JNEWS_MINISENDMAIL', 'Koristiti Mini SendMail');
define('_JNEWS_MINISENDMAIL_TIPS', 'Ako vaš server koristi Mini SendMail, odaberite ovu opciju koja neće dodati ime korisnika u zaglavlje emaila');

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


