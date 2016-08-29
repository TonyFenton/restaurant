<?php

/* FOSUserBundle:ChangePassword:changePassword_content.html.twig */
class __TwigTemplate_b1af92cc94240a5cde9e540750ebc272f0f4aa6b062abe4341987b0f91f30515 extends Twig_Template
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
        $__internal_0113681e136e2ad3d996d8228de129f195379dd7666507455721b2ea0258f7c2 = $this->env->getExtension("native_profiler");
        $__internal_0113681e136e2ad3d996d8228de129f195379dd7666507455721b2ea0258f7c2->enter($__internal_0113681e136e2ad3d996d8228de129f195379dd7666507455721b2ea0258f7c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword_content.html.twig"));

        // line 1
        echo "<div class=\"panel panel-default\">
\t<div class=\"panel-heading\">
\t\t<h1>Zmiana hasła</h1>
\t</div>
\t<div class=\"panel-body\">
\t\t<form action=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("fos_user_change_password");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_change_password\">
\t\t\t";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
\t\t\t<div>
\t\t\t\t<input type=\"submit\" class=\"btn btn-success\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("change_password.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
\t\t\t\t<a class=\"btn btn-danger\" href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
        echo "\" role=\"button\">Anuluj</a>
\t\t\t</div>
\t\t</form>\t
\t</div>
</div>";
        
        $__internal_0113681e136e2ad3d996d8228de129f195379dd7666507455721b2ea0258f7c2->leave($__internal_0113681e136e2ad3d996d8228de129f195379dd7666507455721b2ea0258f7c2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 10,  40 => 9,  35 => 7,  29 => 6,  22 => 1,);
    }
}
/* <div class="panel panel-default">*/
/* 	<div class="panel-heading">*/
/* 		<h1>Zmiana hasła</h1>*/
/* 	</div>*/
/* 	<div class="panel-body">*/
/* 		<form action="{{ path('fos_user_change_password') }}" {{ form_enctype(form) }} method="POST" class="fos_user_change_password">*/
/* 			{{ form_widget(form) }}*/
/* 			<div>*/
/* 				<input type="submit" class="btn btn-success" value="{{ 'change_password.submit'|trans({}, 'FOSUserBundle') }}" />*/
/* 				<a class="btn btn-danger" href="{{ path('fos_user_profile_show') }}" role="button">Anuluj</a>*/
/* 			</div>*/
/* 		</form>	*/
/* 	</div>*/
/* </div>*/
