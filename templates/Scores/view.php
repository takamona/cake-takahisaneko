<?php
/**
 * 
 * @var \App\View\Appview $this
 * @var \App\Model\Entity\Score[] $scores
 */
?>
<!-- <?php foreach ($scores as $data) { ?>
<?php echo $data['Scores']['name']; ?>さん:<?php echo $data['Scores']['score']; ?>点<br />
<?php } ?> -->

<div class="content">
    <?php foreach ($data as $score): ?>
    <h3><?php echo $score->name ."さん" ?></h3>
    <h3><?php echo $score->score ."点"?></h3>
    <hr>
    <?php endforeach; ?>
</div>