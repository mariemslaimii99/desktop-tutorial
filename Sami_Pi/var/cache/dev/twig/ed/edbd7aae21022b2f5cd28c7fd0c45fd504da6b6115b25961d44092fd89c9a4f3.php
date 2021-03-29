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

/* reservation/listres.html.twig */
class __TwigTemplate_1591ad7c83aaa5e9904b7347a8b470d4b3d8ea9e24c0e8f73a2866b72f972c69 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/listres.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/listres.html.twig"));

        // line 1
        echo "<h1 >List des Reservation</h1>
<table id=\"customers\">
    <thead>
    <tr>
        <th>nom_event</th>
        <th>date_depart</th>
        <th>Nom</th>
        <th>prenom</th>
        <th>supprimer</th>
    </tr>
    </thead>
    <tbody>

    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 14, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["Reservation"]) {
            // line 15
            echo "    <tr>
        ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["Event"]);
            foreach ($context['_seq'] as $context["_key"] => $context["Event"]) {
                // line 17
                echo "            ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["Event"], "id", [], "any", false, false, false, 17), twig_get_attribute($this->env, $this->source, $context["Reservation"], "idevent", [], "any", false, false, false, 17)))) {
                    // line 18
                    echo "
    ";
                    // line 19
                    if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 19, $this->source); })()), "id", [], "any", false, false, false, 19), twig_get_attribute($this->env, $this->source, $context["Reservation"], "idclient", [], "any", false, false, false, 19)))) {
                        // line 20
                        echo "


            <td>";
                        // line 23
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Event"], "NomEvent", [], "any", false, false, false, 23), "html", null, true);
                        echo "</td>
            <td>";
                        // line 24
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Event"], "DateDepart", [], "any", false, false, false, 24), "Y-m-d"), "html", null, true);
                        echo "</td>



            <td>";
                        // line 28
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 28, $this->source); })()), "nom", [], "any", false, false, false, 28), "html", null, true);
                        echo "</td>
            <td>";
                        // line 29
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 29, $this->source); })()), "prenom", [], "any", false, false, false, 29), "html", null, true);
                        echo "</td>
        <td>
            <a href=\"/delete3/";
                        // line 31
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 31, $this->source); })()), "id", [], "any", false, false, false, 31), "html", null, true);
                        echo "/";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Reservation"], "id", [], "any", false, false, false, 31), "html", null, true);
                        echo "\"
               onclick=\"return confirm('Etes-vous sûr de supprimer cet event?');\">Supprimer</a>
        </td>
        ";
                    }
                    // line 35
                    echo "            ";
                }
                // line 36
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Event'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Reservation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "    </tr>
    </tbody>
</table>

<style>
    #customers {
        font-family: \"Trebuchet MS\", Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    #customers td, #customers th {
        border: 1px solid #ddd;
        padding: 8px;
    }

    #customers tr:nth-child(even){background-color: #f2f2f2;}

    #customers tr:hover {background-color: #ddd;}

    #customers th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #4CAF50;
        color: white;
    }

</style>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "reservation/listres.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 39,  120 => 37,  114 => 36,  111 => 35,  102 => 31,  97 => 29,  93 => 28,  86 => 24,  82 => 23,  77 => 20,  75 => 19,  72 => 18,  69 => 17,  65 => 16,  62 => 15,  58 => 14,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h1 >List des Reservation</h1>
<table id=\"customers\">
    <thead>
    <tr>
        <th>nom_event</th>
        <th>date_depart</th>
        <th>Nom</th>
        <th>prenom</th>
        <th>supprimer</th>
    </tr>
    </thead>
    <tbody>

    {% for Reservation in reservation %}
    <tr>
        {% for Event in Event %}
            {% if Event.id==Reservation.idevent %}

    {% if client.id==Reservation.idclient %}



            <td>{{ Event.NomEvent}}</td>
            <td>{{ Event.DateDepart|date('Y-m-d')}}</td>



            <td>{{ client.nom}}</td>
            <td>{{ client.prenom}}</td>
        <td>
            <a href=\"/delete3/{{ client.id }}/{{ Reservation.id }}\"
               onclick=\"return confirm('Etes-vous sûr de supprimer cet event?');\">Supprimer</a>
        </td>
        {% endif %}
            {% endif %}
    {% endfor %}

        {% endfor %}
    </tr>
    </tbody>
</table>

<style>
    #customers {
        font-family: \"Trebuchet MS\", Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    #customers td, #customers th {
        border: 1px solid #ddd;
        padding: 8px;
    }

    #customers tr:nth-child(even){background-color: #f2f2f2;}

    #customers tr:hover {background-color: #ddd;}

    #customers th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #4CAF50;
        color: white;
    }

</style>", "reservation/listres.html.twig", "C:\\Users\\user\\Sami_Pi\\templates\\reservation\\listres.html.twig");
    }
}
