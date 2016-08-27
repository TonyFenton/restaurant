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
        $__internal_fc149aca00792eb6576549919b848125fb37fef47e125ce088b883d0694368a7 = $this->env->getExtension("native_profiler");
        $__internal_fc149aca00792eb6576549919b848125fb37fef47e125ce088b883d0694368a7->enter($__internal_fc149aca00792eb6576549919b848125fb37fef47e125ce088b883d0694368a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc149aca00792eb6576549919b848125fb37fef47e125ce088b883d0694368a7->leave($__internal_fc149aca00792eb6576549919b848125fb37fef47e125ce088b883d0694368a7_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_9deeee036be62ea6a8c2c93031aed28454393efbeb4a96ce365e72d08dea31af = $this->env->getExtension("native_profiler");
        $__internal_9deeee036be62ea6a8c2c93031aed28454393efbeb4a96ce365e72d08dea31af->enter($__internal_9deeee036be62ea6a8c2c93031aed28454393efbeb4a96ce365e72d08dea31af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_9deeee036be62ea6a8c2c93031aed28454393efbeb4a96ce365e72d08dea31af->leave($__internal_9deeee036be62ea6a8c2c93031aed28454393efbeb4a96ce365e72d08dea31af_prof);

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
/* 			<h1>Panel administracyjny</h1>*/
/* 		</div>*/
/* 		<div class="panel-body">*/
/* 			<p>Do dzieła!</p>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* {% endblock %}*/
/* */
