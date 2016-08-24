<?php

/* admin/layout.html.twig */
class __TwigTemplate_aa49a84dc2d8051467d6f768b2cb4f8d32ebf8365ef18bf0a853c9ddc4ef1ab0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/layout.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
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
        $__internal_2bbd930e4ae9a70e53039ff7cdb5878ac368b4e044f6819a75ea1d58aa0030d9 = $this->env->getExtension("native_profiler");
        $__internal_2bbd930e4ae9a70e53039ff7cdb5878ac368b4e044f6819a75ea1d58aa0030d9->enter($__internal_2bbd930e4ae9a70e53039ff7cdb5878ac368b4e044f6819a75ea1d58aa0030d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2bbd930e4ae9a70e53039ff7cdb5878ac368b4e044f6819a75ea1d58aa0030d9->leave($__internal_2bbd930e4ae9a70e53039ff7cdb5878ac368b4e044f6819a75ea1d58aa0030d9_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1f1a782c5c063e3dd34cd891e904102053e4cda9336ae33d14f455f0cc87a6e5 = $this->env->getExtension("native_profiler");
        $__internal_1f1a782c5c063e3dd34cd891e904102053e4cda9336ae33d14f455f0cc87a6e5->enter($__internal_1f1a782c5c063e3dd34cd891e904102053e4cda9336ae33d14f455f0cc87a6e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/admin/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
";
        
        $__internal_1f1a782c5c063e3dd34cd891e904102053e4cda9336ae33d14f455f0cc87a6e5->leave($__internal_1f1a782c5c063e3dd34cd891e904102053e4cda9336ae33d14f455f0cc87a6e5_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_34a20d0661e110fd1352c8b1bc07fa80ba8b125f9e298f95b805f6f2606e9fc9 = $this->env->getExtension("native_profiler");
        $__internal_34a20d0661e110fd1352c8b1bc07fa80ba8b125f9e298f95b805f6f2606e9fc9->enter($__internal_34a20d0661e110fd1352c8b1bc07fa80ba8b125f9e298f95b805f6f2606e9fc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "\t<nav class=\"navbar navbar-default\" id=\"main_admin_nav\">
\t\t<div class=\"container\">
\t\t\t<div class=\"navbar-header\">
\t\t\t\t<p>Najlepsiejszy CMS</p>
\t\t\t</div>
\t\t\t <div>
\t\t\t\t<ul class=\"nav navbar-nav navbar-right\">
\t\t\t\t\t<li><a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\">Wyloguj się</a></li>
\t\t\t\t</ul>
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
        // line 27
        echo $this->env->getExtension('routing')->getPath("admin_page_index");
        echo "\">Strony</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li role=\"presentation\" class=\"list-group-item\">
\t\t\t\t\t\t<a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("admin_footer_index");
        echo "\">Stopki</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li role=\"presentation\" class=\"list-group-item\">
\t\t\t\t\t\t<a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
        echo "\">Moje konto</a>
\t\t\t\t\t</li>
\t\t\t\t\t";
        // line 35
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 36
            echo "\t\t\t\t\t\t<li role=\"presentation\" class=\"list-group-item\">
\t\t\t\t\t\t\t<a href=\"";
            // line 37
            echo $this->env->getExtension('routing')->getPath("admin_user_index");
            echo "\">Użytkownicy</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
        }
        // line 40
        echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<div class=\"col-xs-12 col-sm-9\">
\t\t\t\t";
        // line 43
        $this->displayBlock('breadcrumb', $context, $blocks);
        // line 44
        echo "\t\t\t\t";
        $this->displayBlock('content', $context, $blocks);
        // line 45
        echo "\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_34a20d0661e110fd1352c8b1bc07fa80ba8b125f9e298f95b805f6f2606e9fc9->leave($__internal_34a20d0661e110fd1352c8b1bc07fa80ba8b125f9e298f95b805f6f2606e9fc9_prof);

    }

    // line 43
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_3ab7ee96c4b1cd58a0548c080296d190150d2ff5418122c69167787e6f216f89 = $this->env->getExtension("native_profiler");
        $__internal_3ab7ee96c4b1cd58a0548c080296d190150d2ff5418122c69167787e6f216f89->enter($__internal_3ab7ee96c4b1cd58a0548c080296d190150d2ff5418122c69167787e6f216f89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        
        $__internal_3ab7ee96c4b1cd58a0548c080296d190150d2ff5418122c69167787e6f216f89->leave($__internal_3ab7ee96c4b1cd58a0548c080296d190150d2ff5418122c69167787e6f216f89_prof);

    }

    // line 44
    public function block_content($context, array $blocks = array())
    {
        $__internal_505f93401ba6c5bd2b8e52ab63c444d44ae2c4b8f62d3b2a928a180e6863c2dc = $this->env->getExtension("native_profiler");
        $__internal_505f93401ba6c5bd2b8e52ab63c444d44ae2c4b8f62d3b2a928a180e6863c2dc->enter($__internal_505f93401ba6c5bd2b8e52ab63c444d44ae2c4b8f62d3b2a928a180e6863c2dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_505f93401ba6c5bd2b8e52ab63c444d44ae2c4b8f62d3b2a928a180e6863c2dc->leave($__internal_505f93401ba6c5bd2b8e52ab63c444d44ae2c4b8f62d3b2a928a180e6863c2dc_prof);

    }

    // line 50
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_19047368fe966c1dd8c66fc4d7254565b7fb29639b6141ce29d6d651b9b924df = $this->env->getExtension("native_profiler");
        $__internal_19047368fe966c1dd8c66fc4d7254565b7fb29639b6141ce29d6d651b9b924df->enter($__internal_19047368fe966c1dd8c66fc4d7254565b7fb29639b6141ce29d6d651b9b924df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 51
        echo "\t";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
\t<script src=\"//cdn.tinymce.com/4/tinymce.min.js\"></script>
\t<script>tinymce.init({ 
\t\t\tselector:'textarea.tinymce',
\t\t\tplugins: \"code\",
\t\t});
\t</script>
";
        
        $__internal_19047368fe966c1dd8c66fc4d7254565b7fb29639b6141ce29d6d651b9b924df->leave($__internal_19047368fe966c1dd8c66fc4d7254565b7fb29639b6141ce29d6d651b9b924df_prof);

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
        return array (  163 => 51,  157 => 50,  146 => 44,  135 => 43,  125 => 45,  122 => 44,  120 => 43,  115 => 40,  109 => 37,  106 => 36,  104 => 35,  99 => 33,  93 => 30,  87 => 27,  73 => 16,  64 => 9,  58 => 8,  49 => 5,  44 => 4,  38 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
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
/* 			 <div>*/
/* 				<ul class="nav navbar-nav navbar-right">*/
/* 					<li><a href="{{ path('fos_user_security_logout') }}">Wyloguj się</a></li>*/
/* 				</ul>*/
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
/* 					<li role="presentation" class="list-group-item">*/
/* 						<a href="{{ path('fos_user_profile_show') }}">Moje konto</a>*/
/* 					</li>*/
/* 					{% if is_granted('ROLE_ADMIN') %}*/
/* 						<li role="presentation" class="list-group-item">*/
/* 							<a href="{{ path('admin_user_index') }}">Użytkownicy</a>*/
/* 						</li>*/
/* 					{% endif %}*/
/* 				</ul>*/
/* 			</div>*/
/* 			<div class="col-xs-12 col-sm-9">*/
/* 				{% block breadcrumb %}{% endblock %}*/
/* 				{% block content %}{% endblock %}*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/* 	{{ parent() }}*/
/* 	<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>*/
/* 	<script>tinymce.init({ */
/* 			selector:'textarea.tinymce',*/
/* 			plugins: "code",*/
/* 		});*/
/* 	</script>*/
/* {% endblock %}*/
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
