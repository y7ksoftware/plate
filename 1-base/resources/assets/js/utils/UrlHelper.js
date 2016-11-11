/**
 * Updates a parameter in a URL querystring. If the parameter is not yet there, it gets added. If it is already there,
 * the value gets updated. For example if you have an url: yourdomain.dev?searchFilter=asd&id=17, you can use
 * updateQueryString("searchFilter", "xyz", window.location.href); to replace the search filter. The other parameters stay untouched
 *
 * @param  {string} key   The parameter name to update or add
 * @param  {mixed}  value The new value
 * @param  {string} url   The whole url, e.g.: window.location.href
 * @return {string}       The updated url stirng
 */
export function updateQueryString(key, value, url) {
    if (!url) url = window.location.href;
    let re = new RegExp("([?&])" + key + "=.*?(&|#|$)(.*)", "gi");
    let hash;

    if (re.test(url)) {
        if (typeof value !== 'undefined' && value !== null)
            return url.replace(re, '$1' + key + "=" + value + '$2$3');
        else {
            hash = url.split('#');
            url = hash[0].replace(re, '$1$3').replace(/(&|\?)$/, '');
            if (typeof hash[1] !== 'undefined' && hash[1] !== null)
                url += '#' + hash[1];
            return url;
        }
    }
    else {
        if (typeof value !== 'undefined' && value !== null) {
            let separator = url.indexOf('?') !== -1 ? '&' : '?';
            hash = url.split('#');
            url = hash[0] + separator + key + '=' + value;
            if (typeof hash[1] !== 'undefined' && hash[1] !== null)
                url += '#' + hash[1];
            return url;
        }
        else
            return url;
    }
}


/**
 * Gets the hash params of the url and returns them as an object with attributes.
 * For example the url "yourdomain.dev#param=xy&id=7" will return an object with
 * two attributes called array.parm and array.id.
 *
 * @return {} object with all hash params
 */
export function getParsedHashParams() {
    let hash = window.location.hash.substring(1),
        params = {};

    let vars = hash.split('&');
    for (let i = 0; i < vars.length; i++) {
        if (!vars[i]) {
            continue;
        }
        let pair = vars[i].split('=');
        params[pair[0]] = pair[1];
    }

    return params;
}


