<?php

/* admin/default/index.html.twig */
class __TwigTemplate_3b2867337a9c3b801e5bbcbc724b7af1fb9c282206f3e7d82e7812cf8bcefbdc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/default/index.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_116b414f5c15cd41d95e7f2875c49989d650dff8e5e5aaa938c2e0cb9a562ac0 = $this->env->getExtension("native_profiler");
        $__internal_116b414f5c15cd41d95e7f2875c49989d650dff8e5e5aaa938c2e0cb9a562ac0->enter($__internal_116b414f5c15cd41d95e7f2875c49989d650dff8e5e5aaa938c2e0cb9a562ac0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_116b414f5c15cd41d95e7f2875c49989d650dff8e5e5aaa938c2e0cb9a562ac0->leave($__internal_116b414f5c15cd41d95e7f2875c49989d650dff8e5e5aaa938c2e0cb9a562ac0_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_5b202012e307865fb348c5d4aaf44206a9da5b2192dcb638932e7bd047c30ba2 = $this->env->getExtension("native_profiler");
        $__internal_5b202012e307865fb348c5d4aaf44206a9da5b2192dcb638932e7bd047c30ba2->enter($__internal_5b202012e307865fb348c5d4aaf44206a9da5b2192dcb638932e7bd047c30ba2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-heading\" id=\"heading\">
\t\t\t<h1>Witaj w panelu administracyjnym</h1>
\t\t</div>
\t\t<p>Do dzieła!</p>
\t</div>

";
        
        $__internal_5b202012e307865fb348c5d4aaf44206a9da5b2192dcb638932e7bd047c30ba2->leave($__internal_5b202012e307865fb348c5d4aaf44206a9da5b2192dcb638932e7bd047c30ba2_prof);

    }

    public function getTemplateName()
    {
        return "admin/default/index.html.twig";
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
/* {% extends 'admin/layout.html.twig' %}*/
/* 	*/
/* {% block content %}*/
/* 	<div class="panel panel-default">*/
/* 		<div class="panel-heading" id="heading">*/
/* 			<h1>Witaj w panelu administracyjnym</h1>*/
/* 		</div>*/
/* 		<p>Do dzieła!</p>*/
/* 	</div>*/
/* */
/* {% endblock %}*/
/* */
