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

/* grading/header/_student_name.html.twig */
class __TwigTemplate_ac8759c049bb9f58a94668fe4ab448654609feb03b25e4c0281ac871dcf9ef71 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "grading/header/_student_name.html.twig"));

        // line 1
        echo "<div>
    <label for=\"exampleInputEmail1\">Student name</label>
</div>
<div>
    <div class=\"btn-group\">
        <button type=\"button\" class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
            Action fdasfdsaf  fdasfsafdsaffsdf
        </button>
        <div class=\"dropdown-menu\">
            <a class=\"dropdown-item\" href=\"#\">Action</a>
            <a class=\"dropdown-item\" href=\"#\">Another action</a>
            <a class=\"dropdown-item\" href=\"#\">Something else here</a>
            <a class=\"dropdown-item\" href=\"#\">Separated link</a>
        </div>
    </div>
</div>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "grading/header/_student_name.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div>
    <label for=\"exampleInputEmail1\">Student name</label>
</div>
<div>
    <div class=\"btn-group\">
        <button type=\"button\" class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
            Action fdasfdsaf  fdasfsafdsaffsdf
        </button>
        <div class=\"dropdown-menu\">
            <a class=\"dropdown-item\" href=\"#\">Action</a>
            <a class=\"dropdown-item\" href=\"#\">Another action</a>
            <a class=\"dropdown-item\" href=\"#\">Something else here</a>
            <a class=\"dropdown-item\" href=\"#\">Separated link</a>
        </div>
    </div>
</div>", "grading/header/_student_name.html.twig", "/var/www/templates/grading/header/_student_name.html.twig");
    }
}
