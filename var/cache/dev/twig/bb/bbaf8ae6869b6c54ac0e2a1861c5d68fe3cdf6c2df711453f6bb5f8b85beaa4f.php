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

/* rechercheGite.html.twig */
class __TwigTemplate_4b6b873238f60db7362e9be3babd48196fc5a978b594c17ff453306d4e9dd391 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "rechercheGite.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "rechercheGite.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "rechercheGite.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " recherche de gite ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        echo "  

<h1>Rechercher un gite</h1>

    <div class=\"row\">
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), 'form_start');
        echo "
        <div class=\"col-4\">
            ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "searchLocalisation", [], "any", false, false, false, 11), 'row');
        echo "
        </div>
        <div class=\"col-4\">
            ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "minsurface", [], "any", false, false, false, 14), 'row');
        echo "
        </div>
        <div class=\"col-4\">
            ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "minnumberOfBedroom", [], "any", false, false, false, 17), 'row');
        echo "
        </div>
        <div class=\"col-4\">
            ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "minnumberOfBed", [], "any", false, false, false, 20), 'row');
        echo "
        </div>
        <div class=\"col-4\">
            ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "isOkPets", [], "any", false, false, false, 23), 'row');
        echo "
        </div>
        <div class=\"col-4\">
            ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "submit", [], "any", false, false, false, 26), 'row');
        echo "
        </div>
    ";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), 'form_end');
        echo "
    </div>

    <div class=\"row justify-content-around\">
    ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["gites"]) || array_key_exists("gites", $context) ? $context["gites"] : (function () { throw new RuntimeError('Variable "gites" does not exist.', 32, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["gite"]) {
            // line 33
            echo "        <div class=\"card col-4\" style=\"width: 18rem;\">
            <img class=\"card-img-top\" src='build/img/architecture-1477098_960_720.jpg' alt=\"Card image cap\">
            <div class=\"card-body\">
                <h5 class=\"card-title\">";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["gite"], "name", [], "any", false, false, false, 36), "html", null, true);
            echo "</h5>
                <p class=\"card-text\">";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["gite"], "description", [], "any", false, false, false, 37), "html", null, true);
            echo ".</p>
                <p class=\"card-text\">localisation: ";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["gite"], "localisation", [], "any", false, false, false, 38), "html", null, true);
            echo ".</p>
                <p class=\"card-text\">surface: ";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["gite"], "surface", [], "any", false, false, false, 39), "html", null, true);
            echo " m².</p>
                ";
            // line 42
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gite_show", ["id" => twig_get_attribute($this->env, $this->source, $context["gite"], "id", [], "any", false, false, false, 42)]), "html", null, true);
            echo "\" class=\"btn btn-primary\">Voir le gite</a>
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "rechercheGite.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 46,  166 => 42,  162 => 39,  158 => 38,  154 => 37,  150 => 36,  145 => 33,  141 => 32,  134 => 28,  129 => 26,  123 => 23,  117 => 20,  111 => 17,  105 => 14,  99 => 11,  94 => 9,  78 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %} recherche de gite {% endblock %}
{% block body %}  

<h1>Rechercher un gite</h1>

    <div class=\"row\">
    {{ form_start(form) }}
        <div class=\"col-4\">
            {{ form_row(form.searchLocalisation)}}
        </div>
        <div class=\"col-4\">
            {{ form_row(form.minsurface)}}
        </div>
        <div class=\"col-4\">
            {{ form_row(form.minnumberOfBedroom)}}
        </div>
        <div class=\"col-4\">
            {{ form_row(form.minnumberOfBed)}}
        </div>
        <div class=\"col-4\">
            {{ form_row(form.isOkPets)}}
        </div>
        <div class=\"col-4\">
            {{ form_row(form.submit)}}
        </div>
    {{ form_end(form) }}
    </div>

    <div class=\"row justify-content-around\">
    {% for gite in gites %}
        <div class=\"card col-4\" style=\"width: 18rem;\">
            <img class=\"card-img-top\" src='build/img/architecture-1477098_960_720.jpg' alt=\"Card image cap\">
            <div class=\"card-body\">
                <h5 class=\"card-title\">{{gite.name}}</h5>
                <p class=\"card-text\">{{gite.description}}.</p>
                <p class=\"card-text\">localisation: {{gite.localisation}}.</p>
                <p class=\"card-text\">surface: {{gite.surface}} m².</p>
                {# <p class=\"card-text\">Nbr de chambres: {{gite.number_of_bedroom}}.</p>
                <p class=\"card-text\">Nbr de couchages: {{gite.number_of_bed}}.</p> #}
                <a href=\"{{path('gite_show',{id:gite.id})}}\" class=\"btn btn-primary\">Voir le gite</a>
            </div>
        </div>
    {% endfor %}
    </div>

{% endblock %}", "rechercheGite.html.twig", "D:\\quentin\\www\\formation web afpa\\symfony\\progica\\templates\\rechercheGite.html.twig");
    }
}
