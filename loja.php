<?php

$produtos = [
    [
        'nome' => 'Calabresa',
        'descricao' => 'Pizza Da BP-PIZZARIA. É A Melhor Pizza Do Mercado',
        'imagem' => 'pizza-1.png',
        'valor' => 37.77,
        'valor_antigo' => 41,
        'estrelas' => 4.5
    ],
    [
        'nome' => 'Frango C/ Caputipy',
        'descricao' => 'Pizza Da BP-PIZZARIA. É A Melhor Pizza Do Mercado',
        'imagem' => 'pizza-2.png',
        'valor' => 37.77,
        'valor_antigo' => 49,
        'estrelas' => 4
    ],
    [
        'nome' => 'Strogonoff',
        'descricao' => 'Pizza Da BP-PIZZARIA. É A Melhor Pizza Do Mercado',
        'imagem' => 'pizza-3.png',
        'valor' => 37.77,
        'valor_antigo' => 49,
        'estrelas' => 3
    ],
    [
        'nome' => 'Tomate MS',
        'descricao' => 'Pizza Da BP-PIZZARIA. É A Melhor Pizza Do Mercado',
        'imagem' => 'pizza-4.png',
        'valor' => 37.77,
        'valor_antigo' => 38,
        'estrelas' => 2.5
    ],
    [
        'nome' => 'Vegetariana',
        'descricao' => 'Pizza Da BP-PIZZARIA. É A Melhor Pizza Do Mercado',
        'imagem' => 'pizza-5.png',
        'valor' => 37.77,
        'valor_antigo' => 39,
        'estrelas' => 2.5
    ],
    [
        'nome' => 'Da Casa',
        'descricao' => 'Pizza Da BP-PIZZARIA. É A Melhor Pizza Do Mercado',
        'imagem' => 'pizza-6.png',
        'valor' => 37.77,
        'valor_antigo' => 39,
        'estrelas' => 2.5
    ]
];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--INICIO CSS ICONES-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<!--INICIO CSS SLIDE-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
 <link rel="stylesheet" href="style.css">  
<link rel="shortcut icon" href="msFavicon.png" type="image/x-icon">

<title>BP-Pizzas</title>
</head>
<body>

<!--INICIO CABECALHO DO SITE-->
<header class="topo-site">
<!--INICIO LOGO DO SITE-->
<a href="index.html" class="logo">
    <i class="fas fa-pizza-slice"></i>
    BP-Pizzas
</a>
<!--FIM LOGO DO SITE-->

<!--INICIO MENU DO SITE-->
<nav class="menu-site">
<a href="index.html">Inicio</a>
<a href="empresa.html">Empresa</a>
<a href="menu.html">Cardápio</a>
<a href="loja.php">Montar Pedido</a>
<a href="blog.html">Blog</a>
<a href="contatos.html">Fale Conosco</a>
</nav>
<!--FIM MENU DO SITE-->
<!--INICIO ICONE  DO SITE-->
<div class="icons">
    <div id="cart" class="fas fa-shopping-cart"></div>
    <div id="login" class="fas fa-user"></div>
    <div id="menu" class="fas fa-bars"></div>
</div>
<!--FIM ICONE  DO SITE-->
<!--INICIO CARRINHO DO SITE-->
<div class="carrinho">

   
    <!--FIM ITEM CARRINHO DO SITE-->
<h3 class="total">Total: R$0,00</h3>
<a href="" class="btn">Ir para o WhatsApp</a>
</div>
<!--FIM CARRINHO DO SITE-->

<!--INICIO CARRINHO DO LOGIN-->
<form action="" method="post" class="login-form">
    <h3>Acesse sua Conta </h3>
<input type="email" name="email" class="box" placeholder="Digite seu E-mail">
<input type="password" name="senha" class="box" placeholder="Digite sua Senha">
<div class="lembrar-senha">
    <input type="checkbox" name="lembrar" id="relembrar">
    <label for="relembrar">Me lembrar da Senha</label>
</div>
<button type="submit" name="sendLogin" class="btn"> Acessar</button>
</form>

<!--FIM CARRINHO DO LOGIN-->

</header>
<!--FIM CABECALHO DO SITE--> 


<!--INICIO DO TOPO DA PAGINA-->
<div class="topo-pagina">
    <h1>Monte o Seu pedido</h1>
    <p><a href="index.html" title="Sobre a Empresa">Inicio>></a> Delivery</p>
</div>
<!--FIM DO TOPO DA  PAGINA-->

<!--INICIO DA LOJA VIRTUAL SLIDE DO SITE-->
<section class="loja">
    <div class="box-container">

    <!--INICIO ITEM LOJA VIRTUAL DO SITE -->
  <div class="box">
    <img src="pizza-1.png" alt="">
    <h3>Calabresa</h3>  <br>
    <p>Pizza Da BP-PIZZARIA. É A Melhor Pizza Do Mercado</p>
    <div class="estrelas">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star-half-alt"></i>
    </div>
    <div class="loja_valor">
        R$ 37,77 <span> R$ 41</span>
    </div>
    <a href="" class="btn">Adicionar ao Carrinho</a>
</div>

<!-- Segunda pizza: 4 estrelas -->
<div class="box">
    <img src="pizza-2.png" alt="">
    <h3>Frango C/ Caputipy</h3> <br>
    <p>Pizza Da BP-PIZZARIA. É A Melhor Pizza Do Mercado</p>
    <div class="estrelas">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="far fa-star"></i>
    </div>
    <div class="loja_valor">
        R$ 37,77 <span> R$ 49</span>
    </div>
    <a href="" class="btn">Adicionar ao Carrinho</a>
</div>

<!-- As demais pizzas: 3 estrelas -->
<div class="box">
    <img src="pizza-3.png" alt="">
    <h3>Strogonoff</h3> <br>
    <p>Pizza Da BP-PIZZARIA. É A Melhor Pizza Do Mercado</p>
    <div class="estrelas">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="far fa-star"></i>
        <i class="far fa-star"></i>
    </div>
    <div class="loja_valor">
        R$ 37,77 <span> R$ 49</span>
    </div>
    <a href="" class="btn">Adicionar ao Carrinho</a>
</div>

<div class="box">
    <img src="pizza-4.png" alt="">
    <h3>Tomate MS</h3> <br>
    <p>Pizza Da BP-PIZZARIA. É A Melhor Pizza Do Mercado</p>
    <div class="estrelas">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star-half-alt"></i>
        <i class="far fa-star"></i>
        <i class="far fa-star"></i>
    </div>
    <div class="loja_valor">
        R$ 37,77 <span> R$ 38</span>
    </div>
    <a href="" class="btn">Adicionar ao Carrinho</a>
</div>

<div class="box">
    <img src="pizza-5.png" alt="">
    <h3>Vegetariana</h3> <br>
    <p>Pizza Da BP-PIZZARIA. É A Melhor Pizza Do Mercado</p>
    <div class="estrelas">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star-half-alt"></i>
        <i class="far fa-star"></i>
        <i class="far fa-star"></i>
    </div>
    <div class="loja_valor">
        R$ 37,77 <span> R$ 39</span>
    </div>
    <a href="" class="btn">Adicionar ao Carrinho</a>
</div>

<div class="box">
    <img src="pizza-6.png" alt="">
    <h3>Da Casa</h3> <br>
    <p>Pizza Da BP-PIZZARIA. É A Melhor Pizza Do Mercado</p>
    <div class="estrelas">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star-half-alt"></i>
        <i class="far fa-star"></i>
        <i class="far fa-star"></i>
    </div>
    <div class="loja_valor">
        R$ 37,77 <span> R$ 39</span>
    </div>
    <a href="" class="btn">Adicionar ao Carrinho</a>
</div>
    <!--FIM ITEM LOJA VIRTUAL DO SITE -->
    </div>
</section>
<!--FIM DA LOJA VIRTUAL SLIDE DO SITE-->


<!--INICIO DO RODAPÉ-->
<section class="rodape">
    <div class="box-container">

        <!--INICIO ITEM DO RODAPÉ-->
        <div class="box">
        <h3>BP-Pizzaria</h3>
        <p>A Melhor Pizzaria de Cianorte</p>
        <div class="rede-sociais">
            <a href="" class="fab fa-facebook-f"></a>
              <a href=""class="fab fa-instagram"></a>
              <a href=""class="fab fa-whatsapp"></a>
              <a href=""class="fab fa-linkedin"></a>
        </div>
    </div>
    <!--FIM DO ITEM DO RODAPÉ-->

     <!--INICIO ITEM DO RODAPÉ-->
        <div class="box">
        <h3>Faça Seu Pedido</h3>
        <p>(44) 99815-3198 
            <br>(44) 99867-2496</p>
        <a href="mailto:heronjose974@gmail.com" title="heronjose974@gmail.com" class="link">heronjose974@gmail.com</a>
        
    </div>
    <!--FIM DO ITEM DO RODAPÉ-->

     <!--INICIO ITEM DO RODAPÉ-->
        <div class="box">
        <h3>Localização</h3>
        <p>Praça Antônio Morães de Barros, n° 192 <br>
           Terça a Sábado das 19:30 ás 23:00     <br>
        Cianorte-PR                               <br>
        </p>
    </div>
    <!--FIM DO ITEM DO RODAPÉ-->
    </div>
     <div class="direitos">
        Criado por <span>Heron Jose da Silva</span> | Todos os Direitos Reservados!
     </div>
</section>
<!--FIM DO RODAPÉ-->


<!--INICIO JS DO SLIDE DO SITE-->
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<!--INICIO  JS DO SITE DO SITE-->
<script src="javascript.js"></script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Recupera o carrinho do localStorage ou inicia vazio
    let carrinho = JSON.parse(localStorage.getItem('carrinho')) || [];
    const totalElement = document.querySelector('.carrinho .total');
    const carrinhoDiv = document.querySelector('.carrinho');

    // Adiciona o contador de itens no ícone do carrinho
    let cartIcon = document.getElementById('cart');
    let cartCount = document.createElement('span');
    cartCount.id = 'cart-count';
    cartCount.style.background = '#c00';
    cartCount.style.color = '#fff';
    cartCount.style.borderRadius = '50%';
    cartCount.style.padding = '2px 7px';
    cartCount.style.fontSize = '12px';
    cartCount.style.position = 'absolute';
    cartCount.style.top = '-8px';
    cartCount.style.right = '-8px';
    cartCount.style.display = 'none';
    cartCount.textContent = '0';
    cartIcon.style.position = 'relative';
    cartIcon.appendChild(cartCount);

    // Cria a lista de produtos no carrinho se não existir
    let lista = carrinhoDiv.querySelector('.carrinho-lista');
    if (!lista) {
        lista = document.createElement('ul');
        lista.className = 'carrinho-lista';
        carrinhoDiv.insertBefore(lista, totalElement.nextSibling);
    }

    function atualizarCarrinho() {
        lista.innerHTML = '';
        carrinho.forEach((item, index) => {
            const li = document.createElement('li');
            li.textContent = `${item.nome} - R$${item.valor.toFixed(2)}`;

            // Ícone de deletar
            const delBtn = document.createElement('span');
            delBtn.innerHTML = '<i class="fas fa-trash-alt"></i>';
            delBtn.title = "Remover";
            delBtn.style.color = "#c00";
            delBtn.style.cursor = "pointer";
            delBtn.style.marginLeft = "10px";
            delBtn.onclick = function() {
                carrinho.splice(index, 1);
                salvarCarrinho();
                atualizarCarrinho();
            };
            li.appendChild(delBtn);

            lista.appendChild(li);
        });
        const total = carrinho.reduce((soma, item) => soma + item.valor, 0);
        totalElement.innerText = `Total: R$${total.toFixed(2)}`;

        // Atualiza o contador do carrinho
        cartCount.textContent = carrinho.length;
        cartCount.style.display = carrinho.length > 0 ? 'inline-block' : 'none';
    }

    function salvarCarrinho() {
        localStorage.setItem('carrinho', JSON.stringify(carrinho));
    }

    // Atualiza o carrinho ao carregar a página
    atualizarCarrinho();

    document.addEventListener('click', function(e) {
        // Adiciona produto ao carrinho
        if (
            e.target.classList.contains('btn') &&
            !e.target.closest('.carrinho') &&
            e.target.closest('.box')
        ) {
            e.preventDefault();
            const box = e.target.closest('.box');
            const nome = box.querySelector('h3') ? box.querySelector('h3').innerText : 'Produto';
            // Pega o valor da loja_valor (primeiro número)
            let valorTexto = box.querySelector('.loja_valor').innerText.match(/R\$\s*([\d.,]+)/);
            let valor = 0;
            if (valorTexto && valorTexto[1]) {
                valor = parseFloat(valorTexto[1].replace('.', '').replace(',', '.'));
            }
            if (!isNaN(valor) && valor > 0) {
                carrinho.push({ nome, valor });
                salvarCarrinho();
                atualizarCarrinho();
            }
        }

        // Botão WhatsApp
        if (
            e.target.classList.contains('btn') &&
            e.target.closest('.carrinho')
        ) {
            e.preventDefault();
            if (carrinho.length === 0) {
                alert('Adicione produtos ao carrinho antes de enviar o pedido!');
                return;
            }
            let mensagem = 'Olá! Gostaria de fazer um pedido:%0A';
            carrinho.forEach((item, idx) => {
                mensagem += `${idx + 1}. ${item.nome} - R$${item.valor.toFixed(2)}%0A`;
            });
            const total = carrinho.reduce((soma, item) => soma + item.valor, 0);
            mensagem += `Total: R$${total.toFixed(2)}`;
            const url = `https://wa.me/5544998153198?text=${mensagem}`;
            window.open(url, '_blank');
        }
    });
});
</script>



</body>
</html>