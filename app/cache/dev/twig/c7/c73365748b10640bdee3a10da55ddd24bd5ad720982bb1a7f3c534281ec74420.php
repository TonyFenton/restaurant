<?php

/* default_layout.html.twig */
class __TwigTemplate_5c453cbdfcadf35bd7672da9776826a2d7fa0bd8a4c5546aeaa7038c7f787f30 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default_layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'description' => array($this, 'block_description'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_88c51c300ec52365be9188e4cf0a546884d2fd8c1040d0f4dee69dfd944d1ee9 = $this->env->getExtension("native_profiler");
        $__internal_88c51c300ec52365be9188e4cf0a546884d2fd8c1040d0f4dee69dfd944d1ee9->enter($__internal_88c51c300ec52365be9188e4cf0a546884d2fd8c1040d0f4dee69dfd944d1ee9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default_layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_88c51c300ec52365be9188e4cf0a546884d2fd8c1040d0f4dee69dfd944d1ee9->leave($__internal_88c51c300ec52365be9188e4cf0a546884d2fd8c1040d0f4dee69dfd944d1ee9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e20b42bc4486179a4dcc82175a94dcab59e55526fcdd878d52bc5aa26c4256f4 = $this->env->getExtension("native_profiler");
        $__internal_e20b42bc4486179a4dcc82175a94dcab59e55526fcdd878d52bc5aa26c4256f4->enter($__internal_e20b42bc4486179a4dcc82175a94dcab59e55526fcdd878d52bc5aa26c4256f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\t";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "title", array()), "html", null, true);
        echo "
";
        
        $__internal_e20b42bc4486179a4dcc82175a94dcab59e55526fcdd878d52bc5aa26c4256f4->leave($__internal_e20b42bc4486179a4dcc82175a94dcab59e55526fcdd878d52bc5aa26c4256f4_prof);

    }

    // line 7
    public function block_description($context, array $blocks = array())
    {
        $__internal_6ab54c0a542b3c04c8b7331d66732fcadde216e6b0c5b6e93bc76d6c1a8090e0 = $this->env->getExtension("native_profiler");
        $__internal_6ab54c0a542b3c04c8b7331d66732fcadde216e6b0c5b6e93bc76d6c1a8090e0->enter($__internal_6ab54c0a542b3c04c8b7331d66732fcadde216e6b0c5b6e93bc76d6c1a8090e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        // line 8
        echo "\t";
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "description", array(), "any", false, true), "description", array(), "any", true, true)) {
            // line 9
            echo "\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "description", array()), "description", array()), "html", null, true);
            echo "
\t";
        }
        
        $__internal_6ab54c0a542b3c04c8b7331d66732fcadde216e6b0c5b6e93bc76d6c1a8090e0->leave($__internal_6ab54c0a542b3c04c8b7331d66732fcadde216e6b0c5b6e93bc76d6c1a8090e0_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_318d20aa1963ae42d892e8affac300e73236e598ace8a6567bc564e9580d0aa0 = $this->env->getExtension("native_profiler");
        $__internal_318d20aa1963ae42d892e8affac300e73236e598ace8a6567bc564e9580d0aa0->enter($__internal_318d20aa1963ae42d892e8affac300e73236e598ace8a6567bc564e9580d0aa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 14
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/default/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
";
        
        $__internal_318d20aa1963ae42d892e8affac300e73236e598ace8a6567bc564e9580d0aa0->leave($__internal_318d20aa1963ae42d892e8affac300e73236e598ace8a6567bc564e9580d0aa0_prof);

    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        $__internal_48a1ba79af81ab4be089f4ce7e7eab1066bc682770124b797de445e09e8b1b6e = $this->env->getExtension("native_profiler");
        $__internal_48a1ba79af81ab4be089f4ce7e7eab1066bc682770124b797de445e09e8b1b6e->enter($__internal_48a1ba79af81ab4be089f4ce7e7eab1066bc682770124b797de445e09e8b1b6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 19
        echo "\t<nav class=\"navbar navbar-default\" id=\"main_nav\">
\t\t<div class=\"container\">
\t\t\t<div class=\"navbar-header\">
\t\t\t\t<button aria-controls=\"navbar\" aria-expanded=\"false\" data-target=\"#navbar\" data-toggle=\"collapse\" class=\"navbar-toggle collapsed\" type=\"button\">
\t\t\t\t\t<span class=\"sr-only\">Toggle navigation</span>
\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t</button>
\t\t\t\t<a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("mainPage");
        echo "\" class=\"navbar-brand\">
\t\t\t\t\t<img class=\"img-responsive\" id=\"logo\" src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" alt=\"\"/>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"navbar-collapse collapse navbar-right\" id=\"navbar\" >
\t\t\t\t";
        // line 33
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("AppBundle:Default:mainMenu", array("currentPage" => $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "slug", array()))));
        echo "
\t\t\t</div>
\t\t</div>
\t</nav>
\t<div id=\"main_photo_container\">
\t\t<img id=\"main_photo\" class=\"img-responsive\" src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("images/" . $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "picture", array()))), "html", null, true);
        echo "\" alt=\"\"/>
\t</div>
\t<div class=\"container\" id=\"content\">\t
\t\t";
        // line 41
        $this->displayBlock('content', $context, $blocks);
        // line 42
        echo "\t</div>
\t";
        // line 43
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array(), "any", false, true), "footer", array(), "any", true, true)) {
            // line 44
            echo "\t\t<div id=\"footer\" class=\"panel-footer\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t";
            // line 48
            echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "footer", array()), "footer", array());
            echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t";
        }
        
        $__internal_48a1ba79af81ab4be089f4ce7e7eab1066bc682770124b797de445e09e8b1b6e->leave($__internal_48a1ba79af81ab4be089f4ce7e7eab1066bc682770124b797de445e09e8b1b6e_prof);

    }

    // line 41
    public function block_content($context, array $blocks = array())
    {
        $__internal_67128747311f54918e43cb3ce1c7d7ae8e585c376ee49165c2cf07e25b634a6a = $this->env->getExtension("native_profiler");
        $__internal_67128747311f54918e43cb3ce1c7d7ae8e585c376ee49165c2cf07e25b634a6a->enter($__internal_67128747311f54918e43cb3ce1c7d7ae8e585c376ee49165c2cf07e25b634a6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_67128747311f54918e43cb3ce1c7d7ae8e585c376ee49165c2cf07e25b634a6a->leave($__internal_67128747311f54918e43cb3ce1c7d7ae8e585c376ee49165c2cf07e25b634a6a_prof);

    }

    public function getTemplateName()
    {
        return "default_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 41,  149 => 48,  143 => 44,  141 => 43,  138 => 42,  136 => 41,  130 => 38,  122 => 33,  115 => 29,  111 => 28,  100 => 19,  94 => 18,  85 => 15,  80 => 14,  74 => 13,  63 => 9,  60 => 8,  54 => 7,  44 => 4,  38 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block title %}*/
/* 	{{ page.title }}*/
/* {% endblock %}*/
/* */
/* {% block description %}*/
/* 	{% if page.description.description is defined %}*/
/* 		{{ page.description.description }}*/
/* 	{% endif %}*/
/* {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/* 	{{ parent() }}*/
/* 	<link href="{{asset('css/default/style.css')}}" rel="stylesheet" />*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* 	<nav class="navbar navbar-default" id="main_nav">*/
/* 		<div class="container">*/
/* 			<div class="navbar-header">*/
/* 				<button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">*/
/* 					<span class="sr-only">Toggle navigation</span>*/
/* 					<span class="icon-bar"></span>*/
/* 					<span class="icon-bar"></span>*/
/* 					<span class="icon-bar"></span>*/
/* 				</button>*/
/* 				<a href="{{ path('mainPage') }}" class="navbar-brand">*/
/* 					<img class="img-responsive" id="logo" src="{{asset('images/logo.png')}}" alt=""/>*/
/* 				</a>*/
/* 			</div>*/
/* 			<div class="navbar-collapse collapse navbar-right" id="navbar" >*/
/* 				{{ render(controller('AppBundle:Default:mainMenu', {"currentPage": page.slug })) }}*/
/* 			</div>*/
/* 		</div>*/
/* 	</nav>*/
/* 	<div id="main_photo_container">*/
/* 		<img id="main_photo" class="img-responsive" src="{{asset('images/' ~ page.picture )}}" alt=""/>*/
/* 	</div>*/
/* 	<div class="container" id="content">	*/
/* 		{% block content %}{% endblock %}*/
/* 	</div>*/
/* 	{% if page.footer.footer is defined %}*/
/* 		<div id="footer" class="panel-footer">*/
/* 			<div class="container">*/
/* 				<div class="row">*/
/* 					<div class="col-xs-12">*/
/* 						{{ page.footer.footer | raw }}*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	{% endif %}*/
/* {% endblock %}*/
