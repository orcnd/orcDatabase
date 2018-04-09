<?php
$db=new orcDatabase('datafile.php',true,false);
$db->dropTable('testTable');
$db->createTable('testTable');

// sample text data
$data=array('do','we','really','need','this',
'or','just','use','sqllite','it','dies on','multiuser');
//adding some numbers to rows
foreach ($data as $d) {
    $row=(object)array('sy'=>rand(0,10),'txt'=>$d);
    $db->addRow('testTable',$row);
}

//       column,data to search, compare type 
$snc=$db->filter('txt','s','like')->sort('sy','desc')->getResult('testTable');
echo 'contains "s"',PHP_EOL;
foreach ($snc as $s) {
    echo $s->sy,' - ',$s->txt,PHP_EOL;
}
// like searches string into anywhere column 
// startwith searches string in the start of column data
// emdwith searches string in the end of column data
$snc=$db->filter('txt','se','like')->sort('sy','asc')->getResult('testTable');
echo PHP_EOL,'contains "se"',PHP_EOL;
foreach ($snc as $s) {
    echo $s->sy,' - ',$s->txt,PHP_EOL;
}
// = != < > you can use those too
$snc=$db->filter('txt','use','=')->sort('sy','asc')->getResult('testTable');
echo PHP_EOL,'equals "use"',PHP_EOL;
foreach ($snc as $s) {
    echo $s->sy,' - ',$s->txt,PHP_EOL;
}