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

/* commande/new.html.twig */
class __TwigTemplate_57e3e7a1c819ddf7d6588a35e45ec73502475f542ed9fd074fc49b82753594cb extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'css' => [$this, 'block_css'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commande/new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commande/new.html.twig"));

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
    ";
        // line 17
        $this->displayBlock('css', $context, $blocks);
        // line 28
        echo "</head>

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
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo.png"), "html", null, true);
        echo "\" alt=\"\"></a>
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

</header>
<!-- Header Section End -->



<!-- Consultation Section Begin -->
<section class=\"hero spad set-bg\" data-setbg=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/batata.jpg"), "html", null, true);
        echo "\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <div class=\"consultation__form\">
                    <div class=\"section-title\">
                        <span>REQUEST FOR YOUR</span>
                        <h2>Commande adding</h2>
                    </div>

                    ";
        // line 101
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), 'form_start');
        echo "


                    ";
        // line 104
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 104, $this->source); })()), 'widget');
        echo "

                    <input type=\"submit\" value=\"submit\" >
                    ";
        // line 107
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 107, $this->source); })()), 'form_end');
        echo "


                </div>
            </div>

        </div>
    </div>
    </div>
    </div>
</section>
<!-- Consultation Section End -->


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
";
        // line 219
        $this->displayBlock('js', $context, $blocks);
        // line 230
        echo "<script>
    function myFunction() {
        var checkBox = document.getElementById(\"myCheck\");
        var text = document.getElementById(\"text\");
        if (checkBox.checked == true){
            text.style.display = \"block\";
        } else {
            text.style.display = \"none\";
        }
    }
</script>

<script>
    function myFunction2() {
        var checkBox = document.getElementById(\"myCheck2\");
        var text = document.getElementById(\"text2\");
        if (checkBox.checked == true){
            text.style.display = \"block\";
        } else {
            text.style.display = \"none\";
        }
    }
</script>

</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 17
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 18
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\">
        <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/font-awesome.min.css"), "html", null, true);
        echo "\" type=\"text/css\">
        <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/flaticon.css"), "html", null, true);
        echo "\" type=\"text/css\">
        <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/nice-select.css"), "html", null, true);
        echo "\" type=\"text/css\">
        <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/jquery-ui.min.css"), "html", null, true);
        echo "\" type=\"text/css\">
        <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/magnific-popup.css"), "html", null, true);
        echo "\" type=\"text/css\">
        <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/owl.carousel.min.css"), "html", null, true);
        echo "\" type=\"text/css\">
        <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/slicknav.min.css"), "html", null, true);
        echo "\" type=\"text/css\">
        <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" type=\"text/css\">
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 219
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 220
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-3.3.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 221
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 222
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 223
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/masonry.pkgd.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 224
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-ui.min.js"), "html", null, true);
        echo "js/jquery-ui.min.js\"></script>
    <script src=\"";
        // line 225
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.nice-select.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 226
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.slicknav.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 227
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 228
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "commande/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  409 => 228,  405 => 227,  401 => 226,  397 => 225,  393 => 224,  389 => 223,  385 => 222,  381 => 221,  376 => 220,  366 => 219,  354 => 26,  350 => 25,  346 => 24,  342 => 23,  338 => 22,  334 => 21,  330 => 20,  326 => 19,  321 => 18,  311 => 17,  275 => 230,  273 => 219,  158 => 107,  152 => 104,  146 => 101,  133 => 91,  80 => 41,  65 => 28,  63 => 17,  45 => 1,);
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
    {% block css %}
        <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.min.css') }}\" type=\"text/css\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/font-awesome.min.css') }}\" type=\"text/css\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/flaticon.css') }}\" type=\"text/css\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/nice-select.css') }}\" type=\"text/css\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/jquery-ui.min.css') }}\" type=\"text/css\">
        <link rel=\"stylesheet\" href=\"{{ asset ('css/magnific-popup.css') }}\" type=\"text/css\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/owl.carousel.min.css') }}\" type=\"text/css\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/slicknav.min.css') }}\" type=\"text/css\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\" type=\"text/css\">
    {% endblock %}
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
        <a href=\"./index.html\"><img src=\"{{ asset('img/logo.png') }}\" alt=\"\"></a>
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

</header>
<!-- Header Section End -->



<!-- Consultation Section Begin -->
<section class=\"hero spad set-bg\" data-setbg=\"{{ asset('img/batata.jpg') }}\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <div class=\"consultation__form\">
                    <div class=\"section-title\">
                        <span>REQUEST FOR YOUR</span>
                        <h2>Commande adding</h2>
                    </div>

                    {{ form_start(form) }}


                    {{ form_widget(form) }}

                    <input type=\"submit\" value=\"submit\" >
                    {{ form_end(form) }}


                </div>
            </div>

        </div>
    </div>
    </div>
    </div>
</section>
<!-- Consultation Section End -->


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
{% block js %}
    <script src=\"{{ asset('js/jquery-3.3.1.min.js') }}\"></script>
    <script src=\"{{ asset('js/bootstrap.min.js') }}\"></script>
    <script src=\"{{ asset('js/jquery.magnific-popup.min.js') }}\"></script>
    <script src=\"{{ asset('js/masonry.pkgd.min.js') }}\"></script>
    <script src=\"{{ asset('js/jquery-ui.min.js') }}js/jquery-ui.min.js\"></script>
    <script src=\"{{ asset('js/jquery.nice-select.min.js') }}\"></script>
    <script src=\"{{ asset('js/jquery.slicknav.js') }}\"></script>
    <script src=\"{{ asset('js/owl.carousel.min.js') }}\"></script>
    <script src=\"{{ asset('js/main.js') }}\"></script>
{% endblock %}
<script>
    function myFunction() {
        var checkBox = document.getElementById(\"myCheck\");
        var text = document.getElementById(\"text\");
        if (checkBox.checked == true){
            text.style.display = \"block\";
        } else {
            text.style.display = \"none\";
        }
    }
</script>

<script>
    function myFunction2() {
        var checkBox = document.getElementById(\"myCheck2\");
        var text = document.getElementById(\"text2\");
        if (checkBox.checked == true){
            text.style.display = \"block\";
        } else {
            text.style.display = \"none\";
        }
    }
</script>

</body>

</html>", "commande/new.html.twig", "C:\\xampp\\htdocs\\gpanier\\templates\\commande\\new.html.twig");
    }
}
