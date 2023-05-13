<!doctype html>
<html lang="en">

<head>
    <!--  meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, user-scalable=no, 
initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css" integrity="sha384-PDle/QlgIONtM1aqA2Qemk5gPOE7wFq8+Em+G/hmo5Iq0CCmYZLv3fVRDJ4MMwEA" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Formulário</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        function limpa_formulário_cep() {
            //Limpa valores do formulário de cep.
            document.getElementById('rua').value = ("");
            document.getElementById('bairro').value = ("");
            document.getElementById('cidade').value = ("");
            document.getElementById('uf').value = ("");
            document.getElementById('ibge').value = ("");
        }

        function meu_callback(conteudo) {
            if (!("erro" in conteudo)) {
                //Atualiza os campos com os valores.
                document.getElementById('rua').value = (conteudo.logradouro);
                document.getElementById('bairro').value = (conteudo.bairro);
                document.getElementById('cidade').value = (conteudo.localidade);
                document.getElementById('uf').value = (conteudo.uf);
                document.getElementById('ibge').value = (conteudo.ibge);
            } //end if.
            else {
                //CEP não Encontrado.
                limpa_formulário_cep();
                alert("CEP não encontrado.");
            }
        }

        function pesquisacep(valor) {

            //Nova variável "cep" somente com dígitos.
            var cep = valor.replace(/\D/g, '');

            //Verifica se campo cep possui valor informado.
            if (cep != "") {

                //Expressão regular para validar o CEP.
                var validacep = /^[0-9]{8}$/;

                //Valida o formato do CEP.
                if (validacep.test(cep)) {

                    //Preenche os campos com "..." enquanto consulta webservice.
                    document.getElementById('rua').value = "...";
                    document.getElementById('bairro').value = "...";
                    document.getElementById('cidade').value = "...";
                    document.getElementById('uf').value = "...";
                    document.getElementById('ibge').value = "...";

                    //Cria um elemento javascript.
                    var script = document.createElement('script');

                    //Sincroniza com o callback.
                    script.src = 'https://viacep.com.br/ws/' + cep + '/json/?callback=meu_callback';

                    //Insere script no documento e carrega o conteúdo.
                    document.body.appendChild(script);

                } //end if.
                else {
                    //cep é inválido.
                    limpa_formulário_cep();
                    alert("Formato de CEP inválido.");
                }
            } //end if.
            else {
                //cep sem valor, limpa formulário.
                limpa_formulário_cep();
            }
        };

    </script>
</head>

<body>


    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-center">
                <img src="img/Logo_redes_sociais.png" width="100%" alt="">
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xs-offset-2">
                <!-- multistep form -->
                <form id="msform" class="form" action="form.php" enctype="multipart/form-data" method="POST" role="form">
                    <!-- progressbar -->
                    <ul id="progressbar">
                        <li class="active">Consultor</li>
                        <li>Dados pessoais</li>
                        <li>Endereço</li>
                        <li>Referência</li>
                        <li>Empresa</li>
                        <li>Valor e Dados</li>
                        <li>Pagamento</li>
                        <li>Documentos</li>
                        <li>E-mail</li>
                        <li>Finalizar</li>
                    </ul>
                    <!-- fieldsets -->
                    <fieldset>
                        <h2 class="fs-title">Consultor</h2>
                        <select name="consultor" id="soureces" class="custom-select sources" placeholder="Nome do consultor">
                            <option value="loja">Loja</option>
                            <option value="Rodrigo Rocha">Rodrigo Rocha</option>
                            <option value="Geraldo Lima">Geraldo Lima</option>
                            <option value="Pedro Luiz">Pedro Luiz</option>
                            <option value="Germano Soares">Germano Soares</option>
                            <option value="Aline dos Santos">Aline dos Santos</option>
                            <option value="Francisco Junior">Francisco Junior</option>
                            <option value="Pedro Henrique">Pedro Henrique</option>
                            <option value="Luiz Carlos">Luiz Carlos</option>
                            <option value="Luid De Alcântara">Luid De Alcântara</option>
                            <option value="Diego Brasil">Diego Brasil</option>
                        </select>
                        <div class="form-group">
                            <input type="text" class="form-control" id="telconsultor" name="telconsultor" placeholder="Telefone do consultor" tabindex="1">
                        </div>
                        <select name="conheceu" id="soureces" class="custom-select sources" placeholder="Como conheceu a empresa ?">
                            <option value="Loja">Panfletos</option>
                            <option value="Amigos">Amigos</option>
                            <option value="Internet">Internet</option>
                            <option value="Outros">Outros</option>
                        </select>

                        <input type="button" name="next" class="next action-button" value="Próxima" />

                    </fieldset>
                    <fieldset>
                        <h2 class="fs-title">Dados pessoais</h2>
                        <div id="contact-form"></div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="name" name="nome" placeholder="Seu nome completo" tabindex="1">
                        </div>
                        <div id="contact-form"></div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="data" name="data" placeholder="Data de nascimento" tabindex="1">
                        </div>
                        <div id="contact-form"></div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="cpf" name="cpf" placeholder="CPF" tabindex="1">
                        </div>
                        <div id="contact-form"></div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="mae" name="mae" placeholder="Nome completo da sua mãe" tabindex="1">
                        </div>
                        <input type="button" name="previous" class="previous action-button" value="Anterior" />
                        <input type="button" name="next" class="next action-button" value="Próxima" />
                    </fieldset>
                    <fieldset>
                        <h2 class="fs-title">Endereço</h2>



                        <input name="cep" type="text" id="cep" placeholder="CEP" value="" size="10" maxlength="9" onblur="pesquisacep(this.value);" /><br />
                        <input name="rua" type="text" id="rua" size="60" placeholder="Rua" /><br />
                        <input name="bairro" type="text" id="bairro" size="40" placeholder="Bairro" /><br />
                        <input name="cidade" type="text" id="cidade" size="40" placeholder="Cidade" /><br />
                        <input name="uf" type="text" id="uf" size="2" placeholder="Estado" /><br />
                        <div style="display:none;"><input name="ibge" type="text" id="ibge" size="8" placeholder="IBGE" /><br /></div>
                        <input name="numero" type="text" id="numero" size="8" placeholder="Número" /><br />
                        <input name="complemento" type="text" id="complemento" size="8" placeholder="Complemento" /><br />



                        <input type="button" name="previous" class="previous action-button" value="Anterior" />
                        <input type="button" name="next" class="next action-button" value="Próxima" />
                    </fieldset>
                    <fieldset>
                        <h2 class="fs-title">Referência</h2>
                        <div class="form-group">
                            <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Telefone/Celular" tabindex="1">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="whatsapp" name="whatsapp" placeholder="Whatsapp" tabindex="1">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="nometel1" name="nometel1" placeholder="Nome / Tel - Referência 1" tabindex="1">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="nometel2" name="nometel2" placeholder="Nome / Tel - Referência 1" tabindex="1">
                        </div>
                        <input type="button" name="previous" class="previous action-button" value="Anterior" />
                        <input type="button" name="next" class="next action-button" value="Próxima" />
                    </fieldset>
                    <fieldset>
                        <h2 class="fs-title">Empresa</h2>
                        <div class="form-group">
                            <input type="text" class="form-control" id="empresa" name="empresa" placeholder="Nome da empresa em que trabalha" tabindex="1">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="telempresa" name="telempresa" placeholder="Telefones da empresa" tabindex="1">
                        </div>
                        <select name="cargos" id="soureces" class="custom-select sources" placeholder="Qual o seu vínculo empregatício?">
                            <option value="Terceirizado">Terceirizado</option>
                            <option value="Temporário">Temporário</option>
                            <option value="Funcionário Público">Funcionário Público</option>
                            <option value="Autonomo">Autonomo</option>
                            <option value="Comissionado">Comissionado</option>
                            <option value="CLT">CLT</option>
                            <option value="Aposentado / Pensionista">Aposentado / Pensionista</option>
                        </select>
                        <select name="tempo" id="soureces" class="custom-select sources" placeholder="Quanto tempo trabalha na empresa?">
                            <option value="Entre - 1 mês e 6 meses">Entre - 1 mês e 6 meses</option>
                            <option value="Entre - 6 meses e 1 ano">Entre - 6 meses e 1 ano</option>
                            <option value="Mais de 1 ano">Mais de 1 ano</option>
                        </select>
                        <select name="salario" id="soureces" class="custom-select sources" placeholder="Qual o valor da sua renda mensal?">
                            <option value="Entre - R$ 600,00 e R$ 1.000,00">Entre - R$ 600,00 e R$ 1.000,00</option>
                            0 <option value="Entre - R$ 1.000,00 e R$ 1.500,00">Entre - R$ 1.000,00 e R$ 1.500,00</option>
                            <option value="Mais de R$ 1.500,00">Mais de R$ 1.500,00</option>
                        </select>
                        <input type="button" name="previous" class="previous action-button" value="Anterior" />
                        <input type="button" name="next" class="next action-button" value="Próxima" />
                    </fieldset>
                    <fieldset>
                        <h2 class="fs-title">Valor e Dados</h2>
                        <div class="row">
                            <div class="col-md-3 col-3">
                                <label>300 R$</label><input type="radio" id="300" name="valores" value="300">
                            </div>
                            <div class="col-md-3 col-3">
                                <label>500 R$</label><input type="radio" id="500" name="valores" value="500">
                            </div>
                            <div class="col-md-3 col-3">
                                <label>800 R$</label><input type="radio" id="800" name="valores" value="800">
                            </div>
                            <div class="col-md-3 col-3">
                                <label>1.000 R$</label><input type="radio" id="1000" name="valores" value="1000">
                            </div>
                        </div>
                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

                        <script>
                            $(document).ready(function() {
                                $("#300").click(function() {
                                    $("#comp").hide();
                                });
                                $("#500").click(function() {
                                    $("#comp").show();
                                });
                                $("#800").click(function() {
                                    $("#comp").show();
                                });
                                $("#1000").click(function() {
                                    $("#comp").show();
                                });

                                $("#300").click(function() {
                                    $("#cr1").show();
                                });
                                $("#300").click(function() {
                                    $("#cr2").hide();
                                });
                                $("#300").click(function() {
                                    $("#cr3").hide();
                                });
                                $("#300").click(function() {
                                    $("#cr4").hide();
                                });
                                $("#500").click(function() {
                                    $("#cr1").hide();
                                });
                                $("#500").click(function() {
                                    $("#cr2").show();
                                });
                                $("#500").click(function() {
                                    $("#cr3").hide();
                                });
                                $("#500").click(function() {
                                    $("#cr4").hide();
                                });
                                $("#800").click(function() {
                                    $("#cr1").hide();
                                });
                                $("#800").click(function() {
                                    $("#cr2").hide();
                                });
                                $("#800").click(function() {
                                    $("#cr3").show();
                                });
                                $("#800").click(function() {
                                    $("#cr4").hide();
                                });
                                $("#1000").click(function() {
                                    $("#cr1").hide();
                                });
                                $("#1000").click(function() {
                                    $("#cr2").hide();
                                });
                                $("#1000").click(function() {
                                    $("#cr3").hide();
                                });
                                $("#1000").click(function() {
                                    $("#cr4").show();
                                });
                            });

                        </script>
                        <style>
                            #comp,
                            #cr1,
                            #cr2,
                            #cr3,
                            #cr4 {
                                display: none;
                            }

                        </style>
                        <div id="cr1">
                            Crédito 1 - R$ 300,00
                            <select name="cred1" id="soureces" class="custom-select sources" placeholder="Quanto tempo trabalha na empresa?">
                                <option value="1 X R$ 332,90">1 X R$ 332,90</option>
                                <option value="2 X R$ 182,90">2 X R$ 182,90</option>
                                <option value="3 X R$ 132,90">3 X R$ 132,90</option>
                            </select>
                        </div>
                        <div id="cr2">
                            Crédito 2 - R$ 500,00
                            <select name="cred2" id="soureces" class="custom-select sources" placeholder="Quanto tempo trabalha na empresa?">
                                <option value="1 X R$ 332,90">1 X R$ 552,90</option>
                                <option value="2 X R$ 302,90">2 X R$ 302,90</option>
                                <option value="3 X R$ 222,90">3 X R$ 222,90</option>
                            </select>
                        </div>
                        <div id="cr3">
                            Crédito 3 - R$ 800,00
                            <select name="cred3" id="soureces" class="custom-select sources" placeholder="Quanto tempo trabalha na empresa?">
                                <option value="1 X R$ 332,90">1 X R$ 882,90</option>
                                <option value="2 X R$ 482,90">2 X R$ 482,90</option>
                                <option value="3 X R$ 352,90">3 X R$ 352,90</option>
                            </select>
                        </div>
                        <div id="cr4">
                            Crédito 4 - R$ 1.000,00
                            <select name="cred4" id="soureces" class="custom-select sources" placeholder="Quanto tempo trabalha na empresa?">
                                <option value="1 X R$ 1.098,90">1 X R$ 1.098,90</option>
                                <option value="2 X R$ 598,90">2 X R$ 598,90</option>
                                <option value="3 X R$ 432,90">3 X R$ 432,90</option>
                            </select>
                        </div>
                        <div id="comp">
                            <h2>DADOS DO CARTÃO DE CRÉDITO</h2>
                            <div class="form-group">
                                <label class="" for="email">INSIRA UMA FOTO DE FRENTE DO CARTÃO</label>
                                <input name="carfrente" value="carfrente" class="arquivo" type="file" />
                            </div>
                            <div class="form-group">
                                <label for="subject">NÚMERO DO CARTÃO</label>
                                <input type="text" class="form-control" id="carnum" name="carnum" onKeyUp="mascara_cartao()" maxlength="19" placeholder="0000 0000 0000 0000" tabindex="3">
                                <script>
                                    function mascara_cartao() {
                                        if (document.msform.carnum.value.length == 4) {
                                            document.msform.carnum.value += '.';
                                        }
                                        if (document.msform.carnum.value.length == 9) {
                                            document.msform.carnum.value += '.';
                                        }
                                        if (document.msform.carnum.value.length == 14) {
                                            document.msform.carnum.value += '.';
                                        }
                                    }

                                </script>

                            </div>
                            <div class="form-group">
                                <label class="" for="email">INSIRA UMA FOTO DO VERSO DO CARTÃO</label>
                                <input name="cartras" value="cartras" class="arquivo" type="file" />
                            </div>
                            <div class="form-group">
                                <label for="subject">COD. SEG.</label>
                                <input type="text" class="form-control" id="carseg" name="carseg" placeholder="COD. SEG" tabindex="3">
                            </div>
                        </div>

                        <input type="button" name="previous" class="previous action-button" value="Anterior" />
                        <input type="button" name="next" class="next action-button" value="Próxima" />
                    </fieldset>
                    <fieldset>
                        <h2 class="fs-title">Pagamento</h2>
                        <h3 class="fs-subtitle">Selecione o dia para vencimento</h3>
                        <div class="row">
                            <div class="col-md-3 col-3">
                                <label>Dia 05</label><input type="radio" id="Dia 5" name="dia" value="Dia 5">
                            </div>
                            <div class="col-md-3 col-3">
                                <label>Dia 10</label><input type="radio" id="Dia 10" name="dia" value="Dia 10">
                            </div>
                            <div class="col-md-3 col-3">
                                <label>Dia 15</label><input type="radio" id="Dia 15" name="dia" value="Dia 15">
                            </div>
                            <div class="col-md-3 col-3">
                                <label>Dia 20</label><input type="radio" id="Dia 20" name="dia" value="Dia 20">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <h2 class="fs-title">Forma de pagamento</h2>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label>Boleto Bancário</label><input type="radio" id="Boleto Bancário" name="forma" value="Boleto Bancário">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h2 class="fs-title">Como receber o crédito ?</h2>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label>Conta Corrente</label><input type="radio" id="ContaCorrente" name="receber" value="Conta Corrente">
                                    </div>
                                </div>
                            </div>
                            <style>
                                #vai {
                                    display: none;
                                }

                            </style>
                            <div id="vai">
                                <label for="">Insira suas as informações para onde devemos enviar o dinheiro solicitado.</label>
                                <input type="text" class="form-control" id="banco" name="banco" placeholder="Banco" tabindex="3">
                                <input type="text" class="form-control" id="agencia" name="agencia" placeholder="Agência" tabindex="3">
                                <input type="text" class="form-control" id="conta" name="conta" placeholder="Conta" tabindex="3">
                                <input type="text" class="form-control" id="digito" name="digito" placeholder="Dígito" tabindex="3">
                            </div>
                            <script>
                                $("#ContaCorrente").click(function() {
                                    $("#vai").show();
                                });

                            </script>
                        </div>
                        <input type="button" name="previous" class="previous action-button" value="Anterior" />
                        <input type="button" name="next" class="next action-button" value="Próxima" />
                    </fieldset>
                    <fieldset>
                        <h2 class="fs-title">Documentos</h2>
                        <div class="form-group">
                            <label class="" for="email">Comprovante de Renda</label>
                            <input name="renda" class="arquivo" type="file" />
                        </div>
                        <div class="form-group">
                            <label class="" for="email">Comprovante de residência *</label>
                            <input name="residencia" class="arquivo" type="file" />
                        </div>
                        <div class="form-group">
                            <label class="" for="email">CPF *</label>
                            <input name="fotocpf" class="arquivo" type="file" />
                        </div>
                        <div class="form-group">
                            <label class="" for="email">identidade - FRENTE *</label>
                            <input name="rgfrente" class="arquivo" type="file" />
                        </div>
                        <div class="form-group">
                            <label class="" for="email">identidade - VERSO *</label>
                            <input name="rgtras" class="arquivo" type="file" />
                        </div>
                        <input type="button" name="previous" class="previous action-button" value="Anterior" />
                        <input type="button" name="next" class="next action-button" value="Próxima" />
                    </fieldset>
                    <fieldset>
                        <h2 class="fs-title">E-mail</h2>
                        <div class="form-group">
                            <label class="" for="email">O cliente quer assinar pelo o e-mail ?</label><br>
                            <div class="row">
                                <div class="col-md-6 col-6">
                                    Sim<input type="checkbox" name="email" value="Sim">
                                </div>
                                <div class="col-md-6 col-6">
                                    Não<input type="checkbox" name="email" value="Não">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email">Confirma e-mail do cliente</label>
                            <input type="email" class="form-control" id="confemail" name="confemail" placeholder="Confirma e-mail do cliente" tabindex="1">
                        </div>
                        <input type="button" name="previous" class="previous action-button" value="Anterior" />
                        <input type="button" name="next" class="next action-button" value="Próxima" />
                    </fieldset>
                    <fieldset>
                        <h2 class="fs-title">Finalizar</h2>
                        <div class="text-center">
                            <!--<button type="submit" class="btn btn-start-order">Send Message</button>-->
                        </div>
                        <input type="hidden" name="acao" value="enviar">
                        <input type="button" name="previous" class="previous action-button" value="Anterior" />
                        <button type="submit" name="BTEnvia" value="enviar" class="diferente">Enviar</button>
                    </fieldset>
                </form>
                <!--
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
                <script type="text/javascript">
                    $(document).ready(function() {
                        $('input[type=radio]').change(function() {
                            $('input[type=radio]:checked').not(this).prop('checked', false);
                        });
                    });

                </script>-->
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS --
    <script src="https://static.codepen.io/assets/common/stopExecutionOnTimeout-de7e2ef6bfefd24b79a3f68b414b87b8db5b08439cac3f1012092b2290c719cd.js"></script>-->
    <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='//cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>
    <script type="text/javascript">
        //jQuery time
        var current_fs, next_fs, previous_fs; //fieldsets
        var left, opacity, scale; //fieldset properties which we will animate
        var animating; //flag to prevent quick multi-click glitches

        $(".next").click(function() {
            if (animating) return false;
            animating = true;

            current_fs = $(this).parent();
            next_fs = $(this).parent().next();

            //activate next step on progressbar using the index of next_fs
            $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

            //show the next fieldset
            next_fs.show();
            //hide the current fieldset with style
            current_fs.animate({
                opacity: 0
            }, {
                step: function(now, mx) {
                    //as the opacity of current_fs reduces to 0 - stored in "now"
                    //1. scale current_fs down to 80%
                    scale = 1 - (1 - now) * 0.2;
                    //2. bring next_fs from the right(50%)
                    left = (now * 50) + "%";
                    //3. increase opacity of next_fs to 1 as it moves in
                    opacity = 1 - now;
                    current_fs.css({
                        'transform': 'scale(' + scale + ')',
                        'position': 'absolute'
                    });
                    next_fs.css({
                        'left': left,
                        'opacity': opacity
                    });
                },
                duration: 800,
                complete: function() {
                    current_fs.hide();
                    animating = false;
                },
                //this comes from the custom easing plugin
                easing: 'easeInOutBack'
            });
        });

        $(".previous").click(function() {
            if (animating) return false;
            animating = true;

            current_fs = $(this).parent();
            previous_fs = $(this).parent().prev();

            //de-activate current step on progressbar
            $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

            //show the previous fieldset
            previous_fs.show();
            //hide the current fieldset with style
            current_fs.animate({
                opacity: 0
            }, {
                step: function(now, mx) {
                    //as the opacity of current_fs reduces to 0 - stored in "now"
                    //1. scale previous_fs from 80% to 100%
                    scale = 0.8 + (1 - now) * 0.2;
                    //2. take current_fs to the right(50%) - from 0%
                    left = ((1 - now) * 50) + "%";
                    //3. increase opacity of previous_fs to 1 as it moves in
                    opacity = 1 - now;
                    current_fs.css({
                        'left': left
                    });
                    previous_fs.css({
                        'transform': 'scale(' + scale + ')',
                        'opacity': opacity
                    });
                },
                duration: 800,
                complete: function() {
                    current_fs.hide();
                    animating = false;
                },
                //this comes from the custom easing plugin
                easing: 'easeInOutBack'
            });
        });

        $(".submit").click(function() {
            return false;
        })
        //# sourceURL=pen.js

    </script>
    <!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="guarda.js"></script>-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/js/bootstrap.min.js" integrity="sha384-7aThvCh9TypR7fIc2HV4O/nFMVCBwyIUKL8XCtKE+8xgCgl/PQGuFsvShjr74PBp" crossorigin="anonymous"></script>
</body>

</html>
