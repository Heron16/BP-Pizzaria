
<?php

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

    <!-- Bootstrap 5 (Framework CSS para responsividade e componentes visuais) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Vue.js (Framework JavaScript progressivo para interfaces reativas) -->
    <script src="https://cdn.jsdelivr.net/npm/vue@3.4.27/dist/vue.global.prod.js"></script>
    <!-- React (Framework JavaScript para interfaces de usuário dinâmicas) -->
    <script src="https://unpkg.com/react@18/umd/react.production.min.js"></script>
    <script src="https://unpkg.com/react-dom@18/umd/react-dom.production.min.js"></script>
    <!-- Alpine.js (Framework leve para interatividade em HTML) -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.13.10/dist/cdn.min.js" defer></script>

<title>BP-Pizzas</title>
</head>
<body>

<!--INICIO CABECALHO DO SITE-->
<header class="topo-site">
<!--INICIO LOGO DO SITE-->
<a href="index.php" class="logo">
    <i class="fas fa-pizza-slice"></i>
    BP-Pizzas
</a>
<!--FIM LOGO DO SITE-->

<!--INICIO MENU DO SITE-->
<nav class="menu-site">
<a href="index.php">Inicio</a>
<a href="empresa.html">Empresa</a>
<a href="menu.php">Cardápio</a>
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
<section class="msflix-destaque">
<div class="swiper home-slider">
<div class="swiper-wrapper">
       <!--INCIA O ITEM SLIDE HOME DO SITE-->
      <div class="swiper-slide slide" style="background: url(slider-1.png) no-repeat;">
      <div class="content">
     <h3>A <span>Melhor</span>Pizza <br>do Brasil</h3>
     <a href="" class="btn">Comprar Agora</a>
      </div>
    </div>
       <!--FIM O ITEM SLIDE HOME DO SITE-->

  <!--INCIA O ITEM SLIDE HOME DO SITE-->
      <div class="swiper-slide slide" style="background: url(slider-2.png) no-repeat;">
      <div class="content">
     <h3>A <span>Melhor</span>Pizza <br>do Brasil</h3>
     <a href="" class="btn">Comprar Agora</a>
      </div>
    </div>
       <!--FIM O ITEM SLIDE HOME DO SITE-->

         <!--INCIA O ITEM SLIDE HOME DO SITE-->
      <div class="swiper-slide slide" style="background: url(slider-3.png) no-repeat;">
      <div class="content">
     <h3>A <span>Melhor</span>Pizza <br>do Brasil</h3>
     <a href="" class="btn">Comprar Agora</a>
      </div>
    </div>
       <!--FIM O ITEM SLIDE HOME DO SITE-->

</div>

         <!--INCIA O BOTAO SLIDE HOME DO SITE-->

  <div class="swiper-button-prev"></div>
  <div class="swiper-button-next"></div>
         <!--FIM O BOTAO SLIDE HOME DO SITE-->

    </div>
</section>
<!--INCIA O SLIDE DESTAQUE-->

<!--FIM O SLIDE DESTAQUE-->

<!--INCIA O DESTAQUE-->
<section class="destaque">
    <div class="box-container">

        <!--INCIA ITEM  DESTAQUE-->
        <div class="box">
            <div class="msimg">
                <img src="destaque-1.jpg" alt="">
            </div>
            <div class="content">
                <h3>Pizza da Casa</h3>
            </div>
        </div>
        <!--FIM ITEM  DESTAQUE-->
         <!--INCIA ITEM  DESTAQUE-->
         <div class="box">
            <div class="msimg">
                <img src="destaque-2.jpg" alt="">
            </div>
            <div class="content">
                <h3>Sobremesas</h3>
            </div>
        </div>
        <!--FIM ITEM  DESTAQUE-->
         <!--INCIA ITEM  DESTAQUE-->
         <div class="box">
            <div class="msimg">
                <img src="destaque-3.jpg" alt="">
            </div>
            <div class="content">
                <h3>Pizzas Doces</h3>
            </div>
        </div>
        <!--FIM ITEM  DESTAQUE-->
         <!--INCIA ITEM  DESTAQUE-->
         <div class="box">
            <div class="msimg">
                <img src="destaque-4.jpg" alt="">
            </div>
            <div class="content">
                <h3>Pizza Gourmet</h3>
            </div>
        </div>
        <!--FIM ITEM  DESTAQUE-->

    </div>
</section>
<!--FIM O DESTAQUE-->


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

    function salvarCarrinho() {
        localStorage.setItem('carrinho', JSON.stringify(carrinho));
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

    // Atualiza o carrinho ao carregar a página
    atualizarCarrinho();

    document.addEventListener('click', function(e) {
        // Adiciona produto ao carrinho
        if (
            e.target.classList.contains('btn') &&
            !e.target.closest('.carrinho') &&
            (e.target.closest('.box') || e.target.closest('.menu-modal'))
        ) {
            e.preventDefault();
            let nome = 'Produto';
            let valorTexto = '';
            if (e.target.closest('.box')) {
                const box = e.target.closest('.box');
                nome = box.querySelector('.info h3') ? box.querySelector('.info h3').innerText : 'Produto';
                valorTexto = box.querySelector('.valor').innerText;
            } else if (e.target.closest('.menu-modal')) {
                const modal = e.target.closest('.menu-modal');
                nome = modal.querySelector('h3') ? modal.querySelector('h3').innerText : 'Produto';
                valorTexto = modal.querySelector('.valor').innerText;
            }
            // Remove tudo que não for número, vírgula ou ponto
            valorTexto = valorTexto.replace(/[^\d,\.]/g, '').replace(',', '.');
            const valor = parseFloat(valorTexto);
            if (!isNaN(valor)) {
                carrinho.push({ nome, valor });
                salvarCarrinho();
                atualizarCarrinho();
            } else {
                console.error('Valor inválido:', valorTexto);
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

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Mensagem de boas-vindas ao acessar a conta
    const loginForm = document.querySelector('.login-form');
    if (loginForm) {
        // Preencher automaticamente o e-mail se marcado "lembrar"
        const emailInput = loginForm.querySelector('input[name="email"]');
        const lembrarCheckbox = loginForm.querySelector('input[name="lembrar"]');
        // Ao carregar a página, verifica se há e-mail salvo
        const emailSalvo = localStorage.getItem('email_salvo');
        if (emailSalvo) {
            emailInput.value = emailSalvo;
            lembrarCheckbox.checked = true;
        }
        // Ao submeter o formulário
        loginForm.addEventListener('submit', function(e) {
            e.preventDefault();
            const email = emailInput.value.trim();
            if (lembrarCheckbox.checked) {
                localStorage.setItem('email_salvo', email);
            } else {
                localStorage.removeItem('email_salvo');
            }
            if (email) {
                alert(`Olá, ${email}!\nSeja bem-vindo(a) à BP - Pizzaria!`);
            }
            // Aqui você pode adicionar o redirecionamento ou lógica de login real, se desejar.
        });
    }
});
</script>

<!-- Adicione antes do fechamento do </body> -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    function mostrarErroOffline() {
        // Cria o overlay de erro
        const overlay = document.createElement('div');
        overlay.style.position = 'fixed';
        overlay.style.top = 0;
        overlay.style.left = 0;
        overlay.style.width = '100vw';
        overlay.style.height = '100vh';
        overlay.style.background = 'rgba(0,0,0,0.85)';
        overlay.style.zIndex = 99999;
        overlay.style.display = 'flex';
        overlay.style.flexDirection = 'column';
        overlay.style.alignItems = 'center';
        overlay.style.justifyContent = 'center';
        overlay.style.color = '#fff';
        overlay.innerHTML = `
            <img src="Imagem-erro.jpg" alt="Erro de conexão" style="max-width:300px; margin-bottom:20px; border-radius:10px;">
            <h2>Sem conexão com a internet</h2>
            <p>Por favor, verifique sua conexão e tente novamente.</p>
        `;
        document.body.appendChild(overlay);
    }

    // Detecta se está offline ao carregar
    if (!navigator.onLine) {
        mostrarErroOffline();
    }

    // Detecta se ficar offline durante o uso
    window.addEventListener('offline', mostrarErroOffline);
});
</script>

</body>
</html>