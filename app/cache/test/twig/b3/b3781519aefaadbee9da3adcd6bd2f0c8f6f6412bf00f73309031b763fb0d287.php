<?php

/* user/_delete_form.html.twig */
class __TwigTemplate_ae0843bcfd28b99e44f7afe3291c93729da035c92bce01d69f0a0cb8c225e624 extends Twig_Template
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
        $__internal_b130331392be70fd8a6dbab24effcc7b9920215e5d6eb7123e54ac2ff2bfc139 = $this->env->getExtension("native_profiler");
        $__internal_b130331392be70fd8a6dbab24effcc7b9920215e5d6eb7123e54ac2ff2bfc139->enter($__internal_b130331392be70fd8a6dbab24effcc7b9920215e5d6eb7123e54ac2ff2bfc139_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/_delete_form.html.twig"));

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
        // line 5
        echo "\t";
        
        $__internal_b130331392be70fd8a6dbab24effcc7b9920215e5d6eb7123e54ac2ff2bfc139->leave($__internal_b130331392be70fd8a6dbab24effcc7b9920215e5d6eb7123e54ac2ff2bfc139_prof);

    }

    public function getTemplateName()
    {
        return "user/_delete_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  30 => 4,  24 => 2,  22 => 1,);
    }
}
/* {% if delete_form is not null %}*/
/* 	{{ form_start(delete_form) }}*/
/* 		<input class="btn btn-danger" type="submit" value="Usuń">*/
/* 	{{ form_end(delete_form) }}*/
/* {% endif %}	*/
