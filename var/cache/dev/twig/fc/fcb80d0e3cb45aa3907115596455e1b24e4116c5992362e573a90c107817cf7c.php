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

/* base.html.twig */
class __TwigTemplate_b2c5de41934fe725d3b10db5f4bc9697564bdd2cb7815d153be74f51e42f1848 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<title>
\t\t\t";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        // line 8
        echo "\t\t</title>
\t\t";
        // line 10
        echo "\t\t<link
\t\thref=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor\" crossorigin=\"anonymous\">
\t\t";
        // line 13
        echo "\t\t<link href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css\">
\t\t<link
\t\trel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css\">

\t\t";
        // line 18
        echo "\t\t";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 21
        echo "
\t\t";
        // line 22
        $this->displayBlock('javascripts', $context, $blocks);
        // line 25
        echo "\t</head>
\t<body>
\t\t<header>

\t\t\t";
        // line 29
        if (array_key_exists("menu", $context)) {
            // line 30
            echo "
\t\t\t";
        } else {
            // line 32
            echo "\t\t\t\t\t";
            $context["menu"] = null;
            // line 33
            echo "\t\t\t";
        }
        // line 34
        echo "
\t\t\t<!-- header + nav -->
\t\t\t<nav class=\"navbar navbar-expand-lg bg-light\">
\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t<a class=\"navbar-brand\" href=\"/\">Progica</a>
\t\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t\t</button>
\t\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
\t\t\t\t\t\t<ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link ";
        // line 45
        if (((0 === twig_compare((isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 45, $this->source); })()), " rechercheGite")) || (0 === twig_compare((isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 45, $this->source); })()), " detailgite")))) {
            echo " active ";
        }
        echo "\" aria-current=\"page\" href=\"/recherche-gite\">Rechercher un gite</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link ";
        // line 48
        if ((0 === twig_compare((isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 48, $this->source); })()), " contact"))) {
            echo " active ";
        }
        echo "\" aria-current=\"page\" href=\"/contact\">Contact</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link ";
        // line 51
        if ((0 === twig_compare((isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 51, $this->source); })()), " index_admin"))) {
            echo " active ";
        }
        echo "\" aria-current=\"page\" href=\"/admin\">admin</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t<ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" aria-current=\"page\" href=\"/login\">login</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</nav>

\t\t\t\t<!-- header + nav -->
\t\t\t</header>
\t\t</body>
\t</body>
\t<body>
\t\t<div class=\"container\"> ";
        // line 70
        $this->displayBlock('body', $context, $blocks);
        // line 71
        echo "\t\t\t</div>
\t\t</body>


\t\t<!-- Footer -->
\t\t<footer
\t\t\tclass=\"text-center text-lg-start bg-light text-muted\">
\t\t\t<!-- Section: Social media -->
\t\t\t<section
\t\t\t\tclass=\"d-flex justify-content-center justify-content-lg-between p-4 border-bottom\">
\t\t\t\t<!-- Left -->
\t\t\t\t<div class=\"me-5 d-none d-lg-block\">
\t\t\t\t\t<span>Get connected with us on social networks:</span>
\t\t\t\t</div>
\t\t\t\t<!-- Left -->

\t\t\t\t<!-- Right -->
\t\t\t\t<div>
\t\t\t\t\t<a href=\"\" class=\"me-4 text-reset\">
\t\t\t\t\t\t<i class=\"fab fa-facebook-f\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"\" class=\"me-4 text-reset\">
\t\t\t\t\t\t<i class=\"fab fa-twitter\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"\" class=\"me-4 text-reset\">
\t\t\t\t\t\t<i class=\"fab fa-google\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"\" class=\"me-4 text-reset\">
\t\t\t\t\t\t<i class=\"fab fa-instagram\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"\" class=\"me-4 text-reset\">
\t\t\t\t\t\t<i class=\"fab fa-linkedin\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"\" class=\"me-4 text-reset\">
\t\t\t\t\t\t<i class=\"fab fa-github\"></i>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<!-- Right -->
\t\t\t</section>
\t\t\t<!-- Section: Social media -->

\t\t\t<!-- Section: Links  -->
\t\t\t<section class=\"\">
\t\t\t\t<div
\t\t\t\t\tclass=\"container text-center text-md-start mt-5\">
\t\t\t\t\t<!-- Grid row -->
\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"row mt-3\">
\t\t\t\t\t\t<!-- Grid column -->
\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"col-md-3 col-lg-4 col-xl-3 mx-auto mb-4\">
\t\t\t\t\t\t\t<!-- Content -->
\t\t\t\t\t\t\t<h6 class=\"text-uppercase fw-bold mb-4\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-gem me-3\"></i>Company name
\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tHere you can use rows and columns to organize your footer content. Lorem ipsum
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                        dolor sit amet, consectetur adipisicing elit.
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- Grid column -->

\t\t\t\t\t\t<!-- Grid column -->
\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"col-md-2 col-lg-2 col-xl-2 mx-auto mb-4\">
\t\t\t\t\t\t\t<!-- Links -->
\t\t\t\t\t\t\t<h6 class=\"text-uppercase fw-bold mb-4\">
\t\t\t\t\t\t\t\tProducts
\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"text-reset\">Angular</a>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"text-reset\">React</a>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"text-reset\">Vue</a>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"text-reset\">Laravel</a>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- Grid column -->

\t\t\t\t\t\t<!-- Grid column -->
\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"col-md-3 col-lg-2 col-xl-2 mx-auto mb-4\">
\t\t\t\t\t\t\t<!-- Links -->
\t\t\t\t\t\t\t<h6 class=\"text-uppercase fw-bold mb-4\">
\t\t\t\t\t\t\t\tUseful links
\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"text-reset\">Pricing</a>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"text-reset\">Settings</a>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"text-reset\">Orders</a>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"text-reset\">Help</a>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- Grid column -->

\t\t\t\t\t\t<!-- Grid column -->
\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4\">
\t\t\t\t\t\t\t<!-- Links -->
\t\t\t\t\t\t\t<h6 class=\"text-uppercase fw-bold mb-4\">
\t\t\t\t\t\t\t\tContact
\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<i class=\"fas fa-home me-3\"></i>
\t\t\t\t\t\t\t\tNew York, NY 10012, US</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<i class=\"fas fa-envelope me-3\"></i>
\t\t\t\t\t\t\t\tinfo@example.com
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<i class=\"fas fa-phone me-3\"></i>
\t\t\t\t\t\t\t\t+ 01 234 567 88</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<i class=\"fas fa-print me-3\"></i>
\t\t\t\t\t\t\t\t+ 01 234 567 89</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- Grid column -->
\t\t\t\t\t</div>
\t\t\t\t\t<!-- Grid row -->
\t\t\t\t</div>
\t\t\t</section>
\t\t\t<!-- Section: Links  -->

\t\t\t<!-- Copyright -->
\t\t\t<div class=\"text-center p-4\" style=\"background-color: rgba(0, 0, 0, 0.05);\">
\t\t\t\t© 2021 Copyright:
\t\t\t\t<a class=\"text-reset fw-bold\" href=\"https://mdbootstrap.com/\">MDBootstrap.com</a>
\t\t\t</div>
\t\t\t<!-- Copyright -->
\t\t</footer>
\t\t<!-- Footer -->
\t</html>
</body></html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!
\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 18
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 19
        echo "\t\t\t";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        echo "
\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 22
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 23
        echo "\t\t\t";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        echo "
\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 70
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  370 => 70,  357 => 23,  347 => 22,  334 => 19,  324 => 18,  304 => 6,  150 => 71,  148 => 70,  124 => 51,  116 => 48,  108 => 45,  95 => 34,  92 => 33,  89 => 32,  85 => 30,  83 => 29,  77 => 25,  75 => 22,  72 => 21,  69 => 18,  63 => 13,  59 => 10,  56 => 8,  54 => 6,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<title>
\t\t\t{% block title %}Welcome!
\t\t\t{% endblock %}
\t\t</title>
\t\t{# boostrap #}
\t\t<link
\t\thref=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor\" crossorigin=\"anonymous\">
\t\t{# boostrap icon #}
\t\t<link href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css\">
\t\t<link
\t\trel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css\">

\t\t{# Run `composer require symfony/webpack-encore-bundle` to start using Symfony UX #}
\t\t{% block stylesheets %}
\t\t\t{{ encore_entry_link_tags('app') }}
\t\t{% endblock %}

\t\t{% block javascripts %}
\t\t\t{{ encore_entry_script_tags('app') }}
\t\t{% endblock %}
\t</head>
\t<body>
\t\t<header>

\t\t\t{% if menu is defined %}

\t\t\t{% else %}
\t\t\t\t\t{% set menu = null %}
\t\t\t{% endif %}

\t\t\t<!-- header + nav -->
\t\t\t<nav class=\"navbar navbar-expand-lg bg-light\">
\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t<a class=\"navbar-brand\" href=\"/\">Progica</a>
\t\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t\t</button>
\t\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
\t\t\t\t\t\t<ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link {% if menu == \" rechercheGite\" or menu == \" detailgite\" %} active {% endif %}\" aria-current=\"page\" href=\"/recherche-gite\">Rechercher un gite</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link {% if menu == \" contact\" %} active {% endif %}\" aria-current=\"page\" href=\"/contact\">Contact</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link {% if menu == \" index_admin\" %} active {% endif %}\" aria-current=\"page\" href=\"/admin\">admin</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t<ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" aria-current=\"page\" href=\"/login\">login</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</nav>

\t\t\t\t<!-- header + nav -->
\t\t\t</header>
\t\t</body>
\t</body>
\t<body>
\t\t<div class=\"container\"> {% block body %}{% endblock %}
\t\t\t</div>
\t\t</body>


\t\t<!-- Footer -->
\t\t<footer
\t\t\tclass=\"text-center text-lg-start bg-light text-muted\">
\t\t\t<!-- Section: Social media -->
\t\t\t<section
\t\t\t\tclass=\"d-flex justify-content-center justify-content-lg-between p-4 border-bottom\">
\t\t\t\t<!-- Left -->
\t\t\t\t<div class=\"me-5 d-none d-lg-block\">
\t\t\t\t\t<span>Get connected with us on social networks:</span>
\t\t\t\t</div>
\t\t\t\t<!-- Left -->

\t\t\t\t<!-- Right -->
\t\t\t\t<div>
\t\t\t\t\t<a href=\"\" class=\"me-4 text-reset\">
\t\t\t\t\t\t<i class=\"fab fa-facebook-f\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"\" class=\"me-4 text-reset\">
\t\t\t\t\t\t<i class=\"fab fa-twitter\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"\" class=\"me-4 text-reset\">
\t\t\t\t\t\t<i class=\"fab fa-google\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"\" class=\"me-4 text-reset\">
\t\t\t\t\t\t<i class=\"fab fa-instagram\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"\" class=\"me-4 text-reset\">
\t\t\t\t\t\t<i class=\"fab fa-linkedin\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"\" class=\"me-4 text-reset\">
\t\t\t\t\t\t<i class=\"fab fa-github\"></i>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<!-- Right -->
\t\t\t</section>
\t\t\t<!-- Section: Social media -->

\t\t\t<!-- Section: Links  -->
\t\t\t<section class=\"\">
\t\t\t\t<div
\t\t\t\t\tclass=\"container text-center text-md-start mt-5\">
\t\t\t\t\t<!-- Grid row -->
\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"row mt-3\">
\t\t\t\t\t\t<!-- Grid column -->
\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"col-md-3 col-lg-4 col-xl-3 mx-auto mb-4\">
\t\t\t\t\t\t\t<!-- Content -->
\t\t\t\t\t\t\t<h6 class=\"text-uppercase fw-bold mb-4\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-gem me-3\"></i>Company name
\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tHere you can use rows and columns to organize your footer content. Lorem ipsum
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                        dolor sit amet, consectetur adipisicing elit.
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- Grid column -->

\t\t\t\t\t\t<!-- Grid column -->
\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"col-md-2 col-lg-2 col-xl-2 mx-auto mb-4\">
\t\t\t\t\t\t\t<!-- Links -->
\t\t\t\t\t\t\t<h6 class=\"text-uppercase fw-bold mb-4\">
\t\t\t\t\t\t\t\tProducts
\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"text-reset\">Angular</a>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"text-reset\">React</a>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"text-reset\">Vue</a>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"text-reset\">Laravel</a>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- Grid column -->

\t\t\t\t\t\t<!-- Grid column -->
\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"col-md-3 col-lg-2 col-xl-2 mx-auto mb-4\">
\t\t\t\t\t\t\t<!-- Links -->
\t\t\t\t\t\t\t<h6 class=\"text-uppercase fw-bold mb-4\">
\t\t\t\t\t\t\t\tUseful links
\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"text-reset\">Pricing</a>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"text-reset\">Settings</a>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"text-reset\">Orders</a>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"text-reset\">Help</a>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- Grid column -->

\t\t\t\t\t\t<!-- Grid column -->
\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4\">
\t\t\t\t\t\t\t<!-- Links -->
\t\t\t\t\t\t\t<h6 class=\"text-uppercase fw-bold mb-4\">
\t\t\t\t\t\t\t\tContact
\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<i class=\"fas fa-home me-3\"></i>
\t\t\t\t\t\t\t\tNew York, NY 10012, US</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<i class=\"fas fa-envelope me-3\"></i>
\t\t\t\t\t\t\t\tinfo@example.com
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<i class=\"fas fa-phone me-3\"></i>
\t\t\t\t\t\t\t\t+ 01 234 567 88</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<i class=\"fas fa-print me-3\"></i>
\t\t\t\t\t\t\t\t+ 01 234 567 89</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- Grid column -->
\t\t\t\t\t</div>
\t\t\t\t\t<!-- Grid row -->
\t\t\t\t</div>
\t\t\t</section>
\t\t\t<!-- Section: Links  -->

\t\t\t<!-- Copyright -->
\t\t\t<div class=\"text-center p-4\" style=\"background-color: rgba(0, 0, 0, 0.05);\">
\t\t\t\t© 2021 Copyright:
\t\t\t\t<a class=\"text-reset fw-bold\" href=\"https://mdbootstrap.com/\">MDBootstrap.com</a>
\t\t\t</div>
\t\t\t<!-- Copyright -->
\t\t</footer>
\t\t<!-- Footer -->
\t</html>
</body></html>
", "base.html.twig", "D:\\quentin\\www\\formation web afpa\\symfony\\progica\\templates\\base.html.twig");
    }
}
