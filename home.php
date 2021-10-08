<!DOCTYPE html>
<html lang="ja">
<head>
<title>建設テンプレート2</title>
<?php get_header(); ?>

</head>
<body>
  <?php get_template_part('includes/c-header'); ?>      
  <!-- top_main -->
  <section class="top_main">
    <div class="top-title">
      <h2>Trust and achievements</h2>
      <p class="Typing small">30年の歩みは、信頼の証です。</p>
    </div>
    <div id="slider" class="scroll-main">
    </div>
    <div class="top_main_bottom d-flex position-absolute w-100 justify-content-between">

      <div class="p-md-4 p-2 d-flex border border-dark bg-dark">
        <p class="align-self-center"><i class="fas fa-phone fa-3x me-3"></i></p>
        <div class="align-self-center hours">
          <p class="fs-3 fw-bold">0120-123-456</p>
          <span class="br fw-light">月～金 09:00-17:00 (土日祝休み)</span>
        </div>
      </div>

      <div class="m-color">
        <p class="bg-dark d-inline-block py-1 px-3">お知らせ</p>
        <!-- <p class="p-md-4 p-3"><span class="mx-md-4 mx-2 fw-bold">2021.09.01</span> Riv建設  求人募集中</p> -->
        <ul class="slider p-md-4 p-3">
          <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
            <li class="p-3"><a href="<?php the_permalink() ;?>"><span class="mx-md-4 mx-2 fw-bold"><?php echo get_the_date(); ?></span><?php the_title(); ?></a></li>
          </ul>
          <?php endwhile; ?>
          <?php endif; ?>
      </div>
    </div>
    <div class="scrolldown"><span>Scroll</span></div>
  </section>

  <!-- top_company -->
  <section id="top_company" class="p-md-5 py-5">
    <div class="p-lg-5 p-3">
      <h2 class="Typing">COMPANY</h2>
      <p class="description">- 会社情報</p>
      <div class="scroll-top my-5">
        <p>福岡県に密着するからこそのスピーディーな仕事と、安全第一で進める質の高い施工がRiv建設の強みです。
          <span class="br">経験豊富なベテランから20代の若手もいます。先輩が後輩に対して工事の技術やノウハウを伝達し、会社全体のスキルを高める風土があります。</span>
        </p>
        <p class="my-3">お客様に安心していただくために、クオリティの高い施工をご提供致します。</p>
      </div>

      

      <a href=" <?php echo esc_url( home_url('/company')); ?>" class="stretchbtn my-lg-5 my-3"><span class="me-3">More</span></a>
    </div>
  </section>

  <!-- top_service -->
  <section id="top_business">
    <div class="container my-5 p-3">
      <h2 class="Typing">BUSINESS</h2>
      <p class="description">- 事業内容</p>
      <p class="scroll-top">ビルやオフィスから一般住宅まで、様々なご要望にお応えできるのが私たちの強みです。</p>
    </div>

    <ul id="gallery" class="row gallery my-5">
      <li class="col-lg col-md-6 p-0 bgextend bgLRextendTrigger zoomInRotate bgLRextend">
        <div class="bgappearTrigger bgappear position-relative">
          <a href=" <?php echo esc_url( home_url('/')); ?>">
            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/business/business-1.jpg" alt="">
          </a>
          <p class="position-absolute fs-5">鉄骨工事</p>
        </div>
      </li>
      <li class="col-lg col-md-6 p-0 bgextend bgLRextendTrigger zoomInRotate bgLRextend">
        <div class="bgappearTrigger bgappear position-relative">
          <a href="/">
            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/business/business-2.jpg" alt="">
          </a>
          <p class="position-absolute fs-5">給水工事</p>
        </div>
      </li>
      <li class="col-lg col-md-6 p-0 bgextend bgLRextendTrigger zoomInRotate bgLRextend">
        <div class="bgappearTrigger bgappear position-relative">
          <a href="/">
            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/business/business-3.jpg" alt="">
          </a>
          <p class="position-absolute fs-5">電気工事</p>
        </div>
      </li>
      <li class="col-lg col-md-6 p-0 bgextend bgLRextendTrigger zoomInRotate bgLRextend">
        <div class="bgappearTrigger bgappear position-relative">
          <a href="/">
            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/business/business-4.jpg" alt="">
          </a>
          <p class="position-absolute fs-5">解体工事</p>
        </div>
      </li>
    </ul>

    <div class="container">
      <a href=" <?php echo esc_url( home_url('/business')); ?>" class="stretchbtn mb-5"><span class="me-3">More</span></a>
    </div>
  </section>

  <section id="top_news">
    <div class="row">
      
      <div class="bgextend bgLRextendTrigger col-lg-5 m-color">
        <div class="d-flex flex-column bgappearTrigger p-md-5 p-4">
          <h2 class="Typing">NEWS</h2>
          <p class="description">- ニュース</p>
          <div class="mt-auto p-2 mb-4">
            <a href=" <?php echo esc_url( home_url('/news')); ?>" class="stretchbtn"><span class="me-3">More</span></a>
          </div>
        </div>
      </div>

      <div class="col-lg-7">
        <ul class="p-md-5">
          <?php query_posts('posts_per_page=3'); ?>
          <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
            <li class="p-md-5 p-4 border-bottom border-white">
              <a href="<?php the_permalink() ;?>">
                <span class="m-color text-white px-md-5 p-md-4 p-2 me-4"><?php echo get_the_date(); ?></span><?php the_title(); ?>
              </a>
            </li>
          <?php endwhile; ?>
          <?php endif; ?>
        </ul>
        <div class="d-md-none my-5 text-center">
          <a href=" <?php echo esc_url( home_url('/news')); ?>" class="stretchbtn"><span class="me-3">More</span></a>
        </div>
      </div>
    </div>
  </section>

  <section id="top_recruit" class="position-relative">
    <div class="d-md-flex flex-md-row-reverse py-md-5 py-4">
      <div class="d-flex align-items-end flex-column mb-3 container p-lg-5 p-3">
        <h2 class="Typing mb-0">RECRUIT</h2>
        <p class="description p-2">- 採用情報</p>
        <div class="scroll-top px-2 py-4">
          <p>
          Riv建設の社員として一緒に働ける方を募集中です。<span class="br">経験有無問わず募集しておりますので、まずはお気軽にご連絡下さい。
          </p>
        </div>
        <div class="mt-auto p-2">
          <a href=" <?php echo esc_url( home_url('/recruit')); ?>" class="stretchbtn "><span class="me-3">More</span></a>
        </div>
      </div>
      <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/top/recruit.jpg" alt="">
    </div>
  </section>

  <?php get_footer(); ?>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vegas/2.4.4/vegas.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bxslider/4.2.15/jquery.bxslider.min.js"></script>
<script src="https://unpkg.com/scrollreveal"></script>
<script src="<?php echo get_template_directory_uri(); ?>/scripts/typing.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/scripts/scrollreveal.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/scripts/bxslider.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/scripts/vegas.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/scripts/main.js"></script>
</body>
</html>