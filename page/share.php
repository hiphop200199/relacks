<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/component/head.php'; ?>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/controller/Share.php';?>
<nav>
  <a href="/">index</a>
  <a href="./game.php">game</a>
  <a href="./crochet.php">crochet</a>
</nav>

<section class="grid">
  <?php if(!empty($list)) :?>
  <?php foreach ($list as $k => $v) : ?>
    <div class="card <?= ($k + 1) % 2 == 0 ? 'right' : '' ?>">
      <p class="explain"><?= htmlspecialchars($v['content']) ?></p>
      <p><?= htmlspecialchars($v['nickname']) ?></p>
      <p><?= date('Y/m/d H:i',$v['create_time']) ?></p>
    </div>
  <?php endforeach; ?>
  <?php endif;?>
</section>
<h2>你也有獨特的放鬆管道嗎？歡迎跟我們分享！</h2>
<form action="<?=$_SERVER['PHP_SELF']?>" method="post" class="form">
  <label>怎麼稱呼你？</label>
  <input type="text" name="nickname" required>
  <label>給予描述</label>
  <textarea name="introduction" required></textarea>
  <button type="submit">送出</button>
</form>

<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/component/foot.php'; ?>