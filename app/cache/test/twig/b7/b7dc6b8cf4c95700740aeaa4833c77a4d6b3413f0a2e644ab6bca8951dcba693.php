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
        $__internal_0a73504c7c650211cba5475e43e6a620a8a8abcfef93c427fd577b20f8172301 = $this->env->getExtension("native_profiler");
        $__internal_0a73504c7c650211cba5475e43e6a620a8a8abcfef93c427fd577b20f8172301->enter($__internal_0a73504c7c650211cba5475e43e6a620a8a8abcfef93c427fd577b20f8172301_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a73504c7c650211cba5475e43e6a620a8a8abcfef93c427fd577b20f8172301->leave($__internal_0a73504c7c650211cba5475e43e6a620a8a8abcfef93c427fd577b20f8172301_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_b0a659674250e078c0beea5d7c47b26e717c595fb88eb8d2c3bb324178b0128b = $this->env->getExtension("native_profiler");
        $__internal_b0a659674250e078c0beea5d7c47b26e717c595fb88eb8d2c3bb324178b0128b->enter($__internal_b0a659674250e078c0beea5d7c47b26e717c595fb88eb8d2c3bb324178b0128b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-heading\" id=\"heading\">
\t\t\t<h1>Witaj w panelu administracyjnym</h1>
\t\t</div>
\t\t<p>Do dzieła!</p>
\t</div>

";
        
        $__internal_b0a659674250e078c0beea5d7c47b26e717c595fb88eb8d2c3bb324178b0128b->leave($__internal_b0a659674250e078c0beea5d7c47b26e717c595fb88eb8d2c3bb324178b0128b_prof);

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
