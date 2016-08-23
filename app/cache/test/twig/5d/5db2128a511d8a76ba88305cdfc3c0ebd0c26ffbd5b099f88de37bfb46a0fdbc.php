<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_04247a0554a288a37f78a0c3920545cbe9bc81ad5986c7c0b6ce4954e760c39c extends Twig_Template
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
        $__internal_ecfe7211e114d40d1817f25b8a6c1cd0f415e1bc3834520d22f48f19b9ff0e55 = $this->env->getExtension("native_profiler");
        $__internal_ecfe7211e114d40d1817f25b8a6c1cd0f415e1bc3834520d22f48f19b9ff0e55->enter($__internal_ecfe7211e114d40d1817f25b8a6c1cd0f415e1bc3834520d22f48f19b9ff0e55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        // line 1
        echo "<div class=\"panel panel-default\">
\t<div class=\"panel-heading\"><h1>Rejestrowanie</h1></div>
\t<div class=\"panel-body\">
\t\t<form action=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_registration_register\">
\t\t\t";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
\t\t\t<div>
\t\t\t\t<input type=\"submit\" class=\"btn btn-success\" value=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
\t\t\t\t<a class=\"btn btn-danger\" href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("admin_user_index");
        echo "\" role=\"button\">Anuluj</a>
\t\t\t</div>
\t\t</form>
\t</div>
</div>
";
        
        $__internal_ecfe7211e114d40d1817f25b8a6c1cd0f415e1bc3834520d22f48f19b9ff0e55->leave($__internal_ecfe7211e114d40d1817f25b8a6c1cd0f415e1bc3834520d22f48f19b9ff0e55_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
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
/* 	<div class="panel-heading"><h1>Rejestrowanie</h1></div>*/
/* 	<div class="panel-body">*/
/* 		<form action="{{ path('fos_user_registration_register') }}" {{ form_enctype(form) }} method="POST" class="fos_user_registration_register">*/
/* 			{{ form_widget(form) }}*/
/* 			<div>*/
/* 				<input type="submit" class="btn btn-success" value="{{ 'registration.submit'|trans({}, 'FOSUserBundle') }}" />*/
/* 				<a class="btn btn-danger" href="{{ path('admin_user_index') }}" role="button">Anuluj</a>*/
/* 			</div>*/
/* 		</form>*/
/* 	</div>*/
/* </div>*/
/* */
