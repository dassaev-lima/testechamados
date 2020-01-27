<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Chamado $chamado
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Html->link(__('Editar Chamado'), ['action' => 'edit', $chamado->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Deletar Chamado'), ['action' => 'deletar', $chamado->id], ['confirm' => __('Are you sure you want to delete # {0}?', $chamado->id)]) ?> </li>
        <li><?= $this->Html->link(__('Listar Chamados'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo Chamado'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="chamados view large-9 medium-8 columns content">
    <!--<h3><?= h($chamado->id) ?></h3>-->
    <!--TITULO PARA VIZUALIZAÇÃO-->
    <h3>Detalhes do Chamado</h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Titulo') ?></th>
            <td><?= h($chamado->titulo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($chamado->descricao) ?></td>
        </tr>
        <!--<tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($chamado->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $this->Number->format($chamado->status) ?></td>
        </tr>-->
        <tr>
            <th scope="row"><?= __('Feito') ?></th>
            <td><?= $chamado->feito ? __('SIM') : __('NÃO'); ?></td>
        </tr>
    </table>
</div>
