<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Chamado $chamado
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Lista de Chamados'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="chamados form large-9 medium-8 columns content">
    <?= $this->Form->create($chamado) ?>
    <fieldset>
        <legend><?= __('Adicionar novo Chamado') ?></legend>
        <?php
            echo $this->Form->control('titulo');
            echo $this->Form->control('descricao');
            //echo $this->Form->control('feito');
            //IMPEDIR QUE O USUÁRIO POSSA CADASTRAR VALOR NO CAMPO DE STATUS - JÁ QUE A FUNÇÃO DE ADICIONAR JÁ
            //POSSUI POR PADRÃO TORNAR O REGISTRO VISÍVEL
            //echo $this->Form->control('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Adicionar')) ?>
    <?= $this->Form->end() ?>
</div>
