<?php
// Você pode adicionar lógica PHP aqui futuramente, se desejar.
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--INICIO CSS GALERIA -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css">

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
<a href="index.php" class="logo">
    <i class="fas fa-pizza-slice"></i>
    BP-Pizzas
</a>
<!--FIM LOGO DO SITE-->

<!--INICIO MENU DO SITE-->
<nav class="menu-site">
<a href="index.php">Inicio</a>
<a href="empresa.php">Empresa</a>
<a href="menu.php">Cardápio</a>
<a href="loja.php">Montar Pedido</a>
<a href="blog.html">Blog</a>
<a href="contatos.php">Fale Conosco</a>
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


<!--INICIO DO TOPO DA PAGINA-->
<div class="topo-pagina">
    <h1>Fale Conosco</h1>
    <p><a href="index.php" title="Sobre a Empresa">Inicio>></a> Contatos</p>
</div>
<!--FIM DO TOPO DA  PAGINA-->

<!--INICIO CONTATOS-->
<section class="contatos">

<!--INICIO BLOCOS CONTATOS-->
<div class="icone-box">

    <!--INICIO ITEM BLOCOS CONTATOS-->
    <div class="icons">
        <i class="fas fa-phone"></i>
        <h3>Atedimentos /Contatos</h3>
        <p>(44) 998153198</p>
        <p>(44) 99867-2496</p>
    </div>
    <!--INICIO ITEM BLOCOS CONTATOS-->
      <!--INICIO ITEM BLOCOS CONTATOS-->
    <div class="icons">
        <i class="fas fa-envelope"></i>
        <h3>Nosso E-MAIL</h3>
        <p>heronjose974@gmail.com</p>
      
    </div>
    <!--INICIO ITEM BLOCOS CONTATOS-->

     <!--INICIO ITEM BLOCOS CONTATOS-->
    <div class="icons">
        <i class="fas fa-map-marker-alt"></i>
        <h3>Endereço</h3>
        <p>Praça Antônio Morães de Barros, n° 192 </p>
        <p>Cianorte - PR</p>
    </div>
    <!--INICIO ITEM BLOCOS CONTATOS-->

</div>
<!--FIM BLOCOS CONTATOS-->

<!--INICIO DO FORMULARIO  CONTATOS-->
<div class="row">
    <form action="" method="post" enctype="multipart/form-data" id="form-pedido">
        <h3>Faca Seu Pedido</h3>
        <div class="inputBox">
            <input type="text" name="nome" class="box" placeholder="Digite seu Nome" required>
            <input type="email" name="email" class="box" placeholder="Digite seu E-mail" required>
        </div>
         <div class="inputBox">
           <input type="tel" name="fone" class="box" placeholder="Digite seu Telefone" required maxlength="11" pattern="\d{11}" oninput="this.value=this.value.replace(/\D/g,'').slice(0,11)">
<small style="font-size:12px;color:#888;"></small>
            <input type="text" name="endereco" class="box" placeholder="Digite seu Endereço" required>
        </div>
        <div class="inputBox">
    <input type="text" name="numero_casa" class="box" placeholder="Número da Casa" required>
</div>
<div class="inputBox">
    <button type="button" id="btn-pagamento" class="btn" style="width:100%;">Selecionar Forma de Pagamento</button>
  <div id="opcoes-pagamento" style="display:none; margin-top:10px;">
    <label><input type="radio" name="pagamento" value="Pix" required>Pix Chave </label>
    <label><input type="radio" name="pagamento" value="Dinheiro">Dinheiro</label>
    <label><input type="radio" name="pagamento" value="Cartão de Crédito">Cartão Crédito</label>
    <label><input type="radio" name="pagamento" value="Cartão de Débito">Cartão Débito</label>
</div>
</div>
        <button type="submit"  class="btn">Enviar Messagem</button>
    </form>
</div>
<!--FIM DO FORMULARIO  CONTATOS-->
<br>
<br>
<!--INICIO MAP DO GOOGLE -->
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3654.447638953111!2d-52.61070102541794!3d-23.65994466521997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ed5a1a432ef97d%3A0xdf6b5ee429f17d49!2sPra%C3%A7a%20Ant%C3%B4nio%20Mor%C3%A3es%20de%20Barros%2C%20192%20-%20Zona%201%2C%20Cianorte%20-%20PR%2C%2087200-000!5e0!3m2!1spt-BR!2sbr!4v1750386931387!5m2!1spt-BR!2sbr" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
<!--FIM MAP DO GOOGLE -->

</section>
<!--FIM CONTATOS-->


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


<!--INICIO JS GALERIA DO SITE -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/js/lightgallery.min.js"></script>
<script src="javascript.js"></script>
<script>
        lightGallery(document.querySelector('.galeria-fotos .galeria-container'))
</script>
<!--INICIO  JS DO SITE DO SITE-->


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
    // Botão para mostrar opções de pagamento
    const btnPagamento = document.getElementById('btn-pagamento');
    const opcoesPagamento = document.getElementById('opcoes-pagamento');
    if(btnPagamento && opcoesPagamento) {
        btnPagamento.addEventListener('click', function() {
            opcoesPagamento.style.display = opcoesPagamento.style.display === 'none' ? 'block' : 'none';
        });
    }
});
</script>


<script>
document.addEventListener('DOMContentLoaded', function() {
    // Botão para mostrar opções de pagamento
    const btnPagamento = document.getElementById('btn-pagamento');
    const opcoesPagamento = document.getElementById('opcoes-pagamento');
    if(btnPagamento && opcoesPagamento) {
        btnPagamento.addEventListener('click', function() {
            opcoesPagamento.classList.toggle('show');
        });
    }

    // Envio do formulário para WhatsApp
    const form = document.getElementById('form-pedido');
    if(form){
        form.addEventListener('submit', function(e) {
            e.preventDefault();

            const nome = form.nome.value.trim();
            const email = form.email.value.trim();
            const fone = form.fone.value.trim();
            const endereco = form.endereco.value.trim();
            const numero_casa = form.numero_casa.value.trim();
            const pagamento = form.querySelector('input[name="pagamento"]:checked');
            const pagamentoValor = pagamento ? pagamento.value : '';

            let mensagem = `Olá! Gostaria de fazer um pedido:%0A`;
            mensagem += `Nome: ${nome}%0A`;
            mensagem += `E-mail: ${email}%0A`;
            mensagem += `Telefone: ${fone}%0A`;
            mensagem += `Endereço: ${endereco}%0A`;
            mensagem += `Número: ${numero_casa}%0A`;
            mensagem += `Forma de Pagamento: ${pagamentoValor}%0A`;

            let carrinho = [];
            try {
                carrinho = JSON.parse(localStorage.getItem('carrinho')) || [];
            } catch {}
            if (carrinho.length > 0) {
                mensagem += `%0AItens do Carrinho:%0A`;
                carrinho.forEach((item, idx) => {
                    mensagem += `${idx + 1}. ${item.nome} - R$${item.valor.toFixed(2)}%0A`;
                });
                const total = carrinho.reduce((soma, item) => soma + item.valor, 0);
                mensagem += `Total: R$${total.toFixed(2)}%0A`;
            }

            const url = `https://wa.me/5544998153198?text=${mensagem}`;
            window.open(url, '_blank');
        });
    }
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

</body>
</html>

