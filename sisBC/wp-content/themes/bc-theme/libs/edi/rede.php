<?php
require_once ('rede_parser.php');
/* EEVD */
echo "<br>#############<br> INI EEVD <br>#############<br>";
$request_url = 'https://www.userede.com.br/pt-BR/produtosservicos/Documents/Extrato_Eletronico/2409_EEVD%20TESTE.TXT';
$request = new WP_Http ();
$result = $request->request ( $request_url );
// $xmlresult = simplexml_load_string ( $result ['body'] );
$result_array = explode ( PHP_EOL, $result ['body'] );
// var_dump ( $result_array );
$redeParser = new RedeParser ();
$redeParser->parseEEVD ( $result_array );
echo "<br>#############<br> FIM EEVD <br>#############<br>";

/* EEVC */
echo "<br>#############<br> INI EEVC <br>#############<br>";
$request_url = 'https://www.userede.com.br/pt-BR/produtosservicos/Documents/Extrato_Eletronico/NEVC_TESTE.txt';
$result = $request->request ( $request_url );
$result_array = explode ( PHP_EOL, $result ['body'] );
var_dump ( $result_array );
echo "<br>#############<br> FIM EEVC <br>#############<br>";

/* EEFI */
echo "<br>#############<br> INI EEFI <br>#############<br>";
$request_url = 'https://www.userede.com.br/pt-BR/produtosservicos/Documents/Extrato_Eletronico/NEFI_TESTE_1908.TXT';
$result = $request->request ( $request_url );
$result_array = explode ( PHP_EOL, $result ['body'] );
var_dump ( $result_array );
echo "<br>#############<br> FIM EEFI <br>#############<br>";

/* EESA */
echo "<br>#############<br> INI EESA <br>#############<br>";
$request_url = 'https://www.userede.com.br/pt-BR/produtosservicos/Documents/Extrato_Eletronico/EESA_TESTE.txt';
$result = $request->request ( $request_url );
$result_array = explode ( PHP_EOL, $result ['body'] );
var_dump ( $result_array );
echo "<br>#############<br> FIM EESA <br>#############<br>";