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

/* @Twig/images/symfony-ghost.svg */
class __TwigTemplate_0aea6f8d1a2eb5edfda7a542d64007b43f3a50f0a5710e2f24bca79227b4669c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Twig/images/symfony-ghost.svg"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Twig/images/symfony-ghost.svg"));

        // line 1
        echo "<svg viewBox=\"0 0 136 81\" xmlns=\"http://www.w3.org/2000/svg\" fill-rule=\"evenodd\" clip-rule=\"evenodd\" stroke-linejoin=\"round\" stroke-miterlimit=\"1.4\"><path d=\"M92.4 20.4a23.2 23.2 0 0 1 9 1.9 23.7 23.7 0 0 1 5.2 3 24.3 24.3 0 0 1 3.4 3.4 24.8 24.8 0 0 1 5 9.4c.5 1.7.8 3.4 1 5.2v14.5h.4l.5.2a7.4 7.4 0 0 0 2.5.2l.2-.2.6-.8.8-1.3-.2-.1a5.5 5.5 0 0 1-.8-.3 5.6 5.6 0 0 1-2.3-1.8 5.7 5.7 0 0 1-.9-1.6 6.5 6.5 0 0 1-.2-2.8 7.3 7.3 0 0 1 .5-2l.3-.3.8-.9.3-.3c.2-.2.5-.3.8-.3H120.7c.2 0 .3-.1.4 0h.4l.2.1.3.2.2-.4.3-.4.1-.1 1.2-1 .3-.2.4-.1.4-.1h.3l1.5.1.4.1.8.5.1.2 1 1.1v.2H129.4l.4-.2 1.4-.5h1.1c.3 0 .7.2 1 .4.2 0 .3.2.5.3l.2.2.5.3.4.6.1.3.4 1.4.1.4v.6a7.8 7.8 0 0 1-.1.6 9.9 9.9 0 0 1-.8 2.4 7.8 7.8 0 0 1-3 3.3 6.4 6.4 0 0 1-1 .5 6.1 6.1 0 0 1-.6.2l-.7.1h-.1a23.4 23.4 0 0 1-.2 1.7 14.3 14.3 0 0 1-.6 2.1l-.8 2a9.2 9.2 0 0 1-.4.6l-.7 1a9.1 9.1 0 0 1-2.3 2.2c-.9.5-2 .6-3 .7l-1.4.1h-.5l-.4.1a15.8 15.8 0 0 1-2.8-.1v4.2a9.7 9.7 0 0 1-.7 3.5 9.6 9.6 0 0 1-1.7 2.8 9.3 9.3 0 0 1-3 2.3 9 9 0 0 1-5.4.7 9 9 0 0 1-3-1 9.4 9.4 0 0 1-2.7-2.5 10 10 0 0 1-1 1.2 9.3 9.3 0 0 1-2 1.3 9 9 0 0 1-2.4 1 9 9 0 0 1-6.5-1.1A9.4 9.4 0 0 1 85 77V77a10.9 10.9 0 0 1-.6.6 9.3 9.3 0 0 1-2.7 2 9 9 0 0 1-6 .8 9 9 0 0 1-2.4-1 9.3 9.3 0 0 1-2.3-1.7 9.6 9.6 0 0 1-1.8-2.8 9.7 9.7 0 0 1-.8-3.7v-4a18.5 18.5 0 0 1-2.9.2l-1.2-.1c-1.9-.3-3.7-1-5.1-2.2a8.2 8.2 0 0 1-1.1-1 10.2 10.2 0 0 1-.9-1.2 15.3 15.3 0 0 1-.7-1.3 20.8 20.8 0 0 1-1.9-6.2v-.2a6.5 6.5 0 0 1-1-.3 6.1 6.1 0 0 1-.6-.3 6.6 6.6 0 0 1-.9-.6 8.2 8.2 0 0 1-2.7-3.7 10 10 0 0 1-.3-1 10.3 10.3 0 0 1-.3-1.9V47v-.4l.1-.4.6-1.4.1-.2a2 2 0 0 1 .8-.8l.3-.2.3-.2a3.2 3.2 0 0 1 1.8-.5h.4l.3.2 1.4.6.2.2.4.3.3.4.7-.7.2-.2.4-.2.6-.2h2.1l.4.2.4.2.3.2.8 1 .2-.1h.1v-.1H63l1.1.1h.3l.8.5.3.4.7 1 .2.3.1.5a11 11 0 0 1 .2 1.5c0 .8 0 1.6-.3 2.3a6 6 0 0 1-.5 1.2 5.5 5.5 0 0 1-3.3 2.5 12.3 12.3 0 0 0 1.4 3h.1l.2.1 1 .2h1.5l.5-.2H67.8l.5-.2h.1V44v-.4a26.7 26.7 0 0 1 .3-2.3 24.7 24.7 0 0 1 5.7-12.5 24.2 24.2 0 0 1 3.5-3.3 23.7 23.7 0 0 1 4.9-3 23.2 23.2 0 0 1 5.6-1.7 23.7 23.7 0 0 1 4-.3zm-.3 2a21.2 21.2 0 0 0-8 1.7 21.6 21.6 0 0 0-4.8 2.7 22.2 22.2 0 0 0-3.2 3 22.7 22.7 0 0 0-5 9.2 23.4 23.4 0 0 0-.7 4.9v15.7l-.5.1a34.3 34.3 0 0 1-1.5.3h-.2l-.4.1h-.4l-.9.2a10 10 0 0 1-1.9 0c-.5 0-1-.2-1.5-.4a1.8 1.8 0 0 1-.3-.2 2 2 0 0 1-.3-.3 5.2 5.2 0 0 1-.1-.2 9 9 0 0 1-.6-.9 13.8 13.8 0 0 1-1-2 14.3 14.3 0 0 1-.6-2 14 14 0 0 1-.1-.8v-.2h.3a12.8 12.8 0 0 0 1.4-.2 4.4 4.4 0 0 0 .3 0 3.6 3.6 0 0 0 1.1-.7 3.4 3.4 0 0 0 1.2-1.7l.2-1.2a5.1 5.1 0 0 0 0-.8 7.2 7.2 0 0 0-.1-.8l-.7-1-1.2-.2-1 .7-.1 1.3a5 5 0 0 1 .1.4v.6a1 1 0 0 1 0 .3c-.1.3-.4.4-.7.5l-1.2.4v-.7A9.9 9.9 0 0 1 60 49l.3-.6v-.2l.1-.1v-1.6l-1-1.2h-1.5l-1 1.1v.4a5.3 5.3 0 0 0-.2.6 5.5 5.5 0 0 0 0 .5c0 .7 0 1.4.3 2 0 .4.2.8.4 1.2L57 51a9.5 9.5 0 0 1-1.1-.5h-.2a2 2 0 0 1-.4-.3c-.4-.4-.5-1-.6-1.6a5.6 5.6 0 0 1 0-.5v-.5-.5l-.6-1.5-1.4-.6-.9.3s-.2 0-.3.2a2 2 0 0 1-.1 0l-.6 1.4v.7a8.5 8.5 0 0 0 .5 2c.4 1.1 1 2.1 2 2.8a4.7 4.7 0 0 0 2.1.9h1a22.8 22.8 0 0 0 .1 1 18.1 18.1 0 0 0 .8 3.8 18.2 18.2 0 0 0 1.6 3.7l1 1.3c1 1 2.3 1.6 3.7 2a11.7 11.7 0 0 0 4.8 0h.4l.5-.2.5-.1.6-.2v6.6a8 8 0 0 0 .1 1.3 7.5 7.5 0 0 0 2.4 4.3 7.2 7.2 0 0 0 2.3 1.3 7 7 0 0 0 7-1.1 7.5 7.5 0 0 0 2-2.6A7.7 7.7 0 0 0 85 72V71a8.2 8.2 0 0 0 .2 1.3c0 .7.3 1.4.6 2a7.5 7.5 0 0 0 1.7 2.3 7.3 7.3 0 0 0 2.2 1.4 7.1 7.1 0 0 0 4.6.2 7.2 7.2 0 0 0 2.4-1.2 7.5 7.5 0 0 0 2.1-2.7 7.8 7.8 0 0 0 .7-2.4V71a9.3 9.3 0 0 0 .1.6 7.6 7.6 0 0 0 .6 2.5 7.5 7.5 0 0 0 2.4 3 7.1 7.1 0 0 0 7 .8 7.3 7.3 0 0 0 2.3-1.5 7.5 7.5 0 0 0 1.6-2.3 7.6 7.6 0 0 0 .5-2l.1-1.1v-6.7l.4.1a12.2 12.2 0 0 0 2 .5 11.1 11.1 0 0 0 2.5 0h.8l1.2-.1a9.5 9.5 0 0 0 1.4-.2l.9-.3a3.5 3.5 0 0 0 .6-.4l1.2-1.4a12.2 12.2 0 0 0 .8-1.2c0-.3.2-.5.3-.7a15.9 15.9 0 0 0 .7-2l.3-1.6v-1.3l.2-.9V54.6a15.5 15.5 0 0 0 1.8 0 4.5 4.5 0 0 0 1.4-.5 5.7 5.7 0 0 0 2.5-3.2 7.6 7.6 0 0 0 .4-1.5v-.3l-.4-1.4a5.2 5.2 0 0 1-.2-.1l-.4-.4a3.8 3.8 0 0 0-.2 0 1.4 1.4 0 0 0-.5-.2l-1.4.4-.7 1.3v.7a5.7 5.7 0 0 1-.1.8l-.7 1.4a1.9 1.9 0 0 1-.5.3h-.3a9.6 9.6 0 0 1-.8.3 8.8 8.8 0 0 1-.6 0l.2-.4.2-.5.2-.3v-.4l.1-.2V50l.1-1 .1-.6v-.6a4.8 4.8 0 0 0 0-.8v-.2l-1-1.1-1.5-.2-1.1 1-.2 1.4v.1l.2.4.2.3v.4l.1 1.1v.3l.1.5v.8a9.6 9.6 0 0 1-.8-.3l-.2-.1h-.3l-.8-.1h-.2a1.6 1.6 0 0 1-.2-.2.9.9 0 0 1-.2-.2 1 1 0 0 1-.1-.5l.2-.9v-1.2l-.9-.8h-1.2l-.8.9v.3a4.8 4.8 0 0 0-.3 2l.3.9a3.5 3.5 0 0 0 1.2 1.6l1 .5.8.2 1.4.1h.4l.2.1a12.1 12.1 0 0 1-1 2.6 13.2 13.2 0 0 1-.8 1.5 9.5 9.5 0 0 1-1 1.2l-.2.3a1.7 1.7 0 0 1-.4.3 2.4 2.4 0 0 1-.7.2h-2.5a7.8 7.8 0 0 1-.6-.2l-.7-.2h-.2a14.8 14.8 0 0 1-.6-.2 23.4 23.4 0 0 1-.4-.1l-.4-.1-.3-.1V43.9a34.6 34.6 0 0 0 0-.6 23.6 23.6 0 0 0-.4-3 22.7 22.7 0 0 0-1.5-4.7 22.6 22.6 0 0 0-4.6-6.7 21.9 21.9 0 0 0-6.9-4.7 21.2 21.2 0 0 0-8.1-1.8H92zm9.1 33.7l.3.1a1 1 0 0 1 .6.8v.4a8.4 8.4 0 0 1 0 .5 8.8 8.8 0 0 1-1.6 4.2l-1 1.3A10 10 0 0 1 95 66c-1.3.3-2.7.4-4 .3a10.4 10.4 0 0 1-2.7-.8 10 10 0 0 1-3.6-2.5 9.3 9.3 0 0 1-.8-1 9 9 0 0 1-.7-1.2 8.6 8.6 0 0 1-.8-3.4V57a1 1 0 0 1 .3-.6 1 1 0 0 1 1.3-.2 1 1 0 0 1 .4.8v.4a6.5 6.5 0 0 0 .5 2.2 7 7 0 0 0 2.1 2.8l1 .6c2.6 1.6 6 1.6 8.5 0a8 8 0 0 0 1.1-.6 7.6 7.6 0 0 0 1.2-1.2 7 7 0 0 0 1-1.7 6.5 6.5 0 0 0 .4-2.5 1 1 0 0 1 .7-1h.4zM30.7 43.7c-15.5 1-28.5-6-30.1-16.4C-1.2 15.7 11.6 4 29 1.3 46.6-1.7 62.3 5.5 64 17.1c1.6 10.4-8.7 21-23.7 25a31.2 31.2 0 0 0 0 .9v.3a19 19 0 0 0 .1 1l.1.4.1.9a4.7 4.7 0 0 0 .5 1l.7 1a9.2 9.2 0 0 0 1.2 1l1.5.8.6.8-.7.6-1.1.3a11.2 11.2 0 0 1-2.6.4 8.6 8.6 0 0 1-3-.5 8.5 8.5 0 0 1-1-.4 11.2 11.2 0 0 1-1.8-1.2 13.3 13.3 0 0 1-1-1 18 18 0 0 1-.7-.6l-.4-.4a23.4 23.4 0 0 1-1.3-1.8l-.1-.1-.3-.5V45l-.3-.6v-.7zM83.1 36c3.6 0 6.5 3.2 6.5 7.1 0 4-3 7.2-6.5 7.2S76.7 47 76.7 43 79.6 36 83 36zm18 0c3.6 0 6.5 3.2 6.5 7.1 0 4-2.9 7.2-6.4 7.2S94.7 47 94.7 43s3-7.1 6.5-7.1zm-18 6.1c2 0 3.5 1.6 3.5 3.6S85 49.2 83 49.2s-3.4-1.6-3.4-3.6S81.2 42 83 42zm17.9 0c1.9 0 3.4 1.6 3.4 3.6s-1.5 3.6-3.4 3.6c-2 0-3.5-1.6-3.5-3.6S99.1 42 101 42zM17 28c-.3 1.6-1.8 5-5.2 5.8-2.5.6-4.1-.8-4.5-2.6-.4-1.9.7-3.5 2.1-4.5A3.5 3.5 0 0 1 8 24.6c-.4-2 .8-3.7 3.2-4.2 1.9-.5 3.1.2 3.4 1.5.3 1.1-.5 2.2-1.8 2.5-.9.3-1.6 0-1.7-.6a1.4 1.4 0 0 1 0-.7s.3.2 1 0c.7-.1 1-.7.9-1.2-.2-.6-1-.8-1.8-.6-1 .2-2 1-1.7 2.6.3 1 .9 1.6 1.5 1.8l.7-.2c1-.2 1.5 0 1.6.5 0 .4-.2 1-1.2 1.2a3.3 3.3 0 0 1-1.5 0c-.9.7-1.6 1.9-1.3 3.2.3 1.3 1.3 2.2 3 1.8 2.5-.7 3.8-3.7 4.2-5-.3-.5-.6-1-.7-1.6-.1-.5.1-1 .9-1.2.4 0 .7.2.8.8a2.8 2.8 0 0 1 0 1l.7 1c.6-2 1.4-4 1.7-4 .6-.2 1.5.6 1.5.6-.8.7-1.7 2.4-2.3 4.2.8.6 1.6 1 2.1 1 .5-.1.8-.6 1-1.2-.3-2.2 1-4.3 2.3-4.6.7-.2 1.3.2 1.4.8.1.5 0 1.3-.9 1.7-.2-1-.6-1.3-1-1.3-.4.1-.7 1.4-.4 2.8.2 1 .7 1.5 1.3 1.4.8-.2 1.3-1.2 1.7-2.1-.3-2.1.9-4.2 2.2-4.5.7-.2 1.2.1 1.4 1 .4 1.4-1 2.8-2.2 3.4.3.7.7 1 1.3.9 1-.3 1.6-1.5 2-2.5l-.5-3v-.3s1.6-.3 1.8.6v.1c.2-.6.7-1.2 1.3-1.4.8-.1 1.5.6 1.7 1.6.5 2.2-.5 4.4-1.8 4.7H33a31.9 31.9 0 0 0 1 5.2c-.4.1-1.8.4-2-.4l-.5-5.6c-.5 1-1.3 2.2-2.5 2.4-1 .3-1.6-.3-2-1.1-.5 1-1.3 2.1-2.4 2.4-.8.2-1.5-.1-2-1-.3.8-.9 1.5-1.5 1.7-.7.1-1.5-.3-2.4-1-.3.8-.4 1.6-.4 2.2 0 0-.7 0-.8-.4-.1-.5 0-1.5.3-2.7a10.3 10.3 0 0 1-.7-.8zm38.2-17.8l.2.9c.5 1.9.4 4.4.8 6.4 0 .6-.4 3-1.4 3.3-.2 0-.3 0-.4-.4-.1-.7 0-1.6-.3-2.6-.2-1.1-.8-1.6-1.5-1.5-.8.2-1.3 1-1.6 2l-.1-.5c-.2-1-1.8-.6-1.8-.6a6.2 6.2 0 0 1 .4 1.3l.2 1c-.2.5-.6 1-1.2 1l-.2.1a7 7 0 0 0-.1-.8c-.3-1.1-1-2-1.6-1.8a.7.7 0 0 0-.4.3c-1.3.3-2.4 2-2.1 3.9-.2.9-.6 1.7-1 1.9-.5 0-.8-.5-1.1-1.8l-.1-1.2a4 4 0 0 0 0-1.7c0-.4-.4-.7-.8-.6-.7.2-.9 1.7-.5 3.8-.2 1-.6 2-1.3 2-.4.2-.8-.2-1-1l-.2-3c1.2-.5 2-1 1.8-1.7-.1-.5-.8-.7-.8-.7s0 .7-1 1.2l-.2-1.4c-.1-.6-.4-1-1.7-.6l.4 1 .2 1.5h-1v.8c0 .3.4.3 1 .2 0 1.3 0 2.7.2 3.6.3 1.4 1.2 2 2 1.7 1-.2 1.6-1.3 2-2.3.3 1.2 1 2 1.9 1.7.7-.2 1.2-1.1 1.6-2.2.4.8 1.1 1.1 2 1 1.2-.4 1.7-1.6 1.8-2.8h.2c.6-.2 1-.6 1.3-1 0 .8 0 1.5.2 2.1.1.5.3.7.6.6.5-.1 1-.9 1-.9a4 4 0 0 1-.3-1c-.3-1.3.3-3.6 1-3.7.2 0 .3.2.5.7v.8l.2 1.5v.7c.2.7.7 1.3 1.5 1 1.3-.2 2-2.6 2.1-3.9.3.2.6.2 1 .1-.6-2.2 0-6.1-.3-7.9-.1-.4-1-.5-1.7-.5h-.4zm-21.5 12c.4 0 .7.3 1 1.1.2 1.3-.3 2.6-.9 2.8-.2 0-.7 0-1-1.2v-.4c0-1.3.4-2 1-2.2zm-5.2 1c.3 0 .6.2.6.5.2.6-.3 1.3-1.2 2-.3-1.4.1-2.3.6-2.5zm18-.4c-.5.2-1-.4-1.2-1.2-.2-1 0-2.1.7-2.5v.5c.2.7.6 1.5 1.3 1.9 0 .7-.2 1.2-.7 1.3zm10-1.6c0 .5.4.7 1 .6.8-.2 1-1 .8-1.6 0-.5-.4-1-1-.8-.5.1-1 .9-.8 1.8zm-14.3-5.5c0-.4-.5-.7-1-.5-.8.2-1 1-.9 1.5.2.6.5 1 1 .8.5 0 1.1-1 1-1.8z\" fill=\"#fff\" fill-opacity=\".6\"/></svg>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/images/symfony-ghost.svg";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<svg viewBox=\"0 0 136 81\" xmlns=\"http://www.w3.org/2000/svg\" fill-rule=\"evenodd\" clip-rule=\"evenodd\" stroke-linejoin=\"round\" stroke-miterlimit=\"1.4\"><path d=\"M92.4 20.4a23.2 23.2 0 0 1 9 1.9 23.7 23.7 0 0 1 5.2 3 24.3 24.3 0 0 1 3.4 3.4 24.8 24.8 0 0 1 5 9.4c.5 1.7.8 3.4 1 5.2v14.5h.4l.5.2a7.4 7.4 0 0 0 2.5.2l.2-.2.6-.8.8-1.3-.2-.1a5.5 5.5 0 0 1-.8-.3 5.6 5.6 0 0 1-2.3-1.8 5.7 5.7 0 0 1-.9-1.6 6.5 6.5 0 0 1-.2-2.8 7.3 7.3 0 0 1 .5-2l.3-.3.8-.9.3-.3c.2-.2.5-.3.8-.3H120.7c.2 0 .3-.1.4 0h.4l.2.1.3.2.2-.4.3-.4.1-.1 1.2-1 .3-.2.4-.1.4-.1h.3l1.5.1.4.1.8.5.1.2 1 1.1v.2H129.4l.4-.2 1.4-.5h1.1c.3 0 .7.2 1 .4.2 0 .3.2.5.3l.2.2.5.3.4.6.1.3.4 1.4.1.4v.6a7.8 7.8 0 0 1-.1.6 9.9 9.9 0 0 1-.8 2.4 7.8 7.8 0 0 1-3 3.3 6.4 6.4 0 0 1-1 .5 6.1 6.1 0 0 1-.6.2l-.7.1h-.1a23.4 23.4 0 0 1-.2 1.7 14.3 14.3 0 0 1-.6 2.1l-.8 2a9.2 9.2 0 0 1-.4.6l-.7 1a9.1 9.1 0 0 1-2.3 2.2c-.9.5-2 .6-3 .7l-1.4.1h-.5l-.4.1a15.8 15.8 0 0 1-2.8-.1v4.2a9.7 9.7 0 0 1-.7 3.5 9.6 9.6 0 0 1-1.7 2.8 9.3 9.3 0 0 1-3 2.3 9 9 0 0 1-5.4.7 9 9 0 0 1-3-1 9.4 9.4 0 0 1-2.7-2.5 10 10 0 0 1-1 1.2 9.3 9.3 0 0 1-2 1.3 9 9 0 0 1-2.4 1 9 9 0 0 1-6.5-1.1A9.4 9.4 0 0 1 85 77V77a10.9 10.9 0 0 1-.6.6 9.3 9.3 0 0 1-2.7 2 9 9 0 0 1-6 .8 9 9 0 0 1-2.4-1 9.3 9.3 0 0 1-2.3-1.7 9.6 9.6 0 0 1-1.8-2.8 9.7 9.7 0 0 1-.8-3.7v-4a18.5 18.5 0 0 1-2.9.2l-1.2-.1c-1.9-.3-3.7-1-5.1-2.2a8.2 8.2 0 0 1-1.1-1 10.2 10.2 0 0 1-.9-1.2 15.3 15.3 0 0 1-.7-1.3 20.8 20.8 0 0 1-1.9-6.2v-.2a6.5 6.5 0 0 1-1-.3 6.1 6.1 0 0 1-.6-.3 6.6 6.6 0 0 1-.9-.6 8.2 8.2 0 0 1-2.7-3.7 10 10 0 0 1-.3-1 10.3 10.3 0 0 1-.3-1.9V47v-.4l.1-.4.6-1.4.1-.2a2 2 0 0 1 .8-.8l.3-.2.3-.2a3.2 3.2 0 0 1 1.8-.5h.4l.3.2 1.4.6.2.2.4.3.3.4.7-.7.2-.2.4-.2.6-.2h2.1l.4.2.4.2.3.2.8 1 .2-.1h.1v-.1H63l1.1.1h.3l.8.5.3.4.7 1 .2.3.1.5a11 11 0 0 1 .2 1.5c0 .8 0 1.6-.3 2.3a6 6 0 0 1-.5 1.2 5.5 5.5 0 0 1-3.3 2.5 12.3 12.3 0 0 0 1.4 3h.1l.2.1 1 .2h1.5l.5-.2H67.8l.5-.2h.1V44v-.4a26.7 26.7 0 0 1 .3-2.3 24.7 24.7 0 0 1 5.7-12.5 24.2 24.2 0 0 1 3.5-3.3 23.7 23.7 0 0 1 4.9-3 23.2 23.2 0 0 1 5.6-1.7 23.7 23.7 0 0 1 4-.3zm-.3 2a21.2 21.2 0 0 0-8 1.7 21.6 21.6 0 0 0-4.8 2.7 22.2 22.2 0 0 0-3.2 3 22.7 22.7 0 0 0-5 9.2 23.4 23.4 0 0 0-.7 4.9v15.7l-.5.1a34.3 34.3 0 0 1-1.5.3h-.2l-.4.1h-.4l-.9.2a10 10 0 0 1-1.9 0c-.5 0-1-.2-1.5-.4a1.8 1.8 0 0 1-.3-.2 2 2 0 0 1-.3-.3 5.2 5.2 0 0 1-.1-.2 9 9 0 0 1-.6-.9 13.8 13.8 0 0 1-1-2 14.3 14.3 0 0 1-.6-2 14 14 0 0 1-.1-.8v-.2h.3a12.8 12.8 0 0 0 1.4-.2 4.4 4.4 0 0 0 .3 0 3.6 3.6 0 0 0 1.1-.7 3.4 3.4 0 0 0 1.2-1.7l.2-1.2a5.1 5.1 0 0 0 0-.8 7.2 7.2 0 0 0-.1-.8l-.7-1-1.2-.2-1 .7-.1 1.3a5 5 0 0 1 .1.4v.6a1 1 0 0 1 0 .3c-.1.3-.4.4-.7.5l-1.2.4v-.7A9.9 9.9 0 0 1 60 49l.3-.6v-.2l.1-.1v-1.6l-1-1.2h-1.5l-1 1.1v.4a5.3 5.3 0 0 0-.2.6 5.5 5.5 0 0 0 0 .5c0 .7 0 1.4.3 2 0 .4.2.8.4 1.2L57 51a9.5 9.5 0 0 1-1.1-.5h-.2a2 2 0 0 1-.4-.3c-.4-.4-.5-1-.6-1.6a5.6 5.6 0 0 1 0-.5v-.5-.5l-.6-1.5-1.4-.6-.9.3s-.2 0-.3.2a2 2 0 0 1-.1 0l-.6 1.4v.7a8.5 8.5 0 0 0 .5 2c.4 1.1 1 2.1 2 2.8a4.7 4.7 0 0 0 2.1.9h1a22.8 22.8 0 0 0 .1 1 18.1 18.1 0 0 0 .8 3.8 18.2 18.2 0 0 0 1.6 3.7l1 1.3c1 1 2.3 1.6 3.7 2a11.7 11.7 0 0 0 4.8 0h.4l.5-.2.5-.1.6-.2v6.6a8 8 0 0 0 .1 1.3 7.5 7.5 0 0 0 2.4 4.3 7.2 7.2 0 0 0 2.3 1.3 7 7 0 0 0 7-1.1 7.5 7.5 0 0 0 2-2.6A7.7 7.7 0 0 0 85 72V71a8.2 8.2 0 0 0 .2 1.3c0 .7.3 1.4.6 2a7.5 7.5 0 0 0 1.7 2.3 7.3 7.3 0 0 0 2.2 1.4 7.1 7.1 0 0 0 4.6.2 7.2 7.2 0 0 0 2.4-1.2 7.5 7.5 0 0 0 2.1-2.7 7.8 7.8 0 0 0 .7-2.4V71a9.3 9.3 0 0 0 .1.6 7.6 7.6 0 0 0 .6 2.5 7.5 7.5 0 0 0 2.4 3 7.1 7.1 0 0 0 7 .8 7.3 7.3 0 0 0 2.3-1.5 7.5 7.5 0 0 0 1.6-2.3 7.6 7.6 0 0 0 .5-2l.1-1.1v-6.7l.4.1a12.2 12.2 0 0 0 2 .5 11.1 11.1 0 0 0 2.5 0h.8l1.2-.1a9.5 9.5 0 0 0 1.4-.2l.9-.3a3.5 3.5 0 0 0 .6-.4l1.2-1.4a12.2 12.2 0 0 0 .8-1.2c0-.3.2-.5.3-.7a15.9 15.9 0 0 0 .7-2l.3-1.6v-1.3l.2-.9V54.6a15.5 15.5 0 0 0 1.8 0 4.5 4.5 0 0 0 1.4-.5 5.7 5.7 0 0 0 2.5-3.2 7.6 7.6 0 0 0 .4-1.5v-.3l-.4-1.4a5.2 5.2 0 0 1-.2-.1l-.4-.4a3.8 3.8 0 0 0-.2 0 1.4 1.4 0 0 0-.5-.2l-1.4.4-.7 1.3v.7a5.7 5.7 0 0 1-.1.8l-.7 1.4a1.9 1.9 0 0 1-.5.3h-.3a9.6 9.6 0 0 1-.8.3 8.8 8.8 0 0 1-.6 0l.2-.4.2-.5.2-.3v-.4l.1-.2V50l.1-1 .1-.6v-.6a4.8 4.8 0 0 0 0-.8v-.2l-1-1.1-1.5-.2-1.1 1-.2 1.4v.1l.2.4.2.3v.4l.1 1.1v.3l.1.5v.8a9.6 9.6 0 0 1-.8-.3l-.2-.1h-.3l-.8-.1h-.2a1.6 1.6 0 0 1-.2-.2.9.9 0 0 1-.2-.2 1 1 0 0 1-.1-.5l.2-.9v-1.2l-.9-.8h-1.2l-.8.9v.3a4.8 4.8 0 0 0-.3 2l.3.9a3.5 3.5 0 0 0 1.2 1.6l1 .5.8.2 1.4.1h.4l.2.1a12.1 12.1 0 0 1-1 2.6 13.2 13.2 0 0 1-.8 1.5 9.5 9.5 0 0 1-1 1.2l-.2.3a1.7 1.7 0 0 1-.4.3 2.4 2.4 0 0 1-.7.2h-2.5a7.8 7.8 0 0 1-.6-.2l-.7-.2h-.2a14.8 14.8 0 0 1-.6-.2 23.4 23.4 0 0 1-.4-.1l-.4-.1-.3-.1V43.9a34.6 34.6 0 0 0 0-.6 23.6 23.6 0 0 0-.4-3 22.7 22.7 0 0 0-1.5-4.7 22.6 22.6 0 0 0-4.6-6.7 21.9 21.9 0 0 0-6.9-4.7 21.2 21.2 0 0 0-8.1-1.8H92zm9.1 33.7l.3.1a1 1 0 0 1 .6.8v.4a8.4 8.4 0 0 1 0 .5 8.8 8.8 0 0 1-1.6 4.2l-1 1.3A10 10 0 0 1 95 66c-1.3.3-2.7.4-4 .3a10.4 10.4 0 0 1-2.7-.8 10 10 0 0 1-3.6-2.5 9.3 9.3 0 0 1-.8-1 9 9 0 0 1-.7-1.2 8.6 8.6 0 0 1-.8-3.4V57a1 1 0 0 1 .3-.6 1 1 0 0 1 1.3-.2 1 1 0 0 1 .4.8v.4a6.5 6.5 0 0 0 .5 2.2 7 7 0 0 0 2.1 2.8l1 .6c2.6 1.6 6 1.6 8.5 0a8 8 0 0 0 1.1-.6 7.6 7.6 0 0 0 1.2-1.2 7 7 0 0 0 1-1.7 6.5 6.5 0 0 0 .4-2.5 1 1 0 0 1 .7-1h.4zM30.7 43.7c-15.5 1-28.5-6-30.1-16.4C-1.2 15.7 11.6 4 29 1.3 46.6-1.7 62.3 5.5 64 17.1c1.6 10.4-8.7 21-23.7 25a31.2 31.2 0 0 0 0 .9v.3a19 19 0 0 0 .1 1l.1.4.1.9a4.7 4.7 0 0 0 .5 1l.7 1a9.2 9.2 0 0 0 1.2 1l1.5.8.6.8-.7.6-1.1.3a11.2 11.2 0 0 1-2.6.4 8.6 8.6 0 0 1-3-.5 8.5 8.5 0 0 1-1-.4 11.2 11.2 0 0 1-1.8-1.2 13.3 13.3 0 0 1-1-1 18 18 0 0 1-.7-.6l-.4-.4a23.4 23.4 0 0 1-1.3-1.8l-.1-.1-.3-.5V45l-.3-.6v-.7zM83.1 36c3.6 0 6.5 3.2 6.5 7.1 0 4-3 7.2-6.5 7.2S76.7 47 76.7 43 79.6 36 83 36zm18 0c3.6 0 6.5 3.2 6.5 7.1 0 4-2.9 7.2-6.4 7.2S94.7 47 94.7 43s3-7.1 6.5-7.1zm-18 6.1c2 0 3.5 1.6 3.5 3.6S85 49.2 83 49.2s-3.4-1.6-3.4-3.6S81.2 42 83 42zm17.9 0c1.9 0 3.4 1.6 3.4 3.6s-1.5 3.6-3.4 3.6c-2 0-3.5-1.6-3.5-3.6S99.1 42 101 42zM17 28c-.3 1.6-1.8 5-5.2 5.8-2.5.6-4.1-.8-4.5-2.6-.4-1.9.7-3.5 2.1-4.5A3.5 3.5 0 0 1 8 24.6c-.4-2 .8-3.7 3.2-4.2 1.9-.5 3.1.2 3.4 1.5.3 1.1-.5 2.2-1.8 2.5-.9.3-1.6 0-1.7-.6a1.4 1.4 0 0 1 0-.7s.3.2 1 0c.7-.1 1-.7.9-1.2-.2-.6-1-.8-1.8-.6-1 .2-2 1-1.7 2.6.3 1 .9 1.6 1.5 1.8l.7-.2c1-.2 1.5 0 1.6.5 0 .4-.2 1-1.2 1.2a3.3 3.3 0 0 1-1.5 0c-.9.7-1.6 1.9-1.3 3.2.3 1.3 1.3 2.2 3 1.8 2.5-.7 3.8-3.7 4.2-5-.3-.5-.6-1-.7-1.6-.1-.5.1-1 .9-1.2.4 0 .7.2.8.8a2.8 2.8 0 0 1 0 1l.7 1c.6-2 1.4-4 1.7-4 .6-.2 1.5.6 1.5.6-.8.7-1.7 2.4-2.3 4.2.8.6 1.6 1 2.1 1 .5-.1.8-.6 1-1.2-.3-2.2 1-4.3 2.3-4.6.7-.2 1.3.2 1.4.8.1.5 0 1.3-.9 1.7-.2-1-.6-1.3-1-1.3-.4.1-.7 1.4-.4 2.8.2 1 .7 1.5 1.3 1.4.8-.2 1.3-1.2 1.7-2.1-.3-2.1.9-4.2 2.2-4.5.7-.2 1.2.1 1.4 1 .4 1.4-1 2.8-2.2 3.4.3.7.7 1 1.3.9 1-.3 1.6-1.5 2-2.5l-.5-3v-.3s1.6-.3 1.8.6v.1c.2-.6.7-1.2 1.3-1.4.8-.1 1.5.6 1.7 1.6.5 2.2-.5 4.4-1.8 4.7H33a31.9 31.9 0 0 0 1 5.2c-.4.1-1.8.4-2-.4l-.5-5.6c-.5 1-1.3 2.2-2.5 2.4-1 .3-1.6-.3-2-1.1-.5 1-1.3 2.1-2.4 2.4-.8.2-1.5-.1-2-1-.3.8-.9 1.5-1.5 1.7-.7.1-1.5-.3-2.4-1-.3.8-.4 1.6-.4 2.2 0 0-.7 0-.8-.4-.1-.5 0-1.5.3-2.7a10.3 10.3 0 0 1-.7-.8zm38.2-17.8l.2.9c.5 1.9.4 4.4.8 6.4 0 .6-.4 3-1.4 3.3-.2 0-.3 0-.4-.4-.1-.7 0-1.6-.3-2.6-.2-1.1-.8-1.6-1.5-1.5-.8.2-1.3 1-1.6 2l-.1-.5c-.2-1-1.8-.6-1.8-.6a6.2 6.2 0 0 1 .4 1.3l.2 1c-.2.5-.6 1-1.2 1l-.2.1a7 7 0 0 0-.1-.8c-.3-1.1-1-2-1.6-1.8a.7.7 0 0 0-.4.3c-1.3.3-2.4 2-2.1 3.9-.2.9-.6 1.7-1 1.9-.5 0-.8-.5-1.1-1.8l-.1-1.2a4 4 0 0 0 0-1.7c0-.4-.4-.7-.8-.6-.7.2-.9 1.7-.5 3.8-.2 1-.6 2-1.3 2-.4.2-.8-.2-1-1l-.2-3c1.2-.5 2-1 1.8-1.7-.1-.5-.8-.7-.8-.7s0 .7-1 1.2l-.2-1.4c-.1-.6-.4-1-1.7-.6l.4 1 .2 1.5h-1v.8c0 .3.4.3 1 .2 0 1.3 0 2.7.2 3.6.3 1.4 1.2 2 2 1.7 1-.2 1.6-1.3 2-2.3.3 1.2 1 2 1.9 1.7.7-.2 1.2-1.1 1.6-2.2.4.8 1.1 1.1 2 1 1.2-.4 1.7-1.6 1.8-2.8h.2c.6-.2 1-.6 1.3-1 0 .8 0 1.5.2 2.1.1.5.3.7.6.6.5-.1 1-.9 1-.9a4 4 0 0 1-.3-1c-.3-1.3.3-3.6 1-3.7.2 0 .3.2.5.7v.8l.2 1.5v.7c.2.7.7 1.3 1.5 1 1.3-.2 2-2.6 2.1-3.9.3.2.6.2 1 .1-.6-2.2 0-6.1-.3-7.9-.1-.4-1-.5-1.7-.5h-.4zm-21.5 12c.4 0 .7.3 1 1.1.2 1.3-.3 2.6-.9 2.8-.2 0-.7 0-1-1.2v-.4c0-1.3.4-2 1-2.2zm-5.2 1c.3 0 .6.2.6.5.2.6-.3 1.3-1.2 2-.3-1.4.1-2.3.6-2.5zm18-.4c-.5.2-1-.4-1.2-1.2-.2-1 0-2.1.7-2.5v.5c.2.7.6 1.5 1.3 1.9 0 .7-.2 1.2-.7 1.3zm10-1.6c0 .5.4.7 1 .6.8-.2 1-1 .8-1.6 0-.5-.4-1-1-.8-.5.1-1 .9-.8 1.8zm-14.3-5.5c0-.4-.5-.7-1-.5-.8.2-1 1-.9 1.5.2.6.5 1 1 .8.5 0 1.1-1 1-1.8z\" fill=\"#fff\" fill-opacity=\".6\"/></svg>
", "@Twig/images/symfony-ghost.svg", "C:\\Users\\user\\Sami_Pi\\vendor\\symfony\\twig-bundle\\Resources\\views\\images\\symfony-ghost.svg");
    }
}