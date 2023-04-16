<?php
/**
 * 
 * @var \App\View\Appview $this
 * @var \App\Model\Entity\Post[] $posts
 */
?>

<div class="content">
    <?php foreach ($posts as $post): ?>
    <h3><?= h($post->title)?></h3>
    <p><?= $post->created->i18nFormat("YYYY年MM月dd日 HH:mm") ?></p>
    <?= $this->Text->autoParagraph(h($post->description))?>
    <!-- <a href="/posts/view/<?= $post->id ?>" class="button">記事を読む</a> -->
    <?= $this->Html->Link('記事を読む', [
        'controller'=>"Posts",
        'action'=>"view",
        $post->id
    ], ['class'=>'button']) ?>
    <hr>
    <?php endforeach; ?>

    <?php if($this->Paginator->total() >1): ?>
        <div class="Paginator">
            <ul class="pagination">
                <?= $this->Paginator->first("<<最初") ?>
                <?= $this->Paginator->prev("<<前へ") ?>
                <?= $this->Paginator->numbers() ?>
                <?= $this->Paginator->next('次へ >') ?>
                <?= $this->Paginator->last('最後へ >') ?>
            </ul>
        </div>
    <?php endif; ?>
</div>