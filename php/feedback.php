<?php
$vote = $_REQUEST['vote'];

$path = "../../images/";

//get content of textfile
$filename = "../data/output/feedback.txt";
$content = file($filename);

//put content in array
$array = explode("||", $content[0]);
$apple = $array[0];
$pumpkin = $array[1];
$blueberry = $array[2];
$pecan = $array[3];
$cream = $array[4];
$keylime = $array[5];

//add vote
switch ($vote) {
	case 0:
		$apple = $apple + 1;
		break;
	case 1:
		$pumpkin = $pumpkin + 1;
		break;
	case 2:
		$blueberry = $blueberry + 1;
		break;
	case 3:
		$pecan = $pecan + 1;
		break;
	case 4: 
		$cream = $cream + 1;
		break;
	case 5:
		$keylime = $keylime + 1;
		break;
}

//sum votes, to be used in calculation later
$sum=$apple+$pumpkin+$blueberry+$pecan+$cream+$keylime;

//insert votes to txt file
$insertvote = $apple."||".$pumpkin."||".$blueberry."||".$pecan."||".$cream."||".$keylime;
$fp = fopen($filename,"w");
fputs($fp,$insertvote);
fclose($fp);
?>

<table>
	<tr>
		<td>Apple</td>
		<td><img src="<?=$path?>feedback.png"
		width='<?php echo(100*round($apple/($sum),2)); ?>'
		height='20'>
		<?php echo(100*round($apple/($sum),2)); ?>%
		</td>
	</tr>
	<tr>
		<td>Pumpkin</td>
		<td><img src="<?=$path?>feedback.png"
		width='<?php echo(100*round($pumpkin/($sum),2)); ?>'
		height='20'>
		<?php echo(100*round($pumpkin/($sum),2)); ?>%
		</td>
	</tr>
	<tr>
		<td>Blueberry</td>
		<td><img src="<?=$path?>feedback.png"
		width='<?php echo(100*round($blueberry/($sum),2)); ?>'
		height='20'>
		<?php echo(100*round($blueberry/($sum),2)); ?>%
		</td>
	</tr>
	<tr>
		<td>Pecan</td>
		<td><img src="<?=$path?>feedback.png"
		width='<?php echo(100*round($pecan/($sum),2)); ?>'
		height='20'>
		<?php echo(100*round($pecan/($sum),2)); ?>%
		</td>
	</tr>
	<tr>
		<td>Cream</td>
		<td><img src="<?=$path?>feedback.png"
		width='<?php echo(100*round($cream/($sum),2)); ?>'
		height='20'>
		<?php echo(100*round($cream/($sum),2)); ?>%
		</td>
	</tr>				
	<tr>
		<td>Key Lime</td>
		<td><img src="<?=$path?>feedback.png"
		width='<?php echo(100*round($keylime/($sum),2)); ?>'
		height='20'>
		<?php echo(100*round($keylime/($sum),2)); ?>%
		</td>
	</tr>						
</table> 