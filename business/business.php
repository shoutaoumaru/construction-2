<?php
 /* Template Name: business
 */
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>事業内容｜建設テンプレート2</title>
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
    <img class="thumbnail-img" src="<?php echo get_template_directory_uri(); ?>/images/business/business.jpg" alt="">
    <div class="position-absolute text-center">
      <p>BUSINESS</p>
      <h2 class="Typing">事業内容</h2>
    </div>
  </section>

  <div class="py-5 px-4 text-center">
    <p class="">大規模な現場の鉄骨・解体工事から、一般住宅の水まわりの設備のトラブル・電気設備工事など、
      <span class="br-pc">様々なご要望にお応えできるのが私たちの強みです。</span>
      </p>
  </div>

  <section class="business-contents">
    
    <div class="row position-relative mt-4">
      <div class="bgextend bgLRextendTrigger col-lg-5 p-0">
        <img class="bgappearTrigger img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/business/business-1.jpg" alt="">
      </div>
      <div class="scroll-top col-lg-7 p-lg-5 p-4 d-flex flex-column business-item">
        <h2 class="my-lg-5 my-4"><span class="mx-4">1</span>鉄骨工事</h2>
        <p class="mt-auto p-xl-5 p-2">鍛冶工事や溶接工事から現場での組み立てまで、鉄骨に関する
          施工をワンストップで手掛けます。同じ企業が手掛けることで
          質が高まるうえに、コストカットも可能です。</p>
      </div>
      <div class="m-color position-absolute" style="height: 100%; z-index: -10; bottom: -10%;">
      </div>
    </div>

    <div class="row flex-row-reverse position-relative">
      <div class="bgextend bgLRextendTrigger col-lg-5 p-0">
        <img class="bgappearTrigger img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/business/business-2.jpg" alt="">
      </div>
      <div class="scroll-top col-lg-7 p-lg-5 p-4 d-flex flex-column business-item">
        <h2 class="my-lg-5 my-4"><span class="mx-4">2</span>給水工事</h2>
        <p class="mt-auto p-xl-5 p-2">屋外の道路の排水管から建物の敷地内までつなぐ「給水管引込工事」と、各家庭の蛇口までをつなげる「屋内配管工事」の両方を手掛けます。
          水まわりの設備のトラブルにも対応できますので、お気軽にご相談ください。
          </p>
      </div>
      <div class="m-color position-absolute" style="height: 100%; z-index: -10; bottom: -10%;">
      </div>
    </div>

    <div class="row position-relative">
      <div class="bgextend bgLRextendTrigger col-lg-5 p-0">
        <img class="bgappearTrigger img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/business/business-3.jpg" alt="">
      </div>
      <div class="scroll-top col-lg-7 p-lg-5 p-4 d-flex flex-column business-item">
        <h2 class="my-lg-5 my-4"><span class="mx-4">3</span>電気工事</h2>
        <p class="mt-auto p-xl-5 p-2">ビルやマンション、店舗などの電気設備をトータルで手掛けます。
          コンセントやスイッチの増設や照明設備の取り替え、設置、分電盤の点検、LED化など個人宅の電気設備工事もお任せ下さい。</p>
      </div>
      <div class="m-color position-absolute" style="height: 100%; z-index: -10; bottom: -10%;">
      </div>
    </div>

    <div class="row flex-row-reverse position-relative">
      <div class="bgextend bgLRextendTrigger col-lg-5 p-0">
        <img class="bgappearTrigger img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/business/business-4.jpg" alt="">
      </div>
      <div class="scroll-top col-lg-7 p-lg-5 p-4 d-flex flex-column business-item">
        <h2 class="my-lg-5 my-4"><span class="mx-4">4</span>解体工事</h2>
        <p class="mt-auto p-xl-5 p-2">
          プラントや施設、鉄骨鉄筋コンクリート、鉄骨造の解体工事に対応可能です。
          専門性が高い施工も30年以上の業歴を生かして確実に手掛けますので、ぜひ相談ください。
        </p>
      </div>
      <div class="m-color position-absolute" style="height: 100%; z-index: -10; bottom: -10%;">
      </div>
    </div>

  </section>



  <!-- footer -->
  <?php get_template_part('includes/c-footer'); ?>      

<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://unpkg.com/scrollreveal"></script>
<script src="<?php echo get_template_directory_uri(); ?>/scripts/typing.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/scripts/scrollreveal.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/scripts/main.js"></script>

</body>
</html>