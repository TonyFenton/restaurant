<?php

/* base.html.twig */
class __TwigTemplate_a2fe4fd61c697fa9c433220ae8e6e8057407debddc88ecc0b78752661997dccb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'description' => array($this, 'block_description'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cfe2b99fd2fd2a1be7aa6b2706998b0939e67572f61bbf43b985b11241392a91 = $this->env->getExtension("native_profiler");
        $__internal_cfe2b99fd2fd2a1be7aa6b2706998b0939e67572f61bbf43b985b11241392a91->enter($__internal_cfe2b99fd2fd2a1be7aa6b2706998b0939e67572f61bbf43b985b11241392a91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t\t<meta name=\"description\" content=\"";
        // line 8
        $this->displayBlock('description', $context, $blocks);
        echo "\" />
        ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 17
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 20
        $this->displayBlock('body', $context, $blocks);
        // line 21
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 25
        echo "    </body>
</html>
";
        
        $__internal_cfe2b99fd2fd2a1be7aa6b2706998b0939e67572f61bbf43b985b11241392a91->leave($__internal_cfe2b99fd2fd2a1be7aa6b2706998b0939e67572f61bbf43b985b11241392a91_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9b5e8efcd4856440372cc8b164f34d4b88fdf179dbe25cfa84d74a2f9ec8617d = $this->env->getExtension("native_profiler");
        $__internal_9b5e8efcd4856440372cc8b164f34d4b88fdf179dbe25cfa84d74a2f9ec8617d->enter($__internal_9b5e8efcd4856440372cc8b164f34d4b88fdf179dbe25cfa84d74a2f9ec8617d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_9b5e8efcd4856440372cc8b164f34d4b88fdf179dbe25cfa84d74a2f9ec8617d->leave($__internal_9b5e8efcd4856440372cc8b164f34d4b88fdf179dbe25cfa84d74a2f9ec8617d_prof);

    }

    // line 8
    public function block_description($context, array $blocks = array())
    {
        $__internal_c353d5361a65a3202de7b661b8bb1c99168867cd2e59b946a7b6f00ff9234f98 = $this->env->getExtension("native_profiler");
        $__internal_c353d5361a65a3202de7b661b8bb1c99168867cd2e59b946a7b6f00ff9234f98->enter($__internal_c353d5361a65a3202de7b661b8bb1c99168867cd2e59b946a7b6f00ff9234f98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        
        $__internal_c353d5361a65a3202de7b661b8bb1c99168867cd2e59b946a7b6f00ff9234f98->leave($__internal_c353d5361a65a3202de7b661b8bb1c99168867cd2e59b946a7b6f00ff9234f98_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e6ff0836eb92e4980d8505d0a45d680f853a20974c0d08fa8badd20f874f5dc9 = $this->env->getExtension("native_profiler");
        $__internal_e6ff0836eb92e4980d8505d0a45d680f853a20974c0d08fa8badd20f874f5dc9->enter($__internal_e6ff0836eb92e4980d8505d0a45d680f853a20974c0d08fa8badd20f874f5dc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "\t\t\t<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bootstrap-3.3.7-dist/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t\t<!--[if lt IE 9]>
\t\t\t\t<script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
\t\t\t\t<script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
\t\t\t<![endif]-->
\t\t\t<link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
\t\t";
        
        $__internal_e6ff0836eb92e4980d8505d0a45d680f853a20974c0d08fa8badd20f874f5dc9->leave($__internal_e6ff0836eb92e4980d8505d0a45d680f853a20974c0d08fa8badd20f874f5dc9_prof);

    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        $__internal_302c9d2fc6cc0ac46072b80eae4ddcf8b62b71aecf80ab9059344a1f95bcfb0a = $this->env->getExtension("native_profiler");
        $__internal_302c9d2fc6cc0ac46072b80eae4ddcf8b62b71aecf80ab9059344a1f95bcfb0a->enter($__internal_302c9d2fc6cc0ac46072b80eae4ddcf8b62b71aecf80ab9059344a1f95bcfb0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_302c9d2fc6cc0ac46072b80eae4ddcf8b62b71aecf80ab9059344a1f95bcfb0a->leave($__internal_302c9d2fc6cc0ac46072b80eae4ddcf8b62b71aecf80ab9059344a1f95bcfb0a_prof);

    }

    // line 21
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1681e513bdf911bd5ff3be8943362206d923d2db76ec314947c9fc053b326075 = $this->env->getExtension("native_profiler");
        $__internal_1681e513bdf911bd5ff3be8943362206d923d2db76ec314947c9fc053b326075->enter($__internal_1681e513bdf911bd5ff3be8943362206d923d2db76ec314947c9fc053b326075_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 22
        echo "\t\t\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
\t\t\t<script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bootstrap-3.3.7-dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t";
        
        $__internal_1681e513bdf911bd5ff3be8943362206d923d2db76ec314947c9fc053b326075->leave($__internal_1681e513bdf911bd5ff3be8943362206d923d2db76ec314947c9fc053b326075_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 23,  129 => 22,  123 => 21,  112 => 20,  103 => 15,  94 => 10,  88 => 9,  77 => 8,  66 => 7,  57 => 25,  54 => 21,  52 => 20,  45 => 17,  43 => 9,  39 => 8,  35 => 7,  27 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/* 		<meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/* 		<meta name="viewport" content="width=device-width, initial-scale=1">*/
/*         <title>{% block title %}{% endblock %}</title>*/
/* 		<meta name="description" content="{% block description %}{% endblock %}" />*/
/*         {% block stylesheets %}*/
/* 			<link href="{{ asset('bootstrap-3.3.7-dist/css/bootstrap.min.css') }}" rel="stylesheet">*/
/* 			<!--[if lt IE 9]>*/
/* 				<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>*/
/* 				<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>*/
/* 			<![endif]-->*/
/* 			<link href="{{asset('css/style.css')}}" rel="stylesheet" />*/
/* 		{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('images/logo.png') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}*/
/* 			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>*/
/* 			<script src="{{ asset('bootstrap-3.3.7-dist/js/bootstrap.min.js') }}"></script>*/
/* 		{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
