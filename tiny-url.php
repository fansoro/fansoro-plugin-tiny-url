<?php

/**
 * Fansoro Tiny Url Plugin
 *
 * (c) Romanenko Sergey / Awilum <awilum@msn.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

// Shortcode: {tiny}
Shortcode::add('tiny', function ($attributes) {

    // Extract
    extract($attributes);

    return (isset($url)) ? tiny($url) : '';
});

/**
 * Takes a long url and uses the TinyURL API to return a shortened version.
 *
 *  <code>
 *      tiny('http:://sitename.com');
 *  </code>
 *
 * @param  string $url Long url
 * @return string
 */
function tiny($url)
{
    return (isset($url)) ? file_get_contents('http://tinyurl.com/api-create.php?url='.$url) : '';
}
