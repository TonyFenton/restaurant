<?php

/* admin/layout.html.twig */
class __TwigTemplate_aa49a84dc2d8051467d6f768b2cb4f8d32ebf8365ef18bf0a853c9ddc4ef1ab0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "admin/layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_afba503a40f8c7e030777ee83ab4db1e42a681262117fe1c7cbfe1da9417ffdd = $this->env->getExtension("native_profiler");
        $__internal_afba503a40f8c7e030777ee83ab4db1e42a681262117fe1c7cbfe1da9417ffdd->enter($__internal_afba503a40f8c7e030777ee83ab4db1e42a681262117fe1c7cbfe1da9417ffdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_afba503a40f8c7e030777ee83ab4db1e42a681262117fe1c7cbfe1da9417ffdd->leave($__internal_afba503a40f8c7e030777ee83ab4db1e42a681262117fe1c7cbfe1da9417ffdd_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e74aeb315f35f9b1f46b0309b1f45a44476b6b8406e9109769207da372a6c88c = $this->env->getExtension("native_profiler");
        $__internal_e74aeb315f35f9b1f46b0309b1f45a44476b6b8406e9109769207da372a6c88c->enter($__internal_e74aeb315f35f9b1f46b0309b1f45a44476b6b8406e9109769207da372a6c88c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
";
        
        $__internal_e74aeb315f35f9b1f46b0309b1f45a44476b6b8406e9109769207da372a6c88c->leave($__internal_e74aeb315f35f9b1f46b0309b1f45a44476b6b8406e9109769207da372a6c88c_prof);

    }

    public function getTemplateName()
    {
        return "admin/layout.html.twig";
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
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/* {% endblock %}*/
