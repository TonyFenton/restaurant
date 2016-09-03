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
        $__internal_bd651f881f219e490e3d6a97e0d5a31ca9b65757179bf538b180bf97a4a78a66 = $this->env->getExtension("native_profiler");
        $__internal_bd651f881f219e490e3d6a97e0d5a31ca9b65757179bf538b180bf97a4a78a66->enter($__internal_bd651f881f219e490e3d6a97e0d5a31ca9b65757179bf538b180bf97a4a78a66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bd651f881f219e490e3d6a97e0d5a31ca9b65757179bf538b180bf97a4a78a66->leave($__internal_bd651f881f219e490e3d6a97e0d5a31ca9b65757179bf538b180bf97a4a78a66_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_87ebb4f6b99639708c202c04624aca6ed7d4af01dac443915fea46949395a54f = $this->env->getExtension("native_profiler");
        $__internal_87ebb4f6b99639708c202c04624aca6ed7d4af01dac443915fea46949395a54f->enter($__internal_87ebb4f6b99639708c202c04624aca6ed7d4af01dac443915fea46949395a54f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_87ebb4f6b99639708c202c04624aca6ed7d4af01dac443915fea46949395a54f->leave($__internal_87ebb4f6b99639708c202c04624aca6ed7d4af01dac443915fea46949395a54f_prof);

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
