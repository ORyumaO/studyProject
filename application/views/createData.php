<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>新規作成</title>
		<?php include(__DIR__ . '/../../loadfile/stylesheetLink.html');?>
	</head>
	<body>
		<?php include(__DIR__ . '/../../loadfile/header.php');?>
		<?php include(__DIR__ . '/../../loadfile/sidebar.php');?>
		<main class="mainBody">
			<form action="../controller/controller.php" method="post">
				<div class="valiation_field">
					<span>種類：</span>
					<input type="radio" name="valiation" id="book" value="book" class="book" checked>
					<label for="book">本・漫画関係</label>
					<input type="radio" name="valiation" id="cd_blu-lay" value="cd_blu-lay" class="cd_blu-lay">
					<label for="cd_blu-lay">CD・Blu-lay一覧へ</label>
					<input type="radio" name="valiation" id="game" value="game" class="game">
					<label for="game">ゲーム関係</label>
				</div>
				<div class="name_field">
					<label for="name">登録名称：</label>
					<input type="text" id="name" name="name" value="" placeholder="名前">
				</div>
				<div class="buy_date_field">
					<label for="buy_date">購入日：</label>
					<input type="datetime-local" id="buy_date" name="buy_date" value="">
				</div>
				<div class="volume_field">
				</div>
				<div class="price_field">
					<label for="price">金額：</label>
					<input type="number" id="price" name="price" value="">
				</div>
				<button type="submit">登録</button>
				<button type="reset">入力クリア</button>
			</form>
		</main>
		<?php include(__DIR__ . '/../../loadfile/javascriptLink.html');?>
	</body>

</html>