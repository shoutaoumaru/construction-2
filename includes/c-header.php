
  <header id="header" class="d-flex">
    <h2>
      <a href=" <?php echo esc_url( home_url('/')); ?>">
        <img class="logo" src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt="" width="85%">
      </a>
    </h2>
    <nav id="pc-nav" class="">
      <ul id="g-navi" class="nav01c">
        <li><a href=" <?php echo esc_url( home_url('/')); ?>">ホーム</a></li>
        <li><a href=" <?php echo esc_url( home_url('/business')); ?>">事業内容</a></li>
        <li><a href=" <?php echo esc_url( home_url('/company')); ?>">会社情報</a></li>
        <li><a href=" <?php echo esc_url( home_url('/news')); ?>">ニュース</a></li>
        <li><a href=" <?php echo esc_url( home_url('/recruit')); ?>">採用情報</a></li>
      </ul>
    </nav>
  </header>

  <!-- mobile-menu -->
  <div class="openbtn d-lg-none"><span></span><span></span><span></span></div>
  <nav id="g-nav">
    <div id="g-nav-list"><!--ナビの数が増えた場合縦スクロールするためのdiv※不要なら削除-->
      <ul>
        <li>
          <a href=" <?php echo esc_url( home_url('/')); ?>" class="d-flex justify-content-between align-items-center">
            Top
            <span><i class="fas fa-chevron-right"></i></span>
          </a>
        </li> 
        <li>
          <a href=" <?php echo esc_url( home_url('/business')); ?>" class="d-flex justify-content-between align-items-center">
            事業内容
            <span><i class="fas fa-chevron-right"></i></span>
          </a>
        </li> 
        <li>
          <a href=" <?php echo esc_url( home_url('/company')); ?>" class="d-flex justify-content-between align-items-center">
            会社情報
            <span><i class="fas fa-chevron-right"></i></span>
          </a>
        </li> 
        <li>
          <a href=" <?php echo esc_url( home_url('/news')); ?>" class="d-flex justify-content-between align-items-center">
            ニュース
            <span><i class="fas fa-chevron-right"></i></span>
          </a>
        </li> 
        <li>
          <a href=" <?php echo esc_url( home_url('/recruit')); ?>" class="d-flex justify-content-between align-items-center">
            採用情報
            <span><i class="fas fa-chevron-right"></i></span>
          </a>
        </li> 
      </ul>
      <div class="border p-3 mt-5 mx-3 small">
        <a href="tel:0120-123-456" class="d-block text-center"><i class="fa fa-phone me-2"></i>0120-123-456</a>
      </div>
      <p class="text-center my-1">月～金 09:00-17:00 (土日祝休み)</p>
    </div>
  </nav>
  