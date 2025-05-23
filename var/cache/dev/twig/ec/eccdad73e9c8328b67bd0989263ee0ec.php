<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* index.html.twig */
class __TwigTemplate_be6c5d8a9d4655a477ebcc6f04168c83 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <title>Profane Tattoo</title>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"format-detection\" content=\"telephone=no\">
    <meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
    <meta name=\"author\" content=\"\">
    <meta name=\"keywords\" content=\"\">
    <meta name=\"description\" content=\"\">

    <link rel=\"stylesheet\" type=\"text/css\" href=\"css/vendor.css\">
    <link href=\"css/bootstrap.min.css\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"css/style.css\">

    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Rozha+One&display=swap\" rel=\"stylesheet\">
</head>

<body data-bs-spy=\"scroll\" data-bs-target=\"#navbar\" data-bs-root-margin=\"0px 0px -40%\" data-bs-smooth-scroll=\"true\" tabindex=\"0\">

    <div id=\"preloader\">
      <div id=\"loader\"></div>
    </div>

    <!-- Site Header -->
    <header class=\"header-wrap\">

        <div class=\"header-logo\">
            <a class=\"site-logo\" href=\"index.html\">
                <img src=\"images/.png\" alt=\"logo\">
            </a>
        </div>

        <nav class=\"header-nav-wrap\">
            <ul id=\"navbar\" class=\"header-main-nav\">
                <li><a href=\"#home\" class=\"nav-link active\">Accueil</a></li>
                <li><a href=\"#about\" class=\"nav-link\">A propos</a></li>
                <li><a href=\"#gallery\" class=\"nav-link\">Gallerie</a></li>
                <li><a href=\"#contact\" class=\"nav-link\">Contacts</a></li>
            </ul>

            <ul class=\"header-social\">
                <li>
                    <a class=\"social-icon\" href=\"https://www.facebook.com/LaCrypteTattooStudio\" target=\"_blank\"><span class=\"iconify\" data-icon=\"la:facebook-f\"></span></a>
                </li>                
            </ul>
        </nav>

        <a class=\"header-menu-toggle\" href=\"#\"><span>Menu</span></a>

    </header>
    <!-- End Site Header -->

    <!-- Billboard -->
    <section id=\"home\" class=\"billboard-wrap\">

        <div class=\"billboard-bg-img\" style=\"background: url('images/background/banner.jpg');background-size: cover;background-position: center;\">

            <div class=\"container billboard-content\">

                <div class=\"row\">
                    <div class=\"col-md-6\"></div>
                    <div class=\"col-md-6\">
                        <h1>Profane Tattoo</h1>
                        <p>Le studio où vos envies sont encrées a jamais</p>
                        
                    </div>
                </div>
                
            </div>

        </div>

    </section>
    <!-- End Billboard -->

    <!-- About Us -->
    <section id=\"about\" class=\"about-wrap\">

        <div class=\"container\">

            <div class=\"row\">
                <div class=\"section-image col-md-6\">
                    <img src=\"images/resource/about.png\" alt=\"about\" width=\"100%\" height=\"auto\">
                </div>

                <div class=\"col-md-6 about-me-content\">                
                    <!-- Sec Title -->
                    <div class=\"sec-title\">
                        <h1>Mon <br>histoire:</h1>
                    </div>

                    <div class=\"short-description\">
                        <p>Je suis Aurélien Rouze, le propriétaire de Profane Tattoo.</p>
                        <p>Je suis ici pour t'accompagner dans ton ou tes projets !</p>
                        
                    </div>
                </div>
            </div>

        </div>

    </section>
    <!-- End About Us -->

    <!-- Gallery Section -->
    <section id=\"gallery\" class=\"gallery-wrap\" style=\"background: #F9F9F9;\">

        <div class=\"container\">

            <!-- Sec Title -->
            <div class=\"sec-title\">
                <h1>Quelques exemples  <br>De mon travail</h1>
            </div>

        </div>

        <div class=\"container-fluid\">

            <!-- Gallery -->
            <div class=\"row popup-gallery\">
              <div class=\"col-md-3\">
                <a href=\"images/gallery/1.jpg\" title=\"T1\" class=\"image-link\"><img src=\"images/gallery/1.jpg\" alt=\"gallery-img\"></a>
                <a href=\"images/gallery/5.jpg\" title=\"T2\" class=\"image-link\"><img src=\"images/gallery/5.jpg\" alt=\"gallery-img\"></a>
              </div>

              <div class=\"col-md-3\">
                <a href=\"images/gallery/2.jpg\" title=\"T3\" class=\"image-link\"><img src=\"images/gallery/2.jpg\" alt=\"gallery-img\"></a>
                <a href=\"images/gallery/6.jpg\" title=\"T4\" class=\"image-link\"><img src=\"images/gallery/6.jpg\" alt=\"gallery-img\"></a>
              </div>

              <div class=\"col-md-3\">
                <a href=\"images/gallery/3.jpg\" title=\"T5\" class=\"image-link\"><img src=\"images/gallery/3.jpg\" alt=\"gallery-img\"></a>
                <a href=\"images/gallery/7.jpg\" title=\"T6\" class=\"image-link\"><img src=\"images/gallery/7.jpg\" alt=\"gallery-img\"></a>
              </div>

              <div class=\"col-md-3\">
                <a href=\"images/gallery/4.jpg\" title=\"T7\" class=\"image-link\"><img src=\"images/gallery/4.jpg\" alt=\"gallery-img\"></a>
                <a href=\"images/gallery/8.jpg\" title=\"T8\" class=\"image-link\"><img src=\"images/gallery/8.jpg\" alt=\"gallery-img\"></a>
              </div>
            </div>
            <!-- Gallery -->
            

        </div>

    </section>
    <!-- End Gallery Section -->

    <!-- Services Section -->
    <section class=\"maps-wrap\">

        <div class=\"container\">

            <div class=\"row\">
                
                <!-- GG maps -->
                <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2524.2115697116315!2d2.248731276437078!3d50.75311056552571!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47dcf9567fcd08c3%3A0x23280fb7b81d1112!2sProfane%20Tattoo!5e0!3m2!1sfr!2sfr!4v1747999844388!5m2!1sfr!2sfr\" width=\"800\" height=\"400\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>

            </div>
            
        </div>

    </section>
    <!-- End Services Section -->

    <!-- Testimonials Section -->
    <section class=\"testimonials-wrap\">

        <div class=\"container testimonial-slider swiper mySwiper\">
            <!-- Elfsight Google Reviews | GG reviews Profane -->
            <script src=\"https://static.elfsight.com/platform/platform.js\" async></script>
            <div class=\"elfsight-app-65c86512-56e0-4f38-958c-80f0af4e67cb\" data-elfsight-app-lazy></div>
        </div>

    </section>
    <!-- End Testimonials Section -->

    <!-- Interview Section -->
   
    <!-- End Interview Section -->

   

    <!-- Contact Us Section -->
    <section id=\"contact\" class=\"contact-wrap\" style=\"background: #F9F9F9;\">
        <div class=\"container\">

            <!-- Sec Title -->
            <div class=\"sec-title\">
                <h1>Get in touch <br>with me:</h1>
            </div>

            <div class=\"row\">

                <div class=\"col-md-3 contact-info\">
                    <h4>LA office</h4>
                    <p>In velit arcu posuere integer sit amet, consectetur nun adipiscing elit. Duis porttitor massa tellus</p>
                    <ul class=\"contact-info-list\">
                        <li>
                            <a href=\"#\"><span class=\"iconify\" data-icon=\"icomoon-free:location\"></span>784 Norman, Los Angeles</a>
                        </li>
                        <li>
                            <a href=\"#\"><span class=\"iconify\" data-icon=\"icomoon-free:phone\"></span>+49 93 30493943</a>
                        </li>
                        <li>
                            <a href=\"#\"><span class=\"iconify\" data-icon=\"icomoon-free:mail3\"></span>contact@thevoidsir.com</a>
                        </li>
                    </ul>
                    <a class=\"btn btn-blank\" href=\"#\" role=\"button\">Get location</a>
                </div>

                <div class=\"col-md-3 contact-info\">
                    <h4>LA office</h4>
                    <p>In velit arcu posuere integer sit amet, consectetur nun adipiscing elit. Duis porttitor massa tellus</p>
                    <ul class=\"contact-info-list\">
                        <li>
                            <a href=\"#\"><span class=\"iconify\" data-icon=\"icomoon-free:location\"></span>1630 Elm Drive, New York City</a>
                        </li>
                        <li>
                            <a href=\"#\"><span class=\"iconify\" data-icon=\"icomoon-free:phone\"></span>+49 93 30493943</a>
                        </li>
                        <li>
                            <a href=\"#\"><span class=\"iconify\" data-icon=\"icomoon-free:mail3\"></span>contact@thevoidsir.com</a>
                        </li>
                    </ul>
                    <a class=\"btn btn-blank\" href=\"#\" role=\"button\">Get location</a>
                </div>

                <div class=\"col-md-6\">                    
                    <!-- Contact Form -->
                    <div class=\"contact-form\">
                        <form>
                            <div class=\"form-group\">
                                <input type=\"text\" name=\"username\" placeholder=\"Write your name here\" required=\"\">
                            </div>

                            <div class=\"form-group\">
                                <input type=\"text\" name=\"email\" placeholder=\"Write your email address\" required=\"\">
                            </div>

                            <div class=\"form-group\">
                                <textarea name=\"message\" placeholder=\"Write your messages here\"></textarea>
                            </div>
                            
                            <a class=\"btn btn-black\" href=\"#\" role=\"button\">Send It</a>
                        </form>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- End Contact Us Section -->

    <!--Main Footer-->
    <footer class=\"main-footer\" style=\"background: #141414;\">

        <!--Widgets Section-->
        <div class=\"widgets-section container\">
            <div class=\"row\">

                <!--Footer Column-->
                <div class=\"footer-column col-lg-3 col-md-3 col-sm-12\">
                    <div class=\"footer-widget about-widget\">
                        <h4>About void tattoo</h4>
                        <p>Sit amet, consectetur nun in velit arcu posuere integer. Adipiscing elit duis porttitor massa tellus</p>
                        <ul class=\"contact-info-list\">
                            <li>
                                <a href=\"#\"><span class=\"iconify\" data-icon=\"icomoon-free:location\"></span>1630 Elm Drive, New York City</a>
                            </li>
                            <li>
                                <a href=\"#\"><span class=\"iconify\" data-icon=\"icomoon-free:phone\"></span>+49 93 30493943</a>
                            </li>
                            <li>
                                <a href=\"#\"><span class=\"iconify\" data-icon=\"icomoon-free:mail3\"></span>contact@yourinfo.com</a>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <!--Footer Column-->
                <div class=\"footer-column col-lg-3 col-md-3 col-sm-12\">
                    <div class=\"footer-widget links-widget\">
                        <h4>Useful links</h4>
                        <div class=\"widget-content\">
                            <ul class=\"list\">
                                <li><a href=\"#\">About me</a></li>
                                <li><a href=\"#\">My gallery</a></li>
                                <li><a href=\"#\">My services </a></li>
                                <li><a href=\"#\">Contact me</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!--Footer Column-->
                <div class=\"footer-column col-lg-3 col-md-3 col-sm-12\">
                    <div class=\"footer-widget time-widget\">
                        <h4>Working time</h4>
                        <div class=\"widget-content\">
                            <ul class=\"list\">
                                <li><a href=\"#\">Mon - Tue / Appointment</a></li>
                                <li><a href=\"#\">Wed - Fri / 10:00 - 9:00pm</a></li>
                                <li><a href=\"#\">Sat / 10:00 - 6:00pm</a></li>
                                <li><a href=\"#\">Sun / no work on this day</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <!--Footer Column-->
                <div class=\"footer-column col-lg-3 col-md-3 col-sm-12\">
                    <div class=\"footer-widget newsletter-widget\">
                        <h4>Get newsletter</h4>
                        <p>Elit duis porttitor massa tellus nun in velit arcu posuere integer.</p>
                        <form>
                            <div class=\"form-group\">
                                <input type=\"text\" name=\"email\" placeholder=\"Your email address\" required=\"\">
                                <a href=\"\"><span class=\"iconify\" data-icon=\"la:telegram-plane\"></span></a>
                            </div>
                        </form>
                    </div>
                </div>
                
            </div>

        </div>
            
        <!--Footer Bottom-->
        <div class=\"footer-bottom\">
            <div class=\"copyright container\">@ 2023 <a href=\"https://templatesjungle.com/\" target=\"_blank\">TemplatesJungle</a>. All rights reserved.</div>
        </div>

    </footer>
    <!-- End Main Footer -->

    <!-- Video Popup -->
    <div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\" role=\"document\">

            <div class=\"modal-content\">
              
                <div class=\"modal-body\">
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"><svg class=\"bi\" width=\"40\" height=\"40\"><use xlink:href=\"#close-sharp\"></use></svg></button>
                    <div class=\"ratio ratio-16x9\">
                      <iframe class=\"embed-responsive-item\" src=\"\" id=\"video\"  allowscriptaccess=\"always\" allow=\"autoplay\"></iframe>
                    </div>
                </div>

            </div>

        </div>
    </div>

<script src=\"js/jquery-1.11.0.min.js\"></script>
<script src=\"https://code.iconify.design/1/1.0.6/iconify.min.js\"></script>
<script src=\"js/bootstrap.min.js\"></script>
<script src=\"js/plugins.js\"></script>
<script src=\"js/script.js\"></script>

</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <title>Profane Tattoo</title>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"format-detection\" content=\"telephone=no\">
    <meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
    <meta name=\"author\" content=\"\">
    <meta name=\"keywords\" content=\"\">
    <meta name=\"description\" content=\"\">

    <link rel=\"stylesheet\" type=\"text/css\" href=\"css/vendor.css\">
    <link href=\"css/bootstrap.min.css\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"css/style.css\">

    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Rozha+One&display=swap\" rel=\"stylesheet\">
</head>

<body data-bs-spy=\"scroll\" data-bs-target=\"#navbar\" data-bs-root-margin=\"0px 0px -40%\" data-bs-smooth-scroll=\"true\" tabindex=\"0\">

    <div id=\"preloader\">
      <div id=\"loader\"></div>
    </div>

    <!-- Site Header -->
    <header class=\"header-wrap\">

        <div class=\"header-logo\">
            <a class=\"site-logo\" href=\"index.html\">
                <img src=\"images/.png\" alt=\"logo\">
            </a>
        </div>

        <nav class=\"header-nav-wrap\">
            <ul id=\"navbar\" class=\"header-main-nav\">
                <li><a href=\"#home\" class=\"nav-link active\">Accueil</a></li>
                <li><a href=\"#about\" class=\"nav-link\">A propos</a></li>
                <li><a href=\"#gallery\" class=\"nav-link\">Gallerie</a></li>
                <li><a href=\"#contact\" class=\"nav-link\">Contacts</a></li>
            </ul>

            <ul class=\"header-social\">
                <li>
                    <a class=\"social-icon\" href=\"https://www.facebook.com/LaCrypteTattooStudio\" target=\"_blank\"><span class=\"iconify\" data-icon=\"la:facebook-f\"></span></a>
                </li>                
            </ul>
        </nav>

        <a class=\"header-menu-toggle\" href=\"#\"><span>Menu</span></a>

    </header>
    <!-- End Site Header -->

    <!-- Billboard -->
    <section id=\"home\" class=\"billboard-wrap\">

        <div class=\"billboard-bg-img\" style=\"background: url('images/background/banner.jpg');background-size: cover;background-position: center;\">

            <div class=\"container billboard-content\">

                <div class=\"row\">
                    <div class=\"col-md-6\"></div>
                    <div class=\"col-md-6\">
                        <h1>Profane Tattoo</h1>
                        <p>Le studio où vos envies sont encrées a jamais</p>
                        
                    </div>
                </div>
                
            </div>

        </div>

    </section>
    <!-- End Billboard -->

    <!-- About Us -->
    <section id=\"about\" class=\"about-wrap\">

        <div class=\"container\">

            <div class=\"row\">
                <div class=\"section-image col-md-6\">
                    <img src=\"images/resource/about.png\" alt=\"about\" width=\"100%\" height=\"auto\">
                </div>

                <div class=\"col-md-6 about-me-content\">                
                    <!-- Sec Title -->
                    <div class=\"sec-title\">
                        <h1>Mon <br>histoire:</h1>
                    </div>

                    <div class=\"short-description\">
                        <p>Je suis Aurélien Rouze, le propriétaire de Profane Tattoo.</p>
                        <p>Je suis ici pour t'accompagner dans ton ou tes projets !</p>
                        
                    </div>
                </div>
            </div>

        </div>

    </section>
    <!-- End About Us -->

    <!-- Gallery Section -->
    <section id=\"gallery\" class=\"gallery-wrap\" style=\"background: #F9F9F9;\">

        <div class=\"container\">

            <!-- Sec Title -->
            <div class=\"sec-title\">
                <h1>Quelques exemples  <br>De mon travail</h1>
            </div>

        </div>

        <div class=\"container-fluid\">

            <!-- Gallery -->
            <div class=\"row popup-gallery\">
              <div class=\"col-md-3\">
                <a href=\"images/gallery/1.jpg\" title=\"T1\" class=\"image-link\"><img src=\"images/gallery/1.jpg\" alt=\"gallery-img\"></a>
                <a href=\"images/gallery/5.jpg\" title=\"T2\" class=\"image-link\"><img src=\"images/gallery/5.jpg\" alt=\"gallery-img\"></a>
              </div>

              <div class=\"col-md-3\">
                <a href=\"images/gallery/2.jpg\" title=\"T3\" class=\"image-link\"><img src=\"images/gallery/2.jpg\" alt=\"gallery-img\"></a>
                <a href=\"images/gallery/6.jpg\" title=\"T4\" class=\"image-link\"><img src=\"images/gallery/6.jpg\" alt=\"gallery-img\"></a>
              </div>

              <div class=\"col-md-3\">
                <a href=\"images/gallery/3.jpg\" title=\"T5\" class=\"image-link\"><img src=\"images/gallery/3.jpg\" alt=\"gallery-img\"></a>
                <a href=\"images/gallery/7.jpg\" title=\"T6\" class=\"image-link\"><img src=\"images/gallery/7.jpg\" alt=\"gallery-img\"></a>
              </div>

              <div class=\"col-md-3\">
                <a href=\"images/gallery/4.jpg\" title=\"T7\" class=\"image-link\"><img src=\"images/gallery/4.jpg\" alt=\"gallery-img\"></a>
                <a href=\"images/gallery/8.jpg\" title=\"T8\" class=\"image-link\"><img src=\"images/gallery/8.jpg\" alt=\"gallery-img\"></a>
              </div>
            </div>
            <!-- Gallery -->
            

        </div>

    </section>
    <!-- End Gallery Section -->

    <!-- Services Section -->
    <section class=\"maps-wrap\">

        <div class=\"container\">

            <div class=\"row\">
                
                <!-- GG maps -->
                <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2524.2115697116315!2d2.248731276437078!3d50.75311056552571!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47dcf9567fcd08c3%3A0x23280fb7b81d1112!2sProfane%20Tattoo!5e0!3m2!1sfr!2sfr!4v1747999844388!5m2!1sfr!2sfr\" width=\"800\" height=\"400\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>

            </div>
            
        </div>

    </section>
    <!-- End Services Section -->

    <!-- Testimonials Section -->
    <section class=\"testimonials-wrap\">

        <div class=\"container testimonial-slider swiper mySwiper\">
            <!-- Elfsight Google Reviews | GG reviews Profane -->
            <script src=\"https://static.elfsight.com/platform/platform.js\" async></script>
            <div class=\"elfsight-app-65c86512-56e0-4f38-958c-80f0af4e67cb\" data-elfsight-app-lazy></div>
        </div>

    </section>
    <!-- End Testimonials Section -->

    <!-- Interview Section -->
   
    <!-- End Interview Section -->

   

    <!-- Contact Us Section -->
    <section id=\"contact\" class=\"contact-wrap\" style=\"background: #F9F9F9;\">
        <div class=\"container\">

            <!-- Sec Title -->
            <div class=\"sec-title\">
                <h1>Get in touch <br>with me:</h1>
            </div>

            <div class=\"row\">

                <div class=\"col-md-3 contact-info\">
                    <h4>LA office</h4>
                    <p>In velit arcu posuere integer sit amet, consectetur nun adipiscing elit. Duis porttitor massa tellus</p>
                    <ul class=\"contact-info-list\">
                        <li>
                            <a href=\"#\"><span class=\"iconify\" data-icon=\"icomoon-free:location\"></span>784 Norman, Los Angeles</a>
                        </li>
                        <li>
                            <a href=\"#\"><span class=\"iconify\" data-icon=\"icomoon-free:phone\"></span>+49 93 30493943</a>
                        </li>
                        <li>
                            <a href=\"#\"><span class=\"iconify\" data-icon=\"icomoon-free:mail3\"></span>contact@thevoidsir.com</a>
                        </li>
                    </ul>
                    <a class=\"btn btn-blank\" href=\"#\" role=\"button\">Get location</a>
                </div>

                <div class=\"col-md-3 contact-info\">
                    <h4>LA office</h4>
                    <p>In velit arcu posuere integer sit amet, consectetur nun adipiscing elit. Duis porttitor massa tellus</p>
                    <ul class=\"contact-info-list\">
                        <li>
                            <a href=\"#\"><span class=\"iconify\" data-icon=\"icomoon-free:location\"></span>1630 Elm Drive, New York City</a>
                        </li>
                        <li>
                            <a href=\"#\"><span class=\"iconify\" data-icon=\"icomoon-free:phone\"></span>+49 93 30493943</a>
                        </li>
                        <li>
                            <a href=\"#\"><span class=\"iconify\" data-icon=\"icomoon-free:mail3\"></span>contact@thevoidsir.com</a>
                        </li>
                    </ul>
                    <a class=\"btn btn-blank\" href=\"#\" role=\"button\">Get location</a>
                </div>

                <div class=\"col-md-6\">                    
                    <!-- Contact Form -->
                    <div class=\"contact-form\">
                        <form>
                            <div class=\"form-group\">
                                <input type=\"text\" name=\"username\" placeholder=\"Write your name here\" required=\"\">
                            </div>

                            <div class=\"form-group\">
                                <input type=\"text\" name=\"email\" placeholder=\"Write your email address\" required=\"\">
                            </div>

                            <div class=\"form-group\">
                                <textarea name=\"message\" placeholder=\"Write your messages here\"></textarea>
                            </div>
                            
                            <a class=\"btn btn-black\" href=\"#\" role=\"button\">Send It</a>
                        </form>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- End Contact Us Section -->

    <!--Main Footer-->
    <footer class=\"main-footer\" style=\"background: #141414;\">

        <!--Widgets Section-->
        <div class=\"widgets-section container\">
            <div class=\"row\">

                <!--Footer Column-->
                <div class=\"footer-column col-lg-3 col-md-3 col-sm-12\">
                    <div class=\"footer-widget about-widget\">
                        <h4>About void tattoo</h4>
                        <p>Sit amet, consectetur nun in velit arcu posuere integer. Adipiscing elit duis porttitor massa tellus</p>
                        <ul class=\"contact-info-list\">
                            <li>
                                <a href=\"#\"><span class=\"iconify\" data-icon=\"icomoon-free:location\"></span>1630 Elm Drive, New York City</a>
                            </li>
                            <li>
                                <a href=\"#\"><span class=\"iconify\" data-icon=\"icomoon-free:phone\"></span>+49 93 30493943</a>
                            </li>
                            <li>
                                <a href=\"#\"><span class=\"iconify\" data-icon=\"icomoon-free:mail3\"></span>contact@yourinfo.com</a>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <!--Footer Column-->
                <div class=\"footer-column col-lg-3 col-md-3 col-sm-12\">
                    <div class=\"footer-widget links-widget\">
                        <h4>Useful links</h4>
                        <div class=\"widget-content\">
                            <ul class=\"list\">
                                <li><a href=\"#\">About me</a></li>
                                <li><a href=\"#\">My gallery</a></li>
                                <li><a href=\"#\">My services </a></li>
                                <li><a href=\"#\">Contact me</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!--Footer Column-->
                <div class=\"footer-column col-lg-3 col-md-3 col-sm-12\">
                    <div class=\"footer-widget time-widget\">
                        <h4>Working time</h4>
                        <div class=\"widget-content\">
                            <ul class=\"list\">
                                <li><a href=\"#\">Mon - Tue / Appointment</a></li>
                                <li><a href=\"#\">Wed - Fri / 10:00 - 9:00pm</a></li>
                                <li><a href=\"#\">Sat / 10:00 - 6:00pm</a></li>
                                <li><a href=\"#\">Sun / no work on this day</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <!--Footer Column-->
                <div class=\"footer-column col-lg-3 col-md-3 col-sm-12\">
                    <div class=\"footer-widget newsletter-widget\">
                        <h4>Get newsletter</h4>
                        <p>Elit duis porttitor massa tellus nun in velit arcu posuere integer.</p>
                        <form>
                            <div class=\"form-group\">
                                <input type=\"text\" name=\"email\" placeholder=\"Your email address\" required=\"\">
                                <a href=\"\"><span class=\"iconify\" data-icon=\"la:telegram-plane\"></span></a>
                            </div>
                        </form>
                    </div>
                </div>
                
            </div>

        </div>
            
        <!--Footer Bottom-->
        <div class=\"footer-bottom\">
            <div class=\"copyright container\">@ 2023 <a href=\"https://templatesjungle.com/\" target=\"_blank\">TemplatesJungle</a>. All rights reserved.</div>
        </div>

    </footer>
    <!-- End Main Footer -->

    <!-- Video Popup -->
    <div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\" role=\"document\">

            <div class=\"modal-content\">
              
                <div class=\"modal-body\">
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"><svg class=\"bi\" width=\"40\" height=\"40\"><use xlink:href=\"#close-sharp\"></use></svg></button>
                    <div class=\"ratio ratio-16x9\">
                      <iframe class=\"embed-responsive-item\" src=\"\" id=\"video\"  allowscriptaccess=\"always\" allow=\"autoplay\"></iframe>
                    </div>
                </div>

            </div>

        </div>
    </div>

<script src=\"js/jquery-1.11.0.min.js\"></script>
<script src=\"https://code.iconify.design/1/1.0.6/iconify.min.js\"></script>
<script src=\"js/bootstrap.min.js\"></script>
<script src=\"js/plugins.js\"></script>
<script src=\"js/script.js\"></script>

</body>
</html>", "index.html.twig", "/home/jeremy/profane/Profane/templates/index.html.twig");
    }
}
