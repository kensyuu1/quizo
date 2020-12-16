<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ランダムメッセージ</title>
</head>
<body>

<h1>リザルト画面</h1>
    <button type="button" style="WIDTH: 170px; HEIGHT: 50px ;  position:absolute; top:600px; left:370px">
        <font size="2">違うジャンルでもう一度</font>
    </button>

    <button type="button" style="WIDTH: 170px; HEIGHT: 50px;	position:absolute; top:600px; left:560px">

        <font size="2">もう一度同じ問題</font>
    </button>

    <button type="button" style="WIDTH: 170px; HEIGHT: 50px;	position:absolute; top:600px; left:750px">

        <font size="2">終わる</font>
    </button>
    <div style=" WIDTH: 300px; HEIGHT: 50px;    padding: 0.5em 1em;
    margin: 2em 0;
    font-weight: bold;
    border: solid 3px #000000;
    position:absolute; top:150px; left:250px">
        <?php
$seikaisuu = rand(0, 10); //クイズの処理が完成したらここをクイズに正解した数に変更する

echo "あなたの正解数は";
echo "$seikaisuu";
echo "/10です";




?>
    </div>

    <div style=" WIDTH: 500px; HEIGHT: 50px;     padding: 0.5em 1em;
    margin: 2em 0;
    font-weight: bold;
    border: solid 3px #000000;
    position:absolute; top:250px; left:170px">
    <?php //終了後のメッセージや条件を変更する場合はここを変更する
        echo "おすすめ情報";
        if ($seikaisuu < 3){
            echo "　　　もう少し頑張りましょう";
        }elseif ($seikaisuu < 9){
            echo "　　　まずまずの成果です";
        }elseif ($seikaisuu < 11){
            echo "　　　すばらしい";
        }
        
        
        ?>
    </div>

    <div style="z-index: -2; WIDTH: 800px; HEIGHT: 500px;     padding: 0.5em 1em;
    margin: 2em 0;
    font-weight: bold;
    border: solid 3px #000000;
    position:absolute; top:120px; left:120px">

    </div>


</body>
</html>