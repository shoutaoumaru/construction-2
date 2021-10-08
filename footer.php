
  <footer id="footer" class="p-md-4 p-3">
    <div class="d-lg-flex justify-content-between my-3">
      <img class="logo" src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt="">
      <ul class="d-flex flex-wrap my-4">
        <li class="mx-md-4 m-2"><a href=""><i class="fas fa-angle-right me-1"></i>ホーム</a></li>
        <li class="mx-md-4 m-2"><a href=" <?php echo esc_url( home_url('/business')); ?>"><i class="fas fa-angle-right me-1"></i>事業内容</a></li>
        <li class="mx-md-4 m-2"><a href=" <?php echo esc_url( home_url('/company')); ?>"><i class="fas fa-angle-right me-1"></i>会社情報</a></li>
        <li class="mx-md-4 m-2"><a href=" <?php echo esc_url( home_url('/news')); ?>"><i class="fas fa-angle-right me-1"></i>ニュース</a></li>
        <li class="mx-md-4 m-2"><a href=" <?php echo esc_url( home_url('/recruit')); ?>"><i class="fas fa-angle-right me-1"></i>採用情報</a></li>
      </ul>
    </div>
    <div class="small">
      <p class="my-2">〒812-0011<span class="br">
      福岡県福岡市博多区博多駅前3-27-25-9F</span></p>
      <p>TEL：0120-123-456 <span class="br-sp ms-2">FAX：0120-123-789</span></p>
    </div>
    <p class="text-center small my-4">Copyright © 株式会社 Riv建設 All Rights Reserved.</p>
    <a href="#top" class="page_top"></a>
  </footer>
<?php wp_footer(); ?>