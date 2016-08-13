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
        $__internal_5c43d9a290f01691e4ba329210f7ddb45ef1459c8762ca0eb6384aff2d8395bd = $this->env->getExtension("native_profiler");
        $__internal_5c43d9a290f01691e4ba329210f7ddb45ef1459c8762ca0eb6384aff2d8395bd->enter($__internal_5c43d9a290f01691e4ba329210f7ddb45ef1459c8762ca0eb6384aff2d8395bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c43d9a290f01691e4ba329210f7ddb45ef1459c8762ca0eb6384aff2d8395bd->leave($__internal_5c43d9a290f01691e4ba329210f7ddb45ef1459c8762ca0eb6384aff2d8395bd_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a1b5b90c0ec34dcd3c3251cf74c2933186fe0c991ca189473feb3510baf4c7ea = $this->env->getExtension("native_profiler");
        $__internal_a1b5b90c0ec34dcd3c3251cf74c2933186fe0c991ca189473feb3510baf4c7ea->enter($__internal_a1b5b90c0ec34dcd3c3251cf74c2933186fe0c991ca189473feb3510baf4c7ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_a1b5b90c0ec34dcd3c3251cf74c2933186fe0c991ca189473feb3510baf4c7ea->leave($__internal_a1b5b90c0ec34dcd3c3251cf74c2933186fe0c991ca189473feb3510baf4c7ea_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e77b9c56a9c522be85d31e0f198a13b12e44c8451de20801f87ce2ea4bb9feb5 = $this->env->getExtension("native_profiler");
        $__internal_e77b9c56a9c522be85d31e0f198a13b12e44c8451de20801f87ce2ea4bb9feb5->enter($__internal_e77b9c56a9c522be85d31e0f198a13b12e44c8451de20801f87ce2ea4bb9feb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/cms.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
";
        
        $__internal_e77b9c56a9c522be85d31e0f198a13b12e44c8451de20801f87ce2ea4bb9feb5->leave($__internal_e77b9c56a9c522be85d31e0f198a13b12e44c8451de20801f87ce2ea4bb9feb5_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c20eac1548c0488b14e1087531ead752e610a7f86449e0ba907407490718660a = $this->env->getExtension("native_profiler");
        $__internal_c20eac1548c0488b14e1087531ead752e610a7f86449e0ba907407490718660a->enter($__internal_c20eac1548c0488b14e1087531ead752e610a7f86449e0ba907407490718660a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c20eac1548c0488b14e1087531ead752e610a7f86449e0ba907407490718660a->leave($__internal_c20eac1548c0488b14e1087531ead752e610a7f86449e0ba907407490718660a_prof);

    }

    // line 26
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_22241c9bf61e8c4b90e2b56e86ed4a55bcc2358ecfca46f5067083b3d679582d = $this->env->getExtension("native_profiler");
        $__internal_22241c9bf61e8c4b90e2b56e86ed4a55bcc2358ecfca46f5067083b3d679582d->enter($__internal_22241c9bf61e8c4b90e2b56e86ed4a55bcc2358ecfca46f5067083b3d679582d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        
        $__internal_22241c9bf61e8c4b90e2b56e86ed4a55bcc2358ecfca46f5067083b3d679582d->leave($__internal_22241c9bf61e8c4b90e2b56e86ed4a55bcc2358ecfca46f5067083b3d679582d_prof);

    }

    // line 28
    public function block_content($context, array $blocks = array())
    {
        $__internal_42a41db471d599757a66a02a62a4dab994f0d66de7695d02c46d08fb96c692bc = $this->env->getExtension("native_profiler");
        $__internal_42a41db471d599757a66a02a62a4dab994f0d66de7695d02c46d08fb96c692bc->enter($__internal_42a41db471d599757a66a02a62a4dab994f0d66de7695d02c46d08fb96c692bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        echo "content";
        
        $__internal_42a41db471d599757a66a02a62a4dab994f0d66de7695d02c46d08fb96c692bc->leave($__internal_42a41db471d599757a66a02a62a4dab994f0d66de7695d02c46d08fb96c692bc_prof);

    }

    // line 35
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a5cceca062f895430a826b7cc150ec01d0ed48b1ab38adc338e7768b1eb65593 = $this->env->getExtension("native_profiler");
        $__internal_a5cceca062f895430a826b7cc150ec01d0ed48b1ab38adc338e7768b1eb65593->enter($__internal_a5cceca062f895430a826b7cc150ec01d0ed48b1ab38adc338e7768b1eb65593_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_a5cceca062f895430a826b7cc150ec01d0ed48b1ab38adc338e7768b1eb65593->leave($__internal_a5cceca062f895430a826b7cc150ec01d0ed48b1ab38adc338e7768b1eb65593_prof);

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
