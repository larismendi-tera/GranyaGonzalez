<?php
defined('_JEXEC') or die('Restricted access');
### Copyright (c) 2006-2012 Joobi Limited. All rights reserved.
### license GNU GPLv3 , link http://www.joobi.co

/**
 * <p>Potuguese language.</p>
 * @copyright (c) 2006-2012 Joobi Limited. All rights reserved.
 * @author  Ricardo Simões <support@joobi.co>
 * @version $Id: portuguese.php 491 2007-02-01 22:56:07Z chris $
* @link http://www.joobi.co
 */

### General ###
 //jnews Description
define('_JNEWS_DESC_CORE', 'jNews é uma ferramenta de listas de mailing, newsletters, auto-respostas, e seguimento, para comunicação eficaz com os seus utilizadores e clientes. ' .
		'jNews, O Seu Parceiro De Comunicação!');
define('_JNEWS_DESC_GPL', 'jNews é uma ferramenta de listas de mailing, newsletters, auto-respostas, e seguimento, para comunicação eficaz com os seus utilizadores e clientes. ' .
		'jNews, O Seu Parceiro De Comunicação!');
define('_JNEWS_FEATURES', 'jNews, o seu parceiro de comunicação!');

// Type of lists
define('_JNEWS_NEWSLETTER', 'Newsletter');
define('_JNEWS_AUTORESP', 'Auto-resposta');
define('_JNEWS_AUTORSS', 'Auto-RSS');
define('_JNEWS_ECARD', 'Cartão Electrónico');
define('_JNEWS_POSTCARD', 'Cartão Postal');
define('_JNEWS_PERF', 'Performance');
define('_JNEWS_COUPON', 'Cupão');
define('_JNEWS_CRON', 'Tarefa Cron');
define('_JNEWS_MAILING', 'Mailing');
define('_JNEWS_LIST', 'Lista');

 //jnews Menu
define('_JNEWS_MENU_LIST', 'Gestão de Listas');
define('_JNEWS_MENU_SUBSCRIBERS', 'Assinantes');
define('_JNEWS_MENU_NEWSLETTERS', 'Newsletters');
define('_JNEWS_MENU_AUTOS', 'Auto-Respostas');
define('_JNEWS_MENU_COUPONS', 'Cupões');
define('_JNEWS_MENU_CRONS', 'Tarefas Cron');
define('_JNEWS_MENU_AUTORSS', 'Auto-RSS');
define('_JNEWS_MENU_ECARD', 'Cartões Electrónicos');
define('_JNEWS_MENU_POSTCARDS', 'Cartões Postais');
define('_JNEWS_MENU_PERFS', 'Performances');
define('_JNEWS_MENU_TAB_LIST', 'Listas');
define('_JNEWS_MENU_MAILING_TITLE', 'Mailings');
define('_JNEWS_MENU_MAILING', 'Mailings para ');
define('_JNEWS_MENU_STATS', 'Estatísticas');
define('_JNEWS_MENU_STATS_FOR', 'Estatísticas para ');
define('_JNEWS_MENU_CONF', 'Configuração');
define('_JNEWS_MENU_UPDATE', 'Importar');
define('_JNEWS_MENU_ABOUT', 'Sobre');
define('_JNEWS_MENU_LEARN', 'Centro de Educação');
define('_JNEWS_MENU_MEDIA', 'Gestão de Media');
define('_JNEWS_MENU_HELP', 'Ajuda');
define('_JNEWS_MENU_CPANEL', 'Painel de Controlo');
define('_JNEWS_MENU_IMPORT', 'Importar');
define('_JNEWS_MENU_EXPORT', 'Exportar');
define('_JNEWS_MENU_SUB_ALL', 'Subcrever Tudo');
define('_JNEWS_MENU_UNSUB_ALL', 'Não-Subscrever Tudo');
define('_JNEWS_MENU_VIEW_ARCHIVE', 'Arquivo');
define('_JNEWS_MENU_PREVIEW', 'Pré-visualizar');
define('_JNEWS_MENU_SEND', 'Enviar');
define('_JNEWS_MENU_SEND_TEST', 'Enviar Email de Teste');
define('_JNEWS_MENU_SEND_QUEUE', 'Fila de Processamento');
define('_JNEWS_MENU_VIEW', 'Ver');
define('_JNEWS_MENU_COPY', 'Copiar');
define('_JNEWS_MENU_VIEW_STATS', 'Ver Estado');
define('_JNEWS_MENU_CRTL_PANEL', ' Painel De Controlo');
define('_JNEWS_MENU_LIST_NEW', ' Criar Lista');
define('_JNEWS_MENU_LIST_EDIT', ' Editar Lista');
define('_JNEWS_MENU_BACK', 'Retroceder');
define('_JNEWS_MENU_INSTALL', 'Instalar');
define('_JNEWS_MENU_TAB_SUM', 'Sumário');
define('_JNEWS_STATUS', 'Estado');

// messages
define('_JNEWS_ERROR', ' Ocorreu um erro! ');
define('_JNEWS_SUB_ACCESS', 'Direitos de Acesso');
define('_JNEWS_DESC_CREDITS', 'Créditos');
define('_JNEWS_DESC_INFO', 'Informação');
define('_JNEWS_DESC_HOME', 'Página Oficial');
define('_JNEWS_DESC_MAILING', 'Lista de Mailing');
define('_JNEWS_DESC_SUBSCRIBERS', 'Assinantes');
define('_JNEWS_PUBLISHED', 'Publicado');
define('_JNEWS_UNPUBLISHED', 'Não-Publicado');
define('_JNEWS_DELETE', 'Apagar');
define('_JNEWS_FILTER', 'Filtrar');
define('_JNEWS_UPDATE', 'Actualizar');
define('_JNEWS_SAVE', 'Salvar');
define('_JNEWS_CANCEL', 'Cancelar');
define('_JNEWS_NAME', 'Nome');
define('_JNEWS_EMAIL', 'E-mail');
define('_JNEWS_SELECT', 'Selecionar');
define('_JNEWS_ALL', 'Todas as');
define('_JNEWS_SEND_A', 'Enviar a ');
define('_JNEWS_SUCCESS_DELETED', ' apagado com sucesso');
define('_JNEWS_LIST_ADDED', 'Lista criada com sucesso');
define('_JNEWS_LIST_COPY', 'Lista copiada com sucesso');
define('_JNEWS_LIST_UPDATED', 'Lista actualizada com sucesso');
define('_JNEWS_MAILING_SAVED', 'Mailing salvado com sucesso.');
define('_JNEWS_UPDATED_SUCCESSFULLY', 'actualizado com sucesso.');

### Subscribers information ###
//subscribe and unsubscribe info
define('_JNEWS_SUB_INFO', 'Informação do Assinante');
define('_JNEWS_VERIFY_INFO', 'Por favor verifique o link que submeteu, falta alguma informação.');
define('_JNEWS_INPUT_NAME', 'Nome');
define('_JNEWS_INPUT_EMAIL', 'Email');
define('_JNEWS_RECEIVE_HTML', 'Receber em HTML?');
define('_JNEWS_TIME_ZONE', 'Zona de Fuso Horário');
define('_JNEWS_BLACK_LIST', 'Lista Negra');
define('_JNEWS_REGISTRATION_DATE', 'Data de registo do utilizador');
define('_JNEWS_USER_ID', 'ID do Utilizador');
define('_JNEWS_DESCRIPTION', 'Descrição');
define('_JNEWS_ACCOUNT_CONFIRMED', 'A sua conta foi activada.');
define('_JNEWS_SUB_SUBSCRIBER', 'Assinante');
define('_JNEWS_SUB_PUBLISHER', 'Editor');
define('_JNEWS_SUB_ADMIN', 'Administrador');
define('_JNEWS_REGISTERED', 'Registado');
define('_JNEWS_SUBSCRIPTIONS', 'Subscrições');
define('_JNEWS_SEND_UNSUBCRIBE', 'Enviar mensagem de Cancelamento de subscrição');
define('_JNEWS_SEND_UNSUBCRIBE_TIPS', 'Clique SIM para enviar um email de confirmação para cancelamento de subscrição.');
define('_JNEWS_SUBSCRIBE_SUBJECT_MESS', 'Por favor confirme a sua subscrição');
define('_JNEWS_UNSUBSCRIBE_SUBJECT_MESS', 'Confirmação de Cancelamento de Subscrição');
define('_JNEWS_DEFAULT_SUBSCRIBE_MESS', 'Olá {tag:name},<br />' .
		'Apenas mais um passo e subscreverá a lista.  Por favor clique no link seguinte para confirmar a sua subscrição.' .
		'<br /><br />{tag:confirm}<br /><br />Para questões é favor contactar o Webmaster.');
define('_JNEWS_DEFAULT_UNSUBSCRIBE_MESS', 'Este é um email de confirmação de que você foi removido da nossa lista.  Lamentamos que tenha decidido cancelar a sua subscrição, caso queira voltar a subscrever pode sempre fazê-lo no nosso site.  Caso tenha alguma questão por favor contacte o nosso Webmaster.');

// jNews subscribers
define('_JNEWS_SIGNUP_DATE', 'Data de Subscrição');
define('_JNEWS_CONFIRMED', 'Confirmado');
define('_JNEWS_SUBSCRIB', 'Subscrever');
define('_JNEWS_HTML', 'Mailings em HTML');
define('_JNEWS_RESULTS', 'Resultados');
define('_JNEWS_SEL_LIST', 'Selecione uma Lista');
define('_JNEWS_SEL_LIST_TYPE', '- Selecione tipo de Lista -');
define('_JNEWS_SUSCRIB_LIST', 'Lista Total de Assinantes');
define('_JNEWS_SUSCRIB_LIST_UNIQUE', 'assinantes para : ');
define('_JNEWS_NO_SUSCRIBERS', 'Nenhum assinante encontrado para estas listas.');
define('_JNEWS_COMFIRM_SUBSCRIPTION', 'Foi enviado um email de confirmação para si.  Por favor verifique o seu email e clique no link fornecido.<br />' .
		'O seu email necessita de ser confirmado para que a sua subscrição possa ter efeito.');
define('_JNEWS_SUCCESS_ADD_LIST', 'Você foi adicionado a lista com sucesso.');


 // Subcription info
define('_JNEWS_CONFIRM_LINK', 'Clique aqui para confirmar a sua subscrição');
define('_JNEWS_UNSUBSCRIBE_LINK', 'Clique aqui para remover-se da lista');
define('_JNEWS_UNSUBSCRIBE_MESS', 'O seu email foi removido da lista');

define('_JNEWS_QUEUE_SENT_SUCCESS', 'Todos os mailings agendados foram enviados com sucesso.');
define('_JNEWS_MALING_VIEW', 'Ver todos os mailings');
define('_JNEWS_UNSUBSCRIBE_MESSAGE', 'Tem a certeza que quer remover-se da lista?');
define('_JNEWS_MOD_SUBSCRIBE', 'Subscrever');
define('_JNEWS_SUBSCRIBE', 'Subscrever');
define('_JNEWS_UNSUBSCRIBE', 'Remover subscrição');
define('_JNEWS_VIEW_ARCHIVE', 'Ver arquivo');
define('_JNEWS_SUBSCRIPTION_OR', ' ou clique aqui para actualizar a sua informação');
define('_JNEWS_EMAIL_ALREADY_REGISTERED', 'Este endereço de email já se encontra registado.');
define('_JNEWS_SUBSCRIBER_DELETED', 'Assinante apagado com sucesso.');


### UserPanel ###
 //User Menu
define('_JNEWS_UCP_USER_PANEL', 'Painel de Controlo do Utilizador');
define('_JNEWS_UCP_USER_MENU', 'Menu do Utilizador');
define('_JNEWS_UCP_USER_CONTACT', 'As minhas subscrições');
 //jNews Cron Menu
define('_JNEWS_UCP_CRON_MENU', 'Gestão de tarefa Cron');
define('_JNEWS_UCP_CRON_NEW_MENU', 'Novo Cron');
define('_JNEWS_UCP_CRON_LIST_MENU', 'Listar o meu Cron');
 //jNews Coupon Menu
define('_JNEWS_UCP_COUPON_MENU', 'Gestão de Cupões');
define('_JNEWS_UCP_COUPON_LIST_MENU', 'Lista de Cupões');
define('_JNEWS_UCP_COUPON_ADD_MENU', 'Adicionar um Cupão');

### lists ###
// Tabs
define('_JNEWS_LIST_T_GENERAL', 'Descrição');
define('_JNEWS_LIST_T_LAYOUT', 'Layout');
define('_JNEWS_LIST_T_SUBSCRIPTION', 'Subscrição');
define('_JNEWS_LIST_T_SENDER', 'Informação do Remetente');

define('_JNEWS_LIST_TYPE', 'Tipo de Lista');
define('_JNEWS_LIST_NAME', 'Nome da Lista');
define('_JNEWS_LIST_ISSUE', 'Edição N #');
define('_JNEWS_LIST_DATE', 'Data de Envio');
define('_JNEWS_LIST_SUB', 'Assunto do Mailing');
define('_JNEWS_ATTACHED_FILES', 'Ficheiros Anexados');
define('_JNEWS_SELECT_LIST', 'Por favor selecione uma lista para editar!');

// Auto Responder box
define('_JNEWS_AUTORESP_ON', 'Tipo de Lista');
define('_JNEWS_AUTO_RESP_OPTION', 'Opções de Auto-resposta');
define('_JNEWS_AUTO_RESP_FREQ', 'Assinantes podem escolher frequência');
define('_JNEWS_AUTO_DELAY', 'Atraso (em dias)');
define('_JNEWS_AUTO_DAY_MIN', 'Frequência Mínima');
define('_JNEWS_AUTO_DAY_MAX', 'Frequência Máxima');
define('_JNEWS_FOLLOW_UP', 'Especificar seguimento de auto-resposta');
define('_JNEWS_AUTO_RESP_TIME', 'Assinantes podem escolher hora');
define('_JNEWS_LIST_SENDER', 'Remetente da Lista');

define('_JNEWS_LIST_DESC', 'Descrição da Lista');
define('_JNEWS_LAYOUT', 'Layout');
define('_JNEWS_SENDER_NAME', 'Nome do Remetente');
define('_JNEWS_SENDER_EMAIL', 'Email do Remetente');
define('_JNEWS_SENDER_BOUNCE', 'Endereço de bounce do Remetente');
define('_JNEWS_LIST_DELAY', 'Atraso');
define('_JNEWS_HTML_MAILING', 'Mailing em HTML?');
define('_JNEWS_HTML_MAILING_DESC', '(se modificar isto, você terá de salvar e retornar a este ecran para visualizar as mudanças.)');
define('_JNEWS_HIDE_FROM_FRONTEND', 'Esconder do Sítio-Principal?');
define('_JNEWS_SELECT_IMPORT_FILE', 'Selecione um ficheiro para importação');;
define('_JNEWS_IMPORT_FINISHED', 'Importação terminada');
define('_JNEWS_DELETION_OFFILE', 'Eliminação do ficheiro');
define('_JNEWS_MANUALLY_DELETE', 'falhou, deverá apagar o ficheiro manualmente');
define('_JNEWS_CANNOT_WRITE_DIR', 'Não é possível escrever na directoria');
define('_JNEWS_NOT_PUBLISHED', 'Não foi possível enviar o mailing, a Lista não está publicada.');

//  List info box
define('_JNEWS_INFO_LIST_PUB', 'Clique em SIM para publicar a Lista');
define('_JNEWS_INFO_LIST_NAME', 'Introduza o nome da sua Lista aqui. Poderá identificar a Lista com este nome.');
define('_JNEWS_INFO_LIST_DESC', 'Introduza uma breve descrição da sua Lista aqui. Esta descrição será visível aos visitantes no seu site.');
define('_JNEWS_INFO_LIST_SENDER_NAME', 'Introduza o nome do Remetente do mailing. Este nome será visível quando os assinantes receberem mensagens desta lista.');
define('_JNEWS_INFO_LIST_SENDER_EMAIL', 'Introduza o endereço de email de onde as mensagens serão enviadas.');
define('_JNEWS_INFO_LIST_SENDER_BOUNCED', 'Introduza o endereço de email para onde os utilizadores poderão responder. É altamente recomendado que seja igual ao do remetente, visto que existem filtros de SPAM que poderão atribuir uma probabilidade de SPAM elevada se forem diferentes.');
define('_JNEWS_INFO_LIST_AUTORESP', 'Escolha o tipo de mailings para esta Lista. <br />' .
		'Newsletter: newsletter normal<br />' .
		'Auto-resposta: uma Auto-resposta é uma Lista que é enviada automaticamente através da página web em intervalos regulares.');
define('_JNEWS_INFO_LIST_FREQUENCY', 'Permitir aos utilizadores escolher quantas vezes recebem a Lista.  Atribui mais flexibilidade ao utilizador.');
define('_JNEWS_INFO_LIST_TIME', 'Deixar que o utilizador escolha a hora preferida do dia para receber a Lista.');
define('_JNEWS_INFO_LIST_MIN_DAY', 'Definir qual é a frequência mínima que o utilizador pode escolher para receber a lista');
define('_JNEWS_INFO_LIST_DELAY', 'Especificar qual o atraso entre esta auto-resposta e a anterior.');
define('_JNEWS_INFO_LIST_DATE', 'Especificar a data para publicação da lista de notícias, caso queira atrasar a publicação. <br /> FORMATO : AAAA-MM-DD HH:MM:SS');
define('_JNEWS_INFO_LIST_MAX_DAY', 'Definir qual é a frequência máxima que o utilizador pode escolher para receber a lista');
define('_JNEWS_INFO_LIST_LAYOUT', 'Introduza o layout da sua lista de mailing aqui. Pode introduzir qualquer layou para o seu mailing aqui.');
define('_JNEWS_INFO_LIST_SUB_MESS', 'Esta mensagem será enviada ao assinante quando ele ou ela se registam pela primeira vez. Pode definir aqui qualquer texto que goste.');
define('_JNEWS_INFO_LIST_UNSUB_MESS', 'Esta mensagem será enviada ao assinante quando ele ou ela cancelarem a subscrição. Pode inserir aqui qualquer mensagem.');
define('_JNEWS_INFO_LIST_HTML', 'Selecione a checkbox se desejar enviar mailing em HTML. Os assinantes poderão especificar se preferem receber mensagens em HTML, ou mensagens de apenas texto aquando da subscrição de uma lista HTML.');
define('_JNEWS_INFO_LIST_HIDDEN', 'Clique SIM para esconder a lista do sítio-principal, os utilizadores não poderão subscrever mas você poderá mesmo assim enviar mailings.');
define('_JNEWS_INFO_LIST_JNEWS_AUTO_SUB', 'Deseja subscrição automática dos utilizadores para esta lista?<br /><B>Novos Utilizadores:</B> registará cada novo utilizador que se registe no site.<br /><B>Todos os Utilizadores:</B> registará cada utilizador registado na base de dados.<br />(todas aquelas opções suportam Community Builder)');
define('_JNEWS_INFO_LIST_ACC_LEVEL', 'Selecione o nível de acesso do sítio-principal. Isto mostrará ou esconderá o mailing para os grupos de utilizadores que não têm acesso a ele, para que não sejam capazes do o subscrever.');
define('_JNEWS_INFO_LIST_ACC_USER_ID', 'Selecione o nível de acesso do grupo de utilizadores a quem permite edição. Esse grupo de utilizadores e superiores serão capazes de editar o mailing e enviá-lo, quer do sítio-principal quer do sítio de administração.');
define('_JNEWS_INFO_LIST_FOLLOW_UP', 'Se quiser que a auto-resposta mova-se para outra assim que atingir a última mensagem, pode especificar aqui a auto-resposta seguinte.');
define('_JNEWS_INFO_LIST_JNEWS_OWNER', 'Esta é a ID da pessoa que criou a lista.');
define('_JNEWS_INFO_LIST_WARNING', '   Esta última opção apenas está disponível uma vez aquando da criação da lista.');
define('_JNEWS_INFO_LIST_SUBJET', ' Assunto do mailing.  Este é o assunto do email que o assinante receberá.');
define('_JNEWS_INFO_MAILING_CONTENT', 'Este é o corpo do email que você quer enviar.');
define('_JNEWS_INFO_MAILING_NOHTML', 'Introduza o corpo do email que você quer enviar para os assinantes que escolheram receber apenas mailings NÃO-HTML. <BR/> NOTA: se deixar em branco o jNews converterá automaticamente o texto HTML para apenas texto.');
define('_JNEWS_INFO_MAILING_VISIBLE', 'Clique SIM para mostrar mailing no sítio-principal.');
define('_JNEWS_INSERT_CONTENT', 'Insira o conteúdo existente');

// Coupons
define('_JNEWS_SEND_COUPON_SUCCESS', 'Cupão enviado com sucesso!');
define('_JNEWS_CHOOSE_COUPON', 'Escolha um cupão');
define('_JNEWS_TO_USER', ' para este utilizador');

### Cron options
//drop down frequency(CRON)
define('_JNEWS_FREQ_CH1', 'Cada hora');
define('_JNEWS_FREQ_CH2', 'Cada 6 horas');
define('_JNEWS_FREQ_CH3', 'Cada 12 horas');
define('_JNEWS_FREQ_CH4', 'Diariamente');
define('_JNEWS_FREQ_CH5', 'Semanalmente');
define('_JNEWS_FREQ_CH6', 'Mensalmente');
define('_JNEWS_FREQ_NONE', 'Não');
define('_JNEWS_FREQ_NEW', 'Novos utilizadores');
define('_JNEWS_FREQ_ALL', 'Todos os utilizadores');

//Label CRON form
define('_JNEWS_LABEL_FREQ', 'Cron jNews?');
define('_JNEWS_LABEL_FREQ_TIPS', 'Clique em SIM se quiser utilizar isto para uma Cron jNews, NÃO para qualquer outra tarefa Cron.<br />' .
		'Se clicar em SIM não necessita de especificar o endereço do Cron, este será automaticamente adicionado.');
define('_JNEWS_SITE_URL', 'O endereço URL do seu site');
define('_JNEWS_CRON_FREQUENCY', 'Frequência do Cron');
define('_JNEWS_STARTDATE_FREQ', 'Data de Começo');
define('_JNEWS_LABELDATE_FREQ', 'Especifique Data');
define('_JNEWS_LABELTIME_FREQ', 'Especifique Hora');
define('_JNEWS_CRON_URL', 'URL do Cron');
define('_JNEWS_CRON_FREQ', 'Frequência');
define('_JNEWS_TITLE_CRONLIST', 'Lista Cron');
define('_JNEWS_NEW_LIST', 'Criar uma nova lista');

//title CRON form
define('_JNEWS_TITLE_FREQ', 'Editar Cron');
define('_JNEWS_CRON_SITE_URL', 'Por favor introduza um endereço URL válido, começado por http://');

### Mailings ###
define('_JNEWS_MAILING_ALL', 'Todos os mailings');
define('_JNEWS_EDIT_A', 'Editar uma ');
define('_JNEWS_SELCT_MAILING', 'Por favor selecione a Lista na caixa de possibilidades com vista a adicionar um novo mailing.');
define('_JNEWS_VISIBLE_FRONT', 'Visível no sítio-principal');

// mailer
define('_JNEWS_SUBJECT', 'Assunto');
define('_JNEWS_CONTENT', 'Conteúdo');
define('_JNEWS_NAMEREP', '{tag:name} = Isto será substituído pelo nome que o assinante introduziu, você estará a enviar emails personalizados ao usar isto.<br />');
define('_JNEWS_FIRST_NAME_REP', '{tag:firstname} = Isto será substituído pelo PRIMEIRO nome que o assinante introduziu.<br />');
define('_JNEWS_NONHTML', 'Versão Não-html');
define('_JNEWS_ATTACHMENTS', 'Anexos');
define('_JNEWS_SELECT_MULTIPLE', 'Carregue na tecla CONTROL (ou COMANDO) para selecionar múltiplos anexos.<br />' .
		'Os ficheiros apresentados nesta lista de anexos estão localizados na directoria de anexos, pode alterar esta localização no painel de controlo em Configuração.');
define('_JNEWS_CONTENT_ITEM', 'Item do Conteúdo');
define('_JNEWS_SENDING_EMAIL', 'A enviar email');
define('_JNEWS_MESSAGE_NOT', 'A Mensagem não pode ser enviada');
define('_JNEWS_MAILER_ERROR', 'Erro no Mailer');
define('_JNEWS_MESSAGE_SENT_SUCCESSFULLY', 'Mensagem enviada com sucesso');
define('_JNEWS_SENDING_TOOK', 'O envio deste mailing foi de');
define('_JNEWS_SECONDS', 'segundos');
define('_JNEWS_NO_ADDRESS_ENTERED', 'Nenhum assinante ou endereço de email fornecido');
define('_JNEWS_CHANGE_SUBSCRIPTIONS', 'Modificar');
define('_JNEWS_CHANGE_EMAIL_SUBSCRIPTION', 'Modificar a sua subscrição');
define('_JNEWS_WHICH_EMAIL_TEST', 'Indique o endereço de email para enviar um teste ou selecione pré-visualizar');
define('_JNEWS_SEND_IN_HTML', 'Enviar em HTML (para mailings html)?');
define('_JNEWS_VISIBLE', 'Visível');
define('_JNEWS_INTRO_ONLY', 'Apenas Introdução');

// stats
define('_JNEWS_GLOBALSTATS', 'Estatísticas Globais');
define('_JNEWS_DETAILED_STATS', 'Estatísticas Detalhadas');
define('_JNEWS_MAILING_LIST_DETAILS', 'Detalhes de Listas');
define('_JNEWS_SEND_IN_HTML_FORMAT', 'Envio em formato HTML');
define('_JNEWS_VIEWS_FROM_HTML', 'Vistos (de emails em html)');
define('_JNEWS_SEND_IN_TEXT_FORMAT', 'Envio em formtato Texto');
define('_JNEWS_HTML_READ', 'Lidos HTML');
define('_JNEWS_HTML_UNREAD', 'Não-Lidos HTML');
define('_JNEWS_TEXT_ONLY_SENT', 'Apenas Texto');

// Configuration panel
// main tabs
define('_JNEWS_MAIL_CONFIG', 'Mail');
define('_JNEWS_LOGGING_CONFIG', 'Hist. & Estat.');
define('_JNEWS_SUBSCRIBER_CONFIG', 'Assinantes');
define('_JNEWS_AUTO_CONFIG', 'Cron');
define('_JNEWS_MISC_CONFIG', 'Miscelânea');
define('_JNEWS_MAIL_SETTINGS', 'Definições de Mail');
define('_JNEWS_MAILINGS_SETTINGS', 'Definições de Mailings');
define('_JNEWS_SUBCRIBERS_SETTINGS', 'Definições de Assinantes');
define('_JNEWS_CRON_SETTINGS', 'Definições de Cron');
define('_JNEWS_SENDING_SETTINGS', 'Definições de Envio');
define('_JNEWS_STATS_SETTINGS', 'Definições de Estatísticas');
define('_JNEWS_LOGS_SETTINGS', 'Definições de Históricos');
define('_JNEWS_MISC_SETTINGS', 'Definições de Miscelânea');
// mail settings
define('_JNEWS_SEND_MAIL_FROM', 'Email do remetente');
define('_JNEWS_SEND_MAIL_NAME', 'Nome do remetente');
define('_JNEWS_MAILSENDMETHOD', 'Método do Mailer');
define('_JNEWS_SENDMAILPATH', 'Caminho do Sendmail');
define('_JNEWS_SMTPHOST', 'SMTP host');
define('_JNEWS_SMTPAUTHREQUIRED', 'Requer Autenticação SMTP');
define('_JNEWS_SMTPAUTHREQUIRED_TIPS', 'Selecione SIM se o seu servidor SMTP require autenticação');
define('_JNEWS_SMTPUSERNAME', 'nome da conta SMTP');
define('_JNEWS_SMTPUSERNAME_TIPS', 'Introduza o nome da conta para o SMTP quando o seu servidor SMTP requerer autenticação');
define('_JNEWS_SMTPPASSWORD', 'palavra-passe SMTP');
define('_JNEWS_SMTPPASSWORD_TIPS', 'Introduza a palavra-passe para o SMTP quando o seu servidor SMTP requerer autenticação');
define('_JNEWS_USE_EMBEDDED', 'Usar imagens embebidas');
define('_JNEWS_USE_EMBEDDED_TIPS', 'Selecione SIM se as imagens dos items de conteúdo anexo deverão ser embebidas no email para mensagens em html, ou NÃO para usar as tags de imagem por defeito que fazem link para as imagens no site.');
define('_JNEWS_UPLOAD_PATH', 'Caminho de Envio/Anexos');
define('_JNEWS_UPLOAD_PATH_TIPS', 'Pode especificar uma directoria para envio.<br />' .
		'Certifique-se que a directoria que especificar existe, caso contrário crie-a.');

// subscribers settings
define('_JNEWS_ALLOW_UNREG', 'Permitir não-registados');
define('_JNEWS_ALLOW_UNREG_TIPS', 'Selecione SIM se quiser permitir utilizadores susbcreverem listas sem estarem registados no site.');
define('_JNEWS_REQ_CONFIRM', 'Requerer Confirmação');
define('_JNEWS_REQ_CONFIRM_TIPS', 'Selecione SIM se quiser obrigar os utilizadores assinantes não-registados a confirmar o seu endereço de email.');
define('_JNEWS_SUB_SETTINGS', 'Definições de Subscrição');
define('_JNEWS_SUBMESSAGE', 'Email de Subscrição');
define('_JNEWS_SUBSCRIBE_LIST', 'Subscrever uma lista');

define('_JNEWS_USABLE_TAGS', 'Tags utilizáveis');
define('_JNEWS_NAME_AND_CONFIRM', '<b>{tag:confirm}</b> = Isto cria um link clicável onde o assinante pode confirmar a sua subscrição. Isto é <strong>obrigatório</strong> para que o jNews funcione correctamente.<br />'
.'<br />{tag:name} = Isto será substituído pelo nome que o assinante introduziu, estará a enviar emails personalizados ao usar isto.<br />'
.'<br />{tag:firstname} = Isto será substituído pelo PRIMEIRO nome do assinante, o primeiro nome é DEFINIDO pelo primeiro nome introduzido pelo assinante.<br />');
define('_JNEWS_CONFIRMFROMNAME', 'Confirmar o nome do Remetente');
define('_JNEWS_CONFIRMFROMNAME_TIPS', 'Introduza o nome do remetente a mostrar na confirmação das listas.');
define('_JNEWS_CONFIRMFROMEMAIL', 'Confirmar o email do remetente');
define('_JNEWS_CONFIRMFROMEMAIL_TIPS', 'Introduza o endereço de email do remetente a mostrar na confirmação das listas.');
//define('_JNEWS_CONFIRMBOUNCE', 'Endereço de Bounce');
//define('_JNEWS_CONFIRMBOUNCE_TIPS', 'Introduza o endereço de bounce do remetente a mostrar na confirmação das listas.');
define('_JNEWS_HTML_CONFIRM', 'Confirmar HTML');
define('_JNEWS_HTML_CONFIRM_TIPS', 'Selecione SIM se as listas de confirmação devem ser em HTML se o utilizador permitir HTML.');
define('_JNEWS_TIME_ZONE_ASK', 'Perguntar Zona de Fuso Horário');
define('_JNEWS_TIME_ZONE_TIPS', 'Selecione SIM se quiser perguntar ao utilizador qual a sua zona de fuso horário. Quando aplicável, os mailings em espera serão enviados baseados na zona de fuso horário');

 // Cron Set up
define('_JNEWS_TIME_OFFSET_URL', 'clique aqui para definir a zona de fuso horário no painel de configuração global do Joomla -> Separador Locale');
define('_JNEWS_TIME_OFFSET_TIPS', 'Defina a zona de fuso horário do seu servidor para que a data e hora guardadas sejam exactas');
define('_JNEWS_TIME_OFFSET', 'Fuso Horário');
define('_JNEWS_CRON_TITLE', 'Definir uma função Con');
define('_JNEWS_CRON_DESC', '<br />Usar a função Cron automatiza tarefas para o seu site Joomla!<br />' .
		'Para a accionar precisa de adicionar no painel de controlo (separador cron)o seguinte comando:<br />' .
		'<b>' . JNEWS_JPATH_LIVE . '/index.php?option=com_jnews&act=cron</b> ' .
		'<br /><br />Se precisar de ajuda para parametrizar ou tiver problemas por favor consulte o nosso forum <a href="http://www.joobi.co" target="_blank">http://www.joobi.co</a>');
// sending settings
define('_JNEWS_PAUSEX', 'Pausa x segundos por cada quantidade de emails configurada');
define('_JNEWS_PAUSEX_TIPS', 'Introduza o número de segundos que o jNews dará ao servidor de SMTP para enviar as mensagens antes de proceder a novo envio do grupo seguinte de mensagens.');
define('_JNEWS_EMAIL_BET_PAUSE', 'Emails entre pausas');
define('_JNEWS_EMAIL_BET_PAUSE_TIPS', 'Número de emails a enviar antes de fazer pausa.');
define('_JNEWS_WAIT_USER_PAUSE', 'Esperar por acção do utilizador numa pausa');
define('_JNEWS_WAIT_USER_PAUSE_TIPS', 'Caso o script deva esperar por acção do utilizador quando pausado entre conjuntos de mailings.');
define('_JNEWS_SCRIPT_TIMEOUT', 'Tempo de intervalo do Script');
define('_JNEWS_SCRIPT_TIMEOUT_TIPS', 'Número de minutos que o script deverá ter para correr (0 para ilimitados).');
// Stats settings
define('_JNEWS_ENABLE_READ_STATS', 'Activar leitura de estatísticas');
define('_JNEWS_ENABLE_READ_STATS_TIPS', 'Selecione SIM se quiser guardar no histórico o número de visualizações. Esta técnica só pode ser usada com mailings em html');
define('_JNEWS_LOG_VIEWSPERSUB', 'Guardar histórico de visualizações por assinante');
define('_JNEWS_LOG_VIEWSPERSUB_TIPS', 'Selecione SIM se quiser guardar no histórico o número de visualizações por assinante. Esta técnica só pode ser usada com mailings em html');
// Logs settings
define('_JNEWS_DETAILED', 'Históricos detalhados');
define('_JNEWS_SIMPLE', 'Históricos simplificados');
define('_JNEWS_DIAPLAY_LOG', 'Mostrar históricos');
define('_JNEWS_DISPLAY_LOG_TIPS', 'Selecione SIM se quiser mostrar os históricos enquanto envia mailings.');
define('_JNEWS_SEND_PERF_DATA', 'Envio de performance para fora');
define('_JNEWS_SEND_PERF_DATA_TIPS', 'Selecione SIM se quiser permitir ao jNews enviar relatórios ANÓNIMOS sobre a sua configuração, número de assinantes de uma lista e o tempo que levou e enviar o mailing. Isto dá-nos uma ideia acerca da performance do jNews e AJUDA-NOS a melhorar o jNews em futuros desenvolvimentos.');
define('_JNEWS_SEND_AUTO_LOG', 'Histórico de envio para o Auto-resposta');
define('_JNEWS_SEND_AUTO_LOG_TIPS', 'Selecione SIM se quiser enviar um email com histórico cada vez que a fila for processada.  AVISO: isto pode resultar numa grande quantidade de emails.');
define('_JNEWS_SEND_LOG', 'Histórico de envio');
define('_JNEWS_SEND_LOG_TIPS', 'Caso deva ser enviado um email com o histórico do mailing para o endereço de email do utilizador que envioou o mailing.');
define('_JNEWS_SEND_LOGDETAIL', 'Detalhe do histórico de envio');
define('_JNEWS_SEND_LOGDETAIL_TIPS', 'DETALHADO inclúe a informação de sucesso ou falha para cada assinante e um resumo geral da informação. SIMPLES apenas envia o resumo geral.');
define('_JNEWS_SEND_LOGCLOSED', 'Enviar histórico se a conexão for fechada');
define('_JNEWS_SEND_LOGCLOSED_TIPS', 'Com esta opção activada o utilizador que enviou o mailing receberá na mesma o relatório por email.');
define('_JNEWS_SAVE_LOG', 'Salvar Histórico');
define('_JNEWS_SAVE_LOG_TIPS', 'Caso o histórico do mailing deva ser anexado ao ficheiro do histórico.');
define('_JNEWS_SAVE_LOGDETAIL', 'Guardar histórico detalhado');
define('_JNEWS_SAVE_LOGDETAIL_TIPS', 'DETALHADO inclúe a informação de sucesso ou falha para cada assinante e um resumo geral da informação. SIMPLES apenas envia o resumo geral.');
define('_JNEWS_SAVE_LOGFILE', 'Salvar ficheiro de Histórico');
define('_JNEWS_SAVE_LOGFILE_TIPS', 'Ficheiro ao qual a informção de histórico será anexada. Este ficheiro poderá ficar muito grande.');
define('_JNEWS_CLEAR_LOG', 'Limpar Histórico');
define('_JNEWS_CLEAR_LOG_TIPS', 'Limpa o ficheiro de Histórico.');

### control panel
define('_JNEWS_CP_LAST_QUEUE', 'Última fila executada');
define('_JNEWS_CP_TOTAL', 'Total');
define('_JNEWS_MAILING_COPY', 'Mailing copiado com sucesso!');

// Miscellaneous settings
define('_JNEWS_SHOW_GUIDE', 'Mostrar Guia');
define('_JNEWS_SHOW_GUIDE_TIPS', 'Mostra o Guia no início para ajudar novos utilizadores a criar uma newsletter, uma auto-resposta e parametrizar correctamente o jNews.');
define('_JNEWS_AUTOS_ON', 'Usar Auto-respostas');
define('_JNEWS_AUTOS_ON_TIPS', 'Selecione NÃO se não quiser usar Auto-respostas, todas as opções de auto-respostas serão desactivadas.');
define('_JNEWS_NEWS_ON', 'Usar Newsletters');
define('_JNEWS_NEWS_ON_TIPS', 'Selecione NÃO se não quiser usar Newsletters, todas as opções de newsletters serão desactivadas.');
define('_JNEWS_SHOW_TIPS', 'Mostrar Dicas');
define('_JNEWS_SHOW_TIPS_TIPS', 'Mostra dicas para ajudar os utilizadores a usar o jNews de forma eficaz.');
define('_JNEWS_SHOW_FOOTER', 'Mostrar Rodapé');
define('_JNEWS_SHOW_FOOTER_TIPS', 'Caso deva ou não ser mostrado os direitos de cópia no rodapé.');
define('_JNEWS_SHOW_LISTS', 'Mostrar Listas no sítio-principal');
define('_JNEWS_SHOW_LISTS_TIPS', 'Quando o utilizador não está registado mostra uma lista das listas que pode subscrever através de um botão de arquivo para as newsletters  ou simplesmente um formulário de login para que se possam registar.');
define('_JNEWS_CONFIG_UPDATED', 'Os detalhes da configuração foram actualizados!');
define('_JNEWS_UPDATE_URL', 'URL de Actualização');
define('_JNEWS_UPDATE_URL_WARNING', 'AVISO! Não mude este URL a não ser que lhe seja pedido para o fazer pela equipa técnica do jNews.<br />');
define('_JNEWS_UPDATE_URL_TIPS', 'Por exemplo: http://www.joobi.co/update/ (inclua a barra no final)');

// module
define('_JNEWS_EMAIL_INVALID', 'O endereço de email introduzido é inválido.');
define('_JNEWS_REGISTER_REQUIRED', 'É necessário registar-se primeiro no site para poder ser assinante de uma lista.');

// Access level box
define('_JNEWS_OWNER', 'Criador da Lista:');
define('_JNEWS_ACCESS_LEVEL', 'Definir nível de acesso para a lista');
define('_JNEWS_ACCESS_LEVEL_OPTION', 'Opções de nível de acesso');
define('_JNEWS_USER_LEVEL_EDIT', 'Selecione que nível de utilizador tem permissão para editar um mailing (quer do sítio-principal quer do sítio de administração) ');

//  drop down options
define('_JNEWS_AUTO_DAY_CH1', 'Diariamente');
define('_JNEWS_AUTO_DAY_CH2', 'Diariamente, excepto fim-de-semana');
define('_JNEWS_AUTO_DAY_CH3', 'Dia sim, dia não');
define('_JNEWS_AUTO_DAY_CH4', 'Dia sim, dia não, excepto fim-de-semana');
define('_JNEWS_AUTO_DAY_CH5', 'Semanalmente');
define('_JNEWS_AUTO_DAY_CH6', 'Bi-semanal');
define('_JNEWS_AUTO_DAY_CH7', 'Mensal');
define('_JNEWS_AUTO_DAY_CH9', 'Anual');
define('_JNEWS_AUTO_OPTION_NONE', 'Não');
define('_JNEWS_AUTO_OPTION_NEW', 'Novos Utilizadores');
define('_JNEWS_AUTO_OPTION_ALL', 'Todos os Utilizadores');

//
define('_JNEWS_UNSUB_MESSAGE', 'Email para Não-subscrição');
define('_JNEWS_UNSUB_SETTINGS', 'Definições de Não-subscrição');
define('_JNEWS_AUTO_ADD_NEW_USERS', 'Subscrição automática de Utilizadores?');

// Update and upgrade messages
define('_JNEWS_NO_UPDATES', 'Não existem actualizações disponíveis de momento.');
define('_JNEWS_VERSION', 'Versão jNews');
define('_JNEWS_NEED_UPDATED', 'Ficheiros que precisam de ser actualizados:');
define('_JNEWS_NEED_ADDED', 'Ficheiros que precisam de ser adicionados:');
define('_JNEWS_NEED_REMOVED', 'Ficheiros que precisam de ser removidos:');
define('_JNEWS_FILENAME', 'Ficheiro:');
define('_JNEWS_CURRENT_VERSION', 'Versão actual:');
define('_JNEWS_NEWEST_VERSION', 'Última versão:');
define('_JNEWS_UPDATING', 'Actualizando');
define('_JNEWS_UPDATE_UPDATED_SUCCESSFULLY', 'Os ficheiros foram actualizados com sucesso.');
define('_JNEWS_UPDATE_FAILED', 'A Actualização Falhou!');
define('_JNEWS_ADDING', 'Adicionando');
define('_JNEWS_ADDED_SUCCESSFULLY', 'Adicionado com sucesso.');
define('_JNEWS_ADDING_FAILED', 'A Adição Falhou!');
define('_JNEWS_REMOVING', 'Removendo');
define('_JNEWS_REMOVED_SUCCESSFULLY', 'Removido com sucesso.');
define('_JNEWS_REMOVING_FAILED', 'A Remoção Falhou!');
define('_JNEWS_INSTALL_DIFFERENT_VERSION', 'Instale uma versão diferente');
define('_JNEWS_CONTENT_ADD', 'Adicionar conteúdo');
define('_JNEWS_UPGRADE_FROM', 'Importar dados (newsletters e informação de assinantes) de ');
define('_JNEWS_UPGRADE_MESS', 'Não existem riscos para os seus dados existentes. <br /> Este processo simplesmente apenas importa dados para a base de dados do jNews.');
define('_JNEWS_CONTINUE_SENDING', 'Continuar e enviar');

// jNews message
define('_JNEWS_UPGRADE1', 'Você pode facilmente importar os seus utilizadores e newsletters ');
define('_JNEWS_UPGRADE2', ' para o jNews no painel de actualizações.');
define('_JNEWS_UPDATE_MESSAGE', 'Está disponível uma nova versão do jNews! ');
define('_JNEWS_UPDATE_MESSAGE_LINK', 'Clique aqui para actualizar!');
define('_JNEWS_CRON_SETUP', 'Para que as auto-respostas sejam enviadas tem de configurar uma tarefa Cron.');
define('_JNEWS_THANKYOU', 'Obrigado por escolher jNews, o Seu Parceiro de Comunicação!');
define('_JNEWS_NO_SERVER', 'Servidor de actualização não disponível, por favor verifique mais tarde.');
define('_JNEWS_MOD_PUB', 'O módulo jNews não está publicado.');
define('_JNEWS_MOD_PUB_LINK', 'Clique aqui para o publicar!');
define('_JNEWS_IMPORT_SUCCESS', 'importado com sucesso');
define('_JNEWS_IMPORT_EXIST', 'assinante já está na base de dados');


// jNews Install
define('_JNEWS_INSTALL_CONFIG', 'Configuração jNews');
define('_JNEWS_INSTALL_SUCCESS', 'Instalação com Sucesso');
define('_JNEWS_INSTALL_ERROR', 'Erro na instalação');
define('_JNEWS_INSTALL_BOT', 'Plugin (Bot) jNews');
define('_JNEWS_INSTALL_MODULE', 'Módulo jNews');
//Others
define('_JNEWS_JAVASCRIPT', '!Aviso! Para uma correcta operação o Javascript deve estar activado.');
define('_JNEWS_EXPORT_TEXT', 'Os assinantes exportados são baseados na lista que escolheu. <br />Exportar assinantes para lista');
define('_JNEWS_IMPORT_TIPS', 'Importar assinantes. A informação no ficheiro precisa de ter o seguinte formato: <br />' .
		'Nome,email,recebeHTML(1/0),<span style="color: rgb(255, 0, 0);">confirmado(1/0)</span>');
define('_JNEWS_SUBCRIBER_EXIT', 'já é assinante');
define('_JNEWS_GET_STARTED', 'Clique aqui para começar!');

//News since 1.0.1
define('_JNEWS_WARNING_1011', 'Aviso: 1011: A Actualização não funcionará por causa das restrições do seu server.');
define('_JNEWS_SEND_MAIL_FROM_TIPS', 'Escolha que endereço de email será mostrado como remetente.');
define('_JNEWS_SEND_MAIL_NAME_TIPS', 'Escolha que nome se mostrado como remetente.');
define('_JNEWS_MAILSENDMETHOD_TIPS', 'Escolha que mailer deseja usar: PHP mail function, <span>Sendmail</span> ou SMTP Server.');
define('_JNEWS_SENDMAILPATH_TIPS', 'Esta é a directoria do servidor de Mail');
define('_JNEWS_LIST_T_TEMPLATE', 'Tema Padrão');
define('_JNEWS_NO_MAILING_ENTERED', 'Nenhum mailing fornecido');
define('_JNEWS_NO_LIST_ENTERED', 'Nenhuma lista fornecida');
define('_JNEWS_SENT_MAILING', 'Mailings Enviados');
define('_JNEWS_SELECT_FILE', 'Por favor selecione um ficheiro para ');
define('_JNEWS_LIST_IMPORT', 'Verifique a(s) lista(s) que você quer que tenha(m) assinantes associados.');
define('_JNEWS_PB_QUEUE', 'Subscriber inserted but problem to connect him/her to the list(s). Please check manually.');
define('_JNEWS_UPDATE_MESS', '');
define('_JNEWS_UPDATE_MESS1', 'Actualização Altamente Recomendada!');
define('_JNEWS_UPDATE_MESS2', 'Remendo e pequenas correcções.');
define('_JNEWS_UPDATE_MESS3', 'Novo lançamento.');
define('_JNEWS_UPDATE_MESS5', 'É obrigatório Joomla 1.5 para actualizar.');
define('_JNEWS_UPDATE_IS_AVAIL', ' está disponível!');
define('_JNEWS_NO_MAILING_SENT', 'Nenhum mailing enviado!');
define('_JNEWS_SHOW_LOGIN', 'Mostra formulário de login');
define('_JNEWS_SHOW_LOGIN_TIPS', 'Selecione SIM para mostrar um formulário de login no sítio-principal do Painel de Controlo do jNews para que o utilizador possa registar-se no site.');
define('_JNEWS_LISTS_EDITOR', 'Editor de Descrição da Lista');
define('_JNEWS_LISTS_EDITOR_TIPS', 'Selecione SIM para usar um editor HTML para editar o campo Descrição da Lista.');
define('_JNEWS_SUBCRIBERS_VIEW', 'Ver assinantes');

//News since 1.0.2
define('_JNEWS_FRONTEND_SETTINGS', 'Definiçoes do Sítio-Principal');
define('_JNEWS_SHOW_LOGOUT', 'Mostra botão de logout');
define('_JNEWS_SHOW_LOGOUT_TIPS', 'Selecione SIM para mostrar um botão de logout no front-end do painal de controlo do jNews.');

//News since 1.0.3 CB integration
define('_JNEWS_CONFIG_INTEGRATION', 'Integração');
define('_JNEWS_CB_INTEGRATION', 'Integração com o Community Builder');
define('_JNEWS_INSTALL_PLUGIN', 'Plugin Community Builder (Integração jNews) ');
define('_JNEWS_CB_PLUGIN_NOT_INSTALLED', 'O plugin jNews para o Community Builder ainda não está instalado!');
define('_JNEWS_CB_PLUGIN', 'Listas aquando do registo');
define('_JNEWS_CB_PLUGIN_TIPS', 'Selecione SIM para mostrar as listas de mailing no formulário de registo do community builder');
define('_JNEWS_CB_LISTS', 'Listas de IDs');
define('_JNEWS_CB_LISTS_TIPS', 'ESTE CAMPO É OBRIGATÓRIO. Introduza o número de ID das listas que você quer permitir aos utilizadores assinar separados por vírgula ,  (0 mostra todas as listas)');
define('_JNEWS_CB_INTRO', 'Texto de Introdução');
define('_JNEWS_CB_INTRO_TIPS', 'Um texto aparecerá antes da listagem. DEIXE EM BRANCO PARA NÃO MOSTRAR NADA.  Use cb_pretext para layout CSS.');
define('_JNEWS_CB_SHOW_NAME', 'Mostra Nome da Lista');
define('_JNEWS_CB_SHOW_NAME_TIPS', 'Selecione se deve ou não mostrar o nome da lista depois da introdução.');
define('_JNEWS_CB_LIST_DEFAULT', 'Verifica lista por defeito');
define('_JNEWS_CB_LIST_DEFAULT_TIPS', 'Selecione se quer ou não, ter uma caixa de verificação para cada lista verificado por defeito.');
define('_JNEWS_CB_HTML_SHOW', 'Mostra Receber HTML');
define('_JNEWS_CB_HTML_SHOW_TIPS', 'Escolha SIM para permitir aos utilizadores decidir se querem ou não, receber emails em HTML. Escolha NÃO para usar o receber HTML por defeito.');
define('_JNEWS_CB_HTML_DEFAULT', 'Receber HTML por defeito');
define('_JNEWS_CB_HTML_DEFAULT_TIPS', 'Escolha esta opção para mostrar a configuração de mail em HTML por defeito. Se o Mostra Receber Html estiver para NÃO então esta será a opção por defeitot.');

// Since 1.0.4
define('_JNEWS_BACKUP_FAILED', 'Não foi possível efectuar a cópia de segurança do ficheiro! O ficheiro não foi substituído.');
define('_JNEWS_BACKUP_YOUR_FILES', 'Foi efectuada uma cópia de segurança dos ficheiros da versão antiga na seguinte directória:');
define('_JNEWS_SERVER_LOCAL_TIME', 'Hora local do Servidor');
define('_JNEWS_SHOW_ARCHIVE', 'Mostrar botão de Arquivo');
define('_JNEWS_SHOW_ARCHIVE_TIPS', 'Selecione SIM para mostrar o botão de Arquivo no front-end das listas de Newsletter');
define('_JNEWS_LIST_OPT_TAG', 'Tags');
define('_JNEWS_LIST_OPT_IMG', 'Imagens');
define('_JNEWS_LIST_OPT_CTT', 'Conteúdo');
define('_JNEWS_INPUT_NAME_TIPS', 'Introduza o seu nome completo (primeiro nome primeiro)');
define('_JNEWS_IP_TIPS', 'IP of the subscriber' );
define('_JNEWS_INPUT_EMAIL_TIPS', 'Introduza o seu endereço de email (Certifique-se de que este é um endereço de email válido para que possa receber as nossas Newsletters.)');
define('_JNEWS_RECEIVE_HTML_TIPS', 'Escolha SIM se quiser receber mails em HTML - NÃO para receber mails em apenas texto');
define('_JNEWS_TIME_ZONE_ASK_TIPS', 'Especifique a sua zona de fuso horário.');


// Since 1.0.5
define('_JNEWS_FILES', 'Ficheiros');
define('_JNEWS_FILES_UPLOAD', 'Envio');
define('_JNEWS_MENU_UPLOAD_IMG', 'Envio de Imagens');
define('_JNEWS_TOO_LARGE', 'Tamanho do ficheiro demasiado grande. O tamanho máximo permitido é');
define('_JNEWS_MISSING_DIR', 'O directório de destino não existe');
define('_JNEWS_IS_NOT_DIR', 'O directório de destino não existe ou é um ficheiro regular.');
define('_JNEWS_NO_WRITE_PERMS', 'O directório de destino não tem permissão de escrita.');
define('_JNEWS_NO_USER_FILE', 'Não selecionou nenhum ficheiro para envio.');
define('_JNEWS_E_FAIL_MOVE', 'Impossível mover o ficheiro.');
define('_JNEWS_FILE_EXISTS', 'O ficheiro destino já existe.');
define('_JNEWS_CANNOT_OVERWRITE', 'O ficheiro destino já existe e não pode ser sobreposto.');
define('_JNEWS_NOT_ALLOWED_EXTENSION', 'Extensão de ficheiro não permitida.');
define('_JNEWS_PARTIAL', 'O ficheiro foi enviado apenas parcialmente.');
define('_JNEWS_UPLOAD_ERROR', 'Erro de envio:');
define('_JNEWS_DEV_NO_DEF_FILE', 'O ficheiro foi enviado apenas parcialmente.');
define('_JNEWS_CONTENTREP', '{tag:subscriptions} = Isto será substiuído pelos links de subscrição.' .
		' Isto é <strong>obrigatório</strong> para que o jNews funcione correctamente.<br />' .
		'Se colocar algum outro conteúdo nesta caixa o mesmo será mostrado em todos os mailings correspondentes a esta Lista.' .
		' <br />Adicione a sua mensagem de subscrição no final.  O jNews adicionará automaticamente um link para que o assinante altere a informação dele, e um link para remover-se da Lista.');

// since 1.0.6
define('_JNEWS_NOTIFICATION', 'Notificação');  // shortcut for Email notification
define('_JNEWS_NOTIFICATIONS', 'Notificações');
define('_JNEWS_USE_SEF', 'SEF nos mailings');
define('_JNEWS_USE_SEF_TIPS', 'É recomendado que escolha NÃO.  No entanto se desejar que o URL incluído nos seus mailings use SEF então escolha SIM.' .
		' <br /><b>Os links funcionarão de igual forma para ambas as opções.  NÃO, assegurará que os links nos mailings funcionarão sempre mesmo que altere o seu SEF.</b> ');
define('_JNEWS_ERR_NB', 'Erro #: ERR');
define('_JNEWS_ERR_SETTINGS', 'Definições de manuseamento de Erros');
define('_JNEWS_ERR_SEND', 'Enviar relatório de erros');
define('_JNEWS_ERR_SEND_TIPS', 'Se deseja que o jNews seja um produto melhor por favor selecione SIM.  Isto envia-nos um relatório de erros.  Por isso nunca mais necessita de reportar bugs ;-) <br /> <b>NENHUMA INFORMAÇÃO PRIVADA É ENVIADA</b>.  Nós nem sequer saberemos a que site pertençe o erro. Apenas enviamos informação sobre o jNews , a instalação PHP e queries SQL. ');
define('_JNEWS_ERR_SHOW_TIPS', 'Escolha SIM para mostrar o número do erro no ecrán.  Usado principalmente para efeitos de debuging. ');
define('_JNEWS_ERR_SHOW', 'Mostra erros');
define('_JNEWS_LIST_SHOW_UNSUBCRIBE', 'Mostra links de remoção');
define('_JNEWS_LIST_SHOW_UNSUBCRIBE_TIPS', 'Selecione SIM para mostrar links de remoção no rodapé dos mailings para que os utilizadores possam mudar as suas subscrições. <br /> NÃO, desactiva os links e rodapé.');
define('_JNEWS_UPDATE_INSTALL', '<span style="color: rgb(255, 0, 0);">NOTÍCIA IMPORTANTE!</span> <br />Se está a fazer uma actualização a partir de uma versão anterior do jNews, precisa de actualizar a estrutura da sua base de dados clicando no botão seguinte (A sua informação ficará íntegra)');
define('_JNEWS_UPDATE_INSTALL_BTN', 'Actualizar tabelas e configuração');
define('_JNEWS_MAILING_MAX_TIME', 'Tempo máximo da fila');
define('_JNEWS_MAILING_MAX_TIME_TIPS', 'Define o tempo máximo para cada conjunto de emails enviados pela fila. Recomendado entre 30s e 2mins.');

// virtuemart integration beta
define('_JNEWS_VM_INTEGRATION', 'Integração com VirtueMart');
define('_JNEWS_VM_COUPON_NOTIF', 'Notificação de ID do Cupão');
define('_JNEWS_VM_COUPON_NOTIF_TIPS', 'Especifica o número de ID do mailing que quiser usar para enviar cupões para os seus clientes.');
define('_JNEWS_VM_NEW_PRODUCT', 'Notificação de ID de novos produtos');
define('_JNEWS_VM_NEW_PRODUCT_TIPS', 'Especifica o número de ID do mailing que quiser usar para enviar notificação de novos produtos.');


// since 1.0.8
// create forms for subscriptions
define('_JNEWS_FORM_BUTTON', 'Criar Formulário');
define('_JNEWS_FORM_COPY', 'Código HTML');
define('_JNEWS_FORM_COPY_TIPS', 'Copie o código HTML gerado para a sua página HTML.');
define('_JNEWS_FORM_LIST_TIPS', 'Selecione a lista que quer incluir neste formulário');
// update messages
define('_JNEWS_UPDATE_MESS4', 'Não pode ser actualizado automaticamente.');
define('_JNEWS_WARNG_REMOTE_FILE', 'Não há maneira de conseguir o ficheiro remoto.');
define('_JNEWS_ERROR_FETCH', 'Erro de acesso ao ficheiro.');

define('_JNEWS_CHECK', 'Verificar');
define('_JNEWS_MORE_INFO', 'Mais informação');
define('_JNEWS_UPDATE_NEW', 'Actualizar para nova versão');
define('_JNEWS_UPGRADE', 'Upgrade para produto mais elevado');
define('_JNEWS_DOWNDATE', 'Voltar a instalar versão anterior');
define('_JNEWS_DOWNGRADE', 'Voltar para o produto básico');
define('_JNEWS_REQUIRE_JOOM', 'Requere Joomla');
define('_JNEWS_TRY_IT', 'Experimentar!');
define('_JNEWS_NEWER', 'Novo');
define('_JNEWS_OLDER', 'Antigo');
define('_JNEWS_CURRENT', 'Actual');

// since 1.0.9
define('_JNEWS_CHECK_COMP', 'Experimentar um dos outros componentes');
define('_JNEWS_MENU_VIDEO', 'Tutoriais Video');
define('_JNEWS_AUTO_SCHEDULE', 'Temporizador');
define('_JNEWS_SCHEDULE_TITLE', 'Definições de funções automáticas temporizadas');
define('_JNEWS_ISSUE_NB_TIPS', 'Atribuir número automaticamente gerado pelo sistema');
define('_JNEWS_SEL_ALL', 'Todos os mailings');
define('_JNEWS_SEL_ALL_SUB', 'Todas as listas');
define('_JNEWS_INTRO_ONLY_TIPS', 'Se assinalar esta caixa apenas a introdução do artigo será inserida no mailing com um link LER MAIS para a leitura completa do mesmo no seu site.');
define('_JNEWS_TAGS_TITLE', 'Tag de conteúdo');
define('_JNEWS_TAGS_TITLE_TIPS', 'Copie e cole esta tag para o seu mailing, no sítio onde quer colocar o conteúdo.');
define('_JNEWS_PREVIEW_EMAIL_TEST', 'Indica o endereço de email para onde enviar um teste');
define('_JNEWS_PREVIEW_TITLE', 'Pré-visualizar');
define('_JNEWS_AUTO_UPDATE', 'Nova notificação de actualização');
define('_JNEWS_AUTO_UPDATE_TIPS', 'Selecione SIM se quiser ser notificado de novas actualizações para o seu componente. <br />IMPORTANTE!! Mostrar Dicas tem de estar activado para que esta função funcione.');

// since 1.1.0
define('_JNEWS_LICENSE', 'Informação de Licenceamento');


// since 1.1.1
define('_JNEWS_NEW', 'Novo');
define('_JNEWS_SCHEDULE_SETUP', 'Para que as auto-respostas sejam enviadas tem de definir uma agenda na configuração.');
define('_JNEWS_SCHEDULER', 'Agendador');
define('_JNEWS_jnews_CRON_DESC', 'se não tem acesso à administração de tarefas cron no seu website, pode registar-se para uma Conta Tarefa Cron jNews Grátis em:');
define('_JNEWS_CRON_DOCUMENTATION', 'Pode encontrar mais informação sobre como definir o Agendador jNews no url seguinte:');
define('_JNEWS_CRON_DOC_URL', '<a href="http://www.joobi.co/index.php?option=com_content&view=article&id=4249&catid=29&Itemid=72"
 target="_blank">http://www.joobi.co/index.php?option=com_content&Itemid=72&view=category&layout=blog&id=29&limit=60</a>');
define( '_JNEWS_QUEUE_PROCESSED', 'Fila processada com sucesso...');
define( '_JNEWS_ERROR_MOVING_UPLOAD', 'Erro ao mover ficheiro importado');

//since 1.1.4
define( '_JNEWS_SCHEDULE_FREQUENCY', 'Frequência do Agenda');
define( '_JNEWS_CRON_MAX_FREQ', 'Frequência Máxima da Agenda');
define( '_JNEWS_CRON_MAX_FREQ_TIPS', 'Especifica a frequência máxima que a agenda pode ser executada ( em minutos ).  Isto limitará a atenda mesmo que a tarefa cron esteja definida com maior frequência.');
define( '_JNEWS_CRON_MAX_EMAIL', 'Máximo de emails por tarefa');
define( '_JNEWS_CRON_MAX_EMAIL_TIPS', 'Especifica o número máximo de emails enviados por tarefa. If this is set to O the maximim emails per task will be 1');
define( '_JNEWS_CRON_MINUTES', ' minutos');
define( '_JNEWS_SHOW_SIGNATURE', 'Mostra rodapé do email');
define( '_JNEWS_SHOW_SIGNATURE_TIPS', 'Caso queira ou não promover o jNews no rodapé dos emails.');
define( '_JNEWS_QUEUE_AUTO_PROCESSED', 'Auto-respostas processadas com successo...');
define( '_JNEWS_QUEUE_NEWS_PROCESSED', 'Newsletters agendadas processadas com sucesso...');
define( '_JNEWS_MENU_SYNC_USERS', 'Sincronizar Utilizadores');
define( '_JNEWS_SYNC_USERS_SUCCESS', 'Sincronização de Utilizadores processada com sucesso!');

// compatibility with Joomla 15
if (!defined('_BUTTON_LOGOUT')) define( '_BUTTON_LOGOUT', 'Sair');
if (!defined('_CMN_YES')) define( '_CMN_YES', 'Sim');
if (!defined('_CMN_NO')) define( '_CMN_NO', 'Não');
if (!defined('_HI')) define( '_HI', 'Olá');
if (!defined('_CMN_TOP')) define( '_CMN_TOP', 'Topo');
if (!defined('_CMN_BOTTOM')) define( '_CMN_BOTTOM', 'Fundo');
//if (!defined('_BUTTON_LOGOUT')) define( '_BUTTON_LOGOUT', 'Logout');

// For include title only or full article in content item tab in newsletter edit - p0stman911
define('_JNEWS_TITLE_ONLY_TIPS', 'Se selecionar isto apenas o título do artigo será inserido no mailing como link para o artigo completo no seu site.');
define('_JNEWS_TITLE_ONLY', 'Apenas Título');
define('_JNEWS_FULL_ARTICLE_TIPS', 'Se selecionar isto o artigo completo será inserido no mailing');
define('_JNEWS_FULL_ARTICLE', 'Artigo Completo');
define('_JNEWS_CONTENT_ITEM_SELECT_T', 'Selecione um item de conteúdo para ser adicionado à mensagem. <br />Copie e cole o<b>content tag</b> para o mailing.  Pode escolher ter a totalidade do texto, apenas introdução, ou apenas título com (0, 1, ou 2 respectivamente). ');
define('_JNEWS_SUBSCRIBE_LIST2', 'Lista(s) de Mailing');

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
define('_JNEWS_AUTO_NEWS_OPTION', 'Opções da Smart-Newsletter');
define('_JNEWS_AUTONEWS_FREQ', 'Frequência da Newsletter');
define('_JNEWS_AUTONEWS_FREQ_TIPS', 'Especifica a frequência com que deseja enviar as smart-newsletter.');
define('_JNEWS_AUTONEWS_SECTION', 'Secção de Artigos');
define('_JNEWS_AUTONEWS_SECTION_TIPS', 'Especifica a secção de que quer escolher os artigos.');
define('_JNEWS_AUTONEWS_CAT', 'Categoria do Artigo');
define('_JNEWS_AUTONEWS_CAT_TIPS', 'Especifica a categoria de que quer escolher os artigos (TODAS para todos os artigos naquela secção).');
define('_JNEWS_SELECT_SECTION', 'Selecione secção');
define('_JNEWS_SELECT_CAT', 'Todas as Categorias');
define('_JNEWS_AUTO_DAY_CH8', 'Quaternalmente');
define('_JNEWS_AUTONEWS_STARTDATE', 'Data de começo');
define('_JNEWS_AUTONEWS_STARTDATE_TIPS', 'Especifica a data para começar a enviar a Smart Newsletter.');
define('_JNEWS_AUTONEWS_TYPE', 'Renderização do Conteúdo');// how we see the content which is included in the newsletter
define('_JNEWS_AUTONEWS_TYPE_TIPS', 'Artigo Completo: will include the entire article in the newsletter.<br />' .
		'Apenas Introdução: será incluida apenas a introdução do artigo na newsletter.<br/>' .
		'Apenas Título: será incluido apenas o título do artigo na newsletter.');
define('_JNEWS_TAGS_AUTONEWS', '[SMARTNEWSLETTER] = Isto será substituído pela Smart-newsletter.');

//since 1.1.3
define('_JNEWS_MALING_EDIT_VIEW', 'Create / View Mailings');
define('_JNEWS_LICENSE_CONFIG', 'License');
define('_JNEWS_ENTER_LICENSE', 'Enter license');
define('_JNEWS_ENTER_LICENSE_TIPS', 'Enter your license number and save it.');
define('_JNEWS_LICENSE_SETTING', 'License settings');
define('_JNEWS_GOOD_LIC', 'Your license is valid.');
define('_JNEWS_NOTSO_GOOD_LIC', 'Your license is not valid: ');
define('_JNEWS_PLEASE_LIC', 'Please contact jNews support to upgrade your license ( license@joobi.co ).');

define('_JNEWS_DESC_PLUS', 'jNews Plus is the first sequencial auto-responders for Joomla CMS.  ' . _JNEWS_FEATURES);
define('_JNEWS_DESC_PRO', 'jNews PRO the ultimate mailing system for Joomla CMS.  ' . _JNEWS_FEATURES);

//since 1.1.4
define('_JNEWS_ENTER_TOKEN', 'Enter token');
define('_JNEWS_ENTER_TOKEN_TIPS', 'Please enter your token number you received by email when you purchased jNews. ');
define('_JNEWS_jnews_SITE', 'jNews site:');
define('_JNEWS_MY_SITE', 'My site:');
define( '_JNEWS_LICENSE_FORM', ' ' .
 		'Click here to go to the license form.</a>');
define('_JNEWS_PLEASE_CLEAR_LICENSE', 'Please clear the license field so it is empty and try again.<br />  If the problem persists, ');
define( '_JNEWS_LICENSE_SUPPORT', 'If you still have questions, ' . _JNEWS_PLEASE_LIC);
define( '_JNEWS_LICENSE_TWO', 'you can get your license manual by entering the token number and site URL (which is highlighted in green at the top of this page) in the License form. '
			. _JNEWS_LICENSE_FORM . '<br /><br/>' . _JNEWS_LICENSE_SUPPORT);
define('_JNEWS_ENTER_TOKEN_PATIENCE', 'After saving your token a license will be generated automatically. ' .
		' Usually the token is validated in 2 minutes.  However, in some cases it can take up to 15 minutes.<br />' .
		'<br />Check back this control panel in few minutes.  <br /><br />' .
		'If you didn\'t receive a valid license key in 15 minutes, '. _JNEWS_LICENSE_TWO);
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

define( '_JNEWS_MAIL_FORMAT', 'Formato de codificação');
define( '_JNEWS_MAIL_FORMAT_TIPS', 'Que formato utiliza para codificar os mailings, somente texto ou MIME');
define( '_JNEWS_jnews_CRON_DESC_ALT', 'If you do not have access to a cron task manager on your website, you can use the Free jCron component to create a cron task from your website.');

//since 1.3.1
define('_JNEWS_SHOW_AUTHOR', 'Mostrar nome do autor');
define('_JNEWS_SHOW_AUTHOR_TIPS', 'Seleccione Sim se pretende adicionar o nome do autor quando adiciona um artigo ao Mailing');

//since 1.3.5
define('_JNEWS_REGWARN_NAME', 'Por favor, informe seu nome.');
define('_JNEWS_REGWARN_MAIL', 'Por favor, informe um endereço de e-mail válido.');

//since 1.5.6
define('_JNEWS_ADDEMAILREDLINK_TIPS', 'Se seleccionar Sim o e-mail do utilizador será adicionado como parametro no final do url redireccionado (o link redireccionado para o seu modulo or para um formulário jNews externo).<br/>Pode ser útil se pretender executar scripts especiais na sua página redireccionada.');
define('_JNEWS_ADDEMAILREDLINK', 'Adicionar e-mail para redireccionar link');

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
define('_JNEWS_REDIRECTCONFIRMATION', 'URL redireccionado');
define('_JNEWS_REDIRECTCONFIRMATION_TIPS', 'Se requer um e-mail de confirmação, o utilizador quando confirmar será remetido para este URL.');

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


