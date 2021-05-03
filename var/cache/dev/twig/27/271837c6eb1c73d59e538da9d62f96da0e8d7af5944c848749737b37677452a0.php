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

/* grading/manual.html.twig */
class __TwigTemplate_8bbc072b33f6842ed2deb24dd3dc9e77ade15ba4afc4723ed049c33d386d61a8 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "grading/manual.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "grading/manual.html.twig", 1);
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
<div class=\"container mt-5\">
a
    ";
        // line 6
        echo twig_include($this->env, $context, "grading/alert.html.twig");
        echo "
    b
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
        return "grading/manual.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 6,  59 => 3,  52 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}

<div class=\"container mt-5\">
a
    {{ include('grading/alert.html.twig') }}
    b
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


", "grading/manual.html.twig", "/Volumes/lde-code/scores-storage/app/templates/grading/manual.html.twig");
    }
}
