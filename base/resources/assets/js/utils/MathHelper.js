/**
 * Is mapping a numeric range from one to another. If you want to map a number in a range from 200-750 to
 * a range of 0-1, use mapRange(val,200,750,0,1); You can also map reverse ranges like mapRange(val,10,1,1,100); that would map
 *
 * @return {number}       the number mapped to the new range
 */
export function mapRange(value, low1, high1, low2, high2) {
    return low2 + (high2 - low2) * (value - low1) / (high1 - low1);
}


/**
 * Translates "vw" unit to pixels. It gets the current window width and returns
 * how many real pixels a "vw" unit is at the moment.
 */
export function vwToPx(vw) {
    var w = window,
        d = document,
        e = d.documentElement,
        g = d.getElementsByTagName('body')[0],
        x = w.innerWidth || e.clientWidth || g.clientWidth;
    return x / 100 * vw;
}


/**
 * Translates "vh" unit to pixels. It gets the current window height and returns
 * how many real pixels a "vh" unit is at the moment.
 */
export function vhToPx(vh) {
    var w = window,
        d = document,
        e = d.documentElement,
        g = d.getElementsByTagName('body')[0],
        y = w.innerHeight || e.clientHeight || g.clientHeight;
    return y / 100 * vh;
}


/**
 * Returns a number with leading zeroes
 */
export function padNumber(n, width, z) {
    z = z || '0';
    n = n + '';
    return n.length >= width ? n : new Array(width - n.length + 1).join(z) + n;
}


