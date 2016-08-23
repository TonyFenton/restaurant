<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_e68038c507d06d5b2e0097d6d876ed61a2db01b9acd6d6fbab5d6ee3ccf847a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
        $this->blocks = array(
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1415d9079d2f88bd00befdf2d2339eaf5a1a400524fabaadc12dc4de3bb4deff = $this->env->getExtension("native_profiler");
        $__internal_1415d9079d2f88bd00befdf2d2339eaf5a1a400524fabaadc12dc4de3bb4deff->enter($__internal_1415d9079d2f88bd00befdf2d2339eaf5a1a400524fabaadc12dc4de3bb4deff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1415d9079d2f88bd00befdf2d2339eaf5a1a400524fabaadc12dc4de3bb4deff->leave($__internal_1415d9079d2f88bd00befdf2d2339eaf5a1a400524fabaadc12dc4de3bb4deff_prof);

    }

    // line 3
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_3d94d19abfa7ba7f5d821561f58dbb35b3d2aef02d8c62c788e9b3eedac1f7ce = $this->env->getExtension("native_profiler");
        $__internal_3d94d19abfa7ba7f5d821561f58dbb35b3d2aef02d8c62c788e9b3eedac1f7ce->enter($__internal_3d94d19abfa7ba7f5d821561f58dbb35b3d2aef02d8c62c788e9b3eedac1f7ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 4
        echo "\t<ol class=\"breadcrumb\">
\t\t<li>
\t\t\t<a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("admin_default_dashboard");
        echo "\">Panel</a>
\t\t</li>
\t\t<li>
\t\t\t<a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("admin_user_index");
        echo "\">użytkownicy</a>
\t\t</li>\t\t
\t\t<li class=\"active\">
\t\t\tRejestracja
\t\t</li>
\t</ol>
";
        
        $__internal_3d94d19abfa7ba7f5d821561f58dbb35b3d2aef02d8c62c788e9b3eedac1f7ce->leave($__internal_3d94d19abfa7ba7f5d821561f58dbb35b3d2aef02d8c62c788e9b3eedac1f7ce_prof);

    }

    // line 17
    public function block_content($context, array $blocks = array())
    {
        $__internal_cdc682b19925c9dc168abf6089a90aa6efb42a631441ccbe75667cbfbfa76e05 = $this->env->getExtension("native_profiler");
        $__internal_cdc682b19925c9dc168abf6089a90aa6efb42a631441ccbe75667cbfbfa76e05->enter($__internal_cdc682b19925c9dc168abf6089a90aa6efb42a631441ccbe75667cbfbfa76e05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 18
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 18)->display($context);
        
        $__internal_cdc682b19925c9dc168abf6089a90aa6efb42a631441ccbe75667cbfbfa76e05->leave($__internal_cdc682b19925c9dc168abf6089a90aa6efb42a631441ccbe75667cbfbfa76e05_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
/* {% extends "admin/layout.html.twig" %}*/
/* */
/* {% block breadcrumb %}*/
/* 	<ol class="breadcrumb">*/
/* 		<li>*/
/* 			<a href="{{ path('admin_default_dashboard') }}">Panel</a>*/
/* 		</li>*/
/* 		<li>*/
/* 			<a href="{{ path('admin_user_index') }}">użytkownicy</a>*/
/* 		</li>		*/
/* 		<li class="active">*/
/* 			Rejestracja*/
/* 		</li>*/
/* 	</ol>*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock content %}*/
/* */
