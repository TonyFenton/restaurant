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
        $__internal_854334676ae1f378bf25a4fd0d68f0de44cb11e699441a98aa451b0e2205781a = $this->env->getExtension("native_profiler");
        $__internal_854334676ae1f378bf25a4fd0d68f0de44cb11e699441a98aa451b0e2205781a->enter($__internal_854334676ae1f378bf25a4fd0d68f0de44cb11e699441a98aa451b0e2205781a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/main_page.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_854334676ae1f378bf25a4fd0d68f0de44cb11e699441a98aa451b0e2205781a->leave($__internal_854334676ae1f378bf25a4fd0d68f0de44cb11e699441a98aa451b0e2205781a_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_bf830ee58f78ea8c55a7e15c188c9b7a54c8d488c2cb3674603be8998f5fbba6 = $this->env->getExtension("native_profiler");
        $__internal_bf830ee58f78ea8c55a7e15c188c9b7a54c8d488c2cb3674603be8998f5fbba6->enter($__internal_bf830ee58f78ea8c55a7e15c188c9b7a54c8d488c2cb3674603be8998f5fbba6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "\t<h1>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "name", array()), "html", null, true);
        echo "</h1>
\t";
        // line 5
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "content", array());
        echo "
";
        
        $__internal_bf830ee58f78ea8c55a7e15c188c9b7a54c8d488c2cb3674603be8998f5fbba6->leave($__internal_bf830ee58f78ea8c55a7e15c188c9b7a54c8d488c2cb3674603be8998f5fbba6_prof);

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
