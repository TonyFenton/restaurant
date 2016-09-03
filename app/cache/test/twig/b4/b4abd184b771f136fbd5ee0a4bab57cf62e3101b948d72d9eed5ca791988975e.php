<?php

/* page/new.html.twig */
class __TwigTemplate_a8eb22b35aba5ba11a14bf94fba1d145b8d58b12bbdc2012c2d2b0e1385f2dca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin_layout.html.twig", "page/new.html.twig", 1);
        $this->blocks = array(
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bca8f5d35126914c041316304c203779584814ddc0c9a501e4dddb4d81c171f1 = $this->env->getExtension("native_profiler");
        $__internal_bca8f5d35126914c041316304c203779584814ddc0c9a501e4dddb4d81c171f1->enter($__internal_bca8f5d35126914c041316304c203779584814ddc0c9a501e4dddb4d81c171f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "page/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bca8f5d35126914c041316304c203779584814ddc0c9a501e4dddb4d81c171f1->leave($__internal_bca8f5d35126914c041316304c203779584814ddc0c9a501e4dddb4d81c171f1_prof);

    }

    // line 3
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_eec62948486a0c4ee4172526012a6ab07ff94718bf771bea5b0da56052547e70 = $this->env->getExtension("native_profiler");
        $__internal_eec62948486a0c4ee4172526012a6ab07ff94718bf771bea5b0da56052547e70->enter($__internal_eec62948486a0c4ee4172526012a6ab07ff94718bf771bea5b0da56052547e70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 4
        echo "\t<ol class=\"breadcrumb\">
\t\t<li>
\t\t\t<a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("admin_dashboard");
        echo "\">Panel</a>
\t\t</li>
\t\t<li>
\t\t\t<a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("page_index");
        echo "\">Strony</a>
\t\t</li>
\t\t<li class=\"active\">
\t\t\tNowa
\t\t</li>
\t</ol>
";
        
        $__internal_eec62948486a0c4ee4172526012a6ab07ff94718bf771bea5b0da56052547e70->leave($__internal_eec62948486a0c4ee4172526012a6ab07ff94718bf771bea5b0da56052547e70_prof);

    }

    // line 17
    public function block_content($context, array $blocks = array())
    {
        $__internal_308f63dfb87d79e8ec6b9720f96b2bcad8c1be6b6bf1cc6b698f8045d59d0214 = $this->env->getExtension("native_profiler");
        $__internal_308f63dfb87d79e8ec6b9720f96b2bcad8c1be6b6bf1cc6b698f8045d59d0214->enter($__internal_308f63dfb87d79e8ec6b9720f96b2bcad8c1be6b6bf1cc6b698f8045d59d0214_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 18
        echo "\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-heading\">
\t\t\t<h1>Tworzenie strony</h1>
\t\t</div>
\t\t<div class=\"panel-body\">\t\t
\t\t\t";
        // line 23
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t\t\t\t";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
\t\t\t\t<input class=\"btn btn-success\" type=\"submit\" value=\"Utwórz\">
\t\t\t";
        // line 26
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t\t
\t\t\t<a id=\"backtolist\"class=\"btn btn-danger\" href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("page_index");
        echo "\" role=\"button\">Anuluj</a>\t\t
\t\t</div>
\t</div>
";
        
        $__internal_308f63dfb87d79e8ec6b9720f96b2bcad8c1be6b6bf1cc6b698f8045d59d0214->leave($__internal_308f63dfb87d79e8ec6b9720f96b2bcad8c1be6b6bf1cc6b698f8045d59d0214_prof);

    }

    public function getTemplateName()
    {
        return "page/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 28,  87 => 26,  82 => 24,  78 => 23,  71 => 18,  65 => 17,  51 => 9,  45 => 6,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'admin_layout.html.twig' %}*/
/* */
/* {% block breadcrumb %}*/
/* 	<ol class="breadcrumb">*/
/* 		<li>*/
/* 			<a href="{{ path('admin_dashboard') }}">Panel</a>*/
/* 		</li>*/
/* 		<li>*/
/* 			<a href="{{ path('page_index') }}">Strony</a>*/
/* 		</li>*/
/* 		<li class="active">*/
/* 			Nowa*/
/* 		</li>*/
/* 	</ol>*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/* 	<div class="panel panel-default">*/
/* 		<div class="panel-heading">*/
/* 			<h1>Tworzenie strony</h1>*/
/* 		</div>*/
/* 		<div class="panel-body">		*/
/* 			{{ form_start(form) }}*/
/* 				{{ form_widget(form) }}*/
/* 				<input class="btn btn-success" type="submit" value="Utwórz">*/
/* 			{{ form_end(form) }}*/
/* 		*/
/* 			<a id="backtolist"class="btn btn-danger" href="{{ path('page_index') }}" role="button">Anuluj</a>		*/
/* 		</div>*/
/* 	</div>*/
/* {% endblock %}*/
