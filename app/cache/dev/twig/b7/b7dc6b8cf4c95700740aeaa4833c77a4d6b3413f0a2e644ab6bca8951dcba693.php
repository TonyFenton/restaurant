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
        $__internal_3f559f04bf0608116fdca1ee12bb36e19e1d8ca53a58908aed0f64f079c78a6f = $this->env->getExtension("native_profiler");
        $__internal_3f559f04bf0608116fdca1ee12bb36e19e1d8ca53a58908aed0f64f079c78a6f->enter($__internal_3f559f04bf0608116fdca1ee12bb36e19e1d8ca53a58908aed0f64f079c78a6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3f559f04bf0608116fdca1ee12bb36e19e1d8ca53a58908aed0f64f079c78a6f->leave($__internal_3f559f04bf0608116fdca1ee12bb36e19e1d8ca53a58908aed0f64f079c78a6f_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_55bc520f998795c1b46a27f4b302d0a2ee6a9c905e4e17c8c8b43504c5fab3c0 = $this->env->getExtension("native_profiler");
        $__internal_55bc520f998795c1b46a27f4b302d0a2ee6a9c905e4e17c8c8b43504c5fab3c0->enter($__internal_55bc520f998795c1b46a27f4b302d0a2ee6a9c905e4e17c8c8b43504c5fab3c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-heading\" id=\"heading\">
\t\t\t<h1>Witaj w panelu administracyjnym</h1>
\t\t</div>
\t\t<p>Do dzieła!</p>
\t</div>

";
        
        $__internal_55bc520f998795c1b46a27f4b302d0a2ee6a9c905e4e17c8c8b43504c5fab3c0->leave($__internal_55bc520f998795c1b46a27f4b302d0a2ee6a9c905e4e17c8c8b43504c5fab3c0_prof);

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
