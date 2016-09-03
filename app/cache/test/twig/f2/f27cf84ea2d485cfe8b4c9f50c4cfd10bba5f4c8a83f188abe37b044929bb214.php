<?php

/* page/edit_customize_an_individual_field.html.twig */
class __TwigTemplate_408acfb7fcd2c59ccba5a20e71b6598d96db399aed0d010f4e19b7956afed92d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("page/edit.html.twig", "page/edit_customize_an_individual_field.html.twig", 1);
        $this->blocks = array(
            '_page_slug_widget' => array($this, 'block__page_slug_widget'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "page/edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9b1d9b788478b954dee158ea44b3891067386feab3a325335caf8274ebf2cec8 = $this->env->getExtension("native_profiler");
        $__internal_9b1d9b788478b954dee158ea44b3891067386feab3a325335caf8274ebf2cec8->enter($__internal_9b1d9b788478b954dee158ea44b3891067386feab3a325335caf8274ebf2cec8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "page/edit_customize_an_individual_field.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b1d9b788478b954dee158ea44b3891067386feab3a325335caf8274ebf2cec8->leave($__internal_9b1d9b788478b954dee158ea44b3891067386feab3a325335caf8274ebf2cec8_prof);

    }

    // line 3
    public function block__page_slug_widget($context, array $blocks = array())
    {
        $__internal_59084808faa5944be42b34361c7d239276c2df858c3437893e1bdb4a54f50161 = $this->env->getExtension("native_profiler");
        $__internal_59084808faa5944be42b34361c7d239276c2df858c3437893e1bdb4a54f50161->enter($__internal_59084808faa5944be42b34361c7d239276c2df858c3437893e1bdb4a54f50161_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_page_slug_widget"));

        
        $__internal_59084808faa5944be42b34361c7d239276c2df858c3437893e1bdb4a54f50161->leave($__internal_59084808faa5944be42b34361c7d239276c2df858c3437893e1bdb4a54f50161_prof);

    }

    public function getTemplateName()
    {
        return "page/edit_customize_an_individual_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 3,  11 => 1,);
    }
}
/* {% extends 'page/edit.html.twig' %}*/
/* */
/* {% block _page_slug_widget %}{% endblock %}	*/
