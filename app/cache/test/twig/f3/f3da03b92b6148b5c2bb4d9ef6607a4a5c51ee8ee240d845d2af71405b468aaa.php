<?php

/* footer/edit.html.twig */
class __TwigTemplate_95b95148323c14376416d0f45bd2481b90f91bf79e4017e01440bf81fb2a54fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin_layout.html.twig", "footer/edit.html.twig", 1);
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
        $__internal_1b2fa176be6883c28745d7facb4308d533b2c7237ac626fc41cd894f442e184a = $this->env->getExtension("native_profiler");
        $__internal_1b2fa176be6883c28745d7facb4308d533b2c7237ac626fc41cd894f442e184a->enter($__internal_1b2fa176be6883c28745d7facb4308d533b2c7237ac626fc41cd894f442e184a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "footer/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b2fa176be6883c28745d7facb4308d533b2c7237ac626fc41cd894f442e184a->leave($__internal_1b2fa176be6883c28745d7facb4308d533b2c7237ac626fc41cd894f442e184a_prof);

    }

    // line 3
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_17b7a338539a18ab1386d6505478b0fd8b87c53758d254d48e7992af8db161c7 = $this->env->getExtension("native_profiler");
        $__internal_17b7a338539a18ab1386d6505478b0fd8b87c53758d254d48e7992af8db161c7->enter($__internal_17b7a338539a18ab1386d6505478b0fd8b87c53758d254d48e7992af8db161c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

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
\t\t\t";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["footer"]) ? $context["footer"] : $this->getContext($context, "footer")), "name", array()), "html", null, true);
        echo "
\t\t</li>
\t</ol>
";
        
        $__internal_17b7a338539a18ab1386d6505478b0fd8b87c53758d254d48e7992af8db161c7->leave($__internal_17b7a338539a18ab1386d6505478b0fd8b87c53758d254d48e7992af8db161c7_prof);

    }

    // line 17
    public function block_content($context, array $blocks = array())
    {
        $__internal_d70a5f0736a022af208f27f6b90927453cf584f2aaa4f2aa7d0215e150280603 = $this->env->getExtension("native_profiler");
        $__internal_d70a5f0736a022af208f27f6b90927453cf584f2aaa4f2aa7d0215e150280603->enter($__internal_d70a5f0736a022af208f27f6b90927453cf584f2aaa4f2aa7d0215e150280603_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
\t\t
\t\t\t";
        // line 27
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
\t\t\t\t";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
\t\t\t\t<input class=\"btn btn-success\" type=\"submit\" value=\"Zapisz\">
\t\t\t";
        // line 30
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
\t\t
\t\t\t<a id=\"backtolist\" class=\"btn btn-warning\" href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("footer_index");
        echo "\" role=\"button\">Powrót do Listy</a>
\t\t\t
\t\t\t";
        // line 34
        if ( !(null === (isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")))) {
            // line 35
            echo "\t\t\t\t";
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
            echo "
\t\t\t\t\t<input class=\"btn btn-danger\" type=\"submit\" value=\"Usuń\">
\t\t\t\t";
            // line 37
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
            echo "
\t\t\t";
        }
        // line 39
        echo "\t\t</div>
\t</div>
";
        
        $__internal_d70a5f0736a022af208f27f6b90927453cf584f2aaa4f2aa7d0215e150280603->leave($__internal_d70a5f0736a022af208f27f6b90927453cf584f2aaa4f2aa7d0215e150280603_prof);

    }

    public function getTemplateName()
    {
        return "footer/edit.html.twig";
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
/* 		*/
/* 			{{ form_start(edit_form) }}*/
/* 				{{ form_widget(edit_form) }}*/
/* 				<input class="btn btn-success" type="submit" value="Zapisz">*/
/* 			{{ form_end(edit_form) }}*/
/* 		*/
/* 			<a id="backtolist" class="btn btn-warning" href="{{ path('footer_index') }}" role="button">Powrót do Listy</a>*/
/* 			*/
/* 			{% if delete_form is not null %}*/
/* 				{{ form_start(delete_form) }}*/
/* 					<input class="btn btn-danger" type="submit" value="Usuń">*/
/* 				{{ form_end(delete_form) }}*/
/* 			{% endif %}*/
/* 		</div>*/
/* 	</div>*/
/* {% endblock %}*/
/* */
