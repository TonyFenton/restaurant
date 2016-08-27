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
        $__internal_110f904ac1c22313101f91ad629f6e9018786a1713a50ad253ce8f132692e4b7 = $this->env->getExtension("native_profiler");
        $__internal_110f904ac1c22313101f91ad629f6e9018786a1713a50ad253ce8f132692e4b7->enter($__internal_110f904ac1c22313101f91ad629f6e9018786a1713a50ad253ce8f132692e4b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
\t\t
\t\t<!-- Begin Cookie Consent plugin by Silktide - http://silktide.com/cookieconsent -->
\t\t<script type=\"text/javascript\">
\t\t\twindow.cookieconsent_options = {\"message\":\"Strona korzysta z plików cookies w celu realizacji usług i zgodnie z Polityką Plików Cookies.\",\"dismiss\":\"Rozumiem\",\"learnMore\":\"Dowiedz się więcej\",\"link\":null,\"theme\":\"dark-floating\"};
\t\t</script>

\t\t<script type=\"text/javascript\" src=\"//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/1.0.10/cookieconsent.min.js\"></script>
\t\t<!-- End Cookie Consent plugin -->

    </head>
    <body>
        ";
        // line 29
        $this->displayBlock('body', $context, $blocks);
        // line 30
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 34
        echo "    </body>
</html>
";
        
        $__internal_110f904ac1c22313101f91ad629f6e9018786a1713a50ad253ce8f132692e4b7->leave($__internal_110f904ac1c22313101f91ad629f6e9018786a1713a50ad253ce8f132692e4b7_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_898b23063d3a9f9f9a08962e535356244a9eb56c0a85d228ec7b7288e78af776 = $this->env->getExtension("native_profiler");
        $__internal_898b23063d3a9f9f9a08962e535356244a9eb56c0a85d228ec7b7288e78af776->enter($__internal_898b23063d3a9f9f9a08962e535356244a9eb56c0a85d228ec7b7288e78af776_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_898b23063d3a9f9f9a08962e535356244a9eb56c0a85d228ec7b7288e78af776->leave($__internal_898b23063d3a9f9f9a08962e535356244a9eb56c0a85d228ec7b7288e78af776_prof);

    }

    // line 8
    public function block_description($context, array $blocks = array())
    {
        $__internal_939c732587d2337463553c3a3e53b9eb4032b11658d6a6a904f4b170ab4fedef = $this->env->getExtension("native_profiler");
        $__internal_939c732587d2337463553c3a3e53b9eb4032b11658d6a6a904f4b170ab4fedef->enter($__internal_939c732587d2337463553c3a3e53b9eb4032b11658d6a6a904f4b170ab4fedef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        
        $__internal_939c732587d2337463553c3a3e53b9eb4032b11658d6a6a904f4b170ab4fedef->leave($__internal_939c732587d2337463553c3a3e53b9eb4032b11658d6a6a904f4b170ab4fedef_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_28d95aeedfa1835810796ae3ac2693bf6dd9840bd495dec34df30098e931c42c = $this->env->getExtension("native_profiler");
        $__internal_28d95aeedfa1835810796ae3ac2693bf6dd9840bd495dec34df30098e931c42c->enter($__internal_28d95aeedfa1835810796ae3ac2693bf6dd9840bd495dec34df30098e931c42c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/base.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
\t\t";
        
        $__internal_28d95aeedfa1835810796ae3ac2693bf6dd9840bd495dec34df30098e931c42c->leave($__internal_28d95aeedfa1835810796ae3ac2693bf6dd9840bd495dec34df30098e931c42c_prof);

    }

    // line 29
    public function block_body($context, array $blocks = array())
    {
        $__internal_81d271f51d7ab948cb9977e4837e2514713516030c512da6ba17b2c5d540201b = $this->env->getExtension("native_profiler");
        $__internal_81d271f51d7ab948cb9977e4837e2514713516030c512da6ba17b2c5d540201b->enter($__internal_81d271f51d7ab948cb9977e4837e2514713516030c512da6ba17b2c5d540201b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_81d271f51d7ab948cb9977e4837e2514713516030c512da6ba17b2c5d540201b->leave($__internal_81d271f51d7ab948cb9977e4837e2514713516030c512da6ba17b2c5d540201b_prof);

    }

    // line 30
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_049044b1301b2efdfb7e5805f72ea6870437dbfaa1a53f1e4a5a1b000d53b2bf = $this->env->getExtension("native_profiler");
        $__internal_049044b1301b2efdfb7e5805f72ea6870437dbfaa1a53f1e4a5a1b000d53b2bf->enter($__internal_049044b1301b2efdfb7e5805f72ea6870437dbfaa1a53f1e4a5a1b000d53b2bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 31
        echo "\t\t\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
\t\t\t<script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bootstrap-3.3.7-dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t";
        
        $__internal_049044b1301b2efdfb7e5805f72ea6870437dbfaa1a53f1e4a5a1b000d53b2bf->leave($__internal_049044b1301b2efdfb7e5805f72ea6870437dbfaa1a53f1e4a5a1b000d53b2bf_prof);

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
        return array (  141 => 32,  138 => 31,  132 => 30,  121 => 29,  112 => 15,  103 => 10,  97 => 9,  86 => 8,  75 => 7,  66 => 34,  63 => 30,  61 => 29,  45 => 17,  43 => 9,  39 => 8,  35 => 7,  27 => 1,);
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
/* 			<link href="{{asset('css/base.css')}}" rel="stylesheet" />*/
/* 		{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('images/logo.png') }}" />*/
/* 		*/
/* 		<!-- Begin Cookie Consent plugin by Silktide - http://silktide.com/cookieconsent -->*/
/* 		<script type="text/javascript">*/
/* 			window.cookieconsent_options = {"message":"Strona korzysta z plików cookies w celu realizacji usług i zgodnie z Polityką Plików Cookies.","dismiss":"Rozumiem","learnMore":"Dowiedz się więcej","link":null,"theme":"dark-floating"};*/
/* 		</script>*/
/* */
/* 		<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/1.0.10/cookieconsent.min.js"></script>*/
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
/* */
