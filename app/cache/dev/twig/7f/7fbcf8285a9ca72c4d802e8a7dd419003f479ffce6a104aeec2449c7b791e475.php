<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_33af753c60df78863e0ee52fd6191e53208c77c7cfb5310f3f05162422342f1d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2430204bdf17669abcd7a03fe677a1b207b7467772ad50fd65b0a28054079d1e = $this->env->getExtension("native_profiler");
        $__internal_2430204bdf17669abcd7a03fe677a1b207b7467772ad50fd65b0a28054079d1e->enter($__internal_2430204bdf17669abcd7a03fe677a1b207b7467772ad50fd65b0a28054079d1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2430204bdf17669abcd7a03fe677a1b207b7467772ad50fd65b0a28054079d1e->leave($__internal_2430204bdf17669abcd7a03fe677a1b207b7467772ad50fd65b0a28054079d1e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f1cfe3562414fe1d1e3a703c857fd700c633e5bfd6d352261503922d6cc3f37a = $this->env->getExtension("native_profiler");
        $__internal_f1cfe3562414fe1d1e3a703c857fd700c633e5bfd6d352261503922d6cc3f37a->enter($__internal_f1cfe3562414fe1d1e3a703c857fd700c633e5bfd6d352261503922d6cc3f37a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_f1cfe3562414fe1d1e3a703c857fd700c633e5bfd6d352261503922d6cc3f37a->leave($__internal_f1cfe3562414fe1d1e3a703c857fd700c633e5bfd6d352261503922d6cc3f37a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
