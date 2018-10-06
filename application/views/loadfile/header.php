<header class="header">
	<h1 style="float: left;">
		<button type="button" id="sideBarSwitch" class="sideBarSwitch">				
			<i class="fas fa-bars"></i>
		</button>
		<a href="./DashBoard.php">おうちの管理人</a>
	</h1>
	<div style="float: right;">
		<button type="button">ログインID：
			<?php 
			if(isset($_POST['loginId']) && strlen($_POST['loginId']) > 0){
			echo $_POST['loginId'];
			}
			;?>
		</button>
	</div>
</header>