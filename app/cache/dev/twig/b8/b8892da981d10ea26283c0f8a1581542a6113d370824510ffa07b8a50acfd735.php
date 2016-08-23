<?php

/* FOSUserBundle:Profile:edit_content.html.twig */
class __TwigTemplate_7f4fa0e8a7abecca9acc07aeb566e6b8b6b7b490bff34b21c0c7d39db8c98cd6 extends Twig_Template
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
        $__internal_e8febca2b03321309aff72f2e9e76d612b7342139ec654fb9be9d3487ab52cc2 = $this->env->getExtension("native_profiler");
        $__internal_e8febca2b03321309aff72f2e9e76d612b7342139ec654fb9be9d3487ab52cc2->enter($__internal_e8febca2b03321309aff72f2e9e76d612b7342139ec654fb9be9d3487ab52cc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit_content.html.twig"));

        // line 1
        echo "<div class=\"panel panel-default\">
\t<div class=\"panel-heading\"><h1>Edycja</h1></div>
\t<div class=\"panel-body\">
\t<form action=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_profile_edit\">
\t\t";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
\t\t<div>
\t\t\t<input type=\"submit\" class=\"btn btn-success\"  value=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
\t\t\t<a class=\"btn btn-danger\" href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
        echo "\" role=\"button\">Anuluj</a>
\t\t</div>
\t</form>\t
\t</div>
</div>";
        
        $__internal_e8febca2b03321309aff72f2e9e76d612b7342139ec654fb9be9d3487ab52cc2->leave($__internal_e8febca2b03321309aff72f2e9e76d612b7342139ec654fb9be9d3487ab52cc2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  38 => 7,  33 => 5,  27 => 4,  22 => 1,);
    }
}
/* <div class="panel panel-default">*/
/* 	<div class="panel-heading"><h1>Edycja</h1></div>*/
/* 	<div class="panel-body">*/
/* 	<form action="{{ path('fos_user_profile_edit') }}" {{ form_enctype(form) }} method="POST" class="fos_user_profile_edit">*/
/* 		{{ form_widget(form) }}*/
/* 		<div>*/
/* 			<input type="submit" class="btn btn-success"  value="{{ 'profile.edit.submit'|trans({}, 'FOSUserBundle') }}" />*/
/* 			<a class="btn btn-danger" href="{{ path('fos_user_profile_show') }}" role="button">Anuluj</a>*/
/* 		</div>*/
/* 	</form>	*/
/* 	</div>*/
/* </div>*/
