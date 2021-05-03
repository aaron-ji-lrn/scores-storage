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

/* grading/_questions.html.twig */
class __TwigTemplate_e682938950e08a9a21c4b1f90b332a7c93393bc695265ade5b5de82627683892 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "grading/_questions.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["questions"]) || array_key_exists("questions", $context) ? $context["questions"] : (function () { throw new RuntimeError('Variable "questions" does not exist.', 1, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 2
            echo "    <div class=\"row mt-2\">
        <div class=\"col-md-12\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">";
            // line 6
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "type", [], "array", false, false, false, 6), "html", null, true);
            echo "</h5>
                    <p>
                    ";
            // line 8
            echo twig_get_attribute($this->env, $this->source, $context["question"], "stimulus", [], "array", false, false, false, 8);
            echo "
                    </p>
                    <h5 class=\"card-title\">Response</h5>
                    <p>
                    ";
            // line 12
            $context["validResponse"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["question"], "validation", [], "array", false, false, false, 12), "valid_response", [], "array", false, false, false, 12), "value", [], "array", false, false, false, 12);
            // line 13
            echo "                    ";
            $context["score"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["question"], "validation", [], "array", false, false, false, 13), "valid_response", [], "array", false, false, false, 13), "score", [], "array", false, false, false, 13);
            // line 14
            echo "                    ";
            echo twig_escape_filter($this->env, twig_join_filter((isset($context["validResponse"]) || array_key_exists("validResponse", $context) ? $context["validResponse"] : (function () { throw new RuntimeError('Variable "validResponse" does not exist.', 14, $this->source); })()), ", "), "html", null, true);
            echo "
                    </p>
                    <h5 class=\"card-title\">Score</h5>
                    <p>
                        <input type=\"text\" name=\"score\" value=\"";
            // line 18
            echo twig_escape_filter($this->env, (isset($context["score"]) || array_key_exists("score", $context) ? $context["score"] : (function () { throw new RuntimeError('Variable "score" does not exist.', 18, $this->source); })()), "html", null, true);
            echo "\"/> / 
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
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "grading/_questions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 18,  67 => 14,  64 => 13,  62 => 12,  55 => 8,  50 => 6,  44 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for question in questions %}
    <div class=\"row mt-2\">
        <div class=\"col-md-12\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">{{question['type']}}</h5>
                    <p>
                    {{ question['stimulus'] | raw}}
                    </p>
                    <h5 class=\"card-title\">Response</h5>
                    <p>
                    {% set validResponse = question['validation']['valid_response']['value'] %}
                    {% set score = question['validation']['valid_response']['score'] %}
                    {{ validResponse|join(', ')}}
                    </p>
                    <h5 class=\"card-title\">Score</h5>
                    <p>
                        <input type=\"text\" name=\"score\" value=\"{{score}}\"/> / 
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
{% endfor %}", "grading/_questions.html.twig", "/var/www/templates/grading/_questions.html.twig");
    }
}
