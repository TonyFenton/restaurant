<?php

/* user/_enabled_form.html.twig */
class __TwigTemplate_e900d7a60a35b82870d5b1875ed29a1793c9ad9c2ed0d2d97452f53349c94783 extends Twig_Template
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
        $__internal_f0f8ab3f7cf053d8ef81cb73989fd42886a02aa750f1a6b315e65ad04af01112 = $this->env->getExtension("native_profiler");
        $__internal_f0f8ab3f7cf053d8ef81cb73989fd42886a02aa750f1a6b315e65ad04af01112->enter($__internal_f0f8ab3f7cf053d8ef81cb73989fd42886a02aa750f1a6b315e65ad04af01112_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/_enabled_form.html.twig"));

        // line 1
        if ( !(null === (isset($context["enabled_form"]) ? $context["enabled_form"] : $this->getContext($context, "enabled_form")))) {
            // line 2
            echo "\t";
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["enabled_form"]) ? $context["enabled_form"] : $this->getContext($context, "enabled_form")), 'form_start');
            echo "\t
\t\t";
            // line 3
            if ((isset($context["enabled"]) ? $context["enabled"] : $this->getContext($context, "enabled"))) {
                // line 4
                echo "\t\t\t<input class=\"btn btn-success\" type=\"submit\" value=\"Aktywuj\" />
\t\t";
            } else {
                // line 6
                echo "\t\t\t<input class=\"btn btn-warning\" type=\"submit\" value=\"Dezaktywuj\" />
\t\t";
            }
            // line 8
            echo "\t";
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["enabled_form"]) ? $context["enabled_form"] : $this->getContext($context, "enabled_form")), 'form_end');
            echo "
";
        }
        
        $__internal_f0f8ab3f7cf053d8ef81cb73989fd42886a02aa750f1a6b315e65ad04af01112->leave($__internal_f0f8ab3f7cf053d8ef81cb73989fd42886a02aa750f1a6b315e65ad04af01112_prof);

    }

    public function getTemplateName()
    {
        return "user/_enabled_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 8,  35 => 6,  31 => 4,  29 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% if enabled_form is not null %}*/
/* 	{{ form_start(enabled_form) }}	*/
/* 		{% if enabled  %}*/
/* 			<input class="btn btn-success" type="submit" value="Aktywuj" />*/
/* 		{% else %}*/
/* 			<input class="btn btn-warning" type="submit" value="Dezaktywuj" />*/
/* 		{% endif %}*/
/* 	{{ form_end(enabled_form) }}*/
/* {% endif %}*/
