<html lang="pt">
<head>
  <title>Tabela de Cursos</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>


<script type="text/javascript" >
    
    function limpa_formulário_cep() {
            //Limpa valores do formulário de cep.
            document.getElementById('rua').value=("");
            document.getElementById('bairro').value=("");
            document.getElementById('cidade').value=("");
            document.getElementById('uf').value=("");
            document.getElementById('ibge').value=("");
    }

    function meu_callback(conteudo) {
        if (!("erro" in conteudo)) {
            //Atualiza os campos com os valores.
            document.getElementById('rua').value=(conteudo.logradouro);
            document.getElementById('bairro').value=(conteudo.bairro);
            document.getElementById('cidade').value=(conteudo.localidade);
            document.getElementById('uf').value=(conteudo.uf);
            document.getElementById('ibge').value=(conteudo.ibge);
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
            if(validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                document.getElementById('rua').value="...";
                document.getElementById('bairro').value="...";
                document.getElementById('cidade').value="...";
                document.getElementById('uf').value="...";
                document.getElementById('ibge').value="...";

                //Cria um elemento javascript.
                var script = document.createElement('script');

                //Sincroniza com o callback.
                script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

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
  <h2>Tabela de Cadastro de Cursos</h2>
  <h3>Auno</h3>            
  <table class="table table-hover table table-bordered">

  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NOME</th>
      <th scope="col">DATA_NASCIMENTO</th>
      <th scope="col">DATA_CRIAÇÂO</th>
      <th scope="col">ID_CURSO</th>
          </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">001</th>
      <td>Mauro Lima Da Silva</td>
      <td>14.06.1987</td>
      <td>05.02.2018</td>
      <td>ADS0123</td>
     
    </tr>
    <tr>
      <th scope="row">002</th>
      <td>Sarah Nicole Almeida</td>
      <td>02.05.1986</td>
      <td>05.02.2018</td>
      <td>AMS0060</td>
     
    </tr>

    <tr>
      <th scope="row">003</th>
      <td>Lucas vinicius Santos</td>
      <td>20.02.1984</td>
      <td>05.02.2018</td>
      <td>GTI0102</td>
     
    </tr>
    
  </tbody>
</table>
</div>


<div class="container">
  <!--h3>CURSO</h3>
  <p>The .table-bordered class adds borders to a table:</p-->            
  <table class="table table-hover table table-bordered">
  <thead>
    <tr>
      <th scope="col">LOGRADOURO</th>
      <th scope="col">NUMERO</th>
      <th scope="col">BAIRRO</th>
      <th scope="col">CEP</th>
      <th scope="col">CIDADE/ESTADO</th>
    
          </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Rua: tupinambá</th>
      <td>30</td>
      <td>ColoniA Terra Nova</td>
      <td>69015060</td>
      <td>Manaus/AM</td>
    </tr>

    <tr>
      <th scope="row">Rua: Rio Moa</th>
      <td>15</td>
      <td>Colonia Terra Nova</td>
      <td>69015663</td>
      <td>Manaus/AM</td>
    </tr>

    <tr>
      <th scope="row">Rua: Louro Abacate</th>
      <td>55</td>
      <td>Monte ds Oliveiras</td>
      <td>69093159</td>
      <td>Manaus/AM</td>
    </tr>
  
    
  </tbody>
</table>
</div>

<div class="container">
  
  <h3>Curso</h3>
              
  <table class="table table-hover table table-bordered">

  <thead>
    <tr>
      <th scope="col">ID_CURSO</th>
      <th scope="col">NOME</th>
      <th scope="col">DATA_CRIAÇÃO</th>
      <th scope="col">ID_PROFESSOR</th>

          </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">ADS123</th>
      <td>Gerfeson Oliveira</td>
      <td>12.01.2017</td>
      <td>015</td>
      
     
    </tr>
    <tr>
      <th scope="row">AMS0060</th>
      <td>Helio Vasques</td>
      <td>02.06.2017</td>
      <td>040</td>
      
     
    </tr>

    <tr>
      <th scope="row">GTI0102</th>
      <td>Amanda santelo</td>
      <td>15.02.2018</td>
      <td>020</td>
      
     
    </tr>
    
  </tbody>
</table>
</div>


<div class="container">
  
  <h3>Professor</h3>
              
  <table class="table table-hover table table-bordered">

  <thead>
    <tr>
      <th scope="col">ID_PROFESSOR</th>
      <th scope="col">NOME</th>
      <th scope="col">DATA_NASCIMENTO</th>
      <th scope="col">DATA_CRIAÇÃO</th>

          </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">015</th>
      <td>Gerfeson Oliveira</td>
      <td>12.06.1980</td>
      <td>02.01.2017</td>
      
     
    </tr>
    <tr>
      <th scope="row">040</th>
      <td>Helio Vasques</td>
      <td>02.07.1979</td>
      <td>01.01.2017</td>
      
     
    </tr>

    <tr>
      <th scope="row">020</th>
      <td>Amanda santelo</td>
      <td>06.09.1983</td>
      <td>01.02.2018</td>
      
     
    </tr>
    
  </tbody>
</table>
</div>
<br>
<br>
<br>


<form action="/action_page.php">
  <fieldset>
    <legend>Informações do Aluno:</legend>
    Nome:<br>
    <input type="text" name="Nome" value=""><br>
    
    ID_Curso:<br>
    <input type="text" name="lastname" value=""><br><br>

    Professor:<br>
    <input type="text" name="" value=""><br><br>

  </fieldset>
</form>

<body>
    <!-- Inicio do formulario -->
      <form method="get" action=".">
        <label>Cep:
        <input name="cep" type="text" id="cep" value="" size="10" maxlength="9"
               onblur="pesquisacep(this.value);" /></label><br />
        <label>Rua:
        <input name="rua" type="text" id="rua" size="60" /></label><br />
        <label>Bairro:
        <input name="bairro" type="text" id="bairro" size="40" /></label><br />
        <label>Cidade:
        <input name="cidade" type="text" id="cidade" size="40" /></label><br />
        <label>Estado:
        <input name="uf" type="text" id="uf" size="2" /></label><br />
        <label>IBGE:
        <input name="ibge" type="text" id="ibge" size="8" /></label><br />
      </form>
    </body>
    

    <div id="d">
      <script type="text/javascript">
        function imprime (text){
          text=document
          print(text)

        }

      </script>

<form>
<input type="button" value="Imprimir" onClick="window.print()"/>
</form>

</body>
</html>
