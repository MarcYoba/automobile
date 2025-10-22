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

/* contact/index.html.twig */
class __TwigTemplate_6b765a999aaef63ca94f8b593fffb370787c17d8b5dc0b77a9cfe160939b08ed extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "contact/index.html.twig", 1);
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

        yield "Hello ContactController!";
        
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
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
\t<meta charset=\"utf-8\">
\t<meta name=\"viewport\"    content=\"width=device-width, initial-scale=1.0\">
\t<meta name=\"description\" content=\"\">
\t<meta name=\"author\"      content=\"Sergey Pozhilov (GetTemplate.com)\">
\t
\t<title>Sign in </title>
</head>

<body>
\t<!-- Fixed navbar -->
\t";
        // line 19
        yield from $this->loadTemplate("navbar.html.twig", "contact/index.html.twig", 19)->unwrap()->yield($context);
        yield " 
\t<!-- /.navbar -->

\t<!-- container -->
\t<div class=\"container\">

\t\t<div class=\"row\">
\t\t\t
\t\t\t<!-- Article main content -->
\t\t\t<article class=\"col-xs-12 maincontent\">
\t\t\t\t<header class=\"page-header\">
\t\t\t\t\t<h1 class=\"page-title\">Sign in</h1>
\t\t\t\t</header>
\t\t\t\t
\t\t\t\t<div class=\"col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2\">
\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t<h3 class=\"thin text-center\">Sign in to your account</h3>
\t\t\t\t\t\t\t<p class=\"text-center text-muted\">Lorem ipsum dolor sit amet, <a href=\"signup.html\">Register</a> adipisicing elit. Quo nulla quibusdam cum doloremque incidunt nemo sunt a tenetur omnis odio. </p>
\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<form>
\t\t\t\t\t\t\t\t<div class=\"top-margin\">
\t\t\t\t\t\t\t\t\t<label>Username/Email <span class=\"text-danger\">*</span></label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"top-margin\">
\t\t\t\t\t\t\t\t\t<label>Password <span class=\"text-danger\">*</span></label>
\t\t\t\t\t\t\t\t\t<input type=\"password\" class=\"form-control\">
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<hr>

\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t\t\t\t\t\t<b><a href=\"\">Forgot password?</a></b>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-lg-4 text-right\">
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-action\" type=\"submit\">Sign in</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t\t
\t\t\t</article>
\t\t\t<!-- /Article -->

\t\t</div>
\t</div>\t<!-- /container -->
\t";
        // line 71
        yield from $this->loadTemplate("footer.html.twig", "contact/index.html.twig", 71)->unwrap()->yield($context);
        yield "\t
\t\t

</body>
</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "contact/index.html.twig";
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
        return array (  155 => 71,  100 => 19,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello ContactController!{% endblock %}

{% block body %}
<!DOCTYPE html>
<html lang=\"en\">
<head>
\t<meta charset=\"utf-8\">
\t<meta name=\"viewport\"    content=\"width=device-width, initial-scale=1.0\">
\t<meta name=\"description\" content=\"\">
\t<meta name=\"author\"      content=\"Sergey Pozhilov (GetTemplate.com)\">
\t
\t<title>Sign in </title>
</head>

<body>
\t<!-- Fixed navbar -->
\t{% include \"navbar.html.twig\" %} 
\t<!-- /.navbar -->

\t<!-- container -->
\t<div class=\"container\">

\t\t<div class=\"row\">
\t\t\t
\t\t\t<!-- Article main content -->
\t\t\t<article class=\"col-xs-12 maincontent\">
\t\t\t\t<header class=\"page-header\">
\t\t\t\t\t<h1 class=\"page-title\">Sign in</h1>
\t\t\t\t</header>
\t\t\t\t
\t\t\t\t<div class=\"col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2\">
\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t<h3 class=\"thin text-center\">Sign in to your account</h3>
\t\t\t\t\t\t\t<p class=\"text-center text-muted\">Lorem ipsum dolor sit amet, <a href=\"signup.html\">Register</a> adipisicing elit. Quo nulla quibusdam cum doloremque incidunt nemo sunt a tenetur omnis odio. </p>
\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<form>
\t\t\t\t\t\t\t\t<div class=\"top-margin\">
\t\t\t\t\t\t\t\t\t<label>Username/Email <span class=\"text-danger\">*</span></label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"top-margin\">
\t\t\t\t\t\t\t\t\t<label>Password <span class=\"text-danger\">*</span></label>
\t\t\t\t\t\t\t\t\t<input type=\"password\" class=\"form-control\">
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<hr>

\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t\t\t\t\t\t<b><a href=\"\">Forgot password?</a></b>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-lg-4 text-right\">
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-action\" type=\"submit\">Sign in</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t\t
\t\t\t</article>
\t\t\t<!-- /Article -->

\t\t</div>
\t</div>\t<!-- /container -->
\t{% include \"footer.html.twig\" %}\t
\t\t

</body>
</html>
{% endblock %}
", "contact/index.html.twig", "D:\\automobile\\templates\\contact\\index.html.twig");
    }
}
