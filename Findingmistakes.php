  
<?php
	
	$question_3 = $_POST['question_3']; //ラジオボタンの内容を受け取る
	$answer_3 = $_POST['answer_3'];   //hiddenで送られた正解を受け取る
	$count = $_POST['count']; 

	//結果の判定
	if($question_3 == $answer_3){
		$result = "正解！";
		$count++;
	}else{
		$result = "不正解･･･";
	}

	$title = '問題、カレーはどれ！？';
   
   $question_4 = array(); //この変数は配列ですよという宣言
   $question_4 = array('1','2','3'); //4択の選択肢を設定
   
   $answer_4 = $question_4[0]; //正解の問題を設定

   shuffle($question_4); //配列の中身をシャッフル
 
?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>クイズ２</title>
	</head>
	<body>

    <div  style="position:absolute; left:100px; top:200px"><!--画像の位置-->
        <img src="img/カレー.png"><!--ここで画像を持ってくる-->
        <h1>1</h1><!--選択肢-->
    </div>

    <div  style="position:absolute; left:600px; top:200px"><!--画像の位置-->
        <img src="img/シチュー.png"><!--ここで画像を持ってくる-->
        <h1>2</h1><!--選択肢-->
    </div>

    <div  style="position:absolute; left:1100px; top:200px"><!--画像の位置-->
        <img src="img/キムチ鍋.png"><!--ここで画像を持ってくる-->
        <h1>3</h1><!--選択肢-->
    </div>

	<h2>クイズの結果</h2>
	<?php echo $result ?>
	<div  style="position:absolute; left:600px; top:600px">
	
	<h2><?php echo $title ?></h2>
   <form method="POST" action="answer.php">
      <?php foreach($question_4 as $value){ ?>
      <input type="radio" name="question_4" value="<?php echo $value; ?>" /> <?php echo $value; ?><br>
      <?php } ?>
	  <input type="hidden" name="answer_4" value="<?php echo $answer_4 ?>">
	  <input type="hidden" name="count" value="<?php echo $count ?>">
      <input type="submit" value="回答する">
   </form>
      </div>
	</body>
</html>