<?php

/* admin/layout.html.twig */
class __TwigTemplate_aa49a84dc2d8051467d6f768b2cb4f8d32ebf8365ef18bf0a853c9ddc4ef1ab0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "admin/layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_91ff576c98de4837d14ba7ca23bd7da278819cd457a22686191f2709ee9a25c2 = $this->env->getExtension("native_profiler");
        $__internal_91ff576c98de4837d14ba7ca23bd7da278819cd457a22686191f2709ee9a25c2->enter($__internal_91ff576c98de4837d14ba7ca23bd7da278819cd457a22686191f2709ee9a25c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_91ff576c98de4837d14ba7ca23bd7da278819cd457a22686191f2709ee9a25c2->leave($__internal_91ff576c98de4837d14ba7ca23bd7da278819cd457a22686191f2709ee9a25c2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_12c901ff2ad14c36431e21b26d540cde7700abce49e6bc9af0c633a02c5b2615 = $this->env->getExtension("native_profiler");
        $__internal_12c901ff2ad14c36431e21b26d540cde7700abce49e6bc9af0c633a02c5b2615->enter($__internal_12c901ff2ad14c36431e21b26d540cde7700abce49e6bc9af0c633a02c5b2615_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_12c901ff2ad14c36431e21b26d540cde7700abce49e6bc9af0c633a02c5b2615->leave($__internal_12c901ff2ad14c36431e21b26d540cde7700abce49e6bc9af0c633a02c5b2615_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4c3ef92e1cbe8eff589571c17c521d73c976d70fbf4e1bd15fddb2853b32b514 = $this->env->getExtension("native_profiler");
        $__internal_4c3ef92e1cbe8eff589571c17c521d73c976d70fbf4e1bd15fddb2853b32b514->enter($__internal_4c3ef92e1cbe8eff589571c17c521d73c976d70fbf4e1bd15fddb2853b32b514_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/cms.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
";
        
        $__internal_4c3ef92e1cbe8eff589571c17c521d73c976d70fbf4e1bd15fddb2853b32b514->leave($__internal_4c3ef92e1cbe8eff589571c17c521d73c976d70fbf4e1bd15fddb2853b32b514_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_618da06d4d681819178292b4e516c9e79a05ff7015b55daf1c34d95c28f571e9 = $this->env->getExtension("native_profiler");
        $__internal_618da06d4d681819178292b4e516c9e79a05ff7015b55daf1c34d95c28f571e9->enter($__internal_618da06d4d681819178292b4e516c9e79a05ff7015b55daf1c34d95c28f571e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "\t<div id=\"wrapper\">
\t\t<div id=\"header\">
\t\t\t<h1>Najlepsiejszy CMS</h1>
\t\t</div>
\t\t<div id=\"nav\">
\t\t\t<ul>
\t\t\t\t<li><a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("admin_page_index");
        echo "\">Strony</a></li>
\t\t\t\t<li><a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("admin_footer_index");
        echo "\">Stopki</a></li>
\t\t\t\t<li><a href=\"#\">Wyloguj</a></li>
\t\t\t</ul>
\t\t</div>
\t\t<div id=\"content\">
\t\t\t";
        // line 24
        $this->displayBlock('content', $context, $blocks);
        // line 25
        echo "\t\t</div>
\t\t<div id=\"footer\">
\t\t</div>
\t</div>
";
        
        $__internal_618da06d4d681819178292b4e516c9e79a05ff7015b55daf1c34d95c28f571e9->leave($__internal_618da06d4d681819178292b4e516c9e79a05ff7015b55daf1c34d95c28f571e9_prof);

    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        $__internal_f89dfaddbcf77866c4c569a3c1db92a4405fcbef1b183d2f1e43fa13731c7895 = $this->env->getExtension("native_profiler");
        $__internal_f89dfaddbcf77866c4c569a3c1db92a4405fcbef1b183d2f1e43fa13731c7895->enter($__internal_f89dfaddbcf77866c4c569a3c1db92a4405fcbef1b183d2f1e43fa13731c7895_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        echo "content";
        
        $__internal_f89dfaddbcf77866c4c569a3c1db92a4405fcbef1b183d2f1e43fa13731c7895->leave($__internal_f89dfaddbcf77866c4c569a3c1db92a4405fcbef1b183d2f1e43fa13731c7895_prof);

    }

    // line 31
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_21fe12a7565622d8e92a29e818ace076e15c444fdcc5111dd3d26c41cceeadf7 = $this->env->getExtension("native_profiler");
        $__internal_21fe12a7565622d8e92a29e818ace076e15c444fdcc5111dd3d26c41cceeadf7->enter($__internal_21fe12a7565622d8e92a29e818ace076e15c444fdcc5111dd3d26c41cceeadf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_21fe12a7565622d8e92a29e818ace076e15c444fdcc5111dd3d26c41cceeadf7->leave($__internal_21fe12a7565622d8e92a29e818ace076e15c444fdcc5111dd3d26c41cceeadf7_prof);

    }

    public function getTemplateName()
    {
        return "admin/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 31,  108 => 24,  97 => 25,  95 => 24,  87 => 19,  83 => 18,  75 => 12,  69 => 11,  60 => 8,  55 => 7,  49 => 6,  38 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block title %}*/
/* {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/* 	{{ parent() }}*/
/* 	<link href="{{asset('css/cms.css')}}" rel="stylesheet" />*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* 	<div id="wrapper">*/
/* 		<div id="header">*/
/* 			<h1>Najlepsiejszy CMS</h1>*/
/* 		</div>*/
/* 		<div id="nav">*/
/* 			<ul>*/
/* 				<li><a href="{{ path('admin_page_index') }}">Strony</a></li>*/
/* 				<li><a href="{{ path('admin_footer_index') }}">Stopki</a></li>*/
/* 				<li><a href="#">Wyloguj</a></li>*/
/* 			</ul>*/
/* 		</div>*/
/* 		<div id="content">*/
/* 			{% block content %}content{% endblock %}*/
/* 		</div>*/
/* 		<div id="footer">*/
/* 		</div>*/
/* 	</div>*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/* {% endblock %}*/
