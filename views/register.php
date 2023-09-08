<?php
  use app\core\form\{Form, Field};
?>
<?php $form =  Form::begin('', 'post'); ?>
  <div class="row">
    <div class="col"><?php echo $form->field($model, 'firstname', 'Fisrtname') ?></div>
    <div class="col"><?php echo $form->field($model, 'lastname', 'Lastname') ?></div>
  </div>
  
  <?php echo $form->field($model, 'email', 'Email') ?>
  <?php echo $form->field($model, 'pwd', 'Password')->passwordFiled() ?>
  <?php echo $form->field($model, 'confirmPwd', 'Confirm Password')->passwordFiled() ?>
  <button type="submit" class="btn btn-primary">Submit</button>

<?php Form::end() ?>
