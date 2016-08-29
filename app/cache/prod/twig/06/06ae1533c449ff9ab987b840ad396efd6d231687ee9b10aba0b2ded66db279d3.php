<?php

/* user/_enabled_form.html.twig */
class __TwigTemplate_ab3edfbe6c9411765701bdbd6d4aa353befa9b141a8101f2f49b836ecf22841c extends Twig_Template
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
        if ( !(null === (isset($context["enabled_form"]) ? $context["enabled_form"] : null))) {
            // line 2
            echo "\t";
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["enabled_form"]) ? $context["enabled_form"] : null), 'form_start');
            echo "\t
\t\t";
            // line 3
            if ((isset($context["enabled"]) ? $context["enabled"] : null)) {
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
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["enabled_form"]) ? $context["enabled_form"] : null), 'form_end');
            echo "
";
        }
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
        return array (  36 => 8,  32 => 6,  28 => 4,  26 => 3,  21 => 2,  19 => 1,);
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
