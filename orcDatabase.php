<?php
class orcTextEncyrpt
{
    private $oar, $oart, $mocks;

    function __construct()
    {
        // mock vars to hide hex values
        $this->mocks=array('*','-','@','%','.',',','>','<',';','_','~','?','[',']','{','}','&','!','g','x','o','q','p','t','z','y','u','v','n');
    // this value mixes regual char values generate it for yourself by using generateRandomOrder function
        $this->oar=array ( 
817,675,978,77,564,175,413,76,98,265,190,452,147,34,835,346,945,5,
833,152,570,458,390,44,560,134,698,557,688,533,480,397,716,125,511,161,
591,380,536,932,255,878,921,456,845,122,576,311,522,500,118,328,318,834,
113,12,779,431,434,304,636,758,269,752,980,856,805,584,774,938,96,336,
722,681,158,739,637,713,289,908,650,797,832,942,862,280,209,527,965,525,
105,883,838,327,256,189,853,167,679,429,464,502,92,378,559,186,641,624,
243,644,676,814,199,656,472,776,342,514,334,344,302,874,364,513,700,643,
170,60,89,852,586,670,782,438,566,208,669,607,903,305,616,386,495,582,
69,821,419,475,307,391,366,204,829,704,563,138,693,554,303,877,958,177,
653,140,941,905,312,684,952,558,400,824,962,301,485,598,764,974,605,811,
354,882,659,240,29,621,546,996,4,956,524,626,75,655,40,918,272,668,
137,56,547,734,988,581,820,971,116,357,114,552,556,640,411,517,112,95,
983,1000,823,37,461,396,599,580,490,15,728,601,565,737,352,451,358,943,
258,68,274,909,348,257,287,220,667,135,463,162,473,446,923,412,247,377,
474,578,365,550,800,998,133,907,55,203,23,606,41,870,836,48,579,879,
176,427,314,136,123,439,402,804,83,991,786,281,979,296,499,271,705,914,
71,746,66,404,232,120,695,925,683,403,844,283,686,297,78,963,931,796,
743,200,730,842,323,435,212,481,927,859,379,575,355,964,847,866,351,736,
244,754,418,217,13,115,574,538,16,911,929,609,65,649,492,460,992,955,
197,360,343,254,79,82,337,317,523,103,469,759,393,383,30,108,180,70,
395,33,841,541,356,872,219,516,627,430,531,843,333,260,672,202,259,157,
613,850,707,719,687,184,185,436,785,711,408,218,488,864,571,694,292,196,
657,17,131,61,306,239,652,143,491,362,950,873,308,771,849,8,506,149,
756,753,268,38,708,310,924,777,276,968,288,561,768,515,897,63,760,282,
666,755,467,521,25,422,904,806,937,505,935,476,493,775,225,664,80,994,
577,542,729,920,132,781,141,748,107,567,3,57,424,14,389,183,231,94,
330,428,757,618,6,335,221,144,321,151,555,142,43,572,545,749,81,592,
763,36,612,399,892,803,534,482,926,139,585,766,74,468,363,997,960,690,
104,449,235,715,146,54,110,504,770,594,381,987,765,825,886,972,361,486,
119,602,124,370,2,215,216,948,750,751,614,901,810,930,415,934,450,828,
714,772,855,298,699,871,702,990,526,967,250,807,794,512,778,322,725,171,
341,228,145,86,326,18,631,0,629,416,891,1002,332,166,368,178,867,588,
42,884,316,906,532,284,703,611,338,465,723,129,568,940,349,168,285,291,
213,234,21,724,405,496,20,409,721,223,230,648,59,182,295,373,7,740,
153,535,787,587,981,331,329,457,630,881,985,22,50,440,860,789,831,483,
553,503,459,229,128,206,315,10,90,912,678,489,549,674,617,85,642,830,
625,733,793,769,126,238,808,433,35,1008,939,487,1007,638,809,426,528,791,
826,102,658,121,376,371,290,530,47,420,27,179,173,437,148,442,188,270,

249,345,682,484,466,917,353,194,973,569,890,11,839,384,851,731,192,387,
984,425,160,423,267,712,529,696,957,477,689,319,64,949,869,995,647,339,
462,253,245,933,673,798,761,193,388,986,261,222,93,593,169,226,660,241,
294,608,880,875,1003,635,783,888,857,773,52,954,127,84,745,790,417,936,
227,573,970,293,159,347,117,19,278,717,802,697,710,732,619,394,398,610,
645,876,248,174,551,899,788,895,662,922,548,453,840,443,975,421,846,300,
214,172,863,510,822,893,969,286,251,340,455,58,784,816,623,677,837,350,
46,913,233,919,718,910,646,976,67,887,163,150,99,201,951,720,885,88,
799,671,944,583,898,661,597,441,665,73,62,902,156,432,685,471,819,865,
236,266,207,246,359,385,615,1005,543,858,444,324,1001,401,263,959,325,792,
210,9,195,742,868,49,680,273,604,407,812,747,889,445,53,410,72,861,
109,633,537,916,454,544,628,691,97,622,28,993,313,900,701,111,106,31,
509,827,977,795,508,1004,369,1,382,520,205,448,275,470,191,780,801,374,
709,87,237,26,738,741,130,632,654,896,634,101,961,100,1006,999,262,279,
762,946,252,39,198,966,727,367,854,894,639,982,478,539,375,447,181,165,
813,744,603,45,406,767,928,989,32,51,815,211,91,590,414,562,497,947,
372,309,663,154,848,224,494,726,507,589,392,706,498,187,264,620,479,299,
519,501);

        foreach ($this->oar as $k => $v) {
            $this->oart[$v] = $k;
        }

    }

    function encyrptChar($kr)
    {
        $oldnum = ord($kr);
        $num = $this->oar[$oldnum];
        $chlen = 4;
        $s = dechex($num) . '';
        $add = $chlen - strlen($s);
        for ($i = 0; $i < $add; $i++) {
            $k = $this->mocks[rand(0, sizeof($this->mocks) - 1)];
            $rs = rand(0, strlen($s));
            $s = substr($s, 0, $rs) . $k . substr($s, $rs);
        }
        return trim($s);
    }

    function decyrptChar($num)
    {
        $num = str_replace($this->mocks, '', $num);
        $num = (int)hexdec($num);
        $num = $this->oart[$num];
        return chr($num);
    }

    function encyrptString($text)
    {
        $snc = '';
        for ($i = 0; $i < strlen($text); $i++) {
            $k = substr($text, $i, 1);
            $snc .= $this->encyrptChar($k);
        }
        return $snc;
    }

    function decyrptString($text)
    {
        $snc = '';
        for ($i = 0; $i < strlen($text); $i += 4) {
            $k = substr($text, $i, 4);
            if (strlen($k) == 4)
                $snc .= $this->decyrptChar($k);
        }

        return $snc;
    }


}

class orcDatabase
{
    private $activeDataFile, $baseData, $debug, $phpHeader;
    private $encrypt, $activeTable, $resultFilter, $collator_lcl;

    function __construct($datafile = '', $encyrpt=true, $debug = false)
    {   
        //trying to hide data from other php files desperetly
        $this->phpHeader = '<?php ' . PHP_EOL . '$xml = <<<\'wadastatio23ngoddam2nrightye1a23\'' .
                PHP_EOL;
        $this->phpFooter = PHP_EOL . 'wadastatio23ngoddam2nrightye1a23;' . PHP_EOL .
                '?>';
        $this->resetFilter();
        $this->baseData = false;
        $this->debug = $debug;
        $this->encrypt = $encyrpt;
        
        if ($datafile == '') {
            $this->error("database_not_found");
            return false;
        } else {
            if (file_exists($datafile)) {
                $this->loadDataFile($datafile);
            }else{
                $this->createDatabase($datafile,false,true);
            }
        }            
    }

    function resetFilter()
    {
        $this->resultFilter = array(
            'sort' => array(),
            'filter' => array(),
            'limit' => array(),
            'distinct' => '');
    }

    function getTable($tableName)
    {
        if (isset($this->baseData->tables->$tableName))
            return $this->baseData->tables->$tableName;
        return false;
    }

    private function getNewId($tableName, $row)
    {
        $tbl = $this->getTable($tableName);

        if ($tbl !== false) {

            $keys = array();
            foreach ($tbl as $k => $v) {
                $keys[] = $k; //gathering keys
            }

            $rh = true; //re hash
            $rhc = 0; //re hash count

            $jsd = json_encode($row);
            while ($rh == true) {
                $rhc++;

                $vr = md5($jsd . microtime() . $rhc);
                $hsd = hash("crc32b", $vr);

                $rh = false;
                if (in_array($hsd, $keys))
                    $rh = true; // is found same in keys loop continues

                if ($rhc > 35)
                    break; //tries to hash too much something might be wrong
            }

            return $hsd;
        } else {
            return false;
        }
    }

    function addRow($tableName, $row)
    {
        $hid = $this->getNewId($tableName, $row);
        if ($hid === false)
            return false;
        $arr = $this->baseData->tables->$tableName;
        $arr[(string )$hid] = $row;
        $this->baseData->tables->$tableName = $arr;
        return $hid;
    }

    function createTable($tableName)
    {
        if (!isset($this->baseData->tables->$tableName)) {
            $this->baseData->tables->$tableName = array();
        }
        return true;
    }
    function dropTable($tableName)
    {        
        $this->baseData->tables->$tableName = array();
        return true;
    }


    function getRow($tableName, $row, $copy = false)
    {
        if (isset($this->baseData->tables->$tableName)) {
            $arr = $this->baseData->tables->$tableName;

            if (isset($arr[$row])) {
                $t = $arr[$row];
                if ($copy)
                    $t = json_decode(json_encode($t));
                return $t;
            }
        }
        return false;
    }

    function deleteRow($tableName, $row)
    {
        if ($this->getRow($tableName, $row) !== false) {

            $arr = $this->baseData->tables->$tableName;
            unset($arr[$row]);
            $this->baseData->tables->$tableName = $arr;
            return true;
        }
        return false;
    }

    function getResult($name)
    {
        if (isset($this->baseData->tables->$name)) {
            $this->activeTable = $this->baseData->tables->$name;
            $tobj = (array )json_decode(json_encode($this->activeTable)); // copies data

            //$tobj=$this->activeTable; // changes data accordingly filtering options

            // filterin  things
            $tobj = $this->filterTheResultTable($tobj, $this->resultFilter['filter']);
            $tobj = $this->sortTheResultTable($tobj, $this->resultFilter['sort']);
            $tobj = $this->limitTheResultTable($tobj, $this->resultFilter['limit']);
            $tobj = $this->distinctTheResultTable($tobj, $this->resultFilter['distinct']);

            $this->resetFilter();
            return $tobj;
        } else {
            return false;
        }
    }


    function setTable($name, $data)
    {
        $this->baseData->tables->$name = $data;
    }

    private function valueCompare($var1, $var2, $extra = '')
    {

        if (gettype($var1) == 'string' || gettype($var2) == 'string') {

            if ($extra == 'endwith') {
                $var2 = mb_substr($var2, strlen($var2) - strlen($var1), strlen($var2), 'UTF-8');
                $var1 = mb_strtolower($var1, 'UTF-8');
                $var2 = mb_strtolower($var2, 'UTF-8');
            }
            if ($extra == 'startwith') {
                $var2 = mb_substr($var2, 0, strlen($var1), 'UTF-8');
                $var1 = mb_strtolower($var1, 'UTF-8');
                $var2 = mb_strtolower($var2, 'UTF-8');
            }

            if ($extra == 'like') {
                $var1 = mb_strtolower($var1, 'UTF-8');
                $var2 = mb_strtolower($var2, 'UTF-8');

                if (strlen($var2) >= strlen($var1)) {
                    //echo $var2,' - ',$var1,' /////  ',strpos($var2,$var1),'<br>';
                    if (mb_strpos($var2, $var1, 0, 'UTF-8') > -1) {
                        return 0;
                    } else {
                        return - 1;
                    }
                } else {
                    return - 1;
                }
            }

            return strcmp($var1, $var2);
        } else {
            if ($var1 > $var2)
                return 1;
            if ($var1 < $var2)
                return - 1;
            return 0;
        }
    }

    private function filterTheResultTable($tobj, $filtersetarr)
    {
        if (sizeof($filtersetarr) > 0) {
            foreach ($filtersetarr as $filter) {
                $snc = array();
                foreach ($tobj as $k => $curobj) {
                    $dt = $this->colDataGet($curobj, $filter['filterset']);
                    $ss = $this->valueCompare($filter['data'], $dt, $filter['way']);
                    if ($filter['way'] == '=' && $ss == 0)
                        $snc[$k] = $curobj;
                    if ($filter['way'] == '>' && $ss == 1)
                        $snc[$k] = $curobj;
                    if ($filter['way'] == '<' && $ss == -1)
                        $snc[$k] = $curobj;
                    if ($filter['way'] == '!=' && $ss != 0)
                        $snc[$k] = $curobj;
                    if ($filter['way'] == 'like' && $ss == 0)
                        $snc[$k] = $curobj;
                    if ($filter['way'] == 'startwith' && $ss == 0)
                        $snc[$k] = $curobj;
                    if ($filter['way'] == 'endwith' && $ss == 0)
                        $snc[$k] = $curobj;
                }
                $tobj = $snc;
            }
        }
        return $tobj;
    }


    function filter($col, $data, $way = '=')
    {
        $snc = $this->parseCol($col);
        $this->resultFilter['filter'][] = array(
            'filterset' => $snc,
            'data' => $data,
            'way' => $way);
        return $this;
    }

    private function limitTheResultTable($tobj, $limit)
    {
        if (isset($limit['start'])) {
            if ($limit['start'] < count($tobj)) { //starting index must not be higher than array count
                //if (count($tobj)-$limit['start']>=$limit['count']) {
                return array_slice($tobj, $limit['start'], $limit['count'], true);
                //}
            }
        }
        return $tobj;
    }

    function limit($start, $count = -1)
    {
        $start = (int)$start;
        $count = (int)$count;
        if ($count == -1) {
            $count = $start;
            $start = 0;
        }

        if ($count > 0 && $start >= 0)
            $this->resultFilter['limit'] = array('start' => $start, 'count' => $count);
        return $this;
    }

    private function sortTheResultTable($tobj, $sort)
    {
        if (sizeof($sort) > 0) {
            $sortset = $sort['sortset'];
            uasort($tobj, function ($curobj, $curobj2)use ($sortset)
            {
                $dt1 = $this->colDataGet($curobj, $sortset); $dt2 = $this->colDataGet($curobj2,
                    $sortset); return $this->valueCompare($dt1, $dt2); }
            );
            if ($sort['way'] == 'desc')
                $tobj = array_reverse($tobj, true);
        }
        return $tobj;
    }

    function sort($by, $way = 'asc')
    {
        $snc = $this->parseCol($by);
        $this->resultFilter['sort'] = array('sortset' => $snc, 'way' => $way);
        return $this;
    }

    function distinct($by)
    {
        $this->resultFilter['distinct'] = $by;
        return $this;
    }

    private function distinctTheResultTable($tobj, $distinct)
    {

        if (count($tobj) > 0) {
            $a = end($tobj);
            if (isset($a->$distinct)) {
                $snc = array();
                $do = array();
                foreach ($tobj as $k => $v) {
                    if (!in_array($v->$distinct, $do)) {
                        $do[] = $v->$distinct;
                        $snc[$k] = $v;
                    }
                }

                return $snc;
            }
        }
        return $tobj;
    }

    private function colDataGet($curobj, $sortset)
    {
        foreach ($sortset as $s) {
            if ($s['type'] == 'table') {
                if (isset($curobj->$s['key'])) {
                    $curobj = $curobj->$s['key'];
                } else {
                    $this->error("col_not_found", $s['key']);
                    return false;
                }
            }
            if ($s['type'] == 'array') {
                if (isset($curobj[$s['key']])) {
                    $curobj = $curobj[$s['key']];
                } else {
                    $this->error("col_not_found", $s['key']);
                    return false;
                }
            }
        }
        return $curobj;
    }

    private function parseCol($by)
    {
        $snc = array();
        if (strpos($by, '->') > -1) {
            $tr = explode('->', $by);
            foreach ($tr as $v) {
                $m = array();
                if (preg_match_all('/\[.\]/', $v, $m, PREG_OFFSET_CAPTURE)) {
                    $torep = array();
                    if (sizeof($m) > 0) {
                        //var_dump($m[0][1]);
                        $v = substr($v, 0, $m[0][0][1]);
                        $snc[] = array('key' => $v, 'type' => 'table');
                        foreach ($m[0] as $arb) {
                            $kb = str_replace(array('[', ']'), '', $arb[0]);

                            if (strpos($kb, '\'') > -1 || strpos($kb, '"') > -1) {
                                if (strpos($kb, '\'') > -1)
                                    $kb = str_replace('\'', '', $arb[0]);
                                if (strpos($kb, '"') > -1)
                                    $kb = str_replace('"', '', $arb[0]);
                                $kb = (string )$kb;
                            } else {
                                $kb = (int)$kb;
                            }

                            $snc[] = array('key' => $kb, 'type' => 'array');
                        }
                    }
                } else {
                    $snc[] = array('key' => $v, 'type' => 'table');
                }
            }
        } else {
            $snc[] = array('key' => $by, 'type' => 'table');
        }
        return $snc;
    }


    function errorList($error)
    {
        $errors_tr = array(
            'json_corrupted' => 'data dosyası json formatı bozuk',
            'datafile_corrupted' => 'data dosyası php formatı bozuk',
            'database_not_found' => 'yüklenmek istenen veritabanı dosyası bulunamadi',
            'datafile_exists' =>
                'yaratılmak istenen veritabanı dosyası zaten var ustune yazamam',
            'nodataquery_fail' => 'veri yüklenmeden sorgu yapılamaz',
            'col_not_found' => 'belirtilen hedef veride bulunamadı',
            );

        $errors = $errors_tr;

        if (isset($errors[$error])) {
            return $errors[$error];
        } else {
            return 'error unknown';
        }
    }

    function error($err, $toadd = '')
    {
        $err = $this->errorList($err);
        if ($this->debug)
            echo "<h5 style='color:red; background:pink; font-weight:bold;font-size:20px'>" .
                $err . " " . $toadd . "</h5>";
        error_log("jsonQuery error // " . $err);
        return false;
    }

    function loadPhpCodedData($data)
    {

        $tempfile = md5(microtime() . rand(0, 213)) . 'tf2.php';
        file_put_contents($tempfile, '<?php return ' . $data . ";" . PHP_EOL);
        $snc = include ($tempfile);
        //unlink(pathinfo(realpath($tempfile), PATHINFO_DIRNAME).DIRECTORY_SEPARATOR . $tempfile);

        unlink($tempfile);
        return $snc;
    }

    function loadDataFile($datafile)
    {
        if (file_exists($datafile)) {
            $this->activeDataFile = $datafile;

            $f = fopen($this->activeDataFile, 'r+'); //dosya acilmaya calisiliyor
            flock($f, LOCK_EX, $w); //dosya kilitlenmeye calisiyor
            //bunun amaci kilitlemek degil varsa kilidin acilmasini beklemek
            //lockex kilidinde diger kilidi beklemek gerekiyor
            //boylece dosya guncelleniyorsa beklenmis olunuyor
            flock($f, LOCK_UN); //kilit tekrar aciliyor
            fclose($f);

            $f = file_get_contents($this->activeDataFile); //dosya okuma gerceklesiyor

            $dsb = substr($f, 0, strlen($this->phpHeader)); //dosyanin basi
            $dss = substr($f, strlen($f) - strlen($this->phpFooter), strlen($this->
                phpFooter)); //dosyanin sonu
            if ($dsb == $this->phpHeader && $dss == $this->phpFooter) {
                $f = substr($f, strlen($this->phpHeader));
                $f = substr($f, 0, strlen($f) - strlen($this->phpFooter));
                if ($this->encrypt) {
                    $te = new orcTextEncyrpt();
                    $f = $te->decyrptString($f);
                }

                $d = $this->loadPhpCodedData($f);
                if ($d !== false) {
                    foreach ($d->tables as $k => $v) {
                        $d->tables->$k = (array )$v;
                    }
                    $this->baseData = $d;
                } else {
                    $this->error("data_corrupted");
                }
            } else {
                $this->error("datafile_corrupted");
            }
        } else {
            $this->error("database_not_found");
            return false;
        }
    }

    function createDatabase($datafile, $forceCreate = false, $openNow = false)
    {
        $dt = (object)array('tables' => (object)array());
        if (file_exists($datafile)) {
            if ($forceCreate) {
                unlink($datafile);
            } else {
                $this->error("datafile_exists");
                return false;
            }
        }

        $this->baseData = $dt;
        $this->activeDataFile = $datafile;
        $this->saveChanges();

        if ($openNow) {
            return $this->loadDataFile($datafile);
        }

        return true;
    }

    function info()
    {
        if ($this->baseData === false)
            return $this->error("nodataquery_fail");
        $s = '<h3>Bulunan objeler (' . sizeof($this->baseData->tables) . ")</h3>" .
            PHP_EOL;
        if (sizeof($this->baseData->tables) > 0) {
            $s .= '<ul>' . PHP_EOL;
            foreach ($this->baseData->tables as $name => $data) {
                $s .= '<li>' . $name . '(' . sizeof($data) . ')</li>' . PHP_EOL;
            }
            $s .= '</ul>' . PHP_EOL;
        }
        return $s;
    }

    function backup($fl)
    {
        $jd = var_export($this->baseData, true);

        $jd = str_replace('stdClass::__set_state', 'new orc842c', $jd);
        $jd = str_replace('orc842c::__set_state', 'new orc842c', $jd);
        $jd = '<?php return ' . $jd;
        file_put_contents($fl, $jd);
    }

    function restore($fl)
    {
        $this->baseData = include ($fl);
    }

    function saveChanges()
    {
        if ($this->baseData === false)
            return $this->error("nodataquery_fail");
        $jd = var_export($this->baseData, true);

        $jd = str_replace('stdClass::__set_state', 'new orc842c', $jd);
        $jd = str_replace('orc842c::__set_state', 'new orc842c', $jd);

        if ($this->encrypt) {
            $te = new orcTextEncyrpt();
            $jd = $te->encyrptString($jd);
        }

        $dts = $this->phpHeader . $jd . $this->phpFooter;

        $f = fopen($this->activeDataFile, 'w+'); //dosya aciliyor
        if (flock($f, LOCK_EX)) { //dosya kilitleniyor okumalar ve yazmalar hatali olmasin diye
            //bu asamada dosyaya erisim burasi disinda kapandi diger talepler bekleyecek
            $pieces = str_split($dts, 1024 * 4); //uzun dosya parcalanip yukleniyor buffer a takilamsin deyu
            foreach ($pieces as $piece) {
                fwrite($f, $piece, strlen($piece));
            }
            flock($f, LOCK_UN); // dosya kilidi aciliyor ki insanlar tekrar erisebilsin
        }
        fclose($f);

        return true;
    }
}


class orc842c
{
    function __construct($data = array())
    {
        if (count($data) > 0) {
            foreach ($data as $k => $v) {
                $this->$k = $v;
            }
        }
    }
}
