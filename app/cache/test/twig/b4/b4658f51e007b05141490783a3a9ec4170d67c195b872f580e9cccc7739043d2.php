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
        $__internal_10a12602cb4d02cb28c71ef37739db82e59c4818a1c1e52f708a74f6517e89f2 = $this->env->getExtension("native_profiler");
        $__internal_10a12602cb4d02cb28c71ef37739db82e59c4818a1c1e52f708a74f6517e89f2->enter($__internal_10a12602cb4d02cb28c71ef37739db82e59c4818a1c1e52f708a74f6517e89f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_10a12602cb4d02cb28c71ef37739db82e59c4818a1c1e52f708a74f6517e89f2->leave($__internal_10a12602cb4d02cb28c71ef37739db82e59c4818a1c1e52f708a74f6517e89f2_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_acba42d30aa14e8924a0f7a5bf00151690d6b0d373119831049f78db5df1e774 = $this->env->getExtension("native_profiler");
        $__internal_acba42d30aa14e8924a0f7a5bf00151690d6b0d373119831049f78db5df1e774->enter($__internal_acba42d30aa14e8924a0f7a5bf00151690d6b0d373119831049f78db5df1e774_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_acba42d30aa14e8924a0f7a5bf00151690d6b0d373119831049f78db5df1e774->leave($__internal_acba42d30aa14e8924a0f7a5bf00151690d6b0d373119831049f78db5df1e774_prof);

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
