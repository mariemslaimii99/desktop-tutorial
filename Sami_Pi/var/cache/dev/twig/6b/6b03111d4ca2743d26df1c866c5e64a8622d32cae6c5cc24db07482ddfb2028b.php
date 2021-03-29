<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* event/listfront.html.twig */
class __TwigTemplate_076be435b01611a4a062fbd6ceb62bd2e41dcd9a3e0136ffabefeae3196976fe extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/listfront.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/listfront.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"zxx\">

<head>
    <meta charset=\"UTF-8\">
    <meta name=\"description\" content=\"Aesthetic Template\">
    <meta name=\"keywords\" content=\"Aesthetic, unica, creative, html\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>Aesthetic | Template</title>

    <!-- Google Font -->
    <link href=\"https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap\"
          rel=\"stylesheet\">

    <!-- Css Styles -->
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/font-awesome.min.css"), "html", null, true);
        echo "\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/flaticon.css"), "html", null, true);
        echo "\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/nice-select.css"), "html", null, true);
        echo "\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/jquery-ui.min.css"), "html", null, true);
        echo "\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/magnific-popup.css"), "html", null, true);
        echo "\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/owl.carousel.min.css"), "html", null, true);
        echo "\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/slicknav.min.css"), "html", null, true);
        echo "\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" type=\"text/css\">
</head>

<body>
<!-- Page Preloder -->
<div id=\"preloder\">
    <div class=\"loader\"></div>
</div>

<!-- Offcanvas Menu Begin -->
<div class=\"offcanvas-menu-overlay\"></div>
<div class=\"offcanvas-menu-wrapper\">
    <div class=\"offcanvas__logo\">
        <a href=\"./index.html\"><img src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo.png"), "html", null, true);
        echo "\"  alt=\"\"></a>
    </div>
    <div id=\"mobile-menu-wrap\"></div>
    <div class=\"offcanvas__btn\">
        <a href=\"#\" class=\"primary-btn\">Appointment</a>
    </div>
    <ul class=\"offcanvas__widget\">
        <li><i class=\"fa fa-phone\"></i> 1-677-124-44227</li>
        <li><i class=\"fa fa-map-marker\"></i> Los Angeles Gournadi, 1230 Bariasl</li>
        <li><i class=\"fa fa-clock-o\"></i> Mon to Sat 9:00am to 18:00pm</li>
    </ul>
    <div class=\"offcanvas__social\">
        <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
        <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
        <a href=\"#\"><i class=\"fa fa-instagram\"></i></a>
        <a href=\"#\"><i class=\"fa fa-dribbble\"></i></a>
    </div>
</div>
<!-- Offcanvas Menu End -->

<!-- Header Section Begin -->
<header class=\"header\">
    <div class=\"header__top\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8\">
                    <ul class=\"header__top__left\">
                        <li><i class=\"fa fa-phone\"></i> 1-677-124-44227</li>
                        <li><i class=\"fa fa-map-marker\"></i> Los Angeles Gournadi, 1230 Bariasl</li>
                        <li><i class=\"fa fa-clock-o\"></i> Mon to Sat 9:00am to 18:00pm</li>
                    </ul>
                </div>
                <div class=\"col-lg-4\">
                    <div class=\"header__top__right\">
                        <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                        <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                        <a href=\"#\"><i class=\"fa fa-instagram\"></i></a>
                        <a href=\"#\"><i class=\"fa fa-dribbble\"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-2\">
                <div class=\"header__logo\">
                    <h2>OUTDOOR.tn</h2>
                </div>
            </div>
            <div class=\"col-lg-10\">
                <div class=\"header__menu__option\">
                    <nav class=\"header__menu\">
                        <ul>
                            <li><a href=\"./index.html\">Home</a></li>
                            <li><a href=\"./about.html\">About</a></li>
                            <li><a href=\"./services.html\">Services</a></li>
                            <li class=\"active\"><a href=\"#\">Pages</a>
                                <ul class=\"dropdown\">
                                    <li><a href=\"./pricing.html\">Pricing</a></li>
                                    <li><a href=\"./doctor.html\">Doctor</a></li>
                                    <li><a href=\"./blog-details.html\">Blog Details</a></li>
                                </ul>
                            </li>
                            <li><a href=\"./blog.html\">News</a></li>
                            <li><a href=\"./contact.html\">Contact</a></li>
                        </ul>
                    </nav>
                    <div class=\"header__btn\">
                        <a href=\"#\" class=\"primary-btn\">Appointment</a>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"canvas__open\">
            <i class=\"fa fa-bars\"></i>
        </div>
    </div>
</header>
<!-- Header Section End -->

<!-- Breadcrumb Section Begin -->
<section class=\"breadcrumb-option spad set-bg\" data-setbg=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/breadcrumb-bg.jpg"), "html", null, true);
        echo "\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12 text-center\">
                <div class=\"breadcrumb__text\">
                    <h2>La liste des events</h2>
                    <div class=\"breadcrumb__links\">
                        <a href=\"./index.html\">Home</a>
                        <span>Events</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->
<section class=\"pricing spad\">

    <div class=\"container\">
        <div class=\"row\">
            ";
        // line 140
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 140, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["Event"]) {
            // line 141
            echo "            <div class=\"col-lg-4 col-md-6 col-sm-6\">
                <div class=\"pricing__item\">
                    <div class=\"pricing__item__title\">
                        <p>";
            // line 144
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Event"], "Type", [], "any", false, false, false, 144), "html", null, true);
            echo "</p>
                        <h3>";
            // line 145
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Event"], "NomEvent", [], "any", false, false, false, 145), "html", null, true);
            echo " <span>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Event"], "nomEndroit", [], "any", false, false, false, 145), "html", null, true);
            echo "</span></h3>
                    </div>
                    <ul>
                        <li>
                            <h6>Nb_place_max</h6>
                            <span>";
            // line 150
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Event"], "nbPlaceMax", [], "any", false, false, false, 150), "html", null, true);
            echo "</span>
                        </li>
                        <li>
                            <h6>lieu_depart</h6>
                            <span>";
            // line 154
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Event"], "LieuDepart", [], "any", false, false, false, 154), "html", null, true);
            echo "</span>
                        </li>
                        <li>
                            <h6>date_depart</h6>
                            <span>";
            // line 158
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Event"], "DateDepart", [], "any", false, false, false, 158), "Y-m-d"), "html", null, true);
            echo "</span>

                        </li>
                    </ul>
                    <a href=\"/new5/";
            // line 162
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 162, $this->source); })()), "id", [], "any", false, false, false, 162), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Event"], "id", [], "any", false, false, false, 162), "html", null, true);
            echo "\" class=\"primary-btn\">Reserver</a>
                </div>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 166
        echo "        </div>
    </div>

</section>


<!-- Footer Section Begin -->
<footer class=\"footer\">
    <div class=\"footer__top\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-4 col-md-4\">
                    <div class=\"footer__logo\">
                        <a href=\"#\"><img src=\"img/footer-logo.png\" alt=\"\"></a>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-8\">
                    <div class=\"footer__newslatter\">
                        <form action=\"#\">
                            <input type=\"text\" placeholder=\"Email\">
                            <button type=\"submit\" class=\"site-btn\">Subscribe</button>
                        </form>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-12\">
                    <div class=\"footer__social\">
                        <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                        <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                        <a href=\"#\"><i class=\"fa fa-instagram\"></i></a>
                        <a href=\"#\"><i class=\"fa fa-dribbble\"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-2 col-md-3 col-sm-6\">
                <div class=\"footer__widget\">
                    <h5>Company</h5>
                    <ul>
                        <li><a href=\"#\">About Us</a></li>
                        <li><a href=\"#\">Departments</a></li>
                        <li><a href=\"#\">Find a Doctor</a></li>
                        <li><a href=\"#\">FAQ</a></li>
                        <li><a href=\"#\">News</a></li>
                    </ul>
                </div>
            </div>
            <div class=\"col-lg-2 col-md-3 col-sm-6\">
                <div class=\"footer__widget\">
                    <h5>Quick links</h5>
                    <ul>
                        <li><a href=\"#\">Facial Fillers</a></li>
                        <li><a href=\"#\">Breast Surgery</a></li>
                        <li><a href=\"#\">Body Lifts</a></li>
                        <li><a href=\"#\">Face & Neck</a></li>
                        <li><a href=\"#\">Fat Reduction</a></li>
                    </ul>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-6 col-sm-6\">
                <div class=\"footer__address\">
                    <h5>Contact Us</h5>
                    <ul>
                        <li><i class=\"fa fa-map-marker\"></i> Los Angeles Gournadi, 1230 Bariasl</li>
                        <li><i class=\"fa fa-phone\"></i> 1-677-124-44227</li>
                        <li><i class=\"fa fa-envelope\"></i> Support@gmail.com</li>
                    </ul>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-12 col-sm-6\">
                <div class=\"footer__map\">
                    <iframe
                            src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48158.305462977965!2d-74.13283844036356!3d41.02757295168286!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2e440473470d7%3A0xcaf503ca2ee57958!2sSaddle%20River%2C%20NJ%2007458%2C%20USA!5e0!3m2!1sen!2sbd!4v1575917275626!5m2!1sen!2sbd\"
                            height=\"190\" style=\"border:0\" allowfullscreen=\"\"></iframe>
                </div>
            </div>
        </div>
    </div>
    <div class=\"footer__copyright\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-7\">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    <div class=\"footer__copyright__text\">
                        <p>Copyright &copy; <script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class=\"fa fa-heart\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\">Colorlib</a></p>
                    </div>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </div>
                <div class=\"col-lg-5\">
                    <ul>
                        <li>All Rights Reserved</li>
                        <li>Terms & Use</li>
                        <li>Privacy Policy</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Section End -->

<!-- Js Plugins -->
<script src=\"";
        // line 270
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-3.3.1.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 271
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 272
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 273
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/masonry.pkgd.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 274
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 275
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.nice-select.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 276
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.slicknav.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 277
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 278
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "event/listfront.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  411 => 278,  407 => 277,  403 => 276,  399 => 275,  395 => 274,  391 => 273,  387 => 272,  383 => 271,  379 => 270,  273 => 166,  261 => 162,  254 => 158,  247 => 154,  240 => 150,  230 => 145,  226 => 144,  221 => 141,  217 => 140,  194 => 120,  109 => 38,  93 => 25,  89 => 24,  85 => 23,  81 => 22,  77 => 21,  73 => 20,  69 => 19,  65 => 18,  61 => 17,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"zxx\">

<head>
    <meta charset=\"UTF-8\">
    <meta name=\"description\" content=\"Aesthetic Template\">
    <meta name=\"keywords\" content=\"Aesthetic, unica, creative, html\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>Aesthetic | Template</title>

    <!-- Google Font -->
    <link href=\"https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap\"
          rel=\"stylesheet\">

    <!-- Css Styles -->
    <link rel=\"stylesheet\" href=\"{{asset('css/bootstrap.min.css')}}\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"{{asset('css/font-awesome.min.css')}}\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"{{asset('css/flaticon.css')}}\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"{{asset('css/nice-select.css')}}\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"{{asset('css/jquery-ui.min.css')}}\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"{{asset('css/magnific-popup.css')}}\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"{{asset('css/owl.carousel.min.css')}}\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"{{asset('css/slicknav.min.css')}}\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"{{asset('css/style.css')}}\" type=\"text/css\">
</head>

<body>
<!-- Page Preloder -->
<div id=\"preloder\">
    <div class=\"loader\"></div>
</div>

<!-- Offcanvas Menu Begin -->
<div class=\"offcanvas-menu-overlay\"></div>
<div class=\"offcanvas-menu-wrapper\">
    <div class=\"offcanvas__logo\">
        <a href=\"./index.html\"><img src=\"{{asset('img/logo.png')}}\"  alt=\"\"></a>
    </div>
    <div id=\"mobile-menu-wrap\"></div>
    <div class=\"offcanvas__btn\">
        <a href=\"#\" class=\"primary-btn\">Appointment</a>
    </div>
    <ul class=\"offcanvas__widget\">
        <li><i class=\"fa fa-phone\"></i> 1-677-124-44227</li>
        <li><i class=\"fa fa-map-marker\"></i> Los Angeles Gournadi, 1230 Bariasl</li>
        <li><i class=\"fa fa-clock-o\"></i> Mon to Sat 9:00am to 18:00pm</li>
    </ul>
    <div class=\"offcanvas__social\">
        <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
        <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
        <a href=\"#\"><i class=\"fa fa-instagram\"></i></a>
        <a href=\"#\"><i class=\"fa fa-dribbble\"></i></a>
    </div>
</div>
<!-- Offcanvas Menu End -->

<!-- Header Section Begin -->
<header class=\"header\">
    <div class=\"header__top\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8\">
                    <ul class=\"header__top__left\">
                        <li><i class=\"fa fa-phone\"></i> 1-677-124-44227</li>
                        <li><i class=\"fa fa-map-marker\"></i> Los Angeles Gournadi, 1230 Bariasl</li>
                        <li><i class=\"fa fa-clock-o\"></i> Mon to Sat 9:00am to 18:00pm</li>
                    </ul>
                </div>
                <div class=\"col-lg-4\">
                    <div class=\"header__top__right\">
                        <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                        <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                        <a href=\"#\"><i class=\"fa fa-instagram\"></i></a>
                        <a href=\"#\"><i class=\"fa fa-dribbble\"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-2\">
                <div class=\"header__logo\">
                    <h2>OUTDOOR.tn</h2>
                </div>
            </div>
            <div class=\"col-lg-10\">
                <div class=\"header__menu__option\">
                    <nav class=\"header__menu\">
                        <ul>
                            <li><a href=\"./index.html\">Home</a></li>
                            <li><a href=\"./about.html\">About</a></li>
                            <li><a href=\"./services.html\">Services</a></li>
                            <li class=\"active\"><a href=\"#\">Pages</a>
                                <ul class=\"dropdown\">
                                    <li><a href=\"./pricing.html\">Pricing</a></li>
                                    <li><a href=\"./doctor.html\">Doctor</a></li>
                                    <li><a href=\"./blog-details.html\">Blog Details</a></li>
                                </ul>
                            </li>
                            <li><a href=\"./blog.html\">News</a></li>
                            <li><a href=\"./contact.html\">Contact</a></li>
                        </ul>
                    </nav>
                    <div class=\"header__btn\">
                        <a href=\"#\" class=\"primary-btn\">Appointment</a>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"canvas__open\">
            <i class=\"fa fa-bars\"></i>
        </div>
    </div>
</header>
<!-- Header Section End -->

<!-- Breadcrumb Section Begin -->
<section class=\"breadcrumb-option spad set-bg\" data-setbg=\"{{asset('img/breadcrumb-bg.jpg')}}\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12 text-center\">
                <div class=\"breadcrumb__text\">
                    <h2>La liste des events</h2>
                    <div class=\"breadcrumb__links\">
                        <a href=\"./index.html\">Home</a>
                        <span>Events</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->
<section class=\"pricing spad\">

    <div class=\"container\">
        <div class=\"row\">
            {% for Event in list %}
            <div class=\"col-lg-4 col-md-6 col-sm-6\">
                <div class=\"pricing__item\">
                    <div class=\"pricing__item__title\">
                        <p>{{ Event.Type}}</p>
                        <h3>{{ Event.NomEvent}} <span>{{ Event.nomEndroit}}</span></h3>
                    </div>
                    <ul>
                        <li>
                            <h6>Nb_place_max</h6>
                            <span>{{ Event.nbPlaceMax}}</span>
                        </li>
                        <li>
                            <h6>lieu_depart</h6>
                            <span>{{ Event.LieuDepart }}</span>
                        </li>
                        <li>
                            <h6>date_depart</h6>
                            <span>{{ Event.DateDepart|date('Y-m-d')}}</span>

                        </li>
                    </ul>
                    <a href=\"/new5/{{ client.id }}/{{ Event.id }}\" class=\"primary-btn\">Reserver</a>
                </div>
            </div>
            {% endfor %}
        </div>
    </div>

</section>


<!-- Footer Section Begin -->
<footer class=\"footer\">
    <div class=\"footer__top\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-4 col-md-4\">
                    <div class=\"footer__logo\">
                        <a href=\"#\"><img src=\"img/footer-logo.png\" alt=\"\"></a>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-8\">
                    <div class=\"footer__newslatter\">
                        <form action=\"#\">
                            <input type=\"text\" placeholder=\"Email\">
                            <button type=\"submit\" class=\"site-btn\">Subscribe</button>
                        </form>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-12\">
                    <div class=\"footer__social\">
                        <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                        <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                        <a href=\"#\"><i class=\"fa fa-instagram\"></i></a>
                        <a href=\"#\"><i class=\"fa fa-dribbble\"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-2 col-md-3 col-sm-6\">
                <div class=\"footer__widget\">
                    <h5>Company</h5>
                    <ul>
                        <li><a href=\"#\">About Us</a></li>
                        <li><a href=\"#\">Departments</a></li>
                        <li><a href=\"#\">Find a Doctor</a></li>
                        <li><a href=\"#\">FAQ</a></li>
                        <li><a href=\"#\">News</a></li>
                    </ul>
                </div>
            </div>
            <div class=\"col-lg-2 col-md-3 col-sm-6\">
                <div class=\"footer__widget\">
                    <h5>Quick links</h5>
                    <ul>
                        <li><a href=\"#\">Facial Fillers</a></li>
                        <li><a href=\"#\">Breast Surgery</a></li>
                        <li><a href=\"#\">Body Lifts</a></li>
                        <li><a href=\"#\">Face & Neck</a></li>
                        <li><a href=\"#\">Fat Reduction</a></li>
                    </ul>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-6 col-sm-6\">
                <div class=\"footer__address\">
                    <h5>Contact Us</h5>
                    <ul>
                        <li><i class=\"fa fa-map-marker\"></i> Los Angeles Gournadi, 1230 Bariasl</li>
                        <li><i class=\"fa fa-phone\"></i> 1-677-124-44227</li>
                        <li><i class=\"fa fa-envelope\"></i> Support@gmail.com</li>
                    </ul>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-12 col-sm-6\">
                <div class=\"footer__map\">
                    <iframe
                            src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48158.305462977965!2d-74.13283844036356!3d41.02757295168286!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2e440473470d7%3A0xcaf503ca2ee57958!2sSaddle%20River%2C%20NJ%2007458%2C%20USA!5e0!3m2!1sen!2sbd!4v1575917275626!5m2!1sen!2sbd\"
                            height=\"190\" style=\"border:0\" allowfullscreen=\"\"></iframe>
                </div>
            </div>
        </div>
    </div>
    <div class=\"footer__copyright\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-7\">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    <div class=\"footer__copyright__text\">
                        <p>Copyright &copy; <script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class=\"fa fa-heart\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\">Colorlib</a></p>
                    </div>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </div>
                <div class=\"col-lg-5\">
                    <ul>
                        <li>All Rights Reserved</li>
                        <li>Terms & Use</li>
                        <li>Privacy Policy</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Section End -->

<!-- Js Plugins -->
<script src=\"{{asset('js/jquery-3.3.1.min.js')}}\"></script>
<script src=\"{{asset('js/bootstrap.min.js')}}\"></script>
<script src=\"{{asset('js/jquery.magnific-popup.min.js')}}\"></script>
<script src=\"{{asset('js/masonry.pkgd.min.js')}}\"></script>
<script src=\"{{asset('js/jquery-ui.min.js')}}\"></script>
<script src=\"{{asset('js/jquery.nice-select.min.js')}}\"></script>
<script src=\"{{asset('js/jquery.slicknav.js')}}\"></script>
<script src=\"{{asset('js/owl.carousel.min.js')}}\"></script>
<script src=\"{{asset('js/main.js')}}\"></script>
</body>

</html>", "event/listfront.html.twig", "C:\\Users\\user\\Sami_Pi\\templates\\event\\listfront.html.twig");
    }
}
