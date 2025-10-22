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

/* about/index.html.twig */
class __TwigTemplate_fa8479f392a3d14c9144a9e89815d6431e65e3100952f4f8a7d17a473337c232 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "about/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "about/index.html.twig", 1);
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

        yield "Hello AboutController!";
        
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
\t<title>About - Progressus Bootstrap template</title>

\t<link rel=\"shortcut icon\" href=\"assets/images/gt_favicon.png\">
\t
\t<link rel=\"stylesheet\" media=\"screen\" href=\"http://fonts.googleapis.com/css?family=Open+Sans:300,400,700\">
\t<link rel=\"stylesheet\" href=\"assets/css/bootstrap.min.css\">
\t<link rel=\"stylesheet\" href=\"assets/css/font-awesome.min.css\">

\t<!-- Custom styles for our template -->
\t<link rel=\"stylesheet\" href=\"assets/css/bootstrap-theme.css\" media=\"screen\" >
\t<link rel=\"stylesheet\" href=\"assets/css/main.css\">

\t<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
\t<!--[if lt IE 9]>
\t<script src=\"assets/js/html5shiv.js\"></script>
\t<script src=\"assets/js/respond.min.js\"></script>
\t<![endif]-->
</head>

<body>
\t<!-- Fixed navbar -->
\t";
        // line 35
        yield from $this->loadTemplate("navbar.html.twig", "about/index.html.twig", 35)->unwrap()->yield($context);
        // line 36
        yield "\t<!-- /.navbar -->

\t<header id=\"head\" class=\"secondary\"></header>

\t<!-- container -->
\t<div class=\"container\">

\t\t<div class=\"row\">
\t\t\t
\t\t\t<!-- Article main content -->
\t\t\t<article class=\"col-sm-8 maincontent\">
\t\t\t\t<header class=\"page-header\">
\t\t\t\t\t<h1 class=\"page-title\">About us</h1>
\t\t\t\t</header>
\t\t\t\t<h3>Lorem ipsum</h3>
\t\t\t\t<p><img src=\"assets/images/mac.jpg\" alt=\"\" class=\"img-rounded pull-right\" width=\"300\" > Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, consequuntur eius repellendus eos aliquid molestiae ea laborum ex quibusdam laudantium voluptates placeat consectetur quam aliquam beatae soluta accusantium iusto nihil nesciunt unde veniam magnam repudiandae sapiente.</p>
\t\t\t\t<p>Quos, aliquam nam velit impedit minus tenetur beatae voluptas facere sint pariatur! Voluptatibus, quisquam, error, est assumenda corporis inventore illo nesciunt iure aut dolor possimus repellat minima veniam alias eius!</p>
\t\t\t\t<h3>Necessitatibus</h3>
\t\t\t\t<p>Velit, odit, eius, libero unde impedit quaerat dolorem assumenda alias consequuntur optio quae maiores ratione tempore sit aliquid architecto eligendi pariatur ab soluta doloremque dicta aspernatur labore quibusdam dolore corrupti quod inventore. Maiores, repellat, consequuntur eius repellendus eos aliquid molestiae ea laborum ex quibusdam laudantium voluptates placeat consectetur quam aliquam!</p>
\t\t\t\t<h3>Fugit, laboriosam</h3>
\t\t\t\t<p>Eum, quasi, est, vitae, ipsam nobis consectetur ea aspernatur ad eos voluptatibus fugiat nisi perferendis impedit. Quam, nulla, excepturi, voluptate minus illo tenetur sint ab in culpa cumque impedit quibusdam. Saepe, molestias quia voluptatem natus velit fugiat omnis rem eos sapiente quasi quaerat aspernatur quisquam deleniti accusantium laboriosam odio id?</p>
\t\t\t\t<h3>Doloribus, illo ipsum</h3>
\t\t\t\t<p>Velit, odit, eius, libero unde impedit quaerat dolorem assumenda alias consequuntur optio quae maiores ratione tempore sit aliquid architecto eligendi pariatur ab soluta doloremque dicta aspernatur labore quibusdam dolore corrupti quod inventore. Maiores, repellat, consequuntur eius repellendus eos aliquid molestiae ea laborum ex quibusdam laudantium voluptates placeat consectetur quam aliquam!</p>
\t\t\t\t<p>Eum, quasi, est, vitae, ipsam nobis consectetur ea aspernatur ad eos voluptatibus fugiat nisi perferendis impedit. Quam, nulla, excepturi, voluptate minus illo tenetur sint ab in culpa cumque impedit quibusdam. Saepe, molestias quia voluptatem natus velit fugiat omnis rem eos sapiente quasi quaerat aspernatur quisquam deleniti accusantium laboriosam odio id?</p>
\t\t\t\t
\t\t\t</article>
\t\t\t<!-- /Article -->
\t\t\t
\t\t\t<!-- Sidebar -->
\t\t\t<aside class=\"col-sm-4 sidebar sidebar-right\">

\t\t\t\t<div class=\"widget\">
\t\t\t\t\t<h4>Vacancies</h4>
\t\t\t\t\t<ul class=\"list-unstyled list-spaces\">
\t\t\t\t\t\t<li><a href=\"\">Lorem ipsum dolor</a><br><span class=\"small text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, laborum.</span></li>
\t\t\t\t\t\t<li><a href=\"\">Totam, libero, quis</a><br><span class=\"small text-muted\">Suscipit veniam debitis sed ipsam quia magnam eveniet perferendis nisi.</span></li>
\t\t\t\t\t\t<li><a href=\"\">Enim, sequi dignissimos</a><br><span class=\"small text-muted\">Reprehenderit illum quod unde quo vero ab inventore alias veritatis.</span></li>
\t\t\t\t\t\t<li><a href=\"\">Suscipit, consequatur, aut</a><br><span class=\"small text-muted\">Sed, mollitia earum debitis est itaque esse reiciendis amet cupiditate.</span></li>
\t\t\t\t\t\t<li><a href=\"\">Nam, illo, veritatis</a><br><span class=\"small text-muted\">Delectus, sapiente illo provident quo aliquam nihil beatae dignissimos itaque.</span></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>

\t\t\t</aside>
\t\t\t<!-- /Sidebar -->

\t\t</div>
\t</div>\t<!-- /container -->
\t
    ";
        // line 84
        yield from $this->loadTemplate("footer.html.twig", "about/index.html.twig", 84)->unwrap()->yield($context);
        // line 85
        yield "\t<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
\t
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
        return "about/index.html.twig";
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
        return array (  170 => 85,  168 => 84,  118 => 36,  116 => 35,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello AboutController!{% endblock %}

{% block body %}
<!DOCTYPE html>
<html lang=\"en\">
<head>
\t<meta charset=\"utf-8\">
\t<meta name=\"viewport\"    content=\"width=device-width, initial-scale=1.0\">
\t<meta name=\"description\" content=\"\">
\t<meta name=\"author\"      content=\"Sergey Pozhilov (GetTemplate.com)\">
\t
\t<title>About - Progressus Bootstrap template</title>

\t<link rel=\"shortcut icon\" href=\"assets/images/gt_favicon.png\">
\t
\t<link rel=\"stylesheet\" media=\"screen\" href=\"http://fonts.googleapis.com/css?family=Open+Sans:300,400,700\">
\t<link rel=\"stylesheet\" href=\"assets/css/bootstrap.min.css\">
\t<link rel=\"stylesheet\" href=\"assets/css/font-awesome.min.css\">

\t<!-- Custom styles for our template -->
\t<link rel=\"stylesheet\" href=\"assets/css/bootstrap-theme.css\" media=\"screen\" >
\t<link rel=\"stylesheet\" href=\"assets/css/main.css\">

\t<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
\t<!--[if lt IE 9]>
\t<script src=\"assets/js/html5shiv.js\"></script>
\t<script src=\"assets/js/respond.min.js\"></script>
\t<![endif]-->
</head>

<body>
\t<!-- Fixed navbar -->
\t{% include \"navbar.html.twig\" %}
\t<!-- /.navbar -->

\t<header id=\"head\" class=\"secondary\"></header>

\t<!-- container -->
\t<div class=\"container\">

\t\t<div class=\"row\">
\t\t\t
\t\t\t<!-- Article main content -->
\t\t\t<article class=\"col-sm-8 maincontent\">
\t\t\t\t<header class=\"page-header\">
\t\t\t\t\t<h1 class=\"page-title\">About us</h1>
\t\t\t\t</header>
\t\t\t\t<h3>Lorem ipsum</h3>
\t\t\t\t<p><img src=\"assets/images/mac.jpg\" alt=\"\" class=\"img-rounded pull-right\" width=\"300\" > Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, consequuntur eius repellendus eos aliquid molestiae ea laborum ex quibusdam laudantium voluptates placeat consectetur quam aliquam beatae soluta accusantium iusto nihil nesciunt unde veniam magnam repudiandae sapiente.</p>
\t\t\t\t<p>Quos, aliquam nam velit impedit minus tenetur beatae voluptas facere sint pariatur! Voluptatibus, quisquam, error, est assumenda corporis inventore illo nesciunt iure aut dolor possimus repellat minima veniam alias eius!</p>
\t\t\t\t<h3>Necessitatibus</h3>
\t\t\t\t<p>Velit, odit, eius, libero unde impedit quaerat dolorem assumenda alias consequuntur optio quae maiores ratione tempore sit aliquid architecto eligendi pariatur ab soluta doloremque dicta aspernatur labore quibusdam dolore corrupti quod inventore. Maiores, repellat, consequuntur eius repellendus eos aliquid molestiae ea laborum ex quibusdam laudantium voluptates placeat consectetur quam aliquam!</p>
\t\t\t\t<h3>Fugit, laboriosam</h3>
\t\t\t\t<p>Eum, quasi, est, vitae, ipsam nobis consectetur ea aspernatur ad eos voluptatibus fugiat nisi perferendis impedit. Quam, nulla, excepturi, voluptate minus illo tenetur sint ab in culpa cumque impedit quibusdam. Saepe, molestias quia voluptatem natus velit fugiat omnis rem eos sapiente quasi quaerat aspernatur quisquam deleniti accusantium laboriosam odio id?</p>
\t\t\t\t<h3>Doloribus, illo ipsum</h3>
\t\t\t\t<p>Velit, odit, eius, libero unde impedit quaerat dolorem assumenda alias consequuntur optio quae maiores ratione tempore sit aliquid architecto eligendi pariatur ab soluta doloremque dicta aspernatur labore quibusdam dolore corrupti quod inventore. Maiores, repellat, consequuntur eius repellendus eos aliquid molestiae ea laborum ex quibusdam laudantium voluptates placeat consectetur quam aliquam!</p>
\t\t\t\t<p>Eum, quasi, est, vitae, ipsam nobis consectetur ea aspernatur ad eos voluptatibus fugiat nisi perferendis impedit. Quam, nulla, excepturi, voluptate minus illo tenetur sint ab in culpa cumque impedit quibusdam. Saepe, molestias quia voluptatem natus velit fugiat omnis rem eos sapiente quasi quaerat aspernatur quisquam deleniti accusantium laboriosam odio id?</p>
\t\t\t\t
\t\t\t</article>
\t\t\t<!-- /Article -->
\t\t\t
\t\t\t<!-- Sidebar -->
\t\t\t<aside class=\"col-sm-4 sidebar sidebar-right\">

\t\t\t\t<div class=\"widget\">
\t\t\t\t\t<h4>Vacancies</h4>
\t\t\t\t\t<ul class=\"list-unstyled list-spaces\">
\t\t\t\t\t\t<li><a href=\"\">Lorem ipsum dolor</a><br><span class=\"small text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, laborum.</span></li>
\t\t\t\t\t\t<li><a href=\"\">Totam, libero, quis</a><br><span class=\"small text-muted\">Suscipit veniam debitis sed ipsam quia magnam eveniet perferendis nisi.</span></li>
\t\t\t\t\t\t<li><a href=\"\">Enim, sequi dignissimos</a><br><span class=\"small text-muted\">Reprehenderit illum quod unde quo vero ab inventore alias veritatis.</span></li>
\t\t\t\t\t\t<li><a href=\"\">Suscipit, consequatur, aut</a><br><span class=\"small text-muted\">Sed, mollitia earum debitis est itaque esse reiciendis amet cupiditate.</span></li>
\t\t\t\t\t\t<li><a href=\"\">Nam, illo, veritatis</a><br><span class=\"small text-muted\">Delectus, sapiente illo provident quo aliquam nihil beatae dignissimos itaque.</span></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>

\t\t\t</aside>
\t\t\t<!-- /Sidebar -->

\t\t</div>
\t</div>\t<!-- /container -->
\t
    {% include \"footer.html.twig\" %}
\t<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
\t
</body>
</html>
{% endblock %}
", "about/index.html.twig", "D:\\automobile\\templates\\about\\index.html.twig");
    }
}
