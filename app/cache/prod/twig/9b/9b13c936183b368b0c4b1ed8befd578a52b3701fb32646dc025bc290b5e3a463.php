<?php

/* default/layout.html.twig */
class __TwigTemplate_e84480bb6973990160123c5c819a2539b83f9a6fbd7e83c1ba675450e6cf2566 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "\t";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array()), "html", null, true);
        echo "
";
    }

    // line 7
    public function block_description($context, array $blocks = array())
    {
        // line 8
        echo "\t";
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "description", array(), "any", false, true), "description", array(), "any", true, true)) {
            // line 9
            echo "\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "description", array()), "description", array()), "html", null, true);
            echo "
\t";
        }
    }

    // line 13
    public function block_keywords($context, array $blocks = array())
    {
    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 17
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
";
    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
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
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("AppBundle:Default:mainMenu", array("currentPage" => $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "slug", array()))));
        echo "
\t\t<img id=\"picture\" src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("images/" . $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "picture", array()))), "html", null, true);
        echo "\" alt=\"\"/>
\t</div>
\t<div id=\"content\">
\t\t";
        // line 30
        $this->displayBlock('content', $context, $blocks);
        // line 31
        echo "\t</div>
\t<div id=\"footer\">
\t\t";
        // line 33
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()), "footer", array());
        echo "
\t</div>
";
    }

    // line 30
    public function block_content($context, array $blocks = array())
    {
    }

    // line 37
    public function block_javascripts($context, array $blocks = array())
    {
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
        return array (  120 => 37,  115 => 30,  108 => 33,  104 => 31,  102 => 30,  96 => 27,  92 => 26,  87 => 24,  83 => 23,  80 => 22,  77 => 21,  71 => 18,  66 => 17,  63 => 16,  58 => 13,  50 => 9,  47 => 8,  44 => 7,  37 => 4,  34 => 3,  11 => 1,);
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
/* 	<div id="footer">*/
/* 		{{ page.footer.footer | raw}}*/
/* 	</div>*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/* {% endblock %}*/
