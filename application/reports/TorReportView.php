<?php
    //MyReport.view.php
    use \koolreport\widgets\koolphp\Table;
?>
<html>
    <head>
        <title>Tor Report</title></title>
    </head>
    <body>
        <h1>TOR Report</h1>
        <h3>List all TOR</h3>
        <?php
        Table::create(array("dataStore"=>$this->dataStore("tor_records"),"class"=>array("table"=>"table table-hover")));
        ?>
        <button onClick="window.print()">Print this page</button>
    </body>
</html>
