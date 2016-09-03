<?php

/* TwigBundle::Exception/layout.html.twig */
class __TwigTemplate_44ef776bb470e2d7c216438f03380b6fc687fea80a183ff4cfa95a097b852435 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "TwigBundle::Exception/layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-12\">
\t\t\t\t<div id=\"panel-exception\" class=\"center-block panel\">
\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t<a href=\"/restaurant4/web/app_dev.php/\">
\t\t\t\t\t\t\t<img alt=\"\" src=\"/restaurant4/web/images/logo.png\" class=\"img-responsive\">
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t";
        // line 14
        $this->displayBlock('content', $context, $blocks);
        echo "\t\t\t

\t\t\t\t\t</div>\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
";
    }

    public function block_content($context, array $blocks = array())
    {
    }

    // line 23
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 24
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/twigbundle/exception/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
";
    }

    public function getTemplateName()
    {
        return "TwigBundle::Exception/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 25,  64 => 24,  61 => 23,  45 => 14,  33 => 4,  30 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* 	<div class="container">*/
/* 		<div class="row">*/
/* 			<div class="col-xs-12">*/
/* 				<div id="panel-exception" class="center-block panel">*/
/* 					<div class="panel-heading">*/
/* 						<a href="/restaurant4/web/app_dev.php/">*/
/* 							<img alt="" src="/restaurant4/web/images/logo.png" class="img-responsive">*/
/* 						</a>*/
/* 					</div>*/
/* 					<div class="panel-body">*/
/* 						{% block content %}{% endblock %}			*/
/* */
/* 					</div>			*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/* 	{{ parent() }}*/
/* 	<link href="{{asset('css/twigbundle/exception/style.css')}}" rel="stylesheet" />*/
/* {% endblock %}*/
