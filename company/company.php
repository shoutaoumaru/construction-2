<?php
 /* Template Name: company
 */
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>会社情報｜建設テンプレート2</title>
<meta name="description"  content="">
<meta name="robots" content="noindex,nofollow">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;500&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/vegas/2.4.4/vegas.min.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bxslider/4.2.15/jquery.bxslider.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/styles/animation.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/styles/parts.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/styles/style.css">
</head>
<body>

  <!-- header -->
  <?php get_template_part('includes/c-header'); ?>      
  <!-- top_company -->
  <section id="thumbnail" class="position-relative">
    <img class="thumbnail-img" src="<?php echo get_template_directory_uri(); ?>/images/company/company.jpg" alt="">
    <div class="position-absolute text-center">
      <p>COMPANY</p>
      <h2 class="Typing">会社情報</h2>
    </div>
  </section>

  <div class="container my-5">
    <section class="company-contents p-lg-5 p-2">
      <div class="row align-items-center flex-md-row-reverse">
        <div class="scroll-top col-md-7 my-3 p-md-5">
          <p class="description mb-1">代表者</p>
          <h2>利部 翔太</h2>
          <div class="fs-lg-12 my-5">
            <p>株式会社Riv建設の代表・利部です。</p>
            <p class="mb-4">弊社はありがたいことに、あらゆるお客様にご依頼をいただきながら成長してきました。</p>
            <p class="mb-4">創業当時は、ミスやトラブルもありましたが、その都度まじめに受け止めて解決してきた結果、今があると思います。</p>
            <p>今後も、技術を高めながらお客様に貢献することが目標です。</p>
          </div>
        </div>
        <div class="scroll-top col-md-5 my-3">
          <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/company/president.jpg" alt="">
        </div>
      </div>

    </section>

    <section class="scroll-top company-info p-md-5 py-5">
      <dl>
        <dt>社名</dt>
        <dd>株式会社Riv建設</dd>
        <dt>代表</dt>
        <dd>利部 翔太</dd>
        <dt>所在地</dt>
        <dd>〒812-0011<span class="br-sp ms-3">福岡県福岡市博多区博多駅前3-27-25-9F</dd>
        <dt>TEL</dt>
        <dd>0120-123-456</dd>
        <dt>資本金</dt>
        <dd>5,000,000円</dd>
        <dt>従業員数</dt>
        <dd>10名/常用下請け15名  合計25名</dd>
        <dt>事業内容</dt>
        <dd>電気工事・給水工事・解体工事・修理工事・その他</dd>
      </dl>
    </section>
  </div>

  <!-- footer -->
  <?php get_template_part('includes/c-footer'); ?>      
  
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://unpkg.com/scrollreveal"></script>
<script src="<?php echo get_template_directory_uri(); ?>/scripts/typing.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/scripts/scrollreveal.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/scripts/main.js"></script>

</body>
</html>