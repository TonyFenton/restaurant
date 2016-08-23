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
        $__internal_12548f2c1f59338fda7389d8f134e1f3b8408d0289c6e876ff4434262835388b = $this->env->getExtension("native_profiler");
        $__internal_12548f2c1f59338fda7389d8f134e1f3b8408d0289c6e876ff4434262835388b->enter($__internal_12548f2c1f59338fda7389d8f134e1f3b8408d0289c6e876ff4434262835388b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_12548f2c1f59338fda7389d8f134e1f3b8408d0289c6e876ff4434262835388b->leave($__internal_12548f2c1f59338fda7389d8f134e1f3b8408d0289c6e876ff4434262835388b_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9cadd86f1e0dbb25368394bbe505ce95e352994e471a36629c2379ddf18f74a9 = $this->env->getExtension("native_profiler");
        $__internal_9cadd86f1e0dbb25368394bbe505ce95e352994e471a36629c2379ddf18f74a9->enter($__internal_9cadd86f1e0dbb25368394bbe505ce95e352994e471a36629c2379ddf18f74a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/admin/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
";
        
        $__internal_9cadd86f1e0dbb25368394bbe505ce95e352994e471a36629c2379ddf18f74a9->leave($__internal_9cadd86f1e0dbb25368394bbe505ce95e352994e471a36629c2379ddf18f74a9_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_26da1033bf3d90a834dd9e88606fdce52fea1ddfc321877edd039c3f637de1a3 = $this->env->getExtension("native_profiler");
        $__internal_26da1033bf3d90a834dd9e88606fdce52fea1ddfc321877edd039c3f637de1a3->enter($__internal_26da1033bf3d90a834dd9e88606fdce52fea1ddfc321877edd039c3f637de1a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_26da1033bf3d90a834dd9e88606fdce52fea1ddfc321877edd039c3f637de1a3->leave($__internal_26da1033bf3d90a834dd9e88606fdce52fea1ddfc321877edd039c3f637de1a3_prof);

    }

    // line 43
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_9033017f1d8bea41f449ed61e30e80f01b5e7159e3b48a8cc9a3044c0db5b1bb = $this->env->getExtension("native_profiler");
        $__internal_9033017f1d8bea41f449ed61e30e80f01b5e7159e3b48a8cc9a3044c0db5b1bb->enter($__internal_9033017f1d8bea41f449ed61e30e80f01b5e7159e3b48a8cc9a3044c0db5b1bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        
        $__internal_9033017f1d8bea41f449ed61e30e80f01b5e7159e3b48a8cc9a3044c0db5b1bb->leave($__internal_9033017f1d8bea41f449ed61e30e80f01b5e7159e3b48a8cc9a3044c0db5b1bb_prof);

    }

    // line 44
    public function block_content($context, array $blocks = array())
    {
        $__internal_bde69392cff440e8eda79221df14cf8c121139297396c69c225c2a34d2b8bfee = $this->env->getExtension("native_profiler");
        $__internal_bde69392cff440e8eda79221df14cf8c121139297396c69c225c2a34d2b8bfee->enter($__internal_bde69392cff440e8eda79221df14cf8c121139297396c69c225c2a34d2b8bfee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_bde69392cff440e8eda79221df14cf8c121139297396c69c225c2a34d2b8bfee->leave($__internal_bde69392cff440e8eda79221df14cf8c121139297396c69c225c2a34d2b8bfee_prof);

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
