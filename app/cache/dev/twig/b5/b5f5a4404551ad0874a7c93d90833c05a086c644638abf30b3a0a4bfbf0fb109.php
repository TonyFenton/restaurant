<?php

/* admin/footer/edit.html.twig */
class __TwigTemplate_86d1fff4dbeb53b772b6830607b2f3a4465b4926d9c1f514004f1f4c065b465b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/footer/edit.html.twig", 1);
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
        $__internal_b1e93903b34a6438edbb151c5beb9cc74f2e2d3ea87c2f4a091dfa1e5845bd9c = $this->env->getExtension("native_profiler");
        $__internal_b1e93903b34a6438edbb151c5beb9cc74f2e2d3ea87c2f4a091dfa1e5845bd9c->enter($__internal_b1e93903b34a6438edbb151c5beb9cc74f2e2d3ea87c2f4a091dfa1e5845bd9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/footer/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1e93903b34a6438edbb151c5beb9cc74f2e2d3ea87c2f4a091dfa1e5845bd9c->leave($__internal_b1e93903b34a6438edbb151c5beb9cc74f2e2d3ea87c2f4a091dfa1e5845bd9c_prof);

    }

    // line 3
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_051bc45820b2dd4c308fa2ec73b65f80ffb956824636bd46e1c5fb1b1cba0793 = $this->env->getExtension("native_profiler");
        $__internal_051bc45820b2dd4c308fa2ec73b65f80ffb956824636bd46e1c5fb1b1cba0793->enter($__internal_051bc45820b2dd4c308fa2ec73b65f80ffb956824636bd46e1c5fb1b1cba0793_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

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
\t\t\t";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["footer"]) ? $context["footer"] : $this->getContext($context, "footer")), "name", array()), "html", null, true);
        echo "
\t\t</li>
\t</ol>
";
        
        $__internal_051bc45820b2dd4c308fa2ec73b65f80ffb956824636bd46e1c5fb1b1cba0793->leave($__internal_051bc45820b2dd4c308fa2ec73b65f80ffb956824636bd46e1c5fb1b1cba0793_prof);

    }

    // line 17
    public function block_content($context, array $blocks = array())
    {
        $__internal_21fb61d5f5892e9d5245f01faa41dadb42d018035f44385a616ec6c759f8d6da = $this->env->getExtension("native_profiler");
        $__internal_21fb61d5f5892e9d5245f01faa41dadb42d018035f44385a616ec6c759f8d6da->enter($__internal_21fb61d5f5892e9d5245f01faa41dadb42d018035f44385a616ec6c759f8d6da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
\t\t<div class=\"panel-heading\"><h1>Edycja stopki</h1></div>
\t\t<div class=\"panel-body\">
\t\t\t
\t\t\t\t";
        // line 27
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
\t\t\t\t\t";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
\t\t\t\t\t<input class=\"btn btn-success\" type=\"submit\" value=\"Zapisz\">
\t\t\t\t";
        // line 30
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
\t\t\t
\t\t\t\t<a id=\"backtolist\"class=\"btn btn-warning\" href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("admin_footer_index");
        echo "\" role=\"button\">Powrót do Listy</a>
\t\t\t
\t\t\t\t";
        // line 34
        if ( !(null === (isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")))) {
            // line 35
            echo "\t\t\t\t\t";
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
            echo "
\t\t\t\t\t\t<input class=\"btn btn-danger\" type=\"submit\" value=\"Usuń\">
\t\t\t\t\t";
            // line 37
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
            echo "
\t\t\t\t";
        }
        // line 39
        echo "\t\t</div>
\t</div>
";
        
        $__internal_21fb61d5f5892e9d5245f01faa41dadb42d018035f44385a616ec6c759f8d6da->leave($__internal_21fb61d5f5892e9d5245f01faa41dadb42d018035f44385a616ec6c759f8d6da_prof);

    }

    public function getTemplateName()
    {
        return "admin/footer/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 39,  124 => 37,  118 => 35,  116 => 34,  111 => 32,  106 => 30,  101 => 28,  97 => 27,  91 => 23,  82 => 20,  79 => 19,  74 => 18,  68 => 17,  57 => 12,  51 => 9,  45 => 6,  41 => 4,  35 => 3,  11 => 1,);
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
/* 			{{ footer.name }}*/
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
/* 		<div class="panel-heading"><h1>Edycja stopki</h1></div>*/
/* 		<div class="panel-body">*/
/* 			*/
/* 				{{ form_start(edit_form) }}*/
/* 					{{ form_widget(edit_form) }}*/
/* 					<input class="btn btn-success" type="submit" value="Zapisz">*/
/* 				{{ form_end(edit_form) }}*/
/* 			*/
/* 				<a id="backtolist"class="btn btn-warning" href="{{ path('admin_footer_index') }}" role="button">Powrót do Listy</a>*/
/* 			*/
/* 				{% if delete_form is not null %}*/
/* 					{{ form_start(delete_form) }}*/
/* 						<input class="btn btn-danger" type="submit" value="Usuń">*/
/* 					{{ form_end(delete_form) }}*/
/* 				{% endif %}*/
/* 		</div>*/
/* 	</div>*/
/* {% endblock %}*/
/* */
