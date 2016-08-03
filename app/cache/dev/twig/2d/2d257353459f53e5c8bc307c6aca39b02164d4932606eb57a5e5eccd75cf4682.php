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
        $__internal_5f249b9fcadacac26f040d3940cb89e4cbdba5cbe25473c645fa5c4eafdc1000 = $this->env->getExtension("native_profiler");
        $__internal_5f249b9fcadacac26f040d3940cb89e4cbdba5cbe25473c645fa5c4eafdc1000->enter($__internal_5f249b9fcadacac26f040d3940cb89e4cbdba5cbe25473c645fa5c4eafdc1000_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/main_page.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5f249b9fcadacac26f040d3940cb89e4cbdba5cbe25473c645fa5c4eafdc1000->leave($__internal_5f249b9fcadacac26f040d3940cb89e4cbdba5cbe25473c645fa5c4eafdc1000_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_9121f709a61134b0dace075abc52a41cb679d3aadbb4ff7f84f038c6cef6e8b4 = $this->env->getExtension("native_profiler");
        $__internal_9121f709a61134b0dace075abc52a41cb679d3aadbb4ff7f84f038c6cef6e8b4->enter($__internal_9121f709a61134b0dace075abc52a41cb679d3aadbb4ff7f84f038c6cef6e8b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "\t<h1>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "name", array()), "html", null, true);
        echo "</h1>
\t";
        // line 5
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "content", array());
        echo "
";
        
        $__internal_9121f709a61134b0dace075abc52a41cb679d3aadbb4ff7f84f038c6cef6e8b4->leave($__internal_9121f709a61134b0dace075abc52a41cb679d3aadbb4ff7f84f038c6cef6e8b4_prof);

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
