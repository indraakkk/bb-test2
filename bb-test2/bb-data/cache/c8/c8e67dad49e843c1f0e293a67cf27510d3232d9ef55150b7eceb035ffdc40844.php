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

/* mod_dashboard_index.phtml */
class __TwigTemplate_765d1d59279f77445f9672f301292611d58b5e7798796e33b6e45979d163b26d extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'meta_title' => [$this, 'block_meta_title'],
            'content' => [$this, 'block_content'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "ajax", [], "any", false, false, false, 1)) ? ("layout_blank.phtml") : ("layout_default.phtml")), "mod_dashboard_index.phtml", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        $macros["mf"] = $this->macros["mf"] = $this->loadTemplate("macro_functions.phtml", "mod_dashboard_index.phtml", 4)->unwrap();
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo gettext("Client Area");
    }

    // line 6
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "<div class=\"dashboard\">
    
    ";
        // line 9
        $context["tickets"] = twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "support_ticket_get_list", [0 => ["status" => "on_hold"]], "method", false, false, false, 9);
        // line 10
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, ($context["tickets"] ?? null), "total", [], "any", false, false, false, 10) > 0)) {
            // line 11
            echo "        <div class=\"widget\">
            <div class=\"head\">
                <h2 class=\"dark-icon i-support\">";
            // line 13
            echo gettext("Tickets waiting your reply");
            echo "</h2>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>";
            // line 18
            echo gettext("Id");
            echo "</th>
                        <th>";
            // line 19
            echo gettext("Subject");
            echo "</th>
                        <th>";
            // line 20
            echo gettext("Help desk");
            echo "</th>
                        <th>";
            // line 21
            echo gettext("Status");
            echo "</th>
                        <th>";
            // line 22
            echo gettext("Submitted");
            echo "</th>
                    </tr>
                </thead>

                <tbody>
                    ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["tickets"] ?? null), "list", [], "any", false, false, false, 27));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["i"] => $context["ticket"]) {
                // line 28
                echo "
                    <tr class=\"";
                // line 29
                echo twig_escape_filter($this->env, twig_cycle([0 => "odd", 1 => "even"], $context["i"]), "html", null, true);
                echo "\">
                        <td>";
                // line 30
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticket"], "id", [], "any", false, false, false, 30), "html", null, true);
                echo "</td>
                        <td><a href=\"";
                // line 31
                echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("support/ticket");
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticket"], "id", [], "any", false, false, false, 31), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticket"], "subject", [], "any", false, false, false, 31), "html", null, true);
                echo "</a></td>
                        <td>";
                // line 32
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ticket"], "helpdesk", [], "any", false, false, false, 32), "name", [], "any", false, false, false, 32), "html", null, true);
                echo "</td>
                        <td>";
                // line 33
                echo twig_call_macro($macros["mf"], "macro_status_name", [twig_get_attribute($this->env, $this->source, $context["ticket"], "status", [], "any", false, false, false, 33)], 33, $context, $this->getSourceContext());
                echo "</td>
                        <td>";
                // line 34
                echo twig_escape_filter($this->env, $this->extensions['Box_TwigExtensions']->twig_bb_date(twig_get_attribute($this->env, $this->source, $context["ticket"], "created_at", [], "any", false, false, false, 34)), "html", null, true);
                echo "</td>
                    </tr>

                    ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 38
                echo "
                    <tr>
                        <td colspan=\"5\">";
                // line 40
                echo gettext("The list is empty");
                echo "</td>
                    </tr>

                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['ticket'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "
                </tbody>
            </table>
        </div>
    ";
        }
        // line 49
        echo "
    ";
        // line 50
        $context["profile"] = twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "client_get", [], "any", false, false, false, 50);
        // line 51
        echo "    <div class=\"grid_6 alpha\">
        <div class=\"widget\">
            <div class=\"head\">
                <h2 class=\"dark-icon i-profile\">";
        // line 54
        echo gettext("Profile");
        echo "</h2>
            </div>

            <table>
                <tbody>
                    <tr>
                        <td>";
        // line 60
        echo gettext("ID");
        echo "</td>
                        <td>#";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "id", [], "any", false, false, false, 61), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <td>";
        // line 64
        echo gettext("Email");
        echo "</td>
                        <td>";
        // line 65
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "email", [], "any", false, false, false, 65), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <td>";
        // line 68
        echo gettext("Balance");
        echo "</td>
                        <td>";
        // line 69
        echo twig_money($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "balance", [], "any", false, false, false, 69), twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "currency", [], "any", false, false, false, 69));
        echo "</td>
                    </tr>
                </tbody>

                <tfoot>
                    <tr>
                        <td colspan=\"2\">
                            <a class=\"bb-button\" href=\"";
        // line 76
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("client/me");
        echo "\">";
        echo gettext("Manage profile");
        echo "</a>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>

    <div class=\"grid_6 omega\">
        <div class=\"widget\">
            <div class=\"head\">
                <h2 class=\"dark-icon i-invoice\">";
        // line 87
        echo gettext("Invoices");
        echo "</h2>
            </div>
            <table>
                <tbody>
                    <tr>
                        <td>";
        // line 92
        echo gettext("Total");
        echo "</td>
                        <td>";
        // line 93
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "invoice_get_list", [], "method", false, false, false, 93), "total", [], "any", false, false, false, 93), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <td>";
        // line 96
        echo gettext("Paid");
        echo "</td>
                        <td>";
        // line 97
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "invoice_get_list", [0 => ["status" => "paid"]], "method", false, false, false, 97), "total", [], "any", false, false, false, 97), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <td>";
        // line 100
        echo gettext("Unpaid");
        echo "</td>
                        <td>";
        // line 101
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "invoice_get_list", [0 => ["status" => "unpaid"]], "method", false, false, false, 101), "total", [], "any", false, false, false, 101), "html", null, true);
        echo "</td>
                    </tr>
                </tbody>

                <tfoot>
                    <tr>
                        <td colspan=\"2\">
                            <a class=\"bb-button\" href=\"";
        // line 108
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("invoice");
        echo "\">";
        echo gettext("All Invoices");
        echo "</a>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>

    <div class=\"grid_6 alpha\">
        <div class=\"widget\">
            <div class=\"head\">
                <h2 class=\"dark-icon i-services\">";
        // line 119
        echo gettext("Services");
        echo "</h2>
            </div>
            <table>
                <tbody>
                    <tr>
                        <td>";
        // line 124
        echo gettext("Total");
        echo "</td>
                        <td>";
        // line 125
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "order_get_list", [0 => ["hide_addons" => 1]], "method", false, false, false, 125), "total", [], "any", false, false, false, 125), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <td>";
        // line 128
        echo gettext("Active");
        echo "</td>
                        <td>";
        // line 129
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "order_get_list", [0 => ["hide_addons" => 1, "status" => "active"]], "method", false, false, false, 129), "total", [], "any", false, false, false, 129), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <td>";
        // line 132
        echo gettext("Soon expires");
        echo "</td>
                        <td>";
        // line 133
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "order_get_list", [0 => ["expiring" => 1]], "method", false, false, false, 133), "total", [], "any", false, false, false, 133), "html", null, true);
        echo "</td>
                    </tr>
                </tbody>

                <tfoot>
                    <tr>
                        <td colspan=\"2\">
                            <a class=\"bb-button\" href=\"";
        // line 140
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("order/service");
        echo "\">";
        echo gettext("All services");
        echo "</a>
                            <a class=\"bb-button bb-button-submit\" href=\"";
        // line 141
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("order");
        echo "\">";
        echo gettext("New order");
        echo "</a>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>

    <div class=\"grid_6 omega\">
        <div class=\"widget\">
            <div class=\"head\">
                <h2 class=\"dark-icon i-support\">";
        // line 152
        echo gettext("Tickets");
        echo "</h2>
            </div>
            <table>
                <tbody>
                    <tr>
                        <td>";
        // line 157
        echo gettext("Total");
        echo "</td>
                        <td>";
        // line 158
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "support_ticket_get_list", [], "method", false, false, false, 158), "total", [], "any", false, false, false, 158), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <td>";
        // line 161
        echo gettext("Open");
        echo "</td>
                        <td>";
        // line 162
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "support_ticket_get_list", [0 => ["status" => "open"]], "method", false, false, false, 162), "total", [], "any", false, false, false, 162), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <td>";
        // line 165
        echo gettext("On Hold");
        echo "</td>
                        <td>";
        // line 166
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "support_ticket_get_list", [0 => ["status" => "on_hold"]], "method", false, false, false, 166), "total", [], "any", false, false, false, 166), "html", null, true);
        echo "</td>
                    </tr>
                </tbody>

                <tfoot>
                    <tr>
                        <td colspan=\"2\">
                            <a class=\"bb-button\" href=\"";
        // line 173
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("support");
        echo "\">";
        echo gettext("All tickets");
        echo "</a>
                            <a class=\"bb-button bb-button-submit\" href=\"";
        // line 174
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("support", ["ticket" => 1]);
        echo "\">";
        echo gettext("New ticket");
        echo "</a>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>

    <div class=\"grid_6 alpha\">
        <div class=\"widget\">
            <div class=\"head\">
                <h2 class=\"dark-icon i-order\">";
        // line 185
        echo gettext("Recent orders");
        echo "</h2>
            </div>
            <table>
                <tbody>
                    ";
        // line 189
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "order_get_list", [0 => ["per_page" => 5, "page" => twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "page", [], "any", false, false, false, 189), "hide_addons" => 1]], "method", false, false, false, 189), "list", [], "any", false, false, false, 189));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["i"] => $context["order"]) {
            // line 190
            echo "                    <tr class=\"";
            echo twig_escape_filter($this->env, twig_cycle([0 => "odd", 1 => "even"], $context["i"]), "html", null, true);
            echo "\">
                        <td><a href=\"";
            // line 191
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("order/service/manage");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 191), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "title", [], "any", false, false, false, 191), 30), "html", null, true);
            echo "</a></td>
                        <td>";
            // line 192
            echo twig_call_macro($macros["mf"], "macro_status_name", [twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 192)], 192, $context, $this->getSourceContext());
            echo "</td>
                    </tr>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 195
            echo "                    <tr>
                        <td colspan=\"3\">";
            // line 196
            echo gettext("The list is empty");
            echo "</td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['order'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 199
        echo "                </tbody>
            </table>
        </div>
    </div>

    <div class=\"grid_6 omega\">
        <div class=\"widget\">
            <div class=\"head\">
                <h2 class=\"dark-icon i-email\">";
        // line 207
        echo gettext("Recent emails");
        echo "</h2>
            </div>
            <table>
                <tbody>
                    ";
        // line 211
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "email_get_list", [0 => ["per_page" => 5]], "method", false, false, false, 211), "list", [], "any", false, false, false, 211));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["i"] => $context["email"]) {
            // line 212
            echo "                    <tr class=\"";
            echo twig_escape_filter($this->env, twig_cycle([0 => "odd", 1 => "even"], $context["i"]), "html", null, true);
            echo "\">
                        <td><a href=\"";
            // line 213
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("email");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["email"], "id", [], "any", false, false, false, 213), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, twig_get_attribute($this->env, $this->source, $context["email"], "subject", [], "any", false, false, false, 213), 30), "html", null, true);
            echo "</a></td>
                        <td title=\"";
            // line 214
            echo twig_escape_filter($this->env, $this->extensions['Box_TwigExtensions']->twig_bb_date(twig_get_attribute($this->env, $this->source, $context["email"], "created_at", [], "any", false, false, false, 214)), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_timeago_filter(twig_get_attribute($this->env, $this->source, $context["email"], "created_at", [], "any", false, false, false, 214)), "html", null, true);
            echo " ";
            echo gettext("ago");
            echo "</td>
                    </tr>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 217
            echo "                    <tr>
                        <td colspan=\"2\">";
            // line 218
            echo gettext("The list is empty");
            echo "</td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['email'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 221
        echo "                </tbody>
            </table>
        </div>
    </div>
    <div class=\"clear\"></div>
    
</div>
";
    }

    // line 231
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 232
        echo "<script type=\"text/javascript\">
\$(function() {

    \$('#client-login').bind('submit',function(event){
        bb.post(
            'guest/client/login',
            \$(this).serialize(),
            function(result) {
                bb.redirect();
            }
        );
        return false;
    });

});
</script>
";
    }

    public function getTemplateName()
    {
        return "mod_dashboard_index.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  542 => 232,  538 => 231,  527 => 221,  518 => 218,  515 => 217,  503 => 214,  495 => 213,  490 => 212,  485 => 211,  478 => 207,  468 => 199,  459 => 196,  456 => 195,  448 => 192,  440 => 191,  435 => 190,  430 => 189,  423 => 185,  407 => 174,  401 => 173,  391 => 166,  387 => 165,  381 => 162,  377 => 161,  371 => 158,  367 => 157,  359 => 152,  343 => 141,  337 => 140,  327 => 133,  323 => 132,  317 => 129,  313 => 128,  307 => 125,  303 => 124,  295 => 119,  279 => 108,  269 => 101,  265 => 100,  259 => 97,  255 => 96,  249 => 93,  245 => 92,  237 => 87,  221 => 76,  211 => 69,  207 => 68,  201 => 65,  197 => 64,  191 => 61,  187 => 60,  178 => 54,  173 => 51,  171 => 50,  168 => 49,  161 => 44,  151 => 40,  147 => 38,  138 => 34,  134 => 33,  130 => 32,  122 => 31,  118 => 30,  114 => 29,  111 => 28,  106 => 27,  98 => 22,  94 => 21,  90 => 20,  86 => 19,  82 => 18,  74 => 13,  70 => 11,  67 => 10,  65 => 9,  61 => 7,  57 => 6,  50 => 3,  46 => 1,  44 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends request.ajax ? \"layout_blank.phtml\" : \"layout_default.phtml\" %}

{% block meta_title %}{% trans 'Client Area' %}{% endblock %}
{% import \"macro_functions.phtml\" as mf %}

{% block content %}
<div class=\"dashboard\">
    
    {% set tickets = client.support_ticket_get_list({\"status\":'on_hold'}) %}
    {% if tickets.total > 0 %}
        <div class=\"widget\">
            <div class=\"head\">
                <h2 class=\"dark-icon i-support\">{% trans 'Tickets waiting your reply' %}</h2>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>{% trans 'Id' %}</th>
                        <th>{% trans 'Subject' %}</th>
                        <th>{% trans 'Help desk' %}</th>
                        <th>{% trans 'Status' %}</th>
                        <th>{% trans 'Submitted' %}</th>
                    </tr>
                </thead>

                <tbody>
                    {% for i, ticket in tickets.list %}

                    <tr class=\"{{ cycle(['odd', 'even'], i) }}\">
                        <td>{{ticket.id}}</td>
                        <td><a href=\"{{ 'support/ticket'|link }}/{{ticket.id}}\">{{ticket.subject}}</a></td>
                        <td>{{ticket.helpdesk.name}}</td>
                        <td>{{mf.status_name(ticket.status)}}</td>
                        <td>{{ticket.created_at|bb_date}}</td>
                    </tr>

                    {% else %}

                    <tr>
                        <td colspan=\"5\">{% trans 'The list is empty' %}</td>
                    </tr>

                    {% endfor %}

                </tbody>
            </table>
        </div>
    {% endif %}

    {% set profile = client.client_get %}
    <div class=\"grid_6 alpha\">
        <div class=\"widget\">
            <div class=\"head\">
                <h2 class=\"dark-icon i-profile\">{% trans 'Profile' %}</h2>
            </div>

            <table>
                <tbody>
                    <tr>
                        <td>{% trans 'ID' %}</td>
                        <td>#{{ profile.id }}</td>
                    </tr>
                    <tr>
                        <td>{% trans 'Email' %}</td>
                        <td>{{ profile.email }}</td>
                    </tr>
                    <tr>
                        <td>{% trans 'Balance' %}</td>
                        <td>{{ profile.balance | money(profile.currency) }}</td>
                    </tr>
                </tbody>

                <tfoot>
                    <tr>
                        <td colspan=\"2\">
                            <a class=\"bb-button\" href=\"{{ 'client/me'|link }}\">{% trans 'Manage profile' %}</a>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>

    <div class=\"grid_6 omega\">
        <div class=\"widget\">
            <div class=\"head\">
                <h2 class=\"dark-icon i-invoice\">{% trans 'Invoices' %}</h2>
            </div>
            <table>
                <tbody>
                    <tr>
                        <td>{% trans 'Total' %}</td>
                        <td>{{ client.invoice_get_list().total }}</td>
                    </tr>
                    <tr>
                        <td>{% trans 'Paid' %}</td>
                        <td>{{ client.invoice_get_list({\"status\":\"paid\"}).total }}</td>
                    </tr>
                    <tr>
                        <td>{% trans 'Unpaid' %}</td>
                        <td>{{ client.invoice_get_list({\"status\":\"unpaid\"}).total }}</td>
                    </tr>
                </tbody>

                <tfoot>
                    <tr>
                        <td colspan=\"2\">
                            <a class=\"bb-button\" href=\"{{ 'invoice'|link }}\">{% trans 'All Invoices' %}</a>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>

    <div class=\"grid_6 alpha\">
        <div class=\"widget\">
            <div class=\"head\">
                <h2 class=\"dark-icon i-services\">{% trans 'Services' %}</h2>
            </div>
            <table>
                <tbody>
                    <tr>
                        <td>{% trans 'Total' %}</td>
                        <td>{{ client.order_get_list({\"hide_addons\":1}).total }}</td>
                    </tr>
                    <tr>
                        <td>{% trans 'Active' %}</td>
                        <td>{{ client.order_get_list({\"hide_addons\":1, \"status\":\"active\"}).total }}</td>
                    </tr>
                    <tr>
                        <td>{% trans 'Soon expires' %}</td>
                        <td>{{ client.order_get_list({\"expiring\":1}).total }}</td>
                    </tr>
                </tbody>

                <tfoot>
                    <tr>
                        <td colspan=\"2\">
                            <a class=\"bb-button\" href=\"{{ 'order/service'|link }}\">{% trans 'All services' %}</a>
                            <a class=\"bb-button bb-button-submit\" href=\"{{ 'order'|link }}\">{% trans 'New order' %}</a>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>

    <div class=\"grid_6 omega\">
        <div class=\"widget\">
            <div class=\"head\">
                <h2 class=\"dark-icon i-support\">{% trans 'Tickets' %}</h2>
            </div>
            <table>
                <tbody>
                    <tr>
                        <td>{% trans 'Total' %}</td>
                        <td>{{ client.support_ticket_get_list().total }}</td>
                    </tr>
                    <tr>
                        <td>{% trans 'Open' %}</td>
                        <td>{{ client.support_ticket_get_list({\"status\":'open'}).total }}</td>
                    </tr>
                    <tr>
                        <td>{% trans 'On Hold' %}</td>
                        <td>{{ client.support_ticket_get_list({\"status\":'on_hold'}).total }}</td>
                    </tr>
                </tbody>

                <tfoot>
                    <tr>
                        <td colspan=\"2\">
                            <a class=\"bb-button\" href=\"{{ 'support'|link }}\">{% trans 'All tickets' %}</a>
                            <a class=\"bb-button bb-button-submit\" href=\"{{ 'support'|link({'ticket' : 1}) }}\">{% trans 'New ticket' %}</a>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>

    <div class=\"grid_6 alpha\">
        <div class=\"widget\">
            <div class=\"head\">
                <h2 class=\"dark-icon i-order\">{% trans 'Recent orders' %}</h2>
            </div>
            <table>
                <tbody>
                    {% for i, order in client.order_get_list({\"per_page\":5, \"page\":request.page, \"hide_addons\":1}).list %}
                    <tr class=\"{{ cycle(['odd', 'even'], i) }}\">
                        <td><a href=\"{{ 'order/service/manage'|link }}/{{order.id}}\">{{ order.title|truncate(30) }}</a></td>
                        <td>{{ mf.status_name(order.status) }}</td>
                    </tr>
                    {% else %}
                    <tr>
                        <td colspan=\"3\">{% trans 'The list is empty' %}</td>
                    </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>
    </div>

    <div class=\"grid_6 omega\">
        <div class=\"widget\">
            <div class=\"head\">
                <h2 class=\"dark-icon i-email\">{% trans 'Recent emails' %}</h2>
            </div>
            <table>
                <tbody>
                    {% for i, email in client.email_get_list({\"per_page\":5}).list %}
                    <tr class=\"{{ cycle(['odd', 'even'], i) }}\">
                        <td><a href=\"{{ 'email'|link }}/{{email.id}}\">{{email.subject|truncate(30)}}</a></td>
                        <td title=\"{{ email.created_at|bb_date }}\">{{ email.created_at|timeago }} {% trans 'ago' %}</td>
                    </tr>
                    {% else %}
                    <tr>
                        <td colspan=\"2\">{% trans 'The list is empty' %}</td>
                    </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>
    </div>
    <div class=\"clear\"></div>
    
</div>
{% endblock %}


{% block js %}
<script type=\"text/javascript\">
\$(function() {

    \$('#client-login').bind('submit',function(event){
        bb.post(
            'guest/client/login',
            \$(this).serialize(),
            function(result) {
                bb.redirect();
            }
        );
        return false;
    });

});
</script>
{% endblock %}", "mod_dashboard_index.phtml", "/var/www/html/bb-themes/boxbilling/html/mod_dashboard_index.phtml");
    }
}
