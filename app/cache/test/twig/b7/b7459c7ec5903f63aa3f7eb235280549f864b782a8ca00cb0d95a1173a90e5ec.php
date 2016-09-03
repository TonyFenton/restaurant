<?php

/* page/edit.html.twig */
class __TwigTemplate_b051510647c8c2668c60efe8a3c1814c44fd8c417fe2fc1b3f4d1c2bc39b5fff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin_layout.html.twig", "page/edit.html.twig", 1);
        $this->blocks = array(
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'content' => array($this, 'block_content'),
            '_page_slug_widget' => array($this, 'block__page_slug_widget'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f88372959738d6e7a07e2e1074a7ecad1778aa8eecf63d3ec04b696e855d806b = $this->env->getExtension("native_profiler");
        $__internal_f88372959738d6e7a07e2e1074a7ecad1778aa8eecf63d3ec04b696e855d806b->enter($__internal_f88372959738d6e7a07e2e1074a7ecad1778aa8eecf63d3ec04b696e855d806b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "page/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f88372959738d6e7a07e2e1074a7ecad1778aa8eecf63d3ec04b696e855d806b->leave($__internal_f88372959738d6e7a07e2e1074a7ecad1778aa8eecf63d3ec04b696e855d806b_prof);

    }

    // line 3
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_7d2f073c1b0adcc9365c8e6d1abf3a17d2b333e328d2e87fefcad673f707ff88 = $this->env->getExtension("native_profiler");
        $__internal_7d2f073c1b0adcc9365c8e6d1abf3a17d2b333e328d2e87fefcad673f707ff88->enter($__internal_7d2f073c1b0adcc9365c8e6d1abf3a17d2b333e328d2e87fefcad673f707ff88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

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
\t\t\t";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "name", array()), "html", null, true);
        echo "
\t\t</li>
\t</ol>
";
        
        $__internal_7d2f073c1b0adcc9365c8e6d1abf3a17d2b333e328d2e87fefcad673f707ff88->leave($__internal_7d2f073c1b0adcc9365c8e6d1abf3a17d2b333e328d2e87fefcad673f707ff88_prof);

    }

    // line 17
    public function block_content($context, array $blocks = array())
    {
        $__internal_1a70207470aa146b29952828225ffe84fdc6b032e27c59ab7c235f93b2d3e379 = $this->env->getExtension("native_profiler");
        $__internal_1a70207470aa146b29952828225ffe84fdc6b032e27c59ab7c235f93b2d3e379->enter($__internal_1a70207470aa146b29952828225ffe84fdc6b032e27c59ab7c235f93b2d3e379_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 18
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 19
            echo "\t\t<div class=\"alert alert-info\" role=\"alert\">
\t\t\t";
            // line 20
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
\t\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-heading\">
\t\t\t<h1>Edycja strony</h1>
\t\t</div>
\t\t<div class=\"panel-body\">


\t\t
\t\t
\t\t\t";
        // line 32
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
\t\t\t
\t\t\t";
        // line 34
        $this->env->getExtension('form')->renderer->setTheme((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), array(0 => $this));
        // line 35
        echo "
\t\t\t";
        // line 36
        $this->displayBlock('_page_slug_widget', $context, $blocks);
        // line 41
        echo "\t







\t\t\t

\t\t\t\t";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
\t\t\t\t
\t\t\t\t<input class=\"btn btn-success\" type=\"submit\" value=\"Zapisz\">
\t\t\t";
        // line 54
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
\t\t
\t\t
\t\t
\t\t
\t\t
\t\t
\t\t
\t\t\t<a id=\"backtolist\"class=\"btn btn-warning\" href=\"";
        // line 62
        echo $this->env->getExtension('routing')->getPath("page_index");
        echo "\" role=\"button\">Powrót do Listy</a>
\t\t
\t\t\t";
        // line 64
        if ( !(null === (isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")))) {
            // line 65
            echo "\t\t\t\t";
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
            echo "
\t\t\t\t\t<input class=\"btn btn-danger\" type=\"submit\" value=\"Usuń\">
\t\t\t\t";
            // line 67
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
            echo "
\t\t\t";
        }
        // line 69
        echo "\t\t</div>
\t</div>
";
        
        $__internal_1a70207470aa146b29952828225ffe84fdc6b032e27c59ab7c235f93b2d3e379->leave($__internal_1a70207470aa146b29952828225ffe84fdc6b032e27c59ab7c235f93b2d3e379_prof);

    }

    // line 36
    public function block__page_slug_widget($context, array $blocks = array())
    {
        $__internal_15ea0856d8ed9dc9e6b394d6ae49c1bea027a4beab222fe8c896e329fc8ab5d6 = $this->env->getExtension("native_profiler");
        $__internal_15ea0856d8ed9dc9e6b394d6ae49c1bea027a4beab222fe8c896e329fc8ab5d6->enter($__internal_15ea0856d8ed9dc9e6b394d6ae49c1bea027a4beab222fe8c896e329fc8ab5d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_page_slug_widget"));

        // line 37
        echo "\t\t\t\t<div class=\"text_widget\">
\t\t\t\t<span>tutaggggggggj</span>
\t\t\t\t\t";
        // line 39
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
\t\t\t\t</div>
\t\t\t";
        
        $__internal_15ea0856d8ed9dc9e6b394d6ae49c1bea027a4beab222fe8c896e329fc8ab5d6->leave($__internal_15ea0856d8ed9dc9e6b394d6ae49c1bea027a4beab222fe8c896e329fc8ab5d6_prof);

    }

    public function getTemplateName()
    {
        return "page/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 39,  177 => 37,  171 => 36,  162 => 69,  157 => 67,  151 => 65,  149 => 64,  144 => 62,  133 => 54,  127 => 51,  115 => 41,  113 => 36,  110 => 35,  108 => 34,  103 => 32,  92 => 23,  83 => 20,  80 => 19,  75 => 18,  69 => 17,  58 => 12,  52 => 9,  46 => 6,  42 => 4,  36 => 3,  11 => 1,);
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
/* 			{{ page.name }}*/
/* 		</li>*/
/* 	</ol>*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/* 	{% for flash_message in app.session.flashBag.get('notice') %}*/
/* 		<div class="alert alert-info" role="alert">*/
/* 			{{ flash_message }}*/
/* 		</div>*/
/* 	{% endfor %}*/
/* 	<div class="panel panel-default">*/
/* 		<div class="panel-heading">*/
/* 			<h1>Edycja strony</h1>*/
/* 		</div>*/
/* 		<div class="panel-body">*/
/* */
/* */
/* 		*/
/* 		*/
/* 			{{ form_start(edit_form) }}*/
/* 			*/
/* 			{% form_theme edit_form _self %}*/
/* */
/* 			{% block _page_slug_widget %}*/
/* 				<div class="text_widget">*/
/* 				<span>tutaggggggggj</span>*/
/* 					{{ block('form_widget_simple') }}*/
/* 				</div>*/
/* 			{% endblock %}	*/
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* 			*/
/* */
/* 				{{ form_widget(edit_form) }}*/
/* 				*/
/* 				<input class="btn btn-success" type="submit" value="Zapisz">*/
/* 			{{ form_end(edit_form) }}*/
/* 		*/
/* 		*/
/* 		*/
/* 		*/
/* 		*/
/* 		*/
/* 		*/
/* 			<a id="backtolist"class="btn btn-warning" href="{{ path('page_index') }}" role="button">Powrót do Listy</a>*/
/* 		*/
/* 			{% if delete_form is not null %}*/
/* 				{{ form_start(delete_form) }}*/
/* 					<input class="btn btn-danger" type="submit" value="Usuń">*/
/* 				{{ form_end(delete_form) }}*/
/* 			{% endif %}*/
/* 		</div>*/
/* 	</div>*/
/* {% endblock %}*/
