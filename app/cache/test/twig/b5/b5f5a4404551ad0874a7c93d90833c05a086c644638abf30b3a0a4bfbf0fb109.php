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
        $__internal_a9246e2fe0517a98dbd5bcea72178fce285b07eed4c9ed340ad4b0d479d7abda = $this->env->getExtension("native_profiler");
        $__internal_a9246e2fe0517a98dbd5bcea72178fce285b07eed4c9ed340ad4b0d479d7abda->enter($__internal_a9246e2fe0517a98dbd5bcea72178fce285b07eed4c9ed340ad4b0d479d7abda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/footer/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a9246e2fe0517a98dbd5bcea72178fce285b07eed4c9ed340ad4b0d479d7abda->leave($__internal_a9246e2fe0517a98dbd5bcea72178fce285b07eed4c9ed340ad4b0d479d7abda_prof);

    }

    // line 3
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_13a533b7d60e73e2d240f5a1f0d3c7a53032e14829584db3778d31bab2102504 = $this->env->getExtension("native_profiler");
        $__internal_13a533b7d60e73e2d240f5a1f0d3c7a53032e14829584db3778d31bab2102504->enter($__internal_13a533b7d60e73e2d240f5a1f0d3c7a53032e14829584db3778d31bab2102504_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 4
        echo "\t<li>
\t\t<a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("admin_footer_index");
        echo "\">Stopki</a>
\t</li>
\t<li class=\"active\">
\t\t";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["footer"]) ? $context["footer"] : $this->getContext($context, "footer")), "name", array()), "html", null, true);
        echo "
\t</li>
";
        
        $__internal_13a533b7d60e73e2d240f5a1f0d3c7a53032e14829584db3778d31bab2102504->leave($__internal_13a533b7d60e73e2d240f5a1f0d3c7a53032e14829584db3778d31bab2102504_prof);

    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        $__internal_1b481c5b12283ee87f8ea95dc5a2e9edb318e3cee8c2a31108727a8fa8dd9260 = $this->env->getExtension("native_profiler");
        $__internal_1b481c5b12283ee87f8ea95dc5a2e9edb318e3cee8c2a31108727a8fa8dd9260->enter($__internal_1b481c5b12283ee87f8ea95dc5a2e9edb318e3cee8c2a31108727a8fa8dd9260_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
\t\t<div class=\"panel-heading\"><h1>Edycja stopki</h1></div>
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
        echo $this->env->getExtension('routing')->getPath("admin_footer_index");
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
        
        $__internal_1b481c5b12283ee87f8ea95dc5a2e9edb318e3cee8c2a31108727a8fa8dd9260->leave($__internal_1b481c5b12283ee87f8ea95dc5a2e9edb318e3cee8c2a31108727a8fa8dd9260_prof);

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
        return array (  121 => 34,  116 => 32,  110 => 30,  108 => 29,  103 => 27,  98 => 25,  93 => 23,  89 => 22,  83 => 18,  74 => 15,  71 => 14,  66 => 13,  60 => 12,  50 => 8,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'admin/layout.html.twig' %}*/
/* */
/* {% block breadcrumb %}*/
/* 	<li>*/
/* 		<a href="{{ path('admin_footer_index') }}">Stopki</a>*/
/* 	</li>*/
/* 	<li class="active">*/
/* 		{{ footer.name }}*/
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
