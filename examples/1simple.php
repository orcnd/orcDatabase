<?php
//                 data store file,encypt. debug
$db=new orcDatabase('datafile.php',true,false);
// clearing old data
$db->dropTable('testTable');
// creating new table
$db->createTable('testTable');

for ($i=0;$i<5;$i++) {
    //creain row for table 
    $row=(object)array('sy'=>rand(0,10));
    //adding row to table
    $db->addRow('testTable',$row);
}
//getting basic results
$snc=$db->getResult('testTable');
//viola
foreach ($snc as $s) {
    echo $s->sy,PHP_EOL;
}