<?php
defined('_JEXEC') or die('Restricted access');
### Copyright (c) 2006-2012 Joobi Limited. All rights reserved.
### license GNU GPLv3 , link http://www.joobi.co

/**
* <p>Croatian language file</p>
* @author Ervin Bizjak <ervin.bizjak@gmail.com>
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
define('_JNEWS_DESC_CORE', 'jNews je orodje za mailing liste, newsletterje, auto-respondere, in follow up, kateri omogočajo dobro komunikacijo z uporabniki.  ' .
		'jNews, Vaš komunikacijski partner!');
define('_JNEWS_DESC_GPL', 'jNews je orodje za mailing liste, newsletterje, auto-respondere, in follow up, kateri omogočajo dobro komunikacijo z uporabniki.  ' .
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
define('_JNEWS_CRON', 'Cron opravila');
define('_JNEWS_MAILING', 'Skupno Pismo');
define('_JNEWS_LIST', 'Seznam');

 //jnews Menu
define('_JNEWS_MENU_LIST', 'Seznami');
define('_JNEWS_MENU_SUBSCRIBERS', 'Naročniki');
define('_JNEWS_MENU_NEWSLETTERS', 'Newsletteri');
define('_JNEWS_MENU_AUTOS', 'Auto-responderi');
define('_JNEWS_MENU_COUPONS', 'Kuponi');
define('_JNEWS_MENU_CRONS', 'Cron opravila');
define('_JNEWS_MENU_AUTORSS', 'Auto-RSS');
define('_JNEWS_MENU_ECARD', 'eRazglednice');
define('_JNEWS_MENU_POSTCARDS', 'Razglednice');
define('_JNEWS_MENU_PERFS', 'Rezultati');
define('_JNEWS_MENU_TAB_LIST', 'Seznami');
define('_JNEWS_MENU_MAILING_TITLE', 'Skupna Pisma');
define('_JNEWS_MENU_MAILING' , 'Skupna Pisma za ');
define('_JNEWS_MENU_STATS', 'Statistika');
define('_JNEWS_MENU_STATS_FOR', 'Statistika za ');
define('_JNEWS_MENU_CONF', 'Nastavitve');
define('_JNEWS_MENU_UPDATE', 'Uvoz');
define('_JNEWS_MENU_ABOUT', 'O jNews');
define('_JNEWS_MENU_LEARN', 'Učni center');
define('_JNEWS_MENU_MEDIA', 'Media upravitelj');
define('_JNEWS_MENU_HELP', 'Pomoč');
define('_JNEWS_MENU_CPANEL', 'Nadzorna plošča');
define('_JNEWS_MENU_IMPORT', 'Uvoz');
define('_JNEWS_MENU_EXPORT', 'Izvoz');
define('_JNEWS_MENU_SUB_ALL', 'Naroči vse');
define('_JNEWS_MENU_UNSUB_ALL', 'Odjava naročnine');
define('_JNEWS_MENU_VIEW_ARCHIVE', 'Arhiv');
define('_JNEWS_MENU_PREVIEW', 'Pregled');
define('_JNEWS_MENU_SEND', 'Pošlji');
define('_JNEWS_MENU_SEND_TEST', 'Pošlji testni Email');
define('_JNEWS_MENU_SEND_QUEUE', 'Obdelaj vrstni red čakanja');
define('_JNEWS_MENU_VIEW', 'Pregled');
define('_JNEWS_MENU_COPY', 'Kopiraj');
define('_JNEWS_MENU_VIEW_STATS' , 'Pregled statistike');
define('_JNEWS_MENU_CRTL_PANEL' , ' Nazdorna plošča');
define('_JNEWS_MENU_LIST_NEW' , ' Ustvari seznam');
define('_JNEWS_MENU_LIST_EDIT' , ' Uredi seznam');
define('_JNEWS_MENU_BACK', 'Nazaj');
define('_JNEWS_MENU_INSTALL', 'Namestitev');
define('_JNEWS_MENU_TAB_SUM', 'Povzetek');
define('_JNEWS_STATUS' , 'Status');

// messages
define('_JNEWS_ERROR' , ' Prišlo je do napake! ');
define('_JNEWS_SUB_ACCESS' , 'Pravice dostopa');
define('_JNEWS_DESC_CREDITS', 'Zasluge');
define('_JNEWS_DESC_INFO', 'Informacije');
define('_JNEWS_DESC_HOME', 'Naslovnica');
define('_JNEWS_DESC_MAILING', 'Mailing seznam');
define('_JNEWS_DESC_SUBSCRIBERS', 'Naročniki');
define('_JNEWS_PUBLISHED','Objavljeno');
define('_JNEWS_UNPUBLISHED','Neobjavljeno');
define('_JNEWS_DELETE','Izbriši');
define('_JNEWS_FILTER','Filter');
define('_JNEWS_UPDATE','Posodabljanje');
define('_JNEWS_SAVE','Shrani');
define('_JNEWS_CANCEL','Prekliči');
define('_JNEWS_NAME','Ime');
define('_JNEWS_EMAIL','E-mail');
define('_JNEWS_SELECT','Izberi');
define('_JNEWS_ALL','Vse');
define('_JNEWS_SEND_A', 'Pošlji ');
define('_JNEWS_SUCCESS_DELETED', ' uspešno izbrisano');
define('_JNEWS_LIST_ADDED', 'Seznam uspešno kreiran');
define('_JNEWS_LIST_COPY', 'Seznam uspešno kopiran');
define('_JNEWS_LIST_UPDATED', 'Seznam uspešno posodobljen');
define('_JNEWS_MAILING_SAVED', 'Skupno pismo uspešno poslano.');
define('_JNEWS_UPDATED_SUCCESSFULLY', 'uspešno posodobljeno.');

### Subscribers information ###
//subscribe and unsubscribe info
define('_JNEWS_SUB_INFO', 'Informacije o naročniku');
define('_JNEWS_VERIFY_INFO', 'Prosimo vas, da potrdite poslano povezavo.');
define('_JNEWS_INPUT_NAME', 'Ime');
define('_JNEWS_INPUT_EMAIL', 'Email');
define('_JNEWS_RECEIVE_HTML', 'Sporočila v HTML obliki?');
define('_JNEWS_TIME_ZONE', 'Časovni pas');
define('_JNEWS_BLACK_LIST', 'Črni seznam');
define('_JNEWS_REGISTRATION_DATE', 'Datum registracije uporabnika');
define('_JNEWS_USER_ID', 'ID uporabnika');
define('_JNEWS_DESCRIPTION', 'Opis');
define('_JNEWS_ACCOUNT_CONFIRMED', 'Vaš uporabniški račun je aktiviran.');
define('_JNEWS_SUB_SUBSCRIBER', 'Naročnik');
define('_JNEWS_SUB_PUBLISHER', 'Založnik');
define('_JNEWS_SUB_ADMIN', 'Administrator');
define('_JNEWS_REGISTERED', 'Registrirani');
define('_JNEWS_SUBSCRIPTIONS', 'Vaša naročnina');
define('_JNEWS_SEND_UNSUBCRIBE', 'Za odjavo pošlji sporočilo');
define('_JNEWS_SEND_UNSUBCRIBE_TIPS', 'Izberite Da za pošiljanje sporočila, s katerim potrjujete odjavo.');
define('_JNEWS_SUBSCRIBE_SUBJECT_MESS', 'Prosimo, da potrdite vašo naročnino');
define('_JNEWS_UNSUBSCRIBE_SUBJECT_MESS', 'Potrditev odjave');
define('_JNEWS_DEFAULT_SUBSCRIBE_MESS', 'Pozrav {tag:name},<br />' .
		'Samo še en korak vas loči do uspešno potrjene naročnine.  Prosimo vas, da svojo odločitev potrdite s klikom na naslednjo povezavo.' .
		'<br /><br />{tag:confirm}<br /><br />Za dodatne informacije kontaktirajte webmastra.');
define('_JNEWS_DEFAULT_UNSUBSCRIBE_MESS', 'S tem emailom potrjujemo vašo odjavo.  Žal nam je, ker ste nas zapustili. V kolikor se želite ponovno aktivirati in s tem vpisati na listo prejemnikov, lahko to storite kadarkoli na naši spletni strani.  Za dodatne informacije kontaktirajte webmastra.');

// jNews subscribers
define('_JNEWS_SIGNUP_DATE', 'Datum prijave');
define('_JNEWS_CONFIRMED', 'Potrjeno');
define('_JNEWS_SUBSCRIB', 'Naročnina');
define('_JNEWS_HTML', 'HTML Skupinska pisma');
define('_JNEWS_RESULTS', 'Rezultati');
define('_JNEWS_SEL_LIST', 'Izberite seznam');
define('_JNEWS_SEL_LIST_TYPE', '- Izberite tip seznama -');
define('_JNEWS_SUSCRIB_LIST', 'Seznam vseh naročnikov');
define('_JNEWS_SUSCRIB_LIST_UNIQUE', 'Naročniki za : ');
define('_JNEWS_NO_SUSCRIBERS', 'Za Ta seznam ni naročnikov.');
define('_JNEWS_COMFIRM_SUBSCRIPTION', 'Poslan vam je bil emali s potrditveno povezavo.  Prosimo vas, da preverite svoj email in kliknete na povezavo, ki se nahaja v njem.<br />' .
		'Vaša naročnina bo aktivirana po potrditvi vašega email naslova.');
define('_JNEWS_SUCCESS_ADD_LIST', 'Uspešno ste se vpisali na naš seznam.');


 // Subcription info
define('_JNEWS_CONFIRM_LINK', 'Kliknite tukaj za potrditev vaše naročnine');
define('_JNEWS_UNSUBSCRIBE_LINK', 'Kliknite tukaj za odjavo');
define('_JNEWS_UNSUBSCRIBE_MESS', 'Vaš email je bil odstanjen iz našega seznama');

define('_JNEWS_QUEUE_SENT_SUCCESS' , 'Vsa načrtovana skupinska pisma uspešno poslana.');
define('_JNEWS_MALING_VIEW', 'Preglejte vsa skupinska pisma');
define('_JNEWS_UNSUBSCRIBE_MESSAGE', 'Se res želite odjaviti s tega seznama?');
define('_JNEWS_MOD_SUBSCRIBE', 'Naročnina');
define('_JNEWS_SUBSCRIBE', 'Naročnina');
define('_JNEWS_UNSUBSCRIBE', 'Odjava naročnine');
define('_JNEWS_VIEW_ARCHIVE', 'Preglej arhiv');
define('_JNEWS_SUBSCRIPTION_OR', ' ali klikni tukaj za posodabljanje vaših informacij');
define('_JNEWS_EMAIL_ALREADY_REGISTERED', 'Nekdo s tem email naslovom je že registriran.');
define('_JNEWS_SUBSCRIBER_DELETED', 'Naročnik uspešno odstranjen.');


### UserPanel ###
 //User Menu
define('_JNEWS_UCP_USER_PANEL', 'Uporabniška nadzorna plošča');
define('_JNEWS_UCP_USER_MENU', 'Uporabniški menu');
define('_JNEWS_UCP_USER_CONTACT', 'Moje naročnine');
 //jNews Cron Menu
define('_JNEWS_UCP_CRON_MENU', 'Upravljanje Cron zadev');
define('_JNEWS_UCP_CRON_NEW_MENU', 'Novi Cron');
define('_JNEWS_UCP_CRON_LIST_MENU', 'Seznam mojih Cronov');
 //jNews Coupon Menu
define('_JNEWS_UCP_COUPON_MENU', 'Upravljanje s kuponi');
define('_JNEWS_UCP_COUPON_LIST_MENU', 'Seznam Kuponov');
define('_JNEWS_UCP_COUPON_ADD_MENU', 'Dodaj Kupon');

### lists ###
// Tabs
define('_JNEWS_LIST_T_GENERAL', 'Opis');
define('_JNEWS_LIST_T_LAYOUT', 'Izgled');
define('_JNEWS_LIST_T_SUBSCRIPTION', 'Naročnina');
define('_JNEWS_LIST_T_SENDER', 'Informacije o pošiljatelju');

define('_JNEWS_LIST_TYPE', 'Vrsta seznama');
define('_JNEWS_LIST_NAME', 'Naziv seznama');
define('_JNEWS_LIST_ISSUE', 'Izdaja #');
define('_JNEWS_LIST_DATE', 'Datum pošiljanja');
define('_JNEWS_LIST_SUB', 'vsebina pisma');
define('_JNEWS_ATTACHED_FILES', 'Datoteke v priponki');
define('_JNEWS_SELECT_LIST', 'Izberite seznam za urejanje!');

// Auto Responder box
define('_JNEWS_AUTORESP_ON', 'Tip seznama');
define('_JNEWS_AUTO_RESP_OPTION', 'Možnosti Auto-responderja');
define('_JNEWS_AUTO_RESP_FREQ', 'Naročniki lahko izberejo pogostost');
define('_JNEWS_AUTO_DELAY', 'odloga (v dneh)');
define('_JNEWS_AUTO_DAY_MIN', 'Najmanjša frekvenca');
define('_JNEWS_AUTO_DAY_MAX', 'Največja frekvenca');
define('_JNEWS_FOLLOW_UP', 'Določite follow up auto-responderja');
define('_JNEWS_AUTO_RESP_TIME', 'Naročniki lahko izberejo čas');
define('_JNEWS_LIST_SENDER', 'Pošiljatelj seznama');

define('_JNEWS_LIST_DESC', 'Opis seznama');
define('_JNEWS_LAYOUT', 'Izgled');
define('_JNEWS_SENDER_NAME', 'Ime pošiljatelja');
define('_JNEWS_SENDER_EMAIL', 'Email pošiljatelja');
define('_JNEWS_SENDER_BOUNCE', 'Bounce naslov pošiljatelja');
define('_JNEWS_LIST_DELAY', 'Odlog');
define('_JNEWS_HTML_MAILING', 'HTML pisma?');
define('_JNEWS_HTML_MAILING_DESC', '(če tole spremenite boste morali shraniti spremembe in se nato vrniti, da bi videli spremembe.)');
define('_JNEWS_HIDE_FROM_FRONTEND', 'Skriti od Frontenda?');
define('_JNEWS_SELECT_IMPORT_FILE', 'Izberite datoteku za uvoz');;
define('_JNEWS_IMPORT_FINISHED', 'Uvoz končan');
define('_JNEWS_DELETION_OFFILE', 'Brisanje datoteke');
define('_JNEWS_MANUALLY_DELETE', 'ni uspjelo, izbrišite ročno');
define('_JNEWS_CANNOT_WRITE_DIR', 'Mapa ni nastavljena za pisanje');
define('_JNEWS_NOT_PUBLISHED', 'Pismo ni poslano, seznam ni objavljen.');

//  List info box
define('_JNEWS_INFO_LIST_PUB', 'Za objavo seznama kliknite DA');
define('_JNEWS_INFO_LIST_NAME', 'Tukaj vpišite naziv vašega seznama. Ta seznam boste lahko prepoznali na podlagi tega imena.');
define('_JNEWS_INFO_LIST_DESC', 'Tukaj vpišite kratki opis tega seznama. Opis bo viden obiskovalcem vaše strani.');
define('_JNEWS_INFO_LIST_SENDER_NAME', 'Vpišite ime pošiljatelja. Ime bo vidno naročnikom, ko prejmejo sporočilo s tega seznama.');
define('_JNEWS_INFO_LIST_SENDER_EMAIL', 'Vpišite email naslov s katere bo sporočilo poslano.');
define('_JNEWS_INFO_LIST_SENDER_BOUNCED', 'Vpišite email naslov, na katerega bodo uporabniki lahko odgovorili. Priporočljivo je, da je ta email naslov enak naslovu pošiljatelja, saj bodo spam filtri dali vašemu sporočilu večjo oceno, će bosta naslova različna.');
define('_JNEWS_INFO_LIST_AUTORESP', 'Izberite tip sporočila za ta seznam. <br />' .
		'Newsletter: običajen newsletter<br />' .
		'Auto-responder: auto-responder je seznam, ki se pošilja avtomatsko po vnaprej določenih intervalih.');
define('_JNEWS_INFO_LIST_FREQUENCY', 'Omogočite uporabnikom, da si sami določijo, kako pogosto bi želeli prejemati sporočila. Ta možnost ponuja uporabnikom večjo prilagodljivost.');
define('_JNEWS_INFO_LIST_TIME', 'Dovolite uporabniko, da si sami izberejo čas, ko želijo prejeti seznam.');
define('_JNEWS_INFO_LIST_MIN_DAY', 'Definirajte najmanjšo možnost prejemanja, ki jo lahko izbere uporabnik');
define('_JNEWS_INFO_LIST_DELAY', 'Določite zamik med to možnostjo in možnostjo auto-responderja.');
define('_JNEWS_INFO_LIST_DATE', 'Določite datum objave novice, če želite zamik objave. <br /> FORMAT : YYYY-MM-DD HH:MM:SS');
define('_JNEWS_INFO_LIST_MAX_DAY', 'Definirajte največjo možnost prejemanja, ki jo lahko izbere uporabnik');
define('_JNEWS_INFO_LIST_LAYOUT', 'Vpišite izgled vašega skupnega pisma..');
define('_JNEWS_INFO_LIST_SUB_MESS', 'To sporočilo bo poslano vsem oasebam, ki se naročijo na prejemanje novic. Vpišete lahko poljubno besedilo.');
define('_JNEWS_INFO_LIST_UNSUB_MESS', 'To sporočilo bo poslano vsem osebam, ki se odjavijo od prejemanja novic. Vpišete lahko poljubno besedilo');
define('_JNEWS_INFO_LIST_HTML', 'Označite, če želite pošiljati skupna pisma v HTML obliki. Naročniki imajo možnost, da se pri registraciji samostojno odločijo za obliko sporočil (HTML/text).');
define('_JNEWS_INFO_LIST_HIDDEN', 'Kliknite Da, če želite skriti seznam (Frontend), uporabniki se ne bodo mogli naročiti nanj, medtem ko boste vi še vedno lahko pošiljali skupna pisma..');
define('_JNEWS_INFO_LIST_JNEWS_AUTO_SUB', 'Želite uporabnike avtomatsko naročiti na ta seznam?<br /><B>Novi uporabniki:</B> vpisal se bo vsak nov uporabnik.<br /><B>Vsi uporabniki:</B> vsi uporabniki v vaši bazi bodo postali registrirani uporabniki.<br />(obe možnosti podpira Community Builder)');
define('_JNEWS_INFO_LIST_ACC_LEVEL', 'Izberite nivo dostopa za Frontend. Skupna pisma bodo prikazana ali skrita uporabniškim skupinam, ki nimajo pravic za dostop, in se zaradi tega tudi ne bodo mogli naročiti na seznam.');
define('_JNEWS_INFO_LIST_ACC_USER_ID', 'Izberite nivo dostopa uporabniške skupine, kateri želite dovoliti urejanje seznama. Ta uporabniška skupina in vse nad nadrejene bodo lahko urejale in pošiljale skupna pisma iz Frontenda ali Backenda.');
define('_JNEWS_INFO_LIST_FOLLOW_UP', 'Če želite, da auto-responder preide na nov auto-responder. ko le-ta pošlje zadnje sporočilo, tukaj lahko nastavite, ta naslednji auto-responder.');
define('_JNEWS_INFO_LIST_JNEWS_OWNER', 'Tole je ID osebe ki je kreirala seznam.');
define('_JNEWS_INFO_LIST_WARNING', '   Tale zadnja možnost je dostopna samo enkrat in sicer v trenutku kreiranja seznama.');
define('_JNEWS_INFO_LIST_SUBJET', ' Vsebina skupnega pisma.  To je vsebina emaila, katerega bo prejel naročnik.');
define('_JNEWS_INFO_MAILING_CONTENT', 'Tole je glavni del emaila, ki ga boste poslali.');
define('_JNEWS_INFO_MAILING_NOHTML', 'Tukaj vpišite glavni del emaila, ki ga želite poslati naročnikom, ki so izbrali, da ne želijo prejemati mailov v HTML obliki. <BR/> NAPOMENA: če pustite prazno, bo jNews avtomatsko pretvoril HTML besedilo v navadno tekstovno besedilo.');
define('_JNEWS_INFO_MAILING_VISIBLE', 'Kliknite Da, če želite prikazati skupno pismo v Frontendu.');
define('_JNEWS_INSERT_CONTENT', 'Vstavi obstoječo vsebino');

// Coupons
define('_JNEWS_SEND_COUPON_SUCCESS', 'Kupon je uspešno poslan!');
define('_JNEWS_CHOOSE_COUPON', 'Izberite kupon');
define('_JNEWS_TO_USER', ' temu uporabniku');

### Cron options
//drop down frequency(CRON)
define('_JNEWS_FREQ_CH1', 'Vsako uro');
define('_JNEWS_FREQ_CH2', 'Vsakih 6 ur');
define('_JNEWS_FREQ_CH3', 'Vsakih 12 ur');
define('_JNEWS_FREQ_CH4', 'Dnevno');
define('_JNEWS_FREQ_CH5', 'Tedensko');
define('_JNEWS_FREQ_CH6', 'Mesečno');
define('_JNEWS_FREQ_NONE', 'Ne');
define('_JNEWS_FREQ_NEW', 'Novi uporabniki');
define('_JNEWS_FREQ_ALL', ' uporabniki');

//Label CRON form
define('_JNEWS_LABEL_FREQ', 'jNews Cron?');
define('_JNEWS_LABEL_FREQ_TIPS', 'Kliknite Da, če želite uporabljati jNews Cron, kliknite Ne, če želite uporabljati drug cron.<br />' .
		'Če kliknete Da, ne morete določiti Cron naslova, saj se ta avtomatsko generira.');
define('_JNEWS_SITE_URL' , 'URL vaše spletne strani');
define('_JNEWS_CRON_FREQUENCY' , 'Cron pogostost (frekvenca)');
define('_JNEWS_STARTDATE_FREQ' , 'Datum začetka');
define('_JNEWS_LABELDATE_FREQ' , 'Določi datum');
define('_JNEWS_LABELTIME_FREQ' , 'Določi čas');
define('_JNEWS_CRON_URL', 'Cron URL');
define('_JNEWS_CRON_FREQ', 'Pogostost');
define('_JNEWS_TITLE_CRONLIST', 'Cron seznam');
define('_JNEWS_NEW_LIST', 'Ustvari nov seznam');

//title CRON form
define('_JNEWS_TITLE_FREQ', 'Uredi Cron');
define('_JNEWS_CRON_SITE_URL', 'Upišite veljavni URL spletne strani, začnite z http://');

### Mailings ###
define('_JNEWS_MAILING_ALL', 'Vsa skupna pisma');
define('_JNEWS_EDIT_A', 'Uredi ');
define('_JNEWS_SELCT_MAILING', 'Za dodajanje novega skupnega pisma izberite seznam iz spustnega menuja.');
define('_JNEWS_VISIBLE_FRONT', 'Vidno v Frontendu');

// mailer
define('_JNEWS_SUBJECT', 'Predmet');
define('_JNEWS_CONTENT', 'Vsebina');
define('_JNEWS_NAMEREP', '{tag:name} = Tole bo zamenjano z imenom naročnika, s katerim se je prijavil. S to možnostjo se bodo pošiljala osebna pisma.<br />');
define('_JNEWS_FIRST_NAME_REP', '{tag:firstname} = Tole bo zamenjano z imenom naročnika, s katerim se je prijavil.<br />');
define('_JNEWS_NONHTML', 'Ne-html verzija');
define('_JNEWS_ATTACHMENTS', 'Priponke');
define('_JNEWS_SELECT_MULTIPLE', 'Držite control (ali command), da izbereš več priponk.<br />' .
		'Datoteke prikazane v tem seznamu se nahajajo v mapi priponk. Lokacijo lahko poljubno nastavite v nastavitvah pod Nastavitve.');
define('_JNEWS_CONTENT_ITEM', 'Prispevek');
define('_JNEWS_SENDING_EMAIL', 'Pošiljanje emaila');
define('_JNEWS_MESSAGE_NOT', 'Sporočilo ni bilo poslano');
define('_JNEWS_MAILER_ERROR', 'Mailer napaka');
define('_JNEWS_MESSAGE_SENT_SUCCESSFULLY', 'Sporočilo uspešno poslano');
define('_JNEWS_SENDING_TOOK', 'Za pošiljanje tega pisma je bilo potrebno');
define('_JNEWS_SECONDS', 'sekund');
define('_JNEWS_NO_ADDRESS_ENTERED', 'Ni vnešen email naslov ali naročnik');
define('_JNEWS_CHANGE_SUBSCRIPTIONS', 'Spremeni');
define('_JNEWS_CHANGE_EMAIL_SUBSCRIPTION', 'Spremenite vašo naročnino');
define('_JNEWS_WHICH_EMAIL_TEST', 'Določite email naslov, na katerega boste poslali testno sporočilo in izberite Pregled');
define('_JNEWS_SEND_IN_HTML', 'Poslati v HTML (za html skupna pisma)?');
define('_JNEWS_VISIBLE', 'Vidno');
define('_JNEWS_INTRO_ONLY', 'Samo uvod');

// stats
define('_JNEWS_GLOBALSTATS', 'Splošna statistika');
define('_JNEWS_DETAILED_STATS', 'Podrobna statistika');
define('_JNEWS_MAILING_LIST_DETAILS', 'Podrobnosti seznama');
define('_JNEWS_SEND_IN_HTML_FORMAT', 'Pošlji v HTML formatu');
define('_JNEWS_VIEWS_FROM_HTML', 'Pregled (iz html mailov)');
define('_JNEWS_SEND_IN_TEXT_FORMAT', 'Pošlji v tekst formatu');
define('_JNEWS_HTML_READ', 'HTML prebran');
define('_JNEWS_HTML_UNREAD', 'HTML neprebran');
define('_JNEWS_TEXT_ONLY_SENT', 'Samo tekst');

// Configuration panel
// main tabs
define('_JNEWS_MAIL_CONFIG', 'Mail');
define('_JNEWS_LOGGING_CONFIG', 'Dnevniki & Statistika');
define('_JNEWS_SUBSCRIBER_CONFIG', 'Naročniki');
define('_JNEWS_MISC_CONFIG', 'Razno');
define('_JNEWS_MAIL_SETTINGS', 'Mail nastavitve');
define('_JNEWS_MAILINGS_SETTINGS', 'Nastavitve mailov');
define('_JNEWS_SUBCRIBERS_SETTINGS', 'Nastavitve naročnika');
define('_JNEWS_CRON_SETTINGS', 'Cron nastavitve');
define('_JNEWS_SENDING_SETTINGS', 'Nastavitve pošiljanja');
define('_JNEWS_STATS_SETTINGS', 'Nastavitve statistike');
define('_JNEWS_LOGS_SETTINGS', 'Nastavitve dnevnikov');
define('_JNEWS_MISC_SETTINGS', 'Ostale nastavitve');
// mail settings
define('_JNEWS_SEND_MAIL_FROM', 'Od Email');
define('_JNEWS_SEND_MAIL_NAME', 'Od Ime');
define('_JNEWS_MAILSENDMETHOD', 'Mailer metoda');
define('_JNEWS_SENDMAILPATH', 'Sendmail poti');
define('_JNEWS_SMTPHOST', 'SMTP host');
define('_JNEWS_SMTPAUTHREQUIRED', 'Obvezna SMTP avtorizacija');
define('_JNEWS_SMTPAUTHREQUIRED_TIPS', 'Izberite Da, če vaš SMTP server zahteva avtorizaciju');
define('_JNEWS_SMTPUSERNAME', 'SMTP uporabniško ime');
define('_JNEWS_SMTPUSERNAME_TIPS', 'Vpišite SMTP uporabniško ime, če vaš SMTP server zahteva avtorizaciju');
define('_JNEWS_SMTPPASSWORD', 'SMTP geslo');
define('_JNEWS_SMTPPASSWORD_TIPS', 'Vpišite SMTP geslo, če vaš SMTP server zahteva avtorizaciju');
define('_JNEWS_USE_EMBEDDED', 'Uporaba vstavljenih slik');
define('_JNEWS_USE_EMBEDDED_TIPS', 'Izberite, če bodo slike vstavljene v sporočila z HTML vsebino. oziroma Ne, bo boste uporabljali za vstavljanje slik običajne tag-e za povezavo slik s strežnikom.');
define('_JNEWS_UPLOAD_PATH', 'Naloži/zavihki poti');
define('_JNEWS_UPLOAD_PATH_TIPS', 'Lahko nastavite posebno mapo za nalaganje slik.<br />' .
		'Pazite, da ta mapa obstaja, drugače jo predhodno ustvarite.');

// subscribers settings
define('_JNEWS_ALLOW_UNREG', 'Dovoli neregistriranim');
define('_JNEWS_ALLOW_UNREG_TIPS', 'Izberite Da, če želite dovoliti neregistriranim uporabnikom, da se naročijo na sezname brez predhodne registracije.');
define('_JNEWS_REQ_CONFIRM', 'Obvezna potrditev');
define('_JNEWS_REQ_CONFIRM_TIPS', 'Izberite Da, če želite, da morajo neregistrirani uporabniki, predhodno potrditi svoj email naslov.');
define('_JNEWS_SUB_SETTINGS', 'Seznam naročnin');
define('_JNEWS_SUBMESSAGE', 'Email naročnine');
define('_JNEWS_SUBSCRIBE_LIST', 'naroči se na seznam');

define('_JNEWS_USABLE_TAGS', 'Uporaba tag-ov');
define('_JNEWS_NAME_AND_CONFIRM', '<b>{tag:confirm}</b> = S tem ustvarite povezavo, na katero lahko naročniki kliknejo, da potrdijo svojo naročnino. To je <strong>obvezno</strong>, če želite, da jNews deluje pravilno.<br />'
.'<br />{tag:name} = S tem bo zamenjano ime uporabnika. Pri uporabi te funkcije boste poslali osebno email sporočilo.<br />'
.'<br />{tag:firstname} = S tem bo zamenjano ime uporabnika, to je prvo ime, ki ga je uporabnik vpisal ob registraciji.<br />');
define('_JNEWS_CONFIRMFROMNAME', 'Potrditev od ');
define('_JNEWS_CONFIRMFROMNAME_TIPS', 'Vpišite ime pošiljatelja, ki bo prikazano na seznamu potrditve.');
define('_JNEWS_CONFIRMFROMEMAIL', 'Potrditev od Email');
define('_JNEWS_CONFIRMFROMEMAIL_TIPS', 'Vpišite email naslov, ki bo prikazan na seznamu potrditve.');
//define('_JNEWS_CONFIRMBOUNCE', 'Bounce naslov');
//define('_JNEWS_CONFIRMBOUNCE_TIPS', 'Vpišite bounce naslov, ki bo prikazan na seznamu potrditve.');
define('_JNEWS_HTML_CONFIRM', 'HTML Potrditev');
define('_JNEWS_HTML_CONFIRM_TIPS', 'Izberite Da, če bo seznam v HTML, če uporabnik dovoli prejemanje HTML oblike sporočil.');
define('_JNEWS_TIME_ZONE_ASK', 'Časovni pas');
define('_JNEWS_TIME_ZONE_TIPS', 'Izberite Da, če želite uporabnika vprašati po njegovem časovnem pasu. Mailovi, ki so v čakalni vrsti se pošiljajo na podlagi časovnega pasa');

 // Cron Set up
 define('_JNEWS_AUTO_CONFIG', 'Cron');
define('_JNEWS_TIME_OFFSET_URL', 'kliknite tukaj, da naredite premik v Osnovne nastavitve -> kartica Lokalizacija');
define('_JNEWS_TIME_OFFSET_TIPS', 'Določite časovni zamik vašega serverja, da omogočite točno uro in datum');
define('_JNEWS_TIME_OFFSET', 'Časovni zamik');
define('_JNEWS_CRON_DESC','<br />Pri uporabi cron funkcije lahko nastavite avtomatska opravila na vaši spletni strani!<br />' .
		'Da se to zgodi, je potrebno v Nadzorni plošči, kartica Cron, dodati naslednji ukaz:<br />' .
		'<b>' . JNEWS_JPATH_LIVE . '/index.php?option=com_jnews&act=cron</b> ' .
		'<br /><br />Če potrebujete pomoč, oziroma imate težave pri uporabi Cron funkcije, obiščite forum na <a href="http://www.acajoom.com" target="_blank">http://www.acajoom.com</a>');
// sending settings
define('_JNEWS_PAUSEX', 'Počakaj x sekund za vsako nastavljeno količino emailov');
define('_JNEWS_PAUSEX_TIPS', 'Vpišite število sekund, da jNews pošlje zahtevo SMTP serverju.');
define('_JNEWS_EMAIL_BET_PAUSE', 'Emaili med odmorom');
define('_JNEWS_EMAIL_BET_PAUSE_TIPS', 'Število emailov, ki se jih bo poslalo pred pavzo.');
define('_JNEWS_WAIT_USER_PAUSE', 'Počakaj na vos uporabnika');
define('_JNEWS_WAIT_USER_PAUSE_TIPS', 'Ali naj skripta pri pavzi čaka na uporabnikov vnos.');
define('_JNEWS_SCRIPT_TIMEOUT', 'Konec skripte');
define('_JNEWS_SCRIPT_TIMEOUT_TIPS', 'Število minut za procesiranje skripte (0 za neomejeno).');
// Stats settings
define('_JNEWS_ENABLE_READ_STATS', 'Vključi statistiko branja');
define('_JNEWS_ENABLE_READ_STATS_TIPS', 'Izberite Da, če želite zabeležiti število branj. To funkcijo lahko uporabljate le pri HTML mailih');
define('_JNEWS_LOG_VIEWSPERSUB', 'Zabeleži branja po naročniku');
define('_JNEWS_LOG_VIEWSPERSUB_TIPS', 'Izberite Da, če želite zabeležiti število branj, za vsakega naročnika posebej. To funkcijo lahko uporabljate le pri HTML mailih');
// Logs settings
define('_JNEWS_DETAILED', 'Podrobni dnevniki');
define('_JNEWS_SIMPLE', 'Enostavni dnevniki');
define('_JNEWS_DIAPLAY_LOG', 'Prikaži dnevnike');
define('_JNEWS_DISPLAY_LOG_TIPS', 'Izberite Da, če želite prikazati dnevnike poslanih skupinskih pisem.');
define('_JNEWS_SEND_PERF_DATA', 'Učinkovitost pošiljanja');
define('_JNEWS_SEND_PERF_DATA_TIPS', 'Izberite Da, če želite, da jNews pošilja ANONIMNA poročila o vaših nastavitvah, številu naročnikov in čas, ki je potreben za pošiljanje sporočil. S tem boste pripomogli, izvemo več o jNews uspešnosti in POMAGALA NAM BODO, da v naslednjih verzijah, še izboljšamo njegovo delovanje.');
define('_JNEWS_SEND_AUTO_LOG', 'Pošljem dnevnik za auto-responder');
define('_JNEWS_SEND_AUTO_LOG_TIPS', 'Izberite Da, če želite poslati email dnevnik po vsakem procesiranju mailov.  POZOR: Ta operacija lahko privede do velikega števila mailov.');
define('_JNEWS_SEND_LOG', 'Pošljem dnevnik');
define('_JNEWS_SEND_LOG_TIPS', 'Ali se bo na mail pošiljatelja poslal dnevnik.');
define('_JNEWS_SEND_LOGDETAIL', 'Pošljem podroben dnevnik');
define('_JNEWS_SEND_LOGDETAIL_TIPS', 'POdroben dnevnik vključuje informacije o uspešnem pošiljanju mailov za vsakega uporabnika. Enostavni dnevnik pošlje samo pregled informacij.');
define('_JNEWS_SEND_LOGCLOSED', 'Pošljem dnevnik s prekinjeno povezavo');
define('_JNEWS_SEND_LOGCLOSED_TIPS', 'V tem primeru uporabnik vseeno prejme poročilo.');
define('_JNEWS_SAVE_LOG', 'Pripravim dnevnik');
define('_JNEWS_SAVE_LOG_TIPS', 'Ali se dnevnik pošiljanja mailov doda dnevniški datoteki.');
define('_JNEWS_SAVE_LOGDETAIL', 'Priprava podrobnega dnevnika');
define('_JNEWS_SAVE_LOGDETAIL_TIPS', 'Podroben dnevnik vključuje informacije o uspešnem/neuspešnem pošiljanju mailov za vsakega uporabnika posebej. Enostavni dnevnik pošlje samo pregled informacij.');
define('_JNEWS_SAVE_LOGFILE', 'Shrani dnevniško datoteko');
define('_JNEWS_SAVE_LOGFILE_TIPS', 'Datoteki se bodo dodale informacije iz dnevnika. Datoteka lahko postane zelo velika.');
define('_JNEWS_CLEAR_LOG', 'Izbriši dnevnik');
define('_JNEWS_CLEAR_LOG_TIPS', 'Briši dnevniško datoteko.');

### control panel
define('_JNEWS_CP_LAST_QUEUE', 'Zadnje uspešno pošiljanje');
define('_JNEWS_CP_TOTAL', 'Skupaj');
define('_JNEWS_MAILING_COPY', 'Skupno pismo uspešno kopirano!');

// Miscellaneous settings
define('_JNEWS_SHOW_GUIDE', 'Prikaži navodila');
define('_JNEWS_SHOW_GUIDE_TIPS', 'Prikaže navodila novim uporabnikom, da lažje kreirajo newsletter in auto-responder, ter da pravilno namestijo jNews.');
define('_JNEWS_AUTOS_ON', 'Uporaba Auto-responderjev');
define('_JNEWS_AUTOS_ON_TIPS', 'Izberite Ne, če ne želite uporabljati Auto-responderjev, vse auto-responder možnosti bodo onemogočene.');
define('_JNEWS_NEWS_ON', 'Uporaba Newsletterjev');
define('_JNEWS_NEWS_ON_TIPS', 'Izberite Ne, če ne želite uporabljati Newsletterjev, vse newsletter možnosti bodo onemogočene.');
define('_JNEWS_SHOW_TIPS', 'Prikaži nasvete');
define('_JNEWS_SHOW_TIPS_TIPS', 'Prikaz nasvetov, da novi uporabniki lažje uporabljajo  jNews.');
define('_JNEWS_SHOW_FOOTER', 'Prikaz noge');
define('_JNEWS_SHOW_FOOTER_TIPS', 'Ali se bo prikazovala noga s copyright obvestili.');
define('_JNEWS_SHOW_LISTS', 'Prikaz seznama v Frontendu');
define('_JNEWS_SHOW_LISTS_TIPS', 'Prikazati neregistriranim uporabnikom spisek vseh seznamov na katere se lahko naročijo, gumb za arhiv newsletterjev, ali pa samo obrazec za prijavo ter registracijo.');
define('_JNEWS_CONFIG_UPDATED', 'Nastavitve so posodobljene!');
define('_JNEWS_UPDATE_URL', 'Posodobi URL');
define('_JNEWS_UPDATE_URL_WARNING', 'UPOZORENJE! Ne spreminjaj tega URL, razen, če to od vas ne zahteva tehnična ekipa jNews-a.<br />');
define('_JNEWS_UPDATE_URL_TIPS', 'Na primer: http://www.acajoom.com/update/ (na koncu dodaj poševnico)');

// module
define('_JNEWS_EMAIL_INVALID', 'Vpisani email ni pravilen.');
define('_JNEWS_REGISTER_REQUIRED', 'Prosimo vas, da se pred naročilom na sezname, najprej registrirate na naši spletni strani.');

// Access level box
define('_JNEWS_OWNER', 'Avtor seznama:');
define('_JNEWS_ACCESS_LEVEL', 'Nastavite raven dostopa za ta seznam');
define('_JNEWS_ACCESS_LEVEL_OPTION', 'Možnost raven dostopa');
define('_JNEWS_USER_LEVEL_EDIT', 'Določite, katera skupina uporabnikov bo lahko urejala skupna pisma (iz Frontenda in Backenda) ');

//  drop down options
define('_JNEWS_AUTO_DAY_CH1', 'Dnevno');
define('_JNEWS_AUTO_DAY_CH2', 'Dnevno, brez vikenda');
define('_JNEWS_AUTO_DAY_CH3', 'Vsaki drugi dan');
define('_JNEWS_AUTO_DAY_CH4', 'Vsaki drugi dan, brez vikenda');
define('_JNEWS_AUTO_DAY_CH5', 'Tedensko');
define('_JNEWS_AUTO_DAY_CH6', 'Vsaka 2 tedna');
define('_JNEWS_AUTO_DAY_CH7', 'Mesečno');
define('_JNEWS_AUTO_DAY_CH9', 'Letno');
define('_JNEWS_AUTO_OPTION_NONE', 'Ne');
define('_JNEWS_AUTO_OPTION_NEW', 'Novi uporabniki');
define('_JNEWS_AUTO_OPTION_ALL', 'Vsi uporabniki');

//
define('_JNEWS_UNSUB_MESSAGE', 'Email za odjavo naročnine');
define('_JNEWS_UNSUB_SETTINGS', 'Nastavitve odjave naročnine');
define('_JNEWS_AUTO_ADD_NEW_USERS', 'Auto naročnina uporabnika?');

// Update and upgrade messages
define('_JNEWS_NO_UPDATES', 'Nova različica ni na voljo.');
define('_JNEWS_VERSION', 'jNews različica');
define('_JNEWS_NEED_UPDATED', 'Datoteke, ki jih je potrebno posodobiti:');
define('_JNEWS_NEED_ADDED', 'Datoteke, ki jih je potrebno dodati:');
define('_JNEWS_NEED_REMOVED', 'Datoteke, ki jih je potrebni izbrisati:');
define('_JNEWS_FILENAME', 'Ime datoteke:');
define('_JNEWS_CURRENT_VERSION', 'Trenutna različica:');
define('_JNEWS_NEWEST_VERSION', 'Najnovejša različica:');
define('_JNEWS_UPDATING', 'Posodabljanje');
define('_JNEWS_UPDATE_UPDATED_SUCCESSFULLY', 'Datoteke so uspešno posodobljene.');
define('_JNEWS_UPDATE_FAILED', 'Posodabljanje ni bilo uspešno!');
define('_JNEWS_ADDING', 'Dodajanje');
define('_JNEWS_ADDED_SUCCESSFULLY', 'Uspešno dodano.');
define('_JNEWS_ADDING_FAILED', 'Dodajanje neuspešno!');
define('_JNEWS_REMOVING', 'Brisanje');
define('_JNEWS_REMOVED_SUCCESSFULLY', 'Uspešno izbrisano.');
define('_JNEWS_REMOVING_FAILED', 'Brisanje neuspešno!');
define('_JNEWS_INSTALL_DIFFERENT_VERSION', 'Namestitev drugačne različice');
define('_JNEWS_CONTENT_ADD', 'Dodaj vsebino');
define('_JNEWS_UPGRADE_FROM', 'Uvoz podatkov (za newsletter in naročnike) iz ');
define('_JNEWS_UPGRADE_MESS', 'Ni tveganja za vaše obstoječe podatke. <br /> Ta postopek bo čisto enostavno uvozil podatke v jNews bazo podatkov.');
define('_JNEWS_CONTINUE_SENDING', 'Nadaljuj pošiljanje');

// jNews message
define('_JNEWS_UPGRADE1', 'Vaše uporabnike in newsletterje lahko zelo enostavno uvozite it ');
define('_JNEWS_UPGRADE2', ' v jNews, preko Posodabljanje.');
define('_JNEWS_UPDATE_MESSAGE', 'Na voljo je nova jNews različica! ');
define('_JNEWS_UPDATE_MESSAGE_LINK', 'Kliknite tukaj za posodabljanje!');
define('_JNEWS_THANKYOU', 'Hvala, ker ste izbrali jNews, vaš komunikacijski partner!');
define('_JNEWS_NO_SERVER', 'Strežnik za posodabljanje ni na voljo, poskusite malo kasneje.');
define('_JNEWS_MOD_PUB', 'jNews modul ni objavljen.');
define('_JNEWS_MOD_PUB_LINK', 'Kliknite tukaj, da ga objavite!');
define('_JNEWS_IMPORT_SUCCESS', 'uvoz uspešen');
define('_JNEWS_IMPORT_EXIST', 'naročnik je že v bazi podatkov');

// jNews Install
define('_JNEWS_INSTALL_CONFIG', 'jNews Nastavitve');
define('_JNEWS_INSTALL_SUCCESS', 'Namestitev uspela');
define('_JNEWS_INSTALL_ERROR', 'Napaka pri namestitvi');
define('_JNEWS_INSTALL_BOT', 'jNews vtičnik (Bot)');
define('_JNEWS_INSTALL_MODULE', 'jNews modul');
//Others
define('_JNEWS_JAVASCRIPT','!Pozor! Za pravilno delovanje mora biti Javascript vključen.');
define('_JNEWS_EXPORT_TEXT','Izvoz naročnikov bazira na izbranem seznamu. <br />Izvoz naročnikov za seznam');
define('_JNEWS_IMPORT_TIPS','Uvoz naročnikov. Informacije v datoteki morajo biti v naslednjem formatu: <br />' .
		'Name,email,receiveHTML(1/0),<span style="color: rgb(255, 0, 0);">confirmed(1/0)</span>');
define('_JNEWS_SUBCRIBER_EXIT', 'je že naročnik');
define('_JNEWS_GET_STARTED', 'Za začetek kliknite tukaj!');

//News since 1.0.1
define('_JNEWS_WARNING_1011','Pozor: 1011: Posodabljanje zaradi omejitve vašega serverja ni možno.');
define('_JNEWS_SEND_MAIL_FROM_TIPS', 'Izberite email naslov, ki bo prikazan kot pošiljatelj.');
define('_JNEWS_SEND_MAIL_NAME_TIPS', 'Izberite ime, ki bo prikazano kot pošiljatelj.');
define('_JNEWS_MAILSENDMETHOD_TIPS', 'Izberite željeni mailer: PHP mail function, <span>Sendmail</span> ali SMTP Server.');
define('_JNEWS_SENDMAILPATH_TIPS', 'To je mapa Mail serverja');
define('_JNEWS_LIST_T_TEMPLATE', 'Predloga');
define('_JNEWS_NO_MAILING_ENTERED', 'Skupno pismo ni izbrano');
define('_JNEWS_NO_LIST_ENTERED', 'Seznam ni izbran');
define('_JNEWS_SENT_MAILING' , 'Skupna pisma - poslana');
define('_JNEWS_SELECT_FILE', 'Izberite datoteko za ');
define('_JNEWS_LIST_IMPORT', 'Označite seznam(e), s katerim se se bo povezal naročnik.');
define('_JNEWS_PB_QUEUE', 'Naročnik je dodan, toda obstaja težava pri povezovanju z seznamom. Prosimo, da preverite.');
define('_JNEWS_UPDATE_MESS' , '');
define('_JNEWS_UPDATE_MESS1' , 'Posodobitev je priporočjiva!');
define('_JNEWS_UPDATE_MESS2' , 'Manjši popravki.');
define('_JNEWS_UPDATE_MESS3' , 'Nova različica.');
define('_JNEWS_UPDATE_MESS5' , 'Joomla 1.5 potrebuje posodabljanje.');
define('_JNEWS_UPDATE_IS_AVAIL' , ' dostopno!');
define('_JNEWS_NO_MAILING_SENT', 'Skupno pismo ni poslano!');
define('_JNEWS_SHOW_LOGIN', 'Prikažem prijavni obrazec');
define('_JNEWS_SHOW_LOGIN_TIPS', 'Izberite Da, če želite v Frontendu jNews prikazati obrazec. Z njim se bodo lahko registrirali novi uporabniki.');
define('_JNEWS_LISTS_EDITOR', 'Urejevalnik opisa seznama');
define('_JNEWS_LISTS_EDITOR_TIPS', 'Izberite Da, če želite uporabljati HTML urejevalnik za urejanje opisa seznama.');
define('_JNEWS_SUBCRIBERS_VIEW', 'Preglej naročnike');

//News since 1.0.2
define('_JNEWS_FRONTEND_SETTINGS' , 'Frontend nastavitve' );
define('_JNEWS_SHOW_LOGOUT', 'Prikaz gumba za odjavo');
define('_JNEWS_SHOW_LOGOUT_TIPS', 'Izberite Da, če želite v jNews nadzorni plošči (Frontend) prikazatii gumb za odjavo.');

//News since 1.0.3 CB integration
define('_JNEWS_CONFIG_INTEGRATION', 'Vključevanje');
define('_JNEWS_CB_INTEGRATION', 'Community Builder vključevanje');
define('_JNEWS_INSTALL_PLUGIN', 'Community Builder vtičnik (jNews vključevanje) ');
define('_JNEWS_CB_PLUGIN_NOT_INSTALLED', 'jNews vtičnik za Community Builder ni nameščen!');
define('_JNEWS_CB_PLUGIN', 'Seznam pri registraciji');
define('_JNEWS_CB_PLUGIN_TIPS', 'Izberide Da, če želite prikazati mailing sezname v Community Builder obrazcu za registracijo');
define('_JNEWS_CB_LISTS', 'Seznam ID');
define('_JNEWS_CB_LISTS_TIPS', 'VNOS JE OBVEZEN. Vpišite ID-je seznamov na katere se bodo uporabniki lahko naročili, ID-je ločite z vejico ,  (0 prikže vse sezname)');
define('_JNEWS_CB_INTRO', 'Uvodno besedilo');
define('_JNEWS_CB_INTRO_TIPS', 'Besedilo pred seznamom. PUSTITE PRAZNO, ČE GA NE ŽELITE PRIKAZATI.  Besedilo in njegov izgled lahko uredite s pomočjo HTML tagov.');
define('_JNEWS_CB_SHOW_NAME', 'Prikaz imena seznama');
define('_JNEWS_CB_SHOW_NAME_TIPS', 'Izberite Da, če želite, da se po vsakem uvodu prikaže tudi ime seznama.');
define('_JNEWS_CB_LIST_DEFAULT', 'Običajni check seznam');
define('_JNEWS_CB_LIST_DEFAULT_TIPS', 'Izberite Da, če želite, da se možnost za izbor seznama samodejno prikaže kot označena.');
define('_JNEWS_CB_HTML_SHOW', 'Prikaz Prejemaj HTML');
define('_JNEWS_CB_HTML_SHOW_TIPS', 'Izberite Da, če želite, da uporabniki sami odločajo o prejemanju mailov v HTML obliki. Izberite Ne, če želite, da vsi prejemajo v HTML.');
define('_JNEWS_CB_HTML_DEFAULT', 'Običajni Prejemaj HTML');
define('_JNEWS_CB_HTML_DEFAULT_TIPS', 'Za prikaz običajne HTML nastavitve seznama, izberite to možnost. V kolikor je Prikaz Prejemaj HTML postavljen na Ne, bo to običajna možnost.');

// Since 1.0.4
define('_JNEWS_BACKUP_FAILED', 'Backup datoteke ni uspel! Datoteka ni bila zamenjana.');
define('_JNEWS_BACKUP_YOUR_FILES', 'Backup stare različice datoteka je bil kreiran v mapi:');
define('_JNEWS_SERVER_LOCAL_TIME', 'Lokalni čas strežnika');
define('_JNEWS_SHOW_ARCHIVE', 'Prikaz gumba Arhiv');
define('_JNEWS_SHOW_ARCHIVE_TIPS', 'Za prikaz gumba Arhiv v Frontendu izberite Da');
define('_JNEWS_LIST_OPT_TAG', 'Tagi');
define('_JNEWS_LIST_OPT_IMG', 'Slike');
define('_JNEWS_LIST_OPT_CTT', 'Vsebina');
define('_JNEWS_INPUT_NAME_TIPS', 'Vpišite ime in priimek (najprej ime)');
define('_JNEWS_IP_TIPS', 'IP of the subscriber' );
define('_JNEWS_INPUT_EMAIL_TIPS', 'Vpišite vaš email naslov (Email mora biti veljaven, če želite prejemati naša sporočila.)');
define('_JNEWS_RECEIVE_HTML_TIPS', 'Izberite Da, za sporočila v HTML obliki, Ne, za sporočila v tekstovni obliki');
define('_JNEWS_TIME_ZONE_ASK_TIPS', 'Določite vaš časovni pas.');

// Since 1.0.5
define('_JNEWS_FILES' , 'Datoteke');
define('_JNEWS_FILES_UPLOAD' , 'Upload');
define('_JNEWS_MENU_UPLOAD_IMG' , 'Upload Slike');
define('_JNEWS_TOO_LARGE' , 'Datoteka je prevelika. Maksimalna dovoljena velikost je');
define('_JNEWS_MISSING_DIR' , 'Ciljna mapa ne obstaja');
define('_JNEWS_IS_NOT_DIR' , 'Ciljna mapa ne obstaja, ali pa je to samo običajna datoteka.');
define('_JNEWS_NO_WRITE_PERMS' , 'Ciljna mapa ni pripravljena za pisanje.');
define('_JNEWS_NO_USER_FILE' , 'Niste oizbrali datoteke za upload.');
define('_JNEWS_E_FAIL_MOVE' , 'Premik datoteke ni mogoč.');
define('_JNEWS_FILE_EXISTS' , 'Ciljna datoteka že obstaja.');
define('_JNEWS_CANNOT_OVERWRITE' , 'Ciljna datoteka že obstaja, zamenjava ni možna.');
define('_JNEWS_NOT_ALLOWED_EXTENSION' , 'Ta vrsta datoteke ni dovoljena.');
define('_JNEWS_PARTIAL' , 'Datoteka je samo delno naložena.');
define('_JNEWS_UPLOAD_ERROR' , 'Upload napaka:');
define('_JNEWS_DEV_NO_DEF_FILE' , 'Datoteka je samo delno naložena.');

// already exist but modified  added a <br/ on first line and added [SUBSCRIPTIONS] line>
define('_JNEWS_CONTENTREP', '{tag:subscriptions} = Tole bo zamenjano s povezavami za naročilo.' .
		' Tole je <strong>obvezno</strong>, da bi jNews sploh lahko pravilno funkcioniral.<br />' .
		'Če tukaj vstavite kakršnokoli drugo besedilo, se bo le to prikazovalo v vseh skupnih pismih povezanih s tem seznamom.' .
		' <br />Na koncu dodajte še sporočilo svojim naročnikom.  jNews bo za naročnike samodejno dodal povezavo, preko katere bodo lahko izmenjevali informacije, ali pa se odjavili iz naročenega seznama.');

// since 1.0.6
define('_JNEWS_NOTIFICATION', 'Obvestilo');  // shortcut for Email notification
define('_JNEWS_NOTIFICATIONS', 'Obvestilai');
define('_JNEWS_USE_SEF', 'SEF v mailih');
define('_JNEWS_USE_SEF_TIPS', 'Priporočljivo je, da izberete Ne.  Če ša vseeno želite, da URL v vaših mailih uporablja SEF, izberite Da.' .
		' <br /><b>Povezave bodo v obeh primerih delovale enako.  Možnost Ne zagotavlja, da bodo povezave v mailih vedno delovale, tudi če spremenite vaš SEF.</b> ');
define('_JNEWS_ERR_NB' , 'Napaka #: ERR');
define('_JNEWS_ERR_SETTINGS', 'Napaka v delovanju');
define('_JNEWS_ERR_SEND' ,'Pošiljanje poročila o napaki');
define('_JNEWS_ERR_SEND_TIPS' ,'Če želite, da bo jNews še boljši, izberite DA.  Tale možnost vam bo pošiljala obvestila o napakah.  Ni vam več potrebno pošiljati bug poročila ;-) <br /> <b>NE POŠILJAJO SE NOBENE OSEBNE INFORMACIJE</b>.  Mi sploh ne vemo s katere spletne strani je bilo poslano sporočilo, saj se pošiljajo samo informacije o jNews, PHP nastavitvah in SQL poizvedbe. ');
define('_JNEWS_ERR_SHOW_TIPS' ,'Izberite Da, da se na ekranu prikažejo številčne kode napak.  Uporabno predvsem za razhroščevanje. ');
define('_JNEWS_ERR_SHOW' ,'Prikaz napak');
define('_JNEWS_LIST_SHOW_UNSUBCRIBE', 'Prikaz povezav za odjavo');
define('_JNEWS_LIST_SHOW_UNSUBCRIBE_TIPS', 'Izberite Da, da na dnu skupinskega pisma prikažete povezave za odjavo naročnin. <br /> Možnost Ne isključuje footer in povezave.');
define('_JNEWS_UPDATE_INSTALL', '<span style="color: rgb(255, 0, 0);">POSEBNO OPOZORILO!</span> <br />V kolikor opravljate posodabljanje iz predhodnih jNews namestitev, bo potrebno posodobiti strukturo vaše baze. Kliknite na sledeči gumb (Vaši podatki bodo ostali nedotaknjeni)');
define('_JNEWS_UPDATE_INSTALL_BTN' , 'Posodobi tabele in nastavitve');
define('_JNEWS_MAILING_MAX_TIME', 'Največji čakalni čas' );
define('_JNEWS_MAILING_MAX_TIME_TIPS', 'Določite najdaljši čas za pošiljanje vsake skupine mailov, ki se pošilja iz čakalne vrste. Priporočamo, da nastavite med 30 sek in 2 min.');

// virtuemart integration beta
define('_JNEWS_VM_INTEGRATION', 'VirtueMart Integracija');
define('_JNEWS_VM_COUPON_NOTIF', 'ID kupona obvestila');
define('_JNEWS_VM_COUPON_NOTIF_TIPS', 'Določite ID številko skupnega pisma, ki ga želite uporabiti za pošiljanje kuponov vašim kupcem.');
define('_JNEWS_VM_NEW_PRODUCT', 'ID obvestila o novih proizvodih');
define('_JNEWS_VM_NEW_PRODUCT_TIPS', 'Določite ID številko skupnega pisma, ki ga želite uporabiti za pošiljanje obvestil o novih proizvodih.');

// since 1.0.8
// create forms for subscriptions
define('_JNEWS_FORM_BUTTON', 'Ustvari obrazac');
define('_JNEWS_FORM_COPY', 'HTML koda');
define('_JNEWS_FORM_COPY_TIPS', 'Kopiraj generirano HTML kodo v vašo HTML stran.');
define('_JNEWS_FORM_LIST_TIPS', 'Izberite seznam, ki ga želite dodeliti obrazcu');
// update messages
define('_JNEWS_UPDATE_MESS4' , 'Avtomatsko posodabljanje ni možno.');
define('_JNEWS_WARNG_REMOTE_FILE' , 'Odaljena datoteka ni dostopna.');
define('_JNEWS_ERROR_FETCH' , 'Napaka pri pristopu do datoteke.');

define('_JNEWS_CHECK' , 'Preverjanje');
define('_JNEWS_MORE_INFO' , 'Dodatni info');
define('_JNEWS_UPDATE_NEW' , 'Posodabljenje na novo različico');
define('_JNEWS_UPGRADE' , 'Posodabljenje v novejši izdelek');
define('_JNEWS_DOWNDATE' , 'Povrnitev na predhodno različico');
define('_JNEWS_DOWNGRADE' , 'Povrnitev na osnovni izdelek');
define('_JNEWS_REQUIRE_JOOM' , 'Zahteva Joomla');
define('_JNEWS_TRY_IT' , 'Preizkusite!');
define('_JNEWS_NEWER', 'Nikoli');
define('_JNEWS_OLDER', 'Starejša');
define('_JNEWS_CURRENT', 'Sedanja');

// since 1.0.9
define('_JNEWS_CHECK_COMP', 'Preizkusite tudi druge komponente');
define('_JNEWS_MENU_VIDEO' , 'Video tutoriali');
define('_JNEWS_SCHEDULE_TITLE', 'Nastavitve avtomatskega urnika');
define('_JNEWS_ISSUE_NB_TIPS' , 'Sistem avtomatsko generira število objav' );
define('_JNEWS_SEL_ALL' , 'Vsa skupinska pisma');
define('_JNEWS_SEL_ALL_SUB' , 'Vsi seznami');
define('_JNEWS_INTRO_ONLY_TIPS' , 'Če označite to možnost bo v skupinsko pismo vstavljen samo uvod članka z povezavo. Podrobnosti o članku pa na vaši spletni strani.' );
define('_JNEWS_TAGS_TITLE' , 'Tag vsebine');
define('_JNEWS_TAGS_TITLE_TIPS' , 'Kopirajte in prilepite tale tag v skupinsko pismo tam, kjer želite vsaviti tole vsebino.');
define('_JNEWS_PREVIEW_EMAIL_TEST', 'Določite email naslov an katerega boste poslali testni mail');
define('_JNEWS_PREVIEW_TITLE' , 'Pregled');
define('_JNEWS_AUTO_UPDATE' , 'Obvestilo o posodabljanju');
define('_JNEWS_AUTO_UPDATE_TIPS' , 'Izberite Da, če želite prejemati obvestila o novih različicah in nadgraditvah komponent. <br />POZOR!! Za omogočanje te funkcije je potrebno predhodno izklopiti možnost Prikaži nasvete.');

// since 1.1.0
define('_JNEWS_LICENSE' , 'Info o Licenci');

// since 1.1.1
define('_JNEWS_NEW' , 'Novo');
define('_JNEWS_SCHEDULE_SETUP', 'Če želite pošiljati autoresponderje, je potrebno predhodno nastaviti planer.');
define('_JNEWS_SCHEDULER', 'Planer');
define('_JNEWS_jnews_CRON_DESC' , 'v kolikor nimate administratorskega dostopa do cron funkcij, se lahko za jNews Cron brezplačno registrirate na:' );
define('_JNEWS_CRON_DOCUMENTATION' , 'Dodatne informacije o urejanju jNews Planerja lahko najdete na:');
define('_JNEWS_CRON_DOC_URL' , '<a href="http://www.acajoom.com/index.php?option=com_content&task=blogcategory&id=29"
 target="_blank">http://www.acajoom.com/index.php?option=com_content&task=blogcategory&id=29</a>' );
define( '_JNEWS_QUEUE_PROCESSED' , 'Čakalna vrsta uspešno procesirana...' );
define( '_JNEWS_ERROR_MOVING_UPLOAD' , 'Napaka pri premeščanju uvožene datoteke' );

//since 1.1.4
define( '_JNEWS_SCHEDULE_FREQUENCY' , 'Pogostost Planerja' );
define( '_JNEWS_CRON_MAX_FREQ' , 'Max. Pogostost Planerja' );
define( '_JNEWS_CRON_MAX_FREQ_TIPS' , 'Določite največjo pogostost Planerja (v minutah).  To bo omejilo Planer, kjub temu, da je mogoče cron nastavljen na večjo pogostost.' );
define( '_JNEWS_CRON_MAX_EMAIL' , 'Največje število mailov v eni seriji' );
define( '_JNEWS_CRON_MAX_EMAIL_TIPS' , 'Določite nNajvečje število mailov v eni seriji. V kolikor nastavite na 0, bo boslan sami 1 mail' );
define( '_JNEWS_CRON_MINUTES' , ' minut' );
define( '_JNEWS_SHOW_SIGNATURE' , 'Prikaz email footer-ja' );
define( '_JNEWS_SHOW_SIGNATURE_TIPS' , 'Želite dodati promocijo v jNews v footer.' );
define( '_JNEWS_QUEUE_AUTO_PROCESSED' , 'Auto-responderji uspešno procesirani...' );
define( '_JNEWS_QUEUE_NEWS_PROCESSED' , 'Načrtovani newsletterji uspešno procesuirani...' );
define( '_JNEWS_MENU_SYNC_USERS' , 'Sinkronizacija uporabnika' );
define( '_JNEWS_SYNC_USERS_SUCCESS' , 'Uporabniki uspešno sinhronizirani!' );

// compatibility with Joomla 15
if (!defined('_BUTTON_LOGOUT')) define( '_BUTTON_LOGOUT', 'Odjava' );
if (!defined('_CMN_YES')) define( '_CMN_YES', 'Da' );
if (!defined('_CMN_NO')) define( '_CMN_NO', 'Ne' );
if (!defined('_HI')) define( '_HI', 'Pozdrav' );
if (!defined('_CMN_TOP')) define( '_CMN_TOP', 'Vrh' );
if (!defined('_CMN_BOTTOM')) define( '_CMN_BOTTOM', 'Dno' );
//if (!defined('_BUTTON_LOGOUT')) define( '_BUTTON_LOGOUT', 'Odjava' );

// For include title only or full article in content item tab in newsletter edit - p0stman911
define('_JNEWS_TITLE_ONLY_TIPS' , 'Če izberete to možnost, bo v maile dodan samo naslov članka in povezava na vašo spletno stran.');
define('_JNEWS_TITLE_ONLY' , 'Samo Naslov');
define('_JNEWS_FULL_ARTICLE_TIPS' , 'Če izberete to možnost, bo v maile dodan celoten članek');
define('_JNEWS_FULL_ARTICLE' , 'Celi članek');
define('_JNEWS_CONTENT_ITEM_SELECT_T', 'Izberite članek, ki se bo dodal sporočilu. <br />Kopirajte in prilepite <b>tag članka</b> v skupinsko pismo.  Izberete lahko vstavljanje celotnega besedila, samo uvod, ali pa samo naslov (možnost 0, 1, ili 2). ');
define('_JNEWS_SUBSCRIBE_LIST2', 'Mailing lista(e)');

// For sorting in content tab by date, section or category
define('_JNEWS_CONTENT_ITEM_SORT', 'Razvrstim po: ');
define('_JNEWS_SORT_DATE' , 'Datum');
define('_JNEWS_SORT_DATE_TIPS' , 'S to možnostjo bodo članki razvrščeni naraščajoče glede na datum nastanka');
define('_JNEWS_SORT_SECTION' , 'Odsek');
define('_JNEWS_SORT_SECTION_TIPS' , 'S to možnostjo bodo članki razvrščeni naraščajoče po odseku');
define('_JNEWS_SORT_CATEGORY' , 'Kategorija');
define('_JNEWS_SORT_CATEGORY_TIPS' , 'S to možnostjo bodo članki razvrščeni naraščujoče po kategoriji');
define('_JNEWS_SORT_BUTTON' , 'Razvrstim');


// smart-newsletter function
define('_JNEWS_AUTONEWS', 'Smart-Newsletter');
define('_JNEWS_MENU_AUTONEWS', 'Smart-Newsletterji');
define('_JNEWS_AUTO_NEWS_OPTION', 'Smart-Newsletter možnosti');
define('_JNEWS_AUTONEWS_FREQ', 'Newsletter pogostost');
define('_JNEWS_AUTONEWS_FREQ_TIPS', 'Določite, kako pogosto se bodo pošiljali smart-newsletterji.');
define('_JNEWS_AUTONEWS_SECTION', 'Odsek članka');
define('_JNEWS_AUTONEWS_SECTION_TIPS', 'Določite odsek iz katerega se bodo izbirali članki.');
define('_JNEWS_AUTONEWS_CAT', 'Kategorija članka');
define('_JNEWS_AUTONEWS_CAT_TIPS', 'Določite kategorijo iz katere se bodo zbirali članki (VSE za vse članke v tem odseku).');
define('_JNEWS_SELECT_SECTION', 'Izbor odseka');
define('_JNEWS_SELECT_CAT', 'Vse kategorije');
define('_JNEWS_AUTO_DAY_CH8', 'Kvartalno');
define('_JNEWS_AUTONEWS_STARTDATE', 'Datum začetka');
define('_JNEWS_AUTONEWS_STARTDATE_TIPS', 'Določite datum pričetka pošiljanja Smart Newsletterja.');
define('_JNEWS_AUTONEWS_TYPE', 'Prikaz vsebine');// how we see the content which is included in the newsletter
define('_JNEWS_AUTONEWS_TYPE_TIPS', 'Celoten članek: v newsletterju bo prikazan celoten članek.<br />' .
		'Samo Uvod: v newsletterju prikaže samo uvod članka.<br/>' .
		'Samo Naslov: v newsletterju prikaže samo naslov članka.');
define('_JNEWS_TAGS_AUTONEWS', '[SMARTNEWSLETTER] = Tole bo zamenjano z Smart-newsletterjem.' );

//since 1.1.3
define('_JNEWS_MALING_EDIT_VIEW', 'Ustvari / Preglej Maile');
define('_JNEWS_LICENSE_CONFIG' , 'Licenca' );
define('_JNEWS_ENTER_LICENSE' , 'Vpiši licenco');
define('_JNEWS_ENTER_LICENSE_TIPS' , 'Vpiši številko licence in jo shrani.');
define('_JNEWS_LICENSE_SETTING' , 'Nastavitve licence' );
define('_JNEWS_GOOD_LIC' , 'Vaša licenca je veljavna.' );
define('_JNEWS_NOTSO_GOOD_LIC' , 'Vaša licenca ni veljavna: ' );
define('_JNEWS_PLEASE_LIC' , 'Prosimo vas, da se obrnete na jNews tehnično pomoč pri nadgradnji vaše licence ( license@acajoom.com ).' );
define('_JNEWS_DESC_PLUS', 'jNews Plus so prvi zaporedni auto-responderji za Joomla CMS.  ' . _JNEWS_FEATURES );
define('_JNEWS_DESC_PRO', 'jNews PRO je celovit mailing sistem za Joomla CMS.  ' . _JNEWS_FEATURES );

//since 1.1.4
define('_JNEWS_ENTER_TOKEN' , 'Upišite žeton');

define('_JNEWS_ENTER_TOKEN_TIPS' , 'Prosimo vas, da vpišete številko žetona, ki ste ga pri nakupi jNews prejeli preko maila. ');

define('_JNEWS_jnews_SITE', 'jNews stran:');
define('_JNEWS_MY_SITE', 'Moja stran:');

define( '_JNEWS_LICENSE_FORM' , ' ' .
 		'Kliknite tukaj, da se vam odpre obrazec za licenco.</a>' );
define('_JNEWS_PLEASE_CLEAR_LICENSE' , 'Prosimo vas, da izpraznite polje za licenco in poizkusite ponovno.<br />  V kolikor težave ne bodo odpravljene, ' );

define( '_JNEWS_LICENSE_SUPPORT' , 'Če imate dodatna vprašanja, ' . _JNEWS_PLEASE_LIC );

define( '_JNEWS_LICENSE_TWO' , 'lahko dobite priročnik za licenco tako, da v obrazec za licenco vpišete številko vašega žetona in URL spletne strani (ki je označen z zeleno barvo na vrhu te strani). '
			. _JNEWS_LICENSE_FORM . '<br /><br/>' . _JNEWS_LICENSE_SUPPORT );

define('_JNEWS_ENTER_TOKEN_PATIENCE', 'Licenca se bo generirala avtomatsko takoj, ko skranite žeton. ' .
		' Žeton se običajno potrdi v 2 minutah, pri nekaterih primerih pa lahko traja tudi do 15 minut.<br />' .
		'<br />Čez nekaj minut preverite to kontrolno ploščo.  <br /><br />' .
		'V kolikor v 15-ih minutah ne prejmete licenčnega ključa, '. _JNEWS_LICENSE_TWO);


define( '_JNEWS_ENTER_NOT_YET' , 'Vaš žeton še ni bil potrjen.');
define( '_JNEWS_UPDATE_CLICK_HERE' , 'Prosimo vas, da obiščete <a href="http://www.acajoom.com" target="_blank">www.acajoom.com</a> za download najnovejše različice.');
//define( '_JNEWS_NOTIF_UPDATE' , 'Za prejemanje obvestil o novih različicah vpišite svoj email naslov in kliknite subscribe ');

define('_JNEWS_THINK_PLUS', 'Če bi radi še boljši mailing sistema, si omislite Plus!');
define('_JNEWS_THINK_PLUS_1', 'Sekvenčni auto-responderji');
define('_JNEWS_THINK_PLUS_2', 'Ustvarite razpored pošiljanja newsletterjev za določen datum');
define('_JNEWS_THINK_PLUS_3', 'Brez servserskih omejitev');
define('_JNEWS_THINK_PLUS_4', 'in veliko, veliko več...');

//since 1.2.2
define( '_JNEWS_LIST_ACCESS', 'Dostop seznamu' );
define( '_JNEWS_INFO_LIST_ACCESS', 'Določite katera skupina uporabnikov lahko bere in se naroči na ta seznam' );
define( 'JNEWS_NO_LIST_PERM', 'Nimate dovoljenja za naročilo na ta seznam' );

//Archive Configuration
 define('_JNEWS_MENU_TAB_ARCHIVE', 'Arhiv');
 define('_JNEWS_MENU_ARCHIVE_ALL', 'Ves arhiv');

//Archive Lists
 define('_JNEWS_FREQ_OPT_0', 'Nobena');
 define('_JNEWS_FREQ_OPT_1', 'Vsaki teden');
 define('_JNEWS_FREQ_OPT_2', 'Vsak drugi teden');
 define('_JNEWS_FREQ_OPT_3', 'Vsak mesec');
 define('_JNEWS_FREQ_OPT_4', 'Vsak kvartal');
 define('_JNEWS_FREQ_OPT_5', 'Vsako leto');
 define('_JNEWS_FREQ_OPT_6', 'Drugo');

define('_JNEWS_DATE_OPT_1', 'Datum kreiranja');
define('_JNEWS_DATE_OPT_2', 'Datum spremembe');

define('_JNEWS_ARCHIVE_TITLE', 'Določitev pogostosti auto-arhiva');
define('_JNEWS_FREQ_TITLE', 'Postost arhiva');
define('_JNEWS_FREQ_TOOL', 'Določite, kako pogosto kako pogosto bodo arhivirane vsebine vaše spletne strani.');
define('_JNEWS_NB_DAYS', 'Število dni');
define('_JNEWS_NB_DAYS_TOOL', 'To je samo možnost Drugo! Določite število dni med dvema arhivoma.');
define('_JNEWS_DATE_TITLE', 'Tip datuma');
define('_JNEWS_DATE_TOOL', 'Določite, ali se arhiviranje izvrši glede na datum kreiranja, ali pa na datum spremembe.');

define('_JNEWS_MAINTENANCE_TAB', 'Vzdrževanje');
define('_JNEWS_MAINTENANCE_FREQ', 'Pogostost vzdrževanja');
define( '_JNEWS_MAINTENANCE_FREQ_TIPS', 'Določite pogostost vzdrževanja.' );
define( '_JNEWS_CRON_DAYS' , 'sat(i)' );

define( '_JNEWS_LIST_NOT_AVAIL', 'Ni seznamov.');
define( '_JNEWS_LIST_ADD_TAB', 'Dodaj/Spremeni' );

define( '_JNEWS_LIST_ACCESS_EDIT', 'Dostop Dodaj/Spremeni Mail' );
define( '_JNEWS_INFO_LIST_ACCESS_EDIT', 'Določite skupino uporabnikov, ki bodo lahko dodajali in urejali skupinska pisma za ta seznam' );
define( '_JNEWS_MAILING_NEW_FRONT', 'Kreiraj novo skupinsko pismo' );

define('_JNEWS_AUTO_ARCHIVE', 'Auto-Arhiv');
define('_JNEWS_MENU_ARCHIVE', 'Auto-Arhiv');

//Extra tags:
define('_JNEWS_TAGS_ISSUE_NB', '{tag:issuenb} = Tole bo zamenjano z številko izdaje newsletterja.');
define('_JNEWS_TAGS_DATE', '{tag:date} = Tole bo zamenjano z datumom pošiljanja.');
define('_JNEWS_TAGS_CB', '[CBTAG:{field_name}] = Tole bo zamenjano z vrednostjo, ki se prevzame iz Community Builder polja: npr. [CBTAG:firstname] ');
define( '_JNEWS_MAINTENANCE', 'Vzdrževanje' );

define('_JNEWS_THINK_PRO', 'Ko imate profesionalne potrebe, uporabljajte profesionalne komponente!');
define('_JNEWS_THINK_PRO_1', 'Smart-Newsletterji');
define('_JNEWS_THINK_PRO_2', 'Določite stopnjo pristopa k vašemu seznamu');
define('_JNEWS_THINK_PRO_3', 'Določite, kdo lahko dodaja/ureja maile');
define('_JNEWS_THINK_PRO_4', 'Več tagov: dodajte vaša CB polja');
define('_JNEWS_THINK_PRO_5', 'Auto-arhiviranje Joomla članka');
define('_JNEWS_THINK_PRO_6', 'Optimizacija baze podatkov');

define('_JNEWS_LIC_NOT_YET', 'Vaša licenca še ni potrjena.  Prosimo vas, da preverite zavihek Licenca v nadzorni plošči spletne strani.');
define('_JNEWS_PLEASE_LIC_GREEN' , 'Preverite, če ste naši tehnični službi poslali informacije, ki so poudarjena z zeleno barvo na vrhu zavihka.' );

define('_JNEWS_FOLLOW_LINK' , 'Prevzem licence');
define( '_JNEWS_FOLLOW_LINK_TWO' , 'Vašo licenco lahko dobite z vpisom žtevilke žetona in URL spletne strani (poudarjena zelena barva na vrhu te strani) v obrazec za licenco. ');
define( '_JNEWS_ENTER_TOKEN_TIPS2', ' Nato kliknite na Uporabi v zgornjem desnem menuju.' );
define( '_JNEWS_ENTER_LIC_NB', 'Vpišite vašo licenco' );
define( '_JNEWS_UPGRADE_LICENSE', 'Nadgradite vašo licenco');
define( '_JNEWS_UPGRADE_LICENSE_TIPS' , 'V kolikor ste prejeli žeton za posodabljanje vaše licence, ga vpišite tukaj in kliknite Uporabi. Nadaljujte z točko <b>2</b> da prejmete svojo novo licenco.' );

define( '_JNEWS_MAIL_FORMAT', 'Format Kodiranja' );
define( '_JNEWS_MAIL_FORMAT_TIPS', 'Katero kodno tabelo boste uporabili pri vaših skupinskih pisem. (Velja samo pri text in MIME)' );
define( '_JNEWS_jnews_CRON_DESC_ALT', 'V kolikor na vaši spletni strani nimate dostopa do upravljanja z cron-om, lahko uporabljate brezplačno jCron komponento za ustvarjanje cron-ov.' );

//since 1.3.1
define('_JNEWS_SHOW_AUTHOR', 'Prikažem ime avtorja');
define('_JNEWS_SHOW_AUTHOR_TIPS', 'Izberite Da, če želite, da se članku, ki ga dodajate v skupinsko pismo, doda tudi ime avtorja');

//since 1.3.5
define('_JNEWS_REGWARN_NAME','Vpošite svoje ime.');
define('_JNEWS_REGWARN_MAIL','Vpišite veljaven email.');

//since 1.5.6
define('_JNEWS_ADDEMAILREDLINK_TIPS','V kolikor izberete Da, se bo email uporabnika dodal kot parameter na koncu vašega URL-ja za preusmeritev (povezava za preusmeritev na vaš modul ali za zunanji jNews obrazec).<br/>To je lahko dobrodošlo, ko na vaši strani želite izvršiti neko posebno skripto.');
define('_JNEWS_ADDEMAILREDLINK','Dodaj e-mail v povezavo za preusmerjanje');

//since 1.6.3
define('_JNEWS_ITEMID','ItemId');
define('_JNEWS_ITEMID_TIPS','Ovaj ItemId bo dodan vašim jNews povezavam.');

//since 1.6.5
define('_JNEWS_SHOW_JCALPRO','jCalPRO');
define('_JNEWS_SHOW_JCALPRO_TIPS','Prikažem integriranu kartico za jCalPRO <br/>(samo če je jCalPRO instaliran na vaši strani!)');
define('_JNEWS_JCALTAGS_TITLE','jCalPRO Tag:');
define('_JNEWS_JCALTAGS_TITLE_TIPS','Kopirajte in prilepite tale tag v skupinsko pismo. Vstavite ga tam, kjer boste vstavili dogodke.');
define('_JNEWS_JCALTAGS_DESC','Opis:');
define('_JNEWS_JCALTAGS_DESC_TIPS','Izberite Da, če želite vstaviti opis dogodka');
define('_JNEWS_JCALTAGS_START','Datum pričetka:');
define('_JNEWS_JCALTAGS_START_TIPS','Izberite Da, če želite vstaviti datum pričetka dogodka');
define('_JNEWS_JCALTAGS_READMORE','Več:');
define('_JNEWS_JCALTAGS_READMORE_TIPS','Izberite Da, če želite vstaviti <b>link Več</b> za za ta dogodek');
define('_JNEWS_REDIRECTCONFIRMATION','URL preusmeritve');
define('_JNEWS_REDIRECTCONFIRMATION_TIPS','V kolikor potrebujete e-mail potrdila, bo uporabnik po kliku na povezavo avtomatsko potrjen in preusmerjen na ta URL.');

//since 2.0.0 compatibility with Joomla 1.5
if(!defined('_CMN_SAVE') and defined('CMN_SAVE')) define('_CMN_SAVE',CMN_SAVE);
if(!defined('_CMN_SAVE')) define('_CMN_SAVE','Shrani');
if(!defined('_NO_ACCOUNT')) define('_NO_ACCOUNT','Še nimate uporabniškega računa?');
if(!defined('_CREATE_ACCOUNT')) define('_CREATE_ACCOUNT','Registracija');
if(!defined('_NOT_AUTH')) define('_NOT_AUTH','Niste pooblaščeni za pregled teh podatkov.');

//since 3.0.0
define('_JNEWS_DISABLETOOLTIP','Izključiti pojasnila');
define('_JNEWS_DISABLETOOLTIP_TIPS', 'Izključiti pojasnila v Frontendu');
define('_JNEWS_MINISENDMAIL', 'Uporabim Mini SendMail');
define('_JNEWS_MINISENDMAIL_TIPS', 'V kolikor vaš server uporablja Mini SendMail, izberite to možnost. Ta možnost ne dodaja imena uporabnika v glavo sporočila');

//Since 3.1.5
define('_JNEWS_READMORE','Preberi več...');
define('_JNEWS_VIEWARCHIVE','Klikni tukaj');

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
define('_JNEWS_QUEUE_EMAIL','Vsebina');
define('_JNEWS_QUEUE_PRIOR','Prioriteta');
define('_JNEWS_QUEUE_ATT','Attempts');
define('_JNEWS_QUEUE_DEL', 'Briši');
define('_JNEWS_PROCESS_Q','Process Queue');
define('_JNEWS_CLEAN_Q','Clean Queue');
define('_JNEWS_SENDDATE','Datum pošiljanja');
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


