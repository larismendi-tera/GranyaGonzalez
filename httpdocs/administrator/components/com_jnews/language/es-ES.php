<?php
defined('_JEXEC') or die('Restricted access');
### Copyright (c) 2006-2012 Joobi Limited. All rights reserved.
### license GNU GPLv3 , link http://www.joobi.co

/**
* <p>Spanish language file</p>
* @author Jorge Pasco <servicio@eaid.org>
* @version $Id: spanish.php 491 2007-02-01 22:56:07Z chris $
* @link http://www.eaid.org
*/

### General ###
 //jnews Description
define('_JNEWS_DESC_CORE', ('jNews es una herramienta para confeccionar listas de correo, boletines, auto-respuestas y seguimientos; que podrá utilizar para comunicarse con sus clientes y usuarios de manera efectiva.  ' .
		'¡jNews, su asistente de comunicaciones!'));
define('_JNEWS_DESC_GPL', ('jNews es una herramienta para confeccionar listas de correo, boletines, auto-respuestas y seguimientos; que podrá utilizar para comunicarse con sus clientes y usuarios de manera efectiva.  ' .
		'¡jNews, su asistente de comunicaciones!'));
define('_JNEWS_FEATURES', ('¡jNews, su asistente de comunicaciones!'));

// Type of lists
define('_JNEWS_NEWSLETTER', ('Boletín'));
define('_JNEWS_AUTORESP', ('Auto-respuesta'));
define('_JNEWS_AUTORSS', ('Auto-RSS'));
define('_JNEWS_ECARD', ('Tarjeta electrónica'));
define('_JNEWS_POSTCARD', ('Postal'));
define('_JNEWS_PERF', ('Performance'));
define('_JNEWS_COUPON', ('Cupón'));
define('_JNEWS_CRON', ('Tarea Cron'));
define('_JNEWS_MAILING', ('Envío'));
define('_JNEWS_LIST', ('Lista'));

 //jnews Menu
define('_JNEWS_MENU_LIST', ('Listas'));
define('_JNEWS_MENU_SUBSCRIBERS', ('Suscriptores'));
define('_JNEWS_MENU_NEWSLETTERS', ('Boletines'));
define('_JNEWS_MENU_AUTOS', ('Auto-respuestas'));
define('_JNEWS_MENU_COUPONS', ('Cupones'));
define('_JNEWS_MENU_CRONS', ('Tareas Cron'));
define('_JNEWS_MENU_AUTORSS', ('Auto-RSS'));
define('_JNEWS_MENU_ECARD', ('Tarjetas electrónicass'));
define('_JNEWS_MENU_POSTCARDS', ('Postales'));
define('_JNEWS_MENU_PERFS', ('Performances'));
define('_JNEWS_MENU_TAB_LIST', ('Listas'));
define('_JNEWS_MENU_MAILING_TITLE', ('Envíos'));
define('_JNEWS_MENU_MAILING', ('Envíos para '));
define('_JNEWS_MENU_STATS', ('Estadísticas'));
define('_JNEWS_MENU_STATS_FOR', ('Estadísticas para '));
define('_JNEWS_MENU_CONF', ('Configuración'));
define('_JNEWS_MENU_UPDATE', ('Import'));
define('_JNEWS_MENU_ABOUT', ('Acerca de'));
define('_JNEWS_MENU_LEARN', ('Centro de aprendizaje'));
define('_JNEWS_MENU_MEDIA', ('Gestor multimedia'));
define('_JNEWS_MENU_HELP', ('Ayuda'));
define('_JNEWS_MENU_CPANEL', ('Panel de control'));
define('_JNEWS_MENU_IMPORT', ('Importar'));
define('_JNEWS_MENU_EXPORT', ('Exportar'));
define('_JNEWS_MENU_SUB_ALL', ('Subcribirse a todo'));
define('_JNEWS_MENU_UNSUB_ALL', ('De-subcribirse a todo'));
define('_JNEWS_MENU_VIEW_ARCHIVE', ('Archivo'));
define('_JNEWS_MENU_PREVIEW', ('Vista previa'));
define('_JNEWS_MENU_SEND', ('Enviar'));
define('_JNEWS_MENU_SEND_TEST', ('Enviar correo de prueba'));
define('_JNEWS_MENU_SEND_QUEUE', ('Cola de procesos'));
define('_JNEWS_MENU_VIEW', ('Ver'));
define('_JNEWS_MENU_COPY', ('Copiar'));
define('_JNEWS_MENU_VIEW_STATS', ('Ver estadísticas'));
define('_JNEWS_MENU_CRTL_PANEL', ('Panel de control'));
define('_JNEWS_MENU_LIST_NEW', (' Crear una lista'));
define('_JNEWS_MENU_LIST_EDIT', (' Editar una lista'));
define('_JNEWS_MENU_BACK', ('Regresar'));
define('_JNEWS_MENU_INSTALL', ('Instalación'));
define('_JNEWS_MENU_TAB_SUM', ('Resumen'));
define('_JNEWS_STATUS', ('Estado'));

// messages
define('_JNEWS_ERROR', (' ¡Ha ocurrido un error! '));
define('_JNEWS_SUB_ACCESS', ('Derechos de acceso'));
define('_JNEWS_DESC_CREDITS', ('Créditos'));
define('_JNEWS_DESC_INFO', ('Información'));
define('_JNEWS_DESC_HOME', ('Página de inicio'));
define('_JNEWS_DESC_MAILING', ('Lista de envíos'));
define('_JNEWS_DESC_SUBSCRIBERS', ('Suscriptores'));
define('_JNEWS_PUBLISHED', ('Publicado'));
define('_JNEWS_UNPUBLISHED', ('No Publicado'));
define('_JNEWS_DELETE', ('Eliminar'));
define('_JNEWS_FILTER', ('Filtrar'));
define('_JNEWS_UPDATE', ('Actualizar'));
define('_JNEWS_SAVE', ('Guardar'));
define('_JNEWS_CANCEL', ('Cancelar'));
define('_JNEWS_NAME', ('Nombre'));
define('_JNEWS_EMAIL', ('Correo'));
define('_JNEWS_SELECT', ('Seleccionar'));
define('_JNEWS_ALL', ('todo'));
define('_JNEWS_SEND_A', ('Enviar a '));
define('_JNEWS_SUCCESS_DELETED', (' eliminado con éxito'));
define('_JNEWS_LIST_ADDED', ('Lista creada con éxito'));
define('_JNEWS_LIST_COPY', ('Lista copiada con éxito'));
define('_JNEWS_LIST_UPDATED', ('Lista actualizada con éxito'));
define('_JNEWS_MAILING_SAVED', ('Envío guardado con éxito.'));
define('_JNEWS_UPDATED_SUCCESSFULLY', ('Actualizado con éxito.'));

### Subscribers information ###
//subscribe and unsubscribe info
define('_JNEWS_SUB_INFO', ('Información del suscriptor'));
define('_JNEWS_VERIFY_INFO', ('Por favor verifique el enlace que envió, alguna información no es correcta o se ha perdido.'));
define('_JNEWS_INPUT_NAME', ('Nombre'));
define('_JNEWS_INPUT_EMAIL', ('Correo'));
define('_JNEWS_RECEIVE_HTML', ('¿Acepta HTML?'));
define('_JNEWS_TIME_ZONE', ('Zona horaria'));
define('_JNEWS_BLACK_LIST', ('Lista negra'));
define('_JNEWS_REGISTRATION_DATE', ('Fecha de registro de usuario'));
define('_JNEWS_USER_ID', ('Id de usuario'));
define('_JNEWS_DESCRIPTION', ('Descripción'));
define('_JNEWS_ACCOUNT_CONFIRMED', ('Su cuenta ha sido activada.'));
define('_JNEWS_SUB_SUBSCRIBER', ('Suscriptor'));
define('_JNEWS_SUB_PUBLISHER', ('Editor'));
define('_JNEWS_SUB_ADMIN', ('Administrador'));
define('_JNEWS_REGISTERED', ('Registrado'));
define('_JNEWS_SUBSCRIPTIONS', ('Vuestra suscripción'));
define('_JNEWS_SEND_UNSUBCRIBE', ('Enviar mensaje para de-suscribirse'));
define('_JNEWS_SEND_UNSUBCRIBE_TIPS', ('Seleccione SI para enviar un correo de confirmación a fin de de-suscribirse.'));
define('_JNEWS_SUBSCRIBE_SUBJECT_MESS', ('Por favor confirme su suscripción'));
define('_JNEWS_UNSUBSCRIBE_SUBJECT_MESS', ('Confirmación de de-suscripción'));
define('_JNEWS_DEFAULT_SUBSCRIBE_MESS', ('Saludos {tag:name},<br />' .
		'Falta un paso más para confirmar su suscripción en la lista.  Por favor acceda al siguiente enlace a fin de confirmar su suscripción.' .
		'<br /><br />{tag:confirm}<br /><br />Para cualquier consulta contáctese con el administrador.'));
define('_JNEWS_DEFAULT_UNSUBSCRIBE_MESS', ('Este es un mensaje que confirma su de-suscripción de nuestra lista.  Sentimos mucho que haya decidido cancelar su suscripción, sin embargo si decide reaanudarla puede hacerlo en nuestro portal web. Si tuviese alguna consulta puede contactar al administrador.'));

// jNews Subscribers
define('_JNEWS_SIGNUP_DATE', ('Fecha de registro'));
define('_JNEWS_CONFIRMED', ('Confirmado'));
define('_JNEWS_SUBSCRIB', ('Suscrito'));
define('_JNEWS_HTML', ('Correo HTML'));
define('_JNEWS_RESULTS', ('Resultados'));
define('_JNEWS_SEL_LIST', ('Seleccione una lista'));
define('_JNEWS_SEL_LIST_TYPE', ('- Seleccione el tipo de lista -'));
define('_JNEWS_SUSCRIB_LIST', ('Lista de todos los suscriptores'));
define('_JNEWS_SUSCRIB_LIST_UNIQUE', ('Suscriptores para: '));
define('_JNEWS_NO_SUSCRIBERS', ('No se encontraron suscriptores para estas listas.'));
define('_JNEWS_COMFIRM_SUBSCRIPTION', ('Un mensaje de confirmación le ha sido enviado.  Por favor revise su correo y seleccione el enlace provisto.<br />' .
		'Necesita confirmar su correo para que su suscripción sea iniciada.'));
define('_JNEWS_SUCCESS_ADD_LIST', ('Usted ha sido añadido exitósamente a la lista.'));


 // Subscription info
define('_JNEWS_CONFIRM_LINK', ('Acceda aquí para confirmar la suscripción'));
define('_JNEWS_UNSUBSCRIBE_LINK', ('Acceda aquí para cancelar manualmente la suscripción a la lista'));
define('_JNEWS_UNSUBSCRIBE_MESS', ('Su correo ha sido removido de la lista'));

define('_JNEWS_QUEUE_SENT_SUCCESS', ('Todos los mensajes pendientes han sido enviados con éxito.'));
define('_JNEWS_MALING_VIEW', ('Ver todos los envíos'));
define('_JNEWS_UNSUBSCRIBE_MESSAGE', ('¿Está seguro que desea cancelar su suscripción de esta lista?'));
define('_JNEWS_MOD_SUBSCRIBE', ('Suscribirse'));
define('_JNEWS_SUBSCRIBE', ('Suscribirse'));
define('_JNEWS_UNSUBSCRIBE', ('De-suscribirse'));
define('_JNEWS_VIEW_ARCHIVE', ('Ver archivo'));
define('_JNEWS_SUBSCRIPTION_OR', (' o acceda aquí para actualizar su información'));
define('_JNEWS_EMAIL_ALREADY_REGISTERED', ('Este correo ha sido registrado previamente.'));
define('_JNEWS_SUBSCRIBER_DELETED', ('Suscriptor eliminado con éxito.'));


### UserPanel ###
 //User Menu
define('_JNEWS_UCP_USER_PANEL', ('Panel de control del usuario'));
define('_JNEWS_UCP_USER_MENU', ('Menú del usuario'));
define('_JNEWS_UCP_USER_CONTACT', ('Mis suscripciones'));
 //jNews Cron Menu
define('_JNEWS_UCP_CRON_MENU', ('Administración de tareas Cron'));
define('_JNEWS_UCP_CRON_NEW_MENU', ('Nueva tarea Cron'));
define('_JNEWS_UCP_CRON_LIST_MENU', ('Lista de mis tareas Cron'));
 //jNews Coupon Menu
define('_JNEWS_UCP_COUPON_MENU', ('Administración de cupones'));
define('_JNEWS_UCP_COUPON_LIST_MENU', ('Lista de cupones'));
define('_JNEWS_UCP_COUPON_ADD_MENU', ('Añadir un cupón'));

### lists ###
// Tabs
define('_JNEWS_LIST_T_GENERAL', ('Descripción'));
define('_JNEWS_LIST_T_LAYOUT', ('Formato'));
define('_JNEWS_LIST_T_SUBSCRIPTION', ('Suscripción'));
define('_JNEWS_LIST_T_SENDER', ('Información de remitente'));

define('_JNEWS_LIST_TYPE', ('Tipo de lista'));
define('_JNEWS_LIST_NAME', ('Nombre de lista'));
define('_JNEWS_LIST_ISSUE', ('Edición #'));
define('_JNEWS_LIST_DATE', ('Fecha de envío'));
define('_JNEWS_LIST_SUB', ('Asunto'));
define('_JNEWS_ATTACHED_FILES', ('Archivos adjuntos'));
define('_JNEWS_SELECT_LIST', ('¡Por favor seleccione una lista para editar!'));

// Auto Responder box
define('_JNEWS_AUTORESP_ON', ('Tipo de lista'));
define('_JNEWS_AUTO_RESP_OPTION', ('Opciones de Auto-respuesta'));
define('_JNEWS_AUTO_RESP_FREQ', ('Los suscriptores pueden elegir la frecuencia'));
define('_JNEWS_AUTO_DELAY', ('Retardo (en días)'));
define('_JNEWS_AUTO_DAY_MIN', ('Frecuencia mínima'));
define('_JNEWS_AUTO_DAY_MAX', ('Frecuencia máxima'));
define('_JNEWS_FOLLOW_UP', ('Especificar seguimiento de auto-respuesta'));
define('_JNEWS_AUTO_RESP_TIME', ('Suscriptores pueden elegir el tiempo'));
define('_JNEWS_LIST_SENDER', ('Remitentes de lista'));

define('_JNEWS_LIST_DESC', ('Descripción de lista'));
define('_JNEWS_LAYOUT', ('Formato'));
define('_JNEWS_SENDER_NAME', ('Nombre de remitente'));
define('_JNEWS_SENDER_EMAIL', ('Correo de remitente'));
define('_JNEWS_SENDER_BOUNCE', ('Dirección de respuesta de remitente'));
define('_JNEWS_LIST_DELAY', ('Retardo'));
define('_JNEWS_HTML_MAILING', ('¿Envío en HTML?'));
define('_JNEWS_HTML_MAILING_DESC', ('(si efectúa algún cambio deberá guardarlo y retornar a esta pantalla para poder observar el efecto.)'));
define('_JNEWS_HIDE_FROM_FRONTEND', ('¿Esconder en el portal web?'));
define('_JNEWS_SELECT_IMPORT_FILE', ('Seleccione un archivo para importar'));;
define('_JNEWS_IMPORT_FINISHED', ('Importación finalizada'));
define('_JNEWS_DELETION_OFFILE', ('Eliminación de fichero'));
define('_JNEWS_MANUALLY_DELETE', (' falló, usted deberá eliminar el fichero manualmente'));
define('_JNEWS_CANNOT_WRITE_DIR', ('no se puede escribir en el directorio'));
define('_JNEWS_NOT_PUBLISHED', ('no puede remitirse el envío, la lista no se ha publicado.'));

//  List info box
define('_JNEWS_INFO_LIST_PUB', ('Seleccione SI para publicar la lista'));
define('_JNEWS_INFO_LIST_NAME', ('Ingrese el nombre de su lista. Usted puede identificar su lista mediante este nombre.'));
define('_JNEWS_INFO_LIST_DESC', ('Ingrese una breve descripción de su lista. Esta descripción será visible por los visitantes de su portal.'));
define('_JNEWS_INFO_LIST_SENDER_NAME', ('Ingrese el nombre del remitente del envío. Este nombre será visible cuando los suscriptores reciban mensajes de esta lista.'));
define('_JNEWS_INFO_LIST_SENDER_EMAIL', ('Ingrese el correo electrónico del cual serán enviados los mensajes.'));
define('_JNEWS_INFO_LIST_SENDER_BOUNCED', ('Ingrese el correo electrónico al cual podrán responder los suscriptores. Es áltamente recomendable que sea el mismo del cual ha sido enviado el mensaje puesto que los filtros de spam pueden considerarlo como riesgoso si encuentran diferencias.'));
define('_JNEWS_INFO_LIST_AUTORESP', ('Escoja el tipo de envío para esta lista. <br />' .
		'Boletín: boletín normal<br />' .
		'Auto-respuesta: una auto-respuesta es una lista que es enviada automáticamente mediante el portal web a intervalos regulares.'));
define('_JNEWS_INFO_LIST_FREQUENCY', ('Permitir a los usuarios seleccionar la frecuencia con la cual recibirán la lista.  Esto les provee flexibilidad de operación.'));
define('_JNEWS_INFO_LIST_TIME', ('Permita que el usuario escoja el momento del día en el cual recibirá la lista.'));
define('_JNEWS_INFO_LIST_MIN_DAY', ('Defina cual es la frecuencia mínima que el usuario podrá escoger para recibir la lista'));
define('_JNEWS_INFO_LIST_DELAY', ('Defina cual es el retardo entre esta auto-respuesta y la anterior.'));
define('_JNEWS_INFO_LIST_DATE', ('Especifique la fecha para publicar las nuevas listas si quiere retardar la publicación. <br /> FORMATO : YYYY-MM-DD HH:MM:SS'));
define('_JNEWS_INFO_LIST_MAX_DAY', ('Defina cual es la frecuencia máxima que el usuario podrá escoger para recibir la lista'));
define('_JNEWS_INFO_LIST_LAYOUT', ('Ingrese el diseño de sus envíos. Puede ingresar cualquier diseño para sus correos.'));
define('_JNEWS_INFO_LIST_SUB_MESS', ('Este mensaje será enviado al suscriptor cuando el o ella se registren por primera vez. Puede definir el texto que desee aquí.'));
define('_JNEWS_INFO_LIST_UNSUB_MESS', ('Este mensaje será enviado al suscriptor cuando el o ella se de-suscriba. Puede ingresar cualquier mensaje aquí.'));
define('_JNEWS_INFO_LIST_HTML', ('Seleccione la casilla de verificación si quiere enviar correos en formato HTML. Los suscriptores pueden especificar si desean recibir mensajes en formato HTML o en texto llano cuando se suscriben a una lista HTML.'));
define('_JNEWS_INFO_LIST_HIDDEN', ('Elija SI para esconder la lista en el portal web, los usuarios no serán capaces de suscribirse pero usted podrá seguir enviando listas a los que ya se han registrado.'));
define('_JNEWS_INFO_LIST_JNEWS_AUTO_SUB', ('¿Quiere suscribir usuarios automáticamente a esta lista?<br /><B>Nuevos usuarios:</B> serán registrados todos los nuevos usuarios que se registren a través del portal web.<br /><B>Todos los usuarios:</B> serán registrados todos los usuarios de la base de datos.<br />(todas estas opciones soportan Community Builder)'));
define('_JNEWS_INFO_LIST_ACC_LEVEL', ('Seleccione el nivel de acceso del portal web. Esto podrá mostrar u ocultar los envíos a los grupos de usuarios que no tengan acceso a ella, por tanto no tendrán la opción de suscribirse.'));
define('_JNEWS_INFO_LIST_ACC_USER_ID', ('Seleccione el nivel de acceso de los grupos de usuarios a los cuales permitirá la edición. Ese grupo y los inmediatamente superiores tendrán la posibilidad de editar los envíos y remitirlos tanto desde el portal web como desde el panel administrativo.'));
define('_JNEWS_INFO_LIST_FOLLOW_UP', ('Puede especificar el seguimiento  de la auto-respuesta si usted desea que sea movida a otra una vez que alcance el último mensaje.'));
define('_JNEWS_INFO_LIST_JNEWS_OWNER', ('Esta es la identificación de la persona que creó la lista.'));
define('_JNEWS_INFO_LIST_WARNING', ('   Esta última opción estará disponible sólo al momento de la creación de la lista.'));
define('_JNEWS_INFO_LIST_SUBJET', (' Asunto del envío.  Este es el asunto que mostrará el mensaje que el suscriptor reciba.'));
define('_JNEWS_INFO_MAILING_CONTENT', ('Este es el cuerpo del mensaje que usted quiere enviar.'));
define('_JNEWS_INFO_MAILING_NOHTML', ('Ingrese el cuerpo del mensaje que usted desea enviar a los suscriptores que escogieron secibir sólo mensajes en texto llano. <BR/> NOTE: Si lo deja en blanco jNews convertirá automáticamente el HTML a texto llano.'));
define('_JNEWS_INFO_MAILING_VISIBLE', ('Seleccione SI para mostrar el mensaje en el portal web.'));
define('_JNEWS_INSERT_CONTENT', ('Inserte un contenido existente'));

// Coupons
define('_JNEWS_SEND_COUPON_SUCCESS', ('¡Cupón enviado con éxito!'));
define('_JNEWS_CHOOSE_COUPON', ('Seleccione un cupón'));
define('_JNEWS_TO_USER', (' para este usuario'));

### Cron options
//drop down frequency(CRON)
define('_JNEWS_FREQ_CH1', ('Cada hora'));
define('_JNEWS_FREQ_CH2', ('Cada 6 horas'));
define('_JNEWS_FREQ_CH3', ('Cada 12 horas'));
define('_JNEWS_FREQ_CH4', ('Diario'));
define('_JNEWS_FREQ_CH5', ('Semanal'));
define('_JNEWS_FREQ_CH6', ('Mensual'));
define('_JNEWS_FREQ_NONE', ('No'));
define('_JNEWS_FREQ_NEW', ('Nuevos usuarios'));
define('_JNEWS_FREQ_ALL', ('Todos los usuarios'));

//Label CRON form
define('_JNEWS_LABEL_FREQ', ('¿Tarea Cron de jNews?'));
define('_JNEWS_LABEL_FREQ_TIPS', ('Seleccione SI en el caso que desee usar esto para una tarea Cron de jNews, NO para cualquier otra tarea Cron.<br />' .
		'Si escoge SI no necesita especificar la dirección de la tarea Cron puesto que será añadida automaticamente.'));
define('_JNEWS_SITE_URL', ('Su dirección URL'));
define('_JNEWS_CRON_FREQUENCY', ('Frecuencia de tarea Cron'));
define('_JNEWS_STARTDATE_FREQ', ('Fecha de inicio'));
define('_JNEWS_LABELDATE_FREQ', ('Especifique fecha'));
define('_JNEWS_LABELTIME_FREQ', ('Especifique hora'));
define('_JNEWS_CRON_URL', ('Dirección URL de tarea Cron'));
define('_JNEWS_CRON_FREQ', ('Frecuencia'));
define('_JNEWS_TITLE_CRONLIST', ('Lista de tareas Cron'));
define('_JNEWS_NEW_LIST', ('Cree una nueva lista'));

//title CRON form
define('_JNEWS_TITLE_FREQ', ('Editar tareas Cron'));
define('_JNEWS_CRON_SITE_URL', ('Por favor ingrese una URL válida que empiece con http://'));

### Mailings ###
define('_JNEWS_MAILING_ALL', ('Todos los envíos'));
define('_JNEWS_EDIT_A', ('Editar un '));
define('_JNEWS_SELCT_MAILING', ('Por favor seleccione una lista del menú desplegable a fin de añadir un nuevo envío.'));
define('_JNEWS_VISIBLE_FRONT', ('Visible en el portal web'));

// mailer
define('_JNEWS_SUBJECT', ('Asunto'));
define('_JNEWS_CONTENT', ('Contenido'));
define('_JNEWS_NAMEREP', ('{tag:name} = Este campo será reemplazado por el nombre que el suscriptor haya ingresado al registrarse, con ello podrá personalizar sus mensajes.<br />'));
define('_JNEWS_FIRST_NAME_REP', ('{tag:firstname} = Este campo será reemplazado por el primer nombre del suscriptor.<br />'));
define('_JNEWS_NONHTML', ('Version en texto llano'));
define('_JNEWS_ATTACHMENTS', ('Archivos adjuntos'));
define('_JNEWS_SELECT_MULTIPLE', ('Mantenga presionado CTRL (o command) para seleccionar múltiples archivos adjuntos.<br />' .
		'Los ficheros mostrados en este grupo están localizados en la carpeta de archivos adjuntos, usted puede cambiar la ubicación en el panel de control.'));
define('_JNEWS_CONTENT_ITEM', ('Artículos con contenido'));
define('_JNEWS_SENDING_EMAIL', ('Enviando correo'));
define('_JNEWS_MESSAGE_NOT', ('El mensaje no pudo ser enviado'));
define('_JNEWS_MAILER_ERROR', ('Error del proceso de correo'));
define('_JNEWS_MESSAGE_SENT_SUCCESSFULLY', ('Mensaje enviado con éxito'));
define('_JNEWS_SENDING_TOOK', ('Enviar este mensaje tomará'));
define('_JNEWS_SECONDS', ('segundos'));
define('_JNEWS_NO_ADDRESS_ENTERED', ('No se ha especificado dirección de correo o suscriptor'));
define('_JNEWS_CHANGE_SUBSCRIPTIONS', ('Cambiar'));
define('_JNEWS_CHANGE_EMAIL_SUBSCRIPTION', ('Cambiar la suscripción'));
define('_JNEWS_WHICH_EMAIL_TEST', ('Indique una dirección de correo donde enviar un mensaje de prueba para comprobar la visualización'));
define('_JNEWS_SEND_IN_HTML', ('¿Enviar con formato HTML (para listas html)?'));
define('_JNEWS_VISIBLE', ('Visible'));
define('_JNEWS_INTRO_ONLY', ('Sólo introducción'));

// stats
define('_JNEWS_GLOBALSTATS', ('Estadísticas globales'));
define('_JNEWS_DETAILED_STATS', ('Estadísticas detalladas'));
define('_JNEWS_MAILING_LIST_DETAILS', ('Estadísticas de listas'));
define('_JNEWS_SEND_IN_HTML_FORMAT', ('Enviar con formato HTML'));
define('_JNEWS_VIEWS_FROM_HTML', ('Vistas (de correos html)'));
define('_JNEWS_SEND_IN_TEXT_FORMAT', ('Enviar como texto llano'));
define('_JNEWS_HTML_READ', ('leído HTML'));
define('_JNEWS_HTML_UNREAD', ('no leído HTML'));
define('_JNEWS_TEXT_ONLY_SENT', ('Texto llano'));

// Configuration panel
// main tabs
define('_JNEWS_MAIL_CONFIG', ('Correo'));
define('_JNEWS_LOGGING_CONFIG', ('Registro y estadísticas'));
define('_JNEWS_SUBSCRIBER_CONFIG', ('Suscriptores'));
define('_JNEWS_MISC_CONFIG', ('Otros'));
define('_JNEWS_MAIL_SETTINGS', ('Configuración de cuenta de correo'));
define('_JNEWS_MAILINGS_SETTINGS', ('Configuración de envíos'));
define('_JNEWS_SUBCRIBERS_SETTINGS', ('Configuración de suscriptores'));
define('_JNEWS_CRON_SETTINGS', ('Configuración de tareas Cron'));
define('_JNEWS_SENDING_SETTINGS', ('Configuración de despachos'));
define('_JNEWS_STATS_SETTINGS', ('Configuración de estadísticas'));
define('_JNEWS_LOGS_SETTINGS', ('Configuración de registros'));
define('_JNEWS_MISC_SETTINGS', ('Otras configuraciones'));
// mail settings
define('_JNEWS_SEND_MAIL_FROM', ('Correo de envío'));
define('_JNEWS_SEND_MAIL_NAME', ('Nombre de envío'));
define('_JNEWS_MAILSENDMETHOD', ('Método de correo'));
define('_JNEWS_SENDMAILPATH', ('Ruta de Sendmail'));
define('_JNEWS_SMTPHOST', ('Servidor SMTP'));
define('_JNEWS_SMTPAUTHREQUIRED', ('Autentificación requerida por SMTP'));
define('_JNEWS_SMTPAUTHREQUIRED_TIPS', ('Seleccione SI en el caso que su servidor SMTP requiera autentificación'));
define('_JNEWS_SMTPUSERNAME', ('Usuario SMTP'));
define('_JNEWS_SMTPUSERNAME_TIPS', ('Ingrese el nombre de usuario para el servidor SMTP'));
define('_JNEWS_SMTPPASSWORD', ('Contraseña SMTP'));
define('_JNEWS_SMTPPASSWORD_TIPS', ('Ingrese la contraseña para el servidor SMTP'));
define('_JNEWS_USE_EMBEDDED', ('Usar imágenes incluídas'));
define('_JNEWS_USE_EMBEDDED_TIPS', ('Seleccione SI en el caso que las imágenes adjuntas en los artículos con contenido deban ser incluídas en el correo con formato html. Seleccione NO para usar etiquetas de imágenes que las vincularán con una dirección de su sitio web.'));
define('_JNEWS_UPLOAD_PATH', ('Ruta de subida/archivos adjuntos'));
define('_JNEWS_UPLOAD_PATH_TIPS', ('Puede especificar un directorio para carga de archivos.<br />' .
		'Asegúrese que el directorio especificado exista de lo contrario créelo.'));

// Suscriptors settings
define('_JNEWS_ALLOW_UNREG', ('Permitir no registrados'));
define('_JNEWS_ALLOW_UNREG_TIPS', ('Seleccione SI en el caso que desee que sus usuarios se suscriban a las listas sin haberse registrado en su portal web.'));
define('_JNEWS_REQ_CONFIRM', ('Requerir confirmación'));
define('_JNEWS_REQ_CONFIRM_TIPS', ('Seleccione SI en el caso que requiera que sus suscriptores no registrados confirmen sus direcciones de correo electrónico.'));
define('_JNEWS_SUB_SETTINGS', ('Configuración de suscripción'));
define('_JNEWS_SUBMESSAGE', ('Correo de suscripción'));
define('_JNEWS_SUBSCRIBE_LIST', ('Suscribirse a una lista'));

define('_JNEWS_USABLE_TAGS', ('Etiquetas usables'));
define('_JNEWS_NAME_AND_CONFIRM', ('<b>{tag:confirm}</b> = Este campo crea un vínculo donde el suscriptor puede confirmar su suscripción, es <strong>requerida</strong> para que jNews funcione correctamente.<br />'
.'<br />{tag:name} = Este campo será reemplazado por el nombre que el suscriptor haya ingresado al registrarse, con ello podrá personalizar sus mensajes.<br />'
.'<br />{tag:firstname} = Este campo será reemplazado por el primer nombre del suscriptor.<br />'));
define('_JNEWS_CONFIRMFROMNAME', ('Nombre de remitente en correo de confirmación'));
define('_JNEWS_CONFIRMFROMNAME_TIPS', ('Ingrese el nombre para mostrar en la confirmación de listas.'));
define('_JNEWS_CONFIRMFROMEMAIL', ('Correo de remitente en confirmación'));
define('_JNEWS_CONFIRMFROMEMAIL_TIPS', ('Ingrese la dirección de correo que se mostrará en la confirmación de listas.'));
//define('_JNEWS_CONFIRMBOUNCE', ('Correo de respuesta'));
//define('_JNEWS_CONFIRMBOUNCE_TIPS', ('Ingrese la dirección de correo de respuesta en la confirmación de listas.'));
define('_JNEWS_HTML_CONFIRM', ('Confirmación de HTML'));
define('_JNEWS_HTML_CONFIRM_TIPS', ('Seleccione SI  en el caso que que la confirmación de la lista deba ser html si es que el usuario lo permite.'));
define('_JNEWS_TIME_ZONE_ASK', ('Solicitar zona horaria'));
define('_JNEWS_TIME_ZONE_TIPS', ('Seleccione SI en el caso que desee preguntar al usuario su zona horaria. Los correos pendientes se basarán en la zona horaria cuando sea aplicable'));

 // Cron Set up
 define('_JNEWS_AUTO_CONFIG', ('Tareas Cron'));
define('_JNEWS_TIME_OFFSET_URL', ('Seleccione para configurar la compensación horaria (offset) en el panel de configuracioón global -> Tabulador Local'));
define('_JNEWS_TIME_OFFSET_TIPS', ('Configure la compensación horaria en su servidor a fin que los registros de fecha y hora sean exactos'));
define('_JNEWS_TIME_OFFSET', ('Compensación horaria'));
define('_JNEWS_CRON_DESC', ('<br />¡Usando la función de tareas Cron podrá configurar la automatización de trabajos para su sitio Joomla!<br />' .
		'Para configurarlo usted necesitará añadir en las tareas Cron de su panel de control el siguiente commando:<br />' .
		'<b>' . JNEWS_JPATH_LIVE . '/index.php?option=com_jnews&act=cron</b> ' .
		'<br /><br />Si usted necesita ayuda para efectuar la configuración o tiene problemas por favor remítase a nuestros foros en <a href="http://www.joobi.co" target="_blank">http://www.joobi.co</a>'));
// sending settings
define('_JNEWS_PAUSEX', ('Detener x segundos cada cierta cantidad de correos'));
define('_JNEWS_PAUSEX_TIPS', ('Ingrese el número de segundos que jNews deberá dar al servidor SMTP para enviar los mensajes antes de proceder con la siguiente cantidad configurada de mensajes.'));
define('_JNEWS_EMAIL_BET_PAUSE', ('Correos entre pausas'));
define('_JNEWS_EMAIL_BET_PAUSE_TIPS', ('La cantidad de correos a enviar antes de detener.'));
define('_JNEWS_WAIT_USER_PAUSE', ('Esperar por confirmación de usuario en la pausa'));
define('_JNEWS_WAIT_USER_PAUSE_TIPS', ('En el caso que el script deba esperar a la confirmación del usuario entre los grupos de mensajes.'));
define('_JNEWS_SCRIPT_TIMEOUT', ('Tiempo de espera del Script'));
define('_JNEWS_SCRIPT_TIMEOUT_TIPS', ('La cantidad de minutos que el script debe esperar en ejecución (0 para ilimitado).'));
// Stats settings
define('_JNEWS_ENABLE_READ_STATS', ('Permitir estadísticas de lectura'));
define('_JNEWS_ENABLE_READ_STATS_TIPS', ('Seleccione SI en el caso que desee registrar la cantidad de lecturas. Esta técnica sólo puede ser usada en los envíos html'));
define('_JNEWS_LOG_VIEWSPERSUB', ('Registro de lecturas por suscriptor'));
define('_JNEWS_LOG_VIEWSPERSUB_TIPS', ('Seleccione SI en el caso que desee registrar el número de lecturas por suscriptor. Esta técnica sólo puede ser usada en los envíos html'));
// Logs settings
define('_JNEWS_DETAILED', ('Registros detallados'));
define('_JNEWS_SIMPLE', ('Registros simples'));
define('_JNEWS_DIAPLAY_LOG', ('Mostrar registros'));
define('_JNEWS_DISPLAY_LOG_TIPS', ('Seleccione SI en el caso que desee mostrar los registros mientras procesa sus envíos.'));
define('_JNEWS_SEND_PERF_DATA', ('Performance de envíos'));
define('_JNEWS_SEND_PERF_DATA_TIPS', ('Seleccione SI en el caso que desee permitir a jNews enviar reportes ANÓNIMOS respecto a su configuración, número de suscriptores de una lista y el tiempo que tomó realizar el envío. Esto puede darnos una idea del performance de jNews y nos podrá AYUDAR a mejorar jNews en entregas futuras.'));
define('_JNEWS_SEND_AUTO_LOG', ('Enviar registros para auto-respuestas'));
define('_JNEWS_SEND_AUTO_LOG_TIPS', ('Seleccione SI en el caso que desee enviar un correo de registro cada vez que un proceso es ejecutado.  ADVERTENCIA: esto puede desencadenar la generación de una alta cantidad de correos.'));
define('_JNEWS_SEND_LOG', ('Enviar Registro'));
define('_JNEWS_SEND_LOG_TIPS', ('Si un registro del envío debe ser remitido a la dirección de correo del usuario que programó el mismo.'));
define('_JNEWS_SEND_LOGDETAIL', ('Enviar detalles de registro'));
define('_JNEWS_SEND_LOGDETAIL_TIPS', ('Detallado: Incluye información detallada del éxito o fracaso por cada suscriptor junto con un resumen global. Simple: Sólo envía el resumen.'));
define('_JNEWS_SEND_LOGCLOSED', ('Enviar registro si la conexión se cerró'));
define('_JNEWS_SEND_LOGCLOSED_TIPS', ('Con esta opción el usuario que generó el envío podrá recibir un reporte por correo.'));
define('_JNEWS_SAVE_LOG', ('Guardar registro'));
define('_JNEWS_SAVE_LOG_TIPS', ('Si un registro de envío debe ser guardado en un archivo.'));
define('_JNEWS_SAVE_LOGDETAIL', ('Guardar detalles de registro'));
define('_JNEWS_SAVE_LOGDETAIL_TIPS', ('Detallado: Incluye información detallada del éxito o fracaso por cada Suscriptor junto con un resumen global. Simple: Sólo envía el resumen.'));
define('_JNEWS_SAVE_LOGFILE', ('Archivo de registro'));
define('_JNEWS_SAVE_LOGFILE_TIPS', ('Archivo donde la información será guardada. Este archivo puede ser extenso.'));
define('_JNEWS_CLEAR_LOG', ('Borrar registros'));
define('_JNEWS_CLEAR_LOG_TIPS', ('Limpia el archivo de registros.'));

### control panel
define('_JNEWS_CP_LAST_QUEUE', ('Último proceso ejecutado'));
define('_JNEWS_CP_TOTAL', ('Total'));
define('_JNEWS_MAILING_COPY', ('¡Envío copiado con éxito!'));

// Miscellaneous settings
define('_JNEWS_SHOW_GUIDE', ('Mostrar guía'));
define('_JNEWS_SHOW_GUIDE_TIPS', ('Muestra la guía cuando inicia el componente a fin de facilitar a los nuevos usuarios la tarea de crear boletines, auto-respuestas y configurar jNews correctamente.'));
define('_JNEWS_AUTOS_ON', ('Usar Auto-respuestas'));
define('_JNEWS_AUTOS_ON_TIPS', ('Seleccione NO en el caso que no desee usar Auto-respuestas, todas las opciones de auto-respuestas serán desactivadas.'));
define('_JNEWS_NEWS_ON', ('Usar Boletiness'));
define('_JNEWS_NEWS_ON_TIPS', ('Select NO en el caso que no desee usar Boletines, todas las opciones de boletines serán desactivadas.'));
define('_JNEWS_SHOW_TIPS', ('Mostrar consejos'));
define('_JNEWS_SHOW_TIPS_TIPS', ('Mostrar consejos para ayudar a los usuarios a ejecutar jNews con mayor efectividad.'));
define('_JNEWS_SHOW_FOOTER', ('Mostrar pie de página'));
define('_JNEWS_SHOW_FOOTER_TIPS', ('Decidir si el pie de página con los derechos reservados debe ser o no mostrado.'));
define('_JNEWS_SHOW_LISTS', ('Mostrar listas en el portal web'));
define('_JNEWS_SHOW_LISTS_TIPS', ('Cuando un usuario no está registrado permite mostrar una lista de las listas a las cuales puede suscribirse con un botón de archivo para boletines o un simple formulario de registro.'));
define('_JNEWS_CONFIG_UPDATED', ('¡Los detalles de configuración han sido actualizados!'));
define('_JNEWS_UPDATE_URL', ('URL para actualizaciones'));
define('_JNEWS_UPDATE_URL_WARNING', ('¡ADVERTENCIA! No cambie esta URL si antes no ha consultado con el equipo técnico de jNews.<br />'));
define('_JNEWS_UPDATE_URL_TIPS', ('Por ejemplo: http://www.joobi.co/update/ (incluya la barra de cierre)'));

// module
define('_JNEWS_EMAIL_INVALID', ('El correo ingresado no es válido.'));
define('_JNEWS_REGISTER_REQUIRED', ('Por favor regístrese en el portal antes de registrarse en una lista.'));

// Access level box
define('_JNEWS_OWNER', ('Creador de la lista:'));
define('_JNEWS_ACCESS_LEVEL', ('Defina el nivel de acceso para la lisra'));
define('_JNEWS_ACCESS_LEVEL_OPTION', ('Opciones de nivel de acceso'));
define('_JNEWS_USER_LEVEL_EDIT', ('Seleccione qué nivel de usuario es permitido para editar un envío (tanto desde el portal como desde el panel de administración) '));

//  drop down options
define('_JNEWS_AUTO_DAY_CH1', ('Diario'));
define('_JNEWS_AUTO_DAY_CH2', ('Diario menos en fin de semana'));
define('_JNEWS_AUTO_DAY_CH3', ('Cualquier otro día'));
define('_JNEWS_AUTO_DAY_CH4', ('Cualquier otro día menos en fin de semana'));
define('_JNEWS_AUTO_DAY_CH5', ('Semanal'));
define('_JNEWS_AUTO_DAY_CH6', ('Cada 2 semanas'));
define('_JNEWS_AUTO_DAY_CH7', ('Mensual'));
define('_JNEWS_AUTO_DAY_CH9', ('Anual'));
define('_JNEWS_AUTO_OPTION_NONE', ('No'));
define('_JNEWS_AUTO_OPTION_NEW', ('Nuevos usuarios'));
define('_JNEWS_AUTO_OPTION_ALL', ('Todos los usuarios'));

//
define('_JNEWS_UNSUB_MESSAGE', ('Correo de de-suscripción'));
define('_JNEWS_UNSUB_SETTINGS', ('Ajustes de de-suscripción'));
define('_JNEWS_AUTO_ADD_NEW_USERS', ('¿Auto suscribir usuarios?'));

// Update and upgrade messages
define('_JNEWS_NO_UPDATES', ('No hay actualizaciones disponibles.'));
define('_JNEWS_VERSION', ('Versión de jNews'));
define('_JNEWS_NEED_UPDATED', ('Archivos que necesitan ser actualizados:'));
define('_JNEWS_NEED_ADDED', ('Archivos que necesitan ser añadidos:'));
define('_JNEWS_NEED_REMOVED', ('Archivos que necesitan ser eliminados:'));
define('_JNEWS_FILENAME', ('Nombre de archivo:'));
define('_JNEWS_CURRENT_VERSION', ('Versión actual:'));
define('_JNEWS_NEWEST_VERSION', ('Última Versión:'));
define('_JNEWS_UPDATING', ('Actualizando'));
define('_JNEWS_UPDATE_UPDATED_SUCCESSFULLY', ('Los archivos han sido actualizados con éxito.'));
define('_JNEWS_UPDATE_FAILED', ('¡Actualización fallida!'));
define('_JNEWS_ADDING', ('Añadiendo'));
define('_JNEWS_ADDED_SUCCESSFULLY', ('Añadido con éxito.'));
define('_JNEWS_ADDING_FAILED', ('¡Fallo al añadir!'));
define('_JNEWS_REMOVING', ('Eliminando'));
define('_JNEWS_REMOVED_SUCCESSFULLY', ('Eliminado con éxito.'));
define('_JNEWS_REMOVING_FAILED', ('¡Falló la eliminación!'));
define('_JNEWS_INSTALL_DIFFERENT_VERSION', ('Instale una versión diferente'));
define('_JNEWS_CONTENT_ADD', ('Añadir contenido'));
define('_JNEWS_UPGRADE_FROM', ('Importar datos (información de boletines y suscriptores) de '));
define('_JNEWS_UPGRADE_MESS', ('No hay riesgo para la información existente. <br /> Este proceso sólo importará la información a la base de datos de jNews.'));
define('_JNEWS_CONTINUE_SENDING', ('Continúe el envío'));

// jNews message
define('_JNEWS_UPGRADE1', ('Puede fácilmente importar sus usuarios y boletines desde '));
define('_JNEWS_UPGRADE2', (' hacia jNews en el panel de actualizaciones.'));
define('_JNEWS_UPDATE_MESSAGE', ('¡Una nueva versión de jNews está disponible! '));
define('_JNEWS_UPDATE_MESSAGE_LINK', ('¡Seleccione para actualizar!'));
define('_JNEWS_CRON_SETUP', ('Para que las auto-respuestas puedan ser enviadas debe configurar una tarea Cron.'));
define('_JNEWS_THANKYOU', ('Gracias por escoger jNews, ¡Su asistente de comunicaciones!'));
define('_JNEWS_NO_SERVER', ('Servidor de actualizaciones no disponible, por favor inténtelo más tarde.'));
define('_JNEWS_MOD_PUB', ('El módulo de jNews no está publicado.'));
define('_JNEWS_MOD_PUB_LINK', ('¡Presione aquí para publicarlo!'));
define('_JNEWS_IMPORT_SUCCESS', ('Importado con éxito'));
define('_JNEWS_IMPORT_EXIST', ('Suscriptor ya registrado en la base de datos'));

// jNews Install
define('_JNEWS_INSTALL_CONFIG', ('Configuración jNews'));
define('_JNEWS_INSTALL_SUCCESS', ('Instalado con éxito'));
define('_JNEWS_INSTALL_ERROR', ('¡Error en la instalación'));
define('_JNEWS_INSTALL_BOT', ('Plugin jNews (Bot)'));
define('_JNEWS_INSTALL_MODULE', ('Módulo jNews'));
//Others
define('_JNEWS_JAVASCRIPT', ('!Advertencia! Javascript debe estar habilitado para permitir una correcta operación.'));
define('_JNEWS_EXPORT_TEXT', ('La exportación de suscriptores estará basada en la lista que usted escoja. <br />Exportar suscriptores a lista'));
define('_JNEWS_IMPORT_TIPS', ('Importar suscriptores. La información en el archivo necesita tener el siguiente formato: <br />' .
		'Nombre,correo,recibeHTML(1/0),<span style="color: rgb(255, 0, 0);">confirmado(1/0)</span>'));
define('_JNEWS_SUBCRIBER_EXIT', ('es ya un suscriptor'));
define('_JNEWS_GET_STARTED', ('¡Presione aquí para iniciar!'));

//News since 1.0.1
define('_JNEWS_WARNING_1011', ('Advertencia: 1011: La actualización no funcionará por restricciones de su servidor.'));
define('_JNEWS_SEND_MAIL_FROM_TIPS', ('Elija la dirección de correo que mostrará el remitente.'));
define('_JNEWS_SEND_MAIL_NAME_TIPS', ('Elija el nombre que mostrará el remitente.'));
define('_JNEWS_MAILSENDMETHOD_TIPS', ('Elija el mensajero que desea usar: función de correo PHP, <span>Sendmail</span> o servidor SMTP.'));
define('_JNEWS_SENDMAILPATH_TIPS', ('Este es el directorio del servidor de correo'));
define('_JNEWS_LIST_T_TEMPLATE', ('Plantilla'));
define('_JNEWS_NO_MAILING_ENTERED', ('No se ha provisto envío'));
define('_JNEWS_NO_LIST_ENTERED', ('No se ha provisto lista'));
define('_JNEWS_SENT_MAILING', ('Envíos completados'));
define('_JNEWS_SELECT_FILE', ('Por favor seleccione un archivo para '));
define('_JNEWS_LIST_IMPORT', ('Revise la lista(s) a las cuales desea que sean asociados sus suscriptores.'));
define('_JNEWS_PB_QUEUE', ('Suscriptor insertado pero presenta problemas al conectarlo/la a la lista(s). Por favor revise manualmente.'));
define('_JNEWS_UPDATE_MESS1', ('¡Actualización áltamente recomendada!'));
define('_JNEWS_UPDATE_MESS2', ('Parches y pequeñas reparaciones.'));
define('_JNEWS_UPDATE_MESS3', ('Nueva entrega.'));
define('_JNEWS_UPDATE_MESS5', ('Es requerido Joomla 1.5 para actualizar.'));
define('_JNEWS_UPDATE_IS_AVAIL', (' está disponible!'));
define('_JNEWS_NO_MAILING_SENT', ('¡No se procesó envío!'));
define('_JNEWS_SHOW_LOGIN', ('Mostrar formulario de ingreso'));
define('_JNEWS_SHOW_LOGIN_TIPS', ('Seleccione SI para mostrar el formulario de ingreso en el panel de control de jNews del portal web a fin que los usuarios se registren.'));
define('_JNEWS_LISTS_EDITOR', ('Editor de descripción de lista'));
define('_JNEWS_LISTS_EDITOR_TIPS', ('Seleccione SI para usar un editor HTML a fin de modificar el campo descriptivo de la lista.'));
define('_JNEWS_SUBCRIBERS_VIEW', ('Ver suscriptores'));

//News since 1.0.2
define('_JNEWS_FRONTEND_SETTINGS', ('Configuración en portal web'));
define('_JNEWS_SHOW_LOGOUT', ('Mostrar botón de salida'));
define('_JNEWS_SHOW_LOGOUT_TIPS', ('Seleccione SI a fin de mostrar el botón de salida en el panel de control de jNews en el portal web.'));

//News since 1.0.3 CB integration
define('_JNEWS_CONFIG_INTEGRATION', ('Integración'));
define('_JNEWS_CB_INTEGRATION', ('Integración con Community Builder'));
define('_JNEWS_INSTALL_PLUGIN', ('Plugin de Community Builder Plugin (Integración con jNews) '));
define('_JNEWS_CB_PLUGIN_NOT_INSTALLED', ('¡El plugin jNews para Community Builder no ha sido instalado!'));
define('_JNEWS_CB_PLUGIN', ('Listas al registrarse'));
define('_JNEWS_CB_PLUGIN_TIPS', ('Seleccione SI a fin de mostrar las listas de correo al momento de registrarse con el formulario de Community Builder'));
define('_JNEWS_CB_LISTS', ('IDs de listas'));
define('_JNEWS_CB_LISTS_TIPS', ('ESTE ES UN CAMPO REQUERIDO. Ingrese el número identificador de las listas a las cuales desea que sus usuarios tengan acceso de suscripción separadas por comas (0 mostrará todas las listas)'));
define('_JNEWS_CB_INTRO', ('Texto introductorio'));
define('_JNEWS_CB_INTRO_TIPS', ('Texto que aparecerá antes de las listas. DÉJELO EN BLANCO PARA NO MOSTRAR NADA.  Usted puede usar etiquetas HTML para dar efectos visuales.'));
define('_JNEWS_CB_SHOW_NAME', ('Mostrar nombres de listas'));
define('_JNEWS_CB_SHOW_NAME_TIPS', ('Seleciónelo en el caso que desee o no mostrar el nombre de la lista luego de la introducción.'));
define('_JNEWS_CB_LIST_DEFAULT', ('Activar listas por defecto'));
define('_JNEWS_CB_LIST_DEFAULT_TIPS', ('Seleciónelo en el caso que desee o no mostrar activada la casilla de verificación por defecto.'));
define('_JNEWS_CB_HTML_SHOW', ('Mostrar aceptación de HTML'));
define('_JNEWS_CB_HTML_SHOW_TIPS', ('Seleccione SI para permitir a los usuarios la selección de correos con formato HTML. Seleccione NO para definir HTML por defecto.'));
define('_JNEWS_CB_HTML_DEFAULT', ('Recibir HTML por defecto'));
define('_JNEWS_CB_HTML_DEFAULT_TIPS', ('Configure esta opción para mostrar que los correos serán enviados en html por defecto. En el caso que "mostrar recepción como HTML" esté configurado en NO entonces esta será la opción por defecto.'));

// Since 1.0.4
define('_JNEWS_BACKUP_FAILED', ('¡No pudo realizarse la copia de seguridad del archivo! El archivo no fue reemplazado.'));
define('_JNEWS_BACKUP_YOUR_FILES', ('La versión antigua de los archivos ha sido guardada en el siguiente directorio:'));
define('_JNEWS_SERVER_LOCAL_TIME', ('Hora local del servidor'));
define('_JNEWS_SHOW_ARCHIVE', ('Mostrar botón de Archivo'));
define('_JNEWS_SHOW_ARCHIVE_TIPS', ('Seleccione SI a fin de mostrar el botón de archivo en la sección de la lista ubicada en el portal web'));
define('_JNEWS_LIST_OPT_TAG', ('Etiquetas'));
define('_JNEWS_LIST_OPT_IMG', ('Imágenes'));
define('_JNEWS_LIST_OPT_CTT', ('Contenido'));
define('_JNEWS_INPUT_NAME_TIPS', ('Ingrese su nombre completo (nombre de pila al inicio)'));
define('_JNEWS_IP_TIPS', 'IP of the subscriber' );
define('_JNEWS_INPUT_EMAIL_TIPS', ('ingrese su correo electrónico (asegúrese que es una dirección válida si desea recibir nuestros envíos.)'));
define('_JNEWS_RECEIVE_HTML_TIPS', ('Seleccione SI a fin de recibir envíos HTML - Seleccione NO para recibir los envíos en texto llano'));
define('_JNEWS_TIME_ZONE_ASK_TIPS', ('Especifique su zona horaria.'));

// Since 1.0.5
define('_JNEWS_FILES', ('Archivos'));
define('_JNEWS_FILES_UPLOAD', ('Cargar'));
define('_JNEWS_MENU_UPLOAD_IMG', ('Cargar imágenes'));
define('_JNEWS_TOO_LARGE', ('Archivo demasiado grande. El máximo tamaño permitido es'));
define('_JNEWS_MISSING_DIR', ('El directorio de destino no existe'));
define('_JNEWS_IS_NOT_DIR', ('El directorio de destino no existe o es un archivo regular.'));
define('_JNEWS_NO_WRITE_PERMS', ('El directorio de destino no tiene permisos de escritura.'));
define('_JNEWS_NO_USER_FILE', ('No ha seleccionado ningún archivo para cargar.'));
define('_JNEWS_E_FAIL_MOVE', ('Imposible mover el archivo.'));
define('_JNEWS_FILE_EXISTS', ('El archivo de destino ya existe.'));
define('_JNEWS_CANNOT_OVERWRITE', ('El archivo de destino ya existe y no puede ser sobreescrito.'));
define('_JNEWS_NOT_ALLOWED_EXTENSION', ('La extensión del archivo no está permitida.'));
define('_JNEWS_PARTIAL', ('El archivo fue parcialmente cargado.'));
define('_JNEWS_UPLOAD_ERROR', ('Error de carga:'));
define('_JNEWS_DEV_NO_DEF_FILE', ('El archivo fue parcialmente cargado.'));

// already exist but modified  added a <br/ on first line and added [SUBSCRIPTIONS] line>
define('_JNEWS_CONTENTREP', ('{tag:subscriptions} = Este campo será reemplazado con el enlace de suscripción.' .
		' Esto es <strong>requerido</strong> para que jNews trabaje correctamente.<br />' .
		'Si usted coloca cualquier otro contenido en esta area, el mismo será mostrado en todos los envíos correspondientes a esta lista.' .
		' <br />Añada su mensaje de suscripción al final.  jNews añadirá automáticamente un enlace para que el suscriptor cambie su información y otro enlace para de-suscribirse de la lista.'));

// since 1.0.6
define('_JNEWS_NOTIFICATION', ('Notificación'));  // shortcut for Email notification
define('_JNEWS_NOTIFICATIONS', ('Notificaciones'));
define('_JNEWS_USE_SEF', ('SEF en envíos'));
define('_JNEWS_USE_SEF_TIPS', ('Es recomendable que usted elija NO.  Sin embargo si usted desea que las URL incluídas en su envío usen SEF seleccione SI.' .
		' <br /><b>Los enlaces trabajarán en cualquira de las opciones.  No podemos asegurar que los enlaces trabajarán siempre si usted cambia su SEF.</b> '));
define('_JNEWS_ERR_NB', ('Error #: ERR'));
define('_JNEWS_ERR_SETTINGS', ('Error manejando la configuración'));
define('_JNEWS_ERR_SEND', ('Enviar reportes de error'));
define('_JNEWS_ERR_SEND_TIPS', ('Si usted desea que jNews sea un mejor producto por favor seleccione SI.  Esto permitirá que nos envíe un reporte de error. Sin embargo usted no necesitará enviar nunca más reportes de errores ;-) <br /> <b>NINGUNA INFORMACIÓN PRIVADA ES ENVIADA</b>.  Nunca sabremos de que portal web proviene el error. Nosotros sólo enviamos información sobre jNews, la configuración PHP y las consultas SQL. '));
define('_JNEWS_ERR_SHOW_TIPS', ('Seleccione SI para mostrar el número de error en su pantalla.  Principalmente usado para correción de fallas. '));
define('_JNEWS_ERR_SHOW', ('Mostrar errores'));
define('_JNEWS_LIST_SHOW_UNSUBCRIBE', ('Mostrar enlaces de de-suscripción'));
define('_JNEWS_LIST_SHOW_UNSUBCRIBE_TIPS', ('Seleccione SI para mostrar los enlaces de de-suscripción al final de los envíos para que los usuarios puedan cambiar sus suscripciones. <br /> No desactive el pie de página y los vínculos.'));
define('_JNEWS_UPDATE_INSTALL', ('<span style="color: rgb(255, 0, 0);">¡NOTICIA IMPORTANTE!</span> <br />Si usted está actualizando de una versión previamente instalada de jNews, necesitará actualizar la estructura de su base de datos presionando el siguiente botón (Su información se mantendrá íntegra)'));
define('_JNEWS_UPDATE_INSTALL_BTN', ('Actualizar tablas y configuración'));
define('_JNEWS_MAILING_MAX_TIME', ('Máximo tiempo de espera'));
define('_JNEWS_MAILING_MAX_TIME_TIPS', ('Defina el máximo periodo de tiempo para cada grupo de correos enviados por el proceso. Se recomienda que sea entre 30s y 2mins.'));

// virtuemart integration beta
define('_JNEWS_VM_INTEGRATION', ('Integración con VirtueMart'));
define('_JNEWS_VM_COUPON_NOTIF', ('ID de notificación de cupón'));
define('_JNEWS_VM_COUPON_NOTIF_TIPS', ('Especifique el número de ID del envío que usted desea usar para remitir cupones a sus compradores.'));
define('_JNEWS_VM_NEW_PRODUCT', ('ID de Notificación de nuevos productos'));
define('_JNEWS_VM_NEW_PRODUCT_TIPS', ('Especifique el número de ID del envío que usted desea usar para notificar la existencia de nuevos productos.'));

// since 1.0.8
// create forms for Suscripcións
define('_JNEWS_FORM_BUTTON', ('Crear formulario'));
define('_JNEWS_FORM_COPY', ('Código HTML'));
define('_JNEWS_FORM_COPY_TIPS', ('Copie el código HTML generado en su página HTML.'));
define('_JNEWS_FORM_LIST_TIPS', ('Seleccione la lista que desea incluir en el formulario'));
// update messages
define('_JNEWS_UPDATE_MESS4', ('No puede ser actualizado automáticamente.'));
define('_JNEWS_WARNG_REMOTE_FILE', ('No hay forma de recuperar el archivo remoto.'));
define('_JNEWS_ERROR_FETCH', ('Error recuperando archivo.'));

define('_JNEWS_CHECK', ('Revisar'));
define('_JNEWS_MORE_INFO', ('Más información'));
define('_JNEWS_UPDATE_NEW', ('Actualizar a nueva versión'));
define('_JNEWS_UPGRADE', ('Actualizar a un producto mayor'));
define('_JNEWS_DOWNDATE', ('Regresar a la versión previa'));
define('_JNEWS_DOWNGRADE', ('Regresar al producto básico'));
define('_JNEWS_REQUIRE_JOOM', ('Requiere Joomla'));
define('_JNEWS_TRY_IT', ('¡Puébelo!'));
define('_JNEWS_NEWER', ('Nuevo'));
define('_JNEWS_OLDER', ('Antiguo'));
define('_JNEWS_CURRENT', ('Actual'));

// since 1.0.9
define('_JNEWS_CHECK_COMP', ('Pruebe uno de los otros componentes'));
define('_JNEWS_MENU_VIDEO', ('Video tutoriales'));
define('_JNEWS_AUTO_SCHEDULE', ('Programación'));
define('_JNEWS_SCHEDULE_TITLE', ('Configuración de la función de programación automática'));
define('_JNEWS_ISSUE_NB_TIPS', ('Número de publicación generado automáticamente por el sistema'));
define('_JNEWS_SEL_ALL', ('Todos los envíos'));
define('_JNEWS_SEL_ALL_SUB', ('Todas las listas'));
define('_JNEWS_INTRO_ONLY_TIPS', ('Si usted selecciona esta opción, sólo la introducción del artículo será insertada en el envío junto con un enlace de "leer más" que lo dirigirpa hacia el artículo completo en el portal web.'));
define('_JNEWS_TAGS_TITLE', ('Etiqueta de contenido'));
define('_JNEWS_TAGS_TITLE_TIPS', ('Copie y pegue esta etiqueta dentro del envío en el cual desea que el contenido sea colocado.'));
define('_JNEWS_PREVIEW_EMAIL_TEST', ('Indique la dirección a la cual se enviará el correo de prueba.'));
define('_JNEWS_PREVIEW_TITLE', ('Vista previa'));
define('_JNEWS_AUTO_UPDATE', ('Notificación de nuevas actualizaciones'));
define('_JNEWS_AUTO_UPDATE_TIPS', ('Seleccione SI en el caso que desee ser notificado de nuevas actualizaciones para su componente. <br />¡IMPORTANTE!! Mostar consejos necesita estar activado para que esta función trabaje correctamente.'));

// since 1.1.0
define('_JNEWS_LICENSE', ('Información de Licencia'));


// since 1.1.1
define('_JNEWS_NEW', ('New'));
define('_JNEWS_SCHEDULE_SETUP', ('In order for the autoresponders to be sent you need to setup scheduler in the configuration.'));
define('_JNEWS_SCHEDULER', ('Scheduler'));
define('_JNEWS_jnews_CRON_DESC', ('if you do not have access to a cron task manager on your website, you can register for a Free jNews Cron account at:'));
define('_JNEWS_CRON_DOCUMENTATION', ('You can find further information on setting up the jNews Scheduler at the following url:'));
define('_JNEWS_CRON_DOC_URL', ('<a href="http://www.joobi.co/index.php?option=com_content&view=article&id=4249&catid=29&Itemid=72"
 target="_blank">http://www.joobi.co/index.php?option=com_content&Itemid=72&view=category&layout=blog&id=29&limit=60</a>'));
define( '_JNEWS_QUEUE_PROCESSED', ('Queue processed succefully...'));
define( '_JNEWS_ERROR_MOVING_UPLOAD', ('Error moving imported file'));

//since 1.1.4
define( '_JNEWS_SCHEDULE_FREQUENCY', ('Scheduler frequency'));
define( '_JNEWS_CRON_MAX_FREQ', ('Scheduler max frequency'));
define( '_JNEWS_CRON_MAX_FREQ_TIPS', ('Specify the maximum frequency the scheduler can run ( in minutes ).  This will limit the scheduler even if the cron task is set up more frequently.'));
define( '_JNEWS_CRON_MAX_EMAIL', ('Maximum emails per task'));
define( '_JNEWS_CRON_MAX_EMAIL_TIPS', ('Specify the maximum number of emails sent per task. If this is set to O the maximim emails per task will be 1'));
define( '_JNEWS_CRON_MINUTES', (' minutes'));
define( '_JNEWS_SHOW_SIGNATURE', ('Show email footer'));
define( '_JNEWS_SHOW_SIGNATURE_TIPS', ('Whether or not you want to promote jNews in the footer of the emails.'));
define( '_JNEWS_QUEUE_AUTO_PROCESSED', ('Auto-responders processed successfully...'));
define( '_JNEWS_QUEUE_NEWS_PROCESSED', ('Scheduled newsletters processed successfully...'));
define( '_JNEWS_MENU_SYNC_USERS', ('Sync Users'));
define( '_JNEWS_SYNC_USERS_SUCCESS', ('Users Synchronization Successful!'));

// compatibility with Joomla 15
if (!defined('_BUTTON_LOGOUT')) define( '_BUTTON_LOGOUT', ('Logout'));
if (!defined('_CMN_YES')) define( '_CMN_YES', ('Yes'));
if (!defined('_CMN_NO')) define( '_CMN_NO', ('No'));
if (!defined('_HI')) define( '_HI', ('Hi'));
if (!defined('_CMN_TOP')) define( '_CMN_TOP', ('Top'));
if (!defined('_CMN_BOTTOM')) define( '_CMN_BOTTOM', ('Bottom'));
//if (!defined('_BUTTON_LOGOUT')) define( '_BUTTON_LOGOUT', ('Logout'));

// For include title only or full article in content item tab in newsletter edit - p0stman911
define('_JNEWS_TITLE_ONLY_TIPS', ('If you select this only the title of the article will be inserted into the mailing as a link to the complete article on your site.'));
define('_JNEWS_TITLE_ONLY', ('Title Only'));
define('_JNEWS_FULL_ARTICLE_TIPS', ('If you select this the complete article will be inserted into the mailing'));
define('_JNEWS_FULL_ARTICLE', ('Full Article'));
define('_JNEWS_CONTENT_ITEM_SELECT_T', ('Select a content item to append to the message. <br />Copy and paste the <b>content tag</b> into the mailing.  You can choose to have the full text, intro only, or title only with (0, 1, or 2 respectively). '));
define('_JNEWS_SUBSCRIBE_LIST2', ('Mailing list(s)'));

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
define('_JNEWS_AUTONEWS', ('Smart-Newsletter'));
define('_JNEWS_MENU_AUTONEWS', ('Smart-Newsletters'));
define('_JNEWS_AUTO_NEWS_OPTION', ('Smart-Newsletter options'));
define('_JNEWS_AUTONEWS_FREQ', ('Newsletter Frequency'));
define('_JNEWS_AUTONEWS_FREQ_TIPS', ('Specify the frequency at which you want to send the smart-newsletter.'));
define('_JNEWS_AUTONEWS_SECTION', ('Article Section'));
define('_JNEWS_AUTONEWS_SECTION_TIPS', ('Specify the section you want to choose the articles from.'));
define('_JNEWS_AUTONEWS_CAT', ('Article Category'));
define('_JNEWS_AUTONEWS_CAT_TIPS', ('Specify the category you want to choose the articles from (All for all article in that section).'));
define('_JNEWS_SELECT_SECTION', ('All Sections'));
define('_JNEWS_SELECT_CAT', ('All Categories'));
define('_JNEWS_AUTO_DAY_CH8', ('Quaterly'));
define('_JNEWS_AUTONEWS_STARTDATE', ('Start date'));
define('_JNEWS_AUTONEWS_STARTDATE_TIPS', ('Specify the date you want to start sending the Smart Newsletter.'));
define('_JNEWS_AUTONEWS_TYPE', ('Content rendering'));// how we see the content which is included in the newsletter
define('_JNEWS_AUTONEWS_TYPE_TIPS', ('Full Article: will include the entire article in the newsletter.<br />' .
		'Intro only: will include only the introduction of the article in the newsletter.<br/>' .
		'Title only: will include only the title of the article in the newsletter.'));
define('_JNEWS_TAGS_AUTONEWS', ('[SMARTNEWSLETTER] = This will be replaced by the Smart-newsletter.'));

//since 1.1.3
define('_JNEWS_MALING_EDIT_VIEW', ('Create / View Mailings'));
define('_JNEWS_LICENSE_CONFIG', ('License'));
define('_JNEWS_ENTER_LICENSE', ('Enter license'));
define('_JNEWS_ENTER_LICENSE_TIPS', ('Enter your license number and save it.'));
define('_JNEWS_LICENSE_SETTING', ('License settings'));
define('_JNEWS_GOOD_LIC', ('Your license is valid.'));
define('_JNEWS_NOTSO_GOOD_LIC', ('Your license is not valid: '));
define('_JNEWS_PLEASE_LIC', ('Please contact jNews support to upgrade your license ( license@joobi.co ).'));

define('_JNEWS_DESC_PLUS', 'jNews Plus is the first sequencial auto-responders for Joomla CMS.  ' . _JNEWS_FEATURES );
define('_JNEWS_DESC_PRO', 'jNews PRO the ultimate mailing system for Joomla CMS.  ' . _JNEWS_FEATURES );

//since 1.1.4
define('_JNEWS_ENTER_TOKEN', ('Enter token'));
define('_JNEWS_ENTER_TOKEN_TIPS', ('Please enter your token number you received by email when you purchased jNews. '));
define('_JNEWS_jnews_SITE', ('jNews site:'));
define('_JNEWS_MY_SITE', ('My site:'));
define( '_JNEWS_LICENSE_FORM', (' ' .
 		'Click here to go to the license form.</a>'));
define('_JNEWS_PLEASE_CLEAR_LICENSE', ('Please clear the license field so it is empty and try again.<br />  If the problem persists, '));
define( '_JNEWS_LICENSE_SUPPORT', 'If you still have questions, ' . _JNEWS_PLEASE_LIC );
define( '_JNEWS_LICENSE_TWO', 'you can get your license manual by entering the token number and site URL (which is highlighted in green at the top of this page) in the License form. '
			. _JNEWS_LICENSE_FORM . '<br /><br/>' . _JNEWS_LICENSE_SUPPORT );
define('_JNEWS_ENTER_TOKEN_PATIENCE', 'After saving your token a license will be generated automatically. ' .
		' Usually the token is validated in 2 minutes.  However, in some cases it can take up to 15 minutes.<br />' .
		'<br />Check back this control panel in few minutes.  <br /><br />' .
						     'If you didn\'t receive a valid license key in 15 minutes, '. _JNEWS_LICENSE_TWO );
define( '_JNEWS_ENTER_NOT_YET', ('Your token has not yet been validated.'));
define( '_JNEWS_UPDATE_CLICK_HERE', ('Pleae visit <a href="http://www.joobi.co" target="_blank">www.joobi.co</a> to download the newest version.'));
//define( '_JNEWS_NOTIF_UPDATE', ('To be notified of new updates enter your email address and click subscribe '));

define('_JNEWS_THINK_PLUS', ('If you want more out of your mailing system think Plus!'));
define('_JNEWS_THINK_PLUS_1', ('Sequential auto-responders'));
define('_JNEWS_THINK_PLUS_2', ('Schedule the delivery of your newsletter for a predefined date'));
define('_JNEWS_THINK_PLUS_3', ('No more server limitation'));
define('_JNEWS_THINK_PLUS_4', ('and much more...'));


//since 1.2.2
define( '_JNEWS_LIST_ACCESS', ('List Access'));
define( '_JNEWS_INFO_LIST_ACCESS', ('Specify what group of users can view and subscribe to this list'));
define( 'JNEWS_NO_LIST_PERM', ('You don\'t have enough permission to subscribe to this list'));

//Archive Configuration
 define('_JNEWS_MENU_TAB_ARCHIVE', ('Archive'));
 define('_JNEWS_MENU_ARCHIVE_ALL', ('Archive All'));

//Archive Lists
 define('_JNEWS_FREQ_OPT_0', ('None'));
 define('_JNEWS_FREQ_OPT_1', ('Every Week'));
 define('_JNEWS_FREQ_OPT_2', ('Every 2 Weeks'));
 define('_JNEWS_FREQ_OPT_3', ('Every Month'));
 define('_JNEWS_FREQ_OPT_4', ('Every Quarter'));
 define('_JNEWS_FREQ_OPT_5', ('Every Year'));
 define('_JNEWS_FREQ_OPT_6', ('Other'));

define('_JNEWS_DATE_OPT_1', ('Created date'));
define('_JNEWS_DATE_OPT_2', ('Modified date'));

define('_JNEWS_ARCHIVE_TITLE', ('Setting up auto-archive frequency'));
define('_JNEWS_FREQ_TITLE', ('Archive frequency'));
define('_JNEWS_FREQ_TOOL', ('Define how often you want the Archive Manager to arhive your website content.'));
define('_JNEWS_NB_DAYS', ('Number of days'));
define('_JNEWS_NB_DAYS_TOOL', ('This is only for the Other option! Please specify the number of days between each Archive.'));
define('_JNEWS_DATE_TITLE', ('Date type'));
define('_JNEWS_DATE_TOOL', ('Define if the archived should be done on the created date or modified date.'));

define('_JNEWS_MAINTENANCE_TAB', ('Maintenance settings'));
define('_JNEWS_MAINTENANCE_FREQ', ('Maintenance frequency'));
define( '_JNEWS_MAINTENANCE_FREQ_TIPS', ('Specify the frequency at which you want the maintenance routine to run.'));
define( '_JNEWS_CRON_DAYS', ('hour(s)'));

define( '_JNEWS_LIST_NOT_AVAIL', ('There is no list available.'));
define( '_JNEWS_LIST_ADD_TAB', ('Add/Edit'));

define( '_JNEWS_LIST_ACCESS_EDIT', ('Mailing Add/Edit Access'));
define( '_JNEWS_INFO_LIST_ACCESS_EDIT', ('Specify what group of users can add or edit a new mailing for this list'));
define( '_JNEWS_MAILING_NEW_FRONT', ('Createa New Mailing'));

define('_JNEWS_AUTO_ARCHIVE', ('Auto-Archive'));
define('_JNEWS_MENU_ARCHIVE', ('Auto-Archive'));

//Extra tags:
define('_JNEWS_TAGS_ISSUE_NB', ('{tag:issuenb} = This will be replaced by the issue number of  the newsletter.'));
define('_JNEWS_TAGS_DATE', ('{tag:date} = This will be replaced by the sent date.'));
define('_JNEWS_TAGS_CB', ('[CBTAG:{field_name}] = This will be replaced by the value taken from the Community Builder field: eg. [CBTAG:firstname] '));
define( '_JNEWS_MAINTENANCE', ('Joobi Care'));


define('_JNEWS_THINK_PRO', ('When you have professional needs, you use professional components!'));
define('_JNEWS_THINK_PRO_1', ('Smart-Newsletters'));
define('_JNEWS_THINK_PRO_2', ('Define access level for your list'));
define('_JNEWS_THINK_PRO_3', ('Define who can edit/add mailings'));
define('_JNEWS_THINK_PRO_4', ('More tags: add your CB fields'));
define('_JNEWS_THINK_PRO_5', ('Joomla contents Auto-archive'));
define('_JNEWS_THINK_PRO_6', ('Database optimization'));

define('_JNEWS_LIC_NOT_YET', ('Your license is not yet valid.  Please check the license Tab in the configuration panel.'));
define('_JNEWS_PLEASE_LIC_GREEN', ('Make sure to provide the green information at the top of the tab to our support team.'));

define('_JNEWS_FOLLOW_LINK', ('Get Your License'));
define( '_JNEWS_FOLLOW_LINK_TWO', ('You can get your license by entering the token number and site URL (which is highlighted in green at the top of this page) in the License form. '));
define( '_JNEWS_ENTER_TOKEN_TIPS2', (' Then click on Apply button in the top right menu.'));
define( '_JNEWS_ENTER_LIC_NB', ('Enter your License'));
define( '_JNEWS_UPGRADE_LICENSE', ('Upgrade Your License'));
define( '_JNEWS_UPGRADE_LICENSE_TIPS', ('If you received a token to upgrade your license please enter it here, click Apply and proceed to number <b>2</b> to get your new license number.'));

define( '_JNEWS_MAIL_FORMAT', ('Encoding format'));
define( '_JNEWS_MAIL_FORMAT_TIPS', ('What format do you want to use for encoding your mailings, Text only or MIME'));
define( '_JNEWS_jnews_CRON_DESC_ALT', ('If you do not have access to a cron task manager on your website, you can use the Free jCron component to create a cron task from your website.'));

//since 1.3.1
define('_JNEWS_SHOW_AUTHOR', ('Show Author\'s Name'));
define('_JNEWS_SHOW_AUTHOR_TIPS', ('Select Yes if you want to add the name of the author when you add an article in the Mailing'));

//since 1.3.5
define('_JNEWS_REGWARN_NAME', ('Escriba su nombre.'));
define('_JNEWS_REGWARN_MAIL', ('Escriba su e-mail.'));

//since 1.5.6
define('_JNEWS_ADDEMAILREDLINK_TIPS', ('If you select Yes, the e-mail of the user will be added as a parameter at the end of your redirect URL (the redirect link for your module or for an external jNews form).<br/>That can be useful if you want to execute a special script in your redirect page.'));
define('_JNEWS_ADDEMAILREDLINK', ('Add e-mail to the redirect link'));

//since 1.6.3
define('_JNEWS_ITEMID', ('ItemId'));
define('_JNEWS_ITEMID_TIPS', ('This ItemId will be added to your jNews links.'));

//since 1.6.5
define('_JNEWS_SHOW_JCALPRO', ('jCalPRO'));
define('_JNEWS_SHOW_JCALPRO_TIPS', ('Show the integration tab for jCalPRO <br/>(only if jCalPRO is installed on your website!)'));
define('_JNEWS_JCALTAGS_TITLE', ('jCalPRO Tag:'));
define('_JNEWS_JCALTAGS_TITLE_TIPS', ('Copy and paste this tag into the mailing where you want to have the event to be placed.'));
define('_JNEWS_JCALTAGS_DESC', ('Description:'));
define('_JNEWS_JCALTAGS_DESC_TIPS', ('Select Yes if you want to insert the description of the event'));
define('_JNEWS_JCALTAGS_START', ('Start date:'));
define('_JNEWS_JCALTAGS_START_TIPS', ('Select Yes if you want to insert the start date of the event'));
define('_JNEWS_JCALTAGS_READMORE', ('Read more:'));
define('_JNEWS_JCALTAGS_READMORE_TIPS', ('Select Yes if you want to insert a <b>read more link</b> for this event'));
define('_JNEWS_REDIRECTCONFIRMATION', ('Redirect URL'));
define('_JNEWS_REDIRECTCONFIRMATION_TIPS', ('If you require a confirmation e-mail, the user will be confirmed and redirected to this URL if he clicks on the confirmation link.'));

//since 2.0.0 compatibility with Joomla 1.5
if(!defined('_CMN_SAVE') and defined('CMN_SAVE')) define('_CMN_SAVE',CMN_SAVE);
if(!defined('_CMN_SAVE')) define('_CMN_SAVE','Save');
if(!defined('_NO_ACCOUNT')) define('_NO_ACCOUNT','No account yet?');
if(!defined('_CREATE_ACCOUNT')) define('_CREATE_ACCOUNT','Register');
if(!defined('_NOT_AUTH')) define('_NOT_AUTH','You are not authorised to view this resource.');

//since 3.0.0
define('_JNEWS_DISABLETOOLTIP', ('Disable Tooltip'));
define('_JNEWS_DISABLETOOLTIP_TIPS', ('Disable the tooltip on the frontend'));
define('_JNEWS_MINISENDMAIL', ('Use Mini SendMail'));
define('_JNEWS_MINISENDMAIL_TIPS', ('If your server use Mini SendMail, select this option to don\'t add the name of the user in the header of the e-mail'));

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

define('_JNEWS_SAFEUNSUBSCRIBE', 'aquí');
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



