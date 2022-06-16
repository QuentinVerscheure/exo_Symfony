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

/* admin/gite/edit.html.twig */
class __TwigTemplate_4c5b49e53a712c7961ec0c1394bf21a8a86302ef84c7158ebd5efc73288230ee extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/gite/edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/gite/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/gite/edit.html.twig", 1);
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

        echo " Modification d'un gite ";
        
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
        echo "<h1>Modification d'un gite</h1>


";
        // line 8
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formGite"]) || array_key_exists("formGite", $context) ? $context["formGite"] : (function () { throw new RuntimeError('Variable "formGite" does not exist.', 8, $this->source); })()), 'form_start');
        echo "

<div class=\"row\">
    <div class=\"col-md-6\">
        ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formGite"]) || array_key_exists("formGite", $context) ? $context["formGite"] : (function () { throw new RuntimeError('Variable "formGite" does not exist.', 12, $this->source); })()), "name", [], "any", false, false, false, 12), 'row');
        echo "
    </div>
</div>
<div class=\"row\">
    <div class=\"col-md-6\">
        ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formGite"]) || array_key_exists("formGite", $context) ? $context["formGite"] : (function () { throw new RuntimeError('Variable "formGite" does not exist.', 17, $this->source); })()), "localisation", [], "any", false, false, false, 17), 'row');
        echo "
    </div>
</div>
<div class=\"row\">
    <div class=\"col-md-4\">
        ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formGite"]) || array_key_exists("formGite", $context) ? $context["formGite"] : (function () { throw new RuntimeError('Variable "formGite" does not exist.', 22, $this->source); })()), "numberOfBedroom", [], "any", false, false, false, 22), 'row');
        echo "
    </div>
    <div class=\"col-md-4\">
        ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formGite"]) || array_key_exists("formGite", $context) ? $context["formGite"] : (function () { throw new RuntimeError('Variable "formGite" does not exist.', 25, $this->source); })()), "numberOfBed", [], "any", false, false, false, 25), 'row');
        echo "
    </div>
        <div class=\"col-md-4\">
        ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formGite"]) || array_key_exists("formGite", $context) ? $context["formGite"] : (function () { throw new RuntimeError('Variable "formGite" does not exist.', 28, $this->source); })()), "surface", [], "any", false, false, false, 28), 'row');
        echo "
    </div>
</div>
<div class=\"row\">
    <div class=\"col-md-6\">
        ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formGite"]) || array_key_exists("formGite", $context) ? $context["formGite"] : (function () { throw new RuntimeError('Variable "formGite" does not exist.', 33, $this->source); })()), "contact", [], "any", false, false, false, 33), 'row');
        echo "
    </div>
    <div class=\"col-md-6\">
        ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formGite"]) || array_key_exists("formGite", $context) ? $context["formGite"] : (function () { throw new RuntimeError('Variable "formGite" does not exist.', 36, $this->source); })()), "scheduleContact", [], "any", false, false, false, 36), 'row');
        echo "
    </div>
</div>
<div class=\"row\">
    <div class=\"col-md-12\">
        ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formGite"]) || array_key_exists("formGite", $context) ? $context["formGite"] : (function () { throw new RuntimeError('Variable "formGite" does not exist.', 41, $this->source); })()), "description", [], "any", false, false, false, 41), 'row');
        echo "
    </div>
    <div class=\"col-md-12\">
        ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formGite"]) || array_key_exists("formGite", $context) ? $context["formGite"] : (function () { throw new RuntimeError('Variable "formGite" does not exist.', 44, $this->source); })()), "Pets", [], "any", false, false, false, 44), 'row');
        echo "
    </div>
</div>
<div class=\"form-group\">
    <button type=\"submit\" class=\"btn btn-primary\">éditer</button>
    <button type=\"reset\" class=\"btn btn-default\">annuler</button>
</div>

";
        // line 52
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formGite"]) || array_key_exists("formGite", $context) ? $context["formGite"] : (function () { throw new RuntimeError('Variable "formGite" does not exist.', 52, $this->source); })()), 'form_end');
        echo "


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/gite/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 52,  156 => 44,  150 => 41,  142 => 36,  136 => 33,  128 => 28,  122 => 25,  116 => 22,  108 => 17,  100 => 12,  93 => 8,  88 => 5,  78 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %} Modification d'un gite {% endblock %}
{% block body %}
<h1>Modification d'un gite</h1>


{{ form_start(formGite) }}

<div class=\"row\">
    <div class=\"col-md-6\">
        {{ form_row(formGite.name) }}
    </div>
</div>
<div class=\"row\">
    <div class=\"col-md-6\">
        {{ form_row(formGite.localisation) }}
    </div>
</div>
<div class=\"row\">
    <div class=\"col-md-4\">
        {{ form_row(formGite.numberOfBedroom) }}
    </div>
    <div class=\"col-md-4\">
        {{ form_row(formGite.numberOfBed) }}
    </div>
        <div class=\"col-md-4\">
        {{ form_row(formGite.surface) }}
    </div>
</div>
<div class=\"row\">
    <div class=\"col-md-6\">
        {{ form_row(formGite.contact) }}
    </div>
    <div class=\"col-md-6\">
        {{ form_row(formGite.scheduleContact) }}
    </div>
</div>
<div class=\"row\">
    <div class=\"col-md-12\">
        {{ form_row(formGite.description) }}
    </div>
    <div class=\"col-md-12\">
        {{ form_row(formGite.Pets) }}
    </div>
</div>
<div class=\"form-group\">
    <button type=\"submit\" class=\"btn btn-primary\">éditer</button>
    <button type=\"reset\" class=\"btn btn-default\">annuler</button>
</div>

{{ form_end(formGite) }}


{% endblock %}


 


", "admin/gite/edit.html.twig", "D:\\quentin\\www\\formation web afpa\\symfony\\progica\\templates\\admin\\gite\\edit.html.twig");
    }
}
