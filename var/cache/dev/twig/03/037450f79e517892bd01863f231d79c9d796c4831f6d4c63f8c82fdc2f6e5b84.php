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

/* home/index.html.twig */
class __TwigTemplate_c7ce13958f4986ac78d11d0898cd7725ee82ac7d51217d2c89ae123b97432eda extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
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

        yield "Hello HomeController!";
        
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
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t<meta name=\"description\" content=\"\">
\t<meta name=\"author\" content=\"Sergey Pozhilov (GetTemplate.com)\">
\t
\t<title>Home</title>

\t<link rel=\"shortcut icon\" href=\"assets/images/gt_favicon.png\">

\t<!-- Bootstrap 5 CSS -->
\t";
        // line 20
        yield "\t<!-- Font Awesome for icons -->
\t";
        // line 22
        yield "
\t
</head>

<body class=\"home\">
\t<!-- Fixed navbar -->
\t";
        // line 28
        yield from $this->loadTemplate("navbar.html.twig", "home/index.html.twig", 28)->unwrap()->yield($context);
        // line 29
        yield "\t<!-- /.navbar -->

\t<!-- Header -->
\t<header id=\"head\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t<div class=\"col-lg-8 text-center\">
\t\t\t\t\t<h1 class=\"lead\">AWESOME, CUSTOMIZABLE, FREE</h1>
\t\t\t\t\t<p class=\"tagline\">PROGRESSUS: free business bootstrap template by <a href=\"http://www.gettemplate.com/?utm_source=progressus&amp;utm_medium=template&amp;utm_campaign=progressus\">GetTemplate</a></p>
\t\t\t\t\t<p>
\t\t\t\t\t\t<a class=\"btn btn-secondary btn-lg\" role=\"button\">MORE INFO</a> 
\t\t\t\t\t\t<a class=\"btn btn-action btn-lg\" role=\"button\">DOWNLOAD NOW</a>
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</header>
\t<!-- /Header -->

\t<!-- Intro -->
\t<div class=\"container text-center py-5\">
\t\t<h2 class=\"thin\">The best place to tell people why they are here</h2>
\t\t<p class=\"text-muted\">
\t\t\tThe difference between involvement and commitment is like an eggs-and-ham breakfast:<br> 
\t\t\tthe chicken was involved; the pig was committed.
\t\t</p>
\t</div>
\t<!-- /Intro-->
\t\t
\t<!-- Highlights -->
\t<div class=\"bg-light py-5 top-space\">
\t\t<div class=\"container\">
\t\t\t<h3 class=\"text-center thin mb-5\">Reasons to use this template</h3>
\t\t\t
\t\t\t<div class=\"row g-4\">
\t\t\t\t<div class=\"col-md-3 col-sm-6 highlight\">
\t\t\t\t\t<div class=\"h-caption\">
\t\t\t\t\t\t<h4><i class=\"fas fa-cogs fa-2x mb-3\"></i>Bootstrap-powered</h4>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"h-body text-center\">
\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque aliquid adipisci aspernatur. Soluta quisquam dignissimos earum quasi voluptate. Amet, dignissimos, tenetur vitae dolor quam iusto assumenda hic reprehenderit?</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-3 col-sm-6 highlight\">
\t\t\t\t\t<div class=\"h-caption\">
\t\t\t\t\t\t<h4><i class=\"fas fa-bolt fa-2x mb-3\"></i>Fat-free</h4>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"h-body text-center\">
\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, commodi, sequi quis ad fugit omnis cumque a libero error nesciunt molestiae repellat quos perferendis numquam quibusdam rerum repellendus laboriosam reprehenderit! </p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-3 col-sm-6 highlight\">
\t\t\t\t\t<div class=\"h-caption\">
\t\t\t\t\t\t<h4><i class=\"fas fa-heart fa-2x mb-3\"></i>Creative Commons</h4>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"h-body text-center\">
\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, vitae, perferendis, perspiciatis nobis voluptate quod illum soluta minima ipsam ratione quia numquam eveniet eum reprehenderit dolorem dicta nesciunt corporis?</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-3 col-sm-6 highlight\">
\t\t\t\t\t<div class=\"h-caption\">
\t\t\t\t\t\t<h4><i class=\"fas fa-smile fa-2x mb-3\"></i>Author's support</h4>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"h-body text-center\">
\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, excepturi, maiores, dolorem quasi reprehenderit illo accusamus nulla minima repudiandae quas ducimus reiciendis odio sequi atque temporibus facere corporis eos expedita? </p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div> <!-- /row  -->
\t\t</div>
\t</div>
\t<!-- /Highlights -->

\t<!-- container -->
\t<div class=\"container py-5\">

\t\t<h2 class=\"text-center top-space\">Frequently Asked Questions</h2>
\t\t<br>

\t\t<div class=\"row g-4\">
\t\t\t<div class=\"col-sm-6\">
\t\t\t\t<h3>Which code editor would you recommend?</h3>
\t\t\t\t<p>I'd highly recommend you <a href=\"http://www.sublimetext.com/\">Sublime Text</a> - a free to try text editor which I'm using daily. Awesome tool!</p>
\t\t\t</div>
\t\t\t<div class=\"col-sm-6\">
\t\t\t\t<h3>Nice header. Where do I find more images like that one?</h3>
\t\t\t\t<p>
\t\t\t\t\tWell, there are thousands of stock art galleries, but personally, 
\t\t\t\t\tI prefer to use photos from these sites: <a href=\"http://unsplash.com\">Unsplash.com</a> 
\t\t\t\t\tand <a href=\"http://www.flickr.com/creativecommons/by-2.0/tags/\">Flickr - Creative Commons</a></p>
\t\t\t</div>
\t\t</div> <!-- /row -->

\t\t<div class=\"row g-4 mt-0\">
\t\t\t<div class=\"col-sm-6\">
\t\t\t\t<h3>Can I use it to build a site for my client?</h3>
\t\t\t\t<p>
\t\t\t\t\tYes, you can. You may use this template for any purpose, just don't forget about the <a href=\"http://creativecommons.org/licenses/by/3.0/\">license</a>, 
\t\t\t\t\twhich says: \"You must give appropriate credit\", i.e. you must provide the name of the creator and a link to the original template in your work. 
\t\t\t\t</p>
\t\t\t</div>
\t\t\t<div class=\"col-sm-6\">
\t\t\t\t<h3>Can you customize this template for me?</h3>
\t\t\t\t<p>Yes, I can. Please drop me a line to sergey-at-pozhilov.com and describe your needs in details. Please note, my services are not cheap.</p>
\t\t\t</div>
\t\t</div> <!-- /row -->

\t\t<div class=\"bg-light p-5 rounded top-space mt-5\">
\t\t\t<h4>Dicta, nostrum nemo soluta sapiente sit dolor quae voluptas quidem doloribus recusandae facere magni ullam suscipit sunt atque rerum eaque iusto facilis esse nam veniam incidunt officia perspiciatis at voluptatibus. Libero, aliquid illum possimus numquam fuga.</h4>
     \t\t<p class=\"text-end mt-4\"><a class=\"btn btn-primary btn-lg\">Learn more »</a></p>
  \t\t</div>

\t</div>\t<!-- /container -->
\t
\t<!-- Social links -->
\t<section id=\"social\">
\t\t<div class=\"container\">
\t\t\t<div class=\"d-flex justify-content-center\">
\t\t\t\t<!-- Social sharing buttons - you can replace these with actual Bootstrap buttons or other sharing solutions -->
\t\t\t\t<button class=\"btn btn-outline-primary me-2\"><i class=\"fab fa-facebook-f me-1\"></i> Share</button>
\t\t\t\t<button class=\"btn btn-outline-info me-2\"><i class=\"fab fa-twitter me-1\"></i> Tweet</button>
\t\t\t\t<button class=\"btn btn-outline-primary me-2\"><i class=\"fab fa-linkedin-in me-1\"></i> Share</button>
\t\t\t\t<button class=\"btn btn-outline-danger\"><i class=\"fab fa-google-plus-g me-1\"></i> +1</button>
\t\t\t</div>
\t\t</div>
\t</section>
\t<!-- /social links -->\t
    ";
        // line 155
        yield from $this->loadTemplate("footer.html.twig", "home/index.html.twig", 155)->unwrap()->yield($context);
        // line 156
        yield "\t<!-- Bootstrap 5 JavaScript -->
\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js\"></script>
\t<!-- Your custom JavaScript -->
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
        return "home/index.html.twig";
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
        return array (  243 => 156,  241 => 155,  113 => 29,  111 => 28,  103 => 22,  100 => 20,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello HomeController!{% endblock %}

{% block body %}
<!DOCTYPE html>
<html lang=\"en\">
<head>
\t<meta charset=\"utf-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t<meta name=\"description\" content=\"\">
\t<meta name=\"author\" content=\"Sergey Pozhilov (GetTemplate.com)\">
\t
\t<title>Home</title>

\t<link rel=\"shortcut icon\" href=\"assets/images/gt_favicon.png\">

\t<!-- Bootstrap 5 CSS -->
\t{# <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css\" rel=\"stylesheet\"> #}
\t<!-- Font Awesome for icons -->
\t{# <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css\"> #}

\t
</head>

<body class=\"home\">
\t<!-- Fixed navbar -->
\t{% include \"navbar.html.twig\" %}
\t<!-- /.navbar -->

\t<!-- Header -->
\t<header id=\"head\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t<div class=\"col-lg-8 text-center\">
\t\t\t\t\t<h1 class=\"lead\">AWESOME, CUSTOMIZABLE, FREE</h1>
\t\t\t\t\t<p class=\"tagline\">PROGRESSUS: free business bootstrap template by <a href=\"http://www.gettemplate.com/?utm_source=progressus&amp;utm_medium=template&amp;utm_campaign=progressus\">GetTemplate</a></p>
\t\t\t\t\t<p>
\t\t\t\t\t\t<a class=\"btn btn-secondary btn-lg\" role=\"button\">MORE INFO</a> 
\t\t\t\t\t\t<a class=\"btn btn-action btn-lg\" role=\"button\">DOWNLOAD NOW</a>
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</header>
\t<!-- /Header -->

\t<!-- Intro -->
\t<div class=\"container text-center py-5\">
\t\t<h2 class=\"thin\">The best place to tell people why they are here</h2>
\t\t<p class=\"text-muted\">
\t\t\tThe difference between involvement and commitment is like an eggs-and-ham breakfast:<br> 
\t\t\tthe chicken was involved; the pig was committed.
\t\t</p>
\t</div>
\t<!-- /Intro-->
\t\t
\t<!-- Highlights -->
\t<div class=\"bg-light py-5 top-space\">
\t\t<div class=\"container\">
\t\t\t<h3 class=\"text-center thin mb-5\">Reasons to use this template</h3>
\t\t\t
\t\t\t<div class=\"row g-4\">
\t\t\t\t<div class=\"col-md-3 col-sm-6 highlight\">
\t\t\t\t\t<div class=\"h-caption\">
\t\t\t\t\t\t<h4><i class=\"fas fa-cogs fa-2x mb-3\"></i>Bootstrap-powered</h4>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"h-body text-center\">
\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque aliquid adipisci aspernatur. Soluta quisquam dignissimos earum quasi voluptate. Amet, dignissimos, tenetur vitae dolor quam iusto assumenda hic reprehenderit?</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-3 col-sm-6 highlight\">
\t\t\t\t\t<div class=\"h-caption\">
\t\t\t\t\t\t<h4><i class=\"fas fa-bolt fa-2x mb-3\"></i>Fat-free</h4>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"h-body text-center\">
\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, commodi, sequi quis ad fugit omnis cumque a libero error nesciunt molestiae repellat quos perferendis numquam quibusdam rerum repellendus laboriosam reprehenderit! </p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-3 col-sm-6 highlight\">
\t\t\t\t\t<div class=\"h-caption\">
\t\t\t\t\t\t<h4><i class=\"fas fa-heart fa-2x mb-3\"></i>Creative Commons</h4>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"h-body text-center\">
\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, vitae, perferendis, perspiciatis nobis voluptate quod illum soluta minima ipsam ratione quia numquam eveniet eum reprehenderit dolorem dicta nesciunt corporis?</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-3 col-sm-6 highlight\">
\t\t\t\t\t<div class=\"h-caption\">
\t\t\t\t\t\t<h4><i class=\"fas fa-smile fa-2x mb-3\"></i>Author's support</h4>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"h-body text-center\">
\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, excepturi, maiores, dolorem quasi reprehenderit illo accusamus nulla minima repudiandae quas ducimus reiciendis odio sequi atque temporibus facere corporis eos expedita? </p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div> <!-- /row  -->
\t\t</div>
\t</div>
\t<!-- /Highlights -->

\t<!-- container -->
\t<div class=\"container py-5\">

\t\t<h2 class=\"text-center top-space\">Frequently Asked Questions</h2>
\t\t<br>

\t\t<div class=\"row g-4\">
\t\t\t<div class=\"col-sm-6\">
\t\t\t\t<h3>Which code editor would you recommend?</h3>
\t\t\t\t<p>I'd highly recommend you <a href=\"http://www.sublimetext.com/\">Sublime Text</a> - a free to try text editor which I'm using daily. Awesome tool!</p>
\t\t\t</div>
\t\t\t<div class=\"col-sm-6\">
\t\t\t\t<h3>Nice header. Where do I find more images like that one?</h3>
\t\t\t\t<p>
\t\t\t\t\tWell, there are thousands of stock art galleries, but personally, 
\t\t\t\t\tI prefer to use photos from these sites: <a href=\"http://unsplash.com\">Unsplash.com</a> 
\t\t\t\t\tand <a href=\"http://www.flickr.com/creativecommons/by-2.0/tags/\">Flickr - Creative Commons</a></p>
\t\t\t</div>
\t\t</div> <!-- /row -->

\t\t<div class=\"row g-4 mt-0\">
\t\t\t<div class=\"col-sm-6\">
\t\t\t\t<h3>Can I use it to build a site for my client?</h3>
\t\t\t\t<p>
\t\t\t\t\tYes, you can. You may use this template for any purpose, just don't forget about the <a href=\"http://creativecommons.org/licenses/by/3.0/\">license</a>, 
\t\t\t\t\twhich says: \"You must give appropriate credit\", i.e. you must provide the name of the creator and a link to the original template in your work. 
\t\t\t\t</p>
\t\t\t</div>
\t\t\t<div class=\"col-sm-6\">
\t\t\t\t<h3>Can you customize this template for me?</h3>
\t\t\t\t<p>Yes, I can. Please drop me a line to sergey-at-pozhilov.com and describe your needs in details. Please note, my services are not cheap.</p>
\t\t\t</div>
\t\t</div> <!-- /row -->

\t\t<div class=\"bg-light p-5 rounded top-space mt-5\">
\t\t\t<h4>Dicta, nostrum nemo soluta sapiente sit dolor quae voluptas quidem doloribus recusandae facere magni ullam suscipit sunt atque rerum eaque iusto facilis esse nam veniam incidunt officia perspiciatis at voluptatibus. Libero, aliquid illum possimus numquam fuga.</h4>
     \t\t<p class=\"text-end mt-4\"><a class=\"btn btn-primary btn-lg\">Learn more »</a></p>
  \t\t</div>

\t</div>\t<!-- /container -->
\t
\t<!-- Social links -->
\t<section id=\"social\">
\t\t<div class=\"container\">
\t\t\t<div class=\"d-flex justify-content-center\">
\t\t\t\t<!-- Social sharing buttons - you can replace these with actual Bootstrap buttons or other sharing solutions -->
\t\t\t\t<button class=\"btn btn-outline-primary me-2\"><i class=\"fab fa-facebook-f me-1\"></i> Share</button>
\t\t\t\t<button class=\"btn btn-outline-info me-2\"><i class=\"fab fa-twitter me-1\"></i> Tweet</button>
\t\t\t\t<button class=\"btn btn-outline-primary me-2\"><i class=\"fab fa-linkedin-in me-1\"></i> Share</button>
\t\t\t\t<button class=\"btn btn-outline-danger\"><i class=\"fab fa-google-plus-g me-1\"></i> +1</button>
\t\t\t</div>
\t\t</div>
\t</section>
\t<!-- /social links -->\t
    {% include \"footer.html.twig\" %}
\t<!-- Bootstrap 5 JavaScript -->
\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js\"></script>
\t<!-- Your custom JavaScript -->
</body>
</html>

{% endblock %}
", "home/index.html.twig", "D:\\automobile\\templates\\home\\index.html.twig");
    }
}
