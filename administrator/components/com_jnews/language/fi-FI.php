<?php
defined('_JEXEC') or die('Restricted access');
### Copyright (c) 2006-2012 Joobi Limited. All rights reserved.
### license GNU GPLv3 , link http://www.joobi.co

/**
* <p>Finnish language file</p>
* @author Tero Kankaanperä <tero@terokankaanpera.fi>
* @version $Id: finnish.php 491 2007-02-01 22:56:07Z chris $
* @link http://terokankaanpera.fi
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
define('_JNEWS_DESC_CORE', 'jNews on postitus, uutiskirje ja automaattiviesti komponentti tehokkaaseen viestintään käyttäjiesi ja asiakkaidesi kanssa.');
define('_JNEWS_DESC_GPL', 'jNews on postitus, uutiskirje ja automaattiviesti komponentti tehokkaaseen viestintään käyttäjiesi ja asiakkaidesi kanssa.');
define('_JNEWS_FEATURES', 'jNews, your communication partner!');

// Type of lists
define('_JNEWS_NEWSLETTER', 'Uutiskirje');
define('_JNEWS_AUTORESP', 'Automaattiviesti');
define('_JNEWS_AUTORSS', 'RSS');
define('_JNEWS_ECARD', 'eKortti');
define('_JNEWS_POSTCARD', 'Postikortti');
define('_JNEWS_PERF', 'Näytös');
define('_JNEWS_COUPON', 'Kuponki');
define('_JNEWS_CRON', 'Ajoitettu tehtävä');
define('_JNEWS_MAILING', 'Postitus');
define('_JNEWS_LIST', 'Lista');

 //jnews Menu
define('_JNEWS_MENU_LIST', 'Listat');
define('_JNEWS_MENU_SUBSCRIBERS', 'Tilaajat');
define('_JNEWS_MENU_NEWSLETTERS', 'Uutiskirjeet');
define('_JNEWS_MENU_AUTOS', 'Automaattiviestit');
define('_JNEWS_MENU_COUPONS', 'Kupongit');
define('_JNEWS_MENU_CRONS', 'Ajoitetut tehtävät');
define('_JNEWS_MENU_AUTORSS', 'RSS');
define('_JNEWS_MENU_ECARD', 'eKortit');
define('_JNEWS_MENU_POSTCARDS', 'Postikortit');
define('_JNEWS_MENU_PERFS', 'Näytökset');
define('_JNEWS_MENU_TAB_LIST', 'Listat');
define('_JNEWS_MENU_MAILING_TITLE', 'Postitukset');
define('_JNEWS_MENU_MAILING' , 'Postitukset: ');
define('_JNEWS_MENU_STATS', 'Tilastot');
define('_JNEWS_MENU_STATS_FOR', 'Tilastot: ');
define('_JNEWS_MENU_CONF', 'Asetukset');
define('_JNEWS_MENU_UPDATE', 'Tuonti');
define('_JNEWS_MENU_ABOUT', 'Tietoa');
define('_JNEWS_MENU_LEARN', 'Oppimiskeskus');
define('_JNEWS_MENU_MEDIA', 'Medianhallinta');
define('_JNEWS_MENU_HELP', 'Ohje');
define('_JNEWS_MENU_CPANEL', 'Ohjauspaneeli');
define('_JNEWS_MENU_IMPORT', 'Tuo');
define('_JNEWS_MENU_EXPORT', 'Vie');
define('_JNEWS_MENU_SUB_ALL', 'Tilaa kaikki');
define('_JNEWS_MENU_UNSUB_ALL', 'Peru kaikki');
define('_JNEWS_MENU_VIEW_ARCHIVE', 'Arkisto');
define('_JNEWS_MENU_PREVIEW', 'Esikatselu');
define('_JNEWS_MENU_SEND', 'Lähetä');
define('_JNEWS_MENU_SEND_TEST', 'Tee testilähetys');
define('_JNEWS_MENU_SEND_QUEUE', 'Käsittele jono');
define('_JNEWS_MENU_VIEW', 'Katso');
define('_JNEWS_MENU_COPY', 'Kopioi');
define('_JNEWS_MENU_VIEW_STATS' , 'Katso tilastot');
define('_JNEWS_MENU_CRTL_PANEL' , ' Ohjauspaneeli');
define('_JNEWS_MENU_LIST_NEW' , ' Luo lista');
define('_JNEWS_MENU_LIST_EDIT' , ' Muokkaa listaa');
define('_JNEWS_MENU_BACK', 'Takaisin');
define('_JNEWS_MENU_INSTALL', 'Asennus');
define('_JNEWS_MENU_TAB_SUM', 'Yhteenveto');
define('_JNEWS_STATUS' , 'Tila');
define('_JNEWS_MENU_DEL_QUEUE' , 'Tyhjennä jono');

// messages
define('_JNEWS_ERROR' , ' Tapahtui virhe! ');
define('_JNEWS_SUB_ACCESS' , 'Käyttöoikeudet');
define('_JNEWS_DESC_CREDITS', 'Credits');
define('_JNEWS_DESC_INFO', 'Tietoa');
define('_JNEWS_DESC_HOME', 'Kotisivu');
define('_JNEWS_DESC_MAILING', 'Postitus');
define('_JNEWS_DESC_SUBSCRIBERS', 'Tilaajat');
define('_JNEWS_PUBLISHED','Julkaistu');
define('_JNEWS_UNPUBLISHED','Piilotettu');
define('_JNEWS_DELETE','Poista');
define('_JNEWS_FILTER','Suodata');
define('_JNEWS_UPDATE','Päivitä');
define('_JNEWS_SAVE','Tallenna');
define('_JNEWS_CANCEL','Peru');
define('_JNEWS_NAME','Nimi');
define('_JNEWS_EMAIL','Sähköpostiosoite');

define('_JNEWS_SELECT','Valitse');
define('_JNEWS_ALL','Kaikki');
define('_JNEWS_SEND_A', 'Lähetä ');
define('_JNEWS_SUCCESS_DELETED', ' poistettiin onnistuneesti');
define('_JNEWS_LIST_ADDED', 'Lista luotiin onnistuneesti');
define('_JNEWS_LIST_COPY', 'Lista kopioitiin onnistuneesti');
define('_JNEWS_LIST_UPDATED', 'Lista päivitettiin onnistuneesti');
define('_JNEWS_MAILING_SAVED', 'Postitus tallennettiin onnistuneesti.');
define('_JNEWS_UPDATED_SUCCESSFULLY', 'päivitettiin onnistuneesti.');

### Subscribers information ###
//subscribe and unsubscribe info
define('_JNEWS_SUB_INFO', 'Tilaajan tiedot');
define('_JNEWS_VERIFY_INFO', 'Ole hyvä ja tarkista antamasi linkki, tietoja puuttuu.');
define('_JNEWS_INPUT_NAME', 'Nimi');
define('_JNEWS_INPUT_EMAIL', 'Sähköpostiosoite');
define('_JNEWS_RECEIVE_HTML', 'HTML muotoilu?');
define('_JNEWS_TIME_ZONE', 'Aikavyöhyke');
define('_JNEWS_BLACK_LIST', 'Sulkulista');
define('_JNEWS_REGISTRATION_DATE', 'Rekisteröitynyt');
define('_JNEWS_USER_ID', 'Käyttäjän id');
define('_JNEWS_DESCRIPTION', 'Kuvaus');
define('_JNEWS_ACCOUNT_CONFIRMED', 'Tilisi on aktivoitu.');
define('_JNEWS_SUB_SUBSCRIBER', 'Tilaaja');
define('_JNEWS_SUB_PUBLISHER', 'Julkaisija');
define('_JNEWS_SUB_ADMIN', 'Ylläpitäjä');
define('_JNEWS_REGISTERED', 'Rekisteröitynyt');
define('_JNEWS_SUBSCRIPTIONS', 'Tilauksesi');
define('_JNEWS_SEND_UNSUBCRIBE', 'Lähetä peruutusviesti');
define('_JNEWS_SEND_UNSUBCRIBE_TIPS', 'Napsauta Kyllä lähettääksesi peruutusviestin vahvistusviestin.');
define('_JNEWS_SUBSCRIBE_SUBJECT_MESS', 'Ole hyvä ja vahvista tilauksesi');
define('_JNEWS_UNSUBSCRIBE_SUBJECT_MESS', 'Peruutusvahvistus');
define('_JNEWS_DEFAULT_SUBSCRIBE_MESS', 'Tervetuloa {tag:name},<br />' .
		'Vielä yksi askel ja olet tilannut uutiskirjeen.  Ole hyvä ja napsauta seuraavaa linkkiä vahvistaaksesi tilauksesi.' .
		'<br /><br />{tag:confirm}<br /><br />Jos sinulla on kysyttävää ota yhteyttä ylläpitäjään.');
define('_JNEWS_DEFAULT_UNSUBSCRIBE_MESS', 'Tämä on vahvistus, että olet peruuttanut uutiskirjeemme tilauksen.  Olemme pahoillamme siitä, että päätit peruuttaa tilauksesi ja haluamme muistuttaa, että voit uudistaa tilauksesi koska tahansa kotisivuillamme.  Jos sinulla on kysyttävää, ota yhteyttä ylläpitoomme.');

// jNews subscribers
define('_JNEWS_SIGNUP_DATE', 'Tilauspäivämäärä');
define('_JNEWS_CONFIRMED', 'Vahvistettu');
define('_JNEWS_SUBSCRIB', 'Tilaa');
define('_JNEWS_HTML', 'HTML muotoilu');
define('_JNEWS_RESULTS', 'Tulokset');
define('_JNEWS_SEL_LIST', 'Valitse lista');
define('_JNEWS_SEL_LIST_TYPE', '- Valitse listan tyyppi -');
define('_JNEWS_SUSCRIB_LIST', 'Listaa kaikki tilaajat');
define('_JNEWS_SUSCRIB_LIST_UNIQUE', 'Tilaajat listalle : ');
define('_JNEWS_NO_SUSCRIBERS', 'Listalla ei ole tilaajia.');
define('_JNEWS_COMFIRM_SUBSCRIPTION', 'Vahvistus sähköposti on lähetetty sähköpostiosoitteeseesi.  Ole hyvä ja tarkista sähköpostisi ja napsauta viestissä olevaa linkkiä.<br />' .
		'Sinun täytyy vahvistaa sähköpostiosoitteesi ennen kuin tilauksesi tulee voimaan.');
define('_JNEWS_SUCCESS_ADD_LIST', 'Sinut on onnistuneesti liitetty listalle.');


 // Subcription info
define('_JNEWS_CONFIRM_LINK', 'Napsauta tästä vahvistaaksesi tilauksesi');
define('_JNEWS_UNSUBSCRIBE_LINK', 'Napsauta tästä poistaaksesi itsesi listalta');
define('_JNEWS_UNSUBSCRIBE_MESS', 'Sähköpostiosoitteesi on poistettu listalta');

define('_JNEWS_QUEUE_SENT_SUCCESS' , 'Kaikki ajastetut postitukset on onnistuneesti lähetetty.');
define('_JNEWS_MALING_VIEW', 'Katso kaikki postitukset');
define('_JNEWS_UNSUBSCRIBE_MESSAGE', 'Oletko varma että haluat peruuttaa tämän listan tilauksen?');
define('_JNEWS_MOD_SUBSCRIBE', 'Tilaa');
define('_JNEWS_SUBSCRIBE', 'Tilaa');
define('_JNEWS_UNSUBSCRIBE', 'Peru tilaus');
define('_JNEWS_VIEW_ARCHIVE', 'Katso arkistoa');
define('_JNEWS_SUBSCRIPTION_OR', ' tai napsauta tästä päivittääksesi tietosi');
define('_JNEWS_EMAIL_ALREADY_REGISTERED', 'Tämä sähköpostiosoite on jo rekisteröity.');
define('_JNEWS_SUBSCRIBER_DELETED', 'Tilaaja on poistettu onnistuneesti.');


### UserPanel ###
 //User Menu
define('_JNEWS_UCP_USER_PANEL', 'Käyttäjän ohjauspaneeli');
define('_JNEWS_UCP_USER_MENU', 'Käyttäjän valikko');
define('_JNEWS_UCP_USER_CONTACT', 'Tilaukseni');
 //jNews Cron Menu
define('_JNEWS_UCP_CRON_MENU', 'Ajastetut tehtävät');
define('_JNEWS_UCP_CRON_NEW_MENU', 'Uusi ajastus');
define('_JNEWS_UCP_CRON_LIST_MENU', 'Näytä ajastukseni');
 //jNews Coupon Menu
define('_JNEWS_UCP_COUPON_MENU', 'Kupongit');
define('_JNEWS_UCP_COUPON_LIST_MENU', 'Näytä kuponkini');
define('_JNEWS_UCP_COUPON_ADD_MENU', 'Lisää kuponki');

### lists ###
// Tabs
define('_JNEWS_LIST_T_GENERAL', 'Kuvaus');
define('_JNEWS_LIST_T_LAYOUT', 'Ulkoasu');
define('_JNEWS_LIST_T_SUBSCRIPTION', 'Tilaukset');
define('_JNEWS_LIST_T_SENDER', 'Lähettäjätiedot');

define('_JNEWS_LIST_TYPE', 'Listan tyyppi');
define('_JNEWS_LIST_NAME', 'Listan nimi');
define('_JNEWS_LIST_ISSUE', 'Numero ');
define('_JNEWS_LIST_DATE', 'Lähetyspäivä');
define('_JNEWS_LIST_SUB', 'Listan aihe');
define('_JNEWS_ATTACHED_FILES', 'Liitetiedostot');
define('_JNEWS_SELECT_LIST', 'Ole hyvä ja valitse lista muokattavaksi!');

// Auto Responder box
define('_JNEWS_AUTORESP_ON', 'Listan tyyppi');
define('_JNEWS_AUTO_RESP_OPTION', 'Automaattiviestien asetukset');
define('_JNEWS_AUTO_RESP_FREQ', 'Tilaajat voivat valita lähetystiheyden');
define('_JNEWS_AUTO_DELAY', 'Viive (päivissä)');
define('_JNEWS_AUTO_DAY_MIN', 'Vähimmäistaajuus');
define('_JNEWS_AUTO_DAY_MAX', 'Enimmäistaajuus');
define('_JNEWS_FOLLOW_UP', 'Määritä seuraava automaattiviesti');
define('_JNEWS_AUTO_RESP_TIME', 'Tilaajat voivat valita ajan');
define('_JNEWS_LIST_SENDER', 'Listan lähettäjä');

define('_JNEWS_LIST_DESC', 'Listan kuvaus');
define('_JNEWS_LAYOUT', 'Ulkoasu');
define('_JNEWS_SENDER_NAME', 'Lähettäjän nimi');
define('_JNEWS_SENDER_EMAIL', 'Lähettäjän sähköpostiosoite');
define('_JNEWS_SENDER_BOUNCE', 'Lähettäjän reply-to osoite');
define('_JNEWS_LIST_DELAY', 'Viive');
define('_JNEWS_HTML_MAILING', 'HTML muotoilu?');
define('_JNEWS_HTML_MAILING_DESC', '(jos muutat tätä, sinun täytyy tallentaa ja palata tälle ruudulle nähdäksesi muutokset.)');
define('_JNEWS_HIDE_FROM_FRONTEND', 'Piilota julkisesta liittymästä?');
define('_JNEWS_SELECT_IMPORT_FILE', 'Valitse tuotava tiedosto');;
define('_JNEWS_IMPORT_FINISHED', 'Tuonti suoritettu');
define('_JNEWS_DELETION_OFFILE', 'Tiedoston poistaminen');
define('_JNEWS_MANUALLY_DELETE', 'epäonnistui, sinun täytyy poistaa tiedosto manuaalisesti');
define('_JNEWS_CANNOT_WRITE_DIR', 'Hakemistoon ei voi kirjoittaa');
define('_JNEWS_NOT_PUBLISHED', 'Listaa ei ole julkaistu ja lähetystä ei voitu lähettää.');

//  List info box
define('_JNEWS_INFO_LIST_PUB', 'Napsauta Kyllä julkaistaksesi lista');
define('_JNEWS_INFO_LIST_NAME', 'Kirjoita listan nimi tähän. Voit tunnistaa listan tällä nimellä.');
define('_JNEWS_INFO_LIST_DESC', 'Kirjoita lyhyt kuvaus listasta tähän. Tämä kuvaus on sivustosi käyttäjien luettavissa.');
define('_JNEWS_INFO_LIST_SENDER_NAME', 'Anna listalle käytettävä lähettäjän nimi. Nimi näkyy tilaajille heidän saamissaan viesteissä.');
define('_JNEWS_INFO_LIST_SENDER_EMAIL', 'Anna sähköpostiosoite, josta listan viestit lähtevät. ');
define('_JNEWS_INFO_LIST_SENDER_BOUNCED', 'Anna sähköpostiosoite, johon listan vastaanottajat voivat vastata. Jos tämä ei ole sama kuin lähettäjän osoite, roskapostisuodattimet arvioivat todennäköisyyden, että viesti on roskapostia suuremmaksi.');
define('_JNEWS_INFO_LIST_AUTORESP', 'Valitse postitusten tyyppi tälle listalle. <br />' .
		'Uutiskirje: tavallinen uutiskirje<br />' .
		'Automaattiviesti: automaattiviesti on lista, joka lähetetään sivustolta automaattisesti säännöllisin väliajoin.');
define('_JNEWS_INFO_LIST_FREQUENCY', 'Anna käyttäjien valita miten usein he saavat viestin.  Tämä antaa käyttäjille enemmän joustavuutta.');
define('_JNEWS_INFO_LIST_TIME', 'Anna käyttäjien valita mihin aikaan päivästä he haluavat vastaanottaa viestejä.');
define('_JNEWS_INFO_LIST_MIN_DAY', 'Määrittele pienin lähetysväli, jolla käyttäjä voi asettaa listan lähettämään viestejä.');
define('_JNEWS_INFO_LIST_DELAY', 'Määrittele viive tämän ja edellisen automaattiviestin välille.');
define('_JNEWS_INFO_LIST_DATE', 'Määrittele päivämäärä, jolloin haluat julkaista uutiskirjeen, jos haluat viivyttää sen julkaisemista. <br /> MUOTO : VVVV-KK-PP TT:MM:SS');
define('_JNEWS_INFO_LIST_MAX_DAY', 'Määrittele, mikä on suurin lähetysväli, jolla käyttäjä voi asettaa listan lähettämään viestejä.');
define('_JNEWS_INFO_LIST_LAYOUT', 'Syotä listan viestien ulkoasu tähän. Voit määritellä ulkoasun täysin vapaasti.');
define('_JNEWS_INFO_LIST_SUB_MESS', 'Tämä viesti lähetetään käyttäjälle, kun hän ensimmäisen kerran rekisteröityy. Voit itse määritellä tekstin.');
define('_JNEWS_INFO_LIST_UNSUB_MESS', 'Tämä viesti lähetetään tilaajalle, kun hän peruuttaa tilauksensa. Voit itse määritellä tekstin.');
define('_JNEWS_INFO_LIST_HTML', 'Valitse tämä ruutu jos haluat lähettää HTML-muotoiltuja viestejä. Käyttäjät voivat listaa tilatessaan määritellä haluavatko he vastaanottaa HTML-muotoiltuja vai pelkkänä tekstinä lähetettyjä viestejä.');
define('_JNEWS_INFO_LIST_HIDDEN', 'Valitse Kyllä piilottaaksesi tämä lista julkisesta liittymästä, käyttäjät eivät voi tilata listaa, mutta sinä voit edelleen lähettää viestejä sille.');
define('_JNEWS_INFO_LIST_JNEWS_AUTO_SUB', 'Haluatko automaattisesti liittää uudet käyttäjät tälle listalle?<br /><B>Uudet käyttäjät:</B> liittää kaikki uudet sivustolle rekisteröityvät.<br /><B>Kaikki käyttäjät:</B> liittää kaikki tietokannassa olevat rekisteröidyt käyttäjät.<br />(kaikki vaihtoehdot tukevat Community Builderia)');
define('_JNEWS_INFO_LIST_ACC_LEVEL', 'Valitse julkisen liittymän käyttöoikeustaso. Tämä piilottaa listan käyttäjäryhmiltä, joilla ei ole riittäviä oikeuksia siihen, jolloin he eivät voi tilata sitä.');
define('_JNEWS_INFO_LIST_ACC_USER_ID', 'Valitse käyttöoikeusryhmä, jolle haluat antaa muokkausoikeuden. Tähän ja ylempiin ryhmiin kuuluvat voivat muokata postitusta ja lähettää sen julkisesta tai ylläpitoliittymästä.');
define('_JNEWS_INFO_LIST_FOLLOW_UP', 'Jos haluat, että automaattiviesti aktivoi toisen automaattiviestin, kun viimeinen sähköposti on lähetetty, voit määritellä tässä seuraavan automaattiviestin.');
define('_JNEWS_INFO_LIST_JNEWS_OWNER', 'Tämä on listan luoneen henkilön ID.');
define('_JNEWS_INFO_LIST_WARNING', '   Tämä viimeinen asetus on asetettavissa vain kerran listan luomisen yhteydessä.');
define('_JNEWS_INFO_LIST_SUBJET', ' Postituksen otsikko.  Tämä on tilaajien saaman sähköpostiviestin otsikko.');
define('_JNEWS_INFO_MAILING_CONTENT', 'Tämä on lähettämäsi sähköpostiviestin runko (sisältö).');
define('_JNEWS_INFO_MAILING_NOHTML', 'Lisää tähän pelkkänä tekstinä lähetettävän viestin runko (sisältö) niille käyttäjille, jotka valitsivat pelkän tekstimuotoisen viestin <BR/> HUOMAA: jos jätät tämän tyhjäksi jNews konvertoi HTML-muotoisen viestin automaattisesti pelkäksi tekstiksi.');
define('_JNEWS_INFO_MAILING_VISIBLE', 'Valitse Kyllä näyttääksesi postitus julkisessa liittymässä.');
define('_JNEWS_INSERT_CONTENT', 'Lisää olemassa olevaa sisältöä.');

// Coupons
define('_JNEWS_SEND_COUPON_SUCCESS', 'Kuponki onnistuneesti lähetetty!');
define('_JNEWS_CHOOSE_COUPON', 'Valitse kuponki');
define('_JNEWS_TO_USER', ' tälle käyttäjälle');

### Cron options
//drop down frequency(CRON)
define('_JNEWS_FREQ_CH1', 'Joka x. tunti');
define('_JNEWS_FREQ_CH2', 'Joka 6. tunti');
define('_JNEWS_FREQ_CH3', 'Joka 12. tunti');
define('_JNEWS_FREQ_CH4', 'Päivittäin');
define('_JNEWS_FREQ_CH5', 'Viikoittain');
define('_JNEWS_FREQ_CH6', 'Kuukausittain');
define('_JNEWS_FREQ_NONE', 'Ei');
define('_JNEWS_FREQ_NEW', 'Uudet käyttäjät');
define('_JNEWS_FREQ_ALL', 'Kaikki käyttäjät');

//Label CRON form
define('_JNEWS_LABEL_FREQ', 'jNews <pre>cron</pre>?');
define('_JNEWS_LABEL_FREQ_TIPS', 'Valitse Kyllä jos haluat käyttää jNews <pre>cron</pre> palvelua, Ei mitä tahansa muuta <pre>cron</pre> palvelua varten.<br />' .
		'Jos valitset Kyllä sinun ei tarvitse määritellä <pre>cron</pre> osoitetta, se lisätään automaattisesti.');
define('_JNEWS_SITE_URL' , 'Sivustosi URL');
define('_JNEWS_CRON_FREQUENCY' , 'Taajuus');
define('_JNEWS_STARTDATE_FREQ' , 'Aloitus päivämäärä');
define('_JNEWS_LABELDATE_FREQ' , 'Määrittele päivä');
define('_JNEWS_LABELTIME_FREQ' , 'Määrittele aika');
define('_JNEWS_CRON_URL', '<pre>cron</pre> URL');
define('_JNEWS_CRON_FREQ', 'Taajuus');
define('_JNEWS_TITLE_CRONLIST', 'Ajastus');
define('_JNEWS_NEW_LIST', 'Luo uusi lista');

//title CRON form
define('_JNEWS_TITLE_FREQ', 'Muokkaa ajastusta');
define('_JNEWS_CRON_SITE_URL', 'Ole hyvä ja anna toimiva palvelun url, joka alkaa http://');

### Mailings ###
define('_JNEWS_MAILING_ALL', 'Kaikki postitukset');
define('_JNEWS_EDIT_A', 'Muokkaa ');
define('_JNEWS_SELCT_MAILING', 'Valitse lista alasvetovalikosta lisätäksesi uusi postitus.');
define('_JNEWS_VISIBLE_FRONT', 'Näkyy julkisessa liittymässä');

// mailer
define('_JNEWS_SUBJECT', 'Otsikko');
define('_JNEWS_CONTENT', 'Sisältö');
define('_JNEWS_NAMEREP', '{tag:name} = Tämä korvataan tilaajan antamalla nimellä, lähetät kohdistettua sähköpostia kun käytät tätä.<br />');
define('_JNEWS_FIRST_NAME_REP', '{tag:firstname} = Tämä korvataan tilaajan antamalla etunimellä.<br />');
define('_JNEWS_LOADMODINFO', '{module=id} = Tämä korvataan id:tä vastaavalla Joomla moduulilla. Esimerkki: {module=1}.<br /> Moduulit voidaan ladata vain <pre>cron</pre> palvelun kautta. <br />');
define('_JNEWS_NONHTML', 'HTML:tön versio');
define('_JNEWS_ATTACHMENTS', 'Liitteet');
define('_JNEWS_SELECT_MULTIPLE', 'Pidä CTRL (tai command) pohjassa valitaksesi useita liitteitä.<br />' .
		'Tässä listassa näytetyt liitteet ovat liitehakemistossa, voit muuttaa sijaintia ohjauspaneelista.');
define('_JNEWS_CONTENT_ITEM', 'Sisältönimike');
define('_JNEWS_SENDING_EMAIL', 'Lähetetään sähköpostia');
define('_JNEWS_MESSAGE_NOT', 'Viestiä ei voitu lähettää');
define('_JNEWS_MAILER_ERROR', 'Postitusvirhe');
define('_JNEWS_MESSAGE_SENT_SUCCESSFULLY', 'Viesti lähetetty onnistuneesti');
define('_JNEWS_SENDING_TOOK', 'Tämän postituksen lähettäminen kesti');
define('_JNEWS_SECONDS', 'sekuntia');
define('_JNEWS_NO_ADDRESS_ENTERED', 'Ei sähköpostiosoitteita tai tilaajia käytettävissä');
define('_JNEWS_CHANGE_SUBSCRIPTIONS', 'Muuta');
define('_JNEWS_CHANGE_EMAIL_SUBSCRIPTION', 'Muuta tilaustasi');
define('_JNEWS_WHICH_EMAIL_TEST', 'Anna sähköpostiosoite johon testiviesti lähetetään tai valitse esikatselu');
define('_JNEWS_SEND_IN_HTML', 'Lähetä HTML-muotoiltuna (HTML-listoille)?');
define('_JNEWS_VISIBLE', 'Näkyvä');
define('_JNEWS_INTRO_ONLY', 'Vain ingressi');
define('_JNEWS_TEST' , 'zzzjhentest');

// stats
define('_JNEWS_GLOBALSTATS', 'Kokonaistilastot');
define('_JNEWS_DETAILED_STATS', 'Yksityiskohtaisettilastot');
define('_JNEWS_MAILING_LIST_DETAILS', 'Listan tiedot');
define('_JNEWS_SEND_IN_HTML_FORMAT', 'Lähetetty HTML muodossa');
define('_JNEWS_VIEWS_FROM_HTML', 'Lukukerrat (HTML-viesteistä)');
define('_JNEWS_SEND_IN_TEXT_FORMAT', 'Lähetetty tekstimuodossa');
define('_JNEWS_HTML_READ', 'HTML luettu');
define('_JNEWS_HTML_UNREAD', 'HTML lukematta');
define('_JNEWS_TEXT_ONLY_SENT', 'Vain teksti');

// Configuration panel
// main tabs
define('_JNEWS_MAIL_CONFIG', 'Sähköposti');
define('_JNEWS_LOGGING_CONFIG', 'Lokit ja tilastot');
define('_JNEWS_SUBSCRIBER_CONFIG', 'Tilaajat');
define('_JNEWS_MISC_CONFIG', 'Muut asetukset');
define('_JNEWS_MAIL_SETTINGS', 'Sähköpostiasetukset');
define('_JNEWS_MAILINGS_SETTINGS', 'Postitusasetukset');
define('_JNEWS_SUBCRIBERS_SETTINGS', 'Tilausasetukset');
define('_JNEWS_CRON_SETTINGS', 'Ajastusasetukset');
define('_JNEWS_SENDING_SETTINGS', 'Lähetysasetukset');
define('_JNEWS_STATS_SETTINGS', 'Tilastoasetukset');
define('_JNEWS_LOGS_SETTINGS', 'Lokiasetukset');
define('_JNEWS_MISC_SETTINGS', 'Muut asetukset');
// mail settings
define('_JNEWS_SEND_MAIL_FROM', 'Palautuvat viestit vastaanottava osoite<br/> (käytetään kaikille viesteillesi)');
define('_JNEWS_SEND_MAIL_NAME', 'Lähettäjän nimi');
define('_JNEWS_MAILSENDMETHOD', 'Postitusohjelma');
define('_JNEWS_SENDMAILPATH', 'Sendmail polku');
define('_JNEWS_SMTPHOST', 'SMTP palvelin');
define('_JNEWS_SMTPAUTHREQUIRED', 'SMTP vaatii tunnistamisen');
define('_JNEWS_SMTPAUTHREQUIRED_TIPS', 'Valitse Kyllä jos SMTP-palvelimesi vaatii tunnistamisen');
define('_JNEWS_SMTPUSERNAME', 'SMTP käyttäjätunnus');
define('_JNEWS_SMTPUSERNAME_TIPS', 'Jos palvelimesi vaatii tunnistamisen, anna SMTP-käyttäjätunnus');
define('_JNEWS_SMTPPASSWORD', 'SMTP salasana');
define('_JNEWS_SMTPPASSWORD_TIPS', 'Jos palvelimesi vaatii tunnistamisen, anna SMTP-salasana');
define('_JNEWS_USE_EMBEDDED', 'Käytä upotettuja kuvia');
define('_JNEWS_USE_EMBEDDED_TIPS', 'Valitse Kyllä, jos liitettyyn sisältöön kuuluvat kuvat pitäisi upottaa viestiin HTML muodossa, tai Ei käyttääksesi oletusta, joka linkittää kuvat viestiin sivustolta.');
define('_JNEWS_UPLOAD_PATH', 'Lataus/Liitehakemisto');
define('_JNEWS_UPLOAD_PATH_TIPS', 'Voit määritellä lataushankemiston.<br />' .
		'Varmista, että antamasi hakemisto on olemassa, muutoin luo se.');

// subscribers settings
define('_JNEWS_ALLOW_UNREG', 'Salli rekisteröitymättömät');
define('_JNEWS_ALLOW_UNREG_TIPS', 'Valitse Kyllä, jos haluat antaa rekisteröitymättömien käyttäjien tilata listoja.');
define('_JNEWS_REQ_CONFIRM', 'Vaadi vahvistus');
define('_JNEWS_REQ_CONFIRM_TIPS', 'Valitse Kyllä, jos vaadit että rekisteröitymättömät käyttäjät vahvistavat sähköpostiosoitteensa.');
define('_JNEWS_SUB_SETTINGS', 'Tilausasetukset');
define('_JNEWS_SUBMESSAGE', 'Tilausosoite');
define('_JNEWS_SUBSCRIBE_LIST', 'Tilaa lista');

define('_JNEWS_USABLE_TAGS', 'Käytettävissä olevat tunnisteet');
define('_JNEWS_NAME_AND_CONFIRM', '<b>{tag:confirm}</b> = Tämä luo napsautettavan linkin jolla tilaaja voi vahvistaa tilauksensa. Tämä on <strong>pakollinen</strong>, jotta jNews toimii oikein.<br />'
.'<br />{tag:name} = Tämä korvataan käyttäjän antamalla nimellä, lähetät kohdistettua sähköpostia käyttäessäsi tätä.<br />'
.'<br />{tag:firstname} = Tämä korvataan tilaajan etunimellä, etunimellä tarkoitetaan käyttäjän ensin syöttämää nimeä.<br />');
define('_JNEWS_CONFIRMFROMNAME', 'Vahvistusviestien lähettäjän nimi');
define('_JNEWS_CONFIRMFROMNAME_TIPS', 'Anna lähettäjän nimi, jota käytetään vahvistusviesteissä.');
define('_JNEWS_CONFIRMFROMEMAIL', 'Vahvistusviestien lähettäjän sähköpostiosoite');
define('_JNEWS_CONFIRMFROMEMAIL_TIPS', 'Anna lähettäjän sähköpostiosoite, jota käytetään vahvistusviesteissä.');
define('_JNEWS_CONFIRMBOUNCE', 'Palautusosoite');
define('_JNEWS_CONFIRMBOUNCE_TIPS', 'Anna palautusosoite näytettäväksi vahvistuksen vaativilla listoilla.');
define('_JNEWS_HTML_CONFIRM', 'HTML vahvistus');
define('_JNEWS_HTML_CONFIRM_TIPS', 'Valitse Kyllä, jos vahvistuksen vaativat listat ovat html-muotoisia käyttäjän sen salliessa.');
define('_JNEWS_TIME_ZONE_ASK', 'Kysy aikavyöhyke');
define('_JNEWS_TIME_ZONE_TIPS', 'Valitse Kyllä, jos haluat kysyä käyttäjän aikavyöhykettä. Aikavyöhyke otetaan huomioon jonossa olevien viestien postituksessa, jos se on tarpeen.');

 // Cron Set up
 define('_JNEWS_AUTO_CONFIG', '<pre>cron</pre>');
define('_JNEWS_TIME_OFFSET_URL', 'napsauta tästä asettaaksesi aikavyöhyke sivuston asetuksissa -> Paikallisasetukset');
define('_JNEWS_TIME_OFFSET_TIPS', 'Aseta palvelimesi aikavyöhyke niin että päiväys ja kellonaika ovat oikein');
define('_JNEWS_TIME_OFFSET', 'Aikavyöhyke');
define('_JNEWS_CRON_DESC','<br />Käyttäen <pre>cron</pre> palvelua voit asettaa automaattisia tehtäviä Joomla sivustollesi!<br />' .
		'Asettaaksesi sen käyttöön sinun täytyy lisätä seuraava komento ohjauspaneelisi crontabiin:<br />' .
		'<b>' . JNEWS_JPATH_LIVE . '/index.php?option=com_jnews&act=cron</b> ' .
		'<br /><br />Jos tarvitset apua asetuksissa tai sinulla on ongelmia, ole hyvä ja tutustu foorumiimme <a href="http://www.joobi.co" target="_blank">http://www.joobi.co</a>');
// sending settings
define('_JNEWS_PAUSEX', 'Lähetystauon kesto');
define('_JNEWS_PAUSEX_TIPS', 'Anna sekuntimäärä, jonka jNews antaa SMTP palvelimelle viestien käsittelyyn ennen kuin lähettää seuraavan erän.');
define('_JNEWS_EMAIL_BET_PAUSE', 'Viestien määrä erässä');
define('_JNEWS_EMAIL_BET_PAUSE_TIPS', 'Montako viestiä lähetetään yhdessä erässä ennen kuin pidetään tauko.');
define('_JNEWS_WAIT_USER_PAUSE', 'Odota käyttäjän toimia ennen jatkamista');
define('_JNEWS_WAIT_USER_PAUSE_TIPS', 'Asettaa pitäisikö toiminnon odottaa tauon jälkeen käyttäjän vahvistusta ennen kuin jatkuu.');
define('_JNEWS_SCRIPT_TIMEOUT', 'Toiminnon aikaraja');
define('_JNEWS_SCRIPT_TIMEOUT_TIPS', 'Montako minuuttia toiminto saa kestää ennen kuin sen oletetaan epäonnistuneen(0 tarkoittaa rajoittamatonta).');
// Stats settings
define('_JNEWS_ENABLE_READ_STATS', 'Ota käyttöön lukutilastot');
define('_JNEWS_ENABLE_READ_STATS_TIPS', 'Valitse Kyllä, jos haluat tallentaa lokiin katselukertojen määrän. Tätä tekniikkaa voidaan käyttää vain html-muotoiltujen viestien kanssa');
define('_JNEWS_LOG_VIEWSPERSUB', 'Kirjaa katselut tilaajittain');
define('_JNEWS_LOG_VIEWSPERSUB_TIPS', 'Valitse Kyllä, jos haluat tallentaa katselukerrat tilaajaa kohti. Tätä tekniikkaa voidaan käyttää vain html-muotoiltujen viestien kanssa');
// Logs settings
define('_JNEWS_DETAILED', 'Yksityiskohtainen');
define('_JNEWS_SIMPLE', 'Yksinkertaistettu');
define('_JNEWS_DIAPLAY_LOG', 'Näytä lokit');
define('_JNEWS_DISPLAY_LOG_TIPS', 'Valitse Kyllä, jos haluat näyttää lokin, kun lähetys on käynnissä.');
define('_JNEWS_SEND_PERF_DATA', 'Lähetä suorituskykytietoja');
define('_JNEWS_SEND_PERF_DATA_TIPS', 'Valitse Kyllä, jos haluat jNewsin lähettävän nimettömiä raportteja asetuksistasi, tilaajien määrästä listoilla ja ajasta joka kului viestien lähettämiseen. Tämä antaa meille käsityksen jNewsin suorituskyvystä ja auttaa meitä parantamaan jNewsia.');
define('_JNEWS_SEND_AUTO_LOG', 'Lähetä raportti automaattiviesteistä');
define('_JNEWS_SEND_AUTO_LOG_TIPS', 'Valitse Kyllä, jos haluat lähettää raportin sähköpostiin, aina kun jono on käsitelty.  VAROITUS: Tämä voi johtaa suureen viestimäärään.');
define('_JNEWS_SEND_LOG', 'Lähetysraportti');
define('_JNEWS_SEND_LOG_TIPS', 'Pitäisikö postituksesta lähettää raportti postituksen tehneen käyttäjän sähköpostiosoitteeseen.');
define('_JNEWS_SEND_LOGDETAIL', 'Lähetysraportin muoto');
define('_JNEWS_SEND_LOGDETAIL_TIPS', 'Yksityiskohtainen raportti sisältää tilaajakohtaiset onnistumis- tai epäonnistumistiedot ja yhteenvedon. Yksinkertaistettu lähettää vain yhteenvedon.');
define('_JNEWS_SEND_LOGCLOSED', 'Lähetä raportti, jos yhteys katkeaa');
define('_JNEWS_SEND_LOGCLOSED_TIPS', 'Tällä asetuksella käyttäjä, joka teki postituksen saa kuitenkin raportin sähköpostitse.');
define('_JNEWS_SAVE_LOG', 'Tallenna loki');
define('_JNEWS_SAVE_LOG_TIPS', 'Pitäisikö lähetysloki lisätä lokitiedoston loppuun.');
define('_JNEWS_SAVE_LOGDETAIL', 'Tallennettavan lokin muoto');
define('_JNEWS_SAVE_LOGDETAIL_TIPS', 'Yksityiskohtainen loki sisältää tilaajakohtaiset onnistumis- tai epäonnistumistiedot ja yhteenvedon. Yksinkertaistettu tallentaa vain yhteenvedon.');
define('_JNEWS_SAVE_LOGFILE', 'Lokitiedosto');
define('_JNEWS_SAVE_LOGFILE_TIPS', 'Tiedosto johon lokitiedot lisätään. Tämä tiedosto voi kasvaa aika suureksi.');
define('_JNEWS_CLEAR_LOG', 'Tyhjennä loki');
define('_JNEWS_CLEAR_LOG_TIPS', 'Tyhjentää lokitiedoston.');

### control panel
define('_JNEWS_CP_LAST_QUEUE', 'Viimeinen käsitelty jono');
define('_JNEWS_CP_TOTAL', 'Yhteensä');
define('_JNEWS_MAILING_COPY', 'Postitus onnistuneesti kopioitu!');

// Miscellaneous settings
define('_JNEWS_SHOW_GUIDE', 'Näytä opaste');
define('_JNEWS_SHOW_GUIDE_TIPS', 'Näytä opaste alussa jotta uusien käyttäjien on helppo luoda uutiskirje tai automaattiviesti ja tehdä jNews asetukset oikein.');
define('_JNEWS_AUTOS_ON', 'Käytä automaattiviestejä');
define('_JNEWS_AUTOS_ON_TIPS', 'Valitse Ei, jos et halua käyttää automaattiviestejä. Kaikki automaattiviesteihin liittyvät asetukset kytketään pois päältä.');
define('_JNEWS_NEWS_ON', 'Käytä uutiskirjeitä');
define('_JNEWS_NEWS_ON_TIPS', 'Valitse Ei, jos et halua käyttää uutiskirjeitä. Kaikki uutiskirjeisiin liittyvät asetukset kytketään pois päältä.');
define('_JNEWS_SHOW_TIPS', 'Näytä vihjeet');
define('_JNEWS_SHOW_TIPS_TIPS', 'Näytä vihjeet, jotta käyttäjät osaisivat käyttää jNewsia tehokkaammin.');
define('_JNEWS_SHOW_FOOTER', 'Näytä alatunniste');
define('_JNEWS_SHOW_FOOTER_TIPS', 'Pitäisikö alatunniste, jossa tekijänoikeus tiedot ovat, näyttää.');
define('_JNEWS_SHOW_LISTS', 'Näytä listat julkisessa liittymässä');
define('_JNEWS_SHOW_LISTS_TIPS', 'Kun käyttäjä ei ole rekisteröitynyt, näytä listat jotka he voivat tilata ja painike uutiskirjearkistoon. Muuten näytetään pelkästään kirjautumislomake rekisteröitymistä varten.');
define('_JNEWS_CONFIG_UPDATED', 'Asetukset on päivitetty!');
define('_JNEWS_UPDATE_URL', 'Päivitys URL');
define('_JNEWS_UPDATE_URL_WARNING', 'VAROITUS! Älä muuta tätä URL-osoitetta ellei jNewsin tekninen tiimi ole sinun niin kehottanut tekemään.<br />');
define('_JNEWS_UPDATE_URL_TIPS', 'Esim.: http://www.joobi.co/update/ (sisällytä lopun kauttaviiva)');

// module
define('_JNEWS_EMAIL_INVALID', 'Antamasi sähköpostiosoite ei ole toimiva.');
define('_JNEWS_REGISTER_REQUIRED', 'Sinun täytyy rekisteröityä sivustolle ennen kuin voit tilata listoja.');

// Access level box
define('_JNEWS_OWNER', 'Listan luoja:');
define('_JNEWS_ACCESS_LEVEL', 'Aseta listan käyttöoikeustaso');
define('_JNEWS_ACCESS_LEVEL_OPTION', 'Käyttöoikeusasetukset');
define('_JNEWS_USER_LEVEL_EDIT', 'Valitse mikä käyttäjäryhmä voi muokata postitusta (julkisesta tai ylläpitoliittymästä) ');

//  drop down options
define('_JNEWS_AUTO_DAY_CH1', 'Päivittäin');
define('_JNEWS_AUTO_DAY_CH2', 'Päivittäin, ei viikonloppuisin');
define('_JNEWS_AUTO_DAY_CH3', 'Joka toinen päivä');
define('_JNEWS_AUTO_DAY_CH4', 'Joka toinen päivä, ei viikonloppuisin');
define('_JNEWS_AUTO_DAY_CH5', 'Viikoittain');
define('_JNEWS_AUTO_DAY_CH6', 'Joka toinen viikko');
define('_JNEWS_AUTO_DAY_CH7', 'Kuukausittain');
define('_JNEWS_AUTO_DAY_CH9', 'Vuosittain');
define('_JNEWS_AUTO_OPTION_NONE', 'Ei');
define('_JNEWS_AUTO_OPTION_NEW', 'Uudet käyttäjät');
define('_JNEWS_AUTO_OPTION_ALL', 'Kaikki käyttäjät');

//
define('_JNEWS_UNSUB_MESSAGE', 'Peruutusviesti');
define('_JNEWS_UNSUB_SETTINGS', 'Peruutuksen asetukset');
define('_JNEWS_AUTO_ADD_NEW_USERS', 'Lisää käyttäjät automaattisesti?');

// Update and upgrade messages
define('_JNEWS_NO_UPDATES', 'Päivityksiä ei ole saatavilla.');
define('_JNEWS_VERSION', 'jNews versio');
define('_JNEWS_NEED_UPDATED', 'Päivitettävät tiedostot:');
define('_JNEWS_NEED_ADDED', 'Lisättävät tiedostot:');
define('_JNEWS_NEED_REMOVED', 'Poistettavat tiedostot:');
define('_JNEWS_FILENAME', 'Tiedostonimi:');
define('_JNEWS_CURRENT_VERSION', 'Nykyinen versio:');
define('_JNEWS_NEWEST_VERSION', 'Uusin versio:');
define('_JNEWS_UPDATING', 'Päivittää');
define('_JNEWS_UPDATE_UPDATED_SUCCESSFULLY', 'Tiedostot on päivitetty onnistuneesti.');
define('_JNEWS_UPDATE_FAILED', 'Päivitys epäonnistui!');
define('_JNEWS_ADDING', 'Lisää');
define('_JNEWS_ADDED_SUCCESSFULLY', 'Lisätty onnistuneesti.');
define('_JNEWS_ADDING_FAILED', 'Lisäys epäonnistui!');
define('_JNEWS_REMOVING', 'Poistaa');
define('_JNEWS_REMOVED_SUCCESSFULLY', 'Poistettu onnistuneesti.');
define('_JNEWS_REMOVING_FAILED', 'Poistaminen epäonnistui!');
define('_JNEWS_INSTALL_DIFFERENT_VERSION', 'Asenna toinen versio');
define('_JNEWS_CONTENT_ADD', 'Lisää sisältöä');
define('_JNEWS_UPGRADE_FROM', 'Tuo tietoja (uutiskirjeiden ja tilaajien tietoja) kohteesta ');
define('_JNEWS_UPGRADE_MESS', 'Olemassa olevat tiedot eivät ole vaarassa. <br /> Tämä prosessi vain tuo uudet tiedot jNews tietokantaan.');
define('_JNEWS_CONTINUE_SENDING', 'Jatka lähetystä');

// jNews message
define('_JNEWS_UPGRADE1', 'Voit helposti tuoda käyttäjiä ja uutiskirjeitä ');
define('_JNEWS_UPGRADE2', ' jNewsiin päivityspaneelissa.');
define('_JNEWS_UPDATE_MESSAGE', 'Uusi versio saatavilla! ');
define('_JNEWS_UPDATE_MESSAGE_LINK', 'Napsauta tästä päivittääksesi!');
define('_JNEWS_THANKYOU', 'Kiitos kun valitsit jNewsin, Your communication partner!');
define('_JNEWS_NO_SERVER', 'Päivityspalvelin saavuttamattomissa, yritä myöhemmin uudelleen.');
define('_JNEWS_MOD_PUB', 'jNews moduulia ei ole julkaistu.');
define('_JNEWS_MOD_PUB_LINK', 'Napsauta tästä julkaistaksesi sen!');
define('_JNEWS_IMPORT_SUCCESS', 'onnistuneesti tuotu');
define('_JNEWS_IMPORT_EXIST', 'tilaaja on jo tietokannassa');

// jNews Install
define('_JNEWS_INSTALL_CONFIG', 'jNews asetukset');
define('_JNEWS_INSTALL_SUCCESS', 'Asennus onnistui');
define('_JNEWS_INSTALL_ERROR', 'Asennuksessa tapahtui virhe');
define('_JNEWS_INSTALL_BOT', 'jNews liitännäinen (Bot)');
define('_JNEWS_INSTALL_MODULE', 'jNews moduuli');
//Others
define('_JNEWS_JAVASCRIPT','!Varoitus! Javascriptin täytyy olla käytettävissä, jotta komponentti toimisi oikein.');
define('_JNEWS_EXPORT_TEXT','Tilaajien vienti perustuu valitsemaasi listaan. <br />Vie tilaajat listalta');
define('_JNEWS_IMPORT_TIPS','Tuo tilaajat. Tiedon tiedostossa pitää olla seuraavaa muotoa: <br />' .
		'Nimi,sähköpostiosoite,vastaanotaHTML(1/0),<span style="color: rgb(255, 0, 0);">vahvistettu(1/0)</span>');
define('_JNEWS_SUBCRIBER_EXIT', 'on jo tilaaja');
define('_JNEWS_GET_STARTED', 'Napsauta tästä päästäksesi alkuun!');

//News since 1.0.1
define('_JNEWS_WARNING_1011','Varoitus: 1011: Päivitys ei toimi palvelimesi rajoituksista johtuen.');
define('_JNEWS_SEND_MAIL_FROM_TIPS', 'Anna palutusosoite kaikille sähköposteillesi.');
define('_JNEWS_SEND_MAIL_NAME_TIPS', 'Anna lähettäjä nimenä näkyvä nimi.');
define('_JNEWS_MAILSENDMETHOD_TIPS', 'Valitse käytettävä postitusohjelma: PHP mail funktio, <span>Sendmail</span> or SMTP palvelin.');
define('_JNEWS_SENDMAILPATH_TIPS', 'Tämä on postipalvelimen polku');
define('_JNEWS_LIST_T_TEMPLATE', 'Mallipohja');
define('_JNEWS_NO_MAILING_ENTERED', 'Ei postitusta valittuna');
define('_JNEWS_NO_LIST_ENTERED', 'Ei listaa valittuna');
define('_JNEWS_SENT_MAILING' , 'Lähetä postitus');
define('_JNEWS_SELECT_FILE', 'Valitse tiedosto ');
define('_JNEWS_LIST_IMPORT', 'Valitse listat, joihin haluat tilaajat liittää.');
define('_JNEWS_PB_QUEUE', 'Tilaaja lisätty, mutta listoihin yhdistämisessä oli ongelmia eikä oikeellisuutta voi taata ilman, että tarkistat asian itse.');
define('_JNEWS_UPDATE_MESS' , '');
define('_JNEWS_UPDATE_MESS1' , 'Päivitys on erittäin suositeltava!');
define('_JNEWS_UPDATE_MESS2' , 'Korjauspaketti ja pieniä korjauksia.');
define('_JNEWS_UPDATE_MESS3' , 'Uusi julkaisu.');
define('_JNEWS_UPDATE_MESS5' , 'Päivitys toimii vain Joomla 1.5\:ssä.');
define('_JNEWS_UPDATE_IS_AVAIL' , ' on saatavilla!');
define('_JNEWS_NO_MAILING_SENT', 'Postitusta ei lähetetty!');
define('_JNEWS_SHOW_LOGIN', 'Näytä kirjautumislomake');
define('_JNEWS_SHOW_LOGIN_TIPS', 'Valitse Kyllä, jos haluat näyttää kirjautumislomakkeen, josta käyttäjät voivat rekisteröityä sivustolle jNewsin julkisen liittymän ohjauspaneelissa.');
define('_JNEWS_LISTS_EDITOR', 'Käytä editoria listan kuvauksiin');
define('_JNEWS_LISTS_EDITOR_TIPS', 'Valitse Kyllä käyttääksesi HTML editoria listan kuvauksen muokkaamiseen.');
define('_JNEWS_SUBCRIBERS_VIEW', 'Tilaajat');

//News since 1.0.2
define('_JNEWS_FRONTEND_SETTINGS' , 'Julkisen liittymän asetukset' );
define('_JNEWS_SHOW_LOGOUT', 'Näytä kirjaudu ulos painike');
define('_JNEWS_SHOW_LOGOUT_TIPS', 'Valitse kyllä näyttääksesi kirjaudu ulos painike jNewsin julkisen liittymän ohjauspaneelissa.');

//News since 1.0.3 CB integration
define('_JNEWS_CONFIG_INTEGRATION', 'Integraatio');
define('_JNEWS_CB_INTEGRATION', 'Community Builder Integraatio');
define('_JNEWS_INSTALL_PLUGIN', 'Community Builder liitännäinen (jNews Integration) ');
define('_JNEWS_CB_PLUGIN_NOT_INSTALLED', 'jNews liitännäistä Community Builderille ei ole asennettu!');
define('_JNEWS_CB_PLUGIN', 'Listat rekisteröityessä');
define('_JNEWS_CB_PLUGIN_TIPS', 'Valitse Kyllä näyttääksesi listat Community Builderin rekisteröitymislomakkeella');
define('_JNEWS_CB_LISTS', 'Listojen ID\:t');
define('_JNEWS_CB_LISTS_TIPS', 'TÄMÄ ON PAKOLLINEN KENTTÄ. Anna niiden listojen ID-numerot pilkulla erotettuna, joiden haluat olevan käyttäjien tilattavissa (0 tarkoittaa näytä kaikki)');
define('_JNEWS_CB_INTRO', 'Esittelyteksti');
define('_JNEWS_CB_INTRO_TIPS', 'Teksti, joka näytetään ennen listausta. JÄTÄ TYHJÄKSI JÄTTÄÄKSESI NÄYTTÄMÄTTÄ.  Voit käyttää HTML tunnisteita muokataksesi ulkonäköä.');
define('_JNEWS_CB_SHOW_NAME', 'Näytä listan nimi');
define('_JNEWS_CB_SHOW_NAME_TIPS', 'Valitse näytetäänkö listan nimi esittelytekstin jälkeen.');
define('_JNEWS_CB_LIST_DEFAULT', 'Lista oletusarvoisesti valittuna');
define('_JNEWS_CB_LIST_DEFAULT_TIPS', 'Valitse haluatko listojen olevan oletusarvoisesti valittuna.');
define('_JNEWS_CB_HTML_SHOW', 'Näytä tilaa HTML');
define('_JNEWS_CB_HTML_SHOW_TIPS', 'Valitse Kyllä antaaksesi käyttäjien valita haluavatko he vastaanottaa HTML-muotoiltuja viestejä vai käytetäänkö oletusarvoa.');
define('_JNEWS_CB_HTML_DEFAULT', 'Oletuksena HTML-muotoilu');
define('_JNEWS_CB_HTML_DEFAULT_TIPS', 'Valitse tämä vaihtoehto asettaaksesi HTML-muodon oletukseksi. Jos Näytä tilaa HTML on asetettu arvoon Ei, käyttäjät eivät voi poiketa tästä oletuksesta.');

// Since 1.0.4
define('_JNEWS_BACKUP_FAILED', 'Tiedostoa ei voitu varmistaa! Tiedostoa ei korvattu.');
define('_JNEWS_BACKUP_YOUR_FILES', 'Tiedostojen vanhat versiot on varmistettu seuraavaan hakemistoon:');
define('_JNEWS_SERVER_LOCAL_TIME', 'Palvelimen paikallinen aika');
define('_JNEWS_SHOW_ARCHIVE', 'Näytä Arkisto painike');
define('_JNEWS_SHOW_ARCHIVE_TIPS', 'Valitse Kyllä näyttääksesi Arkisto painikkeen julkisen liittymän uutiskirje listauksessa');
define('_JNEWS_LIST_OPT_TAG', 'Tunnisteet');
define('_JNEWS_LIST_OPT_IMG', 'Kuvat');
define('_JNEWS_LIST_OPT_CTT', 'Sisältö');
define('_JNEWS_INPUT_NAME_TIPS', 'Anna kokonimesi (etunimi ensin)');
define('_JNEWS_IP_TIPS', 'Tilaajan IP osoite');
define('_JNEWS_INPUT_EMAIL_TIPS', 'Anna sähköpostiosoitteesi (Varmista että osoite on toimiva vastaanottaaksesi viestimme.)');
define('_JNEWS_RECEIVE_HTML_TIPS', 'Valitse kyllä vastaanottaaksesi HTML-muotoiltuja viestejä - Ei saadaksesi viestit vain tekstimuodossa');
define('_JNEWS_TIME_ZONE_ASK_TIPS', 'Valitse aikavyöhykkeesi.');

// Since 1.0.5
define('_JNEWS_FILES' , 'Tiedostot');
define('_JNEWS_FILES_UPLOAD' , 'Lataa palvelimelle');
define('_JNEWS_MENU_UPLOAD_IMG' , 'Lataa kuvat palvelimelle');
define('_JNEWS_TOO_LARGE' , 'Tiedosto on liian suuri. Suurin sallittu koko on');
define('_JNEWS_MISSING_DIR' , 'Kohdehakemistoa ei ole olemassa');
define('_JNEWS_IS_NOT_DIR' , 'Kohdehakemistoa ei ole olemassa tai se on tiedosto.');
define('_JNEWS_NO_WRITE_PERMS' , 'Kohdehakemistoon ei ole annettu kirjoitusoikeuksia.');
define('_JNEWS_NO_USER_FILE' , 'Et valinnut yhtään tiedostoa ladattavaksi.');
define('_JNEWS_E_FAIL_MOVE' , 'Tiedostoa on mahdoton siirtää.');
define('_JNEWS_FILE_EXISTS' , 'Kohdetiedosto on jo olemassa.');
define('_JNEWS_CANNOT_OVERWRITE' , 'Kohdetiedosto on jo olemassa tai sitä ei voitu korvata.');
define('_JNEWS_NOT_ALLOWED_EXTENSION' , 'Tiedostopääte ei ole sallittu.');
define('_JNEWS_PARTIAL' , 'Tiedosto ladattiin vain osittain.');
define('_JNEWS_UPLOAD_ERROR' , 'Latausvirhe:');
define('_JNEWS_DEV_NO_DEF_FILE' , 'Tiedosto ladattiin vain osittain.');

// already exist but modified  added a <br/ on first line and added [SUBSCRIPTIONS] line>
define('_JNEWS_CONTENTREP', '{tag:subscriptions} = Tämä korvataan tilauslinkeillä.' .
		' Tämä on <strong>pakollinen</strong> jotta jNews toimisi oikein.<br />' .
		'Jos sisällytät tähän kenttään mitään muuta sisältöä se näytetään kaikissa tämän listan postituksissa.' .
		' <br />Lisää tilausviestisi loppuun.  jNews lisää automaattisesti linkin tilaajalle tietojensa muuttamiseen ja tilauksen peruuttamiseen.');

// since 1.0.6
define('_JNEWS_NOTIFICATION', 'Tiedote');  // shortcut for Email notification
define('_JNEWS_NOTIFICATIONS', 'Tiedotteet');
define('_JNEWS_USE_SEF', 'SEF sähköpostiviesteissä');
define('_JNEWS_USE_SEF_TIPS', 'Asetusta Ei suositellaan.  Jos kuitenkin haluat, että viesteihin sisällytetyt URL:t ovat SEF muotoiltuja valitse Kyllä.' .
		' <br /><b>Linkit toimivat samalla tavalla molemmissa tapauksissa.  Valinta Ei turvaa sen, että linkit toimivat aina vaikka muuttaisitkin SEFiä.</b> ');
define('_JNEWS_ERR_NB' , 'Virhe #: ERR');
define('_JNEWS_ERR_SETTINGS', 'Virheiden käsittelyn asetukset');
define('_JNEWS_ERR_SEND' ,'Lähetä virheraportti');
define('_JNEWS_ERR_SEND_TIPS' ,'Jos haluat jNewsin parantuvan tuotteena valitse KYLLÄ.  Tämä lähettää meille virheraportin.  Joten sinun ei tarvitse erikseen raportoida bugejakaan ;-) <br /> <b>YKSITYISIÄ TIETOJA EI LÄHETETÄ</b>.  Emme edes tiedä miltä sivustolta virhe tulee. Lähetämme tiedot vain jNewsin, PHP:n ja SQL:n asetuksista. ');
define('_JNEWS_ERR_SHOW_TIPS' ,'Valitse Kyllä näyttääkseni virhekoodin näytöllä.  Käytetään virheenkorjaamiseen. ');
define('_JNEWS_ERR_SHOW' ,'Näytä virheet');
define('_JNEWS_LIST_SHOW_UNSUBCRIBE', 'Näytä peruuta tilaus linkit');
define('_JNEWS_LIST_SHOW_UNSUBCRIBE_TIPS', 'Valitse Kyllä jos haluat näyttää käyttäjille tilauksen peruuttamislinkit postitusten lopussa tilauksen muuttamista varten. <br /> Ei poistaa linkit käytöstä.');
define('_JNEWS_UPDATE_INSTALL', '<span style="color: rgb(255, 0, 0);">TÄRKEÄ TIEDOTE!</span> <br />Jos olet päivittämässä aiemmasta jNews versiosta sinun täytyy päivittää tietokantataulujesi rakenne napsauttamalal seuraavaa painiketta (tietojesi eheyden säilyminen on turvattu)');
define('_JNEWS_UPDATE_INSTALL_BTN' , 'Päivitä taulut ja asetukset');
define('_JNEWS_MAILING_MAX_TIME', 'Jonon enimmäisaika' );
define('_JNEWS_MAILING_MAX_TIME_TIPS', 'Määrittele enimmäisaika sähköpostitusjonon käsittelylle. Suositellaan pidettäväksi 30 sekunnin ja 2 minuutin välillä.');

// virtuemart integration beta
define('_JNEWS_VM_INTEGRATION', 'VirtueMart Integraatio');
define('_JNEWS_VM_COUPON_NOTIF', 'Kuponki-ilmoituksen ID');
define('_JNEWS_VM_COUPON_NOTIF_TIPS', 'Määrittele sen postituksen ID numero, jonka mukana haluat lähettää kuponkeja asiakkaillesi.');
define('_JNEWS_VM_NEW_PRODUCT', 'Uutuustuoteilmoitusten ID');
define('_JNEWS_VM_NEW_PRODUCT_TIPS', 'Valitse sen postituksen ID numero, jonka mukana haluat ilmoittaa uutuustuotteista.');

// since 1.0.8
// create forms for subscriptions
define('_JNEWS_FORM_BUTTON', 'Luo lomake');
define('_JNEWS_FORM_COPY', 'HTML koodi');
define('_JNEWS_FORM_COPY_TIPS', 'Kopioi luotu HTML koodi HTML sivullesi.');
define('_JNEWS_FORM_LIST_TIPS', 'Valitse lista jonka haluat sisällyttää lomakkeeseen');
// update messages
define('_JNEWS_UPDATE_MESS4' , 'Ei voida päivittää automaattisesti.');
define('_JNEWS_WARNG_REMOTE_FILE' , 'Ei keinoa hakea etätiedostoa.');
define('_JNEWS_ERROR_FETCH' , 'Virhe tiedostoa noudettaessa.');

define('_JNEWS_CHECK' , 'Tarkista');
define('_JNEWS_MORE_INFO' , 'Lisätietoja');
define('_JNEWS_UPDATE_NEW' , 'Päivitä uudempaan versioon');
define('_JNEWS_UPGRADE' , 'Vaihda korkeampaan tuoteversioon');
define('_JNEWS_DOWNDATE' , 'Palaa aiempaan versioon');
define('_JNEWS_DOWNGRADE' , 'Palaa perusversioon');
define('_JNEWS_REQUIRE_JOOM' , 'Edellytä Joomlaa');
define('_JNEWS_TRY_IT' , 'Kokeile!');
define('_JNEWS_NEWER', 'Uudempi');
define('_JNEWS_OLDER', 'Vanhempi');
define('_JNEWS_CURRENT', 'Nykyinen');

// since 1.0.9
define('_JNEWS_CHECK_COMP', 'Kokeile yhtä muista komponenteista');
define('_JNEWS_MENU_VIDEO' , 'Video tutoriaalit');
define('_JNEWS_SCHEDULE_TITLE', 'Automaattinen ajastusfunktion asetus');
define('_JNEWS_ISSUE_NB_TIPS' , 'Numero luotu automaattisesti järjestelmässä' );
define('_JNEWS_SEL_ALL' , 'Kaikki postitukset');
define('_JNEWS_SEL_ALL_SUB' , 'Kaikki listat');
define('_JNEWS_INTRO_ONLY_TIPS' , 'Jos valitset tämän kohdan vain artikkelin ingressi sisällytetään postitukseen sivustollesi johtavan Lue lisää -linkin kera.' );
define('_JNEWS_TAGS_TITLE' , 'Sisällön tunniste');
define('_JNEWS_TAGS_TITLE_TIPS' , 'Kopioi ja liitä tämä tunniste viestiin siihen kohtaan, johon haluat sisällön sijoittaa.');
define('_JNEWS_PREVIEW_EMAIL_TEST', 'Anna sähköpostiosoite, johon koeviesti lähetetään');
define('_JNEWS_PREVIEW_TITLE' , 'Esikatselu');
define('_JNEWS_AUTO_UPDATE' , 'Päivitysilmoitus');
define('_JNEWS_AUTO_UPDATE_TIPS' , 'Valitse kyllä, jos haluat ilmoituksen uusista päivityksistä komponenttiin. <br />TÄRKEÄÄ!! Vihjeiden näyttämisen täytyy olla päällä, jotta tämä toimisi.');

// since 1.1.0
define('_JNEWS_LICENSE' , 'Lisenssin tiedot');

// since 1.1.1
define('_JNEWS_NEW' , 'Uusi');
define('_JNEWS_SCHEDULE_SETUP', 'Jotta automaattiviestit lähetettäisiin sinun pitää määritellä ajastuksen asetukset.');
define('_JNEWS_SCHEDULER', 'Ajastus');
define('_JNEWS_jnews_CRON_DESC' , 'Jos sinulla ei ole pääsyä <pre>cron</pre> tehtävien hallintaan palvelimellasi, voit rekisteröityä ilmaisen jNews <pre>cron</pre> palvelun käyttäjäksi osoitteessa:' );
define('_JNEWS_CRON_DOCUMENTATION' , 'Löydät lisätietoja jNews Ajastimen käytöstä seuraavasta osoitteesta:');
define('_JNEWS_CRON_DOC_URL' , '<a href="http://www.joobi.co/index.php?option=com_content&view=article&id=4249&catid=29&Itemid=72"
 target="_blank">http://www.joobi.co/index.php?option=com_content&Itemid=72&view=category&layout=blog&id=29&limit=60</a>' );
define( '_JNEWS_QUEUE_PROCESSED' , 'Jono käsitelty onnistuneesti...' );
define( '_JNEWS_ERROR_MOVING_UPLOAD' , 'Virhe tuodun tiedoston siirrossa' );

//since 1.1.4
define( '_JNEWS_SCHEDULE_FREQUENCY' , 'Ajastuksen aikaväli' );
define( '_JNEWS_CRON_MAX_FREQ' , 'Ajastuksen pienin aikaväli' );
define( '_JNEWS_CRON_MAX_FREQ_TIPS' , 'Aseta kuinka usein ajastus voi enintään toimia.  Tämä rajoittaa ajastuksen toimintaa vaikka <pre>cron</pre> palvelu olisikin ajastettu taajemmalle.' );
define( '_JNEWS_CRON_MAX_EMAIL' , 'Tehtävän enimmäisviestimäärä' );
define( '_JNEWS_CRON_MAX_EMAIL_TIPS' , 'Aseta enimmäismäärä yhden tehtävän sähköpostiviesteille. 0 toimii aivan kuten 1.' );
define( '_JNEWS_CRON_MINUTES' , ' minuuttia' );
define( '_JNEWS_SHOW_SIGNATURE' , 'Näytä viestin alatunniste' );
define( '_JNEWS_SHOW_SIGNATURE_TIPS' , 'Haluatko mainostaa jNewsia viestien alatunnisteessa.' );
define( '_JNEWS_QUEUE_AUTO_PROCESSED' , 'Automaattiviestit käsitelty onnistuneesti...' );
define( '_JNEWS_QUEUE_NEWS_PROCESSED' , 'Ajastetut uutiskirjeet käsitelty onnistuneesti...' );
define( '_JNEWS_MENU_SYNC_USERS' , 'Synkronoi käyttäjät' );
define( '_JNEWS_SYNC_USERS_SUCCESS' , 'Käyttäjien synkronointi onnistui!' );

// compatibility with Joomla 15
if (!defined('_BUTTON_LOGOUT')) define( '_BUTTON_LOGOUT', 'Kirjaudu ulos' );
if (!defined('_CMN_YES')) define( '_CMN_YES', 'Kyllä' );
if (!defined('_CMN_NO')) define( '_CMN_NO', 'Ei' );
if (!defined('_HI')) define( '_HI', 'Hei' );
if (!defined('_CMN_TOP')) define( '_CMN_TOP', 'Ylös' );
if (!defined('_CMN_BOTTOM')) define( '_CMN_BOTTOM', 'Alas' );
//if (!defined('_BUTTON_LOGOUT')) define( '_BUTTON_LOGOUT', 'Logout' );

// For include title only or full article in content item tab in newsletter edit - p0stman911
define('_JNEWS_TITLE_ONLY_TIPS' , 'Jos valitset tämän vaihtoehdon vain artikkelin otsikko liitetään postitukseen linkkinä artikkeliin sivustollasi.');
define('_JNEWS_TITLE_ONLY' , 'Vain otsikko');
define('_JNEWS_FULL_ARTICLE_TIPS' , 'Jos valitset tämän kohdan koko artikkeli sisällytetään postitukseen');
define('_JNEWS_FULL_ARTICLE' , 'Koko artikkeli');
define('_JNEWS_CONTENT_ITEM_SELECT_T', 'Valitse nimike lisättäväksi viestiin. <br />Kopioi ja liitä <b>sisällön paikanmerkki</b> postitukseen.  Voit valita koko artikkelin(0), vain ingressin(1) tai vain otsikon(2). ');
define('_JNEWS_SUBSCRIBE_LIST2', 'Postituslista(t)');

// For sorting in content tab by date, section or category
define('_JNEWS_CONTENT_ITEM_SORT', 'Lajittele: ');
define('_JNEWS_SORT_DATE' , 'Päiväys');
define('_JNEWS_SORT_DATE_TIPS' , 'Sisältö lajitellaan luomispäiväyksen mukaan');
define('_JNEWS_SORT_SECTION' , 'Ryhmä');
define('_JNEWS_SORT_SECTION_TIPS' , 'Sisältö lajitellaan ryhmän mukaan');
define('_JNEWS_SORT_CATEGORY' , 'Kategoria');
define('_JNEWS_SORT_CATEGORY_TIPS' , 'Sisältö lajitellaan kategorian mukaan');
define('_JNEWS_SORT_BUTTON' , 'Lajittele');


// smart-newsletter function
define('_JNEWS_AUTONEWS', 'Automaattinen uutiskirje');
define('_JNEWS_MENU_AUTONEWS', 'Automaattiset uutiskirjeet');
define('_JNEWS_AUTO_NEWS_OPTION', 'Automaattisten uutiskirjeiden asetukset');
define('_JNEWS_AUTONEWS_FREQ', 'Uutiskirjeen lähetysväli');
define('_JNEWS_AUTONEWS_FREQ_TIPS', 'Aseta kuinka usein haluat lähettää automaattisen uutiskirjeen.');
define('_JNEWS_AUTONEWS_SECTION', 'Artikkelien pääryhmä');
define('_JNEWS_AUTONEWS_SECTION_TIPS', 'Aseta pääryhmä, josta haluat artikkelit valita.');
define('_JNEWS_AUTONEWS_CAT', 'Artikkelien ryhmä');
define('_JNEWS_AUTONEWS_CAT_TIPS', 'Aseta ryhmä, josta haluat artikkelit valita (Kaikki tarkoittaa kaikkia pääryhmän artikkeleita).');
define('_JNEWS_SELECT_SECTION', 'Valitse pääryhmä');
define('_JNEWS_SELECT_CAT', 'Kaikki ryhmät');
define('_JNEWS_AUTO_DAY_CH8', 'Neljännesvuosittain');
define('_JNEWS_AUTONEWS_STARTDATE', 'Aloituspäivämäärä');
define('_JNEWS_AUTONEWS_STARTDATE_TIPS', 'Valitse päivämäärä jolloin haluat aloittaa automaattisen uutiskirjeen lähetykset.');
define('_JNEWS_AUTONEWS_TYPE', 'Sisällön käsittely');// how we see the content which is included in the newsletter
define('_JNEWS_AUTONEWS_TYPE_TIPS', 'Koko artikkeli: sisällyttää koko artikkelin uutiskirjeeseen.<br />' .
		'Vain ingressi: sisällyttää vain artikkelin ingressin uutiskirjeeseen.<br/>' .
		'Vain otsikko: sisällyttää vain artikkelin otsikon uutiskirjeeseen.');
define('_JNEWS_TAGS_AUTONEWS', '[SMARTNEWSLETTER] = Tämä korvataan uutiskirjeellä.' );

//since 1.1.3
define('_JNEWS_MALING_EDIT_VIEW', 'Luo / Katso postituksia');
define('_JNEWS_LICENSE_CONFIG' , 'Lisenssi' );
define('_JNEWS_ENTER_LICENSE' , 'Anna lisenssinumero');
define('_JNEWS_ENTER_LICENSE_TIPS' , 'Anna lisenssinumerosi ja tallenna se.');
define('_JNEWS_LICENSE_SETTING' , 'Lisenssiasetukset' );
define('_JNEWS_GOOD_LIC' , 'Lisenssisi on voimassa.' );
define('_JNEWS_NOTSO_GOOD_LIC' , 'Lisenssisi ei ole voimassa: ' );
define('_JNEWS_PLEASE_LIC' , 'Ole hyvä ja ota yhteyttä jNews tukeen päivittääksesi lisenssisi ( license@joobi.co ).' );
define('_JNEWS_DESC_PLUS', 'jNews Plus tukee ensimmäisenä ketjutettuja automaattiviestejä Joomla julkaisujärjestelmässä.  ' . _JNEWS_FEATURES );
define('_JNEWS_DESC_PRO', 'jNews PRO on paras postitusjärjestelmä Joomla julkaisujärjestelmälle.  ' . _JNEWS_FEATURES );

//since 1.1.4
define('_JNEWS_ENTER_TOKEN' , 'Anna tilauskoodi');

define('_JNEWS_ENTER_TOKEN_TIPS' , 'Anna tilauskoodi (&quot;token&quot;) jonka sait jNewsin hankkiessasi. ');

define('_JNEWS_jnews_SITE', 'jNews sivusto:');
define('_JNEWS_MY_SITE', 'Minun sivustoni:');

define( '_JNEWS_LICENSE_FORM' , ' ' .
 		'Napsauta tästä mennäksesi lisenssilomakkeelle.</a>' );
define('_JNEWS_PLEASE_CLEAR_LICENSE' , 'Tyhjennä lisenssikenttä ja yritä uudelleen.<br />  Jos ongelma jatkuu, ' );

define( '_JNEWS_LICENSE_SUPPORT' , 'Jos sinulla on vielä kysyttävää, ' . _JNEWS_PLEASE_LIC );

define( '_JNEWS_LICENSE_TWO' , 'voit hakea lisenssin antamalla tilauskoodisi ja sivuston URL-osoitteen (joka on merkitty vihreällä sivun ylälaidassa) lisenssilomakkeeseen. '
			. _JNEWS_LICENSE_FORM . '<br /><br/>' . _JNEWS_LICENSE_SUPPORT );

define('_JNEWS_ENTER_TOKEN_PATIENCE', 'Tilauskoodin tallentamisen jälkeen lisenssi luodaan automaattisesti. ' .
		' Tavallisesi tilauskoodi varmistetaan parissa minuutissa.  Joissain tapauksissa se voi kuitenkin kestää jopa 15 minuuttia.<br />' .
		'<br />Tarkasta tämä ohjauspaneeli uudelleen muutaman minuutin kuluttua.  <br /><br />' .
		'Jos et saa kelvollista lisenssiavainta 15 minuutissa, '. _JNEWS_LICENSE_TWO);


define( '_JNEWS_ENTER_NOT_YET' , 'Tilauskoodiasi ei ole vielä varmistettu.');
define( '_JNEWS_UPDATE_CLICK_HERE' , 'Ole hyvä ja käy <a href="http://www.joobi.co" target="_blank">www.joobi.co</a> ladataksesi uusimman version.');
define( '_JNEWS_NOTIF_UPDATE' , 'Saadaksesi ilmoituksen uusista päivityksistä, anna sähköpostiosoitteesi ja napsauta &quot;Tilaa&quot; ');

define('_JNEWS_THINK_PLUS', 'Jos haluat enemmän postitusjärjestelmältäsi ajattele Plus!');
define('_JNEWS_THINK_PLUS_1', 'Ketjutetut automaattiviestit');
define('_JNEWS_THINK_PLUS_2', 'Ajasta uutiskirjeesi toimitus ennalta määrätylle päivälle');
define('_JNEWS_THINK_PLUS_3', 'Ei enää palvelin rajoituksia');
define('_JNEWS_THINK_PLUS_4', 'ja paljon muuta...');

//since 1.2.2
define( '_JNEWS_LIST_ACCESS', 'Listan käyttöoikeudet' );
define( '_JNEWS_INFO_LIST_ACCESS', 'Aseta käyttäjäryhmä, jolla on oikeus nähdä ja tilata lista' );
define( 'JNEWS_NO_LIST_PERM', 'Sinulla ei ole riittäviä oikeuksia tämän listan tilaamiseen' );

//Archive Configuration
 define('_JNEWS_MENU_TAB_ARCHIVE', 'Arkisto');
 define('_JNEWS_MENU_ARCHIVE_ALL', 'Arkistoi kaikki');

//Archive Lists
 define('_JNEWS_FREQ_OPT_0', 'Ei ollenkaan');
 define('_JNEWS_FREQ_OPT_1', 'Joka viikko');
 define('_JNEWS_FREQ_OPT_2', 'Joka toinen viikko');
 define('_JNEWS_FREQ_OPT_3', 'Joka kuukausi');
 define('_JNEWS_FREQ_OPT_4', 'Neljännesvuosittain');
 define('_JNEWS_FREQ_OPT_5', 'Vuosittain');
 define('_JNEWS_FREQ_OPT_6', 'Muu');

define('_JNEWS_DATE_OPT_1', 'Luontipäivä');
define('_JNEWS_DATE_OPT_2', 'Muokkauspäivä');

define('_JNEWS_ARCHIVE_TITLE', 'Automaattisen arkistoinnin aikaväli');
define('_JNEWS_FREQ_TITLE', 'Arkistointiväli');
define('_JNEWS_FREQ_TOOL', 'Määrittele miten usein haluat arkistoida sisältösi automaattisesti.');
define('_JNEWS_NB_DAYS', 'Päivien määrä');
define('_JNEWS_NB_DAYS_TOOL', 'Tämä on vain Muu vaihtoehtoa varten! Ole hyvä ja anna päivien määrä arkistointien välissä.');
define('_JNEWS_DATE_TITLE', 'Päiväyksen valinta');
define('_JNEWS_DATE_TOOL', 'Valitse arkistoidaanko luonti- vai muokkauspäivämäärän mukaan.');

define('_JNEWS_MAINTENANCE_TAB', 'Ylläpidon asetukset');
define('_JNEWS_MAINTENANCE_FREQ', 'Ylläpidon aikaväli');
define( '_JNEWS_MAINTENANCE_FREQ_TIPS', 'Määrittelen miten usein haluat ylläpitorutiinin tapahtuvan.' );
define( '_JNEWS_CRON_DAYS' , 'tunti(a)' );

define( '_JNEWS_LIST_NOT_AVAIL', 'Ei listaa käytettävissä.');
define( '_JNEWS_LIST_ADD_TAB', 'Luo/Muokkaa' );

define( '_JNEWS_LIST_ACCESS_EDIT', 'Postituksen luonti/muokkausoikeudet' );
define( '_JNEWS_INFO_LIST_ACCESS_EDIT', 'Aseta käyttäjäryhmä jolla on oikeus luoda ja muokata postituksia' );
define( '_JNEWS_MAILING_NEW_FRONT', 'Luo uusi postitus' );

define('_JNEWS_AUTO_ARCHIVE', 'Automaattinen arkistointi');
define('_JNEWS_MENU_ARCHIVE', 'Automaattinen arkistointi');

//Extra tags:
define('_JNEWS_TAGS_ISSUE_NB', '{tag:issuenb} = Tämä korvataan uutiskirjeen numerolla.');
define('_JNEWS_TAGS_DATE', '{tag:date} = Tämä korvataan lähetyspäivällä.');
define('_JNEWS_TAGS_CB', '[CBTAG:{field_name}] = Tämä korvataan arvolla joka otetaan Community Builderin kentästä esim. [CBTAG:firstname] ');
define( '_JNEWS_MAINTENANCE', 'Ylläpito' );

define('_JNEWS_THINK_PRO', 'Kun sinulla on ammattimaisia tarpeita, käytä ammattimaisia komponentteja!');
define('_JNEWS_THINK_PRO_1', 'Automaattiset uutiskirjeet');
define('_JNEWS_THINK_PRO_2', 'Aseta käyttöoikeustaso listallesi');
define('_JNEWS_THINK_PRO_3', 'Määrittele kuka voi luoda ja muokata postituksia');
define('_JNEWS_THINK_PRO_4', 'Lisää tunnisteita: lisää CB kenttiä');
define('_JNEWS_THINK_PRO_5', 'Joomla sisältöjen automaattinen arkistointi');
define('_JNEWS_THINK_PRO_6', 'Tietokannan optimointi');

define('_JNEWS_LIC_NOT_YET', 'Lisenssiä ei ole vielä vahvistettu.  Tarkista asetustusten lisenssi välilehti.');
define('_JNEWS_PLEASE_LIC_GREEN' , 'Muista antaa vihreällä merkityt tiedot välilehden yläosassa auttaaksesi käyttäjätukeamme.' );

define('_JNEWS_FOLLOW_LINK' , 'Hanki lisenssi');
define( '_JNEWS_FOLLOW_LINK_TWO' , 'Voit noutaa lisenssisi antamalla tilauskoodisi ja sivustosi URL-osoitteen (joka on merkitty vihreällä sivun yläosassa) lisenssilomakkeeseen. ');
define( '_JNEWS_ENTER_TOKEN_TIPS2', ' Napsauta sitten &quot;Käytä&quot; painiketta sivun oikeassa yläkulmassa.' );
define( '_JNEWS_ENTER_LIC_NB', 'Anna lisenssinumero' );
define( '_JNEWS_UPGRADE_LICENSE', 'Päivitä lisenssisi');
define( '_JNEWS_UPGRADE_LICENSE_TIPS' , 'Jos sait tilauskoodin lisenssin päivittämistä varten täytä se tähän ja napsauta sitten &quot;Käytä&quot; ja siirry numeroon <b>2</b> saadaksesi uuden lisenssinumeron.' );

define( '_JNEWS_MAIL_FORMAT', 'Sisällön koodaus' );
define( '_JNEWS_MAIL_FORMAT_TIPS', 'Mitä sisällön koodausta haluat käyttää postituksissasi, pelkkää tekstiä vai MIME:a' );
define( '_JNEWS_jnews_CRON_DESC_ALT', 'Jos sinulla ei ole pääsyä <pre>cron</pre> tehtävien hallintaan palvelimellasi voit käyttää ilmaista jCron komponenttia luodaksesi <pre>cron</pre> tehtävän sivustollesi.' );

//since 1.3.1
define('_JNEWS_SHOW_AUTHOR', 'Näytä kirjoittajan nimi');
define('_JNEWS_SHOW_AUTHOR_TIPS', 'Valitse Kyllä jos haluat listä kirjoittajan nimen kun lisäät artikkelin postitukseesi');

//since 1.3.5
define('_JNEWS_REGWARN_NAME','Ole hyvä ja anna nimesi.');
define('_JNEWS_REGWARN_MAIL','Ole hyvä ja anna kelvollinen sähköpostiosoite.');

//since 1.5.6
define('_JNEWS_ADDEMAILREDLINK_TIPS','Jos valitset Kyllä, käyttäjän sähköpostisoite lisätään parametriksi uudelleenohjaus-URL:n (uudelleenohjaus linkki moduuliisi tai ulkoiseen jNews lomakkeeseen) loppuun.<br/>Se voi olla hyödyllistä jos haluat suorittaa erityisen PHP komentojonon uudelleenohjaussivulla.');
define('_JNEWS_ADDEMAILREDLINK','Lisää sähköpostiosoite uudelleenohjaukseen');

//since 1.6.3
define('_JNEWS_ITEMID','ItemId');
define('_JNEWS_ITEMID_TIPS','Tämä ItemId lisätään jNews linkkeihisi.');

//since 1.6.5
define('_JNEWS_SHOW_JCALPRO','jCalPRO');
define('_JNEWS_SHOW_JCALPRO_TIPS','Näytä integraatio välilehti jCalPRO:lle <br/>(vain jos jCalPRO on asennettuna sivustollesi!)');
define('_JNEWS_JCALTAGS_TITLE','jCalPRO tunniste:');
define('_JNEWS_JCALTAGS_TITLE_TIPS','Kopioi ja liitä tämä tunniste postitukseesi siihen kohtaan johon haluat tapahtumen lisättävän.');
define('_JNEWS_JCALTAGS_DESC','Kuvaus:');
define('_JNEWS_JCALTAGS_DESC_TIPS','Valitse Kyllä, jos haluat lisätä tapahtuman kuvauksen');
define('_JNEWS_JCALTAGS_START','Alkupäivä:');
define('_JNEWS_JCALTAGS_START_TIPS','Valitse Kyllä, jos haluat lisätä tapahtuman alkupäivämäärän');
define('_JNEWS_JCALTAGS_READMORE','Lue lisää:');
define('_JNEWS_JCALTAGS_READMORE_TIPS','Valitse Kyllä, jos haluat lisätä <b>Lue lisää -linkin</b> tälle tapahtumalle');
define('_JNEWS_REDIRECTCONFIRMATION','Uudelleenohjaus URL');
define('_JNEWS_REDIRECTCONFIRMATION_TIPS','Jos vaadit vahvistuksen sähköpostiosoitteelle, sähköpostiosoite vahvistetaan ja käyttäjä ohjataan uudelleen tähän URL-osoitteeseen, jos hän napsauttaa vahvistuslinkkiä.');

//since 2.0.0 compatibility with Joomla 1.5
if(!defined('_CMN_SAVE') and defined('CMN_SAVE')) define('_CMN_SAVE',CMN_SAVE);
if(!defined('_CMN_SAVE')) define('_CMN_SAVE','Tallenna');
if(!defined('_NO_ACCOUNT')) define('_NO_ACCOUNT','Ei vielä tunnusta?');
if(!defined('_CREATE_ACCOUNT')) define('_CREATE_ACCOUNT','Rekisteröidy');
if(!defined('_NOT_AUTH')) define('_NOT_AUTH','Sinulla ei ole käyttöoikeutta tähän sivuun.');

//since 3.0.0
define('_JNEWS_DISABLETOOLTIP','Poista vihjeet käytöstä');
define('_JNEWS_DISABLETOOLTIP_TIPS', 'Poista vihjeet käytöstä julkisessa liittymässä');
define('_JNEWS_MINISENDMAIL', 'Käytä Mini SendMailia');
define('_JNEWS_MINISENDMAIL_TIPS', 'Jos palvelimesi käyttää Mini SendMailia, valitse tämä vaihtoehto jotta käyttäjän nimeä ei lisätä sähköpostin otsikkotietoihin');
define('_JNEWS_CONTENT_ORDERING' , 'Sisällön järjestäminen');
define('_JNEWS_CONTENT_ORDERING_TIPS' , 'Tämä lajittelee sisällön sisältöliitännäisessä');


//Since 3.1.5
define('_JNEWS_READMORE','Lue lisää...');
define('_JNEWS_VIEWARCHIVE','Napsauta tätä');

//since 4.0.0
define('_JNEWS_SHOW_JLINKS','Linkinseuranta');
define('_JNEWS_SHOW_JLINKS_TIPS','Sallii uutiskirjeesi sisältämien linkkien käytön seurannan jLinks integraation kautta.');

//since 4.1.0
define( '_JNEWS_MAIL_ENCODING', 'Sähköpostin tekstin merkistö' );
define( '_JNEWS_MAIL_ENCODING_TIPS', 'Mitä merkistöä haluat käyttää: UTF-8 (suositeltu) vai ISO-8859-2' );
define( '_JNEWS_COPY_SUBJECT', 'Kopioi aihe' );

//since 5.0.0
//fieldset for column configuration
define('_JNEWS_COLUMN','Käyttäjämääritetyt sarakkeet');
define('_JNEWS_COL1_NAME', 'Sarake 1 Nimi');
define('_JNEWS_COL2_NAME', 'Sarake 2 Nimi');
define('_JNEWS_COL3_NAME', 'Sarake 3 Nimi');
define('_JNEWS_COL4_NAME', 'Sarake 4 Nimi');
define('_JNEWS_COL5_NAME', 'Sarake 5 Nimi');
define('_JNEWS_COLUMN1_REP', '{tag:profile nb=1} = Tämä korvataan käyttäjämääritetyllä sarakkeella 1');
define('_JNEWS_COLUMN2_REP', '{tag:profile nb=2} = Tämä korvataan käyttäjämääritetyllä sarakkeella 2');
define('_JNEWS_COLUMN3_REP', '{tag:profile nb=3} = Tämä korvataan käyttäjämääritetyllä sarakkeella 3');
define('_JNEWS_COLUMN4_REP', '{tag:profile nb=4} = Tämä korvataan käyttäjämääritetyllä sarakkeella 4');
define('_JNEWS_COLUMN5_REP', '{tag:profile nb=5} = Tämä korvataan käyttäjämääritetyllä sarakkeella 5');
//end of columns
//url
define('_JNEWS_URL_PASS','Salasana');
define('_JNEWS_URL_PASS_TIPS','Syötä salasana salliaksesi tilausten lisäämisen URL-linkillä. Lisää &quot;catcher variable password&quot; linkkiin.<br>(Plus ja PRO versioissa tätä koodia käytetään CAPTCHAan.)');
define('_JNEWS_URL_MES','Sinulla ei ole käyttöoikeutta tilata URL-linkin kautta.<br />Tee tilaukset Tilaajat moduulin tai sivuston kautta.');
define('_JNEWS_URL_PASS_WARN','(Jos muutat tätä salasanaa PRO versiossa, muista muuttaa myös ulkoisella tilauslomakkeella oleva salasana.)');
define('_JNEWS_ENABLE_CAPTCHA', 'Käytä CAPTCHAa');
define('_JNEWS_ENABLE_CAPTCHA_TIPS','Käytä CAPTCHAa tilaaja moduulissa ja PRO version ulkoisessa lomakkeessa.');
//url
// subscription notification
define('_JNEWS_SUBSCRIPTION_NOTIFY','Lähetä tilausilmoitus');
define('_JNEWS_SUBSCRIPTION_NOTIFY_TIPS','Haluatko lähettää ilmoituksen listan hallinnoijalle kun joku tilaa listan');
define('_JNEWS_SUBSCRIPTION_NOTIFY_MSG1','Tilausilmoitus on lähetetty hallinnoijalle.');
define('_JNEWS_SUBSCRIPTION_NOTIFY_MSG2','Tilausilmoitusta ei lähetetty.');
define('_JNEWS_SUBSCRIPTION_NOTIFY_ERR','Unable in sending a subscription notification to the administrator.');
//subscription notification messages
//for captcha
define('_JNEWS_CAPTCHA_CAPTION','CAPTCHA: ');
define('JNEWS_WRONG_CAPTCHA_ENTERED','<p style=\'text-align: justify;\'><b>CAPTCHA koodi tai antamasi tiedot ovat virheellisiä.</b><br>(CAPTCHAn tarkoitus on varmistaa, että vain oikeat ihmiset voivat rekisteröityä tilaajiksi.)<br><br><b><font color=#ff0000>Tilaustasi ei käsitelty.</font></b><br><br>Syötä tietosi ja CAPTCHA koodi huolellisesti ja paina <b>Tilaa</b> painiketta.<br><br>Kiitos ymmärtäväisyydestä.</p><br>');
define('_JNEWS_REGWARN_CAPTCHA','Syötä CAPTCHA koodi.');
define('_JNEWS_SUB_ERR','<br>Virhe tilattaessa.');

//since 6.0.0
define('_JNEWS_MOOTOOLS_BTNTEXT' , 'Tilaa tästä');
define('_JNEWS_QUEUE_SUBJECT','Aihe');
define('_JNEWS_QUEUE_EMAIL','Sähköposti');
define('_JNEWS_QUEUE_PRIOR','Prioriteetti');
define('_JNEWS_QUEUE_ATT','Yrityskerrat');
define('_JNEWS_QUEUE_DEL', 'Poista');
define('_JNEWS_PROCESS_Q','Käsittele jono');
define('_JNEWS_CLEAN_Q','Puhdista jono');
define('_JNEWS_SENDDATE','Lähetyspäiväys');
define('_JNEWS_MAILING_Q','Kaikki postitukset jonossa');
define('_JNEWS_MENU_QUEUE', 'Jono');
define('_JNEWS_MENU_TEMPLATES','Viestipohjat');
define('_JNEWS_MENU_TAB_QUEUE' , 'Jono');
define('_JNEWS_Q_PROCESS' , 'Jonon asetukset');
define('_JNEWS_MAX_Q','Viestejä enintään erässä');
define('_JNEWS_SUBS_LIST_LABEL' , 'Tämä uutiskirje lähetetään seuraavien listojen tilaajille:');
define('_JNEWS_SUBS_LIST_CAMPAIGN' , 'Tämä automaattiviesti lähetetään seuraavien automaattiviestien tilaajille:');
define('_JNEWS_SUBS_LIST_RECEIVE', 'Vastaanota' );
define('_JNEWS_SUBS_LIST_TOALL', 'Valitse kaikki' );
define('_JNEWS_SUBS_LIST_TONONE', 'Ei mitään' );
define('_JNEWS_LIST_COLOR','Väri');
define('_JNEWS_LIST_COLOR_TIP','Valitse väri listallesi. Tämä voi selventää tilastoja.');
define('_JNEWS_MENU_NEW', 'Uusi');
define('_JNEWS_MENU_EDIT', 'Muokkaa');
define('_JNEWS_MENU_APPLY', 'Käytä');
define('_JNEWS_MENU_CANCEL', 'Peruuta');
define('_JNEWS_MENU_TEMPLATE', 'Viestipohja');
define('_JNEWS_HTML_VERSION', 'HTML versio');
define('_JNEWS_NONHTML_VERSION', 'Teksti versio');
define('_JNEWS_TAG_NAME_DESC' , 'Tämä korvataan tilaajan antamalla nimellä. Jos käytät tätä, lähetät personoituja viestejä.');
define('_JNEWS_TAG_FNAME_DESC' , 'Tämä korvataan ensimmäisellä tilaajan antamalla nimellä.');
define('_JNEWS_TAG_ISSUENB_DESC' , 'Tämä korvataan uutiskirjeen järjestysnumerolla.');
define('_JNEWS_TAG_DATE_DESC' , 'Tämä korvataan lähetyspäiväyksellä.');
define('_JNEWS_TAG_CBNAME' , '[CBTAG:{field_name}]');
define('_JNEWS_TAG_CBNAME_DESC' , 'Tämä korvataan valitulla Community Builder kentällä: esimerkiksi [CBTAG:firstname] ');
define('_JNEWS_TAG_LOADMODINFO_DESC' , 'Tämä korvataan Joomla moduulilla, jonka id vastaa annettua numeroa. Esimerkiksi {module=1}.<br /> Moduuleja voi ladata vain ajoituksen kautta. <br /> ');
define('_JNEWS_DATETIME' , 'Päiväys ja aika');
define('_JNEWS_TEMPLATE_COPY' , '_kopio');
define('_JNEWS_TEMPLATE_DEFAULT_NODEL' , 'Et voi poistaa oletusviestipohjaa!');
define('_JNEWS_TEMPLATE_DEFAULT_SUCCS' , 'Asetettu oletusviestipohjaksi!');
define('_JNEWS_TEMPLATE' , 'Viestipohja');
define('_JNEWS_TEMPLATES' , 'Viestipohjat');
define('_JNEWS_AR' , 'Automaattiviesti');
define('_JNEWS_SELCT_MAILINGLIST', 'Valitse Listat-välilehdestä lista lisätäksesi postituksen.');
define('_JNEWS_SELCT_MAILINGCAMPAIGN', 'Valitse Listat-välilehdestä kampanja lisätäksesi postituksen.');
define('_JNEWS_TEMPLATE_AVAIL', 'Kaikki viestipohjat');
define('_JNEWS_TEMPLATE_NAME', 'Nimi');
define('_JNEWS_TEMPLATE_NAME_T', 'Syötä viestipohjan nimi.');
define('_JNEWS_TEMPLATE_NAMEKEY', 'Alias');
define('_JNEWS_TEMPLATE_NAMEKEY_T', 'Syötä viestipohjan nimelle hakukoneystävällinen alias.');
define('_JNEWS_TEMPLATE_DESC', 'Kuvaus');
define('_JNEWS_TEMPLATE_DEFAULT', 'Oletus');
define('_JNEWS_TEMPLATE_DEFAULT_T', 'Valitse &quot;Kyllä&quot; asettaaksesi oletusviestipohjaksi.');
define('_JNEWS_TEMPLATE_PUBLISH', 'Julkaise');
define('_JNEWS_TEMPLATE_PUBLISH_T', 'Valitse &quot;Kyllä&quot; julkaistaksesi viestipohjan.');
define('_JNEWS_TEMPLATE_BG', 'Taustaväri');
define('_JNEWS_TEMPLATE_BG_T', 'Valitse viestipohjan taustaväri.');
define('_JNEWS_TEMPLATE_UPLOAD', 'Lataa esikatselukuva');
define('_JNEWS_TEMPLATE_UPLOAD_T', 'Lataa esikatselukuva viestipohjasta palvelimelle.');
define('_JNEWS_TEMPLATE_DESC_T', 'Syötä viestipohjan kuvaus.');
define('_JNEWS_TEMPLATE_STYLE_TH1', 'Otsikko h1');
define('_JNEWS_TEMPLATE_STYLE_TH2', 'Otsikko h2');
define('_JNEWS_TEMPLATE_STYLE_TH3', 'Otsikko h3');
define('_JNEWS_TEMPLATE_STYLE_TH4', 'Otsikko h4');
define('_JNEWS_TEMPLATE_STYLE_UNSUB', 'Tyyli tilauksen peruutus linkille');
define('_JNEWS_TEMPLATE_STYLE_SUB', 'Tyyli &quot;Muuta tilaustasi&quot; linkille');
define('_JNEWS_TEMPLATE_STYLE_CONTENT', 'Tyyli sisältöalueelle');
define('_JNEWS_TEMPLATE_STYLE_CHEAD', 'Tyyli sisällönotsikolle');
define('_JNEWS_TEMPLATE_STYLE_CREADMORE', 'Tyyli &quot;Lue lisää&quot; linkille');
define('_JNEWS_TEMPLATE_STYLE_VONLINE', 'Tyyli &quot;Lue verkossa&quot; linkille');
define('_JNEWS_TEMPLATE_STYLE_NEW', 'Lisää uusi tyyli');
define('_JNEWS_TEMPLATE_STYLE_NEWC', 'CSS luokan nimi');
define('_JNEWS_TEMPLATE_STYLE_NEWAPPLIED', 'CSS tyylimääritteet, joita käytetään luokkaan.');

//statistics & reports
define('_JNEWS_REPORTS_SUBS', 'Tilaajaraportit');
define('_JNEWS_REPORTS_MAIL', 'Postitusraportit');
define('_JNEWS_REPORTS_LIST', 'Listaraportit');
define('_JNEWS_LIST_SUBCRIBERS', 'Tilausten määrä');
define('_JNEWS_LIST_UNSUBSCRIBERS', 'Peruutusten määrä');
define('_JNEWS_LIST_CONFIRMED', 'Vahvistetut osoitteet');
define('_JNEWS_LIST_UNCONFIRMED', 'Vahvistamattomat osoitteet');
define('_JNEWS_LIST_SUB_DATE', 'Tilauspäiväys');
define('_JNEWS_MAILING_SEND_DATE','Lähetyspäiväys');
define('_JNEWS_MAILING_SUBJECT', 'Aihe');
define('_JNEWS_MAILING_SENT_HTML','HTML-muodossa');
define('_JNEWS_MAILING_SENT_TEXT','Tekstimuodossa');
define('_JNEWS_MAILING_FAILED', 'Lähetysvirheitä');
define('_JNEWS_MAILING_PENDING', 'Lähettämättä');
define('_JNEWS_MAILING_BOUNCES','Palautettuja');
define('_JNEWS_MAILING_SENT', 'Kaikkiaan lähetetty');
//Mailing Reports
define('_JNEWS_MAIL_GRAPH', 'Kaavio');
define('_JNEWS_MAIL_DETAILS', 'Tiedot');
define('_JNEWS_MAIL_DETAILS_READ', 'luettuja HTML');
define('_JNEWS_MAIL_DETAILS_UNREAD', 'lukemattomia HTML');
define('_JNEWS_MAIL_DETAILS_TEXT', 'vain tekstinä');

//stats filters
define('_JNEWS_GROUP_PREDEFINED_DATE','Säännölliset aikavälit');		//legend
define('_JNEWS_GROUP_SPECIFIED_DATE','Vapaa aikaväli');
define('_JNEWS_LABEL_SET_INTERVAL', 'Raportointiväli');		//labels
define('_JNEWS_LABEL_DATE_RANGE','Aikaväli');
define('_JNEWS_LABEL_CURRENT_SERVER_TIME', 'Palvelimen aika');
define('_JNEWS_LABEL_REPORT_TYPE','Raportin tyyppi');
define('_JNEWS_INTERVAL_DAILY','Päivittäin');					//intervals
define('_JNEWS_INTERVAL_WEEKLY','Viikottain');
define('_JNEWS_INTERVAL_MONTHLY', 'Kuukausittain');
define('_JNEWS_INTERVAL_YEARLY','Vuosittain');
define('_JNEWS_DEFINED_RANGE_YESTERDAY','Eilen');		//predefined range
define('_JNEWS_DEFINED_RANGE_TODAY', 'Tänään');
define('_JNEWS_DEFINED_RANGE_THIS_WEEK','Tällä viikolla');
define('_JNEWS_DEFINED_RANGE_LAST_WEEK','Viime viikolla');
define('_JNEWS_DEFINED_RANGE_LAST_TWO_WEEK','Kaksi viime viikkoa');
define('_JNEWS_DEFINED_RANGE_THIS_MONTH','Tässä kuussa');
define('_JNEWS_DEFINED_RANGE_LAST_MONTH','Viime kuussa');
define('_JNEWS_DEFINED_RANGE_THIS_YEAR','Tänä vuonna');
define('_JNEWS_DEFINED_RANGE_LAST_YEAR','Viime vuonna');
define('_JNEWS_DEFINED_RANGE_TWO_YEARS_AGO','Kaksi vuotta sitten');
define('_JNEWS_DEFINED_RANGE_3_YEARS_AGO','Kolme vuotta sitten');
define('_JNEWS_BUTTON_REFRESH','Päivitä');				//buttons
define('_JNEWS_BUTTON_GENERATE','Tee');
define('_JNEWS_BUTTON_RESET', 'Tyhjennä');
define('_JNEWS_SPECIFIED_DATE_START','Alku');			//specified date
define('_JNEWS_SPECIFIED_DATE_END','Loppu');
define('_JNEWS_REPORT_LISTING','Listaus');
define('_JNEWS_REPORT_GRAPH','Kaavio');
define('_JNEWS_REPORT_EXPORT','Vie');
define('_JNEWS_SUBSCRIBERS_ALL_USERS', 'Kaikki käyttäjät');		//subscribers
define('_JNEWS_SUBSCRIBERS_REGISTERED', 'Rekisteröidyt');
define('_JNEWS_SUBSCRIBERS_GUESTS','Rekisteröimättömät');
define('_JNEWS_REPORT_WARN_MESSAGE', 'Aikavälin valinta oli puutteellinen.');

//stats export
define('_JNEWS_STATS_EXPORT', 'Vie');
define('_JNEWS_EXPORT_WARN_MESSAGE', 'Ei vietäviä tietoja');
define('_JNEWS_GRAPH_WARN_MESSAGE', 'Ei näytettäviä tietoja');
define('_JNEWS_REPORT_HEADER', 'Raportti');
define('_JNEWS_REPORT_HEADER_TO', '-&gt;');
define('_JNEWS_PIE_PROCESS_WARN_MESSAGE', 'Ei tietoja postituksesta');
define('_JNEWS_PIE_FORMAT_WARN_MESSAGE', 'Ei tietoja viestien muodosta');

//stats graph labels
define('_JNEWS_GRAPH_LBL_HTML', 'HTML');
define('_JNEWS_GRAPH_LBL_TEXT', 'Teksti');
define('_JNEWS_GRAPH_TITLE_FORMAT', 'HTML/teksti muodossa');
define('_JNEWS_GRAPH_PIE_TITLE_MAIL', 'Postitus');
define('_JNEWS_PIE_SUBS', 'Tilaukset');
define('_JNEWS_PIE_UNSUBS', 'Peruutukset');
define('_JNEWS_PIE_UNCONFIRMED', 'Vahvistettuja');
define('_JNEWS_PIE_CONFIRMED', 'Vahvistamattomia');
define('_JNEWS_MAILING_SUBJECT_HEADER', 'Aihe');


//Wizards
define('_JNEWS_WIZARD', 'Aputoiminto');
define('_JNEWS_CHECKLISTFOUND', 'Luo ja julkaise ensin lista.');

define('_JNEWS_CHECKCAMPAIGNFOUND', 'Luo ja julkaise ensin kampanja-tyyppinen lista.');
define('_JNEWS_TEMPLATE_ALERT_NAMEKEY', 'Viestipohjalla täytyy olla alias!');
define('_JNEWS_LIST_GUIDE', '<strong>Listan hallinta:</strong> <br/>'.
       '<ul><li>Ensimmäinen tehtävä asi jNewsiä käyttöönottaessa on listan luominen.</li>'.
       '<li>Voit lisätä listalle tilauksia ja lähettää uutiskirjeitä.</li>'.
       '<li>Voit syöttää tässä listan perustiedot kuten <i><u>Lähettäjätiedot</u></i>.</li>'.
       '<li>Ja voit määritellä käyttäjät tai käyttäjäryhmät, jotka voivat tilata listan.</li>'.
       '<li><i>Plus</i> ja <i>Pro</i> versioissa voit määritellä myös ketkä voivat lisätä ja muokata listan postituksia.</li>'.
       '<li><i>Pro</i> versiossa voit lisäksi määritellä <i><u>Peruutus</u></i> ja <i><u>Tilaus ilmoituksia</u></i> listan hallinnoijalle.</li></ul>');
define('_JNEWS_SUBSCRIBERS_GUIDE', '<strong>Tilaajien hallinta:</strong> </br>' .
	    '<ul><li><strong>Luotaessa: </strong></li><br>'.
        '<ul><li>Voit lisätä tilaajia tässä.</li>'.
        '<li>Määritä <i><u>Tilaajatiedot</i></u></li>'.
        '<li>Ja valitse mitä <i><u>listoja</u></i> haluat tilaajan tilaavan, jos olet jo listan luonut.</li>'.
        '<li>Voit vahvistaa lisäämäsi tilaajan uutiskirjeidesi vastaanottajaksi.</li>'.
        '<li>Voit myös määrittää tilaajan vastaanottaman viestisi HTML-muodossa.</li>'.
        '<li><i><u>IP</u></i> kenttä lisätään automaattisesti tilaajan IP osoitteen saamiseksi sivustolta. </li></ul></ul>'.
        '<ul><li><strong>Vie painike</strong></li>' .
        '<ul><li>Voit <i><u>Viedä</u></i> tilaaja tiedot kaikilta tai vain valituilta listoilta.</li></ul></ul>' .
        '<ul><li><strong>Tuo painike</strong></li>' .
        '<ul><li>Voit <i><u>Tuoda</u></i> tilaajia kaikille tai vain valituille listoille.</li></ul></ul>');
define('_JNEWS_NEWSLETTER_GUIDE', '<strong>Uutiskirjeiden hallinta:</strong> <br/>'.
        '<ul><li>Jos olet luonut listoja, voit luoda <i><u>uutiskirjeitä</u></i>.</li>'.
        '<li><i><u>Plus</u></i> versiossa voit luoda <i><u>ajastettuja uutiskirjeitä</u></i> ja myös <i><u>automaattiviestejä</u></i>, jotka postitetaan automaattisesti.</li>'.
        '<li><i><u>PRO</u></i> lisää <i><u>automaattiset uutiskirjeet</u></i>, jotka lähettävät <i>viimeksi luodut</i>, <i>muokatut</i> tai <i>julkaistut artikkelit</i> sivustoltasi.</li></ul>'.
        '<ul><li><strong>Luotaessa:</strong></li>'.
		'<ul><li><i><u>Uutiskirjeen sisältöalue</u></i> -> mihin laitat kaiken uutiskirjeesi sisällön.</li>'.
		'<li><i><u>Lista välilehti</u></i> -> missä lähetät uutiskirjeesi yhdelle tai useammalle listalle.</li>'.
		'<li><i><u>Lähettäjä välilehti</u></i> -> uutiskirjeesi lähettäjätieto asetukset.</li>'.
		'<li><i><u>Sisältö välilehti</u></i> -> missä voit lisätä sivustosi artikkeleita uutiskirjeeseen.</li>'.
        '<li><i><u>Liitetiedostot</u></i> -> tiedot uutiskirjeen liitetiedostoista.</li></ul></ul>' .
        '<ul><li><strong>Lopeta julkaisu painike</strong></li>' .
        '<ul><li>Voit lopettaa uutiskirjeesi julkaisun.</li></ul></ul>' .
        '<ul><li><strong>Esikatselu painike</strong></li>' .
        '<ul><li>Esikatsele uutiskirjeesi sisältö ja muotoilu.</li></ul></ul>' .
        '<ul><li><strong>Lähetä painike</strong></li>' .
        '<ul><li>Voit lähettää uutiskirjeesi sen tilaajille painiketta painamalla.</li></ul></ul>' .
        '<ul><li><i>Huomaa: Voit muokata vain julkaisematonta uutiskirjettä.</i></li></ul>');
define('_JNEWS_AUTORESPONDER_GUIDE', '<strong>Automaattiviestien hallinta:</strong><br/>'.
		  '<ul><li>Jos olet luonut <i><u>Automaattiviesti</u></i> tyyppisen listan voit luoda <i><u>automaattiviestin</u></i>.</li>'.
		  '<li>Luomisen aikana voit määritellä automaattivastaajalle viiveen edellisen automaattiviestin käsittelystä.</li>' .
		  '<li>Luominen tapahtuu samankaltaisesti kuin uutiskirjeillä.</li></ul>');
define('_JNEWS_SMARTNEWSLETTER_GUIDE', '<strong>Automaattisten uutiskirjeiden hallinta:</strong> <br/>' .
		 '<ul><li>Jos olet luonut <i>listan</i> ja <i>artikkeleita</i> sivustollesi voit luoda <i><u>automaattisen uutiskirjeen</u></i>.</li>'.
         '<li>Luominen tapahtuu samankaltaisesti kuin uutiskirjeillä.</li>' .
         '<li><i><u>Automaattiset uutiskirjeet</u></i> välilehdellä voit luomisen aikana määritellä asetukset automaattisen uutiskirjeen käsittelylle.</li>');
define('_JNEWS_TEMPLATES_GUIDE', '<strong>Viestipohjien hallinta:</strong><br><ul><li>Viestipohjat voivat olla hyvin hyödyllisiä uutiskirjeitä luodessa.</li>' .
		'<li>Tässä näkymässä voit luoda uutiskirjeillesi viestipohjia</li>' .
		'<li><i><u>Oletusviestipohjaa</u></i> käytetään luoduille uutiskirjeille.</li>' .
		'<li>Viestipohjan <i><u>CSS</u></i> määritteet ovat voimassa luodulla uutiskirjeellä.</li>' .
		'<li>Voit myös valita <i><u>taustavärin</u></i>, josta tulee uutiskirjeen tausta.</li>' .
		'<li>Huomio: Uutiskirjeen viestipohja ei päivity uutiskirjeen luomisen jälkeen</li></ul>' .
		'<ul><strong>Oletus painike</strong>'.
		'<ul><li>Valitaksesi viestipohjan käyttöön oletuksena uutiskirjeissäsi sinun tarvitsee vain painaa tätä painiketta.</li></ul></ul>');
define('_JNEWS_QUEUE_GUIDE','<strong>Jonon hallinta:</strong><br/> ' .
		'<ul><li>Tässä näkymässä voit nähdä <i><u>jonossa olevat postitukset</u></i>.' .
		'<li>Tässä ovat <i><u>ajastetut uutiskirjeet</i></u>, <i><u>automaattiviestit</i></u> ja <i><u>automaattiset uutiskirjeet</i></u></li>'.
        '<li><i><u>Käsittele jono</i></u> painikkeella voit käsitellä jonossa olevat postitukset ilman ajastusta.</li>' .
        '<li><i><u>Nollaa automaattisen uutiskirjeen päiväys</i></u> painikkeella voit nollata automaattisen uutiskirjeesi <i>seuraavan lähetysajan</i> tai <i>luomispäiväyksen</i>.</li>' .
        '<li><i><u>Tyhjennä jono</i></u> painikkeella voit tyhjentää koko jonon.</li></ul>');
define('_JNEWS_ABOUT_GUIDE','jNews');
define('_JNEWS_IMPORT_GUIDE','<strong>Tuonnin hallinta:</strong><br/>'.
         '<ul><li>Täällä voit tuoda tilaajia kaikille tai valituille listoille.</li>'.
         '<li>Valitsemalla alla olevan linkin voit suorittaa tilaajien tuomisen.</li>'.
         '<li><i>Huomaa: Sinun täytyy luoda listat ennen kuin voit tuoda niille tilaajia.</i></li></ul>');
define('_JNEWS_CONFIGURATION_GUIDE','<strong>Asetukset:</strong><br/>'.
        '<ul>Kaikki jNewsin asetukset tehdään tässä osassa.<br/><br/>'.
	    '<strong>Sähköposti välilehti:</strong>'.
	    '<ul><li>Voit asettaa palvelimellesi sopivat sähköposti ja postitus asetukset.</li></ul>'.
	    '<br/><strong>Tilaajat välilehti:</strong>'.
	    '<ul><li>Voit asettaa tilaus asetukset sivustosi julkisivu ja hallinnointi puolelle.</li></ul>'.
	    '<br/><strong>Ajastus välilehti:</strong>'.
	    '<ul><li>Voit asettaa ajastukseen liittyviä asetuksia, jotka vaikuttavat postituksien toimintaan.</li>
         <li>Oikeat asetukset riippuvat myös palvelimesi asetuksista ja rajoituksista.</li></ul>'.
	    '<br/><strong>Lokit ja tilastot välilehti:</strong>'.
	    '<ul><li>Voit asettaa lokeihin ja tilastointiin liittyviä asetuksia.</li></ul>'.
	    '<br/><strong>Arkisto välilehti:</strong>'.
	    '<ul><li>Käytetään lähinnä automaattisen arkistoinnin asetuksiin.</li></ul>'.
	    '<br/><strong>Muut asetukset välilehti:</strong>'.
	    '<ul><li>Kaikki muut asetukset ovat täällä.</li></ul>'.
	    '<br/><strong>Jono välilehti:</strong>'.
	    '<ul><li>Enimmäkseen käytetään Plus ja Pro versioissa olevaan jonon hallinta näkymään.</li></ul>'.
	    '<br/><strong>Lisenssi välilehti:</strong>'.
	    '<ul><li>Missä voit vahvistaa lisenssi seuraamalla annettuja ohjeita.</li></ul></ul>');
define('_JNEWS_EMPTY_Q','Tyhjennä jono');
define('_JNEWS_RESET_SN','Nollaa automaattisen uutiskirjeen päiväys');
define('_JNEWS_Q_M1','Jonossa ei ole sähköposteja.');
define('_JNEWS_INSTALL_CLICKSTART', 'Paina tästä aloittaaksesi!');
define('_JNEWS_INSTALL_DESC', 'Kiitos, että valitsit jNewsin.<br><br>
jNews on postituslista, uutiskirje ja automaattiviesti komponentti tehokkaaseen viestintään käyttäjiesi ja asiakkaidesi kanssa.');
define('_JNEWS_INSTALL_ERRORN' , 'Jos asennuksessa tapahtuu virhe, löydät');
define('_JNEWS_INSTALL_DOC' , 'dokumentaation täältä.');
define('_JNEWS_INSTALL_SUCC' , 'Onnistuneesti asennettu.');
define('_JNEWS_INSTALL_STATUS_CONFIG' , 'jNews asetukset:');
define('_JNEWS_INSTALL_STATUS_PLUGIN' , 'jNews liitännäinen(Bot):');
define('_JNEWS_INSTALL_STATUS_MOD' , 'jNews moduuli:');
define('_JNEWS_INSTALL_UPDATES' , 'jNews päivitykset');
define('_JNEWS_STATS_GUIDE', '<strong>Postitusraportit: </strong><br/>'.
		'<ul> <li>Luo listan postituksista päivämäärävälin perusteella. </li> ' .
		'<li>Sisältää seuraavat tiedot: <ul><li> HTML ja teksti muodoissa lähetettyjen viestien määrä,</li>' .
			'<li> kuinka moni HTML muotoisista viesteistä luettiin, </li>' .
			'<li>kuinka mooni viestinlähetyksistä epäonnistui, </li><li>on jonossa odottamassa käsittelyä, ' .
			'</li><li>palautettiin löytämättä vastaanottajaa,</li> <li>ja postituksessa lähetettyjen viestien kokonaismäärä.</li> </ul></li></ul>'.
		'<strong>Listaraportit:</strong> <br/>'.
		'<ul> <li>Luo listauksen listanimikkeistä perustuen tilauksiin määritellyllä päivämäärävälillä. </li>' .
			'<li>Sisältää seuraavat tiedot:  <ul><li>tehtyjen uusien tilauksien määrä</li> ' .
			'<li>peruutettujen tilausten määrä, </li>' .
			'<li>jokaisen listatyypin vahvistettujen ja vahvistamattomien tilaajien määrä. </li>  </ul></li></ul>'.
		'<strong>Tilaajaraportti:</strong> <br/>'.
		'<ul> <li>Luo raportin tilaajamäärästä päivämäärävälillä.</li> </ul>'.
		'<strong>Kuinka viedä raportti CSV tiedostoon:</strong>'.
		'<ul> <li>Kaikille raporttityypeille löytyy vie kuvake välilehden oikeasta ylänurkasta.</li>'.
		'<li>Paina vie kuvaketta viedäksesi tiedot.</li></ul>'
		);
define('_JNEWS_TEMPLATE_ALIAS' , 'Alias');
define('_JNEWS_SEARCH' , 'Hae:');
define('_JNEWS_SEARCH_GO' , 'Etsi');
define('_JNEWS_SEARCH_RESET' , 'Tyhjennä');
define('_JNEWS_SENDER_LIST_INFO', 'Valitse lähettäjä listasta' );
define('_JNEWS_FILTER_MAILING' , 'Valitse postitus ');
define('_JNEWS_MESSAGE_QUEUE' , 'Kaikki jonossa olevat postitukset ');
define('_JNEWS_FILTER_LIST' , 'Valitse tyyppi');
define('_JNEWS_MAILING_TAG' , 'Tunniste');
define('_JNEWS_MAILING_TAGINSERT' , 'Lisää');
define('_JNEWS_MAILING_TAG_INSTRUCT' , '<p>Valitse tunniste, jonka haluat lisätä ja paina &quot;Lisää&quot;.<br> Huomaa: <i>Lisäys tehdään siihen kohtaan missä editorin kursori on kun painat painiketta.</i></p>');
define('_JNEWS_TAG_SUBSCRIPTION', '{tag:subscriptions}');
define('_JNEWS_TAG_UNSUBSCRIBE', '{tag:unsubscribe}');
define('_JNEWS_TAG_SUBSCRIPTION_DESC', 'Tämä korvataan käännöksessä määritellyllä "_JNEWS_CHANGE_EMAIL_SUBSCRIPTION" vakiolla.');
define('_JNEWS_TAG_UNSUBSCRIBE_DESC', 'Tämä korvataan käännöksessä määritellyllä "_JNEWS_UNSUBSCRIBE" vakiolla.');
define('_JNEWS_TAG_VIEWONLINETXT', '{viewonline:text here}');
define('_JNEWS_TAG_VIEWONLINE', 'Lue verkossa');
define('_JNEWS_TAG_VIEWONLINE_DESC', 'Tämä korvataan joko oletustekstillä tai kirjoittamallasi tekstillä linkin kera.');

//since 1.1.0
define('_JNEWS_SHOW_CRON','Käytä joobi <pre>cron</pre> palvelua');

define('_JNEWS_SHOW_CRON_TIPS','Sallii ajastuksen määrittelyn jNewsiä asennettaessa.<br>Tämä <pre>cron</pre> palvelin sijaitsee osoitteessa http://www.joobi.co ja toimii varttitunnin välein');
define('_JNEWS_CRON_FSETTINGS' , 'Ajastusasetukset');

define('_JNEWS_INSTALL_ACAUPDATEMSG' , 'Haluatko tuoda tietokantasi Acajoomista jNewsiin?');
define('_JNEWS_INSTALL_ACAUPDATEBTN' , 'Tuo Acajoom tiedot');
define('_JNEWS_INSTALL_ACAUPDATENOTE' , 'Huomaa : Tämä siirtää tiedot Acajoom tauluissa jNews tauluihin.');

define('_JNEWS_MAILING_UPDATED' , 'Postitukset tuotu onnistuneesti.');
define('_JNEWS_DETAIL_UPDATED' , 'Yksityiskohtaiset tilastot tuotu onnistuneesti');
define('_JNEWS_GLOBAL_UPDATED' , 'Yleiset tilastot tuotu onnistuneesti');
define('_JNEWS_SUBSCRIBER_UPDATED' , 'Tilaajat tuotu onnistuneesti');
define('_JNEWS_QUEUE_UPDATED' , 'Jonot tuotu onnistuneesti');
define('_JNEWS_LISTSUBSCRIBER_UPDATED' , 'Listojen tilaukset tuotu onnistuneesti');

define('_JNEWS_LIST_UPDATED_FAILED' , 'Listoja ei tuotu');
define('_JNEWS_MAILING_UPDATED_FAILED' , 'Postituksia ei tuotu');
define('_JNEWS_DETAIL_UPDATED_FAILED' , 'Yksityiskohtaisia tilastoja ei tuotu');
define('_JNEWS_GLOBAL_UPDATED_FAILED' , 'Yleisiä tilastoja ei tuotu');
define('_JNEWS_SUBSCRIBER_UPDATED_FAILED' , 'Tilaajia ei tuotu');
define('_JNEWS_QUEUE_UPDATED_FAILED' , 'Tapahtumia ei tuotu jonoon');
define('_JNEWS_LISTSUBSCRIBER_UPDATED_FAILED' , 'Tilauksia ei tuotu listoihin');

define('_JNEWS_LEGEND' , 'Selite');
define('_JNEWS_NOTVISIBLE', 'Ei näy');
define('_JNEWS_SCHEDULED', 'Ajoitettu');
define('_JNEWS_SUBSCRIBERS_UNREGISTERED', 'Rekisteröimätön');
define('_JNEWS_TEMPLATE_UPLOAD_SUCCESS', 'Viestipohja ladattu onnistuneesti' );
define('_JNEWS_TEMPLATE_UPLOAD_FAIL', 'Viestipohjan lataaminen epäonnistui. Varmista, että zip-paketti sisältää index.html tiedoston.' );
define('_JNEWS_UPLOAD_ZIP_INVALID', 'Viestipohjia voidaan ladata vai zip pakattuina' );
define('_JNEWS_CUSTOMCSS', 'Syötä oma CSS koodisi tähän');
define('_JNEWS_TEMPLATE_ALERT', 'Viestipohjalla pitää olla nimi ja alias.');

//since 2.2.0
define('_JNEWS_UNSUB_NOTIFYMSG','Lähetä ilmoitus peruutuksista');
define('_JNEWS_SEND_UNSUBNOTIFY_TIPS','Määritä haluatko lähettää listan hallinnoijalle ilmoituksen tilauksen peruutuksista.');
define('_JNEWS_UNSUB_ADMINMESSAGE', 'Peruutusilmoitus viesti');
define('_JNEWS_INFO_AMIN_UNSUB_NOTIFY', 'Tämä viesti lähetetään listan hallinnoijalle, kun listan tilaus peruutetaan.');

//templates
define('_JNEWS_CSS_TOGGLESTYLE','Vaihda tyylien näkymää');
define('_JNEWS_EXTERNALCSS_LINK','Lisää ulkoinen CSS linkki');
define('_JNEWS_EXTERNALCSS_PROCESS','Käsittele');
define('_JNEWS_TEMP_COMBINECLASS','Yhdistetty luokkavalitsin');
define('_JNEWS_COMBINECLASS_SUPPORT','ei ole tuettu');
define('_JNEWS_TEMP_COMBINECLASS_IN','luokassa');
define('_JNEWS_TEMP_HTMLTAG','Löydetty html tunniste ');
define('_JNEWS_TEMP_CONTDEV','Voit ottaa yhteyttä kehittäjiin sen lisäämiseksi');
define('_JNEWS_TEMP_COMBCLASSPSEUDO','Yhdistetty pseudo-valitsin');
define('_JNEWS_TEMP_COMBCLASSEID','tai elementti id');

//Menus
define('_JNEWS_MENU_LIVE_SUPPORT','Live Tuki');

//Tags
define ('_JNEWS_SMART_TAG', 'Tämä korvataan viimeisimmällä artikkelilla, kun luot automaattisen uutiskirjeen.');

//Toobar Menus
define('_JNEWS_DONEW_SUBSCRIBERB', 'Nimi ja sähköpostiosoite ovat pakollisia.');

//since 3.1.0
define('_JNEWS_IP', 'IP');
define('_JNEWS_MENU_STATS_REPORTS', 'Tilastot');
define('_JNEWS_LIST_T_ADMIN_NOTIFICATION' , 'Ilmoitus');
define('_JNEWS_MENU_REFRESH_STATS' , 'Virkistä');
define('_JNEWS_MENU_GENERATE_STATS' , 'Kerää');

//since 3.2.0
define('_JNEWS_LIST_T_LIST' , 'Lista');
define('_JNEWS_UNSUBSCRIBE_ADMIN_NOTIFICATION', '<p>Hyvä [LISTOWNERNAME],<br /> <br /></p> <p style="padding-left: 30px;">Tämä on automaattinen ilmoitus sivustolta [SITE] koskien käyttäjän tekemää uutiskirjeesi tilauksen peruutusta.</p> <p style="padding-left: 60px;"><strong>Yksityiskohdat</strong></p> <p style="padding-left: 60px;">Tilauksenperuutuksen päiväys: <strong>{tag:date}</strong><br />Tilaajan nimi: <strong>[SUBSCRIBERNAME]</strong><br />Tilaajan sähköpostiosoite: <strong>[SUBSCRIBEREMAIL]</strong></p> <p style="padding-left: 60px;">Peruttu lista: <strong>[LISTID] - [LISTNAME]</strong></p> <p style="padding-left: 30px;">Tämä on ohjelmiston automaattisesti luoma ilmoitus. Älä lähetä vastausta.</p> <p> </p> <p>Kiitos!</p>');

//Tagging
define('_JNEWS_TAG_MODNAME' , 'Moduulin nimi');
define('_JNEWS_TAG_MODTYPE' , 'Tyyppi');
define('_JNEWS_TAG_MODPOSITION' , 'Sijainti');
define('_JNEWS_TAG_ACL' , 'Käyttöoikeustaso');
define('_JNEWS_TAG_SPECIAL' , 'Special');
define('_JNEWS_TAG_PUBLIC' , 'Public');
define('_JNEWS_TAG_ARTICLESECTION' , 'Ryhmä');
define('_JNEWS_TAG_ARTICLECATEGORY' , 'Kategoria');
define('_JNEWS_TAGMENU_MODULE' , 'Joomla moduuli');
define('_JNEWS_TAGMENU_AUTOCONTENT' , 'Automaattisisältö');
define('_JNEWS_TAGMENU_SUBSCRIPTION' , 'Tilaus');
define('_JNEWS_TAGMENU_USERS' , 'Käyttäjät');
define('_JNEWS_TAGMENU_DATETIME' , 'Päiväys/Aika');
define('_JNEWS_TAGMENU_WEBSITE' , 'Sivuston linkit');
define('_JNEWS_TAGMENU_CONTENT' , 'Sisältö');
define('_JNEWS_TAGPICKLIST_ORDERING' , 'Järjestys');
define('_JNEWS_TAGPICKLIST_ORDERINGTIP' , 'Valitse miten haluat järjestää artikkelisi.');
define('_JNEWS_TAGPICKLIST_CREATED' , 'Luomispäivä (Uusin ensin)');
define('_JNEWS_TAGPICKLIST_TITLE' , 'Otsikko');
define('_JNEWS_TAGPICKLIST_Order' , 'Järjestä');

define('_JNEWS_SELECT_MAILING', 'Valitse muokattava viesti.');
define('_JNEWS_DELETE_MAILING', 'Valitse muokattava viesti.');
define('_JNEWS_COPY_MAILING', 'Valitse kopioitava viesti');
define('_JNEWS_TAG_CONFIRM_DESC', 'Tämä korvataan käännöksessä määritellyllä vakiolla "_JNEWS_CONFIRM_SUBSCRIPTION" ja vahvistuslinkillä.');
define('_JNEWS_TEMPLATE_SAVED', 'Viestipohja on tallennettu.');
define('_JNEWS_SUBSCRIPTION_NOT_AVAIL_LIST', 'Yrität tilata listaa, jota ei ole olemassa. Eli linkin listId ei vastaa olemassaolevaa listaa.');

//since 4.0.0
define('_JNEWS_MENU_TAG' , 'Tunnisteet');
define('_JNEWS_TAG_EMAIL_DESC', 'Tämä korvataan tilaajan sähköpostiosoitteella.');
define('_JNEWS_TAG_FWDTOFRIEND', 'Lähetä edelleen ystävälle.');
define('_JNEWS_TAGTITLE_SITE', 'Sivustolinkit');
define('_JNEWS_TAGTITLE_CONTENT', 'Joomla sisältö');
define('_JNEWS_TAGTITLE_AUTOCONTENT', 'Automaattinen Joomla sisältö');
define('_JNEWS_TAGTITLE_MOD', 'Joomla Moduulit');
define('_JNEWS_TAGCAPTION_ALL', 'KAIKKI');
define('_JNEWS_SUCCESS_COPIED' , ' kopioitu.');
define('_JNEWS_TAGCAPTION_ALLSECCAT' , 'KAIKKI RYHMÄT JA KATEGORIAT');
define('_JNEWS_FWD_MYDETAILS' , 'Minun tietoni');
define('_JNEWS_FWD_WANTTO' , 'Haluan lähettää tämän viestin edelleen');
define('_JNEWS_FWD_MESSAGE' , 'Anna viesti');
define('_JNEWS_FWD_MESSAGEHID' , 'Tämän viestin lähetti edelleen sinulle');
define('_JNEWS_FWD_SENDEMAIL' , 'Lähetä sähköposti');
define('_JNEWS_FWD_ADDFIELD' , 'Lisää uusi ystävä.');

define('_JNEWS_NEWSLETTER_ARCHIVE', 'Uutiskirje arkisto');
define('_JNEWS_FWDTOFRIEND_ALRT_UNAME', 'Syötä nimesi.');
define('_JNEWS_FWDTOFRIEND_ALRT_UEMAIL', 'Syötä kelvollinen sähköpostiosoite.');
define('_JNEWS_FWDTOFRIEND_ALRT_FNAME', 'Syötä ystäväsi nimi.');
define('_JNEWS_FWDTOFRIEND_ALRT_FEMAIL', 'Syötä kelvollinen sähköpostiosoite ystävällesi.');
define('_JNEWS_FWDTOFRIEND_SUCCESS', 'Viesti onnistuneesti lähetetty edelleen ');
define('_JNEWS_FWDTOFRIEND_FAILED', 'Viestin edelleen lähettäminen epäonnistui ');
define('_JNEWS_TAGSITE_TAGTIP', 'Paina lisää lisätäksesi tunniste uutiskirjeeseen.');
define('_JNEWS_TAGSITE_CAPTION', 'Tunnisteen nimiö');
define('_JNEWS_TAGSITE_CAPTIONTIP', 'Muuta tunnisteen nimiö tai teksti tässä.');
define('_JNEWS_TAGSMART_ALERT_SELECT', 'Valitse sisältö, joka lisätään automaattisesti uutiskirjeeseesi.');
define('_JNEWS_ARLIST', 'Automaattiviestit');
define('_JNEWS_NEW_SUBSCRIBER', 'Tilaaja on tallennettu.');
define('_JNEWS_EDIT_AR', 'Muokkaa automaattiviestiä');
define('_JNEWS_ARINFO_LIST_DELAY', 'Määritä päivissä tämän automaattiviestin viive tilauspäivästä.');
define('_JNEWS_SUBS_LIST', 'Tämä automaattiviesti liitetään seuraaviin listoihin:');
define('_JNEWS_SUBS_LIST2', 'Liitä listat');
define('_JNEWS_SUBS_LIST_TIPS', 'Liitä tämä automaattiviesti seuraaviin listoihin. Jos käyttäjä tekee tilauksen näille listoille, hänet lisätään myös automaattiviestin tilaajaksi. ');
define('_JNEWS_PRIORD_LISTTYPE','Ensisijainen listatyyppi');
define('_JNEWS_PRIORD_LISTTYPE_TIPS', 'Aseta joko listan tai automaattiviestin tilaukset ensisijaiseksi hallitessa listoihin liitettyjen automaattiviestien tilauksia.');
define('_JNEWS_PRIORD_SUBS','Ensisijainen tilaustapahtuma');
define('_JNEWS_PRIORD_SUBS_TIPS', 'Aseta ensisijaiseksi tilaukset tai tilauksenperuutukset tai sivuuta muutokset.<br/><b>Sivuuta muutokset</b>: Automaattiviestin tilauksia ei muuteta vaikka liitetyn listan tilauksia muutetaan.<br/><b>Subscription</b>: We force subscribe users to the auto-responders that is being attached to the subscribed list.<br/><b>Unsubscription</b>: We unsubscribe the user to the attached auto-responder even if the user subscribed to the list where the autoresponder is attached.');
define('_JNEWS_REMAIN_SUBS','Sivuuta muutokset');
define('_JNEWS_UNSUBS','Unsubscription');
define('_JNEWS_SUBSCRIPTION_AR','Automaattiviestin tilaus');
define('_JNEWS_SUBSCRIPTION_LIST','Listan tilaus');
define('_JNEWS_YOUR_CRON', '<pre>cron</pre> palvelun url');
define('_JNEWS_LAUNCH_CRON', 'Käynnistä <pre>cron</pre>');

define('_JNEWS_SAFEUNSUBSCRIBE', 'Turvallinen peruutus');
define('_JNEWS_INVIUNPUB', 'Tilaamasi listat ovat joko näkymättömiä tai julkaisemattomia.<br> Vain sivuston hallinnoija voi poistaa tilaukset juuri nyt.');
define('_JNEWS_UNSUBSTOLISTS_MESSAGE','Oletko varma, että haluat peruuttaa tilauksesi?');
define('_JNEWS_SELECT_ALLLISTS','Paina valitaksesi kaikki listat');
define('_JNEWS_SELECT_ALLLAUTOR','Paina valitaksesi kaikki automaattiviestit');
define('_JNEWS_UNSUBSLINK_TIP','Valitse &quot;Kyllä&quot;, jos haluat näyttää viesteissä peruutus linkin');
define('_JNEWS_CHANGESUBSLINK_TIP','Valitse &quot;Kyllä&quot;, jos haluat näyttää viesteissä tilauksen hallinta linkin');
define('JNEWS_AUTOMATIC_CRON', 'Oletus <pre>cron</pre> palvelu otetaan käyttön jNewsiä asennettaessa.<br/>Tämä palvelu toimii www.joobi.co palvelimella ja aktivoituu 15 minuutin välein.');
define('_JNEWS_IMPORTSUB_TIPS','Tuo tilaajia. Tiedoston tietojen täytyy olla seuraavaa muotoa: <b>nimi, osoite, lähetä HTML(1/0), <span style="color: rgb(255, 0, 0);">vahvistettu(1/0)</span></b>');
define('_JNEWS_NOSMARTTAG', 'Automaatti uutiskirje ei sisällä [SMARTNEWSLETTER] tunnistetta. Lisää tunniste sisältöön.');
define('_JNEWS_DELETEBTN','Poista jono');
define('_JNEWS_MENU_STOPQ','Pysäytä jono');
define('_JNEWS_MENU_STARTQ','Käynnistä jono');
define('_JNEWS_MAILING_QUEUE_DELETED', 'Lähetys on poistettu jonosta.');
define('_JNEWS_QUEUE_SETTING','Jono asetus');
define('_JNEWS_QUEUESTATS_ON','Päällä');
define('_JNEWS_QUEUESTATS_OF','Pois');
define('_JNEWS_QUEUESTATS_TIPS','Haluatko jonon käsittelyn olevan päällä vai pois päältä. Eli käynnissä vai seisauksissa.');
define('_JNEWS_MENU_STARTQ_MSG','Jonon käsittely on aloitettu.');
define('_JNEWS_MENU_STOPQ_MSG','Jonon käsittely on pysäytetty.');
define('_JNEWS_QUEUESTATS_NOTIFY','Jono on pysäytetty, jos haluat jatkaa sen käsittelyä, sinun täytyy ');

//since
define('_JNEWS_NEW_URL_PASS_TIPS','Syötä salasana voidaksesi lisätä tilauksia linkin kautta. Liitä &quot;catcher variable passwordA&quot; linkkiin.');
define('_JNEWS_CRON_PASSWORD', '<pre>cron</pre> salasana');
define('_JNEWS_USE_CRON_PASS', 'Käytä <pre>cron</pre> salasanaa');

//since 4.2.0
define('_JNEWS_QUEUE_STATUS','Jonon tila');
define('_JNEWS_SMTPPORT','SMTP portti');
define('_JNEWS_SMARTQUEUE','Smart Queue');
define('_JNEWS_SMARTQ_ON','Päällä');
define('_JNEWS_SMARTQ_OF','Pois');
define('_JNEWS_SMARTQ_TIPS','&quot;Smart Queue&quot; jonon käsittely kiertää palvelimen rajoituksia.');
define('_JNEWS_SUB_INFO_FIELDS', 'Näytä enemmän tilaajan tietoja');
define('_JNEWS_SUB_INFO_FIELDS_TIPS', 'Näytä IP , rekisteröitymispäivä, käyttäjä ID ja sulkulista kentät julkisivun tilaajalomakkeella');
define('_JNEWS_JSUB', 'Hallinta julkisivulta');
define('_JNEWS_JSUB_TIPS', 'Valitse rajoitetaanko julkisivun hallintaominaisuudet listan omistajaan ja pääkäyttäjiin vai avataanko ne listan oikeuksien perusteella');
define('_JNEWS_BYOWNER', 'Omistaja');
define('_JNEWS_LIST_ACESS', 'Listan oikeudet');
define('_JNEWS_CAPTCHA_WARN',   'CAPTCHA kuvaa ei voitu luoda, joko php GD kirjastoa ei ole asennettuna tai GD on ladattu ilman FreeType tukea <br>Tarkista phpinfo() tai kytke CAPTCHAn käyttö pois päältä ');
define('_JNEWS_CAPTCHA_LINK','jNews asetusten tilaajat välilehdessä');
define('_JNEWS_MORE_TEMPLATES','Lisää viestipohjia');

//Since 5.0.0
define('_JNEWS_TAGMENU_K2CONTENT', 'K2 sisällöt');
define('_JNEWS_TAGMENU_VMPRODUCTS', 'Virtuemart tuotteet');
define('_JNEWS_TEMPLATE_AVLB','Saatavuus');
define('_JNEWS_TEMPLATE_INS','Asennettu');
define('_JNEWS_TEMPLATE_DWN','Lataa');
define('_JNEWS_TEMPLATE_FDWN','Ilmainen lataus');
define('_JNEWS_TEMPLATE_IMG','Kuva');
define('_JNEWS_SUBS_INFO','Et ole merkitty tilaajaksi listalle, joten tilauksen peruuttaminen ei onnistu.');
define ('_JNEWS_UNSUBS_STATUS','Tilauksesi listaan on jo peruttu.');
define('_JNEWS_CAPTCHAW', 'CAPTCHA leveys');
define('_JNEWS_CAPTCHAW_TIPS', 'Määritä CAPTCHAn leveys tilaaja moduulissa');
define('_JNEWS_CAPTCHAH', 'CAPTCHA korkeus');
define('_JNEWS_CAPTCHAH_TIPS', 'Määritä CAPTCHAn korkeus tilaaja moduulissa');
define('_JNEWS_CAPTCHA_MSG', 'Syötä oikea CAPTCHA koodi.');
define('_JNEWS_MCRYPT_MESSAGE', 'CAPTCHA on käytössä, mutta mcrypt kirjasto ei ole.<br>Ota mcrypt käyttöön muokkaamalla php.ini tiedostoa.<br>Voit myös poistaa CAPTCHAn käytön ');

//Since 5.1.0
define('_JNEWS_FORCED_HTML', 'Lähetä vain HTML viestejä?');
define('_JNEWS_FORCED_HTML_TIP','&quot;Kyllä&quot;, jos haluat pakottaa viestien lähettämisen HTML muodossa.');

//Since social edition
define('_JNEWS_LISTS_CONFIG','Listat');
define('_JNEWS_LISTS_SETTINGS','Listojen asetukset');
define('_JNEWS_USE_MASTERLISTS','Käytä päälistoja?');
define('_JNEWS_USE_MASTERLISTS_TIPS','Haluatko käyttää päälistoja [Kaikki sivuston jäsenet, Kaikki rekisteröityneet tilaajat, Kaikki julkisivun tilaajat] tilaajista');
define('_JNEWS_LIST_CREATORFE','Julkisivun listan luonti');
define('_JNEWS_LIST_CREATORFE_TIPS','Määritä käyttöoikeustaso, joka tarvitaan listojen luomiseen julkisivun kautta');
define('_JNEWS_LIST_CREATORFE_WARN','(Sinun täytyy määritellä käyttöoikeus, joka vaaditaan listojen luomiseen julkisivun kautta.)');

define('_JNEWS_BLOG_RENDERING', 'Blogin muotoilu');
define('_JNEWS_BLOG_TIPS', 'Koko blogi: tämä lisää koko blogin uutiskirjeeseen<br>Vain Intro: tämä lisää vain määritetyn määrän merkkejä blogista ja &quot;Lue Lisää&quot; linkin blogiin sivustolla');
define('_JNEWS_TAGMENU_BLOGS', 'LyftenBloggie');
define('_JNEWS_TAGMENU_DEALS', 'Tarjous');
define('_JNEWS_DEALS_INTRO', 'Esittely');
define('_JNEWS_DEALS_FULL', 'Täysi kuvaus');
define('_JNEWS_DEAL_NAME', 'Tarjouksen nimi/<br> Lyhyt kuvaus');
define('_JNEWS_DEAL_INDUSTRY', 'Toimiala/<br> Maa');
define('_JNEWS_DEAL_TARGET', 'Kohteen Määrä/<br> Varasto');
define('_JNEWS_DEAL_TYPE_TIPS', 'Täysi kuvaus: kokous tarjous sisällytetään uutiskirjeeseen.<br />' .
		'Esittely: vain tarjouksen esittely sisällytetään uutiskirjeeseen.<br/>');
define('_JNEWS_CONTENT_TIP', 'Uutiskirjeeseen lisättävän sisällön ID');
define('_JNEWS_CONTENT_ID', 'Sisällön ID');
define('_JNEWS_BLOG_TIP', 'Uutiskirjeeseen lisättävän blogin ID');
define('_JNEWS_BLOG_ID', 'Blogin ID');
define('_JNEWS_TAGMENU_JOMSOCIAL','JomSocial');
define('_JNEWS_TAGCAPTION_ALLCAT','Kaikki kategoriat'); //_JNEWS_TAG_ARTICLECATEGORY
define('_JNEWS_PLUG_INSTALLED','Liitännäisen %s asennus onnistui');
define('_JNEWS_MODULE_INSTALLED','Moduulin %s asennus onnistui');
define('_JNEWS_EMAIL_LISTS', 'Listat');
define('_JNEWS_LEADS_REP', '&quot;Leads&quot; raportit');
define('_JNEWS_SUBSCRIBERS', 'Tilaajat');
define('_JNEWS_ALLOW_SN', 'Salli automaattiset uutiskirjeet');
define('_JNEWS_ALLOW_SN_TIP', 'Salli automaattisten uutiskirjeiden luominen julkisivulta.');
define('_JNEWS_UNSUBSCRIBE_SUBJECT_NOT', 'Peruutusilmoitus');
define('_JNEWS_RED_SUBSCRIPTION', 'Uudelleenohjaus tilauksen jälkeen');
define('_JNEWS_RED_SUBS_TIP', 'Uudelleenohjaus sivu moduulista tilaamisen jälkeen.');
define('_JNEWS_PLEASE_WAIT', 'Odota...');
define('_JNEWS_MOD_MESSAGE', 'Tilausviestin ponnahdusikkuna');
define('_JNEWS_MOD_MESSAGE_TIP', 'Jos valitse &quot;Ei&quot; viesti näkyy moduulissa.');

//since 6.1.0
define('_JNEWS_CREATE_NEWSUBS_TIPS', 'Määritä julkisivun tilaajienhallinnan näkymän oletusrivimäärä.');
define('_JNEWS_CREATE_NEWSUBS','Lisää uusia tilaajia');
define('_JNEWS_ROWS', 'rivissä');
define('_JNEWS_USE_BACKENDVIEW', 'Käytä tilaajien lisäämisen oletusnäkymää ');
define('_JNEWS_USE_BACKENDVIEW_TIPS', 'Määritä haluatko käyttää julkisivulla tilaajien lisäämiseen käyttäen hallinnointipuolen oletusnäkymää tarkoitukseen');

define('_JNEWS_TERMS_CONDITIONS', 'Käyttöehdot');
define('_JNEWS_TERMS_WARN', 'Tarkista käyttöehdot. Lukeaksesi käyttöehdot valitse &quot;Tarkista käyttöehdot&quot;');
define('_JNEWS_TERMS_LINK','Käyttöehdot URL');
define('_JNEWS_TERMS_LINK_TIPS','Syötä käyttöehtolinkin URL.<br><strong>(esimerkiksi http://www.yoursite.com/index.php?option=com_content&view=article&id=[article_id]&Itemid=[Item_id]</strong>');
define('_JNEWS_SHOW_TERMS','Näytä käyttöehdot');
define('_JNEWS_SHOW_TERMS_TIPS','Lisää käyttöehdot kohta tilaajat moduuliin');
define('_JNEWS_CHECK_TERMS','Käyttöehdot valittuna');
define('_JNEWS_CHECK_TERMS_TIPS','Ovatko käyttöehdot valittuna oletuksena.');

//since 7.0.0
define('_JNEWS_CRON_SYSTEM', '<pre>cron</pre> palvelu');
define('_JNEWS_CRON_SYSTEM_TIPS', 'Määrittää jNewsin ajoitettujen tehtävien ajastamiseen käytetyn <pre>cron</pre> palvelun.<br><br> [0] <strong> Ei mitään </strong> - jos et halua lähettää viestejä automaattisesti.' .
		'<br><br>[1] <strong>jNews <pre>cron</pre> liitännäinen</strong> - jos haluat, että <pre>cron</pre> toimii itse sivustolta.<br><br>[2] <strong>Joobi <pre>cron</pre></strong> - jos haluat käyttää ilmaista <a href="http://www.joobi.co">Joobi</a> <pre>cron</pre> palvelua. ' .
		'<br><br>[3] <strong>Ulkoinen <pre>cron</pre></strong> - jos haluat käyttää palvelimeltasi omaa <pre>cron</pre> tehtävääsi.');
define('_JNEWS_NO_CRON', 'Ei mitään');
define('_JNEWS_CRON_PLUGIN', 'jNews <pre>cron</pre> liitännäinen');
define('_JNEWS_CRON_JOOBI','Joobi <pre>cron</pre>');
define('_JNEWS_CRON_EXTERNAL','Ulkoinen <pre>cron</pre>');
define('JNEWS_CAPTCHA_FTWARN','CAPTCHA kuvaa ei voi näyttää, koska GD kirjaston FreeType tuki ei ole käytössä. ' .
		'<br/>Ylläpito puolella Sivusto -> Järjestelmätiedot -> PHP-titoja -> gd alakohta sisältää tiedon FreeType tuen tilasta. ' .
		'<br/> Voit muuttaa asetusta palvelimesi php.ini tiedostosta.');

//since 7.1.0
define('_JNEWS_SUBSCRIPTION_SETTINGS', 'Tilaus asetukset');
define('_JNEWS_SUBNOTIFY_MSG', 'Tilausilmoitus viesti');
define('_JNEWS_SUBNOTIFY_MSG_TIPS','Tämä viesti lähetetään listan ylläpitäjälle tai luojalle, kun käyttäjä tilaa listan.');
define('_JNEWS_SUBSDEFAULT_NOTIFYMSG', '<p>Hyvä [LISTOWNERNAME],<br /> <br /></p>
<p style="padding-left: 30px;">Tämä on automaattinen viesti sivustolta [SITE], joka ilmoittaa että käyttäjä tilasi uutiskirjelistasi.</p>
<p style="padding-left: 60px;"><strong>Yksityiskohdat</strong></p>
<p style="padding-left: 60px;">Tilauksen päiväys: <strong>{tag:date}</strong><br />Tilaajan nimi: <strong>[SUBSCRIBERNAME]</strong><br />Tilaajan sähköposti: <strong>[SUBSCRIBEREMAIL]</strong></p>
<p style="padding-left: 60px;">Tilattu lista <strong>[LISTID] - [LISTNAME]</strong></p>
<p style="padding-left: 30px;">Tämä viesti on automaattisesti luotu ilmoitus. Älä lähetä vastausviestiä.</p>
<p> </p>
<p>Kiitos!</p>');
define('_JNEWS_SUBS_NOTIFYSUBJECT','jNews tilausilmoitus');
define('_JNEWS_UNSUBS_NOTIFYSUBJECT','jNews peruutusilmoitus');
define('_JNEWS_SENDTEST_CONFIGSUCC','Jos vastaanotat tämän sähköpostin, se tarkoittaa että voit lähettää sähköposteja sivustoltasi.');
define('_JNEWS_SENDTEST_CONFIGERROR','Tarkista sähköpostiasetuksesi. Niissä saattaa olla virheitä.');
define('_JNEWS_LIST_UNPUBMSG','Listasi on julkaisematon, voidaksesi käyttää luomaasi listaa sinun pitää ensin julkaista se.');
define('_JNEWS_LIST_INVIMSG','Listasi on näkymätön julkisivulla, jotta tilaajat voisivat nähdä sen sinun pitää ensin muuttaa se näkyväksi.');
define('_JNEWS_TEMPLATE_STYLE_TH5','Otsikko h5');
define('_JNEWS_TEMPLATE_STYLE_TH6','Otsikko h6');
define('_JNEWS_SENDTEST_TEMP','Testiviestin viestipohja');
define('_JNEWS_NOCRON_USED','<pre>cron</pre> palvelua jNewsille ei ole käytössä.');

//since 7.2.0
define('_JNEWS_LISTS_UNSUBMSG','Olet jo peruuttanut postituslistatilauksesi.');
define('_JNEWS_SEND_NEWSLETTER','Lähetä uutiskirje');
define('_JNEWS_MSG_SENT_SUCCESS', 'lähetys onnistui:');
define('_JNEWS_MSG_SENT_FAIL', 'lähetys epäonnistui:');
define('_JNEWS_QUEUE_STATUSSEND', 'Jonon tila');
define('_JNEWS_MENU_CONTINUE','Jatka');
define('_JNEWS_QUEUE_EMPTYINFO','Jono on tyhjä eikä postituksia ole ajastettuna.');
define('_JNEWS_QUEUE_READYTOSEND','Postituksia valmiina lähetettäväksi');
define('_JNEWS_QUEUE_SCHEDULED','Ajastetut postitukset');
define('_JNEWS_QUEUE_STILLONQUEUE','Postituksia jäljellä jonossa:');
define('_JNEWS_SENDBTN','Lähetä');
define('_JNEWS_TAGMENU_FLEXICONTENT','Flexisisältö');

//since 7.3.0
define('_JNEWS_SMTPSECURE', 'Turvattu SMTP');
define('_JNEWS_SMTPSECURE_TIPS', 'Jos käytät SMTP palvelinta, voit varmistaa käytetyn yhteyden käyttämällä turvallisempaa yhteysprotokollaa.');

//since 7.4.0
define('_JNEWS_NO_LISTS_AVAILABLE', 'Tämän tyyppisiä listoja ei ole käytettävissä.');
define('_JNEWS__LIST_HTML_EDITOR', 'Listan HTML editori ei ole käytössä. <br /> Jos haluat lisätä listalle kuvauksen aseta &quot;Käytä editoria listan kuvauksiin&quot; kohdassa Asetukset:Muut asetukset arvoon &quot;Kyllä&quot;.');
define('_JNEWS_TAGMODULE_REPLACE_MESSAGE', 'Jos moduulin tunnistettasi ei korvattu tai korvattiin tyhjällä merkkijonolla, tarkista että allow_url_fopen on päällä php.ini tiedostossa tai palvelin tukee cURL kirjastoa.<br />Jompikumpi näistä ominaisuuksista vaaditaan moduulin tunnisteen vaihtamiseen esikatselussa tai postituksessa hallintaliittymän kautta. Jos kumpaakaan ominaisuutta ei ole moduulin tunniste korvataan vain ajastetuissa lähetyksissä.');
define('_JNEWS_QUEUE_PROCESS_ERROR', 'Virhe tapahtui haettaessa jonosta käsiteltäviä tapahtumia; jonossa on liian monta käsiteltävää tapahtumaa.<br /> Vähennä yhdessä erässä lähetettävien viestien määrää jNewsin ajastusasetuksista.');
define('_JNEWS_TOO_MUCH_CRON_MAX_EMAILS', 'Suurin yhdessä erässä käsiteltävien viestien määrä on asetettu liian suureksi.<br /> Vähennä asetusta välttääksesi ongelman ladattaessa jonon käsiteltäviä tapahtumia. <br />Vähennä määrää erässä ja lyhennä erien väliä lähettääksesi yhtä paljon viestejä.');
define('_JNEWS_VIEW_BROWSER', 'Lue selaimella');
define('_JNEWS_THE_MAILING', 'Postitus ');
define('_JNEWS_SENT_ALL', ' onnistuneesti lähetetty tilaajille.');
define('_JNEWS_NO_MAILINGS_YET', 'Lähetettäviä postituksia ei ole juuri nyt.');
define('_JNEWS_CRON_TRIGGERRED', 'Viimeisen <pre>cron</pre> tapahtuman aika');
define('_JNEWS_CRON_TRIGGERRED_TIPS', 'Koska <pre>cron</pre> viimeksi toimi.');
define('_JNEWS_CRON_TRIGGERRED_ADD_INFO', 'Huomaa: Vaikka <pre>cron</pre> toimii, jonoa ja ajastettuja uutiskirjeitä ei silti välttämättä käsitellä.');
define('_JNEWS_UNSUBSCRIBE_ALL', 'Peruuta kaikkien listojen tilaukset');
define('_JNEWS_UNSUBSCRIBE_ALL_OR', 'tai valitse tämä peruuttaaksesi kaikkien listojen tilaukset');
define('_JNEWS_UNSUBSCRIBE_ALL_MESS', 'Tilauksesi kaikille listoille on peruutettu.');
define('_JNEWS_UNSUBSCRIBE_ALL_CAPTION', 'Näytä kaikkien listojen peruutus');
define('_JNEWS_UNSUBSCRIBE_ALL_CAPTION_TIPS', 'Valitse &quot;Kyllä&quot; näyttääksesi &quot;Peruuta kaikkien listojen tilaukset&quot; painike julkisivulla.');
define('_JNEWS_ATTEMPTED', 'Yritettiin lähettää');
define('_JNEWS_RESCHEDULED', 'Tämän uutiskirjeen lähetystä yritetään myöhemmin uudelleen.');
define('_JNEWS_REACHED_MAX_ATTEMPT', 'Huomaa: Jos uutiskirjeen lähetysyritysten määrä on jo ylittänyt suurimman sallitun, tämä tapahtuma poistuu jonosta automaattisesti.');
define('_JNEWS_REGWARN_COLUMN','Syötä');
define('_JNEWS_COLUMN_SHOW','Näytä sarake ');
define('_JNEWS_SHOW_COLUMN_TIPS','Näytä tai piilota tämä sarake tilaajalistalla');
define('_JNEWS_INPUT_COLUMN','Sarake ');
define('_JNEWS_INPUT_COLUMN_TIPS','Syötä sarakkeesi ');
define('_JNEWS_COLUMN_DESC', 'Tämä korvataan määrittelemälläsi sarakkeella ');
define('_JNEWS_HELP', 'Ohje');
define('_JNEWS_SEND_LOG_TO_TIPS', 'Lähetä lähetysraportit tähän osoitteeseen. Jos arvoa ei ole määritetty raportti lähetetään ensimmäiselle hallinnoijalle');
define('_JNEWS_SEND_LOG_TO', 'Lähetä lähetysraportit osoitteeseen');
define('_JNEWS_ASSIGN_LIS_TEMPLATE', 'Listan viestipohja');
define('_JNEWS_ASSIGN_LIS_TEMPLATE_TIPS', 'Valitse listan oletusviestipohja');
define('_JNEWS_AUTO_OPTION_NO_SYNC', 'Sync No Users');
define('_JNEWS_QUEUE_BLOCK', 'Estä');
define('_JNEWS_QUEUE_UNBLOCK', 'Salli');
define('_JNEWS_TAGMENU_MEDIA_SHARE', 'Social Share');
define('_JNEWS_JOOBI_CRON', 'Joobi <pre>cron</pre>');
define('_JNEWS_JOOBI_CRON_TIPS', 'Valitse &quot;Kyllä&quot; julkaistaksesi Joobi <pre>cron</pre> palvelun ja voidaksesi käyttää sitä. Valitse &quot;Ei&quot;, jos et halua käyttää sitä. Tämä palvelu laukeaa 15 minuutin välein.');
define('_JNEWS_JNEWS_CRON', 'jNews <pre>cron</pre> liitännäinen');
define('_JNEWS_JNEWS_CRON_TIPS', 'Valitse &quot;Kyllä&quot; julkaistaksesi jNews <pre>cron</pre> liitännäisen ja voidaksesi käyttää sitä. Valitse &quot;Ei&quot;, jos et halua käyttää sitä. Tämä ajastin laukeaa 15 minuutin välein.');
define('_JNEWS_JOOBICRON_YES', 'Kyllä');
define('_JNEWS_JOOBICRON_NO', 'Ei');
define('_JNEWS_TITLE', 'Tämä korvataan uutiskirjeen otsikolla.');

//since 7.5.x
define('_JNEWS_CREATE_DATE', 'Luontipäiväys');
define('_JNEWS_MENU_SEND_TEST_TEXT', 'Lähetä testiviesti(Teksti)');
define('_JNEWS_CRON_NEXTTRIGGER', 'Seuraava <pre>cron</pre> ajastus');
define('_JNEWS_CRON_NEXTTRIGGER_TIPS', 'Koska seuraava <pre>cron</pre> ajastus on. Jos URL laukeaa ennen tätä, jonoa ei käsitellä.');
define('_JNEWS_AUTONEWS_DATE', 'Alkupäiväys');
define('_JNEWS_AUTONEWS_DATE_TIPS', 'Luotu: vain viimeksi luotu artikkeli.<br />Muokattu: viimeksi luotu <strong>ja</strong> muokattu artikkeli.');
define('_JNEWS_AUTONEWS_DATE_CREATED', 'Luotu');
define('_JNEWS_AUTONEWS_DATE_MODIFIED', 'Muokattu');
define('_JNEWS_UNSUBCRIBERS_VIEW', 'Peruuttaneet');
define('_JNEWS_UNSUBSCRIBER_CONFIG', 'Peruuttaneet');
define('_JNEWS_SUB_LISTTYPE_ALL', 'Kaikki tilaajat');
define('_JNEWS_SUB_LISTTYPE_ONLY_SUBCRIBED', 'Tilaajat');
define('_JNEWS_SUB_LISTTYPE_ONLY_UNSUBCRIBED', 'Peruuttaneet');
define('_JNEWS_SUB_LISTTYPE_ONLY_WAITINGCONF', 'Vahvistusta odottavat' );
define('_JNEWS_SUB_LISTTYPE_ONLY_BLOCKED', 'Estetyt käyttäjät');
define('_JNEWS_MENU_SEND_TESTSPAM', 'Roskapostitesti');
define('_JNEWS_SPAMTEXT_MESSAGE_SENT_SUCCESSFULLY', 'Roskapostitesti on lähetetty, tarkista sähköpostisi!');
define('_JNEWS_AUTONEWS_NEXT_GEN', 'Seuraava automaattinen uutiskirje' );
define('_JNEWS_AUTONEWS_NEXT_GEN_TIPS', 'Koska jNews luo seuraavan kerran automaattisen uutiskirjeen' );
define('_JNEWS_AUTONEWS_SMARTNEWS_PROCESS', 'jNews käsitteli automaattisen uutiskirjeen ( %s ) ja löysi %s  uutta julkaistua artikkelia väliltä %s - %s .' );
define('_JNEWS_AUTONEWS_NO_SMARTNEWS_GENERATE_IDS', 'Automaattiuutiskirjettä ei ole luotu IDlle %s .' );
define('_JNEWS_AUTONEWS_NO_SMARTNEWS_GENERATE_DATE', 'Automaattiuutiskirje luodaan tämän päiväyksen jälkeen: %s .' );
define('_JNEWS_AUTONEWS_NO_SMARTNEWS_GENERATE_TIME', 'Aika nyt: %s .' );
define('_JNEWS_NEWSLETTER_BE_SENT', ' lähetetään ' );
define('_JNEWS_NEWSLETTER_BE_SUBCRIBERS', 'tilaajalle.' );
define('_JNEWS_NEWSLETTER_BE_NEXT', 'Seuraava postitus lähetetään %s jälkeen.' );
define('_JNEWS_NEWSLETTER_BE_READY_SENT', ' valmiina lähetettäväksi ' );
define('_JNEWS_DESC_SUPERPACK', 'jNews SuperPack sisältää paljon valmiita viestipohjia. jNews! Your Communication Partner!');
define('_JNEWS_DESC_SOCIAL', 'jNews Social postitusjärjestelmä sosiaaliselle verkollesi. jNews! Your Communication Partner!');

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


