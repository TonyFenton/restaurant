<?php

/* footer/new.html.twig */
class __TwigTemplate_a49391261854d19de5028363e76f4e2f4b34f91caec6fdfcdefd8bc5b8af2e6b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin_layout.html.twig", "footer/new.html.twig", 1);
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
        $__internal_96e079d5df9cac9f32f80e187d829e15d77646e450a4f547e99d55fce064125b = $this->env->getExtension("native_profiler");
        $__internal_96e079d5df9cac9f32f80e187d829e15d77646e450a4f547e99d55fce064125b->enter($__internal_96e079d5df9cac9f32f80e187d829e15d77646e450a4f547e99d55fce064125b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "footer/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_96e079d5df9cac9f32f80e187d829e15d77646e450a4f547e99d55fce064125b->leave($__internal_96e079d5df9cac9f32f80e187d829e15d77646e450a4f547e99d55fce064125b_prof);

    }

    // line 3
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_a89b2138b6e7f4207889e3664c3f4b7190d10b769d86da128d9353cf41b6dcf5 = $this->env->getExtension("native_profiler");
        $__internal_a89b2138b6e7f4207889e3664c3f4b7190d10b769d86da128d9353cf41b6dcf5->enter($__internal_a89b2138b6e7f4207889e3664c3f4b7190d10b769d86da128d9353cf41b6dcf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

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
        echo $this->env->getExtension('routing')->getPath("footer_index");
        echo "\">Stopki</a>
\t\t</li>
\t\t<li class=\"active\">
\t\t\tNowa
\t\t</li>
\t</ol>
";
        
        $__internal_a89b2138b6e7f4207889e3664c3f4b7190d10b769d86da128d9353cf41b6dcf5->leave($__internal_a89b2138b6e7f4207889e3664c3f4b7190d10b769d86da128d9353cf41b6dcf5_prof);

    }

    // line 17
    public function block_content($context, array $blocks = array())
    {
        $__internal_039b28ba9450931c19f64d7559684ac3153ab0d5da7a2f86c11756738381fc36 = $this->env->getExtension("native_profiler");
        $__internal_039b28ba9450931c19f64d7559684ac3153ab0d5da7a2f86c11756738381fc36->enter($__internal_039b28ba9450931c19f64d7559684ac3153ab0d5da7a2f86c11756738381fc36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 18
        echo "\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-heading\">
\t\t\t<h1>Tworzenie stopki</h1>
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
\t\t\t<a id=\"backtolist\"class=\"btn btn-danger\" href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("footer_index");
        echo "\" role=\"button\">Anuluj</a>\t\t
\t\t</div>
\t</div>
";
        
        $__internal_039b28ba9450931c19f64d7559684ac3153ab0d5da7a2f86c11756738381fc36->leave($__internal_039b28ba9450931c19f64d7559684ac3153ab0d5da7a2f86c11756738381fc36_prof);

    }

    public function getTemplateName()
    {
        return "footer/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 27,  87 => 26,  82 => 24,  78 => 23,  71 => 18,  65 => 17,  51 => 9,  45 => 6,  41 => 4,  35 => 3,  11 => 1,);
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
/* 			<a href="{{ path('footer_index') }}">Stopki</a>*/
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
/* 			<h1>Tworzenie stopki</h1>*/
/* 		</div>*/
/* 		<div class="panel-body">		*/
/* 			{{ form_start(form) }}*/
/* 				{{ form_widget(form) }}*/
/* 				<input class="btn btn-success" type="submit" value="Utwórz">*/
/* 			{{ form_end(form) }}*/
/* 			<a id="backtolist"class="btn btn-danger" href="{{ path('footer_index') }}" role="button">Anuluj</a>		*/
/* 		</div>*/
/* 	</div>*/
/* {% endblock %}*/
