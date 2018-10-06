<!DOCTYPE html>
<html lang="ja">

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>DashBoard</title>
		<?php include(__DIR__ . '/../../loadfile/stylesheetLink.html');?>
	</head>

	<body>
		<?php include(__DIR__ . '/../../loadfile/header.php');?>
		<?php include(__DIR__ . '/../../loadfile/sidebar.php');?>
		<main class="mainBody">
			<div class="book">
				<h3>本・漫画関係</h3>
				<button type="button">
					<a href="./bookList.php">本・漫画一覧へ</a>
				</button>
				<div>
					<p>新刊発売一覧</p>
					<ul>
						<li></li>
					</ul>
				</div>
			</div>
			<div class="dvd_blu-lay">
				<h3>CD・Blu-lay関係</h3>
				<button type="button">
					<a href="./dvdBlulayList.php">CD・Blu-lay一覧へ</a>
				</button>
				<div>
					<p>新作発売一覧</p>
					<ul>
						<li></li>
					</ul>
				</div>
			</div>
			<div class="game">
				<h3>ゲーム関係</h3>
				<button type="button">
					<a href="./gameList.php">ゲーム一覧へ</a>
				</button>
				<div>
					<p>続編発売一覧</p>
					<ul>
						<li></li>
					</ul>
				</div>
			</div>
		</main>
		<?php include(__DIR__ . '/../../loadfile/javascriptLink.html');?>
		<script src="../../assets/js/dashBoard/main.js"></script>
	</body>

</html>