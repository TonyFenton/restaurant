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
        $__internal_7af4e8f2cb621b5e58bfbe31a6d3f9dac0dc26339bbb164f3ab78e007f087877 = $this->env->getExtension("native_profiler");
        $__internal_7af4e8f2cb621b5e58bfbe31a6d3f9dac0dc26339bbb164f3ab78e007f087877->enter($__internal_7af4e8f2cb621b5e58bfbe31a6d3f9dac0dc26339bbb164f3ab78e007f087877_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7af4e8f2cb621b5e58bfbe31a6d3f9dac0dc26339bbb164f3ab78e007f087877->leave($__internal_7af4e8f2cb621b5e58bfbe31a6d3f9dac0dc26339bbb164f3ab78e007f087877_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b6255ca723d22fbaa265f5977bd2033f81f9c6b4938ea98bb28803a43f14cb6e = $this->env->getExtension("native_profiler");
        $__internal_b6255ca723d22fbaa265f5977bd2033f81f9c6b4938ea98bb28803a43f14cb6e->enter($__internal_b6255ca723d22fbaa265f5977bd2033f81f9c6b4938ea98bb28803a43f14cb6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/admin/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
";
        
        $__internal_b6255ca723d22fbaa265f5977bd2033f81f9c6b4938ea98bb28803a43f14cb6e->leave($__internal_b6255ca723d22fbaa265f5977bd2033f81f9c6b4938ea98bb28803a43f14cb6e_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_3e5dd3eef228c2021c81a2f39f428b57470fda43a9913025cbcbcb7c31172858 = $this->env->getExtension("native_profiler");
        $__internal_3e5dd3eef228c2021c81a2f39f428b57470fda43a9913025cbcbcb7c31172858->enter($__internal_3e5dd3eef228c2021c81a2f39f428b57470fda43a9913025cbcbcb7c31172858_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3e5dd3eef228c2021c81a2f39f428b57470fda43a9913025cbcbcb7c31172858->leave($__internal_3e5dd3eef228c2021c81a2f39f428b57470fda43a9913025cbcbcb7c31172858_prof);

    }

    // line 45
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_498f6f7fbc93cbe3fef36f2c8d828a24ffbf2bec0fdef9cdb8ac5c93fdec4ad5 = $this->env->getExtension("native_profiler");
        $__internal_498f6f7fbc93cbe3fef36f2c8d828a24ffbf2bec0fdef9cdb8ac5c93fdec4ad5->enter($__internal_498f6f7fbc93cbe3fef36f2c8d828a24ffbf2bec0fdef9cdb8ac5c93fdec4ad5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        
        $__internal_498f6f7fbc93cbe3fef36f2c8d828a24ffbf2bec0fdef9cdb8ac5c93fdec4ad5->leave($__internal_498f6f7fbc93cbe3fef36f2c8d828a24ffbf2bec0fdef9cdb8ac5c93fdec4ad5_prof);

    }

    // line 46
    public function block_content($context, array $blocks = array())
    {
        $__internal_6d003b12a6bc1c9cda98a9e7cf233c1127612737ecc2c1bd3c721744f6ab88a6 = $this->env->getExtension("native_profiler");
        $__internal_6d003b12a6bc1c9cda98a9e7cf233c1127612737ecc2c1bd3c721744f6ab88a6->enter($__internal_6d003b12a6bc1c9cda98a9e7cf233c1127612737ecc2c1bd3c721744f6ab88a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_6d003b12a6bc1c9cda98a9e7cf233c1127612737ecc2c1bd3c721744f6ab88a6->leave($__internal_6d003b12a6bc1c9cda98a9e7cf233c1127612737ecc2c1bd3c721744f6ab88a6_prof);

    }

    // line 52
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_76c14dcc053eef563304989521879b196cef5d085196b6ff2aea9dd413c2f54d = $this->env->getExtension("native_profiler");
        $__internal_76c14dcc053eef563304989521879b196cef5d085196b6ff2aea9dd413c2f54d->enter($__internal_76c14dcc053eef563304989521879b196cef5d085196b6ff2aea9dd413c2f54d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_76c14dcc053eef563304989521879b196cef5d085196b6ff2aea9dd413c2f54d->leave($__internal_76c14dcc053eef563304989521879b196cef5d085196b6ff2aea9dd413c2f54d_prof);

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
