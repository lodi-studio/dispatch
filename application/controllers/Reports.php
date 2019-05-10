<?php
/**
 * Reports Controller
 */

 defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH."/reports/TorReport.php";

class Reports extends CI_Controller{

  function __construct(){
    parent::__construct();
  }

  public function index(){
    $report = new TorReport;
    $report->run()->render();
  }

}

?>
