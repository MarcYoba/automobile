<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* registration/register.html.twig */
class __TwigTemplate_a754bbb7ae559c5dee07936d7b3b6318a5fc27f17ef4f6efca82b72429d8dc54 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "registration/register.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Register";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "    <header id=\"head\" class=\"secondary\"></header>
    ";
        // line 7
        yield from $this->loadTemplate("navbar.html.twig", "registration/register.html.twig", 7)->unwrap()->yield($context);
        // line 8
        yield "<!-- container -->
    <div class=\"container\">

        <div class=\"row\">
            
            <!-- Article main content -->
            <article class=\"col-12 maincontent\">
                <header class=\"page-header mb-4\">
                    <h1 class=\"page-title\">Registration</h1>
                </header>
                
                <div class=\"col-md-6 offset-md-3 col-sm-8 offset-sm-2\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h3 class=\"thin text-center\">Enregistrez un nouveau compte</h3>
                            <p class=\"text-center text-muted\">Connexion <a href=\"";
        // line 23
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\">Login</a> </p>
                            <hr>
                            ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "flashes", ["verify_email_error"], "method", false, false, false, 25));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_error"]) {
            // line 26
            yield "                                <div class=\"alert alert-danger\" role=\"alert\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["flash_error"], "html", null, true);
            yield "</div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['flash_error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        yield "                            ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 28, $this->source); })()), 'errors');
        yield "

                            ";
        // line 30
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 30, $this->source); })()), 'form_start');
        yield "
                                <div class=\"mb-3\">
                                    <label class=\"form-label\">First Name</label>
                                    <input type=\"text\" class=\"form-control\">
                                </div>
                                <div class=\"mb-3\">
                                    <label class=\"form-label\">Last Name</label>
                                    <input type=\"text\" class=\"form-control\">
                                </div>
                                <div class=\"mb-3\">
                                    <label class=\"form-label\">Email Address <span class=\"text-danger\">*</span></label>
                                    ";
        // line 41
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 41, $this->source); })()), "email", [], "any", false, false, false, 41), 'row', ["label" => " "]);
        // line 43
        yield "
                                </div>

                                <div class=\"row mb-3\">
                                    <div class=\"col-sm-6\">
                                        <label class=\"form-label\">Password <span class=\"text-danger\">*</span></label>
                                        ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 49, $this->source); })()), "plainPassword", [], "any", false, false, false, 49), 'row', ["label" => " "]);
        // line 51
        yield "
                                    </div>
                                    <div class=\"col-sm-6\">
                                        <label class=\"form-label\">Confirm Password <span class=\"text-danger\">*</span></label>
                                        <input type=\"password\" class=\"form-control\">
                                    </div>
                                </div>

                                <hr>

                                <div class=\"row align-items-center\">
                                    <div class=\"col-lg-8\">
                                        <div class=\"form-check\">
                                            ";
        // line 64
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 64, $this->source); })()), "agreeTerms", [], "any", false, false, false, 64), 'row');
        yield "
                                            <label class=\"form-check-label\" for=\"termsCheck\">
                                                ";
        // line 67
        yield "                                            </label>
                                        </div>
                                    </div>
                                    <div class=\"col-lg-4 text-lg-end\">
                                        <button class=\"btn btn-primary\" type=\"submit\">Register</button>
                                    </div>
                                </div>
                            
                            ";
        // line 75
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 75, $this->source); })()), 'form_end');
        yield "
                        </div>
                    </div>
                </div>
            </article>
            <!-- /Article -->
        </div>
    </div>
<!-- /container -->
    ";
        // line 84
        yield from $this->loadTemplate("footer.html.twig", "registration/register.html.twig", 84)->unwrap()->yield($context);
        yield "    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "registration/register.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  199 => 84,  187 => 75,  177 => 67,  172 => 64,  157 => 51,  155 => 49,  147 => 43,  145 => 41,  131 => 30,  125 => 28,  116 => 26,  112 => 25,  107 => 23,  90 => 8,  88 => 7,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Register{% endblock %}

{% block body %}
    <header id=\"head\" class=\"secondary\"></header>
    {% include \"navbar.html.twig\" %}
<!-- container -->
    <div class=\"container\">

        <div class=\"row\">
            
            <!-- Article main content -->
            <article class=\"col-12 maincontent\">
                <header class=\"page-header mb-4\">
                    <h1 class=\"page-title\">Registration</h1>
                </header>
                
                <div class=\"col-md-6 offset-md-3 col-sm-8 offset-sm-2\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h3 class=\"thin text-center\">Enregistrez un nouveau compte</h3>
                            <p class=\"text-center text-muted\">Connexion <a href=\"{{path('app_login')}}\">Login</a> </p>
                            <hr>
                            {% for flash_error in app.flashes('verify_email_error') %}
                                <div class=\"alert alert-danger\" role=\"alert\">{{ flash_error }}</div>
                            {% endfor %}
                            {{ form_errors(registrationForm) }}

                            {{ form_start(registrationForm) }}
                                <div class=\"mb-3\">
                                    <label class=\"form-label\">First Name</label>
                                    <input type=\"text\" class=\"form-control\">
                                </div>
                                <div class=\"mb-3\">
                                    <label class=\"form-label\">Last Name</label>
                                    <input type=\"text\" class=\"form-control\">
                                </div>
                                <div class=\"mb-3\">
                                    <label class=\"form-label\">Email Address <span class=\"text-danger\">*</span></label>
                                    {{ form_row(registrationForm.email, {
                                        label: ' '
                                    }) }}
                                </div>

                                <div class=\"row mb-3\">
                                    <div class=\"col-sm-6\">
                                        <label class=\"form-label\">Password <span class=\"text-danger\">*</span></label>
                                        {{ form_row(registrationForm.plainPassword, {
                                            label: ' '
                                        }) }}
                                    </div>
                                    <div class=\"col-sm-6\">
                                        <label class=\"form-label\">Confirm Password <span class=\"text-danger\">*</span></label>
                                        <input type=\"password\" class=\"form-control\">
                                    </div>
                                </div>

                                <hr>

                                <div class=\"row align-items-center\">
                                    <div class=\"col-lg-8\">
                                        <div class=\"form-check\">
                                            {{ form_row(registrationForm.agreeTerms) }}
                                            <label class=\"form-check-label\" for=\"termsCheck\">
                                                {# I've read the <a href=\"page_terms.html\">Terms and Conditions</a> #}
                                            </label>
                                        </div>
                                    </div>
                                    <div class=\"col-lg-4 text-lg-end\">
                                        <button class=\"btn btn-primary\" type=\"submit\">Register</button>
                                    </div>
                                </div>
                            
                            {{ form_end(registrationForm) }}
                        </div>
                    </div>
                </div>
            </article>
            <!-- /Article -->
        </div>
    </div>
<!-- /container -->
    {% include \"footer.html.twig\" %}    
{% endblock %}
", "registration/register.html.twig", "D:\\automobile\\templates\\registration\\register.html.twig");
    }
}
