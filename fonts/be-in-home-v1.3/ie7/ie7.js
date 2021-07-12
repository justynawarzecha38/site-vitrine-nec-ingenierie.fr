/* To avoid CSS expressions while still supporting IE 7 and IE 6, use this script */
/* The script tag referencing this file must be placed before the ending body tag. */

/* Use conditional comments in order to target IE 7 and older:
	<!--[if lt IE 8]><!-->
	<script src="ie7/ie7.js"></script>
	<!--<![endif]-->
*/

(function() {
	function addIcon(el, entity) {
		var html = el.innerHTML;
		el.innerHTML = '<span style="font-family: \'Be-in-home\'">' + entity + '</span>' + html;
	}
	var icons = {
		'bih-attic': '&#xe900;',
		'bih-baby': '&#xe901;',
		'bih-bathroom': '&#xe902;',
		'bih-bedroom': '&#xe903;',
		'bih-bell': '&#xe904;',
		'bih-box': '&#xe905;',
		'bih-calendar': '&#xe906;',
		'bih-catchphrase': '&#xe907;',
		'bih-cellar': '&#xe908;',
		'bih-constructor-bubble': '&#xe909;',
		'bih-dinning-room': '&#xe90a;',
		'bih-entrance': '&#xe90b;',
		'bih-eyed-bubbles': '&#xe90c;',
		'bih-fan': '&#xe90d;',
		'bih-file': '&#xe90e;',
		'bih-fire-alarm': '&#xe90f;',
		'bih-flame': '&#xe910;',
		'bih-garage': '&#xe911;',
		'bih-garden': '&#xe912;',
		'bih-hi-fi': '&#xe913;',
		'bih-house-cog': '&#xe914;',
		'bih-house-wrench': '&#xe915;',
		'bih-key-house': '&#xe916;',
		'bih-home': '&#xe917;',
		'bih-homes': '&#xe918;',
		'bih-cog': '&#xe919;',
		'bih-contrariwise-arrows': '&#xe91a;',
		'bih-fireplace': '&#xe91b;',
		'bih-firewood': '&#xe91c;',
		'bih-fuel-oil': '&#xe91d;',
		'bih-kitchen': '&#xe91e;',
		'bih-lightbulb': '&#xe91f;',
		'bih-living-room': '&#xe920;',
		'bih-loft': '&#xe921;',
		'bih-logo': '&#xe922;',
		'bih-office': '&#xe923;',
		'bih-picture': '&#xe924;',
		'bih-pictures-and-documents': '&#xe925;',
		'bih-plug': '&#xe926;',
		'bih-plug-inverse': '&#xe927;',
		'bih-recycle': '&#xe928;',
		'bih-shower-room': '&#xe929;',
		'bih-snowflake': '&#xe92a;',
		'bih-tachometer-inverse': '&#xe92b;',
		'bih-thermometer': '&#xe92c;',
		'bih-trash-can': '&#xe92d;',
		'bih-water-closet': '&#xe92e;',
		'bih-water-drop': '&#xe92f;',
		'bih-wifi': '&#xe930;',
		'bih-worker-wrench': '&#xe931;',
		'bih-wrench': '&#xe932;',
		'bih-builder': '&#xe933;',
		'bih-box-opaque': '&#xe934;',
		'bih-photovoltaic-panel': '&#xe935;',
		'bih-owner': '&#xe936;',
		'bih-tenant': '&#xe937;',
		'bih-tap': '&#xe938;',
		'bih-washer': '&#xe939;',
		'bih-mezzanine': '&#xe93a;',
		'bih-corridor': '&#xe93b;',
		'bih-dressing': '&#xe93c;',
		'bih-living-room-kitchen': '&#xe93d;',
		'bih-storeroom': '&#xe93e;',
		'bih-hot-water': '&#xe93f;',
		'bih-sewerage-treatment': '&#xe940;',
		'bih-water-treatment': '&#xe941;',
		'bih-outside': '&#xe942;',
		'bih-circle': '&#xe943;',
		'bih-circle-inprogress': '&#xe944;',
		'bih-clock': '&#xe945;',
		'bih-inprogress': '&#xe946;',
		'bih-clock-hands': '&#xe947;',
		'0': 0
		},
		els = document.getElementsByTagName('*'),
		i, c, el;
	for (i = 0; ; i += 1) {
		el = els[i];
		if(!el) {
			break;
		}
		c = el.className;
		c = c.match(/bih-[^\s'"]+/);
		if (c && icons[c[0]]) {
			addIcon(el, icons[c[0]]);
		}
	}
}());
