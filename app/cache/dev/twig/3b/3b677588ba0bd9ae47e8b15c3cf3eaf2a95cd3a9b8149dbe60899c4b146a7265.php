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
        $__internal_741a6d8469e08e77d7c0960782951940e3344a48d21510d5de627ca777656902 = $this->env->getExtension("native_profiler");
        $__internal_741a6d8469e08e77d7c0960782951940e3344a48d21510d5de627ca777656902->enter($__internal_741a6d8469e08e77d7c0960782951940e3344a48d21510d5de627ca777656902_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_741a6d8469e08e77d7c0960782951940e3344a48d21510d5de627ca777656902->leave($__internal_741a6d8469e08e77d7c0960782951940e3344a48d21510d5de627ca777656902_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_82a19f3419c33445c2774a5a0a11699dc88a40f85c2388e24a916b13099f4421 = $this->env->getExtension("native_profiler");
        $__internal_82a19f3419c33445c2774a5a0a11699dc88a40f85c2388e24a916b13099f4421->enter($__internal_82a19f3419c33445c2774a5a0a11699dc88a40f85c2388e24a916b13099f4421_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_82a19f3419c33445c2774a5a0a11699dc88a40f85c2388e24a916b13099f4421->leave($__internal_82a19f3419c33445c2774a5a0a11699dc88a40f85c2388e24a916b13099f4421_prof);

    }

    // line 8
    public function block_description($context, array $blocks = array())
    {
        $__internal_8378ba380cebce66751eea9d0318b0a35e4dcf6a3876e1a2c92880aa6b270e76 = $this->env->getExtension("native_profiler");
        $__internal_8378ba380cebce66751eea9d0318b0a35e4dcf6a3876e1a2c92880aa6b270e76->enter($__internal_8378ba380cebce66751eea9d0318b0a35e4dcf6a3876e1a2c92880aa6b270e76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        
        $__internal_8378ba380cebce66751eea9d0318b0a35e4dcf6a3876e1a2c92880aa6b270e76->leave($__internal_8378ba380cebce66751eea9d0318b0a35e4dcf6a3876e1a2c92880aa6b270e76_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_38011458b88d3e2250b2f8f1497c7db8e396dafb95ad147881da286219b4eaee = $this->env->getExtension("native_profiler");
        $__internal_38011458b88d3e2250b2f8f1497c7db8e396dafb95ad147881da286219b4eaee->enter($__internal_38011458b88d3e2250b2f8f1497c7db8e396dafb95ad147881da286219b4eaee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_38011458b88d3e2250b2f8f1497c7db8e396dafb95ad147881da286219b4eaee->leave($__internal_38011458b88d3e2250b2f8f1497c7db8e396dafb95ad147881da286219b4eaee_prof);

    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        $__internal_9aeec54b1585e0349ee570d586672cc20288d7610c24999f2376a09bcedb679a = $this->env->getExtension("native_profiler");
        $__internal_9aeec54b1585e0349ee570d586672cc20288d7610c24999f2376a09bcedb679a->enter($__internal_9aeec54b1585e0349ee570d586672cc20288d7610c24999f2376a09bcedb679a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9aeec54b1585e0349ee570d586672cc20288d7610c24999f2376a09bcedb679a->leave($__internal_9aeec54b1585e0349ee570d586672cc20288d7610c24999f2376a09bcedb679a_prof);

    }

    // line 21
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_96a491763e1f62eb73f946f96f9a6da99ae4efd0eec03cbe185a0dfbed34e699 = $this->env->getExtension("native_profiler");
        $__internal_96a491763e1f62eb73f946f96f9a6da99ae4efd0eec03cbe185a0dfbed34e699->enter($__internal_96a491763e1f62eb73f946f96f9a6da99ae4efd0eec03cbe185a0dfbed34e699_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 22
        echo "\t\t\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
\t\t\t<script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bootstrap-3.3.7-dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t";
        
        $__internal_96a491763e1f62eb73f946f96f9a6da99ae4efd0eec03cbe185a0dfbed34e699->leave($__internal_96a491763e1f62eb73f946f96f9a6da99ae4efd0eec03cbe185a0dfbed34e699_prof);

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
