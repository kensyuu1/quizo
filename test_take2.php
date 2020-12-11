<?php
	
	$question = $_POST['question']; //ラジオボタンの内容を受け取る
	$answer = $_POST['answer'];   //hiddenで送られた正解を受け取る

	$count = 0;
	
	//結果の判定
	if($question == $answer){
		$result = "正解！";
		$count++;
	}else{
		$result = "不正解･･･";
	}

	$title = '問題、〇✖△◇はどれ！？';
   
   $question_2 = array(); //この変数は配列ですよという宣言
   $question_2 = array('〇✖△◇','✖✖✖✖','△〇△〇','◇△△◇'); //4択の選択肢を設定
   
   $answer_2 = $question_2[0]; //正解の問題を設定

   shuffle($question_2); //配列の中身をシャッフル
 
?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>クイズ２</title>
	</head>
	<body>
	
	<h2>クイズの結果</h2>
	<?php echo $result ?>
	
	
	<h2><?php echo $title ?></h2>
   <form method="POST" action="test_take3.php">
      <?php foreach($question_2 as $value){ ?>
      <input type="radio" name="question_2" value="<?php echo $value; ?>" /> <?php echo $value; ?><br>
      <?php } ?>
	  <input type="hidden" name="answer_2" value="<?php echo $answer_2 ?>">
	  <input type="hidden" name="count" value="<?php echo $count ?>">
      <input type="submit" value="回答する">
   </form>

	</body>
</html>