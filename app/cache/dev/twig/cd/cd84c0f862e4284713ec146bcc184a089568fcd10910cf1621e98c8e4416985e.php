<?php

/* page/customize_an_individual_field.html.twig */
class __TwigTemplate_d996a28b80b6b76b2e086d269650a1649ab648a9e8e4b838be5ee795f3afdf47 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin_layout.html.twig", "page/customize_an_individual_field.html.twig", 1);
        $this->blocks = array(
            '_page_slug_widget' => array($this, 'block__page_slug_widget'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d46bbc24e70df013a57cb687fdd6b13f2e82b8aac1923b18a2a1734ad5e568ee = $this->env->getExtension("native_profiler");
        $__internal_d46bbc24e70df013a57cb687fdd6b13f2e82b8aac1923b18a2a1734ad5e568ee->enter($__internal_d46bbc24e70df013a57cb687fdd6b13f2e82b8aac1923b18a2a1734ad5e568ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "page/customize_an_individual_field.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d46bbc24e70df013a57cb687fdd6b13f2e82b8aac1923b18a2a1734ad5e568ee->leave($__internal_d46bbc24e70df013a57cb687fdd6b13f2e82b8aac1923b18a2a1734ad5e568ee_prof);

    }

    // line 3
    public function block__page_slug_widget($context, array $blocks = array())
    {
        $__internal_80b4e1461427ca4024f383119f280a7d0e076c1c1ebe63cf3c2e03fe5cb6d321 = $this->env->getExtension("native_profiler");
        $__internal_80b4e1461427ca4024f383119f280a7d0e076c1c1ebe63cf3c2e03fe5cb6d321->enter($__internal_80b4e1461427ca4024f383119f280a7d0e076c1c1ebe63cf3c2e03fe5cb6d321_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_page_slug_widget"));

        // line 4
        echo "\t";
        
        $__internal_80b4e1461427ca4024f383119f280a7d0e076c1c1ebe63cf3c2e03fe5cb6d321->leave($__internal_80b4e1461427ca4024f383119f280a7d0e076c1c1ebe63cf3c2e03fe5cb6d321_prof);

    }

    public function getTemplateName()
    {
        return "page/customize_an_individual_field.html.twig";
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
/* {% extends 'admin_layout.html.twig' %}*/
/* */
/* 	{% block _page_slug_widget %}*/
/* 	{% endblock %}	*/
