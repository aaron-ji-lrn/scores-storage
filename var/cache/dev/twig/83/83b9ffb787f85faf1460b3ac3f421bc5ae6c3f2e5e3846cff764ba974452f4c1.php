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

/* manual_grading.html */
class __TwigTemplate_10e9952bfed8352131c96a6b8d3f9162d1191a2e82c5b03b7f393f0f77f2460e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "manual_grading.html"));

        $this->parent = $this->loadTemplate("base.html.twig", "manual_grading.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
<div class=\"container\">
    <div class=\"row mt-5\">
        <div class=\"col-md-12\">
            <a href=\"#\" class=\"btn btn-primary\">Save</a>
        </div>
    </div>
    <div class=\"row mt-5\">
        <div class=\"col-md-12\">
            <div class=\"card\">
                <h5 class=\"card-header\">Question Id</h5>
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Response Id</h5>
                    <p>
                        <input type=\"text\" name=\"score\" value=\"0\"/> / 
                        <input type=\"text\" name=\"max_score\" value=\"1\"/>
                    </p>
                    <p class=\"card-text\">Feedback.</p>
                </div>
            </div>
        </div>
    </div>
    <div class=\"row mt-5\">
        <div class=\"col-md-12\">
            <div class=\"card\">
                <h5 class=\"card-header\">Question Id</h5>
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Special title treatment</h5>
                    <p class=\"card-text\">With supporting text below as a natural lead-in to additional content.</p>
                    <a href=\"#\" class=\"btn btn-primary\">Go somewhere</a>
                </div>
            </div>
        </div>
    </div>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "manual_grading.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 3,  52 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}

<div class=\"container\">
    <div class=\"row mt-5\">
        <div class=\"col-md-12\">
            <a href=\"#\" class=\"btn btn-primary\">Save</a>
        </div>
    </div>
    <div class=\"row mt-5\">
        <div class=\"col-md-12\">
            <div class=\"card\">
                <h5 class=\"card-header\">Question Id</h5>
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Response Id</h5>
                    <p>
                        <input type=\"text\" name=\"score\" value=\"0\"/> / 
                        <input type=\"text\" name=\"max_score\" value=\"1\"/>
                    </p>
                    <p class=\"card-text\">Feedback.</p>
                </div>
            </div>
        </div>
    </div>
    <div class=\"row mt-5\">
        <div class=\"col-md-12\">
            <div class=\"card\">
                <h5 class=\"card-header\">Question Id</h5>
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Special title treatment</h5>
                    <p class=\"card-text\">With supporting text below as a natural lead-in to additional content.</p>
                    <a href=\"#\" class=\"btn btn-primary\">Go somewhere</a>
                </div>
            </div>
        </div>
    </div>
</div>

{% endblock %}


", "manual_grading.html", "/var/www/templates/manual_grading.html");
    }
}
