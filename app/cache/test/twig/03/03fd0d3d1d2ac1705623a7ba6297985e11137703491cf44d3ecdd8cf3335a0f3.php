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
        $__internal_715558efd3fd10034cd66019bfbff66edc13960667ae38611bd7e854067de51d = $this->env->getExtension("native_profiler");
        $__internal_715558efd3fd10034cd66019bfbff66edc13960667ae38611bd7e854067de51d->enter($__internal_715558efd3fd10034cd66019bfbff66edc13960667ae38611bd7e854067de51d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_715558efd3fd10034cd66019bfbff66edc13960667ae38611bd7e854067de51d->leave($__internal_715558efd3fd10034cd66019bfbff66edc13960667ae38611bd7e854067de51d_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4af87fb4884089affa561324fd849e0e4c7c93bb09adbbf724bcbde889b2bae0 = $this->env->getExtension("native_profiler");
        $__internal_4af87fb4884089affa561324fd849e0e4c7c93bb09adbbf724bcbde889b2bae0->enter($__internal_4af87fb4884089affa561324fd849e0e4c7c93bb09adbbf724bcbde889b2bae0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/admin/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
";
        
        $__internal_4af87fb4884089affa561324fd849e0e4c7c93bb09adbbf724bcbde889b2bae0->leave($__internal_4af87fb4884089affa561324fd849e0e4c7c93bb09adbbf724bcbde889b2bae0_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_4b6e78cad7c450a7309f368d14cf2f6995aa2e92c72f0ae1b82fb969f1d10070 = $this->env->getExtension("native_profiler");
        $__internal_4b6e78cad7c450a7309f368d14cf2f6995aa2e92c72f0ae1b82fb969f1d10070->enter($__internal_4b6e78cad7c450a7309f368d14cf2f6995aa2e92c72f0ae1b82fb969f1d10070_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "\t<nav class=\"navbar navbar-default\" id=\"main_admin_nav\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"navbar-header col-xs-6\">
\t\t\t\t\t<a class=\"navbar-brand\" href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("admin_default_dashboard");
        echo "\">Super fajny CMS</a>
\t\t\t\t</div>
\t\t\t\t <div class=\"col-xs-6\">
\t\t\t\t\t<ul class=\"nav navbar-nav navbar-right\">
\t\t\t\t\t\t<li><a class=\"text-right\" href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\">Wyloguj się</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
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
        // line 29
        echo $this->env->getExtension('routing')->getPath("admin_page_index");
        echo "\">Strony</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li role=\"presentation\" class=\"list-group-item\">
\t\t\t\t\t\t<a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("admin_footer_index");
        echo "\">Stopki</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li role=\"presentation\" class=\"list-group-item\">
\t\t\t\t\t\t<a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
        echo "\">Moje konto</a>
\t\t\t\t\t</li>
\t\t\t\t\t";
        // line 37
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 38
            echo "\t\t\t\t\t\t<li role=\"presentation\" class=\"list-group-item\">
\t\t\t\t\t\t\t<a href=\"";
            // line 39
            echo $this->env->getExtension('routing')->getPath("admin_user_index");
            echo "\">Użytkownicy</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
        }
        // line 42
        echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<div class=\"col-xs-12 col-sm-9\">
\t\t\t\t";
        // line 45
        $this->displayBlock('breadcrumb', $context, $blocks);
        // line 46
        echo "\t\t\t\t";
        $this->displayBlock('content', $context, $blocks);
        // line 47
        echo "\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_4b6e78cad7c450a7309f368d14cf2f6995aa2e92c72f0ae1b82fb969f1d10070->leave($__internal_4b6e78cad7c450a7309f368d14cf2f6995aa2e92c72f0ae1b82fb969f1d10070_prof);

    }

    // line 45
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_95a1d4650374696e00d479a03ce69182c21a72416edb705a8e27aa4cfb83b431 = $this->env->getExtension("native_profiler");
        $__internal_95a1d4650374696e00d479a03ce69182c21a72416edb705a8e27aa4cfb83b431->enter($__internal_95a1d4650374696e00d479a03ce69182c21a72416edb705a8e27aa4cfb83b431_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        
        $__internal_95a1d4650374696e00d479a03ce69182c21a72416edb705a8e27aa4cfb83b431->leave($__internal_95a1d4650374696e00d479a03ce69182c21a72416edb705a8e27aa4cfb83b431_prof);

    }

    // line 46
    public function block_content($context, array $blocks = array())
    {
        $__internal_abb6a603c60f3747b831235dbb309a5c63520b2cfaa21c70fc2d05f18907cfa4 = $this->env->getExtension("native_profiler");
        $__internal_abb6a603c60f3747b831235dbb309a5c63520b2cfaa21c70fc2d05f18907cfa4->enter($__internal_abb6a603c60f3747b831235dbb309a5c63520b2cfaa21c70fc2d05f18907cfa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_abb6a603c60f3747b831235dbb309a5c63520b2cfaa21c70fc2d05f18907cfa4->leave($__internal_abb6a603c60f3747b831235dbb309a5c63520b2cfaa21c70fc2d05f18907cfa4_prof);

    }

    // line 52
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0a49190b4b30a10cfc74b5750d97bb1e43974457509bfdfa5fc1a2d7a2ba381e = $this->env->getExtension("native_profiler");
        $__internal_0a49190b4b30a10cfc74b5750d97bb1e43974457509bfdfa5fc1a2d7a2ba381e->enter($__internal_0a49190b4b30a10cfc74b5750d97bb1e43974457509bfdfa5fc1a2d7a2ba381e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 53
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
        
        $__internal_0a49190b4b30a10cfc74b5750d97bb1e43974457509bfdfa5fc1a2d7a2ba381e->leave($__internal_0a49190b4b30a10cfc74b5750d97bb1e43974457509bfdfa5fc1a2d7a2ba381e_prof);

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
        return array (  168 => 53,  162 => 52,  151 => 46,  140 => 45,  130 => 47,  127 => 46,  125 => 45,  120 => 42,  114 => 39,  111 => 38,  109 => 37,  104 => 35,  98 => 32,  92 => 29,  77 => 17,  70 => 13,  64 => 9,  58 => 8,  49 => 5,  44 => 4,  38 => 3,  11 => 1,);
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
/* 			<div class="row">*/
/* 				<div class="navbar-header col-xs-6">*/
/* 					<a class="navbar-brand" href="{{ path('admin_default_dashboard') }}">Super fajny CMS</a>*/
/* 				</div>*/
/* 				 <div class="col-xs-6">*/
/* 					<ul class="nav navbar-nav navbar-right">*/
/* 						<li><a class="text-right" href="{{ path('fos_user_security_logout') }}">Wyloguj się</a></li>*/
/* 					</ul>*/
/* 				</div>*/
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
