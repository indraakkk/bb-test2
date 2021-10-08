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

/* mod_cart_index.phtml */
class __TwigTemplate_35fe40e01dd924c7dbfc728364bebbbdf61e5e9bd779cb22def090b2528c1d60 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'meta_title' => [$this, 'block_meta_title'],
            'content_before' => [$this, 'block_content_before'],
            'content' => [$this, 'block_content'],
            'sidebar2' => [$this, 'block_sidebar2'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "ajax", [], "any", false, false, false, 1)) ? ("layout_blank.phtml") : ("layout_default.phtml")), "mod_cart_index.phtml", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $macros["mf"] = $this->macros["mf"] = $this->loadTemplate("macro_functions.phtml", "mod_cart_index.phtml", 3)->unwrap();
        // line 11
        $context["cart"] = twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "cart_get", [], "any", false, false, false, 11);
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo gettext("Order confirm");
    }

    // line 7
    public function block_content_before($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        $this->loadTemplate("partial_steps.phtml", "mod_cart_index.phtml", 8)->display(twig_array_merge($context, ["selected" => 3]));
    }

    // line 13
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "
";
        // line 15
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "items", [], "any", false, false, false, 15)) > 0)) {
            // line 16
            echo "<div id=\"shopping-cart\">
    <div class=\"h-block\">
        <div class=\"h-block-header\">
            <div class=\"icon\"><span class=\"number\">3</span></div>
            <h2>";
            // line 20
            echo gettext("Order confirmation");
            echo "</h2>
            <p>";
            // line 21
            echo gettext("These are the products you have selected");
            echo "</p>
        </div>
        <div class=\"block\">
            <table class=\"with-border\">
                <thead>
                    <tr>
                        <th>";
            // line 27
            echo gettext("Product");
            echo "</th>
                        <th>";
            // line 28
            echo gettext("Period");
            echo "</th>
                        <th class=\"currency\">";
            // line 29
            echo gettext("Price");
            echo "</th>
                    </tr>
                 </thead>

                 <tbody>
                    ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "items", [], "any", false, false, false, 34));
            foreach ($context['_seq'] as $context["i"] => $context["item"]) {
                // line 35
                echo "                    <tr class=\"";
                echo twig_escape_filter($this->env, twig_cycle([0 => "odd", 1 => "even"], $context["i"]), "html", null, true);
                echo "\">
                        <td>
                            ";
                // line 37
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 37), "html", null, true);
                echo "
                            ";
                // line 38
                if ((twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 38) > 1)) {
                    // line 39
                    echo "                            x ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 39), "html", null, true);
                    echo "
                            ";
                }
                // line 41
                echo "                        </td>
                        <td>";
                // line 42
                echo twig_period_title($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "period", [], "any", false, false, false, 42));
                echo "</td>
                        <td class=\"currency\">
                            ";
                // line 44
                if (twig_get_attribute($this->env, $this->source, $context["item"], "discount_price", [], "any", false, false, false, 44)) {
                    // line 45
                    echo "                                <del>";
                    echo twig_money_convert($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "total", [], "any", false, false, false, 45));
                    echo "</del>
                                ";
                    // line 46
                    echo twig_money_convert($this->env, (twig_get_attribute($this->env, $this->source, $context["item"], "total", [], "any", false, false, false, 46) - twig_get_attribute($this->env, $this->source, $context["item"], "discount_price", [], "any", false, false, false, 46)));
                    echo "
                            ";
                } else {
                    // line 48
                    echo "                                ";
                    echo twig_money_convert($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "total", [], "any", false, false, false, 48));
                    echo "
                            ";
                }
                // line 50
                echo "                        </td>
                    </tr>
                    ";
                // line 52
                if ((twig_get_attribute($this->env, $this->source, $context["item"], "setup_price", [], "any", false, false, false, 52) != 0)) {
                    // line 53
                    echo "                    <tr>
                        <td>";
                    // line 54
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 54), "html", null, true);
                    echo " ";
                    echo gettext("setup");
                    echo "</td>
                        <td>-</td>
                        <td class=\"currency\">
                            ";
                    // line 57
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "discount_setup", [], "any", false, false, false, 57)) {
                        // line 58
                        echo "                                <del>";
                        echo twig_money_convert($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "setup_price", [], "any", false, false, false, 58));
                        echo "</del>
                                ";
                        // line 59
                        echo twig_money_convert($this->env, (twig_get_attribute($this->env, $this->source, $context["item"], "setup_price", [], "any", false, false, false, 59) - twig_get_attribute($this->env, $this->source, $context["item"], "discount_setup", [], "any", false, false, false, 59)));
                        echo "
                            ";
                    } else {
                        // line 61
                        echo "                                ";
                        echo twig_money_convert($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "setup_price", [], "any", false, false, false, 61));
                        echo "</td>
                            ";
                    }
                    // line 63
                    echo "                    </tr>
                    ";
                }
                // line 65
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            echo "                 </tbody>
            </table>
            
            ";
            // line 69
            if (($context["client"] ?? null)) {
                // line 70
                echo "            <div class=\"grid_5 suffix_2 alpha\">
                <div class=\"box\">
                    <div class=\"block\">
                        <form action=\"";
                // line 73
                echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/guest/cart/apply_promo");
                echo "\" method=\"post\" class=\"api-form\" data-api-reload=\"1\">
                            <fieldset>
                                <input type=\"text\" name=\"promocode\" value=\"";
                // line 75
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "promocode", [], "any", true, true, false, 75)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "promocode", [], "any", false, false, false, 75), twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "promocode", [], "any", false, false, false, 75))) : (twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "promocode", [], "any", false, false, false, 75))), "html", null, true);
                echo "\" required=\"required\" placeholder=\"";
                echo gettext("Have a promo code?");
                echo "\">
                                ";
                // line 76
                if (twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "promocode", [], "any", false, false, false, 76)) {
                    // line 77
                    echo "                                <a href=\"";
                    echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/guest/cart/remove_promo");
                    echo "\" class=\"bb-button api-link\" data-api-reload=\"1\">";
                    echo gettext("Reset");
                    echo "</a>
                                ";
                } else {
                    // line 79
                    echo "                                <input class=\"bb-button bb-button-submit\" type=\"submit\" value=\"";
                    echo gettext("Apply");
                    echo "\">
                                ";
                }
                // line 81
                echo "                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
            <div class=\"grid_5 omega\">
                <div class=\"box\">
                    <div class=\"block pricing\">
                        ";
                // line 89
                $context["tax_amount"] = 0;
                // line 90
                echo "                        ";
                if (twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "client_is_taxable", [], "any", false, false, false, 90)) {
                    // line 91
                    echo "                            ";
                    $context["tax_rate"] = twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "invoice_get_tax_rate", [], "any", false, false, false, 91);
                    // line 92
                    echo "                            ";
                    $context["tax_amount"] = ((twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "total", [], "any", false, false, false, 92) * ($context["tax_rate"] ?? null)) / 100);
                    // line 93
                    echo "
                            <p>";
                    // line 94
                    echo gettext("VAT");
                    echo " (";
                    echo twig_escape_filter($this->env, ($context["tax_rate"] ?? null), "html", null, true);
                    echo "%) :</p>

                            <div class=\"currency\">";
                    // line 96
                    echo twig_money_convert($this->env, ($context["tax_amount"] ?? null));
                    echo "</div>
                        ";
                }
                // line 98
                echo "                        <p>";
                echo gettext("Total:");
                echo "</p>
                        <div class=\"currency\">
\t\t\t\t\t\t\t";
                // line 100
                echo twig_money_convert($this->env, (twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "total", [], "any", false, false, false, 100) + ($context["tax_amount"] ?? null)));
                echo "
\t                    </div>
                        <form method=\"post\" action=\"";
                // line 102
                echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/client/cart/checkout");
                echo "\" class=\"api-form\" data-api-jsonp=\"onAfterCartCheckout\">
                        ";
                // line 103
                $context["enough_in_balance"] = (twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "client_balance_get_total", [], "any", false, false, false, 103) >= twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "total", [], "any", false, false, false, 103));
                // line 104
                echo "                        ";
                if ((twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "total", [], "any", false, false, false, 104) &&  !($context["enough_in_balance"] ?? null))) {
                    // line 105
                    echo "                        <div style=\"text-align: left;\">
                        ";
                    // line 106
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "invoice_gateways", [], "any", false, false, false, 106));
                    $context['loop'] = [
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    ];
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["gtw"]) {
                        // line 107
                        echo "                            ";
                        if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "currency", [], "any", false, false, false, 107), "code", [], "any", false, false, false, 107), twig_get_attribute($this->env, $this->source, $context["gtw"], "accepted_currencies", [], "any", false, false, false, 107))) {
                            // line 108
                            echo "                            <label><input type=\"radio\" name=\"gateway_id\" value=\"";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["gtw"], "id", [], "any", false, false, false, 108), "html", null, true);
                            echo "\" ";
                            echo ((twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 108)) ? ("checked") : (""));
                            echo "/>
                                ";
                            // line 109
                            echo gettext("Pay by");
                            echo " ";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["gtw"], "title", [], "any", false, false, false, 109), "html", null, true);
                            echo "
                            </label>
                            <div class=\"clear\"></div>
                            ";
                        }
                        // line 113
                        echo "                        ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gtw'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 114
                    echo "                        </div>
                        ";
                }
                // line 116
                echo "                        <br/>
                        <button class=\"bb-button bb-button-submit bb-button-big\" type=\"submit\">";
                // line 117
                echo gettext("Checkout");
                echo "</button>
                        ";
                // line 118
                if (($context["enough_in_balance"] ?? null)) {
                    // line 119
                    echo "                        <p>";
                    echo gettext("Total amount will be deducted from account balance");
                    echo "</p>
                        ";
                }
                // line 121
                echo "                        </form>
                    </div>
                </div>
            </div>
            ";
            } else {
                // line 126
                echo "
            <div class=\"block\">
                <div class=\"splitter\">
                <div class=\"grid_6 alpha\">
                    <div class=\"box\">
                        <div class=\"block\">
                            <h2>";
                // line 132
                echo gettext("Sign in");
                echo "</h2>
                            <form action=\"";
                // line 133
                echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/guest/client/login");
                echo "\" method=\"post\" class=\"api-form\" data-api-reload=\"1\">
                                <fieldset>
                                    <legend>";
                // line 135
                echo gettext("Login to client area");
                echo "</legend>
                                    <p>
                                        <label>";
                // line 137
                echo gettext("Email Address");
                echo ": </label>
                                        <input type=\"email\" name=\"email\" value=\"";
                // line 138
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "email", [], "any", false, false, false, 138), "html", null, true);
                echo "\" required=\"required\">
                                    </p>
                                    <p>
                                        <label>";
                // line 141
                echo gettext("Password");
                echo ": </label>
                                        <input type=\"password\" name=\"password\" value=\"\" required=\"required\">
                                    </p>
                                    <input class=\"bb-button bb-button-submit\" type=\"submit\" value=\"";
                // line 144
                echo gettext("Login");
                echo "\">
                                    <a class=\"bb-button\" href=\"";
                // line 145
                echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("reset-password");
                echo "\">";
                echo gettext("Reset password");
                echo "</a>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>

                <div class=\"grid_6 omega\">

                    ";
                // line 154
                if ( !twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "register", [], "any", false, false, false, 154)) {
                    // line 155
                    echo "                    <div class=\"box\">
                        <h2>";
                    // line 156
                    echo gettext("Do not have an account yet?");
                    echo "</h2>
                        <div class=\"block\">
                            <a class=\"bb-button bb-button-red bb-button-big\" href=\"#\" onclick=\"\$(this).parents('.box').hide(); \$('#register-new-account').fadeIn(); return false;\" style=\"margin: 30px 0 0 50px;\">";
                    // line 158
                    echo gettext("Register");
                    echo "</a>
                        </div>
                        ";
                    // line 160
                    if (twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "extension_is_on", [0 => ["mod" => "oauth"]], "method", false, false, false, 160)) {
                        // line 161
                        echo "                            ";
                        $this->loadTemplate("mod_oauth_buttons.phtml", "mod_cart_index.phtml", 161)->display(twig_array_merge($context, ["redirect_to" => "cart"]));
                        // line 162
                        echo "                        ";
                    }
                    // line 163
                    echo "                    </div>
                    ";
                }
                // line 165
                echo "
                    <div class=\"box\" id=\"register-new-account\" ";
                // line 166
                if ( !twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "register", [], "any", false, false, false, 166)) {
                    echo "style=\"display: none;\"";
                }
                echo " >
                            <h2>";
                // line 167
                echo gettext("Enter your details below");
                echo "</h2>
                            <div class=\"block\">
                                ";
                // line 169
                $context["r"] = twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "client_required", [], "any", false, false, false, 169);
                // line 170
                echo "                                <form action=\"";
                echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/guest/client/create");
                echo "\" method=\"post\" class=\"api-form\" data-api-reload=\"1\">
                                <fieldset>
                                        <legend>";
                // line 172
                echo gettext("Create new profile");
                echo "</legend>
                                        <p>
                                            <label>";
                // line 174
                echo gettext("Email Address");
                echo ": </label>
                                            <input type=\"email\" name=\"email\" value=\"";
                // line 175
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "email", [], "any", false, false, false, 175), "html", null, true);
                echo "\" required=\"required\" id=\"reg-email\">
                                        </p>
                                        <p>
                                            <label>";
                // line 178
                echo gettext("First Name");
                echo ": </label>
                                            <input type=\"text\" name=\"first_name\" value=\"";
                // line 179
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "first_name", [], "any", false, false, false, 179), "html", null, true);
                echo "\" required=\"required\">
                                        </p>

                                        ";
                // line 182
                if (twig_in_filter("last_name", ($context["r"] ?? null))) {
                    // line 183
                    echo "                                        <p>
                                            <label>";
                    // line 184
                    echo gettext("Last Name");
                    echo ": </label>
                                            <input type=\"text\" name=\"last_name\" value=\"";
                    // line 185
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "last_name", [], "any", false, false, false, 185), "html", null, true);
                    echo "\" required=\"required\">
                                        </p>
                                        ";
                }
                // line 188
                echo "
                                        ";
                // line 189
                if (twig_in_filter("company", ($context["r"] ?? null))) {
                    // line 190
                    echo "                                        <p>
                                            <label>";
                    // line 191
                    echo gettext("Company");
                    echo ": </label>
                                            <input type=\"text\" name=\"company\" value=\"";
                    // line 192
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "company", [], "any", false, false, false, 192), "html", null, true);
                    echo "\" required=\"required\">
                                        </p>
                                        ";
                }
                // line 195
                echo "
                                        ";
                // line 196
                if (twig_in_filter("birthday", ($context["r"] ?? null))) {
                    // line 197
                    echo "                                        <p>
                                            <label>";
                    // line 198
                    echo gettext("Birthday");
                    echo ": </label>
                                            <input type=\"text\" name=\"birthday\" value=\"\" required=\"required\">
                                        </p>
                                        ";
                }
                // line 202
                echo "
                                        ";
                // line 203
                if (twig_in_filter("gender", ($context["r"] ?? null))) {
                    // line 204
                    echo "                                        <p>
                                            <label>";
                    // line 205
                    echo gettext("You are");
                    echo ": </label>
                                            <select name=\"gender\" required=\"required\">
                                                <option value=\"male\">Male</option>
                                                <option value=\"female\">Female</option>
                                            </select>
                                        </p>
                                        ";
                }
                // line 212
                echo "
                                        ";
                // line 213
                if (twig_in_filter("address_1", ($context["r"] ?? null))) {
                    // line 214
                    echo "                                        <p>
                                            <label>";
                    // line 215
                    echo gettext("Address");
                    echo ": </label>
                                            <input type=\"text\" name=\"address_1\" value=\"";
                    // line 216
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "address_1", [], "any", false, false, false, 216), "html", null, true);
                    echo "\" required=\"required\">
                                        </p>
                                        ";
                }
                // line 219
                echo "
                                        ";
                // line 220
                if (twig_in_filter("address_2", ($context["r"] ?? null))) {
                    // line 221
                    echo "                                        <p>
                                            <label>";
                    // line 222
                    echo gettext("Address 2");
                    echo ": </label>
                                            <input type=\"text\" name=\"address_2\" value=\"";
                    // line 223
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "address_2", [], "any", false, false, false, 223), "html", null, true);
                    echo "\" required=\"required\">
                                        </p>
                                        ";
                }
                // line 226
                echo "
                                        ";
                // line 227
                if (twig_in_filter("city", ($context["r"] ?? null))) {
                    // line 228
                    echo "                                        <p>
                                            <label>";
                    // line 229
                    echo gettext("City");
                    echo ": </label>
                                            <input type=\"text\" name=\"city\" value=\"";
                    // line 230
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "city", [], "any", false, false, false, 230), "html", null, true);
                    echo "\" required=\"required\">
                                        </p>
                                        ";
                }
                // line 233
                echo "
                                        ";
                // line 234
                if (twig_in_filter("country", ($context["r"] ?? null))) {
                    // line 235
                    echo "                                        <p>
                                            <label>";
                    // line 236
                    echo gettext("Country");
                    echo ": </label>
                                            ";
                    // line 237
                    echo twig_call_macro($macros["mf"], "macro_selectbox", ["country", twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "system_countries", [], "any", false, false, false, 237), twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "country", [], "any", false, false, false, 237), 0, "Select country"], 237, $context, $this->getSourceContext());
                    echo "
                                        </p>
                                        ";
                }
                // line 240
                echo "
                                        ";
                // line 241
                if (twig_in_filter("state", ($context["r"] ?? null))) {
                    // line 242
                    echo "                                        <p>
                                            <label>";
                    // line 243
                    echo gettext("State");
                    echo ": </label>
                                            ";
                    // line 245
                    echo "                                            <input type=\"text\" name=\"state\" value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "state", [], "any", false, false, false, 245), "html", null, true);
                    echo "\" />
                                        </p>
                                        ";
                }
                // line 248
                echo "
                                        ";
                // line 249
                if (twig_in_filter("postcode", ($context["r"] ?? null))) {
                    // line 250
                    echo "                                        <p>
                                            <label>";
                    // line 251
                    echo gettext("Zip/Postal Code");
                    echo ": </label>
                                            <input type=\"text\" name=\"postcode\" value=\"";
                    // line 252
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "postcode", [], "any", false, false, false, 252), "html", null, true);
                    echo "\" required=\"required\">
                                        </p>
                                        ";
                }
                // line 255
                echo "
                                        ";
                // line 256
                if (twig_in_filter("phone", ($context["r"] ?? null))) {
                    // line 257
                    echo "                                        <p>
                                            <label>";
                    // line 258
                    echo gettext("Phone");
                    echo ": </label>
                                            <br/>
                                            <input type=\"text\" name=\"phone_cc\" value=\"";
                    // line 260
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "phone_cc", [], "any", false, false, false, 260), "html", null, true);
                    echo "\" required=\"required\" style=\"width: 30px; \">
                                            <input type=\"text\" name=\"phone\" value=\"";
                    // line 261
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "phone", [], "any", false, false, false, 261), "html", null, true);
                    echo "\" required=\"required\"style=\"width: 230px; \">
                                        </p>
                                        ";
                }
                // line 264
                echo "
                                        ";
                // line 265
                $context["custom_fields"] = twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "client_custom_fields", [], "any", false, false, false, 265);
                // line 266
                echo "                                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
                foreach ($context['_seq'] as $context["field_name"] => $context["field"]) {
                    // line 267
                    echo "                                        ";
                    if (twig_get_attribute($this->env, $this->source, $context["field"], "active", [], "any", false, false, false, 267)) {
                        // line 268
                        echo "                                        <div class=\"control-group\">
                                            <label class=\"control-label\" for=\"";
                        // line 269
                        echo twig_escape_filter($this->env, $context["field_name"], "html", null, true);
                        echo "\">";
                        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["field"], "title", [], "any", false, false, false, 269))) {
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "title", [], "any", false, false, false, 269), "html", null, true);
                        } else {
                            echo " ";
                            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $context["field_name"]), "html", null, true);
                            echo " ";
                        }
                        echo "</label>
                                            <div class=\"controls\">
                                                <input type=\"text\" name=\"";
                        // line 271
                        echo twig_escape_filter($this->env, $context["field_name"], "html", null, true);
                        echo "\" id=\"";
                        echo twig_escape_filter($this->env, $context["field_name"], "html", null, true);
                        echo "\" value=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), $context["field_name"], [], "any", false, false, false, 271), "html", null, true);
                        echo "\" ";
                        if (twig_get_attribute($this->env, $this->source, $context["field"], "required", [], "any", false, false, false, 271)) {
                            echo "required=\"required\"";
                        }
                        echo ">
                                                <p class=\"help-block\"></p>
                                            </div>
                                        </div>
                                        ";
                    }
                    // line 276
                    echo "                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['field_name'], $context['field'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 277
                echo "
                                        <p>
                                            <label>";
                // line 279
                echo gettext("Password");
                echo ": </label>
                                            <input type=\"password\" name=\"password\" value=\"\" required=\"required\" id=\"reg-password\">
                                        </p>

                                        <p>
                                            <label>";
                // line 284
                echo gettext("Password confirm");
                echo ": </label>
                                            <input type=\"password\" name=\"password_confirm\" value=\"\" required=\"required\">
                                        </p>

                                        ";
                // line 288
                echo twig_call_macro($macros["mf"], "macro_recaptcha", [], 288, $context, $this->getSourceContext());
                echo "

                                        <input class=\"bb-button bb-button-red\" type=\"submit\" value=\"";
                // line 290
                echo gettext("Register");
                echo "\">
                                        <input type=\"hidden\" name=\"auto_login\" value=\"1\">
                                    </fieldset>
                                </form>
                                </div>
                            </div>
                </div>
                <div class=\"clear\"></div>
                </div>
            </div>
            
            ";
            }
            // line 302
            echo "            <div class=\"clear\"></div>
        </div>
    </div>
</div>

";
        } else {
            // line 308
            echo "
<div class=\"h-block\">
    <div class=\"h-block-header\">
        <div class=\"icon\"><span class=\"number\">3</span></div>
        <h2>";
            // line 312
            echo gettext("You have not selected any product");
            echo "</h2>
    </div>
    <div class=\"block\">

        <div class=\"box\">
            <a class=\"bb-button bb-button-red\" href=\"";
            // line 317
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("order");
            echo "\">";
            echo gettext("Order new service");
            echo "</a>
        </div>
        
    </div>
</div>

";
        }
    }

    // line 326
    public function block_sidebar2($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 327
        echo "    ";
        $this->loadTemplate("partial_currency.phtml", "mod_cart_index.phtml", 327)->display($context);
    }

    // line 330
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 331
        echo "<script type=\"text/javascript\">
function onAfterCartCheckout(result)
{
    if(result.invoice_hash) {
        bb.redirect('";
        // line 335
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("invoice");
        echo "' + '/' + result.invoice_hash + '&auto_redirect=1');
    } else {
        bb.redirect('";
        // line 337
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("order/service/manage");
        echo "' + '/' + result.order_id );
    }
}
</script>
";
    }

    public function getTemplateName()
    {
        return "mod_cart_index.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  858 => 337,  853 => 335,  847 => 331,  843 => 330,  838 => 327,  834 => 326,  820 => 317,  812 => 312,  806 => 308,  798 => 302,  783 => 290,  778 => 288,  771 => 284,  763 => 279,  759 => 277,  753 => 276,  737 => 271,  724 => 269,  721 => 268,  718 => 267,  713 => 266,  711 => 265,  708 => 264,  702 => 261,  698 => 260,  693 => 258,  690 => 257,  688 => 256,  685 => 255,  679 => 252,  675 => 251,  672 => 250,  670 => 249,  667 => 248,  660 => 245,  656 => 243,  653 => 242,  651 => 241,  648 => 240,  642 => 237,  638 => 236,  635 => 235,  633 => 234,  630 => 233,  624 => 230,  620 => 229,  617 => 228,  615 => 227,  612 => 226,  606 => 223,  602 => 222,  599 => 221,  597 => 220,  594 => 219,  588 => 216,  584 => 215,  581 => 214,  579 => 213,  576 => 212,  566 => 205,  563 => 204,  561 => 203,  558 => 202,  551 => 198,  548 => 197,  546 => 196,  543 => 195,  537 => 192,  533 => 191,  530 => 190,  528 => 189,  525 => 188,  519 => 185,  515 => 184,  512 => 183,  510 => 182,  504 => 179,  500 => 178,  494 => 175,  490 => 174,  485 => 172,  479 => 170,  477 => 169,  472 => 167,  466 => 166,  463 => 165,  459 => 163,  456 => 162,  453 => 161,  451 => 160,  446 => 158,  441 => 156,  438 => 155,  436 => 154,  422 => 145,  418 => 144,  412 => 141,  406 => 138,  402 => 137,  397 => 135,  392 => 133,  388 => 132,  380 => 126,  373 => 121,  367 => 119,  365 => 118,  361 => 117,  358 => 116,  354 => 114,  340 => 113,  331 => 109,  324 => 108,  321 => 107,  304 => 106,  301 => 105,  298 => 104,  296 => 103,  292 => 102,  287 => 100,  281 => 98,  276 => 96,  269 => 94,  266 => 93,  263 => 92,  260 => 91,  257 => 90,  255 => 89,  245 => 81,  239 => 79,  231 => 77,  229 => 76,  223 => 75,  218 => 73,  213 => 70,  211 => 69,  206 => 66,  200 => 65,  196 => 63,  190 => 61,  185 => 59,  180 => 58,  178 => 57,  170 => 54,  167 => 53,  165 => 52,  161 => 50,  155 => 48,  150 => 46,  145 => 45,  143 => 44,  138 => 42,  135 => 41,  129 => 39,  127 => 38,  123 => 37,  117 => 35,  113 => 34,  105 => 29,  101 => 28,  97 => 27,  88 => 21,  84 => 20,  78 => 16,  76 => 15,  73 => 14,  69 => 13,  65 => 8,  61 => 7,  54 => 5,  50 => 1,  48 => 11,  46 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends request.ajax ? \"layout_blank.phtml\" : \"layout_default.phtml\" %}

{% import \"macro_functions.phtml\" as mf %}

{% block meta_title %}{%trans 'Order confirm' %}{% endblock %}

{% block content_before %}
{% include \"partial_steps.phtml\" with {'selected': 3} %}
{% endblock %}

{% set cart = guest.cart_get %}

{% block content %}

{% if cart.items|length > 0 %}
<div id=\"shopping-cart\">
    <div class=\"h-block\">
        <div class=\"h-block-header\">
            <div class=\"icon\"><span class=\"number\">3</span></div>
            <h2>{% trans 'Order confirmation' %}</h2>
            <p>{% trans 'These are the products you have selected' %}</p>
        </div>
        <div class=\"block\">
            <table class=\"with-border\">
                <thead>
                    <tr>
                        <th>{% trans 'Product' %}</th>
                        <th>{% trans 'Period' %}</th>
                        <th class=\"currency\">{% trans 'Price' %}</th>
                    </tr>
                 </thead>

                 <tbody>
                    {% for i, item in cart.items %}
                    <tr class=\"{{ cycle(['odd', 'even'],i) }}\">
                        <td>
                            {{ item.title }}
                            {% if item.quantity > 1 %}
                            x {{ item.quantity }}
                            {% endif %}
                        </td>
                        <td>{{ item.period | period_title }}</td>
                        <td class=\"currency\">
                            {% if item.discount_price %}
                                <del>{{ (item.total)  | money_convert }}</del>
                                {{ (item.total - item.discount_price) | money_convert }}
                            {% else %}
                                {{ (item.total) | money_convert }}
                            {% endif %}
                        </td>
                    </tr>
                    {% if item.setup_price != 0 %}
                    <tr>
                        <td>{{ item.title }} {% trans 'setup' %}</td>
                        <td>-</td>
                        <td class=\"currency\">
                            {% if item.discount_setup %}
                                <del>{{ item.setup_price | money_convert }}</del>
                                {{ (item.setup_price - item.discount_setup) | money_convert }}
                            {% else %}
                                {{ item.setup_price | money_convert }}</td>
                            {% endif %}
                    </tr>
                    {% endif %}
                    {% endfor %}
                 </tbody>
            </table>
            
            {% if client %}
            <div class=\"grid_5 suffix_2 alpha\">
                <div class=\"box\">
                    <div class=\"block\">
                        <form action=\"{{ 'api/guest/cart/apply_promo'|link }}\" method=\"post\" class=\"api-form\" data-api-reload=\"1\">
                            <fieldset>
                                <input type=\"text\" name=\"promocode\" value=\"{{ request.promocode|default(cart.promocode) }}\" required=\"required\" placeholder=\"{% trans 'Have a promo code?' %}\">
                                {% if cart.promocode %}
                                <a href=\"{{ 'api/guest/cart/remove_promo'|link }}\" class=\"bb-button api-link\" data-api-reload=\"1\">{% trans 'Reset' %}</a>
                                {% else %}
                                <input class=\"bb-button bb-button-submit\" type=\"submit\" value=\"{% trans 'Apply' %}\">
                                {% endif %}
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
            <div class=\"grid_5 omega\">
                <div class=\"box\">
                    <div class=\"block pricing\">
                        {% set tax_amount = 0 %}
                        {% if client.client_is_taxable %}
                            {% set tax_rate = client.invoice_get_tax_rate %}
                            {% set tax_amount = cart.total * tax_rate / 100 %}

                            <p>{% trans 'VAT'%} ({{ tax_rate }}%) :</p>

                            <div class=\"currency\">{{ tax_amount | money_convert }}</div>
                        {% endif %}
                        <p>{% trans 'Total:' %}</p>
                        <div class=\"currency\">
\t\t\t\t\t\t\t{{(cart.total + tax_amount) | money_convert }}
\t                    </div>
                        <form method=\"post\" action=\"{{ 'api/client/cart/checkout'|link }}\" class=\"api-form\" data-api-jsonp=\"onAfterCartCheckout\">
                        {% set enough_in_balance = client.client_balance_get_total >= cart.total %}
                        {% if cart.total and not enough_in_balance  %}
                        <div style=\"text-align: left;\">
                        {% for gtw in guest.invoice_gateways %}
                            {% if cart.currency.code in gtw.accepted_currencies %}
                            <label><input type=\"radio\" name=\"gateway_id\" value=\"{{gtw.id}}\" {{loop.first ? 'checked' : ''}}/>
                                {% trans 'Pay by' %} {{gtw.title}}
                            </label>
                            <div class=\"clear\"></div>
                            {% endif %}
                        {% endfor %}
                        </div>
                        {% endif %}
                        <br/>
                        <button class=\"bb-button bb-button-submit bb-button-big\" type=\"submit\">{% trans 'Checkout' %}</button>
                        {% if enough_in_balance %}
                        <p>{% trans 'Total amount will be deducted from account balance' %}</p>
                        {% endif %}
                        </form>
                    </div>
                </div>
            </div>
            {% else %}

            <div class=\"block\">
                <div class=\"splitter\">
                <div class=\"grid_6 alpha\">
                    <div class=\"box\">
                        <div class=\"block\">
                            <h2>{% trans 'Sign in' %}</h2>
                            <form action=\"{{ 'api/guest/client/login'|link }}\" method=\"post\" class=\"api-form\" data-api-reload=\"1\">
                                <fieldset>
                                    <legend>{% trans 'Login to client area' %}</legend>
                                    <p>
                                        <label>{% trans 'Email Address' %}: </label>
                                        <input type=\"email\" name=\"email\" value=\"{{ request.email }}\" required=\"required\">
                                    </p>
                                    <p>
                                        <label>{% trans 'Password' %}: </label>
                                        <input type=\"password\" name=\"password\" value=\"\" required=\"required\">
                                    </p>
                                    <input class=\"bb-button bb-button-submit\" type=\"submit\" value=\"{% trans 'Login' %}\">
                                    <a class=\"bb-button\" href=\"{{ 'reset-password'|link }}\">{% trans 'Reset password' %}</a>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>

                <div class=\"grid_6 omega\">

                    {% if not request.register %}
                    <div class=\"box\">
                        <h2>{% trans 'Do not have an account yet?' %}</h2>
                        <div class=\"block\">
                            <a class=\"bb-button bb-button-red bb-button-big\" href=\"#\" onclick=\"\$(this).parents('.box').hide(); \$('#register-new-account').fadeIn(); return false;\" style=\"margin: 30px 0 0 50px;\">{% trans 'Register' %}</a>
                        </div>
                        {% if guest.extension_is_on({\"mod\":\"oauth\"}) %}
                            {% include \"mod_oauth_buttons.phtml\" with {\"redirect_to\":\"cart\"}%}
                        {% endif %}
                    </div>
                    {% endif %}

                    <div class=\"box\" id=\"register-new-account\" {% if not request.register %}style=\"display: none;\"{% endif %} >
                            <h2>{% trans 'Enter your details below' %}</h2>
                            <div class=\"block\">
                                {% set r = guest.client_required %}
                                <form action=\"{{ 'api/guest/client/create'|link }}\" method=\"post\" class=\"api-form\" data-api-reload=\"1\">
                                <fieldset>
                                        <legend>{% trans 'Create new profile' %}</legend>
                                        <p>
                                            <label>{% trans 'Email Address' %}: </label>
                                            <input type=\"email\" name=\"email\" value=\"{{ request.email }}\" required=\"required\" id=\"reg-email\">
                                        </p>
                                        <p>
                                            <label>{% trans 'First Name' %}: </label>
                                            <input type=\"text\" name=\"first_name\" value=\"{{ request.first_name }}\" required=\"required\">
                                        </p>

                                        {% if 'last_name' in r %}
                                        <p>
                                            <label>{% trans 'Last Name' %}: </label>
                                            <input type=\"text\" name=\"last_name\" value=\"{{ request.last_name }}\" required=\"required\">
                                        </p>
                                        {% endif %}

                                        {% if 'company' in r %}
                                        <p>
                                            <label>{% trans 'Company' %}: </label>
                                            <input type=\"text\" name=\"company\" value=\"{{ request.company }}\" required=\"required\">
                                        </p>
                                        {% endif %}

                                        {% if 'birthday' in r %}
                                        <p>
                                            <label>{% trans 'Birthday' %}: </label>
                                            <input type=\"text\" name=\"birthday\" value=\"\" required=\"required\">
                                        </p>
                                        {% endif %}

                                        {% if 'gender' in r %}
                                        <p>
                                            <label>{% trans 'You are' %}: </label>
                                            <select name=\"gender\" required=\"required\">
                                                <option value=\"male\">Male</option>
                                                <option value=\"female\">Female</option>
                                            </select>
                                        </p>
                                        {% endif %}

                                        {% if 'address_1' in r %}
                                        <p>
                                            <label>{% trans 'Address' %}: </label>
                                            <input type=\"text\" name=\"address_1\" value=\"{{ request.address_1 }}\" required=\"required\">
                                        </p>
                                        {% endif %}

                                        {% if 'address_2' in r %}
                                        <p>
                                            <label>{% trans 'Address 2' %}: </label>
                                            <input type=\"text\" name=\"address_2\" value=\"{{ request.address_2 }}\" required=\"required\">
                                        </p>
                                        {% endif %}

                                        {% if 'city' in r %}
                                        <p>
                                            <label>{% trans 'City' %}: </label>
                                            <input type=\"text\" name=\"city\" value=\"{{ request.city }}\" required=\"required\">
                                        </p>
                                        {% endif %}

                                        {% if 'country' in r %}
                                        <p>
                                            <label>{% trans 'Country' %}: </label>
                                            {{ mf.selectbox('country', guest.system_countries, request.country, 0, 'Select country') }}
                                        </p>
                                        {% endif %}

                                        {% if 'state' in r %}
                                        <p>
                                            <label>{% trans 'State' %}: </label>
                                            {# mf.selectbox('state', guest.system_states, request.state, 0, 'Select state') #}
                                            <input type=\"text\" name=\"state\" value=\"{{ request.state }}\" />
                                        </p>
                                        {% endif %}

                                        {% if 'postcode' in r %}
                                        <p>
                                            <label>{% trans 'Zip/Postal Code' %}: </label>
                                            <input type=\"text\" name=\"postcode\" value=\"{{ request.postcode }}\" required=\"required\">
                                        </p>
                                        {% endif %}

                                        {% if 'phone' in r %}
                                        <p>
                                            <label>{% trans 'Phone' %}: </label>
                                            <br/>
                                            <input type=\"text\" name=\"phone_cc\" value=\"{{ request.phone_cc }}\" required=\"required\" style=\"width: 30px; \">
                                            <input type=\"text\" name=\"phone\" value=\"{{ request.phone }}\" required=\"required\"style=\"width: 230px; \">
                                        </p>
                                        {% endif %}

                                        {% set custom_fields = guest.client_custom_fields %}
                                        {% for field_name, field in custom_fields %}
                                        {% if field.active %}
                                        <div class=\"control-group\">
                                            <label class=\"control-label\" for=\"{{ field_name }}\">{% if field.title is not empty %}{{ field.title }}{% else %} {{ field_name | capitalize }} {% endif %}</label>
                                            <div class=\"controls\">
                                                <input type=\"text\" name=\"{{ field_name }}\" id=\"{{ field_name }}\" value=\"{{ attribute(request, field_name) }}\" {% if field.required %}required=\"required\"{% endif %}>
                                                <p class=\"help-block\"></p>
                                            </div>
                                        </div>
                                        {% endif %}
                                        {% endfor %}

                                        <p>
                                            <label>{% trans 'Password' %}: </label>
                                            <input type=\"password\" name=\"password\" value=\"\" required=\"required\" id=\"reg-password\">
                                        </p>

                                        <p>
                                            <label>{% trans 'Password confirm' %}: </label>
                                            <input type=\"password\" name=\"password_confirm\" value=\"\" required=\"required\">
                                        </p>

                                        {{ mf.recaptcha }}

                                        <input class=\"bb-button bb-button-red\" type=\"submit\" value=\"{% trans 'Register' %}\">
                                        <input type=\"hidden\" name=\"auto_login\" value=\"1\">
                                    </fieldset>
                                </form>
                                </div>
                            </div>
                </div>
                <div class=\"clear\"></div>
                </div>
            </div>
            
            {% endif %}
            <div class=\"clear\"></div>
        </div>
    </div>
</div>

{% else %}

<div class=\"h-block\">
    <div class=\"h-block-header\">
        <div class=\"icon\"><span class=\"number\">3</span></div>
        <h2>{% trans 'You have not selected any product' %}</h2>
    </div>
    <div class=\"block\">

        <div class=\"box\">
            <a class=\"bb-button bb-button-red\" href=\"{{ 'order'|link }}\">{% trans 'Order new service' %}</a>
        </div>
        
    </div>
</div>

{% endif %}
{% endblock %}

{% block sidebar2 %}
    {% include 'partial_currency.phtml' %}
{% endblock %}

{% block js %}
<script type=\"text/javascript\">
function onAfterCartCheckout(result)
{
    if(result.invoice_hash) {
        bb.redirect('{{\"invoice\"|link}}' + '/' + result.invoice_hash + '&auto_redirect=1');
    } else {
        bb.redirect('{{\"order/service/manage\"|link}}' + '/' + result.order_id );
    }
}
</script>
{% endblock %}", "mod_cart_index.phtml", "/var/www/html/bb-themes/boxbilling/html/mod_cart_index.phtml");
    }
}
