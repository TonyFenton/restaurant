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
        $__internal_a23ae90feed373a5afd593a8b608726ebb11553849f300fc24c161fad895af95 = $this->env->getExtension("native_profiler");
        $__internal_a23ae90feed373a5afd593a8b608726ebb11553849f300fc24c161fad895af95->enter($__internal_a23ae90feed373a5afd593a8b608726ebb11553849f300fc24c161fad895af95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a23ae90feed373a5afd593a8b608726ebb11553849f300fc24c161fad895af95->leave($__internal_a23ae90feed373a5afd593a8b608726ebb11553849f300fc24c161fad895af95_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c99cf03c0bf7091cca04bc57df6b1482cdf6d89cbd4b854bbc34d5971f43e401 = $this->env->getExtension("native_profiler");
        $__internal_c99cf03c0bf7091cca04bc57df6b1482cdf6d89cbd4b854bbc34d5971f43e401->enter($__internal_c99cf03c0bf7091cca04bc57df6b1482cdf6d89cbd4b854bbc34d5971f43e401_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_c99cf03c0bf7091cca04bc57df6b1482cdf6d89cbd4b854bbc34d5971f43e401->leave($__internal_c99cf03c0bf7091cca04bc57df6b1482cdf6d89cbd4b854bbc34d5971f43e401_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7d7a6f123c209d15760abb738bc05337b71e0c3b242f63773d78b16d5d48f10c = $this->env->getExtension("native_profiler");
        $__internal_7d7a6f123c209d15760abb738bc05337b71e0c3b242f63773d78b16d5d48f10c->enter($__internal_7d7a6f123c209d15760abb738bc05337b71e0c3b242f63773d78b16d5d48f10c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/cms.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
";
        
        $__internal_7d7a6f123c209d15760abb738bc05337b71e0c3b242f63773d78b16d5d48f10c->leave($__internal_7d7a6f123c209d15760abb738bc05337b71e0c3b242f63773d78b16d5d48f10c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f8b436df89348abea45cdbe753026a3e4b5cfa415391e5b83993e600ea8cbaa2 = $this->env->getExtension("native_profiler");
        $__internal_f8b436df89348abea45cdbe753026a3e4b5cfa415391e5b83993e600ea8cbaa2->enter($__internal_f8b436df89348abea45cdbe753026a3e4b5cfa415391e5b83993e600ea8cbaa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f8b436df89348abea45cdbe753026a3e4b5cfa415391e5b83993e600ea8cbaa2->leave($__internal_f8b436df89348abea45cdbe753026a3e4b5cfa415391e5b83993e600ea8cbaa2_prof);

    }

    // line 26
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_2b3a347336b49698e55f486b799e5edb752e9aa0327e55b66797981d48e5ae8f = $this->env->getExtension("native_profiler");
        $__internal_2b3a347336b49698e55f486b799e5edb752e9aa0327e55b66797981d48e5ae8f->enter($__internal_2b3a347336b49698e55f486b799e5edb752e9aa0327e55b66797981d48e5ae8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        
        $__internal_2b3a347336b49698e55f486b799e5edb752e9aa0327e55b66797981d48e5ae8f->leave($__internal_2b3a347336b49698e55f486b799e5edb752e9aa0327e55b66797981d48e5ae8f_prof);

    }

    // line 28
    public function block_content($context, array $blocks = array())
    {
        $__internal_e7d047c68c4716a17603402824348eb0debf6010c70a4f0c510be839333124a4 = $this->env->getExtension("native_profiler");
        $__internal_e7d047c68c4716a17603402824348eb0debf6010c70a4f0c510be839333124a4->enter($__internal_e7d047c68c4716a17603402824348eb0debf6010c70a4f0c510be839333124a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        echo "content";
        
        $__internal_e7d047c68c4716a17603402824348eb0debf6010c70a4f0c510be839333124a4->leave($__internal_e7d047c68c4716a17603402824348eb0debf6010c70a4f0c510be839333124a4_prof);

    }

    // line 35
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_74aca2576e40c0700e45ef259705917c96f9cd1362e88f5cd146cbb7f2c7a4ae = $this->env->getExtension("native_profiler");
        $__internal_74aca2576e40c0700e45ef259705917c96f9cd1362e88f5cd146cbb7f2c7a4ae->enter($__internal_74aca2576e40c0700e45ef259705917c96f9cd1362e88f5cd146cbb7f2c7a4ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_74aca2576e40c0700e45ef259705917c96f9cd1362e88f5cd146cbb7f2c7a4ae->leave($__internal_74aca2576e40c0700e45ef259705917c96f9cd1362e88f5cd146cbb7f2c7a4ae_prof);

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
