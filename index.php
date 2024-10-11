
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transforme Seu Futuro com o EJA</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./css/style.css">
    
    

</head>
<body>
    <main>    
        <div class="container-fluid p-3 text-white rounded shadow-lg" style="background-color: #00BFFF;">
            <h2 class="text-center mb-3">Transforme Seu Futuro com o EJA</h2>
            <p class="lead text-justify">
                Muitas pessoas interrompem os estudos devido aos desafios da vida, mas o sonho de aprender e crescer permanece. A Educação de Jovens e Adultos (EJA) oferece a oportunidade de retomar os estudos com flexibilidade, adaptando-se ao ritmo e às necessidades de cada pessoa. Além de conquistar um diploma, voltar a estudar abre portas para novas oportunidades, tanto no mercado de trabalho quanto na vida pessoal. O EJA oferece suporte para que os alunos se sintam motivados a seguir em frente, mostrando que nunca é tarde para aprender e transformar suas vidas.
            </p>
            <h4 class="text-center mt-5">Preencha o formulário abaixo e reserve sua matrícula:</h4>
        </div>
      <!--Formulário de contato-->
      <section class="row conteudo">
        <div class="col-sm-6 img-des">
            <img src="./img/turma.jpeg" alt="">
            <p>
              A imagem mostra uma sala de aula com alunos adultos sentados, atentos ao professor em pé na frente da turma.
            </p>
        </div>
        <div class="col-sm-6 contato">
            <div class="conteudo-contato">
              <form action="enviar.php" method="POST">
                
                <div class="form-group">
                    <label for="assunto">Assunto:</label>
                    <input type="assunto" class="form-control" id="assunto" name="assunto" placeholder="Assunto" required>
                </div>
                <div class="form-group">
                    <label for="nomeCompleto">Nome Completo:</label>
                    <input type="text" class="form-control" id="nomeCompleto" name="nomeCompleto" placeholder="Digite seu nome completo" required>
                </div>
                <div class="form-group">
                    <label for="celular">Celular:</label>
                    <input type="tel" class="form-control" id="celular" name="celular" placeholder="Digite seu celular" required>
                </div>
                <div class="form-group">
                    <label for="bairro">Digite seu bairro:</label>
                    <input type="text" class="form-control" id="bairro" name="bairro" placeholder="Digite seu bairro" required>
                </div>
                <div class="form-group">
                    <label for="escola">Escolha uma escola:</label>
                    <select class="form-control" id="escola" name="escola" required>
                        <option value="" disabled selected>Selecione uma escola</option>
                        <option value="novohorizonte@gmail.com|Escola Estadual Novo Horizonte">Escola Estadual Novo Horizonte</option>
                        <option value="buarque@gmail.com|Novo Horizonte">Escola Municipal Aurelio Buarque</option>
                        <option value="liberdade@gmail.com|Novo Horizonte">Escola Estadual Liberdade</option>
                    </select>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn" style="background-color: #00BFFF;">Enviar</button>
                </div>
            </form> 
                
            </div>
        </div>
    </section>
    </main>
    <footer class="fixed-bottom"  style="background-color: #00BFFF;">
        <h5>&copy; Todos os direitos reservados a FATCH</h5>
    </footer>
</body>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</html>
