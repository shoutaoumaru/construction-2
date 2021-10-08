<!DOCTYPE html>
<html lang="ja">
<head>
<title>ニュース｜建設テンプレート2</title>
<?php get_header(); ?>

</head>
<body>

<?php get_template_part('includes/c-header'); ?>      
  <!-- top_company -->
  <section id="thumbnail" class="position-relative">
    <img class="thumbnail-img" src="<?php echo get_template_directory_uri(); ?>/images/news/news.jpg" alt="">
    <div class="position-absolute text-center">
      <p>NEWS</p>
      <h2 class="Typing">ニュース一覧</h2>
    </div>
  </section>
  
  <section class="news-contents">
    <ul class="news-list">
      <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
        <li class="news-item pt-4">
          <a href="<?php the_permalink() ;?>" class="p-xl-5 p-md-3 d-md-flex align-items-center">
            <span class="d-inline-block mb-3 m-color text-white px-md-4 p-2 me-md-5"><?php echo get_the_date(); ?></span>
            <p class="fs-md-12 mb-3 px-3"><?php the_title(); ?></p>
          </a>
        </li>
      <?php endwhile; ?>
      <?php endif; ?>
    </ul>
    <!-- pagenesion -->
    <?php if( function_exists ("the_pagination") ) the_pagination(); ?>
    <div class="my-5 text-center">
      <a href=" <?php echo esc_url( home_url('/')); ?>" class="stretchbtn"><span class="me-3">TOPに戻る</span></a>
    </div>
    <a href="#top" class="page_top"></a>
  </section>

  <!-- footer -->
  <?php get_footer(); ?>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="<?php echo get_template_directory_uri(); ?>/scripts/typing.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/scripts/main.js"></script>

</body>
</html>