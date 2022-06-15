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

/* index.html.twig */
class __TwigTemplate_dd98840037723e30717d9ad5f8dcebf275d24ded639fdb75a2972c2acb91de1b extends Template
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
        // line 3
        return "base_index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index.html.twig"));

        $this->parent = $this->loadTemplate("base_index.html.twig", "index.html.twig", 3);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
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

        echo " Progica ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
    ";
        // line 22
        echo "
<!-- Header -->
<header class=\"header\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-8 col-lg-push-2 text-center\">
\t\t\t\t<h1>Progica</h1>
\t\t\t\t<h2>Trouvez le gite de vos rêves</h2>
\t\t\t\t<p class=\"lead\">
\t\t\t\t\tLorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pharetra nibh ut justo aliquam cursus. Donec nec consequat du
\t\t\t\t</p>
\t\t\t\t
\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pharetra nibh ut justo aliquam cursus. Donec nec consequa </p>
\t\t\t\t\t<br>
\t\t\t\t
                    <a href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recherche-gite");
        echo "\" class=\"btn btn-lg btn-default\">Trouvez le gite de vos rêves maintenant</a>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-12\">
\t\t\t\t<div id=\"illustration\">
\t\t\t\t\t<img src='build/img_superAwesome/ap-screenshot.png' alt=\"\" >
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</header>
<!-- /Header -->
\t

<!-- Content -->
<main class=\"content\">

\t<!-- Lead -->
\t<section class=\"container space-before space-after\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-10 col-sm-push-1\">
\t\t\t\t<h1 class=\"text-center\">What it's all about</h1>
\t\t\t\t<p class=\"lead text-center\">
\t\t\t\t\tLorem ipsum dolor sit amet, consectetur adipiscing elit. 
\t\t\t\t\tNam mi odio, gravida at turpis et, porta bibendum justo.
\t\t\t\t</p> 
\t\t\t</div>
\t\t</div>
\t</section>
\t<!-- /Lead -->



\t<!-- Features -->
\t<section class=\"container space-before\">
\t\t
\t\t<div class=\"row featurelist space-after\">
\t\t\t<div class=\"col-md-5 col-sm-6 col-md-push-1 \">
\t\t\t\t<img class=\"img-feature img-responsive\" src='build/img_superAwesome/screen1.png' alt=\"Sample image\">
\t\t\t</div>
\t\t\t<div class=\"col-md-5 col-md-push-1 col-sm-6\">
\t\t\t\t<h2 class=\"space-before\">The template is quite small, <span class=\"text-muted\">so html code is simple</span></h2>
\t\t\t\t<p>What you have to ask yourself is, do I feel lucky. well do ya' punk? Ever notice how sometimes you come across somebody you shouldn't have f**ked with? Well, I'm that guy. Dyin' ain't much of a livin', boy.</p>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"row featurelist space-after\">
\t\t\t<div class=\"col-md-5 col-sm-6 col-sm-push-6\">
\t\t\t\t<img class=\"img-feature img-responsive\" src=\"build/img_superAwesome/screen2.png\" alt=\"Sample image\">
\t\t\t</div>
\t\t\t<div class=\"col-md-5 col-sm-6 col-md-pull-4 col-sm-pull-6\">
\t\t\t\t<h2 class=\"space-before\">Yes, I love cool backgrounds, <span class=\"text-muted\">like the one used here</span></h2>
\t\t\t\t<p>There are 2 more color themes inside this template. You'll just need to uncomment 
\t\t\t\t\tfew lines in the CSS file to activate any of them. </p>
\t\t\t\t<p>Now, continue with our lipsum  
\t\t\t\t\tThis is the ak-47 assault rifle, The preferred weapon of your enemy; and it makes a distinctive sound when 
\t\t\t\t\tfired at you, so remember it. When a naked man's chasing a woman through an alley with a butcher knife and a hard-on, I figure he's not out collecting for the red cross. well, do you have anything to say for yourself? </p>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"row featurelist space-after\">
\t\t\t<div class=\"col-md-5 col-sm-6 col-md-push-1 col-sm-6\">
\t\t\t\t<img class=\"img-feature img-responsive\" src=\"build/img_superAwesome/screen3.png\" alt=\"Sample image\">
\t\t\t</div>
\t\t\t<div class=\"col-md-5 col-md-push-1 col-sm-6\">
\t\t\t\t<h2 class=\"space-before\">Violet does look good too!</span></h2>
\t\t\t\t<p>Here. Put that in your report! And \"I may have found a way out of here. you want a guarantee, buy a toaster. are you feeling lucky punk dyin' ain't much of a livin', boy. what you have to ask yourself is, Do I feel lucky. Well do ya' punk? You see, in this world there's two kinds of people, my friend: those with loaded guns and those who dig. you dig.</p>
\t\t\t</div>
\t\t</div>
\t</section>
\t<!-- /Features -->

</main>


<footer id=\"footer\" class=\"jumbotron\">
\t<section class=\"container\">
\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-5 col-md-push-1\">
\t\t\t\t\t<h2>Got your interest?</h2>
\t\t\t\t\t<p>Please tell your friends about SuperAwesome!</p>
\t\t\t\t\t<!-- AddThis Button BEGIN -->
\t\t\t\t\t<div class=\"addthis_toolbox addthis_default_style addthis_32x32_style\">
\t\t\t\t\t<a class=\"addthis_button_facebook\"></a>
\t\t\t\t\t<a class=\"addthis_button_twitter\"></a>
\t\t\t\t\t<a class=\"addthis_button_linkedin\"></a>
\t\t\t\t\t<a class=\"addthis_button_google_plusone_share\"></a>
\t\t\t\t\t<a class=\"addthis_button_compact\"></a><a class=\"addthis_counter addthis_bubble_style\"></a>
\t\t\t\t\t</div>
\t\t\t\t\t<script type=\"text/javascript\">var addthis_config = {\"data_track_addressbar\":true};</script>
\t\t\t\t\t<script type=\"text/javascript\" src=\"//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-536ba34f3dab1f93\"></script>
\t\t\t\t\t<!-- AddThis Button END -->
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-5 col-md-push-1\">
\t\t\t\t\t<h2>Need help?</h2>
\t\t\t\t\t<p>For help with this or another template you've downloaded from GetTemplate, please email me at gt@gettemplate.com. </p>
\t\t\t\t\t<p>If you'd like to report a bug or suggest an improvement, please post and issue on <a href=\"https://github.com/pozh/\">GitHub</a> </p>
\t\t\t\t</div>
\t\t</div>\t
\t</section>
</footer>

<p class=\"small text-muted text-center\">Copyright &copy; 2014, Your name. Design by: <a href=\"http://gettemplate.com/\" rel=\"designer\" title=\"Free Bootstrap templates\">GetTemplate</a></p>
<br>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 37,  91 => 22,  88 => 7,  78 => 6,  59 => 5,  36 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("

{% extends \"base_index.html.twig\" %}

{% block title %} Progica {% endblock %}
{% block body %}

    {# <div class=\"row justify-content-around\">
    {% for gite in gites %}
        <div class=\"card col-4\" style=\"width: 18rem;\">
            <img class=\"card-img-top\" src=\"...\" alt=\"Card image cap\">
            <div class=\"card-body\">
                <h5 class=\"card-title\">{{gite.name}}</h5>
                <p class=\"card-text\">{{gite.description}}</p>
                <p class=\"card-text\">{{gite.localisation}}</p>
                <p class=\"card-text\">{{gite.surface}}</p>
                <a href=\"{{path('gite_show',{id:gite.id})}}\" class=\"btn btn-primary\">Voir le gite</a>
            </div>
        </div>
    {% endfor %}
    </div> #}

<!-- Header -->
<header class=\"header\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-8 col-lg-push-2 text-center\">
\t\t\t\t<h1>Progica</h1>
\t\t\t\t<h2>Trouvez le gite de vos rêves</h2>
\t\t\t\t<p class=\"lead\">
\t\t\t\t\tLorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pharetra nibh ut justo aliquam cursus. Donec nec consequat du
\t\t\t\t</p>
\t\t\t\t
\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pharetra nibh ut justo aliquam cursus. Donec nec consequa </p>
\t\t\t\t\t<br>
\t\t\t\t
                    <a href=\"{{path('recherche-gite')}}\" class=\"btn btn-lg btn-default\">Trouvez le gite de vos rêves maintenant</a>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-12\">
\t\t\t\t<div id=\"illustration\">
\t\t\t\t\t<img src='build/img_superAwesome/ap-screenshot.png' alt=\"\" >
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</header>
<!-- /Header -->
\t

<!-- Content -->
<main class=\"content\">

\t<!-- Lead -->
\t<section class=\"container space-before space-after\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-10 col-sm-push-1\">
\t\t\t\t<h1 class=\"text-center\">What it's all about</h1>
\t\t\t\t<p class=\"lead text-center\">
\t\t\t\t\tLorem ipsum dolor sit amet, consectetur adipiscing elit. 
\t\t\t\t\tNam mi odio, gravida at turpis et, porta bibendum justo.
\t\t\t\t</p> 
\t\t\t</div>
\t\t</div>
\t</section>
\t<!-- /Lead -->



\t<!-- Features -->
\t<section class=\"container space-before\">
\t\t
\t\t<div class=\"row featurelist space-after\">
\t\t\t<div class=\"col-md-5 col-sm-6 col-md-push-1 \">
\t\t\t\t<img class=\"img-feature img-responsive\" src='build/img_superAwesome/screen1.png' alt=\"Sample image\">
\t\t\t</div>
\t\t\t<div class=\"col-md-5 col-md-push-1 col-sm-6\">
\t\t\t\t<h2 class=\"space-before\">The template is quite small, <span class=\"text-muted\">so html code is simple</span></h2>
\t\t\t\t<p>What you have to ask yourself is, do I feel lucky. well do ya' punk? Ever notice how sometimes you come across somebody you shouldn't have f**ked with? Well, I'm that guy. Dyin' ain't much of a livin', boy.</p>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"row featurelist space-after\">
\t\t\t<div class=\"col-md-5 col-sm-6 col-sm-push-6\">
\t\t\t\t<img class=\"img-feature img-responsive\" src=\"build/img_superAwesome/screen2.png\" alt=\"Sample image\">
\t\t\t</div>
\t\t\t<div class=\"col-md-5 col-sm-6 col-md-pull-4 col-sm-pull-6\">
\t\t\t\t<h2 class=\"space-before\">Yes, I love cool backgrounds, <span class=\"text-muted\">like the one used here</span></h2>
\t\t\t\t<p>There are 2 more color themes inside this template. You'll just need to uncomment 
\t\t\t\t\tfew lines in the CSS file to activate any of them. </p>
\t\t\t\t<p>Now, continue with our lipsum  
\t\t\t\t\tThis is the ak-47 assault rifle, The preferred weapon of your enemy; and it makes a distinctive sound when 
\t\t\t\t\tfired at you, so remember it. When a naked man's chasing a woman through an alley with a butcher knife and a hard-on, I figure he's not out collecting for the red cross. well, do you have anything to say for yourself? </p>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"row featurelist space-after\">
\t\t\t<div class=\"col-md-5 col-sm-6 col-md-push-1 col-sm-6\">
\t\t\t\t<img class=\"img-feature img-responsive\" src=\"build/img_superAwesome/screen3.png\" alt=\"Sample image\">
\t\t\t</div>
\t\t\t<div class=\"col-md-5 col-md-push-1 col-sm-6\">
\t\t\t\t<h2 class=\"space-before\">Violet does look good too!</span></h2>
\t\t\t\t<p>Here. Put that in your report! And \"I may have found a way out of here. you want a guarantee, buy a toaster. are you feeling lucky punk dyin' ain't much of a livin', boy. what you have to ask yourself is, Do I feel lucky. Well do ya' punk? You see, in this world there's two kinds of people, my friend: those with loaded guns and those who dig. you dig.</p>
\t\t\t</div>
\t\t</div>
\t</section>
\t<!-- /Features -->

</main>


<footer id=\"footer\" class=\"jumbotron\">
\t<section class=\"container\">
\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-5 col-md-push-1\">
\t\t\t\t\t<h2>Got your interest?</h2>
\t\t\t\t\t<p>Please tell your friends about SuperAwesome!</p>
\t\t\t\t\t<!-- AddThis Button BEGIN -->
\t\t\t\t\t<div class=\"addthis_toolbox addthis_default_style addthis_32x32_style\">
\t\t\t\t\t<a class=\"addthis_button_facebook\"></a>
\t\t\t\t\t<a class=\"addthis_button_twitter\"></a>
\t\t\t\t\t<a class=\"addthis_button_linkedin\"></a>
\t\t\t\t\t<a class=\"addthis_button_google_plusone_share\"></a>
\t\t\t\t\t<a class=\"addthis_button_compact\"></a><a class=\"addthis_counter addthis_bubble_style\"></a>
\t\t\t\t\t</div>
\t\t\t\t\t<script type=\"text/javascript\">var addthis_config = {\"data_track_addressbar\":true};</script>
\t\t\t\t\t<script type=\"text/javascript\" src=\"//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-536ba34f3dab1f93\"></script>
\t\t\t\t\t<!-- AddThis Button END -->
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-5 col-md-push-1\">
\t\t\t\t\t<h2>Need help?</h2>
\t\t\t\t\t<p>For help with this or another template you've downloaded from GetTemplate, please email me at gt@gettemplate.com. </p>
\t\t\t\t\t<p>If you'd like to report a bug or suggest an improvement, please post and issue on <a href=\"https://github.com/pozh/\">GitHub</a> </p>
\t\t\t\t</div>
\t\t</div>\t
\t</section>
</footer>

<p class=\"small text-muted text-center\">Copyright &copy; 2014, Your name. Design by: <a href=\"http://gettemplate.com/\" rel=\"designer\" title=\"Free Bootstrap templates\">GetTemplate</a></p>
<br>



{% endblock %}
", "index.html.twig", "D:\\quentin\\www\\formation web afpa\\symfony\\progica\\templates\\index.html.twig");
    }
}
