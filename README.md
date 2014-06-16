Craft-TwigPCRE
==============

Twig PCRE Filters for Craft CMS


##Filters:

 - [preg_filter](https://www.php.net/manual/en/function.preg-filter.php)
 - [preg_grep](https://www.php.net/manual/en/function.preg-grep.php)
 - [preg_match](https://www.php.net/manual/en/function.preg-match.php)
 - [preg_quote](https://www.php.net/manual/en/function.preg-quote.php)
 - [preg_replace](https://www.php.net/manual/en/function.preg-replace.php)
 - [preg_split](https://www.php.net/manual/en/function.preg-split.php)
 
See also: [PHP PCRE-Functions](https://www.php.net/manual/en/ref.pcre.php)


##Examples:

**Basics:**
```twig
|preg_filter(pattern, replacement, limit)

|preg_grep(pattern)

|preg_match(pattern)

|preg_quote(delimiter)

|preg_replace(pattern, replacement, limit)

|preg_split(pattern)
```

Please read the php docs for a more detailed explanation of all functions.


**Usage:**
```twig
{{ "This is a simple example."|preg_replace('/simple/', 'beautiful') }}
```
will output:
``` This is a beautiful example. ```


##Install:

1. Move the `twigpcre` directory into the `craft/plugins/` directory.
2. Go to Settings -> Plugins and enable 'Twig PCRE Filters'.
