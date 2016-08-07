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
        $__internal_efe33186a987069b62aec9bbd8a40af0f664605d36a63e4827961c7525bd206c = $this->env->getExtension("native_profiler");
        $__internal_efe33186a987069b62aec9bbd8a40af0f664605d36a63e4827961c7525bd206c->enter($__internal_efe33186a987069b62aec9bbd8a40af0f664605d36a63e4827961c7525bd206c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_efe33186a987069b62aec9bbd8a40af0f664605d36a63e4827961c7525bd206c->leave($__internal_efe33186a987069b62aec9bbd8a40af0f664605d36a63e4827961c7525bd206c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3a4f1f6f26d56fe677c0f8cd0f65a52d784119521c5637d14171c42699edc7e8 = $this->env->getExtension("native_profiler");
        $__internal_3a4f1f6f26d56fe677c0f8cd0f65a52d784119521c5637d14171c42699edc7e8->enter($__internal_3a4f1f6f26d56fe677c0f8cd0f65a52d784119521c5637d14171c42699edc7e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_3a4f1f6f26d56fe677c0f8cd0f65a52d784119521c5637d14171c42699edc7e8->leave($__internal_3a4f1f6f26d56fe677c0f8cd0f65a52d784119521c5637d14171c42699edc7e8_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_abed785e896106b7b7e7530bc3fa8439ed01e78832a8f98a3e18e47ed51d4789 = $this->env->getExtension("native_profiler");
        $__internal_abed785e896106b7b7e7530bc3fa8439ed01e78832a8f98a3e18e47ed51d4789->enter($__internal_abed785e896106b7b7e7530bc3fa8439ed01e78832a8f98a3e18e47ed51d4789_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/cms.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
";
        
        $__internal_abed785e896106b7b7e7530bc3fa8439ed01e78832a8f98a3e18e47ed51d4789->leave($__internal_abed785e896106b7b7e7530bc3fa8439ed01e78832a8f98a3e18e47ed51d4789_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_cb99a19e2661f54e870382aa73cc96d81d56b128c5b5f507b5191d29f8555af6 = $this->env->getExtension("native_profiler");
        $__internal_cb99a19e2661f54e870382aa73cc96d81d56b128c5b5f507b5191d29f8555af6->enter($__internal_cb99a19e2661f54e870382aa73cc96d81d56b128c5b5f507b5191d29f8555af6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_cb99a19e2661f54e870382aa73cc96d81d56b128c5b5f507b5191d29f8555af6->leave($__internal_cb99a19e2661f54e870382aa73cc96d81d56b128c5b5f507b5191d29f8555af6_prof);

    }

    // line 26
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_d89fb633249383cbded278e79255b5390917ae47903e14a760ad9bb19d7c7fa4 = $this->env->getExtension("native_profiler");
        $__internal_d89fb633249383cbded278e79255b5390917ae47903e14a760ad9bb19d7c7fa4->enter($__internal_d89fb633249383cbded278e79255b5390917ae47903e14a760ad9bb19d7c7fa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        
        $__internal_d89fb633249383cbded278e79255b5390917ae47903e14a760ad9bb19d7c7fa4->leave($__internal_d89fb633249383cbded278e79255b5390917ae47903e14a760ad9bb19d7c7fa4_prof);

    }

    // line 28
    public function block_content($context, array $blocks = array())
    {
        $__internal_abd3892ab654950f9e1a70b9bc34af21f61d286aaad2f26cdbf533d17b8e139c = $this->env->getExtension("native_profiler");
        $__internal_abd3892ab654950f9e1a70b9bc34af21f61d286aaad2f26cdbf533d17b8e139c->enter($__internal_abd3892ab654950f9e1a70b9bc34af21f61d286aaad2f26cdbf533d17b8e139c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        echo "content";
        
        $__internal_abd3892ab654950f9e1a70b9bc34af21f61d286aaad2f26cdbf533d17b8e139c->leave($__internal_abd3892ab654950f9e1a70b9bc34af21f61d286aaad2f26cdbf533d17b8e139c_prof);

    }

    // line 35
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_20a42da8dffe4e25aebdd0ab509ea75322c9caebc1d1ddfdd0bd4c24b2888647 = $this->env->getExtension("native_profiler");
        $__internal_20a42da8dffe4e25aebdd0ab509ea75322c9caebc1d1ddfdd0bd4c24b2888647->enter($__internal_20a42da8dffe4e25aebdd0ab509ea75322c9caebc1d1ddfdd0bd4c24b2888647_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_20a42da8dffe4e25aebdd0ab509ea75322c9caebc1d1ddfdd0bd4c24b2888647->leave($__internal_20a42da8dffe4e25aebdd0ab509ea75322c9caebc1d1ddfdd0bd4c24b2888647_prof);

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
