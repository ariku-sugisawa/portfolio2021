<?php
$siteRoot = '../';
$metaTitle = 'Works ｜ ariku sugisawa';
?>
<!DOCTYPE html>
<html lang="ja" class="no-js">
<?php include($siteRoot . 'common/inc/head.php'); ?>

<body>
	<div id="js-loader" class="loader"></div>

	<div class="l-wrapper">

		<?php include($siteRoot . 'common/inc/header.php'); ?>

		<main class="main">
			<div class="c-container">
				<p>注釈コメント</p>

				<section>
					<h2><span class="font-marydale">Works</span> / 制作実績</h2>

					<!-- pages -->
					<div class="flexBox-2col">
						<div class="flexItem">
							<div>
								<ul class="works_list">
									<li class="works_item">
										<div class="works_image">
											<div class="works_modal_open" data-modal-open="modal-1">
												<p>モーダル①</p>
												<div class="works_image_mask">
													<div class="mask_text">クリックで拡大</div>
												</div>
											</div>
											<div class="works_modal_wrapper" data-modal="modal-1">
												<div class="works_modal_mask"></div>
												<div class="works_modal_window">
													<div class="works_modal_content">
														<h1>モーダル①</h1>
														<p>モーダル①の文章です！</p>
													</div>
													<div class="works_modal_close">✖</div>
												</div>
											</div>
										</div>
									</li>
									<li class="works_item">
										<div class="works_image">
											<div class="works_modal_open" data-modal-open="modal-2">
												<p>モーダル②</p>
												<div class="works_image_mask">
													<div class="mask_text">クリックで拡大</div>
												</div>
											</div>
											<div class="works_modal_wrapper" data-modal="modal-2">
												<div class="works_modal_mask"></div>
												<div class="works_modal_window">
													<div class="works_modal_content">
														<h1>モーダル②</h1>
														<p>モーダル②の文章です！</p>
													</div>
													<div class="works_modal_close">✖</div>
												</div>
											</div>
										</div>
									</li>
									<li class="works_item">
										<div class="works_image">
											<div class="works_modal_open" data-modal-open="modal-3">
												<p>モーダル③</p>
												<div class="works_image_mask">
													<div class="mask_text">クリックで拡大</div>
												</div>
											</div>
											<div class="works_modal_wrapper" data-modal="modal-3">
												<div class="works_modal_mask"></div>
												<div class="works_modal_window">
													<div class="works_modal_content">
														<h1>モーダル③</h1>
														<p>モーダル③の文章です！</p>
													</div>
													<div class="works_modal_close">✖</div>
												</div>
											</div>
										</div>
							</div>
						<div>

						</div>
					</div>

					<div class="flexItem">
						<div>
							<img src="<?php echo $siteRoot; ?>img/main_sp.png" alt="" />
						</div>
						<div>
							<h3>タイトル</h3>
							<p>製作期間</p>
							<p>担当セクション</p>
							<p>
								コメント：テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
							</p>
						</div>
					</div>

					<div class="flexItem">
						<div>
							<img src="<?php echo $siteRoot; ?>img/main_sp.png" alt="" />
						</div>
						<div>
							<h3>タイトル</h3>
							<p>製作期間</p>
							<p>担当セクション</p>
							<p>
								コメント：テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
							</p>
						</div>
					</div>

			</div>

			<!-- banner -->
			<div class="flexBox-3col">
				<div class="flexItem">
					<img src="<?php echo $siteRoot; ?>works/img/sample-banner_01.jpg" alt="">
				</div>
				<div class="flexItem">
					<img src="<?php echo $siteRoot; ?>works/img/sample-banner_02.jpg" alt="">
				</div>
				<div class="flexItem">
					<img src="<?php echo $siteRoot; ?>works/img/sample-banner_03.jpg" alt="">
				</div>
				<div class="flexItem">
					<img src="<?php echo $siteRoot; ?>works/img/sample-banner_04.jpg" alt="">
				</div>
				<div class="flexItem">
					<img src="<?php echo $siteRoot; ?>works/img/sample-banner_05.jpg" alt="">
				</div>
				<div class="flexItem">
					<img src="<?php echo $siteRoot; ?>works/img/sample-banner_06.jpg" alt="">
				</div>
				<div class="flexItem">
					<img src="<?php echo $siteRoot; ?>works/img/sample-banner_07.jpg" alt="">
				</div>
				<div class="flexItem">
					<img src="<?php echo $siteRoot; ?>works/img/sample-banner_08.jpg" alt="">
				</div>
				<div class="flexItem">
					<img src="<?php echo $siteRoot; ?>works/img/sample-banner_09.jpg" alt="">
				</div>
				<div class="flexItem">
					<img src="<?php echo $siteRoot; ?>works/img/sample-banner_10.jpg" alt="">
				</div>
			</div>
			</section>
	</div>
	</main>

	<?php include($siteRoot . 'common/inc/footer.php'); ?>
	</div>

	<?php include($siteRoot . 'common/inc/script.php'); ?>
</body>

</html>
