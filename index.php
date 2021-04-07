<?php

echo ('こちら');
echo('です');

// 改行
echo('<br>');
// 

$test = 123;
echo $test;
$test = ' 文字 ';
echo $test;
// 型調べる
var_dump($test);

echo('<br>');
$ott = 123;
$ffs = 456;
$sum = $ott + $ffs;
$union = $ott . $ffs;
var_dump($sum);
var_dump($union);

echo('<br>');

const test = 'テスト１';
const test = 'テストGIGAMAX';
echo test;

echo('<br>');

$array = [1,2,3];

echo $array[1];
echo '<pre>';
var_dump($array);
echo '</pre>';

$d_array = [
  ['メロン','スイカ','カボチャ'],
  ['玉ねぎ','長ネギ']
];
echo $d_array[1];
echo $d_array[1][1];

echo('<br>');
echo('<br>');

$array_member = [
  'name' => '久保',
  'age' => 19,
  'occupation' => 'サッカー選手'
];

echo $array_member['occupation'];

echo('<br>');
echo('<br>');

$soccer_member = [
  '久保' => [
    'age' => 19,
    'position' => 'OMF'
  ],
  '田中碧' => [
    'age' => 22,
    'position' => 'DMF'
  ]
];

echo $soccer_member['田中碧']['age'];

echo('<br>');
echo('<br>');

$soccer_team = [
  'ヘタフェ' =>[
    '久保' => [
      'age' => 19,
      'position' => 'OMF'
    ],
  ],
  '川崎フロンターレ' => [
    '田中碧' => [
      'age' => 22,
      'position' => 'DMF'
    ]
  ]
];

echo $soccer_team['ヘタフェ']['久保']['position'];

echo('<br>');
echo('<br>');

// if (条件){
//   条件が真なら処理
// }else if{
// 偽なら処理
// }else{
// 全部あてはまなければ処理
// }

// == 一致
// === 型も一致 できるだけこちらを使う

$sake = 'delicious';
$shark = 'bad';
if ($sake !== 'bad'){
  echo '酒は'. $sake . '!';
}

echo('<br>');
echo('<br>');

// データが空かどうか
// isset empty is_null

$heart = '';
if (empty($heart)){
  echo '心に穴が空いた';
} else if (!is_null($heart)){
  echo '別に空いてない';
}



echo('<br>');
echo('<br>');

// AND or

$rice = 'delicious';
$pudding = 'sweat';

if ($rice === 'delicious' || $pudding === 'sweat'){
  echo '美味しい';
} else if ($rice !== 'delicious' && $pudding !== 'sweat') {
  echo '死ぬ まずい';
}

echo('<br>');
echo('<br>');
// 三項演算子
// 条件？真:偽

$math = 79;
$comment = $math > 80 ? 'good' : 'go to bed';
echo $comment;

echo('<br>');
echo('<br>');

$soccer_player = [
  'name' => 'take',
  'age' => 19,
  'position' => 'OMF',
  'nation' => 'Japan'
];
foreach($soccer_player as $player){
  echo $player . ' ' ;
}
echo('<br>');
foreach($soccer_player as $key => $value){
  echo $key . ':' . $value . ' ';
}



echo('<br>');
echo('<br>');
$soccer_players = [
  '久保' => [
    'name' => 'take',
    'age' => 19,
    'position' => 'OMF',
    'nation' => 'Japan'
  ],
  'イブラヒモビッチ' => [
    'name' => 'Zlatan Ibrahimović',
    'age' => 39,
    'position' => 'FW',
    'nation' => 'Konungariket Sverige'
  ]
];
foreach($soccer_players as $player){
  foreach($player as $key => $value){
    echo $key . ':' . $value . ' ';
  }
  echo('<br>');
}

echo('<br>');

// 繰り返す数が決まっている
for ($i = 0 ; $i < 10; $i++){
  echo $i;
}
echo('<br>');
// 繰り返す数が決まっていない
$i = 0;
while($i < 10){
  echo $i;
  $i++;
}
echo('<br>');
echo('<br>');
$data = 1;
switch($data){
  case 1:
    echo '1です';
  case 2:
    echo '2です';
  case 3:
    echo '3です';
  default:
    echo '1~3ではありません';
}

echo('<br>');
$data = 3;
switch($data){
  case 1:
    echo '1です';
  case 2:
    echo '2です';
    break;
  case 3:
    echo '3です';
    break;
  default:
    echo '1~3ではありません';
}
// *型を調べない(==)

echo('<br>');
echo('<br>');

function docomo(){
  $ahomo ='docomo';
  echo $ahomo;
}

docomo();

function actor($human){
  $actor = '俳優:' . $human;
  return $actor;
}

$makino = "小栗旬";
echo actor($makino);

echo('<br>');
echo('<br>');
$text  = 'abs';
$text2  = 'アイウエオ';
echo strlen($text).' ';
echo strlen($text2).' ';
echo mb_strlen($text2).' ';

$str = '文字列の置換をします';
echo str_replace('置換','語句変換',$str);

echo('<br>');
echo('<br>');
// 分割 //implodeで合体も
$str2 = '指定文字列で,分割';

echo '<pre>';
var_dump(explode(',',$str2));
echo '</pre>';

echo('<br>');
// 正規表現
$str3 = '変な文字列ですよこれは。どうでしょうか。';

echo preg_match('/文字列/', $str3).'   ';
echo preg_match_all('/。/', $str3);

echo('<br>');
echo substr('abx', 2);
echo mb_substr('あいう', 1);

echo('<br>');
$array = [];
array_push($array,'ぶどう','なし'); // 追加
// 読み込み
// require __DIR__ '/絶対パス'
// exit;
// echo $unchi;
// phpinfo()


?>