<!DOCTYPE html>
<html lang="zh-TW">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>康程翔簡介</title>
	<style type="text/css">
		* { font-family:"標楷體"; margin-left:auto; margin-right:auto;}
		h1 {color:blue; font-size:60px;}
		h2 {color:#33ff33; font-size:40px;}
</style>

<script>
	function change1() {
		document.getElementById("pic").src = "mountain.jpg";
		document.getElementById("h2text").innerText = "靜宜資管";
}

function change2() {
		document.getElementById("pic").src = "cliff.jpg";
		document.getElementById("h2text").innerText = "Cheng-Xiang Kang";
}
</script>
</head>
<body>
	<table width="70%">
		<tr>
			<td>
				<img src="cliff.jpg"width="110%"id="pic"
	onmouseover="change1()" onmouseout="change2()"></img>
			</td>
			<td>
				<h1>康程翔</h1>
				<h2 id="h2text">Cheng-Xiang Kang<	/h2>
			</td>
		</tr>
	</table>
	<table width="70%"border="1">
		<tr>
			<td>
			靜宜網頁：<a href="https://www.pu.edu.tw"> https://www.pu.edu.tw/</a><br>
			FB：<a href="https://www.facebook.com/chengxiang.kang"target="_blank">https://www.facebook.com/chengxiang.kang</a><br>
			Tel:<a href="tel:04-26328001,18110"> 04-26328001#18110</a><br>
			E-Mail:<a href="mailto:a0985585249@gmail.com">a0985585249@gmail.com</a><br>
		</td>

		<td>
			大象席地而坐電影配樂<br>
			<audio controls>
				<source src="elephant.mp3" type="audio/mP3">
			</audio><br>
		</td>
		<td>
			不要去臺灣<br>
			<iframe src="https://www.youtube.com/embed/pW88QFpHXa8" allowfullscreen></iframe>
		</td>
		<td>
			聊天機器人:<a href="https://bot.dialogflow.com/5486be38-f5dc-4b61-a3c2-5ad038fd0ff6"> https://bot.dialogflow.com/5486be38-f5dc-4b61-a3c2-5ad038fd0ff6
			</td>

	</tr>
	</table>
	<?php echo date("Y-m-d") ?>
</body>
</html>