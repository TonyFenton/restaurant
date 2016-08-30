<?php

/* default/main_page.html.twig */
class __TwigTemplate_ead3a018b9d9b409462630083ceaf3c7135f43533d9714c5eb70e3df4706a247 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("default_layout.html.twig", "default/main_page.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "default_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d3acf3f929dc9146360aef5995927ae52475c79e497558ce78e1de811dd85b79 = $this->env->getExtension("native_profiler");
        $__internal_d3acf3f929dc9146360aef5995927ae52475c79e497558ce78e1de811dd85b79->enter($__internal_d3acf3f929dc9146360aef5995927ae52475c79e497558ce78e1de811dd85b79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/main_page.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d3acf3f929dc9146360aef5995927ae52475c79e497558ce78e1de811dd85b79->leave($__internal_d3acf3f929dc9146360aef5995927ae52475c79e497558ce78e1de811dd85b79_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_35366de27cd53feade0e6d930e9293a259948d62db5a385f389749a9aeb31b73 = $this->env->getExtension("native_profiler");
        $__internal_35366de27cd53feade0e6d930e9293a259948d62db5a385f389749a9aeb31b73->enter($__internal_35366de27cd53feade0e6d930e9293a259948d62db5a385f389749a9aeb31b73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_35366de27cd53feade0e6d930e9293a259948d62db5a385f389749a9aeb31b73->leave($__internal_35366de27cd53feade0e6d930e9293a259948d62db5a385f389749a9aeb31b73_prof);

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
/* {% extends 'default_layout.html.twig' %}*/
/* */
/* {% block content %}*/
/* 	<div class="row">*/
/* 		<div class="col-xs-12">*/
/* 			<h1>{{page.name}}</h1>*/
/* 			{{page.content | raw}}*/
/* 		</div>*/
/* 	</div>*/
/* {% endblock %}*/
