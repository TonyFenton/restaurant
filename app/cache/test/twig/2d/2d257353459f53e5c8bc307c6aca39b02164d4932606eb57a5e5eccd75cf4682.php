<?php

/* default/main_page.html.twig */
class __TwigTemplate_ead3a018b9d9b409462630083ceaf3c7135f43533d9714c5eb70e3df4706a247 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("default/layout.html.twig", "default/main_page.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "default/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8df3534c9fc3425e74500746ac683391ba67fcebdec2b57499b5c262fbf559d3 = $this->env->getExtension("native_profiler");
        $__internal_8df3534c9fc3425e74500746ac683391ba67fcebdec2b57499b5c262fbf559d3->enter($__internal_8df3534c9fc3425e74500746ac683391ba67fcebdec2b57499b5c262fbf559d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/main_page.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8df3534c9fc3425e74500746ac683391ba67fcebdec2b57499b5c262fbf559d3->leave($__internal_8df3534c9fc3425e74500746ac683391ba67fcebdec2b57499b5c262fbf559d3_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_342622492b69ea13da64359d0eec20806baf6470cc0dc3dfdd14df849c812936 = $this->env->getExtension("native_profiler");
        $__internal_342622492b69ea13da64359d0eec20806baf6470cc0dc3dfdd14df849c812936->enter($__internal_342622492b69ea13da64359d0eec20806baf6470cc0dc3dfdd14df849c812936_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "\t<div class=\"row\">
\t\t<div class=\"col-xs-12\">
\t\t\t<h1>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "name", array()), "html", null, true);
        echo "</h1>
\t\t\t";
        // line 7
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "content", array());
        echo "
\t\t</div>
\t</div>
";
        
        $__internal_342622492b69ea13da64359d0eec20806baf6470cc0dc3dfdd14df849c812936->leave($__internal_342622492b69ea13da64359d0eec20806baf6470cc0dc3dfdd14df849c812936_prof);

    }

    public function getTemplateName()
    {
        return "default/main_page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'default/layout.html.twig' %}*/
/* */
/* {% block content %}*/
/* 	<div class="row">*/
/* 		<div class="col-xs-12">*/
/* 			<h1>{{page.name}}</h1>*/
/* 			{{page.content | raw}}*/
/* 		</div>*/
/* 	</div>*/
/* {% endblock %}*/
