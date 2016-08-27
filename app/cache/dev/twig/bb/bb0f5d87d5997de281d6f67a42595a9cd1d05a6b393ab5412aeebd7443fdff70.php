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
        $__internal_94cb605065df0548f3aba13d500f3c086cc1b1a0f09cf3e5be83984b1d72f478 = $this->env->getExtension("native_profiler");
        $__internal_94cb605065df0548f3aba13d500f3c086cc1b1a0f09cf3e5be83984b1d72f478->enter($__internal_94cb605065df0548f3aba13d500f3c086cc1b1a0f09cf3e5be83984b1d72f478_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "footer/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_94cb605065df0548f3aba13d500f3c086cc1b1a0f09cf3e5be83984b1d72f478->leave($__internal_94cb605065df0548f3aba13d500f3c086cc1b1a0f09cf3e5be83984b1d72f478_prof);

    }

    // line 3
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_184ab8595a1f5882bf7575799d54031987937c0b7ca9472c6438ab893453bfc3 = $this->env->getExtension("native_profiler");
        $__internal_184ab8595a1f5882bf7575799d54031987937c0b7ca9472c6438ab893453bfc3->enter($__internal_184ab8595a1f5882bf7575799d54031987937c0b7ca9472c6438ab893453bfc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

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
        echo $this->env->getExtension('routing')->getPath("admin_footer_index");
        echo "\">Stopki</a>
\t\t</li>
\t\t<li class=\"active\">
\t\t\tNowa
\t\t</li>
\t</ol>
";
        
        $__internal_184ab8595a1f5882bf7575799d54031987937c0b7ca9472c6438ab893453bfc3->leave($__internal_184ab8595a1f5882bf7575799d54031987937c0b7ca9472c6438ab893453bfc3_prof);

    }

    // line 17
    public function block_content($context, array $blocks = array())
    {
        $__internal_e4a5cd5cd44838080ebb3ebfd2a878ef5a48c57981dae38d180351c2854aa1bf = $this->env->getExtension("native_profiler");
        $__internal_e4a5cd5cd44838080ebb3ebfd2a878ef5a48c57981dae38d180351c2854aa1bf->enter($__internal_e4a5cd5cd44838080ebb3ebfd2a878ef5a48c57981dae38d180351c2854aa1bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_e4a5cd5cd44838080ebb3ebfd2a878ef5a48c57981dae38d180351c2854aa1bf->leave($__internal_e4a5cd5cd44838080ebb3ebfd2a878ef5a48c57981dae38d180351c2854aa1bf_prof);

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
