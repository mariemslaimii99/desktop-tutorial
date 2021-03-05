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

/* event/list.html.twig */
class __TwigTemplate_999b06c32c70bdd4612dd888d90b784b812534f5781827f8f734ea9420687fd2 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/list.html.twig"));

        // line 1
        echo "<h1 >List des Events</h1>
<table id=\"customers\">
    <thead>
    <tr>
        <th>id</th>
        <th>nom_event</th>
        <th>nom_endroit</th>
        <th>type</th>
        <th>Nb_place_max</th>
        <th>lieu_depart</th>
        <th>date_depart</th>
        <th>detail</th>
        <th>modifier</th>
        <th>supprimer</th>
    </tr>
    </thead>
    <tbody>
    ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 18, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["Event"]) {
            // line 19
            echo "        <tr>
            <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Event"], "id", [], "any", false, false, false, 20), "html", null, true);
            echo "</td>
            <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Event"], "NomEvent", [], "any", false, false, false, 21), "html", null, true);
            echo "</td>
            <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Event"], "nomEndroit", [], "any", false, false, false, 22), "html", null, true);
            echo "</td>
            <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Event"], "Type", [], "any", false, false, false, 23), "html", null, true);
            echo "</td>
            <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Event"], "nbPlaceMax", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>
            <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Event"], "LieuDepart", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
            <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Event"], "DateDepart", [], "any", false, false, false, 26), "Y-m-d"), "html", null, true);
            echo "</td>


            <td>
                <a href=\"/show2/";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Event"], "id", [], "any", false, false, false, 30), "html", null, true);
            echo "\" >Details</a></td>
            <td>   <a href=\"/edit2/";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Event"], "id", [], "any", false, false, false, 31), "html", null, true);
            echo "\" >Modifier</a></td>

            <td>
                <a href=\"/delete2/";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Event"], "id", [], "any", false, false, false, 34), "html", null, true);
            echo "\"
                   onclick=\"return confirm('Etes-vous sûr de supprimer cet event?');\">Supprimer</a>
            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "    </tbody>
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
        return "event/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 39,  110 => 34,  104 => 31,  100 => 30,  93 => 26,  89 => 25,  85 => 24,  81 => 23,  77 => 22,  73 => 21,  69 => 20,  66 => 19,  62 => 18,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h1 >List des Events</h1>
<table id=\"customers\">
    <thead>
    <tr>
        <th>id</th>
        <th>nom_event</th>
        <th>nom_endroit</th>
        <th>type</th>
        <th>Nb_place_max</th>
        <th>lieu_depart</th>
        <th>date_depart</th>
        <th>detail</th>
        <th>modifier</th>
        <th>supprimer</th>
    </tr>
    </thead>
    <tbody>
    {% for Event in list %}
        <tr>
            <td>{{ Event.id }}</td>
            <td>{{ Event.NomEvent}}</td>
            <td>{{ Event.nomEndroit}}</td>
            <td>{{ Event.Type}}</td>
            <td>{{ Event.nbPlaceMax}}</td>
            <td>{{ Event.LieuDepart }}</td>
            <td>{{ Event.DateDepart|date('Y-m-d')}}</td>


            <td>
                <a href=\"/show2/{{ Event.id }}\" >Details</a></td>
            <td>   <a href=\"/edit2/{{ Event.id }}\" >Modifier</a></td>

            <td>
                <a href=\"/delete2/{{ Event.id }}\"
                   onclick=\"return confirm('Etes-vous sûr de supprimer cet event?');\">Supprimer</a>
            </td>
        </tr>
    {% endfor %}
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

</style>", "event/list.html.twig", "C:\\Users\\user\\Sami_Pi\\templates\\event\\list.html.twig");
    }
}
