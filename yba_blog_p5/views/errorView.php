<?php 

ob_start();

?>

<h1>Erreur !!</h1>
<p>Attention, une erreur est survenue !</p>

<?php
$content = ob_get_clean();
$title = 'Oupsy...';



require ('template.php');
error($errorMsg);
?>

