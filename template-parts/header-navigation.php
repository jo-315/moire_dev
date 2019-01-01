<?php
// ヘッダーのナビゲーション
?>
<div class="header-inner-top">
  <div class="header-logo-wrap">
    <a href="/">
      <img
        src="<?php echo get_stylesheet_directory_uri(); ?>/images/moire_logo.svg"
        class="moire-logo"
      >
    </a>
  </div>

  <div class='header-title-wrap'>
    <a href="/">
      <span class="header-title">moire</span>
    </a>
  </div>

  <div class="header-main-navigation-wrap">
    <nav class="header-main-navigation">
      <ul class='header-main-navigation-items-wrap'>
        <li>
          <a href="/">
            HOME
          </a>
        </li>
        <li>
          <a href="/category/news">
            NEWS
          </a>
        </li>
        <li>
          <a href="/about">
            ABOUT
          </a>
          <div class="header-main-navigation-child header-main-navigation-items-wrap--member">
            <ul>
              <li>
                <a href="/about">
                  ABOUT
                </a>
              </li>
              <li>
                <a href="/member">
                  MEMBEER
                </a>
              </li>
            </ul>
          </div>
        </li>
        <li>
          <a>
            PROJECT
          </a>
          <div class="header-main-navigation-child">
            <ul>
              <li>
                <a href="#">
                  ノンマネ
                </a>
              </li>
            </ul>
          </div>
        </li>
        <li>
          <a href="/recruit/">
            メンバー募集
          </a>
        </li>
        <li>
          <a href="/contact/">
            お問い合わせ
          </a>
        </li>
      </ul>
    </nav>
  </div>

  <div class="header-menu-toggle-button-wrap">
    <button class="header-menu-toggle" aria-controls="primary-menu" aria-expanded="false"><i class="fa fa-bars"></i></button>
  </div>
</div>
