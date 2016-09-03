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
        $__internal_0fa10421eb760a90b896c36ecc0997136a424f6a20cadf8ee230e509b4f7cdc4 = $this->env->getExtension("native_profiler");
        $__internal_0fa10421eb760a90b896c36ecc0997136a424f6a20cadf8ee230e509b4f7cdc4->enter($__internal_0fa10421eb760a90b896c36ecc0997136a424f6a20cadf8ee230e509b4f7cdc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "page/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0fa10421eb760a90b896c36ecc0997136a424f6a20cadf8ee230e509b4f7cdc4->leave($__internal_0fa10421eb760a90b896c36ecc0997136a424f6a20cadf8ee230e509b4f7cdc4_prof);

    }

    // line 3
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_7946e25244d4c3bd6a560f33627a22798f6fe35f6efb4b50096a39d0c000db61 = $this->env->getExtension("native_profiler");
        $__internal_7946e25244d4c3bd6a560f33627a22798f6fe35f6efb4b50096a39d0c000db61->enter($__internal_7946e25244d4c3bd6a560f33627a22798f6fe35f6efb4b50096a39d0c000db61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

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
        
        $__internal_7946e25244d4c3bd6a560f33627a22798f6fe35f6efb4b50096a39d0c000db61->leave($__internal_7946e25244d4c3bd6a560f33627a22798f6fe35f6efb4b50096a39d0c000db61_prof);

    }

    // line 17
    public function block_content($context, array $blocks = array())
    {
        $__internal_321d4422013287a92a9dc178812f5fb7b16898ba915325c9f063da69ba4bcc2e = $this->env->getExtension("native_profiler");
        $__internal_321d4422013287a92a9dc178812f5fb7b16898ba915325c9f063da69ba4bcc2e->enter($__internal_321d4422013287a92a9dc178812f5fb7b16898ba915325c9f063da69ba4bcc2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
\t\t\t";
        // line 29
        $this->env->getExtension('form')->renderer->setTheme((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), array(0 => $this));
        // line 30
        echo "\t\t\t";
        $this->displayBlock('_page_slug_widget', $context, $blocks);
        // line 38
        echo "\t
\t\t

\t\t\t";
        // line 41
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
\t\t\t\t";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
\t\t\t\t
\t\t\t\t<input class=\"btn btn-success\" type=\"submit\" value=\"Zapisz\">
\t\t\t";
        // line 45
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
\t\t
\t\t\t<a id=\"backtolist\"class=\"btn btn-warning\" href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("page_index");
        echo "\" role=\"button\">Powrót do Listy</a>
\t\t
\t\t\t";
        // line 49
        if ( !(null === (isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")))) {
            // line 50
            echo "\t\t\t\t";
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
            echo "
\t\t\t\t\t<input class=\"btn btn-danger\" type=\"submit\" value=\"Usuń\">
\t\t\t\t";
            // line 52
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
            echo "
\t\t\t";
        }
        // line 54
        echo "\t\t</div>
\t</div>
";
        
        $__internal_321d4422013287a92a9dc178812f5fb7b16898ba915325c9f063da69ba4bcc2e->leave($__internal_321d4422013287a92a9dc178812f5fb7b16898ba915325c9f063da69ba4bcc2e_prof);

    }

    // line 30
    public function block__page_slug_widget($context, array $blocks = array())
    {
        $__internal_06d15be5feacb4a13f93b36923d2ff78894299d48eed36912c794a7dd51944cb = $this->env->getExtension("native_profiler");
        $__internal_06d15be5feacb4a13f93b36923d2ff78894299d48eed36912c794a7dd51944cb->enter($__internal_06d15be5feacb4a13f93b36923d2ff78894299d48eed36912c794a7dd51944cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_page_slug_widget"));

        // line 31
        echo "\t\t\t\t<div id=\"address\" class=\"form-group\">
\t\t\t\t\t<div>";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "host", array()), "html", null, true);
        echo "</div>
\t\t\t\t\t<div class=\"slash\"> / </div>
\t\t\t\t\t<div>menu</div>
\t\t\t\t\t<div class=\"slash\"> / </div>
\t\t\t\t\t";
        // line 36
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
\t\t\t\t</div>
\t\t\t";
        
        $__internal_06d15be5feacb4a13f93b36923d2ff78894299d48eed36912c794a7dd51944cb->leave($__internal_06d15be5feacb4a13f93b36923d2ff78894299d48eed36912c794a7dd51944cb_prof);

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
        return array (  168 => 36,  161 => 32,  158 => 31,  152 => 30,  143 => 54,  138 => 52,  132 => 50,  130 => 49,  125 => 47,  120 => 45,  114 => 42,  110 => 41,  105 => 38,  102 => 30,  100 => 29,  92 => 23,  83 => 20,  80 => 19,  75 => 18,  69 => 17,  58 => 12,  52 => 9,  46 => 6,  42 => 4,  36 => 3,  11 => 1,);
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
/* 		*/
/* 			{% form_theme edit_form _self %}*/
/* 			{% block _page_slug_widget %}*/
/* 				<div id="address" class="form-group">*/
/* 					<div>{{ app.request.host }}</div>*/
/* 					<div class="slash"> / </div>*/
/* 					<div>menu</div>*/
/* 					<div class="slash"> / </div>*/
/* 					{{ block('form_widget_simple') }}*/
/* 				</div>*/
/* 			{% endblock %}	*/
/* 		*/
/* */
/* 			{{ form_start(edit_form) }}*/
/* 				{{ form_widget(edit_form) }}*/
/* 				*/
/* 				<input class="btn btn-success" type="submit" value="Zapisz">*/
/* 			{{ form_end(edit_form) }}*/
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
