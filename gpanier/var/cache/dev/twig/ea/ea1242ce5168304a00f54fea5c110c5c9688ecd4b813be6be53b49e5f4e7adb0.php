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

/* commande/list.html.twig */
class __TwigTemplate_dee97c3387c03816fc11884001fc53032210be86810688e2a559c7dfc86f525e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commande/list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commande/list.html.twig"));

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
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-2\">
                <div class=\"header__logo\">
                    <a href=\"./index.html\"><img src=\"img/logo.png\" alt=\"\"></a>
                </div>
            </div>
            <div class=\"col-lg-10\">
                <div class=\"header__menu__option\">
                    <nav class=\"header__menu\">
                        <ul>
                            <li class=\"active\"><a href=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_index", ["id1" => twig_get_attribute($this->env, $this->source, (isset($context["panier"]) || array_key_exists("panier", $context) ? $context["panier"] : (function () { throw new RuntimeError('Variable "panier" does not exist.', 95, $this->source); })()), "id", [], "any", false, false, false, 95)]), "html", null, true);
        echo "\">Produit</a></li>
                            <li><a href=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("list2", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["panier"]) || array_key_exists("panier", $context) ? $context["panier"] : (function () { throw new RuntimeError('Variable "panier" does not exist.', 96, $this->source); })()), "id", [], "any", false, false, false, 96)]), "html", null, true);
        echo "\">Panier</a></li>
                        </ul>
                    </nav>

                </div>
            </div>
        </div>
        <div class=\"canvas__open\">
            <i class=\"fa fa-bars\"></i>
        </div>
    </div>
</header>
<!-- Header Section End -->



<!-- Consultation Section Begin -->
<section class=\"hero spad set-bg\" data-setbg=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/batata.jpg"), "html", null, true);
        echo "\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <div class=\"consultation__form\">
                    <div class=\"section-title\">
                        <h2>Panier</h2>
                    </div>

                    <table class=\"table\">
                        <thead>

                        <tr>

                            <th> Produit</th>
                            <th> Prix </th>
                            <th> Quantite </th>
                            <th> Total </th>
                            <th> </th>
                        </thead>

                        <tbody>
                        ";
        // line 135
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["commande"]);
        foreach ($context['_seq'] as $context["_key"] => $context["commande"]) {
            // line 136
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 136, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
                // line 137
                echo "                                ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["commande"], "produit", [], "any", false, false, false, 137), $context["produit"]))) {
                    // line 138
                    echo "                                    <tr>
                                    <td>";
                    // line 139
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "nom", [], "any", false, false, false, 139), "html", null, true);
                    echo " </td>
                                    <td>";
                    // line 140
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "prix", [], "any", false, false, false, 140), "html", null, true);
                    echo " </td>
                                    <td>";
                    // line 141
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "quantite", [], "any", false, false, false, 141), "html", null, true);
                    echo " </td>
                                    <td>";
                    // line 142
                    echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["produit"], "prix", [], "any", false, false, false, 142) * twig_get_attribute($this->env, $this->source, $context["commande"], "quantite", [], "any", false, false, false, 142)), "html", null, true);
                    echo " </td>
                                    <td>
                                        <a href=\"/mod/";
                    // line 144
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["panier"]) || array_key_exists("panier", $context) ? $context["panier"] : (function () { throw new RuntimeError('Variable "panier" does not exist.', 144, $this->source); })()), "id", [], "any", false, false, false, 144), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "id", [], "any", false, false, false, 144), "html", null, true);
                    echo "\" class=\"btn btn_danger btn-sm\">
                                            <i class=\"fas fa-trash\"></i>
                                            modifier
                                        </a>
                                    </td>
                                    <td>
                                        <a href=\"\" class=\"btn btn_danger btn-sm\">
                                            <i class=\"fas fa-trash\"></i>
                                            supprimer
                                        </a>
                                    </td>";
                }
                // line 155
                echo "                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 157
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commande'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 158
        echo "                        </tbody>
                    </table>











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
        // line 280
        $this->displayBlock('js', $context, $blocks);
        // line 291
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

    // line 280
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 281
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-3.3.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 282
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 283
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 284
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/masonry.pkgd.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 285
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-ui.min.js"), "html", null, true);
        echo "js/jquery-ui.min.js\"></script>
    <script src=\"";
        // line 286
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.nice-select.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 287
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.slicknav.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 288
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 289
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "commande/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  507 => 289,  503 => 288,  499 => 287,  495 => 286,  491 => 285,  487 => 284,  483 => 283,  479 => 282,  474 => 281,  464 => 280,  452 => 26,  448 => 25,  444 => 24,  440 => 23,  436 => 22,  432 => 21,  428 => 20,  424 => 19,  419 => 18,  409 => 17,  373 => 291,  371 => 280,  247 => 158,  241 => 157,  234 => 155,  218 => 144,  213 => 142,  209 => 141,  205 => 140,  201 => 139,  198 => 138,  195 => 137,  190 => 136,  186 => 135,  161 => 113,  141 => 96,  137 => 95,  80 => 41,  65 => 28,  63 => 17,  45 => 1,);
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
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-2\">
                <div class=\"header__logo\">
                    <a href=\"./index.html\"><img src=\"img/logo.png\" alt=\"\"></a>
                </div>
            </div>
            <div class=\"col-lg-10\">
                <div class=\"header__menu__option\">
                    <nav class=\"header__menu\">
                        <ul>
                            <li class=\"active\"><a href=\"{{ path('produit_index' , {'id1':panier.id }) }}\">Produit</a></li>
                            <li><a href=\"{{ path('list2' , {'id':panier.id }) }}\">Panier</a></li>
                        </ul>
                    </nav>

                </div>
            </div>
        </div>
        <div class=\"canvas__open\">
            <i class=\"fa fa-bars\"></i>
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
                        <h2>Panier</h2>
                    </div>

                    <table class=\"table\">
                        <thead>

                        <tr>

                            <th> Produit</th>
                            <th> Prix </th>
                            <th> Quantite </th>
                            <th> Total </th>
                            <th> </th>
                        </thead>

                        <tbody>
                        {% for commande in commande %}
                            {% for produit in produits %}
                                {% if commande.produit==produit %}
                                    <tr>
                                    <td>{{ produit.nom }} </td>
                                    <td>{{ produit.prix }} </td>
                                    <td>{{ commande.quantite }} </td>
                                    <td>{{produit.prix * commande.quantite  }} </td>
                                    <td>
                                        <a href=\"/mod/{{ panier.id }}/{{ commande.id }}\" class=\"btn btn_danger btn-sm\">
                                            <i class=\"fas fa-trash\"></i>
                                            modifier
                                        </a>
                                    </td>
                                    <td>
                                        <a href=\"\" class=\"btn btn_danger btn-sm\">
                                            <i class=\"fas fa-trash\"></i>
                                            supprimer
                                        </a>
                                    </td>{% endif %}
                                </tr>
                            {% endfor %}
                        {% endfor %}
                        </tbody>
                    </table>











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

</html>", "commande/list.html.twig", "C:\\xampp\\htdocs\\gpanier\\templates\\commande\\list.html.twig");
    }
}
