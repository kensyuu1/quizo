  
<?php
	$title = '問題、カレーはどれ！？';
   
   $question_1 = array(); //この変数は配列ですよという宣言
   $question_1 = array('1','2','3'); //4択の選択肢を設定
   $count = 1;
   
   $answer_1 = $question_1[0]; //正解の問題を設定 

   shuffle($question_1); //配列の中身をシャッフル
 
?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>クイズ２</title>
        <link rel="stylesheet" href="css/Findingmistakes.css">


        
	</head>
	<body>
    
    <header class="header">
        <h1>クイズ

    </header>

    <main>

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

	
	<div  style="position:absolute; left:600px; top:600px">
	
	<h2><?php echo $title ?></h2>
   <form method="POST" action="FindingmistakesCOPY2.php">
      <?php foreach($question_1 as $value){ ?>

<div class="ra">

      <input type="radio" id ="<?php echo $value ?>" name="question_1" class="radiob" value="<?php echo $value; ?>" /> <label for="<?php echo $value ?>"> <?php echo "選択肢"; echo $value; ?> </label> <br><br>
      <?php } ?>

      </div>

	  <input type="hidden" name="answer_1" class="radio" value="<?php echo $answer_1 ?>">
	  <input type="hidden" name="count" class="radio" value="<?php echo $count ?>">
      <input type="submit" value="回答する">
   </form>
      </div>

      </main>

      <footer class="footer">
        <p>フッターa</p>
    </footer>
	</body>
</html>