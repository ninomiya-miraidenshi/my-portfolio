<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>お問い合わせ内容</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <!-- ヘッダーはｊｓやってから作るつもり -->
  <div class="header">
    
  </div>

  <div class="main">
    <div class="thanks-message">お問い合わせいただきありがとうございます。</div>
    <div class="display-contact">
      <div class="form-title">入力内容</div>

      <div class="form-item">■ 名前</div>
      <?php echo $_POST['name']; ?>

      <div class="form-item">■ メールアドレス</div>
      <?php echo $_POST['email']; ?>
      
      <div class="form-item">■ 内容</div>
      <?php echo $_POST['body']; ?>
    </div>
  </div>


</body>
</html>