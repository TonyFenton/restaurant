<?php

/* admin/user/_delete_form.html.twig */
class __TwigTemplate_80d79e882714ddfc0e5b1f5ab31821a4d6a2e6c19c12a5ba83a3b253417c1706 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0f3d308641889079f23dea2aef2a75a44d633c3d52217810c1bf140359cab866 = $this->env->getExtension("native_profiler");
        $__internal_0f3d308641889079f23dea2aef2a75a44d633c3d52217810c1bf140359cab866->enter($__internal_0f3d308641889079f23dea2aef2a75a44d633c3d52217810c1bf140359cab866_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/user/_delete_form.html.twig"));

        // line 1
        if ( !(null === (isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")))) {
            // line 2
            echo "\t";
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
            echo "
\t\t<input class=\"btn btn-danger\" type=\"submit\" value=\"Usuń\">
\t";
            // line 4
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
            echo "
";
        }
        // line 6
        echo "\t\t\t";
        
        $__internal_0f3d308641889079f23dea2aef2a75a44d633c3d52217810c1bf140359cab866->leave($__internal_0f3d308641889079f23dea2aef2a75a44d633c3d52217810c1bf140359cab866_prof);

    }

    public function getTemplateName()
    {
        return "admin/user/_delete_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 6,  30 => 4,  24 => 2,  22 => 1,);
    }
}
/* {% if delete_form is not null %}*/
/* 	{{ form_start(delete_form) }}*/
/* 		<input class="btn btn-danger" type="submit" value="Usuń">*/
/* 	{{ form_end(delete_form) }}*/
/* {% endif %}*/
/* 			*/
