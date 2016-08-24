<?php

/* admin/user/_enabled_form.html.twig */
class __TwigTemplate_623d5b3d00e0e8554352070d1d6b6d772450d73b7ca77a1fd4d56f2ab6e92c04 extends Twig_Template
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
        $__internal_ad8675aa0358979c823fb70fbbdedc3645ebdac4580ca4803540efae899e2294 = $this->env->getExtension("native_profiler");
        $__internal_ad8675aa0358979c823fb70fbbdedc3645ebdac4580ca4803540efae899e2294->enter($__internal_ad8675aa0358979c823fb70fbbdedc3645ebdac4580ca4803540efae899e2294_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/user/_enabled_form.html.twig"));

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
        
        $__internal_ad8675aa0358979c823fb70fbbdedc3645ebdac4580ca4803540efae899e2294->leave($__internal_ad8675aa0358979c823fb70fbbdedc3645ebdac4580ca4803540efae899e2294_prof);

    }

    public function getTemplateName()
    {
        return "admin/user/_enabled_form.html.twig";
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
