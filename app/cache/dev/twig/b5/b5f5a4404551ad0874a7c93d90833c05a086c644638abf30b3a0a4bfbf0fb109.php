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
        $__internal_1b1b5d0ab93a3b5e742cb97a2b3567a794bdf29863b8245fcb0bbf4b7db56ab1 = $this->env->getExtension("native_profiler");
        $__internal_1b1b5d0ab93a3b5e742cb97a2b3567a794bdf29863b8245fcb0bbf4b7db56ab1->enter($__internal_1b1b5d0ab93a3b5e742cb97a2b3567a794bdf29863b8245fcb0bbf4b7db56ab1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/footer/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b1b5d0ab93a3b5e742cb97a2b3567a794bdf29863b8245fcb0bbf4b7db56ab1->leave($__internal_1b1b5d0ab93a3b5e742cb97a2b3567a794bdf29863b8245fcb0bbf4b7db56ab1_prof);

    }

    // line 3
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_a1ad2e4d4e6a79414ad8a60b7da5df422b3b634f7fd746f67e020df09ecc4203 = $this->env->getExtension("native_profiler");
        $__internal_a1ad2e4d4e6a79414ad8a60b7da5df422b3b634f7fd746f67e020df09ecc4203->enter($__internal_a1ad2e4d4e6a79414ad8a60b7da5df422b3b634f7fd746f67e020df09ecc4203_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

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
        
        $__internal_a1ad2e4d4e6a79414ad8a60b7da5df422b3b634f7fd746f67e020df09ecc4203->leave($__internal_a1ad2e4d4e6a79414ad8a60b7da5df422b3b634f7fd746f67e020df09ecc4203_prof);

    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        $__internal_ea4c1e71944dfb10e8200bcc7c1fc336e5d5a92f28d7c8c58fb226d7df2ca10e = $this->env->getExtension("native_profiler");
        $__internal_ea4c1e71944dfb10e8200bcc7c1fc336e5d5a92f28d7c8c58fb226d7df2ca10e->enter($__internal_ea4c1e71944dfb10e8200bcc7c1fc336e5d5a92f28d7c8c58fb226d7df2ca10e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_ea4c1e71944dfb10e8200bcc7c1fc336e5d5a92f28d7c8c58fb226d7df2ca10e->leave($__internal_ea4c1e71944dfb10e8200bcc7c1fc336e5d5a92f28d7c8c58fb226d7df2ca10e_prof);

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
