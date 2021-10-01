<?php
$siteRoot = './';
$metaTitle = 'ariku sugisawa';
?>
<!DOCTYPE html>
<html lang="ja" class="no-js">
<?php include($siteRoot . 'common/inc/head.php'); ?>

<body>
	<div id="js-loader" class="loader"></div>

	<div class="l-wrapper">

		<?php include($siteRoot . 'common/inc/header.php'); ?>

		<main class="main">
			<div class="mv">
				<figure>
					<picture>
						<source media="(min-width: 768px)" srcset="<?php echo $siteRoot; ?>img/main_pc.png" />
						<img src="<?php echo $siteRoot; ?>img/main_sp.png" alt="" />
					</picture>
				</figure>
			</div>

			<div class="c-container">
				<section>
					<h2><span class="font-marydale">Works</span> / 制作実績</h2>
					<div class="flexBox-3col">
						<div class="flexItem">
							<img src="pic04.jpg" />
							<p>Flexbox</p>
						</div>

						<div class="flexItem">
							<img src="pic05.jpg" />
							<p>Flexbox</p>
						</div>

						<div class="flexItem">
							<img src="pic06.jpg" />
							<p>Flexbox</p>
						</div>

						<div class="flexItem">
							<img src="pic07.jpg" />
							<p>Flexbox</p>
						</div>

						<div class="flexItem">
							<img src="pic08.jpg" />
							<p>Flexbox</p>
						</div>

						<div class="flexItem">
							<img src="pic09.jpg" />
							<p>Flexbox</p>
						</div>
					</div>
					<p class="txt-right"><a href="<?php echo $siteRoot; ?>works/">more</a></p>
				</section>

				<section>
					<h2><span class="font-marydale">Concept</span> / 構想・方針</h2>
					<div>
						<h3>Communication</h3>
						<p class="txt-01">
							テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
						</p>
					</div>

					<div>
						<h3>Connection</h3>
						<p class="txt-01">
							テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
						</p>
					</div>
				</section>

				<section>
					<div>
						<p class="clr-white">カラーテスト</p>
						<p class="clr-black">カラーテスト</p>
						<p class="clr-l-gray">カラーテスト</p>
						<p class="clr-gray01">カラーテスト</p>
						<p class="clr-gray02">カラーテスト</p>
						<p class="clr-gray03">カラーテスト</p>
						<p class="clr-gray04">カラーテスト</p>
					</div>
				</section>

			</div>
		</main>

		<?php include($siteRoot . 'common/inc/footer.php'); ?>
	</div>

	<?php include($siteRoot . 'common/inc/script.php'); ?>
</body>

</html>
