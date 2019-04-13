<?php get_header('front'); ?>

  <div class='front-page-wrapper'>
    <div class='front-page-head-wrapper'>
      <div class="content-effect-wrapper">
        <div class="content-effect">
          <div class='main-content'>
            <img
              data-src="<?php echo get_stylesheet_directory_uri(); ?>/images/moire_front.png"
              class="moire-header-img lazyload"
            >

            <span class='moire-title'>
              moire
            </span>

            <span class="moire-sub-title">
              社会貢献が身近にある社会づくり
            </span>
          </div>
        </div>
      </div>
    </div>

    <div class="block-wrapper">
      <div class="front-content-wrapper">
        <h2>NEWS</h2>
        <span class="front-block-title"></span>

        <div class="news-archive-wrap">
          <?php
            $arg = array(
              'posts_per_page' => 3,
              'orderby' => 'date',
              'order' => 'DESC',
              'category_name' => 'news'
            );
            $posts = get_posts( $arg );
            if( $posts ):
          ?>

          <ul>
            <?php
                foreach ( $posts as $post ) :
                  setup_postdata( $post );
            ?>

            <li>
              <?php
                moire_post_thumbnail()
              ?>

              <div class="entry-header">
                <div class="archive-content-inner-wrap">
                  <div class="archive-content-desc">
                    <?php
                      moire_posted_date()
                    ?>
                  </div>

                  <?php
                    the_title( '<h3 class="archive-item-title">', '</h3>' );
                  ?>
                </div>
              </div>

              <a
                href="<?php echo esc_url(get_permalink()) ?>"
                rel="bookmark"
              >
              </a>
            </li>

            <?php endforeach; ?>
          </ul>

          <?php
            endif;
            wp_reset_postdata();
          ?>
        </div>

        <div class="news-archive-link">
          <a href="/category/news/" class="moire-button">NEWS一覧</a>
        </div>
      </div>
    </div>

    <div class="between_content">
      <div class="between_content_effect">
      </div>
    </div>

    <div class="block-wrapper">
      <div class="front-content-wrapper">
        <div class="project-content_title">
          <h2>PROJECT</h2>
          <span class="front-block-title"></span>
        </div>

        <div class="project-content-column-wrap">
          <div class="project-content-column">
            <h3>
              Webメディア・ノンマネ
            </h3>

            <div class="project-content-column-logo">
              <img
                data-src="<?php echo get_stylesheet_directory_uri(); ?>/images/NonMoney.png"
                class="project-logo lazyload"
              >
            </div>

            <div class="project-content-column-content">
              社会貢献に関心のない方に興味を持ってもらう機会をつくる
            </div>

            <div class="project-content-column-button">
              <a href='https://non-mone.com' target="_blank">
                Webメディア・ノンマネへ
              </a>
            </div>
          </div>
        </div>

        <div class="project-content-column-wrap">
          <div class="project-content-column">
            <h3>
              ノンマネ企画部
            </h3>

            <div class="project-content-column-logo">
              <img
                data-src="<?php echo get_stylesheet_directory_uri(); ?>/images/nonmoney_planning.png"
                class="project-img lazyload"
              >
            </div>

            <div class="project-content-column-content">
              ノンマネを広め、社会貢献を身近に
            </div>

            <div class="project-content-column-button">
              <a href='https://www.facebook.com/pg/moire12/events/' target="_blank">
                ノンマネ企画部イベント一覧へ
              </a>
            </div>
          </div>
        </div>

        <div class="project-content-column-wrap project-content-column-wrap__weekend">
          <div class="project-content-column">
            <h3>
              週末キャラバン
            </h3>

            <div class="project-content-column-logo">
              <img
                data-src="<?php echo get_stylesheet_directory_uri(); ?>/images/weekend.png"
                class="project-img lazyload"
              >
            </div>

            <div class="project-content-column-content">
              若者と週末の社会貢献活動を繋ぐプロジェクト
            </div>

            <div class="project-content-column-button">
              <a href='https://www.facebook.com/pg/moire12/events/' target="_blank">
                週末キャラバン一覧へ
              </a>
            </div>
          </div>
        </div>

        <div class="news-archive-link">
          <a href="/project/" class="moire-button">プロジェクトをより詳しく</a>
        </div>

      </div>
    </div>
  </div>

<?php
get_footer();
