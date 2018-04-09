<?php
$db=new orcDatabase('datafile.php',true,false);
$db->dropTable('testTable');
$db->createTable('testTable');

for ($i=0;$i<5;$i++) {
    $row=(object)array('sy'=>rand(0,10));
    $db->addRow('testTable',$row);
}
//     data column , sorting way
$snc=$db->sort('sy','desc')->getResult('testTable');
echo 'desc',PHP_EOL;
foreach ($snc as $s) {
    echo $s->sy,PHP_EOL;
}
//     data column , sorting way
$snc=$db->sort('sy','asc')->getResult('testTable');
echo PHP_EOL,'asc',PHP_EOL;
foreach ($snc as $s) {
    echo $s->sy,PHP_EOL;
}