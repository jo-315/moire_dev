<?php
// 全ページ共通フッター
?>

	<div class="between_content">
		<div class="between_content_effect">
		</div>
	</div>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container container-footer">
			<div class="footer-inner">
				<div class="footer_navigation">
					<div class="footer_nav_column">
						<span class="footer_nav_column_title">NEWS</span>
						<ul>
							<li>
								<a href="/category/news/">
									NEWS一覧
								</a>
							</li>
						</ul>
						<span class="footer_nav_column_title">ABOUT</span>
						<ul>
							<li>
								<a href="/about/">
									私たちについて
								</a>
							</li>
							<li>
								<a href="/member/">
									メンバー
								</a>
							</li>
						</ul>
					</div>
					<div class="footer_nav_column">
						<span class="footer_nav_column_title">PROJECT</span>
						<ul>
							<li>
								<a href="https://non-mone.com/" target="_blank">
									ノンマネ
								</a>
							</li>
						</ul>
					</div>
					<div class="footer_nav_column">
						<p class="footer_nav_column_title">
						  <a href="/recruit/">メンバー募集</a>
						</p>
						<p class="footer_nav_column_title">
						  <a href="/contact/">お問い合わせ</a>
						</p>
					</div>
				</div>

				<div class="footer-moire-wrap">
					<div class="footer-moire-img">
						<img
							data-src="<?php echo get_stylesheet_directory_uri(); ?>/images/moire_logo.svg"
							class="footer-moire-logo lazyload"
						>
					</div>

					<div class="footer-moire-desc">
						<span class="footer-moire-desc-header">
							moire（モアレ）</br>
							社会貢献活が身近にある社会をつくる団体</br>
						</span>
						<div class="footer_moire_sns">
							<a
								href="https://twitter.com/moire45522311?lang=ja"
								target="_blank"
								class="sns-social-wrap"
							>
								<img
									data-src="https://moire.xsrv.jp/wp-content/uploads/Twitter_Social_Icon_Rounded_Square_Color.png"
									alt="Twitter"
									class="sns-social-icon lazyload"
								/>
							</a>

							<a
								href="https://www.facebook.com/moire12"
								target="_blank"
								class="sns-social-wrap"
							>
								<img
									data-src="https://moire.xsrv.jp/wp-content/uploads/f-ogo_RGB_HEX-100.png"
									alt="Facebook"
									class="sns-social-icon lazyload"
								/>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="site-info">
			moire 2019
		</div>
	</footer>

<?php wp_footer(); ?>
</body>
</html>
