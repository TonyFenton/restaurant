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
        $__internal_181e4780b13b070a0268fd39e63b9545f08ad242ef2eb5cca7e0be0d777b51e5 = $this->env->getExtension("native_profiler");
        $__internal_181e4780b13b070a0268fd39e63b9545f08ad242ef2eb5cca7e0be0d777b51e5->enter($__internal_181e4780b13b070a0268fd39e63b9545f08ad242ef2eb5cca7e0be0d777b51e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
\t\t
        ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 18
        echo "\t\t
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" />
\t\t
\t\t<!-- Begin Cookie Consent plugin by Silktide - http://silktide.com/cookieconsent -->
\t\t\t<script type=\"text/javascript\">
\t\t\t\twindow.cookieconsent_options = {\"message\":\"Strona korzysta z plików cookies w celu realizacji usług i zgodnie z Polityką Plików Cookies.\",\"dismiss\":\"Rozumiem\",\"learnMore\":\"Dowiedz się więcej\",\"link\":null,\"theme\":\"dark-floating\"};
\t\t\t</script>

\t\t\t<script type=\"text/javascript\" src=\"//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/1.0.10/cookieconsent.min.js\"></script>
\t\t<!-- End Cookie Consent plugin -->

    </head>
    <body>
        ";
        // line 31
        $this->displayBlock('body', $context, $blocks);
        // line 32
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 36
        echo "    </body>
</html>";
        
        $__internal_181e4780b13b070a0268fd39e63b9545f08ad242ef2eb5cca7e0be0d777b51e5->leave($__internal_181e4780b13b070a0268fd39e63b9545f08ad242ef2eb5cca7e0be0d777b51e5_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a575f19bebe4df201a312fb5d67d5e273d6f048319b529b19c1fa41d8f8a4938 = $this->env->getExtension("native_profiler");
        $__internal_a575f19bebe4df201a312fb5d67d5e273d6f048319b529b19c1fa41d8f8a4938->enter($__internal_a575f19bebe4df201a312fb5d67d5e273d6f048319b529b19c1fa41d8f8a4938_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_a575f19bebe4df201a312fb5d67d5e273d6f048319b529b19c1fa41d8f8a4938->leave($__internal_a575f19bebe4df201a312fb5d67d5e273d6f048319b529b19c1fa41d8f8a4938_prof);

    }

    // line 8
    public function block_description($context, array $blocks = array())
    {
        $__internal_1256401ace793d15d468fbbcb8be795d70e580a1c89d9a58ed2d15874764893f = $this->env->getExtension("native_profiler");
        $__internal_1256401ace793d15d468fbbcb8be795d70e580a1c89d9a58ed2d15874764893f->enter($__internal_1256401ace793d15d468fbbcb8be795d70e580a1c89d9a58ed2d15874764893f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        
        $__internal_1256401ace793d15d468fbbcb8be795d70e580a1c89d9a58ed2d15874764893f->leave($__internal_1256401ace793d15d468fbbcb8be795d70e580a1c89d9a58ed2d15874764893f_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f331caa0f047c0ef14c7ef46a192c92c053c79f33140d749cc34f3064e6fa485 = $this->env->getExtension("native_profiler");
        $__internal_f331caa0f047c0ef14c7ef46a192c92c053c79f33140d749cc34f3064e6fa485->enter($__internal_f331caa0f047c0ef14c7ef46a192c92c053c79f33140d749cc34f3064e6fa485_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "\t\t\t<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bootstrap-3.3.7-dist/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t\t<!--[if lt IE 9]>
\t\t\t\t<script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
\t\t\t\t<script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
\t\t\t<![endif]-->
\t\t\t<link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/base.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
\t\t";
        
        $__internal_f331caa0f047c0ef14c7ef46a192c92c053c79f33140d749cc34f3064e6fa485->leave($__internal_f331caa0f047c0ef14c7ef46a192c92c053c79f33140d749cc34f3064e6fa485_prof);

    }

    // line 31
    public function block_body($context, array $blocks = array())
    {
        $__internal_2c6017c533e1005db4d88b1999ed142c6a1b53921036a056bb7af98aec3de4a8 = $this->env->getExtension("native_profiler");
        $__internal_2c6017c533e1005db4d88b1999ed142c6a1b53921036a056bb7af98aec3de4a8->enter($__internal_2c6017c533e1005db4d88b1999ed142c6a1b53921036a056bb7af98aec3de4a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2c6017c533e1005db4d88b1999ed142c6a1b53921036a056bb7af98aec3de4a8->leave($__internal_2c6017c533e1005db4d88b1999ed142c6a1b53921036a056bb7af98aec3de4a8_prof);

    }

    // line 32
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_44980f8022703459f5e8e418d0a112d453cac1aeeea92b976fc32c601a5e69d5 = $this->env->getExtension("native_profiler");
        $__internal_44980f8022703459f5e8e418d0a112d453cac1aeeea92b976fc32c601a5e69d5->enter($__internal_44980f8022703459f5e8e418d0a112d453cac1aeeea92b976fc32c601a5e69d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 33
        echo "\t\t\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
\t\t\t<script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bootstrap-3.3.7-dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t";
        
        $__internal_44980f8022703459f5e8e418d0a112d453cac1aeeea92b976fc32c601a5e69d5->leave($__internal_44980f8022703459f5e8e418d0a112d453cac1aeeea92b976fc32c601a5e69d5_prof);

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
        return array (  143 => 34,  140 => 33,  134 => 32,  123 => 31,  114 => 16,  105 => 11,  99 => 10,  88 => 8,  77 => 7,  69 => 36,  66 => 32,  64 => 31,  49 => 19,  46 => 18,  44 => 10,  39 => 8,  35 => 7,  27 => 1,);
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
/* 		*/
/*         {% block stylesheets %}*/
/* 			<link href="{{ asset('bootstrap-3.3.7-dist/css/bootstrap.min.css') }}" rel="stylesheet">*/
/* 			<!--[if lt IE 9]>*/
/* 				<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>*/
/* 				<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>*/
/* 			<![endif]-->*/
/* 			<link href="{{asset('css/base.css')}}" rel="stylesheet" />*/
/* 		{% endblock %}*/
/* 		*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('images/logo.png') }}" />*/
/* 		*/
/* 		<!-- Begin Cookie Consent plugin by Silktide - http://silktide.com/cookieconsent -->*/
/* 			<script type="text/javascript">*/
/* 				window.cookieconsent_options = {"message":"Strona korzysta z plików cookies w celu realizacji usług i zgodnie z Polityką Plików Cookies.","dismiss":"Rozumiem","learnMore":"Dowiedz się więcej","link":null,"theme":"dark-floating"};*/
/* 			</script>*/
/* */
/* 			<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/1.0.10/cookieconsent.min.js"></script>*/
/* 		<!-- End Cookie Consent plugin -->*/
/* */
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}*/
/* 			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>*/
/* 			<script src="{{ asset('bootstrap-3.3.7-dist/js/bootstrap.min.js') }}"></script>*/
/* 		{% endblock %}*/
/*     </body>*/
/* </html>*/
