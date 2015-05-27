<?php
defined('_JEXEC') or die('Restricted access');
### Copyright (c) 2006-2012 Joobi Limited. All rights reserved.
### license GNU GPLv3 , link http://www.joobi.co

/**
* <p>Polish language file</p>
* @author Andrzej Herzberg <http://design-joomla.pl>
* @version $Id: polish.php 491 2007-02-01 22:56:07Z chris $
* @link http://www.joobi.co
*/

### General ###
 //jnews Description
define('_JNEWS_DESC_CORE', 'jNews to narzędzie zaiwerające listę mailingową, newsletter, auto-responder służące do bardziej efektywnej komunikacji między użytkownikiem i jego klientami.  ' .
		'jNews, Twój partner w komunikacji!');
define('_JNEWS_DESC_GPL', 'jNews to narzędzie zaiwerające listę mailingową, newsletter, auto-responder służące do bardziej efektywnej komunikacji między użytkownikiem i jego klientami.  ' .
		'jNews, Twój partner w komunikacji!');
define('_JNEWS_FEATURES', 'jNews, Twój partner w komunikacji!');

// Type of lists
define('_JNEWS_NEWSLETTER', 'Newsletter');
define('_JNEWS_AUTORESP', 'Auto-responder');
define('_JNEWS_AUTORSS', 'Auto-RSS');
define('_JNEWS_ECARD', 'e-Kartki');
define('_JNEWS_POSTCARD', 'Kartka pocztowa');
define('_JNEWS_PERF', 'Wyniki');
define('_JNEWS_COUPON', 'Kupon');
define('_JNEWS_CRON', 'Zadanie Crona');
define('_JNEWS_MAILING', 'Wysyłka');
define('_JNEWS_LIST', 'Lista');

 //jnews Menu
define('_JNEWS_MENU_LIST', 'Listy');
define('_JNEWS_MENU_SUBSCRIBERS', 'Subskrybenci');
define('_JNEWS_MENU_NEWSLETTERS', 'Newslettery');
define('_JNEWS_MENU_AUTOS', 'Autorespondery');
define('_JNEWS_MENU_COUPONS', 'Kupony');
define('_JNEWS_MENU_CRONS', 'Zadania krona');
define('_JNEWS_MENU_AUTORSS', 'Auto-RSS');
define('_JNEWS_MENU_ECARD', 'e-Kartki');
define('_JNEWS_MENU_POSTCARDS', 'Kartki pocztowe');
define('_JNEWS_MENU_PERFS', 'Wyniki');
define('_JNEWS_MENU_TAB_LIST', 'Listy');
define('_JNEWS_MENU_MAILING_TITLE', 'Wysyłki');
define('_JNEWS_MENU_MAILING', 'Wysyłki od ');
define('_JNEWS_MENU_STATS', 'Statystyki');
define('_JNEWS_MENU_STATS_FOR', 'Statystyki dla ');
define('_JNEWS_MENU_CONF', 'Konfiguracja');
define('_JNEWS_MENU_UPDATE', 'Import');
define('_JNEWS_MENU_ABOUT', 'O');
define('_JNEWS_MENU_LEARN', 'Centrum edukacji');
define('_JNEWS_MENU_MEDIA', 'Menadżer mediów');
define('_JNEWS_MENU_HELP', 'Pomoc');
define('_JNEWS_MENU_CPANEL', 'Panel zarządzania');
define('_JNEWS_MENU_IMPORT', 'Import');
define('_JNEWS_MENU_EXPORT', 'Export');
define('_JNEWS_MENU_SUB_ALL', 'Subskrybuj wszystkie listy');
define('_JNEWS_MENU_UNSUB_ALL', 'Wypisz się ze wszystkich list');
define('_JNEWS_MENU_VIEW_ARCHIVE', 'Archiwum');
define('_JNEWS_MENU_PREVIEW', 'Podgląd');
define('_JNEWS_MENU_SEND', 'Wyślij');
define('_JNEWS_MENU_SEND_TEST', 'Wyślij email testowy');
define('_JNEWS_MENU_SEND_QUEUE', 'Kolejka procesu');
define('_JNEWS_MENU_VIEW', 'Widok');
define('_JNEWS_MENU_COPY', 'Kopia');
define('_JNEWS_MENU_VIEW_STATS', 'Widok statystyk');
define('_JNEWS_MENU_CRTL_PANEL', ' Panel kontrolny');
define('_JNEWS_MENU_LIST_NEW', ' Dodaj listę');
define('_JNEWS_MENU_LIST_EDIT', ' Edytuj listę');
define('_JNEWS_MENU_BACK', 'Powrót');
define('_JNEWS_MENU_INSTALL', 'Instalacja');
define('_JNEWS_MENU_TAB_SUM', 'Podsumowanie');
define('_JNEWS_STATUS', 'Status');

// messages
define('_JNEWS_ERROR', ' Wystąpił błąd! ');
define('_JNEWS_SUB_ACCESS', 'Prawa dostępu');
define('_JNEWS_DESC_CREDITS', 'Przypisy');
define('_JNEWS_DESC_INFO', 'Informacje');
define('_JNEWS_DESC_HOME', 'Strona domowa');
define('_JNEWS_DESC_MAILING', 'Lista mailingowa');
define('_JNEWS_DESC_SUBSCRIBERS', 'Subskrybenci');
define('_JNEWS_PUBLISHED', 'Opublikowane');
define('_JNEWS_UNPUBLISHED', 'Nie opublikowane');
define('_JNEWS_DELETE', 'Skasuj');
define('_JNEWS_FILTER', 'Filtr');
define('_JNEWS_UPDATE', 'Aktualizacja');
define('_JNEWS_SAVE', 'Zapisz');
define('_JNEWS_CANCEL', 'Pomiń');
define('_JNEWS_NAME', 'Imię');
define('_JNEWS_EMAIL', 'E-mail');
define('_JNEWS_SELECT', 'Wybierz');
define('_JNEWS_ALL', 'Wszystkie');
define('_JNEWS_SEND_A', 'Wyślij ');
define('_JNEWS_SUCCESS_DELETED', ' skasowano');
define('_JNEWS_LIST_ADDED', 'Lista została utworzona');
define('_JNEWS_LIST_COPY', 'Lista została skopiowana');
define('_JNEWS_LIST_UPDATED', 'Lista została zaktualizowana');
define('_JNEWS_MAILING_SAVED', 'Mailing zapisano.');
define('_JNEWS_UPDATED_SUCCESSFULLY', 'zaktualizowano.');

### Subscribers information ###
//subscribe and unsubscribe info
define('_JNEWS_SUB_INFO', 'Informacja o subskrybentach');
define('_JNEWS_VERIFY_INFO', 'Proszę sparawdzić podany odnośnik, informacja może być niekompletna.');
define('_JNEWS_INPUT_NAME', 'Imię');
define('_JNEWS_INPUT_EMAIL', 'Email');
define('_JNEWS_RECEIVE_HTML', 'Wiadomość HTML?');
define('_JNEWS_TIME_ZONE', 'Strefa czasowa');
define('_JNEWS_BLACK_LIST', 'Czarna lista');
define('_JNEWS_REGISTRATION_DATE', 'Data rejestracji użytkownika');
define('_JNEWS_USER_ID', 'Id użytkownika');
define('_JNEWS_DESCRIPTION', 'Opis');
define('_JNEWS_ACCOUNT_CONFIRMED', 'Twoje konto zostało aktywowane.');
define('_JNEWS_SUB_SUBSCRIBER', 'Subskrybent');
define('_JNEWS_SUB_PUBLISHER', 'Wydawca');
define('_JNEWS_SUB_ADMIN', 'Administrator');
define('_JNEWS_REGISTERED', 'Zarejestrowany');
define('_JNEWS_SUBSCRIPTIONS', 'Twoja subskrypcja');
define('_JNEWS_SEND_UNSUBCRIBE', 'Wyślij wiadomość o rezygnacji z subskrypcji');
define('_JNEWS_SEND_UNSUBCRIBE_TIPS', 'Kliknij Tak aby wysłać email z informacją o rezygnacji z subskrypcji.');
define('_JNEWS_SUBSCRIBE_SUBJECT_MESS', 'Proszę potwierdzić swoją subskrypcję');
define('_JNEWS_UNSUBSCRIBE_SUBJECT_MESS', 'Potwierdzenie rezygnacji z subskrypcji');
define('_JNEWS_DEFAULT_SUBSCRIBE_MESS', 'Witaj {tag:name},<br>' .
		'Został jescze tylko jeden krok i zostaniesz dopisany do naszej listy wysyłkowej.  Proszę kliknąć na poniższy link aby potwierdziś subskrupcję.' .
		'<br><br>{tag:confirm}<br><br>W razie jakichkolwiek pytań, proszę o kontakt z webmasterem.');
define('_JNEWS_DEFAULT_UNSUBSCRIBE_MESS', 'To jest e-mail potwierdazjący wypisanie się z naszej listy wysyłkowej.  Bardzo nam przykro, że się wypisałeś. Pamiętaj jednak, że zawsze możesz odnowić subskrupcję.  Jeśli masz jakiekolwiek pytania, proszę o kontakt.');

// jNews subscribers
define('_JNEWS_SIGNUP_DATE', 'Data zapisu');
define('_JNEWS_CONFIRMED', 'Zatwierdzony');
define('_JNEWS_SUBSCRIB', 'Subskrupcja');
define('_JNEWS_HTML', 'Mailing w formacie HTML');
define('_JNEWS_RESULTS', 'Wyniki');
define('_JNEWS_SEL_LIST', 'Wybierz listę');
define('_JNEWS_SEL_LIST_TYPE', '- Wybierz rodzaj listy -');
define('_JNEWS_SUSCRIB_LIST', 'Lista wszystkich subskrybentów');
define('_JNEWS_SUSCRIB_LIST_UNIQUE', 'Subskrybenci dla : ');
define('_JNEWS_NO_SUSCRIBERS', 'Nie znaleziono subskrybentów dla tej listy.');
define('_JNEWS_COMFIRM_SUBSCRIPTION', 'E-mail z prośbą o potwierdzenie subskrypcji został wysłany.  Proszę odbierz korespondencję i kliknij w link weryfikacyjny.<br>' .
		'Musisz potwierdzić autentyczność swojej subskrypcji zanim dopiszemy cię do listy naszych prenumeratorów.');
define('_JNEWS_SUCCESS_ADD_LIST', 'Twoje dane zostały dopisane do naszej listy wysyłkowej.');


 // Subcription info
define('_JNEWS_CONFIRM_LINK', 'Klilkij tu aby potwierdzić subskrypcję');
define('_JNEWS_UNSUBSCRIBE_LINK', 'Kliknij tu aby wypisać się z naszej listy wysyłkowej');
define('_JNEWS_UNSUBSCRIBE_MESS', 'Twój adres e-mail został usunięty z naszej listy wysyłkowej');

define('_JNEWS_QUEUE_SENT_SUCCESS', 'Wszystkie zaplanowane wysyłki zostały pomyślnie zrealizowane.');
define('_JNEWS_MALING_VIEW', 'Zobacz wszystkie wysyłki');
define('_JNEWS_UNSUBSCRIBE_MESSAGE', 'Czy jesteś pewien, że chcesz wypisać się z naszej listy wysyłkowej?');
define('_JNEWS_MOD_SUBSCRIBE', 'Subskrybuj');
define('_JNEWS_SUBSCRIBE', 'Subskrybuj');
define('_JNEWS_UNSUBSCRIBE', 'Wypisz się');
define('_JNEWS_VIEW_ARCHIVE', 'Zobacz archiwum');
define('_JNEWS_SUBSCRIPTION_OR', ' lub kliknij tu aby uaktualnić informacje');
define('_JNEWS_EMAIL_ALREADY_REGISTERED', 'Ten adres e-mail jest już zarejestrowany w naszej bazie.');
define('_JNEWS_SUBSCRIBER_DELETED', 'Subskrybent skasowany.');


### UserPanel ###
 //User Menu
define('_JNEWS_UCP_USER_PANEL', 'Panel kontrolny użytkownika');
define('_JNEWS_UCP_USER_MENU', 'Menu użytkownika');
define('_JNEWS_UCP_USER_CONTACT', 'Moje subskrypcje');
 //jNews Cron Menu
define('_JNEWS_UCP_CRON_MENU', 'Zarządzanie zadaniami crona');
define('_JNEWS_UCP_CRON_NEW_MENU', 'Nowy cron');
define('_JNEWS_UCP_CRON_LIST_MENU', 'Lista zadań crona');
 //jNews Coupon Menu
define('_JNEWS_UCP_COUPON_MENU', 'Zarządzanie kuponami');
define('_JNEWS_UCP_COUPON_LIST_MENU', 'Lista kuponów');
define('_JNEWS_UCP_COUPON_ADD_MENU', 'Dodaj kupon');

### lists ###
// Tabs
define('_JNEWS_LIST_T_GENERAL', 'Opis');
define('_JNEWS_LIST_T_LAYOUT', 'Układ');
define('_JNEWS_LIST_T_SUBSCRIPTION', 'Subskrypcja');
define('_JNEWS_LIST_T_SENDER', 'Informacja o nadawcy');

define('_JNEWS_LIST_TYPE', 'Typ listy');
define('_JNEWS_LIST_NAME', 'Nazwa listy');
define('_JNEWS_LIST_ISSUE', 'Emisja #');
define('_JNEWS_LIST_DATE', 'Data wysyłki');
define('_JNEWS_LIST_SUB', 'Temat mailingu');
define('_JNEWS_ATTACHED_FILES', 'Załączone pliki');
define('_JNEWS_SELECT_LIST', 'Proszę wybrać listę do edycji!');

// Auto Responder box
define('_JNEWS_AUTORESP_ON', 'Typ listy');
define('_JNEWS_AUTO_RESP_OPTION', 'Opcje Autorespondera');
define('_JNEWS_AUTO_RESP_FREQ', 'Subskrybenci mogą wybrać częstotliwość');
define('_JNEWS_AUTO_DELAY', 'Opóźnienie (w dniach)');
define('_JNEWS_AUTO_DAY_MIN', 'Minimalna częstotliwość');
define('_JNEWS_AUTO_DAY_MAX', 'Maksymalna częstotliwość');
define('_JNEWS_FOLLOW_UP', 'Określ czas śledzenia autorespondera');
define('_JNEWS_AUTO_RESP_TIME', 'Subskrybenci mogą wybrać czas');
define('_JNEWS_LIST_SENDER', 'Lista wysyłkowa');

define('_JNEWS_LIST_DESC', 'Opis listy');
define('_JNEWS_LAYOUT', 'Układ');
define('_JNEWS_SENDER_NAME', 'Nazwa nadawcy');
define('_JNEWS_SENDER_EMAIL', 'E-mail nadawcy');
define('_JNEWS_SENDER_BOUNCE', 'Nadawca odbitych wiadomości');
define('_JNEWS_LIST_DELAY', 'Opóźnienie');
define('_JNEWS_HTML_MAILING', 'Format HTML?');
define('_JNEWS_HTML_MAILING_DESC', '(jeśli dokonasz zmian powinieneś je zapisać i powrócić do tego ekranu aby sprawdzić efekt.)');
define('_JNEWS_HIDE_FROM_FRONTEND', 'Ukryć na stronie frontowej?');
define('_JNEWS_SELECT_IMPORT_FILE', 'Wybierz plik do zaimportowania');;
define('_JNEWS_IMPORT_FINISHED', 'Import zakończony');
define('_JNEWS_DELETION_OFFILE', 'Usunięcie pliku');
define('_JNEWS_MANUALLY_DELETE', 'nie powiodło się, musisz ręcznie usunąć plik');
define('_JNEWS_CANNOT_WRITE_DIR', 'Niemogę zapisać katalogu');
define('_JNEWS_NOT_PUBLISHED', 'Nie można wysłać mailingu, lista jest nieopublikowana.');

//  List info box
define('_JNEWS_INFO_LIST_PUB', 'Kliknij Tak aby opublikować listę');
define('_JNEWS_INFO_LIST_NAME', 'Tutaj wpisz nazwę twojej listy. Będziesz mógł identyfikować listę używając tej nazwy.');
define('_JNEWS_INFO_LIST_DESC', 'Tutaj wpisz krótki opis twojej listy. Ten opis będzie widoczny dla odwiedzających twój serwis.');
define('_JNEWS_INFO_LIST_SENDER_NAME', 'Wpisz imię wysyłającego mailing. Będzie ono widoczne dla subskrybentów tej listy.');
define('_JNEWS_INFO_LIST_SENDER_EMAIL', 'Wpisz adres e-mail z którego mailing jest wysyłany.');
define('_JNEWS_INFO_LIST_SENDER_BOUNCED', 'Wpisz adres email na który użytkownicy mogą odpowiadać. Zalecamy aby był to tan sam adres co adres nadawcy. Niektóre filtry antyspamowe mogą wiadmość w której adres nadawcy różni się od adresu zwrotnego uznać za spam');
define('_JNEWS_INFO_LIST_AUTORESP', 'Wybierz typ mailingu dla tej listy. <br>' .
		'Newsletter: Normalny newsletter<br>' .
		'Autoresponder: jest to specjalny rodzaj listy z której wiadomości wysyłane są automatycznie w zadanych odstępach czasu.');
define('_JNEWS_INFO_LIST_FREQUENCY', 'Zaznacz czy użytkownicy mogą wybrać jak często mają otrzymywać wiadomości.  Pozwoli to na większą elastyczność dla użytkowników.');
define('_JNEWS_INFO_LIST_TIME', 'Pozwól użytkownikom wybrać preferowaną porę dnia, o której chcą otrzymywać wiadomości.');
define('_JNEWS_INFO_LIST_MIN_DAY', 'Zdefiniuj minimalną częstotliwość z jaką użytkownicy mają otrzymywać wiadomości');
define('_JNEWS_INFO_LIST_DELAY', 'Sprecyzuj odstęp pomiędzy tą wiadomośią autorespondera a następną.');
define('_JNEWS_INFO_LIST_DATE', 'Sprecyzuj datę publikacji listy jeśli zamierzasz przerwac wysyłkę. <br> FORMAT : YYYY-MM-DD HH:MM:SS');
define('_JNEWS_INFO_LIST_MAX_DAY', 'Sprecyzuj jaką maksymalną częstotliowść otrzymywania wiadomości użytkownicy mogą wybrać');
define('_JNEWS_INFO_LIST_LAYOUT', 'Tutaj wprowadź układ twojej listy mailingowej. Możesz zdefiniować dowolny układ.');
define('_JNEWS_INFO_LIST_SUB_MESS', 'Ta wiadomość zostanie wysłana do subskrybenta, który właśnie się zarejestrował. Możesz tutaj zdefiniować dowolny tekst.');
define('_JNEWS_INFO_LIST_UNSUB_MESS', 'Ta wiadomość zostanie wysłana do subskrybenta kiedy wypisze się z listy. Może to być dowolna wiadomość.');
define('_JNEWS_INFO_LIST_HTML', 'Wybierz opcję jeśli chcesz wysyłać wiadomości w formacie HTML. Użytkownicy są zobowiązani sprecyzować czy chcą otrzymywać wiadomości w formacie HTML, czy tylko wiadomości tekstowe, w chili gdy zapisują się do tej listy.');
define('_JNEWS_INFO_LIST_HIDDEN', 'Kliknij tak aby ukryć listę na stronie frontowej, użytkownicy nie będą zobowiązani do zapisu ale wciąż będzie możliwa wysyłka.');
define('_JNEWS_INFO_LIST_JNEWS_AUTO_SUB', 'Czy chcesz automatycznie zapisać nowych użytkowników do tej listy?<br><B>Nowi użytkownicy:</B> zostaną zarejestrowani wszyscy nowi użytkownicy.<br><B>Wszyscy użytkowicy:</B> zostaną zarejestrowani wszyscy użytkownicy zapisani do tej pory w bazie.<br>(wszystkie opcje wspierane są w Community Builder)');
define('_JNEWS_INFO_LIST_ACC_LEVEL', 'Wybierz poziom dostępu ze strony frontowej. Ta opcja pokazuje lub ukrywa listę mailingową dla grup użytkowników którzy nie chcą lub nie powinni się do niej zapisywać.');
define('_JNEWS_INFO_LIST_ACC_USER_ID', 'Wybierz poziom dostępu dla użytkowników, którym chcesz pozwolić a edycję. Ci użytkownicy będą w stanie edytować i wysyłac mailing z pozomu frontu oraz z panela administracynjego.');
define('_JNEWS_INFO_LIST_FOLLOW_UP', 'If you want the auto-responder to move to another one once it reaches the last message you can specify here the following up auto-responder.');
define('_JNEWS_INFO_LIST_JNEWS_OWNER', 'To jest ID osoby, która utowrzyła listę.');
define('_JNEWS_INFO_LIST_WARNING', '   Ta ostatnia opcja jest dostępna tylko raz, podczas tworzenia listy.');
define('_JNEWS_INFO_LIST_SUBJET', ' Temat wysyłki.  To jest temat e-maila, który otrzyma subskrybent.');
define('_JNEWS_INFO_MAILING_CONTENT', 'To jest zawartość e-maila do wysyłki.');
define('_JNEWS_INFO_MAILING_NOHTML', 'Wpisz tytaj treść wiadomości, którą chcesz wysłać do tych subskrybentów, którzy wyrazili woję otrzymywania wiadomości w formacie tekstowym podczas zapisu. <BR/> UWAGA: Jeśli zostawisz to pole puste jNews automatycznie przekonweruje wiadomość HTML do wiadomości tekstowej.');
define('_JNEWS_INFO_MAILING_VISIBLE', 'Kliknij TAK aby pokazać mailing na strnonie.');
define('_JNEWS_INSERT_CONTENT', 'Załącz istniejący artykuł');

// Coupons
define('_JNEWS_SEND_COUPON_SUCCESS', 'Kupon wysłany!');
define('_JNEWS_CHOOSE_COUPON', 'Wybierz kupon');
define('_JNEWS_TO_USER', ' do tego użytkownika');

### Cron options
//drop down frequency(CRON)
define('_JNEWS_FREQ_CH1', 'co godzinę');
define('_JNEWS_FREQ_CH2', 'co 6 godzin');
define('_JNEWS_FREQ_CH3', 'co 12 godzin');
define('_JNEWS_FREQ_CH4', 'codiennie');
define('_JNEWS_FREQ_CH5', 'co tydzień');
define('_JNEWS_FREQ_CH6', 'co miesiąc');
define('_JNEWS_FREQ_NONE', 'Nie');
define('_JNEWS_FREQ_NEW', 'Nowy użytkownik');
define('_JNEWS_FREQ_ALL', 'Wszystcy użytkownicy');

//Label CRON form
define('_JNEWS_LABEL_FREQ', 'jNews Cron?');
define('_JNEWS_LABEL_FREQ_TIPS', 'Kliknij TAK jeśli zamierzasz użyć z jNews Cron, NIE dla innych zadań crona.<br>' .
		'Jeśli wybierzesz TAK nie musisz wybierać adresu Cron-a, będzie on automatycznie dodany.');
define('_JNEWS_SITE_URL', 'Adres URL twojej witryny');
define('_JNEWS_CRON_FREQUENCY', 'Częstotliwość Cron-a');
define('_JNEWS_STARTDATE_FREQ', 'Data początkowa');
define('_JNEWS_LABELDATE_FREQ', 'Określ datę');
define('_JNEWS_LABELTIME_FREQ', 'Określ czas');
define('_JNEWS_CRON_URL', 'Cron URL');
define('_JNEWS_CRON_FREQ', 'Częstotliwość');
define('_JNEWS_TITLE_CRONLIST', 'Lista Cron-ów');
define('_JNEWS_NEW_LIST', 'Utwórz nowa listę');

//title CRON form
define('_JNEWS_TITLE_FREQ', 'Edycja Cron-a');
define('_JNEWS_CRON_SITE_URL', 'Proszę wpisać poprawny adres url witryny zaczynający się od http://');

### Mailings ###
define('_JNEWS_MAILING_ALL', 'Wszystkie mailingi');
define('_JNEWS_EDIT_A', 'Edytuj ');
define('_JNEWS_SELCT_MAILING', 'Proszę wybrać listę z rozwijalnego menu.');
define('_JNEWS_VISIBLE_FRONT', 'Widoczne na stronie');

// mailer
define('_JNEWS_SUBJECT', 'Temat');
define('_JNEWS_CONTENT', 'Zawartość');
define('_JNEWS_NAMEREP', '{tag:name} = To pole zostanie zamienione na dane wprowadzone przez użytkownika, możesz więc wysyłać spersonalizowane wiadomości.<br>');
define('_JNEWS_FIRST_NAME_REP', '{tag:firstname} = To pole zostanie zamienione na imię, które wprowadził użytkownik przy rejestracji.<br>');
define('_JNEWS_NONHTML', 'wersja bez HTML');
define('_JNEWS_ATTACHMENTS', 'Załączniki');
define('_JNEWS_SELECT_MULTIPLE', 'Wciśnik klawisz control (albo command - Macintosh) aby wybrać kilka załączników.<br>' .
		'Pliki będa widoczne na liście załączników zlokalizowanych w katalogu z załącznikami. Możesz zmienić lokalizację tego katalogu w panelu kontrolnym.');
define('_JNEWS_CONTENT_ITEM', 'Element zawartości');
define('_JNEWS_SENDING_EMAIL', 'Wysyłka maili');
define('_JNEWS_MESSAGE_NOT', 'Komunikat - nie może zostać wysłane');
define('_JNEWS_MAILER_ERROR', 'Błąd mailera');
define('_JNEWS_MESSAGE_SENT_SUCCESSFULLY', 'Komunikat - wysłano pomyślnie');
define('_JNEWS_SENDING_TOOK', 'Wysłanie maili zabrało ');
define('_JNEWS_SECONDS', ' sekund');
define('_JNEWS_NO_ADDRESS_ENTERED', 'Nie podano adresu e-mail lub użytkownika ');
define('_JNEWS_CHANGE_SUBSCRIPTIONS', 'Zmień');
define('_JNEWS_CHANGE_EMAIL_SUBSCRIPTION', 'Zmień swoją subskrypcję');
define('_JNEWS_WHICH_EMAIL_TEST', 'Podaj edres e-mail do wysłania wiadomości testowej lub wybierz podgląd');
define('_JNEWS_SEND_IN_HTML', 'Wysyłka w HTML (dla mailingu html)?');
define('_JNEWS_VISIBLE', 'Widoczny');
define('_JNEWS_INTRO_ONLY', 'Tylko intro');

// stats
define('_JNEWS_GLOBALSTATS', 'Statystyki globalne');
define('_JNEWS_DETAILED_STATS', 'Statystyki szczegółówe');
define('_JNEWS_MAILING_LIST_DETAILS', 'Szczegóły listy');
define('_JNEWS_SEND_IN_HTML_FORMAT', 'Wysłane w formacie HTML');
define('_JNEWS_VIEWS_FROM_HTML', 'Obejrzane (e-maile HTML)');
define('_JNEWS_SEND_IN_TEXT_FORMAT', 'Wysłane w formacie tekstowym');
define('_JNEWS_HTML_READ', 'HTML przeczytane');
define('_JNEWS_HTML_UNREAD', 'HTML nieprzeczytane');
define('_JNEWS_TEXT_ONLY_SENT', 'Tylko tekst');

// Configuration panel
// main tabs
define('_JNEWS_MAIL_CONFIG', 'Mail');
define('_JNEWS_LOGGING_CONFIG', 'Logi i statystyki');
define('_JNEWS_SUBSCRIBER_CONFIG', 'Subskrybenci');
define('_JNEWS_MISC_CONFIG', 'Różności');
define('_JNEWS_MAIL_SETTINGS', 'Mail - ustawienia');
define('_JNEWS_MAILINGS_SETTINGS', 'Ustawienia mailingu');
define('_JNEWS_SUBCRIBERS_SETTINGS', 'Ustawienia subskrybentów');
define('_JNEWS_CRON_SETTINGS', 'Ustawienia Cron-a');
define('_JNEWS_SENDING_SETTINGS', 'Ustawienia wysyłki');
define('_JNEWS_STATS_SETTINGS', 'Ustawienia statystyk');
define('_JNEWS_LOGS_SETTINGS', 'Ustawienia logów');
define('_JNEWS_MISC_SETTINGS', 'Ustawienia różności');
// mail settings
define('_JNEWS_SEND_MAIL_FROM', 'Email nadawcy');
define('_JNEWS_SEND_MAIL_NAME', 'Nazwa nadawcy');
define('_JNEWS_MAILSENDMETHOD', 'Metoda wysyłki');
define('_JNEWS_SENDMAILPATH', 'ścieżka do sendmail');
define('_JNEWS_SMTPHOST', 'SMTP host');
define('_JNEWS_SMTPAUTHREQUIRED', 'SMTP wymagana autoryzacja');
define('_JNEWS_SMTPAUTHREQUIRED_TIPS', 'Wybierz jeśli twój serwer SMTP wymaga autoryzacji');
define('_JNEWS_SMTPUSERNAME', 'SMTP nazwa użytkownika');
define('_JNEWS_SMTPUSERNAME_TIPS', 'Wprowadź nazwę użytkownika SMTP jeśli twój serwer SMTP wymaga autoryzacji');
define('_JNEWS_SMTPPASSWORD', 'SMTP hasło');
define('_JNEWS_SMTPPASSWORD_TIPS', 'Wprowadź hasło SMTP jeśli twój serwer SMTP wymaga autoryzacji');
define('_JNEWS_USE_EMBEDDED', 'Użyj załączonych obrazów');
define('_JNEWS_USE_EMBEDDED_TIPS', 'Wybierz jeśli obrazki z załączonej zawartości mają byc wysłane w wiadomości HTML. W innym przypadku zostaną użyte standardowe tagi.');
define('_JNEWS_UPLOAD_PATH', 'Wgrywanie/ścieżka do załączników');
define('_JNEWS_UPLOAD_PATH_TIPS', 'Możesz wybrać ścieżkę do załączników.<br>' .
		'Sprawdź czy wybrany katalog istnieje, w przeciwnym wypadku utwórz go.');

// subscribers settings
define('_JNEWS_ALLOW_UNREG', 'Zezwalaj niezarejestrowanym');
define('_JNEWS_ALLOW_UNREG_TIPS', 'Wybierz TAK jeśli chcesz pozwolić na zapis do subskypcji użytkownikom niezarejestrowanym w serwisie.');
define('_JNEWS_REQ_CONFIRM', 'Wymagane potwierdzenie');
define('_JNEWS_REQ_CONFIRM_TIPS', 'Wybierz jeśli wymagasz potwierdzenia subskrypcji od niezarejestrowanych użytkowników.');
define('_JNEWS_SUB_SETTINGS', 'Ustawienia subskrybenta');
define('_JNEWS_SUBMESSAGE', 'Ustawienia email');
define('_JNEWS_SUBSCRIBE_LIST', 'Subskrybenci do listy');

define('_JNEWS_USABLE_TAGS', 'Użyteczne zakładki');
define('_JNEWS_NAME_AND_CONFIRM', '<b>{tag:confirm}</b> = Zostanie utworzony odnośnik, za pomocą którego użytkownik będzie mógł potwierdzić subskrypcję. Pole <strong>wymagane</strong> dla prawidłowej pracy jNews.<br>'
.'<br>{tag:name} = To pole zostanie zastąpione nazwą (imię i nazwisko), którą użytkownik podał przy rejestracji. Możesz więc wysyłać spersonalizowane wiadomości.<br>'
.'<br>{tag:firstname} = To pole zostanie zastąpione nazwą (imieniem), którą użytkownik podał przy rejestracji. FIRSTNAME to pierwsze słowo wpisane przez użytkownika w polu z nazwą.<br>');
define('_JNEWS_CONFIRMFROMNAME', 'Potwierdź nazwę');
define('_JNEWS_CONFIRMFROMNAME_TIPS', 'Wpisz nazwę wyświetlaną w wiadomości z potwierdzeniem.');
define('_JNEWS_CONFIRMFROMEMAIL', 'Potwierdź e-mail');
define('_JNEWS_CONFIRMFROMEMAIL_TIPS', 'Wpisz email wyświetlany w wiadomości z potwierdzeniem.');
//define('_JNEWS_CONFIRMBOUNCE', 'Adres dla odbitych wiadomości');
//define('_JNEWS_CONFIRMBOUNCE_TIPS', 'Wpisz adres e-mail dla odbitych wiadomości.');
define('_JNEWS_HTML_CONFIRM', 'potwierdzenie HTML');
define('_JNEWS_HTML_CONFIRM_TIPS', 'Wybierz tak jeśli wiadomość potwierdzająca ma być wysłana w formacie HTML dla użytkowników, którzy wybrali taką opcję przy rejestracji.');
define('_JNEWS_TIME_ZONE_ASK', 'Sprawdź strefę czasową');
define('_JNEWS_TIME_ZONE_TIPS', 'Wybierz tak, jeśli chcesz sprawdzać strefę czasową użytkownika. Skojekowane maile będą wysyłane właściwie dla danej strefy');

 // Cron Set up
 define('_JNEWS_AUTO_CONFIG', 'Cron');
define('_JNEWS_TIME_OFFSET_URL', 'kliknij tu aby ustawić offset w gównym panelu konfiguracyjnym -> Zakładka lokalna');
define('_JNEWS_TIME_OFFSET_TIPS', 'Ustaw odstęp czasu serwera');
define('_JNEWS_TIME_OFFSET', 'Odstęp czasu');
define('_JNEWS_CRON_DESC', '<br>Używając funkcji cron-a możesz ustawić automatyczne zadania dla twojego serwisu w Joomla!<br>' .
		'Aby użyć tej funkcjonalności powinieneś ustawić w panelu administracyjnym następujące komendy:<br>' .
		'/usr/bin/php  /home/joomla/public_dev/index.php?option=com_jnews&act=cron' .
		'<br><br>Uwaga:<br>' .
		' - jeśli scieżka na Twoim serwerze jest inna niż /usr/bin/php proszę wpisać właściwą w postaci /$php_path/php' .
 		'<br><br>Więcej informacji na temat ustawień crona<br>' .
		' - Cpanel kliknij tu ' .
 		'<a href="http://www.visn.co.uk/cpanel-docs/cron-jobs.html"  target="_blank">http://www.visn.co.uk/cpanel-docs/cron-jobs.html</a><br>' .
 		' - Plesk kliknij tu ' .
 		'<a href="http://www.swsoft.com/doc/tutorials/Plesk/Plesk7/plesk_plesk7_eu/plesk7_eu_crontab.htm" target="_blank">' .
 		'http://www.swsoft.com/doc/tutorials/Plesk/Plesk7/plesk_plesk7_eu/plesk7_eu_crontab.htm</a><br>' .
 		' - Interworx kliknij tu ' .
 		'<a href="http://www.sagonet.com/interworx/tutorials/siteworx/cron.php" target="_blank">' .
 		'http://www.sagonet.com/interworx/tutorials/siteworx/cron.php</a><br>' .
 		' - Ogólne informacje na temat crona pod Linuxem ' .
 		'<a href="http://www.computerhope.com/unix/ucrontab.htm#01" target="_blank">http://www.computerhope.com/unix/ucrontab.htm#01</a><br>' .
 		'<br>Jeśli potrzebujesz pomocy w ustawieniach crona lub masz inne problemy zapraszamy na nasze forum <a href="http://www.joobi.co" target="_blank">http://www.joobi.co</a>');
// sending settings
define('_JNEWS_PAUSEX', 'Przerwa x między każdą ustawioną paczką e-maili');
define('_JNEWS_PAUSEX_TIPS', 'Wprowadź ilość sekund, równoważną przerwie pomiędzy wysyłakmi kolejnyhc zdefiniowanych paczek maili.');
define('_JNEWS_EMAIL_BET_PAUSE', 'E-maili pomiędzy przerwami');
define('_JNEWS_EMAIL_BET_PAUSE_TIPS', 'Ilość e-maili do wysłania przed przerwą.');
define('_JNEWS_WAIT_USER_PAUSE', 'Czekaj na wprowadzenie użytkownika przy przerwie');
define('_JNEWS_WAIT_USER_PAUSE_TIPS', 'CZy skrypt ma czekać na wprowadzenie użytkownika w czasie przerwy pomiędzy wysyłkami.');
define('_JNEWS_SCRIPT_TIMEOUT', 'Czas obliczeń dla skryptu');
define('_JNEWS_SCRIPT_TIMEOUT_TIPS', 'Liczba minut działania skryptu (0 = bez limitu).');
// Stats settings
define('_JNEWS_ENABLE_READ_STATS', 'Włączone czytanie statystyk');
define('_JNEWS_ENABLE_READ_STATS_TIPS', 'Wybierz tak jeśli chcesz rejestrować ilość wyświetleń. Ta techika może być użyta tylko dla mailingu w formacie HTML');
define('_JNEWS_LOG_VIEWSPERSUB', 'Rejestruj wyświetlenia dla subskrybenta');
define('_JNEWS_LOG_VIEWSPERSUB_TIPS', 'Wybierz tak jeśli chcesz rejestrować ilość wyświetleń dla każdego użytkownika. Ta techika może być użyta tylko dla mailingu w formacie HTML');
// Logs settings
define('_JNEWS_DETAILED', 'Szczegółowe raporty');
define('_JNEWS_SIMPLE', 'Uproszczone raporty');
define('_JNEWS_DIAPLAY_LOG', 'Wyświetl raporty');
define('_JNEWS_DISPLAY_LOG_TIPS', 'Zaznacz tak jeśli chcesz wyświetlać rejestry w czasie wysyłki.');
define('_JNEWS_SEND_PERF_DATA', 'Wydajność wysyłki');
define('_JNEWS_SEND_PERF_DATA_TIPS', 'Zaznacz jeśli chcesz aby Ajacom generował anonimowe sprawozdania o konfiguracji, ilości subskrybentów listy i rzeczywistego czasu wysyłki. To pozwoli nam ocenić wydajność systemu jNews i pozwoli na dokonanie poprawek w przyszłych wersjach.');
define('_JNEWS_SEND_AUTO_LOG', 'Wyślij raporty dla auto-respondera');
define('_JNEWS_SEND_AUTO_LOG_TIPS', 'Zaznacz tak jesłi chcesz otrzymywać e-mail z raportem za każdym razem kiedy zadanie zostanie wykonane.  UWAGA: może to spowodować ogromny wzrost ilości otrzymywanych maili.');
define('_JNEWS_SEND_LOG', 'Wyślij raport');
define('_JNEWS_SEND_LOG_TIPS', 'Czy raport z mailingu ma być wysyłany na adres użytkownika zlecającego wysyłkę.');
define('_JNEWS_SEND_LOGDETAIL', 'Wyślij sczegółowy raport');
define('_JNEWS_SEND_LOGDETAIL_TIPS', 'Szczegółowy raport zawiera informacje o powodzeniu lub niepowodzeniu wysyłki dla każdego subskrybenta oraz przegląd informacji. Krótki raport zawiera wyłącznie przegląd.');
define('_JNEWS_SEND_LOGCLOSED', 'Wyślij raport jeśli łączność zostanie zerwana');
define('_JNEWS_SEND_LOGCLOSED_TIPS', 'Przy włączonej opcji użytkownik wysyłający mailing wciąż może otrzymywac raporty na e-mail.');
define('_JNEWS_SAVE_LOG', 'Zapisz raport');
define('_JNEWS_SAVE_LOG_TIPS', 'Czy raport z mailingu ma być zapisany (załączony) do pliku.');
define('_JNEWS_SAVE_LOGDETAIL', 'Zapisz szczególowy raport');
define('_JNEWS_SAVE_LOGDETAIL_TIPS', 'Szczegółowy raport zawiera informacje o powodzeniu lub niepowodzeniu wysyłki dla każdego subskrybenta oraz przegląd informacji. Krótki raport zawiera wyłącznie przegląd.');
define('_JNEWS_SAVE_LOGFILE', 'Zapisz plik raportu');
define('_JNEWS_SAVE_LOGFILE_TIPS', 'Plik do którego jest dołączany raport. Plik może być dość spory.');
define('_JNEWS_CLEAR_LOG', 'Wyczyść raport');
define('_JNEWS_CLEAR_LOG_TIPS', 'Kasuje dane z pliku raportu.');

### control panel
define('_JNEWS_CP_LAST_QUEUE', 'Ostatnio wykonana kolejka');
define('_JNEWS_CP_TOTAL', 'Suma');
define('_JNEWS_MAILING_COPY', 'Mailing skopiowany!');

// Miscellaneous settings
define('_JNEWS_SHOW_GUIDE', 'Pokaż przewodnik');
define('_JNEWS_SHOW_GUIDE_TIPS', 'Pokazuje przewodnik pomagający nowym użytkownikom utworzyć newsletter, auto-responder i ustawić poprawnie system jNews.');
define('_JNEWS_AUTOS_ON', 'Użyj Auto-responderów');
define('_JNEWS_AUTOS_ON_TIPS', 'Ustaw nie jeśli nie chcesz używać  Auto-responderów. Wszystkie autorespndery będą nieaktywne.');
define('_JNEWS_NEWS_ON', 'Użyj newslettera');
define('_JNEWS_NEWS_ON_TIPS', 'Wybierz nie jesłi nie chcesz używać newslettera. Wszystkie newslettery będą nieaktywne.');
define('_JNEWS_SHOW_TIPS', 'Pokaż porady');
define('_JNEWS_SHOW_TIPS_TIPS', 'Pokaż porady pomagające użytkownikom korzystać z systemu jNews bardziej efektywnie.');
define('_JNEWS_SHOW_FOOTER', 'Pokaż stopkę');
define('_JNEWS_SHOW_FOOTER_TIPS', 'Czy ma byś pokazywana stopka jNews.');
define('_JNEWS_SHOW_LISTS', 'Pokaż listę na stronie');
define('_JNEWS_SHOW_LISTS_TIPS', 'Pokazuje niezerejestrowanym użytkownikom listy mailingowe, które będą mogli zaprenumerować po zarejestrowaniu.');
define('_JNEWS_CONFIG_UPDATED', 'Szczczegóły konfiguracji zostały zapisane!');
define('_JNEWS_UPDATE_URL', 'Uaktualnij URL');
define('_JNEWS_UPDATE_URL_WARNING', 'UWAGA! Nie zmieniaj tego adresu póki nie zostaniesz o to poproszony przez zespół techniczny jNews.<br>');
define('_JNEWS_UPDATE_URL_TIPS', 'Na przykład: http://www.joobi.co/update/ (razem z końcowym slash-em)');

// module
define('_JNEWS_EMAIL_INVALID', 'Wprowadzony e-mail jest błędny.');
define('_JNEWS_REGISTER_REQUIRED', 'Proszę zarejestrować się w serwisie przed zapiseaniem się na listę wysyłkową.');

// Access level box
define('_JNEWS_OWNER', 'Twórca listy:');
define('_JNEWS_ACCESS_LEVEL', 'Ustaw poziom dostępu do listy');
define('_JNEWS_ACCESS_LEVEL_OPTION', 'Opcje poziomu dostępu');
define('_JNEWS_USER_LEVEL_EDIT', 'Wybierz, który poziom użytkownika jest dopuszczony do redagowania listy (zarówno z poziomu panela jak i frontu strony) ');

//  drop down options
define('_JNEWS_AUTO_DAY_CH1', 'Codziennie');
define('_JNEWS_AUTO_DAY_CH2', 'Codziennie bez weekendów');
define('_JNEWS_AUTO_DAY_CH3', 'Co dwa dni');
define('_JNEWS_AUTO_DAY_CH4', 'Co dwa dni bez weekendów');
define('_JNEWS_AUTO_DAY_CH5', 'Tygodniowo');
define('_JNEWS_AUTO_DAY_CH6', 'Co dwa tygodnie');
define('_JNEWS_AUTO_DAY_CH7', 'Miesięcznie');
define('_JNEWS_AUTO_DAY_CH9', 'Rocznie');
define('_JNEWS_AUTO_OPTION_NONE', 'Nie');
define('_JNEWS_AUTO_OPTION_NEW', 'Nowy użytkownik');
define('_JNEWS_AUTO_OPTION_ALL', 'Wszyscy użytkownicy');

//
define('_JNEWS_UNSUB_MESSAGE', 'Email z resygnacją');
define('_JNEWS_UNSUB_SETTINGS', 'Ustawienia rezygnacji');
define('_JNEWS_AUTO_ADD_NEW_USERS', 'Auto zapis?');

// Update and upgrade messages
define('_JNEWS_NO_UPDATES', 'Obecnie nie jest dostępna żadna aktualizacja.');
define('_JNEWS_VERSION', 'Wersja jNews');
define('_JNEWS_NEED_UPDATED', 'Pliki, które powinny zostać uaktualnione:');
define('_JNEWS_NEED_ADDED', 'Pliki, które powinny zostać dodane:');
define('_JNEWS_NEED_REMOVED', 'Pliki konieczne do usunięcia:');
define('_JNEWS_FILENAME', 'Nazwa pliku:');
define('_JNEWS_CURRENT_VERSION', 'Aktualna wersja:');
define('_JNEWS_NEWEST_VERSION', 'Nowsza wersja:');
define('_JNEWS_UPDATING', 'Uaktualnienie');
define('_JNEWS_UPDATE_UPDATED_SUCCESSFULLY', 'Pliki zostały pomyślnie zaktualizowane.');
define('_JNEWS_UPDATE_FAILED', 'Aktualizacja nieudana!');
define('_JNEWS_ADDING', 'Dodawanie');
define('_JNEWS_ADDED_SUCCESSFULLY', 'Pomyślnie dodano.');
define('_JNEWS_ADDING_FAILED', 'Dodanie nie udane!');
define('_JNEWS_REMOVING', 'Usuwanie');
define('_JNEWS_REMOVED_SUCCESSFULLY', 'Usunięto pomyślnie.');
define('_JNEWS_REMOVING_FAILED', 'Usuwanie nieudane!');
define('_JNEWS_INSTALL_DIFFERENT_VERSION', 'Zainstaluj inną wersję');
define('_JNEWS_CONTENT_ADD', 'Dodaj zawartość');
define('_JNEWS_UPGRADE_FROM', 'Import danych (newsletery i informacje o użytkownikach) z');
define('_JNEWS_UPGRADE_MESS', 'Nie ma żadnego ryzyka dla Twoich danych. <br> TTen proces po prostu importuje dane do bazy danych systemu jNews.');
define('_JNEWS_CONTINUE_SENDING', 'Kontynuacja wysyłki');

// jNews message
define('_JNEWS_UPGRADE1', 'Możesz w prosty sposób zaimportować użytkowników i newslettery z ');
define('_JNEWS_UPGRADE2', ' do jNews w panelu aktualizacji.');
define('_JNEWS_UPDATE_MESSAGE', 'Nowa wersja jNews jest dostępna! ');
define('_JNEWS_UPDATE_MESSAGE_LINK', 'Kliknij aby zaktualizować!');
define('_JNEWS_CRON_SETUP', 'Aby autoresponder był wysyłany należy skonfigurować zadania crona.');
define('_JNEWS_THANKYOU', 'Dziękujemy za wybranie jNews, Twojego partnera w komunikacji!');
define('_JNEWS_NO_SERVER', 'Aktualizacja niedostępna, prosimy wrócić później.');
define('_JNEWS_MOD_PUB', 'jNews moduł nie został opublikowany.');
define('_JNEWS_MOD_PUB_LINK', 'Kliknij aby go opublikować!');
define('_JNEWS_IMPORT_SUCCESS', 'zaimportowano pomyślnie');
define('_JNEWS_IMPORT_EXIST', 'subskrybent jest już w bazie danych');

// jNews Install
define('_JNEWS_INSTALL_CONFIG', 'Konfiguracja jNews');
define('_JNEWS_INSTALL_SUCCESS', 'Pomyślnie zainstalowane');
define('_JNEWS_INSTALL_ERROR', 'Błąd instalacji');
define('_JNEWS_INSTALL_BOT', 'jNews Plugin (Bot)');
define('_JNEWS_INSTALL_MODULE', 'Moduł jNews');
//Others
define('_JNEWS_JAVASCRIPT', '!UWAGA! obsługa javascript musi być włączona w czasie tej operacji.');
define('_JNEWS_EXPORT_TEXT', 'Eksportowani subskrybenci są widoczni na liscie wyboru. <br>Eksportuj subskrybentów z listy');
define('_JNEWS_IMPORT_TIPS', 'Import subskrybentów. Informacja w pliku powinna mieć następującą strukturę: <br>' .
		'Name,email,receiveHTML(1/0),<span style="color: rgb(255, 0, 0);">confirmed(1/0)</span>');
define('_JNEWS_SUBCRIBER_EXIT', 'jest już subskrybentem');
define('_JNEWS_GET_STARTED', 'Klknij tu by rozpocząć!');

//News since 1.0.1
define('_JNEWS_WARNING_1011', 'Uwaga: 1011: Aktualizacja nie będzie możliwa z powodu ograniczeń serwera.');
define('_JNEWS_SEND_MAIL_FROM_TIPS', 'Wybierz adres e-mail, który będzie widoczny jako nadawca.');
define('_JNEWS_SEND_MAIL_NAME_TIPS', 'Wybierz imię, które będzie widoczne jako nadawca.');
define('_JNEWS_MAILSENDMETHOD_TIPS', 'Wybierz sposób wysyłki e-maili: PHP mail , <span>Sendmail</span> lub SMTP Server.');
define('_JNEWS_SENDMAILPATH_TIPS', 'To jest katalog Mail serwera');
define('_JNEWS_LIST_T_TEMPLATE', 'Szablon');
define('_JNEWS_NO_MAILING_ENTERED', 'Mailing nie ustawiony');
define('_JNEWS_NO_LIST_ENTERED', 'Lista nie ustawiona');
define('_JNEWS_SENT_MAILING', 'Wysłany mailing');
define('_JNEWS_SELECT_FILE', 'Prosze wybrać plik do ');
define('_JNEWS_LIST_IMPORT', 'Zazanacz listy, które chcesz dowiązać do subskrybentów.');
define('_JNEWS_PB_QUEUE', 'Subskrybent sopisany, ale wystąpił problem z połączeniem go z listą. Dokonaj ręcznego wyboru.');
define('_JNEWS_UPDATE_MESS1', 'Zalecana aktualizacja!');
define('_JNEWS_UPDATE_MESS2', '?atki i drobne poprawki.');
define('_JNEWS_UPDATE_MESS3', 'Nowa wersja.');
define('_JNEWS_UPDATE_MESS5', 'Joomla 1.5 - potrzebna aktualizacja.');
define('_JNEWS_UPDATE_IS_AVAIL', ' jest dostępna!');
define('_JNEWS_NO_MAILING_SENT', 'Mailing niewysłany!');
define('_JNEWS_SHOW_LOGIN', 'Pokaż formularz logowania');
define('_JNEWS_SHOW_LOGIN_TIPS', 'Wybierz aby pokazać formularz logowania do panela jNews na stronie.');
define('_JNEWS_LISTS_EDITOR', 'Edytor w opisie listy');
define('_JNEWS_LISTS_EDITOR_TIPS', 'Wybierz aby użyć edytor HTML w opisie listy.');
define('_JNEWS_SUBCRIBERS_VIEW', 'Przeglądaj subskrybentów');

//News since 1.0.2
define('_JNEWS_FRONTEND_SETTINGS', 'Ustawienia strony frontowej');
define('_JNEWS_SHOW_LOGOUT', 'Pokaż przycisk wylogowania');
define('_JNEWS_SHOW_LOGOUT_TIPS', 'Wybierza tak aby pokazać przycisk wylogowania w panelu jNews na stronie.');

//News since 1.0.3 CB integration
define('_JNEWS_CONFIG_INTEGRATION', 'Integracja');
define('_JNEWS_CB_INTEGRATION', 'Integracja z Community Builder');
define('_JNEWS_INSTALL_PLUGIN', 'Wtyczka do Community Builder (Integracja z jNews) ');
define('_JNEWS_CB_PLUGIN_NOT_INSTALLED', 'Wtyczka jNews do Community Builder nie jest jeszcze zainstalowana!');
define('_JNEWS_CB_PLUGIN', 'Listy przy rejestracji');
define('_JNEWS_CB_PLUGIN_TIPS', 'Wybierz aby pokazać listy wysyłkowe w formularzu rejestracji z komponentu CB');
define('_JNEWS_CB_LISTS', 'Listy IDs');
define('_JNEWS_CB_LISTS_TIPS', 'TO POLE JEST WYMAGANE. Wpisz numer identyfikacyjny listy, którą mają subskrybować użytkownicy. Kolejne identyfikatory oddziel przecinkiem (,) (0 pokazuje wszystkie listy)');
define('_JNEWS_CB_INTRO', 'Tekst wprowadzający');
define('_JNEWS_CB_INTRO_TIPS', 'Tekst, który będzie się pojawiać przed wykazem. JE¦LI ZOSTAWISZ PUSTE NIC NIE BęDZIE SIę WY¦WIETLAć.  Możesz użyć tagów HTML.');
define('_JNEWS_CB_SHOW_NAME', 'Pokaż nazwę listy');
define('_JNEWS_CB_SHOW_NAME_TIPS', 'Wybierz jeśli chcesz wyświetlać nazwy list subskrypcyjnych po tekscie wprowadzającym.');
define('_JNEWS_CB_LIST_DEFAULT', 'Ustaw listę jako domyślną');
define('_JNEWS_CB_LIST_DEFAULT_TIPS', 'Wybierz jeśli chcesz ustawić listę jako domyślną.');
define('_JNEWS_CB_HTML_SHOW', 'Pokaż - "Wysyłka HTML"');
define('_JNEWS_CB_HTML_SHOW_TIPS', 'Wybierz jeśli chcesz aby subskrybenci mogli zadecydować czy chcą otrzymywać wiadomości w formacie HTML.');
define('_JNEWS_CB_HTML_DEFAULT', 'Domyślnie wysyłka HTML');
define('_JNEWS_CB_HTML_DEFAULT_TIPS', 'Opcja ustawia domyślny format mailingu.');

// Since 1.0.4
define('_JNEWS_BACKUP_FAILED', 'Nie można zarchiwizować pliku! Plik nie będzie zastąpiony.');
define('_JNEWS_BACKUP_YOUR_FILES', 'Starsza wersja plików zostaną zariwizowane w następującym katalogu:');
define('_JNEWS_SERVER_LOCAL_TIME', 'SLokalny czas serwera');
define('_JNEWS_SHOW_ARCHIVE', 'Pokaż przycisk archiwum');
define('_JNEWS_SHOW_ARCHIVE_TIPS', 'Wybierz aby pokazać przycisk archiwum w wykazie newstellerów na stronie frontowej');
define('_JNEWS_LIST_OPT_TAG', 'Zakładki');
define('_JNEWS_LIST_OPT_IMG', 'Ilustracje');
define('_JNEWS_LIST_OPT_CTT', 'Zawartość');
define('_JNEWS_INPUT_NAME_TIPS', 'Wpisz swoje imię i nazwisko (koniecznie imię pierwsze)');
define('_JNEWS_IP_TIPS', 'IP of the subscriber' );
define('_JNEWS_INPUT_EMAIL_TIPS', 'Wpisz swój adres e-mail (Upewnij się czy jest to prawidłowy i aktualny adres.)');
define('_JNEWS_RECEIVE_HTML_TIPS', 'Wybierz TAK, jeśłi akceptujesz maile w formacie HTML - NIE aby otrzymywać tylko wiadomości w formacie tekstowym');
define('_JNEWS_TIME_ZONE_ASK_TIPS', 'Wybierz swoją strefę czasową.');

// Since 1.0.5
define('_JNEWS_FILES', 'Pliki');
define('_JNEWS_FILES_UPLOAD', 'Wyślij');
define('_JNEWS_MENU_UPLOAD_IMG', 'Wyślij obrazki');
define('_JNEWS_TOO_LARGE', 'Za duży plik. Makszmalnz doyowlonz roymiar to');
define('_JNEWS_MISSING_DIR', 'Katalog nie istnieje');
define('_JNEWS_IS_NOT_DIR', 'Katalog nie istnieje lub plik nieprawidlowy.');
define('_JNEWS_NO_WRITE_PERMS', 'Katalog nie istnieje lub nie masz uprawnień do zapisu.');
define('_JNEWS_NO_USER_FILE', 'Nie wybrałeś żadnych plików do wysłania.');
define('_JNEWS_E_FAIL_MOVE', 'Przesunięcie pliku niemożliwe.');
define('_JNEWS_FILE_EXISTS', 'Plik już istnieje.');
define('_JNEWS_CANNOT_OVERWRITE', 'Plik już istnieje i nie może zostać nadpisany.');
define('_JNEWS_NOT_ALLOWED_EXTENSION', 'Niedupuszczalne rozszerzenie pliku.');
define('_JNEWS_PARTIAL', 'Ten plik był częściowo wysłany.');
define('_JNEWS_UPLOAD_ERROR', 'Błąd wysyłki:');
define('_JNEWS_DEV_NO_DEF_FILE', 'Ten plik był częściowo wysłany.');

// already exist but modified  added a <br/ on first line and added [SUBSCRIPTIONS] line>
define('_JNEWS_CONTENTREP', '{tag:subscriptions} = Ten element będzie zastąpiony linkiem do subskrypcji.' .
		' Pole <strong>wymagane</strong> aby jNews pracował poprawnie.<br>' .
		'Jeśli umieścisz w tym polu inną zawartość, będzie ona wyświetlana we wszystkich listach wysyłkowych.' .
		' <br> Dodaj na końcu wiadomość o subskrypcji.  jNews automatycznie doda link dla subskrybenta umożliwiający zmianę ustawień subskrybcji lub wypisanie się z listy.');

// since 1.0.6
define('_JNEWS_NOTIFICATION', 'Powiadomienie');  // shortcut for Email notification
define('_JNEWS_NOTIFICATIONS', 'Powiadomienia');
define('_JNEWS_USE_SEF', 'SEF w mailingach');
define('_JNEWS_USE_SEF_TIPS', 'Zalecamy ustawienie tej opcji na NIE.  Jednakże, jeśli chcesz aby adresy URL załączone w mailingach używały opcji SEF, wybierz TAK.' .
		' <br><b> Linki będa działały tak samo dla obu opcji. </b> ');
define('_JNEWS_ERR_NB', 'Błąd #: ERR');
define('_JNEWS_ERR_SETTINGS', 'Błąd ustawień');
define('_JNEWS_ERR_SEND', 'Wyślij raport o błędach');
define('_JNEWS_ERR_SEND_TIPS', ' Jeśli chcesz pomóc w ulepszeniu naszego produktu wybierz TAK.  Spowoduje to przesłanie raportu do nas.  WIęcej powiadomień nie będzie więc potrzeba ;-) <br> <b>PRYWATNE INFORMACJE NIE S? PRZESY?ANE</b>.  Nie wiemy skąd pochodzą wiadomości o błędach. Wysyłana jest tylko informacja o jNews , ustawieniach PHP i zapytaniach SQL. ');
define('_JNEWS_ERR_SHOW_TIPS', 'Wybierz Tak aby wyświetlac numer błędu na ekranie.  Używane głownie w celu wykrywania i usuwania usterek. ');
define('_JNEWS_ERR_SHOW', 'Pokaż błędy');
define('_JNEWS_LIST_SHOW_UNSUBCRIBE', 'Pokaż link do wypisania się');
define('_JNEWS_LIST_SHOW_UNSUBCRIBE_TIPS', 'Wybierz aby pokazać link do wypisania się lub zmiany ustawień subskrypcji list wysyłkowych w stopce każdej wiadomości. <br> Ustawienie NIE wyłącza stopkę i linki.');
define('_JNEWS_UPDATE_INSTALL', '<span style="color: rgb(255, 0, 0);">WAŻNE POWIADMOMIENIE!</span> <br>Jeśli dokonałeś aktualizacji z poprzedniej wersji jNews powinieneś zaktualizować strukturę bazy danych klikając w następujący przycisk (Twoje dane zostaną nienaruszone)');
define('_JNEWS_UPDATE_INSTALL_BTN', 'Aktualizacja tabel i konfiguracji');
define('_JNEWS_MAILING_MAX_TIME', 'Maksymalny czas kolejki');
define('_JNEWS_MAILING_MAX_TIME_TIPS', 'Zdefiniuj maksymalny czas dla wszystkich maili wysyłanych w kolejce. Zalecamy wartość między 30s a 2min.');

// virtuemart integration beta
define('_JNEWS_VM_INTEGRATION', 'Integracja z VirtueMart');
define('_JNEWS_VM_COUPON_NOTIF', 'Zawiadomienie o kupinie ID');
define('_JNEWS_VM_COUPON_NOTIF_TIPS', 'Wybierz numer ID mailingu w którym zamierzasz wysłać kupon rabatowy dla swoich klientów.');
define('_JNEWS_VM_NEW_PRODUCT', 'Zawiadomienie o nowych produktach ID');
define('_JNEWS_VM_NEW_PRODUCT_TIPS', 'Wybiezr numer ID mailingu w którym zamierzasz zawiadomić o nowych produktach.');

// since 1.0.8
// create forms for subscriptions
define('_JNEWS_FORM_BUTTON', 'Utwórz formularz');
define('_JNEWS_FORM_COPY', 'Kod HTML');
define('_JNEWS_FORM_COPY_TIPS', 'Skopiuj wygenerowany kod HTML na twoją stronę.');
define('_JNEWS_FORM_LIST_TIPS', 'Wybierz listę w której chcesz załączyć formularz');
// update messages
define('_JNEWS_UPDATE_MESS4', 'To nie może być zaktualiyowane automatycznie.');
define('_JNEWS_WARNG_REMOTE_FILE', 'Brak możliwości otrzymania zdalnego pliku.');
define('_JNEWS_ERROR_FETCH', 'Błąd przenoszonego pliku.');

define('_JNEWS_CHECK', 'Wybierz');
define('_JNEWS_MORE_INFO', 'Więcej informacji');
define('_JNEWS_UPDATE_NEW', 'Aktualizacja do nowszej wersji');
define('_JNEWS_UPGRADE', 'Aktualizacja do wyższego produktu');
define('_JNEWS_DOWNDATE', 'Powrót do poprzedniej wersji');
define('_JNEWS_DOWNGRADE', 'Powrót do podstawowego produktu');
define('_JNEWS_REQUIRE_JOOM', 'Joomla wymagana');
define('_JNEWS_TRY_IT', 'Wypróbuj!');
define('_JNEWS_NEWER', 'Nowsza');
define('_JNEWS_OLDER', 'Starsza');
define('_JNEWS_CURRENT', 'Aktualna');

// since 1.0.9
define('_JNEWS_CHECK_COMP', 'Wypróbuj jeden z innych  komponentów');
define('_JNEWS_MENU_VIDEO', 'Wideo tutorial');
define('_JNEWS_AUTO_SCHEDULE', 'Przypomnienie');
define('_JNEWS_SCHEDULE_TITLE', 'Ustawienia funkcji automatycznego przypomnienia');
define('_JNEWS_ISSUE_NB_TIPS', 'Publikowane numery generowane są automatycznie przez system');
define('_JNEWS_SEL_ALL', 'Wszystkie mailingi');
define('_JNEWS_SEL_ALL_SUB', 'Wszystkie listy');
define('_JNEWS_INTRO_ONLY_TIPS', 'Jeśli zaznaczysz tylko informacja wstępna z artykułu z linkiem czytaj więcej, będzie załączona do mailingu.');
define('_JNEWS_TAGS_TITLE', 'Zakładka zawartości');
define('_JNEWS_TAGS_TITLE_TIPS', 'Skopijuj i wklej tą zakładkę do mailingu, w miejscu w którym chcesz wyświetlić zawartość.');
define('_JNEWS_PREVIEW_EMAIL_TEST', 'Podaj adres email, na który zostanie wysłany testowy mailing');
define('_JNEWS_PREVIEW_TITLE', 'Podgląd');
define('_JNEWS_AUTO_UPDATE', 'Nowe powiadomienie o aktualizacji');
define('_JNEWS_AUTO_UPDATE_TIPS', 'Wybierz tak jeśli chcesz zostać powiadomiony o nowej aktualizacji towjego komponentu. <br />WAŻNE!! Funkcja pokaż tips-y musi być włączona aby powiadomienie działało.');

// since 1.1.0
define('_JNEWS_LICENSE', 'Informacja o licencji');

// since 1.1.1
define('_JNEWS_NEW', 'New');
define('_JNEWS_SCHEDULE_SETUP', 'In order for the autoresponders to be sent you need to setup scheduler in the configuration.');
define('_JNEWS_SCHEDULER', 'Scheduler');
define('_JNEWS_jnews_CRON_DESC', 'if you do not have access to a cron task manager on your website, you can register for a Free jNews Cron account at:');
define('_JNEWS_CRON_DOCUMENTATION', 'You can find further information on setting up the jNews Scheduler at the following url:');
define('_JNEWS_CRON_DOC_URL', '<a href="http://www.joobi.co/index.php?option=com_content&view=article&id=4249&catid=29&Itemid=72"
 target="_blank">http://www.joobi.co/index.php?option=com_content&Itemid=72&view=category&layout=blog&id=29&limit=60</a>');
define( '_JNEWS_QUEUE_PROCESSED', 'Queue processed succefully...');
define( '_JNEWS_ERROR_MOVING_UPLOAD', 'Error moving imported file');

//since 1.1.4
define( '_JNEWS_SCHEDULE_FREQUENCY', 'Scheduler frequency');
define( '_JNEWS_CRON_MAX_FREQ', 'Scheduler max frequency');
define( '_JNEWS_CRON_MAX_FREQ_TIPS', 'Specify the maximum frequency the scheduler can run ( in minutes ).  This will limit the scheduler even if the cron task is set up more frequently.');
define( '_JNEWS_CRON_MAX_EMAIL', 'Maximum emails per task');
define( '_JNEWS_CRON_MAX_EMAIL_TIPS', 'Specify the maximum number of emails sent per task. If this is set to O the maximim emails per task will be 1');
define( '_JNEWS_CRON_MINUTES', ' minutes');
define( '_JNEWS_SHOW_SIGNATURE', 'Show email footer');
define( '_JNEWS_SHOW_SIGNATURE_TIPS', 'Whether or not you want to promote jNews in the footer of the emails.');
define( '_JNEWS_QUEUE_AUTO_PROCESSED', 'Auto-responders processed successfully...');
define( '_JNEWS_QUEUE_NEWS_PROCESSED', 'Scheduled newsletters processed successfully...');
define( '_JNEWS_MENU_SYNC_USERS', 'Sync Users');
define( '_JNEWS_SYNC_USERS_SUCCESS', 'Users Synchronization Successful!');

// compatibility with Joomla 15
if (!defined('_BUTTON_LOGOUT')) define( '_BUTTON_LOGOUT', 'Logout');
if (!defined('_CMN_YES')) define( '_CMN_YES', 'Yes');
if (!defined('_CMN_NO')) define( '_CMN_NO', 'No');
if (!defined('_HI')) define( '_HI', 'Hi');
if (!defined('_CMN_TOP')) define( '_CMN_TOP', 'Top');
if (!defined('_CMN_BOTTOM')) define( '_CMN_BOTTOM', 'Bottom');
//if (!defined('_BUTTON_LOGOUT')) define( '_BUTTON_LOGOUT', 'Logout');

// For include title only or full article in content item tab in newsletter edit - p0stman911
define('_JNEWS_TITLE_ONLY_TIPS', 'If you select this only the title of the article will be inserted into the mailing as a link to the complete article on your site.');
define('_JNEWS_TITLE_ONLY', 'Title Only');
define('_JNEWS_FULL_ARTICLE_TIPS', 'If you select this the complete article will be inserted into the mailing');
define('_JNEWS_FULL_ARTICLE', 'Full Article');
define('_JNEWS_CONTENT_ITEM_SELECT_T', 'Select a content item to append to the message. <br />Copy and paste the <b>content tag</b> into the mailing.  You can choose to have the full text, intro only, or title only with (0, 1, or 2 respectively). ');
define('_JNEWS_SUBSCRIBE_LIST2', 'Mailing list(s)');


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
define('_JNEWS_MENU_AUTONEWS', 'Smart-Newsletters');
define('_JNEWS_AUTO_NEWS_OPTION', 'Smart-Newsletter options');
define('_JNEWS_AUTONEWS_FREQ', 'Newsletter Frequency');
define('_JNEWS_AUTONEWS_FREQ_TIPS', 'Specify the frequency at which you want to send the smart-newsletter.');
define('_JNEWS_AUTONEWS_SECTION', 'Article Section');
define('_JNEWS_AUTONEWS_SECTION_TIPS', 'Specify the section you want to choose the articles from.');
define('_JNEWS_AUTONEWS_CAT', 'Article Category');
define('_JNEWS_AUTONEWS_CAT_TIPS', 'Specify the category you want to choose the articles from (All for all article in that section).');
define('_JNEWS_SELECT_SECTION', 'All Sections');
define('_JNEWS_SELECT_CAT', 'All Categories');
define('_JNEWS_AUTO_DAY_CH8', 'Quaterly');
define('_JNEWS_AUTONEWS_STARTDATE', 'Start date');
define('_JNEWS_AUTONEWS_STARTDATE_TIPS', 'Specify the date you want to start sending the Smart Newsletter.');
define('_JNEWS_AUTONEWS_TYPE', 'Content rendering');// how we see the content which is included in the newsletter
define('_JNEWS_AUTONEWS_TYPE_TIPS', 'Full Article: will include the entire article in the newsletter.<br />' .
		'Intro only: will include only the introduction of the article in the newsletter.<br/>' .
		'Title only: will include only the title of the article in the newsletter.');
define('_JNEWS_TAGS_AUTONEWS', '[SMARTNEWSLETTER] = This will be replaced by the Smart-newsletter.');

//since 1.1.3
define('_JNEWS_MALING_EDIT_VIEW', 'Create / View Mailings');
define('_JNEWS_LICENSE_CONFIG', 'License');
define('_JNEWS_ENTER_LICENSE', 'Enter license');
define('_JNEWS_ENTER_LICENSE_TIPS', 'Enter your license number and save it.');
define('_JNEWS_LICENSE_SETTING', 'License settings');
define('_JNEWS_GOOD_LIC', 'Your license is valid.');
define('_JNEWS_NOTSO_GOOD_LIC', 'Your license is not valid: ');
define('_JNEWS_PLEASE_LIC', 'Please contact jNews support to upgrade your license ( license@joobi.co ).');

define('_JNEWS_DESC_PLUS', 'jNews Plus is the first sequencial auto-responders for Joomla CMS.  ' . _JNEWS_FEATURES );
define('_JNEWS_DESC_PRO', 'jNews PRO the ultimate mailing system for Joomla CMS.  ' . _JNEWS_FEATURES );

//since 1.1.4
define('_JNEWS_ENTER_TOKEN', 'Enter token');
define('_JNEWS_ENTER_TOKEN_TIPS', 'Please enter your token number you received by email when you purchased jNews. ');
define('_JNEWS_jnews_SITE', 'jNews site:');
define('_JNEWS_MY_SITE', 'My site:');
define( '_JNEWS_LICENSE_FORM', ' ' .
 		'Click here to go to the license form.</a>');
define('_JNEWS_PLEASE_CLEAR_LICENSE', 'Please clear the license field so it is empty and try again.<br />  If the problem persists, ');
define( '_JNEWS_LICENSE_SUPPORT', 'If you still have questions, ' . _JNEWS_PLEASE_LIC );
define( '_JNEWS_LICENSE_TWO', 'you can get your license manual by entering the token number and site URL (which is highlighted in green at the top of this page) in the License form. '
					     . _JNEWS_LICENSE_FORM . '<br /><br/>' . _JNEWS_LICENSE_SUPPORT );
define('_JNEWS_ENTER_TOKEN_PATIENCE', 'After saving your token a license will be generated automatically. ' .
		' Usually the token is validated in 2 minutes.  However, in some cases it can take up to 15 minutes.<br />' .
		'<br />Check back this control panel in few minutes.  <br /><br />' .
		'If you didn\'t receive a valid license key in 15 minutes, '. _JNEWS_LICENSE_TWO );
define( '_JNEWS_ENTER_NOT_YET', 'Your token has not yet been validated.');
define( '_JNEWS_UPDATE_CLICK_HERE', 'Pleae visit <a href="http://www.joobi.co" target="_blank">www.joobi.co</a> to download the newest version.');
//define( '_JNEWS_NOTIF_UPDATE', 'To be notified of new updates enter your email address and click subscribe ');

define('_JNEWS_THINK_PLUS', 'If you want more out of your mailing system think Plus!');
define('_JNEWS_THINK_PLUS_1', 'Sequential auto-responders');
define('_JNEWS_THINK_PLUS_2', 'Schedule the delivery of your newsletter for a predefined date');
define('_JNEWS_THINK_PLUS_3', 'No more server limitation');
define('_JNEWS_THINK_PLUS_4', 'and much more...');


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
define('_JNEWS_TAGS_ISSUE_NB', '{tag:issuenb} = This will be replaced by the issue number of  the newsletter.');
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
define('_JNEWS_REGWARN_NAME', 'Podaj swoje nazwisko i imie.');
define('_JNEWS_REGWARN_MAIL', 'Podaj poprawny adres e-mail.');

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



