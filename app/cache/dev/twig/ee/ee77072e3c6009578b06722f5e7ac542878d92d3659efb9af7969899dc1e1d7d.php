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
        $__internal_8f140e19e12f23689782b488ee976013e0ff5b3b045bfb89cbf70091e8e91085 = $this->env->getExtension("native_profiler");
        $__internal_8f140e19e12f23689782b488ee976013e0ff5b3b045bfb89cbf70091e8e91085->enter($__internal_8f140e19e12f23689782b488ee976013e0ff5b3b045bfb89cbf70091e8e91085_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f140e19e12f23689782b488ee976013e0ff5b3b045bfb89cbf70091e8e91085->leave($__internal_8f140e19e12f23689782b488ee976013e0ff5b3b045bfb89cbf70091e8e91085_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7ca4c2dfbc1f5e174970c55d3a85e9a8a23e0ab71a96d03972850c1818266726 = $this->env->getExtension("native_profiler");
        $__internal_7ca4c2dfbc1f5e174970c55d3a85e9a8a23e0ab71a96d03972850c1818266726->enter($__internal_7ca4c2dfbc1f5e174970c55d3a85e9a8a23e0ab71a96d03972850c1818266726_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\t";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "title", array()), "html", null, true);
        echo "
";
        
        $__internal_7ca4c2dfbc1f5e174970c55d3a85e9a8a23e0ab71a96d03972850c1818266726->leave($__internal_7ca4c2dfbc1f5e174970c55d3a85e9a8a23e0ab71a96d03972850c1818266726_prof);

    }

    // line 7
    public function block_description($context, array $blocks = array())
    {
        $__internal_70fe51a556684de075c3ae4045e717f94a6294632024cd576a91b199df9e58e9 = $this->env->getExtension("native_profiler");
        $__internal_70fe51a556684de075c3ae4045e717f94a6294632024cd576a91b199df9e58e9->enter($__internal_70fe51a556684de075c3ae4045e717f94a6294632024cd576a91b199df9e58e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        // line 8
        echo "\t";
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "description", array(), "any", false, true), "description", array(), "any", true, true)) {
            // line 9
            echo "\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "description", array()), "description", array()), "html", null, true);
            echo "
\t";
        }
        
        $__internal_70fe51a556684de075c3ae4045e717f94a6294632024cd576a91b199df9e58e9->leave($__internal_70fe51a556684de075c3ae4045e717f94a6294632024cd576a91b199df9e58e9_prof);

    }

    // line 13
    public function block_keywords($context, array $blocks = array())
    {
        $__internal_9b3c6d68bad69b8279853dabd8b60cae4408311b50296c931f810639a834b23b = $this->env->getExtension("native_profiler");
        $__internal_9b3c6d68bad69b8279853dabd8b60cae4408311b50296c931f810639a834b23b->enter($__internal_9b3c6d68bad69b8279853dabd8b60cae4408311b50296c931f810639a834b23b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "keywords"));

        
        $__internal_9b3c6d68bad69b8279853dabd8b60cae4408311b50296c931f810639a834b23b->leave($__internal_9b3c6d68bad69b8279853dabd8b60cae4408311b50296c931f810639a834b23b_prof);

    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a625dd8566df476a86730fbe2764c45e2ef1713e2bbef31a1f9744a9c1606e29 = $this->env->getExtension("native_profiler");
        $__internal_a625dd8566df476a86730fbe2764c45e2ef1713e2bbef31a1f9744a9c1606e29->enter($__internal_a625dd8566df476a86730fbe2764c45e2ef1713e2bbef31a1f9744a9c1606e29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 17
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
";
        
        $__internal_a625dd8566df476a86730fbe2764c45e2ef1713e2bbef31a1f9744a9c1606e29->leave($__internal_a625dd8566df476a86730fbe2764c45e2ef1713e2bbef31a1f9744a9c1606e29_prof);

    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        $__internal_a63541c1a3a570699f8544d2ab7398e7f7640d297bf274af6f3b907d88a61a98 = $this->env->getExtension("native_profiler");
        $__internal_a63541c1a3a570699f8544d2ab7398e7f7640d297bf274af6f3b907d88a61a98->enter($__internal_a63541c1a3a570699f8544d2ab7398e7f7640d297bf274af6f3b907d88a61a98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a63541c1a3a570699f8544d2ab7398e7f7640d297bf274af6f3b907d88a61a98->leave($__internal_a63541c1a3a570699f8544d2ab7398e7f7640d297bf274af6f3b907d88a61a98_prof);

    }

    // line 30
    public function block_content($context, array $blocks = array())
    {
        $__internal_c5fb791d95590c8cbe489eefd8b7f33680cd41b772376e6220262c45080feb87 = $this->env->getExtension("native_profiler");
        $__internal_c5fb791d95590c8cbe489eefd8b7f33680cd41b772376e6220262c45080feb87->enter($__internal_c5fb791d95590c8cbe489eefd8b7f33680cd41b772376e6220262c45080feb87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_c5fb791d95590c8cbe489eefd8b7f33680cd41b772376e6220262c45080feb87->leave($__internal_c5fb791d95590c8cbe489eefd8b7f33680cd41b772376e6220262c45080feb87_prof);

    }

    // line 39
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_02503472d0f7a151c84f7f4669b2481c467abdead733d31d965685e8ff72d423 = $this->env->getExtension("native_profiler");
        $__internal_02503472d0f7a151c84f7f4669b2481c467abdead733d31d965685e8ff72d423->enter($__internal_02503472d0f7a151c84f7f4669b2481c467abdead733d31d965685e8ff72d423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_02503472d0f7a151c84f7f4669b2481c467abdead733d31d965685e8ff72d423->leave($__internal_02503472d0f7a151c84f7f4669b2481c467abdead733d31d965685e8ff72d423_prof);

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
