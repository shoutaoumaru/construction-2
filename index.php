<!DOCTYPE html>
<html lang="ja">
<head>
<?php get_header(); ?>
</head>
<body>

  <header id="header" class="d-flex">
    <h2>
      <a href="/">
        <img class="logo" src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt="" width="85%">
      </a>
    </h2>
    <nav id="pc-nav" class="">
      <ul id="g-navi" class="nav01c">
        <li><a href="/">ホーム</a></li>
        <li><a href="/business/business.html">事業内容</a></li>
        <li><a href="/company/company.html">会社情報</a></li>
        <li><a href="/news/news.html">ニュース</a></li>
        <li><a href="/recruit/recruit.html">採用情報</a></li>
      </ul>
    </nav>
  </header>

  <!-- mobile-menu -->
  <div class="openbtn d-lg-none"><span></span><span></span><span></span></div>
  <nav id="g-nav">
    <div id="g-nav-list"><!--ナビの数が増えた場合縦スクロールするためのdiv※不要なら削除-->
      <ul>
        <li>
          <a href="/" class="d-flex justify-content-between align-items-center">
            Top
            <span><i class="fas fa-chevron-right"></i></span>
          </a>
        </li> 
        <li>
          <a href="/business/business.html" class="d-flex justify-content-between align-items-center">
            事業内容
            <span><i class="fas fa-chevron-right"></i></span>
          </a>
        </li> 
        <li>
          <a href="/company/company.html" class="d-flex justify-content-between align-items-center">
            会社情報
            <span><i class="fas fa-chevron-right"></i></span>
          </a>
        </li> 
        <li>
          <a href="/news/news.html" class="d-flex justify-content-between align-items-center">
            ニュース
            <span><i class="fas fa-chevron-right"></i></span>
          </a>
        </li> 
        <li>
          <a href="/recruit/recruit.html" class="d-flex justify-content-between align-items-center">
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
          <li class="p-3"><a href="/news/news.html"><span class="mx-md-4 mx-2 fw-bold">2021.09.01</span>Riv建設 求人募集中</a></li>
          <li class="p-3"><a href="/news/news.html"><span class="mx-md-4 mx-2 fw-bold">2021.08.01</span>8月のお知らせ</a></li>
          <li class="p-3"><a href="/news/news.html"><span class="mx-md-4 mx-2 fw-bold">2021.07.01</span>7月の営業時間</a></li>
        </ul>
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

      

      <a href="/company/company.html" class="stretchbtn my-lg-5 my-3"><span class="me-3">More</span></a>
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
          <a href="/">
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
      <a href="/business/business.html" class="stretchbtn mb-5"><span class="me-3">More</span></a>
    </div>
  </section>

  <section id="top_news">
    <div class="row">
      
      <div class="bgextend bgLRextendTrigger col-lg-5 m-color">
        <div class="d-flex flex-column bgappearTrigger p-md-5 p-4">
          <h2 class="Typing">NEWS</h2>
          <p class="description">- ニュース</p>
          <div class="mt-auto p-2 mb-4">
            <a href="/news/news.html" class="stretchbtn"><span class="me-3">More</span></a>
          </div>
        </div>
      </div>

      <div class="col-lg-7">
        <ul class="p-md-5">
          <li class="p-md-5 p-4 border-bottom border-white">
            <a href="">
              <span class="m-color text-white px-md-5 p-md-4 p-2 me-4">2021.09.01</span> Riv建設 求人募集中
            </a>
          </li>
          <li class="p-md-5 p-4 border-bottom border-white">
            <a href="">
              <span class="m-color text-white px-md-5 p-md-4 p-2 me-4">2021.08.01</span> 8月のお知らせ
            </a>
          </li>
          <li class="p-md-5 p-4 border-bottom border-white">
            <a href="">
              <span class="m-color text-white px-md-5 p-md-4 p-2 me-4">2021.07.01</span> 7月のお休み情報
            </a>
          </li>
        </ul>
        <div class="d-md-none my-5 text-center">
          <a href="/news/news.html" class="stretchbtn"><span class="me-3">More</span></a>
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
          <a href="/recruit/recruit.html" class="stretchbtn "><span class="me-3">More</span></a>
        </div>
      </div>
      <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/top/recruit.jpg" alt="">
    </div>
  </section>

  <!-- footer -->
  <footer id="footer" class="p-md-4 p-3">
    <div class="d-lg-flex justify-content-between my-3">
      <img class="logo" src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt="">
      <ul class="d-flex flex-wrap my-4">
        <li class="mx-md-4 m-2"><a href=""><i class="fas fa-angle-right me-1"></i>ホーム</a></li>
        <li class="mx-md-4 m-2"><a href="/business/business.html"><i class="fas fa-angle-right me-1"></i>事業内容</a></li>
        <li class="mx-md-4 m-2"><a href="/company/company.html"><i class="fas fa-angle-right me-1"></i>会社情報</a></li>
        <li class="mx-md-4 m-2"><a href="/news/news.html"><i class="fas fa-angle-right me-1"></i>ニュース</a></li>
        <li class="mx-md-4 m-2"><a href="/recruit/recruit.html"><i class="fas fa-angle-right me-1"></i>採用情報</a></li>
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

  <?php get_footer(); ?>
</body>
</html>