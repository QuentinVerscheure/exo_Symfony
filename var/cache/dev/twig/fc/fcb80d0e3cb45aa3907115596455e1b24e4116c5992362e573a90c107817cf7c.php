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
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 7
        echo "        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor\" crossorigin=\"anonymous\">
        ";
        // line 9
        echo "        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css\">;
        <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css\">

        ";
        // line 13
        echo "        ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "
        ";
        // line 17
        $this->displayBlock('javascripts', $context, $blocks);
        // line 20
        echo "    </head>
    <body>
        <header>
                    <!-- header + nav -->
                <nav class=\"navbar navbar-expand-lg bg-light\">
            <div class=\"container-fluid\">
                <a class=\"navbar-brand\" href=\"/\">Progica</a>
                <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link ";
        // line 33
        if (((0 === twig_compare((isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 33, $this->source); })()), "rechercheGite")) || (0 === twig_compare((isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 33, $this->source); })()), "detailGite")))) {
            echo " active ";
        }
        echo "\" aria-current=\"page\" href=\"/recherche-gite\">Rechercher un gite</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link ";
        // line 36
        if ((0 === twig_compare((isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 36, $this->source); })()), "contact"))) {
            echo " active ";
        }
        echo "\" aria-current=\"page\" href=\"/contact\">Contact</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link ";
        // line 39
        if ((0 === twig_compare((isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 39, $this->source); })()), "index_admin"))) {
            echo " active ";
        }
        echo "\" aria-current=\"page\" href=\"/admin\">admin</a>
                    </li>
                </ul>
                <form class=\"d-flex\" role=\"search\">
                    <input class=\"form-control me-2\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
                    <button class=\"btn btn-outline-success\" type=\"submit\">Search</button>
                </form>
                </div>
            </div>
            </nav>
        <!-- header + nav -->
        </header>



        <body>
            <div class=\"container\">
                ";
        // line 56
        $this->displayBlock('body', $context, $blocks);
        // line 57
        echo "            </div>
        </body>



        <!-- Footer -->
        <footer class=\"text-center text-lg-start bg-light text-muted\">
            <!-- Section: Social media -->
            <section
                class=\"d-flex justify-content-center justify-content-lg-between p-4 border-bottom\"
            >
                <!-- Left -->
                <div class=\"me-5 d-none d-lg-block\">
                <span>Get connected with us on social networks:</span>
                </div>
                <!-- Left -->

                <!-- Right -->
                <div>
                <a href=\"\" class=\"me-4 text-reset\">
                    <i class=\"fab fa-facebook-f\"></i>
                </a>
                <a href=\"\" class=\"me-4 text-reset\">
                    <i class=\"fab fa-twitter\"></i>
                </a>
                <a href=\"\" class=\"me-4 text-reset\">
                    <i class=\"fab fa-google\"></i>
                </a>
                <a href=\"\" class=\"me-4 text-reset\">
                    <i class=\"fab fa-instagram\"></i>
                </a>
                <a href=\"\" class=\"me-4 text-reset\">
                    <i class=\"fab fa-linkedin\"></i>
                </a>
                <a href=\"\" class=\"me-4 text-reset\">
                    <i class=\"fab fa-github\"></i>
                </a>
                </div>
                <!-- Right -->
            </section>
            <!-- Section: Social media -->

            <!-- Section: Links  -->
            <section class=\"\">
                <div class=\"container text-center text-md-start mt-5\">
                <!-- Grid row -->
                <div class=\"row mt-3\">
                    <!-- Grid column -->
                    <div class=\"col-md-3 col-lg-4 col-xl-3 mx-auto mb-4\">
                    <!-- Content -->
                    <h6 class=\"text-uppercase fw-bold mb-4\">
                        <i class=\"fas fa-gem me-3\"></i>Company name
                    </h6>
                    <p>
                        Here you can use rows and columns to organize your footer content. Lorem ipsum
                        dolor sit amet, consectetur adipisicing elit.
                    </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class=\"col-md-2 col-lg-2 col-xl-2 mx-auto mb-4\">
                    <!-- Links -->
                    <h6 class=\"text-uppercase fw-bold mb-4\">
                        Products
                    </h6>
                    <p>
                        <a href=\"#!\" class=\"text-reset\">Angular</a>
                    </p>
                    <p>
                        <a href=\"#!\" class=\"text-reset\">React</a>
                    </p>
                    <p>
                        <a href=\"#!\" class=\"text-reset\">Vue</a>
                    </p>
                    <p>
                        <a href=\"#!\" class=\"text-reset\">Laravel</a>
                    </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class=\"col-md-3 col-lg-2 col-xl-2 mx-auto mb-4\">
                    <!-- Links -->
                    <h6 class=\"text-uppercase fw-bold mb-4\">
                        Useful links
                    </h6>
                    <p>
                        <a href=\"#!\" class=\"text-reset\">Pricing</a>
                    </p>
                    <p>
                        <a href=\"#!\" class=\"text-reset\">Settings</a>
                    </p>
                    <p>
                        <a href=\"#!\" class=\"text-reset\">Orders</a>
                    </p>
                    <p>
                        <a href=\"#!\" class=\"text-reset\">Help</a>
                    </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class=\"col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4\">
                    <!-- Links -->
                    <h6 class=\"text-uppercase fw-bold mb-4\">
                        Contact
                    </h6>
                    <p><i class=\"fas fa-home me-3\"></i> New York, NY 10012, US</p>
                    <p>
                        <i class=\"fas fa-envelope me-3\"></i>
                        info@example.com
                    </p>
                    <p><i class=\"fas fa-phone me-3\"></i> + 01 234 567 88</p>
                    <p><i class=\"fas fa-print me-3\"></i> + 01 234 567 89</p>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
                </div>
            </section>
            <!-- Section: Links  -->

            <!-- Copyright -->
            <div class=\"text-center p-4\" style=\"background-color: rgba(0, 0, 0, 0.05);\">
                © 2021 Copyright:
                <a class=\"text-reset fw-bold\" href=\"https://mdbootstrap.com/\">MDBootstrap.com</a>
            </div>
            <!-- Copyright -->
        </footer>
        <!-- Footer -->
    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 14
        echo "            ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        echo "
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 17
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 18
        echo "            ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        echo "
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 56
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
        return array (  336 => 56,  323 => 18,  313 => 17,  300 => 14,  290 => 13,  271 => 5,  128 => 57,  126 => 56,  104 => 39,  96 => 36,  88 => 33,  73 => 20,  71 => 17,  68 => 16,  65 => 13,  60 => 9,  57 => 7,  53 => 5,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        {# boostrap #}
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor\" crossorigin=\"anonymous\">
        {# boostrap icon #}
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css\">;
        <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css\">

        {# Run `composer require symfony/webpack-encore-bundle` to start using Symfony UX #}
        {% block stylesheets %}
            {{ encore_entry_link_tags('app') }}
        {% endblock %}

        {% block javascripts %}
            {{ encore_entry_script_tags('app') }}
        {% endblock %}
    </head>
    <body>
        <header>
                    <!-- header + nav -->
                <nav class=\"navbar navbar-expand-lg bg-light\">
            <div class=\"container-fluid\">
                <a class=\"navbar-brand\" href=\"/\">Progica</a>
                <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link {% if menu == \"rechercheGite\" or menu == \"detailGite\" %} active {% endif %}\" aria-current=\"page\" href=\"/recherche-gite\">Rechercher un gite</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link {% if menu == \"contact\" %} active {% endif %}\" aria-current=\"page\" href=\"/contact\">Contact</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link {% if menu == \"index_admin\" %} active {% endif %}\" aria-current=\"page\" href=\"/admin\">admin</a>
                    </li>
                </ul>
                <form class=\"d-flex\" role=\"search\">
                    <input class=\"form-control me-2\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
                    <button class=\"btn btn-outline-success\" type=\"submit\">Search</button>
                </form>
                </div>
            </div>
            </nav>
        <!-- header + nav -->
        </header>



        <body>
            <div class=\"container\">
                {% block body %}{% endblock %}
            </div>
        </body>



        <!-- Footer -->
        <footer class=\"text-center text-lg-start bg-light text-muted\">
            <!-- Section: Social media -->
            <section
                class=\"d-flex justify-content-center justify-content-lg-between p-4 border-bottom\"
            >
                <!-- Left -->
                <div class=\"me-5 d-none d-lg-block\">
                <span>Get connected with us on social networks:</span>
                </div>
                <!-- Left -->

                <!-- Right -->
                <div>
                <a href=\"\" class=\"me-4 text-reset\">
                    <i class=\"fab fa-facebook-f\"></i>
                </a>
                <a href=\"\" class=\"me-4 text-reset\">
                    <i class=\"fab fa-twitter\"></i>
                </a>
                <a href=\"\" class=\"me-4 text-reset\">
                    <i class=\"fab fa-google\"></i>
                </a>
                <a href=\"\" class=\"me-4 text-reset\">
                    <i class=\"fab fa-instagram\"></i>
                </a>
                <a href=\"\" class=\"me-4 text-reset\">
                    <i class=\"fab fa-linkedin\"></i>
                </a>
                <a href=\"\" class=\"me-4 text-reset\">
                    <i class=\"fab fa-github\"></i>
                </a>
                </div>
                <!-- Right -->
            </section>
            <!-- Section: Social media -->

            <!-- Section: Links  -->
            <section class=\"\">
                <div class=\"container text-center text-md-start mt-5\">
                <!-- Grid row -->
                <div class=\"row mt-3\">
                    <!-- Grid column -->
                    <div class=\"col-md-3 col-lg-4 col-xl-3 mx-auto mb-4\">
                    <!-- Content -->
                    <h6 class=\"text-uppercase fw-bold mb-4\">
                        <i class=\"fas fa-gem me-3\"></i>Company name
                    </h6>
                    <p>
                        Here you can use rows and columns to organize your footer content. Lorem ipsum
                        dolor sit amet, consectetur adipisicing elit.
                    </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class=\"col-md-2 col-lg-2 col-xl-2 mx-auto mb-4\">
                    <!-- Links -->
                    <h6 class=\"text-uppercase fw-bold mb-4\">
                        Products
                    </h6>
                    <p>
                        <a href=\"#!\" class=\"text-reset\">Angular</a>
                    </p>
                    <p>
                        <a href=\"#!\" class=\"text-reset\">React</a>
                    </p>
                    <p>
                        <a href=\"#!\" class=\"text-reset\">Vue</a>
                    </p>
                    <p>
                        <a href=\"#!\" class=\"text-reset\">Laravel</a>
                    </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class=\"col-md-3 col-lg-2 col-xl-2 mx-auto mb-4\">
                    <!-- Links -->
                    <h6 class=\"text-uppercase fw-bold mb-4\">
                        Useful links
                    </h6>
                    <p>
                        <a href=\"#!\" class=\"text-reset\">Pricing</a>
                    </p>
                    <p>
                        <a href=\"#!\" class=\"text-reset\">Settings</a>
                    </p>
                    <p>
                        <a href=\"#!\" class=\"text-reset\">Orders</a>
                    </p>
                    <p>
                        <a href=\"#!\" class=\"text-reset\">Help</a>
                    </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class=\"col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4\">
                    <!-- Links -->
                    <h6 class=\"text-uppercase fw-bold mb-4\">
                        Contact
                    </h6>
                    <p><i class=\"fas fa-home me-3\"></i> New York, NY 10012, US</p>
                    <p>
                        <i class=\"fas fa-envelope me-3\"></i>
                        info@example.com
                    </p>
                    <p><i class=\"fas fa-phone me-3\"></i> + 01 234 567 88</p>
                    <p><i class=\"fas fa-print me-3\"></i> + 01 234 567 89</p>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
                </div>
            </section>
            <!-- Section: Links  -->

            <!-- Copyright -->
            <div class=\"text-center p-4\" style=\"background-color: rgba(0, 0, 0, 0.05);\">
                © 2021 Copyright:
                <a class=\"text-reset fw-bold\" href=\"https://mdbootstrap.com/\">MDBootstrap.com</a>
            </div>
            <!-- Copyright -->
        </footer>
        <!-- Footer -->
    </body>
</html>
", "base.html.twig", "D:\\quentin\\www\\formation web afpa\\symfony\\progica\\templates\\base.html.twig");
    }
}
