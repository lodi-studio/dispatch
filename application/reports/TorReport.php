<?php
//MyReport.php
require APPPATH."/libraries/koolreport/autoload.php";
class TorReport extends \koolreport\KoolReport
{
    use \koolreport\clients\Bootstrap;
    function settings()
    {
        return array(
            "assets"=>array(
                "path"=>"../../assets",
                "url"=>"assets",
            ),
            "dataSources"=>array(
                "dispatch_db"=>array(
                    "connectionString"=>"mysql:dbname=dispatch_db;host=localhost;",
                    "username"=>"root",
                    "password"=>"",
                    "charset"=>"utf8"
                )
            )
        );
    }
    function setup()
    {
        $this->src('dispatch_db')
        ->query("select * from tor_records")
        ->pipe($this->dataStore("torrecords"));
    }
}
