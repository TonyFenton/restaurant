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
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_05c7be5560473554bfe87cdf41055b9cf35a009525042f07615c7a91fd80f2f3 = $this->env->getExtension("native_profiler");
        $__internal_05c7be5560473554bfe87cdf41055b9cf35a009525042f07615c7a91fd80f2f3->enter($__internal_05c7be5560473554bfe87cdf41055b9cf35a009525042f07615c7a91fd80f2f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_05c7be5560473554bfe87cdf41055b9cf35a009525042f07615c7a91fd80f2f3->leave($__internal_05c7be5560473554bfe87cdf41055b9cf35a009525042f07615c7a91fd80f2f3_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b1cba6bb92e20dd0bc32e260bbb73d4b7d979b02b18d2e2796c6d5e5645f1858 = $this->env->getExtension("native_profiler");
        $__internal_b1cba6bb92e20dd0bc32e260bbb73d4b7d979b02b18d2e2796c6d5e5645f1858->enter($__internal_b1cba6bb92e20dd0bc32e260bbb73d4b7d979b02b18d2e2796c6d5e5645f1858_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/admin/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
";
        
        $__internal_b1cba6bb92e20dd0bc32e260bbb73d4b7d979b02b18d2e2796c6d5e5645f1858->leave($__internal_b1cba6bb92e20dd0bc32e260bbb73d4b7d979b02b18d2e2796c6d5e5645f1858_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_37b1d749c9514f815a3cf2b15f7b5942160f68ab0561f4b7c34d4c466d1cb855 = $this->env->getExtension("native_profiler");
        $__internal_37b1d749c9514f815a3cf2b15f7b5942160f68ab0561f4b7c34d4c466d1cb855->enter($__internal_37b1d749c9514f815a3cf2b15f7b5942160f68ab0561f4b7c34d4c466d1cb855_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "\t<nav class=\"navbar navbar-default\" id=\"main_admin_nav\">
\t\t<div class=\"container\">
\t\t\t<div class=\"navbar-header\">
\t\t\t\t<p>Najlepsiejszy CMS</p>
\t\t\t</div>
\t\t</div>
\t</nav>
\t
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-12 col-sm-3\">
\t\t\t\t<ul id=\"secondary_nav\" class=\"nav nav-pills nav-stacked list-group\">
\t\t\t\t\t<li role=\"presentation\" class=\"list-group-item\">
\t\t\t\t\t\t<a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("admin_page_index");
        echo "\">Strony</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li role=\"presentation\" class=\"list-group-item\">
\t\t\t\t\t\t<a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("admin_footer_index");
        echo "\">Stopki</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<div class=\"col-xs-12 col-sm-9\">
\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t<li><a href=\"#\">Panel</a></li>
\t\t\t\t\t";
        // line 32
        $this->displayBlock('breadcrumb', $context, $blocks);
        // line 33
        echo "\t\t\t\t</ol>
\t\t\t\t";
        // line 34
        $this->displayBlock('content', $context, $blocks);
        // line 35
        echo "\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_37b1d749c9514f815a3cf2b15f7b5942160f68ab0561f4b7c34d4c466d1cb855->leave($__internal_37b1d749c9514f815a3cf2b15f7b5942160f68ab0561f4b7c34d4c466d1cb855_prof);

    }

    // line 32
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_ed161591ef8396e76a9795eb7689575248e18890fde3767bcd94cb34add1e336 = $this->env->getExtension("native_profiler");
        $__internal_ed161591ef8396e76a9795eb7689575248e18890fde3767bcd94cb34add1e336->enter($__internal_ed161591ef8396e76a9795eb7689575248e18890fde3767bcd94cb34add1e336_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        
        $__internal_ed161591ef8396e76a9795eb7689575248e18890fde3767bcd94cb34add1e336->leave($__internal_ed161591ef8396e76a9795eb7689575248e18890fde3767bcd94cb34add1e336_prof);

    }

    // line 34
    public function block_content($context, array $blocks = array())
    {
        $__internal_70b47b4184b6a3e0b0e6c7fefd5545cc7cc6f25f2284f4d86c5cdac49589ecae = $this->env->getExtension("native_profiler");
        $__internal_70b47b4184b6a3e0b0e6c7fefd5545cc7cc6f25f2284f4d86c5cdac49589ecae->enter($__internal_70b47b4184b6a3e0b0e6c7fefd5545cc7cc6f25f2284f4d86c5cdac49589ecae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_70b47b4184b6a3e0b0e6c7fefd5545cc7cc6f25f2284f4d86c5cdac49589ecae->leave($__internal_70b47b4184b6a3e0b0e6c7fefd5545cc7cc6f25f2284f4d86c5cdac49589ecae_prof);

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
        return array (  122 => 34,  111 => 32,  101 => 35,  99 => 34,  96 => 33,  94 => 32,  84 => 25,  78 => 22,  63 => 9,  57 => 8,  48 => 5,  43 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block stylesheets %}*/
/* 	{{ parent() }}*/
/* 	<link href="{{asset('css/admin/style.css')}}" rel="stylesheet" />*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* 	<nav class="navbar navbar-default" id="main_admin_nav">*/
/* 		<div class="container">*/
/* 			<div class="navbar-header">*/
/* 				<p>Najlepsiejszy CMS</p>*/
/* 			</div>*/
/* 		</div>*/
/* 	</nav>*/
/* 	*/
/* 	<div class="container">*/
/* 		<div class="row">*/
/* 			<div class="col-xs-12 col-sm-3">*/
/* 				<ul id="secondary_nav" class="nav nav-pills nav-stacked list-group">*/
/* 					<li role="presentation" class="list-group-item">*/
/* 						<a href="{{ path('admin_page_index') }}">Strony</a>*/
/* 					</li>*/
/* 					<li role="presentation" class="list-group-item">*/
/* 						<a href="{{ path('admin_footer_index') }}">Stopki</a>*/
/* 					</li>*/
/* 				</ul>*/
/* 			</div>*/
/* 			<div class="col-xs-12 col-sm-9">*/
/* 				<ol class="breadcrumb">*/
/* 					<li><a href="#">Panel</a></li>*/
/* 					{% block breadcrumb %}{% endblock %}*/
/* 				</ol>*/
/* 				{% block content %}{% endblock %}*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* {% endblock %}*/
