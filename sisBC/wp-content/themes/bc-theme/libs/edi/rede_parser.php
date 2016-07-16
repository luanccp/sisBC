<?php
/**
 * Classe que executa as atividades da RedeCard
 * Entrega um JSON compilado no formato entendido pelo Processador de transacoes 
 * 
 * @author Victor
 * @package ConciliaCartao-Redecard
 *
 */
class RedeParser {
	/**
	 * Funcao que faz o parse do EDI tipo EEVD
	 *
	 * @param array $edi_array
	 *        	- Array com as linhas do arquivo EDI
	 */
	public function parseEEVD($edi_array) {
		// Indicador de que esta dentro ou fora do Loop do EDI
		$loop_edi = false;
		
		// Faz o Loop do EDI
		foreach ( $edi_array as $edi_array_value ) { // Faz a iteracao entre as linhas do EDI
			$edi_item = '';
			var_dump ( $edi_array_value );
			$edi_item = explode ( ",", $edi_array_value ); // A linha do EDI eh um CSV - Explode para buscar os campos
			if (($edi_item [0] == '00')) { // Verifica se eh um novo cabecalho ou se esta dentro do loop do EDI
				if ($this->parseEEVDItem ( $edi_item )) { // Verifica se o campo 0 eh valido
					$loop_edi = true;
				}
			} elseif ($loop_edi = 'true') { // Esta dentro do LOOP
				$this->parseEEVDItem ( $edi_item );
			}
		}
	}
	
	/**
	 * Funcao que faz o parse de um array com o item EDI
	 *
	 * @param array $edi_array_value        	
	 * @return
	 *
	 */
	public function parseEEVDItem($edi_item) {
		switch ($edi_item [0]) { // Verifica qual o tipo de registro do EDI
			case '00' : // Registro tipo 00 - Cabecalho do Arquivo
				/* Valida o registro do Tipo 00 */
				if (sizeof ( $edi_item ) == 10) { // Verifica se o registro tem 10 campos
					/* Index 0: 2 caracteres numericos - Tipo de Registro - 00 */
					if ($edi_item [0] != '00') {
						return (false);
					}
					/* Index 1: 9 caracteres numericos - Num Filiacao da matriz ou gruop comercial */
					if ((strlen ( ( string ) $edi_item [1] ) != 9) || (! ctype_digit ( $edi_item [1] ))) {
						return (false);
					}
					/* Index 2: 8 caracteres numericos - Data da emissao */
					if ((strlen ( ( string ) $edi_item [2] ) != 8) || (! ctype_digit ( $edi_item [2] ))) {
						return (false);
					}
					/* Index 3: 8 caracteres numericos - Data de movimento */
					if ((strlen ( ( string ) $edi_item [3] ) != 8) || (! ctype_digit ( $edi_item [3] ))) {
						return (false);
					}
					/* Index 4: 39 caracteres Alfanumericos - 'Movimentacao Diaria - Cartoes de Debito' */
					if (mb_strtolower ( (trim ( ( string ) $edi_item [4] )) ) != mb_strtolower ( 'Movimentacao diaria - Cartoes de Debito' )) {
						return (false);
					}
					/* Index 5: 8 caracteres Alfanumericos - 'Redecard' ou 'Rede' */
					if (((mb_strtolower ( trim ( ( string ) $edi_item [5] ) )) != mb_strtolower ( 'Redecard' )) && (((mb_strtolower ( trim ( ( string ) $edi_item [5] ) )) != mb_strtolower ( 'Rede' )))) {
						return (false);
					}
					/* Index 6: 26 caracteres Alfanumericos - Nome comercial do Estabelecimento */
					if ((strlen ( ( string ) $edi_item [6] ) != 26) || (! ctype_alnum ( trim ( $string = preg_replace ( '/\s+/', '', $edi_item [6] ) ) ))) {
						return (false);
					}
					/* Index 7: 6 caracteres numericos - Sequencia do movimento */
					if ((strlen ( ( string ) $edi_item [7] ) != 6) || (! ctype_digit ( $edi_item [7] ))) {
						return (false);
					}
					/* Index 8: 15 caracteres Alfanumericos - Tipo de processamento - 'DIARIO' ou 'REPROCESSAMENTO' */
					if (((trim ( ( string ) $edi_item [8] )) != 'DIARIO') && (((trim ( ( string ) $edi_item [8] )) != 'REPROCESSAMENTO'))) {
						return (false);
					}
					/* Index 9: 20 caracteres Alfanumericos - 'V1.04 - 07/10 - EEVD' */
					if ((trim ( ( string ) $edi_item [9] )) != 'V1.04 - 07/10 - EEVD') {
						return (false);
					}
				} else { // O registro nao tem 10 itens - Invalido
					return (false);
					break;
				}
				// CAMPOS VALIDADOS - EXECUTA ACOES
				echo 'CAMPO 00 - VALIDADO<br>';
				return (true);
				break;
			case '01' : // Registro tipo 01 - Resumo de vendas
				/* Valida o registro do Tipo 01 - 14 campos */
				if (sizeof ( $edi_item ) == 14) { // Verifica se o registro tem 14 campos
					/* Index 0: 2 caracteres numericos - Registro tipo '01' */
					if ($edi_item [0] != '01') {
						return (false);
					}
					/* Index 1: 9 caracteres numericos - Numero de filiacao do Ponto de Venda */
					if ((strlen ( ( string ) $edi_item [1] ) != 9) || (! ctype_digit ( $edi_item [1] ))) {
						return (false);
					}
					/* Index 2: 8 caracteres numericos - Data de Credito - Sera mostrado '0' quando for pre datado */
					if ((strlen ( ( string ) $edi_item [2] ) != 8) || (! ctype_digit ( $edi_item [2] ))) {
						return (false);
					}
					/* Index 3: 8 caracteres numericos - Data do Resumo de Vendas */
					if ((strlen ( ( string ) $edi_item [3] ) != 8) || (! ctype_digit ( $edi_item [3] ))) {
						return (false);
					}
					/* Index 4: 9 caracteres numericos - Numero do Resumo de Vendas */
					if ((strlen ( ( string ) $edi_item [4] ) != 9) || (! ctype_digit ( $edi_item [4] ))) {
						return (false);
					}
					/* Index 5: 6 caracteres numericos - Quantidade de Comprovantes de Vendas */
					if ((strlen ( ( string ) $edi_item [5] ) != 6) || (! ctype_digit ( $edi_item [5] ))) {
						return (false);
					}
					/* Index 6: 15 caracteres numericos - Valor Bruto */
					if ((strlen ( ( string ) $edi_item [6] ) != 15) || (! ctype_digit ( $edi_item [6] ))) {
						return (false);
					}
					/* Index 7: 15 caracteres numericos - Valor Desconto */
					if ((strlen ( ( string ) $edi_item [7] ) != 15) || (! ctype_digit ( $edi_item [7] ))) {
						return (false);
					}
					/* Index 8: 15 caracteres numericos - Valor Liquido */
					if ((strlen ( ( string ) $edi_item [8] ) != 15) || (! ctype_digit ( $edi_item [8] ))) {
						return (false);
					}
					/* Index 9: 1 caractere alfabetico - 'D': Debito a vista, 'P': Pre-datado */
					if (((trim ( ( string ) $edi_item [9] )) != 'D') && (((trim ( ( string ) $edi_item [9] )) != 'P'))) {
						return (false);
					}
					/* Index 10: 3 caracteres numericos - Codigo do Banco */
					if ((strlen ( ( string ) $edi_item [10] ) != 3) || (! ctype_digit ( $edi_item [10] ))) {
						return (false);
					}
					/* Index 11: 6 caracteres numericos - Numero da Agencia */
					if ((strlen ( ( string ) $edi_item [11] ) != 6) || (! ctype_digit ( $edi_item [11] ))) {
						return (false);
					}
					/* Index 12: 11 caracteres numericos - Numero da Conta */
					if ((strlen ( ( string ) $edi_item [12] ) != 11) || (! ctype_digit ( $edi_item [12] ))) {
						return (false);
					}
					/*
					 * Index 13: 1 caractere alfanumerico - Bandeira do cartao.
					 * '1': Maestro, '3': Visa Electron, '4': Cabal, '9': Sicredi, 'H': Hipercard
					 */
					if (((trim ( ( string ) $edi_item [13] )) != '1') && (((trim ( ( string ) $edi_item [13] )) != '3')) && (((trim ( ( string ) $edi_item [13] )) != '4')) && (((trim ( ( string ) $edi_item [13] )) != '9')) && (((trim ( ( string ) $edi_item [13] )) != 'H'))) {
						return (false);
					}
				} else { // O registro nao tem 10 itens - Invalido
					return (false);
					break;
				}
				// CAMPOS VALIDADOS - EXECUTA ACOES
				echo 'CAMPO 01 - VALIDADO<br>';
				return (true);
				break;
			case '02' : // Registro tipo 02 - Total do Ponto de Venda
				/* Valida o registro do Tipo 02 */
				if (sizeof ( $edi_item ) == 10) { // Verifica se o registro tem 10 campos
					/* Index 0: 2 caracteres numericos - Tipo de Registro - 02 */
					if ($edi_item [0] != '02') {
						echo 'index0';
						return (false);
					}
					/* Index 1: 9 caracteres numericos - Num Filiacao da matriz */
					if ((strlen ( ( string ) $edi_item [1] ) != 9) || (! ctype_digit ( $edi_item [1] ))) {
						echo 'index1';
						return (false);
					}
					/* Index 2: 3 caracteres numericos - Quantidade de resumos de vendas acatados */
					if ((strlen ( ( string ) $edi_item [2] ) != 3) || (! ctype_digit ( $edi_item [2] ))) {
						echo 'index2';
						return (false);
					}
					/* Index 3: 6 caracteres numericos - Quantidade de comprovantes de vendas */
					if ((strlen ( ( string ) $edi_item [3] ) != 6) || (! ctype_digit ( $edi_item [3] ))) {
						echo 'index3';
						return (false);
					}
					/* Index 4: 15 caracteres numericos - Total Bruto */
					/* Index 5: 15 caracteres numericos - Total Desconto */
					/* Index 6: 15 caracteres numericos - Total Liquido */
					/* Index 7: 15 caracteres numericos - Valor bruto pre-datado */
					/* Index 8: 15 caracteres numericos - Desconto pre-datado */
					/* Index 9: 15 caracteres numericos - Liquido Pre-datado */
					for($i = 4; $i < 10; $i ++) {
						$string_edi = '';
						$string_edi = ( string ) preg_replace ( '/[^A-Za-z0-9 _\-\+\&]/', '', $edi_item [$i] );
						if ((strlen ( $string_edi ) != 15) || (! ctype_digit ( $string_edi ))) {
							echo "index$i";
							var_dump ( $string_edi );
							echo (ctype_digit ( $string_edi ));
							return (false);
						}
					}
					
					/* PASSOU POR TODAS AS VALIDACOES */
				} else { // O registro nao tem 10 itens - Invalido
					return (false);
					break;
				}
				// CAMPOS VALIDADOS - EXECUTA ACOES
				echo 'CAMPO 02 - VALIDADO<br>';
				return (true);
				break;
			
			case '03' : // Registro tipo 03 - Total da Matriz
				/* Valida o registro do Tipo 03 */
				if (sizeof ( $edi_item ) == 10) { // Verifica se o registro tem 10 campos
					/* Index 0: 2 caracteres numericos - Tipo de Registro - 03 */
					if ($edi_item [0] != '03') {
						return (false);
					}
					/* Index 1: 9 caracteres numericos - Numero da Filiacao da Matriz */
					if ((strlen ( ( string ) $edi_item [1] ) != 9) || (! ctype_digit ( $edi_item [1] ))) {
						echo 'index1';
						return (false);
					}
					/* Index 2: 3 caracteres numericos - Quantidade de resumos de vendas acatados */
					if ((strlen ( ( string ) $edi_item [2] ) != 3) || (! ctype_digit ( $edi_item [2] ))) {
						echo 'index2';
						return (false);
					}
					/* Index 3: 6 caracteres numericos - Quantidade de comprovantes de vendas */
					if ((strlen ( ( string ) $edi_item [3] ) != 6) || (! ctype_digit ( $edi_item [3] ))) {
						echo 'index3';
						return (false);
					}
					/* Index 4: 15 caracteres numericos - Total Bruto */
					/* Index 5: 15 caracteres numericos - Total Desconto */
					/* Index 6: 15 caracteres numericos - Total Liquido */
					/* Index 7: 15 caracteres numericos - Valor bruto pre-datado */
					/* Index 8: 15 caracteres numericos - Desconto pre-datado */
					/* Index 9: 15 caracteres numericos - Liquido Pre-datado */
					for($i = 4; $i < 10; $i ++) {
						$string_edi = '';
						$string_edi = ( string ) preg_replace ( '/[^A-Za-z0-9 _\-\+\&]/', '', $edi_item [$i] );
						if ((strlen ( $string_edi ) != 15) || (! ctype_digit ( $string_edi ))) {
							echo "index$i";
							var_dump ( $string_edi );
							echo (ctype_digit ( $string_edi ));
							return (false);
						}
					}
					
					/* PASSOU POR TODAS AS VALIDACOES */
				} else { // O registro nao tem 10 itens - Invalido
					return (false);
					break;
				}
				// CAMPOS VALIDADOS - EXECUTA ACOES
				echo 'CAMPO 03 - VALIDADO<br>';
				return (true);
				break;
			
			case '04' : // Registro tipo 04 - Total do arquivo
				/* Valida o registro do Tipo 04 */
				if (sizeof ( $edi_item ) == 11) { // Verifica se o registro tem 11 campos
					/* Index 0: 2 caracteres numericos - Tipo de Registro - 04 */
					if ($edi_item [0] != '04') {
						return (false);
					}
					/* Index 1: 9 caracteres numericos - Numero da Filiacao da Matriz */
					if ((strlen ( ( string ) $edi_item [1] ) != 9) || (! ctype_digit ( $edi_item [1] ))) {
						echo 'index1';
						return (false);
					}
					/* Index 2: 6 caracteres numericos - Quantidade de resumos de vendas */
					if ((strlen ( ( string ) $edi_item [2] ) != 6) || (! ctype_digit ( $edi_item [2] ))) {
						echo 'index2';
						return (false);
					}
					/* Index 3: 6 caracteres numericos - Quantidade de comprovantes de vendas */
					if ((strlen ( ( string ) $edi_item [3] ) != 6) || (! ctype_digit ( $edi_item [3] ))) {
						echo 'index3';
						return (false);
					}
					/* Index 4: 15 caracteres numericos - Total Bruto */
					/* Index 5: 15 caracteres numericos - Total Desconto */
					/* Index 6: 15 caracteres numericos - Total Liquido */
					/* Index 7: 15 caracteres numericos - Valor bruto pre-datado */
					/* Index 8: 15 caracteres numericos - Desconto pre-datado */
					/* Index 9: 15 caracteres numericos - Liquido Pre-datado */
					for($i = 4; $i < 10; $i ++) {
						$string_edi = '';
						$string_edi = ( string ) preg_replace ( '/[^A-Za-z0-9 _\-\+\&]/', '', $edi_item [$i] );
						if ((strlen ( $string_edi ) != 15) || (! ctype_digit ( $string_edi ))) {
							echo "index$i";
							var_dump ( $string_edi );
							echo (ctype_digit ( $string_edi ));
							return (false);
						}
					}
					/* Index 10: 6 caracteres numericos - Total de registros no arquivo */
					$string_edi = '';
					$string_edi = ( string ) preg_replace ( '/[^A-Za-z0-9 _\-\+\&]/', '', $edi_item [10] );
					if ((strlen ( $string_edi ) != 6) || (! ctype_digit ( $string_edi ))) {
						echo 'index10';
						return (false);
					}
					
					/* PASSOU POR TODAS AS VALIDACOES */
				} else { // O registro nao tem 10 itens - Invalido
					return (false);
					break;
				}
				// CAMPOS VALIDADOS - EXECUTA ACOES
				echo 'CAMPO 04 - VALIDADO<br>';
				return (true);
				break;
			
			case '05' : // Registro tipo 05 - Detalhamento dos comprovantes de venda
				/* Valida o registro do Tipo 05 */
				if (sizeof ( $edi_item ) == 19) { // Verifica se o registro tem 19 campos
					/* Index 0: 2 caracteres numericos - Tipo de Registro - 05 */
					if ($edi_item [0] != '05') {
						return (false);
					}
					/* Index 1: 9 caracteres numericos - Numero da Filiacao da Matriz */
					/* Index 2: 9 caracteres numericos - Numero do resumo de vendas */
					for($i = 1; $i < 3; $i ++) {
						$string_edi = '';
						$string_edi = ( string ) preg_replace ( '/[^A-Za-z0-9 _\-\+\&]/', '', $edi_item [$i] );
						if ((strlen ( $string_edi ) != 9) || (! ctype_digit ( $string_edi ))) {
							echo "index$i";
							var_dump ( $string_edi );
							return (false);
						}
					}
					/* Index 3: 8 caracteres numericos - Data do Comprovante de Venda */
					if ((strlen ( ( string ) $edi_item [3] ) != 8) || (! ctype_digit ( $edi_item [3] ))) {
						echo 'index3';
						return (false);
					}
					/* Index 4: 15 caracteres numericos - Total Bruto */
					/* Index 5: 15 caracteres numericos - Total Desconto */
					/* Index 6: 15 caracteres numericos - Total Liquido */
					for($i = 4; $i < 7; $i ++) {
						$string_edi = '';
						$string_edi = ( string ) preg_replace ( '/[^A-Za-z0-9 _\-\+\&]/', '', $edi_item [$i] );
						if ((strlen ( $string_edi ) != 15) || (! ctype_digit ( $string_edi ))) {
							echo "index$i";
							var_dump ( $string_edi );
							echo (ctype_digit ( $string_edi ));
							return (false);
						}
					}
					/* Index 7: 19 caracteres alfanumericos - Numero do Cartao - Pode conter * e espacos */
					if (strlen ( ( string ) $edi_item [7] ) != 19) {
						echo 'index7';
						return (false);
					}
					/* Index 8: 1 caractere alfanumerico - Tipo de Transacao */
					if ((strlen ( ( string ) $edi_item [8] ) != 1) || (! ctype_alnum ( $edi_item [8] ))) {
						echo 'index8';
						return (false);
					}
					/* Index 9: 12 caracteres numericos - Numero do Comprovante de Venda */
					if ((strlen ( ( string ) $edi_item [9] ) != 12) || (! ctype_digit ( $edi_item [9] ))) {
						echo 'index9';
						return (false);
					}
					/* Index 10: 8 caracteres numericos - Data do Credito */
					if ((strlen ( ( string ) $edi_item [10] ) != 8) || (! ctype_digit ( $edi_item [10] ))) {
						echo 'index10';
						return (false);
					}
					/* Index 11: 2 caracteres numericos - Status da Transacao - '01': acatada */
					if ($edi_item [11] != '01') {
						echo 'index11';
						return (false);
					}
					/* Index 12: 6 caracteres numericos - Hora da Transacao HHMMSS */
					if ((strlen ( ( string ) $edi_item [12] ) != 6) || (! ctype_digit ( $edi_item [12] ))) {
						echo 'index12';
						return (false);
					}
					/* Index 13: 8 caracteres alfanumericos - Numero do Terminal */
					if ((strlen ( ( string ) $edi_item [13] ) != 8) || (! ctype_alnum ( $edi_item [13] ))) {
						echo 'index13';
						return (false);
					}
					/*
					 * Index 14: 2 caracteres numericos - Tipo da Captura
					 * '1': Manual, '2':POS, '3':PDV, '4':TO, '5':Internet, '6': Leitor de Trilha, '9': Outros
					 */
					$array_valid = array (
							1,
							2,
							3,
							4,
							5,
							6,
							9 
					);
					// if ((strlen ( ( string ) $edi_item [14] ) != 2) || (! ctype_digit ( trim ( $edi_item [14] ) ))) {
					if (! in_array ( ( int ) trim ( $edi_item [14] ), $array_valid )) {
						echo 'index14';
						return (false);
					}
					/* Index 15: 5 caracteres numericos - Reservado para Rede */
					if ((strlen ( ( string ) $edi_item [15] ) != 5) || (! ctype_digit ( $edi_item [15] ))) {
						echo 'index15';
						return (false);
					}
					/* Index 16: 15 caracteres numericos - Valor da compra - Para o compre e saque */
					/* Index 17: 15 caracteres numericos - Valor do saque - Para o compre e saque */
					for($i = 16; $i < 18; $i ++) {
						$string_edi = '';
						$string_edi = ( string ) preg_replace ( '/[^A-Za-z0-9 _\-\+\&]/', '', $edi_item [$i] );
						if ((strlen ( $string_edi ) != 15) || (! ctype_digit ( $string_edi ))) {
							echo "index$i";
							var_dump ( $string_edi );
							echo (ctype_digit ( $string_edi ));
							return (false);
						}
					}
					/*
					 * Index 18: 1 caractere alfanumerico - Bandeira do cartao.
					 * '1': Maestro, '3': Visa Electron, '4': Cabal, '9': Sicredi, 'H': Hipercard
					 */
					if (((trim ( ( string ) $edi_item [18] )) != '1') && (((trim ( ( string ) $edi_item [18] )) != '3')) && (((trim ( ( string ) $edi_item [18] )) != '4')) && (((trim ( ( string ) $edi_item [18] )) != '9')) && (((trim ( ( string ) $edi_item [18] )) != 'H'))) {
						var_dump ( $edi_item [18] );
						return (false);
					}
					/* PASSOU POR TODAS AS VALIDACOES */
				} else { // O registro nao tem 10 itens - Invalido
					return (false);
					break;
				}
				// CAMPOS VALIDADOS - EXECUTA ACOES
				echo 'CAMPO 05 - VALIDADO<br>';
				return (true);
				break;
			
			case '08' : // Registro tipo 08 - Desagendamento de vendas pre-datadas (total ou parcial)
				/* Valida o registro do Tipo 08 */
				if (sizeof ( $edi_item ) == 11) { // Verifica se o registro tem 11 campos
					/* Index 0: 2 caracteres numericos - Tipo de Registro - 08 */
					if ($edi_item [0] != '08') {
						echo 'index0';
						return (false);
					}
					/* Index 1: 9 caracteres numericos - Numero de filiacao do ponto de vendas */
					/* Index 2: 9 caracteres numericos - Numero do resumo de vendas */
					/* Index 3: 8 caracteres numericos - Data do comprovante de venda DDMMAAAA */
					/* Index 4: 12 caracteres numericos - Numero do comprovante de venda (NSU) */
					/* Index 5: 15 caracteres numericos - Valor Bruto do CV */
					/* Index 6: 15 caracteres numericos - Valor do cancelamento */
					/*
					 * Index 7: 2 caracteres numericos - Motivo do cancelamento
					 * '00': cancelamento, '01': chargeback
					 */
					/* Index 8: 8 caracteres numericos - Data do credito */
					/* Index 9: 15 caracteres numericos - Novo valor de credito */
					/*
					 * Index 10: 1 caractere alfanumerico - Tipo de transacao
					 * 'V': Cartao de debito a vista (Redeshop/Maestro), 'C': CDC, 'T': Trishop,
					 * 'S': Construcard, 'E': VisaElectron, 'B': Cabal, 'O'; VisaElectron Pre-Datado
					 */
					
					/* PASSOU POR TODAS AS VALIDACOES */
				} else { // O registro nao tem 10 itens - Invalido
					return (false);
					break;
				}
				// CAMPOS VALIDADOS - EXECUTA ACOES
				echo 'CAMPO 08 - VALIDADO<br>';
				return (true);
				break;
			
			case '09' : // Registro tipo 09 - Transacoes pre-datadas liquidadas
				/* Valida o registro do Tipo 09 */
				if (sizeof ( $edi_item ) == 10) { // Verifica se o registro tem 10 campos
					/* Index 0: 2 caracteres numericos - Tipo de Registro - 09 */
					if ($edi_item [0] != '09') {
						echo 'index0';
						return (false);
					}
					
					/* PASSOU POR TODAS AS VALIDACOES */
				} else { // O registro nao tem 10 itens - Invalido
					return (false);
					break;
				}
				// CAMPOS VALIDADOS - EXECUTA ACOES
				echo 'CAMPO 09 - VALIDADO<br>';
				return (true);
				break;
			
			case '11' : // Registro tipo 10 - Ajustes NET
				/* Valida o registro do Tipo 10 */
				if (sizeof ( $edi_item ) == 29) { // Verifica se o registro tem 29 campos
					/* Index 0: 2 caracteres numericos - Tipo de Registro - 11 */
					if ($edi_item [0] != '11') {
						echo 'index0';
						return (false);
					}
					
					/* PASSOU POR TODAS AS VALIDACOES */
				} else { // O registro nao tem 10 itens - Invalido
					return (false);
					break;
				}
				// CAMPOS VALIDADOS - EXECUTA ACOES
				echo 'CAMPO 11 - VALIDADO<br>';
				return (true);
				break;
			
			case '12' : // Registro tipo 12 - Request
				/* Valida o registro do Tipo 12 */
				if (sizeof ( $edi_item ) == 13) { // Verifica se o registro tem 13 campos
					/* Index 0: 2 caracteres numericos - Tipo de Registro - 13 */
					if ($edi_item [0] != '13') {
						echo 'index0';
						return (false);
					}
					
					/* PASSOU POR TODAS AS VALIDACOES */
				} else { // O registro nao tem 13 itens - Invalido
					return (false);
					break;
				}
				// CAMPOS VALIDADOS - EXECUTA ACOES
				echo 'CAMPO 12 - VALIDADO<br>';
				return (true);
				break;
			
			default :
				return (false); // IGNORA O SWITCH e RETORNA PARA O LOOP
		}
	}
	
	/**
	 * Funcao que faz parse do EDI tipo EEVC
	 *
	 * @param array $edi_array
	 *        	- Array com as linhas do arquivo EDI
	 */
	public function parseEEVC($edi_array) {
	}
}