 <?php

 
//error_reporting(E_ALL);
 

//ini_set("display_errors", 1);
		
		
		
          //Variaveis de POST, Alterar somente se necessário
          //====================================================
       $consultor =          $_POST['consultor'];
          $telconsultor =        $_POST['telconsultor'];
          $conheceu = $_POST['conheceu'];
          $nome = $_POST['nome'];
          $data =      $_POST['data'];  
          $cpf =      $_POST['cpf'];   
          $mae =      $_POST['mae'];  
          $cep =      $_POST['cep'];  
          $rua =      $_POST['rua'];  
          $bairro =      $_POST['bairro'];  
          $cidade =      $_POST['cidade'];  
          $estado =      $_POST['uf'];  
          $numero =      $_POST['numero'];  
          $complemento =      $_POST['complemento'];  
          $telefone =      $_POST['telefone'];  
          $whatsapp =      $_POST['whatsapp'];  
          $nometel1 =      $_POST['nometel1'];  
          $nometel2 =      $_POST['nometel2'];  
          $empresa =      $_POST['empresa'];  
          $telempresa =      $_POST['telempresa'];  
          $cargos =      $_POST['cargos'];  
          $tempo =      $_POST['tempo'];  
          $salario =      $_POST['salario'];  
          $valores =      $_POST['valores'];  
          $cred1 =      $_POST['cred1'];  
          $cred2 =      $_POST['cred2'];  
          $cred3 =      $_POST['cred3'];  
          $cred4 =      $_POST['cred4'];  
          $carfrente =      $_FILES['carfrente'];  
          $carnum =      $_POST['carnum'];  
          $cartras =      $_FILES['cartras'];  
          $carseg =      $_POST['carseg'];  
          $dia =      $_POST['dia'];  
          $forma =      $_POST['forma'];  
          $receber =      $_POST['receber'];  
          $banco =      $_POST['banco'];  
          $agencia =      $_POST['agencia'];  
          $conta =      $_POST['conta'];  
          $digito =      $_POST['digito'];    
          $renda =      $_POST['renda'];  
          $residencia =      $_POST['residencia'];  
          $fotocpf =      $_POST['fotocpf'];  
          $rgfrente =      $_POST['rgfrente'];  
          $rgtras =      $_POST['rgtras'];  
          $email =      $_POST['email'];  
          $confemail =      $_POST['confemail'];    
          //====================================================

		  
		
		
		  
		  $body = utf8_decode("
    <table class='table'>
  <thead>
    <tr>
      <th scope='col'>Dados</th>
      <th scope='col'>Respostas</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope='row'>1</th>
      <td>Qual o Consultor ? :</td>
      <td> $consultor </td>
    </tr>
    <tr>
      <th scope='row'>2</th>
      <td>Número do Consultor :</td>
      <td> $telconsultor </td>
    </tr>
    <tr>
      <th scope='row'>3</th>
      <td>Como conheceu ? : </td>
      <td> $conheceu  </td>
    </tr>
    <tr>
      <th scope='row'>4</th>
      <td>Nome Completo : </td>
      <td> $nome </td>
    </tr>
    <tr>
      <th scope='row'>5</th>
      <td>Data de Nascimento : </td>
      <td> $data </td>
    </tr>
    <tr>
      <th scope='row'>6</th>
      <td>CPF : </td>
      <td> $cpf </td>
    </tr>
    <tr>
      <th scope='row'>7</th>
      <td>Nome da Mãe : </td>
      <td> $mae </td>
    </tr>
    <tr>
      <th scope='row'>8</th>
      <td>CEP : </td>
      <td> $cep </td>
    </tr>
    <tr>
      <th scope='row'>9</th>
      <td>Rua : </td>
      <td> $rua </td>
    </tr>
    <tr>
      <th scope='row'>10</th>
      <td>Bairro : </td>
      <td> $bairro </td>
    </tr>
    <tr>
      <th scope='row'>11</th>
      <td>Estado : </td>
      <td> $estado </td>
    </tr>
    <tr>
      <th scope='row'>12</th>
      <td>Número : </td>
      <td> $numero </td>
    </tr>
    <tr>
      <th scope='row'>13</th>
      <td>Complemento : </td>
      <td> $complemento </td>
    </tr>
    <tr>
      <th scope='row'>14</th>
      <td>Telefone Pessoal : </td>
      <td> $telefone </td>
    </tr>
    <tr>
      <th scope='row'>15</th>
      <td>Whatsapp : </td>
      <td> $whatsapp </td>
    </tr>
    <tr>
      <th scope='row'>16</th>
      <td>Nome e Telefone de referência 1 : </td>
      <td> $nometel1 </td>
    </tr>
    <tr>
      <th scope='row'>17</th>
      <td>Nome e Telefone de referência 2 : </td>
      <td> $nometel2 </td>
    </tr>
    <tr>
      <th scope='row'>18</th>
      <td>Empresa na qual trabalha : </td>
      <td> $empresa </td>
    </tr>
    <tr>
      <th scope='row'>19</th>
      <td>Víngulo empregatício : </td>
      <td> $cargos </td>
    </tr>
    <tr>
      <th scope='row'>20</th>
      <td>Tempo de trabalho na empresa : </td>
      <td> $tempo </td>
    </tr>
    <tr>
      <th scope='row'>21</th>
      <td>Salário : </td>
      <td> $salario </td>
    </tr>
    <tr>
      <th scope='row'>22</th>
      <td>VALOR PEDIDO : </td>
      <td> $valores </td>
    </tr>");
	
	
	if($valores==="300"){
		
		
    $body .=utf8_decode("<tr>
      <th scope='row'>23</th>
      <td>Parcelamento de 300 R$ : </td>
      <td> $cred1 </td>
    </tr>");
	
	}
	
	if($valores==="500"){
		
    $body .= utf8_decode("<tr>
      <th scope='row'>24</th>
      <td>Parcelamento de 500 R$ : </td>
      <td> $cred2 </td>
    </tr>");
	}
	
	if($valores==="800"){
		
    $body .=utf8_decode("<tr>
      <th scope='row'>25</th>
      <td>Parcelamento de 800 R$ : </td>
      <td> $cred3 </td>
    </tr>");
	}
	
	if($valores==="1000"){
		
    $body .=utf8_decode("
    <tr>
      <th scope='row'>26</th>
      <td>Parcelamento de 1.000 R$ : </td>
      <td> $cred4 </td>
    </tr>");
	
	}
	
	
	
	
	
	
	
     $body .=utf8_decode("
    <tr>
      <th scope='row'>28</th>
      <td>Número do Cartão :</td>
      <td> $carnum </td>
    </tr>
   
    <tr>
      <th scope='row'>30</th>
      <td>Código de segurança : </td>
      <td> $carseg </td>
    </tr>
    <tr>
      <th scope='row'>31</th>
      <td>Dia de vencimento : </td>
      <td> $dia </td>
    </tr>
    <tr>
      <th scope='row'>32</th>
      <td>Forma de pagamento : </td>
      <td> $forma </td>
    </tr>
    <tr>
      <th scope='row'>33</th>
      <td>Forma de receber : </td>
      <td> $receber </td>
    </tr>
    <tr>
      <th scope='row'>33</th>
      <td>Banco : </td>
      <td> $banco </td>
    </tr>
    <tr>
      <th scope='row'>33</th>
      <td>Agência : </td>
      <td> $agencia </td>
    </tr>
    <tr>
      <th scope='row'>33</th>
      <td>Conta : </td>
      <td> $conta </td>
    </tr>
    <tr>
      <th scope='row'>33</th>
      <td>Digito : </td>
      <td> $digito </td>
    </tr>
    <tr>
      <th scope='row'>39</th>
      <td>Quer assinar por E-mail ? : </td>
      <td> $email </td>
    </tr>
    <tr>
      <th scope='row'>40</th>
      <td>Enviar para o e-mail : </td>
      <td> $confemail </td>
    </tr>
    <tbody>
    </table>
    ");
    
	  
	
	include_once("PHPMailer/class.phpmailer.php");
	
		
		$destinatarios = "contato@eassessocred.com.br";
		
        $nomeDestinatario ="contato@eassessocred.com.br";
        /* ## CAMPO 3 ## Informe o endereço de e-mail completo criado em sua hospedagem, que será o remetente da mensagem. Como por exemplo teste@seudominio */
        $usuario = 'enviar@formularioeassessocred.online';
        /* ## CAMPO 4 ## Informe a senha do endereço de e-mail acima */
        $senha = 'pr4sp2r3d1d2';
        /*abaixo as veriaveis principais, que devem conter em seu formulario*/
        $nomeRemetente = "enviar@formularioeassessocred.online";
        $assunto ="Formulario E-assessocred";
		
		
        //$_POST['mensagem'] = nl2br($mensagem);
        $To = $destinatarios;
        $Subject = $assunto;
		$Host = 'smtp.hostinger.com.br';
        $Username = $usuario;
        $Password = $senha;
        $Port = "587";
        $mail = new PHPMailer();
		
		
		$mail->isHTML(true); 
        $mail->IsSMTP(); // telling the class to use SMTP
        $mail->Host = $Host; // SMTP server
        $mail->SMTPDebug = 0; // enables SMTP debug information (for testing)
        $mail->SMTPAuth = true; // enable SMTP authentication
        $mail->Port = $Port; // set the SMTP port for the service server
	
        $mail->Username = $Username; // account username
        $mail->Password = $Password; // account password
		
	
        $mail->SetFrom($usuario, $nomeDestinatario);
		
        $mail->Subject = $Subject;
		
		
		
		
        $mail->MsgHTML($body);
        $mail->AddAddress($To, "");
        //$mail->AddBCC("italofranklin2@gmail.com", "Italo");
		
		
//anexo 1
	if(isset($_FILES['carfrente']) && $_FILES['carfrente']['error'] == UPLOAD_ERR_OK) {
		$mail->AddAttachment($_FILES['carfrente']['tmp_name'],$_FILES['carfrente']['name']);
	}

	//anexo 2
	if(isset($_FILES['cartras']) && $_FILES['cartras']['error'] == UPLOAD_ERR_OK) {
		$mail->AddAttachment($_FILES['cartras']['tmp_name'],$_FILES['cartras']['name']);
	}
	
	

	
	//anexo 3
	if(isset($_FILES['renda']) && $_FILES['renda']['error'] == UPLOAD_ERR_OK) {
		$mail->AddAttachment($_FILES['renda']['tmp_name'],$_FILES['renda']['name']);
	}
	
	
	//anexo 4
	if(isset($_FILES['residencia']) && $_FILES['residencia']['error'] == UPLOAD_ERR_OK) {
		$mail->AddAttachment($_FILES['residencia']['tmp_name'],$_FILES['residencia']['name']);
	}

	//anexo5
	if(isset($_FILES['fotocpf']) && $_FILES['fotocpf']['error'] == UPLOAD_ERR_OK) {
		$mail->AddAttachment($_FILES['fotocpf']['tmp_name'],$_FILES['fotocpf']['name']);
	}
	
	
	//anexo6
	if(isset($_FILES['rgfrente']) && $_FILES['rgfrente']['error'] == UPLOAD_ERR_OK) {
		$mail->AddAttachment($_FILES['rgfrente']['tmp_name'],$_FILES['rgfrente']['name']);
	}
	
	
	
	
	//anexo 7

		if(isset($_FILES['rgtras']) && $_FILES['rgtras']['error'] == UPLOAD_ERR_OK) {
		$mail->AddAttachment($_FILES['rgtras']['tmp_name'],$_FILES['rgtras']['name']);
	}
	
	
	

	
		
        if($mail->Send()){
              echo "<script type='text/javascript'>alert('Obrigado! Em breve entraremos em contato!');window.location='index.php';</script>";
            }else{
             echo "<script type='text/javascript'>alert('Erro ao enviar!');window.location='index.php';</script>";
         }
		 
		 


 ?>