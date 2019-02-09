<?php get_header('front'); ?>

  <div class='front-page-wrapper'>
    <div class='front-page-head-wrapper'>
      <div class="content-effect-wrapper">
        <div class="content-effect">
          <div class='main-content'>
            <div class="moire-title-wrap">
              <span class='moire-title'>
                moire
              </span>

              <span class="moire-sub-title">
                社会貢献活動に繋ぐWebメディア
              </span>
            </div>
          </div>
        </div>
      </div>

      <div class="right-top-column">
        <div class="right-top-column-content">
          <span>
            <div class='right-top-column-content-title'>
            moire(モアレ)
            </div>
            <p>
              私たちmoireのMissionは、<span class='font-bold'>社会貢献活動の促進</span>です。
            </p>
            <p>
              このMission達成のために私たちは、お金を目的にしない活動 <span class='font-bold'>「No Money Action」</span> をHPで発信していきます。
            </p>

            <p>
              No Money Action の中で社会貢献活動についても発信することで、社会貢献活動に関心のない人を社会貢献活動に繋いでいきます。
            </p>
          </span>
        </div>

        <div class="mission-button-wrap">
          <div class="mission-button">
            <a href="/about-us">moireの基本理念</a>
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
          <a href="/category/news/">NEWS一覧</a>
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
            <div class="project-content-column-logo">
              <img
                data-src="<?php echo get_stylesheet_directory_uri(); ?>/images/NonMoney.png"
                class="project-logo lazyload"
              >
            </div>

            <h3>
              ノンマネ
            </h3>

            <div class="project-content-column-content">
            「お金ではない価値を持ち、それでいてただの娯楽ではない活動」・ノンマネを発信し、もっと多くの人を社会貢献活動に繋げていきます。
            </div>

            <div class="project-content-column-button">
              <a href='https://non-mone.com' target="_blank">
                ノンマネへ
              </a>
            </div>
          </div>
        </div>

        <div class="news-archive-link">
          <a href="/project/">プロジェクト一覧</a>
        </div>

      </div>
    </div>
  </div>

<?php
get_footer();
