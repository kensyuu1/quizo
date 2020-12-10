<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>クイズ結果出力（仮）</title>
</head>
<body>
    
<?php
$seikaisuu = rand(0, 10);

echo "あなたの正解数は「 $seikaisuu 」です。<br />";



if ($seikaisuu < 3){
    echo "もう少し頑張りましょう";
}elseif ($seikaisuu < 9){
    echo "まずまずの成果です";
}elseif ($seikaisuu < 11){
    echo "すばらしい";
}


?>

</body>
</html>