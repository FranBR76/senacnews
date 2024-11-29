
    <?php include 'inc/header.inc.php';?>
    
    <div class="destaque">
        <section class="busca">
            <h2>Busca</h2>
            <form>
                    <input type="search">
                    <button>Busca</button>
            </form>

        </section>
        <!-- Fim busca -->
        <section class="menu-noticias">
            <h2>Notícias</h2>
            <nav>
                    <ul>
                        <li><a href="#">Esportes</a>
                                <ul>
                                    <li><a href="#">Futebol</a></li>
                                    <li><a href="#">Basquete</a></li>
                                    <li><a href="#">Vôlei</a></li>
                                </ul>
                        </li>
                        <li><a href="#">Policial</a>
                                <ul>
                                    <li><a href="#">Casos em aberto</a></li>
                                    <li><a href="#">Principais suspeitos</a></li>
                                    
                                </ul>

                        </li>
                        <li><a href="#">Economia</a>
                                <ul>
                                    <li><a href="#">Pagar mensalidade</a></li>
                                    <li><a href="#">Multas Biblioteca</a></li>
                                </ul>

                        </li>
                        <li><a href="#">Alunos</a>
                                <ul>
                                    <li><a href="#">Alunos mais leitores</a></li>
                                    <li><a href="#">Alunos em destaque</a></li>
                                    <li><a href="#">Alunos finalistas Ficthon</a></li>
                                </ul>
                    </li>
                        <li><a href="#">Eventos</a>
                                <ul>
                                    <li><a href="#">Ficthon</a></li>
                                    <li><a href="#">Palestras</a></li>
                                </ul>
                        </li>
                        <li><a href="#">Instituições</a>
                                <ul>
                                    <li><a href="#">Senac Café Escola</a></li>
                                    <li><a href="#">Faculdade Senac</a></li>
                                </ul>
                    
                        </li>
                        <li><a href="#">Biblioteca</a>
                                <ul>
                                    <li><a href="#">Emprestar livro</a></li>
                                    <li><a href="#">Renovar emprestimo</a></li>
                                    <li><a href="#">Multas</a></li>
                                </ul>
                        </li>
                        <li><a href="#">Calendário</a>
                                <ul>
                                    <li><a href="#">Provas</a></li>
                                    <li><a href="#">Trabalhos</a></li>
                                    <li><a href="#">Agendar aula extra</a></li>
                                </ul>
                        </li>
                    </ul>
            </nav>
        </section>

        <section class="destaque">
                
                    <!-- slide show -->
        <div class="slideshow-container">

<!-- Full-width images with number and caption text -->
<div class="mySlides fade">
  <div class="numbertext">1 / 4</div>
  <img src="img/gato.jpg" style="width:130%">
  <div class="text">GATO DE OCLIN</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 4</div>
  <img src="img/lobo.jpg" style="width:130%">
  <div class="text" style="color: #333;">Casa no meio do nada</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 4</div>
  <img src="img/w3.jpg" style="width:130%">
  <div class="text">Battlefield do paraguai em 4k</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">4 / 4</div>
  <img src="img/principal.jpg" style="width:130%">
  <div class="text">Wallpaper</div>
</div>

<!-- Next and previous buttons -->
<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
<span class="dot" onclick="currentSlide(1)"></span>
<span class="dot" onclick="currentSlide(2)"></span>
<span class="dot" onclick="currentSlide(3)"></span>
<span class="dot" onclick="currentSlide(4)"></span>
</div>
           

        </section>
</div>
        
<!-- fim destaque -->
        <div class="todo">
        <section class="feeds">
                  <h1 style="text-align: center;">Esse site é um projeto desenvolvido na disciplina de Desenvolvimento Web da Faculdade Senac - Ponta Grossa</h1>

                  <a class="botao" href="https://franbr76.github.io/enersyncnovoultimoPC">Projeto Startup</a>
                  <br><br>
                  <img style="width: 100%; text-align center;" src="img/foto2.jpg" alt="">
                  <img style="width: 100%; text-align center;" src="img/foto1.png" alt="">
                </section>
        
                <section class="principal">


                  <h2 style="text-align: center; background-color: #333;">Noticias</h2>
                    
                    <ul>
                      <li>
                        <a href="#">
                          <figure>
                            <br>
                            <img src="img/ficthon.jpg" style="padding-top: 35px;padding-bottom:35px;" alt="foto1">
                            <figcaption>Ficthon  </figcaption>
                          </figure>
                        </a> 
                
               
                        <p class="figtexto">O ficthon é uma competição que ocorrerá na capital Curitiba, ela tem por objetivo mobilizar os estudantes a respeito das ODS, para isso, cada equipe precisava desenvolver uma idea-ação voltada para resolução de um problema que tivesse relação com as ODS.</p>
                       </li>
              
              
              <li>
                  <a href="#">
                        <figure style="padding-left: 100px">
                            <img src="img/fone.png" style="width:30%;" alt="fone">
                            <figcaption style="text-align: left; padding-left: 50px;">Noticia 2</figcaption>
                        </figure>
                  </a><br>
                  <p class="figtexto">Alunos que participaram da competição da maratona Ficthon receberam uma camiseta do Ficthon, um card com figurinhas e um fone de ouvido bluetooth com a logo do Senac.</p>
              </li>
              
              
              <li>
                <a href="#">
                  <figure>
                    <img src="img/francesco.jpg" alt="foto1">
                    <figcaption>Noticia 3</figcaption>
                  </figure>
                </a>
<br>
                <p class="figtexto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos consequuntur veritatis dolore voluptate, illum quidem natus mollitia laboriosam repellendus ducimus.</p>
              </li>

 

  </ul></section>
 
                
               
               
               
        </div>















    
<!-- slide show js -->
    <script>
        let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
    </script>
    
   
   <?php include 'inc/footer.inc.php';?>

