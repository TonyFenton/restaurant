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
        $__internal_0c77a81209c2ad677f35291773db6abea0e169f31412c15846f964984811beb0 = $this->env->getExtension("native_profiler");
        $__internal_0c77a81209c2ad677f35291773db6abea0e169f31412c15846f964984811beb0->enter($__internal_0c77a81209c2ad677f35291773db6abea0e169f31412c15846f964984811beb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin_layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c77a81209c2ad677f35291773db6abea0e169f31412c15846f964984811beb0->leave($__internal_0c77a81209c2ad677f35291773db6abea0e169f31412c15846f964984811beb0_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_187eff2e6212f354edfcaeda30de94fb64cbfaa481e6b10621c745586ed6d1bf = $this->env->getExtension("native_profiler");
        $__internal_187eff2e6212f354edfcaeda30de94fb64cbfaa481e6b10621c745586ed6d1bf->enter($__internal_187eff2e6212f354edfcaeda30de94fb64cbfaa481e6b10621c745586ed6d1bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/admin.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
";
        
        $__internal_187eff2e6212f354edfcaeda30de94fb64cbfaa481e6b10621c745586ed6d1bf->leave($__internal_187eff2e6212f354edfcaeda30de94fb64cbfaa481e6b10621c745586ed6d1bf_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_268f7c6a9ce2dd1c4a8ace540301a12bdf76d9ed00d765bd0385169ab17b5e47 = $this->env->getExtension("native_profiler");
        $__internal_268f7c6a9ce2dd1c4a8ace540301a12bdf76d9ed00d765bd0385169ab17b5e47->enter($__internal_268f7c6a9ce2dd1c4a8ace540301a12bdf76d9ed00d765bd0385169ab17b5e47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a class=\"text-right\" href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\">Wyloguj się</a>
\t\t\t\t\t\t</li>
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
        // line 31
        echo $this->env->getExtension('routing')->getPath("page_index");
        echo "\">Strony</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li role=\"presentation\" class=\"list-group-item\">
\t\t\t\t\t\t<a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("footer_index");
        echo "\">Stopki</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li role=\"presentation\" class=\"list-group-item\">
\t\t\t\t\t\t<a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
        echo "\">Moje konto</a>
\t\t\t\t\t</li>
\t\t\t\t\t";
        // line 39
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 40
            echo "\t\t\t\t\t\t<li role=\"presentation\" class=\"list-group-item\">
\t\t\t\t\t\t\t<a href=\"";
            // line 41
            echo $this->env->getExtension('routing')->getPath("user_index");
            echo "\">Użytkownicy</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
        }
        // line 44
        echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<div class=\"col-xs-12 col-sm-9\">
\t\t\t\t";
        // line 47
        $this->displayBlock('breadcrumb', $context, $blocks);
        // line 48
        echo "\t\t\t\t";
        $this->displayBlock('content', $context, $blocks);
        // line 49
        echo "\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_268f7c6a9ce2dd1c4a8ace540301a12bdf76d9ed00d765bd0385169ab17b5e47->leave($__internal_268f7c6a9ce2dd1c4a8ace540301a12bdf76d9ed00d765bd0385169ab17b5e47_prof);

    }

    // line 47
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_13190e5b5d6a699b67ebb0f14af02c2ca1a80576ca06006cdd820d84687f1384 = $this->env->getExtension("native_profiler");
        $__internal_13190e5b5d6a699b67ebb0f14af02c2ca1a80576ca06006cdd820d84687f1384->enter($__internal_13190e5b5d6a699b67ebb0f14af02c2ca1a80576ca06006cdd820d84687f1384_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        
        $__internal_13190e5b5d6a699b67ebb0f14af02c2ca1a80576ca06006cdd820d84687f1384->leave($__internal_13190e5b5d6a699b67ebb0f14af02c2ca1a80576ca06006cdd820d84687f1384_prof);

    }

    // line 48
    public function block_content($context, array $blocks = array())
    {
        $__internal_0c8e23972cf025ebf51bb6d5b0280f7bce43a4297adefbaa8672c69c06724697 = $this->env->getExtension("native_profiler");
        $__internal_0c8e23972cf025ebf51bb6d5b0280f7bce43a4297adefbaa8672c69c06724697->enter($__internal_0c8e23972cf025ebf51bb6d5b0280f7bce43a4297adefbaa8672c69c06724697_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_0c8e23972cf025ebf51bb6d5b0280f7bce43a4297adefbaa8672c69c06724697->leave($__internal_0c8e23972cf025ebf51bb6d5b0280f7bce43a4297adefbaa8672c69c06724697_prof);

    }

    // line 54
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ac5d90d30de8617bc28487273ef0d2d3a99a7f6db7f8e069ca2af156d118d85c = $this->env->getExtension("native_profiler");
        $__internal_ac5d90d30de8617bc28487273ef0d2d3a99a7f6db7f8e069ca2af156d118d85c->enter($__internal_ac5d90d30de8617bc28487273ef0d2d3a99a7f6db7f8e069ca2af156d118d85c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 55
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
        
        $__internal_ac5d90d30de8617bc28487273ef0d2d3a99a7f6db7f8e069ca2af156d118d85c->leave($__internal_ac5d90d30de8617bc28487273ef0d2d3a99a7f6db7f8e069ca2af156d118d85c_prof);

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
        return array (  170 => 55,  164 => 54,  153 => 48,  142 => 47,  132 => 49,  129 => 48,  127 => 47,  122 => 44,  116 => 41,  113 => 40,  111 => 39,  106 => 37,  100 => 34,  94 => 31,  78 => 18,  70 => 13,  64 => 9,  58 => 8,  49 => 5,  44 => 4,  38 => 3,  11 => 1,);
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
/* 						<li>*/
/* 							<a class="text-right" href="{{ path('fos_user_security_logout') }}">Wyloguj się</a>*/
/* 						</li>*/
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
