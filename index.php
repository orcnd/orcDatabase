<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="lolkittens" />

	<title>orcDatabase guide</title>
    <style>
    body {
        font-family:helvetica,arial;
    }
    h3 {
        margin:0;
        margin-bottom: 2px;
        color:#363649;
        text-shadow: inset 1px 1px white;
    }
    
    .example {
        background: #f4f4f4;
        border: 1px solid #ddd;
        width: 1060px;
        font-size: 15px;
        line-height: 1.1;
        padding:0;
        padding:10px;
        margin:0 auto;
        margin-bottom:20px;
        clear:both;
        display:block;
        height:280px;
        box-sizing:border-box;
        box-shadow:1px 1px 4px rgba(0,0,0,0.4);
        
    }
    
    .code {
        float:left;
        width: 78%;
        height:100%;
    }
    .code pre{
        background: #f4f4f4;
        border: 1px solid #706F84;
        border-left: 3px solid #f36d33;
        color:black;
        page-break-inside: avoid;
        font-family: monospace;
        width:100%;
        margin:0;
        overflow: auto;
        padding: 5px 10px;
        display: block;
        word-wrap: break-word;
        height:93%;
        box-sizing:border-box;
        margin-bottom:15px;
        float:left;
        opacity:0.7;
    }
    
    .result {
        width: 20%;
        float:right;
        height:100%;
    }
    .comment {
        color:#BE2323;
        background:rgba(0,0,0,0.06);
        margin:0;
        padding:0;
        display:inline;
        box-sizing:border-box;
    }

    .result pre{
        float:right;
        width:100%;
        background: #f4f4f4;
        border: 1px solid #706F84;
        border-left: 3px solid green;
        color:black;
        page-break-inside: avoid;
        font-family: monospace;
        font-size: 13px;
        line-height: 1.1;
        margin:0;
        overflow: auto;
        padding: 5px 10px;
        display: block;
        word-wrap: break-word;
        height:93%;
        box-sizing:border-box;
        opacity:0.7;
    }
    
    .result pre:hover, .code pre:hover {
        opacity:1;
    }
    </style>
</head>

<body>

<?php 
    require_once('orcDatabase.php');
    
    $s=scandir('examples');
    $fla=array();
    foreach($s as $f) {
        if (strpos($f,'.php')) {
            $fla[]='examples/'.$f;
        }
    }
    
    foreach($fla as $f) {
        $code=file_get_contents($f);
        $code=htmlentities($code);
        $spl=explode("\r\n",$code);
        unset($spl[0]);
        foreach ($spl as $k=>$s) {
            $ps=strpos($s,'//');
            if ($ps>-1 && $ps<3) {
                $s='<span class="comment">'.$s.'</span>';
                $spl[$k]=$s;
            }
        }
        $code=implode("\r\n",$spl);
        
        
        echo '<div class="example"><div class="code">';
        echo '<h3>' . $f . ' Code</h3>';
        echo '<pre ><code>';
        echo $code;
        echo '</code></pre></div><div class="result">';
        echo '<h3>Result</h3>';
        echo '<pre><code>';
        include($f);
        echo '</code></pre></div></div>';
    }
?>

</body>
</html>
<?php 

