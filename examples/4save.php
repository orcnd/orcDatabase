<?php
$db=new orcDatabase('datafile.php',true,false);
$db->dropTable('testTable');
$db->createTable('testTable');

for ($i=0;$i<5;$i++) {
    $row=(object)array('sy'=>rand(0,10));
    $db->addRow('testTable',$row);
}
// this saves data to file 
$db->saveChanges();

// we can open it again to test
$db2=new orcDatabase('datafile.php',true,false);
$snc=$db->getResult('testTable');

foreach ($snc as $s) {
    echo $s->sy,PHP_EOL;
}