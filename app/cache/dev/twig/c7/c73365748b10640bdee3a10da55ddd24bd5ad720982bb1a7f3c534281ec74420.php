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
        $__internal_08f25a5ac3c030a27186331775e4f8c1bb03eea6f978d044924c64b7d363db5b = $this->env->getExtension("native_profiler");
        $__internal_08f25a5ac3c030a27186331775e4f8c1bb03eea6f978d044924c64b7d363db5b->enter($__internal_08f25a5ac3c030a27186331775e4f8c1bb03eea6f978d044924c64b7d363db5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default_layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_08f25a5ac3c030a27186331775e4f8c1bb03eea6f978d044924c64b7d363db5b->leave($__internal_08f25a5ac3c030a27186331775e4f8c1bb03eea6f978d044924c64b7d363db5b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f49445b817044b4b17ab9182e4222e39886f11d2a8cd341b3dcca04956275fbf = $this->env->getExtension("native_profiler");
        $__internal_f49445b817044b4b17ab9182e4222e39886f11d2a8cd341b3dcca04956275fbf->enter($__internal_f49445b817044b4b17ab9182e4222e39886f11d2a8cd341b3dcca04956275fbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\t";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "title", array()), "html", null, true);
        echo "
";
        
        $__internal_f49445b817044b4b17ab9182e4222e39886f11d2a8cd341b3dcca04956275fbf->leave($__internal_f49445b817044b4b17ab9182e4222e39886f11d2a8cd341b3dcca04956275fbf_prof);

    }

    // line 7
    public function block_description($context, array $blocks = array())
    {
        $__internal_740a1bdec95fbe166ddd8cf8a219dd92fa05d3bd283ad3cf10538f7a92c4b8d4 = $this->env->getExtension("native_profiler");
        $__internal_740a1bdec95fbe166ddd8cf8a219dd92fa05d3bd283ad3cf10538f7a92c4b8d4->enter($__internal_740a1bdec95fbe166ddd8cf8a219dd92fa05d3bd283ad3cf10538f7a92c4b8d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        // line 8
        echo "\t";
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "description", array(), "any", false, true), "description", array(), "any", true, true)) {
            // line 9
            echo "\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "description", array()), "description", array()), "html", null, true);
            echo "
\t";
        }
        
        $__internal_740a1bdec95fbe166ddd8cf8a219dd92fa05d3bd283ad3cf10538f7a92c4b8d4->leave($__internal_740a1bdec95fbe166ddd8cf8a219dd92fa05d3bd283ad3cf10538f7a92c4b8d4_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cfb6f1fba4a3b04a567e6597f5a7fbc110186d31ad801a498aa9487c8e52a07f = $this->env->getExtension("native_profiler");
        $__internal_cfb6f1fba4a3b04a567e6597f5a7fbc110186d31ad801a498aa9487c8e52a07f->enter($__internal_cfb6f1fba4a3b04a567e6597f5a7fbc110186d31ad801a498aa9487c8e52a07f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 14
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/default/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
";
        
        $__internal_cfb6f1fba4a3b04a567e6597f5a7fbc110186d31ad801a498aa9487c8e52a07f->leave($__internal_cfb6f1fba4a3b04a567e6597f5a7fbc110186d31ad801a498aa9487c8e52a07f_prof);

    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        $__internal_9534ecb4060102f7d03ca5b1c4b3ea671e784e012abac07c49b805e19fb2feb9 = $this->env->getExtension("native_profiler");
        $__internal_9534ecb4060102f7d03ca5b1c4b3ea671e784e012abac07c49b805e19fb2feb9->enter($__internal_9534ecb4060102f7d03ca5b1c4b3ea671e784e012abac07c49b805e19fb2feb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9534ecb4060102f7d03ca5b1c4b3ea671e784e012abac07c49b805e19fb2feb9->leave($__internal_9534ecb4060102f7d03ca5b1c4b3ea671e784e012abac07c49b805e19fb2feb9_prof);

    }

    // line 41
    public function block_content($context, array $blocks = array())
    {
        $__internal_1d3c14f269745547e25d919bf723af1c25a50b25cc6ab627fe8d0c5765e762fc = $this->env->getExtension("native_profiler");
        $__internal_1d3c14f269745547e25d919bf723af1c25a50b25cc6ab627fe8d0c5765e762fc->enter($__internal_1d3c14f269745547e25d919bf723af1c25a50b25cc6ab627fe8d0c5765e762fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_1d3c14f269745547e25d919bf723af1c25a50b25cc6ab627fe8d0c5765e762fc->leave($__internal_1d3c14f269745547e25d919bf723af1c25a50b25cc6ab627fe8d0c5765e762fc_prof);

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
