<?php

/* admin/layout.html.twig */
class __TwigTemplate_7eef93ec0187ac6f683d7e349a36cfbfe1fbf60e0da00c08c984b2e5144f748f extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/cms.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
";
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
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
    }

    // line 26
    public function block_breadcrumb($context, array $blocks = array())
    {
    }

    // line 28
    public function block_content($context, array $blocks = array())
    {
        echo "content";
    }

    // line 35
    public function block_javascripts($context, array $blocks = array())
    {
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
        return array (  103 => 35,  97 => 28,  92 => 26,  84 => 29,  82 => 28,  79 => 27,  77 => 26,  67 => 19,  63 => 18,  55 => 12,  52 => 11,  46 => 8,  41 => 7,  38 => 6,  33 => 3,  11 => 1,);
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
