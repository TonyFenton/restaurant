<?php

/* default/main_page.html.twig */
class __TwigTemplate_ead3a018b9d9b409462630083ceaf3c7135f43533d9714c5eb70e3df4706a247 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("default/layout.html.twig", "default/main_page.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "default/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ac6d4592031c1bcc06a32cb6a0717d5eb9019199b3909fc89d9a2cf7f7336365 = $this->env->getExtension("native_profiler");
        $__internal_ac6d4592031c1bcc06a32cb6a0717d5eb9019199b3909fc89d9a2cf7f7336365->enter($__internal_ac6d4592031c1bcc06a32cb6a0717d5eb9019199b3909fc89d9a2cf7f7336365_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/main_page.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ac6d4592031c1bcc06a32cb6a0717d5eb9019199b3909fc89d9a2cf7f7336365->leave($__internal_ac6d4592031c1bcc06a32cb6a0717d5eb9019199b3909fc89d9a2cf7f7336365_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_739f1f90e6a8f164ccbe6ca6a571b06f0b4f885bd8c7d83aa3a39297b7b1d3d5 = $this->env->getExtension("native_profiler");
        $__internal_739f1f90e6a8f164ccbe6ca6a571b06f0b4f885bd8c7d83aa3a39297b7b1d3d5->enter($__internal_739f1f90e6a8f164ccbe6ca6a571b06f0b4f885bd8c7d83aa3a39297b7b1d3d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "\t<h1>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "name", array()), "html", null, true);
        echo "</h1>
\t";
        // line 5
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "content", array());
        echo "
";
        
        $__internal_739f1f90e6a8f164ccbe6ca6a571b06f0b4f885bd8c7d83aa3a39297b7b1d3d5->leave($__internal_739f1f90e6a8f164ccbe6ca6a571b06f0b4f885bd8c7d83aa3a39297b7b1d3d5_prof);

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
        return array (  45 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'default/layout.html.twig' %}*/
/* */
/* {% block content %}*/
/* 	<h1>{{page.name}}</h1>*/
/* 	{{page.content | raw}}*/
/* {% endblock %}*/
