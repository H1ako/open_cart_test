<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* Main/template/common/home.twig */
class __TwigTemplate_826ec7a25d28890df1cd08ea65934fb96a0666daf9cfcee7fdee903b23fb021d extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Document</title>
</head>
<body>
    ";
        // line 11
        echo "    <header>
        
    </header>
    ";
        // line 15
        echo "    <main>

    </main>
    ";
        // line 19
        echo "    <footer>

    </footer>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "Main/template/common/home.twig";
    }

    public function getDebugInfo()
    {
        return array (  58 => 19,  53 => 15,  48 => 11,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Main/template/common/home.twig", "");
    }
}
