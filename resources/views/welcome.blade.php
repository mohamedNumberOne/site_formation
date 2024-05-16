<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Formation Dev Web </title>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
         <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">    
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('icones/all.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <style>
    .msg {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%,-50%) ;
      width: 300px; 
      box-shadow: 0 0 10px #444444 ;
      border : 1px solid #eee ;
      border-radius: 5px; 
      color:black ;
       
      z-index: 10;
      background-color: rgb(247, 242, 242) ; 
      padding: 5px ;
    }
  </style>

</head>

<body class="antialiased">
  
    <div class=" ">
        @if (Route::has('login'))
        <livewire:welcome.navigation />
        @endif
    </div>

   {{-- ======= Header =======  --}}
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <div class="logo me-auto">
        <h1><a href="{{ route('welcome') }}"> <i class="bi bi-code-slash"></i>  </a></h1> 
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto scrollto" href="#about"> À propos de nous </a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto" href="#courses">Formations</a></li>
          <li><a class="nav-link scrollto" href="#testimonials">Témoignages</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>

          {{-- <li><a class="nav-link scrollto" href=""> Mon compte   </a></li>  --}}

            @auth
                <a href="{{ url('/dashboard') }}" class="nav-link" wire:navigate>
                  Mon Profile 
                  <i class="fa-solid fa-user-graduate"></i> 
                </a>
            @else
                <a href="{{ route('login') }}" 
                  class=" nav-link" wire:navigate > 
                  Se Connecter 
                </a>
        
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" 
                      class="nav-link" wire:navigate>
                      S'inscrire 
                    </a>
                @endif
            @endauth


          {{-- {{ route('login') }} --}}

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <!-- .navbar -->

      <div class="header-social-links d-flex align-items-center">
      
        <a href="https://www.facebook.com/formation.dev.web.fullstack"  target="_blank"  class="facebook">
            <i class="bi bi-facebook"></i>
        </a>
        <a href="https://www.instagram.com/formation.dev.web/"   target="_blank" class="instagram">
            <i class="bi bi-instagram"></i>
        </a>
 
      </div>

    </div>
  </header>
   {{-- End Header  --}}

   @if (session() ->has('msg'))
 
   <div class="msg"  id="fermer"  >
    <div>     
      <p class="text-center" > {{   session('msg')   }}  </p>
      <center> <div class="btn btn-primary" > Ok </div> </center>
    </div>
   </div>
  
 
 @endif

     <!-- ======= Hero Section ======= -->
  <section id="hero">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="fade-up">
          <div>
            <h1>Découvrez les bases du développement web à partir de zéro. </h1>
            <h2>
              Commencez votre voyage vers le développement web ! <hr>
              Créez, innovez et réalisez votre vision en ligne aujourd'hui !

            </h2>
            <a href="#about" class="btn-get-started scrollto">Commencer!</a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left">
            <center>
          <img src="assets/img/hero-img.png" class="img-fluid" alt=""></center>
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

   
  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-lg-6" data-aos="zoom-in">
            <img src="{{ asset('assets/img/bgp.jpg') }}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 d-flex flex-column justify-contents-center" data-aos="fade-left">
            <div class="content pt-4 pt-lg-0">
              <h3>À propos de nous  </h3>
              <p class="fst-italic">
                Découvrez notre programme de formation en ligne exceptionnel en développement web, conçu pour vous guider vers la maîtrise des langages <span class="text-danger" > HTML </span> , <span class="text-success" > CSS </span>, 
                <span class="text-primary" >JavaScript </span> , <span class="text-success" > PHP </span> 
                et <span class="text-danger" >SQL </span>. 
                <br>
                Pendant une période d'un mois et demi, vous plongerez dans l'univers du développement web trois fois par semaine, partant de zéro à chaque session. <br> 
                Nos cours détaillés et dynamiques vous offriront une expérience d'apprentissage engageante, agrémentée d'exercices pratiques conçus pour renforcer vos compétences à chaque étape. 
                <br>
                De plus, chaque session sera enregistrée pour vous permettre de les revoir à tout moment, garantissant ainsi votre succès dans ce domaine passionnant et en constante évolution
              </p>
               
            </div>
          </div>
        </div>

      </div>
    </section>
    <!-- End About Section -->


    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Services</h2>
          <p>Nous offrons une gamme complète de services pour répondre aux besoins de nos clients dans le domaine du développement web et de la conception de publications sur les réseaux sociaux:</p>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in">
            <div class="icon-box icon-box-pink">
              <div class="icon"> <i class="fa-solid fa-chalkboard-user"></i> </div>
              <h4 class="title"><a href=""> Formations En ligne </a></h4>
              <p class="description">
                Parcours complet de formation en développement web,  avec des cours interactifs, des exercices pratiques et un suivi personnalisé pour garantir votre succès.
              </p>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box icon-box-cyan">
              <div class="icon"> <i class="fa-solid fa-laptop-code"></i>  </div>
              <h4 class="title"><a href=""> Création sites/App WEB    </a></h4>
              <p class="description">
                Conception sur mesure de sites web et d'applications web dynamiques, réactives et esthétiquement remarquables pour répondre aux besoins spécifiques de votre entreprise.
              </p>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box icon-box-green">
              <div class="icon">  <i class="fa-solid fa-pen-nib"></i> </div>
              <h4 class="title"><a href=""> Conceptions & Design </a></h4>
              <p class="description">
                Création de contenus visuels captivants et stratégies de marketing social pour renforcer votre présence en ligne, stimuler l'engagement et atteindre votre public cible.
              </p>
            </div>
          </div>

        </div>

      </div>
    </section>
    <!-- End Services Section -->

    <!-- Courses Section -->
    <section id="courses" class="courses section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Nos formations</h2>
       
      </div>
      <!-- End Section Title -->

      <div class="container">

        <div class="row">

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="course-item">
              <img src="assets/img/front-code.png" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <p class="category bg-primary"> FrontEnd  </p>
                  <p class="price">10,000 DA.</p>
                </div>
                <p class="description">
                  La formation Frontend, d'une durée de trois semaines, couvre les trois langages essentiels (HTML, CSS et JavaScript). 
                  <br>Elle vous permettra d'acquérir une solide maîtrise dans la création de pages web, la conception graphique, ainsi que dans l'ajout d'interactivité à vos sites grâce à JavaScript.

                  </p>
      
              </div>
            </div>
          </div> 
          <!-- End Course Item-->
 
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="course-item">
              <img src="assets/img/backend.png"  class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <p class="category bg-warning"> BackEnd  </p>
                  <p class="price">10,000 DA.</p>
                </div>
                <p class="description">
                  La formation Backend, axée sur PHP, SQL et la pratique,  Pendant la durée de la formation (3 semaines) , vous serez immergé dans l'apprentissage de PHP et SQL, ainsi que dans des exercices pratiques pour consolider vos compétences.
                </p>
              </div>
            </div>
          </div> 
          <!-- End Course Item-->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="course-item">
              <img src="assets/img/full.jpg" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <p class="category bg-dark"> FullStack  </p>
                  <p class="price">20,000 DA.</p>
                </div>
                <p class="description">
                  La formation  Development Web Fullstack , d'une durée d'un mois et demi, offre une approche complète pour devenir un développeur web polyvalent. <br> 
                  Vous explorerez en profondeur les langages et technologies clés, notamment HTML, CSS, JavaScript, PHP et SQL, tout en mettant l'accent sur la pratique intensive pour consolider vos compétences.
                </p>
      
              </div>
            </div>
          </div> 
          <!-- End Course Item-->


        </div>

      </div>

    </section><!-- /Courses Section -->


        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials">
          <div class="container">
    
            <div class="section-title" data-aos="fade-up">
              <h2>Témoignages</h2>
              <p>
                Voici ce que nos apprenants satisfaits ont à dire à propos de leur expérience avec notre formation en développement web. <br>Leurs témoignages authentiques reflètent notre engagement envers l'excellence et la réussite de nos étudiants. <br> 
                Découvrez comment notre programme a transformé leurs aspirations en compétences tangibles et a ouvert de nouvelles opportunités dans le monde passionnant du développement web
              </p>
            </div>
    
            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
              <div class="swiper-wrapper">
    


                <div class="swiper-slide">
                  <div class="testimonial-item">
                    <p>
                      <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                      دورة رائعة. من أحسن الدورات التي عملتها.
                          عندي سنتين ملي درتها.
                          دورة بمنهجية رائعة ومنظمة مع المتابعة
                          وحتى الاستاذ يخليك تدرس وتفهم خاصة التمارين بعد كل حصة وتصحيحها.
                          رغم اني بدأت من الصفر ولم أكن اعرف شيء لكن لم أصدق المستوى الذي وصلت له.
                          باختصار دورة تختصر عليك الكثير.
                          ألف شكر استاذ وبارك الله فيك.
                      <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                    <img src="{{ asset('assets/img/testimonials/avatar-woman.png') }}" class="testimonial-img" alt="">
                    <h3>Sara lina</h3>
                    <h4>Etudiante</h4>
                  </div>
                </div>
                <!-- End testimonial item -->



                <div class="swiper-slide">
                  <div class="testimonial-item">
                    <p>
                      <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                      Une très bonne formation bien expliquer avec un bon professeur à l'écoute, vous verrez que le développement web n'est pas si compliqué que ça
                      <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                    <img src="{{ asset('assets/img/testimonials/avatar-man.png') }}" class="testimonial-img" alt="avatar">
                    <h3>  Wahab </h3>
                    <h4> Etudiant </h4>
                  </div>
                </div><!-- End testimonial item -->
    

    

                <div class="swiper-slide">
                  <div class="testimonial-item">
                    <p>
                      <i class="bx bxs-quote-alt-left quote-icon-left"></i>
     
                      دورة رائعة كنت ابحث عنها منذ وقت طويل. ولم اكن اتخيل انها بهذا المستوى. رغم انها اونلاين ولكن كانت في القمة. رغم اني مبتدأة الا انني بفضل الاستاذ المحترم والبرنامج الرائع وصلت الى مستوى لم أكن احلم به في فترة وجيزة.
                      <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                    <img src="{{ asset('assets/img/testimonials/avatar-woman.png') }}" class="testimonial-img" alt="">
                    <h3> sousou  </h3>
                    <h4>Etudiante</h4>
                  </div>
                </div>
                <!-- End testimonial item -->

                <div class="swiper-slide">
                  <div class="testimonial-item">
                    <p>
                      <i class="bx bxs-quote-alt-left quote-icon-left"></i>
     
                    
قبل دخولي للدورة كنت صفر بالبرمجة مانعرف حتى شي ولما دخلتها الحمدلله تعلمت وفهمت ماشاء الله مدرب في القمة .
                      <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                    <img src="{{ asset('assets/img/testimonials/avatar-woman.png') }}" class="testimonial-img" alt="">
                    <h3> Tamu Susume    </h3>
                    <h4>Etudiante</h4>
                  </div>
                </div>
                <!-- End testimonial item -->


               
              </div>
              <div class="swiper-pagination"></div>
            </div>
    
          </div>
        </section>
        <!-- End Testimonials Section -->


        <!-- ======= faq Section ======= -->

        <section id="faq" class="faq">
          <div class="container">
    
            <div class="section-title" data-aos="fade-up">
              <h2>    Questions  & réponses  </h2>
            </div>
    
            <ul class="faq-list">
    
              <li>
                <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">
                  Combien de cours étudierons-nous par semaine ?
                  <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i>
                </div>
                <div id="faq1" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    Nous aurons 3 cours par semaine, le vendredi, le samedi et le mardi.
                  </p>
                </div>
              </li>

              <li>
                <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">
                  Je suis étudiant universitaire. Votre programme flexible me permet-il d'étudier ? J'ai un emploi du temps assez chargé.
                  <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i>
                </div>
                <div id="faq2" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    Oui, bien sûr. Notre programme est spécialement conçu pour les étudiants et les travailleurs, afin de s'adapter aux horaires d'étude et de travail. <br>
                    Nos horaires d'étude  <b> (En ligne)  </b>   commencent généralement en soirée, après 19h00, les weekends.
                  </p>
                </div>
              </li>
    
              <li>
                <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">
                  Est-ce que nous obtiendrons un certificat  à la fin des cours ?
                  <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i>
                </div>
                <div id="faq3" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    Oui, vous recevrez un certificat de participation à la fin de la formation.
                  </p>
                </div>
              </li>
    
             
            </ul>
    
          </div>
        </section>
        <!--   faq Section -->


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
    
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Contact</h2>
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch" data-aos="fade-right">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Adresse:</h4>
                <p>Alger</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>contact@formation-dev-web.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Mobile:</h4>
                <p> 0696 68 54 86 </p>
              </div>

              <div class="mb-4 d-flex align-items-center">
        
                <a href="https://www.facebook.com/formation.dev.web.fullstack"  target="_blank"  class="facebook">
                    <i class="bi bi-facebook"></i>
                </a>
                <a href="https://www.instagram.com/formation.dev.web/"   target="_blank" class="instagram ml-4">
                    <i class="bi bi-instagram"></i>
                </a>
                
              </div>

           
            </div>

          </div>




          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch" data-aos="fade-left">
            {{-- {{{ route('form_ins') }}} --}}
            <form action="{{ route('form_ins') }}" method="post" role="form" class="php-email-form">
              @csrf
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name"> Nom & Prénom <i class="fa-solid fa-user"></i> </label>
                  <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="form-group col-md-6 mt-3 mt-md-0">
                  <label for="name"> Email <i class="fa-solid fa-envelope"></i> </label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div>
              </div>
            

              <div class="form-group mt-3">
                <label > Mobile   <i class="fa-solid fa-phone"></i>  </label>
                <input type="number" class="form-control" name="tlf"   required>
              </div>


              <div class="form-group mt-3">
                <label for="name">Formation <i class="fa-solid fa-book"></i></label>
                <select name="formation" id=""  class="form-control"   required >
                  <option></option>
                  <option value="Frontend"> Frontend (Html , Css , Js )  </option>
                  <option value="Backend"> Backend (Php , Mysql)</option>
                  <option value="FullStack"> FullStack (Html , Css , Js , Php , Mysql )  </option>
                  <option value="autre"> autre formation  </option>
                </select>
              </div>

              <div class="form-group mt-3">
                <label for="name">Message <i class="fa-brands fa-facebook-messenger"></i></label>
                <textarea class="form-control" name="message" rows="10" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">  Envoyer </button></div>
            </form>
          </div>

        </div>

      </div>
    </section>
    <!-- End Contact Section -->




  </main>



  <a href="#" class="back-to-top d-flex align-items-center justify-content-center">
    <i class="bi bi-arrow-up-short"></i>
  </a>

 
  <script>
    var fermer = document.getElementById('fermer') ;
    fermer.onclick = function() {
      this.style.display = 'none' ;
    }
  </script>
   <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
   <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
   <script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
   <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
   <script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>


   <!-- Template Main JS File -->
   <script src="{{ asset('assets/js/main.js') }}"></script>
   <script src="{{ asset('icones/all.js') }}"></script>

</body>

</html>