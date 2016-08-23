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
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_147591d386225fc851a0f9ae26f601560a89dfc77e37fdc649df9243fc6d5293 = $this->env->getExtension("native_profiler");
        $__internal_147591d386225fc851a0f9ae26f601560a89dfc77e37fdc649df9243fc6d5293->enter($__internal_147591d386225fc851a0f9ae26f601560a89dfc77e37fdc649df9243fc6d5293_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_147591d386225fc851a0f9ae26f601560a89dfc77e37fdc649df9243fc6d5293->leave($__internal_147591d386225fc851a0f9ae26f601560a89dfc77e37fdc649df9243fc6d5293_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_419f6363df592676834f7a275244723d8e9a928f32a518bfa4d2ddf11355931f = $this->env->getExtension("native_profiler");
        $__internal_419f6363df592676834f7a275244723d8e9a928f32a518bfa4d2ddf11355931f->enter($__internal_419f6363df592676834f7a275244723d8e9a928f32a518bfa4d2ddf11355931f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/admin/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
";
        
        $__internal_419f6363df592676834f7a275244723d8e9a928f32a518bfa4d2ddf11355931f->leave($__internal_419f6363df592676834f7a275244723d8e9a928f32a518bfa4d2ddf11355931f_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_762b73ed0663bf0d59c74267b599c3b44928fa472e38147835056079fea7351d = $this->env->getExtension("native_profiler");
        $__internal_762b73ed0663bf0d59c74267b599c3b44928fa472e38147835056079fea7351d->enter($__internal_762b73ed0663bf0d59c74267b599c3b44928fa472e38147835056079fea7351d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_762b73ed0663bf0d59c74267b599c3b44928fa472e38147835056079fea7351d->leave($__internal_762b73ed0663bf0d59c74267b599c3b44928fa472e38147835056079fea7351d_prof);

    }

    // line 43
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_23fbdd0e15c48e76930177dd69b121c4c9a9417f2b9839e62c84c69fa63dd960 = $this->env->getExtension("native_profiler");
        $__internal_23fbdd0e15c48e76930177dd69b121c4c9a9417f2b9839e62c84c69fa63dd960->enter($__internal_23fbdd0e15c48e76930177dd69b121c4c9a9417f2b9839e62c84c69fa63dd960_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        
        $__internal_23fbdd0e15c48e76930177dd69b121c4c9a9417f2b9839e62c84c69fa63dd960->leave($__internal_23fbdd0e15c48e76930177dd69b121c4c9a9417f2b9839e62c84c69fa63dd960_prof);

    }

    // line 44
    public function block_content($context, array $blocks = array())
    {
        $__internal_8d4d64dc3d7960759b7f99cfa1b133bb68b2c33fad7106c87f881a61efef49be = $this->env->getExtension("native_profiler");
        $__internal_8d4d64dc3d7960759b7f99cfa1b133bb68b2c33fad7106c87f881a61efef49be->enter($__internal_8d4d64dc3d7960759b7f99cfa1b133bb68b2c33fad7106c87f881a61efef49be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_8d4d64dc3d7960759b7f99cfa1b133bb68b2c33fad7106c87f881a61efef49be->leave($__internal_8d4d64dc3d7960759b7f99cfa1b133bb68b2c33fad7106c87f881a61efef49be_prof);

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
        return array (  145 => 44,  134 => 43,  124 => 45,  121 => 44,  119 => 43,  114 => 40,  108 => 37,  105 => 36,  103 => 35,  98 => 33,  92 => 30,  86 => 27,  72 => 16,  63 => 9,  57 => 8,  48 => 5,  43 => 4,  37 => 3,  11 => 1,);
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
