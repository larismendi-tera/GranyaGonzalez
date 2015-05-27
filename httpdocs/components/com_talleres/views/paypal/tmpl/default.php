<?php
/**
 * Created by JetBrains PhpStorm.
 * User: rreimi
 * Date: 15/05/13
 * Time: 01:08 PM
 * To change this template use File | Settings | File Templates.
 */

?>

<div class="item-page shadow-container paypal-confirm">
    <h2 class="article-title shadowed-right">
        <a><?php echo $this->escape($this->params->get('page_heading')); ?></a>
    </h2>
<form action="<?php echo $this->data->paypal_url ?>" method="post">

    <fieldset>
        <dl class="fieldset">
            <dt><?php echo JText::_('COM_INSCRIPCION_FIELD_FORMA_PAGO') ?></dt>
            <dd><?php echo JText::_('COM_TALLERES_FIELD_PAGO_PAYPAL') ?></dd>
            <dt><?php echo JText::_('COM_TALLERES_FIELD_TITLE') ?></dt>
            <dd><?php echo $this->data->item_name ?></dd>
            <dt><?php echo JText::_('COM_INSCRIPCION_FIELD_TOTAL_ORDEN') ?></dt>
            <dd><?php echo TalleresHelper::gerCurrencySymbol($this->data->pais) ?> <?php echo $this->data->amount ?></dd>
            <dt><br/></dt>
            <dd><input type="image" name="submit" border="0"
                       src="https://www.paypalobjects.com/es_ES/i/btn/btn_paynowCC_LG.gif"
                       alt="PayPal - The safer, easier way to pay online"/></dd>
        </dl>
    </fieldset>

    <input type="hidden" name="cmd" value="_xclick">
    <input type="hidden" name="business" value="<?php echo $this->data->business ?>">
    <input type="hidden" name="item_name" value=" <?php echo $this->data->item_name ?>">
    <input type="hidden" name="item_number" value="<?php echo $this->data->item_number ?>">
    <input type="hidden" name="amount" value="<?php echo $this->data->amount ?>">
    <input type="hidden" name="first_name" value="<?php echo $this->data->first_name ?>">
    <input type="hidden" name="city" value="<?php echo $this->data->city ?>">
    <input type="hidden" name="email" value="<?php echo $this->data->email ?>">
    <input type="hidden" name="return" value="<?php echo $this->data->return_url ?>">
    <input type="hidden" name="cancel" value="<?php echo $this->data->cancel_url ?>">
    <input name="custom" type="hidden" value ="<?php echo $this->data->custom ?>" />
    <input name="notify_url" type="hidden" value ="<?php echo $this->data->notify_url ?>" />
</form>
</div>