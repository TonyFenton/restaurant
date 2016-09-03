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
        $__internal_1f3de4c2197d82ffcb7a5dd392b90651bc1d0b2c99e6b470c01af116bfdf0010 = $this->env->getExtension("native_profiler");
        $__internal_1f3de4c2197d82ffcb7a5dd392b90651bc1d0b2c99e6b470c01af116bfdf0010->enter($__internal_1f3de4c2197d82ffcb7a5dd392b90651bc1d0b2c99e6b470c01af116bfdf0010_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default_layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1f3de4c2197d82ffcb7a5dd392b90651bc1d0b2c99e6b470c01af116bfdf0010->leave($__internal_1f3de4c2197d82ffcb7a5dd392b90651bc1d0b2c99e6b470c01af116bfdf0010_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b2140cebaf9a2d93c411f151e8cf6cf6a81476f6c3339a488a93702cf6dc8280 = $this->env->getExtension("native_profiler");
        $__internal_b2140cebaf9a2d93c411f151e8cf6cf6a81476f6c3339a488a93702cf6dc8280->enter($__internal_b2140cebaf9a2d93c411f151e8cf6cf6a81476f6c3339a488a93702cf6dc8280_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\t";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "title", array()), "html", null, true);
        echo "
";
        
        $__internal_b2140cebaf9a2d93c411f151e8cf6cf6a81476f6c3339a488a93702cf6dc8280->leave($__internal_b2140cebaf9a2d93c411f151e8cf6cf6a81476f6c3339a488a93702cf6dc8280_prof);

    }

    // line 7
    public function block_description($context, array $blocks = array())
    {
        $__internal_b415c3dc3fa104acddc74830d672d8a9e237d5e739dad60f514d3418f110db74 = $this->env->getExtension("native_profiler");
        $__internal_b415c3dc3fa104acddc74830d672d8a9e237d5e739dad60f514d3418f110db74->enter($__internal_b415c3dc3fa104acddc74830d672d8a9e237d5e739dad60f514d3418f110db74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        // line 8
        echo "\t";
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "description", array(), "any", false, true), "description", array(), "any", true, true)) {
            // line 9
            echo "\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "description", array()), "description", array()), "html", null, true);
            echo "
\t";
        }
        
        $__internal_b415c3dc3fa104acddc74830d672d8a9e237d5e739dad60f514d3418f110db74->leave($__internal_b415c3dc3fa104acddc74830d672d8a9e237d5e739dad60f514d3418f110db74_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e2632ed134c9205c88c0017d73d71257b4578c2a50d2035f5bbf740243ac31fd = $this->env->getExtension("native_profiler");
        $__internal_e2632ed134c9205c88c0017d73d71257b4578c2a50d2035f5bbf740243ac31fd->enter($__internal_e2632ed134c9205c88c0017d73d71257b4578c2a50d2035f5bbf740243ac31fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 14
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/default/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
";
        
        $__internal_e2632ed134c9205c88c0017d73d71257b4578c2a50d2035f5bbf740243ac31fd->leave($__internal_e2632ed134c9205c88c0017d73d71257b4578c2a50d2035f5bbf740243ac31fd_prof);

    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        $__internal_ab1a523e52f6a3b4a18c93d6a8d912a901a82515473d6c46dc378a25f40e69c5 = $this->env->getExtension("native_profiler");
        $__internal_ab1a523e52f6a3b4a18c93d6a8d912a901a82515473d6c46dc378a25f40e69c5->enter($__internal_ab1a523e52f6a3b4a18c93d6a8d912a901a82515473d6c46dc378a25f40e69c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ab1a523e52f6a3b4a18c93d6a8d912a901a82515473d6c46dc378a25f40e69c5->leave($__internal_ab1a523e52f6a3b4a18c93d6a8d912a901a82515473d6c46dc378a25f40e69c5_prof);

    }

    // line 41
    public function block_content($context, array $blocks = array())
    {
        $__internal_19d14d7fa32e1fb3b709ae4745228a88c1a0305ab8e56fe542501bd80b245342 = $this->env->getExtension("native_profiler");
        $__internal_19d14d7fa32e1fb3b709ae4745228a88c1a0305ab8e56fe542501bd80b245342->enter($__internal_19d14d7fa32e1fb3b709ae4745228a88c1a0305ab8e56fe542501bd80b245342_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_19d14d7fa32e1fb3b709ae4745228a88c1a0305ab8e56fe542501bd80b245342->leave($__internal_19d14d7fa32e1fb3b709ae4745228a88c1a0305ab8e56fe542501bd80b245342_prof);

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
