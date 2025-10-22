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
class __TwigTemplate_ff9c691033bb53e2463168f2a201f1404791ba3ad9fa64d02b87d07d98b671f9 extends Template
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
\t<header id=\"head\" class=\"secondary\">
    ";
        // line 19
        yield from $this->loadTemplate("navbar.html.twig", "contact/index.html.twig", 19)->unwrap()->yield($context);
        yield " 
    </header>

    <!-- container -->
    <div class=\"container\">

        <div class=\"row\">
            
            <!-- Article main content -->
            <article class=\"col-lg-9 maincontent\">
                <header class=\"page-header mb-4\">
                    <h1 class=\"page-title\">Contactez-nous</h1>
                </header>
                
                <p>
                    Nous serions ravis de vous entendre. Envie de collaborer avec nous ? Remplissez le formulaire ci-dessous avec quelques informations sur votre projet et je vous répondrai dans les plus brefs délais. 
                    Veuillez prévoir quelques jours pour une réponse.
                </p>
                <br>
                <form>
                    <div class=\"row\">
                        <div class=\"col-md-4 mb-3\">
                            <input class=\"form-control\" type=\"text\" placeholder=\"Name\">
                        </div>
                        <div class=\"col-md-4 mb-3\">
                            <input class=\"form-control\" type=\"email\" placeholder=\"Email\">
                        </div>
                        <div class=\"col-md-4 mb-3\">
                            <input class=\"form-control\" type=\"tel\" placeholder=\"Phone\">
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-12 mb-3\">
                            <textarea placeholder=\"Type your message here...\" class=\"form-control\" rows=\"9\"></textarea>
                        </div>
                    </div>
                    <div class=\"row align-items-center\">
                        <div class=\"col-md-6 mb-3\">
                            <div class=\"form-check\">
                                <input class=\"form-check-input\" type=\"checkbox\" id=\"newsletterCheck\">
                                <label class=\"form-check-label\" for=\"newsletterCheck\">
                                    Sign up for newsletter
                                </label>
                            </div>
                        </div>
                        <div class=\"col-md-6 text-md-end\">
                            <input class=\"btn btn-primary\" type=\"submit\" value=\"Send message\">
                        </div>
                    </div>
                </form>
            </article>
            <!-- /Article -->
            
            <!-- Sidebar -->
            <aside class=\"col-lg-3 sidebar sidebar-right\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <h4>Address</h4>
                        <address>
                            ";
        // line 78
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " Holcombe Yaounde, Houston, TX 77030, Cameroun
                        </address>
                        <h4>Phone:</h4>
                        <address>
                            (+237) 677 034 xxx
                        </address>
                    </div>
                </div>
            </aside>
            <!-- /Sidebar -->
        </div>
    </div>
    <!-- /container -->
\t";
        // line 91
        yield from $this->loadTemplate("footer.html.twig", "contact/index.html.twig", 91)->unwrap()->yield($context);
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
        return array (  178 => 91,  162 => 78,  100 => 19,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
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
\t<header id=\"head\" class=\"secondary\">
    {% include \"navbar.html.twig\" %} 
    </header>

    <!-- container -->
    <div class=\"container\">

        <div class=\"row\">
            
            <!-- Article main content -->
            <article class=\"col-lg-9 maincontent\">
                <header class=\"page-header mb-4\">
                    <h1 class=\"page-title\">Contactez-nous</h1>
                </header>
                
                <p>
                    Nous serions ravis de vous entendre. Envie de collaborer avec nous ? Remplissez le formulaire ci-dessous avec quelques informations sur votre projet et je vous répondrai dans les plus brefs délais. 
                    Veuillez prévoir quelques jours pour une réponse.
                </p>
                <br>
                <form>
                    <div class=\"row\">
                        <div class=\"col-md-4 mb-3\">
                            <input class=\"form-control\" type=\"text\" placeholder=\"Name\">
                        </div>
                        <div class=\"col-md-4 mb-3\">
                            <input class=\"form-control\" type=\"email\" placeholder=\"Email\">
                        </div>
                        <div class=\"col-md-4 mb-3\">
                            <input class=\"form-control\" type=\"tel\" placeholder=\"Phone\">
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-12 mb-3\">
                            <textarea placeholder=\"Type your message here...\" class=\"form-control\" rows=\"9\"></textarea>
                        </div>
                    </div>
                    <div class=\"row align-items-center\">
                        <div class=\"col-md-6 mb-3\">
                            <div class=\"form-check\">
                                <input class=\"form-check-input\" type=\"checkbox\" id=\"newsletterCheck\">
                                <label class=\"form-check-label\" for=\"newsletterCheck\">
                                    Sign up for newsletter
                                </label>
                            </div>
                        </div>
                        <div class=\"col-md-6 text-md-end\">
                            <input class=\"btn btn-primary\" type=\"submit\" value=\"Send message\">
                        </div>
                    </div>
                </form>
            </article>
            <!-- /Article -->
            
            <!-- Sidebar -->
            <aside class=\"col-lg-3 sidebar sidebar-right\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <h4>Address</h4>
                        <address>
                            {{ \"now\" | date(\"Y\")}} Holcombe Yaounde, Houston, TX 77030, Cameroun
                        </address>
                        <h4>Phone:</h4>
                        <address>
                            (+237) 677 034 xxx
                        </address>
                    </div>
                </div>
            </aside>
            <!-- /Sidebar -->
        </div>
    </div>
    <!-- /container -->
\t{% include \"footer.html.twig\" %}\t
\t\t

</body>
</html>
{% endblock %}
", "contact/index.html.twig", "D:\\automobile\\templates\\contact\\index.html.twig");
    }
}
