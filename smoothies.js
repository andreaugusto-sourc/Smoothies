const cabeca = () =>{
    let cabeca = document.querySelector('div.header')
    cabeca.innerHTML =`
    <div class = "cabecalho">
            <a href="index.html"><img src = "images/smoothieslogo.png" id= "imagemlogo" alt= "não achamos a imagem"></a>

            <form id="caixas" action ="" method= "post">
                <label for class ="quest"></label>
                <input class= "quest" type= "text" placeholder="Pesquisar delicias">

                <button type="submit" id= "button">Pesquisar</button>
            </form>
            <form action ="" method= "post" >
                <button type="submit" id= "carrinho" >
                 <a href="smoothiescarrinho.html"> <i class="gg-shopping-cart"></i><p id= "botao">Carrinho</p></a> 
                </button>
            </form>
            <form action ="" method= "post">
                <button type="submit" id= "perfil">
                 <p id = "conta"> <i class="gg-icecream"><a href="cliente.html"></i>Minha Conta</p></a>
                </button>
            </form>

        </div>
        <div id= "sub">
            <a href="smoothiequemsomos.html" class="externos">Sobre a Loja</a>
            <a href="dashboard.html"  class="externos">Dashboard</a>
            <a href="smoothiequemsomos.html" class="externos">Quem somos nós?</a>
            <a href="cliente.html"  class="externos">Cadastro</a>
        </div>`
}
cabeca()

const pe = () =>{
    let pe = document.querySelector('footer.footer')
    pe.innerHTML = `
    <footer id= "link">
                <div id = "links">
                    <h1 class  = "link1">Nossa Loja</h1>
                <ul>
                    <li class = "linklista">
                        <a href="https://www.instagram.com/lolk_official/" target="_blank">link</a>
                    </li>
                    <li class = "linklista">
                        <a href="https://www.instagram.com/lolk_official/" target="_blank">link</a>
                    </li>
                    <li class = "linklista">
                        <a href="https://www.instagram.com/lolk_official/" target="_blank">link</a>
                    </li>
                    <li class = "linklista">
                        <a href="https://www.instagram.com/lolk_official/" target="_blank">link</a>
                    </li>
                    <li class = "linklista">
                        <a href="https://www.instagram.com/lolk_official/" target="_blank">link</a>
                    </li>
                    <li class = "linklista">
                        <a href="https://www.instagram.com/lolk_official/" target="_blank">link</a>
                    </li>
                </ul>
                </div>

                <div id = "links">
                    <h1 class  = "link1">Nossa Loja</h1>
                <ul>
                    <li class = "linklista">
                        <a href="https://www.instagram.com/lolk_official/" target="_blank">link</a>
                    </li>
                    <li class = "linklista">
                        <a href="https://www.instagram.com/lolk_official/" target="_blank">link</a>
                    </li>
                    <li class = "linklista">
                        <a href="https://www.instagram.com/lolk_official/" target="_blank">link</a>
                    </li>
                    <li class = "linklista">
                        <a href="https://www.instagram.com/lolk_official/" target="_blank">link</a>
                    </li>
                    <li class = "linklista">
                        <a href="https://www.instagram.com/lolk_official/" target="_blank">link</a>
                    </li>
                    <li class = "linklista">
                        <a href="https://www.instagram.com/lolk_official/" target="_blank">link</a>
                    </li>
                </ul>
                </div>

                <div id = "links">
                    <h1 class = "link1">Nossa Loja</h1>
                <ul>
                    <li class = "linklista">
                        <a href="https://www.instagram.com/lolk_official/" target="_blank">link</a>
                    </li>
                    <li class = "linklista">
                        <a href="https://www.instagram.com/lolk_official/" target="_blank">link</a>
                    </li>
                    <li class = "linklista">
                        <a href="https://www.instagram.com/lolk_official/" target="_blank">link</a>
                    </li>
                    <li class = "linklista">
                        <a href="https://www.instagram.com/lolk_official/" target="_blank">link</a>
                    </li>
                    <li class = "linklista">
                        <a href="https://www.instagram.com/lolk_official/" target="_blank">link</a>
                    </li>
                    <li class = "linklista">
                        <a href="https://www.instagram.com/lolk_official/" target="_blank">link</a>
                    </li>
                </ul>
                </div>

                <div id = "links">
                    <h1 class  = "link1">Nossa Loja</h1>
                <ul>
                    <li class = "linklista">
                        <a href="https://www.instagram.com/lolk_official/" target="_blank">link</a>
                    </li>
                    <li class = "linklista">
                        <a href="https://www.instagram.com/lolk_official/" target="_blank">link</a>
                    </li>
                    <li class = "linklista">
                        <a href="https://www.instagram.com/lolk_official/" target="_blank">link</a>
                    </li>
                    <li class = "linklista">
                        <a href="https://www.instagram.com/lolk_official/" target="_blank">link</a>
                    </li>
                    <li class = "linklista">
                        <a href="https://www.instagram.com/lolk_official/" target="_blank">link</a>
                    </li>
                    <li class = "linklista">
                        <a href="https://www.instagram.com/lolk_official/" target="_blank">link</a>
                    </li>
                </ul>
                </div>
            </footer>

    <footer id= "principal">
        <footer id= "rodapé">
                <h1 id ="pagamento">Formas de Pagamento</h1>
            <div class= "cartoes">
                <img src="assets/footer/cartoes/amazon.png" class= "cartao" alt = "não achamos a imagem">
                <img src="assets/footer/cartoes/americanexpress.png" class= "cartao" alt = "não achamos a imagem">
                <img src="assets/footer/cartoes/delta.png" class= "cartao" alt = "não achamos a imagem">
                <img src="assets/footer/cartoes/discover.png" class= "cartao" alt = "não achamos a imagem">
                <img src="assets/footer/cartoes/ebay.png" class= "cartao" alt = "não achamos a imagem">
                <img src="assets/footer/cartoes/maestro.png" class= "cartao" alt = "não achamos a imagem">
                <img src="assets/footer/cartoes/mastercard.png" class= "cartao" alt = "não achamos a imagem">
                <img src="assets/footer/cartoes/paypal.png" class= "cartao" alt = "não achamos a imagem">
                <img src="assets/footer/cartoes/solo.png" class= "cartao" alt = "não achamos a imagem">
                <img src="assets/footer/cartoes/stripe.png" class= "cartao" alt = "não achamos a imagem">
                <img src="assets/footer/cartoes/switch.png" class= "cartao" alt = "não achamos a imagem">
                <img src="assets/footer/cartoes/visa.png" class= "cartao" alt = "não achamos a imagem">
                <img src="assets/footer/cartoes/visaelectron.png" class= "cartao" alt = "não achamos a imagem">
            </div>
        </footer>
        <footer id = "rodapé2">
            <h1 id ="certificado">Certificado de segurança</h1>
            
                <img src="assets/footer/selos/reclame_aqui.jpg" class= "selo" alt = "não achamos a imagem">
                <img src="assets/footer/selos/safebrowser.png" class= "selo" alt = "não achamos a imagem">
                <img src="assets/footer/selos/seal.png" class= "selo" alt = "não achamos a imagem">
            
        </footer>
    </footer>

        <footer id="pe">
            <div class="logo-rodape">
                <img src = "images/smoothieslogo.png" id= "imagemPé" alt= "não achamos a imagem">
            </div>
            <div id= "redes">
                <img src = "images/insta.png" class="social" alt= "não achamos a imagem">
                <img src = "images/pinterest.png" class="social" alt= "não achamos a imagem">
                <img src = "images/facebook.png" class="social" alt= "não achamos a imagem">
            </div>
        </footer>`
}
pe()