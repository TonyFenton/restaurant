<?php

/* admin/footer/new.html.twig */
class __TwigTemplate_9ccd356cb80059d69ecfc0e67a1aa5440058307c46521ff4128d4a72782ec5c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/footer/new.html.twig", 1);
        $this->blocks = array(
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_35f895ff777b6500a1d1204533219123fd1a9c5f5cb719f845567db231338bff = $this->env->getExtension("native_profiler");
        $__internal_35f895ff777b6500a1d1204533219123fd1a9c5f5cb719f845567db231338bff->enter($__internal_35f895ff777b6500a1d1204533219123fd1a9c5f5cb719f845567db231338bff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/footer/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_35f895ff777b6500a1d1204533219123fd1a9c5f5cb719f845567db231338bff->leave($__internal_35f895ff777b6500a1d1204533219123fd1a9c5f5cb719f845567db231338bff_prof);

    }

    // line 3
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_530b3bcba8fdabaa22eda63d30d0007bad652d16791e606f39e610b259c86aeb = $this->env->getExtension("native_profiler");
        $__internal_530b3bcba8fdabaa22eda63d30d0007bad652d16791e606f39e610b259c86aeb->enter($__internal_530b3bcba8fdabaa22eda63d30d0007bad652d16791e606f39e610b259c86aeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 4
        echo "\t<ol class=\"breadcrumb\">
\t\t<li>
\t\t\t<a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("admin_default_dashboard");
        echo "\">Panel</a>
\t\t</li>
\t\t<li>
\t\t\t<a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("admin_footer_index");
        echo "\">Stopki</a>
\t\t</li>
\t\t<li class=\"active\">
\t\t\tNowa
\t\t</li>
\t</ol>
";
        
        $__internal_530b3bcba8fdabaa22eda63d30d0007bad652d16791e606f39e610b259c86aeb->leave($__internal_530b3bcba8fdabaa22eda63d30d0007bad652d16791e606f39e610b259c86aeb_prof);

    }

    // line 17
    public function block_content($context, array $blocks = array())
    {
        $__internal_17799c5801ffe1acc265b09ea35438d07939ea327e4008dbc8738ee8d89c56b7 = $this->env->getExtension("native_profiler");
        $__internal_17799c5801ffe1acc265b09ea35438d07939ea327e4008dbc8738ee8d89c56b7->enter($__internal_17799c5801ffe1acc265b09ea35438d07939ea327e4008dbc8738ee8d89c56b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 18
        echo "\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-heading\"><h1>Tworzenie stopki</h1></div>
\t\t<div class=\"panel-body\">\t\t
\t\t\t";
        // line 21
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t\t\t\t";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
\t\t\t\t<input class=\"btn btn-success\" type=\"submit\" value=\"Utwórz\">
\t\t\t";
        // line 24
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t\t
\t\t\t<a id=\"backtolist\"class=\"btn btn-danger\" href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("admin_footer_index");
        echo "\" role=\"button\">Anuluj</a>\t\t
\t\t</div>
\t</div>
";
        
        $__internal_17799c5801ffe1acc265b09ea35438d07939ea327e4008dbc8738ee8d89c56b7->leave($__internal_17799c5801ffe1acc265b09ea35438d07939ea327e4008dbc8738ee8d89c56b7_prof);

    }

    public function getTemplateName()
    {
        return "admin/footer/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 26,  85 => 24,  80 => 22,  76 => 21,  71 => 18,  65 => 17,  51 => 9,  45 => 6,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'admin/layout.html.twig' %}*/
/* */
/* {% block breadcrumb %}*/
/* 	<ol class="breadcrumb">*/
/* 		<li>*/
/* 			<a href="{{ path('admin_default_dashboard') }}">Panel</a>*/
/* 		</li>*/
/* 		<li>*/
/* 			<a href="{{ path('admin_footer_index') }}">Stopki</a>*/
/* 		</li>*/
/* 		<li class="active">*/
/* 			Nowa*/
/* 		</li>*/
/* 	</ol>*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/* 	<div class="panel panel-default">*/
/* 		<div class="panel-heading"><h1>Tworzenie stopki</h1></div>*/
/* 		<div class="panel-body">		*/
/* 			{{ form_start(form) }}*/
/* 				{{ form_widget(form) }}*/
/* 				<input class="btn btn-success" type="submit" value="Utwórz">*/
/* 			{{ form_end(form) }}*/
/* 		*/
/* 			<a id="backtolist"class="btn btn-danger" href="{{ path('admin_footer_index') }}" role="button">Anuluj</a>		*/
/* 		</div>*/
/* 	</div>*/
/* {% endblock %}*/
/* */
