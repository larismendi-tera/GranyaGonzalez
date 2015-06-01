<?php
/**
 * @copyright Robert Reimi
 * @license GNU General Public License version 2 or later
 */
defined('_JEXEC') or die;
JHtml::_('behavior.keepalive');
//JHtml::_('behavior.formvalidation');
//JHtml::_('behavior.tooltip');
$itemid = JRequest::getInt('Itemid');

?>

<script type="text/javascript">

    var ciudades = jQuery.parseJSON('<?php echo $this->ciudadesDisponibles ?>');
    var ciudadActual = '<?php echo $this->data->ciudad_taller ?>';
    var tallerActual = '<?php echo $this->data->taller_id ?>';
    var talleres;
    var paymentMethodsCity = {
        'Caracas' : ['d','t'],
        'Miami' : ['d','t','p']
    }

    var paymentMethods = {
        'd': '<?php echo JText::_('COM_TALLERES_FIELD_PAGO_DEPOSITO') ?>',
        't': '<?php echo JText::_('COM_TALLERES_FIELD_PAGO_TRANSFERENCIA') ?>',
        'p': '<?php echo JText::_('COM_TALLERES_FIELD_PAGO_PAYPAL') ?>'
    }

    var paymentRequireTransaction =['d', 't'];

    var paymentRequireAmount =['d', 't', 'p'];

    if (jQuery) {
        jQuery(document).ready(function() {

            fillSelectCiudades(ciudades);
            fillTalleresCombo(ciudadActual);
            loadPaymentMethods(ciudadActual);
            toogleTransactionField();

            jQuery('#jform_name').addClass("required"); 
            jQuery('#jform_ci').addClass("required");
            jQuery('#adminForm').validate();

            jQuery('#form-submit').bind('click', function(){
                jQuery('#adminForm').submit();
            });

            jQuery('#jform_forma_pago').bind("change", function(){
                toogleTransactionField();
                displayPaymentInstructions(jQuery(this).val());
            });

            jQuery('.ciudad_radio').bind("click", function(){
                var pais = jQuery(this).attr("rel");
                pais = pais.toLowerCase();
                ciudadActual = jQuery(this).val();
                displayInstructions(pais);
                fillTalleresCombo(ciudadActual);
                loadPaymentMethods(ciudadActual);
                toogleTransactionField();
            })
        });

        function displayPaymentInstructions(paymentMethod) {
            if (paymentMethod == 'p') {
                jQuery('#paymentIns').html('<?php echo JText::_('COM_TALLERES_PAYPAL_INSTRUCTIONS') ?>');
                jQuery('#paymentIns').show();
            } else {
                jQuery('#paymentIns').html('');
                jQuery('#paymentIns').hide();
            }
        }

        function loadPaymentMethods(ciudadActual) {

            jQuery('#jform_forma_pago').find('option').remove();

            var element = jQuery('<option>');
            jQuery(element).html('<?php echo JText::_('COM_TALLERES_FIELD_SELECT_DEFAULT') ?>');
            jQuery(element).val('');
            jQuery('#jform_forma_pago').append(element);

            /* Ajax request is better here */
            for (var i = 0; i < paymentMethodsCity[ciudadActual].length; i++){
                var val = paymentMethodsCity[ciudadActual][i];
                var element = jQuery('<option>');
                jQuery(element).val(val);
                jQuery(element).html(paymentMethods[val]);
                jQuery('#jform_forma_pago').append(element);
            }

        }

        function toogleTransactionField(){
            var currentMethod = jQuery('#jform_forma_pago').val();
            if (paymentRequireTransaction.contains(currentMethod)) {
                /* Enable transaction number field */
                jQuery('.num_transaction_field').show();
                //jQuery('.monto_field').show();
//                jQuery('#jform_monto').addClass('required');
                jQuery('#jform_num_transaccion').addClass('required');

            } else {
                /* Disable transaction number field */
                /* Blank field */
                jQuery('.num_transaction_field').hide();
                jQuery('#jform_num_transaccion').val('');
                jQuery('#jform_num_transaccion').removeClass('required');
            }

            if (paymentRequireAmount.contains(currentMethod)) {
                /* Enable transaction number field */
                jQuery('.monto_field').show();
                jQuery('#jform_monto').addClass('required');

            } else {
                /* Disable transaction number field */
                /* Blank field */
                //jQuery('.monto_field').hide();
                jQuery('.monto_field').hide();
                jQuery('#jform_monto').val('');
                jQuery('#jform_monto').removeClass('required');
            }

        }

        function displayInstructions(pais) {
            jQuery('.inscripcion-article-info').each(function() {
                jQuery(this).addClass("hidden");
            });
            jQuery('.inscripcion-' + pais).removeClass("hidden");

        }

        function fillSelectCiudades(ciudades) {
            for (var i = 0; i < ciudades.length; i++) {
                var checked = "";
                if (ciudadActual == ciudades[i].ciudad) {
                    checked="checked";
                    displayInstructions( ciudades[i].pais.toLowerCase());
                }
                jQuery('.ciudad_box').append('<input class="ciudad_radio" type="radio" name="jform[ciudad_taller]" rel="' + ciudades[i].pais + '" value="' + ciudades[i].ciudad + '" ' + checked + '/><label>' + ciudades[i].ciudad + '</label>');
            }
        }

        function fillTalleresCombo(ciudad) {
            var request = jQuery.getJSON( "<?php echo JURI::base() ?>?option=com_talleres&view=registro&format=raw&ciudad=" + ciudad, function(data) {
                jQuery('select#jform_taller_id > option.valid').remove();
                talleres = data;
                for (var i = 0; i < data.length; i++) {
                    var selected = "";
                    if (tallerActual == data[i].id) {
                        selected="selected";
                    }
                    jQuery('select#jform_taller_id').append('<option class="valid" value="' + data[i].id + '" ' + selected + '>' + data[i].title + '</option>');
                }
            })
        }
    }
</script>

<div class="item-page shadow-container registration<?php echo $this->pageclass_sfx?>">
    <?php if ($this->params->get('show_page_heading')) : ?>
    <h1><?php echo $this->escape($this->params->get('page_heading')); ?></h1>
    <?php endif; ?>

    <h2 class="article-title shadowed-right">
        <a><?php echo $this->escape($this->params->get('page_heading')); ?></a>
    </h2>


    <form action="<?php echo JRoute::_('index.php'); ?>"
          id="adminForm" name="adminForm" method="post" class="form-validate">
        <fieldset>
            <dl class="fieldset">
                <dt><?php echo $this->form->getLabel('ciudad_taller'); ?></dt>
                <dd class="ciudad_box">


                </dd>
                <dt><br/></dt>
                <dd>
                    <!-- Load inscripcion article -->
                    <?php
                    jimport('joomla.application.module.helper');
                    // this is where you want to load your module position
                    $modules = JModuleHelper::getModules('granya-inscripcion-form');
                    foreach($modules as $module)
                    {
                        echo JModuleHelper::renderModule($module);
                    }
                    ?>
                </dd>
                <dt><?php echo $this->form->getLabel('taller_id'); ?></dt>
                <dd><?php echo $this->form->getInput('taller_id'); ?></dd>
                <dt><?php echo $this->form->getLabel('nombre'); ?></dt>
                <dd><?php echo $this->form->getInput('nombre'); ?></dd>
                <dt><?php echo $this->form->getLabel('ci'); ?></dt>
                <dd><?php echo $this->form->getInput('ci'); ?></dd>
                <dt><?php echo $this->form->getLabel('telefono'); ?></dt>
                <dd><?php echo $this->form->getInput('telefono'); ?></dd>
                <dt><?php echo $this->form->getLabel('correo'); ?></dt>
                <dd><?php echo $this->form->getInput('correo'); ?></dd>
                <dt><?php echo $this->form->getLabel('genero'); ?></dt>
                <dd><?php echo $this->form->getInput('genero'); ?></dd>
                <dt><?php echo $this->form->getLabel('ciudad'); ?></dt>
                <dd><?php echo $this->form->getInput('ciudad'); ?></dd>
                <dt><?php echo $this->form->getLabel('forma_pago'); ?></dt>
                <dd>
                    <select id="jform_forma_pago" name="jform[forma_pago]" class="inputbox required error" size="1">
                        <option value="" selected="selected">Seleccione</option>
                    </select>
                </dd>
                <dd id="paymentIns" style="display:none" class="payment-ins message message"></dd>
                <dt class="monto_field"><?php echo $this->form->getLabel('monto'); ?><span class="star">&nbsp;*</span></dt>
                <dd class="monto_field"><?php echo $this->form->getInput('monto'); ?></dd>
                <dt class="num_transaction_field"><?php echo $this->form->getLabel('num_transaccion'); ?><span class="star">&nbsp;*</span></dt>
                <dd class="num_transaction_field"><?php echo $this->form->getInput('num_transaccion'); ?></dd>
                <dt><?php echo $this->form->getLabel('tipo_inscripcion'); ?></dt>
                <dd><?php echo $this->form->getInput('tipo_inscripcion'); ?></dd>
            </dl>
        </fieldset>
        <fieldset>
            <input type="hidden" name="option" value="com_talleres" />
            <input type="hidden" name="task" value="inscripcion.save" />
            <input type="hidden" name="jform[override_amount]" value="1" />
            <?php echo JHtml::_( 'form.token'); ?>
        </fieldset>
        <?php echo JText::_('COM_USERS_REGISTER_REQUIRED'); ?>
        <div class="form-buttons">
            <a class="button" id="form-submit" nohref><?php echo JText::_('COM_TALLERES_INSCRIPCION_FORM_SUBMIT') ?></a> |
            <a href="<?php echo JRoute::_('');?>" title="<?php echo JText::_('JCANCEL');?>"><?php echo JText::_('JCANCEL');?></a>
        </div>
    </form>
</div>
