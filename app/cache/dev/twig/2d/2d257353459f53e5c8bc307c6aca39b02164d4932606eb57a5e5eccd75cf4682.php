<?php

/* default/main_page.html.twig */
class __TwigTemplate_ead3a018b9d9b409462630083ceaf3c7135f43533d9714c5eb70e3df4706a247 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("default_layout.html.twig", "default/main_page.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "default_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b01ca642351ae00f8bab7fb88dd8c2b05addf756eda4d404e5b1fa50d3b43cea = $this->env->getExtension("native_profiler");
        $__internal_b01ca642351ae00f8bab7fb88dd8c2b05addf756eda4d404e5b1fa50d3b43cea->enter($__internal_b01ca642351ae00f8bab7fb88dd8c2b05addf756eda4d404e5b1fa50d3b43cea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/main_page.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b01ca642351ae00f8bab7fb88dd8c2b05addf756eda4d404e5b1fa50d3b43cea->leave($__internal_b01ca642351ae00f8bab7fb88dd8c2b05addf756eda4d404e5b1fa50d3b43cea_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_d11f53622be7c09ab5bfeec473f58113fa463973d2bda9e2edf576b743301892 = $this->env->getExtension("native_profiler");
        $__internal_d11f53622be7c09ab5bfeec473f58113fa463973d2bda9e2edf576b743301892->enter($__internal_d11f53622be7c09ab5bfeec473f58113fa463973d2bda9e2edf576b743301892_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "\t<div class=\"row\">
\t\t<div class=\"col-xs-12\">
\t\t\t<h1>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "name", array()), "html", null, true);
        echo "</h1>
\t\t\t";
        // line 7
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "content", array());
        echo "
\t\t</div>
\t</div>
";
        
        $__internal_d11f53622be7c09ab5bfeec473f58113fa463973d2bda9e2edf576b743301892->leave($__internal_d11f53622be7c09ab5bfeec473f58113fa463973d2bda9e2edf576b743301892_prof);

    }

    public function getTemplateName()
    {
        return "default/main_page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'default_layout.html.twig' %}*/
/* */
/* {% block content %}*/
/* 	<div class="row">*/
/* 		<div class="col-xs-12">*/
/* 			<h1>{{page.name}}</h1>*/
/* 			{{page.content | raw}}*/
/* 		</div>*/
/* 	</div>*/
/* {% endblock %}*/
