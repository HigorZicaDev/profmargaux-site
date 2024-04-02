<?php
require_once("headerSite.php");
?>

<main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="section hero" id="home">
        <div class="container">

          <figure class="hero-banner border">
            <img src="./assets/images/fotohome.png" width="804" height="643" loading="lazy" alt="hero banner" style="height: auto;"
              class="w-100">
          </figure>

          <div class="hero-content">
            <div class="animacao-bandeira" style="display: flex; flex-direction: row;">
              <h2 class="h1 hero-title" style="margin-top: 95px;">Parlez-vous Français ?</h2>
              <lottie-player src="https://assets10.lottiefiles.com/packages/lf20_5kixer4y.json"  background="transparent"  speed="1"  style="width: 300px; height: 300px;" loop  autoplay></lottie-player>
            </div>

            <p class="section-text">
              Ideal para quem deseja melhorar seus conhecimentos de francês para fins acadêmicos ou profissionais e preparar-se para um diploma ou certificação internacional.  
            </p>
<!-- 
            <form action="" class="hero-form">
              <input type="email" name="email_address" placeholder="Enter Your Email" aria-label="Enter Your Email"
                required class="input-field">

              </form> -->
              <br>
              <button onclick="enviarMensagem()" class="btn btn-primary">COMEÇAR AGORA</button>
              <br><br>
            <ul class="hero-list">

              <li class="hero-item">
                <img src="./assets/images/check-circle.svg" width="16" height="16" loading="lazy" alt="Checkmark icon">

                <span class="span">Aulas Online </span>
              </li>

              <li class="hero-item">
                <img src="./assets/images/check-circle.svg" width="16" height="16" loading="lazy" alt="Checkmark icon">

                <span class="span">Material Personalizado</span>
              </li>

              <li class="hero-item">
                <img src="./assets/images/check-circle.svg" width="16" height="16" loading="lazy" alt="Checkmark icon">

                <span class="span">Suporte à duvidas</span>
              </li>

              <li class="hero-item">
                <img src="./assets/images/check-circle.svg" width="16" height="16" loading="lazy" alt="Checkmark icon">

                <span class="span">Conversação</span>
              </li>

              <li class="hero-item">
                <img src="./assets/images/check-circle.svg" width="16" height="16" loading="lazy" alt="Checkmark icon">

                <span class="span">Exercicios / Jogos</span>
              </li>

            </ul>

          </div>

        </div>
      </section>





      <!-- 
        - #SERVICE
      -->

      <section class="section service" id="objetivos">
        <div class="container">

          <h2 class="h2 section-title">QUAIS SÃO SEUS OBJETIVOS:</h2>

          <p class="section-text">
            NOSSAS AULAS DE FRANCÊS SÃO DESTINADAS PARA:
          </p>

          <ul class="service-list">

            <li>
              <div class="service-card">

                <figure class="card-banner">
                  <img src="./assets/images/globallanguage.png" width="728" height="344" loading="lazy" alt="support"
                    class="w-100" style="height: auto;" >
                </figure>

                <div class="card-content">

                  <h3 class="h3">
                    <a href="#" class="card-title">Amantes da língua e da cultura francesa</a>
                  </h3>

                  <p class="card-text">
                    A metodologia aplicada leva em consideração todas as competências necessárias (escuta, fala, leitura e escrita), para que o aluno alcance a fluência do idioma e adquira confiança para se comunicar e
                     interagir com nativos em diversas situações, como viagens, reuniões, entrevistas, ambientes sociais, etc.
                  </p>

                  <!-- <a href="#" class="btn-link">
                    <span class="span">Saber mais</span>

                    <ion-icon name="arrow-forward" aria-hidden="true" style="margin-top: 25px !important;"></ion-icon>
                  </a> -->

                </div>

              </div>
            </li>

            <li>
              <div class="service-card">

                <figure class="card-banner">
                  <img src="./assets/images/bussines.png" width="728" height="344" loading="lazy" alt="Engagement"
                    class="w-100" style="height: auto;">
                </figure>

                <div class="card-content">

                  <h3 class="h3">
                    <a href="#" class="card-title">Trabalho / Intercâmbio</a>
                  </h3>

                  <p class="card-text">
                    Para quem deseja morar, trabalhar ou estudar em um país francófono esse modelo de aulas é o ideal.
                  </p>

                  <!-- <a href="#" class="btn-link">
                    <span class="span">Saber mais</span>

                    <ion-icon name="arrow-forward" aria-hidden="true" style="margin-top: 25px !important;"></ion-icon>
                  </a> -->

                </div>

              </div>
            </li>

            <li>
              <div class="service-card">

                <figure class="card-banner">
                  <img src="./assets/images/dialog.png" width="728" height="344" loading="lazy" alt="Marketing"
                    class="w-100" style="height: auto;">
                </figure>

                <div class="card-content">

                  <h3 class="h3">
                    <a href="#" class="card-title">Alcançando a fluência</a>
                  </h3>

                  <p class="card-text">
                    Para quem deseja estudar em um país francófono (pos-graduação, mestrado).Ou mesmo para quem já fez francês e ainda não alcançou a fluência.
                  </p>

                  <!-- <a href="#" class="btn-link">
                    <span class="span">Saber mais</span>

                    <ion-icon name="arrow-forward" aria-hidden="true" style="margin-top: 25px !important;"></ion-icon>
                  </a> -->

                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #FEATURES
      -->

      <section class="section features">
        <div class="container">

          <div class="features-content">

            <h2 class="h2 section-title">Por que você deve aprender Francês ?</h2>

            <p class="section-text">
              7 excelentes motivos para aprender Francês:
            </p>

            <ul class="features-list">

              <li class="features-item">
                <img src="./assets/images/check-circle.svg" width="26" height="26" loading="lazy" aria-hidden="true"
                  class="item-icon">

                <p class="item-title">O francês é uma língua falada por aproximadamente 270 milhões de pessoas no mundo!</p>
              </li>

              <li class="features-item">
                <img src="./assets/images/check-circle.svg"" width="26" height="26" loading="lazy" aria-hidden="true"
                  class="item-icon">

                <p class="item-title">É uma das únicas línguas faladas nos 5 continentes.</p>
              </li>

              <li class="features-item">
                <img src="./assets/images/check-circle.svg" width="26" height="26" loading="lazy" aria-hidden="true"
                  class="item-icon">

                <p class="item-title">Quem domina o idioma pode trabalhar na França, Bélgica, Canadá e também em pulsantes economias africanas, como o Marrocos.</p>
              </li>

              <li class="features-item">
                <img src="./assets/images/check-circle.svg" width="26" height="26" loading="lazy" aria-hidden="true"
                  class="item-icon">

                <p class="item-title">A França é o país mais visitado do mundo com mais de 70 milhões de turistas por ano.</p>
              </li>

              <li class="features-item">
                <img src="./assets/images/check-circle.svg" width="26" height="26" loading="lazy" aria-hidden="true"
                  class="item-icon">

                <p class="item-title">O francês é a língua da diplomacia, além de ser idioma oficial e de trabalho das mais importantes organizações internacionais do mundo: ONU, União Europeia, 
                  UNESCO, OTAN, Comitê Olímpico Internacional, Cruz Vermelha, FIFA e até os Correios!.</p>
              </li>

              <li class="features-item">
                <img src="./assets/images/check-circle.svg" width="26" height="26" loading="lazy" aria-hidden="true"
                  class="item-icon">

                <p class="item-title"> É a terceira língua mais utilizada na Internet.</p>
              </li>

              <li class="features-item">
                <img src="./assets/images/check-circle.svg" width="26" height="26" loading="lazy" aria-hidden="true"
                  class="item-icon">

                <p class="item-title">As bases do idioma francês facilitam no aprendizado de línguas latinas (como o espanhol e o italiano).</p>
              </li>

            </ul>

          </div>

          <div class="banner-wrapper">

            <figure class="features-banner one">
              <img src="./assets/images/giphy3.webp" width="600" height="500" loading="lazy"
                alt="features image" class="w-100">
            </figure>

          </div>

        </div>
      </section>





      <!-- 
        - #ABOUT
      -->

      <section class="section about" id="informacoes">
        <div class="container">

          <h2 class="h2 section-title">Informações / Pacotes</h2>

          <ul class="about-list">

            <li>
              <div class="about-card about-card-1">

                <figure class="card-banner">
                  <img src="./assets/images/iconeInfo.png" width="150" height="120" loading="lazy"
                    alt="Automated Ticket Routing">
                </figure>

                <div class="card-content">

                  <h3 class="h3">
                    <a href="#" class="card-title">Pacote Básico</a>
                  </h3>
                  <p class="section-text">
                    4 aulas / Durante 1 mês.
                  </p>

                  <ul class="features-list">
                    <li class="features-item">
                      <img src="./assets/images/check-circle.svg" width="26" height="26" loading="lazy" aria-hidden="true" class="item-icon">
      
                      <p class="card-text">Material didático especializado ao nível do aluno!</p>
                    </li>
                  </ul>

                  <ul class="features-list">
                    <li class="features-item">
                      <img src="./assets/images/check-circle.svg" width="26" height="26" loading="lazy" aria-hidden="true" class="item-icon">
      
                      <p class="card-text">Aprender francês por prazer, num ritmo tranquilo ou para fins acadêmicas ou profissionais ao longo prazo.</p>
                    </li>
                  </ul>

                  <ul class="features-list">
                    <li class="features-item">
                      <img src="./assets/images/check-circle.svg" width="26" height="26" loading="lazy" aria-hidden="true" class="item-icon">
      
                      <p class="card-text">Foco nas competências orais.</p>
                    </li>
                  </ul>

                  <ul class="features-list">
                    <li class="features-item">
                      <img src="./assets/images/check-circle.svg" width="26" height="26" loading="lazy" aria-hidden="true" class="item-icon">
      
                      <p class="card-text">Método dedicado ao aprendizado para viajar, ler ou entender filmes, aproximação da cultura.</p>
                    </li>
                  </ul>

                  <ul class="features-list">
                    <li class="features-item">
                      <img src="./assets/images/check-circle.svg" width="26" height="26" loading="lazy" aria-hidden="true" class="item-icon">
      
                      <p class="card-text">Imersão na cultura francesa.</p>
                    </li>
                  </ul>

                  <!-- <a href="#" class="btn-link">
                    <span class="span">Saber mais</span>

                    <ion-icon name="arrow-forward" aria-hidden="true" style="margin-top: 25px !important;"></ion-icon>
                  </a> -->

                </div>

              </div>
            </li>

            <li>
              <div class="about-card about-card-2">

                <figure class="card-banner">
                  <img src="./assets/images/iconeInfo.png" width="150" height="120" loading="lazy"
                    alt="Workflow Automation">
                </figure>

                <div class="card-content">

                  <h3 class="h3">
                    <a href="#" class="card-title">Pacote Intermediário</a>
                  </h3>
                  <p class="section-text">
                    8 aulas / Durante 1 mês
                  </p>

                  <ul class="features-list">
                    <li class="features-item">
                      <img src="./assets/images/check-circle.svg" width="26" height="26" loading="lazy" aria-hidden="true" class="item-icon">
      
                      <p class="card-text">Material didático especializado ao nível do aluno!</p>
                    </li>
                  </ul>

                  <ul class="features-list">
                    <li class="features-item">
                      <img src="./assets/images/check-circle.svg" width="26" height="26" loading="lazy" aria-hidden="true" class="item-icon">
      
                      <p class="card-text">Aprender francês com prazer e rigor. Ideal tanto para quem deseja aprender por prazer quanto para quem precisa de um certificado oficial da língua francesa.</p>
                    </li>
                  </ul>

                  <ul class="features-list">
                    <li class="features-item">
                      <img src="./assets/images/check-circle.svg" width="26" height="26" loading="lazy" aria-hidden="true" class="item-icon">
      
                      <p class="card-text">Trabalho especializado nos pontos fortes e fracos do estudante.</p>
                    </li>
                  </ul>

                  <ul class="features-list">
                    <li class="features-item">
                      <img src="./assets/images/check-circle.svg" width="26" height="26" loading="lazy" aria-hidden="true" class="item-icon">
      
                      <p class="card-text">Presença da gramática mas foco nas competências orais. Imersão maior e mais rápida na cultura francesa.</p>
                    </li>
                  </ul>

                  <ul class="features-list">
                    <li class="features-item">
                      <img src="./assets/images/check-circle.svg" width="26" height="26" loading="lazy" aria-hidden="true" class="item-icon">
      
                      <p class="card-text">Dicas para intercâmbio.</p>
                    </li>
                  </ul>

                  <!-- <a href="#" class="btn-link">
                    <span class="span">Saber mais</span>

                    <ion-icon name="arrow-forward" aria-hidden="true" style="margin-top: 25px !important;"></ion-icon>
                  </a> -->

                </div>


              </div>
            </li>

            <li>
              <div class="about-card about-card-3">

                <figure class="card-banner">
                  <img src="./assets/images/iconeInfo.png" width="150" height="120" loading="lazy"
                    alt="Automated Callback">
                </figure>

                <div class="card-content">

                  <h3 class="h3">
                    <a href="#" class="card-title">Pacote Intensivo</a>
                  </h3>
                  <p class="section-text">
                    12 aulas / Durante 1 mês
                  </p>

                  <ul class="features-list">
                    <li class="features-item">
                      <img src="./assets/images/check-circle.svg" width="26" height="26" loading="lazy" aria-hidden="true" class="item-icon">
      
                      <p class="card-text">Material didático especializado ao nível do aluno!</p>
                    </li>
                  </ul>

                  <ul class="features-list">
                    <li class="features-item">
                      <img src="./assets/images/check-circle.svg" width="26" height="26" loading="lazy" aria-hidden="true" class="item-icon">
      
                      <p class="card-text">Aprender francês de modo acelerado. Grande evolução garantida em menos de 4 meses.</p>
                    </li>
                  </ul>

                  <ul class="features-list">
                    <li class="features-item">
                      <img src="./assets/images/check-circle.svg" width="26" height="26" loading="lazy" aria-hidden="true" class="item-icon">
      
                      <p class="card-text">Altamente recomendado para quem vai fazer intercâmbio ou para quem deseja se mudar num país francófono.</p>
                    </li>
                  </ul>

                  <ul class="features-list">
                    <li class="features-item">
                      <img src="./assets/images/check-circle.svg" width="26" height="26" loading="lazy" aria-hidden="true" class="item-icon">
      
                      <p class="card-text">Preparação para os exames oficiais do tipo DELF, DALF, TCF e TEF.</p>
                    </li>
                  </ul>

                  <ul class="features-list">
                    <li class="features-item">
                      <img src="./assets/images/check-circle.svg" width="26" height="26" loading="lazy" aria-hidden="true" class="item-icon">
      
                      <p class="card-text">Uso frequente de trechos de filmes franceses, de músicas francesas então uma grande descoberta da maravilhosa cultura francesa.Dicas para intercâmbio.</p>
                    </li>
                  </ul>

                  <!-- <a href="#" class="btn-link">
                    <span class="span">Saber mais</span>

                    <ion-icon name="arrow-forward" aria-hidden="true" style="margin-top: 25px !important;"></ion-icon>
                  </a> -->

                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>

      <!-- 
        - #STATS
      -->

      <section class="section stats" id="sobre">
        
        <h2 class="h2 section-title" style="text-align: center; margin-bottom: 30px;">Minha História</h2>

        <div class="container">

          <figure class="stats-banner">
            <img src="./assets/images/fotosite.png" width="700" height="500" loading="lazy" alt="stats"
              class="w-100" style="border-radius: 50%;">
          </figure>

          <ul class="stats-list">

            <li class="stats-item purple">
              <h3 class="item-title">
                2015
                <span class="span">Ano</span>
              </h3>

              <p class="stats-text">Iniciei meus estudos na Universidade Paul Valery - Montpellier.</p>
            </li>

            <li class="stats-item red">
              <h3 class="item-title">
                2018
                <span class="span">Ano</span>
              </h3>

              <p class="stats-text">Morei no Brasil e estudei na UFMG em um programa de intercambio.</p>
            </li>

            <li class="stats-item green">
              <h3 class="item-title">
                2020
                <span class="span">Ano</span>
              </h3>

              <p class="stats-text">Criei minha empresa de aulas particulares / consultoria para os meus alunos dominarem a língua francesa.</p>
            </li>

            <li class="stats-item yellow">
              <h3 class="item-title">
                2022
                <span class="span">Ano</span>
              </h3>

              <p class="stats-text">Retornei para França para morar e efetuar minha pós-graduação e especialização no ensino do françês para estrangeiros.</p>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #APP
      -->
<!-- 
      <section class="section app">
        <div class="container">

          <div class="app-content">

            <h2 class="h2 section-title">Download Mobile App To Stay Connected</h2>

            <p class="section-text">
              Techx Projects gives you the added advantage of several other Techx apps and third party apps through
              seamless
              integrations.
            </p>

            <div class="btn-group">

              <a href="#" class="btn btn-primary">
                <img src="./assets/images/play-store.svg" width="30" height="31" loading="lazy" alt="play store icon">

                <span class="span">
                  GET IT ON
                  <strong class="strong">Google Play</strong>
                </span>
              </a>

              <a href="#" class="btn btn-secondary">
                <img src="./assets/images/apple-store.svg" width="30" height="31" loading="lazy" alt="apple store icon">

                <span class="span">
                  GET IT ON
                  <strong class="strong">Apple Store</strong>
                </span>
              </a>

            </div>

          </div>

          <figure class="app-banner">
            <img src="./assets/images/app-banner.png" width="748" height="536" loading="lazy" alt="app screenshot"
              class="w-100">
          </figure>

        </div>
      </section> -->





      <!-- 
        - #SUPPORT
      -->
<!-- 
      <section class="section support">
        <div class="container">

          <div class="support-content">
            <h2 class="h2 section-title">24/7 Customer Support</h2>

            <p class="section-text">
              Our team is here to provide you with personalized and outstanding service. We also offer a range of
              self-learning tools
              in our support center:
            </p>
          </div>

          <a href="#" class="btn btn-primary">Contact Us Now</a>

        </div>
      </section> -->

    </article>
  </main>

<?php
require_once("footerSite.php");
?>