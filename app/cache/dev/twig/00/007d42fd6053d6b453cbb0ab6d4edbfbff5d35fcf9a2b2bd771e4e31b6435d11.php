<?php

/* admin_layout.html.twig */
class __TwigTemplate_6098bcf2ba3ff50936111c4d4feb57725bf2428ce49da5ca4a697fccad6ab0ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin_layout.html.twig", 1);
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
        $__internal_34932c799d24e46434c66efed3fc321fbd3e5dffa4abdf00e6323c31fe8a115a = $this->env->getExtension("native_profiler");
        $__internal_34932c799d24e46434c66efed3fc321fbd3e5dffa4abdf00e6323c31fe8a115a->enter($__internal_34932c799d24e46434c66efed3fc321fbd3e5dffa4abdf00e6323c31fe8a115a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin_layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_34932c799d24e46434c66efed3fc321fbd3e5dffa4abdf00e6323c31fe8a115a->leave($__internal_34932c799d24e46434c66efed3fc321fbd3e5dffa4abdf00e6323c31fe8a115a_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1d7c38a06e77dde25d37ad6923d3fefbccbfa675be4a56548c1fa9338ba4b85e = $this->env->getExtension("native_profiler");
        $__internal_1d7c38a06e77dde25d37ad6923d3fefbccbfa675be4a56548c1fa9338ba4b85e->enter($__internal_1d7c38a06e77dde25d37ad6923d3fefbccbfa675be4a56548c1fa9338ba4b85e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/admin.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
";
        
        $__internal_1d7c38a06e77dde25d37ad6923d3fefbccbfa675be4a56548c1fa9338ba4b85e->leave($__internal_1d7c38a06e77dde25d37ad6923d3fefbccbfa675be4a56548c1fa9338ba4b85e_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_61c432a13a4d3682889f06ebe25ebe9fdba529f21599ca3cb15c83d709347b63 = $this->env->getExtension("native_profiler");
        $__internal_61c432a13a4d3682889f06ebe25ebe9fdba529f21599ca3cb15c83d709347b63->enter($__internal_61c432a13a4d3682889f06ebe25ebe9fdba529f21599ca3cb15c83d709347b63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "\t<nav class=\"navbar navbar-default\" id=\"main_admin_nav\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"navbar-header col-xs-6\">
\t\t\t\t\t<a class=\"navbar-brand\" href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("admin_dashboard");
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
        echo $this->env->getExtension('routing')->getPath("page_index");
        echo "\">Strony</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li role=\"presentation\" class=\"list-group-item\">
\t\t\t\t\t\t<a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("footer_index");
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
            echo $this->env->getExtension('routing')->getPath("user_index");
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
        
        $__internal_61c432a13a4d3682889f06ebe25ebe9fdba529f21599ca3cb15c83d709347b63->leave($__internal_61c432a13a4d3682889f06ebe25ebe9fdba529f21599ca3cb15c83d709347b63_prof);

    }

    // line 45
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_1e180d33215753350ab4619f81f877c2afd3f05fa9851c3237116871cbfc793f = $this->env->getExtension("native_profiler");
        $__internal_1e180d33215753350ab4619f81f877c2afd3f05fa9851c3237116871cbfc793f->enter($__internal_1e180d33215753350ab4619f81f877c2afd3f05fa9851c3237116871cbfc793f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        
        $__internal_1e180d33215753350ab4619f81f877c2afd3f05fa9851c3237116871cbfc793f->leave($__internal_1e180d33215753350ab4619f81f877c2afd3f05fa9851c3237116871cbfc793f_prof);

    }

    // line 46
    public function block_content($context, array $blocks = array())
    {
        $__internal_33aca7b74f13b144fc01c955835fbbf233f1dcd082550c41756ced12f4c24916 = $this->env->getExtension("native_profiler");
        $__internal_33aca7b74f13b144fc01c955835fbbf233f1dcd082550c41756ced12f4c24916->enter($__internal_33aca7b74f13b144fc01c955835fbbf233f1dcd082550c41756ced12f4c24916_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_33aca7b74f13b144fc01c955835fbbf233f1dcd082550c41756ced12f4c24916->leave($__internal_33aca7b74f13b144fc01c955835fbbf233f1dcd082550c41756ced12f4c24916_prof);

    }

    // line 52
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_32c7e187b3c4fc0c4c521097300cfbf16202bf5f3f5c2a4df6720c6d820650f3 = $this->env->getExtension("native_profiler");
        $__internal_32c7e187b3c4fc0c4c521097300cfbf16202bf5f3f5c2a4df6720c6d820650f3->enter($__internal_32c7e187b3c4fc0c4c521097300cfbf16202bf5f3f5c2a4df6720c6d820650f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_32c7e187b3c4fc0c4c521097300cfbf16202bf5f3f5c2a4df6720c6d820650f3->leave($__internal_32c7e187b3c4fc0c4c521097300cfbf16202bf5f3f5c2a4df6720c6d820650f3_prof);

    }

    public function getTemplateName()
    {
        return "admin_layout.html.twig";
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
/* 	<link href="{{asset('css/admin.css')}}" rel="stylesheet" />*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* 	<nav class="navbar navbar-default" id="main_admin_nav">*/
/* 		<div class="container">*/
/* 			<div class="row">*/
/* 				<div class="navbar-header col-xs-6">*/
/* 					<a class="navbar-brand" href="{{ path('admin_dashboard') }}">Super fajny CMS</a>*/
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
/* 						<a href="{{ path('page_index') }}">Strony</a>*/
/* 					</li>*/
/* 					<li role="presentation" class="list-group-item">*/
/* 						<a href="{{ path('footer_index') }}">Stopki</a>*/
/* 					</li>*/
/* 					<li role="presentation" class="list-group-item">*/
/* 						<a href="{{ path('fos_user_profile_show') }}">Moje konto</a>*/
/* 					</li>*/
/* 					{% if is_granted('ROLE_ADMIN') %}*/
/* 						<li role="presentation" class="list-group-item">*/
/* 							<a href="{{ path('user_index') }}">Użytkownicy</a>*/
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
