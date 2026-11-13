// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Scrolling of the course index to one of its items.
 *
 * The course index brings the current item into view in its own scroll container (the drawer). Without a
 * scroll container of its own, for example when the styles of the page are disabled, scrollIntoView() would
 * scroll the whole page back to the index each time the current item changes, and the page could not be
 * scrolled any more.
 *
 * @module     core_courseformat/local/courseindex/scroll
 * @copyright  2026 Eric Falcon
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

/**
 * Whether an element of the course index is inside a container that scrolls on its own.
 *
 * @param {HTMLElement} element An element of the course index.
 * @return {boolean}
 */
const hasScrollContainer = (element) => {
    for (let node = element.parentElement; node && node !== document.body; node = node.parentElement) {
        const overflow = window.getComputedStyle(node).overflowY;
        if ((overflow === 'auto' || overflow === 'scroll') && node.scrollHeight > node.clientHeight) {
            return true;
        }
    }
    return false;
};

/**
 * Brings an element of the course index into view, in the scroll container of the index only.
 *
 * @param {HTMLElement} element An element of the course index.
 * @param {Object} [options] The options of scrollIntoView().
 */
export const scrollIntoIndex = (element, options) => {
    if (element && hasScrollContainer(element)) {
        element.scrollIntoView(options);
    }
};
