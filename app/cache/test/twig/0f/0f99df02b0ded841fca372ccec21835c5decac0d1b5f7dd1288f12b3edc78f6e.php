<?php

/* page/new_customize_an_individual_field.html.twig */
class __TwigTemplate_f16693fbd6de2b52557b8cf1580cf226c76b1b02c04070da4dccd67549b776ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("page/new.html.twig", "page/new_customize_an_individual_field.html.twig", 1);
        $this->blocks = array(
            '_page_slug_widget' => array($this, 'block__page_slug_widget'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "page/new.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c71c09bff2981c36460d5233ba14e4c55c98624a1ae91f701f66cd5d279abf00 = $this->env->getExtension("native_profiler");
        $__internal_c71c09bff2981c36460d5233ba14e4c55c98624a1ae91f701f66cd5d279abf00->enter($__internal_c71c09bff2981c36460d5233ba14e4c55c98624a1ae91f701f66cd5d279abf00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "page/new_customize_an_individual_field.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c71c09bff2981c36460d5233ba14e4c55c98624a1ae91f701f66cd5d279abf00->leave($__internal_c71c09bff2981c36460d5233ba14e4c55c98624a1ae91f701f66cd5d279abf00_prof);

    }

    // line 3
    public function block__page_slug_widget($context, array $blocks = array())
    {
        $__internal_b606f85792629d711fe30cb9bd3e048935022ef0de166488ee6caf61ba273da7 = $this->env->getExtension("native_profiler");
        $__internal_b606f85792629d711fe30cb9bd3e048935022ef0de166488ee6caf61ba273da7->enter($__internal_b606f85792629d711fe30cb9bd3e048935022ef0de166488ee6caf61ba273da7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_page_slug_widget"));

        
        $__internal_b606f85792629d711fe30cb9bd3e048935022ef0de166488ee6caf61ba273da7->leave($__internal_b606f85792629d711fe30cb9bd3e048935022ef0de166488ee6caf61ba273da7_prof);

    }

    public function getTemplateName()
    {
        return "page/new_customize_an_individual_field.html.twig";
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
/* {% extends 'page/new.html.twig' %}*/
/* */
/* {% block _page_slug_widget %}{% endblock %}	*/
