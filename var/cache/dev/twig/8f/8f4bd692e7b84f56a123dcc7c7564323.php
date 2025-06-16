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

/* ShowOff.html.twig */
class __TwigTemplate_ca504b925f2b7f879f906d3904bd3248 extends Template
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
            'head' => [$this, 'block_head'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ShowOff.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ShowOff.html.twig"));

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

        yield "Galerie - Profane Tattoo";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_head(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 6
        yield "
<meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"format-detection\" content=\"telephone=no\">
    <meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
    <meta name=\"author\" content=\"\">
    <meta name=\"keywords\" content=\"\">
    <meta name=\"description\" content=\"\">

<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/vendor.css"), "html", null, true);
        yield "\">
<link href=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        yield "\">

<link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
<link href=\"https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;700&display=swap\" rel=\"stylesheet\">

<link href=\"https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Rozha+One&display=swap\" rel=\"stylesheet\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 27
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

        // line 28
        yield "

<style> 

.header-main-nav li a,
.header-menu-toggle span {
  font-family: 'Raleway', sans-serif;
  text-transform: uppercase;
  letter-spacing: 1px;
  font-weight: 500;
}

/* Style de base pour la galerie */
.gallery {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
  gap: 15px;
  padding: 20px;
  background-color: #f9f9f9;
}

.gallery-item {
  overflow: hidden;
  border-radius: 8px;
  box-shadow: 0 2px 5px rgba(0,0,0,0.1);
  cursor: pointer;
  transition: transform 0.3s ease;
}

.gallery-item img {
  width: 100%;
  height: auto;
  display: block;
  transition: transform 0.3s ease;
}

.gallery-item:hover {
  transform: scale(1.05);
  box-shadow: 0 4px 15px rgba(0,0,0,0.3);
}

.gallery-item:hover img {
  transform: scale(1.1);
}


/**
 * 1. Correct the line height in all browsers.
 * 2. Prevent adjustments of font size after orientation changes in iOS.
 */

html {
  line-height: 1.15; /* 1 */
  -webkit-text-size-adjust: 100%; /* 2 */
}

/* Sections
   ========================================================================== */

/**
 * Remove the margin in all browsers.
 */

 
/**
 * Render the `main` element consistently in IE.
 */

main {
  display: block;
}

/**
 * Correct the font size and margin on `h1` elements within `section` and
 * `article` contexts in Chrome, Firefox, and Safari.
 */

h1 {
  font-size: 2em;
  margin: 0.67em 0;
}

/* Grouping content
   ========================================================================== */

/**
 * 1. Add the correct box sizing in Firefox.
 * 2. Show the overflow in Edge and IE.
 */

hr {
  box-sizing: content-box; /* 1 */
  height: 0; /* 1 */
  overflow: visible; /* 2 */
}

/**
 * 1. Correct the inheritance and scaling of font size in all browsers.
 * 2. Correct the odd `em` font sizing in all browsers.
 */

pre {
  font-family: monospace, monospace; /* 1 */
  font-size: 1em; /* 2 */
}

/* Text-level semantics
   ========================================================================== */

/**
 * Remove the gray background on active links in IE 10.
 */

a {
  background-color: transparent;
}

/**
 * 1. Remove the bottom border in Chrome 57-
 * 2. Add the correct text decoration in Chrome, Edge, IE, Opera, and Safari.
 */

abbr[title] {
  border-bottom: none; /* 1 */
  text-decoration: underline; /* 2 */
  text-decoration: underline dotted; /* 2 */
}

/**
 * Add the correct font weight in Chrome, Edge, and Safari.
 */

b,
strong {
  font-weight: bolder;
}

/**
 * 1. Correct the inheritance and scaling of font size in all browsers.
 * 2. Correct the odd `em` font sizing in all browsers.
 */

code,
kbd,
samp {
  font-family: monospace, monospace; /* 1 */
  font-size: 1em; /* 2 */
}

/**
 * Add the correct font size in all browsers.
 */

small {
  font-size: 80%;
}

/**
 * Prevent `sub` and `sup` elements from affecting the line height in
 * all browsers.
 */

sub,
sup {
  font-size: 75%;
  line-height: 0;
  position: relative;
  vertical-align: baseline;
}

sub {
  bottom: -0.25em;
}

sup {
  top: -0.5em;
}

/* Embedded content
   ========================================================================== */

/**
 * Remove the border on images inside links in IE 10.
 */

img {
  border-style: none;
}

/* Forms
   ========================================================================== */

/**
 * 1. Change the font styles in all browsers.
 * 2. Remove the margin in Firefox and Safari.
 */

button,
input,
optgroup,
select,
textarea {
  font-family: inherit; /* 1 */
  font-size: 100%; /* 1 */
  line-height: 1.15; /* 1 */
  margin: 0; /* 2 */
}

/**
 * Show the overflow in IE.
 * 1. Show the overflow in Edge.
 */

button,
input { /* 1 */
  overflow: visible;
}

/**
 * Remove the inheritance of text transform in Edge, Firefox, and IE.
 * 1. Remove the inheritance of text transform in Firefox.
 */

button,
select { /* 1 */
  text-transform: none;
}

/**
 * Correct the inability to style clickable types in iOS and Safari.
 */

button,
[type=\"button\"],
[type=\"reset\"],
[type=\"submit\"] {
  -webkit-appearance: button;
}

/**
 * Remove the inner border and padding in Firefox.
 */

button::-moz-focus-inner,
[type=\"button\"]::-moz-focus-inner,
[type=\"reset\"]::-moz-focus-inner,
[type=\"submit\"]::-moz-focus-inner {
  border-style: none;
  padding: 0;
}

/**
 * Restore the focus styles unset by the previous rule.
 */

button:-moz-focusring,
[type=\"button\"]:-moz-focusring,
[type=\"reset\"]:-moz-focusring,
[type=\"submit\"]:-moz-focusring {
  outline: 1px dotted ButtonText;
}

/**
 * Correct the padding in Firefox.
 */

fieldset {
  padding: 0.35em 0.75em 0.625em;
}

/**
 * 1. Correct the text wrapping in Edge and IE.
 * 2. Correct the color inheritance from `fieldset` elements in IE.
 * 3. Remove the padding so developers are not caught out when they zero out
 *    `fieldset` elements in all browsers.
 */

legend {
  box-sizing: border-box; /* 1 */
  color: inherit; /* 2 */
  display: table; /* 1 */
  max-width: 100%; /* 1 */
  padding: 0; /* 3 */
  white-space: normal; /* 1 */
}

/**
 * Add the correct vertical alignment in Chrome, Firefox, and Opera.
 */

progress {
  vertical-align: baseline;
}

/**
 * Remove the default vertical scrollbar in IE 10+.
 */

textarea {
  overflow: auto;
}

/**
 * 1. Add the correct box sizing in IE 10.
 * 2. Remove the padding in IE 10.
 */

[type=\"checkbox\"],
[type=\"radio\"] {
  box-sizing: border-box; /* 1 */
  padding: 0; /* 2 */
}

/**
 * Correct the cursor style of increment and decrement buttons in Chrome.
 */

[type=\"number\"]::-webkit-inner-spin-button,
[type=\"number\"]::-webkit-outer-spin-button {
  height: auto;
}

/**
 * 1. Correct the odd appearance in Chrome and Safari.
 * 2. Correct the outline style in Safari.
 */

[type=\"search\"] {
  -webkit-appearance: textfield; /* 1 */
  outline-offset: -2px; /* 2 */
}

/**
 * Remove the inner padding in Chrome and Safari on macOS.
 */

[type=\"search\"]::-webkit-search-decoration {
  -webkit-appearance: none;
}

/**
 * 1. Correct the inability to style clickable types in iOS and Safari.
 * 2. Change font properties to `inherit` in Safari.
 */

::-webkit-file-upload-button {
  -webkit-appearance: button; /* 1 */
  font: inherit; /* 2 */
}

/* Interactive
   ========================================================================== */

/*
 * Add the correct display in Edge, IE 10+, and Firefox.
 */

details {
  display: block;
}

/*
 * Add the correct display in all browsers.
 */

summary {
  display: list-item;
}

/* Misc
   ========================================================================== */

/**
 * Add the correct display in IE 10+.
 */

template {
  display: none;
}

/**
 * Add the correct display in IE 10.
 */

[hidden] {
  display: none;
}

/*** 

====================================================================
\tReset
====================================================================

 ***/

*{
\tmargin:0px;
\tpadding:0px;
\tborder:none;
\toutline:none;
\tfont-size: 100%;
}

/*** 

====================================================================
  Global Settings
====================================================================

 ***/

.container {
  max-width: 1300px;
}

body {  
  font-size: 18px;
  color: #ff0000;
  line-height: 187%;
  font-weight: 400;
  background: #ff0000;
  -webkit-font-smoothing: antialiased;
  -moz-font-smoothing: antialiased;
  font-family: 'Raleway', sans-serif;
}

a{
  text-decoration: none;
  cursor: pointer;
  color: #111;
}

a:hover,
a:focus,
a:visited{
  text-decoration: none;
  outline: none;
}

h1,h2,h3,h4,h5,h6 {
  position: relative;
  font-weight: 400;
  margin: 0px;
  background: none;
  line-height: 104%;
  letter-spacing: 0.03em;
  font-family: 'Oswald', sans-serif;
}

textarea{
  overflow: hidden;
}

button{
  outline: none;
  cursor: pointer;
}

p{
  font-size: 18px;
  line-height: 187%;
  font-weight: 400;
  color: #555;
}

.text{
  font-size: 13px;
  line-height: 168.4%;
  font-weight: 700;
  letter-spacing: 0.25em;
  text-transform: uppercase;
  color: #AFAFAF;
  margin-left: 24px;
  margin-bottom: 10px;
}

.text::before{
  content: '';
  margin-top: 10px;
  margin-left: -24px;
  position: absolute;
  width: 14px;
  height: 2px;
  background: #C5A992;
}

::-webkit-input-placeholder{color: inherit;}
::-moz-input-placeholder{color: inherit;}
::-ms-input-placeholder{color: inherit;}

section{
  padding: 164px 0px;
}

ul,li{
  list-style:none;
  padding:0px;
  margin:0px; 
}

.centered{
  text-align:center !important;
}

/*Btn*/

a.btn {
  color: #fff;
  display: inline-block;
  font-family: 'Oswald', sans-serif;
  font-size: 18px;
  box-sizing: border-box;
  padding: 20px 40px;
  font-weight: 400;
  line-height: auto;
  overflow: hidden;
  letter-spacing: 0.08em;
  text-transform: uppercase;
  margin-top: 75px;
  border-radius: 0;
  transition-duration: 0.3s;
}

a.btn .iconify{
  margin-left: 8px;
}

/* Btn black */

a.btn-black{
  background: #111;
  border: none;
}

a.btn-black:hover{
  color: #fff;
  background-color: #444;
  border: none;
}

/* Btn outline */

a.btn-outline{
  border: 1px solid rgba(255, 255, 255, 0.7);
  box-sizing: border-box;
}

a.btn-outline:hover{
  background-color: #fff;
  border: 1px solid #FFFFFF;
}

/* Btn blank */

a.btn-blank{
  color: #111;
  padding: 0;
  margin: 0;
  border: none;
}

a.btn-blank:hover{  
  color: #444;
  border: none;
}

img{
  display:inline-block;
  max-width:100%;
  height:auto;  
}

/*** 

====================================================================
    Preloader
====================================================================

***/

#preloader {
  background-color: #010101;
  position: fixed;
  top: 0;
  left: 0;
  z-index: 999999;
  width: 100%;
  height: 100%;
  transition: opacity 0.6s ease, visibility 0.6s ease;
}
#preloader.hide-preloader {
  opacity: 0;
  visibility: hidden;
}
#loader {
  display: block;
  position: relative;
  left: 50%;
  top: 50%;
  width: 200px;
  height: 200px;
  margin: -100px 0 0 -100px;
  border-radius: 50%;
  border: 5px solid transparent;
  border-top-color: #f3f3f3;
  -webkit-animation: spin 2s linear infinite;
  animation: spin 2s linear infinite;
}
#loader:before {
  content: \"\";
  position: absolute;
  top: 5px;
  left: 5px;
  right: 5px;
  bottom: 5px;
  border-radius: 50%;
  border: 5px solid transparent;
  border-top-color: #f3f3f3;
  -webkit-animation: spin 3s linear infinite;
  animation: spin 3s linear infinite;
}
#loader:after {
  content: \"\";
  position: absolute;
  top: 15px;
  left: 15px;
  right: 15px;
  bottom: 15px;
  border-radius: 50%;
  border: 5px solid transparent;
  border-top-color: #f3f3f3;
  -webkit-animation: spin 1.5s linear infinite;
  animation: spin 1.5s linear infinite;
}
@-webkit-keyframes spin {
  0% {
      -webkit-transform: rotate(0deg);
      -ms-transform: rotate(0deg);
      transform: rotate(0deg);
  }
  100% {
      -webkit-transform: rotate(360deg);
      -ms-transform: rotate(360deg);
      transform: rotate(360deg);
  }
}
@keyframes spin {
  0% {
      -webkit-transform: rotate(0deg);
      -ms-transform: rotate(0deg);
      transform: rotate(0deg);
  }
  100% {
      -webkit-transform: rotate(360deg);
      -ms-transform: rotate(360deg);
      transform: rotate(360deg);
  }
}

/*** 

====================================================================
    Section Title
====================================================================

***/

.sec-title h1{
  display: block;
  font-size: 85px;
  text-transform: uppercase;
  color: #111; 
  margin-bottom: 75px; 
}

@media screen and (max-width:800px){
  .sec-title h1{
    font-size: 76px;
  }
}

/*** 

====================================================================
  Site Header Style
====================================================================

 ***/

.header-wrap{
  background-color: #fff;
  position: sticky;
  top: 0;
  left: 0;
  width: 100%;
  height: 148px;
  text-align: center;
  z-index: 14;
  box-shadow: 0px 2px 24px rgb(0 0 0 / 3%);
   font-family: 'Raleway', sans-serif;
}

.header-wrap .header-logo {
  display: inline-block;
  position: absolute;
  top: 18%;
  left: 45px;
}

.header-wrap .header-logo img {
  width: 188px;
  height: 90px;
  margin: 0;
}

.header-wrap .header-nav-wrap ul {
  text-align: center;
  display: inline-block;
  list-style: none;
  margin-left: 0;
  margin-top: 58px;
  font-family: 'Raleway', sans-serif;
}

.header-wrap .header-nav-wrap ul li{
  display: inline-block;
}

.header-wrap .header-nav-wrap .header-main-nav li{
  margin: 0 24px;
}

.header-wrap .header-nav-wrap .header-main-nav li a{
  font-family: 'Raleway', sans-serif;
  padding: 0;
  letter-spacing: 0.08em;
  text-transform: uppercase;
  color: #111;
}

.header-wrap .header-nav-wrap .header-main-nav li a::after {
  content: '';
  display: block;
  width: 0;
  height: 2px;
  margin-top: -4px;
  background: #111;
  transition: width .3s;
}

.header-wrap .header-nav-wrap .header-main-nav li a:hover::after {
  color: #111;
  width: 100%;
  transition: width .3s;
}

.header-wrap .header-nav-wrap .header-main-nav li a.active::after {
  content: '';
  display: block;
  width: 100%;
  height: 2px;
  margin-top: -4px;
  background: #111;
  transition: width .3s;
}

.header-wrap .header-nav-wrap .header-social{
  font-size: 22px;
  position: absolute;
  top: 0;
  right: 40px;
}

.header-wrap .header-nav-wrap .header-social a{
  font-size: 22px;
  margin-left: 20px; 
  transition-duration: 0.3s;
}

.header-wrap .header-nav-wrap .header-social a:hover{
  color: #444;
}

/*** 

====================================================================
  Menu trigger
====================================================================

 ***/

.header-menu-toggle {
  display: none;
  height: 42px;
  width: 42px;
  line-height: 42px;
  
   font-family: 'Raleway', sans-serif;
  font-size: 1.4rem;
  text-transform: uppercase;
  letter-spacing: .2rem;
  color: rgba(255, 255, 255, 0.5);
  transition: all .3s;
  position: absolute;
  right: 32px;
  top: 33px;
}

.header-menu-toggle:hover,
.header-menu-toggle:focus {
  color: #ffffff;
}

.header-menu-toggle span {
  display: block;
  width: 28px;
  height: 2px;
  margin-top: -1px;
  background-color: #111;
  transition: all .5s;
  font: 0/0 a;
  text-shadow: none;
  color: transparent;
  position: absolute;
  top: 50%;
  left: 9px;
  right: auto;
  bottom: auto;
}

.header-menu-toggle span::before,
.header-menu-toggle span::after {
  content: '';
  width: 100%;
  height: 100%;
  background-color: inherit;
  position: absolute;
  left: 0;
  transition: all .5s;
}

.header-menu-toggle span::before {
  top: -10px;
}

.header-menu-toggle span::after {
  bottom: -10px;
}

.header-menu-toggle.is-clicked span {
  background-color: white;
  transition: all .1s;
}

.header-menu-toggle.is-clicked span::before,
.header-menu-toggle.is-clicked span::after {
  background-color: #111;
}

.header-menu-toggle.is-clicked span::before {
  top: 0;
  -webkit-transform: rotate(135deg);
  transform: rotate(135deg);
}

.header-menu-toggle.is-clicked span::after {
  bottom: 0;
  -webkit-transform: rotate(225deg);
  transform: rotate(225deg);
}


/*** 

====================================================================
  Responsive Site Header Style
====================================================================

 ***/

@media screen and (max-width:1200px) {
  .header-wrap {
    text-align: right;
  }

  .header-wrap .header-nav-wrap {
    margin-right: 26px;
  }

  .header-wrap .header-nav-wrap .header-social {
    display: none;
  }

}

@media screen and (max-width:1000px) {
  .header-wrap {
    background-color: #fff;
    height: 114px;
    position: fixed;
    top: 0;
  }

  .header-wrap .header-logo {
    left: 20px;
  }

  .header-wrap .header-logo img {
    width: 145px;
    height: 69px;
  }

  .header-wrap .header-nav-wrap {
    display: none;
    text-align: left;
    height: auto;
    width: 100%;
    background-color: #fff;
    padding: 144px 44px 64px;
  }

  .header-wrap .header-nav-wrap .header-main-nav {
    display: block;
    padding-left: 0;
    height: auto;
    margin: 0 0 2rem 0;
    border-top: 1px solid rgb(0 0 0 / 4%);
  }

  .header-wrap .header-nav-wrap .header-main-nav li {
    text-align: left;
    display: block;
    margin: 0;
    padding: 7px 0;
    border-bottom: 1px solid rgb(0 0 0 / 4%);
  }

  .header-wrap .header-nav-wrap .header-main-nav li a {
    padding: 18px 0;
    line-height: 20px;
  }

  .header-wrap .header-nav-wrap .header-main-nav li a::after {
    content: '';
    width: 0;
  }

  .header-wrap .header-nav-wrap .header-main-nav li a:hover::after {
    width: 0;
  }

  .header-wrap .header-nav-wrap .header-main-nav li a.active::after {
    content: '';
    width: 0;
  }

  .header-wrap .header-nav-wrap .header-main-nav li a.active{
    color: #444;
  }

  .header-wrap .header-nav-wrap .header-social {
    text-align: left;
    display: block;
    position: static;
  }

  .header-wrap .header-nav-wrap .header-social li {
    font-size: 1.8rem;
    margin-right: 1.6rem;
  }

  .header-wrap .header-nav-wrap .header-social li a {
    line-height: 36px;
    margin-left: 0;
  }

  .header-wrap .header-menu-toggle {
    display: block;
  }

}

@media only screen and (min-width:1000px) {
  .header-wrap .header-nav-wrap {
    display: block !important;
  }
}

/*** 

====================================================================
  Billboard Style
====================================================================

 ***/

.billboard-wrap{
  margin-top: 0;
  padding: 0;
}

.billboard-wrap .billboard-bg-img{
  display: flex;
  align-items: center;
  height: 100vh;
  width: 100%;
}

.billboard-wrap .billboard-bg-img .billboard-content h1{
  font-family: \"Rozha One\";
  font-size: 110px;
  line-height: 95%;
  letter-spacing: -0.02em;
  text-transform: capitalize;  
  color: #fff;
  margin-bottom: 20px;
}

.billboard-wrap .billboard-bg-img .billboard-content p{
  font-weight: 300;
  font-size: 20px;
  line-height: 200%;
  letter-spacing: 0.02em;
  color: #fff;
}

.billboard-wrap .billboard-bg-img .billboard-content a.btn{
  margin-top: 35px;
}

/*** 

====================================================================
  Responsive Billboard Style
====================================================================

 ***/

@media screen and (max-width:800px){
  .billboard-wrap .billboard-bg-img .billboard-content h1{
    font-size: 90px;
  }

  .billboard-wrap .billboard-bg-img .billboard-content p{
    font-size: 18px;
  }
}

/*** 

====================================================================
  About Us Style
====================================================================

 ***/

.about-wrap .section-image{
  margin-left: -25px;
  padding-right: 29px;
}

.about-wrap .about-me-content .sec-title h1{
  margin-bottom: 38px;
}

.about-wrap .short-description{
  padding-left: 18%;
}

.about-wrap .row .about-me-content{
  margin-top: 66px;
}

.about-wrap .short-description a.btn{
  margin-top: 24px;
}

/*** 

====================================================================
  Responsive About Us Style
====================================================================

 ***/

@media screen and (max-width:800px){
  .about-wrap .section-image {
    display: none;
  }

  .about-wrap .row .about-me-content {
    margin-top: 0;
    flex: 100%;
    max-width: 100%;
  }
}

@media screen and (max-width:500px){
  .about-wrap .short-description {
    padding-left: 0;
  }
}

/*** 

====================================================================
  Gallery Style
====================================================================

 ***/

.gallery-wrap{
  padding: 160px 0;
}

.gallery-wrap .row div{
  padding: 0 10px;
}

.gallery-wrap .row div img{
  margin-bottom: 20px;
  width: -webkit-fill-available;
  cursor: crosshair;
  transition-duration: .3s;
}

.gallery-wrap .row div img:hover{
  -webkit-filter: brightness(60%);
  -webkit-transition: all 1s ease;
  -moz-transition: all 1s ease;
  -o-transition: all 1s ease;
  -ms-transition: all 1s ease;
  transition: all 1s ease;
}

.gallery-wrap .text-center a.btn.btn-black{
  margin-top: 55px;
}

.mfp-bottom-bar{
  display: none;
}

/*** 

====================================================================
  Services Style
====================================================================

 ***/

.services-wrap{
  text-align: center;
}

.services-wrap .chart{
  position: relative;
  display: inline-block;
  width: 290px;
  height: 290px;
}

.services-wrap .chart:before{
  content: \"\";
  border: 7px solid #EEEEEE;
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translateX(-50%)translateY(-50%);
  display: block;
  width: 251px;
  height: 251px;
  border-radius: 50%;
}

.services-wrap .chart .percent{
 font-family: 'Raleway', sans-serif;
  font-size: 78px;
  line-height: 294px;
  letter-spacing: -0.02em;
  color: #111;
}

.services-wrap .chart .percent:after{
  position: relative;
  content: '%';
  font-weight: lighter;
  padding-left: 3px;
}

.services-wrap .chart p{
  margin-top: 18px;
 font-family: 'Raleway', sans-serif;
  font-weight: 300;
  letter-spacing: 0.08em;
  text-transform: uppercase;
  color: #111;  
}

.services-wrap .chart canvas{
  position: absolute;
  top: 0;
  left: 0;
}

/*** 

====================================================================
  Testimonials Style
====================================================================

 ***/

.testimonials-wrap{
  padding-top: 0;
}

.testimonials-wrap .testimonial-slider .item-paragraph{
  font-size: 36px;
  line-height: 160%;
  letter-spacing: 0.02em;
  color: #111;
}

.testimonials-wrap .testimonial-slider .item-content{
  position: relative;
  padding-top: 4%;
  padding-left: 20%;
}

.testimonials-wrap .testimonial-slider .item-content .quotation-img{
  position: absolute;
  z-index: -10;
  left: 70px;
  top: 0px;
}

.testimonials-wrap .testimonial-slider .item-content .author-name{
  font-family: Oswald;
  font-weight: 600;
  font-size: 24px;
  text-transform: capitalize;
  color: #111; 
}

.item-content .testimonial-author{
  margin-top: 50px;
}

.item-content .testimonial-author .author-name span{
  font-weight: 300;
}

.item-content .testimonial-author .author-name span::before{
  content: '|';
  margin: 0 20px;
}

.testimonials-wrap .testimonial-slider .author-post{  
  font-size: 14px;
  line-height: 212.4%;
  letter-spacing: 0.02em;
  text-transform: capitalize;
  color: #757575;
}

.testimonial-slider-btn{
  text-align: right;
  margin-right: 8%;
}

.slide-button-next, .slide-button-prev{
  font-size: 50px;
  display: inline;
  margin-right: 5px;
}

.slide-button-next, .slide-button-prev, a{
  transition-duration: 0.3s;
}

.slide-button-next, .slide-button-prev, a:hover{
  color: #444;
}

.slide-button-next.swiper-button-disabled, .slide-button-prev.swiper-button-disabled {
  opacity: .25;
  cursor: auto;
  pointer-events: none;
}

/*** 

====================================================================
  Responsive Testimonials Style
====================================================================

 ***/

@media screen and (max-width:800px){
  .testimonials-wrap{
    width: 100%;
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
  }

  .testimonials-wrap .testimonial-slider .item-paragraph{
    font-size: 32px;
  }

  .testimonials-wrap .testimonial-slider .item-content{
    padding: 0;
  }

  .testimonials-wrap .testimonial-slider .item-content .quotation-img{
    left: 0px;
  }
}

/*** 

====================================================================
  Interview Style
====================================================================

 ***/

.interview-wrap{
  padding: 0;
}

.interview-wrap .interview-bg-img{
  height: 812px;
  width: 100%;
  padding: 0;  
  display: flex;
  align-items: center;
}

.interview-wrap .interview-bg-img .interview-content h2{
  font-family: Rozha One;
  font-size: 60px;
  line-height: 110%;
  letter-spacing: -0.02em;
  text-transform: capitalize;
  color: #fff;
}

.interview-wrap .interview-bg-img .interview-content .video-btn{
  display: flex;
  align-items: center;
  margin-top: 33px;
  margin-left: 9px;
}

.interview-wrap .interview-bg-img .interview-content .video-btn a.play-btn svg.iconify{
  margin-left: 4%;
}

.interview-wrap .interview-bg-img .interview-content .video-btn a.play-btn{
  position: relative;  
  font-size: 35px;
  color: #000;  
  background-color: #fff;
  width: 75px;
  height: 75px;
  display: flex;
  align-items: center;
  justify-content: center;
  border-radius: 50%;
}

.interview-wrap .interview-bg-img .interview-content .video-btn a.play-btn:before{
  content: \"\";
  opacity: 0.4;
  border: 1px solid #fff;
  position: absolute;
  z-index: 0;
  left: 50%;
  top: 50%;
  transform: translateX(-50%)translateY(-50%);
  display: block;
  width: 91px;
  height: 91px;
  border-radius: 50%;
}

.interview-wrap .interview-bg-img .interview-content .video-btn .btn{
  margin: 0;
  margin-left: 28px;
  padding: 0;
  border: none;
  letter-spacing: 0.1em;
}

.interview-wrap .interview-bg-img .interview-content .video-btn .btn:hover{
  color: #fff;
}

/*** 

====================================================================
  Responsive Interview Style
====================================================================

 ***/

@media screen and (max-width:800px){
  .interview-wrap .interview-bg-img .interview-content h2{    
    font-size: 55px;
  }  
}

/*** 

====================================================================
  Articles Style
====================================================================

 ***/

.articles-wrap .container{
  max-width: 1583px;
}

.articles-wrap .article-post-item{
  padding-right: 54px;
  padding-left: 54px;
}

.articles-wrap .article-post-item .article-img{
  overflow: hidden;
}

.articles-wrap .article-post-item .article-img a img{
  transition-duration: .3s;
}

.articles-wrap .article-post-item .article-img a img:hover{
  -webkit-filter: brightness(60%);
  -webkit-transition: all 1s ease;
  -moz-transition: all 1s ease;
  -o-transition: all 1s ease;
  -ms-transition: all 1s ease;
  transition: all 1s ease;
  transform: scale(1.1);
}

.articles-wrap .article-post-item h4{
  margin-left: 10px;
  margin-bottom: 16px;
  font-weight: 300;
  font-size: 18px;
  line-height: 187%;
  letter-spacing: 0.08em;
  text-transform: uppercase;
  color: #111;
}

.articles-wrap .article-post-item .lower-content h3{
  margin-top: 32px;
  margin-bottom: 7px;
  font-family: Raleway;
  font-style: normal;
  font-weight: 600;
  font-size: 19px;
  line-height: 187%;
  letter-spacing: 0.02em;
  color: #111;
}

.articles-wrap .article-post-item .lower-content span{
  font-family: Raleway;
  font-style: normal;
  font-weight: 600;
  font-size: 14px;
  letter-spacing: 0.02em;
  color: #ACACAC;
}

/*** 

====================================================================
  Responsive Interview Style
====================================================================

 ***/

@media screen and (max-width:1100px){
  .articles-wrap .article-post-item{
    padding: 0 15px;
  }
}

@media screen and (max-width:768px){
  .articles-wrap .article-post-item{
    margin-bottom: 60px;
    padding: 0 15px;
  }

  .articles-wrap .article-post-item h4{
    margin-left: 0;
  }
}

/*** 

====================================================================
  Contact Us Style
====================================================================

 ***/

.contact-wrap{
  padding: 150px 0;
  margin-bottom: 0;
}

.contact-wrap .contact-info h4{
  font-weight: 500;
  font-size: 20px;
  line-height: 187%;
  letter-spacing: 0.08em;
  text-transform: uppercase;
  color: #111;
  margin-bottom: 10px;
}

.contact-wrap .contact-info p{
  letter-spacing: 0.02em;
  color: #333333;
}

.contact-wrap .contact-info .contact-info-list li a{
  margin-bottom: 14px;
}

.contact-wrap .contact-info .contact-info-list a{ 
  font-weight: 500;
  line-height: 21px;
  letter-spacing: 0.02em;
}

.contact-wrap .contact-info .contact-info-list li svg.iconify{
  margin-top: 4px;
  margin-right: 10px;
}

.contact-wrap .contact-info .contact-info-list a:hover{
  color: #444;
}

.contact-wrap .contact-info .btn.btn-blank{
  font-family: Raleway;
  font-weight: 500;
  letter-spacing: 0.02em;
  text-transform: none;
  margin-top: 22px;
  border-bottom: 1px solid #111;
  padding-bottom: 2px;
}

.contact-wrap .contact-form{
  margin-top: -90px;
  margin-left: 40px;
}

.contact-wrap .contact-form .form-group{
  margin-bottom: 45px;
}

.contact-wrap .contact-form .form-group ::placeholder{
  font-style: italic;
  font-weight: normal;
  font-size: 18px;
  line-height: 21px;
  letter-spacing: 0.06em;
  color: #555;
}

.contact-wrap .contact-form .form-group input,textarea{  
  width: 100%;
  padding-bottom: 16px;
  border-bottom: 1px solid #111;
  background: transparent;
  font-size: 16px;
  line-height: 100%;
  color: #333;
}

.contact-wrap .contact-form .form-group textarea{
  height: 38px;
}

.contact-wrap .contact-form a.btn{
  margin-top: 25px;
}

/*** 

====================================================================
  Responsive Contact Us Style
====================================================================

 ***/

@media screen and (max-width:768px){
  .contact-wrap .contact-form{
    margin-top: 0;
    margin-left: 0;
  }

  .contact-wrap .container .row .contact-info,.contact-form{
    margin-bottom: 60px;
  }
}

/*** 

====================================================================
  Main Footer Style
====================================================================

 ***/

.main-footer .widgets-section{
  padding-bottom: 127px;
  padding-top: 156px;
}

.main-footer .widgets-section .footer-column .footer-widget.links-widget{
  padding-left: 20%;
}

.main-footer .widgets-section .footer-widget h4{
  font-weight: 500;
  font-size: 20px;
  line-height: 30px;
  letter-spacing: 0.08em;
  text-transform: uppercase;
  color: #000000;  
  margin-bottom: 24px;
}

.main-footer .widgets-section .footer-widget p, 
.main-footer .widgets-section .footer-widget a{
  letter-spacing: 0.02em;
  color: #000000;  
}

.main-footer .widgets-section .footer-widget a{
  margin-bottom: 24px;
}

.main-footer .widgets-section .footer-widget a:hover{
  font-weight: 400;
  color: #383535;
}

.main-footer .widgets-section .about-widget .contact-info-list a{
  font-weight: 600;
}

.main-footer .widgets-section .about-widget .contact-info-list a svg.iconify{
  margin-right: 10px;
}

.main-footer .widgets-section .about-widget .contact-info-list a:hover{
  font-weight: 600;
  color: #383535;
}

.main-footer .widgets-section .newsletter-widget .form-group{
  position: relative;
  margin-top: 25px;
}

.main-footer .widgets-section .newsletter-widget .form-group ::placeholder{
  font-style: italic;
  font-weight: normal;
  font-size: 16px;
  line-height: 19px;
  letter-spacing: 0.06em;
  text-transform: capitalize;
  color: #383535;
}

.main-footer .widgets-section .newsletter-widget .form-group input{
  position: absolute;
  width: 100%;
  padding-bottom: 12px;
  border-bottom: 1px solid #383535;
  background: transparent;
  font-size: 16px;
  line-height: 100%;
  color: #383535;
}

.main-footer .widgets-section .newsletter-widget .form-group a{
  position: absolute;
  right: 0;
  top: -8px;
  font-size: 26px;
  color: #383535;
  margin-bottom: 0;
}

.main-footer .footer-bottom{
  font-size: 16px;
  line-height: 19px;
  letter-spacing: 0.02em;
  color: #383535;
  padding: 37px 0;
  border-top: 1px solid #2B2B2B;
}

.main-footer .footer-bottom a{
  font-weight: 500;
  color: #383535;
}

.main-footer .footer-bottom a:hover{
  text-decoration: underline;
}

/*** 

====================================================================
  Responsive Main Footer Style
====================================================================

 ***/

@media screen and (max-width:768px){
  .main-footer .widgets-section{
    padding-bottom: 66px;
  }
  
  .main-footer .widgets-section .footer-column{
    margin-bottom: 60px;
  }

  .main-footer .widgets-section .footer-column .footer-widget.links-widget {
    padding-left: 0;
  }
}

/* overide */
.modal-dialog {
  max-width: 800px;
  margin: auto;
  height: 100vh;
  display: flex;
  align-items: center;
}


body {
  margin: 1;
  background-color: #ffffff;
}

/* Reset général propre */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

html, body {
  height: 100%;
  background-color: #ffffff; /* même fond que le site */
  overflow-x: hidden;
}

/* Structure principale */
body {
  display: flex;
  flex-direction: column;
  background-color: #ffffff;
}

/* Pour coller le footer en bas */
main {
  flex: 1;
}

/* Footer clean */
footer {
  background-color: #ffffff;
  color: #fff;
  padding: 1rem;
  text-align: center;
}


/* Bouton \"Prendre rendez-vous\" dans la navbar */
.btn-contact {
    background-color: rgb(184, 45, 45); /* rouge */
    color: white !important;
    padding: 10px 20px;
    border-radius: 4px;
    margin-left: 15px; /* Décale vers la droite */
    transition: background-color 0.3s ease, transform 0.3s ease;
    text-transform: uppercase;
    font-weight: 600;
}

.btn-contact {
    background-color: rgb(184, 45, 45);
    color: white !important;
    padding: 10px 20px;
    border-radius: 4px;
    margin-left: 15px;
    position: relative;
    text-transform: uppercase;
    font-weight: 600;
    transition: background-color 0.3s ease;
}

.btn-contact::after {
    content: '';
    position: absolute;
    left: 20%;
    bottom: -5px;
    width: 60%;
    height: 2px;
    background-color: transparent;
    transition: background-color 0.3s ease;
}

.btn-contact:hover::after {
    background-color: white;
}

.btn-contact:hover {
    background-color: rgb(224, 83, 83);
}


/* Supprimer la ligne noire collée */
.header-main-nav .nav-link {
    border-bottom: none !important;
    box-shadow: none !important;
}

/* Supprimer les effets visuels persistants */
.header-main-nav .nav-link.active {
    border-bottom: none !important;
    box-shadow: none !important;
    color: inherit;
}

/* Supprimer toute ligne noire persistante sous \"Prendre rendez-vous\" */
.btn-contact,
.btn-contact:focus,
.btn-contact:active,
.btn-contact.active,
.btn-contact.nav-link.active {
    border-bottom: none !important;
    box-shadow: none !important;
    outline: none !important;
}

.btn-contact::after {
    display: none !important; /* au cas où un effet l'aurait laissé actif */
}

/* Supprime aussi toute ligne des autres liens au cas où */
.header-main-nav .nav-link,
.header-main-nav .nav-link.active {
    border-bottom: none !important;
    box-shadow: none !important;
}

.nav-link.cta {
  background-color: #d32f2f; /* rouge foncé */
  color: white;
  padding: 0.8rem 1.2rem;
  border-radius: 4px;
  text-align: center;
  display: block;
  margin: 0 auto;
  max-width: 90%;
  font-weight: bold;
  text-transform: uppercase;
}

@media (min-width: 768px) {
  .nav-link.cta {
    margin-left: 1rem;
    margin-right: 0;
    max-width: none;
    display: inline-block;
  }
}

/* Style galerie tattoo */
.gallery-wrap .popup-gallery {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 20px;
    padding: 30px 10px;
}

.popup-gallery a.image-link {
    display: block;
    overflow: hidden;
    border-radius: 12px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    max-width: 100%;
}

.popup-gallery a.image-link:hover {
    transform: scale(1.03);
    box-shadow: 0 6px 16px rgba(0, 0, 0, 0.2);
}

.popup-gallery img {
    display: block;
    width: 100%;
    height: auto;
    object-fit: cover;
    border-radius: 12px;
}

/* Responsive 2 à 3 colonnes selon la taille */
@media (min-width: 768px) {
    .popup-gallery a.image-link {
        width: 280px;
    }
}

@media (max-width: 767px) {
    .popup-gallery a.image-link {
        width: 100%;
    }
}


</style>

 <!-- Site Header -->
    <header class=\"header-wrap\">

        <div class=\"header-logo\">
            <a class=\"site-logo\">
                <img src=\"images/.png\" alt=\"logo\">
            </a>
        </div>

        <nav class=\"header-nav-wrap\">
            <ul id=\"navbar\" class=\"header-main-nav\">
                <li><a href=\"";
        // line 1986
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"nav-link active\">Accueil</a></li>
               <li><a href=\"";
        // line 1987
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_galerie");
        yield "\" class=\"nav-link\">Gallerie</a></li>
                <li><a href=\"";
        // line 1988
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("appointment_form");
        yield "\" class=\"nav-link cta\">Prendre rendez-vous</a></li>




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
<section id=\"gallery\" class=\"gallery-wrap\" style=\"background: #F9F9F9;\">
    <div class=\"container\">
        <div class=\"sec-title\">
            <h1>Quelques exemples <br>De mon travail</h1>
        </div>
    </div>

    <div class=\"container-fluid\">
        <div class=\"row popup-gallery\">
            ";
        // line 2015
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::batch((isset($context["images"]) || array_key_exists("images", $context) ? $context["images"] : (function () { throw new RuntimeError('Variable "images" does not exist.', 2015, $this->source); })()), 2));
        foreach ($context['_seq'] as $context["_key"] => $context["imagesRow"]) {
            // line 2016
            yield "                <div class=\"col-md-3\">
                    ";
            // line 2017
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["imagesRow"]);
            foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
                // line 2018
                yield "                        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/uploads/images" . CoreExtension::getAttribute($this->env, $this->source, $context["img"], "filename", [], "any", false, false, false, 2018))), "html", null, true);
                yield "\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["img"], "altText", [], "any", false, false, false, 2018), "html", null, true);
                yield "\" class=\"image-link\">
                            <img src=\"";
                // line 2019
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, $context["img"], "filename", [], "any", false, false, false, 2019))), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["img"], "altText", [], "any", false, false, false, 2019), "html", null, true);
                yield "\" class=\"img-fluid mb-2\">
                        </a>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['img'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 2022
            yield "                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['imagesRow'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2024
        yield "        </div>
    </div>
</section>

<!-- Section Contact -->

<footer style=\"background-color:#222; color:#eee; padding:20px 10px; text-align:center; font-family:Arial, sans-serif; font-size:14px;\">

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
  <div class=\"footer-links\" style=\"margin-bottom:10px;\">
    <a href=\"/mentions-legales\" class=\"footer-link\">Mentions légales</a> |
    <a href=\"/conditions-generales\" class=\"footer-link\">Conditions générales</a> |
    <a href=\"/politique-confidentialite\" class=\"footer-link\">Politique de confidentialité</a> |
  </div>
  <div style=\"color:#666;\">
    &copy; 2025 Profane Tattoo. Tous droits réservés.
  </div>

  
</footer>






<script src=\"js/jquery-1.11.0.min.js\"></script>
<script src=\"https://code.iconify.design/1/1.0.6/iconify.min.js\"></script>
<script src=\"js/bootstrap.min.js\"></script>
<script src=\"js/plugins.js\"></script>
<script src=\"js/script.js\"></script>
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
        return "ShowOff.html.twig";
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
        return array (  2187 => 2024,  2180 => 2022,  2169 => 2019,  2162 => 2018,  2158 => 2017,  2155 => 2016,  2151 => 2015,  2121 => 1988,  2117 => 1987,  2113 => 1986,  153 => 28,  140 => 27,  121 => 18,  117 => 17,  113 => 16,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Galerie - Profane Tattoo{% endblock %}

{% block head %}

<meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"format-detection\" content=\"telephone=no\">
    <meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
    <meta name=\"author\" content=\"\">
    <meta name=\"keywords\" content=\"\">
    <meta name=\"description\" content=\"\">

<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/vendor.css') }}\">
<link href=\"{{ asset('css/bootstrap.min.css') }}\" rel=\"stylesheet\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/style.css') }}\">

<link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
<link href=\"https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;700&display=swap\" rel=\"stylesheet\">

<link href=\"https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Rozha+One&display=swap\" rel=\"stylesheet\">
{% endblock %}

{% block body %}


<style> 

.header-main-nav li a,
.header-menu-toggle span {
  font-family: 'Raleway', sans-serif;
  text-transform: uppercase;
  letter-spacing: 1px;
  font-weight: 500;
}

/* Style de base pour la galerie */
.gallery {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
  gap: 15px;
  padding: 20px;
  background-color: #f9f9f9;
}

.gallery-item {
  overflow: hidden;
  border-radius: 8px;
  box-shadow: 0 2px 5px rgba(0,0,0,0.1);
  cursor: pointer;
  transition: transform 0.3s ease;
}

.gallery-item img {
  width: 100%;
  height: auto;
  display: block;
  transition: transform 0.3s ease;
}

.gallery-item:hover {
  transform: scale(1.05);
  box-shadow: 0 4px 15px rgba(0,0,0,0.3);
}

.gallery-item:hover img {
  transform: scale(1.1);
}


/**
 * 1. Correct the line height in all browsers.
 * 2. Prevent adjustments of font size after orientation changes in iOS.
 */

html {
  line-height: 1.15; /* 1 */
  -webkit-text-size-adjust: 100%; /* 2 */
}

/* Sections
   ========================================================================== */

/**
 * Remove the margin in all browsers.
 */

 
/**
 * Render the `main` element consistently in IE.
 */

main {
  display: block;
}

/**
 * Correct the font size and margin on `h1` elements within `section` and
 * `article` contexts in Chrome, Firefox, and Safari.
 */

h1 {
  font-size: 2em;
  margin: 0.67em 0;
}

/* Grouping content
   ========================================================================== */

/**
 * 1. Add the correct box sizing in Firefox.
 * 2. Show the overflow in Edge and IE.
 */

hr {
  box-sizing: content-box; /* 1 */
  height: 0; /* 1 */
  overflow: visible; /* 2 */
}

/**
 * 1. Correct the inheritance and scaling of font size in all browsers.
 * 2. Correct the odd `em` font sizing in all browsers.
 */

pre {
  font-family: monospace, monospace; /* 1 */
  font-size: 1em; /* 2 */
}

/* Text-level semantics
   ========================================================================== */

/**
 * Remove the gray background on active links in IE 10.
 */

a {
  background-color: transparent;
}

/**
 * 1. Remove the bottom border in Chrome 57-
 * 2. Add the correct text decoration in Chrome, Edge, IE, Opera, and Safari.
 */

abbr[title] {
  border-bottom: none; /* 1 */
  text-decoration: underline; /* 2 */
  text-decoration: underline dotted; /* 2 */
}

/**
 * Add the correct font weight in Chrome, Edge, and Safari.
 */

b,
strong {
  font-weight: bolder;
}

/**
 * 1. Correct the inheritance and scaling of font size in all browsers.
 * 2. Correct the odd `em` font sizing in all browsers.
 */

code,
kbd,
samp {
  font-family: monospace, monospace; /* 1 */
  font-size: 1em; /* 2 */
}

/**
 * Add the correct font size in all browsers.
 */

small {
  font-size: 80%;
}

/**
 * Prevent `sub` and `sup` elements from affecting the line height in
 * all browsers.
 */

sub,
sup {
  font-size: 75%;
  line-height: 0;
  position: relative;
  vertical-align: baseline;
}

sub {
  bottom: -0.25em;
}

sup {
  top: -0.5em;
}

/* Embedded content
   ========================================================================== */

/**
 * Remove the border on images inside links in IE 10.
 */

img {
  border-style: none;
}

/* Forms
   ========================================================================== */

/**
 * 1. Change the font styles in all browsers.
 * 2. Remove the margin in Firefox and Safari.
 */

button,
input,
optgroup,
select,
textarea {
  font-family: inherit; /* 1 */
  font-size: 100%; /* 1 */
  line-height: 1.15; /* 1 */
  margin: 0; /* 2 */
}

/**
 * Show the overflow in IE.
 * 1. Show the overflow in Edge.
 */

button,
input { /* 1 */
  overflow: visible;
}

/**
 * Remove the inheritance of text transform in Edge, Firefox, and IE.
 * 1. Remove the inheritance of text transform in Firefox.
 */

button,
select { /* 1 */
  text-transform: none;
}

/**
 * Correct the inability to style clickable types in iOS and Safari.
 */

button,
[type=\"button\"],
[type=\"reset\"],
[type=\"submit\"] {
  -webkit-appearance: button;
}

/**
 * Remove the inner border and padding in Firefox.
 */

button::-moz-focus-inner,
[type=\"button\"]::-moz-focus-inner,
[type=\"reset\"]::-moz-focus-inner,
[type=\"submit\"]::-moz-focus-inner {
  border-style: none;
  padding: 0;
}

/**
 * Restore the focus styles unset by the previous rule.
 */

button:-moz-focusring,
[type=\"button\"]:-moz-focusring,
[type=\"reset\"]:-moz-focusring,
[type=\"submit\"]:-moz-focusring {
  outline: 1px dotted ButtonText;
}

/**
 * Correct the padding in Firefox.
 */

fieldset {
  padding: 0.35em 0.75em 0.625em;
}

/**
 * 1. Correct the text wrapping in Edge and IE.
 * 2. Correct the color inheritance from `fieldset` elements in IE.
 * 3. Remove the padding so developers are not caught out when they zero out
 *    `fieldset` elements in all browsers.
 */

legend {
  box-sizing: border-box; /* 1 */
  color: inherit; /* 2 */
  display: table; /* 1 */
  max-width: 100%; /* 1 */
  padding: 0; /* 3 */
  white-space: normal; /* 1 */
}

/**
 * Add the correct vertical alignment in Chrome, Firefox, and Opera.
 */

progress {
  vertical-align: baseline;
}

/**
 * Remove the default vertical scrollbar in IE 10+.
 */

textarea {
  overflow: auto;
}

/**
 * 1. Add the correct box sizing in IE 10.
 * 2. Remove the padding in IE 10.
 */

[type=\"checkbox\"],
[type=\"radio\"] {
  box-sizing: border-box; /* 1 */
  padding: 0; /* 2 */
}

/**
 * Correct the cursor style of increment and decrement buttons in Chrome.
 */

[type=\"number\"]::-webkit-inner-spin-button,
[type=\"number\"]::-webkit-outer-spin-button {
  height: auto;
}

/**
 * 1. Correct the odd appearance in Chrome and Safari.
 * 2. Correct the outline style in Safari.
 */

[type=\"search\"] {
  -webkit-appearance: textfield; /* 1 */
  outline-offset: -2px; /* 2 */
}

/**
 * Remove the inner padding in Chrome and Safari on macOS.
 */

[type=\"search\"]::-webkit-search-decoration {
  -webkit-appearance: none;
}

/**
 * 1. Correct the inability to style clickable types in iOS and Safari.
 * 2. Change font properties to `inherit` in Safari.
 */

::-webkit-file-upload-button {
  -webkit-appearance: button; /* 1 */
  font: inherit; /* 2 */
}

/* Interactive
   ========================================================================== */

/*
 * Add the correct display in Edge, IE 10+, and Firefox.
 */

details {
  display: block;
}

/*
 * Add the correct display in all browsers.
 */

summary {
  display: list-item;
}

/* Misc
   ========================================================================== */

/**
 * Add the correct display in IE 10+.
 */

template {
  display: none;
}

/**
 * Add the correct display in IE 10.
 */

[hidden] {
  display: none;
}

/*** 

====================================================================
\tReset
====================================================================

 ***/

*{
\tmargin:0px;
\tpadding:0px;
\tborder:none;
\toutline:none;
\tfont-size: 100%;
}

/*** 

====================================================================
  Global Settings
====================================================================

 ***/

.container {
  max-width: 1300px;
}

body {  
  font-size: 18px;
  color: #ff0000;
  line-height: 187%;
  font-weight: 400;
  background: #ff0000;
  -webkit-font-smoothing: antialiased;
  -moz-font-smoothing: antialiased;
  font-family: 'Raleway', sans-serif;
}

a{
  text-decoration: none;
  cursor: pointer;
  color: #111;
}

a:hover,
a:focus,
a:visited{
  text-decoration: none;
  outline: none;
}

h1,h2,h3,h4,h5,h6 {
  position: relative;
  font-weight: 400;
  margin: 0px;
  background: none;
  line-height: 104%;
  letter-spacing: 0.03em;
  font-family: 'Oswald', sans-serif;
}

textarea{
  overflow: hidden;
}

button{
  outline: none;
  cursor: pointer;
}

p{
  font-size: 18px;
  line-height: 187%;
  font-weight: 400;
  color: #555;
}

.text{
  font-size: 13px;
  line-height: 168.4%;
  font-weight: 700;
  letter-spacing: 0.25em;
  text-transform: uppercase;
  color: #AFAFAF;
  margin-left: 24px;
  margin-bottom: 10px;
}

.text::before{
  content: '';
  margin-top: 10px;
  margin-left: -24px;
  position: absolute;
  width: 14px;
  height: 2px;
  background: #C5A992;
}

::-webkit-input-placeholder{color: inherit;}
::-moz-input-placeholder{color: inherit;}
::-ms-input-placeholder{color: inherit;}

section{
  padding: 164px 0px;
}

ul,li{
  list-style:none;
  padding:0px;
  margin:0px; 
}

.centered{
  text-align:center !important;
}

/*Btn*/

a.btn {
  color: #fff;
  display: inline-block;
  font-family: 'Oswald', sans-serif;
  font-size: 18px;
  box-sizing: border-box;
  padding: 20px 40px;
  font-weight: 400;
  line-height: auto;
  overflow: hidden;
  letter-spacing: 0.08em;
  text-transform: uppercase;
  margin-top: 75px;
  border-radius: 0;
  transition-duration: 0.3s;
}

a.btn .iconify{
  margin-left: 8px;
}

/* Btn black */

a.btn-black{
  background: #111;
  border: none;
}

a.btn-black:hover{
  color: #fff;
  background-color: #444;
  border: none;
}

/* Btn outline */

a.btn-outline{
  border: 1px solid rgba(255, 255, 255, 0.7);
  box-sizing: border-box;
}

a.btn-outline:hover{
  background-color: #fff;
  border: 1px solid #FFFFFF;
}

/* Btn blank */

a.btn-blank{
  color: #111;
  padding: 0;
  margin: 0;
  border: none;
}

a.btn-blank:hover{  
  color: #444;
  border: none;
}

img{
  display:inline-block;
  max-width:100%;
  height:auto;  
}

/*** 

====================================================================
    Preloader
====================================================================

***/

#preloader {
  background-color: #010101;
  position: fixed;
  top: 0;
  left: 0;
  z-index: 999999;
  width: 100%;
  height: 100%;
  transition: opacity 0.6s ease, visibility 0.6s ease;
}
#preloader.hide-preloader {
  opacity: 0;
  visibility: hidden;
}
#loader {
  display: block;
  position: relative;
  left: 50%;
  top: 50%;
  width: 200px;
  height: 200px;
  margin: -100px 0 0 -100px;
  border-radius: 50%;
  border: 5px solid transparent;
  border-top-color: #f3f3f3;
  -webkit-animation: spin 2s linear infinite;
  animation: spin 2s linear infinite;
}
#loader:before {
  content: \"\";
  position: absolute;
  top: 5px;
  left: 5px;
  right: 5px;
  bottom: 5px;
  border-radius: 50%;
  border: 5px solid transparent;
  border-top-color: #f3f3f3;
  -webkit-animation: spin 3s linear infinite;
  animation: spin 3s linear infinite;
}
#loader:after {
  content: \"\";
  position: absolute;
  top: 15px;
  left: 15px;
  right: 15px;
  bottom: 15px;
  border-radius: 50%;
  border: 5px solid transparent;
  border-top-color: #f3f3f3;
  -webkit-animation: spin 1.5s linear infinite;
  animation: spin 1.5s linear infinite;
}
@-webkit-keyframes spin {
  0% {
      -webkit-transform: rotate(0deg);
      -ms-transform: rotate(0deg);
      transform: rotate(0deg);
  }
  100% {
      -webkit-transform: rotate(360deg);
      -ms-transform: rotate(360deg);
      transform: rotate(360deg);
  }
}
@keyframes spin {
  0% {
      -webkit-transform: rotate(0deg);
      -ms-transform: rotate(0deg);
      transform: rotate(0deg);
  }
  100% {
      -webkit-transform: rotate(360deg);
      -ms-transform: rotate(360deg);
      transform: rotate(360deg);
  }
}

/*** 

====================================================================
    Section Title
====================================================================

***/

.sec-title h1{
  display: block;
  font-size: 85px;
  text-transform: uppercase;
  color: #111; 
  margin-bottom: 75px; 
}

@media screen and (max-width:800px){
  .sec-title h1{
    font-size: 76px;
  }
}

/*** 

====================================================================
  Site Header Style
====================================================================

 ***/

.header-wrap{
  background-color: #fff;
  position: sticky;
  top: 0;
  left: 0;
  width: 100%;
  height: 148px;
  text-align: center;
  z-index: 14;
  box-shadow: 0px 2px 24px rgb(0 0 0 / 3%);
   font-family: 'Raleway', sans-serif;
}

.header-wrap .header-logo {
  display: inline-block;
  position: absolute;
  top: 18%;
  left: 45px;
}

.header-wrap .header-logo img {
  width: 188px;
  height: 90px;
  margin: 0;
}

.header-wrap .header-nav-wrap ul {
  text-align: center;
  display: inline-block;
  list-style: none;
  margin-left: 0;
  margin-top: 58px;
  font-family: 'Raleway', sans-serif;
}

.header-wrap .header-nav-wrap ul li{
  display: inline-block;
}

.header-wrap .header-nav-wrap .header-main-nav li{
  margin: 0 24px;
}

.header-wrap .header-nav-wrap .header-main-nav li a{
  font-family: 'Raleway', sans-serif;
  padding: 0;
  letter-spacing: 0.08em;
  text-transform: uppercase;
  color: #111;
}

.header-wrap .header-nav-wrap .header-main-nav li a::after {
  content: '';
  display: block;
  width: 0;
  height: 2px;
  margin-top: -4px;
  background: #111;
  transition: width .3s;
}

.header-wrap .header-nav-wrap .header-main-nav li a:hover::after {
  color: #111;
  width: 100%;
  transition: width .3s;
}

.header-wrap .header-nav-wrap .header-main-nav li a.active::after {
  content: '';
  display: block;
  width: 100%;
  height: 2px;
  margin-top: -4px;
  background: #111;
  transition: width .3s;
}

.header-wrap .header-nav-wrap .header-social{
  font-size: 22px;
  position: absolute;
  top: 0;
  right: 40px;
}

.header-wrap .header-nav-wrap .header-social a{
  font-size: 22px;
  margin-left: 20px; 
  transition-duration: 0.3s;
}

.header-wrap .header-nav-wrap .header-social a:hover{
  color: #444;
}

/*** 

====================================================================
  Menu trigger
====================================================================

 ***/

.header-menu-toggle {
  display: none;
  height: 42px;
  width: 42px;
  line-height: 42px;
  
   font-family: 'Raleway', sans-serif;
  font-size: 1.4rem;
  text-transform: uppercase;
  letter-spacing: .2rem;
  color: rgba(255, 255, 255, 0.5);
  transition: all .3s;
  position: absolute;
  right: 32px;
  top: 33px;
}

.header-menu-toggle:hover,
.header-menu-toggle:focus {
  color: #ffffff;
}

.header-menu-toggle span {
  display: block;
  width: 28px;
  height: 2px;
  margin-top: -1px;
  background-color: #111;
  transition: all .5s;
  font: 0/0 a;
  text-shadow: none;
  color: transparent;
  position: absolute;
  top: 50%;
  left: 9px;
  right: auto;
  bottom: auto;
}

.header-menu-toggle span::before,
.header-menu-toggle span::after {
  content: '';
  width: 100%;
  height: 100%;
  background-color: inherit;
  position: absolute;
  left: 0;
  transition: all .5s;
}

.header-menu-toggle span::before {
  top: -10px;
}

.header-menu-toggle span::after {
  bottom: -10px;
}

.header-menu-toggle.is-clicked span {
  background-color: white;
  transition: all .1s;
}

.header-menu-toggle.is-clicked span::before,
.header-menu-toggle.is-clicked span::after {
  background-color: #111;
}

.header-menu-toggle.is-clicked span::before {
  top: 0;
  -webkit-transform: rotate(135deg);
  transform: rotate(135deg);
}

.header-menu-toggle.is-clicked span::after {
  bottom: 0;
  -webkit-transform: rotate(225deg);
  transform: rotate(225deg);
}


/*** 

====================================================================
  Responsive Site Header Style
====================================================================

 ***/

@media screen and (max-width:1200px) {
  .header-wrap {
    text-align: right;
  }

  .header-wrap .header-nav-wrap {
    margin-right: 26px;
  }

  .header-wrap .header-nav-wrap .header-social {
    display: none;
  }

}

@media screen and (max-width:1000px) {
  .header-wrap {
    background-color: #fff;
    height: 114px;
    position: fixed;
    top: 0;
  }

  .header-wrap .header-logo {
    left: 20px;
  }

  .header-wrap .header-logo img {
    width: 145px;
    height: 69px;
  }

  .header-wrap .header-nav-wrap {
    display: none;
    text-align: left;
    height: auto;
    width: 100%;
    background-color: #fff;
    padding: 144px 44px 64px;
  }

  .header-wrap .header-nav-wrap .header-main-nav {
    display: block;
    padding-left: 0;
    height: auto;
    margin: 0 0 2rem 0;
    border-top: 1px solid rgb(0 0 0 / 4%);
  }

  .header-wrap .header-nav-wrap .header-main-nav li {
    text-align: left;
    display: block;
    margin: 0;
    padding: 7px 0;
    border-bottom: 1px solid rgb(0 0 0 / 4%);
  }

  .header-wrap .header-nav-wrap .header-main-nav li a {
    padding: 18px 0;
    line-height: 20px;
  }

  .header-wrap .header-nav-wrap .header-main-nav li a::after {
    content: '';
    width: 0;
  }

  .header-wrap .header-nav-wrap .header-main-nav li a:hover::after {
    width: 0;
  }

  .header-wrap .header-nav-wrap .header-main-nav li a.active::after {
    content: '';
    width: 0;
  }

  .header-wrap .header-nav-wrap .header-main-nav li a.active{
    color: #444;
  }

  .header-wrap .header-nav-wrap .header-social {
    text-align: left;
    display: block;
    position: static;
  }

  .header-wrap .header-nav-wrap .header-social li {
    font-size: 1.8rem;
    margin-right: 1.6rem;
  }

  .header-wrap .header-nav-wrap .header-social li a {
    line-height: 36px;
    margin-left: 0;
  }

  .header-wrap .header-menu-toggle {
    display: block;
  }

}

@media only screen and (min-width:1000px) {
  .header-wrap .header-nav-wrap {
    display: block !important;
  }
}

/*** 

====================================================================
  Billboard Style
====================================================================

 ***/

.billboard-wrap{
  margin-top: 0;
  padding: 0;
}

.billboard-wrap .billboard-bg-img{
  display: flex;
  align-items: center;
  height: 100vh;
  width: 100%;
}

.billboard-wrap .billboard-bg-img .billboard-content h1{
  font-family: \"Rozha One\";
  font-size: 110px;
  line-height: 95%;
  letter-spacing: -0.02em;
  text-transform: capitalize;  
  color: #fff;
  margin-bottom: 20px;
}

.billboard-wrap .billboard-bg-img .billboard-content p{
  font-weight: 300;
  font-size: 20px;
  line-height: 200%;
  letter-spacing: 0.02em;
  color: #fff;
}

.billboard-wrap .billboard-bg-img .billboard-content a.btn{
  margin-top: 35px;
}

/*** 

====================================================================
  Responsive Billboard Style
====================================================================

 ***/

@media screen and (max-width:800px){
  .billboard-wrap .billboard-bg-img .billboard-content h1{
    font-size: 90px;
  }

  .billboard-wrap .billboard-bg-img .billboard-content p{
    font-size: 18px;
  }
}

/*** 

====================================================================
  About Us Style
====================================================================

 ***/

.about-wrap .section-image{
  margin-left: -25px;
  padding-right: 29px;
}

.about-wrap .about-me-content .sec-title h1{
  margin-bottom: 38px;
}

.about-wrap .short-description{
  padding-left: 18%;
}

.about-wrap .row .about-me-content{
  margin-top: 66px;
}

.about-wrap .short-description a.btn{
  margin-top: 24px;
}

/*** 

====================================================================
  Responsive About Us Style
====================================================================

 ***/

@media screen and (max-width:800px){
  .about-wrap .section-image {
    display: none;
  }

  .about-wrap .row .about-me-content {
    margin-top: 0;
    flex: 100%;
    max-width: 100%;
  }
}

@media screen and (max-width:500px){
  .about-wrap .short-description {
    padding-left: 0;
  }
}

/*** 

====================================================================
  Gallery Style
====================================================================

 ***/

.gallery-wrap{
  padding: 160px 0;
}

.gallery-wrap .row div{
  padding: 0 10px;
}

.gallery-wrap .row div img{
  margin-bottom: 20px;
  width: -webkit-fill-available;
  cursor: crosshair;
  transition-duration: .3s;
}

.gallery-wrap .row div img:hover{
  -webkit-filter: brightness(60%);
  -webkit-transition: all 1s ease;
  -moz-transition: all 1s ease;
  -o-transition: all 1s ease;
  -ms-transition: all 1s ease;
  transition: all 1s ease;
}

.gallery-wrap .text-center a.btn.btn-black{
  margin-top: 55px;
}

.mfp-bottom-bar{
  display: none;
}

/*** 

====================================================================
  Services Style
====================================================================

 ***/

.services-wrap{
  text-align: center;
}

.services-wrap .chart{
  position: relative;
  display: inline-block;
  width: 290px;
  height: 290px;
}

.services-wrap .chart:before{
  content: \"\";
  border: 7px solid #EEEEEE;
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translateX(-50%)translateY(-50%);
  display: block;
  width: 251px;
  height: 251px;
  border-radius: 50%;
}

.services-wrap .chart .percent{
 font-family: 'Raleway', sans-serif;
  font-size: 78px;
  line-height: 294px;
  letter-spacing: -0.02em;
  color: #111;
}

.services-wrap .chart .percent:after{
  position: relative;
  content: '%';
  font-weight: lighter;
  padding-left: 3px;
}

.services-wrap .chart p{
  margin-top: 18px;
 font-family: 'Raleway', sans-serif;
  font-weight: 300;
  letter-spacing: 0.08em;
  text-transform: uppercase;
  color: #111;  
}

.services-wrap .chart canvas{
  position: absolute;
  top: 0;
  left: 0;
}

/*** 

====================================================================
  Testimonials Style
====================================================================

 ***/

.testimonials-wrap{
  padding-top: 0;
}

.testimonials-wrap .testimonial-slider .item-paragraph{
  font-size: 36px;
  line-height: 160%;
  letter-spacing: 0.02em;
  color: #111;
}

.testimonials-wrap .testimonial-slider .item-content{
  position: relative;
  padding-top: 4%;
  padding-left: 20%;
}

.testimonials-wrap .testimonial-slider .item-content .quotation-img{
  position: absolute;
  z-index: -10;
  left: 70px;
  top: 0px;
}

.testimonials-wrap .testimonial-slider .item-content .author-name{
  font-family: Oswald;
  font-weight: 600;
  font-size: 24px;
  text-transform: capitalize;
  color: #111; 
}

.item-content .testimonial-author{
  margin-top: 50px;
}

.item-content .testimonial-author .author-name span{
  font-weight: 300;
}

.item-content .testimonial-author .author-name span::before{
  content: '|';
  margin: 0 20px;
}

.testimonials-wrap .testimonial-slider .author-post{  
  font-size: 14px;
  line-height: 212.4%;
  letter-spacing: 0.02em;
  text-transform: capitalize;
  color: #757575;
}

.testimonial-slider-btn{
  text-align: right;
  margin-right: 8%;
}

.slide-button-next, .slide-button-prev{
  font-size: 50px;
  display: inline;
  margin-right: 5px;
}

.slide-button-next, .slide-button-prev, a{
  transition-duration: 0.3s;
}

.slide-button-next, .slide-button-prev, a:hover{
  color: #444;
}

.slide-button-next.swiper-button-disabled, .slide-button-prev.swiper-button-disabled {
  opacity: .25;
  cursor: auto;
  pointer-events: none;
}

/*** 

====================================================================
  Responsive Testimonials Style
====================================================================

 ***/

@media screen and (max-width:800px){
  .testimonials-wrap{
    width: 100%;
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
  }

  .testimonials-wrap .testimonial-slider .item-paragraph{
    font-size: 32px;
  }

  .testimonials-wrap .testimonial-slider .item-content{
    padding: 0;
  }

  .testimonials-wrap .testimonial-slider .item-content .quotation-img{
    left: 0px;
  }
}

/*** 

====================================================================
  Interview Style
====================================================================

 ***/

.interview-wrap{
  padding: 0;
}

.interview-wrap .interview-bg-img{
  height: 812px;
  width: 100%;
  padding: 0;  
  display: flex;
  align-items: center;
}

.interview-wrap .interview-bg-img .interview-content h2{
  font-family: Rozha One;
  font-size: 60px;
  line-height: 110%;
  letter-spacing: -0.02em;
  text-transform: capitalize;
  color: #fff;
}

.interview-wrap .interview-bg-img .interview-content .video-btn{
  display: flex;
  align-items: center;
  margin-top: 33px;
  margin-left: 9px;
}

.interview-wrap .interview-bg-img .interview-content .video-btn a.play-btn svg.iconify{
  margin-left: 4%;
}

.interview-wrap .interview-bg-img .interview-content .video-btn a.play-btn{
  position: relative;  
  font-size: 35px;
  color: #000;  
  background-color: #fff;
  width: 75px;
  height: 75px;
  display: flex;
  align-items: center;
  justify-content: center;
  border-radius: 50%;
}

.interview-wrap .interview-bg-img .interview-content .video-btn a.play-btn:before{
  content: \"\";
  opacity: 0.4;
  border: 1px solid #fff;
  position: absolute;
  z-index: 0;
  left: 50%;
  top: 50%;
  transform: translateX(-50%)translateY(-50%);
  display: block;
  width: 91px;
  height: 91px;
  border-radius: 50%;
}

.interview-wrap .interview-bg-img .interview-content .video-btn .btn{
  margin: 0;
  margin-left: 28px;
  padding: 0;
  border: none;
  letter-spacing: 0.1em;
}

.interview-wrap .interview-bg-img .interview-content .video-btn .btn:hover{
  color: #fff;
}

/*** 

====================================================================
  Responsive Interview Style
====================================================================

 ***/

@media screen and (max-width:800px){
  .interview-wrap .interview-bg-img .interview-content h2{    
    font-size: 55px;
  }  
}

/*** 

====================================================================
  Articles Style
====================================================================

 ***/

.articles-wrap .container{
  max-width: 1583px;
}

.articles-wrap .article-post-item{
  padding-right: 54px;
  padding-left: 54px;
}

.articles-wrap .article-post-item .article-img{
  overflow: hidden;
}

.articles-wrap .article-post-item .article-img a img{
  transition-duration: .3s;
}

.articles-wrap .article-post-item .article-img a img:hover{
  -webkit-filter: brightness(60%);
  -webkit-transition: all 1s ease;
  -moz-transition: all 1s ease;
  -o-transition: all 1s ease;
  -ms-transition: all 1s ease;
  transition: all 1s ease;
  transform: scale(1.1);
}

.articles-wrap .article-post-item h4{
  margin-left: 10px;
  margin-bottom: 16px;
  font-weight: 300;
  font-size: 18px;
  line-height: 187%;
  letter-spacing: 0.08em;
  text-transform: uppercase;
  color: #111;
}

.articles-wrap .article-post-item .lower-content h3{
  margin-top: 32px;
  margin-bottom: 7px;
  font-family: Raleway;
  font-style: normal;
  font-weight: 600;
  font-size: 19px;
  line-height: 187%;
  letter-spacing: 0.02em;
  color: #111;
}

.articles-wrap .article-post-item .lower-content span{
  font-family: Raleway;
  font-style: normal;
  font-weight: 600;
  font-size: 14px;
  letter-spacing: 0.02em;
  color: #ACACAC;
}

/*** 

====================================================================
  Responsive Interview Style
====================================================================

 ***/

@media screen and (max-width:1100px){
  .articles-wrap .article-post-item{
    padding: 0 15px;
  }
}

@media screen and (max-width:768px){
  .articles-wrap .article-post-item{
    margin-bottom: 60px;
    padding: 0 15px;
  }

  .articles-wrap .article-post-item h4{
    margin-left: 0;
  }
}

/*** 

====================================================================
  Contact Us Style
====================================================================

 ***/

.contact-wrap{
  padding: 150px 0;
  margin-bottom: 0;
}

.contact-wrap .contact-info h4{
  font-weight: 500;
  font-size: 20px;
  line-height: 187%;
  letter-spacing: 0.08em;
  text-transform: uppercase;
  color: #111;
  margin-bottom: 10px;
}

.contact-wrap .contact-info p{
  letter-spacing: 0.02em;
  color: #333333;
}

.contact-wrap .contact-info .contact-info-list li a{
  margin-bottom: 14px;
}

.contact-wrap .contact-info .contact-info-list a{ 
  font-weight: 500;
  line-height: 21px;
  letter-spacing: 0.02em;
}

.contact-wrap .contact-info .contact-info-list li svg.iconify{
  margin-top: 4px;
  margin-right: 10px;
}

.contact-wrap .contact-info .contact-info-list a:hover{
  color: #444;
}

.contact-wrap .contact-info .btn.btn-blank{
  font-family: Raleway;
  font-weight: 500;
  letter-spacing: 0.02em;
  text-transform: none;
  margin-top: 22px;
  border-bottom: 1px solid #111;
  padding-bottom: 2px;
}

.contact-wrap .contact-form{
  margin-top: -90px;
  margin-left: 40px;
}

.contact-wrap .contact-form .form-group{
  margin-bottom: 45px;
}

.contact-wrap .contact-form .form-group ::placeholder{
  font-style: italic;
  font-weight: normal;
  font-size: 18px;
  line-height: 21px;
  letter-spacing: 0.06em;
  color: #555;
}

.contact-wrap .contact-form .form-group input,textarea{  
  width: 100%;
  padding-bottom: 16px;
  border-bottom: 1px solid #111;
  background: transparent;
  font-size: 16px;
  line-height: 100%;
  color: #333;
}

.contact-wrap .contact-form .form-group textarea{
  height: 38px;
}

.contact-wrap .contact-form a.btn{
  margin-top: 25px;
}

/*** 

====================================================================
  Responsive Contact Us Style
====================================================================

 ***/

@media screen and (max-width:768px){
  .contact-wrap .contact-form{
    margin-top: 0;
    margin-left: 0;
  }

  .contact-wrap .container .row .contact-info,.contact-form{
    margin-bottom: 60px;
  }
}

/*** 

====================================================================
  Main Footer Style
====================================================================

 ***/

.main-footer .widgets-section{
  padding-bottom: 127px;
  padding-top: 156px;
}

.main-footer .widgets-section .footer-column .footer-widget.links-widget{
  padding-left: 20%;
}

.main-footer .widgets-section .footer-widget h4{
  font-weight: 500;
  font-size: 20px;
  line-height: 30px;
  letter-spacing: 0.08em;
  text-transform: uppercase;
  color: #000000;  
  margin-bottom: 24px;
}

.main-footer .widgets-section .footer-widget p, 
.main-footer .widgets-section .footer-widget a{
  letter-spacing: 0.02em;
  color: #000000;  
}

.main-footer .widgets-section .footer-widget a{
  margin-bottom: 24px;
}

.main-footer .widgets-section .footer-widget a:hover{
  font-weight: 400;
  color: #383535;
}

.main-footer .widgets-section .about-widget .contact-info-list a{
  font-weight: 600;
}

.main-footer .widgets-section .about-widget .contact-info-list a svg.iconify{
  margin-right: 10px;
}

.main-footer .widgets-section .about-widget .contact-info-list a:hover{
  font-weight: 600;
  color: #383535;
}

.main-footer .widgets-section .newsletter-widget .form-group{
  position: relative;
  margin-top: 25px;
}

.main-footer .widgets-section .newsletter-widget .form-group ::placeholder{
  font-style: italic;
  font-weight: normal;
  font-size: 16px;
  line-height: 19px;
  letter-spacing: 0.06em;
  text-transform: capitalize;
  color: #383535;
}

.main-footer .widgets-section .newsletter-widget .form-group input{
  position: absolute;
  width: 100%;
  padding-bottom: 12px;
  border-bottom: 1px solid #383535;
  background: transparent;
  font-size: 16px;
  line-height: 100%;
  color: #383535;
}

.main-footer .widgets-section .newsletter-widget .form-group a{
  position: absolute;
  right: 0;
  top: -8px;
  font-size: 26px;
  color: #383535;
  margin-bottom: 0;
}

.main-footer .footer-bottom{
  font-size: 16px;
  line-height: 19px;
  letter-spacing: 0.02em;
  color: #383535;
  padding: 37px 0;
  border-top: 1px solid #2B2B2B;
}

.main-footer .footer-bottom a{
  font-weight: 500;
  color: #383535;
}

.main-footer .footer-bottom a:hover{
  text-decoration: underline;
}

/*** 

====================================================================
  Responsive Main Footer Style
====================================================================

 ***/

@media screen and (max-width:768px){
  .main-footer .widgets-section{
    padding-bottom: 66px;
  }
  
  .main-footer .widgets-section .footer-column{
    margin-bottom: 60px;
  }

  .main-footer .widgets-section .footer-column .footer-widget.links-widget {
    padding-left: 0;
  }
}

/* overide */
.modal-dialog {
  max-width: 800px;
  margin: auto;
  height: 100vh;
  display: flex;
  align-items: center;
}


body {
  margin: 1;
  background-color: #ffffff;
}

/* Reset général propre */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

html, body {
  height: 100%;
  background-color: #ffffff; /* même fond que le site */
  overflow-x: hidden;
}

/* Structure principale */
body {
  display: flex;
  flex-direction: column;
  background-color: #ffffff;
}

/* Pour coller le footer en bas */
main {
  flex: 1;
}

/* Footer clean */
footer {
  background-color: #ffffff;
  color: #fff;
  padding: 1rem;
  text-align: center;
}


/* Bouton \"Prendre rendez-vous\" dans la navbar */
.btn-contact {
    background-color: rgb(184, 45, 45); /* rouge */
    color: white !important;
    padding: 10px 20px;
    border-radius: 4px;
    margin-left: 15px; /* Décale vers la droite */
    transition: background-color 0.3s ease, transform 0.3s ease;
    text-transform: uppercase;
    font-weight: 600;
}

.btn-contact {
    background-color: rgb(184, 45, 45);
    color: white !important;
    padding: 10px 20px;
    border-radius: 4px;
    margin-left: 15px;
    position: relative;
    text-transform: uppercase;
    font-weight: 600;
    transition: background-color 0.3s ease;
}

.btn-contact::after {
    content: '';
    position: absolute;
    left: 20%;
    bottom: -5px;
    width: 60%;
    height: 2px;
    background-color: transparent;
    transition: background-color 0.3s ease;
}

.btn-contact:hover::after {
    background-color: white;
}

.btn-contact:hover {
    background-color: rgb(224, 83, 83);
}


/* Supprimer la ligne noire collée */
.header-main-nav .nav-link {
    border-bottom: none !important;
    box-shadow: none !important;
}

/* Supprimer les effets visuels persistants */
.header-main-nav .nav-link.active {
    border-bottom: none !important;
    box-shadow: none !important;
    color: inherit;
}

/* Supprimer toute ligne noire persistante sous \"Prendre rendez-vous\" */
.btn-contact,
.btn-contact:focus,
.btn-contact:active,
.btn-contact.active,
.btn-contact.nav-link.active {
    border-bottom: none !important;
    box-shadow: none !important;
    outline: none !important;
}

.btn-contact::after {
    display: none !important; /* au cas où un effet l'aurait laissé actif */
}

/* Supprime aussi toute ligne des autres liens au cas où */
.header-main-nav .nav-link,
.header-main-nav .nav-link.active {
    border-bottom: none !important;
    box-shadow: none !important;
}

.nav-link.cta {
  background-color: #d32f2f; /* rouge foncé */
  color: white;
  padding: 0.8rem 1.2rem;
  border-radius: 4px;
  text-align: center;
  display: block;
  margin: 0 auto;
  max-width: 90%;
  font-weight: bold;
  text-transform: uppercase;
}

@media (min-width: 768px) {
  .nav-link.cta {
    margin-left: 1rem;
    margin-right: 0;
    max-width: none;
    display: inline-block;
  }
}

/* Style galerie tattoo */
.gallery-wrap .popup-gallery {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 20px;
    padding: 30px 10px;
}

.popup-gallery a.image-link {
    display: block;
    overflow: hidden;
    border-radius: 12px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    max-width: 100%;
}

.popup-gallery a.image-link:hover {
    transform: scale(1.03);
    box-shadow: 0 6px 16px rgba(0, 0, 0, 0.2);
}

.popup-gallery img {
    display: block;
    width: 100%;
    height: auto;
    object-fit: cover;
    border-radius: 12px;
}

/* Responsive 2 à 3 colonnes selon la taille */
@media (min-width: 768px) {
    .popup-gallery a.image-link {
        width: 280px;
    }
}

@media (max-width: 767px) {
    .popup-gallery a.image-link {
        width: 100%;
    }
}


</style>

 <!-- Site Header -->
    <header class=\"header-wrap\">

        <div class=\"header-logo\">
            <a class=\"site-logo\">
                <img src=\"images/.png\" alt=\"logo\">
            </a>
        </div>

        <nav class=\"header-nav-wrap\">
            <ul id=\"navbar\" class=\"header-main-nav\">
                <li><a href=\"{{ path('app_home') }}\" class=\"nav-link active\">Accueil</a></li>
               <li><a href=\"{{ path('app_galerie') }}\" class=\"nav-link\">Gallerie</a></li>
                <li><a href=\"{{ path('appointment_form') }}\" class=\"nav-link cta\">Prendre rendez-vous</a></li>




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
<section id=\"gallery\" class=\"gallery-wrap\" style=\"background: #F9F9F9;\">
    <div class=\"container\">
        <div class=\"sec-title\">
            <h1>Quelques exemples <br>De mon travail</h1>
        </div>
    </div>

    <div class=\"container-fluid\">
        <div class=\"row popup-gallery\">
            {% for imagesRow in images|batch(2) %}
                <div class=\"col-md-3\">
                    {% for img in imagesRow %}
                        <a href=\"{{ asset('/uploads/images' ~ img.filename) }}\" title=\"{{ img.altText }}\" class=\"image-link\">
                            <img src=\"{{ asset('/uploads/images/' ~ img.filename) }}\" alt=\"{{ img.altText }}\" class=\"img-fluid mb-2\">
                        </a>
                    {% endfor %}
                </div>
            {% endfor %}
        </div>
    </div>
</section>

<!-- Section Contact -->

<footer style=\"background-color:#222; color:#eee; padding:20px 10px; text-align:center; font-family:Arial, sans-serif; font-size:14px;\">

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
  <div class=\"footer-links\" style=\"margin-bottom:10px;\">
    <a href=\"/mentions-legales\" class=\"footer-link\">Mentions légales</a> |
    <a href=\"/conditions-generales\" class=\"footer-link\">Conditions générales</a> |
    <a href=\"/politique-confidentialite\" class=\"footer-link\">Politique de confidentialité</a> |
  </div>
  <div style=\"color:#666;\">
    &copy; 2025 Profane Tattoo. Tous droits réservés.
  </div>

  
</footer>






<script src=\"js/jquery-1.11.0.min.js\"></script>
<script src=\"https://code.iconify.design/1/1.0.6/iconify.min.js\"></script>
<script src=\"js/bootstrap.min.js\"></script>
<script src=\"js/plugins.js\"></script>
<script src=\"js/script.js\"></script>
{% endblock %}
", "ShowOff.html.twig", "/home/jeremy/profane/Profane/templates/ShowOff.html.twig");
    }
}
