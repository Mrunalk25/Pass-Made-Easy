<?php
include 'connect.php';

//if(isset($_POST['Generate']))
//{
//$ppid="SELECT LAST_INSERT_ID() FROM `pass_information`";
//$pdorunn=$pdo->query($ppid);
function fetch_data()
{
    include 'connect.php';
    $output='';
  $pdoQuery="SELECT * FROM `pass_information` ORDER BY pass_Id DESC LIMIT 1";
  $pdorun=$pdo->query($pdoQuery);
  if($pdorun)
  {
      echo  '<table width="50%" border="1" cellpadding="5" cellspacing="5" 
          <tr>
          <td>PASS ID</td>
           <td>BUS Number</td>
            <td>Timespan</td>
             <td>Bus Type</td>
             <td>Start Date</td>
               <td>End Date</td>
          </tr>
          ';
      while($row = $pdorun->fetch(PDO::FETCH_OBJ))
      {
      $output .= '<tr>
                <td> '.$row->pass_Id.' </td>
                <td> '.$row->bus_no.' </td>
                <td> '.$row->timespan.' </td>
                <td> '.$row->bus_type.' </td>
                <td> '.$row->start_date.'</td>
                <td> '.$row->end_date.' </td>
              </tr>
         ' ;
      }
      
  }
  return $output;
}

if(isset($_POST["getpdf"]))
{
    require_once("tcpdf/tcpdf.php");
    $pdf = new TCPDF('P',PDF_UNIT,PDF_PAGE_FORMAT,true,'UTF-8',false);
    $pdf->SetCreator(PDF_CREATOR);
$pdf->SetTitle('TCPDF Example 001');
$pdf->SetHeaderData('','', PDF_HEADER_TITLE,PDF_HEADER_STRING);
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN,'',PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA,'',PDF_FONT_SIZE_DATA));
$pdf->SetDefaultMonospacedFont('helvetica');
$pdf->setFooterMargin(PDF_MARGIN_FOOTER);
$pdf->SetMargins(PDF_MARGIN_LEFT,5,PDF_MARGIN_RIGHT);
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);
$pdf->SetAutoPageBreak(TRUE,10);
$pdf->SetFont('helvetica','',12);
$pdf->AddPage();
$content='';
$content .='<table border="1" cellspacing="0" cellpadding="6">
<tr>
          <th>PASS ID</th>
           <th>BUS Number</th>
            <th>Timespan</th>
             <th>Bus Type</th>
             <th>Start Date</th>
               <th>End Date</th>
          </tr>    

    ';
$content .= fetch_data();
$content .= '</table>';
$pdf->writeHTML($content);
//$pdf->writeHTMLCell(0, 0 , '' , '' , $content);
ob_end_clean();
$pdf->Output("Pass.pdf","I");

}
    
?>

<html>
    <head>
        
    </head>
    <body>
        <table>
        <?php echo fetch_data();?>
        </table>
        <form method='post'>
            <input type='submit' value='getpdf' name='getpdf' id='getpdf' >
        </form>
    </body>
</html>