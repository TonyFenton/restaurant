<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_a578c0145f6cb4c74a20f26a3538264316f474339c1c885bed43e1482c0f220e extends Twig_Template
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
        $__internal_f1debbc205222e1871236196513aa9da09f7b0dfe5c7a1d251f312828c805105 = $this->env->getExtension("native_profiler");
        $__internal_f1debbc205222e1871236196513aa9da09f7b0dfe5c7a1d251f312828c805105->enter($__internal_f1debbc205222e1871236196513aa9da09f7b0dfe5c7a1d251f312828c805105_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 1
        echo "<div class=\"panel panel-default\">
\t<div class=\"panel-heading\"><h1>Moje konto</h1></div>
\t<div class=\"panel-body\">
\t\t<div class=\"fos_user_user_show\">
\t\t\t<p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
\t\t\t<p>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
\t\t</div>
\t\t<a class=\"btn btn-success\" href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
        echo "\" role=\"button\">Edytuj</a>
\t</div>
</div>
";
        
        $__internal_f1debbc205222e1871236196513aa9da09f7b0dfe5c7a1d251f312828c805105->leave($__internal_f1debbc205222e1871236196513aa9da09f7b0dfe5c7a1d251f312828c805105_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 8,  34 => 6,  28 => 5,  22 => 1,);
    }
}
/* <div class="panel panel-default">*/
/* 	<div class="panel-heading"><h1>Moje konto</h1></div>*/
/* 	<div class="panel-body">*/
/* 		<div class="fos_user_user_show">*/
/* 			<p>{{ 'profile.show.username'|trans({}, 'FOSUserBundle') }}: {{ user.username }}</p>*/
/* 			<p>{{ 'profile.show.email'|trans({}, 'FOSUserBundle') }}: {{ user.email }}</p>*/
/* 		</div>*/
/* 		<a class="btn btn-success" href="{{ path('fos_user_profile_edit') }}" role="button">Edytuj</a>*/
/* 	</div>*/
/* </div>*/
/* */
