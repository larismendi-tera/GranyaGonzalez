<?php
defined('_JEXEC') or die('Restricted access');
### Copyright (c) 2006-2012 Joobi Limited. All rights reserved.
### license GNU GPLv3 , link http://www.joobi.co

/**
* <p>Romanian language file</p>
* @author Alex Cojocaru <alexcojocaru@gmail.com>
* @version $Id: romanian.php 491 2010-02-03 22:56:07Z chris $
* @link http://www.acajoom.com
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
define('_JNEWS_DESC_CORE', 'jNews este o componentă care oferă funcţionalitatea de listă de mesaje, scrisoare de informare, răspuns automate şi continuare a unei conversaţii, cu scopul de a comunica efectiv cu utilizatorii şi clienţii.  ' .
		'jNews, partenerul tău de comunicare!');
define('_JNEWS_DESC_GPL', 'jNews este o componentă care oferă funcţionalitatea de listă de mesaje, scrisoare de informare, răspuns automate şi continuare a unei conversaţii, cu scopul de a comunica efectiv cu utilizatorii şi clienţii.  ' .
		'jNews, partenerul tău de comunicare!');
define('_JNEWS_FEATURES', 'jNews, partenerul tău de comunicare!');

// Type of lists
define('_JNEWS_NEWSLETTER', 'Scrisoare de informare');
define('_JNEWS_AUTORESP', 'Răspuns automat');
define('_JNEWS_AUTORSS', 'RSS auto');
define('_JNEWS_ECARD', 'eCard');
define('_JNEWS_POSTCARD', 'Carte poştală');
define('_JNEWS_PERF', 'Performantă');
define('_JNEWS_COUPON', 'Cupon');
define('_JNEWS_CRON', 'Job periodic');
define('_JNEWS_MAILING', 'Mesaj');
define('_JNEWS_LIST', 'Listă');

 //jnews Menu
define('_JNEWS_MENU_LIST', 'Liste');
define('_JNEWS_MENU_SUBSCRIBERS', 'Abonaţi');
define('_JNEWS_MENU_NEWSLETTERS', 'Scrisori de informare');
define('_JNEWS_MENU_AUTOS', 'Răspunsuri automate');
define('_JNEWS_MENU_COUPONS', 'Cupoane');
define('_JNEWS_MENU_CRONS', 'Job-uri periodice');
define('_JNEWS_MENU_AUTORSS', 'RSS automat');
define('_JNEWS_MENU_ECARD', 'eCards');
define('_JNEWS_MENU_POSTCARDS', 'Cărţi poştale');
define('_JNEWS_MENU_PERFS', 'Performanţe');
define('_JNEWS_MENU_TAB_LIST', 'Liste');
define('_JNEWS_MENU_MAILING_TITLE', 'Mesaje');
define('_JNEWS_MENU_MAILING' , 'Mesaje pentru ');
define('_JNEWS_MENU_STATS', 'Statistici');
define('_JNEWS_MENU_STATS_FOR', 'Statistici pentru ');
define('_JNEWS_MENU_CONF', 'Configurare');
define('_JNEWS_MENU_UPDATE', 'Import');
define('_JNEWS_MENU_ABOUT', 'Despre');
define('_JNEWS_MENU_LEARN', 'Centru de educare');
define('_JNEWS_MENU_MEDIA', 'Manager Media');
define('_JNEWS_MENU_HELP', 'Ajutor');
define('_JNEWS_MENU_CPANEL', 'CPanel');
define('_JNEWS_MENU_IMPORT', 'Import');
define('_JNEWS_MENU_EXPORT', 'Export');
define('_JNEWS_MENU_SUB_ALL', 'Abonează toţi');
define('_JNEWS_MENU_UNSUB_ALL', 'Dezabonează toţi');
define('_JNEWS_MENU_VIEW_ARCHIVE', 'Arhivă');
define('_JNEWS_MENU_PREVIEW', 'Vizualizează');
define('_JNEWS_MENU_SEND', 'Trimite');
define('_JNEWS_MENU_SEND_TEST', 'Trimite email de test');
define('_JNEWS_MENU_SEND_QUEUE', 'Procesează coada de aşteptare');
define('_JNEWS_MENU_VIEW', 'Vezi');
define('_JNEWS_MENU_COPY', 'Copiază');
define('_JNEWS_MENU_VIEW_STATS' , 'Vezi statisticile');
define('_JNEWS_MENU_CRTL_PANEL' , ' Panoul de control');
define('_JNEWS_MENU_LIST_NEW' , ' Creează o listă');
define('_JNEWS_MENU_LIST_EDIT' , ' Modifică o listă');
define('_JNEWS_MENU_BACK', 'Înapoi');
define('_JNEWS_MENU_INSTALL', 'Instalare');
define('_JNEWS_MENU_TAB_SUM', 'Sumar');
define('_JNEWS_STATUS' , 'Statut');

// messages
define('_JNEWS_ERROR' , ' A apărut o eroare! ');
define('_JNEWS_SUB_ACCESS' , 'Drepturi de acces');
define('_JNEWS_DESC_CREDITS', 'Credite');
define('_JNEWS_DESC_INFO', 'Informaţie');
define('_JNEWS_DESC_HOME', 'Pagina de start');
define('_JNEWS_DESC_MAILING', 'Listă de mesaje');
define('_JNEWS_DESC_SUBSCRIBERS', 'Abonaţi');
define('_JNEWS_PUBLISHED','Publicat');
define('_JNEWS_UNPUBLISHED','Nepublicat');
define('_JNEWS_DELETE','Şterge');
define('_JNEWS_FILTER','Filtrează');
define('_JNEWS_UPDATE','Actualizează');
define('_JNEWS_SAVE','Salvează');
define('_JNEWS_CANCEL','Anulează');
define('_JNEWS_NAME','Nume');
define('_JNEWS_EMAIL','Email');
define('_JNEWS_SELECT','Selectează');
define('_JNEWS_ALL','Toată lista');
define('_JNEWS_SEND_A', 'Trimite o ');
define('_JNEWS_SUCCESS_DELETED', ' şters cu succes');
define('_JNEWS_LIST_ADDED', 'Listă creată cu succes');
define('_JNEWS_LIST_COPY', 'Listă copiată cu succes');
define('_JNEWS_LIST_UPDATED', 'Listă actualizată cu succes');
define('_JNEWS_MAILING_SAVED', 'Mesaj salvat cu succes.');
define('_JNEWS_UPDATED_SUCCESSFULLY', 'actualizată cu succes.');

### Subscribers information ###
//subscribe and unsubscribe info
define('_JNEWS_SUB_INFO', 'Informaţii despre abonat');
define('_JNEWS_VERIFY_INFO', 'Verifică link-ul pe care l-ai trimis, lipsesc informaţii.');
define('_JNEWS_INPUT_NAME', 'Nume');
define('_JNEWS_INPUT_EMAIL', 'Email');
define('_JNEWS_RECEIVE_HTML', 'Primeşte HTML?');
define('_JNEWS_TIME_ZONE', 'Fus orar');
define('_JNEWS_BLACK_LIST', 'Lista neagră');
define('_JNEWS_REGISTRATION_DATE', 'Data de înregistrare a utilizatorului');
define('_JNEWS_USER_ID', 'ID utilizator');
define('_JNEWS_DESCRIPTION', 'Descriere');
define('_JNEWS_ACCOUNT_CONFIRMED', 'Contul tău a fost activat.');
define('_JNEWS_SUB_SUBSCRIBER', 'Abonat');
define('_JNEWS_SUB_PUBLISHER', 'Editor');
define('_JNEWS_SUB_ADMIN', 'Administrator');
define('_JNEWS_REGISTERED', 'Înregistrat');
define('_JNEWS_SUBSCRIPTIONS', 'Subscrieri');
define('_JNEWS_SEND_UNSUBCRIBE', 'Trimite mesaj de dezabonare');
define('_JNEWS_SEND_UNSUBCRIBE_TIPS', 'Click pe Da pentru a trimite un mesaj de confirmare pentru dezabonare.');
define('_JNEWS_SUBSCRIBE_SUBJECT_MESS', 'Confirmă subscrierea');
define('_JNEWS_UNSUBSCRIBE_SUBJECT_MESS', 'Confirmă dezabonarea');
define('_JNEWS_DEFAULT_SUBSCRIBE_MESS', 'Bună {tag:name},<br />' .
		'Mai este necesar încă un pas pentru a completa subscrierea la listă. Click pe link-ul următor pentru a-ţi confirma subscrierea.' .
		'<br /><br />[CONFIRMĂ]<br /><br />Pentru orice întrebare contactează administratorul site-ului.');
define('_JNEWS_DEFAULT_UNSUBSCRIBE_MESS', 'Acesta este un email de confirmare că ai fost dezabonat de la lista noastră. Poţi oricând să te re-abonezi în viitor, vizitând site-ul nostru web.  Dacă ai vreo întrebare contactează administratorul site-ului.');

// jNews subscribers
define('_JNEWS_SIGNUP_DATE', 'Data înregistrării');
define('_JNEWS_CONFIRMED', 'Confirmat');
define('_JNEWS_SUBSCRIB', 'Abonează');
define('_JNEWS_HTML', 'Mesaje HTML');
define('_JNEWS_RESULTS', 'Rezultate');
define('_JNEWS_SEL_LIST', 'Selectează o listă');
define('_JNEWS_SEL_LIST_TYPE', '- Selectează tipul listei -');
define('_JNEWS_SUSCRIB_LIST', 'Lista cu toţi abonaţii');
define('_JNEWS_SUSCRIB_LIST_UNIQUE', 'Abonaţi la : ');
define('_JNEWS_NO_SUSCRIBERS', 'Nu a fost găsit nici un abonat la această listă.');
define('_JNEWS_COMFIRM_SUBSCRIPTION', 'Un email de confirmare ţi-a fost trimis. Verifică-ţi email-ul şi fă click pe link-ul trimis.<br />' .
		'Trebuie să-ţi confirmi adresa de email pentru ca subscrierea să-şi facă efect.');
define('_JNEWS_SUCCESS_ADD_LIST', 'Ai fost adăugat cu succes la listă.');


 // Subcription info
define('_JNEWS_CONFIRM_LINK', 'Click aici pentru a confirma subscrierea');
define('_JNEWS_UNSUBSCRIBE_LINK', 'Click aici pentru a te dezabona de la listă');
define('_JNEWS_UNSUBSCRIBE_MESS', 'Adresa ta de email a fost scoasă din listă');

define('_JNEWS_QUEUE_SENT_SUCCESS' , 'Toate mesajele programate au fost trimise cu succes.');
define('_JNEWS_MALING_VIEW', 'Vezi toate mesajele');
define('_JNEWS_UNSUBSCRIBE_MESSAGE', 'Eşti sigur că vrei să te dezabonezi de la această listă?');
define('_JNEWS_MOD_SUBSCRIBE', 'subscriere');
define('_JNEWS_SUBSCRIBE', 'Subscriere');
define('_JNEWS_UNSUBSCRIBE', 'Dezabonare');
define('_JNEWS_VIEW_ARCHIVE', 'Vezi arhiva');
define('_JNEWS_SUBSCRIPTION_OR', ' sau click aici pentru a-ţi actualiza informaţiile');
define('_JNEWS_EMAIL_ALREADY_REGISTERED', 'Această adresă de email a fost înregistrată deja.');
define('_JNEWS_SUBSCRIBER_DELETED', 'Abonatul a fost şters cu succes.');


### UserPanel ###
 //User Menu
define('_JNEWS_UCP_USER_PANEL', 'Panoul de control Utilizator');
define('_JNEWS_UCP_USER_MENU', 'Meniu utilizator');
define('_JNEWS_UCP_USER_CONTACT', 'Subscrierile mele');
 //jNews Cron Menu
define('_JNEWS_UCP_CRON_MENU', 'Management-ul de job-uri periodice');
define('_JNEWS_UCP_CRON_NEW_MENU', 'Job periodic nou');
define('_JNEWS_UCP_CRON_LIST_MENU', 'Lista de job-uri mele periodice');
 //jNews Coupon Menu
define('_JNEWS_UCP_COUPON_MENU', 'Management-ul de cupoane');
define('_JNEWS_UCP_COUPON_LIST_MENU', 'Lista de cupoane');
define('_JNEWS_UCP_COUPON_ADD_MENU', 'Adaugă un cupon');

### lists ###
// Tabs
define('_JNEWS_LIST_T_GENERAL', 'Descriere');
define('_JNEWS_LIST_T_LAYOUT', 'Aşezare în pagină');
define('_JNEWS_LIST_T_SUBSCRIPTION', 'Subscriere');
define('_JNEWS_LIST_T_SENDER', 'Informaţii expeditor');

define('_JNEWS_LIST_TYPE', 'Tip listă');
define('_JNEWS_LIST_NAME', 'Nume listă');
define('_JNEWS_LIST_ISSUE', 'Ediţia numărul');
define('_JNEWS_LIST_DATE', 'Data de trimitere');
define('_JNEWS_LIST_SUB', 'Subiectul mesajului');
define('_JNEWS_ATTACHED_FILES', 'Fişiere ataşate');
define('_JNEWS_SELECT_LIST', 'Selectează o listă de modificat!');

// Auto Responder box
define('_JNEWS_AUTORESP_ON', 'Tip listă');
define('_JNEWS_AUTO_RESP_OPTION', 'Opţiuni de răspuns automat');
define('_JNEWS_AUTO_RESP_FREQ', 'Abonaţii pot alege frecvenţa');
define('_JNEWS_AUTO_DELAY', 'Întârziere (în zile)');
define('_JNEWS_AUTO_DAY_MIN', 'Frecvenţa minimă');
define('_JNEWS_AUTO_DAY_MAX', 'Frecvenţa maximă');
define('_JNEWS_FOLLOW_UP', 'Specifică răspunsul automat următor');
define('_JNEWS_AUTO_RESP_TIME', 'Abonaţii pot alege ora');
define('_JNEWS_LIST_SENDER', 'Lista de expeditori');

define('_JNEWS_LIST_DESC', 'Descriere listă');
define('_JNEWS_LAYOUT', 'Aşezarea în pagină');
define('_JNEWS_SENDER_NAME', 'Nume expeditor');
define('_JNEWS_SENDER_EMAIL', 'Email expeditor');
define('_JNEWS_SENDER_BOUNCE', 'Adresă de răspuns a expeditorului');
define('_JNEWS_LIST_DELAY', 'Întârziere');
define('_JNEWS_HTML_MAILING', 'Mesaj în format HTML?');
define('_JNEWS_HTML_MAILING_DESC', '(dacă alegi această opţiune, va trebui să salvezi şi să te întorci la acest ecran pentru a vedea modificările.)');
define('_JNEWS_HIDE_FROM_FRONTEND', 'Ascunde în front-end?');
define('_JNEWS_SELECT_IMPORT_FILE', 'Selectează un fişier de importat');;
define('_JNEWS_IMPORT_FINISHED', 'Importul s-a terminat');
define('_JNEWS_DELETION_OFFILE', 'Ştergerea fişierului');
define('_JNEWS_MANUALLY_DELETE', 'a eşuat, trebuie să ştergi fişierul manual');
define('_JNEWS_CANNOT_WRITE_DIR', 'Nu se poate scrie în director');
define('_JNEWS_NOT_PUBLISHED', 'Nu s-a putut trimite mesajul, lista nu este publicată.');

//  List info box
define('_JNEWS_INFO_LIST_PUB', 'Click Da pentru a publica lista');
define('_JNEWS_INFO_LIST_NAME', 'Introdu aici numele listei. Poţi identifica lista cu acest nume.');
define('_JNEWS_INFO_LIST_DESC', 'Introdu o scurtă descriere pentru lista ta. Această descriere va fi vizibilă vizitatorilor site-ului.');
define('_JNEWS_INFO_LIST_SENDER_NAME', 'Introdu numele expeditorului mesajului. Acest nume va fi vizibil când abonaţii primesc mesaje de la această listă.');
define('_JNEWS_INFO_LIST_SENDER_EMAIL', 'Introdu adresa de email de la care vor fi trimise mesajele.');
define('_JNEWS_INFO_LIST_SENDER_BOUNCED', 'Introdu adresa de email la care utilizatori vor putea răspunde. Este recomandat să fie aceeaşi cu adresa de la care vor fi trimise mesajele, în caz contrar filtrele SPAM vor clasifica mesajele ca având un risc mare de a fi SPAM.');
define('_JNEWS_INFO_LIST_AUTORESP', 'Alege tipul mesajului pentru această listă. <br />' .
		'Scrisoare de informare: scrisoare normală de informare<br />' .
		'Răspuns automat: un răspuns automat este o listă care este trimisă automat de către site-ul web la intervale regulate.');
define('_JNEWS_INFO_LIST_FREQUENCY', 'Permite utilizatorului să aleagă cât de des va primi lista. Această opţiune oferă utilizatorului o flexibilitate mai mare.');
define('_JNEWS_INFO_LIST_TIME', 'Permite utilizatorului să aleagă ora preferată din zi la care să primească lista.');
define('_JNEWS_INFO_LIST_MIN_DAY', 'Defineşte frecvenţa minimă cu care un utilizator poate alege să primească lista');
define('_JNEWS_INFO_LIST_DELAY', 'Specifică întârzierea între acest răspuns automat şi cel precedent.');
define('_JNEWS_INFO_LIST_DATE', 'Specifică data la care lista va fi publicată, în cazul în care doreşti ca publicarea să fie întârziată. <br /> FORMAT : YYYY-MM-DD HH:MM:SS');
define('_JNEWS_INFO_LIST_MAX_DAY', 'Defineşte frecvenţa minimă cu care un utilizator poate alege să primească lista');
define('_JNEWS_INFO_LIST_LAYOUT', 'Introdu aranjarea în pagină pentru lista de mesaje. Aici poţi introduce pentru mesaje orice aranjare în pagină.');
define('_JNEWS_INFO_LIST_SUB_MESS', 'Acest mesaj va fi trimis la abonat când el / ea se va înscrie pentru prima dată. Poţi defini aici orice text doreşti să fie trimis.');
define('_JNEWS_INFO_LIST_UNSUB_MESS', 'Acest mesaj va fi trimis la abonat când el / ea se va dezînscrie. Poţi defini aici orice text doreşti să fie trimis.');
define('_JNEWS_INFO_LIST_HTML', 'Bifează checkbox-ul dacă doreşti să trimiţi mesaje în format HTML. Abonaţii vor putea specifica, în momentul în care se abonează la o listă în format HTML, dacă doresc să primească mesajul HTML sau cel în format Text.');
define('_JNEWS_INFO_LIST_HIDDEN', 'Click Da pentru a ascunde lista în front-end, utilizatorii nu se vor putea înscrie, dar tu vrei putea să trimiţi mesaje în continuare.');
define('_JNEWS_INFO_LIST_JNEWS_AUTO_SUB', 'Vrei să abonezi utilizatorii în mod automat la această listă?<br /><B>Utilizatori noi:</B> va abona toţi utilizatorii care se înscriu pe site-ul web.<br /><B>Toţi utilizatorii:</B> va abona toţi utilizatorii înregistraţi din baza de date.<br />(toate aceste opţiuni suportă componenta Community Builder)');
define('_JNEWS_INFO_LIST_ACC_LEVEL', 'Selectează nivelul de acces în front end. Aceasta va ascunde sau arăta lista de mesaje acelor grupuri de utilizatori care nu au acces la ea, astfel încât ei nu se vor putea înscrie.');
define('_JNEWS_INFO_LIST_ACC_USER_ID', 'Selectează nivelul de acces al grupului de utilizatori care au dreptul să facă modificări. Acel grup, precum şi cele de mai sus, vor putea să modifice mesaje şi să le trimită, din front-end sau din back-end.');
define('_JNEWS_INFO_LIST_FOLLOW_UP', 'Dacă doreşti ca modulul de răspuns automat să de mute la altul odată ce a ajuns la ultimul mesaj, îl poţi specifica aici pe următorul.');
define('_JNEWS_INFO_LIST_JNEWS_OWNER', 'Acesta este ID-ul persoanei care a creat lista.');
define('_JNEWS_INFO_LIST_WARNING', '   Această ultimă opţiune este disponibilă doar o singură dată la crearea listei.');
define('_JNEWS_INFO_LIST_SUBJET', ' Subiectul mesajului.  Acesta este subiectul email-ului care va fi primit de abonaţi.');
define('_JNEWS_INFO_MAILING_CONTENT', 'Acesta este conţinutul email-ului pe care vrei să-l trimiţi.');
define('_JNEWS_INFO_MAILING_NOHTML', 'Introdu aici conţinutul email-ului pe care vrei să-l trimiţi abonaţilor ce au ales să primească doar mesaje non-HTML. <BR/> NOTĂ: daca laşi acest câmp gol, jNews va converti automat conţinutul HTML în conţinut text.');
define('_JNEWS_INFO_MAILING_VISIBLE', 'Click Da pentru a arăta mesajul în front-end.');
define('_JNEWS_INSERT_CONTENT', 'Introdu conţinut ce există deja');

// Coupons
define('_JNEWS_SEND_COUPON_SUCCESS', 'Cuponul a fost trimis cu succes!');
define('_JNEWS_CHOOSE_COUPON', 'Alege un cupon');
define('_JNEWS_TO_USER', ' acestui utilizator');

### Cron options
//drop down frequency(CRON)
define('_JNEWS_FREQ_CH1', 'în fiecare oră');
define('_JNEWS_FREQ_CH2', 'La fiecare 6 ore');
define('_JNEWS_FREQ_CH3', 'La fiecare 12 ore');
define('_JNEWS_FREQ_CH4', 'Zilnic');
define('_JNEWS_FREQ_CH5', 'Săptămânal');
define('_JNEWS_FREQ_CH6', 'Lunar');
define('_JNEWS_FREQ_NONE', 'Nu');
define('_JNEWS_FREQ_NEW', 'Utilizatori noi');
define('_JNEWS_FREQ_ALL', 'Toţi utilizatorii');

//Label CRON form
define('_JNEWS_LABEL_FREQ', 'jNews Cron?');
define('_JNEWS_LABEL_FREQ_TIPS', 'Click Da dacă doreşti să foloseşti această opţiune pentru un jNews Cron, Nu pentru orice alt job cron.<br />' .
		'Dacă faci click pe Da nu trebuie să specifici adresa Cron, ea va fi adăugată automat.');
define('_JNEWS_SITE_URL' , 'Adresa URL a site-ului tău');
define('_JNEWS_CRON_FREQUENCY' , 'Frecvenţa CRON');
define('_JNEWS_STARTDATE_FREQ' , 'Data de început');
define('_JNEWS_LABELDATE_FREQ' , 'Specifică data');
define('_JNEWS_LABELTIME_FREQ' , 'Specifică ora');
define('_JNEWS_CRON_URL', 'URL Cron');
define('_JNEWS_CRON_FREQ', 'Frecvenţa');
define('_JNEWS_TITLE_CRONLIST', 'Lista Cron');
define('_JNEWS_NEW_LIST', 'Creează o listă nouă');

//title CRON form
define('_JNEWS_TITLE_FREQ', 'Modifică Cron');
define('_JNEWS_CRON_SITE_URL', 'Introdu un URL valid de site, care începe http://');

### Mailings ###
define('_JNEWS_MAILING_ALL', 'Toate mesajele');
define('_JNEWS_EDIT_A', 'Modifică un ');
define('_JNEWS_SELCT_MAILING', 'Selectează o listă din meniul drop down pentru a putea adăuga un mesaj nou.');
define('_JNEWS_VISIBLE_FRONT', 'Vizibil în front-end');

// mailer
define('_JNEWS_SUBJECT', 'Subiect');
define('_JNEWS_CONTENT', 'Conţinut');
define('_JNEWS_NAMEREP', '{tag:name} = Acest text va fi înlocuit cu numele abonatului introdus, folosind acest text vei putea trimite email personalizat.<br />');
define('_JNEWS_FIRST_NAME_REP', '{tag:firstname} = Acest text va fi înlocuit cu prenumele abonatului introdus.<br />');
define('_JNEWS_NONHTML', 'Versiune Non-HTML');
define('_JNEWS_ATTACHMENTS', 'Ataşamente');
define('_JNEWS_SELECT_MULTIPLE', 'Ţine apăsată tasta CTRL (sau command) pentru a selecta ataşamente multiple.<br />' .
		'Fisierele afisate în această listă de ataşamente se află în directorul de ataşamente; poţi modifică această locaţie în panoul de configurare.');
define('_JNEWS_CONTENT_ITEM', 'Element de conţinut');
define('_JNEWS_SENDING_EMAIL', 'Se trimite email');
define('_JNEWS_MESSAGE_NOT', 'Mesajul nu a putut fi trimis');
define('_JNEWS_MAILER_ERROR', 'Eroare la trimitere');
define('_JNEWS_MESSAGE_SENT_SUCCESSFULLY', 'Mesajul a fost trimis cu succes');
define('_JNEWS_SENDING_TOOK', 'Trimiterea acestui mesaj a durat');
define('_JNEWS_SECONDS', 'secunde');
define('_JNEWS_NO_ADDRESS_ENTERED', 'Nu a fost furnizată nici o adresă de email sau nici un abonat');
define('_JNEWS_CHANGE_SUBSCRIPTIONS', 'Modifică');
define('_JNEWS_CHANGE_EMAIL_SUBSCRIPTION', 'Modifică opţiunile de subscriere');
define('_JNEWS_WHICH_EMAIL_TEST', 'Introdu adresa de email la care să fie trimis un mesaj de test sau selectează vizualizare');
define('_JNEWS_SEND_IN_HTML', 'Trimite în format HTML (pentru mesaje HTML)?');
define('_JNEWS_VISIBLE', 'Vizibil');
define('_JNEWS_INTRO_ONLY', 'Doar introducerea');

// stats
define('_JNEWS_GLOBALSTATS', 'Statistici globale');
define('_JNEWS_DETAILED_STATS', 'Statistici detaliate');
define('_JNEWS_MAILING_LIST_DETAILS', 'Lista detalii');
define('_JNEWS_SEND_IN_HTML_FORMAT', 'Trimite în format HTML');
define('_JNEWS_VIEWS_FROM_HTML', 'Vizualizări (de la mesajele HTML)');
define('_JNEWS_SEND_IN_TEXT_FORMAT', 'Trimite în format text');
define('_JNEWS_HTML_READ', 'HTML citit');
define('_JNEWS_HTML_UNREAD', 'HTML necitit');
define('_JNEWS_TEXT_ONLY_SENT', 'doar text');

// Configuration panel
// main tabs
define('_JNEWS_MAIL_CONFIG', 'Email');
define('_JNEWS_LOGGING_CONFIG', 'Log şi statistici');
define('_JNEWS_SUBSCRIBER_CONFIG', 'Abonaţi');
define('_JNEWS_MISC_CONFIG', 'Diverse');
define('_JNEWS_MAIL_SETTINGS', 'Setări mesaje');
define('_JNEWS_MAILINGS_SETTINGS', 'Setări liste de trimitere');
define('_JNEWS_SUBCRIBERS_SETTINGS', 'Setări abonaţi');
define('_JNEWS_CRON_SETTINGS', 'Setări Cron');
define('_JNEWS_SENDING_SETTINGS', 'Setări trimitere');
define('_JNEWS_STATS_SETTINGS', 'Setări statistici');
define('_JNEWS_LOGS_SETTINGS', 'Setări log');
define('_JNEWS_MISC_SETTINGS', 'Setări diverse');
// mail settings
define('_JNEWS_SEND_MAIL_FROM', 'De la adresa de email');
define('_JNEWS_SEND_MAIL_NAME', 'De la numele');
define('_JNEWS_MAILSENDMETHOD', 'Metoda de trimitere');
define('_JNEWS_SENDMAILPATH', 'Calea către Sendmail');
define('_JNEWS_SMTPHOST', 'Adresa server SMTP');
define('_JNEWS_SMTPAUTHREQUIRED', 'Autentificare SMTP necesară');
define('_JNEWS_SMTPAUTHREQUIRED_TIPS', 'Selectează da dacă serverul SMTP necesită autentificare');
define('_JNEWS_SMTPUSERNAME', 'Nume de utilizator pentru serverul SMTP');
define('_JNEWS_SMTPUSERNAME_TIPS', 'Introdu numele de utilizator pentru SMTP în cazul în care serverul SMTP necesită autentificare');
define('_JNEWS_SMTPPASSWORD', 'Parola pentru serverul SMTP');
define('_JNEWS_SMTPPASSWORD_TIPS', 'Introdu parola pentru SMTP în cazul în care serverul SMTP necesită autentificare');
define('_JNEWS_USE_EMBEDDED', 'Foloseşte imagini inserate în corpul mesajului');
define('_JNEWS_USE_EMBEDDED_TIPS', 'Selectează da dacă imaginile din elementele de conţinut ataşate trebuie să fie introduse în corpul mesajelor HTML, sau nu pentru a folosi tag-uri implicite de imagine care fac legătura la imaginile de pe site.');
define('_JNEWS_UPLOAD_PATH', 'Calea de navigare pentru upload / ataşamente');
define('_JNEWS_UPLOAD_PATH_TIPS', 'Poţi specifica un director de upload.<br />' .
		'Asigură-te că directorul specificat există, în caz contrar creează-l.');

// subscribers settings
define('_JNEWS_ALLOW_UNREG', 'Permite utilizatorii neînregistraţi');
define('_JNEWS_ALLOW_UNREG_TIPS', 'Selectează Da dacă vrei să permiţi utilizatorilor să se aboneze la liste fără a fi înregistraţi pe site.');
define('_JNEWS_REQ_CONFIRM', 'Necesită confirmare');
define('_JNEWS_REQ_CONFIRM_TIPS', 'Selectează Da dacă doreşti ca abonaţii neînregistraţi să-şi confirme adresa de email.');
define('_JNEWS_SUB_SETTINGS', 'Setări de subscriere');
define('_JNEWS_SUBMESSAGE', 'Email de abonat');
define('_JNEWS_SUBSCRIBE_LIST', 'Abonează la o listă');

define('_JNEWS_USABLE_TAGS', 'Tag-uri ce pot fi folosite');
define('_JNEWS_NAME_AND_CONFIRM', '<b>{tag:confirm}</b> = Acest tag va crea un link cu care abonatul îşi poate confirma subscrierea. Este <strong>necesar</strong> pentru ca jNews să funcţioneze corect.<br />'
.'<br />{tag:name} = Acest tag va fi înlocuit cu numele abonatului, cu acest tag vei trimite email personalizat.<br />'
.'<br />{tag:firstname} = Acest tag va fi înlocuit cu prenumele abonatului; prenumele este DEFINIT ca prenumele introdus de abonat.<br />');
define('_JNEWS_CONFIRMFROMNAME', 'Confirmare de la numele');
define('_JNEWS_CONFIRMFROMNAME_TIPS', 'Introdu numele de afişat în listele de confirmare.');
define('_JNEWS_CONFIRMFROMEMAIL', 'Confirmare de la email');
define('_JNEWS_CONFIRMFROMEMAIL_TIPS', 'Introdu adresa de email de afişat în listele de confirmare.');
//define('_JNEWS_CONFIRMBOUNCE', 'Adresa de răspuns');
//define('_JNEWS_CONFIRMBOUNCE_TIPS', 'Introdu adresa de răspuns de afişat în listele de confirmare.');
define('_JNEWS_HTML_CONFIRM', 'Confirmă HTML');
define('_JNEWS_HTML_CONFIRM_TIPS', 'Selectează da dacă listele de confirmare trebuie să fie în format HTML, dacă utilizatorul permite HTML.');
define('_JNEWS_TIME_ZONE_ASK', 'Întreabă care este fusul orar');
define('_JNEWS_TIME_ZONE_TIPS', 'Selectează da dacă vrei ca utilizatorul să fie întrebat despre fusul orar. Mesajele în coada de procesare vor fi trimise funcţie de fusul orar, acolo unde este cazul');

 // Cron Set up
 define('_JNEWS_AUTO_CONFIG', 'Cron');
define('_JNEWS_TIME_OFFSET_URL', 'click aici pentru a seta decalajul orar în panoul de configurare globala -> tab-ul Localizare');
define('_JNEWS_TIME_OFFSET_TIPS', 'Setează decalajul orar al serverului astfel încât data şi ora înregistrate să fie exacte');
define('_JNEWS_TIME_OFFSET', 'Decalaj orar');
define('_JNEWS_CRON_DESC','<br />Folosind funcţia cron poţi configura un job automat pentru site-ul tău web!<br />' .
		'Pentru configurare trebuie să adaugi în panoul de control crontab următoarea comandă:<br />' .
		'<b>' . JNEWS_JPATH_LIVE . '/index.php?option=com_jnews&act=cron</b> ' .
		'<br /><br />Dacă ai nevoie de ajutor pentru configurare sau dacă ai probleme, consultă forumul nostru la adresa <a href="http://www.acajoom.com" target="_blank">http://www.acajoom.com</a>');
// sending settings
define('_JNEWS_PAUSEX', 'Întrerupe x secunde fiecare volum configurat de email-uri');
define('_JNEWS_PAUSEX_TIPS', 'Introdu un număr de secunde pentru care jNews va aştepta serverul SMTP să efectueze trimiterea, înainte de a trece la următorul volum de mesaje.');
define('_JNEWS_EMAIL_BET_PAUSE', 'Email-uri între pauze');
define('_JNEWS_EMAIL_BET_PAUSE_TIPS', 'Numărul de email-uri de trimis înainte de a face o pauză.');
define('_JNEWS_WAIT_USER_PAUSE', 'Aşteaptă comanda utilizatorului la pauză');
define('_JNEWS_WAIT_USER_PAUSE_TIPS', 'Dacă scriptul trebuie să aştepte ca utilizatorul să dea comanda de continuare atunci când este oprit între seturile de mesaje.');
define('_JNEWS_SCRIPT_TIMEOUT', 'Timpul de executare pentru script');
define('_JNEWS_SCRIPT_TIMEOUT_TIPS', 'Numărul de minute permis scriptului să ruleze (0 pentru nelimitat).');
// Stats settings
define('_JNEWS_ENABLE_READ_STATS', 'Activează statisticile de citire');
define('_JNEWS_ENABLE_READ_STATS_TIPS', 'Selectează da daca vrei să ţii un log al numărului de vizualizări. Această tehnică poate fi folosită doar cu mesaje HTML');
define('_JNEWS_LOG_VIEWSPERSUB', 'Ţine un log de vizualizări per abonat');
define('_JNEWS_LOG_VIEWSPERSUB_TIPS', 'Selectează da daca vrei să ţii un log de vizualizări pentru fiecare abonat. Această tehnică poate fi folosită doar cu mesaje HTML');
// Logs settings
define('_JNEWS_DETAILED', 'Log detaliat');
define('_JNEWS_SIMPLE', 'Log simplu');
define('_JNEWS_DIAPLAY_LOG', 'Afişează log');
define('_JNEWS_DISPLAY_LOG_TIPS', 'Selectează daca dacă vrei ca informaţiile din log să fie afişate cât timp se trimit mesajele.');
define('_JNEWS_SEND_PERF_DATA', 'Trimite datele despre performanţă');
define('_JNEWS_SEND_PERF_DATA_TIPS', 'Selectează da dacă vrei să permiţi componentei jNews să trimită rapoarte ANONIME despre configuraţia ta, numărul de abonaţi la o listă şi timpul necesar pentru a trimite mesajele. Aceasta ne va da o idee despre performanţa componentei şi NE VA AJUTA să îmbunătăţim jNews în versiunile următoare.');
define('_JNEWS_SEND_AUTO_LOG', 'Trimite log pentru auto-răspuns');
define('_JNEWS_SEND_AUTO_LOG_TIPS', 'Selectează da dacă doreşti să trimiţi un email cu log, de fiecare dată când coada de mesaje este procesată. ATENŢIE: aceasta poate rezulta într-un număr mare de email-uri.');
define('_JNEWS_SEND_LOG', 'Trimite log');
define('_JNEWS_SEND_LOG_TIPS', 'Dacă informaţiile de log pentru mesaj trebuie trimis sau nu prin email la adresa de email a utilizatorului care a efectuat trimiterea.');
define('_JNEWS_SEND_LOGDETAIL', 'Trimite log în detaliu');
define('_JNEWS_SEND_LOGDETAIL_TIPS', 'Detaliile includ informaţii despre succesul / eşecul trimiterii la fiecare abonat şi sumarul informaţiilor. Log simplu trimite doar sumarul.');
define('_JNEWS_SEND_LOGCLOSED', 'Trimite log dacă conexiunea a fost închisă');
define('_JNEWS_SEND_LOGCLOSED_TIPS', 'Cu această opţiune activată, utilizatorul care a efectuat trimiterea va primi totuşi un raport prin email.');
define('_JNEWS_SAVE_LOG', 'Salvează log');
define('_JNEWS_SAVE_LOG_TIPS', 'Dacă un log al trimiterii trebuie sau nu să fie adăugat la fişierul de log.');
define('_JNEWS_SAVE_LOGDETAIL', 'Salvează detalii log');
define('_JNEWS_SAVE_LOGDETAIL_TIPS', 'Detaliile includ informaţii despre succesul / eşecul trimiterii la fiecare abonat şi sumarul informaţiilor. Log simplu trimite doar sumarul.');
define('_JNEWS_SAVE_LOGFILE', 'Salvează fişierul de log');
define('_JNEWS_SAVE_LOGFILE_TIPS', 'Fişierul la care sunt adăugate informaţii de log. Acest fişier poate deveni foarte mare.');
define('_JNEWS_CLEAR_LOG', 'Şterge log');
define('_JNEWS_CLEAR_LOG_TIPS', 'Şterge fişierul de log.');

### control panel
define('_JNEWS_CP_LAST_QUEUE', 'Ultima coadă de procesare executată');
define('_JNEWS_CP_TOTAL', 'Total');
define('_JNEWS_MAILING_COPY', 'Mesajul copiat cu succes!');

// Miscellaneous settings
define('_JNEWS_SHOW_GUIDE', 'Afişează ghidul');
define('_JNEWS_SHOW_GUIDE_TIPS', 'Afişează ghidul la început pentru a ajuta utilizatorii noi să creeze mesaje, auto-răspunsuri şi să configureze corect jNews.');
define('_JNEWS_AUTOS_ON', 'Foloseşte modulul de auto-răspuns');
define('_JNEWS_AUTOS_ON_TIPS', 'Selectează Nu dacă nu doreşti să foloseşti modulul de răspuns automat, toate opţiunile acestui modul vor fi dezactivate.');
define('_JNEWS_NEWS_ON', 'Foloseşte scrisori de informare');
define('_JNEWS_NEWS_ON_TIPS', 'Selectează Nu dacă nu doreşti să foloseşti scrisori de informare, toate opţiunile pentru scrisori de informare vor fi dezactivate.');
define('_JNEWS_SHOW_TIPS', 'Arată indicaţiile (tips)');
define('_JNEWS_SHOW_TIPS_TIPS', 'Arată indicaţiile pentru a ajuta utilizatorii să utilizeze jNews mai eficient.');
define('_JNEWS_SHOW_FOOTER', 'Arată notă de subsol');
define('_JNEWS_SHOW_FOOTER_TIPS', 'Dacă trebuie afişată sau nu nota de subsol cu informaţia de drept de autor.');
define('_JNEWS_SHOW_LISTS', 'Arată listele în front-end');
define('_JNEWS_SHOW_LISTS_TIPS', 'Când utilizatorul nu este înregistrat, afişează o listă cu toate listele de mesaje la care se pot abona, cu buton de arhivă sau o formă de autentificare ca să se poată înregistra.');
define('_JNEWS_CONFIG_UPDATED', 'Detaliile configurării au fost actualizate!');
define('_JNEWS_UPDATE_URL', 'Actualizează URL');
define('_JNEWS_UPDATE_URL_WARNING', 'ATENŢIE! Nu modifica acest URL decât dacă echipa tehnică jNews te-a rugat să faci asta.<br />');
define('_JNEWS_UPDATE_URL_TIPS', 'De exemplu: http://www.acajoom.com/update/ (include caracterul slash de final)');

// module
define('_JNEWS_EMAIL_INVALID', 'Email-ul introdus este invalid.');
define('_JNEWS_REGISTER_REQUIRED', 'Înregistrează-te pe site înainte de a te abona la o listă.');

// Access level box
define('_JNEWS_OWNER', 'Autorul listei:');
define('_JNEWS_ACCESS_LEVEL', 'Setează nivelul de acces pentru această listă');
define('_JNEWS_ACCESS_LEVEL_OPTION', 'Opţiuni pentru nivelul de acces');
define('_JNEWS_USER_LEVEL_EDIT', 'Selectează nivelul utilizatorilor care au dreptul să modifice un mesaj (din front-end sau back-end) ');

//  drop down options
define('_JNEWS_AUTO_DAY_CH1', 'Zilnic');
define('_JNEWS_AUTO_DAY_CH2', 'Zilnic, fără weekend');
define('_JNEWS_AUTO_DAY_CH3', 'Orice altă zi');
define('_JNEWS_AUTO_DAY_CH4', 'Orice altă zi, fără weekend');
define('_JNEWS_AUTO_DAY_CH5', 'Săptămânal');
define('_JNEWS_AUTO_DAY_CH6', 'Bi-săptămânal');
define('_JNEWS_AUTO_DAY_CH7', 'Lunar');
define('_JNEWS_AUTO_DAY_CH9', 'Anual');
define('_JNEWS_AUTO_OPTION_NONE', 'Nu');
define('_JNEWS_AUTO_OPTION_NEW', 'Utilizatori noi');
define('_JNEWS_AUTO_OPTION_ALL', 'Toţi utilizatorii');

//
define('_JNEWS_UNSUB_MESSAGE', 'Email de dezabonare');
define('_JNEWS_UNSUB_SETTINGS', 'Setări de dezabonare');
define('_JNEWS_AUTO_ADD_NEW_USERS', 'Abonează automat utilizatorii?');

// Update and upgrade messages
define('_JNEWS_NO_UPDATES', 'Nu există momentan actualizări disponibile.');
define('_JNEWS_VERSION', 'Versiunea jNews');
define('_JNEWS_NEED_UPDATED', 'Fişierele care trebuie actualizate:');
define('_JNEWS_NEED_ADDED', 'Fişierele care trebuie adăugate:');
define('_JNEWS_NEED_REMOVED', 'Fişierele care trebuie şterse:');
define('_JNEWS_FILENAME', 'Nume fişier:');
define('_JNEWS_CURRENT_VERSION', 'Versiunea curentă:');
define('_JNEWS_NEWEST_VERSION', 'Versiunea nouă:');
define('_JNEWS_UPDATING', 'Se actualizează');
define('_JNEWS_UPDATE_UPDATED_SUCCESSFULLY', 'Fişierele au fost actualizate cu succes.');
define('_JNEWS_UPDATE_FAILED', 'Actualizarea a eşuat!');
define('_JNEWS_ADDING', 'Se adaugă');
define('_JNEWS_ADDED_SUCCESSFULLY', 'S-a adăugat cu succes.');
define('_JNEWS_ADDING_FAILED', 'Adăugarea a eşuat!');
define('_JNEWS_REMOVING', 'Se şterge');
define('_JNEWS_REMOVED_SUCCESSFULLY', 'S-a şters cu succes.');
define('_JNEWS_REMOVING_FAILED', 'Ştergerea a eşuat!');
define('_JNEWS_INSTALL_DIFFERENT_VERSION', 'Instalează o versiune diferită');
define('_JNEWS_CONTENT_ADD', 'Adaugă conţinut');
define('_JNEWS_UPGRADE_FROM', 'Importă date (scrisori de informare şi informaţii abonaţi) din ');
define('_JNEWS_UPGRADE_MESS', 'Nu există riscuri pentru datele existente. <br /> Acest proces doar va importa datele în baza de date jNews.');
define('_JNEWS_CONTINUE_SENDING', 'Continuă trimiterea');

// jNews message
define('_JNEWS_UPGRADE1', 'Poţi importa uşor utilizatorii şi scrisorile de intenţie din ');
define('_JNEWS_UPGRADE2', ' în jNews în panoul de actualizări.');
define('_JNEWS_UPDATE_MESSAGE', 'O nouă versiune jNews este disponibilă! ');
define('_JNEWS_UPDATE_MESSAGE_LINK', 'Click aici pentru actualizare!');
define('_JNEWS_THANKYOU', 'Vă mulţumit pentru că aţi ales jNews, partenerul tău de comunicare!');
define('_JNEWS_NO_SERVER', 'Serverul de actualizare nu este disponibil, încearcă mai târziu.');
define('_JNEWS_MOD_PUB', 'Modulul jNews nu este publicat.');
define('_JNEWS_MOD_PUB_LINK', 'Click aici pentru a-l publica!');
define('_JNEWS_IMPORT_SUCCESS', 'importat cu succes');
define('_JNEWS_IMPORT_EXIST', 'abonatul există deja în baza de date');

// jNews Install
define('_JNEWS_INSTALL_CONFIG', 'Configurare jNews');
define('_JNEWS_INSTALL_SUCCESS', 'Instalare cu succes');
define('_JNEWS_INSTALL_ERROR', 'Eroare la instalare');
define('_JNEWS_INSTALL_BOT', 'Plugin jNews (Bot)');
define('_JNEWS_INSTALL_MODULE', 'Modul jNews');
//Others
define('_JNEWS_JAVASCRIPT','!Atenţie! Funcţia Javascript trebuie activată pentru o instalare corectă.');
define('_JNEWS_EXPORT_TEXT','Exportul abonaţilor este bazat pe lista pe care ai ales-o. <br />Exportă abonaţii listei');
define('_JNEWS_IMPORT_TIPS','Importă abonaţii. Informaţiile din fisier trebuie respecte următorul format: <br />' .
		'Nume,email,primeşteHTML(1/0),<span style="color: rgb(255, 0, 0);">confirmat(1/0)</span>');
define('_JNEWS_SUBCRIBER_EXIT', 'este deja abonat');
define('_JNEWS_GET_STARTED', 'Click aici pentru a începe!');

//News since 1.0.1
define('_JNEWS_WARNING_1011','Atenţie: 1011: Actualizarea nu va funcţiona datorită restricţiilor de pe server.');
define('_JNEWS_SEND_MAIL_FROM_TIPS', 'Alege ce adresă de email va fi arătată ca expeditor.');
define('_JNEWS_SEND_MAIL_NAME_TIPS', 'Alege ce nume va fi arătată ca expeditor.');
define('_JNEWS_MAILSENDMETHOD_TIPS', 'Alege ce funcţie de trimis email vrei să foloseşti: funcţia PHP, <span>Sendmail</span> sau server SMTP.');
define('_JNEWS_SENDMAILPATH_TIPS', 'Acesta este directorul serverului de Email');
define('_JNEWS_LIST_T_TEMPLATE', 'Model');
define('_JNEWS_NO_MAILING_ENTERED', 'Nu a fost ales nici un mesaj');
define('_JNEWS_NO_LIST_ENTERED', 'Nu a fost aleasă nici o listă');
define('_JNEWS_SENT_MAILING' , 'Mesaje trimise');
define('_JNEWS_SELECT_FILE', 'Selectează un fişier pentru ');
define('_JNEWS_LIST_IMPORT', 'Bifează lista(ele) la care vrei să asociezi abonaţii.');
define('_JNEWS_PB_QUEUE', 'Abonatul a fost introdus, dar au apărut probleme la conectarea lui la listă(e). Verifică manual.');
define('_JNEWS_UPDATE_MESS' , '');
define('_JNEWS_UPDATE_MESS1' , 'Actualizare foarte recomandată!');
define('_JNEWS_UPDATE_MESS2' , 'Mici actualizări.');
define('_JNEWS_UPDATE_MESS3' , 'Versiune nouă.');
define('_JNEWS_UPDATE_MESS5' , 'Joomla 1.5 este necesar pentru actualizare.');
define('_JNEWS_UPDATE_IS_AVAIL' , ' este disponibil!');
define('_JNEWS_NO_MAILING_SENT', 'Nu s-au trimis mesaje!');
define('_JNEWS_SHOW_LOGIN', 'Arată forma de autentificare');
define('_JNEWS_SHOW_LOGIN_TIPS', 'Selectează Da pentru a afişa o forma de autentificare în panoul de control jNews din front-end astfel încât utilizatorii să se poată înregistra pe site.');
define('_JNEWS_LISTS_EDITOR', 'Editor pentru descrierea listei');
define('_JNEWS_LISTS_EDITOR_TIPS', 'Selectează Da pentru a folosi un editor HTML pentru editarea câmpului descriere al listei.');
define('_JNEWS_SUBCRIBERS_VIEW', 'Vezi abonaţii');

//News since 1.0.2
define('_JNEWS_FRONTEND_SETTINGS' , 'Setări de front-end' );
define('_JNEWS_SHOW_LOGOUT', 'Arată butonul de ieşire');
define('_JNEWS_SHOW_LOGOUT_TIPS', 'Selectează Da pentru a arăta butonul de ieşire în panoul de control jNews din front-end.');

//News since 1.0.3 CB integration
define('_JNEWS_CONFIG_INTEGRATION', 'Integrare');
define('_JNEWS_CB_INTEGRATION', 'Integrare cu Community Builder');
define('_JNEWS_INSTALL_PLUGIN', 'Plugin Community Builder (Integrare jNews) ');
define('_JNEWS_CB_PLUGIN_NOT_INSTALLED', 'Plugin-ul jNews pentru Community Builder nu este încă instalat!');
define('_JNEWS_CB_PLUGIN', 'Liste la înregistrare');
define('_JNEWS_CB_PLUGIN_TIPS', 'Selectează Da pentru a arăta listele de email în forma de înregistrare a componentei Community Builder');
define('_JNEWS_CB_LISTS', 'ID-uri liste');
define('_JNEWS_CB_LISTS_TIPS', 'ACESTA ESTE UN CÂMP OBLIGATORIU. Introdu ID_urile listelor la care utilizatorii se vor putea înscrie, separate prin virgulă , (0 pentru a arăta toate listele)');
define('_JNEWS_CB_INTRO', 'Text introducere');
define('_JNEWS_CB_INTRO_TIPS', 'Un text ce apare înaintea listei. LASĂ CÂMPUL GOL PENTRU A NU AFIŞA NIMIC.  Poţi folosi tag-uri HTML pentru customizare.');
define('_JNEWS_CB_SHOW_NAME', 'Arată numele listei');
define('_JNEWS_CB_SHOW_NAME_TIPS', 'Selectează dacă numele listei trebuie afişat după introducere sau nu.');
define('_JNEWS_CB_LIST_DEFAULT', 'Bifează implicit lista');
define('_JNEWS_CB_LIST_DEFAULT_TIPS', 'Selectează dacă vrei sau nu ca controlul check box al fiecărei liste să fie bifat implicit.');
define('_JNEWS_CB_HTML_SHOW', 'Arată opţiunea de primire în format HTML');
define('_JNEWS_CB_HTML_SHOW_TIPS', 'Selectează Da pentru a permite utilizatorilor să aleagă dacă vor să primească sau nu email-uri în format HTML. Selectează nu dacă vrei să foloseşti opţiunea implicită de primire în format HTML.');
define('_JNEWS_CB_HTML_DEFAULT', 'Primire implicită în format HTML');
define('_JNEWS_CB_HTML_DEFAULT_TIPS', 'Selectează această opţiune pentru a afişa configurarea implicită de mesaj HTML. Dacă este setată la Nu, atunci această opţiune va fi cea implicită.');

// Since 1.0.4
define('_JNEWS_BACKUP_FAILED', 'Nu s-a putut face backup la fişier! Fişierul nu a fost înlocuit.');
define('_JNEWS_BACKUP_YOUR_FILES', 'S-a făcut backup la versiunea veche a fişierelor în următorul director:');
define('_JNEWS_SERVER_LOCAL_TIME', 'Ora locală a serverului');
define('_JNEWS_SHOW_ARCHIVE', 'Arată butonul de arhivare');
define('_JNEWS_SHOW_ARCHIVE_TIPS', 'Selectează DA pentru a arăta butonul de arhivare în front-end în lista scrisorilor de informare');
define('_JNEWS_LIST_OPT_TAG', 'Tag-uri');
define('_JNEWS_LIST_OPT_IMG', 'Imagini');
define('_JNEWS_LIST_OPT_CTT', 'Conţinut');
define('_JNEWS_INPUT_NAME_TIPS', 'Introdu numele complet (prenumele înainte)');
define('_JNEWS_IP_TIPS', 'IP of the subscriber' );
define('_JNEWS_INPUT_EMAIL_TIPS', 'Introdu adresa de email (Dacă nu este validă nu vrei primi mesajele noastre.)');
define('_JNEWS_RECEIVE_HTML_TIPS', 'Alege Da dacă vrei să primeşti mesaje în format HTML - Nu pentru a primi doar mesaje în format Text');
define('_JNEWS_TIME_ZONE_ASK_TIPS', 'Specifică fusul orar.');

// Since 1.0.5
define('_JNEWS_FILES' , 'Fişiere');
define('_JNEWS_FILES_UPLOAD' , 'Upload');
define('_JNEWS_MENU_UPLOAD_IMG' , 'Upload imagini');
define('_JNEWS_TOO_LARGE' , 'Dimensiunea fişierului este prea mare. Dimensiunea maximă permisă este de');
define('_JNEWS_MISSING_DIR' , 'Directorul destinaţie nu există');
define('_JNEWS_IS_NOT_DIR' , 'Directorul destinaţie nu există sau este un fisier.');
define('_JNEWS_NO_WRITE_PERMS' , 'Directorul destinaţie nu are drepturi de scriere.');
define('_JNEWS_NO_USER_FILE' , 'Nu ai selectat nici un fişier pentru upload.');
define('_JNEWS_E_FAIL_MOVE' , 'Nu s-a putut muta fişierul.');
define('_JNEWS_FILE_EXISTS' , 'Fişierul destinaţie există deja.');
define('_JNEWS_CANNOT_OVERWRITE' , 'Fişierul destinaţie există deja şi nu s-a putut suprascrie.');
define('_JNEWS_NOT_ALLOWED_EXTENSION' , 'Extensia fişierului nu este permisă.');
define('_JNEWS_PARTIAL' , 'Fişierul a fost upload-at doar parţial.');
define('_JNEWS_UPLOAD_ERROR' , 'Eroare la upload:');
define('_JNEWS_DEV_NO_DEF_FILE' , 'Fişierul a fost upload-at doar parţial.');

// already exist but modified  added a <br/ on first line and added [SUBSCRIPTIONS] line>
define('_JNEWS_CONTENTREP', '{tag:subscriptions} = Acest tag va fi înlocuit cu link-urile de subscriere.' .
		' Este <strong>recomandat</strong> pentru ca jNews să funcţioneze corect.<br />' .
		'Dacă introduci orice alt text în această componentă, el va fi afişat în toate mesajele corespunzătoare acestei liste.' .
		' <br />Adaugă mesajul de subscriere la sfârşit. jNews va adăuga automat un link pentru a permite abonatului să-şi modifice informaţiile şi un link pentru a permite dezabonarea de la listă.');

// since 1.0.6
define('_JNEWS_NOTIFICATION', 'Notificare');  // shortcut for Email notification
define('_JNEWS_NOTIFICATIONS', 'Notificări');
define('_JNEWS_USE_SEF', 'SEF în mesaje');
define('_JNEWS_USE_SEF_TIPS', 'Este recomandat să alegi nu. Dacă totuşi vrei ca URL-ul inclus în mesaje să folosească SEF, atunci alege Da.' .
		' <br /><b>Link-urile vor funcţiona la fel în orice variantă. Opţiunea Nu va asigura că link-urile din mesaje vor funcţiona întotdeauna, chiar dacă modifici funcţionalitatea SEF.</b> ');
define('_JNEWS_ERR_NB' , 'Eroare #: ERR');
define('_JNEWS_ERR_SETTINGS', 'Eroare în timpul procesării setărilor');
define('_JNEWS_ERR_SEND' ,'Raportează eroarea');
define('_JNEWS_ERR_SEND_TIPS' ,'Dacă vrei ca jNews să fie un produs mai bun, alege DA. Aceasta ne va trimite un raport al erorii, astfel încât nu va mai fi nevoie să raportezi bug-uri ;-) <br /> <b>NU SE VOR TRIMITE INFORMAŢII CONFIDENŢIALE</b>.  Nu vom şti nici măcar de la ce site web primim eroarea. Se vor trimite doar informaţii despre jNews, configurarea PHP şi query-uri SQL. ');
define('_JNEWS_ERR_SHOW_TIPS' ,'Alege Da pentru a afişa numărul erorii pe ecran, folosit în principal pentru debuging. ');
define('_JNEWS_ERR_SHOW' ,'Afişează erorile');
define('_JNEWS_LIST_SHOW_UNSUBCRIBE', 'Afişează link-urile de dezabonare');
define('_JNEWS_LIST_SHOW_UNSUBCRIBE_TIPS', 'Selectează Da pentru a afişa link-urile de dezabonare la sfârşitul mesajelor, pentru a permite utilizatorilor să-şi modifice subscrierea. <br /> Selectează Nu pentru a dezactiva nota de subsol şi link-urile.');
define('_JNEWS_UPDATE_INSTALL', '<span style="color: rgb(255, 0, 0);">NOTĂ IMPORTANTĂ!</span> <br />Dacă actualizezi de la o versiune jNews anterioară, trebuie să actualizezi structura bazei de date făcând click pe următorul buton (Datele tale nu vor fi afectate)');
define('_JNEWS_UPDATE_INSTALL_BTN' , 'Actualizează tabelele şi configurarea');
define('_JNEWS_MAILING_MAX_TIME', 'Timpul maxim pentru coada de aşteptare' );
define('_JNEWS_MAILING_MAX_TIME_TIPS', 'Defineşte timpul maxim pentru fiecare set de email-uri trimis de coada de aşteptare. Valoarea recomandată este între 30s şi 2min.');

// virtuemart integration beta
define('_JNEWS_VM_INTEGRATION', 'Integrare cu VirtueMart');
define('_JNEWS_VM_COUPON_NOTIF', 'ID de notificare cupon');
define('_JNEWS_VM_COUPON_NOTIF_TIPS', 'Specifică ID-ul mesajului pe care vrei să-l foloseşti pentru a trimite cupoane cumpărătorilor');
define('_JNEWS_VM_NEW_PRODUCT', 'ID de notificare pentru produse noi');
define('_JNEWS_VM_NEW_PRODUCT_TIPS', 'Specifică ID-ul mesajului pe care vrei să-l foloseşti pentru a trimite notificări despre produse noi.');

// since 1.0.8
// create forms for subscriptions
define('_JNEWS_FORM_BUTTON', 'Creează forma');
define('_JNEWS_FORM_COPY', 'Cod HTML');
define('_JNEWS_FORM_COPY_TIPS', 'Copiază codul HTML generate în pagina ta HTML.');
define('_JNEWS_FORM_LIST_TIPS', 'Selectează lista pe care doreşti s-o incluzi în formă');
// update messages
define('_JNEWS_UPDATE_MESS4' , 'Nu poate fi actualizată automat.');
define('_JNEWS_WARNG_REMOTE_FILE' , 'Nu s-a putut transfera fişierul extern.');
define('_JNEWS_ERROR_FETCH' , 'Nu s-a putut citi fişierul.');

define('_JNEWS_CHECK' , 'Verifică');
define('_JNEWS_MORE_INFO' , 'Mai multe informaţii');
define('_JNEWS_UPDATE_NEW' , 'Actualizează la versiunea mai nouă');
define('_JNEWS_UPGRADE' , 'Actualizează la produsul mai performant');
define('_JNEWS_DOWNDATE' , 'Înapoi la versiunea anterioară');
define('_JNEWS_DOWNGRADE' , 'Înapoi la produsul de bază');
define('_JNEWS_REQUIRE_JOOM' , 'Joomla este necesară');
define('_JNEWS_TRY_IT' , 'Încearcă!');
define('_JNEWS_NEWER', 'Mai nouă');
define('_JNEWS_OLDER', 'Mai veche');
define('_JNEWS_CURRENT', 'Curentă');

// since 1.0.9
define('_JNEWS_CHECK_COMP', 'Încearcă una din celelalte componente');
define('_JNEWS_MENU_VIDEO' , 'Ghiduri video de configurare');
define('_JNEWS_SCHEDULE_TITLE', 'Setări pentru scheduler automat');
define('_JNEWS_ISSUE_NB_TIPS' , 'Numărul mesajului generat automat de sistem' );
define('_JNEWS_SEL_ALL' , 'Toate mesajele');
define('_JNEWS_SEL_ALL_SUB' , 'Toate listele');
define('_JNEWS_INTRO_ONLY_TIPS' , 'Dacă bifezi această căsuţa, doar introducerea articolului va fi inserată în mesaj, cu un link \'Citeşte mai mult\' la articolul complet de pe site-ul tău.' );
define('_JNEWS_TAGS_TITLE' , 'Tag-ul de conţinut');
define('_JNEWS_TAGS_TITLE_TIPS' , 'Copiază acest tag în mesajul care vrei să includă acest conţinut.');
define('_JNEWS_PREVIEW_EMAIL_TEST', 'Indică adresa de email la care să se trimită un email de test');
define('_JNEWS_PREVIEW_TITLE' , 'Vizualizează');
define('_JNEWS_AUTO_UPDATE' , 'Notificare pentru actualizare disponibilă');
define('_JNEWS_AUTO_UPDATE_TIPS' , 'Selectează Da dacă vrei să fii anunţat despre actualizările disponibile la această componentă. <br />IMPORTANT!! Opţiunea de afişare a indicaţiilor (tips) trebuie să fie activată pentru ca această opţiune să funcţioneze.');

// since 1.1.0
define('_JNEWS_LICENSE' , 'Informaţii despre licenţă');

// since 1.1.1
define('_JNEWS_NEW' , 'Nouă');
define('_JNEWS_SCHEDULE_SETUP', 'Pentru ca răspunsurile automate să fie trimise trebuie să configurezi scheduler-ul în panoul de configurare.');
define('_JNEWS_SCHEDULER', 'Scheduler');
define('_JNEWS_jnews_CRON_DESC' , 'dacă nu ai acces la un manager de job-uri cron pe site-ul tău web, te poţi înregistra pentru un cont jNews Cron gratuit la:' );
define('_JNEWS_CRON_DOCUMENTATION' , 'Pentru a afla mai multe informaţii despre configurarea Scheduler-ului jNews, du-te la următorul url:');
define('_JNEWS_CRON_DOC_URL' , '<a href="http://www.acajoom.com/index.php?option=com_content&task=blogcategory&id=29"
 target="_blank">http://www.acajoom.com/index.php?option=com_content&task=blogcategory&id=29</a>' );
define( '_JNEWS_QUEUE_PROCESSED' , 'Coada de aşteptare a fost procesată cu succes...' );
define( '_JNEWS_ERROR_MOVING_UPLOAD' , 'Eroare la mutarea fişierului importat' );

//since 1.1.4
define( '_JNEWS_SCHEDULE_FREQUENCY' , 'Frecvenţă scheduler' );
define( '_JNEWS_CRON_MAX_FREQ' , 'Frecvenţă maximă scheduler' );
define( '_JNEWS_CRON_MAX_FREQ_TIPS' , 'Specifică frecventa maximă la care poate rula scheduler-ul ( în minute ).  Aceasta va limita scheduler-ul chiar dacă task-ul cron este setat mai des.' );
define( '_JNEWS_CRON_MAX_EMAIL' , 'Numărul maxim de email-uri pe fiecare job' );
define( '_JNEWS_CRON_MAX_EMAIL_TIPS' , 'Specifică numărul maxim de email-uri care să fie trimis de fiecare job. If this is set to O the maximim emails per task will be 1' );
define( '_JNEWS_CRON_MINUTES' , ' minute' );
define( '_JNEWS_SHOW_SIGNATURE' , 'Afişează nota de subsol în email-uri' );
define( '_JNEWS_SHOW_SIGNATURE_TIPS' , 'Alege dacă jNews va fi promovat în nota de subsol din email-uri.' );
define( '_JNEWS_QUEUE_AUTO_PROCESSED' , 'Răspunsurile automate au fost procesate cu succes...' );
define( '_JNEWS_QUEUE_NEWS_PROCESSED' , 'Scrisorile de informare programate au fost procesate cu succes...' );
define( '_JNEWS_MENU_SYNC_USERS' , 'Sincronizează utilizatorii' );
define( '_JNEWS_SYNC_USERS_SUCCESS' , 'Sincronizarea utilizatorilor a avut succes!' );

// compatibility with Joomla 15
if (!defined('_BUTTON_LOGOUT')) define( '_BUTTON_LOGOUT', 'Ieşire' );
if (!defined('_CMN_YES')) define( '_CMN_YES', 'Da' );
if (!defined('_CMN_NO')) define( '_CMN_NO', 'Nu' );
if (!defined('_HI')) define( '_HI', 'Bună' );
if (!defined('_CMN_TOP')) define( '_CMN_TOP', 'Sus' );
if (!defined('_CMN_BOTTOM')) define( '_CMN_BOTTOM', 'Jos' );
//if (!defined('_BUTTON_LOGOUT')) define( '_BUTTON_LOGOUT', 'Ieşire' );

// For include title only or full article in content item tab in newsletter edit - p0stman911
define('_JNEWS_TITLE_ONLY_TIPS' , 'Dacă selectezi această opţiune, doar titlul articolului va fi inserat în mesaj ca link la articolul complet de pe site-ul tău.');
define('_JNEWS_TITLE_ONLY' , 'Doar titlul');
define('_JNEWS_FULL_ARTICLE_TIPS' , 'Dacă selectezi această opţiune tot articolul va fi inserat în mesaj');
define('_JNEWS_FULL_ARTICLE' , 'Tot articolul');
define('_JNEWS_CONTENT_ITEM_SELECT_T', 'Selectează un element de conţinut care să fie adăugat la mesaj. <br />Copiază <b>tag-ul de conţinut</b> în mesaj.  Poţi alege textul complet, doar introducerea sau doar titlul (0, 1 sau 2). ');
define('_JNEWS_SUBSCRIBE_LIST2', 'Listă(e) de mesaje');

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
define('_JNEWS_AUTONEWS', 'Scrisoare de informare inteligentă');
define('_JNEWS_MENU_AUTONEWS', 'Scrisori de informare inteligente');
define('_JNEWS_AUTO_NEWS_OPTION', 'Opţiuni pentru scrisoare de informare inteligentă');
define('_JNEWS_AUTONEWS_FREQ', 'Frecvenţa scrisorii de informare');
define('_JNEWS_AUTONEWS_FREQ_TIPS', 'Specifică frecvenţa la care vrei să se trimită scrisoarea de informare inteligentă.');
define('_JNEWS_AUTONEWS_SECTION', 'Secţiunea articolelor');
define('_JNEWS_AUTONEWS_SECTION_TIPS', 'Specifică secţiunea din care vrei să se aleagă articole.');
define('_JNEWS_AUTONEWS_CAT', 'Categoria articolelor');
define('_JNEWS_AUTONEWS_CAT_TIPS', 'Specifică categoria din care vrei să se aleagă articole (Toate pentru toate articolele din această secţiune).');
define('_JNEWS_SELECT_SECTION', 'Selectează o secţiune');
define('_JNEWS_SELECT_CAT', 'Toate categoriile');
define('_JNEWS_AUTO_DAY_CH8', 'Trimestrial');
define('_JNEWS_AUTONEWS_STARTDATE', 'Data de început');
define('_JNEWS_AUTONEWS_STARTDATE_TIPS', 'Specifică data la care vrei să se înceapă trimiterea de scrisori de informare inteligente.');
define('_JNEWS_AUTONEWS_TYPE', 'Afişare conţinut');// how we see the content which is included in the newsletter
define('_JNEWS_AUTONEWS_TYPE_TIPS', 'Articol complet: va include articolul complet în scrisoarea de informare.<br />' .
		'Doar introducerea: va include doar introducerea articolului în scrisoarea de informare.<br/>' .
		'Doar titlul: va include doar titlul articolului în scrisoarea de informare.');
define('_JNEWS_TAGS_AUTONEWS', '[SMARTNEWSLETTER] = Acest tag va fi înlocuit de scrisoarea de informare inteligentă.' );

//since 1.1.3
define('_JNEWS_MALING_EDIT_VIEW', 'Creează / Vezi mesaje');
define('_JNEWS_LICENSE_CONFIG' , 'Licenţa' );
define('_JNEWS_ENTER_LICENSE' , 'Introdu licenţa');
define('_JNEWS_ENTER_LICENSE_TIPS' , 'Introdu codul din licenţă şi salvează-l.');
define('_JNEWS_LICENSE_SETTING' , 'Setări licenţă' );
define('_JNEWS_GOOD_LIC' , 'Licenţa ta este validă.' );
define('_JNEWS_NOTSO_GOOD_LIC' , 'Licenţa ta nu este validă: ' );
define('_JNEWS_PLEASE_LIC' , 'Contactează suportul jNews pentru a-ţi actualiza licenţa ( license@acajoom.com ).' );
define('_JNEWS_DESC_PLUS', 'jNews Plus este prima componentă de răspuns automat secvenţial pentru Joomla CMS.  ' . _JNEWS_FEATURES );
define('_JNEWS_DESC_PRO', 'jNews PRO sistemul complet de mesaje pentru Joomla CMS.  ' . _JNEWS_FEATURES );

//since 1.1.4
define('_JNEWS_ENTER_TOKEN' , 'Introdu codul');

define('_JNEWS_ENTER_TOKEN_TIPS' , 'Introdu codul pe care l-ai primit prin email când ai cumpărat jNews. ');

define('_JNEWS_jnews_SITE', 'Site-ul jNews:');
define('_JNEWS_MY_SITE', 'Site-ul meu:');

define( '_JNEWS_LICENSE_FORM' , ' ' .
 		'Click aici pentru a merge la forma pentru licenţă.</a>' );
define('_JNEWS_PLEASE_CLEAR_LICENSE' , 'Goleşte câmpul de licenţă şi apoi încearcă din nou.<br />  Dacă problema persistă, ' );

define( '_JNEWS_LICENSE_SUPPORT' , 'Dacă ai probleme în continuare, ' . _JNEWS_PLEASE_LIC );

define( '_JNEWS_LICENSE_TWO' , 'poţi să obţii manual licenţa introducând codul si URL-ul site-ului (care este evidenţiat în verde în partea de sus a paginii) în forma pentru licenţă. '
			. _JNEWS_LICENSE_FORM . '<br /><br/>' . _JNEWS_LICENSE_SUPPORT );

define('_JNEWS_ENTER_TOKEN_PATIENCE', 'După ce salvezi codul o licenţă va fi generată automat. ' .
		' De obicei codul este validat în 2 minute, dar câteodată poate dura mai mult, până la 15 minute.<br />' .
		'<br />Verifică din nou acest panou de control în câteva minute.  <br /><br />' .
		'Dacă nu ai primit o licenţă validă în 15 minute, '. _JNEWS_LICENSE_TWO);


define( '_JNEWS_ENTER_NOT_YET' , 'Codul tău nu a fost validat încă.');
define( '_JNEWS_UPDATE_CLICK_HERE' , 'Vizitează <a href="http://www.acajoom.com" target="_blank">www.acajoom.com</a> pentru a descărca ultima versiune.');
//define( '_JNEWS_NOTIF_UPDATE' , 'Pentru a fi notificat despre ultimele actualizări introdu adresa de email şi click pe subscrie ');

define('_JNEWS_THINK_PLUS', 'Dacă vrei mai multe de la sistemul tău de mesaje, poţi încerca varianta Plus!');
define('_JNEWS_THINK_PLUS_1', 'Răspunsuri automate secvenţiale');
define('_JNEWS_THINK_PLUS_2', 'Programează trimiterea scrisorilor tale de informare la o dată predefinită');
define('_JNEWS_THINK_PLUS_3', 'Nu mai există limitări pe server');
define('_JNEWS_THINK_PLUS_4', 'şi multe altele...');

//since 1.2.2
define( '_JNEWS_LIST_ACCESS', 'Accesul la listă' );
define( '_JNEWS_INFO_LIST_ACCESS', 'Specifică ce grup de utilizatori poate vedea şi se poate abona la această listă' );
define( 'JNEWS_NO_LIST_PERM', 'Nu ai dreptul să te abonezi la această listă' );

//Archive Configuration
 define('_JNEWS_MENU_TAB_ARCHIVE', 'Arhivează');
 define('_JNEWS_MENU_ARCHIVE_ALL', 'Arhivează totul');

//Archive Lists
 define('_JNEWS_FREQ_OPT_0', 'Nimic');
 define('_JNEWS_FREQ_OPT_1', 'Fiecare săptămână');
 define('_JNEWS_FREQ_OPT_2', 'Fiecare 2 săptămâni');
 define('_JNEWS_FREQ_OPT_3', 'Fiecare lună');
 define('_JNEWS_FREQ_OPT_4', 'Fiecare trimestru');
 define('_JNEWS_FREQ_OPT_5', 'Fiecare an');
 define('_JNEWS_FREQ_OPT_6', 'Altă modalitate');

define('_JNEWS_DATE_OPT_1', 'Data creării');
define('_JNEWS_DATE_OPT_2', 'Data modificării');

define('_JNEWS_ARCHIVE_TITLE', 'Setarea frecvenţei de auto-arhivare');
define('_JNEWS_FREQ_TITLE', 'Frecvenţa de arhivare');
define('_JNEWS_FREQ_TOOL', 'Defineşte cât de des vrei ca Managerul de arhive să arhiveze conţinutul site-ului tău web.');
define('_JNEWS_NB_DAYS', 'Numărul de zile');
define('_JNEWS_NB_DAYS_TOOL', 'Acesta este valabilă doar pentru opţiunea \'Altă modalitate\'! Specifică numărul de zile între arhive.');
define('_JNEWS_DATE_TITLE', 'Tipul datei');
define('_JNEWS_DATE_TOOL', 'Alege dacă vrei ca arhivarea să fie făcută la data creării sau data modificării.');

define('_JNEWS_MAINTENANCE_TAB', 'Setări de întreţinere');
define('_JNEWS_MAINTENANCE_FREQ', 'Frecvenţa întreţinerii');
define( '_JNEWS_MAINTENANCE_FREQ_TIPS', 'Specifică frecvenţa la care vrei să ruleze rutina de întreţinere.' );
define( '_JNEWS_CRON_DAYS' , 'oră(e)' );

define( '_JNEWS_LIST_NOT_AVAIL', 'Nici o listă nu este disponibilă.');
define( '_JNEWS_LIST_ADD_TAB', 'Adaugă / Modifică' );

define( '_JNEWS_LIST_ACCESS_EDIT', 'Acces la adăugare / modificare mesaj' );
define( '_JNEWS_INFO_LIST_ACCESS_EDIT', 'Specifică ce grup de utilizatori poate adăuga sau modifică un mesaj la această listă' );
define( '_JNEWS_MAILING_NEW_FRONT', 'Creează un mesaj nou' );

define('_JNEWS_AUTO_ARCHIVE', 'Auto-arhivare');
define('_JNEWS_MENU_ARCHIVE', 'Auto-arhivare');

//Extra tags:
define('_JNEWS_TAGS_ISSUE_NB', '{tag:issuenb} = Acest tag va fi înlocuit cu numărul ediţiei scrisorii de informare.');
define('_JNEWS_TAGS_DATE', '{tag:date} = Acest tag va fi înlocuit cu data trimiterii.');
define('_JNEWS_TAGS_CB', '[CBTAG:{field_name}] = Acest tag va fi înlocuit cu valoarea din câmpul Community Builder: cum ar fi [CBTAG:firstname] ');
define( '_JNEWS_MAINTENANCE', 'Întreţinere' );

define('_JNEWS_THINK_PRO', 'Când ai nevoie de ajutor profesional, foloseşte componente profesionale!');
define('_JNEWS_THINK_PRO_1', 'Scrisori de informare inteligente');
define('_JNEWS_THINK_PRO_2', 'Defineşte nivelul de acces pentru lista ta');
define('_JNEWS_THINK_PRO_3', 'Defineşte cine poate adăuga / modifica mesaje');
define('_JNEWS_THINK_PRO_4', 'Mai multe tag-uri: adaugă câmpurile tale CB');
define('_JNEWS_THINK_PRO_5', 'Auto arhivare conţinut Joomla');
define('_JNEWS_THINK_PRO_6', 'Optimizare baza de date');

define('_JNEWS_LIC_NOT_YET', 'Licenţa ta nu este încă validă.  Verifică Tab-ul de licenţă în panoul de configurare.');
define('_JNEWS_PLEASE_LIC_GREEN' , 'Echipa noastră de suport are nevoie de toate informaţiile marcate cu verde în partea de sus a tab-ului.' );

define('_JNEWS_FOLLOW_LINK' , 'Primeşte-ţi licenţa');
define( '_JNEWS_FOLLOW_LINK_TWO' , 'Poţi să-ţi primeşti licenţa introducând codul şi URL-ul site-ului (care este marcat cu verde în partea de sus a paginii) în forma de Licenţă. ');
define( '_JNEWS_ENTER_TOKEN_TIPS2', ' Apoi click pe butonul Trimite în meniul din dreapta sus.' );
define( '_JNEWS_ENTER_LIC_NB', 'Introdu licenţa ta' );
define( '_JNEWS_UPGRADE_LICENSE', 'Actualizează licenţa');
define( '_JNEWS_UPGRADE_LICENSE_TIPS' , 'Dacă ai primit un cod pentru a-ţi actualiza licenţa, introdu-l aici, click pe Trimite si apoi treci la numărul <b>2</b> pentru a primi noul număr de licenţă.' );

define( '_JNEWS_MAIL_FORMAT', 'Format de encodare' );
define( '_JNEWS_MAIL_FORMAT_TIPS', 'Ce format vrei să foloseşti pentru a encoda mesajele, doar Text sau MIME' );
define( '_JNEWS_jnews_CRON_DESC_ALT', 'Dacă nu ai acces la un manager de job-uri periodice pe site-ul tău web, poţi folosi componenta gratuită jCron pentru a crea un job periodic pentru site-ul tău web.' );

//since 1.3.1
define('_JNEWS_SHOW_AUTHOR', 'Afişează numele Autorului');
define('_JNEWS_SHOW_AUTHOR_TIPS', 'Selectează Da dacă doreşti să adaugi numele autorului când adaugi un articol într-un mesaj');

//since 1.3.5
define('_JNEWS_REGWARN_NAME','Introdu numele tău.');
define('_JNEWS_REGWARN_MAIL','Introdu o adresă validă de email.');

//since 1.5.6
define('_JNEWS_ADDEMAILREDLINK_TIPS','Dacă selectezi Da, email-ul utilizatorului va fi adăugat ca parametru la sfârşitul URL-ului de redirectare (link-ul de redirectare pentru modulul tău sau pentru o formă externă jNews).<br/>Această opţiune poate fi folositoare dacă doreşti să execuţi un script special în pagina de redirectare.');
define('_JNEWS_ADDEMAILREDLINK','Adaugă email-ul la link-ul de redirectare');

//since 1.6.3
define('_JNEWS_ITEMID','Id element');
define('_JNEWS_ITEMID_TIPS','Acest id va fi adăugat la link-urile tale jNews.');

//since 1.6.5
define('_JNEWS_SHOW_JCALPRO','jCalPRO');
define('_JNEWS_SHOW_JCALPRO_TIPS','Afişează tab-ul de integrare jCalPRO <br/>(doar dacă componenta jCalPRO este instalată pe site-ul tău web!)');
define('_JNEWS_JCALTAGS_TITLE','Tag jCalPRO:');
define('_JNEWS_JCALTAGS_TITLE_TIPS','Copiază acest tag în mesajul în care vrei să adaugi evenimentul.');
define('_JNEWS_JCALTAGS_DESC','Descriere:');
define('_JNEWS_JCALTAGS_DESC_TIPS','Selectează Da dacă doreşti să introduci descrierea evenimentului');
define('_JNEWS_JCALTAGS_START','Data de start:');
define('_JNEWS_JCALTAGS_START_TIPS','Selectează Da dacă doreşti să introduci data de start a evenimentului');
define('_JNEWS_JCALTAGS_READMORE','Citeşte mai mult:');
define('_JNEWS_JCALTAGS_READMORE_TIPS','Selectează Da dacă doreşti să introduci un <b>link \'Citeşte mai mult\'</b> pentru acest eveniment');
define('_JNEWS_REDIRECTCONFIRMATION','URL de redirectare');
define('_JNEWS_REDIRECTCONFIRMATION_TIPS','Dacă ai nevoie de un email de confirmare, utilizatorul va fi confirmat şi redirectat la acest URL dacă face click pe link-ul de confirmare.');

//since 2.0.0 compatibility with Joomla 1.5
if(!defined('_CMN_SAVE') and defined('CMN_SAVE')) define('_CMN_SAVE',CMN_SAVE);
if(!defined('_CMN_SAVE')) define('_CMN_SAVE','Save');
if(!defined('_NO_ACCOUNT')) define('_NO_ACCOUNT','Nu ai încă un cont?');
if(!defined('_CREATE_ACCOUNT')) define('_CREATE_ACCOUNT','Înregistrează-te');
if(!defined('_NOT_AUTH')) define('_NOT_AUTH','Nu ai dreptul să vezi această resursă.');

//since 3.0.0
define('_JNEWS_DISABLETOOLTIP','Dezactivează indicaţiile (tooltip)');
define('_JNEWS_DISABLETOOLTIP_TIPS', 'Dezactivează indicaţiile (tooltip) în front-end');
define('_JNEWS_MINISENDMAIL', 'Foloseşte utilizatorul Mini SendMail');
define('_JNEWS_MINISENDMAIL_TIPS', 'Dacă serverul tău foloseşte utilitarul Mini SendMail, selectează această opţiune pentru a nu adăuga numele utilizatorului în antetul email-ului');

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


