<?php

/* admin/layout.html.twig */
class __TwigTemplate_aa49a84dc2d8051467d6f768b2cb4f8d32ebf8365ef18bf0a853c9ddc4ef1ab0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "admin/layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_736de7eb0831e3c23e6204b1f026676f7e9d868f28ddd5eb4f37c936917df1c3 = $this->env->getExtension("native_profiler");
        $__internal_736de7eb0831e3c23e6204b1f026676f7e9d868f28ddd5eb4f37c936917df1c3->enter($__internal_736de7eb0831e3c23e6204b1f026676f7e9d868f28ddd5eb4f37c936917df1c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_736de7eb0831e3c23e6204b1f026676f7e9d868f28ddd5eb4f37c936917df1c3->leave($__internal_736de7eb0831e3c23e6204b1f026676f7e9d868f28ddd5eb4f37c936917df1c3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6dabba3dd44c2df9606c44b533d63adfbd7f9c9bb7bbb5cbed4d8778e251a620 = $this->env->getExtension("native_profiler");
        $__internal_6dabba3dd44c2df9606c44b533d63adfbd7f9c9bb7bbb5cbed4d8778e251a620->enter($__internal_6dabba3dd44c2df9606c44b533d63adfbd7f9c9bb7bbb5cbed4d8778e251a620_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_6dabba3dd44c2df9606c44b533d63adfbd7f9c9bb7bbb5cbed4d8778e251a620->leave($__internal_6dabba3dd44c2df9606c44b533d63adfbd7f9c9bb7bbb5cbed4d8778e251a620_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_593ed69ef03ca033856b93cdd8dc38cfc6bf64644865873adbdb6e5c2499fd9e = $this->env->getExtension("native_profiler");
        $__internal_593ed69ef03ca033856b93cdd8dc38cfc6bf64644865873adbdb6e5c2499fd9e->enter($__internal_593ed69ef03ca033856b93cdd8dc38cfc6bf64644865873adbdb6e5c2499fd9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/cms.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
";
        
        $__internal_593ed69ef03ca033856b93cdd8dc38cfc6bf64644865873adbdb6e5c2499fd9e->leave($__internal_593ed69ef03ca033856b93cdd8dc38cfc6bf64644865873adbdb6e5c2499fd9e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d6e7a7a8fb5d0bdea9f7f2da1df832d5ed9fc7ab5894ce8c62f999026e98c2e7 = $this->env->getExtension("native_profiler");
        $__internal_d6e7a7a8fb5d0bdea9f7f2da1df832d5ed9fc7ab5894ce8c62f999026e98c2e7->enter($__internal_d6e7a7a8fb5d0bdea9f7f2da1df832d5ed9fc7ab5894ce8c62f999026e98c2e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "\t<div id=\"wrapper\">
\t\t<div id=\"header\">
\t\t\t<h1>Najlepsiejszy CMS</h1>
\t\t</div>
\t\t<div id=\"nav\">
\t\t\t<ul>
\t\t\t\t<li><a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("admin_page_index");
        echo "\">Strony</a></li>
\t\t\t\t<li><a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("admin_footer_index");
        echo "\">Stopki</a></li>
\t\t\t\t<li><a href=\"#\">Wyloguj</a></li>
\t\t\t</ul>
\t\t</div>
\t\t<div id=\"content\">
\t\t\t<div id=\"breadcrumb\">
\t\t\t\t<a href=#>Panel</a>
\t\t\t\t";
        // line 26
        $this->displayBlock('breadcrumb', $context, $blocks);
        // line 27
        echo "\t\t\t</div>
\t\t\t";
        // line 28
        $this->displayBlock('content', $context, $blocks);
        // line 29
        echo "\t\t</div>
\t\t<div id=\"footer\">
\t\t</div>
\t</div>
";
        
        $__internal_d6e7a7a8fb5d0bdea9f7f2da1df832d5ed9fc7ab5894ce8c62f999026e98c2e7->leave($__internal_d6e7a7a8fb5d0bdea9f7f2da1df832d5ed9fc7ab5894ce8c62f999026e98c2e7_prof);

    }

    // line 26
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_bed9039a961a64f8a482831f927c8520e5f908eecb6d0236d8859fe40cf2a64e = $this->env->getExtension("native_profiler");
        $__internal_bed9039a961a64f8a482831f927c8520e5f908eecb6d0236d8859fe40cf2a64e->enter($__internal_bed9039a961a64f8a482831f927c8520e5f908eecb6d0236d8859fe40cf2a64e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        
        $__internal_bed9039a961a64f8a482831f927c8520e5f908eecb6d0236d8859fe40cf2a64e->leave($__internal_bed9039a961a64f8a482831f927c8520e5f908eecb6d0236d8859fe40cf2a64e_prof);

    }

    // line 28
    public function block_content($context, array $blocks = array())
    {
        $__internal_24678a488e87cf531d372ee3dc39d3a82e5984fb1c7bf32678ab2fda926df9fb = $this->env->getExtension("native_profiler");
        $__internal_24678a488e87cf531d372ee3dc39d3a82e5984fb1c7bf32678ab2fda926df9fb->enter($__internal_24678a488e87cf531d372ee3dc39d3a82e5984fb1c7bf32678ab2fda926df9fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        echo "content";
        
        $__internal_24678a488e87cf531d372ee3dc39d3a82e5984fb1c7bf32678ab2fda926df9fb->leave($__internal_24678a488e87cf531d372ee3dc39d3a82e5984fb1c7bf32678ab2fda926df9fb_prof);

    }

    // line 35
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6d1bf6c66c0b40439e982369a8a8b0e19efb2caca2e8356d6ea2acebef96ca8b = $this->env->getExtension("native_profiler");
        $__internal_6d1bf6c66c0b40439e982369a8a8b0e19efb2caca2e8356d6ea2acebef96ca8b->enter($__internal_6d1bf6c66c0b40439e982369a8a8b0e19efb2caca2e8356d6ea2acebef96ca8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6d1bf6c66c0b40439e982369a8a8b0e19efb2caca2e8356d6ea2acebef96ca8b->leave($__internal_6d1bf6c66c0b40439e982369a8a8b0e19efb2caca2e8356d6ea2acebef96ca8b_prof);

    }

    public function getTemplateName()
    {
        return "admin/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 35,  127 => 28,  116 => 26,  105 => 29,  103 => 28,  100 => 27,  98 => 26,  88 => 19,  84 => 18,  76 => 12,  70 => 11,  61 => 8,  56 => 7,  50 => 6,  39 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block title %}*/
/* {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/* 	{{ parent() }}*/
/* 	<link href="{{asset('css/cms.css')}}" rel="stylesheet" />*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* 	<div id="wrapper">*/
/* 		<div id="header">*/
/* 			<h1>Najlepsiejszy CMS</h1>*/
/* 		</div>*/
/* 		<div id="nav">*/
/* 			<ul>*/
/* 				<li><a href="{{ path('admin_page_index') }}">Strony</a></li>*/
/* 				<li><a href="{{ path('admin_footer_index') }}">Stopki</a></li>*/
/* 				<li><a href="#">Wyloguj</a></li>*/
/* 			</ul>*/
/* 		</div>*/
/* 		<div id="content">*/
/* 			<div id="breadcrumb">*/
/* 				<a href=#>Panel</a>*/
/* 				{% block breadcrumb %}{% endblock %}*/
/* 			</div>*/
/* 			{% block content %}content{% endblock %}*/
/* 		</div>*/
/* 		<div id="footer">*/
/* 		</div>*/
/* 	</div>*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/* {% endblock %}*/
