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

/* grading/_responses.html.twig */
class __TwigTemplate_894958b70be3232c2eba96790f6d15f50f0d4862fc55debdbb1d658294a35d34 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "grading/_responses.html.twig"));

        // line 1
        echo "    <div class=\"row mt-2\">
        <div class=\"col-md-12\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Question</h5>
                    <p>
                    questions
                    </p>
                    <h5 class=\"card-title\">Response</h5>
                    <p>
                    response
                    </p>
                    <h5 class=\"card-title\">Score</h5>
                    <p>
                        <input type=\"text\" name=\"score\" value=\"0\"/> / 
                        <input type=\"text\" name=\"max_score\" value=\"1\"/>
                    </p>
                    <h5 class=\"card-title\">Feedback</h5>
                    <p>
                        <textarea class=\"form-control\"  rows=\"10\"></textarea>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class=\"row mt-2\">
        <div class=\"col-md-12\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Question</h5>
                    <p>
                    questions
                    </p>
                    <h5 class=\"card-title\">Response</h5>
                    <p>
                    response
                    </p>
                    <h5 class=\"card-title\">Score</h5>
                    <p>
                        <input type=\"text\" name=\"score\" value=\"0\"/> / 
                        <input type=\"text\" name=\"max_score\" value=\"1\"/>
                    </p>
                    <h5 class=\"card-title\">Feedback</h5>
                    <p>
                        <textarea class=\"form-control\"  rows=\"10\"></textarea>
                    </p>
                </div>
            </div>
        </div>
    </div>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "grading/_responses.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("    <div class=\"row mt-2\">
        <div class=\"col-md-12\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Question</h5>
                    <p>
                    questions
                    </p>
                    <h5 class=\"card-title\">Response</h5>
                    <p>
                    response
                    </p>
                    <h5 class=\"card-title\">Score</h5>
                    <p>
                        <input type=\"text\" name=\"score\" value=\"0\"/> / 
                        <input type=\"text\" name=\"max_score\" value=\"1\"/>
                    </p>
                    <h5 class=\"card-title\">Feedback</h5>
                    <p>
                        <textarea class=\"form-control\"  rows=\"10\"></textarea>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class=\"row mt-2\">
        <div class=\"col-md-12\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Question</h5>
                    <p>
                    questions
                    </p>
                    <h5 class=\"card-title\">Response</h5>
                    <p>
                    response
                    </p>
                    <h5 class=\"card-title\">Score</h5>
                    <p>
                        <input type=\"text\" name=\"score\" value=\"0\"/> / 
                        <input type=\"text\" name=\"max_score\" value=\"1\"/>
                    </p>
                    <h5 class=\"card-title\">Feedback</h5>
                    <p>
                        <textarea class=\"form-control\"  rows=\"10\"></textarea>
                    </p>
                </div>
            </div>
        </div>
    </div>", "grading/_responses.html.twig", "/var/www/templates/grading/_responses.html.twig");
    }
}
