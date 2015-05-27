<?php
defined('_JEXEC') or die('Restricted access');
### Copyright (c) 2006-2012 Joobi Limited. All rights reserved.
### license GNU GPLv3 , link http://www.joobi.co

/**
* <p>Hungarian language file</p>
* @author Joobi Ltd <support@joobi.co>
* @version $Id: hungarian.php 401 2006-12-05 15:07:13Z chris $
* @link http://www.joobiweb.com
*/

### General ###
 //jnews Description
define('_JNEWS_DESC_CORE', 'Az jNews komponens egy hírlevélkezelo, automatikus válaszoló és ellenorzo eszköz a felhasználókkal való kapcsolattartás hatékonysága érdekében.  jNews, az Ön kommunikációs partnere!');
define('_JNEWS_DESC_GPL', 'Az jNews komponens egy hírlevélkezelo, automatikus válaszoló és ellenorzo eszköz a felhasználókkal való kapcsolattartás hatékonysága érdekében.  jNews, az Ön kommunikációs partnere!');
define('_JNEWS_FEATURES', 'jNews, az Ön kommunikációs partnere!');

// Type of lists
define('_JNEWS_NEWSLETTER', 'Hírlevél');
define('_JNEWS_AUTORESP', 'Automatikus válaszoló');
define('_JNEWS_AUTORSS', 'Automatikus RSS');
define('_JNEWS_ECARD', 'eCard');
define('_JNEWS_POSTCARD', 'Képeslap');
define('_JNEWS_PERF', 'Muködés');
define('_JNEWS_COUPON', 'Kupon');
define('_JNEWS_CRON', 'Idozítés feladat');
define('_JNEWS_MAILING', 'Levelezés');
define('_JNEWS_LIST', 'Lista');

 //jnews Menu
define('_JNEWS_MENU_LIST', 'Listakezelés');
define('_JNEWS_MENU_SUBSCRIBERS', 'Feliratkozók');
define('_JNEWS_MENU_NEWSLETTERS', 'Hírlevelek');
define('_JNEWS_MENU_AUTOS', 'Automatikus válaszolók');
define('_JNEWS_MENU_COUPONS', 'Kuponok');
define('_JNEWS_MENU_CRONS', 'Idozítés feladatok');
define('_JNEWS_MENU_AUTORSS', 'Automatikus RSS');
define('_JNEWS_MENU_ECARD', 'eKépeslapok');
define('_JNEWS_MENU_POSTCARDS', 'Képeslapok');
define('_JNEWS_MENU_PERFS', 'Muködések');
define('_JNEWS_MENU_TAB_LIST', 'Listák');
define('_JNEWS_MENU_MAILING_TITLE', 'Levelezések');
define('_JNEWS_MENU_MAILING', 'Levelezés: ');
define('_JNEWS_MENU_STATS', 'Statisztika');
define('_JNEWS_MENU_STATS_FOR', 'Statisztika: ');
define('_JNEWS_MENU_CONF', 'Beállítás');
define('_JNEWS_MENU_UPDATE', 'Frissítések');
define('_JNEWS_MENU_ABOUT', 'Névjegy');
define('_JNEWS_MENU_LEARN', 'Képzés központ');
define('_JNEWS_MENU_MEDIA', 'Média kezelo');
define('_JNEWS_MENU_HELP', 'Súgó');
define('_JNEWS_MENU_CPANEL', 'Vezérlopult');
define('_JNEWS_MENU_IMPORT', 'Import');
define('_JNEWS_MENU_EXPORT', 'Export');
define('_JNEWS_MENU_SUB_ALL', 'Mindet felirat');
define('_JNEWS_MENU_UNSUB_ALL', 'Mindet leirat');
define('_JNEWS_MENU_VIEW_ARCHIVE', 'Archivum');
define('_JNEWS_MENU_PREVIEW', 'Elonézet');
define('_JNEWS_MENU_SEND', 'Küld');
define('_JNEWS_MENU_SEND_TEST', 'Teszt levél küldés');
define('_JNEWS_MENU_SEND_QUEUE', 'Feladatsor');
define('_JNEWS_MENU_VIEW', 'Megtekintés');
define('_JNEWS_MENU_COPY', 'Másolás');
define('_JNEWS_MENU_VIEW_STATS', 'Megtekintési statisztika');
define('_JNEWS_MENU_CRTL_PANEL', ' Vezérlopult');
define('_JNEWS_MENU_LIST_NEW', ' Új lista');
define('_JNEWS_MENU_LIST_EDIT', ' Lista szerkesztés');
define('_JNEWS_MENU_BACK', 'Vissza');
define('_JNEWS_MENU_INSTALL', 'Telepítés');
define('_JNEWS_MENU_TAB_SUM', 'Összegzés');
define('_JNEWS_STATUS', 'Állapot');

// messages
define('_JNEWS_ERROR', ' Hiba történt! ');
define('_JNEWS_SUB_ACCESS', 'Hozzáférési jogok');
define('_JNEWS_DESC_CREDITS', 'Készítok');
define('_JNEWS_DESC_INFO', 'Információ');
define('_JNEWS_DESC_HOME', 'Webhely');
define('_JNEWS_DESC_MAILING', 'Levelezo lista');
define('_JNEWS_DESC_SUBSCRIBERS', 'Feliratkozók');
define('_JNEWS_PUBLISHED', 'Publikálva');
define('_JNEWS_UNPUBLISHED', 'Visszavonva');
define('_JNEWS_DELETE', 'Törlés');
define('_JNEWS_FILTER', 'Szuro');
define('_JNEWS_UPDATE', 'Frissítés');
define('_JNEWS_SAVE', 'Mentés');
define('_JNEWS_CANCEL', 'Mégsem');
define('_JNEWS_NAME', 'Név');
define('_JNEWS_EMAIL', 'Email');
define('_JNEWS_SELECT', 'Válasszon!');
define('_JNEWS_ALL', 'Összes');
define('_JNEWS_SEND_A', 'Küldés: ');
define('_JNEWS_SUCCESS_DELETED', ' sikeresen törölve');
define('_JNEWS_LIST_ADDED', 'A lista sikeresen elkészült');
define('_JNEWS_LIST_COPY', 'A lista sikeresen másolva');
define('_JNEWS_LIST_UPDATED', 'A lista sikeresen frissítve');
define('_JNEWS_MAILING_SAVED', 'A levelezés sikeresen mentve.');
define('_JNEWS_UPDATED_SUCCESSFULLY', 'sikeresen frissítve.');

### Subscribers information ###
//subscribe and unsubscribe info
define('_JNEWS_SUB_INFO', 'Feliratkozói információk');
define('_JNEWS_VERIFY_INFO', 'Ellenorizze a beküldött linket, néhány információ elveszett.');
define('_JNEWS_INPUT_NAME', 'Név');
define('_JNEWS_INPUT_EMAIL', 'Email');
define('_JNEWS_RECEIVE_HTML', 'HTML formátum?');
define('_JNEWS_TIME_ZONE', 'Idozóna');
define('_JNEWS_BLACK_LIST', 'Fekete lista');
define('_JNEWS_REGISTRATION_DATE', 'Felhasználói regisztrációs dátum');
define('_JNEWS_USER_ID', 'Felhasználó az');
define('_JNEWS_DESCRIPTION', 'Leírás');
define('_JNEWS_ACCOUNT_CONFIRMED', 'A regisztrációja aktíválva.');
define('_JNEWS_SUB_SUBSCRIBER', 'Feliratkozó');
define('_JNEWS_SUB_PUBLISHER', 'Publikáló');
define('_JNEWS_SUB_ADMIN', 'Adminisztrátor');
define('_JNEWS_REGISTERED', 'Regisztrált');
define('_JNEWS_SUBSCRIPTIONS', 'Feliratkozások');
define('_JNEWS_SEND_UNSUBCRIBE', 'Leiratkozási üzenet küldése');
define('_JNEWS_SEND_UNSUBCRIBE_TIPS', 'Kattintson az Igen-re a leiratkozást megerosíto levél elküldéséhez!');
define('_JNEWS_SUBSCRIBE_SUBJECT_MESS', 'Kérjük, erosítse meg a feliratkozását!');
define('_JNEWS_UNSUBSCRIBE_SUBJECT_MESS', 'Leiratkozás megerosítése');
define('_JNEWS_DEFAULT_SUBSCRIBE_MESS', 'Kedves {tag:name}!<br /><br />Még egy lépést kell megtennie a feliratkozás befejezéséig. Kattintson az alábbi linkre a feliratkozás megerosítéséhez!<br /><br />{tag:confirm}<br /><br />Bármilyen kérdéssel forduljon az adminisztrátorhoz!<br /><br />Varanka Zoltán<br />(webmester - adminisztrátor)');
define('_JNEWS_DEFAULT_UNSUBSCRIBE_MESS', 'Kedves {tag:name}!<br /><br />Ez egy megerosíto levél a hírlevél lemondásához. Sajnáljuk a döntését. Természetesen bármikor újra feliratkozhat a listára. Bármilyen kérdéssel forduljon az adminisztrátorhoz!<br /><br />Varanka Zoltán<br />(webmester - adminisztrátor)');

// jNews subscribers
define('_JNEWS_SIGNUP_DATE', 'Bejelentkezési dátum');
define('_JNEWS_CONFIRMED', 'Megerosítve');
define('_JNEWS_SUBSCRIB', 'Feliratkozás');
define('_JNEWS_HTML', 'HTML levelezések');
define('_JNEWS_RESULTS', 'Eredmények');
define('_JNEWS_SEL_LIST', 'Válasszon egy listát!');
define('_JNEWS_SEL_LIST_TYPE', '- Válasszon egy listatípust! -');
define('_JNEWS_SUSCRIB_LIST', 'Feliratkozók teljes listája');
define('_JNEWS_SUSCRIB_LIST_UNIQUE', 'Feliratkozók : ');
define('_JNEWS_NO_SUSCRIBERS', 'Ebben a listában nincsenek feliratkozók.');
define('_JNEWS_COMFIRM_SUBSCRIPTION', 'Küldtünk Önnek egy megerosíto levelet. Nézze át a postaládáját és kattintson a levélben levo linkre.<br />A feliratkozását meg kell erosítenie a levél segítségével.');
define('_JNEWS_SUCCESS_ADD_LIST', 'Ön sikeresen bekerült a listába.');


 // Subcription info
define('_JNEWS_CONFIRM_LINK', 'Kattintson ide a feliratkozás megerosítéséhez!');
define('_JNEWS_UNSUBSCRIBE_LINK', 'Kattintson ide a leiratkozáshoz!');
define('_JNEWS_UNSUBSCRIBE_MESS', 'Az Ön email címét eltávolítottuk a listából!');

define('_JNEWS_QUEUE_SENT_SUCCESS', 'Minden levél sikeresen elküldésre került.');
define('_JNEWS_MALING_VIEW', 'Levelezések megtekintése');
define('_JNEWS_UNSUBSCRIBE_MESSAGE', 'Biztosan szeretne leiratkozni a listáról?');
define('_JNEWS_MOD_SUBSCRIBE', 'Feliratkozás');
define('_JNEWS_SUBSCRIBE', 'Feliratkozás');
define('_JNEWS_UNSUBSCRIBE', 'Leiratkozás');
define('_JNEWS_VIEW_ARCHIVE', 'Archívum megtekintése');
define('_JNEWS_SUBSCRIPTION_OR', ' vagy kattintson ide az Ön információinak a frissítéséhez!');
define('_JNEWS_EMAIL_ALREADY_REGISTERED', 'Ez az email cím már a listában van.');
define('_JNEWS_SUBSCRIBER_DELETED', 'A feliratkozó sikeresen törölve.');


### UserPanel ###
 //User Menu
define('_JNEWS_UCP_USER_PANEL', 'Felhasználói vezérlopult');
define('_JNEWS_UCP_USER_MENU', 'Felhasználói menü');
define('_JNEWS_UCP_USER_CONTACT', 'Feliratkozásaim');
 //jNews Cron Menu
define('_JNEWS_UCP_CRON_MENU', 'Idozíto feladat kezelo');
define('_JNEWS_UCP_CRON_NEW_MENU', 'Új idozítés');
define('_JNEWS_UCP_CRON_LIST_MENU', 'Idozítom listája');
 //jNews Coupon Menu
define('_JNEWS_UCP_COUPON_MENU', 'Kupon kezelo');
define('_JNEWS_UCP_COUPON_LIST_MENU', 'Kupon lista');
define('_JNEWS_UCP_COUPON_ADD_MENU', 'Új kupon hozzáadás');

### lists ###
// Tabs
define('_JNEWS_LIST_T_GENERAL', 'Leírás');
define('_JNEWS_LIST_T_LAYOUT', 'Kialakítás');
define('_JNEWS_LIST_T_SUBSCRIPTION', 'Feliratkozás');
define('_JNEWS_LIST_T_SENDER', 'Infó a küldorol');

define('_JNEWS_LIST_TYPE', 'Lista típus');
define('_JNEWS_LIST_NAME', 'Lista név');
define('_JNEWS_LIST_ISSUE', 'Kiadás száma');
define('_JNEWS_LIST_DATE', 'Küldés dátuma');
define('_JNEWS_LIST_SUB', 'Tárgy');
define('_JNEWS_ATTACHED_FILES', 'Csatolt fájlok');
define('_JNEWS_SELECT_LIST', 'Válassza ki a szerkesztendo listát!');

// Auto Responder box
define('_JNEWS_AUTORESP_ON', 'Lista típus');
define('_JNEWS_AUTO_RESP_OPTION', 'Automatikus válaszoló opciók');
define('_JNEWS_AUTO_RESP_FREQ', 'A feliratkozók kiválaszthatják a gyakoriságot');
define('_JNEWS_AUTO_DELAY', 'Késleltetés (napokban)');
define('_JNEWS_AUTO_DAY_MIN', 'Minimális gyakoriság');
define('_JNEWS_AUTO_DAY_MAX', 'Maximális gyakoriság');
define('_JNEWS_FOLLOW_UP', 'Az automatikus válaszoló beállítása');
define('_JNEWS_AUTO_RESP_TIME', 'A feliratkozók idot választhatnak');
define('_JNEWS_LIST_SENDER', 'Lista küldo');

define('_JNEWS_LIST_DESC', 'Lista leírás');
define('_JNEWS_LAYOUT', 'Kialakítás');
define('_JNEWS_SENDER_NAME', 'Küldo neve');
define('_JNEWS_SENDER_EMAIL', 'Küldo email címe');
define('_JNEWS_SENDER_BOUNCE', 'Küldo válasz címe');
define('_JNEWS_LIST_DELAY', 'Késleltetés');
define('_JNEWS_HTML_MAILING', 'HTML levél?');
define('_JNEWS_HTML_MAILING_DESC', '(ha megváltoztatja ezt, mentenie kell majd visszatérni ehhez a képernyohöz a változások megtekintésére.)');
define('_JNEWS_HIDE_FROM_FRONTEND', 'Elrejtés a webes felületen?');
define('_JNEWS_SELECT_IMPORT_FILE', 'Válassza ki az importálandó fájlt!');;
define('_JNEWS_IMPORT_FINISHED', 'Az importálás befejezodött');
define('_JNEWS_DELETION_OFFILE', 'Fájl törlése');
define('_JNEWS_MANUALLY_DELETE', 'meghiusult, kézzel kell törölnie a fájlt');
define('_JNEWS_CANNOT_WRITE_DIR', 'A könyvtár nem írható');
define('_JNEWS_NOT_PUBLISHED', 'A levél nem küldheto el, a lista nincs publikálva.');

//  List info box
define('_JNEWS_INFO_LIST_PUB', 'Kattintson ide a lista publikálásához!');
define('_JNEWS_INFO_LIST_NAME', 'Adja meg a lista nevét itt! Ezzel a névvel azonosíthatja a listát!');
define('_JNEWS_INFO_LIST_DESC', 'Adja meg a lista rövid leírását! Ezt a leírást látják a felhasználók.');
define('_JNEWS_INFO_LIST_SENDER_NAME', 'Adja meg a levél küldojének a nevét! Ezt a nevetlátják a feliratkozók, amikor levelet kapnak a listáról.');
define('_JNEWS_INFO_LIST_SENDER_EMAIL', 'Adja meg azt az email címet, ahonnan az üzenetek küldésre kerülnek.');
define('_JNEWS_INFO_LIST_SENDER_BOUNCED', 'Adja meg azt az email címet,, ahova a feliratkozók válaszolhatnak. Ajánlatos, hogy ez megegyezzen a küldo email címmel, mivel a spam szurok magasabb kockázatként kezelik, ha ezek különbözoek.');
define('_JNEWS_INFO_LIST_AUTORESP', 'Válassza ki a levelezés típusát ehhez a listához!<br />Hírlevél: normál hírlevél<br />Automatikus válaszoló: ez egy lista, amely megadott idoközönként küld levelet.');
define('_JNEWS_INFO_LIST_FREQUENCY', 'A felhasznlók megválaszthatják, hogy milyen gyakran kapjanak levelet. Ez nagy rugalmasságot biztosít.');
define('_JNEWS_INFO_LIST_TIME', 'A felhasználók megválaszthatják, hogy a hát melyik napján kapjanak levelet.');
define('_JNEWS_INFO_LIST_MIN_DAY', 'Milyen legyen az a minimális gyakoriság, amelyet a felhasználók megválaszthatnak, ha be akarják állítani a levelek fogadásának gyakorisságát?');
define('_JNEWS_INFO_LIST_DELAY', 'Adja meg a késleltetést az elozo és ezen automatikus válaszoló között!');
define('_JNEWS_INFO_LIST_DATE', 'Adja meg, mikor legyen publikálva a herlevél, ha késleltetettnek lett beállítva!<br /> Formátum: ÉÉÉÉ-HH-NN ÓÓ:PP:MM');
define('_JNEWS_INFO_LIST_MAX_DAY', 'Milyen legyen az a maximális gyakoriság, amelyet a felhasználók megválaszthatnak, ha be akarják állítani a levelek fogadásának gyakorisságát?');
define('_JNEWS_INFO_LIST_LAYOUT', 'Itt adhatja meg a levél kialakítását. Bármilyen kialakítást megadhat.');
define('_JNEWS_INFO_LIST_SUB_MESS', 'Ez a levél kerül elküldésre a felhasználónak az elso feliratkozáskor. Bármilyen szöveget meg lehet itt adni.');
define('_JNEWS_INFO_LIST_UNSUB_MESS', 'Ez a levél kerül elküldésre a felhasználónak az leiratkozik. Bármilyen szöveget meg lehet itt adni.');
define('_JNEWS_INFO_LIST_HTML', 'Pipálja ki a kijelölodobozt, ha HTMLformában akarja a levelet elküldeni. A feliratkozók megadhatják, hogy HTML vagy szöveges formában kívánják-e fogadnia leveleket, amikor egy HTML listára iratkoznak fel.');
define('_JNEWS_INFO_LIST_HIDDEN', 'Kattintson az Igen-re a lista elrejtéséhez a webes felületen, a felhasználók ugyan nem iratkozhatnak fel,de azért meg lehet levelet küldeni.');
define('_JNEWS_INFO_LIST_JNEWS_AUTO_SUB', 'Szeretné, hogy a felhasználók automatikusan feliratkozzanak erre a listára?<br /><B>Új felhasználók:</B>minden új felhasználó, aki regisztrál, feliratkozó is lesz egyben.<br /><B>Összes felhasználó:</B> minden regisztrált felhasználó feliratkozó is lesz egyben.<br />(támogatja a Community Buildert)');
define('_JNEWS_INFO_LIST_ACC_LEVEL', 'Válassza ki a webes felület hozzáférési szintjét! Ez megjeleníti vagy elrejti a levelezést azon csoportok esetén, amelynek nincs hozzáférési joga, tehát nem tudnak feliratkozni.');
define('_JNEWS_INFO_LIST_ACC_USER_ID', 'Válassza ki a hozzáférési szintjét annak a csoportnak, amelynek engedélyezni szeretmé a szerkesztést. Ez és az e feletti csoport szerkesztheti a levelezést és levelet küldhet ki mind a webes mind az adminisztrációs felületrol.');
define('_JNEWS_INFO_LIST_FOLLOW_UP', 'Ha szeretné az automatikus válaszolót egy másokba mozgatni, amint eléri az utolsó üzenetet, megadhatja itt a nyomköveto automatikus válaszolót.');
define('_JNEWS_INFO_LIST_JNEWS_OWNER', 'Ez a listát lértehozó személy azonosítója.');
define('_JNEWS_INFO_LIST_WARNING', '   Ez az utolsó opció csak a lista létrehozásakor elérheto.');
define('_JNEWS_INFO_LIST_SUBJET', ' A levelezés tárgya. Ez a szöveg kerül a levél tárgyába.');
define('_JNEWS_INFO_MAILING_CONTENT', 'Ez az elküldendo levél törzse.');
define('_JNEWS_INFO_MAILING_NOHTML', 'Adja meg a levél törzsét, amelyet azoknak a feliratkozóknak kell elküldeni, akik csak szöveges levelet fogadnak. <BR/> Megjegyzés: ha üresen hagyja, a html formátumú szövegrész kerül ide szöveges formátumban.');
define('_JNEWS_INFO_MAILING_VISIBLE', 'Kattintson az Igen-re a levelezések megjelenítéséhez a webes felületen.');
define('_JNEWS_INSERT_CONTENT', 'Létezo tartalom beszúrása');

// Coupons
define('_JNEWS_SEND_COUPON_SUCCESS', 'A kupon sikeresen elküldve!');
define('_JNEWS_CHOOSE_COUPON', 'Válasszon kupont!');
define('_JNEWS_TO_USER', ' ennek a felhasználónak');

### Cron options
//drop down frequency(CRON)
define('_JNEWS_FREQ_CH1', 'Minden órában');
define('_JNEWS_FREQ_CH2', 'Minden 6 órában');
define('_JNEWS_FREQ_CH3', 'Minden 12 órában');
define('_JNEWS_FREQ_CH4', 'Naponta');
define('_JNEWS_FREQ_CH5', 'Hetente');
define('_JNEWS_FREQ_CH6', 'Havonta');
define('_JNEWS_FREQ_NONE', 'Nem');
define('_JNEWS_FREQ_NEW', 'Új felhasználól');
define('_JNEWS_FREQ_ALL', 'Összes felhasználó');

//Label CRON form
define('_JNEWS_LABEL_FREQ', 'jNews idozíto?');
define('_JNEWS_LABEL_FREQ_TIPS', 'Kattintson az Igen-re, ha használni szeretné az jNews idozítotCron, A Nem beállítása más idozíto használatát teszi lehetové.<br />Ha az Igem-re kattint, nem kell megadnia az idozíto címét, ez automatikusan hozzáadódik.');
define('_JNEWS_SITE_URL', 'Az Ön webhelyének URL-je');
define('_JNEWS_CRON_FREQUENCY', 'Idozíto gyakoriság');
define('_JNEWS_STARTDATE_FREQ', 'Kezdo dátum');
define('_JNEWS_LABELDATE_FREQ', 'Adja meg a dátumot!');
define('_JNEWS_LABELTIME_FREQ', 'Adja meg az idot!');
define('_JNEWS_CRON_URL', 'Idozíto URL');
define('_JNEWS_CRON_FREQ', 'Gyakoriság');
define('_JNEWS_TITLE_CRONLIST', 'Idozíto lista');
define('_JNEWS_NEW_LIST', 'Új lista készítése');

//title CRON form
define('_JNEWS_TITLE_FREQ', 'Idozíto szerkesztése');
define('_JNEWS_CRON_SITE_URL', 'Érvényes webhely URL-t adjon meg, kezdje http://-vel!');

### Mailings ###
define('_JNEWS_MAILING_ALL', 'Összes levelezés');
define('_JNEWS_EDIT_A', 'Szerkesztés: ');
define('_JNEWS_SELCT_MAILING', 'Válasszon egy listát a legördülo menüben új levelezés hozzáadásához!');
define('_JNEWS_VISIBLE_FRONT', 'Látható a webes felületen');

// mailer
define('_JNEWS_SUBJECT', 'Tárgy');
define('_JNEWS_CONTENT', 'Tartalom');
define('_JNEWS_NAMEREP', '{tag:name} = A feliratkozó nevére cserélodik ki ez a kód, ezzel személyre szabhatja a levelet.<br />');
define('_JNEWS_FIRST_NAME_REP', '{tag:firstname} = A feliratkozó vezetéknevére (elso név) cserélodik ki ez a kód.<br />');
define('_JNEWS_NONHTML', 'Nem-html verzió');
define('_JNEWS_ATTACHMENTS', 'Mellékletek');
define('_JNEWS_SELECT_MULTIPLE', 'Tartsa lenyomva a CTRL (vagy a Command) gombot több melléklet kiválasztásához.<br />A mellékletek listájában megjeleno fájlokat egy külön könyvtárban helyezheti el, ez a könyvtár beállítható a beállítások paneljén.');
define('_JNEWS_CONTENT_ITEM', 'Tartalmi elem');
define('_JNEWS_SENDING_EMAIL', 'Levél küldése');
define('_JNEWS_MESSAGE_NOT', 'A levél nem küldheto el');
define('_JNEWS_MAILER_ERROR', 'Levélküldési hiba');
define('_JNEWS_MESSAGE_SENT_SUCCESSFULLY', 'A levél sikeresen elküldve');
define('_JNEWS_SENDING_TOOK', 'A levél elkóldése');
define('_JNEWS_SECONDS', 'másodpercet vett igénybe');
define('_JNEWS_NO_ADDRESS_ENTERED', 'Nincs email cím vagy feliratkozó megadva!');
define('_JNEWS_CHANGE_SUBSCRIPTIONS', 'Változtatás');
define('_JNEWS_CHANGE_EMAIL_SUBSCRIPTION', 'Változtat a feliratkozáson?');
define('_JNEWS_WHICH_EMAIL_TEST', 'Adja meg a tesztelésre használt email címet vagy válassza az elonézetet!');
define('_JNEWS_SEND_IN_HTML', 'Küldés HTML módban (HTML leveleknél)?');
define('_JNEWS_VISIBLE', 'Látható');
define('_JNEWS_INTRO_ONLY', 'Csak bevezeto');

// stats
define('_JNEWS_GLOBALSTATS', 'Globalis statisztika');
define('_JNEWS_DETAILED_STATS', 'Részletes statisztika');
define('_JNEWS_MAILING_LIST_DETAILS', 'Lista részletek');
define('_JNEWS_SEND_IN_HTML_FORMAT', 'Küldés HTML formátumban');
define('_JNEWS_VIEWS_FROM_HTML', 'Megtekintve (csak html leveleknél)');
define('_JNEWS_SEND_IN_TEXT_FORMAT', 'Küldés szöveges formátumban');
define('_JNEWS_HTML_READ', 'HTML olvasott');
define('_JNEWS_HTML_UNREAD', 'HTML nem olvasott');
define('_JNEWS_TEXT_ONLY_SENT', 'Csak szöveg');

// Configuration panel
// main tabs
define('_JNEWS_MAIL_CONFIG', 'Levél');
define('_JNEWS_LOGGING_CONFIG', 'Napló-statisztika');
define('_JNEWS_SUBSCRIBER_CONFIG', 'Feliratkozók');
define('_JNEWS_MISC_CONFIG', 'Egyéb');
define('_JNEWS_MAIL_SETTINGS', 'Levél beállítások');
define('_JNEWS_MAILINGS_SETTINGS', 'Levelezési beállítások');
define('_JNEWS_SUBCRIBERS_SETTINGS', 'Feliratkozó beállítások');
define('_JNEWS_CRON_SETTINGS', 'Idozíto beállítások');
define('_JNEWS_SENDING_SETTINGS', 'Küldési beállítások');
define('_JNEWS_STATS_SETTINGS', 'Statisztikai beállítások');
define('_JNEWS_LOGS_SETTINGS', 'Napló beállítások');
define('_JNEWS_MISC_SETTINGS', 'Egyéb beállítások');
// mail settings
define('_JNEWS_SEND_MAIL_FROM', 'Küldo email');
define('_JNEWS_SEND_MAIL_NAME', 'Küldo név');
define('_JNEWS_MAILSENDMETHOD', 'Levélküldo mód');
define('_JNEWS_SENDMAILPATH', 'Sendmail útvonal');
define('_JNEWS_SMTPHOST', 'SMTP kiszolgáló');
define('_JNEWS_SMTPAUTHREQUIRED', 'SMTP hitelesítés szükséges');
define('_JNEWS_SMTPAUTHREQUIRED_TIPS', 'Válassza az Igen-t, ha az MTP szerver hitelesítést igényel');
define('_JNEWS_SMTPUSERNAME', 'SMTP felhasználónév');
define('_JNEWS_SMTPUSERNAME_TIPS', 'Adja meg az SMTP felhasználónevet, ha az SMTP szerver hitelesítést igényel!');
define('_JNEWS_SMTPPASSWORD', 'SMTP jelszó');
define('_JNEWS_SMTPPASSWORD_TIPS', 'Adja meg az SMTP jelszót, ha az SMTP szerver hitelesítést igényel!');
define('_JNEWS_USE_EMBEDDED', 'Beágyazott képek');
define('_JNEWS_USE_EMBEDDED_TIPS', 'Válassza az Igen-t, ha a mellékelt képeket be kell ágyazni a levélbe html formátum esetén vagy a Nem-et, ha a képek linkjeit szeretné elküldeni a levélben.');
define('_JNEWS_UPLOAD_PATH', 'Feltöltési/csatolási útvonal');
define('_JNEWS_UPLOAD_PATH_TIPS', 'Megadhatja a feltöltési könyvtárat.<br />Ellenorizze, hogy a könyvtár létezik-e, ha szükséges hozza létre!');

// subscribers settings
define('_JNEWS_ALLOW_UNREG', 'Nem regisztráltak is');
define('_JNEWS_ALLOW_UNREG_TIPS', 'Válassza az Igen-t, ha a nem regisztrált felhasználók is feliratkozhatnak a listákra.');
define('_JNEWS_REQ_CONFIRM', 'Megerosítés szükséges');
define('_JNEWS_REQ_CONFIRM_TIPS', 'Válassza az Igen-t, ha a nem regisztrált felhasználóknak meg kell erosíteniük az email címüket.');
define('_JNEWS_SUB_SETTINGS', 'Feliratkozási beállítások');
define('_JNEWS_SUBMESSAGE', 'Feliratkozó levél');
define('_JNEWS_SUBSCRIBE_LIST', 'Feliratkozás egy listára');

define('_JNEWS_USABLE_TAGS', 'Használható címkék');
define('_JNEWS_NAME_AND_CONFIRM', '<b>{tag:confirm}</b> = Kattintható linket készít, amellyel a feliratkozó megerosítheti a feliratkozását. Ez <strong>szükséges</strong> az jNews megfelelo muködéséhez.<br /><br />{tag:name} = Lecserélodik a feliratkozó nevére, személyreszabva a küldött levelet.<br /><br />{tag:firstname} = Lecserélodik a feliratkozó elso nevére (vezetéknév).<br />');
define('_JNEWS_CONFIRMFROMNAME', 'Megerosíto feladó név');
define('_JNEWS_CONFIRMFROMNAME_TIPS', 'Adja meg a megerosíto listában megjeleno nevet!');
define('_JNEWS_CONFIRMFROMEMAIL', 'Megerosító feladó email cím');
define('_JNEWS_CONFIRMFROMEMAIL_TIPS', 'Adja meg a megerosíto listában megjeleno email címet!');
//define('_JNEWS_CONFIRMBOUNCE', 'Válasz cím');
//define('_JNEWS_CONFIRMBOUNCE_TIPS', 'Adja meg a megerosíto listában megjeleno válasz email címet!');
define('_JNEWS_HTML_CONFIRM', 'HTML megerosítés');
define('_JNEWS_HTML_CONFIRM_TIPS', 'Vélassza az Igen-t, ha a megerosíto levelet html formában szeretné elküldeni, ha a feliratjozó lehetové teszi a html levél fogadását..');
define('_JNEWS_TIME_ZONE_ASK', 'Rákérdezés az idozónára');
define('_JNEWS_TIME_ZONE_TIPS', 'Válassza az Igen-t, ha rá szeretne kérdezni a felhasználó idozónájára. A levél a felhasználónak megfelelo idozóna szerinti idoben lesz elküldve, ahol ez alkalmazható.');

 // Cron Set up
define('_JNEWS_AUTO_CONFIG', 'Idozíto');
define('_JNEWS_TIME_OFFSET_URL', 'kattintson ide az eltolás beállításához az General Settings oldal Locale fülén');
define('_JNEWS_TIME_OFFSET_TIPS', 'Beállítja a szerver idoeltolását, hogy a felvett dátum és ido adatok pontosak legyenek');
define('_JNEWS_TIME_OFFSET', 'Ido eltolás');
define('_JNEWS_CRON_DESC', '<br />Az idozíto funkcióval automatikus feladatot lehet beállítani a Joomla webhelyen!<br />Beállításához az alábbi utasítást kell adni az idozíto vezérlopulthoz:<br /><b>' . JNEWS_JPATH_LIVE . '/index.php?option=com_jnews&act=cron</b> <br /><br />Ha segítségre van szüksége, keresse fel a <a href="http://www.joobi.co" target="_blank">http://www.joobi.co</a> oldal fórumát!');
// sending settings
define('_JNEWS_PAUSEX', 'Várakozzon x másodpercet minden beállított mennyiségu levélnél');
define('_JNEWS_PAUSEX_TIPS', 'Adja meg azt at idot másodpercben, ameddig az jNews várakozik, mielott a következo adag levelet elküldi.');
define('_JNEWS_EMAIL_BET_PAUSE', 'Levéladagok száma');
define('_JNEWS_EMAIL_BET_PAUSE_TIPS', 'Az egyszerre elküldheto levelek száma.');
define('_JNEWS_WAIT_USER_PAUSE', 'Várakozás felhasználói bevitelte');
define('_JNEWS_WAIT_USER_PAUSE_TIPS', 'Két adag levél elküldése közben várakozzon-e a program felhasználói bevitelre?');
define('_JNEWS_SCRIPT_TIMEOUT', 'Ido kifutás');
define('_JNEWS_SCRIPT_TIMEOUT_TIPS', 'Ido másodpercben, ameddig a program futhat.');
// Stats settings
define('_JNEWS_ENABLE_READ_STATS', 'Statisztika olvasásának engedélyezése');
define('_JNEWS_ENABLE_READ_STATS_TIPS', 'Válasszon Igen-t, ha szeretné naplózni a megtekintések számát. Ez csak html leveleknél használható');
define('_JNEWS_LOG_VIEWSPERSUB', 'Megtekintések naplózása feliratkozókként');
define('_JNEWS_LOG_VIEWSPERSUB_TIPS', 'Válasszon Igen-t, ha szeretné naplózni a megtekintések számát felhasználókként. Ez csak html leveleknél használható');
// Logs settings
define('_JNEWS_DETAILED', 'Részletes napló');
define('_JNEWS_SIMPLE', 'Egyszeru napló');
define('_JNEWS_DIAPLAY_LOG', 'Napló megjelenítése');
define('_JNEWS_DISPLAY_LOG_TIPS', 'Válassza az Igen-t, ha szeretné megjeleníteni a naplózást a levelek elküldése során.');
define('_JNEWS_SEND_PERF_DATA', 'Küldési muvelet');
define('_JNEWS_SEND_PERF_DATA_TIPS', 'Válassza az Igen-t, ha szeretne jelentést kapni a beállításokról, a feliratkozók számáról és az elküldés idotartamáról. Ez informáiót ad az jNews muködésérol.');
define('_JNEWS_SEND_AUTO_LOG', 'Napló elküldése az automatikus válaszolónak.');
define('_JNEWS_SEND_AUTO_LOG_TIPS', 'Válassza az Igen-t, ha a naplót szeretné elküldeni minden alkalommal, amikor a rendszer levelet küld. Figyelem: ez nagy méretu levelet is jelenthet.');
define('_JNEWS_SEND_LOG', 'Napló küldése');
define('_JNEWS_SEND_LOG_TIPS', 'Küldjön-e naplót a rendszer a levél küldojének a címére.');
define('_JNEWS_SEND_LOGDETAIL', 'Részletes napló küldése');
define('_JNEWS_SEND_LOGDETAIL_TIPS', 'Információ arról, hogy sikeres volt-e a levél elküldése az egyes feliratkozóknak. Alapban csak áttekintést küld.');
define('_JNEWS_SEND_LOGCLOSED', 'Napló küldése, ha megszakad a kapcsolat');
define('_JNEWS_SEND_LOGCLOSED_TIPS', 'Ezzel az opcióval a küldo minden esetben jelentést kap az elküldésekrol.');
define('_JNEWS_SAVE_LOG', 'Napló mentése');
define('_JNEWS_SAVE_LOG_TIPS', 'A levelezés naplóbejegyzése bekerüljön-e a naplófájlba?');
define('_JNEWS_SAVE_LOGDETAIL', 'Részletes napló mentése');
define('_JNEWS_SAVE_LOGDETAIL_TIPS', 'A részletes bejegyzés tartalmazza minden feliratkozóhoz elküldött levél sikerességét vagy meghiúsulását. At egyszeru csak áttekintést ad.');
define('_JNEWS_SAVE_LOGFILE', 'Naplófájl mentése');
define('_JNEWS_SAVE_LOGFILE_TIPS', 'Az a fájl, amibe a naplóbejegyzés kerül.Ez a fájl nagy méreture is növekedhet.');
define('_JNEWS_CLEAR_LOG', 'Napló törlése');
define('_JNEWS_CLEAR_LOG_TIPS', 'Törli a napló fájl tartalmát.');

### control panel
define('_JNEWS_CP_LAST_QUEUE', 'Utoljára lefuttatott feladat');
define('_JNEWS_CP_TOTAL', 'Összes');
define('_JNEWS_MAILING_COPY', 'A levelezés sikeresen másolva!');

// Miscellaneous settings
define('_JNEWS_SHOW_GUIDE', 'Sorvezeto használata');
define('_JNEWS_SHOW_GUIDE_TIPS', 'Jelenítse meg a sorvezetot a használat elején segítve az új felhasználókat egy hírlvél, egy automatikus válaszoló létrehozásában és az jNews megfelelo beállításában.');
define('_JNEWS_AUTOS_ON', 'Automatikus válaszolók használata');
define('_JNEWS_AUTOS_ON_TIPS', 'Válasszon Nem-et, ha nem akarja használni az automatikus válaszokókat, minden automatikus válaszoló kikapcsol.');
define('_JNEWS_NEWS_ON', 'Hírlevelek használata');
define('_JNEWS_NEWS_ON_TIPS', 'Válasszon Nem-t, ha nem akarja használni a hírleveleket, minden hírlevél opció kikapcsol.');
define('_JNEWS_SHOW_TIPS', 'Tippek megjelenítése');
define('_JNEWS_SHOW_TIPS_TIPS', 'Tippek megjelenítése a nagyobb hatékonyság érdekében.');
define('_JNEWS_SHOW_FOOTER', 'Lábléc megjelenítése');
define('_JNEWS_SHOW_FOOTER_TIPS', 'Megjelenjen-e a lábléc a copyright szöveggel.');
define('_JNEWS_SHOW_LISTS', 'Listák megjelenítése a webes felületen');
define('_JNEWS_SHOW_LISTS_TIPS', 'Ha a felhasználó nincs bejelentkezve, megjeleníti a listát illetve bejelentkezhetnek vagy regisztrálhatnak.');
define('_JNEWS_CONFIG_UPDATED', 'A konfigurációs beálítások frissítve!');
define('_JNEWS_UPDATE_URL', 'URL frissítése');
define('_JNEWS_UPDATE_URL_WARNING', 'Figyelem! Ne változtassa meg az URL-t, hacsak nem kért engedélyt az jNews technikai csapatától.<br />');
define('_JNEWS_UPDATE_URL_TIPS', 'Például: http://www.joobi.co/update/ (tartalmazza a lezáró perjelet)');

// module
define('_JNEWS_EMAIL_INVALID', 'A megadott email cím érvénytelen!');
define('_JNEWS_REGISTER_REQUIRED', 'Regisztráljon a feliratkozás elott!');

// Access level box
define('_JNEWS_OWNER', 'Lista készíto:');
define('_JNEWS_ACCESS_LEVEL', 'Adja meg a lista hozzáférésének a szintjét!');
define('_JNEWS_ACCESS_LEVEL_OPTION', 'Hozzáférési szint opciók');
define('_JNEWS_USER_LEVEL_EDIT', 'Válassza ki, melyik szintnek van engedélyezve a levelezések szerkesztése (a webes vagy az adminisztrációs felületrol');

//  drop down options
define('_JNEWS_AUTO_DAY_CH1', 'Naponta');
define('_JNEWS_AUTO_DAY_CH2', 'Naponta hétvége kivételével');
define('_JNEWS_AUTO_DAY_CH3', 'Minden másnap');
define('_JNEWS_AUTO_DAY_CH4', 'Minden másnap hétvége kivételével');
define('_JNEWS_AUTO_DAY_CH5', 'Hetente');
define('_JNEWS_AUTO_DAY_CH6', 'Kéthetente');
define('_JNEWS_AUTO_DAY_CH7', 'Havonta');
define('_JNEWS_AUTO_DAY_CH9', 'Évente');
define('_JNEWS_AUTO_OPTION_NONE', 'Nem');
define('_JNEWS_AUTO_OPTION_NEW', 'Új felhasználók');
define('_JNEWS_AUTO_OPTION_ALL', 'Összes felhasználó');

//
define('_JNEWS_UNSUB_MESSAGE', 'Leiratkozó levél');
define('_JNEWS_UNSUB_SETTINGS', 'Leiratkozó beállítások');
define('_JNEWS_AUTO_ADD_NEW_USERS', 'Felhasználók automatikus feliratkozása?');

// Update and upgrade messages
define('_JNEWS_NO_UPDATES', 'Jelenleg nincs elérheto frissítés.');
define('_JNEWS_VERSION', 'jNews verzió');
define('_JNEWS_NEED_UPDATED', 'Frissítendo fájlok:');
define('_JNEWS_NEED_ADDED', 'Hozzáadandó fájlok:');
define('_JNEWS_NEED_REMOVED', 'Eltávolítandó fájlok:');
define('_JNEWS_FILENAME', 'Fájlnév:');
define('_JNEWS_CURRENT_VERSION', 'Aktuális verzió:');
define('_JNEWS_NEWEST_VERSION', 'Legfrissebb verzió:');
define('_JNEWS_UPDATING', 'Frissítés');
define('_JNEWS_UPDATE_UPDATED_SUCCESSFULLY', 'A fájlok sikeresen frissítve.');
define('_JNEWS_UPDATE_FAILED', 'A frissítés meghiúsult');
define('_JNEWS_ADDING', 'Hozzáadás');
define('_JNEWS_ADDED_SUCCESSFULLY', 'Sikeresen hozzáadva.');
define('_JNEWS_ADDING_FAILED', 'A hozzáadás meghiúsult!');
define('_JNEWS_REMOVING', 'Eltávolítás');
define('_JNEWS_REMOVED_SUCCESSFULLY', 'Sikeresen eltávolítva.');
define('_JNEWS_REMOVING_FAILED', 'Az eltávolítás meghiúsult!');
define('_JNEWS_INSTALL_DIFFERENT_VERSION', 'Másik verzió telepítése');
define('_JNEWS_CONTENT_ADD', 'Tartalom hozzáadás');
define('_JNEWS_UPGRADE_FROM', 'Adatok importálása (névlevél és feliratkozó információ) : ');
define('_JNEWS_UPGRADE_MESS', 'A létezo adatok nincsenek veszélyben.<br />Ez a muvelet csak importálja az adatokat az jNews adatbázisába.');
define('_JNEWS_CONTINUE_SENDING', 'Küldés folytatása');

// jNews message
define('_JNEWS_UPGRADE1', 'Könnyen importálhatja a felhasználókat és a hírleveleket: ');
define('_JNEWS_UPGRADE2', ' az jNewsba a frissítési panelen.');
define('_JNEWS_UPDATE_MESSAGE', 'Elérheto az jNews új verziója! ');
define('_JNEWS_UPDATE_MESSAGE_LINK', 'Kattintson ide a frissítéshez!');
define('_JNEWS_THANKYOU', 'Köszönjük, hogy az jNews-ot, az Ön kommunikációs partnerét választotta!');
define('_JNEWS_NO_SERVER', 'A frissíto szerver nem érheto el, ellenorizze késobb!');
define('_JNEWS_MOD_PUB', 'Az jNews modul még nincs publikálva!');
define('_JNEWS_MOD_PUB_LINK', 'Kattintson ide a publikáláshoz!');
define('_JNEWS_IMPORT_SUCCESS', 'Sikeresen importálva');
define('_JNEWS_IMPORT_EXIST', 'A feliratkozó már az adatbázisban van');

// jNews Install
define('_JNEWS_INSTALL_CONFIG', 'jNews beállítás');
define('_JNEWS_INSTALL_SUCCESS', 'Sikeres telepítés');
define('_JNEWS_INSTALL_ERROR', 'Telepítési hiba');
define('_JNEWS_INSTALL_BOT', 'jNews beépülo (robot)');
define('_JNEWS_INSTALL_MODULE', 'jNews modul');
define('_JNEWS_JAVASCRIPT', 'Figyelem: A Javascript-et engedélyezni kell a megfelelo muködéshez.');
define('_JNEWS_EXPORT_TEXT', 'Az exportált feliratkozók a válaszott listán alapulnak.<br />Feliratkozók exportálása listából');
define('_JNEWS_IMPORT_TIPS', 'Feliratkozók importálása. A fájlban levo tartalomnak az alábbi formátumúnak kell lennie: <br />Name,Email,ReceiveHTML(1/0),<span style="color: rgb(255, 0, 0);">Registered(1/0)</span>');
define('_JNEWS_SUBCRIBER_EXIT', 'már létezo feliratkozó');
define('_JNEWS_GET_STARTED', 'Kattintson ide az indításhoz!');

//News since 1.0.1
define('_JNEWS_WARNING_1011', 'Figyelem: 1011: A frissítés nem muködik, mert a szerver visszautasította.');
define('_JNEWS_SEND_MAIL_FROM_TIPS', 'Válassza ki, melyik email cím jelenjen meg küldoként!');
define('_JNEWS_SEND_MAIL_NAME_TIPS', 'Válassza ki, milyen név jelenjen meg küldoként!');
define('_JNEWS_MAILSENDMETHOD_TIPS', 'Válassza ki milyen levélküldot szeretne jasználni: PHP mail függvény, <span>Sendmail</span> or SMTP szerver.');
define('_JNEWS_SENDMAILPATH_TIPS', 'Ez a levél szerver könyvtára');
define('_JNEWS_LIST_T_TEMPLATE', 'Sablon');
define('_JNEWS_NO_MAILING_ENTERED', 'Nincs levelezés megadva');
define('_JNEWS_NO_LIST_ENTERED', 'Nincs lista megadva');
define('_JNEWS_SENT_MAILING', 'Levelek elküldése');
define('_JNEWS_SELECT_FILE', 'Válasszon egy fájlt: ');
define('_JNEWS_LIST_IMPORT', 'Ellenorizze a listát, amelyhez feliratkozókat szeretne hozzárendelni.');
define('_JNEWS_PB_QUEUE', 'A feliratkozó be lett szúrva de probléma van vele a listához csatolásnál. Ellenorizze manuálisan!');
define('_JNEWS_UPDATE_MESS', '');
define('_JNEWS_UPDATE_MESS1', 'A frissítés erosen ajánlott!');
define('_JNEWS_UPDATE_MESS2', 'Folt és kisebb javítások.');
define('_JNEWS_UPDATE_MESS3', 'Új kiadás.');
define('_JNEWS_UPDATE_MESS5', 'Joomla 1.5 szükséges a frissítéshez.');
define('_JNEWS_UPDATE_IS_AVAIL', ' elérheto!');
define('_JNEWS_NO_MAILING_SENT', 'Nem lett elküldve levél!');
define('_JNEWS_SHOW_LOGIN', 'Bejelentkezési urlap megjelenítése');
define('_JNEWS_SHOW_LOGIN_TIPS', 'Válasszon Igen-t, ha szeretné, hogy a bejelentkezési urlap megjelenjen az jNews webes felületének vezérlopultján, hogy a felhasználók regisztrálhassanak a webhelyen..');
define('_JNEWS_LISTS_EDITOR', 'Lista leíró szerkeszto');
define('_JNEWS_LISTS_EDITOR_TIPS', 'Válasszon Igen-t HTML szövegszerkeszto használatához a a lista leírásának mezojében.');
define('_JNEWS_SUBCRIBERS_VIEW', 'Feliratkozók megtekintése');

//News since 1.0.2
define('_JNEWS_FRONTEND_SETTINGS', 'Webes beállítások');
define('_JNEWS_SHOW_LOGOUT', 'Kijelentkezés gomb megjelenítése');
define('_JNEWS_SHOW_LOGOUT_TIPS', 'Válassza az Igen-t, ha meg akarja jeleníteni a Kijelentkezés gombot az AcaJoom vezérlopult webes felületén.');

//News since 1.0.3 CB integration
define('_JNEWS_CONFIG_INTEGRATION', 'Integráció');
define('_JNEWS_CB_INTEGRATION', 'Community Builder integráció');
define('_JNEWS_INSTALL_PLUGIN', 'Community Builder beépülo (jNews integráció) ');
define('_JNEWS_CB_PLUGIN_NOT_INSTALLED', 'Az jNews beépülo a Community Builderbe még nincs telepítve!');
define('_JNEWS_CB_PLUGIN', 'Listák regisztráláskor');
define('_JNEWS_CB_PLUGIN_TIPS', 'Válassza az Igen-t, ha a levelezo listákat meg akarja jeleníteni a Community Builder regisztrációs urlapján');
define('_JNEWS_CB_LISTS', 'Lista azonosítók');
define('_JNEWS_CB_LISTS_TIPS', 'EZ KÖTELEZO MEZO. Adja meg a listák azonosítóját vesszovel elválasztva, amely ekre a felhasználó feliratkozhat . (0 az összes listát megjeleníti)');
define('_JNEWS_CB_INTRO', 'Bevezeto szöveg');
define('_JNEWS_CB_INTRO_TIPS', 'A lista elott megjeleno szöveg. HAGYJA ÜRESEN, HA NEM AKAR MEGJELENÍTENI SEMMIT!. Használja a cb_pretext-et a CSS-hez!.');
define('_JNEWS_CB_SHOW_NAME', 'Listanév megjelenítése');
define('_JNEWS_CB_SHOW_NAME_TIPS', 'Döntse el, hogy szeretné-e megjeleníteni a listaneveket a bevezeto után!');
define('_JNEWS_CB_LIST_DEFAULT', 'Listák bejelölése alapértelmezésként');
define('_JNEWS_CB_LIST_DEFAULT_TIPS', 'Döntse el, hogy szeretné-e alapértelmezésként bejelölni minden listát!');
define('_JNEWS_CB_HTML_SHOW', 'HTML formátumban?');
define('_JNEWS_CB_HTML_SHOW_TIPS', 'Válassza az Igen-t, ha a felhasználók eldönthetik, hogy szeretnének-e HTML leveleket vagy sem. Állítsa Nem-re, ha alapértelmezésként HTML levelet akar használni!');
define('_JNEWS_CB_HTML_DEFAULT', 'Alapértelmezetten HTML formátumban?');
define('_JNEWS_CB_HTML_DEFAULT_TIPS', 'Állítsa be ezt a lehetoséget az alapértelmezett HTML levelezési beállítások megjelenítéséhez! Ha a HTML formátumban? bejegyzés Nem, akkor ez az opció lesz az alapértelmezett.');

// Since 1.0.4
define('_JNEWS_BACKUP_FAILED', 'A fájlrol nem készítheto biztonsági másolat! A fájl nem került lecserélésre.');
define('_JNEWS_BACKUP_YOUR_FILES', 'A fájlok régebbi verziója mentésre került a következo könyvtárban:');
define('_JNEWS_SERVER_LOCAL_TIME', 'Helyi szerver ido');
define('_JNEWS_SHOW_ARCHIVE', 'Archívum gomb megjelenítése');
define('_JNEWS_SHOW_ARCHIVE_TIPS', 'Válasszon Igen-t a hírlevelek listájának végén az Archívum gomb megjelenítéséhez');
define('_JNEWS_LIST_OPT_TAG', 'Kódok');
define('_JNEWS_LIST_OPT_IMG', 'Képek');
define('_JNEWS_LIST_OPT_CTT', 'Tartalom');
define('_JNEWS_INPUT_NAME_TIPS', 'Adja meg a teljes nevét (a keresztnevével kezdje)!');
define('_JNEWS_IP_TIPS', 'IP of the subscriber' );
define('_JNEWS_INPUT_EMAIL_TIPS', 'Adja meg az email címét! Ellenorizze, hogy ez egy valódi email cím, ha valóban szeretne hírleveletet kapni!');
define('_JNEWS_RECEIVE_HTML_TIPS', 'Válasszon Igen-t, ha HTML hírleveleket szeretne kapni - vagy Nem-et, ha csak szöveges hírleveleket.');
define('_JNEWS_TIME_ZONE_ASK_TIPS', 'Adja meg az idozónáját!');

// Since 1.0.5
define('_JNEWS_FILES', 'Fájlok');
define('_JNEWS_FILES_UPLOAD', 'Feltöltés');
define('_JNEWS_MENU_UPLOAD_IMG', 'Képek feltöltése');
define('_JNEWS_TOO_LARGE', 'A fájl mérete túl nagy. A maximális méret:');
define('_JNEWS_MISSING_DIR', 'A célkönyvtár nem létezik');
define('_JNEWS_IS_NOT_DIR', 'A célkönyvtár nem létezik vagy pedig egy szabályos fájl.');
define('_JNEWS_NO_WRITE_PERMS', 'A célkönyvtáron nincs írási jog.');
define('_JNEWS_NO_USER_FILE', 'Nem válaszotta ki a feltöltendo fájlt!');
define('_JNEWS_E_FAIL_MOVE', 'A fájl nem helyezheto át!');
define('_JNEWS_FILE_EXISTS', 'A célfájl már létezik.');
define('_JNEWS_CANNOT_OVERWRITE', 'A célfájl már létezik vagy nem írható felül.');
define('_JNEWS_NOT_ALLOWED_EXTENSION', 'Nem engedélyezett fájlkiterjesztés.');
define('_JNEWS_PARTIAL', 'A fájl csak részben került feltöltésre.');
define('_JNEWS_UPLOAD_ERROR', 'Feltöltési hiba:');
define('_JNEWS_DEV_NO_DEF_FILE', 'A fájl csak részben került feltöltésre.');

// already exist but modified  added a <br/ on first line and added [SUBSCRIPTIONS] line>
define('_JNEWS_CONTENTREP', '{tag:subscriptions} = Ez lecserélésre kerül a feliratkozási linkekkel. Ez <strong>szükséges</strong> az jNews helyes muködéséhez.<br />Ha bármilyen más tartalmat helyez el ebben a dobozban, ez a lista összes levelezésében meg fog jelenni.<br />Tegye a saját feiratkozási üzeneteit a végére Az jNews automatikusan hozzáadja a feliratkozás megváltoztatásához és a leiratkozáshoz szükséges linkeket.');

// since 1.0.6
define('_JNEWS_NOTIFICATION', 'Értesítés');  // shortcut for Email notification
define('_JNEWS_NOTIFICATIONS', 'Értesítések');
define('_JNEWS_USE_SEF', 'SEF a levelezésben');
define('_JNEWS_USE_SEF_TIPS', 'Ajánlott a nem választása. Ha szeretné, hogy a levelezésben használt URL használja a SEF-et, akkor válassza az igent!<br /><b>A linkek mindegyik opcióhoz ugyanúgy muködnek. Nem biztos, hogy a levelezésben a linkek mindig muködnek, ha megváltozik a SEF.</b> ');
define('_JNEWS_ERR_SETTINGS', 'Hibakezelo beállítások');
define('_JNEWS_ERR_SEND', 'Hiba jelentés küldése');
define('_JNEWS_ERR_SEND_TIPS', 'Ha szeretné, hogy az jNews jobb termékké váljon, válassza az Igen-t! Ez hibajelentést küld a fejlesztoknek. Így nem szükséges hibakutatást végeznie.<br /> <b>SEMMILYEN MAGÁNJELLEGU INFORMÁCIÓNEM KERÜL ELKÜLDÉSRE</b>. Még azt sem fogják tudni, melyik webhelyrol érkezik a hibajelentés. Csak az Acojoomról kapnak informciót, a PHP beállításokról és az SQL lekérdezésekrol. ');
define('_JNEWS_ERR_SHOW_TIPS', 'Válasszon Igen-t a hiba sorszámának megjelenítéséhez a képernyon. Foleg hibakeresésre lehet használni. ');
define('_JNEWS_ERR_SHOW', 'Hibák megjelenítése');
define('_JNEWS_LIST_SHOW_UNSUBCRIBE', 'Leiratkozási linkek megtekintése');
define('_JNEWS_LIST_SHOW_UNSUBCRIBE_TIPS', 'Válasszon Igen-t a leiratkozáso linkek megjelenítéséhez  a levél alján, ahol a felhasználók megváltoztathatják a feliratkozásaikat. <br /> A Nem letiltja a láblécet és a linkeket.');
define('_JNEWS_UPDATE_INSTALL', '<span style="color: rgb(255, 0, 0);">FONTOS MEGJEGYZÉS!</span> <br />Ha korábbi jNews verzióról frissít, frissíteni kell az adatbázis struktúrát is a következo gombra kattintva (az adatok integritása megmarad)');
define('_JNEWS_UPDATE_INSTALL_BTN', 'A táblák és a beállítások frissítése');
define('_JNEWS_MAILING_MAX_TIME', 'Maximális várakozási ido');
define('_JNEWS_MAILING_MAX_TIME_TIPS', 'Megadja azt a maximális idot, ameddig a leveleknek várakozniuk kell asorban. Az ajánlott érték 30 másodperc és 2 perc közöztt van.');

// virtuemart integration beta
define('_JNEWS_VM_INTEGRATION', 'VirtueMart integráció');
define('_JNEWS_VM_COUPON_NOTIF', 'Kupon értesítési azonosító');
define('_JNEWS_VM_COUPON_NOTIF_TIPS', 'Megadja a levelezés azonosítószámát, amit kuponok küldésekor szeretne használni.');
define('_JNEWS_VM_NEW_PRODUCT', 'Új termék értesítés azonosító');
define('_JNEWS_VM_NEW_PRODUCT_TIPS', 'Megadja a levelezés azonosítószámát, amit új termék értesítésnél szeretne használni.');

// since 1.0.8
// create forms for subscriptions
define('_JNEWS_FORM_BUTTON', 'Urlap létrehozása');
define('_JNEWS_FORM_COPY', 'HTML kód');
define('_JNEWS_FORM_COPY_TIPS', 'Másolja a generált HTML kódot a HTML oldalra!');
define('_JNEWS_FORM_LIST_TIPS', 'Válassza ki a listából az urlapba beszúrandó tartalmat!');
// update messages
define('_JNEWS_UPDATE_MESS4', 'Nem frissítheto automatikusan.');
define('_JNEWS_WARNG_REMOTE_FILE', 'Távoli fájl nem érheto el.');
define('_JNEWS_ERROR_FETCH', 'Hiba a fájl elérésekor.');

define('_JNEWS_CHECK', 'Ellenorzés');
define('_JNEWS_MORE_INFO', 'További infó');
define('_JNEWS_UPDATE_NEW', 'Frissítés újabb verzióra');
define('_JNEWS_UPGRADE', 'Frissítés a legfrissebb termékre');
define('_JNEWS_DOWNDATE', 'Visszaállás elozo verzióra');
define('_JNEWS_DOWNGRADE', 'Vissza az alaptermékre');
define('_JNEWS_REQUIRE_JOOM', 'Joomla szükséges');
define('_JNEWS_TRY_IT', 'Próbálja ki!');
define('_JNEWS_NEWER', 'Újabb');
define('_JNEWS_OLDER', 'Régebbi');
define('_JNEWS_CURRENT', 'Aktuális');

// since 1.0.9
define('_JNEWS_CHECK_COMP', 'Próbáljon ki egyet a többi komponens közül!');
define('_JNEWS_MENU_VIDEO', 'Videó bemutatók');
define('_JNEWS_SCHEDULE_TITLE', 'Automatikus idobeállító funkció beállítása');
define('_JNEWS_ISSUE_NB_TIPS', 'A kiadás számának automatikus generálása');
define('_JNEWS_SEL_ALL', 'Összes levelezés');
define('_JNEWS_SEL_ALL_SUB', 'Összes lista');
define('_JNEWS_INTRO_ONLY_TIPS', 'Ha kipipálja ezt a dobozt, csak a cikk bevezeto szövege kerül be a levélbe egy Tovább linkkel.');
define('_JNEWS_TAGS_TITLE', 'Tartalom kód');
define('_JNEWS_TAGS_TITLE_TIPS', 'Vágólapon keresztül tegye ezt a kódot a levél, ahol a tartalmat szeretné elhelyezni.');
define('_JNEWS_PREVIEW_EMAIL_TEST', 'Jelzi az email címet, ahova a tesztet el kell küldeni');
define('_JNEWS_PREVIEW_TITLE', 'Elonézet');
define('_JNEWS_AUTO_UPDATE', 'Új frissítési értesítés');
define('_JNEWS_AUTO_UPDATE_TIPS', 'Válasszon Igen-t, ha szeretne értesítést a komponens frissítésérol! <br />FONTOS! A tippek megjelenítése szükséges ennek afunkciónak a muködéséhez.');

// since 1.1.0
define('_JNEWS_LICENSE', 'Licensz információ');

// since 1.1.1
define('_JNEWS_NEW', 'Új');
define('_JNEWS_SCHEDULE_SETUP', 'Az automatikus válaszoló muködéséhez be kell állítani az idozítot a beállításoknál..');
define('_JNEWS_SCHEDULER', 'Idozíto');
define('_JNEWS_jnews_CRON_DESC', 'ha nincs hozzáférése a webhelyen az idozíto feladat kezelohöz, regisztrálhat egy ingyenes jNews idozítot itt:');
define('_JNEWS_CRON_DOCUMENTATION', 'Az jNews idozíto beállításaihoz további információkat itt talál:');
define('_JNEWS_CRON_DOC_URL', '<a href="http://www.joobi.co/index.php?option=com_content&view=article&id=4249&catid=29&Itemid=72"
 target="_blank">http://www.joobi.co/index.php?option=com_content&Itemid=72&view=category&layout=blog&id=29&limit=60</a>');
define( '_JNEWS_QUEUE_PROCESSED', 'A feladatsor sikeresen feldolgozásra került...');
define( '_JNEWS_ERROR_MOVING_UPLOAD', 'Hiba az importált fájl mozgatása közben');

//since 1.1.2
define( '_JNEWS_SCHEDULE_FREQUENCY', 'Idozíto gyakoriság');
define( '_JNEWS_CRON_MAX_FREQ', 'Idozíto maximális gyakoriság');
define( '_JNEWS_CRON_MAX_FREQ_TIPS', 'Adja meg azt a maximális gykoriságot, amikor az idozíto fut (percekben).  Ez korlázozza az idozítot még akkor is, ha az idozíto feladat gyakorisága ennél rövidebb idore van beállítva.');
define( '_JNEWS_CRON_MAX_EMAIL', 'Feladatonkénti maximális levélszám');
define( '_JNEWS_CRON_MAX_EMAIL_TIPS', 'Megadja meg a feladatonként elküldheto levelek maximális számát. If this is set to O the maximim emails per task will be 1');
define( '_JNEWS_CRON_MINUTES', ' perc');
define( '_JNEWS_SHOW_SIGNATURE', 'Levél lábléc megjelenítése');
define( '_JNEWS_SHOW_SIGNATURE_TIPS', 'Megjelenjen-e az jNews-ot népszerusíto lábléc a levelekben.');
define( '_JNEWS_QUEUE_AUTO_PROCESSED', 'Az automatikus válaszolók feladatai sikeresen feldolgozva...');
define( '_JNEWS_QUEUE_NEWS_PROCESSED', 'Az idozített hírlevelek feldolgozása sikeres...');
define( '_JNEWS_MENU_SYNC_USERS', 'Felhasználók szinkronizásása');
define( '_JNEWS_SYNC_USERS_SUCCESS', 'A felhasználók szinkronizásása sikeres!');

// compatibility with Joomla 15
if (!defined('_BUTTON_LOGOUT')) define( '_BUTTON_LOGOUT', 'Kijelentkezés');
if (!defined('_CMN_YES')) define( '_CMN_YES', 'Igen');
if (!defined('_CMN_NO')) define( '_CMN_NO', 'Nem');
if (!defined('_HI')) define( '_HI', 'Üdvözöljük');
if (!defined('_CMN_TOP')) define( '_CMN_TOP', 'Felül');
if (!defined('_CMN_BOTTOM')) define( '_CMN_BOTTOM', 'Lent');
//if (!defined('_BUTTON_LOGOUT')) define( '_BUTTON_LOGOUT', 'Kijelentkezés');

// For include title only or full article in content item tab in newsletter edit - p0stman911
define('_JNEWS_TITLE_ONLY_TIPS', 'Ha ezt kijelöli, csak a teljes cikkre mutató cikk cím kerül be linkként a levélbe.');
define('_JNEWS_TITLE_ONLY', 'Csak cím');
define('_JNEWS_FULL_ARTICLE_TIPS', 'Ha ezt kijelöli, a levélbe a cikk teljes tartalma bekerül');
define('_JNEWS_FULL_ARTICLE', 'Teljes cikk');
define('_JNEWS_CONTENT_ITEM_SELECT_T', 'Válasszon ki egy tartalmi elemet, amely bekerül a levélba.<br />Vágólapon keresztül helyezze el a <b>tartalom kódot</b> a levélbe!  Választhatja a teljes szöveget, csak a bevezetot vagy csak a címet (0, 1, vagy 2). ');
define('_JNEWS_SUBSCRIBE_LIST2', 'Levelezo listák');

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
define('_JNEWS_AUTONEWS', 'Gyors hírlevél');
define('_JNEWS_MENU_AUTONEWS', 'Gyors hírlevelek');
define('_JNEWS_AUTO_NEWS_OPTION', 'Gyors hírlevél opciók');
define('_JNEWS_AUTONEWS_FREQ', 'Hírlevél gyakoriság');
define('_JNEWS_AUTONEWS_FREQ_TIPS', 'Adja meg azt a gyakoriságot, ami szerint küldeni szeretné a gyors hírleveleket!');
define('_JNEWS_AUTONEWS_SECTION', 'Cikk szekció');
define('_JNEWS_AUTONEWS_SECTION_TIPS', 'Válassza ki a szekciót, amelybol cikket szeretne kijelölni!');
define('_JNEWS_AUTONEWS_CAT', 'Cikk kategória');
define('_JNEWS_AUTONEWS_CAT_TIPS', 'Válassza ki a kategóriát, amelybol cikket szeretne kijelölni (Mind - összes cikk az adott szekcióból)!');
define('_JNEWS_SELECT_SECTION', 'Válasszon szekciót!');
define('_JNEWS_SELECT_CAT', 'Összes kategória');
define('_JNEWS_AUTO_DAY_CH8', 'Negyedévente');
define('_JNEWS_AUTONEWS_STARTDATE', 'Kezdo dátum');
define('_JNEWS_AUTONEWS_STARTDATE_TIPS', 'Adja meg azt a kezdo dátumot, amitol a gyors hírleveleket küldeni szeretné!');
define('_JNEWS_AUTONEWS_TYPE', 'Tartalom összeállítás');// how we see the content which is included in the newsletter
define('_JNEWS_AUTONEWS_TYPE_TIPS', 'Teljes cikk: a teljes cikk bekerül a levélbe<br />' .		'Csak bevezeto: csak a cikk bevezetoje kerül be a levélbe<br/>' .		'Csak cím: csak a cikk címe kerül be a levélbe');
define('_JNEWS_TAGS_AUTONEWS', '[SMARTNEWSLETTER] = Ezt a gyors hírlevél cseréli le.');

//since 1.1.3
define('_JNEWS_MALING_EDIT_VIEW', 'Levelezés létrehozás / megtekintés');
define('_JNEWS_LICENSE_CONFIG', 'Licensz');
define('_JNEWS_ENTER_LICENSE', 'Adja meg a licensz kódot!');
define('_JNEWS_ENTER_LICENSE_TIPS', 'Írja be a licensz kódot és mentse el.');
define('_JNEWS_LICENSE_SETTING', 'Licensz beállítások');
define('_JNEWS_GOOD_LIC', 'Érvényes licensz.');
define('_JNEWS_NOTSO_GOOD_LIC', 'Nem érvényes licensz: ');
define('_JNEWS_PLEASE_LIC', 'Vegye fel a kapcsolatot az jNews támogatóival a licensz frissítése érdekében  ( license@joobi.co ).');
define('_JNEWS_DESC_PLUS', 'Az jNews Plus az elso szekvenciális automatikus válaszoló komponens Joomla rendszerre.  ' . _JNEWS_FEATURES);
define('_JNEWS_DESC_PRO', 'Az jNews PRO egy fejlett hírlevélküldo rendszer Joomla rendszerre.  ' . _JNEWS_FEATURES);

//since 1.1.4
define('_JNEWS_ENTER_TOKEN', 'Adja meg az azonosítót!');

define('_JNEWS_ENTER_TOKEN_TIPS', 'Adja meg azt az azonosítót, amit emailben kapott meg az jNews megvásárlásakor!<br />Ezután mentsen! Az jNews automatikusan kapcsolódik a szerverhez egy licenszszám lekéréséhez.');

define('_JNEWS_jnews_SITE', 'jNews webhely:');
define('_JNEWS_MY_SITE', 'Webhelyem:');

define( '_JNEWS_LICENSE_FORM', ' ' .	'Kattintson ide a licensz urlaphoz ugráshoz!</a>');
define('_JNEWS_PLEASE_CLEAR_LICENSE', 'Törölje a licensz mezot ás próbálja meg újra!<br />Ha a probléma továbba is fennáll, ');

define( '_JNEWS_LICENSE_SUPPORT', 'A még mindig van kérdése, ' . _JNEWS_PLEASE_LIC);

define( '_JNEWS_LICENSE_TWO', 'a Licensz urlapon lekérheti a licenszet kézi módszerrel is az azonosító és a saját webhely URL megadásával (amelyik zöld színnek jelenik meg ennek az oldalnak a felso részén). ' . _JNEWS_LICENSE_FORM . '<br /><br/>' . _JNEWS_LICENSE_SUPPORT);

define('_JNEWS_ENTER_TOKEN_PATIENCE', 'Az azonosító mentése után automatikusan egy licensz kód generálódik. Az azonosító általában 2 percen belül ellenorzésre kerül, de bizonyos esetekben 15 percig is eltarthat..<br /><br />Térjen vissza erre az ellenorzésre néhány perc mulva!<br /><br />Ha nem kap érvényes licensz kódot 15 percen belül, '. _JNEWS_LICENSE_TWO);


define( '_JNEWS_ENTER_NOT_YET', 'A megadott azonosító még nem lett ellenorizve.');
define( '_JNEWS_UPDATE_CLICK_HERE', 'Látogasson el a <a href="http://www.joobi.co" target="_blank">www.joobi.co</a> oldalra a legfrissebb verzió letöltéséhez.');
//define( '_JNEWS_NOTIF_UPDATE', 'Ahhoz, hogy értesüljön az új frissítésekrol, adja meg az email címét és kattintson a Feliratkozás linkre!');

define('_JNEWS_THINK_PLUS', 'Ha többet szeretne kihozni levelezo rendszerébol, gondoljon a Plus verzióra!');
define('_JNEWS_THINK_PLUS_1', 'Szekvenciális automatikus válaszolók');
define('_JNEWS_THINK_PLUS_2', 'Hírlevél idozítése egy elore megadott idopontra!');
define('_JNEWS_THINK_PLUS_3', 'Nincs többé szerver korlát');
define('_JNEWS_THINK_PLUS_4', 'És sok más egyéb...');

//since 1.2.2
define( '_JNEWS_LIST_ACCESS', 'Lista hozzáférés');
define( '_JNEWS_INFO_LIST_ACCESS', 'Adja meg, hogy milyen felhasználócsoportok láthatják és iratkozhatnak fel erre a listára!');
define( 'JNEWS_NO_LIST_PERM', 'Nincs jogosultsága feliratkozni erre a listára!');

//Archive Configuration
 define('_JNEWS_MENU_TAB_ARCHIVE', 'Archívál');
 define('_JNEWS_MENU_ARCHIVE_ALL', 'Mindet archívál');

//Archive Lists
 define('_JNEWS_FREQ_OPT_0', 'Nincs');
 define('_JNEWS_FREQ_OPT_1', 'Hetente');
 define('_JNEWS_FREQ_OPT_2', 'Két hetente');
 define('_JNEWS_FREQ_OPT_3', 'Havonta');
 define('_JNEWS_FREQ_OPT_4', 'Negyed évente');
 define('_JNEWS_FREQ_OPT_5', 'Évente');
 define('_JNEWS_FREQ_OPT_6', 'Egyéb');

define('_JNEWS_DATE_OPT_1', 'Létrehozás dátum');
define('_JNEWS_DATE_OPT_2', 'Módosítás dátum');

define('_JNEWS_ARCHIVE_TITLE', 'Automatikus archíválás gyakoriságának beállítása');
define('_JNEWS_FREQ_TITLE', 'Archíválási gyakoriság');
define('_JNEWS_FREQ_TOOL', 'Adja meg, hogy milyen gyakran arhíválja az Archívum kezelo a webhelye tartalmát!.');
define('_JNEWS_NB_DAYS', 'Napok száma');
define('_JNEWS_NB_DAYS_TOOL', 'Ez csak az Egyéb opcióra vonatkozik! Adja meg a napok számát két archíválás között!');
define('_JNEWS_DATE_TITLE', 'Dátum típus');
define('_JNEWS_DATE_TOOL', 'Adja meg, hogy a létrehozás dátuma vagy a módosítás dátuma alapján archíváljon!');

define('_JNEWS_MAINTENANCE_TAB', 'Karbantartási beállítások');
define('_JNEWS_MAINTENANCE_FREQ', 'Karbantartási gyakoriság');
define( '_JNEWS_MAINTENANCE_FREQ_TIPS', 'Adja meg azt a gyakoriságot, amikor a karbantartási muvelet lefut!');
define( '_JNEWS_CRON_DAYS', 'óra');

define( '_JNEWS_LIST_NOT_AVAIL', 'Jelenleg nincs elérheto lista.');
define( '_JNEWS_LIST_ADD_TAB', 'Hozzáad/szerkeszt');

define( '_JNEWS_LIST_ACCESS_EDIT', 'Levelezés hozzáférés hozzáadás/szerkesztés');
define( '_JNEWS_INFO_LIST_ACCESS_EDIT', 'Adja meg azt a felhasználói csoportot, amely bovítheti vagy szerkesztheti ehhez az listához tartozó levelezéseket!');
define( '_JNEWS_MAILING_NEW_FRONT', 'Új levelezés létrehozás');

define('_JNEWS_AUTO_ARCHIVE', 'Auto-Archívál');
define('_JNEWS_MENU_ARCHIVE', 'Auto-Archívál');

//Extra tags:
define('_JNEWS_TAGS_ISSUE_NB', '{tag:issuenb} = Lecserélodik a hírlevél kiadás számára.');
define('_JNEWS_TAGS_DATE', '{tag:date} = Lecserélodik a küldés dátumára.');
define('_JNEWS_TAGS_CB', '[CBTAG:{field_name}] = Lecserélodik a Community Builder mezojének értékére: pl.: [CBTAG:firstname] ');
define( '_JNEWS_MAINTENANCE', 'Joobi Care');

define('_JNEWS_THINK_PRO', 'Professzionális igényekhez professzionális komponensek!');
define('_JNEWS_THINK_PRO_1', 'Okos hírlevelek');
define('_JNEWS_THINK_PRO_2', 'Adja meg a hozzáférés szintjét a listához!');
define('_JNEWS_THINK_PRO_3', 'Adja meg, hogy ki szerkeszthet/adhat hozzá levelezést!');
define('_JNEWS_THINK_PRO_4', 'További adatok: adja hozzá saját CB mezoit!');
define('_JNEWS_THINK_PRO_5', 'A Joomla tartalmaz Auto-archiválást!');
define('_JNEWS_THINK_PRO_6', 'Adatbázis optimalizálás');

define('_JNEWS_LIC_NOT_YET', 'Az Ön licensze még nem érvényes. Ellenorizze a Licensz fület a konfigurációs panelen!');
define('_JNEWS_PLEASE_LIC_GREEN', 'Ügyeljen, hogy friss és valódi információkat adjon támogató csoportunknak ennek a fülnek a tetején!');

define('_JNEWS_FOLLOW_LINK', 'Licensz kérés');
define( '_JNEWS_FOLLOW_LINK_TWO', 'Kérheti licenszét azonosítója és webhelyének URL-je megadásával (amelyik zöld színnel jelenik meg az oldal tetején) a Licensz urlapban.');
define( '_JNEWS_ENTER_TOKEN_TIPS2', ' Majd kattintson az Alkalmaz gombon a jobb felso menüben!');
define( '_JNEWS_ENTER_LIC_NB', 'Írja be a licenszét!');
define( '_JNEWS_UPGRADE_LICENSE', 'Licensz frissítése');
define( '_JNEWS_UPGRADE_LICENSE_TIPS', 'Ha kapott azonosítót a licensz frissítéséhez, azt itt adja meg, majd kattintson az Alkalmaz gombon és folytassa a <b>2.</b> lépéssel licensz számának lekéréséhez!');

define( '_JNEWS_MAIL_FORMAT', 'Kódolási formátum');
define( '_JNEWS_MAIL_FORMAT_TIPS', 'Milyen kódolási formát szeretne használni levelezéseiben: csak szöveges vagy MIME');
define( '_JNEWS_jnews_CRON_DESC_ALT', 'Ha nincs hozzáférése a webhelyén idozíto kezelohöz, használhatja az ingyenes jCron komponenst az idozítési feladatok megoldására!');

//since 1.3.1
define('_JNEWS_SHOW_AUTHOR', 'A szerzo nevének megjelenítése');
define('_JNEWS_SHOW_AUTHOR_TIPS', 'Válasszon Igen-t, ha a szerzo nevét is el szeretné helyezni a levélbe elhelyezett cikknél!');

//since 1.3.5
define('_JNEWS_REGWARN_NAME', 'Adja meg a nevét!');
define('_JNEWS_REGWARN_MAIL', 'Érvényes email címet adjon meg!');

//since 1.5.6
define('_JNEWS_ADDEMAILREDLINK_TIPS', 'If you select Yes, the e-mail of the user will be added as a parameter at the end of your redirect URL (the redirect link for your module or for an external jNews form).<br/>That can be usefull if you want to execute a special script in your redirect page.');
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
if(!defined('_CMN_SAVE')) define('_CMN_SAVE','Save');
if(!defined('_NO_ACCOUNT')) define('_NO_ACCOUNT','No account yet?');
if(!defined('_CREATE_ACCOUNT')) define('_CREATE_ACCOUNT','Register');
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


