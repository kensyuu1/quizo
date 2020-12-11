<?php
	
	$question_4 = $_POST['question_4']; //ラジオボタンの内容を受け取る
	$answer_4 = $_POST['answer_4'];   //hiddenで送られた正解を受け取る
	$count = $_POST['count'];

	//結果の判定
	if($question_4 == $answer_4){
		$result = "正解！";
		$count++;
	}else{
		$result = "不正解･･･";
	}
 
?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>簡易クイズプログラム - 結果</title>
	</head>
	<body>
	
	<h2>クイズの結果</h2>
	<?php echo $result ?>

	<h2>あなたが当てた問題数は<?php echo $count ?>問です</h2>
	
	
	</body>
</html>