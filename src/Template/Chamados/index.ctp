<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Chamado[]|\Cake\Collection\CollectionInterface $chamados
 */
?>

<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Html->link(__('Novo Chamado'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="chamados index large-5 medium-8 columns content">
    <h3 class="text-center"><?= __('Chamados em Andamento') ?></h3>
    <!-- TABELA QUE MOSTRA OS CHAMADOS EM ANDAMENTO-->
    <table cellpadding="0" cellspacing="0">
   
        <thead>
            <tr>
                <!-- <th scope="col"><?= $this->Paginator->sort('id') ?></th> -->
                <th scope="col"><?= $this->Paginator->sort('titulo') ?></th>
               <!-- <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>-->
                <th scope="col"><?= $this->Paginator->sort('feito') ?></th>
                <!-- <th scope="col"><?= $this->Paginator->sort('status') ?></th> -->
                <th scope="col" class="actions"><?= __('Ações') ?></th>
            </tr>
        </thead>
        <tbody>
         <!-- UM IF LOGO APÓS O COMEÇO DO FOREACH PARA IMPEDIR QUE VENHA DO DATADASE REGISTROS EXCLUÍDOS E 
                INSERIR NESSA TABELA APENAS OS CHAMADOS EM ANDAMENTO-->
            <?php foreach ($chamados as $chamado): if($chamado->status == true && $chamado->feito != true) { 
                //VARIÁVEL CRIADA APENAS PARA MOSTRAR QUE O CHAMADO NÃO FOI FINALIZADO
                $feitoTexto = "NÃO";?>
            <tr>
                <!-- <td><?= $this->Number->format($chamado->id) ?></td> -->
                <td><?= h($chamado->titulo) ?></td>
                <!--<td><?= h($chamado->descricao) ?></td>-->
                <td><?= h($feitoTexto) ?></td>
                <!-- <td><?= $this->Number->format($chamado->status) ?></td> -->
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $chamado->id]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $chamado->id]) ?>
                    <?= $this->Form->postLink(__('Deletar'), ['action' => 'deletar', $chamado->id], ['confirm' => __('Are you sure you want to delete # {0}?', $chamado->id)]) ?>
                </td>
            </tr>
            <?php } endforeach;?>
        </tbody>
    </table>
    </div>
    <div class="chamados index large-5 medium-8 columns content">
    <h3 class="text-center"><?= __('Chamados Finalizados') ?></h3>
    <!-- TABELA QUE MOSTRA OS CHAMADOS FINALIZADOS-->
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <!-- <th scope="col"><?= $this->Paginator->sort('id') ?></th> -->
                <th scope="col"><?= $this->Paginator->sort('titulo') ?></th>
               <!-- <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>-->
                <th scope="col"><?= $this->Paginator->sort('feito') ?></th>
                <!--<th scope="col"><?= $this->Paginator->sort('status') ?></th>-->
                <th scope="col" class="actions"><?= __('Ações') ?></th>
            </tr>
        </thead>
        <tbody>
                <!-- UM IF LOGO APÓS O COMEÇO DO FOREACH PARA IMPEDIR QUE VENHA DO DATADASE REGISTROS EXCLUÍDOS E 
                INSERIR NESSA TABELA APENAS OS CHAMADOS FINALIZADOS-->
            <?php foreach ($chamados as $chamado): if($chamado->status == true && $chamado->feito == true) { 
                //VARIÁVEL CRIADA APENAS PARA MOSTRAR QUE O CHAMADO NÃO FOI FINALIZADO
                $feitoTexto = "SIM";?>
            <tr>
                <!-- <td><?= $this->Number->format($chamado->id) ?></td> -->
                <td><?= h($chamado->titulo) ?></td>
                <!--<td><?= h($chamado->descricao) ?></td>-->
                <td><?= h($feitoTexto) ?></td>
                <!--<td><?= $this->Number->format($chamado->status) ?></td>-->
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $chamado->id]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $chamado->id]) ?>
                    <?= $this->Form->postLink(__('Deletar'), ['action' => 'deletar', $chamado->id], ['confirm' => __('Are you sure you want to delete # {0}?', $chamado->id)]) ?>
                </td>
            </tr>
            <?php } endforeach; ?>
        </tbody>
    </table>
    <!--<div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>-->
</div>
