<?php

/* @Twig/Exception/error.html.twig */
class __TwigTemplate_99442b0ee96b7ea7fe9c4602f612ca569dccf3c67a4fafd518e81a95117e9918 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::Exception/layout.html.twig", "@Twig/Exception/error.html.twig", 1);
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
        echo "\tBłąd ";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : null), "html", null, true);
        echo "
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "\t<h1>Zapraszamy póżniej</h1>
\t<p>Błąd ";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : null), "html", null, true);
        echo "</p>
";
    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 9,  42 => 8,  39 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends "TwigBundle::Exception/layout.html.twig" %}*/
/* */
/* {% block title %}*/
/* 	Błąd {{ status_code }}*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/* 	<h1>Zapraszamy póżniej</h1>*/
/* 	<p>Błąd {{ status_code }}</p>*/
/* {% endblock %}*/
