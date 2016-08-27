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
        $__internal_60837f54ede8cb4666f6435e4d1bb781fe03ff928c7452ffdf5e8431aee25c0a = $this->env->getExtension("native_profiler");
        $__internal_60837f54ede8cb4666f6435e4d1bb781fe03ff928c7452ffdf5e8431aee25c0a->enter($__internal_60837f54ede8cb4666f6435e4d1bb781fe03ff928c7452ffdf5e8431aee25c0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "page/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_60837f54ede8cb4666f6435e4d1bb781fe03ff928c7452ffdf5e8431aee25c0a->leave($__internal_60837f54ede8cb4666f6435e4d1bb781fe03ff928c7452ffdf5e8431aee25c0a_prof);

    }

    // line 3
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_ed0b4d3242e9e96453ab9c02a390263b94b764bf8899148d69e1f525d32d7711 = $this->env->getExtension("native_profiler");
        $__internal_ed0b4d3242e9e96453ab9c02a390263b94b764bf8899148d69e1f525d32d7711->enter($__internal_ed0b4d3242e9e96453ab9c02a390263b94b764bf8899148d69e1f525d32d7711_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

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
        
        $__internal_ed0b4d3242e9e96453ab9c02a390263b94b764bf8899148d69e1f525d32d7711->leave($__internal_ed0b4d3242e9e96453ab9c02a390263b94b764bf8899148d69e1f525d32d7711_prof);

    }

    // line 17
    public function block_content($context, array $blocks = array())
    {
        $__internal_09aea5f45d68606fdfd649bc7675b2213b985a678b1afdd17595c5d6f5a92fd4 = $this->env->getExtension("native_profiler");
        $__internal_09aea5f45d68606fdfd649bc7675b2213b985a678b1afdd17595c5d6f5a92fd4->enter($__internal_09aea5f45d68606fdfd649bc7675b2213b985a678b1afdd17595c5d6f5a92fd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        echo $this->env->getExtension('routing')->getPath("page_index");
        echo "\" role=\"button\">Anuluj</a>\t\t
\t\t</div>
\t</div>
";
        
        $__internal_09aea5f45d68606fdfd649bc7675b2213b985a678b1afdd17595c5d6f5a92fd4->leave($__internal_09aea5f45d68606fdfd649bc7675b2213b985a678b1afdd17595c5d6f5a92fd4_prof);

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
        return array (  90 => 26,  85 => 24,  80 => 22,  76 => 21,  71 => 18,  65 => 17,  51 => 9,  45 => 6,  41 => 4,  35 => 3,  11 => 1,);
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
/* 		<div class="panel-heading"><h1>Tworzenie strony</h1></div>*/
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
/* */
