<style>

*,
::before,
::after {
	box-sizing: border-box;
}

/**
Use a more readable tab size (opinionated).
*/
html {
	-moz-tab-size: 4;
	-o-tab-size: 4;
	   tab-size: 4;
}

/**
1. Correct the line height in all browsers.
2. Prevent adjustments of font size after orientation changes in iOS.
*/
html {
	line-height: 1.15; /* 1 */
	-webkit-text-size-adjust: 100%; /* 2 */
}

/*
Sections
========
*/

/**
Remove the margin in all browsers.
*/

body {
	margin: 0;
}

/**
Improve consistency of default fonts in all browsers. (https://github.com/sindresorhus/modern-normalize/issues/3)
*/

body {
	font-family:
		system-ui,
		-apple-system, /* Firefox supports this but not yet `system-ui` */
		'Segoe UI',
		Roboto,
		Helvetica,
		Arial,
		sans-serif,
		'Apple Color Emoji',
		'Segoe UI Emoji';
}

/*
Grouping content
================
*/

/**
1. Add the correct height in Firefox.
2. Correct the inheritance of border color in Firefox. (https://bugzilla.mozilla.org/show_bug.cgi?id=190655)
*/

hr {
	height: 0; /* 1 */
	color: inherit; /* 2 */
}

/*
Text-level semantics
====================
*/

/**
Add the correct text decoration in Chrome, Edge, and Safari.
*/

abbr[title] {
	-webkit-text-decoration: underline dotted;
	        text-decoration: underline dotted;
}

/**
Add the correct font weight in Edge and Safari.
*/

b,
strong {
	font-weight: bolder;
}

/**
1. Improve consistency of default fonts in all browsers. (https://github.com/sindresorhus/modern-normalize/issues/3)
2. Correct the odd 'em' font sizing in all browsers.
*/

code,
kbd,
samp,
pre {
	font-family:
		ui-monospace,
		SFMono-Regular,
		Consolas,
		'Liberation Mono',
		Menlo,
		monospace; /* 1 */
	font-size: 1em; /* 2 */
}

/**
Add the correct font size in all browsers.
*/

small {
	font-size: 80%;
}

/**
Prevent 'sub' and 'sup' elements from affecting the line height in all browsers.
*/

sub,
sup {
	font-size: 75%;
	line-height: 0;
	position: relative;
	vertical-align: baseline;
}

sub {
	bottom: -0.25em;
}

sup {
	top: -0.5em;
}

/*
Tabular data
============
*/

/**
1. Remove text indentation from table contents in Chrome and Safari. (https://bugs.chromium.org/p/chromium/issues/detail?id=999088, https://bugs.webkit.org/show_bug.cgi?id=201297)
2. Correct table border color inheritance in all Chrome and Safari. (https://bugs.chromium.org/p/chromium/issues/detail?id=935729, https://bugs.webkit.org/show_bug.cgi?id=195016)
*/

table {
	text-indent: 0; /* 1 */
	border-color: inherit; /* 2 */
}

/*
Forms
=====
*/

/**
1. Change the font styles in all browsers.
2. Remove the margin in Firefox and Safari.
*/

button,
input,
optgroup,
select,
textarea {
	font-family: inherit; /* 1 */
	font-size: 100%; /* 1 */
	line-height: 1.15; /* 1 */
	margin: 0; /* 2 */
}

/**
Remove the inheritance of text transform in Edge and Firefox.
1. Remove the inheritance of text transform in Firefox.
*/

button,
select { /* 1 */
	text-transform: none;
}

/**
Correct the inability to style clickable types in iOS and Safari.
*/

button,
[type='button'],
[type='reset'],
[type='submit'] {
	-webkit-appearance: button;
}

/**
Remove the inner border and padding in Firefox.
*/

::-moz-focus-inner {
	border-style: none;
	padding: 0;
}

/**
Restore the focus styles unset by the previous rule.
*/

:-moz-focusring {
	outline: 1px dotted ButtonText;
}

/**
Remove the additional ':invalid' styles in Firefox.
See: https://github.com/mozilla/gecko-dev/blob/2f9eacd9d3d995c937b4251a5557d95d494c9be1/layout/style/res/forms.css#L728-L737
*/

:-moz-ui-invalid {
	box-shadow: none;
}

/**
Remove the padding so developers are not caught out when they zero out 'fieldset' elements in all browsers.
*/

legend {
	padding: 0;
}

/**
Add the correct vertical alignment in Chrome and Firefox.
*/

progress {
	vertical-align: baseline;
}

/**
Correct the cursor style of increment and decrement buttons in Safari.
*/

::-webkit-inner-spin-button,
::-webkit-outer-spin-button {
	height: auto;
}

/**
1. Correct the odd appearance in Chrome and Safari.
2. Correct the outline style in Safari.
*/

[type='search'] {
	-webkit-appearance: textfield; /* 1 */
	outline-offset: -2px; /* 2 */
}

/**
Remove the inner padding in Chrome and Safari on macOS.
*/

::-webkit-search-decoration {
	-webkit-appearance: none;
}

/**
1. Correct the inability to style clickable types in iOS and Safari.
2. Change font properties to 'inherit' in Safari.
*/

::-webkit-file-upload-button {
	-webkit-appearance: button; /* 1 */
	font: inherit; /* 2 */
}

/*
Interactive
===========
*/

/*
Add the correct display in Chrome and Safari.
*/

summary {
	display: list-item;
}/**
 * Manually forked from SUIT CSS Base: https://github.com/suitcss/base
 * A thin layer on top of normalize.css that provides a starting point more
 * suitable for web applications.
 */

/**
 * Removes the default spacing and border for appropriate elements.
 */

blockquote,
dl,
dd,
h1,
h2,
h3,
h4,
h5,
h6,
hr,
figure,
p,
pre {
  margin: 0;
}

button {
  background-color: transparent;
  background-image: none;
}

fieldset {
  margin: 0;
  padding: 0;
}

ol,
ul {
  list-style: none;
  margin: 0;
  padding: 0;
}

/**
 * Tailwind custom reset styles
 */

/**
 * 1. Use the user's configured `sans` font-family (with Tailwind's default
 *    sans-serif font stack as a fallback) as a sane default.
 * 2. Use Tailwind's default "normal" line-height so the user isn't forced
 *    to override it to ensure consistency even when using the default theme.
 */

html {
  font-family: Nunito, ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"; /* 1 */
  line-height: 1.5; /* 2 */
}


/**
 * Inherit font-family and line-height from `html` so users can set them as
 * a class directly on the `html` element.
 */

body {
  font-family: inherit;
  line-height: inherit;
}

/**
 * 1. Prevent padding and border from affecting element width.
 *
 *    We used to set this in the html element and inherit from
 *    the parent element for everything else. This caused issues
 *    in shadow-dom-enhanced elements like <details> where the content
 *    is wrapped by a div with box-sizing set to `content-box`.
 *
 *    https://github.com/mozdevs/cssremedy/issues/4
 *
 *
 * 2. Allow adding a border to an element by just adding a border-width.
 *
 *    By default, the way the browser specifies that an element should have no
 *    border is by setting it's border-style to `none` in the user-agent
 *    stylesheet.
 *
 *    In order to easily add borders to elements by just setting the `border-width`
 *    property, we change the default border-style for all elements to `solid`, and
 *    use border-width to hide them instead. This way our `border` utilities only
 *    need to set the `border-width` property instead of the entire `border`
 *    shorthand, making our border utilities much more straightforward to compose.
 *
 *    https://github.com/tailwindcss/tailwindcss/pull/116
 */

*,
::before,
::after {
  box-sizing: border-box; /* 1 */
  border-width: 0; /* 2 */
  border-style: solid; /* 2 */
  border-color: currentColor; /* 2 */
}

/*
 * Ensure horizontal rules are visible by default
 */

hr {
  border-top-width: 1px;
}

/**
 * Undo the `border-style: none` reset that Normalize applies to images so that
 * our `border-{width}` utilities have the expected effect.
 *
 * The Normalize reset is unnecessary for us since we default the border-width
 * to 0 on all elements.
 *
 * https://github.com/tailwindcss/tailwindcss/issues/362
 */

img {
  border-style: solid;
}

textarea {
  resize: vertical;
}

input::-moz-placeholder, textarea::-moz-placeholder {
  opacity: 1;
  color: #9ca3af;
}

input:-ms-input-placeholder, textarea:-ms-input-placeholder {
  opacity: 1;
  color: #9ca3af;
}

input::placeholder,
textarea::placeholder {
  opacity: 1;
  color: #9ca3af;
}

button,
[role="button"] {
  cursor: pointer;
}

/**
 * Override legacy focus reset from Normalize with modern Firefox focus styles.
 *
 * This is actually an improvement over the new defaults in Firefox in our testing,
 * as it triggers the better focus styles even for links, which still use a dotted
 * outline in Firefox by default.
 */
 
:-moz-focusring {
	outline: auto;
}

table {
  border-collapse: collapse;
}

h1,
h2,
h3,
h4,
h5,
h6 {
  font-size: inherit;
  font-weight: inherit;
}

/**
 * Reset links to optimize for opt-in styling instead of
 * opt-out.
 */

a {
  color: inherit;
  text-decoration: inherit;
}

/**
 * Reset form element properties that are easy to forget to
 * style explicitly so you don't inadvertently introduce
 * styles that deviate from your design system. These styles
 * supplement a partial reset that is already applied by
 * normalize.css.
 */

button,
input,
optgroup,
select,
textarea {
  padding: 0;
  line-height: inherit;
  color: inherit;
}

/**
 * Use the configured 'mono' font family for elements that
 * are expected to be rendered with a monospace font, falling
 * back to the system monospace stack if there is no configured
 * 'mono' font family.
 */

pre,
code,
kbd,
samp {
  font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
}

/**
 * 1. Make replaced elements `display: block` by default as that's
 *    the behavior you want almost all of the time. Inspired by
 *    CSS Remedy, with `svg` added as well.
 *
 *    https://github.com/mozdevs/cssremedy/issues/14
 * 
 * 2. Add `vertical-align: middle` to align replaced elements more
 *    sensibly by default when overriding `display` by adding a
 *    utility like `inline`.
 *
 *    This can trigger a poorly considered linting error in some
 *    tools but is included by design.
 * 
 *    https://github.com/jensimmons/cssremedy/issues/14#issuecomment-634934210
 */

img,
svg,
video,
canvas,
audio,
iframe,
embed,
object {
  display: block; /* 1 */
  vertical-align: middle; /* 2 */
}

/**
 * Constrain images and videos to the parent width and preserve
 * their intrinsic aspect ratio.
 *
 * https://github.com/mozdevs/cssremedy/issues/14
 */

img,
video {
  max-width: 100%;
  height: auto;
}

/**
 * Ensure the default browser behavior of the `hidden` attribute.
 */

[hidden] {
  display: none;
}

*, ::before, ::after {
	--tw-translate-x: 0;
	--tw-translate-y: 0;
	--tw-rotate: 0;
	--tw-skew-x: 0;
	--tw-skew-y: 0;
	--tw-scale-x: 1;
	--tw-scale-y: 1;
	--tw-transform: translateX(var(--tw-translate-x)) translateY(var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
	--tw-border-opacity: 1;
	border-color: rgba(229, 231, 235, var(--tw-border-opacity));
	--tw-ring-offset-shadow: 0 0 #0000;
	--tw-ring-shadow: 0 0 #0000;
	--tw-shadow: 0 0 #0000;
	--tw-ring-inset: var(--tw-empty,/*!*/ /*!*/);
	--tw-ring-offset-width: 0px;
	--tw-ring-offset-color: #fff;
	--tw-ring-color: rgba(59, 130, 246, 0.5);
	--tw-ring-offset-shadow: 0 0 #0000;
	--tw-ring-shadow: 0 0 #0000;
	--tw-shadow: 0 0 #0000;
	--tw-blur: var(--tw-empty,/*!*/ /*!*/);
	--tw-brightness: var(--tw-empty,/*!*/ /*!*/);
	--tw-contrast: var(--tw-empty,/*!*/ /*!*/);
	--tw-grayscale: var(--tw-empty,/*!*/ /*!*/);
	--tw-hue-rotate: var(--tw-empty,/*!*/ /*!*/);
	--tw-invert: var(--tw-empty,/*!*/ /*!*/);
	--tw-saturate: var(--tw-empty,/*!*/ /*!*/);
	--tw-sepia: var(--tw-empty,/*!*/ /*!*/);
	--tw-drop-shadow: var(--tw-empty,/*!*/ /*!*/);
	--tw-filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow);
	--tw-backdrop-blur: var(--tw-empty,/*!*/ /*!*/);
	--tw-backdrop-brightness: var(--tw-empty,/*!*/ /*!*/);
	--tw-backdrop-contrast: var(--tw-empty,/*!*/ /*!*/);
	--tw-backdrop-grayscale: var(--tw-empty,/*!*/ /*!*/);
	--tw-backdrop-hue-rotate: var(--tw-empty,/*!*/ /*!*/);
	--tw-backdrop-invert: var(--tw-empty,/*!*/ /*!*/);
	--tw-backdrop-opacity: var(--tw-empty,/*!*/ /*!*/);
	--tw-backdrop-saturate: var(--tw-empty,/*!*/ /*!*/);
	--tw-backdrop-sepia: var(--tw-empty,/*!*/ /*!*/);
	--tw-backdrop-filter: var(--tw-backdrop-blur) var(--tw-backdrop-brightness) var(--tw-backdrop-contrast) var(--tw-backdrop-grayscale) var(--tw-backdrop-hue-rotate) var(--tw-backdrop-invert) var(--tw-backdrop-opacity) var(--tw-backdrop-saturate) var(--tw-backdrop-sepia);
}

[type='text'],[type='email'],[type='url'],[type='password'],[type='number'],[type='date'],[type='datetime-local'],[type='month'],[type='search'],[type='tel'],[type='time'],[type='week'],[multiple],textarea,select {
	-webkit-appearance: none;
	   -moz-appearance: none;
	        appearance: none;
	background-color: #fff;
	border-color: #6b7280;
	border-width: 1px;
	border-radius: 0px;
	padding-top: 0.5rem;
	padding-right: 0.75rem;
	padding-bottom: 0.5rem;
	padding-left: 0.75rem;
	font-size: 1rem;
	line-height: 1.5rem;
}

[type='text']:focus, [type='email']:focus, [type='url']:focus, [type='password']:focus, [type='number']:focus, [type='date']:focus, [type='datetime-local']:focus, [type='month']:focus, [type='search']:focus, [type='tel']:focus, [type='time']:focus, [type='week']:focus, [multiple]:focus, textarea:focus, select:focus {
	outline: 2px solid transparent;
	outline-offset: 2px;
	--tw-ring-inset: var(--tw-empty,/*!*/ /*!*/);
	--tw-ring-offset-width: 0px;
	--tw-ring-offset-color: #fff;
	--tw-ring-color: #2563eb;
	--tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
	--tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
	box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
	border-color: #2563eb;
}

input::-moz-placeholder, textarea::-moz-placeholder {
	color: #6b7280;
	opacity: 1;
}

input:-ms-input-placeholder, textarea:-ms-input-placeholder {
	color: #6b7280;
	opacity: 1;
}

input::placeholder,textarea::placeholder {
	color: #6b7280;
	opacity: 1;
}

::-webkit-datetime-edit-fields-wrapper {
	padding: 0;
}

::-webkit-date-and-time-value {
	min-height: 1.5em;
}

select {
	background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%236b7280' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='M6 8l4 4 4-4'/%3e%3c/svg%3e");
	background-position: right 0.5rem center;
	background-repeat: no-repeat;
	background-size: 1.5em 1.5em;
	padding-right: 2.5rem;
	-webkit-print-color-adjust: exact;
	        color-adjust: exact;
}

[multiple] {
	background-image: initial;
	background-position: initial;
	background-repeat: unset;
	background-size: initial;
	padding-right: 0.75rem;
	-webkit-print-color-adjust: unset;
	        color-adjust: unset;
}

[type='checkbox'],[type='radio'] {
	-webkit-appearance: none;
	   -moz-appearance: none;
	        appearance: none;
	padding: 0;
	-webkit-print-color-adjust: exact;
	        color-adjust: exact;
	display: inline-block;
	vertical-align: middle;
	background-origin: border-box;
	-webkit-user-select: none;
	   -moz-user-select: none;
	    -ms-user-select: none;
	        user-select: none;
	flex-shrink: 0;
	height: 1rem;
	width: 1rem;
	color: #2563eb;
	background-color: #fff;
	border-color: #6b7280;
	border-width: 1px;
}

[type='checkbox'] {
	border-radius: 0px;
}

[type='radio'] {
	border-radius: 100%;
}

[type='checkbox']:focus,[type='radio']:focus {
	outline: 2px solid transparent;
	outline-offset: 2px;
	--tw-ring-inset: var(--tw-empty,/*!*/ /*!*/);
	--tw-ring-offset-width: 2px;
	--tw-ring-offset-color: #fff;
	--tw-ring-color: #2563eb;
	--tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
	--tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(2px + var(--tw-ring-offset-width)) var(--tw-ring-color);
	box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
}

[type='checkbox']:checked,[type='radio']:checked {
	border-color: transparent;
	background-color: currentColor;
	background-size: 100% 100%;
	background-position: center;
	background-repeat: no-repeat;
}

[type='checkbox']:checked {
	background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='white' xmlns='http://www.w3.org/2000/svg'%3e%3cpath d='M12.207 4.793a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0l-2-2a1 1 0 011.414-1.414L6.5 9.086l4.293-4.293a1 1 0 011.414 0z'/%3e%3c/svg%3e");
}

[type='radio']:checked {
	background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='white' xmlns='http://www.w3.org/2000/svg'%3e%3ccircle cx='8' cy='8' r='3'/%3e%3c/svg%3e");
}

[type='checkbox']:checked:hover,[type='checkbox']:checked:focus,[type='radio']:checked:hover,[type='radio']:checked:focus {
	border-color: transparent;
	background-color: currentColor;
}

[type='checkbox']:indeterminate {
	background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 16 16'%3e%3cpath stroke='white' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M4 8h8'/%3e%3c/svg%3e");
	border-color: transparent;
	background-color: currentColor;
	background-size: 100% 100%;
	background-position: center;
	background-repeat: no-repeat;
}

[type='checkbox']:indeterminate:hover,[type='checkbox']:indeterminate:focus {
	border-color: transparent;
	background-color: currentColor;
}

[type='file'] {
	background: unset;
	border-color: inherit;
	border-width: 0;
	border-radius: 0;
	padding: 0;
	font-size: unset;
	line-height: inherit;
}

[type='file']:focus {
	outline: 1px auto -webkit-focus-ring-color;
}

[type='text'],[type='email'],[type='url'],[type='password'],[type='number'],[type='date'],[type='datetime-local'],[type='month'],[type='search'],[type='tel'],[type='time'],[type='week'],[multiple],textarea,select {
	-webkit-appearance: none;
	   -moz-appearance: none;
	        appearance: none;
	background-color: #fff;
	border-color: #6b7280;
	border-width: 1px;
	border-radius: 0px;
	padding-top: 0.5rem;
	padding-right: 0.75rem;
	padding-bottom: 0.5rem;
	padding-left: 0.75rem;
	font-size: 1rem;
	line-height: 1.5rem;
}

[type='text']:focus, [type='email']:focus, [type='url']:focus, [type='password']:focus, [type='number']:focus, [type='date']:focus, [type='datetime-local']:focus, [type='month']:focus, [type='search']:focus, [type='tel']:focus, [type='time']:focus, [type='week']:focus, [multiple]:focus, textarea:focus, select:focus {
	outline: 2px solid transparent;
	outline-offset: 2px;
	--tw-ring-inset: var(--tw-empty,/*!*/ /*!*/);
	--tw-ring-offset-width: 0px;
	--tw-ring-offset-color: #fff;
	--tw-ring-color: #2563eb;
	--tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
	--tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
	box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
	border-color: #2563eb;
}

input::-moz-placeholder, textarea::-moz-placeholder {
	color: #6b7280;
	opacity: 1;
}

input:-ms-input-placeholder, textarea:-ms-input-placeholder {
	color: #6b7280;
	opacity: 1;
}

input::placeholder,textarea::placeholder {
	color: #6b7280;
	opacity: 1;
}

::-webkit-datetime-edit-fields-wrapper {
	padding: 0;
}

::-webkit-date-and-time-value {
	min-height: 1.5em;
}

select {
	background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%236b7280' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='M6 8l4 4 4-4'/%3e%3c/svg%3e");
	background-position: right 0.5rem center;
	background-repeat: no-repeat;
	background-size: 1.5em 1.5em;
	padding-right: 2.5rem;
	-webkit-print-color-adjust: exact;
	        color-adjust: exact;
}

[multiple] {
	background-image: initial;
	background-position: initial;
	background-repeat: unset;
	background-size: initial;
	padding-right: 0.75rem;
	-webkit-print-color-adjust: unset;
	        color-adjust: unset;
}

[type='checkbox'],[type='radio'] {
	-webkit-appearance: none;
	   -moz-appearance: none;
	        appearance: none;
	padding: 0;
	-webkit-print-color-adjust: exact;
	        color-adjust: exact;
	display: inline-block;
	vertical-align: middle;
	background-origin: border-box;
	-webkit-user-select: none;
	   -moz-user-select: none;
	    -ms-user-select: none;
	        user-select: none;
	flex-shrink: 0;
	height: 1rem;
	width: 1rem;
	color: #2563eb;
	background-color: #fff;
	border-color: #6b7280;
	border-width: 1px;
}

[type='checkbox'] {
	border-radius: 0px;
}

[type='radio'] {
	border-radius: 100%;
}

[type='checkbox']:focus,[type='radio']:focus {
	outline: 2px solid transparent;
	outline-offset: 2px;
	--tw-ring-inset: var(--tw-empty,/*!*/ /*!*/);
	--tw-ring-offset-width: 2px;
	--tw-ring-offset-color: #fff;
	--tw-ring-color: #2563eb;
	--tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
	--tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(2px + var(--tw-ring-offset-width)) var(--tw-ring-color);
	box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
}

[type='checkbox']:checked,[type='radio']:checked {
	border-color: transparent;
	background-color: currentColor;
	background-size: 100% 100%;
	background-position: center;
	background-repeat: no-repeat;
}

[type='checkbox']:checked {
	background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='white' xmlns='http://www.w3.org/2000/svg'%3e%3cpath d='M12.207 4.793a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0l-2-2a1 1 0 011.414-1.414L6.5 9.086l4.293-4.293a1 1 0 011.414 0z'/%3e%3c/svg%3e");
}

[type='radio']:checked {
	background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='white' xmlns='http://www.w3.org/2000/svg'%3e%3ccircle cx='8' cy='8' r='3'/%3e%3c/svg%3e");
}

[type='checkbox']:checked:hover,[type='checkbox']:checked:focus,[type='radio']:checked:hover,[type='radio']:checked:focus {
	border-color: transparent;
	background-color: currentColor;
}

[type='checkbox']:indeterminate {
	background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 16 16'%3e%3cpath stroke='white' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M4 8h8'/%3e%3c/svg%3e");
	border-color: transparent;
	background-color: currentColor;
	background-size: 100% 100%;
	background-position: center;
	background-repeat: no-repeat;
}

[type='checkbox']:indeterminate:hover,[type='checkbox']:indeterminate:focus {
	border-color: transparent;
	background-color: currentColor;
}

[type='file'] {
	background: unset;
	border-color: inherit;
	border-width: 0;
	border-radius: 0;
	padding: 0;
	font-size: unset;
	line-height: inherit;
}

[type='file']:focus {
	outline: 1px auto -webkit-focus-ring-color;
}

.fixed {
	position: fixed;
}
.absolute {
	position: absolute;
}
.relative {
	position: relative;
}
.sticky {
	position: sticky;
}
.inset-0 {
	top: 0px;
	right: 0px;
	bottom: 0px;
	left: 0px;
}
.inset-y-0 {
	top: 0px;
	bottom: 0px;
}
.left-0 {
	left: 0px;
}
.right-0 {
	right: 0px;
}
.right-3 {
	right: 0.75rem;
}
.top-0 {
	top: 0px;
}
.bottom-0 {
	bottom: 0px;
}
.right-2 {
	right: 0.5rem;
}
.-top-2 {
	top: -0.5rem;
}
.top-2 {
	top: 0.5rem;
}
.left-0\.5 {
	left: 0.125rem;
}
.z-0 {
	z-index: 0;
}
.z-50 {
	z-index: 50;
}
.z-20 {
	z-index: 20;
}
.z-10 {
	z-index: 10;
}
.z-30 {
	z-index: 30;
}
.col-span-6 {
	grid-column: span 6 / span 6;
}
.col-span-2 {
	grid-column: span 2 / span 2;
}
.mx-auto {
	margin-left: auto;
	margin-right: auto;
}
.my-auto {
	margin-top: auto;
	margin-bottom: auto;
}
.mx-0\.5 {
	margin-left: 0.125rem;
	margin-right: 0.125rem;
}
.mx-0 {
	margin-left: 0px;
	margin-right: 0px;
}
.my-2 {
	margin-top: 0.5rem;
	margin-bottom: 0.5rem;
}
.ml-3 {
	margin-left: 0.75rem;
}
.-ml-px {
	margin-left: -1px;
}
.mt-5 {
	margin-top: 1.25rem;
}
.mt-6 {
	margin-top: 1.5rem;
}
.-mr-1 {
	margin-right: -0.25rem;
}
.mt-3 {
	margin-top: 0.75rem;
}
.mt-2 {
	margin-top: 0.5rem;
}
.mt-4 {
	margin-top: 1rem;
}
.mt-1 {
	margin-top: 0.25rem;
}
.ml-2 {
	margin-left: 0.5rem;
}
.mb-6 {
	margin-bottom: 1.5rem;
}
.mr-2 {
	margin-right: 0.5rem;
}
.mt-8 {
	margin-top: 2rem;
}
.ml-4 {
	margin-left: 1rem;
}
.ml-12 {
	margin-left: 3rem;
}
.ml-1 {
	margin-left: 0.25rem;
}
.-mr-0\.5 {
	margin-right: -0.125rem;
}
.-mr-0 {
	margin-right: 0px;
}
.-mr-2 {
	margin-right: -0.5rem;
}
.mr-3 {
	margin-right: 0.75rem;
}
.mt-10 {
	margin-top: 2.5rem;
}
.ml-6 {
	margin-left: 1.5rem;
}
.mb-4 {
	margin-bottom: 1rem;
}
.mb-2 {
	margin-bottom: 0.5rem;
}
.mb-1 {
	margin-bottom: 0.25rem;
}
.mb-8 {
	margin-bottom: 2rem;
}
.ml-5 {
	margin-left: 1.25rem;
}
.-mt-px {
	margin-top: -1px;
}
.mr-4 {
	margin-right: 1rem;
}
.block {
	display: block;
}
.inline-block {
	display: inline-block;
}
.inline {
	display: inline;
}
.flex {
	display: flex;
}
.inline-flex {
	display: inline-flex;
}
.table {
	display: table;
}
.grid {
	display: grid;
}
.hidden {
	display: none;
}
.h-5 {
	height: 1.25rem;
}
.h-16 {
	height: 4rem;
}
.h-12 {
	height: 3rem;
}
.h-6 {
	height: 1.5rem;
}
.h-8 {
	height: 2rem;
}
.h-4 {
	height: 1rem;
}
.h-9 {
	height: 2.25rem;
}
.h-10 {
	height: 2.5rem;
}
.h-20 {
	height: 5rem;
}
.h-52 {
	height: 13rem;
}
.h-3 {
	height: 0.75rem;
}
.h-96 {
	height: 24rem;
}
.h-0 {
	height: 0px;
}
.h-screen {
	height: 100vh;
}
.h-64 {
	height: 16rem;
}
.h-3\.5 {
	height: 0.875rem;
}
.max-h-96 {
	max-height: 24rem;
}
.max-h-60 {
	max-height: 15rem;
}
.min-h-screen {
	min-height: 100vh;
}
.w-5 {
	width: 1.25rem;
}
.w-16 {
	width: 4rem;
}
.w-full {
	width: 100%;
}
.w-0 {
	width: 0px;
}
.w-12 {
	width: 3rem;
}
.w-6 {
	width: 1.5rem;
}
.w-3\/4 {
	width: 75%;
}
.w-48 {
	width: 12rem;
}
.w-auto {
	width: auto;
}
.w-8 {
	width: 2rem;
}
.w-4 {
	width: 1rem;
}
.w-60 {
	width: 15rem;
}
.w-10 {
	width: 2.5rem;
}
.w-20 {
	width: 5rem;
}
.w-7 {
	width: 1.75rem;
}
.w-3 {
	width: 0.75rem;
}
.w-4\/6 {
	width: 66.666667%;
}
.w-1\/3 {
	width: 33.333333%;
}
.w-2\/5 {
	width: 40%;
}
.w-1\/2 {
	width: 50%;
}
.w-5\/6 {
	width: 83.333333%;
}
.w-56 {
	width: 14rem;
}
.w-9 {
	width: 2.25rem;
}
.w-3\.5 {
	width: 0.875rem;
}
.min-w-0 {
	min-width: 0px;
}
.min-w-full {
	min-width: 100%;
}
.max-w-screen-xl {
	max-width: 1280px;
}
.max-w-7xl {
	max-width: 80rem;
}
.max-w-xl {
	max-width: 36rem;
}
.max-w-6xl {
	max-width: 72rem;
}
.max-w-sm {
	max-width: 24rem;
}
.flex-1 {
	flex: 1 1 0%;
}
.flex-shrink-0 {
	flex-shrink: 0;
}
.flex-grow {
	flex-grow: 1;
}
.border-collapse {
	border-collapse: collapse;
}
.origin-top-left {
	transform-origin: top left;
}
.origin-top {
	transform-origin: top;
}
.origin-top-right {
	transform-origin: top right;
}
.translate-y-4 {
	--tw-translate-y: 1rem;
	transform: var(--tw-transform);
}
.translate-y-0 {
	--tw-translate-y: 0px;
	transform: var(--tw-transform);
}
.translate-x-0 {
	--tw-translate-x: 0px;
	transform: var(--tw-transform);
}
.translate-y-2 {
	--tw-translate-y: 0.5rem;
	transform: var(--tw-transform);
}
.scale-95 {
	--tw-scale-x: .95;
	--tw-scale-y: .95;
	transform: var(--tw-transform);
}
.scale-100 {
	--tw-scale-x: 1;
	--tw-scale-y: 1;
	transform: var(--tw-transform);
}
.transform {
	transform: var(--tw-transform);
}
@-webkit-keyframes spin {

	to {
		transform: rotate(360deg);
	}
}
@keyframes spin {

	to {
		transform: rotate(360deg);
	}
}
.animate-spin {
	-webkit-animation: spin 1s linear infinite;
	        animation: spin 1s linear infinite;
}
.cursor-default {
	cursor: default;
}
.cursor-pointer {
	cursor: pointer;
}
.cursor-not-allowed {
	cursor: not-allowed;
}
.select-none {
	-webkit-user-select: none;
	   -moz-user-select: none;
	    -ms-user-select: none;
	        user-select: none;
}
.list-inside {
	list-style-position: inside;
}
.list-disc {
	list-style-type: disc;
}
.appearance-none {
	-webkit-appearance: none;
	   -moz-appearance: none;
	        appearance: none;
}
.grid-cols-6 {
	grid-template-columns: repeat(6, minmax(0, 1fr));
}
.grid-cols-1 {
	grid-template-columns: repeat(1, minmax(0, 1fr));
}
.grid-cols-3 {
	grid-template-columns: repeat(3, minmax(0, 1fr));
}
.grid-cols-7 {
	grid-template-columns: repeat(7, minmax(0, 1fr));
}
.flex-row {
	flex-direction: row;
}
.flex-col {
	flex-direction: column;
}
.flex-col-reverse {
	flex-direction: column-reverse;
}
.flex-wrap {
	flex-wrap: wrap;
}
.items-start {
	align-items: flex-start;
}
.items-end {
	align-items: flex-end;
}
.items-center {
	align-items: center;
}
.justify-end {
	justify-content: flex-end;
}
.justify-center {
	justify-content: center;
}
.justify-between {
	justify-content: space-between;
}
.gap-6 {
	gap: 1.5rem;
}
.gap-4 {
	gap: 1rem;
}
.gap-1 {
	gap: 0.25rem;
}
.gap-3 {
	gap: 0.75rem;
}
.gap-2 {
	gap: 0.5rem;
}
.gap-x-2 {
	-moz-column-gap: 0.5rem;
	     column-gap: 0.5rem;
}
.gap-y-2 {
	row-gap: 0.5rem;
}
.gap-x-3 {
	-moz-column-gap: 0.75rem;
	     column-gap: 0.75rem;
}
.space-x-8 > :not([hidden]) ~ :not([hidden]) {
	--tw-space-x-reverse: 0;
	margin-right: calc(2rem * var(--tw-space-x-reverse));
	margin-left: calc(2rem * calc(1 - var(--tw-space-x-reverse)));
}
.space-y-1 > :not([hidden]) ~ :not([hidden]) {
	--tw-space-y-reverse: 0;
	margin-top: calc(0.25rem * calc(1 - var(--tw-space-y-reverse)));
	margin-bottom: calc(0.25rem * var(--tw-space-y-reverse));
}
.space-y-6 > :not([hidden]) ~ :not([hidden]) {
	--tw-space-y-reverse: 0;
	margin-top: calc(1.5rem * calc(1 - var(--tw-space-y-reverse)));
	margin-bottom: calc(1.5rem * var(--tw-space-y-reverse));
}
.space-y-5 > :not([hidden]) ~ :not([hidden]) {
	--tw-space-y-reverse: 0;
	margin-top: calc(1.25rem * calc(1 - var(--tw-space-y-reverse)));
	margin-bottom: calc(1.25rem * var(--tw-space-y-reverse));
}
.space-x-64 > :not([hidden]) ~ :not([hidden]) {
	--tw-space-x-reverse: 0;
	margin-right: calc(16rem * var(--tw-space-x-reverse));
	margin-left: calc(16rem * calc(1 - var(--tw-space-x-reverse)));
}
.space-y-0 > :not([hidden]) ~ :not([hidden]) {
	--tw-space-y-reverse: 0;
	margin-top: calc(0px * calc(1 - var(--tw-space-y-reverse)));
	margin-bottom: calc(0px * var(--tw-space-y-reverse));
}
.space-x-4 > :not([hidden]) ~ :not([hidden]) {
	--tw-space-x-reverse: 0;
	margin-right: calc(1rem * var(--tw-space-x-reverse));
	margin-left: calc(1rem * calc(1 - var(--tw-space-x-reverse)));
}
.space-y-4 > :not([hidden]) ~ :not([hidden]) {
	--tw-space-y-reverse: 0;
	margin-top: calc(1rem * calc(1 - var(--tw-space-y-reverse)));
	margin-bottom: calc(1rem * var(--tw-space-y-reverse));
}
.space-y-2 > :not([hidden]) ~ :not([hidden]) {
	--tw-space-y-reverse: 0;
	margin-top: calc(0.5rem * calc(1 - var(--tw-space-y-reverse)));
	margin-bottom: calc(0.5rem * var(--tw-space-y-reverse));
}
.divide-y > :not([hidden]) ~ :not([hidden]) {
	--tw-divide-y-reverse: 0;
	border-top-width: calc(1px * calc(1 - var(--tw-divide-y-reverse)));
	border-bottom-width: calc(1px * var(--tw-divide-y-reverse));
}
.divide-x > :not([hidden]) ~ :not([hidden]) {
	--tw-divide-x-reverse: 0;
	border-right-width: calc(1px * var(--tw-divide-x-reverse));
	border-left-width: calc(1px * calc(1 - var(--tw-divide-x-reverse)));
}
.divide-gray-200 > :not([hidden]) ~ :not([hidden]) {
	--tw-divide-opacity: 1;
	border-color: rgba(229, 231, 235, var(--tw-divide-opacity));
}
.divide-secondary-200 > :not([hidden]) ~ :not([hidden]) {
	--tw-divide-opacity: 1;
	border-color: rgba(228, 228, 231, var(--tw-divide-opacity));
}
.self-start {
	align-self: flex-start;
}
.self-center {
	align-self: center;
}
.overflow-hidden {
	overflow: hidden;
}
.overflow-x-auto {
	overflow-x: auto;
}
.overflow-y-auto {
	overflow-y: auto;
}
.overflow-x-hidden {
	overflow-x: hidden;
}
.overflow-y-hidden {
	overflow-y: hidden;
}
.truncate {
	overflow: hidden;
	text-overflow: ellipsis;
	white-space: nowrap;
}
.whitespace-nowrap {
	white-space: nowrap;
}
.rounded-md {
	border-radius: 0.375rem;
}
.rounded-lg {
	border-radius: 0.5rem;
}
.rounded {
	border-radius: 0.25rem;
}
.rounded-full {
	border-radius: 9999px;
}
.rounded-sm {
	border-radius: 0.125rem;
}
.\!rounded-full {
	border-radius: 9999px !important;
}
.rounded-none {
	border-radius: 0px;
}
.rounded-xl {
	border-radius: 0.75rem;
}
.rounded-3xl {
	border-radius: 1.5rem;
}
.rounded-l-md {
	border-top-left-radius: 0.375rem;
	border-bottom-left-radius: 0.375rem;
}
.rounded-r-md {
	border-top-right-radius: 0.375rem;
	border-bottom-right-radius: 0.375rem;
}
.rounded-t-none {
	border-top-left-radius: 0px;
	border-top-right-radius: 0px;
}
.rounded-b-none {
	border-bottom-right-radius: 0px;
	border-bottom-left-radius: 0px;
}
.rounded-t-md {
	border-top-left-radius: 0.375rem;
	border-top-right-radius: 0.375rem;
}
.rounded-tr-lg {
	border-top-right-radius: 0.5rem;
}
.rounded-br-lg {
	border-bottom-right-radius: 0.5rem;
}
.border {
	border-width: 1px;
}
.border-2 {
	border-width: 2px;
}
.border-0 {
	border-width: 0px;
}
.border-b-2 {
	border-bottom-width: 2px;
}
.border-l-4 {
	border-left-width: 4px;
}
.border-t {
	border-top-width: 1px;
}
.border-b {
	border-bottom-width: 1px;
}
.border-r {
	border-right-width: 1px;
}
.border-l {
	border-left-width: 1px;
}
.border-solid {
	border-style: solid;
}
.border-none {
	border-style: none;
}
.border-gray-300 {
	--tw-border-opacity: 1;
	border-color: rgba(209, 213, 219, var(--tw-border-opacity));
}
.border-transparent {
	border-color: transparent;
}
.border-indigo-400 {
	--tw-border-opacity: 1;
	border-color: rgba(129, 140, 248, var(--tw-border-opacity));
}
.border-gray-200 {
	--tw-border-opacity: 1;
	border-color: rgba(229, 231, 235, var(--tw-border-opacity));
}
.border-gray-100 {
	--tw-border-opacity: 1;
	border-color: rgba(243, 244, 246, var(--tw-border-opacity));
}
.border-secondary-300 {
	--tw-border-opacity: 1;
	border-color: rgba(212, 212, 216, var(--tw-border-opacity));
}
.border-secondary-200 {
	--tw-border-opacity: 1;
	border-color: rgba(228, 228, 231, var(--tw-border-opacity));
}
.border-primary-600 {
	--tw-border-opacity: 1;
	border-color: rgba(79, 70, 229, var(--tw-border-opacity));
}
.border-negative-400 {
	--tw-border-opacity: 1;
	border-color: rgba(248, 113, 113, var(--tw-border-opacity));
}
.border-negative-200 {
	--tw-border-opacity: 1;
	border-color: rgba(254, 202, 202, var(--tw-border-opacity));
}
.border-gray-400 {
	--tw-border-opacity: 1;
	border-color: rgba(156, 163, 175, var(--tw-border-opacity));
}
.border-secondary-600 {
	--tw-border-opacity: 1;
	border-color: rgba(82, 82, 91, var(--tw-border-opacity));
}
.border-positive-600 {
	--tw-border-opacity: 1;
	border-color: rgba(5, 150, 105, var(--tw-border-opacity));
}
.border-negative-600 {
	--tw-border-opacity: 1;
	border-color: rgba(220, 38, 38, var(--tw-border-opacity));
}
.border-warning-600 {
	--tw-border-opacity: 1;
	border-color: rgba(217, 119, 6, var(--tw-border-opacity));
}
.border-info-800 {
	--tw-border-opacity: 1;
	border-color: rgba(30, 64, 175, var(--tw-border-opacity));
}
.border-secondary-800 {
	--tw-border-opacity: 1;
	border-color: rgba(39, 39, 42, var(--tw-border-opacity));
}
.border-negative-300 {
	--tw-border-opacity: 1;
	border-color: rgba(252, 165, 165, var(--tw-border-opacity));
}
.bg-white {
	--tw-bg-opacity: 1;
	background-color: rgba(255, 255, 255, var(--tw-bg-opacity));
}
.bg-gray-100 {
	--tw-bg-opacity: 1;
	background-color: rgba(243, 244, 246, var(--tw-bg-opacity));
}
.bg-indigo-500 {
	--tw-bg-opacity: 1;
	background-color: rgba(99, 102, 241, var(--tw-bg-opacity));
}
.bg-red-700 {
	--tw-bg-opacity: 1;
	background-color: rgba(185, 28, 28, var(--tw-bg-opacity));
}
.bg-gray-500 {
	--tw-bg-opacity: 1;
	background-color: rgba(107, 114, 128, var(--tw-bg-opacity));
}
.bg-indigo-600 {
	--tw-bg-opacity: 1;
	background-color: rgba(79, 70, 229, var(--tw-bg-opacity));
}
.bg-red-600 {
	--tw-bg-opacity: 1;
	background-color: rgba(220, 38, 38, var(--tw-bg-opacity));
}
.bg-gray-800 {
	--tw-bg-opacity: 1;
	background-color: rgba(31, 41, 55, var(--tw-bg-opacity));
}
.bg-red-100 {
	--tw-bg-opacity: 1;
	background-color: rgba(254, 226, 226, var(--tw-bg-opacity));
}
.bg-gray-50 {
	--tw-bg-opacity: 1;
	background-color: rgba(249, 250, 251, var(--tw-bg-opacity));
}
.bg-indigo-50 {
	--tw-bg-opacity: 1;
	background-color: rgba(238, 242, 255, var(--tw-bg-opacity));
}
.bg-gray-200 {
	--tw-bg-opacity: 1;
	background-color: rgba(229, 231, 235, var(--tw-bg-opacity));
}
.bg-green-800 {
	--tw-bg-opacity: 1;
	background-color: rgba(6, 95, 70, var(--tw-bg-opacity));
}
.bg-secondary-700 {
	--tw-bg-opacity: 1;
	background-color: rgba(63, 63, 70, var(--tw-bg-opacity));
}
.bg-secondary-400 {
	--tw-bg-opacity: 1;
	background-color: rgba(161, 161, 170, var(--tw-bg-opacity));
}
.bg-secondary-100 {
	--tw-bg-opacity: 1;
	background-color: rgba(244, 244, 245, var(--tw-bg-opacity));
}
.bg-primary-600 {
	--tw-bg-opacity: 1;
	background-color: rgba(79, 70, 229, var(--tw-bg-opacity));
}
.bg-negative-600 {
	--tw-bg-opacity: 1;
	background-color: rgba(220, 38, 38, var(--tw-bg-opacity));
}
.bg-secondary-200 {
	--tw-bg-opacity: 1;
	background-color: rgba(228, 228, 231, var(--tw-bg-opacity));
}
.bg-red-800 {
	--tw-bg-opacity: 1;
	background-color: rgba(153, 27, 27, var(--tw-bg-opacity));
}
.bg-info-500 {
	--tw-bg-opacity: 1;
	background-color: rgba(59, 130, 246, var(--tw-bg-opacity));
}
.bg-blue-500 {
	--tw-bg-opacity: 1;
	background-color: rgba(59, 130, 246, var(--tw-bg-opacity));
}
.bg-blueGray-100 {
	--tw-bg-opacity: 1;
	background-color: rgba(241, 245, 249, var(--tw-bg-opacity));
}
.bg-positive-500 {
	--tw-bg-opacity: 1;
	background-color: rgba(16, 185, 129, var(--tw-bg-opacity));
}
.bg-negative-50 {
	--tw-bg-opacity: 1;
	background-color: rgba(254, 242, 242, var(--tw-bg-opacity));
}
.bg-primary-500 {
	--tw-bg-opacity: 1;
	background-color: rgba(99, 102, 241, var(--tw-bg-opacity));
}
.bg-green-500 {
	--tw-bg-opacity: 1;
	background-color: rgba(16, 185, 129, var(--tw-bg-opacity));
}
.bg-red-500 {
	--tw-bg-opacity: 1;
	background-color: rgba(239, 68, 68, var(--tw-bg-opacity));
}
.bg-secondary-50 {
	--tw-bg-opacity: 1;
	background-color: rgba(250, 250, 250, var(--tw-bg-opacity));
}
.bg-secondary-300 {
	--tw-bg-opacity: 1;
	background-color: rgba(212, 212, 216, var(--tw-bg-opacity));
}
.bg-secondary-500 {
	--tw-bg-opacity: 1;
	background-color: rgba(113, 113, 122, var(--tw-bg-opacity));
}
.bg-positive-50 {
	--tw-bg-opacity: 1;
	background-color: rgba(236, 253, 245, var(--tw-bg-opacity));
}
.bg-info-50 {
	--tw-bg-opacity: 1;
	background-color: rgba(239, 246, 255, var(--tw-bg-opacity));
}
.bg-warning-50 {
	--tw-bg-opacity: 1;
	background-color: rgba(255, 251, 235, var(--tw-bg-opacity));
}
.bg-negative-500 {
	--tw-bg-opacity: 1;
	background-color: rgba(239, 68, 68, var(--tw-bg-opacity));
}
.bg-warning-500 {
	--tw-bg-opacity: 1;
	background-color: rgba(245, 158, 11, var(--tw-bg-opacity));
}
.bg-opacity-25 {
	--tw-bg-opacity: 0.25;
}
.bg-opacity-60 {
	--tw-bg-opacity: 0.6;
}
.bg-opacity-75 {
	--tw-bg-opacity: 0.75;
}
.bg-cover {
	background-size: cover;
}
.bg-center {
	background-position: center;
}
.bg-no-repeat {
	background-repeat: no-repeat;
}
.fill-current {
	fill: currentColor;
}
.object-cover {
	-o-object-fit: cover;
	   object-fit: cover;
}
.p-2 {
	padding: 0.5rem;
}
.p-6 {
	padding: 1.5rem;
}
.p-3 {
	padding: 0.75rem;
}
.p-0 {
	padding: 0px;
}
.p-4 {
	padding: 1rem;
}
.p-8 {
	padding: 2rem;
}
.p-16 {
	padding: 4rem;
}
.p-1 {
	padding: 0.25rem;
}
.p-2\.5 {
	padding: 0.625rem;
}
.px-4 {
	padding-left: 1rem;
	padding-right: 1rem;
}
.py-2 {
	padding-top: 0.5rem;
	padding-bottom: 0.5rem;
}
.px-2 {
	padding-left: 0.5rem;
	padding-right: 0.5rem;
}
.py-5 {
	padding-top: 1.25rem;
	padding-bottom: 1.25rem;
}
.px-6 {
	padding-left: 1.5rem;
	padding-right: 1.5rem;
}
.py-4 {
	padding-top: 1rem;
	padding-bottom: 1rem;
}
.px-3 {
	padding-left: 0.75rem;
	padding-right: 0.75rem;
}
.py-1 {
	padding-top: 0.25rem;
	padding-bottom: 0.25rem;
}
.py-3 {
	padding-top: 0.75rem;
	padding-bottom: 0.75rem;
}
.py-6 {
	padding-top: 1.5rem;
	padding-bottom: 1.5rem;
}
.px-1 {
	padding-left: 0.25rem;
	padding-right: 0.25rem;
}
.py-8 {
	padding-top: 2rem;
	padding-bottom: 2rem;
}
.py-12 {
	padding-top: 3rem;
	padding-bottom: 3rem;
}
.py-10 {
	padding-top: 2.5rem;
	padding-bottom: 2.5rem;
}
.px-2\.5 {
	padding-left: 0.625rem;
	padding-right: 0.625rem;
}
.py-1\.5 {
	padding-top: 0.375rem;
	padding-bottom: 0.375rem;
}
.py-0\.5 {
	padding-top: 0.125rem;
	padding-bottom: 0.125rem;
}
.py-0 {
	padding-top: 0px;
	padding-bottom: 0px;
}
.py-2\.5 {
	padding-top: 0.625rem;
	padding-bottom: 0.625rem;
}
.pt-6 {
	padding-top: 1.5rem;
}
.pt-5 {
	padding-top: 1.25rem;
}
.pb-4 {
	padding-bottom: 1rem;
}
.pt-1 {
	padding-top: 0.25rem;
}
.pl-3 {
	padding-left: 0.75rem;
}
.pr-4 {
	padding-right: 1rem;
}
.pt-2 {
	padding-top: 0.5rem;
}
.pb-3 {
	padding-bottom: 0.75rem;
}
.pt-4 {
	padding-top: 1rem;
}
.pb-1 {
	padding-bottom: 0.25rem;
}
.pl-2 {
	padding-left: 0.5rem;
}
.pr-9 {
	padding-right: 2.25rem;
}
.pl-2\.5 {
	padding-left: 0.625rem;
}
.pl-1 {
	padding-left: 0.25rem;
}
.pr-2\.5 {
	padding-right: 0.625rem;
}
.pr-2 {
	padding-right: 0.5rem;
}
.pr-1 {
	padding-right: 0.25rem;
}
.pr-10 {
	padding-right: 2.5rem;
}
.pr-6 {
	padding-right: 1.5rem;
}
.pl-16 {
	padding-left: 4rem;
}
.pr-14 {
	padding-right: 3.5rem;
}
.pr-0\.5 {
	padding-right: 0.125rem;
}
.pr-0 {
	padding-right: 0px;
}
.pr-8 {
	padding-right: 2rem;
}
.pb-2 {
	padding-bottom: 0.5rem;
}
.pl-6 {
	padding-left: 1.5rem;
}
.pt-8 {
	padding-top: 2rem;
}
.pr-3 {
	padding-right: 0.75rem;
}
.pl-4 {
	padding-left: 1rem;
}
.pt-0\.5 {
	padding-top: 0.125rem;
}
.pt-0 {
	padding-top: 0px;
}
.pl-8 {
	padding-left: 2rem;
}
.text-left {
	text-align: left;
}
.text-center {
	text-align: center;
}
.text-right {
	text-align: right;
}
.font-sans {
	font-family: Nunito, ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
}
.font-mono {
	font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
}
.text-sm {
	font-size: 0.875rem;
	line-height: 1.25rem;
}
.text-xs {
	font-size: 0.75rem;
	line-height: 1rem;
}
.text-lg {
	font-size: 1.125rem;
	line-height: 1.75rem;
}
.text-base {
	font-size: 1rem;
	line-height: 1.5rem;
}
.text-2xl {
	font-size: 1.5rem;
	line-height: 2rem;
}
.text-xl {
	font-size: 1.25rem;
	line-height: 1.75rem;
}
.text-2xs {
	font-size: .5rem;
}
.text-4xl {
	font-size: 2.25rem;
	line-height: 2.5rem;
}
.font-medium {
	font-weight: 500;
}
.font-semibold {
	font-weight: 600;
}
.font-bold {
	font-weight: 700;
}
.font-extrabold {
	font-weight: 800;
}
.font-normal {
	font-weight: 400;
}
.uppercase {
	text-transform: uppercase;
}
.leading-5 {
	line-height: 1.25rem;
}
.leading-7 {
	line-height: 1.75rem;
}
.leading-tight {
	line-height: 1.25;
}
.leading-4 {
	line-height: 1rem;
}
.leading-6 {
	line-height: 1.5rem;
}
.tracking-widest {
	letter-spacing: 0.1em;
}
.tracking-wider {
	letter-spacing: 0.05em;
}
.text-gray-500 {
	--tw-text-opacity: 1;
	color: rgba(107, 114, 128, var(--tw-text-opacity));
}
.text-gray-700 {
	--tw-text-opacity: 1;
	color: rgba(55, 65, 81, var(--tw-text-opacity));
}
.text-gray-600 {
	--tw-text-opacity: 1;
	color: rgba(75, 85, 99, var(--tw-text-opacity));
}
.text-white {
	--tw-text-opacity: 1;
	color: rgba(255, 255, 255, var(--tw-text-opacity));
}
.text-indigo-600 {
	--tw-text-opacity: 1;
	color: rgba(79, 70, 229, var(--tw-text-opacity));
}
.text-red-600 {
	--tw-text-opacity: 1;
	color: rgba(220, 38, 38, var(--tw-text-opacity));
}
.text-gray-900 {
	--tw-text-opacity: 1;
	color: rgba(17, 24, 39, var(--tw-text-opacity));
}
.text-indigo-700 {
	--tw-text-opacity: 1;
	color: rgba(67, 56, 202, var(--tw-text-opacity));
}
.text-green-400 {
	--tw-text-opacity: 1;
	color: rgba(52, 211, 153, var(--tw-text-opacity));
}
.text-gray-400 {
	--tw-text-opacity: 1;
	color: rgba(156, 163, 175, var(--tw-text-opacity));
}
.text-indigo-500 {
	--tw-text-opacity: 1;
	color: rgba(99, 102, 241, var(--tw-text-opacity));
}
.text-gray-800 {
	--tw-text-opacity: 1;
	color: rgba(31, 41, 55, var(--tw-text-opacity));
}
.text-red-500 {
	--tw-text-opacity: 1;
	color: rgba(239, 68, 68, var(--tw-text-opacity));
}
.text-green-600 {
	--tw-text-opacity: 1;
	color: rgba(5, 150, 105, var(--tw-text-opacity));
}
.text-green-500 {
	--tw-text-opacity: 1;
	color: rgba(16, 185, 129, var(--tw-text-opacity));
}
.text-green-300 {
	--tw-text-opacity: 1;
	color: rgba(110, 231, 183, var(--tw-text-opacity));
}
.text-secondary-700 {
	--tw-text-opacity: 1;
	color: rgba(63, 63, 70, var(--tw-text-opacity));
}
.text-primary-600 {
	--tw-text-opacity: 1;
	color: rgba(79, 70, 229, var(--tw-text-opacity));
}
.text-secondary-400 {
	--tw-text-opacity: 1;
	color: rgba(161, 161, 170, var(--tw-text-opacity));
}
.text-secondary-600 {
	--tw-text-opacity: 1;
	color: rgba(82, 82, 91, var(--tw-text-opacity));
}
.text-secondary-500 {
	--tw-text-opacity: 1;
	color: rgba(113, 113, 122, var(--tw-text-opacity));
}
.text-negative-500 {
	--tw-text-opacity: 1;
	color: rgba(239, 68, 68, var(--tw-text-opacity));
}
.text-negative-600 {
	--tw-text-opacity: 1;
	color: rgba(220, 38, 38, var(--tw-text-opacity));
}
.text-negative-400 {
	--tw-text-opacity: 1;
	color: rgba(248, 113, 113, var(--tw-text-opacity));
}
.text-blue-700 {
	--tw-text-opacity: 1;
	color: rgba(29, 78, 216, var(--tw-text-opacity));
}
.text-blue-500 {
	--tw-text-opacity: 1;
	color: rgba(59, 130, 246, var(--tw-text-opacity));
}
.text-red-300 {
	--tw-text-opacity: 1;
	color: rgba(252, 165, 165, var(--tw-text-opacity));
}
.text-negative-800 {
	--tw-text-opacity: 1;
	color: rgba(153, 27, 27, var(--tw-text-opacity));
}
.text-negative-700 {
	--tw-text-opacity: 1;
	color: rgba(185, 28, 28, var(--tw-text-opacity));
}
.text-gray-200 {
	--tw-text-opacity: 1;
	color: rgba(229, 231, 235, var(--tw-text-opacity));
}
.text-gray-300 {
	--tw-text-opacity: 1;
	color: rgba(209, 213, 219, var(--tw-text-opacity));
}
.text-secondary-300 {
	--tw-text-opacity: 1;
	color: rgba(212, 212, 216, var(--tw-text-opacity));
}
.text-secondary-900 {
	--tw-text-opacity: 1;
	color: rgba(24, 24, 27, var(--tw-text-opacity));
}
.text-positive-400 {
	--tw-text-opacity: 1;
	color: rgba(52, 211, 153, var(--tw-text-opacity));
}
.text-info-400 {
	--tw-text-opacity: 1;
	color: rgba(96, 165, 250, var(--tw-text-opacity));
}
.text-warning-400 {
	--tw-text-opacity: 1;
	color: rgba(251, 191, 36, var(--tw-text-opacity));
}
.text-positive-600 {
	--tw-text-opacity: 1;
	color: rgba(5, 150, 105, var(--tw-text-opacity));
}
.text-warning-600 {
	--tw-text-opacity: 1;
	color: rgba(217, 119, 6, var(--tw-text-opacity));
}
.text-info-800 {
	--tw-text-opacity: 1;
	color: rgba(30, 64, 175, var(--tw-text-opacity));
}
.text-secondary-800 {
	--tw-text-opacity: 1;
	color: rgba(39, 39, 42, var(--tw-text-opacity));
}
.text-info-600 {
	--tw-text-opacity: 1;
	color: rgba(37, 99, 235, var(--tw-text-opacity));
}
.text-negative-900 {
	--tw-text-opacity: 1;
	color: rgba(127, 29, 29, var(--tw-text-opacity));
}
.underline {
	text-decoration: underline;
}
.antialiased {
	-webkit-font-smoothing: antialiased;
	-moz-osx-font-smoothing: grayscale;
}
.placeholder-secondary-400::-moz-placeholder {
	--tw-placeholder-opacity: 1;
	color: rgba(161, 161, 170, var(--tw-placeholder-opacity));
}
.placeholder-secondary-400:-ms-input-placeholder {
	--tw-placeholder-opacity: 1;
	color: rgba(161, 161, 170, var(--tw-placeholder-opacity));
}
.placeholder-secondary-400::placeholder {
	--tw-placeholder-opacity: 1;
	color: rgba(161, 161, 170, var(--tw-placeholder-opacity));
}
.placeholder-negative-300::-moz-placeholder {
	--tw-placeholder-opacity: 1;
	color: rgba(252, 165, 165, var(--tw-placeholder-opacity));
}
.placeholder-negative-300:-ms-input-placeholder {
	--tw-placeholder-opacity: 1;
	color: rgba(252, 165, 165, var(--tw-placeholder-opacity));
}
.placeholder-negative-300::placeholder {
	--tw-placeholder-opacity: 1;
	color: rgba(252, 165, 165, var(--tw-placeholder-opacity));
}
.opacity-0 {
	opacity: 0;
}
.opacity-100 {
	opacity: 1;
}
.opacity-75 {
	opacity: 0.75;
}
.opacity-50 {
	opacity: 0.5;
}
.opacity-60 {
	opacity: 0.6;
}
.opacity-25 {
	opacity: 0.25;
}
.shadow-sm {
	--tw-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
	box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}
.shadow {
	--tw-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);
	box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}
.shadow-md {
	--tw-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
	box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}
.shadow-lg {
	--tw-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
	box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}
.shadow-xl {
	--tw-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
	box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}
.blur {
	--tw-blur: blur(8px);
	filter: var(--tw-filter);
}
.filter {
	filter: var(--tw-filter);
}

.transition {
	transition-property: background-color, border-color, color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-backdrop-filter;
	transition-property: background-color, border-color, color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;
	transition-property: background-color, border-color, color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-backdrop-filter;
	transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
	transition-duration: 150ms;
}
.transition-all {
	transition-property: all;
	transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
	transition-duration: 150ms;
}
.transition-colors {
	transition-property: background-color, border-color, color, fill, stroke;
	transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
	transition-duration: 150ms;
}
.transition-opacity {
	transition-property: opacity;
	transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
	transition-duration: 150ms;
}
.duration-150 {
	transition-duration: 150ms;
}
.duration-200 {
	transition-duration: 200ms;
}
.duration-75 {
	transition-duration: 75ms;
}
.duration-300 {
	transition-duration: 300ms;
}
.duration-100 {
	transition-duration: 100ms;
}
.ease-in-out {
	transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
}
.ease-out {
	transition-timing-function: cubic-bezier(0, 0, 0.2, 1);
}
.ease-in {
	transition-timing-function: cubic-bezier(0.4, 0, 1, 1);
}
.ease-linear {
	transition-timing-function: linear;
}
.hide-scrollbar::-webkit-scrollbar {
	display: none;
}
.hide-scrollbar {
	-ms-overflow-style: none;
	scrollbar-width: none;
}
.checked\:translate-x-3:checked {
	--tw-translate-x: 0.75rem;
	transform: var(--tw-transform);
}
.checked\:translate-x-3\.5:checked {
	--tw-translate-x: 0.875rem;
	transform: var(--tw-transform);
}
.checked\:translate-x-4:checked {
	--tw-translate-x: 1rem;
	transform: var(--tw-transform);
}
.checked\:bg-none:checked {
	background-image: none;
}
.checked\:text-white:checked {
	--tw-text-opacity: 1;
	color: rgba(255, 255, 255, var(--tw-text-opacity));
}
.hover\:border-gray-300:hover {
	--tw-border-opacity: 1;
	border-color: rgba(209, 213, 219, var(--tw-border-opacity));
}
.hover\:bg-indigo-600:hover {
	--tw-bg-opacity: 1;
	background-color: rgba(79, 70, 229, var(--tw-bg-opacity));
}
.hover\:bg-red-600:hover {
	--tw-bg-opacity: 1;
	background-color: rgba(220, 38, 38, var(--tw-bg-opacity));
}
.hover\:bg-gray-700:hover {
	--tw-bg-opacity: 1;
	background-color: rgba(55, 65, 81, var(--tw-bg-opacity));
}
.hover\:bg-red-500:hover {
	--tw-bg-opacity: 1;
	background-color: rgba(239, 68, 68, var(--tw-bg-opacity));
}
.hover\:bg-gray-100:hover {
	--tw-bg-opacity: 1;
	background-color: rgba(243, 244, 246, var(--tw-bg-opacity));
}
.hover\:bg-gray-50:hover {
	--tw-bg-opacity: 1;
	background-color: rgba(249, 250, 251, var(--tw-bg-opacity));
}
.hover\:bg-green-700:hover {
	--tw-bg-opacity: 1;
	background-color: rgba(4, 120, 87, var(--tw-bg-opacity));
}
.hover\:bg-secondary-900:hover {
	--tw-bg-opacity: 1;
	background-color: rgba(24, 24, 27, var(--tw-bg-opacity));
}
.hover\:bg-secondary-100:hover {
	--tw-bg-opacity: 1;
	background-color: rgba(244, 244, 245, var(--tw-bg-opacity));
}
.hover\:bg-primary-100:hover {
	--tw-bg-opacity: 1;
	background-color: rgba(224, 231, 255, var(--tw-bg-opacity));
}
.hover\:bg-primary-600:hover {
	--tw-bg-opacity: 1;
	background-color: rgba(79, 70, 229, var(--tw-bg-opacity));
}
.hover\:bg-info-600:hover {
	--tw-bg-opacity: 1;
	background-color: rgba(37, 99, 235, var(--tw-bg-opacity));
}
.hover\:bg-negative-500:hover {
	--tw-bg-opacity: 1;
	background-color: rgba(239, 68, 68, var(--tw-bg-opacity));
}
.hover\:bg-primary-500:hover {
	--tw-bg-opacity: 1;
	background-color: rgba(99, 102, 241, var(--tw-bg-opacity));
}
.hover\:bg-positive-600:hover {
	--tw-bg-opacity: 1;
	background-color: rgba(5, 150, 105, var(--tw-bg-opacity));
}
.hover\:bg-secondary-50:hover {
	--tw-bg-opacity: 1;
	background-color: rgba(250, 250, 250, var(--tw-bg-opacity));
}
.hover\:bg-primary-50:hover {
	--tw-bg-opacity: 1;
	background-color: rgba(238, 242, 255, var(--tw-bg-opacity));
}
.hover\:bg-positive-50:hover {
	--tw-bg-opacity: 1;
	background-color: rgba(236, 253, 245, var(--tw-bg-opacity));
}
.hover\:bg-negative-50:hover {
	--tw-bg-opacity: 1;
	background-color: rgba(254, 242, 242, var(--tw-bg-opacity));
}
.hover\:bg-warning-50:hover {
	--tw-bg-opacity: 1;
	background-color: rgba(255, 251, 235, var(--tw-bg-opacity));
}
.hover\:bg-info-50:hover {
	--tw-bg-opacity: 1;
	background-color: rgba(239, 246, 255, var(--tw-bg-opacity));
}
.hover\:bg-secondary-200:hover {
	--tw-bg-opacity: 1;
	background-color: rgba(228, 228, 231, var(--tw-bg-opacity));
}
.hover\:bg-positive-100:hover {
	--tw-bg-opacity: 1;
	background-color: rgba(209, 250, 229, var(--tw-bg-opacity));
}
.hover\:bg-negative-100:hover {
	--tw-bg-opacity: 1;
	background-color: rgba(254, 226, 226, var(--tw-bg-opacity));
}
.hover\:bg-warning-100:hover {
	--tw-bg-opacity: 1;
	background-color: rgba(254, 243, 199, var(--tw-bg-opacity));
}
.hover\:bg-info-100:hover {
	--tw-bg-opacity: 1;
	background-color: rgba(219, 234, 254, var(--tw-bg-opacity));
}
.hover\:bg-secondary-600:hover {
	--tw-bg-opacity: 1;
	background-color: rgba(82, 82, 91, var(--tw-bg-opacity));
}
.hover\:bg-negative-600:hover {
	--tw-bg-opacity: 1;
	background-color: rgba(220, 38, 38, var(--tw-bg-opacity));
}
.hover\:bg-warning-600:hover {
	--tw-bg-opacity: 1;
	background-color: rgba(217, 119, 6, var(--tw-bg-opacity));
}
.hover\:text-gray-500:hover {
	--tw-text-opacity: 1;
	color: rgba(107, 114, 128, var(--tw-text-opacity));
}
.hover\:text-gray-400:hover {
	--tw-text-opacity: 1;
	color: rgba(156, 163, 175, var(--tw-text-opacity));
}
.hover\:text-gray-700:hover {
	--tw-text-opacity: 1;
	color: rgba(55, 65, 81, var(--tw-text-opacity));
}
.hover\:text-gray-800:hover {
	--tw-text-opacity: 1;
	color: rgba(31, 41, 55, var(--tw-text-opacity));
}
.hover\:text-gray-900:hover {
	--tw-text-opacity: 1;
	color: rgba(17, 24, 39, var(--tw-text-opacity));
}
.hover\:text-negative-500:hover {
	--tw-text-opacity: 1;
	color: rgba(239, 68, 68, var(--tw-text-opacity));
}
.hover\:text-white:hover {
	--tw-text-opacity: 1;
	color: rgba(255, 255, 255, var(--tw-text-opacity));
}
.hover\:text-secondary-500:hover {
	--tw-text-opacity: 1;
	color: rgba(113, 113, 122, var(--tw-text-opacity));
}
.hover\:text-negative-400:hover {
	--tw-text-opacity: 1;
	color: rgba(248, 113, 113, var(--tw-text-opacity));
}
.hover\:text-blue-700:hover {
	--tw-text-opacity: 1;
	color: rgba(29, 78, 216, var(--tw-text-opacity));
}
.hover\:text-secondary-700:hover {
	--tw-text-opacity: 1;
	color: rgba(63, 63, 70, var(--tw-text-opacity));
}
.hover\:text-primary-500:hover {
	--tw-text-opacity: 1;
	color: rgba(99, 102, 241, var(--tw-text-opacity));
}
.hover\:text-secondary-900:hover {
	--tw-text-opacity: 1;
	color: rgba(24, 24, 27, var(--tw-text-opacity));
}
.hover\:shadow-sm:hover {
	--tw-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
	box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}
.hover\:shadow-xl:hover {
	--tw-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
	box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}
.focus\:z-10:focus {
	z-index: 10;
}
.focus\:border-blue-300:focus {
	--tw-border-opacity: 1;
	border-color: rgba(147, 197, 253, var(--tw-border-opacity));
}
.focus\:border-gray-900:focus {
	--tw-border-opacity: 1;
	border-color: rgba(17, 24, 39, var(--tw-border-opacity));
}
.focus\:border-indigo-300:focus {
	--tw-border-opacity: 1;
	border-color: rgba(165, 180, 252, var(--tw-border-opacity));
}
.focus\:border-red-700:focus {
	--tw-border-opacity: 1;
	border-color: rgba(185, 28, 28, var(--tw-border-opacity));
}
.focus\:border-indigo-700:focus {
	--tw-border-opacity: 1;
	border-color: rgba(67, 56, 202, var(--tw-border-opacity));
}
.focus\:border-gray-300:focus {
	--tw-border-opacity: 1;
	border-color: rgba(209, 213, 219, var(--tw-border-opacity));
}
.focus\:border-green-900:focus {
	--tw-border-opacity: 1;
	border-color: rgba(6, 78, 59, var(--tw-border-opacity));
}
.focus\:border-primary-300:focus {
	--tw-border-opacity: 1;
	border-color: rgba(165, 180, 252, var(--tw-border-opacity));
}
.focus\:border-primary-500:focus {
	--tw-border-opacity: 1;
	border-color: rgba(99, 102, 241, var(--tw-border-opacity));
}
.focus\:border-negative-400:focus {
	--tw-border-opacity: 1;
	border-color: rgba(248, 113, 113, var(--tw-border-opacity));
}
.focus\:border-primary-600:focus {
	--tw-border-opacity: 1;
	border-color: rgba(79, 70, 229, var(--tw-border-opacity));
}
.focus\:border-transparent:focus {
	border-color: transparent;
}
.focus\:border-negative-500:focus {
	--tw-border-opacity: 1;
	border-color: rgba(239, 68, 68, var(--tw-border-opacity));
}
.focus\:bg-indigo-600:focus {
	--tw-bg-opacity: 1;
	background-color: rgba(79, 70, 229, var(--tw-bg-opacity));
}
.focus\:bg-red-600:focus {
	--tw-bg-opacity: 1;
	background-color: rgba(220, 38, 38, var(--tw-bg-opacity));
}
.focus\:bg-gray-100:focus {
	--tw-bg-opacity: 1;
	background-color: rgba(243, 244, 246, var(--tw-bg-opacity));
}
.focus\:bg-indigo-100:focus {
	--tw-bg-opacity: 1;
	background-color: rgba(224, 231, 255, var(--tw-bg-opacity));
}
.focus\:bg-gray-50:focus {
	--tw-bg-opacity: 1;
	background-color: rgba(249, 250, 251, var(--tw-bg-opacity));
}
.focus\:bg-primary-100:focus {
	--tw-bg-opacity: 1;
	background-color: rgba(224, 231, 255, var(--tw-bg-opacity));
}
.focus\:text-gray-700:focus {
	--tw-text-opacity: 1;
	color: rgba(55, 65, 81, var(--tw-text-opacity));
}
.focus\:text-indigo-800:focus {
	--tw-text-opacity: 1;
	color: rgba(55, 48, 163, var(--tw-text-opacity));
}
.focus\:text-gray-800:focus {
	--tw-text-opacity: 1;
	color: rgba(31, 41, 55, var(--tw-text-opacity));
}
.focus\:text-gray-500:focus {
	--tw-text-opacity: 1;
	color: rgba(107, 114, 128, var(--tw-text-opacity));
}
.focus\:text-primary-800:focus {
	--tw-text-opacity: 1;
	color: rgba(55, 48, 163, var(--tw-text-opacity));
}
.focus\:underline:focus {
	text-decoration: underline;
}
.focus\:shadow-md:focus {
	--tw-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
	box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}
.focus\:outline-none:focus {
	outline: 2px solid transparent;
	outline-offset: 2px;
}
.focus\:ring:focus {
	--tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
	--tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color);
	box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
}
.focus\:ring-2:focus {
	--tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
	--tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(2px + var(--tw-ring-offset-width)) var(--tw-ring-color);
	box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
}
.focus\:ring-0:focus {
	--tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
	--tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(0px + var(--tw-ring-offset-width)) var(--tw-ring-color);
	box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
}
.focus\:ring-1:focus {
	--tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
	--tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
	box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
}
.focus\:ring-gray-300:focus {
	--tw-ring-opacity: 1;
	--tw-ring-color: rgba(209, 213, 219, var(--tw-ring-opacity));
}
.focus\:ring-indigo-200:focus {
	--tw-ring-opacity: 1;
	--tw-ring-color: rgba(199, 210, 254, var(--tw-ring-opacity));
}
.focus\:ring-red-200:focus {
	--tw-ring-opacity: 1;
	--tw-ring-color: rgba(254, 202, 202, var(--tw-ring-opacity));
}
.focus\:ring-blue-200:focus {
	--tw-ring-opacity: 1;
	--tw-ring-color: rgba(191, 219, 254, var(--tw-ring-opacity));
}
.focus\:ring-green-300:focus {
	--tw-ring-opacity: 1;
	--tw-ring-color: rgba(110, 231, 183, var(--tw-ring-opacity));
}
.focus\:ring-primary-600:focus {
	--tw-ring-opacity: 1;
	--tw-ring-color: rgba(79, 70, 229, var(--tw-ring-opacity));
}
.focus\:ring-primary-500:focus {
	--tw-ring-opacity: 1;
	--tw-ring-color: rgba(99, 102, 241, var(--tw-ring-opacity));
}
.focus\:ring-negative-500:focus {
	--tw-ring-opacity: 1;
	--tw-ring-color: rgba(239, 68, 68, var(--tw-ring-opacity));
}
.focus\:ring-transparent:focus {
	--tw-ring-color: transparent;
}
.focus\:ring-secondary-200:focus {
	--tw-ring-opacity: 1;
	--tw-ring-color: rgba(228, 228, 231, var(--tw-ring-opacity));
}
.focus\:ring-opacity-50:focus {
	--tw-ring-opacity: 0.5;
}
.focus\:ring-offset-2:focus {
	--tw-ring-offset-width: 2px;
}
.focus\:ring-offset-0:focus {
	--tw-ring-offset-width: 0px;
}
.active\:bg-gray-100:active {
	--tw-bg-opacity: 1;
	background-color: rgba(243, 244, 246, var(--tw-bg-opacity));
}
.active\:bg-gray-900:active {
	--tw-bg-opacity: 1;
	background-color: rgba(17, 24, 39, var(--tw-bg-opacity));
}
.active\:bg-red-600:active {
	--tw-bg-opacity: 1;
	background-color: rgba(220, 38, 38, var(--tw-bg-opacity));
}
.active\:bg-gray-50:active {
	--tw-bg-opacity: 1;
	background-color: rgba(249, 250, 251, var(--tw-bg-opacity));
}
.active\:bg-green-900:active {
	--tw-bg-opacity: 1;
	background-color: rgba(6, 78, 59, var(--tw-bg-opacity));
}
.active\:text-gray-700:active {
	--tw-text-opacity: 1;
	color: rgba(55, 65, 81, var(--tw-text-opacity));
}
.active\:text-gray-500:active {
	--tw-text-opacity: 1;
	color: rgba(107, 114, 128, var(--tw-text-opacity));
}
.active\:text-gray-800:active {
	--tw-text-opacity: 1;
	color: rgba(31, 41, 55, var(--tw-text-opacity));
}
.disabled\:cursor-not-allowed:disabled {
	cursor: not-allowed;
}
.disabled\:opacity-25:disabled {
	opacity: 0.25;
}
.disabled\:opacity-60:disabled {
	opacity: 0.6;
}
.group:hover .group-hover\:text-white {
	--tw-text-opacity: 1;
	color: rgba(255, 255, 255, var(--tw-text-opacity));
}
.peer:checked ~ .peer-checked\:bg-primary-600 {
	--tw-bg-opacity: 1;
	background-color: rgba(79, 70, 229, var(--tw-bg-opacity));
}
.peer:focus ~ .peer-focus\:ring-2 {
	--tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
	--tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(2px + var(--tw-ring-offset-width)) var(--tw-ring-color);
	box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
}
.peer:focus ~ .peer-focus\:ring-negative-600 {
	--tw-ring-opacity: 1;
	--tw-ring-color: rgba(220, 38, 38, var(--tw-ring-opacity));
}
.peer:focus ~ .peer-focus\:ring-primary-600 {
	--tw-ring-opacity: 1;
	--tw-ring-color: rgba(79, 70, 229, var(--tw-ring-opacity));
}
.peer:focus ~ .peer-focus\:ring-offset-2 {
	--tw-ring-offset-width: 2px;
}
.dark .dark\:border-0 {
	border-width: 0px;
}
.dark .dark\:border {
	border-width: 1px;
}
.dark .dark\:border-none {
	border-style: none;
}
.dark .dark\:border-secondary-500 {
	--tw-border-opacity: 1;
	border-color: rgba(113, 113, 122, var(--tw-border-opacity));
}
.dark .dark\:border-secondary-600 {
	--tw-border-opacity: 1;
	border-color: rgba(82, 82, 91, var(--tw-border-opacity));
}
.dark .dark\:border-gray-400 {
	--tw-border-opacity: 1;
	border-color: rgba(156, 163, 175, var(--tw-border-opacity));
}
.dark .dark\:border-secondary-400 {
	--tw-border-opacity: 1;
	border-color: rgba(161, 161, 170, var(--tw-border-opacity));
}
.dark .dark\:border-negative-600 {
	--tw-border-opacity: 1;
	border-color: rgba(220, 38, 38, var(--tw-border-opacity));
}
.dark .dark\:border-negative-700 {
	--tw-border-opacity: 1;
	border-color: rgba(185, 28, 28, var(--tw-border-opacity));
}
.dark .dark\:border-gray-700 {
	--tw-border-opacity: 1;
	border-color: rgba(55, 65, 81, var(--tw-border-opacity));
}
.dark .dark\:border-secondary-700 {
	--tw-border-opacity: 1;
	border-color: rgba(63, 63, 70, var(--tw-border-opacity));
}
.dark .dark\:bg-secondary-700 {
	--tw-bg-opacity: 1;
	background-color: rgba(63, 63, 70, var(--tw-bg-opacity));
}
.dark .dark\:bg-secondary-600 {
	--tw-bg-opacity: 1;
	background-color: rgba(82, 82, 91, var(--tw-bg-opacity));
}
.dark .dark\:bg-secondary-800 {
	--tw-bg-opacity: 1;
	background-color: rgba(39, 39, 42, var(--tw-bg-opacity));
}
.dark .dark\:bg-secondary-200 {
	--tw-bg-opacity: 1;
	background-color: rgba(228, 228, 231, var(--tw-bg-opacity));
}
.dark .dark\:bg-negative-700 {
	--tw-bg-opacity: 1;
	background-color: rgba(185, 28, 28, var(--tw-bg-opacity));
}
.dark .dark\:bg-info-700 {
	--tw-bg-opacity: 1;
	background-color: rgba(29, 78, 216, var(--tw-bg-opacity));
}
.dark .dark\:bg-positive-700 {
	--tw-bg-opacity: 1;
	background-color: rgba(4, 120, 87, var(--tw-bg-opacity));
}
.dark .dark\:bg-primary-700 {
	--tw-bg-opacity: 1;
	background-color: rgba(67, 56, 202, var(--tw-bg-opacity));
}
.dark .dark\:bg-gray-900 {
	--tw-bg-opacity: 1;
	background-color: rgba(17, 24, 39, var(--tw-bg-opacity));
}
.dark .dark\:bg-gray-800 {
	--tw-bg-opacity: 1;
	background-color: rgba(31, 41, 55, var(--tw-bg-opacity));
}
.dark .dark\:bg-transparent {
	background-color: transparent;
}
.dark .dark\:bg-warning-700 {
	--tw-bg-opacity: 1;
	background-color: rgba(180, 83, 9, var(--tw-bg-opacity));
}
.dark .dark\:bg-opacity-60 {
	--tw-bg-opacity: 0.6;
}
.dark .dark\:text-gray-400 {
	--tw-text-opacity: 1;
	color: rgba(156, 163, 175, var(--tw-text-opacity));
}
.dark .dark\:text-secondary-600 {
	--tw-text-opacity: 1;
	color: rgba(82, 82, 91, var(--tw-text-opacity));
}
.dark .dark\:text-secondary-400 {
	--tw-text-opacity: 1;
	color: rgba(161, 161, 170, var(--tw-text-opacity));
}
.dark .dark\:text-secondary-500 {
	--tw-text-opacity: 1;
	color: rgba(113, 113, 122, var(--tw-text-opacity));
}
.dark .dark\:text-negative-600 {
	--tw-text-opacity: 1;
	color: rgba(220, 38, 38, var(--tw-text-opacity));
}
.dark .dark\:text-gray-500 {
	--tw-text-opacity: 1;
	color: rgba(107, 114, 128, var(--tw-text-opacity));
}
.dark .dark\:text-white {
	--tw-text-opacity: 1;
	color: rgba(255, 255, 255, var(--tw-text-opacity));
}
.dark .dark\:text-negative-500 {
	--tw-text-opacity: 1;
	color: rgba(239, 68, 68, var(--tw-text-opacity));
}
.dark .dark\:placeholder-secondary-500::-moz-placeholder {
	--tw-placeholder-opacity: 1;
	color: rgba(113, 113, 122, var(--tw-placeholder-opacity));
}
.dark .dark\:placeholder-secondary-500:-ms-input-placeholder {
	--tw-placeholder-opacity: 1;
	color: rgba(113, 113, 122, var(--tw-placeholder-opacity));
}
.dark .dark\:placeholder-secondary-500::placeholder {
	--tw-placeholder-opacity: 1;
	color: rgba(113, 113, 122, var(--tw-placeholder-opacity));
}
.dark .dark\:placeholder-negative-500::-moz-placeholder {
	--tw-placeholder-opacity: 1;
	color: rgba(239, 68, 68, var(--tw-placeholder-opacity));
}
.dark .dark\:placeholder-negative-500:-ms-input-placeholder {
	--tw-placeholder-opacity: 1;
	color: rgba(239, 68, 68, var(--tw-placeholder-opacity));
}
.dark .dark\:placeholder-negative-500::placeholder {
	--tw-placeholder-opacity: 1;
	color: rgba(239, 68, 68, var(--tw-placeholder-opacity));
}
.dark .dark\:ring-secondary-700 {
	--tw-ring-opacity: 1;
	--tw-ring-color: rgba(63, 63, 70, var(--tw-ring-opacity));
}
.dark .dark\:ring-secondary-600 {
	--tw-ring-opacity: 1;
	--tw-ring-color: rgba(82, 82, 91, var(--tw-ring-opacity));
}
.dark .dark\:ring-negative-600 {
	--tw-ring-opacity: 1;
	--tw-ring-color: rgba(220, 38, 38, var(--tw-ring-opacity));
}
.dark .dark\:ring-info-700 {
	--tw-ring-opacity: 1;
	--tw-ring-color: rgba(29, 78, 216, var(--tw-ring-opacity));
}
.dark .dark\:ring-positive-700 {
	--tw-ring-opacity: 1;
	--tw-ring-color: rgba(4, 120, 87, var(--tw-ring-opacity));
}
.dark .dark\:ring-primary-700 {
	--tw-ring-opacity: 1;
	--tw-ring-color: rgba(67, 56, 202, var(--tw-ring-opacity));
}
.dark .dark\:ring-negative-700 {
	--tw-ring-opacity: 1;
	--tw-ring-color: rgba(185, 28, 28, var(--tw-ring-opacity));
}
.dark .dark\:ring-warning-700 {
	--tw-ring-opacity: 1;
	--tw-ring-color: rgba(180, 83, 9, var(--tw-ring-opacity));
}
.dark .dark\:ring-offset-secondary-800 {
	--tw-ring-offset-color: #27272a;
}
.dark .dark\:checked\:border-secondary-600:checked {
	--tw-border-opacity: 1;
	border-color: rgba(82, 82, 91, var(--tw-border-opacity));
}
.dark .dark\:checked\:border-negative-700:checked {
	--tw-border-opacity: 1;
	border-color: rgba(185, 28, 28, var(--tw-border-opacity));
}
.dark .dark\:checked\:bg-negative-700:checked {
	--tw-bg-opacity: 1;
	background-color: rgba(185, 28, 28, var(--tw-bg-opacity));
}
.dark .dark\:hover\:bg-secondary-700:hover {
	--tw-bg-opacity: 1;
	background-color: rgba(63, 63, 70, var(--tw-bg-opacity));
}
.dark .dark\:hover\:text-secondary-100:hover {
	--tw-text-opacity: 1;
	color: rgba(244, 244, 245, var(--tw-text-opacity));
}
.dark .dark\:hover\:text-secondary-600:hover {
	--tw-text-opacity: 1;
	color: rgba(82, 82, 91, var(--tw-text-opacity));
}
.dark .dark\:focus\:border-secondary-500:focus {
	--tw-border-opacity: 1;
	border-color: rgba(113, 113, 122, var(--tw-border-opacity));
}
.dark .dark\:focus\:border-negative-600:focus {
	--tw-border-opacity: 1;
	border-color: rgba(220, 38, 38, var(--tw-border-opacity));
}
.dark .dark\:focus\:bg-secondary-700:focus {
	--tw-bg-opacity: 1;
	background-color: rgba(63, 63, 70, var(--tw-bg-opacity));
}
.dark .dark\:focus\:ring-secondary-600:focus {
	--tw-ring-opacity: 1;
	--tw-ring-color: rgba(82, 82, 91, var(--tw-ring-opacity));
}
.dark .dark\:focus\:ring-secondary-400:focus {
	--tw-ring-opacity: 1;
	--tw-ring-color: rgba(161, 161, 170, var(--tw-ring-opacity));
}
.dark .dark\:focus\:ring-offset-secondary-800:focus {
	--tw-ring-offset-color: #27272a;
}
.dark .peer:checked ~ .dark\:peer-checked\:bg-secondary-700 {
	--tw-bg-opacity: 1;
	background-color: rgba(63, 63, 70, var(--tw-bg-opacity));
}
.dark .peer:focus ~ .dark\:peer-focus\:ring-negative-700 {
	--tw-ring-opacity: 1;
	--tw-ring-color: rgba(185, 28, 28, var(--tw-ring-opacity));
}
.dark .peer:focus ~ .dark\:peer-focus\:ring-secondary-600 {
	--tw-ring-opacity: 1;
	--tw-ring-color: rgba(82, 82, 91, var(--tw-ring-opacity));
}
.dark .peer:focus ~ .dark\:peer-focus\:ring-offset-secondary-800 {
	--tw-ring-offset-color: #27272a;
}
@media (min-width: 640px) {

	.sm\:absolute {
		position: absolute;
	}

	.sm\:inset-auto {
		top: auto;
		right: auto;
		bottom: auto;
		left: auto;
	}

	.sm\:top-10 {
		top: 2.5rem;
	}

	.sm\:right-0 {
		right: 0px;
	}

	.sm\:top-0 {
		top: 0px;
	}

	.sm\:order-last {
		order: 9999;
	}

	.sm\:col-span-4 {
		grid-column: span 4 / span 4;
	}

	.sm\:mx-0 {
		margin-left: 0px;
		margin-right: 0px;
	}

	.sm\:mx-auto {
		margin-left: auto;
		margin-right: auto;
	}

	.sm\:-my-px {
		margin-top: -1px;
		margin-bottom: -1px;
	}

	.sm\:ml-3 {
		margin-left: 0.75rem;
	}

	.sm\:-mr-2 {
		margin-right: -0.5rem;
	}

	.sm\:mt-0 {
		margin-top: 0px;
	}

	.sm\:ml-4 {
		margin-left: 1rem;
	}

	.sm\:ml-10 {
		margin-left: 2.5rem;
	}

	.sm\:ml-6 {
		margin-left: 1.5rem;
	}

	.sm\:mt-1 {
		margin-top: 0.25rem;
	}

	.sm\:ml-0 {
		margin-left: 0px;
	}

	.sm\:mt-5 {
		margin-top: 1.25rem;
	}

	.sm\:mt-6 {
		margin-top: 1.5rem;
	}

	.sm\:block {
		display: block;
	}

	.sm\:flex {
		display: flex;
	}

	.sm\:hidden {
		display: none;
	}

	.sm\:h-10 {
		height: 2.5rem;
	}

	.sm\:h-96 {
		height: 24rem;
	}

	.sm\:h-20 {
		height: 5rem;
	}

	.sm\:h-6 {
		height: 1.5rem;
	}

	.sm\:h-48 {
		height: 12rem;
	}

	.sm\:h-32 {
		height: 8rem;
	}

	.sm\:w-10 {
		width: 2.5rem;
	}

	.sm\:w-full {
		width: 100%;
	}

	.sm\:w-72 {
		width: 18rem;
	}

	.sm\:w-14 {
		width: 3.5rem;
	}

	.sm\:w-6 {
		width: 1.5rem;
	}

	.sm\:w-48 {
		width: 12rem;
	}

	.sm\:max-w-md {
		max-width: 28rem;
	}

	.sm\:max-w-sm {
		max-width: 24rem;
	}

	.sm\:max-w-lg {
		max-width: 32rem;
	}

	.sm\:max-w-xl {
		max-width: 36rem;
	}

	.sm\:max-w-2xl {
		max-width: 42rem;
	}

	.sm\:flex-1 {
		flex: 1 1 0%;
	}

	.sm\:translate-y-0 {
		--tw-translate-y: 0px;
		transform: var(--tw-transform);
	}

	.sm\:translate-x-2 {
		--tw-translate-x: 0.5rem;
		transform: var(--tw-transform);
	}

	.sm\:translate-x-0 {
		--tw-translate-x: 0px;
		transform: var(--tw-transform);
	}

	.sm\:scale-95 {
		--tw-scale-x: .95;
		--tw-scale-y: .95;
		transform: var(--tw-transform);
	}

	.sm\:scale-100 {
		--tw-scale-x: 1;
		--tw-scale-y: 1;
		transform: var(--tw-transform);
	}

	.sm\:grid-cols-2 {
		grid-template-columns: repeat(2, minmax(0, 1fr));
	}

	.sm\:grid-cols-none {
		grid-template-columns: none;
	}

	.sm\:items-start {
		align-items: flex-start;
	}

	.sm\:items-end {
		align-items: flex-end;
	}

	.sm\:items-center {
		align-items: center;
	}

	.sm\:justify-start {
		justify-content: flex-start;
	}

	.sm\:justify-end {
		justify-content: flex-end;
	}

	.sm\:justify-center {
		justify-content: center;
	}

	.sm\:justify-between {
		justify-content: space-between;
	}

	.sm\:gap-x-3 {
		-moz-column-gap: 0.75rem;
		     column-gap: 0.75rem;
	}

	.sm\:gap-y-0 {
		row-gap: 0px;
	}

	.sm\:space-x-4 > :not([hidden]) ~ :not([hidden]) {
		--tw-space-x-reverse: 0;
		margin-right: calc(1rem * var(--tw-space-x-reverse));
		margin-left: calc(1rem * calc(1 - var(--tw-space-x-reverse)));
	}

	.sm\:space-y-0 > :not([hidden]) ~ :not([hidden]) {
		--tw-space-y-reverse: 0;
		margin-top: calc(0px * calc(1 - var(--tw-space-y-reverse)));
		margin-bottom: calc(0px * var(--tw-space-y-reverse));
	}

	.sm\:rounded-lg {
		border-radius: 0.5rem;
	}

	.sm\:rounded-md {
		border-radius: 0.375rem;
	}

	.sm\:rounded-xl {
		border-radius: 0.75rem;
	}

	.sm\:rounded-tl-md {
		border-top-left-radius: 0.375rem;
	}

	.sm\:rounded-tr-md {
		border-top-right-radius: 0.375rem;
	}

	.sm\:rounded-bl-md {
		border-bottom-left-radius: 0.375rem;
	}

	.sm\:rounded-br-md {
		border-bottom-right-radius: 0.375rem;
	}

	.sm\:bg-secondary-100 {
		--tw-bg-opacity: 1;
		background-color: rgba(244, 244, 245, var(--tw-bg-opacity));
	}

	.sm\:p-6 {
		padding: 1.5rem;
	}

	.sm\:p-5 {
		padding: 1.25rem;
	}

	.sm\:p-0 {
		padding: 0px;
	}

	.sm\:p-4 {
		padding: 1rem;
	}

	.sm\:px-6 {
		padding-left: 1.5rem;
		padding-right: 1.5rem;
	}

	.sm\:px-0 {
		padding-left: 0px;
		padding-right: 0px;
	}

	.sm\:px-20 {
		padding-left: 5rem;
		padding-right: 5rem;
	}

	.sm\:px-5 {
		padding-left: 1.25rem;
		padding-right: 1.25rem;
	}

	.sm\:py-2 {
		padding-top: 0.5rem;
		padding-bottom: 0.5rem;
	}

	.sm\:pt-0 {
		padding-top: 0px;
	}

	.sm\:pb-4 {
		padding-bottom: 1rem;
	}

	.sm\:pt-16 {
		padding-top: 4rem;
	}

	.sm\:pt-7 {
		padding-top: 1.75rem;
	}

	.sm\:pt-4 {
		padding-top: 1rem;
	}

	.sm\:text-left {
		text-align: left;
	}

	.sm\:text-right {
		text-align: right;
	}

	.sm\:text-sm {
		font-size: 0.875rem;
		line-height: 1.25rem;
	}

	.sm\:shadow-md {
		--tw-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
		box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
	}

	.dark .sm\:dark\:bg-secondary-800 {
		--tw-bg-opacity: 1;
		background-color: rgba(39, 39, 42, var(--tw-bg-opacity));
	}
}
@media (min-width: 768px) {

	.md\:col-span-2 {
		grid-column: span 2 / span 2;
	}

	.md\:col-span-1 {
		grid-column: span 1 / span 1;
	}

	.md\:mt-0 {
		margin-top: 0px;
	}

	.md\:grid {
		display: grid;
	}

	.md\:grid-cols-3 {
		grid-template-columns: repeat(3, minmax(0, 1fr));
	}

	.md\:grid-cols-2 {
		grid-template-columns: repeat(2, minmax(0, 1fr));
	}

	.md\:gap-6 {
		gap: 1.5rem;
	}

	.md\:border-t-0 {
		border-top-width: 0px;
	}

	.md\:border-l {
		border-left-width: 1px;
	}

	.md\:px-4 {
		padding-left: 1rem;
		padding-right: 1rem;
	}
}
@media (min-width: 1024px) {

	.lg\:col-span-4 {
		grid-column: span 4 / span 4;
	}

	.lg\:px-8 {
		padding-left: 2rem;
		padding-right: 2rem;
	}
}

</style>