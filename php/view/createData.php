<!DOCTYPE html>
<html lang="ja">

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>新規作成</title>
		<?php include(__DIR__ . '/../loadfile/stylesheetLink.html');?>
	</head>

	<body>
		<?php include(__DIR__ . '/../loadfile/header.php');?>
		<?php include(__DIR__ . '/../loadfile/sidebar.php');?>
		<main class="mainBody">
			<form action="controller.php" method="post">
				<div>
					<span>種類：</span>
					<input type="radio" name="valiation" id="book" value="book" checked>
					<label for="book">本・漫画関係</label>
					<input type="radio" name="valiation" id="cd_blu-lay" value="cd_blu-lay">
					<label for="cd_blu-lay">CD・Blu-lay一覧へ</label>
					<input type="radio" name="valiation" id="game" value="game">
					<label for="game">ゲーム関係</label>
				</div>
				<div>
					<label for="name">登録名称：</label>
					<input type="text" id="name" name="name" value="" placeholder="名前">
				</div>
				<div>
					<label for="name">購入日：</label>
					<input type="datetime-local" id="buy_date" name="buy_date" value="">
				</div>
				<div>
					<label for="price">金額：</label>
					<input type="number" id="price" name="price" value="">
				</div>
				<button type="submit">登録</button>
				<button type="reset">入力クリア</button>
			</form>
		</main>
		<?php include(__DIR__ . '/../loadfile/javascriptLink.html');?>
	</body>

</html>