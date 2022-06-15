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

/* gite/show.html.twig */
class __TwigTemplate_876221b47b1fdea70d329a4671d87dc9921efc7b577115bbbfd0f40f5d0120ea extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gite/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gite/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "gite/show.html.twig", 1);
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

        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["gite"]) || array_key_exists("gite", $context) ? $context["gite"] : (function () { throw new RuntimeError('Variable "gite" does not exist.', 3, $this->source); })()), "name", [], "any", false, false, false, 3), "html", null, true);
        echo " ";
        
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

        // line 5
        echo "
<div class=\"col-12 mt-5\">
    <h3>";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["gite"]) || array_key_exists("gite", $context) ? $context["gite"] : (function () { throw new RuntimeError('Variable "gite" does not exist.', 7, $this->source); })()), "name", [], "any", false, false, false, 7), "html", null, true);
        echo "</h3>
    ";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["gite"]) || array_key_exists("gite", $context) ? $context["gite"] : (function () { throw new RuntimeError('Variable "gite" does not exist.', 8, $this->source); })()), "description", [], "any", false, false, false, 8), "html", null, true);
        echo "
</div>
<div class=\"row mt-5\">
    <div class=\"col-md-6\">
        <h5>Renseignement</h5>
            <p>Contact:";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["gite"]) || array_key_exists("gite", $context) ? $context["gite"] : (function () { throw new RuntimeError('Variable "gite" does not exist.', 13, $this->source); })()), "contact", [], "any", false, false, false, 13), "html", null, true);
        echo "</p>
            <p>Horaire de contact: ";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["gite"]) || array_key_exists("gite", $context) ? $context["gite"] : (function () { throw new RuntimeError('Variable "gite" does not exist.', 14, $this->source); })()), "scheduleContact", [], "any", false, false, false, 14), "html", null, true);
        echo "</p>
            <p>localisation: ";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["gite"]) || array_key_exists("gite", $context) ? $context["gite"] : (function () { throw new RuntimeError('Variable "gite" does not exist.', 15, $this->source); })()), "localisation", [], "any", false, false, false, 15), "html", null, true);
        echo "</p>
            <p>Surface: ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["gite"]) || array_key_exists("gite", $context) ? $context["gite"] : (function () { throw new RuntimeError('Variable "gite" does not exist.', 16, $this->source); })()), "surface", [], "any", false, false, false, 16), "html", null, true);
        echo "m²</p>
            <p>Nbr de chambres: ";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["gite"]) || array_key_exists("gite", $context) ? $context["gite"] : (function () { throw new RuntimeError('Variable "gite" does not exist.', 17, $this->source); })()), "numberOfBedroom", [], "any", false, false, false, 17), "html", null, true);
        echo "</p>
            <p>Nbr de lits: ";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["gite"]) || array_key_exists("gite", $context) ? $context["gite"] : (function () { throw new RuntimeError('Variable "gite" does not exist.', 18, $this->source); })()), "numberOfBed", [], "any", false, false, false, 18), "html", null, true);
        echo "</p>
            <p>Animaux 
            ";
        // line 20
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["gite"]) || array_key_exists("gite", $context) ? $context["gite"] : (function () { throw new RuntimeError('Variable "gite" does not exist.', 20, $this->source); })()), "pets", [], "any", false, false, false, 20), false))) {
            echo " non  ";
        }
        // line 21
        echo "             accéptés</p>
    </div>

    <div class=\"col-md-6\">
    <h5>equipements</h5>
        <table class=\"table\">
            ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["gite"]) || array_key_exists("gite", $context) ? $context["gite"] : (function () { throw new RuntimeError('Variable "gite" does not exist.', 27, $this->source); })()), "equipements", [], "any", false, false, false, 27));
        foreach ($context['_seq'] as $context["_key"] => $context["equipement"]) {
            // line 28
            echo "            <tr>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["equipement"], "name", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['equipement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "        </table>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "gite/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 32,  150 => 29,  147 => 28,  143 => 27,  135 => 21,  131 => 20,  126 => 18,  122 => 17,  118 => 16,  114 => 15,  110 => 14,  106 => 13,  98 => 8,  94 => 7,  90 => 5,  80 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %} {{gite.name}} {% endblock %}
{% block body %}

<div class=\"col-12 mt-5\">
    <h3>{{gite.name}}</h3>
    {{gite.description}}
</div>
<div class=\"row mt-5\">
    <div class=\"col-md-6\">
        <h5>Renseignement</h5>
            <p>Contact:{{gite.contact}}</p>
            <p>Horaire de contact: {{gite.scheduleContact}}</p>
            <p>localisation: {{gite.localisation}}</p>
            <p>Surface: {{gite.surface}}m²</p>
            <p>Nbr de chambres: {{gite.numberOfBedroom}}</p>
            <p>Nbr de lits: {{gite.numberOfBed}}</p>
            <p>Animaux 
            {% if gite.pets == false %} non  {% endif %}
             accéptés</p>
    </div>

    <div class=\"col-md-6\">
    <h5>equipements</h5>
        <table class=\"table\">
            {% for equipement in gite.equipements%}
            <tr>
                <td>{{ equipement.name}}</td>
            </tr>
        {% endfor %}
        </table>
    </div>
</div>
{% endblock %}

", "gite/show.html.twig", "D:\\quentin\\www\\formation web afpa\\symfony\\progica\\templates\\gite\\show.html.twig");
    }
}
