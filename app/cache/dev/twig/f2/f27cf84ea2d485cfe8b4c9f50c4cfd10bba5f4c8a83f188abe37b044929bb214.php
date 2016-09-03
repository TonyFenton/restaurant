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
        $__internal_b3463622715a83063ef41943e04ce1b37a75d04da7ccad09e8754c84b79bc547 = $this->env->getExtension("native_profiler");
        $__internal_b3463622715a83063ef41943e04ce1b37a75d04da7ccad09e8754c84b79bc547->enter($__internal_b3463622715a83063ef41943e04ce1b37a75d04da7ccad09e8754c84b79bc547_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "page/edit_customize_an_individual_field.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b3463622715a83063ef41943e04ce1b37a75d04da7ccad09e8754c84b79bc547->leave($__internal_b3463622715a83063ef41943e04ce1b37a75d04da7ccad09e8754c84b79bc547_prof);

    }

    // line 3
    public function block__page_slug_widget($context, array $blocks = array())
    {
        $__internal_a25f25f2273959831d73c8837ed887db288c999e94b8ef4badfc7a92792f64f5 = $this->env->getExtension("native_profiler");
        $__internal_a25f25f2273959831d73c8837ed887db288c999e94b8ef4badfc7a92792f64f5->enter($__internal_a25f25f2273959831d73c8837ed887db288c999e94b8ef4badfc7a92792f64f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_page_slug_widget"));

        
        $__internal_a25f25f2273959831d73c8837ed887db288c999e94b8ef4badfc7a92792f64f5->leave($__internal_a25f25f2273959831d73c8837ed887db288c999e94b8ef4badfc7a92792f64f5_prof);

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
