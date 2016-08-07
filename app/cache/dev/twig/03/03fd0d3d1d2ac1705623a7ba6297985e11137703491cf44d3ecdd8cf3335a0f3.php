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
        $__internal_b6a1ee7692e777c463aac27c108268391f99c6b980b548e4617b04ec11bf4799 = $this->env->getExtension("native_profiler");
        $__internal_b6a1ee7692e777c463aac27c108268391f99c6b980b548e4617b04ec11bf4799->enter($__internal_b6a1ee7692e777c463aac27c108268391f99c6b980b548e4617b04ec11bf4799_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b6a1ee7692e777c463aac27c108268391f99c6b980b548e4617b04ec11bf4799->leave($__internal_b6a1ee7692e777c463aac27c108268391f99c6b980b548e4617b04ec11bf4799_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0374cdb1aa295802e29a1a107b4bdb24bfbb1b63e94b5eabde70968393cf6e14 = $this->env->getExtension("native_profiler");
        $__internal_0374cdb1aa295802e29a1a107b4bdb24bfbb1b63e94b5eabde70968393cf6e14->enter($__internal_0374cdb1aa295802e29a1a107b4bdb24bfbb1b63e94b5eabde70968393cf6e14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_0374cdb1aa295802e29a1a107b4bdb24bfbb1b63e94b5eabde70968393cf6e14->leave($__internal_0374cdb1aa295802e29a1a107b4bdb24bfbb1b63e94b5eabde70968393cf6e14_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_64377a58ada72aadb540cc62282e8477d0319099d998a1e593307f5508ed492d = $this->env->getExtension("native_profiler");
        $__internal_64377a58ada72aadb540cc62282e8477d0319099d998a1e593307f5508ed492d->enter($__internal_64377a58ada72aadb540cc62282e8477d0319099d998a1e593307f5508ed492d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/cms.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
";
        
        $__internal_64377a58ada72aadb540cc62282e8477d0319099d998a1e593307f5508ed492d->leave($__internal_64377a58ada72aadb540cc62282e8477d0319099d998a1e593307f5508ed492d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9e4288a82e1df4ed857c7bfea3725551bda7c4c167ee85d3993e34b3c232d5f2 = $this->env->getExtension("native_profiler");
        $__internal_9e4288a82e1df4ed857c7bfea3725551bda7c4c167ee85d3993e34b3c232d5f2->enter($__internal_9e4288a82e1df4ed857c7bfea3725551bda7c4c167ee85d3993e34b3c232d5f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9e4288a82e1df4ed857c7bfea3725551bda7c4c167ee85d3993e34b3c232d5f2->leave($__internal_9e4288a82e1df4ed857c7bfea3725551bda7c4c167ee85d3993e34b3c232d5f2_prof);

    }

    // line 26
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_87b71b112e134789069c05b46d930c11c6676f11c37138565d8edff919b472c6 = $this->env->getExtension("native_profiler");
        $__internal_87b71b112e134789069c05b46d930c11c6676f11c37138565d8edff919b472c6->enter($__internal_87b71b112e134789069c05b46d930c11c6676f11c37138565d8edff919b472c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        
        $__internal_87b71b112e134789069c05b46d930c11c6676f11c37138565d8edff919b472c6->leave($__internal_87b71b112e134789069c05b46d930c11c6676f11c37138565d8edff919b472c6_prof);

    }

    // line 28
    public function block_content($context, array $blocks = array())
    {
        $__internal_d593c6768f3aa3ce638dcc576476c8483397964e7ab7f2acf8c7fac1017ea129 = $this->env->getExtension("native_profiler");
        $__internal_d593c6768f3aa3ce638dcc576476c8483397964e7ab7f2acf8c7fac1017ea129->enter($__internal_d593c6768f3aa3ce638dcc576476c8483397964e7ab7f2acf8c7fac1017ea129_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        echo "content";
        
        $__internal_d593c6768f3aa3ce638dcc576476c8483397964e7ab7f2acf8c7fac1017ea129->leave($__internal_d593c6768f3aa3ce638dcc576476c8483397964e7ab7f2acf8c7fac1017ea129_prof);

    }

    // line 35
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_91dd474e4b11a47dd5ba8f16caea8aab74c0bbac302c39c238339f7c7c442637 = $this->env->getExtension("native_profiler");
        $__internal_91dd474e4b11a47dd5ba8f16caea8aab74c0bbac302c39c238339f7c7c442637->enter($__internal_91dd474e4b11a47dd5ba8f16caea8aab74c0bbac302c39c238339f7c7c442637_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_91dd474e4b11a47dd5ba8f16caea8aab74c0bbac302c39c238339f7c7c442637->leave($__internal_91dd474e4b11a47dd5ba8f16caea8aab74c0bbac302c39c238339f7c7c442637_prof);

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
