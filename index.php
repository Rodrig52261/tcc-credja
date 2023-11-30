<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/logo" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <title>CredJa</title>
</head>
<body>
    
    <header class="NavBar">
            <img src="img/logo" alt="logo">    
        <div class="Nav-Edit">
            <a href="">Home</a>
            <a href="#aniversario">Saque aniversário</a>
            <a href="#emprestimo">Empréstimos</a>
            <a href="#container-sobre">Sobre</a>
            <a href="paginas/login">Adm</a>
        </div>
    </header>

    <main class="Home-Page" id="home">
        <div class="Home-Text">
            <h1>venha tornar seus sonhos<br>realidade!</h1>
            <span>Com a CredJa, fica fácil atingir seus sonhos, com uma ótima taxa de financiamento, ou até mesmo fazendo seu saque aniversário, não fique de fora, seu crédito é pra já!</span>
            <br>
            <a href="">Saiba mais <img src="icons/seta" alt="seta"></a>
        </div>
        <div class="banner">
            <img src="img/banner" alt="banner">
        </div>
    </main>
        <section>
           <div class="conteudo-form"> 
            <form action="php/cadastro.php" method="POST" class="form-edit">
                <div class='wrapper'>
                    <input type="text" name="nome" placeholder="Nome Completo">
                    <input type="text" name="email" placeholder="Email">
                    <input type="tel" name="celular" placeholder="Celular">
                    <select name="emprestimo" id="">
                        <option disabled selected>Escolha o tipo de empréstimo</option>
                        <option value="credito consginado">Crédito consignado</option>
                        <option value="financiamento">Financiamento</option>
                        <option value="refinanciamento">Refinanciamento</option>
                        <option value="saque aniversario">Saque aniversario</option>
                    </select>
                </div>
                
                <div>
                    <input class="inputSubmit" type="submit" name="submit" value="Cadastrar"></input>
                </div>
            </form>
           </div> 
        </section>

        <div class="conteudo-saque" id="aniversario">
                <div class="saque-text-top">
                    <h2>Seu saque aniversário é pra Ja</h2>
                    <span>A CredJa te ajuda a antecipar esses saques</span>
                </div>
            <div class="saque-text">
                <div class="saque-text-edit">
                    <span>Complementar Renda:</span>
                    <p>Os valores sacados podem ser utilizados para diferentes finalidades, como pagamento de dívidas, investimentos, compra de bens ou mesmo para complementar a renda em momentos de necessidade.</p>
                </div>
                <div class="saque-text-edit">
                    <span>Não interfere no saque total:</span>
                    <p>Optar pelo Saque Aniversário não impede o trabalhador de sacar o saldo total do FGTS em situações específicas, como a compra da casa própria, aposentadoria, doenças graves, entre outras.</p>
                </div>
            </div>
                <div class="button">
                    <a href="#home"><button>Quero antecipar!</button></a>
                </div>
        </div>

        <div class="conteudo-emprestimo" id="emprestimo">
            <div class="emprestimo-text-top">
                <h3>Não te convencemos ainda?</h3>
                <span>Olhe como funciona nossos empréstimos!</span>
            </div> 
            <div class="conteudo">
                <div class="conteudo-image">
                    <img src="img/duvida" alt="duvida">
                </div>
                    <div class="container">
                        <div class="conteudo-card">
                            <div class="card-edit">
                                <img src="icons/nota" alt="dinheiro">
                                <span>Crédito consignado</span>
                                <p>Taxas de Juros Mais Baixas<br>
                                Facilidade de Aprovação<br>
                                Sem Consulta ao SPC/Serasa</p>
                            </div>
                        </div>
                        <div class="conteudo-card">
                            <div class="card-edit">
                                <img src="icons/bolo" alt="bolo">
                                <span>Saque Aniversário</span>
                                <p>Acesso Anual aos Recursos<br>
                                Não Afeta o Saque Rescisório<br>
                                Flexibilidade</p>
                            </div>
                        </div>
                        <div class="conteudo-card">
                            <div class="card-edit">
                                <img src="icons/carro" alt="carro">
                                <span>Financiamento</span>
                                <p>Uso Imediato do Bem<br>
                                Preservação da Liquidez<br>
                                Parcelamento</p>
                            </div>
                        </div>
                        <div class="conteudo-card">
                            <div class="card-edit">
                                <img src="icons/carro" alt="carro">
                                <span>Refinanciamento</span>
                                <p>Redução da Taxa de Juros<br>
                                Redução nas Prestações Mensais<br>
                                Melhoria no Prazo de Pagamento</p>
                            </div>
                        </div>
                    </div>    
            </div>
        </div>


    <div class="conteudo-sobre" id="container-sobre">
        <div class="conteudo-top-sobre">
            <h1>Quem somos?</h1>
            <img src="img/logo" alt="logo">
        </div>
        <div class="conteudo-sobre-text">
            <div class="sobre">
                <span>Nosso objetivo:</span>
                <p>buscamos fornecer soluções de crédito acessíveis e flexíveis aos clientes. Proporcionar produtos e serviços financeiros que atendam às necessidades específicas dos clientes, sejam eles indivíduos ou empresas, é um objetivo da nossa empresa, seu atendimento é pra já.</p>
            </div>
        </div>
        <div class="conteudo-footer">
            <div class="footer">
                <div class="footer-icon">
                    <img src="icons/facebook" alt="facebook">
                    <img src="icons/instagram" alt="instagram">
                </div>
                    <div class="footer-text">
                        <p>Avenida Max Wirth, 234</p>
                    </div>
            </div>
        </div>
    </div>






</body>
</html>