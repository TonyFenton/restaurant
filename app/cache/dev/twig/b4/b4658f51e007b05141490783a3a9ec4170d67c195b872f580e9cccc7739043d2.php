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
        $__internal_573f271921b90fbcfd3c041b52b21aaf3adead4f3fa0edbac2df3048fdbdc850 = $this->env->getExtension("native_profiler");
        $__internal_573f271921b90fbcfd3c041b52b21aaf3adead4f3fa0edbac2df3048fdbdc850->enter($__internal_573f271921b90fbcfd3c041b52b21aaf3adead4f3fa0edbac2df3048fdbdc850_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_573f271921b90fbcfd3c041b52b21aaf3adead4f3fa0edbac2df3048fdbdc850->leave($__internal_573f271921b90fbcfd3c041b52b21aaf3adead4f3fa0edbac2df3048fdbdc850_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_75bf8ecd095210068472bf30f41c42dd04ba89770db9bec226f32d77ceb5924c = $this->env->getExtension("native_profiler");
        $__internal_75bf8ecd095210068472bf30f41c42dd04ba89770db9bec226f32d77ceb5924c->enter($__internal_75bf8ecd095210068472bf30f41c42dd04ba89770db9bec226f32d77ceb5924c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_75bf8ecd095210068472bf30f41c42dd04ba89770db9bec226f32d77ceb5924c->leave($__internal_75bf8ecd095210068472bf30f41c42dd04ba89770db9bec226f32d77ceb5924c_prof);

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
/* */
