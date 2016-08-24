<?php

/* admin/page/edit.html.twig */
class __TwigTemplate_a39ec2eebe703d557756e808a0fbfe97275e9fb2c5e4950ce85311521418ba9e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/page/edit.html.twig", 1);
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
        $__internal_f079c537dde33f177b1724f380207bbbe3766ca95995d552e2d3e167a0981e81 = $this->env->getExtension("native_profiler");
        $__internal_f079c537dde33f177b1724f380207bbbe3766ca95995d552e2d3e167a0981e81->enter($__internal_f079c537dde33f177b1724f380207bbbe3766ca95995d552e2d3e167a0981e81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/page/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f079c537dde33f177b1724f380207bbbe3766ca95995d552e2d3e167a0981e81->leave($__internal_f079c537dde33f177b1724f380207bbbe3766ca95995d552e2d3e167a0981e81_prof);

    }

    // line 3
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_32cca0d2148bc3e4ac3fb334593e8a9edaba6e54c3241421d359c942a5b910c5 = $this->env->getExtension("native_profiler");
        $__internal_32cca0d2148bc3e4ac3fb334593e8a9edaba6e54c3241421d359c942a5b910c5->enter($__internal_32cca0d2148bc3e4ac3fb334593e8a9edaba6e54c3241421d359c942a5b910c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

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
\t\t\t";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "name", array()), "html", null, true);
        echo "
\t\t</li>
\t</ol>
";
        
        $__internal_32cca0d2148bc3e4ac3fb334593e8a9edaba6e54c3241421d359c942a5b910c5->leave($__internal_32cca0d2148bc3e4ac3fb334593e8a9edaba6e54c3241421d359c942a5b910c5_prof);

    }

    // line 17
    public function block_content($context, array $blocks = array())
    {
        $__internal_d100c5aed34c311db81ccf6d3f750bc7353b088abc9d7a27317a6b0c31d1189b = $this->env->getExtension("native_profiler");
        $__internal_d100c5aed34c311db81ccf6d3f750bc7353b088abc9d7a27317a6b0c31d1189b->enter($__internal_d100c5aed34c311db81ccf6d3f750bc7353b088abc9d7a27317a6b0c31d1189b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
\t\t<div class=\"panel-heading\"><h1>Edycja strony</h1></div>
\t\t<div class=\"panel-body\">\t
\t\t\t";
        // line 26
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
\t\t\t\t";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
\t\t\t\t<input class=\"btn btn-success\" type=\"submit\" value=\"Zapisz\">
\t\t\t";
        // line 29
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
\t\t
\t\t\t<a id=\"backtolist\"class=\"btn btn-warning\" href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("admin_page_index");
        echo "\" role=\"button\">Powrót do Listy</a>
\t\t
\t\t\t";
        // line 33
        if ( !(null === (isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")))) {
            // line 34
            echo "\t\t\t\t";
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
            echo "
\t\t\t\t\t<input class=\"btn btn-danger\" type=\"submit\" value=\"Usuń\">
\t\t\t\t";
            // line 36
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
            echo "
\t\t\t";
        }
        // line 38
        echo "\t\t</div>
\t</div>
";
        
        $__internal_d100c5aed34c311db81ccf6d3f750bc7353b088abc9d7a27317a6b0c31d1189b->leave($__internal_d100c5aed34c311db81ccf6d3f750bc7353b088abc9d7a27317a6b0c31d1189b_prof);

    }

    public function getTemplateName()
    {
        return "admin/page/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 38,  123 => 36,  117 => 34,  115 => 33,  110 => 31,  105 => 29,  100 => 27,  96 => 26,  91 => 23,  82 => 20,  79 => 19,  74 => 18,  68 => 17,  57 => 12,  51 => 9,  45 => 6,  41 => 4,  35 => 3,  11 => 1,);
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
/* 		<div class="panel-heading"><h1>Edycja strony</h1></div>*/
/* 		<div class="panel-body">	*/
/* 			{{ form_start(edit_form) }}*/
/* 				{{ form_widget(edit_form) }}*/
/* 				<input class="btn btn-success" type="submit" value="Zapisz">*/
/* 			{{ form_end(edit_form) }}*/
/* 		*/
/* 			<a id="backtolist"class="btn btn-warning" href="{{ path('admin_page_index') }}" role="button">Powrót do Listy</a>*/
/* 		*/
/* 			{% if delete_form is not null %}*/
/* 				{{ form_start(delete_form) }}*/
/* 					<input class="btn btn-danger" type="submit" value="Usuń">*/
/* 				{{ form_end(delete_form) }}*/
/* 			{% endif %}*/
/* 		</div>*/
/* 	</div>*/
/* {% endblock %}*/
/* */
