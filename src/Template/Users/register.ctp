<br><br><div class="index large-4 medium-4 large-offset-4 medium-offset-4 columns">
	<div class="panel">
		<h3 class="text-center">Cadastre-se agora</h3>
		<?= $this->Form->create($user); ?>
			<?= $this->Form->input('nome'); ?>
			<?= $this->Form->input('email'); ?>
			<?= $this->Form->input('password', array('type'=>'password')); ?>
			<?= $this->Form->submit('Cadastrar', array('class'=>'button')); ?>
		<?= $this->Form->end(); ?>
	</div>
</div>