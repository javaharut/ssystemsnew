<div class="row">
    <?php echo $form->labelEx($model,'desc'.$attr); ?>
    <?php echo $form->textArea($model,'desc'.$attr,array('rows'=>6, 'cols'=>78, 'class'=>'desc')); ?>
    <?php echo $form->error($model,'desc'.$attr); ?>
</div>
