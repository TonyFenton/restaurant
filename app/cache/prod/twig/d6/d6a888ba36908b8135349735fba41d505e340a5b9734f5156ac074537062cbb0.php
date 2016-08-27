<?php

/* @Twig/Exception/error404.html.twig */
class __TwigTemplate_252ea38dd21a1bf362e5bb855b5eeb1df63b86b40541aac13ba619d470308093 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::Exception/layout.html.twig", "@Twig/Exception/error404.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::Exception/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "\tBłąd 404
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "\t<h1>Nie znaleziono strony</h1>
\t<p>Błąd 404</p>
";
    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error404.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 8,  37 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends "TwigBundle::Exception/layout.html.twig" %}*/
/* */
/* {% block title %}*/
/* 	Błąd 404*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/* 	<h1>Nie znaleziono strony</h1>*/
/* 	<p>Błąd 404</p>*/
/* {% endblock %}*/
