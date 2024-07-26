<!--https://zenn.dev/03parcy10/articles/c14dc598f6f30b-->
<div class="container">
	<div class="content">
		<h2 class="content__h2">名前</h2>
		<input type="text" name="your_name" class="content__input" value="<?php echo $_SESSION["your_name"] ? $_SESSION["your_name"] : null  ?>">
	</div>
	<div class="content">
		<h2 class="content__h2">メールアドレス</h2>
		<input type="email" name="email" class="content__input" value="<?php echo $_SESSION["email"] ? $_SESSION["email"] : null  ?>">
	</div>
	<div class="content">
		<h2 class="content__h2">電話番号</h2>
		<input type="tel" name="tel" class="content__input" value="<?php echo $_SESSION["tel"] ? $_SESSION["tel"] : null  ?>">
	</div>
	<button type="submit" name="submit" class="submit">送信</button>
</div>