<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>ろくまる農園</title>
</head>
<body>

<?php

$gakunen = $_POST['gakunen'];

switch($gakunen)
{
    case'1':
            $kousha = 'あなたの校舎が南校舎です。';
            $bukatsu = '部活動にはスポーツ系と文化系があります。';
            $mokuhyou = 'まずは学校に慣れましょう。';
            break;
    
    case'2':
            $kousha = 'あなたの校舎が西校舎です。';
            $bukatsu = '学園祭目指して全力で取り組みましょう。';
            $mokuhyou = '今しかできないことを見つけよう。';
            break;            

    case'3':
            $kousha = 'あなたの校舎が東校舎です。';
            $bukatsu = '受験に就職に忙しくなります。後輩へ譲っていきましょう';
            $mokuhyou = '将来への道を作ろう。';
            break;            

    default:
            $kousha = 'あなたの校舎は3年生と同じです。';
            $bukatsu = '部活動はありません。';
            $mokuhyou = '早く卒業しましょう。';
            break;            
}

print'校舎 '.$kousha.'<br/>';
print'部活 '.$bukatsu.'<br/>';
print'目標 '.$mokuhyou.'<br/>';

?>

</body>
</html>