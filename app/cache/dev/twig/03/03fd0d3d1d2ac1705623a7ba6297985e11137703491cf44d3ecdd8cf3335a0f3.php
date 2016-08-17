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
        $__internal_74ef9ba93a0a5caca7f4a6f5309bc747cd125d6901b84e51689d73f1bd08cce1 = $this->env->getExtension("native_profiler");
        $__internal_74ef9ba93a0a5caca7f4a6f5309bc747cd125d6901b84e51689d73f1bd08cce1->enter($__internal_74ef9ba93a0a5caca7f4a6f5309bc747cd125d6901b84e51689d73f1bd08cce1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_74ef9ba93a0a5caca7f4a6f5309bc747cd125d6901b84e51689d73f1bd08cce1->leave($__internal_74ef9ba93a0a5caca7f4a6f5309bc747cd125d6901b84e51689d73f1bd08cce1_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_07fe1c14048774276b5a3b2d67a3e4c8d75ab21dcdaccdbd5ebc467c8e62dd33 = $this->env->getExtension("native_profiler");
        $__internal_07fe1c14048774276b5a3b2d67a3e4c8d75ab21dcdaccdbd5ebc467c8e62dd33->enter($__internal_07fe1c14048774276b5a3b2d67a3e4c8d75ab21dcdaccdbd5ebc467c8e62dd33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/admin/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
";
        
        $__internal_07fe1c14048774276b5a3b2d67a3e4c8d75ab21dcdaccdbd5ebc467c8e62dd33->leave($__internal_07fe1c14048774276b5a3b2d67a3e4c8d75ab21dcdaccdbd5ebc467c8e62dd33_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_426cbf8f51f62cafa329fc15a7b1eb73af6ab1b2b85e9f2ce2fa79fa823fe1ad = $this->env->getExtension("native_profiler");
        $__internal_426cbf8f51f62cafa329fc15a7b1eb73af6ab1b2b85e9f2ce2fa79fa823fe1ad->enter($__internal_426cbf8f51f62cafa329fc15a7b1eb73af6ab1b2b85e9f2ce2fa79fa823fe1ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "\t<nav class=\"navbar navbar-default\" id=\"main_admin_nav\">
\t\t<div class=\"container\">
\t\t\t<div class=\"navbar-header\">
\t\t\t\t<p>Najlepsiejszy CMS</p>
\t\t\t</div>
\t\t <div>
\t\t\t<ul class=\"nav navbar-nav navbar-right\">
\t\t\t\t<li><a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\">Wyloguj się</a></li>
\t\t\t</ul>
\t\t</div>
\t</nav>
\t
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-12 col-sm-3\">
\t\t\t\t<ul id=\"secondary_nav\" class=\"nav nav-pills nav-stacked list-group\">
\t\t\t\t\t<li role=\"presentation\" class=\"list-group-item\">
\t\t\t\t\t\t<a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("admin_page_index");
        echo "\">Strony</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li role=\"presentation\" class=\"list-group-item\">
\t\t\t\t\t\t<a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("admin_footer_index");
        echo "\">Stopki</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li role=\"presentation\" class=\"list-group-item\">
\t\t\t\t\t\t<a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
        echo "\">Moje konto</a>
\t\t\t\t\t</li>
\t\t\t\t\t";
        // line 34
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 35
            echo "\t\t\t\t\t\t<li role=\"presentation\" class=\"list-group-item\">
\t\t\t\t\t\t\t<a href=\"#\">Konto</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
        }
        // line 39
        echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<div class=\"col-xs-12 col-sm-9\">
\t\t\t\t";
        // line 42
        $this->displayBlock('breadcrumb', $context, $blocks);
        // line 43
        echo "\t\t\t\t";
        $this->displayBlock('content', $context, $blocks);
        // line 44
        echo "\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_426cbf8f51f62cafa329fc15a7b1eb73af6ab1b2b85e9f2ce2fa79fa823fe1ad->leave($__internal_426cbf8f51f62cafa329fc15a7b1eb73af6ab1b2b85e9f2ce2fa79fa823fe1ad_prof);

    }

    // line 42
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_749d9f658e38c2bb5a0c2666574b499f8a18c716fa20e6a6b7006f7f1e7bd121 = $this->env->getExtension("native_profiler");
        $__internal_749d9f658e38c2bb5a0c2666574b499f8a18c716fa20e6a6b7006f7f1e7bd121->enter($__internal_749d9f658e38c2bb5a0c2666574b499f8a18c716fa20e6a6b7006f7f1e7bd121_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        
        $__internal_749d9f658e38c2bb5a0c2666574b499f8a18c716fa20e6a6b7006f7f1e7bd121->leave($__internal_749d9f658e38c2bb5a0c2666574b499f8a18c716fa20e6a6b7006f7f1e7bd121_prof);

    }

    // line 43
    public function block_content($context, array $blocks = array())
    {
        $__internal_851744eb2e87088acc522af50187122d97123e6f9227f3ef90da56811c99b83f = $this->env->getExtension("native_profiler");
        $__internal_851744eb2e87088acc522af50187122d97123e6f9227f3ef90da56811c99b83f->enter($__internal_851744eb2e87088acc522af50187122d97123e6f9227f3ef90da56811c99b83f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_851744eb2e87088acc522af50187122d97123e6f9227f3ef90da56811c99b83f->leave($__internal_851744eb2e87088acc522af50187122d97123e6f9227f3ef90da56811c99b83f_prof);

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
        return array (  141 => 43,  130 => 42,  120 => 44,  117 => 43,  115 => 42,  110 => 39,  104 => 35,  102 => 34,  97 => 32,  91 => 29,  85 => 26,  72 => 16,  63 => 9,  57 => 8,  48 => 5,  43 => 4,  37 => 3,  11 => 1,);
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
/* 		 <div>*/
/* 			<ul class="nav navbar-nav navbar-right">*/
/* 				<li><a href="{{ path('fos_user_security_logout') }}">Wyloguj się</a></li>*/
/* 			</ul>*/
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
/* 							<a href="#">Konto</a>*/
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
