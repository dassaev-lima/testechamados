<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Chamado $chamado
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Deletar'),
                ['action' => 'deletar', $chamado->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $chamado->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Listar Chamados'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="chamados form large-9 medium-8 columns content">
    <?= $this->Form->create($chamado) ?>
    <fieldset>
        <legend><?= __('Editar Chamado') ?></legend>
        <?php
            echo $this->Form->control('titulo');
            echo $this->Form->control('descricao');
            echo $this->Form->control('feito');
            //LINHA DE BAIXO COMENTADA PARA NÃO PERMITIR QUE O USUÁRIO ALTERE A CONDIÇÃO DE VISIBILIDADE DE 
            //REGISTROS EXCLUÍDOS
            //echo $this->Form->control('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Confirmar')) ?>
    <?= $this->Form->end() ?>
</div>
