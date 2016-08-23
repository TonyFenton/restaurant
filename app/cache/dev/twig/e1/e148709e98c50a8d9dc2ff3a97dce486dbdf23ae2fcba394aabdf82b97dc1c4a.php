<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_e816e22dbb92d6e3fc38bd41cbaab1074a255f5db3688ec597db78efad850e6a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_466165e298223588e0d4ea0b299fbea8a47d76ec87dffee70cc2710708e34ffa = $this->env->getExtension("native_profiler");
        $__internal_466165e298223588e0d4ea0b299fbea8a47d76ec87dffee70cc2710708e34ffa->enter($__internal_466165e298223588e0d4ea0b299fbea8a47d76ec87dffee70cc2710708e34ffa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_466165e298223588e0d4ea0b299fbea8a47d76ec87dffee70cc2710708e34ffa->leave($__internal_466165e298223588e0d4ea0b299fbea8a47d76ec87dffee70cc2710708e34ffa_prof);

    }

    // line 3
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_5f724537fa5185e5cedbae31b90757287b1a5021340684bc763f7d1b7c23fa9d = $this->env->getExtension("native_profiler");
        $__internal_5f724537fa5185e5cedbae31b90757287b1a5021340684bc763f7d1b7c23fa9d->enter($__internal_5f724537fa5185e5cedbae31b90757287b1a5021340684bc763f7d1b7c23fa9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

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
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
        echo "\">Moje konto</a>
\t\t</li>\t\t
\t\t<li class=\"active\">
\t\t\tEdycja
\t\t</li>
\t</ol>
";
        
        $__internal_5f724537fa5185e5cedbae31b90757287b1a5021340684bc763f7d1b7c23fa9d->leave($__internal_5f724537fa5185e5cedbae31b90757287b1a5021340684bc763f7d1b7c23fa9d_prof);

    }

    // line 17
    public function block_content($context, array $blocks = array())
    {
        $__internal_b094d2db34e938c0e0deb55b1f7a4e870ad775a159534804dc3d31d89b82adc3 = $this->env->getExtension("native_profiler");
        $__internal_b094d2db34e938c0e0deb55b1f7a4e870ad775a159534804dc3d31d89b82adc3->enter($__internal_b094d2db34e938c0e0deb55b1f7a4e870ad775a159534804dc3d31d89b82adc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 18
        echo "\t";
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 18)->display($context);
        
        $__internal_b094d2db34e938c0e0deb55b1f7a4e870ad775a159534804dc3d31d89b82adc3->leave($__internal_b094d2db34e938c0e0deb55b1f7a4e870ad775a159534804dc3d31d89b82adc3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
/* 			<a href="{{ path('fos_user_profile_show') }}">Moje konto</a>*/
/* 		</li>		*/
/* 		<li class="active">*/
/* 			Edycja*/
/* 		</li>*/
/* 	</ol>*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/* 	{% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock content %}*/
/* */
