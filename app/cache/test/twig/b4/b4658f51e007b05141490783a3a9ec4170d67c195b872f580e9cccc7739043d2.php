<?php

/* admin/index.html.twig */
class __TwigTemplate_205370ef37df0b1cad5ddab6d844298889b4ae3d00fd4dadc4f09bb4ef1a2ba7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin_layout.html.twig", "admin/index.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9757f6f44b1f2ade585ad8fc46c7eb6a4112dd518c07b63356e37fdecf10c862 = $this->env->getExtension("native_profiler");
        $__internal_9757f6f44b1f2ade585ad8fc46c7eb6a4112dd518c07b63356e37fdecf10c862->enter($__internal_9757f6f44b1f2ade585ad8fc46c7eb6a4112dd518c07b63356e37fdecf10c862_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9757f6f44b1f2ade585ad8fc46c7eb6a4112dd518c07b63356e37fdecf10c862->leave($__internal_9757f6f44b1f2ade585ad8fc46c7eb6a4112dd518c07b63356e37fdecf10c862_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_2ef1bcdebb1d9a0b02c41e04d2b9d70eff8833c03bc854dafe65fb1037792a31 = $this->env->getExtension("native_profiler");
        $__internal_2ef1bcdebb1d9a0b02c41e04d2b9d70eff8833c03bc854dafe65fb1037792a31->enter($__internal_2ef1bcdebb1d9a0b02c41e04d2b9d70eff8833c03bc854dafe65fb1037792a31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-heading\" id=\"heading\">
\t\t\t<h1>Panel administracyjny</h1>
\t\t</div>
\t\t<div class=\"panel-body\">
\t\t\t<p>Do dzieła!</p>
\t\t</div>
\t</div>
";
        
        $__internal_2ef1bcdebb1d9a0b02c41e04d2b9d70eff8833c03bc854dafe65fb1037792a31->leave($__internal_2ef1bcdebb1d9a0b02c41e04d2b9d70eff8833c03bc854dafe65fb1037792a31_prof);

    }

    public function getTemplateName()
    {
        return "admin/index.html.twig";
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
/* 	*/
/* {% block content %}*/
/* 	<div class="panel panel-default">*/
/* 		<div class="panel-heading" id="heading">*/
/* 			<h1>Panel administracyjny</h1>*/
/* 		</div>*/
/* 		<div class="panel-body">*/
/* 			<p>Do dzieła!</p>*/
/* 		</div>*/
/* 	</div>*/
/* {% endblock %}*/
