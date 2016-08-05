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
        $__internal_9a6fbf308fb1b13fd2b1b78b8f826ad79e91e0b92734678fdf457dc081d188f4 = $this->env->getExtension("native_profiler");
        $__internal_9a6fbf308fb1b13fd2b1b78b8f826ad79e91e0b92734678fdf457dc081d188f4->enter($__internal_9a6fbf308fb1b13fd2b1b78b8f826ad79e91e0b92734678fdf457dc081d188f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a6fbf308fb1b13fd2b1b78b8f826ad79e91e0b92734678fdf457dc081d188f4->leave($__internal_9a6fbf308fb1b13fd2b1b78b8f826ad79e91e0b92734678fdf457dc081d188f4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c0a976e928d89d25933a97c080a54e06a083e4d9fa0e64ce1229b70a73526c9b = $this->env->getExtension("native_profiler");
        $__internal_c0a976e928d89d25933a97c080a54e06a083e4d9fa0e64ce1229b70a73526c9b->enter($__internal_c0a976e928d89d25933a97c080a54e06a083e4d9fa0e64ce1229b70a73526c9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_c0a976e928d89d25933a97c080a54e06a083e4d9fa0e64ce1229b70a73526c9b->leave($__internal_c0a976e928d89d25933a97c080a54e06a083e4d9fa0e64ce1229b70a73526c9b_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5398aba45ba564683b3130f3177caf10db458134067dac1bf42fbc0e2ac7557d = $this->env->getExtension("native_profiler");
        $__internal_5398aba45ba564683b3130f3177caf10db458134067dac1bf42fbc0e2ac7557d->enter($__internal_5398aba45ba564683b3130f3177caf10db458134067dac1bf42fbc0e2ac7557d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/cms.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
";
        
        $__internal_5398aba45ba564683b3130f3177caf10db458134067dac1bf42fbc0e2ac7557d->leave($__internal_5398aba45ba564683b3130f3177caf10db458134067dac1bf42fbc0e2ac7557d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_480b0e4bdcddcfd8c7c07369b8ac3f319bbc41c7b50898aa44ed8e5e314d30d2 = $this->env->getExtension("native_profiler");
        $__internal_480b0e4bdcddcfd8c7c07369b8ac3f319bbc41c7b50898aa44ed8e5e314d30d2->enter($__internal_480b0e4bdcddcfd8c7c07369b8ac3f319bbc41c7b50898aa44ed8e5e314d30d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_480b0e4bdcddcfd8c7c07369b8ac3f319bbc41c7b50898aa44ed8e5e314d30d2->leave($__internal_480b0e4bdcddcfd8c7c07369b8ac3f319bbc41c7b50898aa44ed8e5e314d30d2_prof);

    }

    // line 26
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_4c4f59697b54877084c7dcf69682478aff004e113c88b576d6f300d72199a4cd = $this->env->getExtension("native_profiler");
        $__internal_4c4f59697b54877084c7dcf69682478aff004e113c88b576d6f300d72199a4cd->enter($__internal_4c4f59697b54877084c7dcf69682478aff004e113c88b576d6f300d72199a4cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        
        $__internal_4c4f59697b54877084c7dcf69682478aff004e113c88b576d6f300d72199a4cd->leave($__internal_4c4f59697b54877084c7dcf69682478aff004e113c88b576d6f300d72199a4cd_prof);

    }

    // line 28
    public function block_content($context, array $blocks = array())
    {
        $__internal_de9c9c1b4de3b00fb51d365cd7ecdc9ea5c9d946e62f98536cb8182892be38ec = $this->env->getExtension("native_profiler");
        $__internal_de9c9c1b4de3b00fb51d365cd7ecdc9ea5c9d946e62f98536cb8182892be38ec->enter($__internal_de9c9c1b4de3b00fb51d365cd7ecdc9ea5c9d946e62f98536cb8182892be38ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        echo "content";
        
        $__internal_de9c9c1b4de3b00fb51d365cd7ecdc9ea5c9d946e62f98536cb8182892be38ec->leave($__internal_de9c9c1b4de3b00fb51d365cd7ecdc9ea5c9d946e62f98536cb8182892be38ec_prof);

    }

    // line 35
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_512d3a89c57b4a69552f0a6be075959b96ecaac11a2a7f2afc31e748e67597c1 = $this->env->getExtension("native_profiler");
        $__internal_512d3a89c57b4a69552f0a6be075959b96ecaac11a2a7f2afc31e748e67597c1->enter($__internal_512d3a89c57b4a69552f0a6be075959b96ecaac11a2a7f2afc31e748e67597c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_512d3a89c57b4a69552f0a6be075959b96ecaac11a2a7f2afc31e748e67597c1->leave($__internal_512d3a89c57b4a69552f0a6be075959b96ecaac11a2a7f2afc31e748e67597c1_prof);

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
