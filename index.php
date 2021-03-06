<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Kickball/Awesome-Selfhosted</title>
  <meta name="authors" content="Sheldon Rupp,Blor XYZ,Kickball,Selfhosted">
  <meta name="keywords" content="sheldon,rupp,sheldonrupp,ruppsheldon,sheldon rupp,rupp sheldon,kickball,kickball/awesome-selfhosted,awesome-selfhosted,awesome,awesome selfhosted,selfhosted,selfhost,self host,awesome selfhost,hosted,host">
  <meta name="description" content="This website is a mirror of GitHub repository for Awesome-Selfhosted maintained by Kickball on. I take no credit.">
</head>
<?php 
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1); 
?>
<style>
body {
    font: normal 0.8764em / 1.5em;
    margin: 0
}

html>body {
    font-size: 14px
}

p {
    margin: 1.3125em 0;
    font-size: 1.1429em;
    line-height: 1.3125em
}

li {
    font-size: 100%
}

h1 {
    margin: 0.6563em 0;
    font-size: 2.2857em;
    line-height: 0.6563em
}

h2 {
    margin: 0.875em 0;
    font-size: 1.7143em;
    line-height: 0.875em
}

h3 {
    margin: 1em 0;
    font-size: 1.5em;
    line-height: 1em
}

h4 {
    margin: 1.1667em 0;
    font-size: 1.2857em;
    line-height: 1.1667em
}

h5 {
    margin: 1.3125em 0;
    font-size: 1.1429em;
    line-height: 1.3125em
}

h6 {
    margin: 1.5em 0;
    font-size: 1em;
    line-height: 1.5em
}

body,
p,
td,
div {
    font-family: "Lucida Grande", Lucida, Verdana, sans-serif;
    color: #333;
    word-wrap: break-word;
    -webkit-font-smoothing: antialiased
}

h1,
h2,
h3,
h4 {
    color: #333;
    line-height: 1.5em
}

p {
    margin: 0 0 1.7em 0
}

abbr,
acronym {
    border-bottom: 1px dotted #aaa
}

a {
    color: #0d6ea1;
    text-decoration: none;
    -webkit-transition: color .2s ease-in-out;
    -moz-transition: color .2s ease-in-out;
    -o-transition: color .2s ease-in-out;
    -ms-transition: color .2s ease-in-out;
    transition: color .2s ease-in-out
}

a:hover {
    color: #3593d9
}

.footnote {
    font-size: .8em;
    vertical-align: super;
    color: #0d6ea1
}

#wrapper img {
    max-width: 100%;
    height: auto
}

dt {
    font-weight: bold
}

dd {
    margin-bottom: 1em
}

blockquote {
    margin-left: 10px
}

.footnotes {
    -webkit-column-break-inside: avoid-column;
    -webkit-column-break-before: always
}

.footnotes li {
    margin-left: 5px
}

@media screen {
    ::selection {
        background: rgba(157, 193, 200, 0.5)
    }
    h1::selection {
        background-color: rgba(45, 156, 208, 0.3)
    }
    h2::selection {
        background-color: rgba(90, 182, 224, 0.3)
    }
    h3::selection,
    h4::selection,
    h5::selection,
    h6::selection,
    li::selection,
    ol::selection {
        background-color: rgba(133, 201, 232, 0.3)
    }
    code::selection {
        background-color: rgba(0, 0, 0, 0.7);
        color: #eee
    }
    code span::selection {
        background-color: rgba(0, 0, 0, 0.7) !important;
        color: #eee !important
    }
    a::selection {
        background-color: rgba(255, 230, 102, 0.2)
    }
    .inverted a::selection {
        background-color: rgba(255, 230, 102, 0.6)
    }
    td::selection,
    th::selection,
    caption::selection {
        background-color: rgba(180, 237, 95, 0.5)
    }
    .inverted {
        background: #0b2531;
        background: #111 !important
    }
    .inverted #wrapper {
        background: #111 !important
    }
    .inverted p,
    .inverted td,
    .inverted li,
    .inverted h1,
    .inverted h2,
    .inverted h3,
    .inverted h4,
    .inverted h5,
    .inverted h6,
    .inverted pre,
    .inverted code,
    .inverted th,
    .inverted .math,
    .inverted dd,
    .inverted dt {
        color: #eee !important
    }
    .inverted pre {
        background: #ddd
    }
    .inverted pre code {
        color: #333 !important
    }
    .inverted a {
        color: #fff;
        text-decoration: underline
    }
    body {
        padding: 20px !important
    }
    #wrapper {
        background: transparent;
        color: #303030;
        text-indent: 0px;
        padding: 10px;
        margin: 10px !important;
        overflow: visible;
        -webkit-hyphens: auto;
        hyphens: auto;
        max-width: 100% !important
    }
}

@media only screen and (min-width: 1101px) {
    body {
        font-size: 0.8em;
        line-height: 1.5em
    }
}

@media only screen and (max-width: 1100px) {
    body {
        font-size: 0.8em;
        line-height: 1.5em
    }
}

@media only screen and (max-width: 599px) {
    body {
        font-size: 0.8em;
        line-height: 1.5em
    }
}

ul,
ol {
    padding: 0;
    list-style-position: outside;
    margin-left: 20px
}

li {
    margin-bottom: .5em
}

li>p {
    margin: 0 0 1em
}

ul ul,
ul ol {
    margin-top: 1em
}

caption,
col,
colgroup,
table,
tbody,
td,
tfoot,
th,
thead,
tr {
    border-spacing: 0
}

table {
    display: table;
    table-layout: fixed;
    border-collapse: collapse;
    empty-cells: hide;
    margin: 0;
    padding: 0;
    margin-bottom: 24px;
    border: 0
}

caption {
    display: table-caption;
    font-weight: bold
}

col {
    display: table-column
}

colgroup {
    display: table-column-group
}

tbody {
    display: table-row-group
}

tfoot {
    display: table-footer-group
}

thead {
    display: table-header-group
}

td {
    display: table-cell
}

th {
    display: table-cell;
    font-weight: bold
}

tr {
    display: table-row
}

table {
    margin-top: -1px;
    margin-bottom: 23px;
    border: 1px solid rgba(0, 0, 0, 0.25)
}

table th,
table td {
    padding: 0 1em;
    font-size: 1.1em;
    line-height: 23px
}

table thead {
    background-color: rgba(0, 0, 0, 0.15)
}

table tbody {
    background-color: rgba(0, 0, 0, 0.05)
}

table tfoot {
    background-color: rgba(0, 0, 0, 0.15)
}

table tr:nth-child(odd) {
    background-color: rgba(255, 255, 255, 0.06)
}

table tr:nth-child(even) {
    background-color: rgba(0, 0, 0, 0.06)
}

table th:nth-child(odd) {
    background-color: rgba(255, 255, 255, 0.06)
}

table td:nth-child(odd) {
    background-color: rgba(255, 255, 255, 0.06)
}

table td:nth-child(even) {
    background-color: rgba(0, 0, 0, 0.06)
}

table thead {
    border: 1px solid rgba(0, 0, 0, 0.15);
    border-bottom: 1px solid rgba(0, 0, 0, 0.2)
}

table tfoot {
    border: 1px solid rgba(0, 0, 0, 0.15);
    border-top: 1px solid rgba(0, 0, 0, 0.2)
}

figure {
    position: relative;
    display: inline-block;
    margin-bottom: 1.2em;
    overflow: hidden
}

figcaption {
    text-align: center;
    color: #666
}

@media print {
    body {
        overflow: auto;
        max-width: 600px
    }
    img,
    table,
    figure {
        page-break-inside: avoid
    }
}

pre code {
    -webkit-column-break-inside: avoid-column
}

.poetry pre {
    font-family: Georgia, Garamond, serif !important;
    font-style: italic;
    font-size: 110% !important;
    line-height: 1.6em;
    display: block;
    margin-left: 1em
}

.poetry pre code {
    font-family: Georgia, Garamond, serif !important;
    word-break: break-all;
    word-break: break-word;
    -webkit-hyphens: auto;
    -moz-hyphens: auto;
    hyphens: auto;
    white-space: pre-wrap
}

sup,
sub,
a.footnote {
    font-size: 1.4ex;
    height: 0;
    line-height: 1;
    vertical-align: super;
    position: relative
}

sub {
    vertical-align: sub;
    top: -1px
}

.modern #firstdiff {
    width: 105% !important;
    background: transparent;
    text-align: right
}

@media screen {
    #wrapper {
        position: absolute;
        left: 20px;
        top: 20px;
        bottom: 20px
    }
}
/*

github.com style (c) Vasily Polovnyov <vast@whiteants.net>

*/

.hljs {
    display: block;
    padding: 0.5em;
    color: #333;
    background: #f8f8f8
}

.hljs-comment,
.hljs-template_comment,
.diff .hljs-header,
.hljs-javadoc {
    color: #998;
    font-style: italic
}

.hljs-keyword,
.css .rule .hljs-keyword,
.hljs-winutils,
.javascript .hljs-title,
.nginx .hljs-title,
.hljs-subst,
.hljs-request,
.hljs-status {
    color: #333;
    font-weight: bold
}

.hljs-number,
.hljs-hexcolor,
.ruby .hljs-constant {
    color: #099;
}

.hljs-string,
.hljs-tag .hljs-value,
.hljs-phpdoc,
.tex .hljs-formula {
    color: #d14
}

.hljs-title,
.hljs-id,
.coffeescript .hljs-params,
.scss .hljs-preprocessor {
    color: #900;
    font-weight: bold
}

.javascript .hljs-title,
.lisp .hljs-title,
.clojure .hljs-title,
.hljs-subst {
    font-weight: normal
}

.hljs-class .hljs-title,
.haskell .hljs-type,
.vhdl .hljs-literal,
.tex .hljs-command {
    color: #458;
    font-weight: bold
}

.hljs-tag,
.hljs-tag .hljs-title,
.hljs-rules .hljs-property,
.django .hljs-tag .hljs-keyword {
    color: #000080;
    font-weight: normal
}

.hljs-attribute,
.hljs-variable,
.lisp .hljs-body {
    color: #008080
}

.hljs-regexp {
    color: #009926
}

.hljs-symbol,
.ruby .hljs-symbol .hljs-string,
.lisp .hljs-keyword,
.tex .hljs-special,
.hljs-prompt {
    color: #990073
}

.hljs-built_in,
.lisp .hljs-title,
.clojure .hljs-built_in {
    color: #0086b3
}

.hljs-preprocessor,
.hljs-pragma,
.hljs-pi,
.hljs-doctype,
.hljs-shebang,
.hljs-cdata {
    color: #999;
    font-weight: bold
}

.hljs-deletion {
    background: #fdd
}

.hljs-addition {
    background: #dfd
}

.diff .hljs-change {
    background: #0086b3
}

.hljs-chunk {
    color: #aaa
}

#mkreplaced-toc {
    list-style-position: inside;
    padding: 0;
    margin: 0 0 0 1rem;
    list-style-type: none
}

#mkreplaced-toc li::before {
    content: ''
}

#mkreplaced-toc li {
    font-size: 1.5rem;
    line-height: 1.5;
    font-weight: normal
}

#mkreplaced-toc li ul {
    font-size: 1.3rem;
    font-weight: 300;
    padding: .5rem 0;
    margin: 0 0 0 1rem
}

#mkreplaced-toc li.missing {
    list-style-type: none !important
}

#mkreplaced-toc.max-1 ul,
#mkreplaced-toc.max1 ul {
    display: none
}

#mkreplaced-toc.max-2 ul ul,
#mkreplaced-toc.max2 ul ul {
    display: none
}

#mkreplaced-toc.max-3 ul ul ul,
#mkreplaced-toc.max3 ul ul ul {
    display: none
}

#mkreplaced-toc.max-4 ul ul ul ul,
#mkreplaced-toc.max4 ul ul ul ul {
    display: none
}

#mkreplaced-toc.max-5 ul ul ul ul ul,
#mkreplaced-toc.max5 ul ul ul ul ul {
    display: none
}

@media print {
    #wrapper #generated-toc-clone,
    #generated-toc {
        display: none!important
    }
}

#wrapper #generated-toc-clone,
#wrapper #mkreplaced-toc,
#wrapper #generated-toc-clone ul,
#wrapper #mkreplaced-toc ul {
    list-style-position: inside
}

#wrapper #generated-toc-clone li.missing,
#wrapper #mkreplaced-toc li.missing {
    list-style-type: none!important
}

#wrapper #generated-toc-clone,
#wrapper #mkreplaced-toc {
    list-style-type: upper-roman
}

#wrapper #generated-toc-clone>li>ul,
#wrapper #mkreplaced-toc>li>ul {
    list-style-type: decimal
}

#wrapper #generated-toc-clone>li>ul>li>ul,
#wrapper #mkreplaced-toc>li>ul>li>ul {
    list-style-type: decimal-leading-zero
}

#wrapper #generated-toc-clone>li>ul>li>ul>li>ul,
#wrapper #mkreplaced-toc>li>ul>li>ul>li>ul {
    list-style-type: lower-greek
}

#wrapper #generated-toc-clone>li>ul>li>ul>li>ul>li>ul,
#wrapper #mkreplaced-toc>li>ul>li>ul>li>ul>li>ul {
    list-style-type: disc
}

#wrapper #generated-toc-clone>li>ul>li>ul>li>ul>li>ul>li>ul,
#wrapper #mkreplaced-toc>li>ul>li>ul>li>ul>li>ul>li>ul {
    list-style-type: square
}

#wrapper #generated-toc-clone,
#wrapper #mkreplaced-toc {
    list-style-position: outside!important;
    margin-left: 3rem;
}#mkreplaced-toc{list-style-position:inside;padding:0;margin:0 0 0 1rem;list-style-type:none}#mkreplaced-toc li::before{content:''}#mkreplaced-toc li{font-size:1.5rem;line-height:1.5;font-weight:normal}#mkreplaced-toc li ul{font-size:1.3rem;font-weight:300;padding:.5rem 0;margin:0 0 0 1rem}#mkreplaced-toc li.missing{list-style-type:none !important}#mkreplaced-toc.max-1 ul,#mkreplaced-toc.max1 ul{display:none}#mkreplaced-toc.max-2 ul ul,#mkreplaced-toc.max2 ul ul{display:none}#mkreplaced-toc.max-3 ul ul ul,#mkreplaced-toc.max3 ul ul ul{display:none}#mkreplaced-toc.max-4 ul ul ul ul,#mkreplaced-toc.max4 ul ul ul ul{display:none}#mkreplaced-toc.max-5 ul ul ul ul ul,#mkreplaced-toc.max5 ul ul ul ul ul{display:none}

@media print{
#wrapper #generated-toc-clone,#generated-toc{display:none!important}
}
#wrapper #generated-toc-clone, #wrapper #mkreplaced-toc, #wrapper #generated-toc-clone ul, #wrapper #mkreplaced-toc ul {
    list-style-position: inside
}
#wrapper #generated-toc-clone li.missing, #wrapper #mkreplaced-toc li.missing {
    list-style-type: none!important
}
#wrapper #generated-toc-clone, #wrapper #mkreplaced-toc {
    list-style-type: upper-roman
}
#wrapper #generated-toc-clone>li>ul, #wrapper #mkreplaced-toc>li>ul  {
    list-style-type: decimal
}
#wrapper #generated-toc-clone>li>ul>li>ul, #wrapper #mkreplaced-toc>li>ul>li>ul {
    list-style-type: decimal-leading-zero
}
#wrapper #generated-toc-clone>li>ul>li>ul>li>ul, #wrapper #mkreplaced-toc>li>ul>li>ul>li>ul {
    list-style-type: lower-greek
}
#wrapper #generated-toc-clone>li>ul>li>ul>li>ul>li>ul, #wrapper #mkreplaced-toc>li>ul>li>ul>li>ul>li>ul {
    list-style-type: disc
}
#wrapper #generated-toc-clone>li>ul>li>ul>li>ul>li>ul>li>ul, #wrapper #mkreplaced-toc>li>ul>li>ul>li>ul>li>ul>li>ul {
    list-style-type: square
}
#wrapper #generated-toc-clone,#wrapper #mkreplaced-toc{list-style-position:outside!important;margin-left:3rem;}
</style>
<body>
<?php require 'vendor/autoload.php'; ?>

<p><strong>NOTE:</strong> I do not take any credit. This is a mirror of <a href="https://github.com/Kickball/Awesome-Selfhosted">Kickball/Awesome-Selfhosted</a>.</p>
<p><strong>BUG:</strong> Table of Contents not working at the moment.</p>

<?php 
	$mirror_link = file_get_contents("https://raw.githubusercontent.com/Kickball/awesome-selfhosted/master/README.md");
	use \Michelf\Markdown;
	$html = Markdown::defaultTransform($mirror_link);
	echo $html;
?>
</body>
