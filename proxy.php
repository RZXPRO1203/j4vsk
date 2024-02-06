<?php
// Get the PDF file name from the query string
$pdfName = $_GET['pdf'];

// Define the URL of the PDF file
$pdfUrl = 'https://4vsk.jelgava.lv/images/2023_2024/izmainas/feb/' . $pdfName;

// Set the appropriate headers for PDF content
header('Content-Type: application/pdf');
header('Content-Disposition: inline; filename="' . $pdfName . '"');

// Fetch the PDF file from the original server and output it
readfile($pdfUrl);
?>
