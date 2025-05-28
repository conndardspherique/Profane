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

/* rendezvous.html.twig */
class __TwigTemplate_29cbfc7b1220400063ec1eabf5abf0bc extends Template
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

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "rendezvous.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "rendezvous.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "PRENDRE RENDEZ-VOUS";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <link rel=\"stylesheet\" href=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/rdv.css"), "html", null, true);
        yield "\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 10
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 11
        yield "<main>
<header class=\"header-wrap\">
    <div class=\"header-logo\">
        <a class=\"site-logo\" href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">
            <img src=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/.png"), "html", null, true);
        yield "\" alt=\"logo\">
        </a>
    </div>

    <nav class=\"header-nav-wrap\">
        <ul id=\"navbar\" class=\"header-main-nav\">
            <li><a href=\"";
        // line 21
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Accueil</a></li>
        </ul>
        
    </nav>

    <a class=\"header-menu-toggle\" href=\"#\"><span>Menu</span></a>
</header>

<link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
<link href=\"https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap\" rel=\"stylesheet\">

<div class=\"container\">
    <h1 class=\"rdv-title\">Prendre rendez-vous</h1>
    <div class=\"form-container\">
        ";
        // line 36
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), 'form_start');
        yield "
            ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "nom", [], "any", false, false, false, 37), 'row');
        yield "
            ";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "email", [], "any", false, false, false, 38), 'row');
        yield "
            ";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "telephone", [], "any", false, false, false, 39), 'row');
        yield "
            ";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "date", [], "any", false, false, false, 40), 'row');
        yield "
            ";
        // line 41
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "objet", [], "any", false, false, false, 41), 'row');
        yield "
            ";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "message", [], "any", false, false, false, 42), 'row');
        yield "
            ";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "fichier", [], "any", false, false, false, 43), 'row');
        yield "
            <button type=\"submit\" class=\"btn-submit\">Envoyer</button>
        ";
        // line 45
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), 'form_end');
        yield "
    </div>
</div>

<footer style=\"background-color:#222; color:#eee; padding:20px 10px; text-align:center; font-family:Arial, sans-serif; font-size:14px;\">
  <div class=\"footer-links\" style=\"margin-bottom:10px;\">
    <a href=\"/mentions-legales\" class=\"footer-link\">Mentions légales</a> |
    <a href=\"/conditions-generales\" class=\"footer-link\">Conditions générales</a> |
    <a href=\"/politique-confidentialite\" class=\"footer-link\">Politique de confidentialité</a> |
    <a href=\"/contact\" class=\"footer-link\">Contact</a>
  </div>
  <div style=\"color:#666;\">
    &copy; 2025 Profane Tattoo. Tous droits réservés.
  </div>

  <style>
    .footer-link {
      color: #aaa;
      margin: 0 8px;
      text-decoration: none;
      transition: color 0.3s ease;
    }
    .footer-link:hover, .footer-link:focus {
      color: #1e90ff; /* bleu clair au hover */
      text-decoration: underline;
      outline: none;
    }

    /* Responsive */
    @media (max-width: 480px) {
      footer {
        font-size: 13px;
        padding: 15px 5px;
      }
      .footer-links {
        display: flex;
        flex-direction: column;
        gap: 8px;
      }
      .footer-link {
        margin: 0;
      }
    }
  </style>
</footer>
</main>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "rendezvous.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  201 => 45,  196 => 43,  192 => 42,  188 => 41,  184 => 40,  180 => 39,  176 => 38,  172 => 37,  168 => 36,  150 => 21,  141 => 15,  137 => 14,  132 => 11,  119 => 10,  106 => 7,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}PRENDRE RENDEZ-VOUS{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('css/rdv.css') }}\">
{% endblock %}

{% block body %}
<main>
<header class=\"header-wrap\">
    <div class=\"header-logo\">
        <a class=\"site-logo\" href=\"{{ path('app_home') }}\">
            <img src=\"{{ asset('images/.png') }}\" alt=\"logo\">
        </a>
    </div>

    <nav class=\"header-nav-wrap\">
        <ul id=\"navbar\" class=\"header-main-nav\">
            <li><a href=\"{{ path('app_home') }}\">Accueil</a></li>
        </ul>
        
    </nav>

    <a class=\"header-menu-toggle\" href=\"#\"><span>Menu</span></a>
</header>

<link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
<link href=\"https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap\" rel=\"stylesheet\">

<div class=\"container\">
    <h1 class=\"rdv-title\">Prendre rendez-vous</h1>
    <div class=\"form-container\">
        {{ form_start(form) }}
            {{ form_row(form.nom) }}
            {{ form_row(form.email) }}
            {{ form_row(form.telephone) }}
            {{ form_row(form.date) }}
            {{ form_row(form.objet) }}
            {{ form_row(form.message) }}
            {{ form_row(form.fichier) }}
            <button type=\"submit\" class=\"btn-submit\">Envoyer</button>
        {{ form_end(form) }}
    </div>
</div>

<footer style=\"background-color:#222; color:#eee; padding:20px 10px; text-align:center; font-family:Arial, sans-serif; font-size:14px;\">
  <div class=\"footer-links\" style=\"margin-bottom:10px;\">
    <a href=\"/mentions-legales\" class=\"footer-link\">Mentions légales</a> |
    <a href=\"/conditions-generales\" class=\"footer-link\">Conditions générales</a> |
    <a href=\"/politique-confidentialite\" class=\"footer-link\">Politique de confidentialité</a> |
    <a href=\"/contact\" class=\"footer-link\">Contact</a>
  </div>
  <div style=\"color:#666;\">
    &copy; 2025 Profane Tattoo. Tous droits réservés.
  </div>

  <style>
    .footer-link {
      color: #aaa;
      margin: 0 8px;
      text-decoration: none;
      transition: color 0.3s ease;
    }
    .footer-link:hover, .footer-link:focus {
      color: #1e90ff; /* bleu clair au hover */
      text-decoration: underline;
      outline: none;
    }

    /* Responsive */
    @media (max-width: 480px) {
      footer {
        font-size: 13px;
        padding: 15px 5px;
      }
      .footer-links {
        display: flex;
        flex-direction: column;
        gap: 8px;
      }
      .footer-link {
        margin: 0;
      }
    }
  </style>
</footer>
</main>
{% endblock %}
", "rendezvous.html.twig", "/home/jeremy/profane/Profane/templates/rendezvous.html.twig");
    }
}
