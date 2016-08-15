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
        $__internal_6d8afa4cfc07b49b17a63c57e394b04fca5e82273898e3434c178fd77d0a2f11 = $this->env->getExtension("native_profiler");
        $__internal_6d8afa4cfc07b49b17a63c57e394b04fca5e82273898e3434c178fd77d0a2f11->enter($__internal_6d8afa4cfc07b49b17a63c57e394b04fca5e82273898e3434c178fd77d0a2f11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/page/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d8afa4cfc07b49b17a63c57e394b04fca5e82273898e3434c178fd77d0a2f11->leave($__internal_6d8afa4cfc07b49b17a63c57e394b04fca5e82273898e3434c178fd77d0a2f11_prof);

    }

    // line 3
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_d39a0ee37ef8946009cdd52f94fa5dd67472f2ff9902fd9dab78b6373b25a856 = $this->env->getExtension("native_profiler");
        $__internal_d39a0ee37ef8946009cdd52f94fa5dd67472f2ff9902fd9dab78b6373b25a856->enter($__internal_d39a0ee37ef8946009cdd52f94fa5dd67472f2ff9902fd9dab78b6373b25a856_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 4
        echo "\t<li>
\t\t<a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("admin_page_index");
        echo "\">Strony</a>
\t</li>
\t<li class=\"active\">
\t\t";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "name", array()), "html", null, true);
        echo "
\t</li>
";
        
        $__internal_d39a0ee37ef8946009cdd52f94fa5dd67472f2ff9902fd9dab78b6373b25a856->leave($__internal_d39a0ee37ef8946009cdd52f94fa5dd67472f2ff9902fd9dab78b6373b25a856_prof);

    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        $__internal_0bc9d8a2394c35f77ba86198e4cb7eace89eafb15c0a6496b9a24bdcd658cbac = $this->env->getExtension("native_profiler");
        $__internal_0bc9d8a2394c35f77ba86198e4cb7eace89eafb15c0a6496b9a24bdcd658cbac->enter($__internal_0bc9d8a2394c35f77ba86198e4cb7eace89eafb15c0a6496b9a24bdcd658cbac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 13
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 14
            echo "\t\t<div class=\"alert alert-info\" role=\"alert\">
\t\t\t";
            // line 15
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
\t\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-heading\"><h1>Edycja strony</h1></div>
\t\t<div class=\"panel-body\">
\t\t\t
\t\t\t\t";
        // line 22
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
\t\t\t\t\t";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
\t\t\t\t\t<input class=\"btn btn-success\" type=\"submit\" value=\"Zapisz\">
\t\t\t\t";
        // line 25
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
\t\t\t
\t\t\t\t<a id=\"backtolist\"class=\"btn btn-warning\" href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("admin_page_index");
        echo "\" role=\"button\">Powrót do Listy</a>
\t\t\t
\t\t\t\t";
        // line 29
        if ( !(null === (isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")))) {
            // line 30
            echo "\t\t\t\t\t";
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
            echo "
\t\t\t\t\t\t<input class=\"btn btn-danger\" type=\"submit\" value=\"Usuń\">
\t\t\t\t\t";
            // line 32
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
            echo "
\t\t\t\t";
        }
        // line 34
        echo "\t\t</div>
\t</div>
";
        
        $__internal_0bc9d8a2394c35f77ba86198e4cb7eace89eafb15c0a6496b9a24bdcd658cbac->leave($__internal_0bc9d8a2394c35f77ba86198e4cb7eace89eafb15c0a6496b9a24bdcd658cbac_prof);

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
        return array (  121 => 34,  116 => 32,  110 => 30,  108 => 29,  103 => 27,  98 => 25,  93 => 23,  89 => 22,  83 => 18,  74 => 15,  71 => 14,  66 => 13,  60 => 12,  50 => 8,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'admin/layout.html.twig' %}*/
/* */
/* {% block breadcrumb %}*/
/* 	<li>*/
/* 		<a href="{{ path('admin_page_index') }}">Strony</a>*/
/* 	</li>*/
/* 	<li class="active">*/
/* 		{{ page.name }}*/
/* 	</li>*/
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
/* 		<div class="panel-body">*/
/* 			*/
/* 				{{ form_start(edit_form) }}*/
/* 					{{ form_widget(edit_form) }}*/
/* 					<input class="btn btn-success" type="submit" value="Zapisz">*/
/* 				{{ form_end(edit_form) }}*/
/* 			*/
/* 				<a id="backtolist"class="btn btn-warning" href="{{ path('admin_page_index') }}" role="button">Powrót do Listy</a>*/
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
