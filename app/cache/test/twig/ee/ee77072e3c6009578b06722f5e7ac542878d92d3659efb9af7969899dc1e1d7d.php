<?php

/* default/layout.html.twig */
class __TwigTemplate_dde4393721147b2835ffdf23dea410fa3e664f191306566ab39fef85c2f21a4b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'description' => array($this, 'block_description'),
            'keywords' => array($this, 'block_keywords'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c1651ac21c6edb2ee07e231b418339eb6042433ad65a33bf988b4c515ac74141 = $this->env->getExtension("native_profiler");
        $__internal_c1651ac21c6edb2ee07e231b418339eb6042433ad65a33bf988b4c515ac74141->enter($__internal_c1651ac21c6edb2ee07e231b418339eb6042433ad65a33bf988b4c515ac74141_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c1651ac21c6edb2ee07e231b418339eb6042433ad65a33bf988b4c515ac74141->leave($__internal_c1651ac21c6edb2ee07e231b418339eb6042433ad65a33bf988b4c515ac74141_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b96a8d38a957a291eec6ce874730ac477aadba97ee1f8f0727d4dd071b336672 = $this->env->getExtension("native_profiler");
        $__internal_b96a8d38a957a291eec6ce874730ac477aadba97ee1f8f0727d4dd071b336672->enter($__internal_b96a8d38a957a291eec6ce874730ac477aadba97ee1f8f0727d4dd071b336672_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\t";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "title", array()), "html", null, true);
        echo "
";
        
        $__internal_b96a8d38a957a291eec6ce874730ac477aadba97ee1f8f0727d4dd071b336672->leave($__internal_b96a8d38a957a291eec6ce874730ac477aadba97ee1f8f0727d4dd071b336672_prof);

    }

    // line 7
    public function block_description($context, array $blocks = array())
    {
        $__internal_f09ba960cc33da1178806346042c9735d953a42aaee1c19a9d867127015be365 = $this->env->getExtension("native_profiler");
        $__internal_f09ba960cc33da1178806346042c9735d953a42aaee1c19a9d867127015be365->enter($__internal_f09ba960cc33da1178806346042c9735d953a42aaee1c19a9d867127015be365_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        // line 8
        echo "\t";
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "description", array(), "any", false, true), "description", array(), "any", true, true)) {
            // line 9
            echo "\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "description", array()), "description", array()), "html", null, true);
            echo "
\t";
        }
        
        $__internal_f09ba960cc33da1178806346042c9735d953a42aaee1c19a9d867127015be365->leave($__internal_f09ba960cc33da1178806346042c9735d953a42aaee1c19a9d867127015be365_prof);

    }

    // line 13
    public function block_keywords($context, array $blocks = array())
    {
        $__internal_e73512c07a56967fb7f5b760654814b3acc13a71a8baf7393bcccf74f8b050b4 = $this->env->getExtension("native_profiler");
        $__internal_e73512c07a56967fb7f5b760654814b3acc13a71a8baf7393bcccf74f8b050b4->enter($__internal_e73512c07a56967fb7f5b760654814b3acc13a71a8baf7393bcccf74f8b050b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "keywords"));

        
        $__internal_e73512c07a56967fb7f5b760654814b3acc13a71a8baf7393bcccf74f8b050b4->leave($__internal_e73512c07a56967fb7f5b760654814b3acc13a71a8baf7393bcccf74f8b050b4_prof);

    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9f1eaa8d70d162877a406787c1d38204cc29a50a6daa3781b2c7831638cd04ea = $this->env->getExtension("native_profiler");
        $__internal_9f1eaa8d70d162877a406787c1d38204cc29a50a6daa3781b2c7831638cd04ea->enter($__internal_9f1eaa8d70d162877a406787c1d38204cc29a50a6daa3781b2c7831638cd04ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 17
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
";
        
        $__internal_9f1eaa8d70d162877a406787c1d38204cc29a50a6daa3781b2c7831638cd04ea->leave($__internal_9f1eaa8d70d162877a406787c1d38204cc29a50a6daa3781b2c7831638cd04ea_prof);

    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        $__internal_1491d67c3312170c1e325262313d7f1fdf1d79839059cceeb5c1814d31dbfa2c = $this->env->getExtension("native_profiler");
        $__internal_1491d67c3312170c1e325262313d7f1fdf1d79839059cceeb5c1814d31dbfa2c->enter($__internal_1491d67c3312170c1e325262313d7f1fdf1d79839059cceeb5c1814d31dbfa2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 22
        echo "\t<div id=\"header\">
\t\t<a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("mainPage");
        echo "\">
\t\t\t<img id=\"logo\" src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" alt=\"\"/>
\t\t</a>
\t\t";
        // line 26
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("AppBundle:Default:mainMenu", array("currentPage" => $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "slug", array()))));
        echo "
\t\t<img id=\"picture\" src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("images/" . $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "picture", array()))), "html", null, true);
        echo "\" alt=\"\"/>
\t</div>
\t<div id=\"content\">
\t\t";
        // line 30
        $this->displayBlock('content', $context, $blocks);
        // line 31
        echo "\t</div>
\t";
        // line 32
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array(), "any", false, true), "footer", array(), "any", true, true)) {
            // line 33
            echo "\t\t<div id=\"footer\">
\t\t\t";
            // line 34
            echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "footer", array()), "footer", array());
            echo "
\t\t</div>
\t";
        }
        
        $__internal_1491d67c3312170c1e325262313d7f1fdf1d79839059cceeb5c1814d31dbfa2c->leave($__internal_1491d67c3312170c1e325262313d7f1fdf1d79839059cceeb5c1814d31dbfa2c_prof);

    }

    // line 30
    public function block_content($context, array $blocks = array())
    {
        $__internal_8937217999a6500725091b9d1d069cd30631081f8640fc8772c40e7559abe2e1 = $this->env->getExtension("native_profiler");
        $__internal_8937217999a6500725091b9d1d069cd30631081f8640fc8772c40e7559abe2e1->enter($__internal_8937217999a6500725091b9d1d069cd30631081f8640fc8772c40e7559abe2e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_8937217999a6500725091b9d1d069cd30631081f8640fc8772c40e7559abe2e1->leave($__internal_8937217999a6500725091b9d1d069cd30631081f8640fc8772c40e7559abe2e1_prof);

    }

    // line 39
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0a60ec3adddb350acff3308b75acbecf3286a6c16f18853f4f41fb66d515bf49 = $this->env->getExtension("native_profiler");
        $__internal_0a60ec3adddb350acff3308b75acbecf3286a6c16f18853f4f41fb66d515bf49->enter($__internal_0a60ec3adddb350acff3308b75acbecf3286a6c16f18853f4f41fb66d515bf49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_0a60ec3adddb350acff3308b75acbecf3286a6c16f18853f4f41fb66d515bf49->leave($__internal_0a60ec3adddb350acff3308b75acbecf3286a6c16f18853f4f41fb66d515bf49_prof);

    }

    public function getTemplateName()
    {
        return "default/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 39,  156 => 30,  145 => 34,  142 => 33,  140 => 32,  137 => 31,  135 => 30,  129 => 27,  125 => 26,  120 => 24,  116 => 23,  113 => 22,  107 => 21,  98 => 18,  93 => 17,  87 => 16,  76 => 13,  65 => 9,  62 => 8,  56 => 7,  46 => 4,  40 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block title %}*/
/* 	{{ page.title }}*/
/* {% endblock %}*/
/* */
/* {% block description %}*/
/* 	{% if page.description.description is defined %}*/
/* 		{{ page.description.description }}*/
/* 	{% endif %}*/
/* {% endblock %}*/
/* */
/* {% block keywords %}*/
/* {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/* 	{{ parent() }}*/
/* 	<link href="{{asset('css/style.css')}}" rel="stylesheet" />*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* 	<div id="header">*/
/* 		<a href="{{ path('mainPage') }}">*/
/* 			<img id="logo" src="{{asset('images/logo.png')}}" alt=""/>*/
/* 		</a>*/
/* 		{{ render(controller('AppBundle:Default:mainMenu', {"currentPage": page.slug })) }}*/
/* 		<img id="picture" src="{{asset('images/' ~ page.picture )}}" alt=""/>*/
/* 	</div>*/
/* 	<div id="content">*/
/* 		{% block content %}{% endblock %}*/
/* 	</div>*/
/* 	{% if page.footer.footer is defined %}*/
/* 		<div id="footer">*/
/* 			{{ page.footer.footer | raw}}*/
/* 		</div>*/
/* 	{% endif %}*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/* {% endblock %}*/
