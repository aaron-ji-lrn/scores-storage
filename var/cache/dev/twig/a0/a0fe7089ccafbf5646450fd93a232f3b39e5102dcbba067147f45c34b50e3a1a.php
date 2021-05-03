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

/* grading/_header.html.twig */
class __TwigTemplate_ef75f120d1b518832db67fe386f4f3541a8c81520b6b115f41de9ef12c72063c extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "grading/_header.html.twig"));

        // line 1
        echo "<div class=\"row mt-2\">
    <div class=\"col-md-5\">
        ";
        // line 3
        echo twig_include($this->env, $context, "grading/header/_item_name.html.twig");
        echo "
    </div>
    <div class=\"col-md-5\">
        ";
        // line 6
        echo twig_include($this->env, $context, "grading/header/_student_name.html.twig");
        echo "
    </div>
    <div class=\"col-md-2\">
        <a href=\"#\" class=\"btn btn-primary\" style=\"margin-top:30px\">Save</a>
    </div>
</div>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "grading/_header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 6,  44 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row mt-2\">
    <div class=\"col-md-5\">
        {{ include('grading/header/_item_name.html.twig') }}
    </div>
    <div class=\"col-md-5\">
        {{ include('grading/header/_student_name.html.twig') }}
    </div>
    <div class=\"col-md-2\">
        <a href=\"#\" class=\"btn btn-primary\" style=\"margin-top:30px\">Save</a>
    </div>
</div>", "grading/_header.html.twig", "/var/www/templates/grading/_header.html.twig");
    }
}