<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_60657d0119452e212a77be7726b19e999e6f02855f3ce2a1a88d32f471a322b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin_layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
        $this->blocks = array(
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6b6352ba2fd104a4a4f060929fd9af2f4395f580a3f34712a91f6f3bc391d4ad = $this->env->getExtension("native_profiler");
        $__internal_6b6352ba2fd104a4a4f060929fd9af2f4395f580a3f34712a91f6f3bc391d4ad->enter($__internal_6b6352ba2fd104a4a4f060929fd9af2f4395f580a3f34712a91f6f3bc391d4ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6b6352ba2fd104a4a4f060929fd9af2f4395f580a3f34712a91f6f3bc391d4ad->leave($__internal_6b6352ba2fd104a4a4f060929fd9af2f4395f580a3f34712a91f6f3bc391d4ad_prof);

    }

    // line 3
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_22c496a8865c2f6ecf29b8c390fc3765dd516aaf8a90c2e3b5753c1d8ddfeb76 = $this->env->getExtension("native_profiler");
        $__internal_22c496a8865c2f6ecf29b8c390fc3765dd516aaf8a90c2e3b5753c1d8ddfeb76->enter($__internal_22c496a8865c2f6ecf29b8c390fc3765dd516aaf8a90c2e3b5753c1d8ddfeb76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 4
        echo "\t<ol class=\"breadcrumb\">
\t\t<li>
\t\t\t<a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("admin_dashboard");
        echo "\">Panel</a>
\t\t</li>
\t\t<li>
\t\t\t<a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
        echo "\">Moje konto</a>
\t\t</li>\t\t
\t\t<li class=\"active\">
\t\t\tZmiana hasła
\t\t</li>
\t</ol>
";
        
        $__internal_22c496a8865c2f6ecf29b8c390fc3765dd516aaf8a90c2e3b5753c1d8ddfeb76->leave($__internal_22c496a8865c2f6ecf29b8c390fc3765dd516aaf8a90c2e3b5753c1d8ddfeb76_prof);

    }

    // line 17
    public function block_content($context, array $blocks = array())
    {
        $__internal_62e6e9a1e15e031f55242ed9d3c8d96aff43f94eac93bab9ce5ffdbec85c4ef5 = $this->env->getExtension("native_profiler");
        $__internal_62e6e9a1e15e031f55242ed9d3c8d96aff43f94eac93bab9ce5ffdbec85c4ef5->enter($__internal_62e6e9a1e15e031f55242ed9d3c8d96aff43f94eac93bab9ce5ffdbec85c4ef5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 18
        echo "\t";
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 18)->display($context);
        
        $__internal_62e6e9a1e15e031f55242ed9d3c8d96aff43f94eac93bab9ce5ffdbec85c4ef5->leave($__internal_62e6e9a1e15e031f55242ed9d3c8d96aff43f94eac93bab9ce5ffdbec85c4ef5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  65 => 17,  51 => 9,  45 => 6,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "admin_layout.html.twig" %}*/
/* */
/* {% block breadcrumb %}*/
/* 	<ol class="breadcrumb">*/
/* 		<li>*/
/* 			<a href="{{ path('admin_dashboard') }}">Panel</a>*/
/* 		</li>*/
/* 		<li>*/
/* 			<a href="{{ path('fos_user_profile_show') }}">Moje konto</a>*/
/* 		</li>		*/
/* 		<li class="active">*/
/* 			Zmiana hasła*/
/* 		</li>*/
/* 	</ol>*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/* 	{% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock content %}*/
/* */
