<?php
	
	$question_2 = $_POST['question_2']; //ラジオボタンの内容を受け取る
	$answer_2 = $_POST['answer_2'];   //hiddenで送られた正解を受け取る
	$count = $_POST['count'];

	//結果の判定
	if($question_2 == $answer_2){
		$result = "正解！";
		$count++;
	}else{
		$result = "不正解･･･";
	}

	$title = '問題、✖✖✖◇はどれ！？';
   
   $question_3 = array(); //この変数は配列ですよという宣言
   $question_3 = array('✖✖✖◇','✖✖✖〇','△◇△〇','〇△△◇'); //4択の選択肢を設定
   
   $answer_3 = $question_3[0]; //正解の問題を設定

   shuffle($question_3); //配列の中身をシャッフル
 
?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>クイズ３</title>
	</head>
	<body>
	
	<h2>クイズの結果</h2>
	<?php echo $result ?>
	
	
	<h2><?php echo $title ?></h2>
   <form method="POST" action="test_take4.php">
      <?php foreach($question_3 as $value){ ?>
      <input type="radio" name="question_3" value="<?php echo $value; ?>" /> <?php echo $value; ?><br>
      <?php } ?>
	  <input type="hidden" name="answer_3" value="<?php echo $answer_3 ?>">
	  <input type="hidden" name="count" value="<?php echo $count ?>">
      <input type="submit" value="回答する">
   </form>

	</body>
</html>