<?php
get_header('member');
?>

<?php
get_header();
?>

<div class="page_content_block">
  <div class="member_content_wrap">

  <?php
    $positions = array('代表', '運営メンバー', 'ライター');

    foreach($positions as $position) {
      $meta_query_args = array(
      'relation' => 'AND',
        array(
          'key'     => 'position',
          'value'   => $position,
          'compare' => '='
        )
      );
      $users = get_users( array(
        'meta_query' => $meta_query_args,
        'exclude' => '',
        'orderby'  => 'meta_value',
        'meta_key' => 'position',
      ));

      foreach($users as $user) {
          $userId = $user->ID;
          $name = get_the_author_meta('user_nicename', $userId);
          $description = get_the_author_meta( 'user_description', $userId );
  ?>

          <div class="member_content">
            <div class="profile_text_title">
              <span><?php echo the_author_meta( 'position', $userId ); ?>　<?php echo the_author_meta( 'display_name', $userId ); ?></span>
            </div>

            <div class="member_img">
              <img
              src="https://moire.xsrv.jp/wp-content/uploads/profile/profile_<?php echo $name; ?>.png"
                class="profile_img"
              />
            </div>

            <div class="profile_text">
              <?php if ($description !== '') { ?>
                <div class="profile_text_content">
                  <?php echo $description; ?>
                </div>
              <?php }	?>

              <div class="profile_text_content-button-wrap">
                <?php $twitter = get_the_author_meta( 'twitter', $userId ); ?>
                <?php if ($twitter !== '') { ?>
                  <a
                    href=<?php echo $twitter; ?>
                    target="_blank"
                    class="sns-social-wrap profile-sns-social-wrap"
                  >
                    <img
                      src="https://moire.xsrv.jp/wp-content/uploads/Twitter_Social_Icon_Rounded_Square_Color.png"
                      alt="Twitter"
                      class="profile-sns-social-icon"
                    />
                  </a>
                <?php } ?>

                <?php $instagram = get_the_author_meta( 'instagram', $userId ); ?>
                <?php if ($instagram !== '') { ?>
                  <a
                    href="<?php echo $instagram; ?>"
                    target="_blank"
                    class="sns-social-wrap profile-sns-social-wrap "
                  >
                    <img
                      src="https://moire.xsrv.jp/wp-content/uploads/IG_Glyph_Fill.psd-8.png"
                      alt="instagram"
                      class="profile-sns-social-icon"
                    />
                  </a>
                <?php } ?>

                <?php $facebook = get_the_author_meta( 'facebook', $userId ); ?>
                <?php if ($facebook !== '') { ?>
                  <a
                    href="<?php echo $facebook; ?>"
                    target="_blank"
                    class="sns-social-wrap profile-sns-social-wrap "
                  >
                    <img
                      src="https://moire.xsrv.jp/wp-content/uploads/f-ogo_RGB_HEX-100.png"
                      alt="Facebook"
                      class="profile-sns-social-icon"
                    />
                  </a>
                <?php } ?>
                </a>
              </div>
            </div>
          </div>

 <?php
    };
   };
  ?>

  </div>
</div>

<?php
get_footer();
