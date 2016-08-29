<?php

/* user/_delete_form.html.twig */
class __TwigTemplate_3ad1afdb6104de52b9820983aee5b812c6ef4bf1d077b875c9c75939934aefa7 extends Twig_Template
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
        // line 1
        if ( !(null === (isset($context["delete_form"]) ? $context["delete_form"] : null))) {
            // line 2
            echo "\t";
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'form_start');
            echo "
\t\t<input class=\"btn btn-danger\" type=\"submit\" value=\"Usuń\">
\t";
            // line 4
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'form_end');
            echo "
";
        }
        // line 5
        echo "\t";
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
        return array (  32 => 5,  27 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% if delete_form is not null %}*/
/* 	{{ form_start(delete_form) }}*/
/* 		<input class="btn btn-danger" type="submit" value="Usuń">*/
/* 	{{ form_end(delete_form) }}*/
/* {% endif %}	*/
