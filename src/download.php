<?php
$file = 'portfolioResume.pdf';
header('Content-Description: File Transfer');
header('Content-Type: application/pdf');
header('Content-Disposition: attachment; filename="'.basename($file).'"');
readfile($file);
?>