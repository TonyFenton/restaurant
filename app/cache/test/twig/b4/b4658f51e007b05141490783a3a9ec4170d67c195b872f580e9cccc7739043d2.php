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
        $__internal_37e60c36d61c273fc5d975e43ebc1b7d997ab0c9345f43808bd5af27edd48fbd = $this->env->getExtension("native_profiler");
        $__internal_37e60c36d61c273fc5d975e43ebc1b7d997ab0c9345f43808bd5af27edd48fbd->enter($__internal_37e60c36d61c273fc5d975e43ebc1b7d997ab0c9345f43808bd5af27edd48fbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_37e60c36d61c273fc5d975e43ebc1b7d997ab0c9345f43808bd5af27edd48fbd->leave($__internal_37e60c36d61c273fc5d975e43ebc1b7d997ab0c9345f43808bd5af27edd48fbd_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_53a96cb39af01fc335329301950210f06ec9a8a67b857e8ddf676486f090fc88 = $this->env->getExtension("native_profiler");
        $__internal_53a96cb39af01fc335329301950210f06ec9a8a67b857e8ddf676486f090fc88->enter($__internal_53a96cb39af01fc335329301950210f06ec9a8a67b857e8ddf676486f090fc88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_53a96cb39af01fc335329301950210f06ec9a8a67b857e8ddf676486f090fc88->leave($__internal_53a96cb39af01fc335329301950210f06ec9a8a67b857e8ddf676486f090fc88_prof);

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
