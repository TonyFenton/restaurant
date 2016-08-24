<?php

/* admin/page/new.html.twig */
class __TwigTemplate_bb5c114a30818109df4e380218aae19f75dfcf7e04d598b00a441df8ed4299b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/page/new.html.twig", 1);
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
        $__internal_9452a311de7dca3bd817f4fb37a8aeb710afeb8447a7d9c0a7afe9be40be1db9 = $this->env->getExtension("native_profiler");
        $__internal_9452a311de7dca3bd817f4fb37a8aeb710afeb8447a7d9c0a7afe9be40be1db9->enter($__internal_9452a311de7dca3bd817f4fb37a8aeb710afeb8447a7d9c0a7afe9be40be1db9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/page/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9452a311de7dca3bd817f4fb37a8aeb710afeb8447a7d9c0a7afe9be40be1db9->leave($__internal_9452a311de7dca3bd817f4fb37a8aeb710afeb8447a7d9c0a7afe9be40be1db9_prof);

    }

    // line 3
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_625ebd56e3a5215d475f14c985a31e9eda29f9f6805b06353b3620d95fac58d6 = $this->env->getExtension("native_profiler");
        $__internal_625ebd56e3a5215d475f14c985a31e9eda29f9f6805b06353b3620d95fac58d6->enter($__internal_625ebd56e3a5215d475f14c985a31e9eda29f9f6805b06353b3620d95fac58d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

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
        echo $this->env->getExtension('routing')->getPath("admin_page_index");
        echo "\">Strony</a>
\t\t</li>
\t\t<li class=\"active\">
\t\t\tNowa
\t\t</li>
\t</ol>
";
        
        $__internal_625ebd56e3a5215d475f14c985a31e9eda29f9f6805b06353b3620d95fac58d6->leave($__internal_625ebd56e3a5215d475f14c985a31e9eda29f9f6805b06353b3620d95fac58d6_prof);

    }

    // line 17
    public function block_content($context, array $blocks = array())
    {
        $__internal_d497980ef087f442d18261086fc4de9f2611a5885dd319f28016716a06179922 = $this->env->getExtension("native_profiler");
        $__internal_d497980ef087f442d18261086fc4de9f2611a5885dd319f28016716a06179922->enter($__internal_d497980ef087f442d18261086fc4de9f2611a5885dd319f28016716a06179922_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 18
        echo "\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-heading\"><h1>Tworzenie strony</h1></div>
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
        echo $this->env->getExtension('routing')->getPath("admin_page_index");
        echo "\" role=\"button\">Anuluj</a>\t\t
\t\t</div>
\t</div>
";
        
        $__internal_d497980ef087f442d18261086fc4de9f2611a5885dd319f28016716a06179922->leave($__internal_d497980ef087f442d18261086fc4de9f2611a5885dd319f28016716a06179922_prof);

    }

    public function getTemplateName()
    {
        return "admin/page/new.html.twig";
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
/* 			<a href="{{ path('admin_page_index') }}">Strony</a>*/
/* 		</li>*/
/* 		<li class="active">*/
/* 			Nowa*/
/* 		</li>*/
/* 	</ol>*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/* 	<div class="panel panel-default">*/
/* 		<div class="panel-heading"><h1>Tworzenie strony</h1></div>*/
/* 		<div class="panel-body">		*/
/* 			{{ form_start(form) }}*/
/* 				{{ form_widget(form) }}*/
/* 				<input class="btn btn-success" type="submit" value="Utwórz">*/
/* 			{{ form_end(form) }}*/
/* 		*/
/* 			<a id="backtolist"class="btn btn-danger" href="{{ path('admin_page_index') }}" role="button">Anuluj</a>		*/
/* 		</div>*/
/* 	</div>*/
/* {% endblock %}*/
/* */
